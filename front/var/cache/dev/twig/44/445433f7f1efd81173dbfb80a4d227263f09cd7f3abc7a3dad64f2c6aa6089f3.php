<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a12d8b0d89280e36a4a02ce823f3e4e453860b08ab40eeb64de2f586781019d1 extends Twig_Template
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
        $__internal_73b12c1a2dfa6b21a49455ab8e9c16b0b2cff5f677d321bb2322c3a52a9928b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b12c1a2dfa6b21a49455ab8e9c16b0b2cff5f677d321bb2322c3a52a9928b9->enter($__internal_73b12c1a2dfa6b21a49455ab8e9c16b0b2cff5f677d321bb2322c3a52a9928b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4cdd06c13bc0e85f31617048eff0cab81a0bb7956fc377bc69cce45c0b67b05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdd06c13bc0e85f31617048eff0cab81a0bb7956fc377bc69cce45c0b67b05a->enter($__internal_4cdd06c13bc0e85f31617048eff0cab81a0bb7956fc377bc69cce45c0b67b05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_73b12c1a2dfa6b21a49455ab8e9c16b0b2cff5f677d321bb2322c3a52a9928b9->leave($__internal_73b12c1a2dfa6b21a49455ab8e9c16b0b2cff5f677d321bb2322c3a52a9928b9_prof);

        
        $__internal_4cdd06c13bc0e85f31617048eff0cab81a0bb7956fc377bc69cce45c0b67b05a->leave($__internal_4cdd06c13bc0e85f31617048eff0cab81a0bb7956fc377bc69cce45c0b67b05a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
