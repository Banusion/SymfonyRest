<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a43875b79ea51d1957ce6fec4f9ab0f30a35dc920cdabbf2ed00e8f3fed60ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_569d6aca053e8ebb1c78446073510083f7725c5372eefd53c7254635a21016fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569d6aca053e8ebb1c78446073510083f7725c5372eefd53c7254635a21016fe->enter($__internal_569d6aca053e8ebb1c78446073510083f7725c5372eefd53c7254635a21016fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_abe8aa1aa18147e1acdef04bc1ebd51fa3a67df70e2c99ed539e42eb2f93086d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe8aa1aa18147e1acdef04bc1ebd51fa3a67df70e2c99ed539e42eb2f93086d->enter($__internal_abe8aa1aa18147e1acdef04bc1ebd51fa3a67df70e2c99ed539e42eb2f93086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569d6aca053e8ebb1c78446073510083f7725c5372eefd53c7254635a21016fe->leave($__internal_569d6aca053e8ebb1c78446073510083f7725c5372eefd53c7254635a21016fe_prof);

        
        $__internal_abe8aa1aa18147e1acdef04bc1ebd51fa3a67df70e2c99ed539e42eb2f93086d->leave($__internal_abe8aa1aa18147e1acdef04bc1ebd51fa3a67df70e2c99ed539e42eb2f93086d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8174dcc655d4438450fbd63c96d48dbfbaa54f10142d2f844a25ab589306a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8174dcc655d4438450fbd63c96d48dbfbaa54f10142d2f844a25ab589306a10->enter($__internal_b8174dcc655d4438450fbd63c96d48dbfbaa54f10142d2f844a25ab589306a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2997f6220db78c7f74a2c41455b5eb11b1876295b72805990e014950f14c8c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2997f6220db78c7f74a2c41455b5eb11b1876295b72805990e014950f14c8c95->enter($__internal_2997f6220db78c7f74a2c41455b5eb11b1876295b72805990e014950f14c8c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2997f6220db78c7f74a2c41455b5eb11b1876295b72805990e014950f14c8c95->leave($__internal_2997f6220db78c7f74a2c41455b5eb11b1876295b72805990e014950f14c8c95_prof);

        
        $__internal_b8174dcc655d4438450fbd63c96d48dbfbaa54f10142d2f844a25ab589306a10->leave($__internal_b8174dcc655d4438450fbd63c96d48dbfbaa54f10142d2f844a25ab589306a10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_719f7e4a0d9776ea0ef95ca15933f3ef4ab07b79734febad4238ae9b0cbcd4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719f7e4a0d9776ea0ef95ca15933f3ef4ab07b79734febad4238ae9b0cbcd4b9->enter($__internal_719f7e4a0d9776ea0ef95ca15933f3ef4ab07b79734febad4238ae9b0cbcd4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4643a3030992157b9529b3eeb90de8bf2fea65545eef8c09f1926f3d1dd1e692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4643a3030992157b9529b3eeb90de8bf2fea65545eef8c09f1926f3d1dd1e692->enter($__internal_4643a3030992157b9529b3eeb90de8bf2fea65545eef8c09f1926f3d1dd1e692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4643a3030992157b9529b3eeb90de8bf2fea65545eef8c09f1926f3d1dd1e692->leave($__internal_4643a3030992157b9529b3eeb90de8bf2fea65545eef8c09f1926f3d1dd1e692_prof);

        
        $__internal_719f7e4a0d9776ea0ef95ca15933f3ef4ab07b79734febad4238ae9b0cbcd4b9->leave($__internal_719f7e4a0d9776ea0ef95ca15933f3ef4ab07b79734febad4238ae9b0cbcd4b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b07027bf1637b78324263040f7a700ea56664a491907f3ef41ef8269d79040a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b07027bf1637b78324263040f7a700ea56664a491907f3ef41ef8269d79040a->enter($__internal_9b07027bf1637b78324263040f7a700ea56664a491907f3ef41ef8269d79040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d75c645dbd02f66d969635ba441ec4f756251b586ee55473c7a1c0a968b1024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d75c645dbd02f66d969635ba441ec4f756251b586ee55473c7a1c0a968b1024->enter($__internal_9d75c645dbd02f66d969635ba441ec4f756251b586ee55473c7a1c0a968b1024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d75c645dbd02f66d969635ba441ec4f756251b586ee55473c7a1c0a968b1024->leave($__internal_9d75c645dbd02f66d969635ba441ec4f756251b586ee55473c7a1c0a968b1024_prof);

        
        $__internal_9b07027bf1637b78324263040f7a700ea56664a491907f3ef41ef8269d79040a->leave($__internal_9b07027bf1637b78324263040f7a700ea56664a491907f3ef41ef8269d79040a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "WebProfilerBundle:Collector:router.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
