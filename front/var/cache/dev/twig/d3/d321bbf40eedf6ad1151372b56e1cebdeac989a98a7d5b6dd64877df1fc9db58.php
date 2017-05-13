<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e6521969fbedd48f0df777ccedf6170d5a9593b44d97def156d5872514bc4f95 extends Twig_Template
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
        $__internal_46bc63ea08d0d2c763d6955a668eda939b0f9e0663b106dbaa3e535bf3ca1361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bc63ea08d0d2c763d6955a668eda939b0f9e0663b106dbaa3e535bf3ca1361->enter($__internal_46bc63ea08d0d2c763d6955a668eda939b0f9e0663b106dbaa3e535bf3ca1361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7bf2628c5812b0d28604f0b74915aa54de2338ad80a0234c6a7353d3ce8c7635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf2628c5812b0d28604f0b74915aa54de2338ad80a0234c6a7353d3ce8c7635->enter($__internal_7bf2628c5812b0d28604f0b74915aa54de2338ad80a0234c6a7353d3ce8c7635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_46bc63ea08d0d2c763d6955a668eda939b0f9e0663b106dbaa3e535bf3ca1361->leave($__internal_46bc63ea08d0d2c763d6955a668eda939b0f9e0663b106dbaa3e535bf3ca1361_prof);

        
        $__internal_7bf2628c5812b0d28604f0b74915aa54de2338ad80a0234c6a7353d3ce8c7635->leave($__internal_7bf2628c5812b0d28604f0b74915aa54de2338ad80a0234c6a7353d3ce8c7635_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
