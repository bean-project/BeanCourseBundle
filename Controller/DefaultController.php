<?php

namespace Bean\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BeanCourseBundle:Default:index.html.twig');
    }
}
