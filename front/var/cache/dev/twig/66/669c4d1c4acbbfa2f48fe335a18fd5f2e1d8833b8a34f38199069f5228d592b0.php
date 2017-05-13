<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2cd12be01088109d65775eb7c89a52ddb9db23de4d20e3e55a87b15ca507ca68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fccb0b797692afbf519effaea300edcac40059886e9fd38f4bab790bedd6e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fccb0b797692afbf519effaea300edcac40059886e9fd38f4bab790bedd6e26->enter($__internal_2fccb0b797692afbf519effaea300edcac40059886e9fd38f4bab790bedd6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3230c2384a983d6e03198a7a30737262601228345596621b63fef3e991ad6724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3230c2384a983d6e03198a7a30737262601228345596621b63fef3e991ad6724->enter($__internal_3230c2384a983d6e03198a7a30737262601228345596621b63fef3e991ad6724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fccb0b797692afbf519effaea300edcac40059886e9fd38f4bab790bedd6e26->leave($__internal_2fccb0b797692afbf519effaea300edcac40059886e9fd38f4bab790bedd6e26_prof);

        
        $__internal_3230c2384a983d6e03198a7a30737262601228345596621b63fef3e991ad6724->leave($__internal_3230c2384a983d6e03198a7a30737262601228345596621b63fef3e991ad6724_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6b362933dbdcade436c0a16952b5c47f7768dcce38ea34607a09da5bfc3cc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b362933dbdcade436c0a16952b5c47f7768dcce38ea34607a09da5bfc3cc42->enter($__internal_b6b362933dbdcade436c0a16952b5c47f7768dcce38ea34607a09da5bfc3cc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea3bd10be8e4ae7da0faee209b9ecd75abde206dacd67ef41d2014f8c4acf5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3bd10be8e4ae7da0faee209b9ecd75abde206dacd67ef41d2014f8c4acf5f9->enter($__internal_ea3bd10be8e4ae7da0faee209b9ecd75abde206dacd67ef41d2014f8c4acf5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ea3bd10be8e4ae7da0faee209b9ecd75abde206dacd67ef41d2014f8c4acf5f9->leave($__internal_ea3bd10be8e4ae7da0faee209b9ecd75abde206dacd67ef41d2014f8c4acf5f9_prof);

        
        $__internal_b6b362933dbdcade436c0a16952b5c47f7768dcce38ea34607a09da5bfc3cc42->leave($__internal_b6b362933dbdcade436c0a16952b5c47f7768dcce38ea34607a09da5bfc3cc42_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e58734523ae8bfea8696f611e3125864e2b54b83e9002fc1d05d2efd065f67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e58734523ae8bfea8696f611e3125864e2b54b83e9002fc1d05d2efd065f67c->enter($__internal_8e58734523ae8bfea8696f611e3125864e2b54b83e9002fc1d05d2efd065f67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be201dde84913878048135895acc483d5147a4ce226ca1cdb35581456eee4324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be201dde84913878048135895acc483d5147a4ce226ca1cdb35581456eee4324->enter($__internal_be201dde84913878048135895acc483d5147a4ce226ca1cdb35581456eee4324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_be201dde84913878048135895acc483d5147a4ce226ca1cdb35581456eee4324->leave($__internal_be201dde84913878048135895acc483d5147a4ce226ca1cdb35581456eee4324_prof);

        
        $__internal_8e58734523ae8bfea8696f611e3125864e2b54b83e9002fc1d05d2efd065f67c->leave($__internal_8e58734523ae8bfea8696f611e3125864e2b54b83e9002fc1d05d2efd065f67c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25fcf0342fd9ff6900f7e8c28c5aa61295e58789d025c13e9434542928a725a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fcf0342fd9ff6900f7e8c28c5aa61295e58789d025c13e9434542928a725a2->enter($__internal_25fcf0342fd9ff6900f7e8c28c5aa61295e58789d025c13e9434542928a725a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca1d9f19452c18ad307dafb043451372f582729dd9feacc4e04812af26cf4492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1d9f19452c18ad307dafb043451372f582729dd9feacc4e04812af26cf4492->enter($__internal_ca1d9f19452c18ad307dafb043451372f582729dd9feacc4e04812af26cf4492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ca1d9f19452c18ad307dafb043451372f582729dd9feacc4e04812af26cf4492->leave($__internal_ca1d9f19452c18ad307dafb043451372f582729dd9feacc4e04812af26cf4492_prof);

        
        $__internal_25fcf0342fd9ff6900f7e8c28c5aa61295e58789d025c13e9434542928a725a2->leave($__internal_25fcf0342fd9ff6900f7e8c28c5aa61295e58789d025c13e9434542928a725a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
