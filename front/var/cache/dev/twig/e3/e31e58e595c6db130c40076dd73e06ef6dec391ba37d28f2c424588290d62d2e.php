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
        $__internal_b788ee3da1c96f267c6c0917422c66474893f592f7d65fac16674e4f94298675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788ee3da1c96f267c6c0917422c66474893f592f7d65fac16674e4f94298675->enter($__internal_b788ee3da1c96f267c6c0917422c66474893f592f7d65fac16674e4f94298675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_9252f05574744e0f9600ff102d87660ada8e77a3b69801733b282e42d456afe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9252f05574744e0f9600ff102d87660ada8e77a3b69801733b282e42d456afe2->enter($__internal_9252f05574744e0f9600ff102d87660ada8e77a3b69801733b282e42d456afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b788ee3da1c96f267c6c0917422c66474893f592f7d65fac16674e4f94298675->leave($__internal_b788ee3da1c96f267c6c0917422c66474893f592f7d65fac16674e4f94298675_prof);

        
        $__internal_9252f05574744e0f9600ff102d87660ada8e77a3b69801733b282e42d456afe2->leave($__internal_9252f05574744e0f9600ff102d87660ada8e77a3b69801733b282e42d456afe2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7bbbc969a54c56d299ceb3c394444056c1f58f2af92a9e5f74852663b45c4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bbbc969a54c56d299ceb3c394444056c1f58f2af92a9e5f74852663b45c4f6->enter($__internal_e7bbbc969a54c56d299ceb3c394444056c1f58f2af92a9e5f74852663b45c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf429c1f9def004db9bffc4043cf930a6add0dd123d7b5ea3b0e8785b493a394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf429c1f9def004db9bffc4043cf930a6add0dd123d7b5ea3b0e8785b493a394->enter($__internal_bf429c1f9def004db9bffc4043cf930a6add0dd123d7b5ea3b0e8785b493a394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf429c1f9def004db9bffc4043cf930a6add0dd123d7b5ea3b0e8785b493a394->leave($__internal_bf429c1f9def004db9bffc4043cf930a6add0dd123d7b5ea3b0e8785b493a394_prof);

        
        $__internal_e7bbbc969a54c56d299ceb3c394444056c1f58f2af92a9e5f74852663b45c4f6->leave($__internal_e7bbbc969a54c56d299ceb3c394444056c1f58f2af92a9e5f74852663b45c4f6_prof);

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
