<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_85f6b749261ca04160d70aa23b24fdb4e2436b481c4e1cd1d3cf5337be7c602f extends Twig_Template
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
        $__internal_dfd77169408a086c6ac402b459cfdc19fc6c4a5b8c30513becb15ce5ef55e852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd77169408a086c6ac402b459cfdc19fc6c4a5b8c30513becb15ce5ef55e852->enter($__internal_dfd77169408a086c6ac402b459cfdc19fc6c4a5b8c30513becb15ce5ef55e852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_589eaa618a7b80c9ced8b95ca74bb3487c25444fb325589843edc6c2009e5cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589eaa618a7b80c9ced8b95ca74bb3487c25444fb325589843edc6c2009e5cdf->enter($__internal_589eaa618a7b80c9ced8b95ca74bb3487c25444fb325589843edc6c2009e5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dfd77169408a086c6ac402b459cfdc19fc6c4a5b8c30513becb15ce5ef55e852->leave($__internal_dfd77169408a086c6ac402b459cfdc19fc6c4a5b8c30513becb15ce5ef55e852_prof);

        
        $__internal_589eaa618a7b80c9ced8b95ca74bb3487c25444fb325589843edc6c2009e5cdf->leave($__internal_589eaa618a7b80c9ced8b95ca74bb3487c25444fb325589843edc6c2009e5cdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
