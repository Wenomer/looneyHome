<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Framework;

class DefaultController extends Controller
{
    /**
     * @Framework\Route("/")
     * @Framework\Template
     */
    public function indexAction()
    {
        return [];
    }
}
