<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Controller\RepositoryController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Validator\ConstraintViolationList;
use AppBundle\Exception\ResourceValidationException;
use Hateoas\Representation\CollectionRepresentation;
use Hateoas\Representation\PaginatedRepresentation;

class ArticleController extends FOSRestController
{
     /**
     * @Rest\Get(
     *      path = "/articles",
     *      name="app_article_list"
     * )
     * @Rest\QueryParam(
     *     name="keyword",
     *     nullable=true,
     *     description="The keyword to search for."
     * )
     * @Rest\QueryParam(
     *     name="limit",
     *     requirements="\d+",
     *     default="15",
     *     description="Max number of movies per page."
     * )
     * @Rest\QueryParam(
     *     name="page",
     *     requirements="\d+",
     *     default="0",
     *     description="The pagination offset"
     * )
     * @Rest\View()
     */
    public function listAction(ParamFetcherInterface $paramFetcher)
    {
        /*$pager = $this->getDoctrine()->getRepository('AppBundle:Article')->search(
            $paramFetcher->get('keyword'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );*/
        $pager = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();
        $collection = new CollectionRepresentation(
            $pager
        );
        $paginated = new PaginatedRepresentation(
            $collection,
            'app_article_list',
            array(),
            $paramFetcher->get('page'),
            $paramFetcher->get('limit'),
            count($pager)/$paramFetcher->get('limit'),
            'page',   # page route parameter name, optional, defaults to 'page'
            'limit',  # limit route parameter name, optional, defaults to 'limit'
            true,     # absolute URIs
            count($pager)        # total number of rows
        );

        return $paginated;
    }
    
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
     * @Rest\Post("/articles")
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("article", converter="fos_rest.request_body")
     */
    public function createAction(Article $article, ConstraintViolationList $violations)
    {

        if (count($violations)) {
            $message = 'The JSON sent contains invalid data. Here are the errors you need to correct: ';
            foreach ($violations as $violation) {
                $message .= sprintf("Field %s: %s ", $violation->getPropertyPath(), $violation->getMessage());
            }

            throw new ResourceValidationException($message);
        }
    	$em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return $article;
    }
    /** 
     * @Rest\Put(
     *     path = "/articles/{id}",
     *     name = "app_article_update",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View(StatusCode = 200)
     * @ParamConverter("article", converter="fos_rest.request_body")
     */
    public function updateAction(Article $article, ConstraintViolationList $violations)
    {

        if (count($violations)) {
            $message = 'The JSON sent contains invalid data. Here are the errors you need to correct: ';
            foreach ($violations as $violation) {
                $message .= sprintf("Field %s: %s ", $violation->getPropertyPath(), $violation->getMessage());
            }

            throw new ResourceValidationException($message);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return $article;
    }
}