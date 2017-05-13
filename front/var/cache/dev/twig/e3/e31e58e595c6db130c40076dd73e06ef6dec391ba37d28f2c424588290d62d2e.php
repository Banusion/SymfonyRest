<?php

/* default/admin.html.twig */
class __TwigTemplate_651edc9639c3cff837f77a94d1a88d1e88230d9a685849adb3d19c5407a7d39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b65dfc7595af7749fcecd99bc62564252902f0089b32f1e136c6b6c7bb7c1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b65dfc7595af7749fcecd99bc62564252902f0089b32f1e136c6b6c7bb7c1a1->enter($__internal_3b65dfc7595af7749fcecd99bc62564252902f0089b32f1e136c6b6c7bb7c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_635dd567c60285a37b5e0deef80856121311ca76d2394a4375953d40748fc5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635dd567c60285a37b5e0deef80856121311ca76d2394a4375953d40748fc5be->enter($__internal_635dd567c60285a37b5e0deef80856121311ca76d2394a4375953d40748fc5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b65dfc7595af7749fcecd99bc62564252902f0089b32f1e136c6b6c7bb7c1a1->leave($__internal_3b65dfc7595af7749fcecd99bc62564252902f0089b32f1e136c6b6c7bb7c1a1_prof);

        
        $__internal_635dd567c60285a37b5e0deef80856121311ca76d2394a4375953d40748fc5be->leave($__internal_635dd567c60285a37b5e0deef80856121311ca76d2394a4375953d40748fc5be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53f23c98a61822e5f64ed579804fa9d7cf5db66f9cc0347c217e78c0b6c60f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f23c98a61822e5f64ed579804fa9d7cf5db66f9cc0347c217e78c0b6c60f10->enter($__internal_53f23c98a61822e5f64ed579804fa9d7cf5db66f9cc0347c217e78c0b6c60f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb1ec77fc5726836a394186c0330272036154b052236a3f4d1cd46c2187c983e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1ec77fc5726836a394186c0330272036154b052236a3f4d1cd46c2187c983e->enter($__internal_cb1ec77fc5726836a394186c0330272036154b052236a3f4d1cd46c2187c983e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Administration</h1>
    <p class=\"lead\">If you can access this page, it's because you are authenticated.</p>
    <p class=\"lead\">
        Actually you are!
        <br />
        We have an access token: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "
    </p>
";
        
        $__internal_cb1ec77fc5726836a394186c0330272036154b052236a3f4d1cd46c2187c983e->leave($__internal_cb1ec77fc5726836a394186c0330272036154b052236a3f4d1cd46c2187c983e_prof);

        
        $__internal_53f23c98a61822e5f64ed579804fa9d7cf5db66f9cc0347c217e78c0b6c60f10->leave($__internal_53f23c98a61822e5f64ed579804fa9d7cf5db66f9cc0347c217e78c0b6c60f10_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Administration</h1>
    <p class=\"lead\">If you can access this page, it's because you are authenticated.</p>
    <p class=\"lead\">
        Actually you are!
        <br />
        We have an access token: {{ app.user.username }}
    </p>
{% endblock %}
", "default/admin.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/app/Resources/views/default/admin.html.twig");
    }
}
