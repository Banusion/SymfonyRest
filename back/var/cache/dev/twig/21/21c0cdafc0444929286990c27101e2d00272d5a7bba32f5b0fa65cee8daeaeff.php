<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_865533d73a2a335549fa11c1015c775c72ba246618f577534146464b27ff1079 extends Twig_Template
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
        $__internal_d7fe05f2cbff60a5e1e3e234114b3c098dd9673d03f69455250be0d2ba2ee8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fe05f2cbff60a5e1e3e234114b3c098dd9673d03f69455250be0d2ba2ee8ba->enter($__internal_d7fe05f2cbff60a5e1e3e234114b3c098dd9673d03f69455250be0d2ba2ee8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d2454c9aaf149ef8a00a8f762c26e15a10f1bf64d78dded5f03acc0acd4d9258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2454c9aaf149ef8a00a8f762c26e15a10f1bf64d78dded5f03acc0acd4d9258->enter($__internal_d2454c9aaf149ef8a00a8f762c26e15a10f1bf64d78dded5f03acc0acd4d9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d7fe05f2cbff60a5e1e3e234114b3c098dd9673d03f69455250be0d2ba2ee8ba->leave($__internal_d7fe05f2cbff60a5e1e3e234114b3c098dd9673d03f69455250be0d2ba2ee8ba_prof);

        
        $__internal_d2454c9aaf149ef8a00a8f762c26e15a10f1bf64d78dded5f03acc0acd4d9258->leave($__internal_d2454c9aaf149ef8a00a8f762c26e15a10f1bf64d78dded5f03acc0acd4d9258_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_78c24761321ee771f72e05ee8627289ad8b63e78f0848b483eecdbff2aa035d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c24761321ee771f72e05ee8627289ad8b63e78f0848b483eecdbff2aa035d7->enter($__internal_78c24761321ee771f72e05ee8627289ad8b63e78f0848b483eecdbff2aa035d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_016f706b3b3e1729288e5b75072c4c9764725b8ecb402393738a46db69243f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016f706b3b3e1729288e5b75072c4c9764725b8ecb402393738a46db69243f3e->enter($__internal_016f706b3b3e1729288e5b75072c4c9764725b8ecb402393738a46db69243f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_016f706b3b3e1729288e5b75072c4c9764725b8ecb402393738a46db69243f3e->leave($__internal_016f706b3b3e1729288e5b75072c4c9764725b8ecb402393738a46db69243f3e_prof);

        
        $__internal_78c24761321ee771f72e05ee8627289ad8b63e78f0848b483eecdbff2aa035d7->leave($__internal_78c24761321ee771f72e05ee8627289ad8b63e78f0848b483eecdbff2aa035d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
