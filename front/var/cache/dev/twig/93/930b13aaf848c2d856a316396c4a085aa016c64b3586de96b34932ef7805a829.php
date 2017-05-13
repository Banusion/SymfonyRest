<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6e23b94508595d9a343b4223f0f09ac7fc87b83b39a79a58aba60cf753613c5f extends Twig_Template
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
        $__internal_30b3a899c99938fbae60b7eea78e701bc72a6664b6e6fbd7b49d75c2ee340680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b3a899c99938fbae60b7eea78e701bc72a6664b6e6fbd7b49d75c2ee340680->enter($__internal_30b3a899c99938fbae60b7eea78e701bc72a6664b6e6fbd7b49d75c2ee340680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_88c0d2b63a932795b6b57d9aab8ef6564849644ee33459f96cec764cfd187f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c0d2b63a932795b6b57d9aab8ef6564849644ee33459f96cec764cfd187f39->enter($__internal_88c0d2b63a932795b6b57d9aab8ef6564849644ee33459f96cec764cfd187f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_30b3a899c99938fbae60b7eea78e701bc72a6664b6e6fbd7b49d75c2ee340680->leave($__internal_30b3a899c99938fbae60b7eea78e701bc72a6664b6e6fbd7b49d75c2ee340680_prof);

        
        $__internal_88c0d2b63a932795b6b57d9aab8ef6564849644ee33459f96cec764cfd187f39->leave($__internal_88c0d2b63a932795b6b57d9aab8ef6564849644ee33459f96cec764cfd187f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
