<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6942be9a2b04268f49ca384f2cb21a9ef0541ef923495e015278dfb1cc712285 extends Twig_Template
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
        $__internal_8bf4db9a73fda22754ae56d2d3e551d1370799b97730e0059aa0030b6fa9f19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf4db9a73fda22754ae56d2d3e551d1370799b97730e0059aa0030b6fa9f19a->enter($__internal_8bf4db9a73fda22754ae56d2d3e551d1370799b97730e0059aa0030b6fa9f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_704674d18ecbb5b585e8aa86d09c77d528335c8d96cb7f3a8a3f75c857a3306b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704674d18ecbb5b585e8aa86d09c77d528335c8d96cb7f3a8a3f75c857a3306b->enter($__internal_704674d18ecbb5b585e8aa86d09c77d528335c8d96cb7f3a8a3f75c857a3306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8bf4db9a73fda22754ae56d2d3e551d1370799b97730e0059aa0030b6fa9f19a->leave($__internal_8bf4db9a73fda22754ae56d2d3e551d1370799b97730e0059aa0030b6fa9f19a_prof);

        
        $__internal_704674d18ecbb5b585e8aa86d09c77d528335c8d96cb7f3a8a3f75c857a3306b->leave($__internal_704674d18ecbb5b585e8aa86d09c77d528335c8d96cb7f3a8a3f75c857a3306b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
