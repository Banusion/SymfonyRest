<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e8c266af3ea3454346006143e3b89de581b551dd2f92568ef487da4095952f32 extends Twig_Template
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
        $__internal_d27d2ff4dc198bd09a703e82379bc646bacbafa8457bdf88c7e2062e1f045c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27d2ff4dc198bd09a703e82379bc646bacbafa8457bdf88c7e2062e1f045c8f->enter($__internal_d27d2ff4dc198bd09a703e82379bc646bacbafa8457bdf88c7e2062e1f045c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_268ac58315312763063290beac84379d6a8bfe45fc8fdf3452bd44498269f2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268ac58315312763063290beac84379d6a8bfe45fc8fdf3452bd44498269f2b1->enter($__internal_268ac58315312763063290beac84379d6a8bfe45fc8fdf3452bd44498269f2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d27d2ff4dc198bd09a703e82379bc646bacbafa8457bdf88c7e2062e1f045c8f->leave($__internal_d27d2ff4dc198bd09a703e82379bc646bacbafa8457bdf88c7e2062e1f045c8f_prof);

        
        $__internal_268ac58315312763063290beac84379d6a8bfe45fc8fdf3452bd44498269f2b1->leave($__internal_268ac58315312763063290beac84379d6a8bfe45fc8fdf3452bd44498269f2b1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
