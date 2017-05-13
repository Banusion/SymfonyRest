<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3f7e2371867f303e0273877a6716689da817384136de35ef446a9deb740c45cf extends Twig_Template
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
        $__internal_21c22fc12d85f5cea11a1772ed506ceb4bfdcbf06190b597f42cd8fdfeb6bc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c22fc12d85f5cea11a1772ed506ceb4bfdcbf06190b597f42cd8fdfeb6bc45->enter($__internal_21c22fc12d85f5cea11a1772ed506ceb4bfdcbf06190b597f42cd8fdfeb6bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ccd41b0c951a6bef3cd5dcb3e3c3258ab71ee375728218cf44196a630357bbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd41b0c951a6bef3cd5dcb3e3c3258ab71ee375728218cf44196a630357bbda->enter($__internal_ccd41b0c951a6bef3cd5dcb3e3c3258ab71ee375728218cf44196a630357bbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_21c22fc12d85f5cea11a1772ed506ceb4bfdcbf06190b597f42cd8fdfeb6bc45->leave($__internal_21c22fc12d85f5cea11a1772ed506ceb4bfdcbf06190b597f42cd8fdfeb6bc45_prof);

        
        $__internal_ccd41b0c951a6bef3cd5dcb3e3c3258ab71ee375728218cf44196a630357bbda->leave($__internal_ccd41b0c951a6bef3cd5dcb3e3c3258ab71ee375728218cf44196a630357bbda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
