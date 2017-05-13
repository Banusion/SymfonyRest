<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_64fc0234eeb1b4c94a4b6e3ce6e10bdcaeb0b419efb1675472e1ada94915e097 extends Twig_Template
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
        $__internal_294bcf1c59f07c9604cf93933bf18bc906afe918aa5d6b15f6041fc45526d51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294bcf1c59f07c9604cf93933bf18bc906afe918aa5d6b15f6041fc45526d51b->enter($__internal_294bcf1c59f07c9604cf93933bf18bc906afe918aa5d6b15f6041fc45526d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_73ae1dc218ae6d1928a2f3f80916ffb0d6f7f811e02bf0f5c3f04402db6daf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ae1dc218ae6d1928a2f3f80916ffb0d6f7f811e02bf0f5c3f04402db6daf02->enter($__internal_73ae1dc218ae6d1928a2f3f80916ffb0d6f7f811e02bf0f5c3f04402db6daf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_294bcf1c59f07c9604cf93933bf18bc906afe918aa5d6b15f6041fc45526d51b->leave($__internal_294bcf1c59f07c9604cf93933bf18bc906afe918aa5d6b15f6041fc45526d51b_prof);

        
        $__internal_73ae1dc218ae6d1928a2f3f80916ffb0d6f7f811e02bf0f5c3f04402db6daf02->leave($__internal_73ae1dc218ae6d1928a2f3f80916ffb0d6f7f811e02bf0f5c3f04402db6daf02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
