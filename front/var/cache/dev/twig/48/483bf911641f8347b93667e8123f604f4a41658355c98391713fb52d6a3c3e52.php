<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2d257f20299f75c0f2cb84c7587d2a1462ae1d072dc716d1999ced2270fb77bd extends Twig_Template
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
        $__internal_7e17abdcdf21999c4c275040d9ed1529e5c5fde57096d6e18bb03323566e4420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e17abdcdf21999c4c275040d9ed1529e5c5fde57096d6e18bb03323566e4420->enter($__internal_7e17abdcdf21999c4c275040d9ed1529e5c5fde57096d6e18bb03323566e4420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_bd3bfad7c4317473d070be4ba600130a1dcb9f0b3e0b158dbd80821f91a0ba92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3bfad7c4317473d070be4ba600130a1dcb9f0b3e0b158dbd80821f91a0ba92->enter($__internal_bd3bfad7c4317473d070be4ba600130a1dcb9f0b3e0b158dbd80821f91a0ba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_7e17abdcdf21999c4c275040d9ed1529e5c5fde57096d6e18bb03323566e4420->leave($__internal_7e17abdcdf21999c4c275040d9ed1529e5c5fde57096d6e18bb03323566e4420_prof);

        
        $__internal_bd3bfad7c4317473d070be4ba600130a1dcb9f0b3e0b158dbd80821f91a0ba92->leave($__internal_bd3bfad7c4317473d070be4ba600130a1dcb9f0b3e0b158dbd80821f91a0ba92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
