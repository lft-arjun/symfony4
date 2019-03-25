<?php

namespace App\Controller;

//use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
     * @Route("/news/taste")
     * 
     **/
    public function show()
    {
        return new Response("New article");
    }
}