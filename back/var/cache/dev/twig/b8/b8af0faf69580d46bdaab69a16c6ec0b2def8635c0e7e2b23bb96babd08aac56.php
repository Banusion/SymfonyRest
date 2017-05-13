<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9e884502d027cb03eb83257dc958a3e28787fae755d954982053324535dc4068 extends Twig_Template
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
        $__internal_7989ce3d70b428250db12a9652aade6ea1505a35033adfc2a5b57c2e13bc6e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7989ce3d70b428250db12a9652aade6ea1505a35033adfc2a5b57c2e13bc6e1f->enter($__internal_7989ce3d70b428250db12a9652aade6ea1505a35033adfc2a5b57c2e13bc6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_513ac2010f587d6cfae64f2192f3d14d5afc2258a8eef067c10e3179ad71a8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513ac2010f587d6cfae64f2192f3d14d5afc2258a8eef067c10e3179ad71a8aa->enter($__internal_513ac2010f587d6cfae64f2192f3d14d5afc2258a8eef067c10e3179ad71a8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7989ce3d70b428250db12a9652aade6ea1505a35033adfc2a5b57c2e13bc6e1f->leave($__internal_7989ce3d70b428250db12a9652aade6ea1505a35033adfc2a5b57c2e13bc6e1f_prof);

        
        $__internal_513ac2010f587d6cfae64f2192f3d14d5afc2258a8eef067c10e3179ad71a8aa->leave($__internal_513ac2010f587d6cfae64f2192f3d14d5afc2258a8eef067c10e3179ad71a8aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
