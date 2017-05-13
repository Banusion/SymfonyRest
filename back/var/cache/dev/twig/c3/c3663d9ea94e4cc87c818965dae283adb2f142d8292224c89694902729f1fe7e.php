<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_9fc5acfb2dcb8e659c587db1cac37d7028abbda79e4ddbd30338acd16a13bc37 extends Twig_Template
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
        $__internal_9cb1d8b0fcc7bc9152c6a04ac502d7772229337eb7179edd82f84ab8de365a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb1d8b0fcc7bc9152c6a04ac502d7772229337eb7179edd82f84ab8de365a4c->enter($__internal_9cb1d8b0fcc7bc9152c6a04ac502d7772229337eb7179edd82f84ab8de365a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_1b2460e5c8806e34cc54d4356419483c9dee1944cd41dd3dbc1637fa0b15ceb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2460e5c8806e34cc54d4356419483c9dee1944cd41dd3dbc1637fa0b15ceb9->enter($__internal_1b2460e5c8806e34cc54d4356419483c9dee1944cd41dd3dbc1637fa0b15ceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_9cb1d8b0fcc7bc9152c6a04ac502d7772229337eb7179edd82f84ab8de365a4c->leave($__internal_9cb1d8b0fcc7bc9152c6a04ac502d7772229337eb7179edd82f84ab8de365a4c_prof);

        
        $__internal_1b2460e5c8806e34cc54d4356419483c9dee1944cd41dd3dbc1637fa0b15ceb9->leave($__internal_1b2460e5c8806e34cc54d4356419483c9dee1944cd41dd3dbc1637fa0b15ceb9_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
