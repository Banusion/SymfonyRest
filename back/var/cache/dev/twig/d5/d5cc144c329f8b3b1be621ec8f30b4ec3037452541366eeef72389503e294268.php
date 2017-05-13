<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4798025ba066a705aa20ff63981ccfdfdf2f20123e4d50a9d16e3834746a1de3 extends Twig_Template
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
        $__internal_63a87cf92dea56d54f8389c1c831d0c4c56d3278fe0207540aaa90234858b2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a87cf92dea56d54f8389c1c831d0c4c56d3278fe0207540aaa90234858b2bd->enter($__internal_63a87cf92dea56d54f8389c1c831d0c4c56d3278fe0207540aaa90234858b2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0a298867763b66e39cbe72bb9e43b65fb87869954aa4ea6547cfbfa491ffa9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a298867763b66e39cbe72bb9e43b65fb87869954aa4ea6547cfbfa491ffa9dc->enter($__internal_0a298867763b66e39cbe72bb9e43b65fb87869954aa4ea6547cfbfa491ffa9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_63a87cf92dea56d54f8389c1c831d0c4c56d3278fe0207540aaa90234858b2bd->leave($__internal_63a87cf92dea56d54f8389c1c831d0c4c56d3278fe0207540aaa90234858b2bd_prof);

        
        $__internal_0a298867763b66e39cbe72bb9e43b65fb87869954aa4ea6547cfbfa491ffa9dc->leave($__internal_0a298867763b66e39cbe72bb9e43b65fb87869954aa4ea6547cfbfa491ffa9dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
