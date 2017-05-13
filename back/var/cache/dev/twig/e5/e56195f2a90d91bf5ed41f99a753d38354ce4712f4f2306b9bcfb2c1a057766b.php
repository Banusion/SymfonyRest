<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f45cd08f503532f43087643f0fa5cb98e9a6782d645d31ea098fdfed3688686e extends Twig_Template
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
        $__internal_b5d8dbfb78e3087e17c09cba06a5f6b5adc222250f9e71821c4542fe7316bd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d8dbfb78e3087e17c09cba06a5f6b5adc222250f9e71821c4542fe7316bd80->enter($__internal_b5d8dbfb78e3087e17c09cba06a5f6b5adc222250f9e71821c4542fe7316bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_a6ad874f1b1bc1302a8cd5e6a057e707befd817db0657d3296a7868a44e60f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ad874f1b1bc1302a8cd5e6a057e707befd817db0657d3296a7868a44e60f3c->enter($__internal_a6ad874f1b1bc1302a8cd5e6a057e707befd817db0657d3296a7868a44e60f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_b5d8dbfb78e3087e17c09cba06a5f6b5adc222250f9e71821c4542fe7316bd80->leave($__internal_b5d8dbfb78e3087e17c09cba06a5f6b5adc222250f9e71821c4542fe7316bd80_prof);

        
        $__internal_a6ad874f1b1bc1302a8cd5e6a057e707befd817db0657d3296a7868a44e60f3c->leave($__internal_a6ad874f1b1bc1302a8cd5e6a057e707befd817db0657d3296a7868a44e60f3c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "WebProfilerBundle:Profiler:header.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
