<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_abe681b91b896b9679e6b1cc22cb25095b40e6c67df3d31ba48d5539f78192cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6df799bee653929db1dca12f818632633b2c48a44109097708201d4938fd497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6df799bee653929db1dca12f818632633b2c48a44109097708201d4938fd497->enter($__internal_d6df799bee653929db1dca12f818632633b2c48a44109097708201d4938fd497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d58cece383454606f044a82211cab2a310c0c5ba6baf8b5aa9f6ad617ebccd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58cece383454606f044a82211cab2a310c0c5ba6baf8b5aa9f6ad617ebccd81->enter($__internal_d58cece383454606f044a82211cab2a310c0c5ba6baf8b5aa9f6ad617ebccd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6df799bee653929db1dca12f818632633b2c48a44109097708201d4938fd497->leave($__internal_d6df799bee653929db1dca12f818632633b2c48a44109097708201d4938fd497_prof);

        
        $__internal_d58cece383454606f044a82211cab2a310c0c5ba6baf8b5aa9f6ad617ebccd81->leave($__internal_d58cece383454606f044a82211cab2a310c0c5ba6baf8b5aa9f6ad617ebccd81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14d3a6cfe0c05f59bbba063eda2bd0489bca12696e383b3db5170d3fc02399d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d3a6cfe0c05f59bbba063eda2bd0489bca12696e383b3db5170d3fc02399d8->enter($__internal_14d3a6cfe0c05f59bbba063eda2bd0489bca12696e383b3db5170d3fc02399d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c0d7e42a7816281f31d5e8fb35d16d5faf30fd05239b1a4e7594310cb798c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0d7e42a7816281f31d5e8fb35d16d5faf30fd05239b1a4e7594310cb798c45->enter($__internal_3c0d7e42a7816281f31d5e8fb35d16d5faf30fd05239b1a4e7594310cb798c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3c0d7e42a7816281f31d5e8fb35d16d5faf30fd05239b1a4e7594310cb798c45->leave($__internal_3c0d7e42a7816281f31d5e8fb35d16d5faf30fd05239b1a4e7594310cb798c45_prof);

        
        $__internal_14d3a6cfe0c05f59bbba063eda2bd0489bca12696e383b3db5170d3fc02399d8->leave($__internal_14d3a6cfe0c05f59bbba063eda2bd0489bca12696e383b3db5170d3fc02399d8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_456ee9a6f5349a07662d3a809e1c651992e3ebf976a42de648ccc8059e1f1571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456ee9a6f5349a07662d3a809e1c651992e3ebf976a42de648ccc8059e1f1571->enter($__internal_456ee9a6f5349a07662d3a809e1c651992e3ebf976a42de648ccc8059e1f1571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f168e295f8b35e2f74e84f0ae6aaf76958b8759d9da4a7767e48c0b6dd650ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f168e295f8b35e2f74e84f0ae6aaf76958b8759d9da4a7767e48c0b6dd650ac3->enter($__internal_f168e295f8b35e2f74e84f0ae6aaf76958b8759d9da4a7767e48c0b6dd650ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_f168e295f8b35e2f74e84f0ae6aaf76958b8759d9da4a7767e48c0b6dd650ac3->leave($__internal_f168e295f8b35e2f74e84f0ae6aaf76958b8759d9da4a7767e48c0b6dd650ac3_prof);

        
        $__internal_456ee9a6f5349a07662d3a809e1c651992e3ebf976a42de648ccc8059e1f1571->leave($__internal_456ee9a6f5349a07662d3a809e1c651992e3ebf976a42de648ccc8059e1f1571_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
