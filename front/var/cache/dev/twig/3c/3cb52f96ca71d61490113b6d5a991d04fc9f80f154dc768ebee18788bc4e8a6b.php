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
        $__internal_9832c80c3f80d3e49b2dd5cf745c323b3f7d3bb8ebf87b83f8862983783fa269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9832c80c3f80d3e49b2dd5cf745c323b3f7d3bb8ebf87b83f8862983783fa269->enter($__internal_9832c80c3f80d3e49b2dd5cf745c323b3f7d3bb8ebf87b83f8862983783fa269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c96fd97f792bd117ec53eaf640e429bf73c489701ba60ffa1f4264e079262b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96fd97f792bd117ec53eaf640e429bf73c489701ba60ffa1f4264e079262b9f->enter($__internal_c96fd97f792bd117ec53eaf640e429bf73c489701ba60ffa1f4264e079262b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9832c80c3f80d3e49b2dd5cf745c323b3f7d3bb8ebf87b83f8862983783fa269->leave($__internal_9832c80c3f80d3e49b2dd5cf745c323b3f7d3bb8ebf87b83f8862983783fa269_prof);

        
        $__internal_c96fd97f792bd117ec53eaf640e429bf73c489701ba60ffa1f4264e079262b9f->leave($__internal_c96fd97f792bd117ec53eaf640e429bf73c489701ba60ffa1f4264e079262b9f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_55c80676580759f378141f53bc1c024251ab3a09549e3c68ebfff9840c475d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c80676580759f378141f53bc1c024251ab3a09549e3c68ebfff9840c475d9b->enter($__internal_55c80676580759f378141f53bc1c024251ab3a09549e3c68ebfff9840c475d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_205dc5bb98f25a400aaa924045226d8553b21ae6b042bcf43ed0a2e235a265be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205dc5bb98f25a400aaa924045226d8553b21ae6b042bcf43ed0a2e235a265be->enter($__internal_205dc5bb98f25a400aaa924045226d8553b21ae6b042bcf43ed0a2e235a265be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_205dc5bb98f25a400aaa924045226d8553b21ae6b042bcf43ed0a2e235a265be->leave($__internal_205dc5bb98f25a400aaa924045226d8553b21ae6b042bcf43ed0a2e235a265be_prof);

        
        $__internal_55c80676580759f378141f53bc1c024251ab3a09549e3c68ebfff9840c475d9b->leave($__internal_55c80676580759f378141f53bc1c024251ab3a09549e3c68ebfff9840c475d9b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eec896037536d2f26080edf6f619b57c6be9125f0eb5a8a33c7c1a8cb73df0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eec896037536d2f26080edf6f619b57c6be9125f0eb5a8a33c7c1a8cb73df0c->enter($__internal_0eec896037536d2f26080edf6f619b57c6be9125f0eb5a8a33c7c1a8cb73df0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_489c92fd2d74cca282bb958d3e1138de338f5c7c077a928a4827ced4fccbd2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489c92fd2d74cca282bb958d3e1138de338f5c7c077a928a4827ced4fccbd2f7->enter($__internal_489c92fd2d74cca282bb958d3e1138de338f5c7c077a928a4827ced4fccbd2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_489c92fd2d74cca282bb958d3e1138de338f5c7c077a928a4827ced4fccbd2f7->leave($__internal_489c92fd2d74cca282bb958d3e1138de338f5c7c077a928a4827ced4fccbd2f7_prof);

        
        $__internal_0eec896037536d2f26080edf6f619b57c6be9125f0eb5a8a33c7c1a8cb73df0c->leave($__internal_0eec896037536d2f26080edf6f619b57c6be9125f0eb5a8a33c7c1a8cb73df0c_prof);

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
