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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // admin_auth
                if ($pathinfo === '/admin/auth') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAuthAction',  '_route' => 'admin_auth',);
                }

                // get_articles
                if ($pathinfo === '/admin/articles') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getArticlesAction',  '_route' => 'get_articles',);
                }

            }

            // logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
