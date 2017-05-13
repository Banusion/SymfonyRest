<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bfad1ff77aa2f8859cbf528f5664063b070e865a84e1317f9a25249e863d7cfc extends Twig_Template
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
        $__internal_8146d7d9d63cff1228c01478b0daf58b55e5891fecbc080c65831abffb83e49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8146d7d9d63cff1228c01478b0daf58b55e5891fecbc080c65831abffb83e49d->enter($__internal_8146d7d9d63cff1228c01478b0daf58b55e5891fecbc080c65831abffb83e49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4a266f788b586d131d826a35fafaf110c6bf61eda4c7251aebc788097f9c683d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a266f788b586d131d826a35fafaf110c6bf61eda4c7251aebc788097f9c683d->enter($__internal_4a266f788b586d131d826a35fafaf110c6bf61eda4c7251aebc788097f9c683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8146d7d9d63cff1228c01478b0daf58b55e5891fecbc080c65831abffb83e49d->leave($__internal_8146d7d9d63cff1228c01478b0daf58b55e5891fecbc080c65831abffb83e49d_prof);

        
        $__internal_4a266f788b586d131d826a35fafaf110c6bf61eda4c7251aebc788097f9c683d->leave($__internal_4a266f788b586d131d826a35fafaf110c6bf61eda4c7251aebc788097f9c683d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
