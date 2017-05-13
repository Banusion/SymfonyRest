<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_70c77007a3bd5ea48d9800f28afadac3daa8ca2c8fdb7b56d8605bc521dafb03 extends Twig_Template
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
        $__internal_e36106c8e1d319336be1df7196065240357a37ecad189e1d7b3473737e698c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36106c8e1d319336be1df7196065240357a37ecad189e1d7b3473737e698c54->enter($__internal_e36106c8e1d319336be1df7196065240357a37ecad189e1d7b3473737e698c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4f9b70b247f3e6bc62d010e2b94f2494fbd3ef72e1d7b784492eb76300b874be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9b70b247f3e6bc62d010e2b94f2494fbd3ef72e1d7b784492eb76300b874be->enter($__internal_4f9b70b247f3e6bc62d010e2b94f2494fbd3ef72e1d7b784492eb76300b874be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e36106c8e1d319336be1df7196065240357a37ecad189e1d7b3473737e698c54->leave($__internal_e36106c8e1d319336be1df7196065240357a37ecad189e1d7b3473737e698c54_prof);

        
        $__internal_4f9b70b247f3e6bc62d010e2b94f2494fbd3ef72e1d7b784492eb76300b874be->leave($__internal_4f9b70b247f3e6bc62d010e2b94f2494fbd3ef72e1d7b784492eb76300b874be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
