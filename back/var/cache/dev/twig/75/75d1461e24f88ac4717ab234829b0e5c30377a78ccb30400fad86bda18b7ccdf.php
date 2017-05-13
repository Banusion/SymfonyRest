<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_97a72d8dcac07cfaa9841c221f717e3d4588d4f086c4200ee8ab546f2d44a66e extends Twig_Template
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
        $__internal_63f2b5bd6cf525abedb6f88019e39eeb0b94ef908352cf95c3cc48614f14987f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f2b5bd6cf525abedb6f88019e39eeb0b94ef908352cf95c3cc48614f14987f->enter($__internal_63f2b5bd6cf525abedb6f88019e39eeb0b94ef908352cf95c3cc48614f14987f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_404e090ce9e70076e89aa7906a2e77508a619f83df2953bab082b10436e1ac5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404e090ce9e70076e89aa7906a2e77508a619f83df2953bab082b10436e1ac5b->enter($__internal_404e090ce9e70076e89aa7906a2e77508a619f83df2953bab082b10436e1ac5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_63f2b5bd6cf525abedb6f88019e39eeb0b94ef908352cf95c3cc48614f14987f->leave($__internal_63f2b5bd6cf525abedb6f88019e39eeb0b94ef908352cf95c3cc48614f14987f_prof);

        
        $__internal_404e090ce9e70076e89aa7906a2e77508a619f83df2953bab082b10436e1ac5b->leave($__internal_404e090ce9e70076e89aa7906a2e77508a619f83df2953bab082b10436e1ac5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
