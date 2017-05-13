<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_308fde00503dca47f85824e71940cfc9ec6a2877d57764ce97bcbf189cee4aa9 extends Twig_Template
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
        $__internal_30e41075445700a82a215205b77e8be63b70c88d9e8df6d49f7e44453a378dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e41075445700a82a215205b77e8be63b70c88d9e8df6d49f7e44453a378dec->enter($__internal_30e41075445700a82a215205b77e8be63b70c88d9e8df6d49f7e44453a378dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1714695db09269c08416522be5497bb64f9aca911ddeab97b23cb49bacf73c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1714695db09269c08416522be5497bb64f9aca911ddeab97b23cb49bacf73c35->enter($__internal_1714695db09269c08416522be5497bb64f9aca911ddeab97b23cb49bacf73c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_30e41075445700a82a215205b77e8be63b70c88d9e8df6d49f7e44453a378dec->leave($__internal_30e41075445700a82a215205b77e8be63b70c88d9e8df6d49f7e44453a378dec_prof);

        
        $__internal_1714695db09269c08416522be5497bb64f9aca911ddeab97b23cb49bacf73c35->leave($__internal_1714695db09269c08416522be5497bb64f9aca911ddeab97b23cb49bacf73c35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
