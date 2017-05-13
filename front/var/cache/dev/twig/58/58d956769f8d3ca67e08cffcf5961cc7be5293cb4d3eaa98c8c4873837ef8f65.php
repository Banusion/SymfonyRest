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
        $__internal_1066146afc8d859d7082fd44a6befae0d326d627b0dd54b8a7e2395c0ffea325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1066146afc8d859d7082fd44a6befae0d326d627b0dd54b8a7e2395c0ffea325->enter($__internal_1066146afc8d859d7082fd44a6befae0d326d627b0dd54b8a7e2395c0ffea325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b02d8ed2f3413f542f902c33e94ea956616159ea9f921a73f1526a281c863ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02d8ed2f3413f542f902c33e94ea956616159ea9f921a73f1526a281c863ce1->enter($__internal_b02d8ed2f3413f542f902c33e94ea956616159ea9f921a73f1526a281c863ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_1066146afc8d859d7082fd44a6befae0d326d627b0dd54b8a7e2395c0ffea325->leave($__internal_1066146afc8d859d7082fd44a6befae0d326d627b0dd54b8a7e2395c0ffea325_prof);

        
        $__internal_b02d8ed2f3413f542f902c33e94ea956616159ea9f921a73f1526a281c863ce1->leave($__internal_b02d8ed2f3413f542f902c33e94ea956616159ea9f921a73f1526a281c863ce1_prof);

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
