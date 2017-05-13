<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_586d5fe96557771853d3750cd3f12753b4c2fa65f091d06ba1a285332b5adbc0 extends Twig_Template
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
        $__internal_ce80946c35fae8634b4310e997193c90bf9c634a7d313c20fb916e8245e983fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce80946c35fae8634b4310e997193c90bf9c634a7d313c20fb916e8245e983fb->enter($__internal_ce80946c35fae8634b4310e997193c90bf9c634a7d313c20fb916e8245e983fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0d5cb7cdf5fb212c179adfdeed24874fe11d2a0b0cfe703e5388c79609373aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5cb7cdf5fb212c179adfdeed24874fe11d2a0b0cfe703e5388c79609373aad->enter($__internal_0d5cb7cdf5fb212c179adfdeed24874fe11d2a0b0cfe703e5388c79609373aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ce80946c35fae8634b4310e997193c90bf9c634a7d313c20fb916e8245e983fb->leave($__internal_ce80946c35fae8634b4310e997193c90bf9c634a7d313c20fb916e8245e983fb_prof);

        
        $__internal_0d5cb7cdf5fb212c179adfdeed24874fe11d2a0b0cfe703e5388c79609373aad->leave($__internal_0d5cb7cdf5fb212c179adfdeed24874fe11d2a0b0cfe703e5388c79609373aad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "@Framework/Form/form_widget_compound.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
