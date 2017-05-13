<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bc0666f0855ad1f628332aef8f59dd70bd0997796177b6001425965e1303dd1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_be48b05ac82b2c9fc60c3775c9f22bed086aeea773ed60fde561a38b5d6598ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be48b05ac82b2c9fc60c3775c9f22bed086aeea773ed60fde561a38b5d6598ca->enter($__internal_be48b05ac82b2c9fc60c3775c9f22bed086aeea773ed60fde561a38b5d6598ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3b02a6723eba3e598a3b4422d1d3d4af85464058cbb7565a3d5ba807ec528601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b02a6723eba3e598a3b4422d1d3d4af85464058cbb7565a3d5ba807ec528601->enter($__internal_3b02a6723eba3e598a3b4422d1d3d4af85464058cbb7565a3d5ba807ec528601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be48b05ac82b2c9fc60c3775c9f22bed086aeea773ed60fde561a38b5d6598ca->leave($__internal_be48b05ac82b2c9fc60c3775c9f22bed086aeea773ed60fde561a38b5d6598ca_prof);

        
        $__internal_3b02a6723eba3e598a3b4422d1d3d4af85464058cbb7565a3d5ba807ec528601->leave($__internal_3b02a6723eba3e598a3b4422d1d3d4af85464058cbb7565a3d5ba807ec528601_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_474111b3245c816b0a80515d3b2b90eaad5e97c89f87f92cc96697faba43ebdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474111b3245c816b0a80515d3b2b90eaad5e97c89f87f92cc96697faba43ebdf->enter($__internal_474111b3245c816b0a80515d3b2b90eaad5e97c89f87f92cc96697faba43ebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_477f43441858bf4091dced097b2404b90d545b6a28aca6d0283bc4e1f8da8156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477f43441858bf4091dced097b2404b90d545b6a28aca6d0283bc4e1f8da8156->enter($__internal_477f43441858bf4091dced097b2404b90d545b6a28aca6d0283bc4e1f8da8156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_477f43441858bf4091dced097b2404b90d545b6a28aca6d0283bc4e1f8da8156->leave($__internal_477f43441858bf4091dced097b2404b90d545b6a28aca6d0283bc4e1f8da8156_prof);

        
        $__internal_474111b3245c816b0a80515d3b2b90eaad5e97c89f87f92cc96697faba43ebdf->leave($__internal_474111b3245c816b0a80515d3b2b90eaad5e97c89f87f92cc96697faba43ebdf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_68b6e4b6cc77834377503cf49ba4026f30e4ada3aa9d217cf1f45487cf08f849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b6e4b6cc77834377503cf49ba4026f30e4ada3aa9d217cf1f45487cf08f849->enter($__internal_68b6e4b6cc77834377503cf49ba4026f30e4ada3aa9d217cf1f45487cf08f849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf443f3294da97a96157e746d1b4583c2292799e199877ab3ea8cce98a5ce172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf443f3294da97a96157e746d1b4583c2292799e199877ab3ea8cce98a5ce172->enter($__internal_bf443f3294da97a96157e746d1b4583c2292799e199877ab3ea8cce98a5ce172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bf443f3294da97a96157e746d1b4583c2292799e199877ab3ea8cce98a5ce172->leave($__internal_bf443f3294da97a96157e746d1b4583c2292799e199877ab3ea8cce98a5ce172_prof);

        
        $__internal_68b6e4b6cc77834377503cf49ba4026f30e4ada3aa9d217cf1f45487cf08f849->leave($__internal_68b6e4b6cc77834377503cf49ba4026f30e4ada3aa9d217cf1f45487cf08f849_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
