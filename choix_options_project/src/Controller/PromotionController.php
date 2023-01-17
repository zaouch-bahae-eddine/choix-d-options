<?php

namespace App\Controller;

use App\Entity\Bloc;
use App\Entity\Promotion;
use App\Entity\Student;
use App\Entity\Ue;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use App\Repository\StudentRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\length;

#[Route('/admin/promotion')]
class PromotionController extends AbstractController
{
    #[Route('/', name: 'app_promotion_index', methods: ['GET', 'POST'])]
    public function index(Request $request, PromotionRepository $promotionRepository, EntityManagerInterface $em): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotionStudents = $request->request->get('promotion-student');
            $promotionRepository->save($promotion, false);

            //Si l'admin ne veut pas importer des etudiants d'une année passé
            if($promotionStudents){
                foreach ($promotionRepository->findOneBy(['id' => $promotionStudents])->getStudents() as $student){
                    $newStudent = (new Student())->setPromotion($promotion)
                        ->setUser($student->getUser())
                        ->setActive((intval(date("Y")) == $promotion->getDatePromotion()));
                    $em->persist($newStudent);
                }
            }
            $this->refreshActivePromotion($em, $promotionRepository);
            $em->flush();

            return $this->redirectToRoute('app_promotion_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
            'promotion' => $promotion,
            'form' => $form,
            'formEdit' => $form
        ]);
    }

    private function refreshActivePromotion(EntityManagerInterface $em, PromotionRepository $promotionRepository){
        //Actualiser la listes des promotion active
        $promotions = $promotionRepository->findAll();
        foreach ($promotions as $p){
            foreach ($p->getStudents() as $s){
                $s->setActive(
                    (
                        intval(date("Y")) == $p->getDatePromotion() ||
                        intval(date("Y")) == ($p->getDatePromotion() + 1)
                    )
                );
                $em->persist($s);
            }
        }
    }

    #[Route('/{id}/edit', name: 'app_promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promotion $promotion,
                         PromotionRepository $promotionRepository, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotionRepository->save($promotion, true);
            if(
                intval(date("Y")) == $promotion->getDatePromotion() ||
                intval(date("Y")) == ($promotion->getDatePromotion() + 1)
            ){
                /**
                 * @var Student $student
                 */
                foreach ($promotion->getStudents() as $student){
                    $student->setActive(true);
                    $em->persist($student);
                }
            } else {
                foreach ($promotion->getStudents() as $student){
                    $student->setActive(false);
                    $em->persist($student);
                }
            }
            $em->flush();

            return $this->redirectToRoute('app_promotion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('promotion/edit.html.twig', [
            'promotion' => $promotion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_promotion_delete', methods: ['POST'])]
    public function delete(Request $request, Promotion $promotion, PromotionRepository $promotionRepository,
                           StudentRepository $studentRepository, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$promotion->getId(), $request->request->get('_token'))) {
            /**
             * @var Student $student
             */
            foreach ($promotion->getStudents() as $student){
                if(count($studentRepository->findBy(['user' => $student->getUser()])) == 1) {
                    $userRepository->remove($student->getUser(), true);
                }
            }
            $promotionRepository->remove($promotion, true);

        }

        return $this->redirectToRoute('app_promotion_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{promotion}/asdsdsd', name: 'export_data_excel_format')]
    public function exportExcel(Promotion $promotion, PromotionRepository $promotionRepository){
        $spreadsheet = new Spreadsheet();
        $firstBloc = true;
        $activeSheet = null;
        /**
         * @var Bloc $bloc
         */
        foreach ($promotion->getParcour()->getBlocs() as $bloc){
            if($firstBloc){
                $activeSheet = $spreadsheet->getActiveSheet();
            } else {
                $activeSheet = new Worksheet($spreadsheet, $bloc->getName());
                $spreadsheet->addSheet($activeSheet);
            }
            /**
             * @var Ue $ue
             */
            foreach ($bloc->getUes() as $ue){
                foreach ($ue->getChoices() as $choice){

                }
            }
        }
        return $this->redirectToRoute('app_promotion_index', [], Response::HTTP_SEE_OTHER);
    }
}
