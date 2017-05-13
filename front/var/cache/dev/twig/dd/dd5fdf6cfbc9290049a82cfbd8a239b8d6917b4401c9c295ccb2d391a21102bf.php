<?php

/* default/articles.html.twig */
class __TwigTemplate_091865cad7c4b3501cd58b2ebeec7efc568bab46f8c42735f1a57cb73195ff9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfd9ae5970fa796cd1f9bee28658a3298b9cbd2309f59cd9824408cd95cad0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd9ae5970fa796cd1f9bee28658a3298b9cbd2309f59cd9824408cd95cad0dc->enter($__internal_cfd9ae5970fa796cd1f9bee28658a3298b9cbd2309f59cd9824408cd95cad0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        $__internal_e0e6f85b3072a60bdd41b7e511a873fbd3e6d00525b3811b8153d8c64438718e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e6f85b3072a60bdd41b7e511a873fbd3e6d00525b3811b8153d8c64438718e->enter($__internal_e0e6f85b3072a60bdd41b7e511a873fbd3e6d00525b3811b8153d8c64438718e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 1, $this->getSourceContext()); })()));
        
        $__internal_cfd9ae5970fa796cd1f9bee28658a3298b9cbd2309f59cd9824408cd95cad0dc->leave($__internal_cfd9ae5970fa796cd1f9bee28658a3298b9cbd2309f59cd9824408cd95cad0dc_prof);

        
        $__internal_e0e6f85b3072a60bdd41b7e511a873fbd3e6d00525b3811b8153d8c64438718e->leave($__internal_e0e6f85b3072a60bdd41b7e511a873fbd3e6d00525b3811b8153d8c64438718e_prof);

    }

    public function getTemplateName()
    {
        return "default/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ dump(articles) }}", "default/articles.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/app/Resources/views/default/articles.html.twig");
    }
}
