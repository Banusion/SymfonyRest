<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d4b1ccb5604433a318b9a25e54b6277f3ea306995e3778c5e7c69867f45208c8 extends Twig_Template
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
        $__internal_99849c6ae838ec371412def7a747ae9476bc4c46d8d8e60e33ba420df5c4cbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99849c6ae838ec371412def7a747ae9476bc4c46d8d8e60e33ba420df5c4cbf9->enter($__internal_99849c6ae838ec371412def7a747ae9476bc4c46d8d8e60e33ba420df5c4cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1741cafef673023b6fd26543d591af1d7f12841ae16bad67c50564ccbf7b4686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1741cafef673023b6fd26543d591af1d7f12841ae16bad67c50564ccbf7b4686->enter($__internal_1741cafef673023b6fd26543d591af1d7f12841ae16bad67c50564ccbf7b4686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_99849c6ae838ec371412def7a747ae9476bc4c46d8d8e60e33ba420df5c4cbf9->leave($__internal_99849c6ae838ec371412def7a747ae9476bc4c46d8d8e60e33ba420df5c4cbf9_prof);

        
        $__internal_1741cafef673023b6fd26543d591af1d7f12841ae16bad67c50564ccbf7b4686->leave($__internal_1741cafef673023b6fd26543d591af1d7f12841ae16bad67c50564ccbf7b4686_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
