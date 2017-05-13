<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0e3f35df99df9bbd389d31c7688a9e383c7035068167fc8b870fac509586c7b2 extends Twig_Template
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
        $__internal_5ca79d5c94a2e41c506e86d4a02a5dbed910b755ee894c106594443c9d7fe29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca79d5c94a2e41c506e86d4a02a5dbed910b755ee894c106594443c9d7fe29c->enter($__internal_5ca79d5c94a2e41c506e86d4a02a5dbed910b755ee894c106594443c9d7fe29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c76b738d646e41ca495d7101af6a3db0a59a9074abd024737ee5964d7550c2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76b738d646e41ca495d7101af6a3db0a59a9074abd024737ee5964d7550c2fc->enter($__internal_c76b738d646e41ca495d7101af6a3db0a59a9074abd024737ee5964d7550c2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5ca79d5c94a2e41c506e86d4a02a5dbed910b755ee894c106594443c9d7fe29c->leave($__internal_5ca79d5c94a2e41c506e86d4a02a5dbed910b755ee894c106594443c9d7fe29c_prof);

        
        $__internal_c76b738d646e41ca495d7101af6a3db0a59a9074abd024737ee5964d7550c2fc->leave($__internal_c76b738d646e41ca495d7101af6a3db0a59a9074abd024737ee5964d7550c2fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
