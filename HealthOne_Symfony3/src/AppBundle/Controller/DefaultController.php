<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Login;
use AppBundle\Forms\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */

    public function showAction(Request $request, AuthenticationUtils $authenticationUtils) {
        $session = new Session();
//        $session->start();
        $session->set('page', 'homepage');
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
        $script = 'off()';
        return $this->render('default/home.html.twig',
            ['LoginForm' => $form->createView(),
                'script' => $script ]);
    }

    /**
     * @Route("/login", name="login")
     */

    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils) {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $username = $form->getData('username');
            switch ($gebruiker){
                case 'Verzekeringsmedewerker': return $this->redirectToRoute('patients'); break;
                case 'Arts': return $this->redirectToRoute('patients'); break;
                case 'Apotheker': return $this->redirectToRoute('patients'); break;
            }
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();


        $script = 'on()';
        return $this->render( 'default/home.html.twig',
            ['LoginForm' => $form->createView(),
             'script' => $script,
             'last_username' => $lastUsername,
             'error'         => $error,
            ]);
    }



    /**
     * @Route("/contact", name="contactpage")
     */

    public function showContact() {
        return $this->render('default/contact.html.twig');
    }

}
