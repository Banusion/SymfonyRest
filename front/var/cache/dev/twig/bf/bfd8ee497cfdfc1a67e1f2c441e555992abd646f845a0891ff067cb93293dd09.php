<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e4ca351799e73726f0c4e551a676399a7f1768be0bc00480f1317c92b4b981e7 extends Twig_Template
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
        $__internal_8264fcd8c0063dd698025b9f9656a15a1472eb3e587bdf7a5f847c2d9aadc5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8264fcd8c0063dd698025b9f9656a15a1472eb3e587bdf7a5f847c2d9aadc5e3->enter($__internal_8264fcd8c0063dd698025b9f9656a15a1472eb3e587bdf7a5f847c2d9aadc5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3bff540453ea497979fe2ef1a54613849993cae1bd327ea765b7ece7fcc71af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bff540453ea497979fe2ef1a54613849993cae1bd327ea765b7ece7fcc71af0->enter($__internal_3bff540453ea497979fe2ef1a54613849993cae1bd327ea765b7ece7fcc71af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8264fcd8c0063dd698025b9f9656a15a1472eb3e587bdf7a5f847c2d9aadc5e3->leave($__internal_8264fcd8c0063dd698025b9f9656a15a1472eb3e587bdf7a5f847c2d9aadc5e3_prof);

        
        $__internal_3bff540453ea497979fe2ef1a54613849993cae1bd327ea765b7ece7fcc71af0->leave($__internal_3bff540453ea497979fe2ef1a54613849993cae1bd327ea765b7ece7fcc71af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
