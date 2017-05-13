<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_da717b86b869040539cd06c73c8edc6e9bc5ef1b47ec2ecac5d4c94df796a054 extends Twig_Template
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
        $__internal_3d650f3944401734372349bef1b31814571c248d90816ee2d97a8421595027de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d650f3944401734372349bef1b31814571c248d90816ee2d97a8421595027de->enter($__internal_3d650f3944401734372349bef1b31814571c248d90816ee2d97a8421595027de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e6c363504b52d3a11a1b399a1eb19c242000611c8a8409fe0df7e14e1b942c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c363504b52d3a11a1b399a1eb19c242000611c8a8409fe0df7e14e1b942c30->enter($__internal_e6c363504b52d3a11a1b399a1eb19c242000611c8a8409fe0df7e14e1b942c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3d650f3944401734372349bef1b31814571c248d90816ee2d97a8421595027de->leave($__internal_3d650f3944401734372349bef1b31814571c248d90816ee2d97a8421595027de_prof);

        
        $__internal_e6c363504b52d3a11a1b399a1eb19c242000611c8a8409fe0df7e14e1b942c30->leave($__internal_e6c363504b52d3a11a1b399a1eb19c242000611c8a8409fe0df7e14e1b942c30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
