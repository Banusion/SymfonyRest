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
        $__internal_d1c3d441641134dd56cd8a8798f40efc74a4de5101a60f29a2eb411bbaad714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c3d441641134dd56cd8a8798f40efc74a4de5101a60f29a2eb411bbaad714f->enter($__internal_d1c3d441641134dd56cd8a8798f40efc74a4de5101a60f29a2eb411bbaad714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_93ffbf1763203e6085320b2a5400f9103803233778ec12ccc7b7b3361f5da2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ffbf1763203e6085320b2a5400f9103803233778ec12ccc7b7b3361f5da2f9->enter($__internal_93ffbf1763203e6085320b2a5400f9103803233778ec12ccc7b7b3361f5da2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c3d441641134dd56cd8a8798f40efc74a4de5101a60f29a2eb411bbaad714f->leave($__internal_d1c3d441641134dd56cd8a8798f40efc74a4de5101a60f29a2eb411bbaad714f_prof);

        
        $__internal_93ffbf1763203e6085320b2a5400f9103803233778ec12ccc7b7b3361f5da2f9->leave($__internal_93ffbf1763203e6085320b2a5400f9103803233778ec12ccc7b7b3361f5da2f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08693b992436784c668e94b9d54b31e68882f60918ba97569001c21a093c961b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08693b992436784c668e94b9d54b31e68882f60918ba97569001c21a093c961b->enter($__internal_08693b992436784c668e94b9d54b31e68882f60918ba97569001c21a093c961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e301f3851e201e9bb0bb39cc6f7be8c740f2a034d2e95104b5f18a8b58974218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e301f3851e201e9bb0bb39cc6f7be8c740f2a034d2e95104b5f18a8b58974218->enter($__internal_e301f3851e201e9bb0bb39cc6f7be8c740f2a034d2e95104b5f18a8b58974218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e301f3851e201e9bb0bb39cc6f7be8c740f2a034d2e95104b5f18a8b58974218->leave($__internal_e301f3851e201e9bb0bb39cc6f7be8c740f2a034d2e95104b5f18a8b58974218_prof);

        
        $__internal_08693b992436784c668e94b9d54b31e68882f60918ba97569001c21a093c961b->leave($__internal_08693b992436784c668e94b9d54b31e68882f60918ba97569001c21a093c961b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc47bf0098aff5c0c2628a6a8a478538cae3ec88f4381c5450c4aaacaa3b6edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc47bf0098aff5c0c2628a6a8a478538cae3ec88f4381c5450c4aaacaa3b6edd->enter($__internal_cc47bf0098aff5c0c2628a6a8a478538cae3ec88f4381c5450c4aaacaa3b6edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_753ab36d6d23253423a97de28109be102b0c48f2c5c011363f05f5fc48778019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753ab36d6d23253423a97de28109be102b0c48f2c5c011363f05f5fc48778019->enter($__internal_753ab36d6d23253423a97de28109be102b0c48f2c5c011363f05f5fc48778019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_753ab36d6d23253423a97de28109be102b0c48f2c5c011363f05f5fc48778019->leave($__internal_753ab36d6d23253423a97de28109be102b0c48f2c5c011363f05f5fc48778019_prof);

        
        $__internal_cc47bf0098aff5c0c2628a6a8a478538cae3ec88f4381c5450c4aaacaa3b6edd->leave($__internal_cc47bf0098aff5c0c2628a6a8a478538cae3ec88f4381c5450c4aaacaa3b6edd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7aa6613ba9bc00551c9a34903e6822a17f25d72a8f4c3115af8a8eeb40db3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7aa6613ba9bc00551c9a34903e6822a17f25d72a8f4c3115af8a8eeb40db3c3->enter($__internal_d7aa6613ba9bc00551c9a34903e6822a17f25d72a8f4c3115af8a8eeb40db3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4adb3747dfe92b613dff8851977db06b91f066c5b965de18e0e6673725846687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adb3747dfe92b613dff8851977db06b91f066c5b965de18e0e6673725846687->enter($__internal_4adb3747dfe92b613dff8851977db06b91f066c5b965de18e0e6673725846687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4adb3747dfe92b613dff8851977db06b91f066c5b965de18e0e6673725846687->leave($__internal_4adb3747dfe92b613dff8851977db06b91f066c5b965de18e0e6673725846687_prof);

        
        $__internal_d7aa6613ba9bc00551c9a34903e6822a17f25d72a8f4c3115af8a8eeb40db3c3->leave($__internal_d7aa6613ba9bc00551c9a34903e6822a17f25d72a8f4c3115af8a8eeb40db3c3_prof);

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
