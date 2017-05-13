<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_dbe52f723938aa2712368df5ede1610ca42c22d454d07d2b52cebf4474999357 extends Twig_Template
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
        $__internal_3a69544dc32c2f038fd0d82e8160ebe8236df172e010fa276f227fd191dee8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a69544dc32c2f038fd0d82e8160ebe8236df172e010fa276f227fd191dee8ac->enter($__internal_3a69544dc32c2f038fd0d82e8160ebe8236df172e010fa276f227fd191dee8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5a06801484a71a4d601401a0bf206bf0b1f309412315e0bc018b4695a41b4371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06801484a71a4d601401a0bf206bf0b1f309412315e0bc018b4695a41b4371->enter($__internal_5a06801484a71a4d601401a0bf206bf0b1f309412315e0bc018b4695a41b4371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3a69544dc32c2f038fd0d82e8160ebe8236df172e010fa276f227fd191dee8ac->leave($__internal_3a69544dc32c2f038fd0d82e8160ebe8236df172e010fa276f227fd191dee8ac_prof);

        
        $__internal_5a06801484a71a4d601401a0bf206bf0b1f309412315e0bc018b4695a41b4371->leave($__internal_5a06801484a71a4d601401a0bf206bf0b1f309412315e0bc018b4695a41b4371_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
