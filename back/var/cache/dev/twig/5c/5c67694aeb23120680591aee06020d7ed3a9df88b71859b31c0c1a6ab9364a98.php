<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_63d32b172ac234a7edd271f932c00e64b325571d582b9ef62ce9436e0f4f154e extends Twig_Template
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
        $__internal_391df43cd5b39a29e5a18e82dfd694e210eb69f27214eab308685650eb7eeaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391df43cd5b39a29e5a18e82dfd694e210eb69f27214eab308685650eb7eeaac->enter($__internal_391df43cd5b39a29e5a18e82dfd694e210eb69f27214eab308685650eb7eeaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a70dbac89da261d336538b0994edc55c02a6fd4a60543d3480a3276e27aca719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70dbac89da261d336538b0994edc55c02a6fd4a60543d3480a3276e27aca719->enter($__internal_a70dbac89da261d336538b0994edc55c02a6fd4a60543d3480a3276e27aca719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_391df43cd5b39a29e5a18e82dfd694e210eb69f27214eab308685650eb7eeaac->leave($__internal_391df43cd5b39a29e5a18e82dfd694e210eb69f27214eab308685650eb7eeaac_prof);

        
        $__internal_a70dbac89da261d336538b0994edc55c02a6fd4a60543d3480a3276e27aca719->leave($__internal_a70dbac89da261d336538b0994edc55c02a6fd4a60543d3480a3276e27aca719_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
