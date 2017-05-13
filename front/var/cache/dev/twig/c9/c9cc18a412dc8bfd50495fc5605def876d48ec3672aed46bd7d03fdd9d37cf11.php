<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_fdc829c5e320b1055f0891789a84f180174a91c539b72fe287ec8ad898dd4250 extends Twig_Template
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
        $__internal_f4f3fcbde5b08da59a3bacf18da9cb5b84186702a2d2a58e12edbd5300434728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f3fcbde5b08da59a3bacf18da9cb5b84186702a2d2a58e12edbd5300434728->enter($__internal_f4f3fcbde5b08da59a3bacf18da9cb5b84186702a2d2a58e12edbd5300434728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5fbfde3d2fedb6ae104868f3d1ce3fe914d25aa678fb1eab10fd93a2ea73c21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbfde3d2fedb6ae104868f3d1ce3fe914d25aa678fb1eab10fd93a2ea73c21a->enter($__internal_5fbfde3d2fedb6ae104868f3d1ce3fe914d25aa678fb1eab10fd93a2ea73c21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_f4f3fcbde5b08da59a3bacf18da9cb5b84186702a2d2a58e12edbd5300434728->leave($__internal_f4f3fcbde5b08da59a3bacf18da9cb5b84186702a2d2a58e12edbd5300434728_prof);

        
        $__internal_5fbfde3d2fedb6ae104868f3d1ce3fe914d25aa678fb1eab10fd93a2ea73c21a->leave($__internal_5fbfde3d2fedb6ae104868f3d1ce3fe914d25aa678fb1eab10fd93a2ea73c21a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
