<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d88f308456f050c3107e1a5c0ba89ff4e8f83317be3ba2438ee23a6f208bdd0b extends Twig_Template
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
        $__internal_893b68e523b9ec48a426fbf2df4558c29dd7d1dea49db6217f0040b5f57aaceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893b68e523b9ec48a426fbf2df4558c29dd7d1dea49db6217f0040b5f57aaceb->enter($__internal_893b68e523b9ec48a426fbf2df4558c29dd7d1dea49db6217f0040b5f57aaceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5c4a5e1f941711a158759a49b911d2ec13b57a990692ed7f65c6ca6d44f32bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4a5e1f941711a158759a49b911d2ec13b57a990692ed7f65c6ca6d44f32bba->enter($__internal_5c4a5e1f941711a158759a49b911d2ec13b57a990692ed7f65c6ca6d44f32bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_893b68e523b9ec48a426fbf2df4558c29dd7d1dea49db6217f0040b5f57aaceb->leave($__internal_893b68e523b9ec48a426fbf2df4558c29dd7d1dea49db6217f0040b5f57aaceb_prof);

        
        $__internal_5c4a5e1f941711a158759a49b911d2ec13b57a990692ed7f65c6ca6d44f32bba->leave($__internal_5c4a5e1f941711a158759a49b911d2ec13b57a990692ed7f65c6ca6d44f32bba_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
