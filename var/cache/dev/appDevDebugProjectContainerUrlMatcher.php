<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
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

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // guestbook_logged
            if ($pathinfo === '/login/loggedin') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loggedinAction',  '_route' => 'guestbook_logged',);
            }

            // guestbook_einträgezeigen
            if ($pathinfo === '/login/showpost') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showAction',  '_route' => 'guestbook_einträgezeigen',);
            }

        }

        // task_success
        if (0 === strpos($pathinfo, '/task_success') && preg_match('#^/task_success/(?P<Name>[^/]++)/(?P<Mail>[^/]++)/(?P<Nachricht>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_success')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sucsessAction',));
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