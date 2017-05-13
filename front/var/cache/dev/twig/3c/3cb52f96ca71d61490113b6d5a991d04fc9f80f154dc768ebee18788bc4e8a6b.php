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
        $__internal_29298eab2d05556fe05bbc0845d2c95c20effcf8607801b79f35fa47c3537b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29298eab2d05556fe05bbc0845d2c95c20effcf8607801b79f35fa47c3537b64->enter($__internal_29298eab2d05556fe05bbc0845d2c95c20effcf8607801b79f35fa47c3537b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f16d868187885dd845c2b8f1b843c32ab0a23d739f8051c87f7e7cb1be464451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16d868187885dd845c2b8f1b843c32ab0a23d739f8051c87f7e7cb1be464451->enter($__internal_f16d868187885dd845c2b8f1b843c32ab0a23d739f8051c87f7e7cb1be464451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_29298eab2d05556fe05bbc0845d2c95c20effcf8607801b79f35fa47c3537b64->leave($__internal_29298eab2d05556fe05bbc0845d2c95c20effcf8607801b79f35fa47c3537b64_prof);

        
        $__internal_f16d868187885dd845c2b8f1b843c32ab0a23d739f8051c87f7e7cb1be464451->leave($__internal_f16d868187885dd845c2b8f1b843c32ab0a23d739f8051c87f7e7cb1be464451_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_17a1fa5aa1e192ecdf567911474ad5c7bd2af87dd4110082909b01e7c64f8457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a1fa5aa1e192ecdf567911474ad5c7bd2af87dd4110082909b01e7c64f8457->enter($__internal_17a1fa5aa1e192ecdf567911474ad5c7bd2af87dd4110082909b01e7c64f8457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96939b6e7a9f9039043c937c0ee5fb469c3867808e84250aee433dd2dcf72a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96939b6e7a9f9039043c937c0ee5fb469c3867808e84250aee433dd2dcf72a04->enter($__internal_96939b6e7a9f9039043c937c0ee5fb469c3867808e84250aee433dd2dcf72a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_96939b6e7a9f9039043c937c0ee5fb469c3867808e84250aee433dd2dcf72a04->leave($__internal_96939b6e7a9f9039043c937c0ee5fb469c3867808e84250aee433dd2dcf72a04_prof);

        
        $__internal_17a1fa5aa1e192ecdf567911474ad5c7bd2af87dd4110082909b01e7c64f8457->leave($__internal_17a1fa5aa1e192ecdf567911474ad5c7bd2af87dd4110082909b01e7c64f8457_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c86736a1ce245c0a48f822e2c1025713d0703bc393d7faa3e81dcf550acf1667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86736a1ce245c0a48f822e2c1025713d0703bc393d7faa3e81dcf550acf1667->enter($__internal_c86736a1ce245c0a48f822e2c1025713d0703bc393d7faa3e81dcf550acf1667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b17fc713e9886b7e3828ceb699d6fdd27ff67fe8fefc452cebdf3a969aad001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b17fc713e9886b7e3828ceb699d6fdd27ff67fe8fefc452cebdf3a969aad001->enter($__internal_8b17fc713e9886b7e3828ceb699d6fdd27ff67fe8fefc452cebdf3a969aad001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b17fc713e9886b7e3828ceb699d6fdd27ff67fe8fefc452cebdf3a969aad001->leave($__internal_8b17fc713e9886b7e3828ceb699d6fdd27ff67fe8fefc452cebdf3a969aad001_prof);

        
        $__internal_c86736a1ce245c0a48f822e2c1025713d0703bc393d7faa3e81dcf550acf1667->leave($__internal_c86736a1ce245c0a48f822e2c1025713d0703bc393d7faa3e81dcf550acf1667_prof);

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
