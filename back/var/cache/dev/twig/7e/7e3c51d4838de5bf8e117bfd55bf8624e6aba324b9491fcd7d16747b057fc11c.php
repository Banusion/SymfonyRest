<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_37e678b7dd3c54b9aab6e16770b6394dba9a482f720694d43935cd8b758ed94e extends Twig_Template
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
        $__internal_51527440945e20068b863fb711521f171370fd0c60347d728330470d58064620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51527440945e20068b863fb711521f171370fd0c60347d728330470d58064620->enter($__internal_51527440945e20068b863fb711521f171370fd0c60347d728330470d58064620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2ae4af545c5f82bc198be3cba32d4893cc2ee3bf9f5efaede53f0405f04bbd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae4af545c5f82bc198be3cba32d4893cc2ee3bf9f5efaede53f0405f04bbd03->enter($__internal_2ae4af545c5f82bc198be3cba32d4893cc2ee3bf9f5efaede53f0405f04bbd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_51527440945e20068b863fb711521f171370fd0c60347d728330470d58064620->leave($__internal_51527440945e20068b863fb711521f171370fd0c60347d728330470d58064620_prof);

        
        $__internal_2ae4af545c5f82bc198be3cba32d4893cc2ee3bf9f5efaede53f0405f04bbd03->leave($__internal_2ae4af545c5f82bc198be3cba32d4893cc2ee3bf9f5efaede53f0405f04bbd03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
