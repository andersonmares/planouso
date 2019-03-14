<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 19/01/2018
 * Time: 20:57
 */

namespace AppBundle\Security;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
    private $em;
    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router, EntityManagerInterface $em)
    {
        $this->router = $router;
        $this->em = $em;
    }
    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $token->getUser()->setDtUltimoAcesso(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
        $token->getUser()->setDsIpUltimoAcesso($request->getClientIp());
        $this->em->persist($token->getUser());
        $this->em->flush();
        // Pega a lista de roles do usuário
        $roles = $token->getRoles();
        // Transforma a lista de role em array
        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);

        // If is a admin or super admin we redirect to the backoffice area
        /*if (in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_CGPO', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('admin'));
        // otherwise, if is a commercial user we redirect to the crm area
        elseif (in_array('ROLE_CGPO', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('/'));
        // otherwise we redirect user to the member area
        else
            $redirection = new RedirectResponse($this->router->generate('/'));
*/
        
        $redirection = new RedirectResponse($this->router->generate('perfil'));
        return $redirection;
    }
}