<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7438e4464688dfd635fc19f8db1c323bb692999a7b187b19b1dc719edcbf92d5 extends Twig_Template
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
        $__internal_ef24a938a919cb4a2d3b9622b2e67459d2564b02e9d71586b8492e646d8995be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef24a938a919cb4a2d3b9622b2e67459d2564b02e9d71586b8492e646d8995be->enter($__internal_ef24a938a919cb4a2d3b9622b2e67459d2564b02e9d71586b8492e646d8995be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_abc2906e5b53a7454e774e3a381de9118cffc1b3abc7a7985b6629c0c6160bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc2906e5b53a7454e774e3a381de9118cffc1b3abc7a7985b6629c0c6160bc6->enter($__internal_abc2906e5b53a7454e774e3a381de9118cffc1b3abc7a7985b6629c0c6160bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ef24a938a919cb4a2d3b9622b2e67459d2564b02e9d71586b8492e646d8995be->leave($__internal_ef24a938a919cb4a2d3b9622b2e67459d2564b02e9d71586b8492e646d8995be_prof);

        
        $__internal_abc2906e5b53a7454e774e3a381de9118cffc1b3abc7a7985b6629c0c6160bc6->leave($__internal_abc2906e5b53a7454e774e3a381de9118cffc1b3abc7a7985b6629c0c6160bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
