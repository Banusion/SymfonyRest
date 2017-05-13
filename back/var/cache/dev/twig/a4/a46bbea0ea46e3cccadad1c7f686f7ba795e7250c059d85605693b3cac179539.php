<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9f5e5448c3f3fe4e70193b05666feef249ac2695e72a5f3de1db6829b9bb7e92 extends Twig_Template
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
        $__internal_46db0eef91eb5eb2f9166358cc03e3752176c43c48f051202af084c8fe5af1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46db0eef91eb5eb2f9166358cc03e3752176c43c48f051202af084c8fe5af1ab->enter($__internal_46db0eef91eb5eb2f9166358cc03e3752176c43c48f051202af084c8fe5af1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_97f6733e3740b3b29b8cdc194c1caf84cd91a3c02eaafd5ca0e6c49f32f42a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f6733e3740b3b29b8cdc194c1caf84cd91a3c02eaafd5ca0e6c49f32f42a53->enter($__internal_97f6733e3740b3b29b8cdc194c1caf84cd91a3c02eaafd5ca0e6c49f32f42a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_46db0eef91eb5eb2f9166358cc03e3752176c43c48f051202af084c8fe5af1ab->leave($__internal_46db0eef91eb5eb2f9166358cc03e3752176c43c48f051202af084c8fe5af1ab_prof);

        
        $__internal_97f6733e3740b3b29b8cdc194c1caf84cd91a3c02eaafd5ca0e6c49f32f42a53->leave($__internal_97f6733e3740b3b29b8cdc194c1caf84cd91a3c02eaafd5ca0e6c49f32f42a53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
