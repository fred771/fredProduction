<?php

namespace Twig\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TwigTwigBundle:Default:index.html.twig', array('name' => $name));
    }
}
