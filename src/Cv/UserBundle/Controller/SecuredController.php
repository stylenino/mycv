<?php

namespace Cv\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/user")
 */
class SecuredController extends Controller
{
    /**
     * @Route("/login", name="_user_login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
      if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
      } else {
        $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
      }

      return array(
        'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
        'error'         => $error,
      );
    }

    /**
     * @Route("/login_check", name="_user_security_check")
     * @Template()
     */
    public function securityCheckAction()
    {
    }

    /**
     * @Route("/logout", name="_user_logout")
     * @Template()
     */
    public function logoutAction()
    {
    }

}
