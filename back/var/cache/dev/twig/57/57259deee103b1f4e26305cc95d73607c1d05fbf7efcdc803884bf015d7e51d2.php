<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ce0b52274e32f3ab4d784c457efc7dd997f091023ab7732bb656aca21f946dfa extends Twig_Template
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
        $__internal_4783e23828c7e88cbfb313241b98ef45e50218dcfa7874f206cf8e55ddde73b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4783e23828c7e88cbfb313241b98ef45e50218dcfa7874f206cf8e55ddde73b3->enter($__internal_4783e23828c7e88cbfb313241b98ef45e50218dcfa7874f206cf8e55ddde73b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f8dc51fba7296527919688c13581fd9980d1433649b382cda782fe4e4fd70ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dc51fba7296527919688c13581fd9980d1433649b382cda782fe4e4fd70ae9->enter($__internal_f8dc51fba7296527919688c13581fd9980d1433649b382cda782fe4e4fd70ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4783e23828c7e88cbfb313241b98ef45e50218dcfa7874f206cf8e55ddde73b3->leave($__internal_4783e23828c7e88cbfb313241b98ef45e50218dcfa7874f206cf8e55ddde73b3_prof);

        
        $__internal_f8dc51fba7296527919688c13581fd9980d1433649b382cda782fe4e4fd70ae9->leave($__internal_f8dc51fba7296527919688c13581fd9980d1433649b382cda782fe4e4fd70ae9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}