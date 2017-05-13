<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b985ef55211faad05b71d5ee39ab063e430d2e1803d3d8be7e9aae50484ab30e extends Twig_Template
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
        $__internal_2172c5a0dd5b04c02e6666a097ac1a923988c4cb2ed9c3b90f013df9ecbef441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2172c5a0dd5b04c02e6666a097ac1a923988c4cb2ed9c3b90f013df9ecbef441->enter($__internal_2172c5a0dd5b04c02e6666a097ac1a923988c4cb2ed9c3b90f013df9ecbef441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ff6abe84da811acb066902d14e3cee00d92a7d5cad902a8222cced49d5b25b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6abe84da811acb066902d14e3cee00d92a7d5cad902a8222cced49d5b25b7b->enter($__internal_ff6abe84da811acb066902d14e3cee00d92a7d5cad902a8222cced49d5b25b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2172c5a0dd5b04c02e6666a097ac1a923988c4cb2ed9c3b90f013df9ecbef441->leave($__internal_2172c5a0dd5b04c02e6666a097ac1a923988c4cb2ed9c3b90f013df9ecbef441_prof);

        
        $__internal_ff6abe84da811acb066902d14e3cee00d92a7d5cad902a8222cced49d5b25b7b->leave($__internal_ff6abe84da811acb066902d14e3cee00d92a7d5cad902a8222cced49d5b25b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
