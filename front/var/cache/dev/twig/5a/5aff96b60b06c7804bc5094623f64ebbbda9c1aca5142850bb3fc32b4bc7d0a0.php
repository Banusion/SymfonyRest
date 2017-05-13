<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f4dbefd1ab4d1cda1197cfb64b817970cd25e93b802cb9632c7e1368448c7260 extends Twig_Template
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
        $__internal_bc0301719cc6d381d712e124bb112b8ba8e6b5015b29a4827ffe82407f8794f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0301719cc6d381d712e124bb112b8ba8e6b5015b29a4827ffe82407f8794f5->enter($__internal_bc0301719cc6d381d712e124bb112b8ba8e6b5015b29a4827ffe82407f8794f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6e5678bbd50f935f86e2ed2afe6e00caf43a2e7ffc7a02423caae37810633e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5678bbd50f935f86e2ed2afe6e00caf43a2e7ffc7a02423caae37810633e3b->enter($__internal_6e5678bbd50f935f86e2ed2afe6e00caf43a2e7ffc7a02423caae37810633e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bc0301719cc6d381d712e124bb112b8ba8e6b5015b29a4827ffe82407f8794f5->leave($__internal_bc0301719cc6d381d712e124bb112b8ba8e6b5015b29a4827ffe82407f8794f5_prof);

        
        $__internal_6e5678bbd50f935f86e2ed2afe6e00caf43a2e7ffc7a02423caae37810633e3b->leave($__internal_6e5678bbd50f935f86e2ed2afe6e00caf43a2e7ffc7a02423caae37810633e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
