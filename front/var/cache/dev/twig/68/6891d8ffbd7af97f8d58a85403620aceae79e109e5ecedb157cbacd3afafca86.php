<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e88e349751d4dab8bcb26d4e761542ec2b5a3c0414fbb9280a60f2ac9f9088fa extends Twig_Template
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
        $__internal_15df5b33836c12e90e35b7fb90bcade3f58b27a112d0cbb66d7515781a3793ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15df5b33836c12e90e35b7fb90bcade3f58b27a112d0cbb66d7515781a3793ed->enter($__internal_15df5b33836c12e90e35b7fb90bcade3f58b27a112d0cbb66d7515781a3793ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4904ae306368b64926543791fab90414fab86a40e38a380296bd2b73e3691cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4904ae306368b64926543791fab90414fab86a40e38a380296bd2b73e3691cef->enter($__internal_4904ae306368b64926543791fab90414fab86a40e38a380296bd2b73e3691cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_15df5b33836c12e90e35b7fb90bcade3f58b27a112d0cbb66d7515781a3793ed->leave($__internal_15df5b33836c12e90e35b7fb90bcade3f58b27a112d0cbb66d7515781a3793ed_prof);

        
        $__internal_4904ae306368b64926543791fab90414fab86a40e38a380296bd2b73e3691cef->leave($__internal_4904ae306368b64926543791fab90414fab86a40e38a380296bd2b73e3691cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
