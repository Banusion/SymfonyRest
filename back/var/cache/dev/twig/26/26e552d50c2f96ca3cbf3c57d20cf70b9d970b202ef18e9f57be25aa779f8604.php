<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_c28c5d052113be47b0fa1d7bb28945a1e144be37c2ab824733149f175fb04c5d extends Twig_Template
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
        $__internal_c8b8ee29d8034f174ad719327da49224f0cda6fa627fa4c74f0f1c1dcb15a467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b8ee29d8034f174ad719327da49224f0cda6fa627fa4c74f0f1c1dcb15a467->enter($__internal_c8b8ee29d8034f174ad719327da49224f0cda6fa627fa4c74f0f1c1dcb15a467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        $__internal_96dc74f118c24cd30d4dd0a0f64344893548999ec43ba601f30c9dbb2b6d22e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96dc74f118c24cd30d4dd0a0f64344893548999ec43ba601f30c9dbb2b6d22e2->enter($__internal_96dc74f118c24cd30d4dd0a0f64344893548999ec43ba601f30c9dbb2b6d22e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion"))) && twig_test_empty(($context["untilVersion"] ?? $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, ($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty(($context["untilVersion"] ?? $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, ($context["untilVersion"] ?? $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_c8b8ee29d8034f174ad719327da49224f0cda6fa627fa4c74f0f1c1dcb15a467->leave($__internal_c8b8ee29d8034f174ad719327da49224f0cda6fa627fa4c74f0f1c1dcb15a467_prof);

        
        $__internal_96dc74f118c24cd30d4dd0a0f64344893548999ec43ba601f30c9dbb2b6d22e2->leave($__internal_96dc74f118c24cd30d4dd0a0f64344893548999ec43ba601f30c9dbb2b6d22e2_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sinceVersion is empty and untilVersion is empty %}
*
{% else %}
    {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}
    {% if untilVersion is not empty %}
        {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}
    {% endif %}
{% endif %}
", "NelmioApiDocBundle:Components:version.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/version.html.twig");
    }
}
