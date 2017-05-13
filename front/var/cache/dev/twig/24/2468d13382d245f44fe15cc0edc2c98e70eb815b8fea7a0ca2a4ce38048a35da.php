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
        $__internal_44a14d7776ab1f685533e3e28c272f539bca391e425bf36aa874f0dca08b489d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a14d7776ab1f685533e3e28c272f539bca391e425bf36aa874f0dca08b489d->enter($__internal_44a14d7776ab1f685533e3e28c272f539bca391e425bf36aa874f0dca08b489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_605b552a4c97b80620be7c74db7f3d00b21521d8e09e59e96495b11850117ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605b552a4c97b80620be7c74db7f3d00b21521d8e09e59e96495b11850117ade->enter($__internal_605b552a4c97b80620be7c74db7f3d00b21521d8e09e59e96495b11850117ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a14d7776ab1f685533e3e28c272f539bca391e425bf36aa874f0dca08b489d->leave($__internal_44a14d7776ab1f685533e3e28c272f539bca391e425bf36aa874f0dca08b489d_prof);

        
        $__internal_605b552a4c97b80620be7c74db7f3d00b21521d8e09e59e96495b11850117ade->leave($__internal_605b552a4c97b80620be7c74db7f3d00b21521d8e09e59e96495b11850117ade_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1fc51ebd79b261bcc6a600dde64587ad6f53f4c20f5ec0ba48812f1c12a5aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fc51ebd79b261bcc6a600dde64587ad6f53f4c20f5ec0ba48812f1c12a5aa3->enter($__internal_d1fc51ebd79b261bcc6a600dde64587ad6f53f4c20f5ec0ba48812f1c12a5aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1560b58f73b3674a2e219e2c9ef1577880e29e9b9da7b8b83fa71f4e0f803f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1560b58f73b3674a2e219e2c9ef1577880e29e9b9da7b8b83fa71f4e0f803f2a->enter($__internal_1560b58f73b3674a2e219e2c9ef1577880e29e9b9da7b8b83fa71f4e0f803f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1560b58f73b3674a2e219e2c9ef1577880e29e9b9da7b8b83fa71f4e0f803f2a->leave($__internal_1560b58f73b3674a2e219e2c9ef1577880e29e9b9da7b8b83fa71f4e0f803f2a_prof);

        
        $__internal_d1fc51ebd79b261bcc6a600dde64587ad6f53f4c20f5ec0ba48812f1c12a5aa3->leave($__internal_d1fc51ebd79b261bcc6a600dde64587ad6f53f4c20f5ec0ba48812f1c12a5aa3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc2b7f981ad2df64e12d2fec9ad3a5660ddd357422955f7a53f726127ede935f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2b7f981ad2df64e12d2fec9ad3a5660ddd357422955f7a53f726127ede935f->enter($__internal_bc2b7f981ad2df64e12d2fec9ad3a5660ddd357422955f7a53f726127ede935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_faafbd913fa92e55ab9a206a8b8f2449b9a78875931f3cf4387d99d40e5be44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faafbd913fa92e55ab9a206a8b8f2449b9a78875931f3cf4387d99d40e5be44a->enter($__internal_faafbd913fa92e55ab9a206a8b8f2449b9a78875931f3cf4387d99d40e5be44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_faafbd913fa92e55ab9a206a8b8f2449b9a78875931f3cf4387d99d40e5be44a->leave($__internal_faafbd913fa92e55ab9a206a8b8f2449b9a78875931f3cf4387d99d40e5be44a_prof);

        
        $__internal_bc2b7f981ad2df64e12d2fec9ad3a5660ddd357422955f7a53f726127ede935f->leave($__internal_bc2b7f981ad2df64e12d2fec9ad3a5660ddd357422955f7a53f726127ede935f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86efbdb85d6435e524d9a7bda359bf24fe50308e2c719f7565cfe6b3ce2eac9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86efbdb85d6435e524d9a7bda359bf24fe50308e2c719f7565cfe6b3ce2eac9f->enter($__internal_86efbdb85d6435e524d9a7bda359bf24fe50308e2c719f7565cfe6b3ce2eac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16c3970ae0840b522fad77360cdae65472ac6ffb11e8cb5b4f5f5782f893b695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c3970ae0840b522fad77360cdae65472ac6ffb11e8cb5b4f5f5782f893b695->enter($__internal_16c3970ae0840b522fad77360cdae65472ac6ffb11e8cb5b4f5f5782f893b695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_16c3970ae0840b522fad77360cdae65472ac6ffb11e8cb5b4f5f5782f893b695->leave($__internal_16c3970ae0840b522fad77360cdae65472ac6ffb11e8cb5b4f5f5782f893b695_prof);

        
        $__internal_86efbdb85d6435e524d9a7bda359bf24fe50308e2c719f7565cfe6b3ce2eac9f->leave($__internal_86efbdb85d6435e524d9a7bda359bf24fe50308e2c719f7565cfe6b3ce2eac9f_prof);

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
