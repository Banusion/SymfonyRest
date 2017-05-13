<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_da5c8ad40ee878ee6965db10cffd2f3742af10422ff3f7e59c2c8a1348ef7033 extends Twig_Template
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
        $__internal_51fbeee98c0739baca971b0bee27b64f27a452a63c143a9605cbfb7a340b61f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fbeee98c0739baca971b0bee27b64f27a452a63c143a9605cbfb7a340b61f5->enter($__internal_51fbeee98c0739baca971b0bee27b64f27a452a63c143a9605cbfb7a340b61f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9de13482a551f4d4e911913afe23fc66c02675fbdf473242a663d60bfa7da1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de13482a551f4d4e911913afe23fc66c02675fbdf473242a663d60bfa7da1d1->enter($__internal_9de13482a551f4d4e911913afe23fc66c02675fbdf473242a663d60bfa7da1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_51fbeee98c0739baca971b0bee27b64f27a452a63c143a9605cbfb7a340b61f5->leave($__internal_51fbeee98c0739baca971b0bee27b64f27a452a63c143a9605cbfb7a340b61f5_prof);

        
        $__internal_9de13482a551f4d4e911913afe23fc66c02675fbdf473242a663d60bfa7da1d1->leave($__internal_9de13482a551f4d4e911913afe23fc66c02675fbdf473242a663d60bfa7da1d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
