<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_05e4fb98399a556f42ba8b80a393eede04e4f8b821f42fa96faee687a70baf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_943f2fe0e1c33af03ae7b05f055dc622036d54ead24a514d74f9a5b4f07ebbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943f2fe0e1c33af03ae7b05f055dc622036d54ead24a514d74f9a5b4f07ebbb1->enter($__internal_943f2fe0e1c33af03ae7b05f055dc622036d54ead24a514d74f9a5b4f07ebbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c42f12dc1fab803f7bd51087e727795fc07e8ab1a0d1610d8fc06f08505e84d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42f12dc1fab803f7bd51087e727795fc07e8ab1a0d1610d8fc06f08505e84d7->enter($__internal_c42f12dc1fab803f7bd51087e727795fc07e8ab1a0d1610d8fc06f08505e84d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_943f2fe0e1c33af03ae7b05f055dc622036d54ead24a514d74f9a5b4f07ebbb1->leave($__internal_943f2fe0e1c33af03ae7b05f055dc622036d54ead24a514d74f9a5b4f07ebbb1_prof);

        
        $__internal_c42f12dc1fab803f7bd51087e727795fc07e8ab1a0d1610d8fc06f08505e84d7->leave($__internal_c42f12dc1fab803f7bd51087e727795fc07e8ab1a0d1610d8fc06f08505e84d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4045e2e7aba0e65b8d1c53237d232fd08e49388a4b3f087a9ea7a490f1353715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4045e2e7aba0e65b8d1c53237d232fd08e49388a4b3f087a9ea7a490f1353715->enter($__internal_4045e2e7aba0e65b8d1c53237d232fd08e49388a4b3f087a9ea7a490f1353715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8279e2fea844bc85e774642ddd54a4af4b20dae8e50a07f8b7c5a89a475f0e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8279e2fea844bc85e774642ddd54a4af4b20dae8e50a07f8b7c5a89a475f0e63->enter($__internal_8279e2fea844bc85e774642ddd54a4af4b20dae8e50a07f8b7c5a89a475f0e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8279e2fea844bc85e774642ddd54a4af4b20dae8e50a07f8b7c5a89a475f0e63->leave($__internal_8279e2fea844bc85e774642ddd54a4af4b20dae8e50a07f8b7c5a89a475f0e63_prof);

        
        $__internal_4045e2e7aba0e65b8d1c53237d232fd08e49388a4b3f087a9ea7a490f1353715->leave($__internal_4045e2e7aba0e65b8d1c53237d232fd08e49388a4b3f087a9ea7a490f1353715_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00fe5820c3cc406b40ca57ccc41e05837c6fd709b5b84286f4c4d082630257f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fe5820c3cc406b40ca57ccc41e05837c6fd709b5b84286f4c4d082630257f7->enter($__internal_00fe5820c3cc406b40ca57ccc41e05837c6fd709b5b84286f4c4d082630257f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9e51fe603fde663998223a850ce4ad5e5fd42470aad7a9e43f787abf514612a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e51fe603fde663998223a850ce4ad5e5fd42470aad7a9e43f787abf514612a->enter($__internal_c9e51fe603fde663998223a850ce4ad5e5fd42470aad7a9e43f787abf514612a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c9e51fe603fde663998223a850ce4ad5e5fd42470aad7a9e43f787abf514612a->leave($__internal_c9e51fe603fde663998223a850ce4ad5e5fd42470aad7a9e43f787abf514612a_prof);

        
        $__internal_00fe5820c3cc406b40ca57ccc41e05837c6fd709b5b84286f4c4d082630257f7->leave($__internal_00fe5820c3cc406b40ca57ccc41e05837c6fd709b5b84286f4c4d082630257f7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ea7e170ffb5b0f0dbc2afc5ea246770c68d433e7d7fdf8eda36fdba18f43433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea7e170ffb5b0f0dbc2afc5ea246770c68d433e7d7fdf8eda36fdba18f43433->enter($__internal_9ea7e170ffb5b0f0dbc2afc5ea246770c68d433e7d7fdf8eda36fdba18f43433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc3b1e3a702cfb03ad462582327ce6a2fc1ba125f1c03b82f0510747d5ee9a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3b1e3a702cfb03ad462582327ce6a2fc1ba125f1c03b82f0510747d5ee9a5f->enter($__internal_bc3b1e3a702cfb03ad462582327ce6a2fc1ba125f1c03b82f0510747d5ee9a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_bc3b1e3a702cfb03ad462582327ce6a2fc1ba125f1c03b82f0510747d5ee9a5f->leave($__internal_bc3b1e3a702cfb03ad462582327ce6a2fc1ba125f1c03b82f0510747d5ee9a5f_prof);

        
        $__internal_9ea7e170ffb5b0f0dbc2afc5ea246770c68d433e7d7fdf8eda36fdba18f43433->leave($__internal_9ea7e170ffb5b0f0dbc2afc5ea246770c68d433e7d7fdf8eda36fdba18f43433_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
