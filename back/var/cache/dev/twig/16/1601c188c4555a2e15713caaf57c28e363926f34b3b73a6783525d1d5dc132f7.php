<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_19121a75942b69c95537efff0ea18d3ac33a2c73119b5255b55743dff8953f70 extends Twig_Template
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
        $__internal_ba26544f09d702ba2ed091d66afb7a7f6dcdb2908ec7ae6bec90bd863c6eec74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba26544f09d702ba2ed091d66afb7a7f6dcdb2908ec7ae6bec90bd863c6eec74->enter($__internal_ba26544f09d702ba2ed091d66afb7a7f6dcdb2908ec7ae6bec90bd863c6eec74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_50339378d7161c380f36acd3018873849186410d79a694d3fb6522ac0adcfa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50339378d7161c380f36acd3018873849186410d79a694d3fb6522ac0adcfa3b->enter($__internal_50339378d7161c380f36acd3018873849186410d79a694d3fb6522ac0adcfa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ba26544f09d702ba2ed091d66afb7a7f6dcdb2908ec7ae6bec90bd863c6eec74->leave($__internal_ba26544f09d702ba2ed091d66afb7a7f6dcdb2908ec7ae6bec90bd863c6eec74_prof);

        
        $__internal_50339378d7161c380f36acd3018873849186410d79a694d3fb6522ac0adcfa3b->leave($__internal_50339378d7161c380f36acd3018873849186410d79a694d3fb6522ac0adcfa3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
