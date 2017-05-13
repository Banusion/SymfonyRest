<?php

/* base.html.twig */
class __TwigTemplate_377120c531fbdfd759dc8625a6867ffbd442a7e7b3be806e9e571d764d033ba0 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 17
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" type=\"button\" class=\"btn btn-danger btn-lg\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                ";
        } else {
            // line 19
            echo "                    <a href=\"https://github.com/login/oauth/authorize?client_id=";
            echo twig_escape_filter($this->env, ($context["github_client_id"] ?? null), "html", null, true);
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
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
        return array (  79 => 15,  73 => 6,  65 => 22,  62 => 21,  54 => 19,  48 => 17,  45 => 16,  43 => 15,  35 => 10,  28 => 6,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/app/Resources/views/base.html.twig");
    }
}
