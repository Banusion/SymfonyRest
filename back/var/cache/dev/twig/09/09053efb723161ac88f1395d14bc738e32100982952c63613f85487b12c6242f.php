<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9f4dc27483edc3339c6c908ebc77bc0b6ae7ab30a7e35df2fed58b5344580977 extends Twig_Template
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
        $__internal_b785d4b50b3ed012b06d573d76f11122e882b7dc494b3ab9986bf030637dd389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b785d4b50b3ed012b06d573d76f11122e882b7dc494b3ab9986bf030637dd389->enter($__internal_b785d4b50b3ed012b06d573d76f11122e882b7dc494b3ab9986bf030637dd389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8da5557bec0571ea5edb101aff023ff5e510e9a6c4325aaf53c3600031e29c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da5557bec0571ea5edb101aff023ff5e510e9a6c4325aaf53c3600031e29c7f->enter($__internal_8da5557bec0571ea5edb101aff023ff5e510e9a6c4325aaf53c3600031e29c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b785d4b50b3ed012b06d573d76f11122e882b7dc494b3ab9986bf030637dd389->leave($__internal_b785d4b50b3ed012b06d573d76f11122e882b7dc494b3ab9986bf030637dd389_prof);

        
        $__internal_8da5557bec0571ea5edb101aff023ff5e510e9a6c4325aaf53c3600031e29c7f->leave($__internal_8da5557bec0571ea5edb101aff023ff5e510e9a6c4325aaf53c3600031e29c7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
