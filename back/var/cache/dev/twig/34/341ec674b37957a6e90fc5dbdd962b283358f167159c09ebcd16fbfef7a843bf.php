<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6c0bcf1afd13353e88af270db97dbda812df0b0be9b5f852e40044ac0d962f9d extends Twig_Template
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
        $__internal_847fa8494968aa4039e1de1c1cafe36cc16e0b2bb2fe88b0bd897da06ac270f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847fa8494968aa4039e1de1c1cafe36cc16e0b2bb2fe88b0bd897da06ac270f9->enter($__internal_847fa8494968aa4039e1de1c1cafe36cc16e0b2bb2fe88b0bd897da06ac270f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_80f144fb59459f91193faaadeef420e06e94068be1cd622a0f42e968e30724b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f144fb59459f91193faaadeef420e06e94068be1cd622a0f42e968e30724b1->enter($__internal_80f144fb59459f91193faaadeef420e06e94068be1cd622a0f42e968e30724b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_847fa8494968aa4039e1de1c1cafe36cc16e0b2bb2fe88b0bd897da06ac270f9->leave($__internal_847fa8494968aa4039e1de1c1cafe36cc16e0b2bb2fe88b0bd897da06ac270f9_prof);

        
        $__internal_80f144fb59459f91193faaadeef420e06e94068be1cd622a0f42e968e30724b1->leave($__internal_80f144fb59459f91193faaadeef420e06e94068be1cd622a0f42e968e30724b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
