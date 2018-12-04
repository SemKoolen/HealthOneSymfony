<?php

namespace AppBundle\Controller;


use AppBundle\Forms\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepagelogin")
     */

    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils) {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $gebruiker = $form->getData('gebruiker');
            switch ($gebruiker){
                case 'Verzekeringsmedewerker': return $this->redirectToRoute('patients'); break;
                case 'Arts': return $this->redirectToRoute('patients'); break;
                case 'Apotheker': return $this->redirectToRoute('patients'); break;
            }
        }
        $script = 'on()';
        return $this->render('default/home.html.twig',
            ['LoginForm' => $form->createView()]);

    }



    /**
     * @Route("/", name="homepage")
     */

    public function showAction(Request $request, AuthenticationUtils $authenticationUtils) {
        $form = $this->createForm(LoginType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $gebruiker = $form->getData('gebruiker');
            switch ($gebruiker){
                case 'Verzekeringsmedewerker': return $this->redirectToRoute('patients'); break;
                case 'Arts': return $this->redirectToRoute('patients'); break;
                case 'Apotheker': return $this->redirectToRoute('patients'); break;
            }
        }
        return $this->render('default/home.html.twig',
            ['LoginForm' => $form->createView()]);
    }



    /**
     * @Route("/contact", name="contactpage")
     */

    public function showContact() {
        return $this->render('default/contact.html.twig');
    }

}
