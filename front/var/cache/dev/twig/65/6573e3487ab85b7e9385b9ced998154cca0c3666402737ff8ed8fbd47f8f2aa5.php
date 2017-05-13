<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7f9c45606926fb88cbf27b867449d11b03dd6f2a9274c66901579e02929056c2 extends Twig_Template
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
        $__internal_84424c9a536f1345ba54666f017b6ce13ac96e9a401bf4ed72ebec3bdfa6e774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84424c9a536f1345ba54666f017b6ce13ac96e9a401bf4ed72ebec3bdfa6e774->enter($__internal_84424c9a536f1345ba54666f017b6ce13ac96e9a401bf4ed72ebec3bdfa6e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_64597e44499a7eb8e6abc1fcee57450cd580dc0a06a5ca1a5ee84e0f3abd5041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64597e44499a7eb8e6abc1fcee57450cd580dc0a06a5ca1a5ee84e0f3abd5041->enter($__internal_64597e44499a7eb8e6abc1fcee57450cd580dc0a06a5ca1a5ee84e0f3abd5041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84424c9a536f1345ba54666f017b6ce13ac96e9a401bf4ed72ebec3bdfa6e774->leave($__internal_84424c9a536f1345ba54666f017b6ce13ac96e9a401bf4ed72ebec3bdfa6e774_prof);

        
        $__internal_64597e44499a7eb8e6abc1fcee57450cd580dc0a06a5ca1a5ee84e0f3abd5041->leave($__internal_64597e44499a7eb8e6abc1fcee57450cd580dc0a06a5ca1a5ee84e0f3abd5041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
