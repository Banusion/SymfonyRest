<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_51bfe31630c377fc371c8196bdfe47319d29367d8d16f06a9371edb973db6401 extends Twig_Template
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
        $__internal_c5c61c42071bb0eba04a1271bd405cdc7f05581a99802dc25d8c5f87715fce37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c61c42071bb0eba04a1271bd405cdc7f05581a99802dc25d8c5f87715fce37->enter($__internal_c5c61c42071bb0eba04a1271bd405cdc7f05581a99802dc25d8c5f87715fce37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a46654363447ed2bfe5948abc93459a8e8f11ec6d8b91ecff5bb2da3761b8f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46654363447ed2bfe5948abc93459a8e8f11ec6d8b91ecff5bb2da3761b8f36->enter($__internal_a46654363447ed2bfe5948abc93459a8e8f11ec6d8b91ecff5bb2da3761b8f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c61c42071bb0eba04a1271bd405cdc7f05581a99802dc25d8c5f87715fce37->leave($__internal_c5c61c42071bb0eba04a1271bd405cdc7f05581a99802dc25d8c5f87715fce37_prof);

        
        $__internal_a46654363447ed2bfe5948abc93459a8e8f11ec6d8b91ecff5bb2da3761b8f36->leave($__internal_a46654363447ed2bfe5948abc93459a8e8f11ec6d8b91ecff5bb2da3761b8f36_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2336f60f35c2132075d211c5889751fdbb13509f10f69d8276b8214a07c1e554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2336f60f35c2132075d211c5889751fdbb13509f10f69d8276b8214a07c1e554->enter($__internal_2336f60f35c2132075d211c5889751fdbb13509f10f69d8276b8214a07c1e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_66907cb681b3dd9ef50b6c3cb9bdcd4f7b040ef4b313b5894c8f8533a5c14b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66907cb681b3dd9ef50b6c3cb9bdcd4f7b040ef4b313b5894c8f8533a5c14b3d->enter($__internal_66907cb681b3dd9ef50b6c3cb9bdcd4f7b040ef4b313b5894c8f8533a5c14b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_66907cb681b3dd9ef50b6c3cb9bdcd4f7b040ef4b313b5894c8f8533a5c14b3d->leave($__internal_66907cb681b3dd9ef50b6c3cb9bdcd4f7b040ef4b313b5894c8f8533a5c14b3d_prof);

        
        $__internal_2336f60f35c2132075d211c5889751fdbb13509f10f69d8276b8214a07c1e554->leave($__internal_2336f60f35c2132075d211c5889751fdbb13509f10f69d8276b8214a07c1e554_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de73de65db70450ff7a3f36e6219acb7eab482453856d7fbdaf9c04feb2f8275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de73de65db70450ff7a3f36e6219acb7eab482453856d7fbdaf9c04feb2f8275->enter($__internal_de73de65db70450ff7a3f36e6219acb7eab482453856d7fbdaf9c04feb2f8275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3f4fa0118273a2b70355b0388c3d79d4c2b5130e7348f56407f0e74459754ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f4fa0118273a2b70355b0388c3d79d4c2b5130e7348f56407f0e74459754ed->enter($__internal_a3f4fa0118273a2b70355b0388c3d79d4c2b5130e7348f56407f0e74459754ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a3f4fa0118273a2b70355b0388c3d79d4c2b5130e7348f56407f0e74459754ed->leave($__internal_a3f4fa0118273a2b70355b0388c3d79d4c2b5130e7348f56407f0e74459754ed_prof);

        
        $__internal_de73de65db70450ff7a3f36e6219acb7eab482453856d7fbdaf9c04feb2f8275->leave($__internal_de73de65db70450ff7a3f36e6219acb7eab482453856d7fbdaf9c04feb2f8275_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "WebProfilerBundle:Profiler:info.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
