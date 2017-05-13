<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_749f6a036c26d3dbfe132318245ef6faee874b620a2a60f25a6b1e098032cff8 extends Twig_Template
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
        $__internal_7c5036c54e7019a4b4460c6202e43d98bffacd1793b511d67bdabda16e816966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5036c54e7019a4b4460c6202e43d98bffacd1793b511d67bdabda16e816966->enter($__internal_7c5036c54e7019a4b4460c6202e43d98bffacd1793b511d67bdabda16e816966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c4d6ffde2008f4e3dc3c845811633855bdda0ee23f9a03faf8937bcdc3a8dbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d6ffde2008f4e3dc3c845811633855bdda0ee23f9a03faf8937bcdc3a8dbb7->enter($__internal_c4d6ffde2008f4e3dc3c845811633855bdda0ee23f9a03faf8937bcdc3a8dbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_7c5036c54e7019a4b4460c6202e43d98bffacd1793b511d67bdabda16e816966->leave($__internal_7c5036c54e7019a4b4460c6202e43d98bffacd1793b511d67bdabda16e816966_prof);

        
        $__internal_c4d6ffde2008f4e3dc3c845811633855bdda0ee23f9a03faf8937bcdc3a8dbb7->leave($__internal_c4d6ffde2008f4e3dc3c845811633855bdda0ee23f9a03faf8937bcdc3a8dbb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
