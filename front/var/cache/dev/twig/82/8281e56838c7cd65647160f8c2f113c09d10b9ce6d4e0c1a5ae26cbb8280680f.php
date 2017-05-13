<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e662d2caad5bb7568070c6071fa2ad856ee20795540e86cc7e0a0c899bca4d6e extends Twig_Template
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
        $__internal_9e29afe59e4f9cb6b0739688ebf2e927850b9b25a858c4e2ae5817768d206c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e29afe59e4f9cb6b0739688ebf2e927850b9b25a858c4e2ae5817768d206c44->enter($__internal_9e29afe59e4f9cb6b0739688ebf2e927850b9b25a858c4e2ae5817768d206c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_bb46610eb0dce03ee88550084ebcacbfa7cedbaad98ed6afb5b067756c16bec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb46610eb0dce03ee88550084ebcacbfa7cedbaad98ed6afb5b067756c16bec3->enter($__internal_bb46610eb0dce03ee88550084ebcacbfa7cedbaad98ed6afb5b067756c16bec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9e29afe59e4f9cb6b0739688ebf2e927850b9b25a858c4e2ae5817768d206c44->leave($__internal_9e29afe59e4f9cb6b0739688ebf2e927850b9b25a858c4e2ae5817768d206c44_prof);

        
        $__internal_bb46610eb0dce03ee88550084ebcacbfa7cedbaad98ed6afb5b067756c16bec3->leave($__internal_bb46610eb0dce03ee88550084ebcacbfa7cedbaad98ed6afb5b067756c16bec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
