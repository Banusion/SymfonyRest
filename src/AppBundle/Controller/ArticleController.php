<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializationContext;

class ArticleController extends Controller
{
    /**
     * @Route("/articles/{id}", name="article_show")
     * @Method({"GET"})
     */
    public function showArticleAction(Article $article)
    {
      
        $data = $this->get('jms_serializer')->serialize($article, 'json',SerializationContext::create()->setGroups(array('detail')));
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
	
	/**
     * @Route("/articles", name="articles_show")
     * @Method({"GET"})
     */
    public function listAction()
    {
      	$articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();
        $data = $this->get('jms_serializer')->serialize($articles, 'json',SerializationContext::create()->setGroups(array('list')));
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
    /** 
     * @Route("/articles", name="article_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {
    	$data = $request->getContent();
    	$article = $this->get('jms_serializer')->deserialize($data,'AppBundle\Entity\Article','json');
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($article);
    	$em->flush();

    	return new Response('', Response::HTTP_CREATED);	
    }
}