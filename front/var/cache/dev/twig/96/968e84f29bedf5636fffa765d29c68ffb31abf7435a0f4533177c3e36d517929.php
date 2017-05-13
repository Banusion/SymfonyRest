<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9e2b0f081ff16fd2f646e289cc289ef149d71ba283fee83c4228c2da033ef6e0 extends Twig_Template
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
        $__internal_a06adcecd2ddd930d359e66fcf867550d57a938c4278bd10f4f6d5a7c6779141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06adcecd2ddd930d359e66fcf867550d57a938c4278bd10f4f6d5a7c6779141->enter($__internal_a06adcecd2ddd930d359e66fcf867550d57a938c4278bd10f4f6d5a7c6779141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_64949f95d6f1aa1137c4109aa365d97387f914e2df5bae0833a5c649af91c421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64949f95d6f1aa1137c4109aa365d97387f914e2df5bae0833a5c649af91c421->enter($__internal_64949f95d6f1aa1137c4109aa365d97387f914e2df5bae0833a5c649af91c421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a06adcecd2ddd930d359e66fcf867550d57a938c4278bd10f4f6d5a7c6779141->leave($__internal_a06adcecd2ddd930d359e66fcf867550d57a938c4278bd10f4f6d5a7c6779141_prof);

        
        $__internal_64949f95d6f1aa1137c4109aa365d97387f914e2df5bae0833a5c649af91c421->leave($__internal_64949f95d6f1aa1137c4109aa365d97387f914e2df5bae0833a5c649af91c421_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
