<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class PromotionController extends AbstractController
{
    #[Route('/promotions', name: 'admin_home', methods: ['GET'])]
    public function index() : Response
    {
        return $this->render('admin/promotion/index.html.twig');
    }
}