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
        $__internal_94772623ef87145ec6105bc38884b6466f76b2f28265614e48c8cc71bb6871dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94772623ef87145ec6105bc38884b6466f76b2f28265614e48c8cc71bb6871dc->enter($__internal_94772623ef87145ec6105bc38884b6466f76b2f28265614e48c8cc71bb6871dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b7cd5623b8f23dc583e63d6e3ec81562d9c836d038643471b8eda5e70b4a913f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cd5623b8f23dc583e63d6e3ec81562d9c836d038643471b8eda5e70b4a913f->enter($__internal_b7cd5623b8f23dc583e63d6e3ec81562d9c836d038643471b8eda5e70b4a913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94772623ef87145ec6105bc38884b6466f76b2f28265614e48c8cc71bb6871dc->leave($__internal_94772623ef87145ec6105bc38884b6466f76b2f28265614e48c8cc71bb6871dc_prof);

        
        $__internal_b7cd5623b8f23dc583e63d6e3ec81562d9c836d038643471b8eda5e70b4a913f->leave($__internal_b7cd5623b8f23dc583e63d6e3ec81562d9c836d038643471b8eda5e70b4a913f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20c2f379c6ae9e759b94d72bbbc91efe49f51e043e2dae93649634a7afca0a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c2f379c6ae9e759b94d72bbbc91efe49f51e043e2dae93649634a7afca0a65->enter($__internal_20c2f379c6ae9e759b94d72bbbc91efe49f51e043e2dae93649634a7afca0a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_40478b66d5237015b84a47683c799adf9d2a6b661220717e36d1d2d89ade563f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40478b66d5237015b84a47683c799adf9d2a6b661220717e36d1d2d89ade563f->enter($__internal_40478b66d5237015b84a47683c799adf9d2a6b661220717e36d1d2d89ade563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_40478b66d5237015b84a47683c799adf9d2a6b661220717e36d1d2d89ade563f->leave($__internal_40478b66d5237015b84a47683c799adf9d2a6b661220717e36d1d2d89ade563f_prof);

        
        $__internal_20c2f379c6ae9e759b94d72bbbc91efe49f51e043e2dae93649634a7afca0a65->leave($__internal_20c2f379c6ae9e759b94d72bbbc91efe49f51e043e2dae93649634a7afca0a65_prof);

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
