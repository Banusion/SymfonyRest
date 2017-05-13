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
        $__internal_d1063f9bac86ccb2fdfa720a8dc6c789aeef245ba29b00edf6e08067da58f113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1063f9bac86ccb2fdfa720a8dc6c789aeef245ba29b00edf6e08067da58f113->enter($__internal_d1063f9bac86ccb2fdfa720a8dc6c789aeef245ba29b00edf6e08067da58f113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        $__internal_2bf5e20ce6aba7c4ff33bb734efcbe1d9288892949e68723a3cebeba910c6af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf5e20ce6aba7c4ff33bb734efcbe1d9288892949e68723a3cebeba910c6af5->enter($__internal_2bf5e20ce6aba7c4ff33bb734efcbe1d9288892949e68723a3cebeba910c6af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/articles.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 1, $this->getSourceContext()); })()));
        
        $__internal_d1063f9bac86ccb2fdfa720a8dc6c789aeef245ba29b00edf6e08067da58f113->leave($__internal_d1063f9bac86ccb2fdfa720a8dc6c789aeef245ba29b00edf6e08067da58f113_prof);

        
        $__internal_2bf5e20ce6aba7c4ff33bb734efcbe1d9288892949e68723a3cebeba910c6af5->leave($__internal_2bf5e20ce6aba7c4ff33bb734efcbe1d9288892949e68723a3cebeba910c6af5_prof);

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
