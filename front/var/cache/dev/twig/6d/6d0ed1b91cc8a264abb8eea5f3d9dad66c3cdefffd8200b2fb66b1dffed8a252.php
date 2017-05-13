<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ea7b167aa04c865e886ae20ef959388966b0e03eb48a2952358051fd30d477ab extends Twig_Template
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
        $__internal_bba746ca88f9e8a586965be33d99b6c6cede202933591707113a42e9c543a58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba746ca88f9e8a586965be33d99b6c6cede202933591707113a42e9c543a58f->enter($__internal_bba746ca88f9e8a586965be33d99b6c6cede202933591707113a42e9c543a58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0ed4f66336c691cf66adc74223319421bb39925de77ce261b0f742253e734142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed4f66336c691cf66adc74223319421bb39925de77ce261b0f742253e734142->enter($__internal_0ed4f66336c691cf66adc74223319421bb39925de77ce261b0f742253e734142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bba746ca88f9e8a586965be33d99b6c6cede202933591707113a42e9c543a58f->leave($__internal_bba746ca88f9e8a586965be33d99b6c6cede202933591707113a42e9c543a58f_prof);

        
        $__internal_0ed4f66336c691cf66adc74223319421bb39925de77ce261b0f742253e734142->leave($__internal_0ed4f66336c691cf66adc74223319421bb39925de77ce261b0f742253e734142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
