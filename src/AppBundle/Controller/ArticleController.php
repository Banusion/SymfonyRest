<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ArticleController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/articles/{id}",
     *     name = "app_article_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View()
     */
    public function showArticleAction(Article $article)
    {
        return $article;
    }
	
	/**
     * @Rest\Get("/articles")
     * @Rest\View()
     */
    public function listAction()
    {
      	$articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();

        return $articles;
    }
    
    /** 
     * @Rest\Post("/articles")
     * @Rest\View()
     * @ParamConverter("article", converter="fos_rest.request_body")
     */
    public function createAction(Article $article)
    {
    	$em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return $article;
    }
}