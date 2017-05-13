<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0eae24c94c42765b66190b8e08d2ed42efec70b9262f230afb3e1e7b6c2df39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28c802e9b83df9095796b59435a0ddbd9922d5bf6507d4f682339dfad418c0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c802e9b83df9095796b59435a0ddbd9922d5bf6507d4f682339dfad418c0fa->enter($__internal_28c802e9b83df9095796b59435a0ddbd9922d5bf6507d4f682339dfad418c0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6eeff80c509a3a2d141b195e8f200b93d39df648baf052f4ae70e14ff53cf0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eeff80c509a3a2d141b195e8f200b93d39df648baf052f4ae70e14ff53cf0bf->enter($__internal_6eeff80c509a3a2d141b195e8f200b93d39df648baf052f4ae70e14ff53cf0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28c802e9b83df9095796b59435a0ddbd9922d5bf6507d4f682339dfad418c0fa->leave($__internal_28c802e9b83df9095796b59435a0ddbd9922d5bf6507d4f682339dfad418c0fa_prof);

        
        $__internal_6eeff80c509a3a2d141b195e8f200b93d39df648baf052f4ae70e14ff53cf0bf->leave($__internal_6eeff80c509a3a2d141b195e8f200b93d39df648baf052f4ae70e14ff53cf0bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d7748191d80288d233885c03b2ea9c1d7f47492efd9b5756c96bf58751d9342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7748191d80288d233885c03b2ea9c1d7f47492efd9b5756c96bf58751d9342->enter($__internal_1d7748191d80288d233885c03b2ea9c1d7f47492efd9b5756c96bf58751d9342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5819ce44f81840ea8ec6ecb2a2ce36dd32415f59f525c5d956583095de85b18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5819ce44f81840ea8ec6ecb2a2ce36dd32415f59f525c5d956583095de85b18f->enter($__internal_5819ce44f81840ea8ec6ecb2a2ce36dd32415f59f525c5d956583095de85b18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5819ce44f81840ea8ec6ecb2a2ce36dd32415f59f525c5d956583095de85b18f->leave($__internal_5819ce44f81840ea8ec6ecb2a2ce36dd32415f59f525c5d956583095de85b18f_prof);

        
        $__internal_1d7748191d80288d233885c03b2ea9c1d7f47492efd9b5756c96bf58751d9342->leave($__internal_1d7748191d80288d233885c03b2ea9c1d7f47492efd9b5756c96bf58751d9342_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a16311275dc694ed7b3e5a16649b167b6ee6d5263c5bc40f69b11f3299eef2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16311275dc694ed7b3e5a16649b167b6ee6d5263c5bc40f69b11f3299eef2e0->enter($__internal_a16311275dc694ed7b3e5a16649b167b6ee6d5263c5bc40f69b11f3299eef2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b605c1f7488e9acda6f067bbb6d95ce042948f62781d53806595f61d79f81591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b605c1f7488e9acda6f067bbb6d95ce042948f62781d53806595f61d79f81591->enter($__internal_b605c1f7488e9acda6f067bbb6d95ce042948f62781d53806595f61d79f81591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b605c1f7488e9acda6f067bbb6d95ce042948f62781d53806595f61d79f81591->leave($__internal_b605c1f7488e9acda6f067bbb6d95ce042948f62781d53806595f61d79f81591_prof);

        
        $__internal_a16311275dc694ed7b3e5a16649b167b6ee6d5263c5bc40f69b11f3299eef2e0->leave($__internal_a16311275dc694ed7b3e5a16649b167b6ee6d5263c5bc40f69b11f3299eef2e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4b8a4d728bba87ff7910d4c6e58511c2a2556ee01b3a4512297353166f3cd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b8a4d728bba87ff7910d4c6e58511c2a2556ee01b3a4512297353166f3cd31->enter($__internal_c4b8a4d728bba87ff7910d4c6e58511c2a2556ee01b3a4512297353166f3cd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1de9127dbbb5304ce608031f273800d3eddc346176de8fbc3c4b9fa8fdbc7e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de9127dbbb5304ce608031f273800d3eddc346176de8fbc3c4b9fa8fdbc7e1b->enter($__internal_1de9127dbbb5304ce608031f273800d3eddc346176de8fbc3c4b9fa8fdbc7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1de9127dbbb5304ce608031f273800d3eddc346176de8fbc3c4b9fa8fdbc7e1b->leave($__internal_1de9127dbbb5304ce608031f273800d3eddc346176de8fbc3c4b9fa8fdbc7e1b_prof);

        
        $__internal_c4b8a4d728bba87ff7910d4c6e58511c2a2556ee01b3a4512297353166f3cd31->leave($__internal_c4b8a4d728bba87ff7910d4c6e58511c2a2556ee01b3a4512297353166f3cd31_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
