<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_05e4fb98399a556f42ba8b80a393eede04e4f8b821f42fa96faee687a70baf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ea65c0bab34643747c4352e14e278c4db771d393337d82092bd89d099ef0572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea65c0bab34643747c4352e14e278c4db771d393337d82092bd89d099ef0572->enter($__internal_8ea65c0bab34643747c4352e14e278c4db771d393337d82092bd89d099ef0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbe9644a89f4684c248b77a58fa730520b6b97a3bc0d35e0229b4aa0f94e3eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe9644a89f4684c248b77a58fa730520b6b97a3bc0d35e0229b4aa0f94e3eb7->enter($__internal_dbe9644a89f4684c248b77a58fa730520b6b97a3bc0d35e0229b4aa0f94e3eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea65c0bab34643747c4352e14e278c4db771d393337d82092bd89d099ef0572->leave($__internal_8ea65c0bab34643747c4352e14e278c4db771d393337d82092bd89d099ef0572_prof);

        
        $__internal_dbe9644a89f4684c248b77a58fa730520b6b97a3bc0d35e0229b4aa0f94e3eb7->leave($__internal_dbe9644a89f4684c248b77a58fa730520b6b97a3bc0d35e0229b4aa0f94e3eb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9283efdab6149955529e1968a9cfd22f929225525dc82f6349cd58eb253ebe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9283efdab6149955529e1968a9cfd22f929225525dc82f6349cd58eb253ebe8->enter($__internal_d9283efdab6149955529e1968a9cfd22f929225525dc82f6349cd58eb253ebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1bc22b7de9119b812c1a48fa6b99c6a38ecd33bd783329914ffd1bdc6eff47bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc22b7de9119b812c1a48fa6b99c6a38ecd33bd783329914ffd1bdc6eff47bb->enter($__internal_1bc22b7de9119b812c1a48fa6b99c6a38ecd33bd783329914ffd1bdc6eff47bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1bc22b7de9119b812c1a48fa6b99c6a38ecd33bd783329914ffd1bdc6eff47bb->leave($__internal_1bc22b7de9119b812c1a48fa6b99c6a38ecd33bd783329914ffd1bdc6eff47bb_prof);

        
        $__internal_d9283efdab6149955529e1968a9cfd22f929225525dc82f6349cd58eb253ebe8->leave($__internal_d9283efdab6149955529e1968a9cfd22f929225525dc82f6349cd58eb253ebe8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3682feb6b9210f82a02cae35364d575a6f402684fc9afc275fc06ade8680a5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3682feb6b9210f82a02cae35364d575a6f402684fc9afc275fc06ade8680a5b6->enter($__internal_3682feb6b9210f82a02cae35364d575a6f402684fc9afc275fc06ade8680a5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04db5d69623af1b2ea788f69d9c323c2350095fc016671f68633ca2253b724b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04db5d69623af1b2ea788f69d9c323c2350095fc016671f68633ca2253b724b6->enter($__internal_04db5d69623af1b2ea788f69d9c323c2350095fc016671f68633ca2253b724b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_04db5d69623af1b2ea788f69d9c323c2350095fc016671f68633ca2253b724b6->leave($__internal_04db5d69623af1b2ea788f69d9c323c2350095fc016671f68633ca2253b724b6_prof);

        
        $__internal_3682feb6b9210f82a02cae35364d575a6f402684fc9afc275fc06ade8680a5b6->leave($__internal_3682feb6b9210f82a02cae35364d575a6f402684fc9afc275fc06ade8680a5b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d26130bd2c5de0118374ecdf078c40f7aa10cbb7113fc73c82169099650b5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d26130bd2c5de0118374ecdf078c40f7aa10cbb7113fc73c82169099650b5be->enter($__internal_8d26130bd2c5de0118374ecdf078c40f7aa10cbb7113fc73c82169099650b5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ded97c95996057bd6acafa26be777fe84bfb992ce5da4287e426902a5eb47d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded97c95996057bd6acafa26be777fe84bfb992ce5da4287e426902a5eb47d00->enter($__internal_ded97c95996057bd6acafa26be777fe84bfb992ce5da4287e426902a5eb47d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ded97c95996057bd6acafa26be777fe84bfb992ce5da4287e426902a5eb47d00->leave($__internal_ded97c95996057bd6acafa26be777fe84bfb992ce5da4287e426902a5eb47d00_prof);

        
        $__internal_8d26130bd2c5de0118374ecdf078c40f7aa10cbb7113fc73c82169099650b5be->leave($__internal_8d26130bd2c5de0118374ecdf078c40f7aa10cbb7113fc73c82169099650b5be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
