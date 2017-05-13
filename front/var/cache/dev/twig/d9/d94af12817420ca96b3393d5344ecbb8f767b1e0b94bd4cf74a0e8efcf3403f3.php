<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7cacee10de52ae432a490aaab44f4a1e4357f9a94aef725644c9c48a587592bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00ff3ff17567f2c51a96b150b3ec96626d90f862d240954dbfaba48ef7c57ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ff3ff17567f2c51a96b150b3ec96626d90f862d240954dbfaba48ef7c57ad0->enter($__internal_00ff3ff17567f2c51a96b150b3ec96626d90f862d240954dbfaba48ef7c57ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_875318026a6f517113d5d9981dd2ac80980a3b2289f8275d571f85c711cf42b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875318026a6f517113d5d9981dd2ac80980a3b2289f8275d571f85c711cf42b7->enter($__internal_875318026a6f517113d5d9981dd2ac80980a3b2289f8275d571f85c711cf42b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_00ff3ff17567f2c51a96b150b3ec96626d90f862d240954dbfaba48ef7c57ad0->leave($__internal_00ff3ff17567f2c51a96b150b3ec96626d90f862d240954dbfaba48ef7c57ad0_prof);

        
        $__internal_875318026a6f517113d5d9981dd2ac80980a3b2289f8275d571f85c711cf42b7->leave($__internal_875318026a6f517113d5d9981dd2ac80980a3b2289f8275d571f85c711cf42b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfcd663075345204347e3d47a2ef72668cb13e15bf72db6e3f0c4131890c7169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcd663075345204347e3d47a2ef72668cb13e15bf72db6e3f0c4131890c7169->enter($__internal_cfcd663075345204347e3d47a2ef72668cb13e15bf72db6e3f0c4131890c7169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e9579847cc01e78cf6fa056b79c343b094d01e20fca78bdcfb5302e1f8652fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9579847cc01e78cf6fa056b79c343b094d01e20fca78bdcfb5302e1f8652fb->enter($__internal_1e9579847cc01e78cf6fa056b79c343b094d01e20fca78bdcfb5302e1f8652fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e9579847cc01e78cf6fa056b79c343b094d01e20fca78bdcfb5302e1f8652fb->leave($__internal_1e9579847cc01e78cf6fa056b79c343b094d01e20fca78bdcfb5302e1f8652fb_prof);

        
        $__internal_cfcd663075345204347e3d47a2ef72668cb13e15bf72db6e3f0c4131890c7169->leave($__internal_cfcd663075345204347e3d47a2ef72668cb13e15bf72db6e3f0c4131890c7169_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
