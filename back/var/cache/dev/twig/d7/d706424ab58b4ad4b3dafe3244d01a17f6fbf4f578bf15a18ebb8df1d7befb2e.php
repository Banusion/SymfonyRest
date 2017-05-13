<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49d20b1d1fbd6012e75a35dbe95145a46254c5f769c144382c5476188e27b1f7 extends Twig_Template
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
        $__internal_8523a30b6ddaf58375aa531dc7f5f2a85afe0612f65d8060c4a5b963a71ca039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8523a30b6ddaf58375aa531dc7f5f2a85afe0612f65d8060c4a5b963a71ca039->enter($__internal_8523a30b6ddaf58375aa531dc7f5f2a85afe0612f65d8060c4a5b963a71ca039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c71fc5d537481ff319e7a58ba7765374cc0f7077da303c76dfd0a90237a5cf92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71fc5d537481ff319e7a58ba7765374cc0f7077da303c76dfd0a90237a5cf92->enter($__internal_c71fc5d537481ff319e7a58ba7765374cc0f7077da303c76dfd0a90237a5cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8523a30b6ddaf58375aa531dc7f5f2a85afe0612f65d8060c4a5b963a71ca039->leave($__internal_8523a30b6ddaf58375aa531dc7f5f2a85afe0612f65d8060c4a5b963a71ca039_prof);

        
        $__internal_c71fc5d537481ff319e7a58ba7765374cc0f7077da303c76dfd0a90237a5cf92->leave($__internal_c71fc5d537481ff319e7a58ba7765374cc0f7077da303c76dfd0a90237a5cf92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
