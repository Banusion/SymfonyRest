<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3d6114ac277fc36e13ab548a7db730b105e4d02d06ccd2ea07d84dfc9409409b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_217b5973a7fa2e4c35e3c47b00e7fbbebdfb00ffe1f8083bced461bb1495e296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217b5973a7fa2e4c35e3c47b00e7fbbebdfb00ffe1f8083bced461bb1495e296->enter($__internal_217b5973a7fa2e4c35e3c47b00e7fbbebdfb00ffe1f8083bced461bb1495e296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_457f3d334d1a9fc253d17cc25f98be16c733077a55ce2b32213d65916bf55369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457f3d334d1a9fc253d17cc25f98be16c733077a55ce2b32213d65916bf55369->enter($__internal_457f3d334d1a9fc253d17cc25f98be16c733077a55ce2b32213d65916bf55369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_217b5973a7fa2e4c35e3c47b00e7fbbebdfb00ffe1f8083bced461bb1495e296->leave($__internal_217b5973a7fa2e4c35e3c47b00e7fbbebdfb00ffe1f8083bced461bb1495e296_prof);

        
        $__internal_457f3d334d1a9fc253d17cc25f98be16c733077a55ce2b32213d65916bf55369->leave($__internal_457f3d334d1a9fc253d17cc25f98be16c733077a55ce2b32213d65916bf55369_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
