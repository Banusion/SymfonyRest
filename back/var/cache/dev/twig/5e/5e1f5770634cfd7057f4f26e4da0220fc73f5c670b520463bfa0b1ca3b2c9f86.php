<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7abe4e6c33730320f7337c9b8d9abfba0acd453de7da98c80fcdd25d388c5035 extends Twig_Template
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
        $__internal_bd7daddc0bac58986a3720062860e33902ab7cbb15c9c3524c81e5206c087e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7daddc0bac58986a3720062860e33902ab7cbb15c9c3524c81e5206c087e3c->enter($__internal_bd7daddc0bac58986a3720062860e33902ab7cbb15c9c3524c81e5206c087e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_1e9854a59df8aca7bf22c84a93f0931d3c903bc3eb72ffe825cf72c5b5734c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9854a59df8aca7bf22c84a93f0931d3c903bc3eb72ffe825cf72c5b5734c8b->enter($__internal_1e9854a59df8aca7bf22c84a93f0931d3c903bc3eb72ffe825cf72c5b5734c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bd7daddc0bac58986a3720062860e33902ab7cbb15c9c3524c81e5206c087e3c->leave($__internal_bd7daddc0bac58986a3720062860e33902ab7cbb15c9c3524c81e5206c087e3c_prof);

        
        $__internal_1e9854a59df8aca7bf22c84a93f0931d3c903bc3eb72ffe825cf72c5b5734c8b->leave($__internal_1e9854a59df8aca7bf22c84a93f0931d3c903bc3eb72ffe825cf72c5b5734c8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
