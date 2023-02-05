<?php

namespace App\Controller;

use App\Entity\OptionBloc;
use App\Entity\Parcour;
use App\Entity\SkillBloc;
use App\Entity\Student;
use App\Entity\User;
use App\Form\ParcourType;
use App\Repository\ParcourRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
#[Route('/admin/parcour')]
class ParcourController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct( EntityManagerInterface $entityManager)
    {

        $this->em = $entityManager;
    }
    #[Route('/', name: 'app_parcour_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ParcourRepository $parcourRepository): Response
    {
        $parcour = new Parcour();
        $form = $this->createForm(ParcourType::class, $parcour);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $parcourRepository->save($parcour, true);

            return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('parcour/index.html.twig', [
            'parcours' => $parcourRepository->findAll(),
            'parcour' => $parcour,
            'form' => $form,
            'formEdit' => $form,
        ]);
    }

    #[Route('/new', name: 'app_parcour_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParcourRepository $parcourRepository): Response
    {
        $parcour = new Parcour();
        $form = $this->createForm(ParcourType::class, $parcour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $parcourRepository->save($parcour, true);

            return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('parcour/new.html.twig', [
            'parcour' => $parcour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_parcour_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Parcour $parcour, ParcourRepository $parcourRepository): Response
    {
        $form = $this->createForm(ParcourType::class, $parcour);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $parcourRepository->save($parcour, true);

            return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('parcour/edit.html.twig', [
            'parcour' => $parcour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_parcour_delete', methods: ['POST'])]
    public function delete(Request $request, Parcour $parcour, ParcourRepository $parcourRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$parcour->getId(), $request->request->get('_token'))) {
            $parcourRepository->remove($parcour, true);
        }

        return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
    }

    private function getData(Parcour $parcour, StudentRepository $studentRepository): array
    {
        /**
         * @var $students Student[]
         */
        $list = [];
        $students = $studentRepository->findBy(['parcour' => $parcour->getId()]);
        /**
         * @var SkillBloc $skillBloc
         * @var OptionBloc $optionBloc
         * @var SkillBloc $optionBloc
         * @var Student $student
         */
        $skillBlocHeader[] = 'Etudiant';
        $optionBlocHeader[] = '';
        $uesName[] = '';
        $uesChosed['0'] = 'Etudiant Name';
        foreach ($parcour->getSkillBlocs() as $skillBloc){
            foreach ($skillBloc->getUes() as $ueObligatory){
                $skillBlocHeader[] = $skillBloc->getName();
                $optionBlocHeader[] = 'UE Obligatoire';
                $uesName[] = $ueObligatory->getName();
                $uesChosed[$ueObligatory->getId()] = 'o';
            }
            foreach ($skillBloc->getOptionBlocs() as $optionBloc){
                foreach ($optionBloc->getUes() as $ueOptional){
                    $skillBlocHeader[] = $skillBloc->getName();
                    $optionBlocHeader[] = $optionBloc->getName();
                    $uesName[] = $ueOptional->getName();
                    $uesChosed[$ueOptional->getId()] = 'o';
                }
            }
        }
        $result = [
            $skillBlocHeader,
            $optionBlocHeader,
            $uesName,
        ];
        $i = 0;
        foreach ($students as $student) {
            $uesChosed['0'] =  $student->getUser()->getLastName().' '.$student->getUser()->getFirstName();
            $studentUeChosed = $uesChosed;
            foreach ($student->getPursue() as $ueChosed){
                $studentUeChosed[$ueChosed->getId()] = 'X';
                $result[] = $studentUeChosed;
            }
            $i++;
        }

        return $result;
    }

    #[Route('/{parcour}/export', name: 'export_parcour', methods: ['GET'])]
    public function export(Parcour $parcour, StudentRepository $studentRepository)
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle($parcour->getYear()->getName().'-'.$parcour->getName());


        // Increase row cursor after header write
        $sheet->fromArray($this->getData($parcour, $studentRepository),null, 'A1', true);
        $filename = $parcour->getYear()->getName().'-'.$parcour->getName().'.xlsx';

        $contentType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
        $writer = new Xlsx($spreadsheet);

        $response = new StreamedResponse();
        $response->headers->set('Content-Type', $contentType);
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename.'"');
        $response->setPrivate();
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->setCallback(function() use ($writer) {
            $writer->save('php://output');
        });

        return $response;
    }
}
