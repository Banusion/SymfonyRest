<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4de7c7e7d1abe3fd9a031c707921ebdb617e0b6dde73e8db17148dcd47b36b30 extends Twig_Template
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
        $__internal_3c10b5f8925445f5d1a22cb06df0d54ed14659d5d83264ee21213e347eb0896a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c10b5f8925445f5d1a22cb06df0d54ed14659d5d83264ee21213e347eb0896a->enter($__internal_3c10b5f8925445f5d1a22cb06df0d54ed14659d5d83264ee21213e347eb0896a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a87cfd8f3e511f1908576678a57ca2f15d6a05792c3b94c51ee4bfb9b87ec8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87cfd8f3e511f1908576678a57ca2f15d6a05792c3b94c51ee4bfb9b87ec8e1->enter($__internal_a87cfd8f3e511f1908576678a57ca2f15d6a05792c3b94c51ee4bfb9b87ec8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3c10b5f8925445f5d1a22cb06df0d54ed14659d5d83264ee21213e347eb0896a->leave($__internal_3c10b5f8925445f5d1a22cb06df0d54ed14659d5d83264ee21213e347eb0896a_prof);

        
        $__internal_a87cfd8f3e511f1908576678a57ca2f15d6a05792c3b94c51ee4bfb9b87ec8e1->leave($__internal_a87cfd8f3e511f1908576678a57ca2f15d6a05792c3b94c51ee4bfb9b87ec8e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
