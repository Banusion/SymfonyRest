<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_cb65ec82b43d80068a248aa1ac9b57e25695694eddbad2996c68fae476ac01c2 extends Twig_Template
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
        $__internal_2c53e82536d015b8772559c1e64adea97d2fdf8cbb13025b642dcf1177656b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c53e82536d015b8772559c1e64adea97d2fdf8cbb13025b642dcf1177656b34->enter($__internal_2c53e82536d015b8772559c1e64adea97d2fdf8cbb13025b642dcf1177656b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_01c5a2aa2f0d0af876cbc211d30f29babdc10a77652d03bcd019e2da11bd7c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c5a2aa2f0d0af876cbc211d30f29babdc10a77652d03bcd019e2da11bd7c78->enter($__internal_01c5a2aa2f0d0af876cbc211d30f29babdc10a77652d03bcd019e2da11bd7c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2c53e82536d015b8772559c1e64adea97d2fdf8cbb13025b642dcf1177656b34->leave($__internal_2c53e82536d015b8772559c1e64adea97d2fdf8cbb13025b642dcf1177656b34_prof);

        
        $__internal_01c5a2aa2f0d0af876cbc211d30f29babdc10a77652d03bcd019e2da11bd7c78->leave($__internal_01c5a2aa2f0d0af876cbc211d30f29babdc10a77652d03bcd019e2da11bd7c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
