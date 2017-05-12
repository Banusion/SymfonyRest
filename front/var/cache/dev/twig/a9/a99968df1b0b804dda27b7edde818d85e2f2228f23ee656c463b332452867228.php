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
        $__internal_e9a6d1d53f8b20f383bc7d376d5490037f63c6cfa1f9987dda99ebce27a99d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a6d1d53f8b20f383bc7d376d5490037f63c6cfa1f9987dda99ebce27a99d96->enter($__internal_e9a6d1d53f8b20f383bc7d376d5490037f63c6cfa1f9987dda99ebce27a99d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9b90f90305d0f55dec69bb3b7f4f18e06e6c0c0e199d91791fc30b46002f33a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b90f90305d0f55dec69bb3b7f4f18e06e6c0c0e199d91791fc30b46002f33a9->enter($__internal_9b90f90305d0f55dec69bb3b7f4f18e06e6c0c0e199d91791fc30b46002f33a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a6d1d53f8b20f383bc7d376d5490037f63c6cfa1f9987dda99ebce27a99d96->leave($__internal_e9a6d1d53f8b20f383bc7d376d5490037f63c6cfa1f9987dda99ebce27a99d96_prof);

        
        $__internal_9b90f90305d0f55dec69bb3b7f4f18e06e6c0c0e199d91791fc30b46002f33a9->leave($__internal_9b90f90305d0f55dec69bb3b7f4f18e06e6c0c0e199d91791fc30b46002f33a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c73429d0298b11e294ed4c2dcf24e091c90a57dd1108360a2415bbcd88c5fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c73429d0298b11e294ed4c2dcf24e091c90a57dd1108360a2415bbcd88c5fe4->enter($__internal_0c73429d0298b11e294ed4c2dcf24e091c90a57dd1108360a2415bbcd88c5fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d9ce85f0cf37f1d7466c2769a01906054535f54133e56d7bf8a1922d89d589bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ce85f0cf37f1d7466c2769a01906054535f54133e56d7bf8a1922d89d589bd->enter($__internal_d9ce85f0cf37f1d7466c2769a01906054535f54133e56d7bf8a1922d89d589bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d9ce85f0cf37f1d7466c2769a01906054535f54133e56d7bf8a1922d89d589bd->leave($__internal_d9ce85f0cf37f1d7466c2769a01906054535f54133e56d7bf8a1922d89d589bd_prof);

        
        $__internal_0c73429d0298b11e294ed4c2dcf24e091c90a57dd1108360a2415bbcd88c5fe4->leave($__internal_0c73429d0298b11e294ed4c2dcf24e091c90a57dd1108360a2415bbcd88c5fe4_prof);

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
