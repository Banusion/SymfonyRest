<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e38458767e9562a9bce502c4733f8bb1ce8a33fc042acc3e897c7006efbe1fe5 extends Twig_Template
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
        $__internal_4aa1b9980cee17bd9c775a9ed4bda5feebaf24e3ba2add50ab4bb945e5091ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa1b9980cee17bd9c775a9ed4bda5feebaf24e3ba2add50ab4bb945e5091ec1->enter($__internal_4aa1b9980cee17bd9c775a9ed4bda5feebaf24e3ba2add50ab4bb945e5091ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5f7ea17c21c0bc441b4003ac28133c6dbf06153bdb47baf9d9daa4386e7effd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7ea17c21c0bc441b4003ac28133c6dbf06153bdb47baf9d9daa4386e7effd1->enter($__internal_5f7ea17c21c0bc441b4003ac28133c6dbf06153bdb47baf9d9daa4386e7effd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_4aa1b9980cee17bd9c775a9ed4bda5feebaf24e3ba2add50ab4bb945e5091ec1->leave($__internal_4aa1b9980cee17bd9c775a9ed4bda5feebaf24e3ba2add50ab4bb945e5091ec1_prof);

        
        $__internal_5f7ea17c21c0bc441b4003ac28133c6dbf06153bdb47baf9d9daa4386e7effd1->leave($__internal_5f7ea17c21c0bc441b4003ac28133c6dbf06153bdb47baf9d9daa4386e7effd1_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
