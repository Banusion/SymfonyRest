<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d3713c9a44dfbda88db6338280de7f93137baf9928f4dfc13063670233e1081a extends Twig_Template
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
        $__internal_e29eeb8d66e6041ddeddabc31ba51f55a53d75eee045d965e9e4daa0241c2d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29eeb8d66e6041ddeddabc31ba51f55a53d75eee045d965e9e4daa0241c2d7e->enter($__internal_e29eeb8d66e6041ddeddabc31ba51f55a53d75eee045d965e9e4daa0241c2d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9ecc4e070ce3212d40feb434e749d6cf011eb370f0663f87bb0f41f95486573e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecc4e070ce3212d40feb434e749d6cf011eb370f0663f87bb0f41f95486573e->enter($__internal_9ecc4e070ce3212d40feb434e749d6cf011eb370f0663f87bb0f41f95486573e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e29eeb8d66e6041ddeddabc31ba51f55a53d75eee045d965e9e4daa0241c2d7e->leave($__internal_e29eeb8d66e6041ddeddabc31ba51f55a53d75eee045d965e9e4daa0241c2d7e_prof);

        
        $__internal_9ecc4e070ce3212d40feb434e749d6cf011eb370f0663f87bb0f41f95486573e->leave($__internal_9ecc4e070ce3212d40feb434e749d6cf011eb370f0663f87bb0f41f95486573e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
