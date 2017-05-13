<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ab4be1756a35edf47672fe7d6067b9a97777fbcd9bfb91575b8dcc62adbd13da extends Twig_Template
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
        $__internal_dae9bdec9749002c51eb4b18ea0ade3852c4c6fbbf80980fd79e84f3a6185ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae9bdec9749002c51eb4b18ea0ade3852c4c6fbbf80980fd79e84f3a6185ec7->enter($__internal_dae9bdec9749002c51eb4b18ea0ade3852c4c6fbbf80980fd79e84f3a6185ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_67ceb55191372ec89c790a96ec37b98a0f52f81fa3da64870ad0fde90d2b6467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ceb55191372ec89c790a96ec37b98a0f52f81fa3da64870ad0fde90d2b6467->enter($__internal_67ceb55191372ec89c790a96ec37b98a0f52f81fa3da64870ad0fde90d2b6467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_dae9bdec9749002c51eb4b18ea0ade3852c4c6fbbf80980fd79e84f3a6185ec7->leave($__internal_dae9bdec9749002c51eb4b18ea0ade3852c4c6fbbf80980fd79e84f3a6185ec7_prof);

        
        $__internal_67ceb55191372ec89c790a96ec37b98a0f52f81fa3da64870ad0fde90d2b6467->leave($__internal_67ceb55191372ec89c790a96ec37b98a0f52f81fa3da64870ad0fde90d2b6467_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
