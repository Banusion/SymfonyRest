<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_09370da541e3c609d8560604eb435c3f314d8386e04e3afd068556980366bc64 extends Twig_Template
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
        $__internal_fe12e6f59f2933ac09171e0d0b268e104795c1691db4e8902b313d8574fd38bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe12e6f59f2933ac09171e0d0b268e104795c1691db4e8902b313d8574fd38bf->enter($__internal_fe12e6f59f2933ac09171e0d0b268e104795c1691db4e8902b313d8574fd38bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1b3e7390433ee3366ece212686ec7e58e91b1b14efa4542c3cd33d78ad2f010c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3e7390433ee3366ece212686ec7e58e91b1b14efa4542c3cd33d78ad2f010c->enter($__internal_1b3e7390433ee3366ece212686ec7e58e91b1b14efa4542c3cd33d78ad2f010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_fe12e6f59f2933ac09171e0d0b268e104795c1691db4e8902b313d8574fd38bf->leave($__internal_fe12e6f59f2933ac09171e0d0b268e104795c1691db4e8902b313d8574fd38bf_prof);

        
        $__internal_1b3e7390433ee3366ece212686ec7e58e91b1b14efa4542c3cd33d78ad2f010c->leave($__internal_1b3e7390433ee3366ece212686ec7e58e91b1b14efa4542c3cd33d78ad2f010c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
