<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_486cd437d7231e994f8169a9320962aa1c92a07431c3a5b01652821f85cc5448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2c2bbba0eba3883acc9d82e10042de4ee64c78e984fce35b484d71ddbd569ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c2bbba0eba3883acc9d82e10042de4ee64c78e984fce35b484d71ddbd569ae->enter($__internal_d2c2bbba0eba3883acc9d82e10042de4ee64c78e984fce35b484d71ddbd569ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_d9da1bc59bd64124fbc8eb76a115af42592f6851cbf8c518681bc86039ff4c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9da1bc59bd64124fbc8eb76a115af42592f6851cbf8c518681bc86039ff4c13->enter($__internal_d9da1bc59bd64124fbc8eb76a115af42592f6851cbf8c518681bc86039ff4c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c2bbba0eba3883acc9d82e10042de4ee64c78e984fce35b484d71ddbd569ae->leave($__internal_d2c2bbba0eba3883acc9d82e10042de4ee64c78e984fce35b484d71ddbd569ae_prof);

        
        $__internal_d9da1bc59bd64124fbc8eb76a115af42592f6851cbf8c518681bc86039ff4c13->leave($__internal_d9da1bc59bd64124fbc8eb76a115af42592f6851cbf8c518681bc86039ff4c13_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2db306036e8c704bb7de32d731a7c25a19800f3d6765e5bdab14cea0c3cf76f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db306036e8c704bb7de32d731a7c25a19800f3d6765e5bdab14cea0c3cf76f2->enter($__internal_2db306036e8c704bb7de32d731a7c25a19800f3d6765e5bdab14cea0c3cf76f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4488c6e52e3fdf5e742cdf50593345ef9ea2963cb7c5bd1becac65aba1ab1d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4488c6e52e3fdf5e742cdf50593345ef9ea2963cb7c5bd1becac65aba1ab1d6f->enter($__internal_4488c6e52e3fdf5e742cdf50593345ef9ea2963cb7c5bd1becac65aba1ab1d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_4488c6e52e3fdf5e742cdf50593345ef9ea2963cb7c5bd1becac65aba1ab1d6f->leave($__internal_4488c6e52e3fdf5e742cdf50593345ef9ea2963cb7c5bd1becac65aba1ab1d6f_prof);

        
        $__internal_2db306036e8c704bb7de32d731a7c25a19800f3d6765e5bdab14cea0c3cf76f2->leave($__internal_2db306036e8c704bb7de32d731a7c25a19800f3d6765e5bdab14cea0c3cf76f2_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
