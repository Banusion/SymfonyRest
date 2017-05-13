<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_78a134a7913d5dcb08929a19893a15137a03a4b75716e192a046e889434e4ccd extends Twig_Template
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
        $__internal_411e68daf294c2d4ca95699b4086dbdcd129a64b816ca40ce2817411b8b8ca9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411e68daf294c2d4ca95699b4086dbdcd129a64b816ca40ce2817411b8b8ca9f->enter($__internal_411e68daf294c2d4ca95699b4086dbdcd129a64b816ca40ce2817411b8b8ca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ac7ee323466588d24fc5dd4bd1a399a72b2c862a04cd4d5a5597492863f42b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7ee323466588d24fc5dd4bd1a399a72b2c862a04cd4d5a5597492863f42b68->enter($__internal_ac7ee323466588d24fc5dd4bd1a399a72b2c862a04cd4d5a5597492863f42b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_411e68daf294c2d4ca95699b4086dbdcd129a64b816ca40ce2817411b8b8ca9f->leave($__internal_411e68daf294c2d4ca95699b4086dbdcd129a64b816ca40ce2817411b8b8ca9f_prof);

        
        $__internal_ac7ee323466588d24fc5dd4bd1a399a72b2c862a04cd4d5a5597492863f42b68->leave($__internal_ac7ee323466588d24fc5dd4bd1a399a72b2c862a04cd4d5a5597492863f42b68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
