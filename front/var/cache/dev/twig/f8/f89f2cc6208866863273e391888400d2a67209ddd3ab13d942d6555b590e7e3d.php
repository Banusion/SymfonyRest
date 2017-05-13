<?php

/* default/index.html.twig */
class __TwigTemplate_2ea2516e374e6deda3f2ab69128fa660974d8386074e6906f79ffee0c5a4af12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8f9ab435bc81d2fe927c72f60341f90219ec1325bcf8585cff7beb6d0893802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f9ab435bc81d2fe927c72f60341f90219ec1325bcf8585cff7beb6d0893802->enter($__internal_b8f9ab435bc81d2fe927c72f60341f90219ec1325bcf8585cff7beb6d0893802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_63ef293c9a6d01fa2dc033825f76f6cea6e722114b5769107abf8b727ce31a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ef293c9a6d01fa2dc033825f76f6cea6e722114b5769107abf8b727ce31a5b->enter($__internal_63ef293c9a6d01fa2dc033825f76f6cea6e722114b5769107abf8b727ce31a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f9ab435bc81d2fe927c72f60341f90219ec1325bcf8585cff7beb6d0893802->leave($__internal_b8f9ab435bc81d2fe927c72f60341f90219ec1325bcf8585cff7beb6d0893802_prof);

        
        $__internal_63ef293c9a6d01fa2dc033825f76f6cea6e722114b5769107abf8b727ce31a5b->leave($__internal_63ef293c9a6d01fa2dc033825f76f6cea6e722114b5769107abf8b727ce31a5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfd985dec008666bf0a5298ad8bb5cdb16af191b5d9b92ec9771d3e64cc7a3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd985dec008666bf0a5298ad8bb5cdb16af191b5d9b92ec9771d3e64cc7a3fa->enter($__internal_dfd985dec008666bf0a5298ad8bb5cdb16af191b5d9b92ec9771d3e64cc7a3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ace54cad2361f6b4f5c11bea9d209161383f087affb4d9d11e21e20a98d4df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ace54cad2361f6b4f5c11bea9d209161383f087affb4d9d11e21e20a98d4df8->enter($__internal_4ace54cad2361f6b4f5c11bea9d209161383f087affb4d9d11e21e20a98d4df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Frontend app - Welcome !</h1>
";
        
        $__internal_4ace54cad2361f6b4f5c11bea9d209161383f087affb4d9d11e21e20a98d4df8->leave($__internal_4ace54cad2361f6b4f5c11bea9d209161383f087affb4d9d11e21e20a98d4df8_prof);

        
        $__internal_dfd985dec008666bf0a5298ad8bb5cdb16af191b5d9b92ec9771d3e64cc7a3fa->leave($__internal_dfd985dec008666bf0a5298ad8bb5cdb16af191b5d9b92ec9771d3e64cc7a3fa_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Frontend app - Welcome !</h1>
{% endblock %}", "default/index.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/app/Resources/views/default/index.html.twig");
    }
}
