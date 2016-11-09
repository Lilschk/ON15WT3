<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // guestbook_idex
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::guestbookhpAction',  '_route' => 'guestbook_idex',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // guestbook_logged
            if ($pathinfo === '/loggedin') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loggedinAction',  '_route' => 'guestbook_logged',);
            }

        }

        // task_success
        if ($pathinfo === '/task_success') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sucsessAction',  '_route' => 'task_success',);
        }

        if (0 === strpos($pathinfo, '/beispiel')) {
            // beispiel
            if ($pathinfo === '/beispiel') {
                return array (  '_controller' => 'WebTechBundle:Beispiel:beispiel',  '_route' => 'beispiel',);
            }

            // beispiel_template
            if ($pathinfo === '/beispiel/template') {
                return array (  '_controller' => 'WebTechBundle:Beispiel:beispielTemplate',  '_route' => 'beispiel_template',);
            }

        }

        if (0 === strpos($pathinfo, '/luckynumber')) {
            // luckynumer
            if ($pathinfo === '/luckynumber') {
                return array (  '_controller' => 'WebTechBundle:Aufgabe1:luckyNumber',  '_route' => 'luckynumer',);
            }

            // name
            if (preg_match('#^/luckynumber/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'name')), array (  '_controller' => 'WebTechBundle:Aufgabe1:luckyNumber',));
            }

        }

        // twigtest
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'twigtest')), array (  '_controller' => 'WebTechBundle:Aufgabe1:test',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
