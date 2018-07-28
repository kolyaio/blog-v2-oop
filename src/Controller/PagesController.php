<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller{
    public function index(){
        return $this->render('home/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
