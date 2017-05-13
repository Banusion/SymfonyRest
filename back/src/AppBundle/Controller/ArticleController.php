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
use Nelmio\ApiDocBundle\Annotation as Doc;

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
     * @Doc\ApiDoc(
     *     section="Articles",
     *     resource=true,
     *     description="Get the list of all articles."
     * )
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
     * @Doc\ApiDoc(
     *     section="Articles",
     *     resource=true,
     *     description="Get one article.",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The article unique identifier."
     *         }
     *     }
     * )
     */
    public function showArticleAction(Article $article)
    {
        return $article;
    }
	
    /** 
     * @Rest\Post("/articles")
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("article", converter="fos_rest.request_body")
     * @Doc\ApiDoc(
     *     section="Articles",
     *     resource=true,
     *     description="Post an article.",
     *     requirements={
     *         {
     *             "name"="title",
     *             "dataType"="string",
     *             "requirements"="\d+",
     *             "description"="The article title."
     *         },
     *         {
     *             "name"="content",
     *             "dataType"="string",
     *             "requirements"="\d+",
     *             "description"="The article content."
     *         }
     *     },
     *     statusCodes={
     *         201="Returned when created",
     *         400="Returned when a violation is raised by validation"
     *     }
     * )
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
     * @Doc\ApiDoc(
     *     section="Articles",
     *     resource=true,
     *     description="Put one article.",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The article unique identifier."
     *         },
     *         {
     *             "name"="title",
     *             "dataType"="string",
     *             "description"="The article title."
     *         },
     *         {
     *             "name"="content",
     *             "dataType"="string",
     *             "description"="The article content."
     *         }
     *     }
     * )
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