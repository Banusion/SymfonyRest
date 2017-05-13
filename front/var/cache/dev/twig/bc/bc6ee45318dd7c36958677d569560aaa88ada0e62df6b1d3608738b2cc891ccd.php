<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ae6c1c1918e4d33ad82a812f8217f862e92e402345021231996253d538b6afad extends Twig_Template
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
        $__internal_a3702d73776b7205244871561de59f183622ee4d96613bc738e109c1d87ca088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3702d73776b7205244871561de59f183622ee4d96613bc738e109c1d87ca088->enter($__internal_a3702d73776b7205244871561de59f183622ee4d96613bc738e109c1d87ca088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8ed4d46c2e8231f81b7be0d94a547373c4ef5f01f0180c8681dd90b979fd9477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed4d46c2e8231f81b7be0d94a547373c4ef5f01f0180c8681dd90b979fd9477->enter($__internal_8ed4d46c2e8231f81b7be0d94a547373c4ef5f01f0180c8681dd90b979fd9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a3702d73776b7205244871561de59f183622ee4d96613bc738e109c1d87ca088->leave($__internal_a3702d73776b7205244871561de59f183622ee4d96613bc738e109c1d87ca088_prof);

        
        $__internal_8ed4d46c2e8231f81b7be0d94a547373c4ef5f01f0180c8681dd90b979fd9477->leave($__internal_8ed4d46c2e8231f81b7be0d94a547373c4ef5f01f0180c8681dd90b979fd9477_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
