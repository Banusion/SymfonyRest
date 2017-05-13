<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6dacfcef1f755192bced3da3ffffddfb01394a0d1b842ee9ce1128d246b9a72f extends Twig_Template
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
        $__internal_de67049719ea7de6ae35881a6d1f6e93c758d70a8b56c594d711dd12a9b04564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de67049719ea7de6ae35881a6d1f6e93c758d70a8b56c594d711dd12a9b04564->enter($__internal_de67049719ea7de6ae35881a6d1f6e93c758d70a8b56c594d711dd12a9b04564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b2a6811544272d280e7617c7d217431282659d0cfdc7f7f60433858e4ac63852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a6811544272d280e7617c7d217431282659d0cfdc7f7f60433858e4ac63852->enter($__internal_b2a6811544272d280e7617c7d217431282659d0cfdc7f7f60433858e4ac63852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_de67049719ea7de6ae35881a6d1f6e93c758d70a8b56c594d711dd12a9b04564->leave($__internal_de67049719ea7de6ae35881a6d1f6e93c758d70a8b56c594d711dd12a9b04564_prof);

        
        $__internal_b2a6811544272d280e7617c7d217431282659d0cfdc7f7f60433858e4ac63852->leave($__internal_b2a6811544272d280e7617c7d217431282659d0cfdc7f7f60433858e4ac63852_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
