<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PatientsController extends Controller
{
    /**
     * @Route("/admin/patients", name="patients")
     */

    public function showAction() {
        return $this->render('admin/patients.html.twig');
    }
}