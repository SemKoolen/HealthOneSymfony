<?php
/**
 * Created by PhpStorm.
 * User: Sem
 * Date: 28-11-2018
 * Time: 14:56
 */
namespace AppBundle\Handler;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var RouterInterface $router
     */
    protected $router;
    /**
     * @var AuthorizationCheckerInterface $authorizationchecker
     */
    protected $authorizationChecker;
    public function __construct(RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($this->authorizationChecker->isGranted('ROLE_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('patients'));
        }
        elseif ($this->authorizationChecker->isGranted('ROLE_APOTHEKER'))
        {
            $response = new RedirectResponse($this->router->generate('medicines'));
        }
        elseif ($this->authorizationChecker->isGranted('ROLE_ARTS'))
        {
            $response = new RedirectResponse($this->router->generate('patients'));
        }
        elseif ($this->authorizationChecker->isGranted('ROLE_VERZEKERINGSMEDEWERKER'))
        {
            $response = new RedirectResponse($this->router->generate('patients'));
        }
        else {
            $response = new RedirectResponse($this->router->generate('homepage'));
        }
        return $response;
    }
}