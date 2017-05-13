<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ce5997f335c45de27a45b29020493218dd1e33cfda4618b4a080a7c2b6ade33a extends Twig_Template
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
        $__internal_cf6d702a9dee145c3a50e577e7443687a6841a9e9ea844110441f2f1aa6c8c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6d702a9dee145c3a50e577e7443687a6841a9e9ea844110441f2f1aa6c8c70->enter($__internal_cf6d702a9dee145c3a50e577e7443687a6841a9e9ea844110441f2f1aa6c8c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2a7c0e1db63c3c99389e38cbb83f1cb3abc0e4c03a078230b6cf9c7ec48b0806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7c0e1db63c3c99389e38cbb83f1cb3abc0e4c03a078230b6cf9c7ec48b0806->enter($__internal_2a7c0e1db63c3c99389e38cbb83f1cb3abc0e4c03a078230b6cf9c7ec48b0806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cf6d702a9dee145c3a50e577e7443687a6841a9e9ea844110441f2f1aa6c8c70->leave($__internal_cf6d702a9dee145c3a50e577e7443687a6841a9e9ea844110441f2f1aa6c8c70_prof);

        
        $__internal_2a7c0e1db63c3c99389e38cbb83f1cb3abc0e4c03a078230b6cf9c7ec48b0806->leave($__internal_2a7c0e1db63c3c99389e38cbb83f1cb3abc0e4c03a078230b6cf9c7ec48b0806_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
