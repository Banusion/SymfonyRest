<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_289938a579b1e37fd0c88d5e9075c9ef01c49fc436d7b324eec9a2a348dc029a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c8e1209693b2e9f3db1813ca579b70db7d6269754a038a08a05aa42fa863e6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e1209693b2e9f3db1813ca579b70db7d6269754a038a08a05aa42fa863e6a9->enter($__internal_c8e1209693b2e9f3db1813ca579b70db7d6269754a038a08a05aa42fa863e6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6a3744a0a6a85796f7af9eaba8bc557b1de2d089a4e44bc00653eb0bf801e0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3744a0a6a85796f7af9eaba8bc557b1de2d089a4e44bc00653eb0bf801e0de->enter($__internal_6a3744a0a6a85796f7af9eaba8bc557b1de2d089a4e44bc00653eb0bf801e0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e1209693b2e9f3db1813ca579b70db7d6269754a038a08a05aa42fa863e6a9->leave($__internal_c8e1209693b2e9f3db1813ca579b70db7d6269754a038a08a05aa42fa863e6a9_prof);

        
        $__internal_6a3744a0a6a85796f7af9eaba8bc557b1de2d089a4e44bc00653eb0bf801e0de->leave($__internal_6a3744a0a6a85796f7af9eaba8bc557b1de2d089a4e44bc00653eb0bf801e0de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa8752e6185b56f29dfd35f33281e4aca41f5c9a3e0fb9788f6f6abaa55d847c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8752e6185b56f29dfd35f33281e4aca41f5c9a3e0fb9788f6f6abaa55d847c->enter($__internal_fa8752e6185b56f29dfd35f33281e4aca41f5c9a3e0fb9788f6f6abaa55d847c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88700528a4d551f8c0e8448c1a27f69416b14bab32867d4648a501dee231326e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88700528a4d551f8c0e8448c1a27f69416b14bab32867d4648a501dee231326e->enter($__internal_88700528a4d551f8c0e8448c1a27f69416b14bab32867d4648a501dee231326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_88700528a4d551f8c0e8448c1a27f69416b14bab32867d4648a501dee231326e->leave($__internal_88700528a4d551f8c0e8448c1a27f69416b14bab32867d4648a501dee231326e_prof);

        
        $__internal_fa8752e6185b56f29dfd35f33281e4aca41f5c9a3e0fb9788f6f6abaa55d847c->leave($__internal_fa8752e6185b56f29dfd35f33281e4aca41f5c9a3e0fb9788f6f6abaa55d847c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffe07bfac2b99ad1c2554826f7485985e22b0e095a811c3f4fc9d1682d66d66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe07bfac2b99ad1c2554826f7485985e22b0e095a811c3f4fc9d1682d66d66d->enter($__internal_ffe07bfac2b99ad1c2554826f7485985e22b0e095a811c3f4fc9d1682d66d66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a29dbc5fe421933e495a355565eb953f2d5b16dd86409430281871f40157467c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29dbc5fe421933e495a355565eb953f2d5b16dd86409430281871f40157467c->enter($__internal_a29dbc5fe421933e495a355565eb953f2d5b16dd86409430281871f40157467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a29dbc5fe421933e495a355565eb953f2d5b16dd86409430281871f40157467c->leave($__internal_a29dbc5fe421933e495a355565eb953f2d5b16dd86409430281871f40157467c_prof);

        
        $__internal_ffe07bfac2b99ad1c2554826f7485985e22b0e095a811c3f4fc9d1682d66d66d->leave($__internal_ffe07bfac2b99ad1c2554826f7485985e22b0e095a811c3f4fc9d1682d66d66d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6d79d5cdafe6a1544728a1170a4d53e16f810a757f4cd053e9e80e823f30199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d79d5cdafe6a1544728a1170a4d53e16f810a757f4cd053e9e80e823f30199->enter($__internal_e6d79d5cdafe6a1544728a1170a4d53e16f810a757f4cd053e9e80e823f30199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad5dc7f879c207dec51d517fd4b0106c3fffab2b0558f33f5504782d0c41a3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5dc7f879c207dec51d517fd4b0106c3fffab2b0558f33f5504782d0c41a3c8->enter($__internal_ad5dc7f879c207dec51d517fd4b0106c3fffab2b0558f33f5504782d0c41a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ad5dc7f879c207dec51d517fd4b0106c3fffab2b0558f33f5504782d0c41a3c8->leave($__internal_ad5dc7f879c207dec51d517fd4b0106c3fffab2b0558f33f5504782d0c41a3c8_prof);

        
        $__internal_e6d79d5cdafe6a1544728a1170a4d53e16f810a757f4cd053e9e80e823f30199->leave($__internal_e6d79d5cdafe6a1544728a1170a4d53e16f810a757f4cd053e9e80e823f30199_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "TwigBundle:Exception:exception_full.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
