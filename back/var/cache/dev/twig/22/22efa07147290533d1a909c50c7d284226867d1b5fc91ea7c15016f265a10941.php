<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3bb7f5eab0ab11f8899e3953705b14c1903e39c226eec6728c2f0f6ed3bb6077 extends Twig_Template
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
        $__internal_f4210cb2c98fd59cf6bb845a035b8adbffd2db67d95ffe6d8026f43cb76abbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4210cb2c98fd59cf6bb845a035b8adbffd2db67d95ffe6d8026f43cb76abbc2->enter($__internal_f4210cb2c98fd59cf6bb845a035b8adbffd2db67d95ffe6d8026f43cb76abbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_71f1ee897c62a2153f8f9a415e938f1772111d7bdbed786f7e37520788f4cf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f1ee897c62a2153f8f9a415e938f1772111d7bdbed786f7e37520788f4cf73->enter($__internal_71f1ee897c62a2153f8f9a415e938f1772111d7bdbed786f7e37520788f4cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f4210cb2c98fd59cf6bb845a035b8adbffd2db67d95ffe6d8026f43cb76abbc2->leave($__internal_f4210cb2c98fd59cf6bb845a035b8adbffd2db67d95ffe6d8026f43cb76abbc2_prof);

        
        $__internal_71f1ee897c62a2153f8f9a415e938f1772111d7bdbed786f7e37520788f4cf73->leave($__internal_71f1ee897c62a2153f8f9a415e938f1772111d7bdbed786f7e37520788f4cf73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
