<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d6bbf9d19a9e97c851916e3785bb4b2d13e12fda8acd1db382ec5419e53158f4 extends Twig_Template
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
        $__internal_22957638afb6b59a7938df4c11886e69a25073233c990f03b9ed196893709187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22957638afb6b59a7938df4c11886e69a25073233c990f03b9ed196893709187->enter($__internal_22957638afb6b59a7938df4c11886e69a25073233c990f03b9ed196893709187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f45935a90248fb9131cd07b1192c0187af8c2d2b593d5f0a7d5800fed69d622f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45935a90248fb9131cd07b1192c0187af8c2d2b593d5f0a7d5800fed69d622f->enter($__internal_f45935a90248fb9131cd07b1192c0187af8c2d2b593d5f0a7d5800fed69d622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_22957638afb6b59a7938df4c11886e69a25073233c990f03b9ed196893709187->leave($__internal_22957638afb6b59a7938df4c11886e69a25073233c990f03b9ed196893709187_prof);

        
        $__internal_f45935a90248fb9131cd07b1192c0187af8c2d2b593d5f0a7d5800fed69d622f->leave($__internal_f45935a90248fb9131cd07b1192c0187af8c2d2b593d5f0a7d5800fed69d622f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
