<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a394cb3531654ac3122b3079346a73940d95709c15981c4c2a3bbae40bb9a1a6 extends Twig_Template
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
        $__internal_c07a38ae5697b8245582bb10b480c879c074fc14620ec4ac2327dc2944948acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07a38ae5697b8245582bb10b480c879c074fc14620ec4ac2327dc2944948acf->enter($__internal_c07a38ae5697b8245582bb10b480c879c074fc14620ec4ac2327dc2944948acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a0faab8003d16c00e8c2e1894eda02ea18efece76dab8b9314cb6fa487d4cea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0faab8003d16c00e8c2e1894eda02ea18efece76dab8b9314cb6fa487d4cea4->enter($__internal_a0faab8003d16c00e8c2e1894eda02ea18efece76dab8b9314cb6fa487d4cea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c07a38ae5697b8245582bb10b480c879c074fc14620ec4ac2327dc2944948acf->leave($__internal_c07a38ae5697b8245582bb10b480c879c074fc14620ec4ac2327dc2944948acf_prof);

        
        $__internal_a0faab8003d16c00e8c2e1894eda02ea18efece76dab8b9314cb6fa487d4cea4->leave($__internal_a0faab8003d16c00e8c2e1894eda02ea18efece76dab8b9314cb6fa487d4cea4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
