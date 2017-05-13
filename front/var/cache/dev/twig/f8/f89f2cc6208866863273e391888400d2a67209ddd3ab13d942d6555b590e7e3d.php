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
        $__internal_49aec26a0f924ec7576705173c6403e9a4d883ce0155b2fc289525e933395c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49aec26a0f924ec7576705173c6403e9a4d883ce0155b2fc289525e933395c17->enter($__internal_49aec26a0f924ec7576705173c6403e9a4d883ce0155b2fc289525e933395c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_35aa1684a7cb5f850576fe9458fa5e295744bd88696f06fa4ecd83728a1ead5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aa1684a7cb5f850576fe9458fa5e295744bd88696f06fa4ecd83728a1ead5f->enter($__internal_35aa1684a7cb5f850576fe9458fa5e295744bd88696f06fa4ecd83728a1ead5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49aec26a0f924ec7576705173c6403e9a4d883ce0155b2fc289525e933395c17->leave($__internal_49aec26a0f924ec7576705173c6403e9a4d883ce0155b2fc289525e933395c17_prof);

        
        $__internal_35aa1684a7cb5f850576fe9458fa5e295744bd88696f06fa4ecd83728a1ead5f->leave($__internal_35aa1684a7cb5f850576fe9458fa5e295744bd88696f06fa4ecd83728a1ead5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5413fdcc594616a55c5b640104067614f07fdeb784616574260994cfda87174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5413fdcc594616a55c5b640104067614f07fdeb784616574260994cfda87174->enter($__internal_f5413fdcc594616a55c5b640104067614f07fdeb784616574260994cfda87174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1beeec07dc9a5c4f24fac3401f839325d112645b4860739da1dea64b6b0f4875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beeec07dc9a5c4f24fac3401f839325d112645b4860739da1dea64b6b0f4875->enter($__internal_1beeec07dc9a5c4f24fac3401f839325d112645b4860739da1dea64b6b0f4875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Frontend app - Welcome !</h1>
";
        
        $__internal_1beeec07dc9a5c4f24fac3401f839325d112645b4860739da1dea64b6b0f4875->leave($__internal_1beeec07dc9a5c4f24fac3401f839325d112645b4860739da1dea64b6b0f4875_prof);

        
        $__internal_f5413fdcc594616a55c5b640104067614f07fdeb784616574260994cfda87174->leave($__internal_f5413fdcc594616a55c5b640104067614f07fdeb784616574260994cfda87174_prof);

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
