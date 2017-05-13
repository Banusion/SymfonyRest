<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1c98390a20f988b38f510fb6c820b8fc2e80ff6967a7b90b4a34e01b907e4c11 extends Twig_Template
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
        $__internal_b453cd8d248a1111c87b10fca13b8182cbc3f4c5b300b2436cde402e5fa32f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b453cd8d248a1111c87b10fca13b8182cbc3f4c5b300b2436cde402e5fa32f1e->enter($__internal_b453cd8d248a1111c87b10fca13b8182cbc3f4c5b300b2436cde402e5fa32f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1bf38efab04b9f9240529dcdc5a25a4eaef83d02a64efb1d9a1968fee4bd658e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf38efab04b9f9240529dcdc5a25a4eaef83d02a64efb1d9a1968fee4bd658e->enter($__internal_1bf38efab04b9f9240529dcdc5a25a4eaef83d02a64efb1d9a1968fee4bd658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b453cd8d248a1111c87b10fca13b8182cbc3f4c5b300b2436cde402e5fa32f1e->leave($__internal_b453cd8d248a1111c87b10fca13b8182cbc3f4c5b300b2436cde402e5fa32f1e_prof);

        
        $__internal_1bf38efab04b9f9240529dcdc5a25a4eaef83d02a64efb1d9a1968fee4bd658e->leave($__internal_1bf38efab04b9f9240529dcdc5a25a4eaef83d02a64efb1d9a1968fee4bd658e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b937f9e4a79c4598878c01f922084190a7a97dc33206370d67f071b10f874477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b937f9e4a79c4598878c01f922084190a7a97dc33206370d67f071b10f874477->enter($__internal_b937f9e4a79c4598878c01f922084190a7a97dc33206370d67f071b10f874477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ec83cc25a89bd7034932af5323be2c9fcf5fd10ca0e9d91a5dbb564028777b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec83cc25a89bd7034932af5323be2c9fcf5fd10ca0e9d91a5dbb564028777b1->enter($__internal_4ec83cc25a89bd7034932af5323be2c9fcf5fd10ca0e9d91a5dbb564028777b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4ec83cc25a89bd7034932af5323be2c9fcf5fd10ca0e9d91a5dbb564028777b1->leave($__internal_4ec83cc25a89bd7034932af5323be2c9fcf5fd10ca0e9d91a5dbb564028777b1_prof);

        
        $__internal_b937f9e4a79c4598878c01f922084190a7a97dc33206370d67f071b10f874477->leave($__internal_b937f9e4a79c4598878c01f922084190a7a97dc33206370d67f071b10f874477_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf24e43f4cc897eb826240e4fc625be6f8ff7cfec0770b661a9b8e9ec6315824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf24e43f4cc897eb826240e4fc625be6f8ff7cfec0770b661a9b8e9ec6315824->enter($__internal_cf24e43f4cc897eb826240e4fc625be6f8ff7cfec0770b661a9b8e9ec6315824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa50a1a9ff5cef36eb15c9cb4884d9b44f989e1dc6fed429cf7212d76dc628fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa50a1a9ff5cef36eb15c9cb4884d9b44f989e1dc6fed429cf7212d76dc628fc->enter($__internal_aa50a1a9ff5cef36eb15c9cb4884d9b44f989e1dc6fed429cf7212d76dc628fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_aa50a1a9ff5cef36eb15c9cb4884d9b44f989e1dc6fed429cf7212d76dc628fc->leave($__internal_aa50a1a9ff5cef36eb15c9cb4884d9b44f989e1dc6fed429cf7212d76dc628fc_prof);

        
        $__internal_cf24e43f4cc897eb826240e4fc625be6f8ff7cfec0770b661a9b8e9ec6315824->leave($__internal_cf24e43f4cc897eb826240e4fc625be6f8ff7cfec0770b661a9b8e9ec6315824_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
