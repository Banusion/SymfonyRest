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
        $__internal_f622e3b0ee1ba9494d1a1ceea5d9d24e64ea76ac8a44721ef771bde3f8c10bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f622e3b0ee1ba9494d1a1ceea5d9d24e64ea76ac8a44721ef771bde3f8c10bdb->enter($__internal_f622e3b0ee1ba9494d1a1ceea5d9d24e64ea76ac8a44721ef771bde3f8c10bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_03fe784e6e9b718bc4fd964a911f91d036ab3a7a480737c55445f21e6d4e8ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fe784e6e9b718bc4fd964a911f91d036ab3a7a480737c55445f21e6d4e8ca9->enter($__internal_03fe784e6e9b718bc4fd964a911f91d036ab3a7a480737c55445f21e6d4e8ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f622e3b0ee1ba9494d1a1ceea5d9d24e64ea76ac8a44721ef771bde3f8c10bdb->leave($__internal_f622e3b0ee1ba9494d1a1ceea5d9d24e64ea76ac8a44721ef771bde3f8c10bdb_prof);

        
        $__internal_03fe784e6e9b718bc4fd964a911f91d036ab3a7a480737c55445f21e6d4e8ca9->leave($__internal_03fe784e6e9b718bc4fd964a911f91d036ab3a7a480737c55445f21e6d4e8ca9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba5f64ef2dfec7d5d2789640e796bf748364ec22acf0d350ad9a2cdbee437fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5f64ef2dfec7d5d2789640e796bf748364ec22acf0d350ad9a2cdbee437fdd->enter($__internal_ba5f64ef2dfec7d5d2789640e796bf748364ec22acf0d350ad9a2cdbee437fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d7ac4df8ad77da28bb852ce5f0de1be72564eaabbaf2871c68001cc200fcd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7ac4df8ad77da28bb852ce5f0de1be72564eaabbaf2871c68001cc200fcd73->enter($__internal_5d7ac4df8ad77da28bb852ce5f0de1be72564eaabbaf2871c68001cc200fcd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Frontend app - Welcome !</h1>
";
        
        $__internal_5d7ac4df8ad77da28bb852ce5f0de1be72564eaabbaf2871c68001cc200fcd73->leave($__internal_5d7ac4df8ad77da28bb852ce5f0de1be72564eaabbaf2871c68001cc200fcd73_prof);

        
        $__internal_ba5f64ef2dfec7d5d2789640e796bf748364ec22acf0d350ad9a2cdbee437fdd->leave($__internal_ba5f64ef2dfec7d5d2789640e796bf748364ec22acf0d350ad9a2cdbee437fdd_prof);

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
