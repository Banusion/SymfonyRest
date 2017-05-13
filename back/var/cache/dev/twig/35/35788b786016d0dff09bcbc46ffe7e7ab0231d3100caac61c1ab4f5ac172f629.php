<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_705354e466cfd7b03878a66372b77d75d4842c6f2686f937c770a3048f4f028f extends Twig_Template
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
        $__internal_768236fac570719d85dde2c8a350c7869d9ce742faed480088f6659775c7446e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768236fac570719d85dde2c8a350c7869d9ce742faed480088f6659775c7446e->enter($__internal_768236fac570719d85dde2c8a350c7869d9ce742faed480088f6659775c7446e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bd13bc75fc7b8f17f5e0bcc6ba5bf33c79e5a31a9d2b069493165a027d125cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd13bc75fc7b8f17f5e0bcc6ba5bf33c79e5a31a9d2b069493165a027d125cd7->enter($__internal_bd13bc75fc7b8f17f5e0bcc6ba5bf33c79e5a31a9d2b069493165a027d125cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_768236fac570719d85dde2c8a350c7869d9ce742faed480088f6659775c7446e->leave($__internal_768236fac570719d85dde2c8a350c7869d9ce742faed480088f6659775c7446e_prof);

        
        $__internal_bd13bc75fc7b8f17f5e0bcc6ba5bf33c79e5a31a9d2b069493165a027d125cd7->leave($__internal_bd13bc75fc7b8f17f5e0bcc6ba5bf33c79e5a31a9d2b069493165a027d125cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
