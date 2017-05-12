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
        $__internal_e098733e6e88a7d4ea3fbc63ec916b1103a6e45b49ff62379a89aaf1ed62d1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e098733e6e88a7d4ea3fbc63ec916b1103a6e45b49ff62379a89aaf1ed62d1bd->enter($__internal_e098733e6e88a7d4ea3fbc63ec916b1103a6e45b49ff62379a89aaf1ed62d1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bb378494e2287469c4a3758b52b030910a8f9d6ff2b1c3150be6f68facb59c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb378494e2287469c4a3758b52b030910a8f9d6ff2b1c3150be6f68facb59c5f->enter($__internal_bb378494e2287469c4a3758b52b030910a8f9d6ff2b1c3150be6f68facb59c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e098733e6e88a7d4ea3fbc63ec916b1103a6e45b49ff62379a89aaf1ed62d1bd->leave($__internal_e098733e6e88a7d4ea3fbc63ec916b1103a6e45b49ff62379a89aaf1ed62d1bd_prof);

        
        $__internal_bb378494e2287469c4a3758b52b030910a8f9d6ff2b1c3150be6f68facb59c5f->leave($__internal_bb378494e2287469c4a3758b52b030910a8f9d6ff2b1c3150be6f68facb59c5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25d13f0e8270993980b6e07d6bed7295173f0d8ca630eddfe58870b503395ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d13f0e8270993980b6e07d6bed7295173f0d8ca630eddfe58870b503395ad9->enter($__internal_25d13f0e8270993980b6e07d6bed7295173f0d8ca630eddfe58870b503395ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d9ccdb60f8bd7c184b2d81a0a9ac7d8d608135744082f6df9b8d7eebe28ad4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9ccdb60f8bd7c184b2d81a0a9ac7d8d608135744082f6df9b8d7eebe28ad4c->enter($__internal_3d9ccdb60f8bd7c184b2d81a0a9ac7d8d608135744082f6df9b8d7eebe28ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d9ccdb60f8bd7c184b2d81a0a9ac7d8d608135744082f6df9b8d7eebe28ad4c->leave($__internal_3d9ccdb60f8bd7c184b2d81a0a9ac7d8d608135744082f6df9b8d7eebe28ad4c_prof);

        
        $__internal_25d13f0e8270993980b6e07d6bed7295173f0d8ca630eddfe58870b503395ad9->leave($__internal_25d13f0e8270993980b6e07d6bed7295173f0d8ca630eddfe58870b503395ad9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e161166497ea17d202ac63a519787993f121cd90038a27596ef867146e8fb132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e161166497ea17d202ac63a519787993f121cd90038a27596ef867146e8fb132->enter($__internal_e161166497ea17d202ac63a519787993f121cd90038a27596ef867146e8fb132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ef59111d1f30525ffeca2f9dbd56bbd3f3d79bb166572576028e17ea8e435f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef59111d1f30525ffeca2f9dbd56bbd3f3d79bb166572576028e17ea8e435f4->enter($__internal_5ef59111d1f30525ffeca2f9dbd56bbd3f3d79bb166572576028e17ea8e435f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ef59111d1f30525ffeca2f9dbd56bbd3f3d79bb166572576028e17ea8e435f4->leave($__internal_5ef59111d1f30525ffeca2f9dbd56bbd3f3d79bb166572576028e17ea8e435f4_prof);

        
        $__internal_e161166497ea17d202ac63a519787993f121cd90038a27596ef867146e8fb132->leave($__internal_e161166497ea17d202ac63a519787993f121cd90038a27596ef867146e8fb132_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6493f9513026e0158c17637613a7300ab7624751b728ff76391bfcd0aebda1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6493f9513026e0158c17637613a7300ab7624751b728ff76391bfcd0aebda1cd->enter($__internal_6493f9513026e0158c17637613a7300ab7624751b728ff76391bfcd0aebda1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_893d43e334cd0c1fa57f4ed3b06dc727be5db90f31480c1d37db7a03ad4ed8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893d43e334cd0c1fa57f4ed3b06dc727be5db90f31480c1d37db7a03ad4ed8bc->enter($__internal_893d43e334cd0c1fa57f4ed3b06dc727be5db90f31480c1d37db7a03ad4ed8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_893d43e334cd0c1fa57f4ed3b06dc727be5db90f31480c1d37db7a03ad4ed8bc->leave($__internal_893d43e334cd0c1fa57f4ed3b06dc727be5db90f31480c1d37db7a03ad4ed8bc_prof);

        
        $__internal_6493f9513026e0158c17637613a7300ab7624751b728ff76391bfcd0aebda1cd->leave($__internal_6493f9513026e0158c17637613a7300ab7624751b728ff76391bfcd0aebda1cd_prof);

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
