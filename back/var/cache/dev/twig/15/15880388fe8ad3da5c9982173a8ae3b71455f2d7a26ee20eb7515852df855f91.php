<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7e6f6984a1153ee06fb896ab86a288786e9f6a6c8a8edbfaf2566e9f0fe1bd2b extends Twig_Template
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
        $__internal_278b0268fca02a73072970e3f94e030c0ca127c1d0c717cec01effec4610ba4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278b0268fca02a73072970e3f94e030c0ca127c1d0c717cec01effec4610ba4c->enter($__internal_278b0268fca02a73072970e3f94e030c0ca127c1d0c717cec01effec4610ba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d8bba1a1e0537512abd36ef9b44a53693513dd6e668ec664a68940e85edd4729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bba1a1e0537512abd36ef9b44a53693513dd6e668ec664a68940e85edd4729->enter($__internal_d8bba1a1e0537512abd36ef9b44a53693513dd6e668ec664a68940e85edd4729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_278b0268fca02a73072970e3f94e030c0ca127c1d0c717cec01effec4610ba4c->leave($__internal_278b0268fca02a73072970e3f94e030c0ca127c1d0c717cec01effec4610ba4c_prof);

        
        $__internal_d8bba1a1e0537512abd36ef9b44a53693513dd6e668ec664a68940e85edd4729->leave($__internal_d8bba1a1e0537512abd36ef9b44a53693513dd6e668ec664a68940e85edd4729_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
