<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f9cd903790f149995698bf7a9a1b0bca597e0426ed445ceaeac68337649c057b extends Twig_Template
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
        $__internal_526bf4ef683f6b2e3c74292ad4c5b7d09e5e19ee3047ab0293b3a413c66ae97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526bf4ef683f6b2e3c74292ad4c5b7d09e5e19ee3047ab0293b3a413c66ae97d->enter($__internal_526bf4ef683f6b2e3c74292ad4c5b7d09e5e19ee3047ab0293b3a413c66ae97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_5a14c62f0bceea74339e9d5c11c16f976d77347060e106101c416f1bb5312be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a14c62f0bceea74339e9d5c11c16f976d77347060e106101c416f1bb5312be3->enter($__internal_5a14c62f0bceea74339e9d5c11c16f976d77347060e106101c416f1bb5312be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_526bf4ef683f6b2e3c74292ad4c5b7d09e5e19ee3047ab0293b3a413c66ae97d->leave($__internal_526bf4ef683f6b2e3c74292ad4c5b7d09e5e19ee3047ab0293b3a413c66ae97d_prof);

        
        $__internal_5a14c62f0bceea74339e9d5c11c16f976d77347060e106101c416f1bb5312be3->leave($__internal_5a14c62f0bceea74339e9d5c11c16f976d77347060e106101c416f1bb5312be3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
