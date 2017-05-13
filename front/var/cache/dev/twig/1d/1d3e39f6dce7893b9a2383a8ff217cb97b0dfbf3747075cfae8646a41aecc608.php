<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d6d56ffddfdab4796d7ea32b396d802ec2b21c82e7ae1bbe312f6443ce7dff0a extends Twig_Template
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
        $__internal_0207c62377a97b9c4cb929533e17b6c8254be966b2f42146cf7821214944069d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0207c62377a97b9c4cb929533e17b6c8254be966b2f42146cf7821214944069d->enter($__internal_0207c62377a97b9c4cb929533e17b6c8254be966b2f42146cf7821214944069d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_6239437d089928e9e11b128ffdfa6db758e1c07c6f4506fc221ba00c63944d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6239437d089928e9e11b128ffdfa6db758e1c07c6f4506fc221ba00c63944d8a->enter($__internal_6239437d089928e9e11b128ffdfa6db758e1c07c6f4506fc221ba00c63944d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0207c62377a97b9c4cb929533e17b6c8254be966b2f42146cf7821214944069d->leave($__internal_0207c62377a97b9c4cb929533e17b6c8254be966b2f42146cf7821214944069d_prof);

        
        $__internal_6239437d089928e9e11b128ffdfa6db758e1c07c6f4506fc221ba00c63944d8a->leave($__internal_6239437d089928e9e11b128ffdfa6db758e1c07c6f4506fc221ba00c63944d8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
