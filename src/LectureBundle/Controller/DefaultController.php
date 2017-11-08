<?php

namespace LectureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LectureBundle:Default:index.html.twig');
    }
}
