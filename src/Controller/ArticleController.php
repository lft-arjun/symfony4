<?php

namespace App\Controller;

//use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    
    /**
     * @Route("/")
     *
     **/
    public function homepage()
    {
        return new Response('OMG! My first page already! Wooo!');
    }
    
    /**
     * @Route("/news/{slug}")
     * 
     **/
    public function show($slug)
    {
       return $this->render('article/show.html.twig', ['title' => $slug]);
    }
}