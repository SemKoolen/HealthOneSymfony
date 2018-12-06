<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PatientsController extends Controller
{
    /**
     * @Route("/admin/patients", name="patients")
     */

    public function showAction() {

        $patients = $this->getDoctrine()
            ->getRepository(patient::class)
            ->findAll();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('admin/patients.html.twig',
            ['user' => $user,
             'patients' => $patients
            ]);
    }
}
