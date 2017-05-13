<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0a3b4c4d3e954e57236c40df840c56785b4cb43dc8de9aebc52435b8a51c9e29 extends Twig_Template
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
        $__internal_f00109990c5cd23f4ebf9b28d5ff1d67b1a14c956a80f1e549611d5ee5312bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00109990c5cd23f4ebf9b28d5ff1d67b1a14c956a80f1e549611d5ee5312bdc->enter($__internal_f00109990c5cd23f4ebf9b28d5ff1d67b1a14c956a80f1e549611d5ee5312bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_682d362c3424617fd4e5aa1fce57f392b532d4f59a1c2cf6530a5bb29adec5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682d362c3424617fd4e5aa1fce57f392b532d4f59a1c2cf6530a5bb29adec5c9->enter($__internal_682d362c3424617fd4e5aa1fce57f392b532d4f59a1c2cf6530a5bb29adec5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f00109990c5cd23f4ebf9b28d5ff1d67b1a14c956a80f1e549611d5ee5312bdc->leave($__internal_f00109990c5cd23f4ebf9b28d5ff1d67b1a14c956a80f1e549611d5ee5312bdc_prof);

        
        $__internal_682d362c3424617fd4e5aa1fce57f392b532d4f59a1c2cf6530a5bb29adec5c9->leave($__internal_682d362c3424617fd4e5aa1fce57f392b532d4f59a1c2cf6530a5bb29adec5c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
