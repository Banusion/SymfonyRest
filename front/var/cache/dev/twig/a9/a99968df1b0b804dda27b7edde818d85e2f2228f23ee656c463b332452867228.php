<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9b63d8f110504d9221a3ad910929d65882f8e1734fe37bbe08c6cecd683cb2d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61639f481bd6cfbe2faa58461f722f37e851f2aab62013da043163e465af0fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61639f481bd6cfbe2faa58461f722f37e851f2aab62013da043163e465af0fbc->enter($__internal_61639f481bd6cfbe2faa58461f722f37e851f2aab62013da043163e465af0fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6d94c9799ac25701d5b9ca78ae963cb255389cb6d61a560571308d48b5f458c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d94c9799ac25701d5b9ca78ae963cb255389cb6d61a560571308d48b5f458c8->enter($__internal_6d94c9799ac25701d5b9ca78ae963cb255389cb6d61a560571308d48b5f458c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61639f481bd6cfbe2faa58461f722f37e851f2aab62013da043163e465af0fbc->leave($__internal_61639f481bd6cfbe2faa58461f722f37e851f2aab62013da043163e465af0fbc_prof);

        
        $__internal_6d94c9799ac25701d5b9ca78ae963cb255389cb6d61a560571308d48b5f458c8->leave($__internal_6d94c9799ac25701d5b9ca78ae963cb255389cb6d61a560571308d48b5f458c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_556049782dc8a9c10e4fe9bf8017ab30d90a487298ade28adf90b59396652ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556049782dc8a9c10e4fe9bf8017ab30d90a487298ade28adf90b59396652ab8->enter($__internal_556049782dc8a9c10e4fe9bf8017ab30d90a487298ade28adf90b59396652ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c8b0402012b157c75a00a4f581a7cef32e8fde62302388a7bc6a94ed72616cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b0402012b157c75a00a4f581a7cef32e8fde62302388a7bc6a94ed72616cec->enter($__internal_c8b0402012b157c75a00a4f581a7cef32e8fde62302388a7bc6a94ed72616cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c8b0402012b157c75a00a4f581a7cef32e8fde62302388a7bc6a94ed72616cec->leave($__internal_c8b0402012b157c75a00a4f581a7cef32e8fde62302388a7bc6a94ed72616cec_prof);

        
        $__internal_556049782dc8a9c10e4fe9bf8017ab30d90a487298ade28adf90b59396652ab8->leave($__internal_556049782dc8a9c10e4fe9bf8017ab30d90a487298ade28adf90b59396652ab8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
