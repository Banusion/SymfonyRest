<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_da26fba5b465a315e3ec0c2561612abc89d0f469c508cf35b705d57dd46cbd87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_d2265fd440fd4d45f504d21d257055ef0aa2efe30a1ed32eba4bb5d825b3998d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2265fd440fd4d45f504d21d257055ef0aa2efe30a1ed32eba4bb5d825b3998d->enter($__internal_d2265fd440fd4d45f504d21d257055ef0aa2efe30a1ed32eba4bb5d825b3998d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_32371311313a725d4d141874d3f34607ebfa6a97e9b1176d93b9c1e06e00364d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32371311313a725d4d141874d3f34607ebfa6a97e9b1176d93b9c1e06e00364d->enter($__internal_32371311313a725d4d141874d3f34607ebfa6a97e9b1176d93b9c1e06e00364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2265fd440fd4d45f504d21d257055ef0aa2efe30a1ed32eba4bb5d825b3998d->leave($__internal_d2265fd440fd4d45f504d21d257055ef0aa2efe30a1ed32eba4bb5d825b3998d_prof);

        
        $__internal_32371311313a725d4d141874d3f34607ebfa6a97e9b1176d93b9c1e06e00364d->leave($__internal_32371311313a725d4d141874d3f34607ebfa6a97e9b1176d93b9c1e06e00364d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_150b3e8cf8bcfb4143e8be264a036a8b5c3f91c3e3a123deef4185af5962a404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150b3e8cf8bcfb4143e8be264a036a8b5c3f91c3e3a123deef4185af5962a404->enter($__internal_150b3e8cf8bcfb4143e8be264a036a8b5c3f91c3e3a123deef4185af5962a404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c4231dc11ff69255cf06703fd27803370c0c51cba7cd5038b909c3bb7b284a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4231dc11ff69255cf06703fd27803370c0c51cba7cd5038b909c3bb7b284a8->enter($__internal_4c4231dc11ff69255cf06703fd27803370c0c51cba7cd5038b909c3bb7b284a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4c4231dc11ff69255cf06703fd27803370c0c51cba7cd5038b909c3bb7b284a8->leave($__internal_4c4231dc11ff69255cf06703fd27803370c0c51cba7cd5038b909c3bb7b284a8_prof);

        
        $__internal_150b3e8cf8bcfb4143e8be264a036a8b5c3f91c3e3a123deef4185af5962a404->leave($__internal_150b3e8cf8bcfb4143e8be264a036a8b5c3f91c3e3a123deef4185af5962a404_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9786d2b090d2f62659c1acca85276334145d09f4d7559c7f33e2a92b69f87520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9786d2b090d2f62659c1acca85276334145d09f4d7559c7f33e2a92b69f87520->enter($__internal_9786d2b090d2f62659c1acca85276334145d09f4d7559c7f33e2a92b69f87520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5c6cb24c62567f557f6e1fba7a02be3cbe02f9692f7086bd69f7ac9810e7e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c6cb24c62567f557f6e1fba7a02be3cbe02f9692f7086bd69f7ac9810e7e6b->enter($__internal_a5c6cb24c62567f557f6e1fba7a02be3cbe02f9692f7086bd69f7ac9810e7e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a5c6cb24c62567f557f6e1fba7a02be3cbe02f9692f7086bd69f7ac9810e7e6b->leave($__internal_a5c6cb24c62567f557f6e1fba7a02be3cbe02f9692f7086bd69f7ac9810e7e6b_prof);

        
        $__internal_9786d2b090d2f62659c1acca85276334145d09f4d7559c7f33e2a92b69f87520->leave($__internal_9786d2b090d2f62659c1acca85276334145d09f4d7559c7f33e2a92b69f87520_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad2d78ad77716c87c5e1625d0f8061552625d51abf626a0ad68b19fafbe25f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2d78ad77716c87c5e1625d0f8061552625d51abf626a0ad68b19fafbe25f48->enter($__internal_ad2d78ad77716c87c5e1625d0f8061552625d51abf626a0ad68b19fafbe25f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aaee9c89c5787a5fc5221a9aef27bb7a1c5b11d82b982968f4c10a1111c9f3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaee9c89c5787a5fc5221a9aef27bb7a1c5b11d82b982968f4c10a1111c9f3be->enter($__internal_aaee9c89c5787a5fc5221a9aef27bb7a1c5b11d82b982968f4c10a1111c9f3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aaee9c89c5787a5fc5221a9aef27bb7a1c5b11d82b982968f4c10a1111c9f3be->leave($__internal_aaee9c89c5787a5fc5221a9aef27bb7a1c5b11d82b982968f4c10a1111c9f3be_prof);

        
        $__internal_ad2d78ad77716c87c5e1625d0f8061552625d51abf626a0ad68b19fafbe25f48->leave($__internal_ad2d78ad77716c87c5e1625d0f8061552625d51abf626a0ad68b19fafbe25f48_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
