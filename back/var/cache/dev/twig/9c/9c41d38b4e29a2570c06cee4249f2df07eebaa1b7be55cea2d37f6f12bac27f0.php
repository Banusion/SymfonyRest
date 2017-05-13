<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7e5667896cc6c7250e8d0b40ac265e267ac52571c869bdc9cafb25b561cccf78 extends Twig_Template
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
        $__internal_d8f35a5aabfcd47479e6a382b6b92e6b314246e4dcc250f242b074038050fd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f35a5aabfcd47479e6a382b6b92e6b314246e4dcc250f242b074038050fd6b->enter($__internal_d8f35a5aabfcd47479e6a382b6b92e6b314246e4dcc250f242b074038050fd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d38a918e0f2d2fd8aa12ad79aff704d593a7c73afbb8e0a87d73eb20b5932f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38a918e0f2d2fd8aa12ad79aff704d593a7c73afbb8e0a87d73eb20b5932f45->enter($__internal_d38a918e0f2d2fd8aa12ad79aff704d593a7c73afbb8e0a87d73eb20b5932f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d8f35a5aabfcd47479e6a382b6b92e6b314246e4dcc250f242b074038050fd6b->leave($__internal_d8f35a5aabfcd47479e6a382b6b92e6b314246e4dcc250f242b074038050fd6b_prof);

        
        $__internal_d38a918e0f2d2fd8aa12ad79aff704d593a7c73afbb8e0a87d73eb20b5932f45->leave($__internal_d38a918e0f2d2fd8aa12ad79aff704d593a7c73afbb8e0a87d73eb20b5932f45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
