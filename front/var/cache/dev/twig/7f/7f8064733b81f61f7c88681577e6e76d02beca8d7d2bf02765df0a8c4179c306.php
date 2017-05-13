<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_6d5dd281dcc50c3d883c019af462b36f422d5be3b163e98d06280f7b5f153a9c extends Twig_Template
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
        $__internal_878e5d9363f9a5730744fed287abe57b6d87aca7b051b974889a3c6600d37e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878e5d9363f9a5730744fed287abe57b6d87aca7b051b974889a3c6600d37e03->enter($__internal_878e5d9363f9a5730744fed287abe57b6d87aca7b051b974889a3c6600d37e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_02cfd5ee62360168e8b0a2ffa0dd4a32f3242578f06e26b8d6545f1aa6b469d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cfd5ee62360168e8b0a2ffa0dd4a32f3242578f06e26b8d6545f1aa6b469d7->enter($__internal_02cfd5ee62360168e8b0a2ffa0dd4a32f3242578f06e26b8d6545f1aa6b469d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_878e5d9363f9a5730744fed287abe57b6d87aca7b051b974889a3c6600d37e03->leave($__internal_878e5d9363f9a5730744fed287abe57b6d87aca7b051b974889a3c6600d37e03_prof);

        
        $__internal_02cfd5ee62360168e8b0a2ffa0dd4a32f3242578f06e26b8d6545f1aa6b469d7->leave($__internal_02cfd5ee62360168e8b0a2ffa0dd4a32f3242578f06e26b8d6545f1aa6b469d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
