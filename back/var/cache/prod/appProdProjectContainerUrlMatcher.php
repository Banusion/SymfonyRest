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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/articles')) {
                // app_article_list
                if ($pathinfo === '/articles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_article_list;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::listAction',  '_route' => 'app_article_list',);
                }
                not_app_article_list:

                // app_article_show
                if (preg_match('#^/articles/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_article_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_article_show')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::showArticleAction',));
                }
                not_app_article_show:

                // app_article_create
                if ($pathinfo === '/articles') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_article_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::createAction',  '_route' => 'app_article_create',);
                }
                not_app_article_create:

                // app_article_update
                if (preg_match('#^/articles/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_article_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_article_update')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::updateAction',));
                }
                not_app_article_update:

            }

            if (0 === strpos($pathinfo, '/authors')) {
                // app_author_show
                if (preg_match('#^/authors/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_author_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_author_show')), array (  '_controller' => 'AppBundle\\Controller\\AuthorController::showAction',));
                }
                not_app_author_show:

                // app_author_create
                if ($pathinfo === '/authors') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_author_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AuthorController::createAction',  '_route' => 'app_author_create',);
                }
                not_app_author_create:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
