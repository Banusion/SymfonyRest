<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7048077de16c8ef483d0f7fa720cad167d454f63053263ef090c6f40cd0cb617 extends Twig_Template
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
        $__internal_c9e90fa03fa464e3ee0ccb947ad78a8b2ce835f2c2108b698868359a0187c729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e90fa03fa464e3ee0ccb947ad78a8b2ce835f2c2108b698868359a0187c729->enter($__internal_c9e90fa03fa464e3ee0ccb947ad78a8b2ce835f2c2108b698868359a0187c729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7f5c453072b4818179262730f098a60e9095498e8d5e5fcfe683727c7ea5490e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5c453072b4818179262730f098a60e9095498e8d5e5fcfe683727c7ea5490e->enter($__internal_7f5c453072b4818179262730f098a60e9095498e8d5e5fcfe683727c7ea5490e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c9e90fa03fa464e3ee0ccb947ad78a8b2ce835f2c2108b698868359a0187c729->leave($__internal_c9e90fa03fa464e3ee0ccb947ad78a8b2ce835f2c2108b698868359a0187c729_prof);

        
        $__internal_7f5c453072b4818179262730f098a60e9095498e8d5e5fcfe683727c7ea5490e->leave($__internal_7f5c453072b4818179262730f098a60e9095498e8d5e5fcfe683727c7ea5490e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
