<?php

/* ::base.html.twig */
class __TwigTemplate_9c77fb967f926f0de4760d3bba86827c964d222dc6ee366216c3e05450d95844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_316a2c1f5c9d573f85beec53f2d5ad5e815b1c03ffd2d431727047a04c9ef799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316a2c1f5c9d573f85beec53f2d5ad5e815b1c03ffd2d431727047a04c9ef799->enter($__internal_316a2c1f5c9d573f85beec53f2d5ad5e815b1c03ffd2d431727047a04c9ef799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4d0eff4be75dfbc9236e751b2cab3f74add53ed0da8039550a4eb4099fcb7c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0eff4be75dfbc9236e751b2cab3f74add53ed0da8039550a4eb4099fcb7c99->enter($__internal_4d0eff4be75dfbc9236e751b2cab3f74add53ed0da8039550a4eb4099fcb7c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_316a2c1f5c9d573f85beec53f2d5ad5e815b1c03ffd2d431727047a04c9ef799->leave($__internal_316a2c1f5c9d573f85beec53f2d5ad5e815b1c03ffd2d431727047a04c9ef799_prof);

        
        $__internal_4d0eff4be75dfbc9236e751b2cab3f74add53ed0da8039550a4eb4099fcb7c99->leave($__internal_4d0eff4be75dfbc9236e751b2cab3f74add53ed0da8039550a4eb4099fcb7c99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_774ee302e55f18a3192fb66c31e1ee73974ad75e769ffc2af341c744e9c2f8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774ee302e55f18a3192fb66c31e1ee73974ad75e769ffc2af341c744e9c2f8ee->enter($__internal_774ee302e55f18a3192fb66c31e1ee73974ad75e769ffc2af341c744e9c2f8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f9e2f91693b66483f67bfb65dd38e470962198b59881f87f2b7f69171b9e7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9e2f91693b66483f67bfb65dd38e470962198b59881f87f2b7f69171b9e7b4->enter($__internal_2f9e2f91693b66483f67bfb65dd38e470962198b59881f87f2b7f69171b9e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2f9e2f91693b66483f67bfb65dd38e470962198b59881f87f2b7f69171b9e7b4->leave($__internal_2f9e2f91693b66483f67bfb65dd38e470962198b59881f87f2b7f69171b9e7b4_prof);

        
        $__internal_774ee302e55f18a3192fb66c31e1ee73974ad75e769ffc2af341c744e9c2f8ee->leave($__internal_774ee302e55f18a3192fb66c31e1ee73974ad75e769ffc2af341c744e9c2f8ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b103df96578ec3bf68e267f3433189a23e0c772528ba74d3f0f1942f81d6fce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b103df96578ec3bf68e267f3433189a23e0c772528ba74d3f0f1942f81d6fce0->enter($__internal_b103df96578ec3bf68e267f3433189a23e0c772528ba74d3f0f1942f81d6fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c0ef338432ffe32e0896f568aa0794f3266de8234364e5e5da2743910f6d8ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ef338432ffe32e0896f568aa0794f3266de8234364e5e5da2743910f6d8ee1->enter($__internal_c0ef338432ffe32e0896f568aa0794f3266de8234364e5e5da2743910f6d8ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c0ef338432ffe32e0896f568aa0794f3266de8234364e5e5da2743910f6d8ee1->leave($__internal_c0ef338432ffe32e0896f568aa0794f3266de8234364e5e5da2743910f6d8ee1_prof);

        
        $__internal_b103df96578ec3bf68e267f3433189a23e0c772528ba74d3f0f1942f81d6fce0->leave($__internal_b103df96578ec3bf68e267f3433189a23e0c772528ba74d3f0f1942f81d6fce0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_80aa2cbf7a3d149d42d95f31d2859c5097010a3b8a9a9c4b504ff92140c4ad03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80aa2cbf7a3d149d42d95f31d2859c5097010a3b8a9a9c4b504ff92140c4ad03->enter($__internal_80aa2cbf7a3d149d42d95f31d2859c5097010a3b8a9a9c4b504ff92140c4ad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebd95358e7d50450bb1c36e2ce7236e0db27002ed85c70dca702501d4f22ed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd95358e7d50450bb1c36e2ce7236e0db27002ed85c70dca702501d4f22ed7a->enter($__internal_ebd95358e7d50450bb1c36e2ce7236e0db27002ed85c70dca702501d4f22ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ebd95358e7d50450bb1c36e2ce7236e0db27002ed85c70dca702501d4f22ed7a->leave($__internal_ebd95358e7d50450bb1c36e2ce7236e0db27002ed85c70dca702501d4f22ed7a_prof);

        
        $__internal_80aa2cbf7a3d149d42d95f31d2859c5097010a3b8a9a9c4b504ff92140c4ad03->leave($__internal_80aa2cbf7a3d149d42d95f31d2859c5097010a3b8a9a9c4b504ff92140c4ad03_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b33394ecee5569ea719dbb1f44a9a00b7a99b8c49552bbb1986dcdbcb8120ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b33394ecee5569ea719dbb1f44a9a00b7a99b8c49552bbb1986dcdbcb8120ac->enter($__internal_8b33394ecee5569ea719dbb1f44a9a00b7a99b8c49552bbb1986dcdbcb8120ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ea7fec23dc6ed7f666d7eadfe92e78f388c72b75cc0062b474131efdfd926c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7fec23dc6ed7f666d7eadfe92e78f388c72b75cc0062b474131efdfd926c11->enter($__internal_ea7fec23dc6ed7f666d7eadfe92e78f388c72b75cc0062b474131efdfd926c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ea7fec23dc6ed7f666d7eadfe92e78f388c72b75cc0062b474131efdfd926c11->leave($__internal_ea7fec23dc6ed7f666d7eadfe92e78f388c72b75cc0062b474131efdfd926c11_prof);

        
        $__internal_8b33394ecee5569ea719dbb1f44a9a00b7a99b8c49552bbb1986dcdbcb8120ac->leave($__internal_8b33394ecee5569ea719dbb1f44a9a00b7a99b8c49552bbb1986dcdbcb8120ac_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/app/Resources/views/base.html.twig");
    }
}
