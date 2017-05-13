<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6bb4f701f04cc48f13a6f301e62482d8ccd1949f9853757b47891979d2144303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08428f40dd061985203d6a3bac13f6b572b12bd2128bf5ce3618f204eb09e4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08428f40dd061985203d6a3bac13f6b572b12bd2128bf5ce3618f204eb09e4c2->enter($__internal_08428f40dd061985203d6a3bac13f6b572b12bd2128bf5ce3618f204eb09e4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f97a04c2334f711fc44acafb2a158d2d5a138e77bd65e62a02efe8a9a690446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97a04c2334f711fc44acafb2a158d2d5a138e77bd65e62a02efe8a9a690446c->enter($__internal_f97a04c2334f711fc44acafb2a158d2d5a138e77bd65e62a02efe8a9a690446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08428f40dd061985203d6a3bac13f6b572b12bd2128bf5ce3618f204eb09e4c2->leave($__internal_08428f40dd061985203d6a3bac13f6b572b12bd2128bf5ce3618f204eb09e4c2_prof);

        
        $__internal_f97a04c2334f711fc44acafb2a158d2d5a138e77bd65e62a02efe8a9a690446c->leave($__internal_f97a04c2334f711fc44acafb2a158d2d5a138e77bd65e62a02efe8a9a690446c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e18ee9a05edf30e1310efb68238325ca76fb884d5f30a03985fded936a726966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18ee9a05edf30e1310efb68238325ca76fb884d5f30a03985fded936a726966->enter($__internal_e18ee9a05edf30e1310efb68238325ca76fb884d5f30a03985fded936a726966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62764d279edac7246c149537d42a025c3047798c2bfce46f617ba5da1a76b06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62764d279edac7246c149537d42a025c3047798c2bfce46f617ba5da1a76b06b->enter($__internal_62764d279edac7246c149537d42a025c3047798c2bfce46f617ba5da1a76b06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_62764d279edac7246c149537d42a025c3047798c2bfce46f617ba5da1a76b06b->leave($__internal_62764d279edac7246c149537d42a025c3047798c2bfce46f617ba5da1a76b06b_prof);

        
        $__internal_e18ee9a05edf30e1310efb68238325ca76fb884d5f30a03985fded936a726966->leave($__internal_e18ee9a05edf30e1310efb68238325ca76fb884d5f30a03985fded936a726966_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d69a81ab0b56cafbb3779f5e0d0de1d586912eb9897c5fae88d73de189384b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69a81ab0b56cafbb3779f5e0d0de1d586912eb9897c5fae88d73de189384b51->enter($__internal_d69a81ab0b56cafbb3779f5e0d0de1d586912eb9897c5fae88d73de189384b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ac59652955fae06d17caa30b0e4ecfe2f334edf169cd2cb90920de003260ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac59652955fae06d17caa30b0e4ecfe2f334edf169cd2cb90920de003260ea8->enter($__internal_5ac59652955fae06d17caa30b0e4ecfe2f334edf169cd2cb90920de003260ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5ac59652955fae06d17caa30b0e4ecfe2f334edf169cd2cb90920de003260ea8->leave($__internal_5ac59652955fae06d17caa30b0e4ecfe2f334edf169cd2cb90920de003260ea8_prof);

        
        $__internal_d69a81ab0b56cafbb3779f5e0d0de1d586912eb9897c5fae88d73de189384b51->leave($__internal_d69a81ab0b56cafbb3779f5e0d0de1d586912eb9897c5fae88d73de189384b51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
