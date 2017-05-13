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
        $__internal_0fb4d12c8a6c932da96808818c2770be4bb7d8528529c37741b88a2244528396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb4d12c8a6c932da96808818c2770be4bb7d8528529c37741b88a2244528396->enter($__internal_0fb4d12c8a6c932da96808818c2770be4bb7d8528529c37741b88a2244528396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_58a5aaba0094b19b27f8f7e7db32152b80ad7c2ce46601a8ae0bcc48dbe5f45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a5aaba0094b19b27f8f7e7db32152b80ad7c2ce46601a8ae0bcc48dbe5f45e->enter($__internal_58a5aaba0094b19b27f8f7e7db32152b80ad7c2ce46601a8ae0bcc48dbe5f45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb4d12c8a6c932da96808818c2770be4bb7d8528529c37741b88a2244528396->leave($__internal_0fb4d12c8a6c932da96808818c2770be4bb7d8528529c37741b88a2244528396_prof);

        
        $__internal_58a5aaba0094b19b27f8f7e7db32152b80ad7c2ce46601a8ae0bcc48dbe5f45e->leave($__internal_58a5aaba0094b19b27f8f7e7db32152b80ad7c2ce46601a8ae0bcc48dbe5f45e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5621aa035f28e2549e24fc770e6ad95ca69dbb102edfde216e348a1ddffb248f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5621aa035f28e2549e24fc770e6ad95ca69dbb102edfde216e348a1ddffb248f->enter($__internal_5621aa035f28e2549e24fc770e6ad95ca69dbb102edfde216e348a1ddffb248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c90b4c91848ae2843536533e5b845ccc0ec8d7c8c382ef666b7b97aeaaaf5c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90b4c91848ae2843536533e5b845ccc0ec8d7c8c382ef666b7b97aeaaaf5c0f->enter($__internal_c90b4c91848ae2843536533e5b845ccc0ec8d7c8c382ef666b7b97aeaaaf5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c90b4c91848ae2843536533e5b845ccc0ec8d7c8c382ef666b7b97aeaaaf5c0f->leave($__internal_c90b4c91848ae2843536533e5b845ccc0ec8d7c8c382ef666b7b97aeaaaf5c0f_prof);

        
        $__internal_5621aa035f28e2549e24fc770e6ad95ca69dbb102edfde216e348a1ddffb248f->leave($__internal_5621aa035f28e2549e24fc770e6ad95ca69dbb102edfde216e348a1ddffb248f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f4c453ba8782acc4ce99710bc66f2b757fc4a645a3df805db4bf0d263f50a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4c453ba8782acc4ce99710bc66f2b757fc4a645a3df805db4bf0d263f50a9b->enter($__internal_2f4c453ba8782acc4ce99710bc66f2b757fc4a645a3df805db4bf0d263f50a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1cdfc9387a10644f57bca600aa5dac05f91e78e071c5aa00da0dd4326575f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cdfc9387a10644f57bca600aa5dac05f91e78e071c5aa00da0dd4326575f36->enter($__internal_b1cdfc9387a10644f57bca600aa5dac05f91e78e071c5aa00da0dd4326575f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1cdfc9387a10644f57bca600aa5dac05f91e78e071c5aa00da0dd4326575f36->leave($__internal_b1cdfc9387a10644f57bca600aa5dac05f91e78e071c5aa00da0dd4326575f36_prof);

        
        $__internal_2f4c453ba8782acc4ce99710bc66f2b757fc4a645a3df805db4bf0d263f50a9b->leave($__internal_2f4c453ba8782acc4ce99710bc66f2b757fc4a645a3df805db4bf0d263f50a9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2f98d327647e5ccdb30fe8f2225b05ba62bf368b738e76fdbc0230bc0d8d69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f98d327647e5ccdb30fe8f2225b05ba62bf368b738e76fdbc0230bc0d8d69a->enter($__internal_d2f98d327647e5ccdb30fe8f2225b05ba62bf368b738e76fdbc0230bc0d8d69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecb7c66be71846cb446bfa93574c1e2305bb7cec2e13440ff2d34896a9e5b825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb7c66be71846cb446bfa93574c1e2305bb7cec2e13440ff2d34896a9e5b825->enter($__internal_ecb7c66be71846cb446bfa93574c1e2305bb7cec2e13440ff2d34896a9e5b825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ecb7c66be71846cb446bfa93574c1e2305bb7cec2e13440ff2d34896a9e5b825->leave($__internal_ecb7c66be71846cb446bfa93574c1e2305bb7cec2e13440ff2d34896a9e5b825_prof);

        
        $__internal_d2f98d327647e5ccdb30fe8f2225b05ba62bf368b738e76fdbc0230bc0d8d69a->leave($__internal_d2f98d327647e5ccdb30fe8f2225b05ba62bf368b738e76fdbc0230bc0d8d69a_prof);

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
