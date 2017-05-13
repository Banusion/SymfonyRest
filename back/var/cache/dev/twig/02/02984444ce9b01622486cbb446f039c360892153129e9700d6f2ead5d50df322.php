<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_595a8b82804b203b7b24d173dd4c25cb9cd7453ea319f333e380430b6da1986c extends Twig_Template
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
        $__internal_c4384bb6fd1bc7329eccbac2cb1e94835c86d7f292e9ba2e47e4b36ce6f4d337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4384bb6fd1bc7329eccbac2cb1e94835c86d7f292e9ba2e47e4b36ce6f4d337->enter($__internal_c4384bb6fd1bc7329eccbac2cb1e94835c86d7f292e9ba2e47e4b36ce6f4d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9806fad80aaa2f14ccc30a2ac1e583ba95e121b65efad7d176f6f31181983350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9806fad80aaa2f14ccc30a2ac1e583ba95e121b65efad7d176f6f31181983350->enter($__internal_9806fad80aaa2f14ccc30a2ac1e583ba95e121b65efad7d176f6f31181983350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c4384bb6fd1bc7329eccbac2cb1e94835c86d7f292e9ba2e47e4b36ce6f4d337->leave($__internal_c4384bb6fd1bc7329eccbac2cb1e94835c86d7f292e9ba2e47e4b36ce6f4d337_prof);

        
        $__internal_9806fad80aaa2f14ccc30a2ac1e583ba95e121b65efad7d176f6f31181983350->leave($__internal_9806fad80aaa2f14ccc30a2ac1e583ba95e121b65efad7d176f6f31181983350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
