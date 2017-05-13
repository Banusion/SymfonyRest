<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_751df7032a5f3b994b16aa216943c57cc9ac88d1daee9645b475419ec13be99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfb92780a0d37d90121572ab1858717131bf9ac03daefcfe09031621d5f14070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb92780a0d37d90121572ab1858717131bf9ac03daefcfe09031621d5f14070->enter($__internal_dfb92780a0d37d90121572ab1858717131bf9ac03daefcfe09031621d5f14070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_eb7a4401bee5b235bbe35c849b8f342e02f585c72f2b987ab710bf6d6e76128f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7a4401bee5b235bbe35c849b8f342e02f585c72f2b987ab710bf6d6e76128f->enter($__internal_eb7a4401bee5b235bbe35c849b8f342e02f585c72f2b987ab710bf6d6e76128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb92780a0d37d90121572ab1858717131bf9ac03daefcfe09031621d5f14070->leave($__internal_dfb92780a0d37d90121572ab1858717131bf9ac03daefcfe09031621d5f14070_prof);

        
        $__internal_eb7a4401bee5b235bbe35c849b8f342e02f585c72f2b987ab710bf6d6e76128f->leave($__internal_eb7a4401bee5b235bbe35c849b8f342e02f585c72f2b987ab710bf6d6e76128f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d53a6999fff529938cb76d834205469c213c7b3faf4003e4bdfa74255c6bc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d53a6999fff529938cb76d834205469c213c7b3faf4003e4bdfa74255c6bc33->enter($__internal_5d53a6999fff529938cb76d834205469c213c7b3faf4003e4bdfa74255c6bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d872d0c659a211f356c3a6747ea5856cc24368cf0bcd947f466c8e7fcaa2580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d872d0c659a211f356c3a6747ea5856cc24368cf0bcd947f466c8e7fcaa2580->enter($__internal_3d872d0c659a211f356c3a6747ea5856cc24368cf0bcd947f466c8e7fcaa2580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3d872d0c659a211f356c3a6747ea5856cc24368cf0bcd947f466c8e7fcaa2580->leave($__internal_3d872d0c659a211f356c3a6747ea5856cc24368cf0bcd947f466c8e7fcaa2580_prof);

        
        $__internal_5d53a6999fff529938cb76d834205469c213c7b3faf4003e4bdfa74255c6bc33->leave($__internal_5d53a6999fff529938cb76d834205469c213c7b3faf4003e4bdfa74255c6bc33_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
