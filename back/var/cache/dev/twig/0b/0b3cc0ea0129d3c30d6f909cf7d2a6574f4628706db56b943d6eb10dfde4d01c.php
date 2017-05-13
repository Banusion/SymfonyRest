<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a3a7b26b6bb7ab6f45946e04295b90bf132e87d44683247e787a834cf5e56483 extends Twig_Template
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
        $__internal_9b855b9c84f445ad210601ceaaf305f19c164aa2f4109dcd5c7ba52604dad5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b855b9c84f445ad210601ceaaf305f19c164aa2f4109dcd5c7ba52604dad5c4->enter($__internal_9b855b9c84f445ad210601ceaaf305f19c164aa2f4109dcd5c7ba52604dad5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_98592f23bef5c5e0906203e111ac7cc56b084c81855ab7cb902e5a84aa994337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98592f23bef5c5e0906203e111ac7cc56b084c81855ab7cb902e5a84aa994337->enter($__internal_98592f23bef5c5e0906203e111ac7cc56b084c81855ab7cb902e5a84aa994337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b855b9c84f445ad210601ceaaf305f19c164aa2f4109dcd5c7ba52604dad5c4->leave($__internal_9b855b9c84f445ad210601ceaaf305f19c164aa2f4109dcd5c7ba52604dad5c4_prof);

        
        $__internal_98592f23bef5c5e0906203e111ac7cc56b084c81855ab7cb902e5a84aa994337->leave($__internal_98592f23bef5c5e0906203e111ac7cc56b084c81855ab7cb902e5a84aa994337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
