<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d2fb20ce964e7699a469e7168e94752d10d68b22abae46661b0dc20adda03816 extends Twig_Template
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
        $__internal_3eb35af086e19613e33600ac5a039272918c55ff52b65d43a0810d06fd8ec82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb35af086e19613e33600ac5a039272918c55ff52b65d43a0810d06fd8ec82e->enter($__internal_3eb35af086e19613e33600ac5a039272918c55ff52b65d43a0810d06fd8ec82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_087a2faa4bde7f0d683658947dd08024f6ff11756f43dcb23aed7aed672ad62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087a2faa4bde7f0d683658947dd08024f6ff11756f43dcb23aed7aed672ad62d->enter($__internal_087a2faa4bde7f0d683658947dd08024f6ff11756f43dcb23aed7aed672ad62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3eb35af086e19613e33600ac5a039272918c55ff52b65d43a0810d06fd8ec82e->leave($__internal_3eb35af086e19613e33600ac5a039272918c55ff52b65d43a0810d06fd8ec82e_prof);

        
        $__internal_087a2faa4bde7f0d683658947dd08024f6ff11756f43dcb23aed7aed672ad62d->leave($__internal_087a2faa4bde7f0d683658947dd08024f6ff11756f43dcb23aed7aed672ad62d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
