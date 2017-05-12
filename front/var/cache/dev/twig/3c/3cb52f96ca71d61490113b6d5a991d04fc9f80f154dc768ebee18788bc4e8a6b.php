<?php

/* base.html.twig */
class __TwigTemplate_7c53f3e8e417808e4fef16502b24ca43bccbcc3a44c9594d4b559fd21edc6e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_499d6ea7870718a85c7b42bdad16368fbc7b2e621b127794494f68563ba65a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499d6ea7870718a85c7b42bdad16368fbc7b2e621b127794494f68563ba65a3d->enter($__internal_499d6ea7870718a85c7b42bdad16368fbc7b2e621b127794494f68563ba65a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ff5c69db56776cf4048e589295eb837e64bad65c90a2027f3a553c882a435b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5c69db56776cf4048e589295eb837e64bad65c90a2027f3a553c882a435b95->enter($__internal_ff5c69db56776cf4048e589295eb837e64bad65c90a2027f3a553c882a435b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"jumbotron\">
                ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "                ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "user", array())) {
            // line 17
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" type=\"button\" class=\"btn btn-danger btn-lg\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                ";
        } else {
            // line 19
            echo "                    <a href=\"https://github.com/login/oauth/authorize?client_id=";
            echo twig_escape_filter($this->env, (isset($context["github_client_id"]) || array_key_exists("github_client_id", $context) ? $context["github_client_id"] : (function () { throw new Twig_Error_Runtime('Variable "github_client_id" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "&redirect_uri=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_auth");
            echo "\" type=\"button\" class=\"btn btn-info btn-lg\"><i class=\"fa fa-github\"></i> S'authentifier avec Github</a>
                ";
        }
        // line 21
        echo "            </div>
            <footer class=\"footer\"><p>&copy; ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p></footer>
        </div>
    </body>
</html>";
        
        $__internal_499d6ea7870718a85c7b42bdad16368fbc7b2e621b127794494f68563ba65a3d->leave($__internal_499d6ea7870718a85c7b42bdad16368fbc7b2e621b127794494f68563ba65a3d_prof);

        
        $__internal_ff5c69db56776cf4048e589295eb837e64bad65c90a2027f3a553c882a435b95->leave($__internal_ff5c69db56776cf4048e589295eb837e64bad65c90a2027f3a553c882a435b95_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1af68cf25fce39d62506743c2a25443d51e8b0cadfdfd15c8565b3540c39fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1af68cf25fce39d62506743c2a25443d51e8b0cadfdfd15c8565b3540c39fae->enter($__internal_d1af68cf25fce39d62506743c2a25443d51e8b0cadfdfd15c8565b3540c39fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_357951ae5f8f76f98039c5453c6323d0d244683f3dd8aa1e059a4398706808ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357951ae5f8f76f98039c5453c6323d0d244683f3dd8aa1e059a4398706808ee->enter($__internal_357951ae5f8f76f98039c5453c6323d0d244683f3dd8aa1e059a4398706808ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_357951ae5f8f76f98039c5453c6323d0d244683f3dd8aa1e059a4398706808ee->leave($__internal_357951ae5f8f76f98039c5453c6323d0d244683f3dd8aa1e059a4398706808ee_prof);

        
        $__internal_d1af68cf25fce39d62506743c2a25443d51e8b0cadfdfd15c8565b3540c39fae->leave($__internal_d1af68cf25fce39d62506743c2a25443d51e8b0cadfdfd15c8565b3540c39fae_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_13b73263adf9178267acf70ba22d07d1dbb998de3328becfb1c872ec49228430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b73263adf9178267acf70ba22d07d1dbb998de3328becfb1c872ec49228430->enter($__internal_13b73263adf9178267acf70ba22d07d1dbb998de3328becfb1c872ec49228430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4d0402356015fd4e34fdd369f99a3ad976db5a6f68b95008eaebd4b1b28d349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d0402356015fd4e34fdd369f99a3ad976db5a6f68b95008eaebd4b1b28d349->enter($__internal_d4d0402356015fd4e34fdd369f99a3ad976db5a6f68b95008eaebd4b1b28d349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4d0402356015fd4e34fdd369f99a3ad976db5a6f68b95008eaebd4b1b28d349->leave($__internal_d4d0402356015fd4e34fdd369f99a3ad976db5a6f68b95008eaebd4b1b28d349_prof);

        
        $__internal_13b73263adf9178267acf70ba22d07d1dbb998de3328becfb1c872ec49228430->leave($__internal_13b73263adf9178267acf70ba22d07d1dbb998de3328becfb1c872ec49228430_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  85 => 6,  71 => 22,  68 => 21,  60 => 19,  54 => 17,  51 => 16,  49 => 15,  41 => 10,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{% block title %}Welcome!{% endblock %}</title>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"jumbotron\">
                {% block body %}{% endblock %}
                {% if app.user %}
                    <a href=\"{{ path('logout') }}\" type=\"button\" class=\"btn btn-danger btn-lg\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                {% else %}
                    <a href=\"https://github.com/login/oauth/authorize?client_id={{ github_client_id }}&redirect_uri={{ url('admin_auth') }}\" type=\"button\" class=\"btn btn-info btn-lg\"><i class=\"fa fa-github\"></i> S'authentifier avec Github</a>
                {% endif %}
            </div>
            <footer class=\"footer\"><p>&copy; {{ \"now\"|date(\"Y\") }}</p></footer>
        </div>
    </body>
</html>", "base.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/app/Resources/views/base.html.twig");
    }
}
