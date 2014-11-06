<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class AdvertController extends Controller
{
    public function indexAction()
    {
       //$content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
        
       $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
        
       return new Response($content) ;
     

    }
}