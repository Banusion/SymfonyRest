<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b1f3e9ac16ed2a0c53deeb9710eee59dacc8cd3d443cc494445113ee0da38c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aff119a56fc57ab3272aaf3553abc51d41316cbe7b64e834ad388e5fc6fe68b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff119a56fc57ab3272aaf3553abc51d41316cbe7b64e834ad388e5fc6fe68b6->enter($__internal_aff119a56fc57ab3272aaf3553abc51d41316cbe7b64e834ad388e5fc6fe68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_615123e77502fff3904c83fe1a2b2cb3366dfd6f25dfc9c70016eb0e418e0f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615123e77502fff3904c83fe1a2b2cb3366dfd6f25dfc9c70016eb0e418e0f52->enter($__internal_615123e77502fff3904c83fe1a2b2cb3366dfd6f25dfc9c70016eb0e418e0f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_aff119a56fc57ab3272aaf3553abc51d41316cbe7b64e834ad388e5fc6fe68b6->leave($__internal_aff119a56fc57ab3272aaf3553abc51d41316cbe7b64e834ad388e5fc6fe68b6_prof);

        
        $__internal_615123e77502fff3904c83fe1a2b2cb3366dfd6f25dfc9c70016eb0e418e0f52->leave($__internal_615123e77502fff3904c83fe1a2b2cb3366dfd6f25dfc9c70016eb0e418e0f52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
