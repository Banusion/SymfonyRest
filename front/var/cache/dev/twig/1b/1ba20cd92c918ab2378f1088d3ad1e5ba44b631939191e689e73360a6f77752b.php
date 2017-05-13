<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ff617da60729efa999ba1a68a9c0c4d420ae1cfc079c6c750114892325a55491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2157ea286c9fdf6f83dd998a8999542d85cdceef4990962411e1b58e26fefd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2157ea286c9fdf6f83dd998a8999542d85cdceef4990962411e1b58e26fefd39->enter($__internal_2157ea286c9fdf6f83dd998a8999542d85cdceef4990962411e1b58e26fefd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d324527e499e57246bb45915851545f275a3ec5abab38e8f81740c936340c3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d324527e499e57246bb45915851545f275a3ec5abab38e8f81740c936340c3da->enter($__internal_d324527e499e57246bb45915851545f275a3ec5abab38e8f81740c936340c3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2157ea286c9fdf6f83dd998a8999542d85cdceef4990962411e1b58e26fefd39->leave($__internal_2157ea286c9fdf6f83dd998a8999542d85cdceef4990962411e1b58e26fefd39_prof);

        
        $__internal_d324527e499e57246bb45915851545f275a3ec5abab38e8f81740c936340c3da->leave($__internal_d324527e499e57246bb45915851545f275a3ec5abab38e8f81740c936340c3da_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3edbe0e6c98c4b71272c7e8273f0c77abc4dc8355492a66eef5f6d5dd6db13ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edbe0e6c98c4b71272c7e8273f0c77abc4dc8355492a66eef5f6d5dd6db13ee->enter($__internal_3edbe0e6c98c4b71272c7e8273f0c77abc4dc8355492a66eef5f6d5dd6db13ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a7922c2654deeebe1b2e4eee7b1bb87c5af9395f787c7ee924fc75a44d9c3ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7922c2654deeebe1b2e4eee7b1bb87c5af9395f787c7ee924fc75a44d9c3ca0->enter($__internal_a7922c2654deeebe1b2e4eee7b1bb87c5af9395f787c7ee924fc75a44d9c3ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a7922c2654deeebe1b2e4eee7b1bb87c5af9395f787c7ee924fc75a44d9c3ca0->leave($__internal_a7922c2654deeebe1b2e4eee7b1bb87c5af9395f787c7ee924fc75a44d9c3ca0_prof);

        
        $__internal_3edbe0e6c98c4b71272c7e8273f0c77abc4dc8355492a66eef5f6d5dd6db13ee->leave($__internal_3edbe0e6c98c4b71272c7e8273f0c77abc4dc8355492a66eef5f6d5dd6db13ee_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37218aac37f888362178c277dd7320a45ba1f8d9515062d8a0ccdb6d7700a34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37218aac37f888362178c277dd7320a45ba1f8d9515062d8a0ccdb6d7700a34a->enter($__internal_37218aac37f888362178c277dd7320a45ba1f8d9515062d8a0ccdb6d7700a34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f66a0c0d1d0af4f81a0488e38260919513c27ed42f81d2c2ba804d0c2df9c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f66a0c0d1d0af4f81a0488e38260919513c27ed42f81d2c2ba804d0c2df9c1c->enter($__internal_6f66a0c0d1d0af4f81a0488e38260919513c27ed42f81d2c2ba804d0c2df9c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6f66a0c0d1d0af4f81a0488e38260919513c27ed42f81d2c2ba804d0c2df9c1c->leave($__internal_6f66a0c0d1d0af4f81a0488e38260919513c27ed42f81d2c2ba804d0c2df9c1c_prof);

        
        $__internal_37218aac37f888362178c277dd7320a45ba1f8d9515062d8a0ccdb6d7700a34a->leave($__internal_37218aac37f888362178c277dd7320a45ba1f8d9515062d8a0ccdb6d7700a34a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
