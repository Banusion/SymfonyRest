<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_47ac276bdeb01ad3723df4b0ab802dac9779e3021ed345215436bc372931483a extends Twig_Template
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
        $__internal_1a5898b1c9a25ae8365d59f772221e307c1837dbfe7e0e533ff30bfaa65d97b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5898b1c9a25ae8365d59f772221e307c1837dbfe7e0e533ff30bfaa65d97b6->enter($__internal_1a5898b1c9a25ae8365d59f772221e307c1837dbfe7e0e533ff30bfaa65d97b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_47a361419c7971051020b438689f1180a8e6f30a2fdf083e5e0bb8af2bd5bd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a361419c7971051020b438689f1180a8e6f30a2fdf083e5e0bb8af2bd5bd48->enter($__internal_47a361419c7971051020b438689f1180a8e6f30a2fdf083e5e0bb8af2bd5bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1a5898b1c9a25ae8365d59f772221e307c1837dbfe7e0e533ff30bfaa65d97b6->leave($__internal_1a5898b1c9a25ae8365d59f772221e307c1837dbfe7e0e533ff30bfaa65d97b6_prof);

        
        $__internal_47a361419c7971051020b438689f1180a8e6f30a2fdf083e5e0bb8af2bd5bd48->leave($__internal_47a361419c7971051020b438689f1180a8e6f30a2fdf083e5e0bb8af2bd5bd48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
