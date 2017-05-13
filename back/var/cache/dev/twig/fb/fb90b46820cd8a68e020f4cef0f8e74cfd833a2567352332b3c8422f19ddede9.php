<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_13289b29f13a93755bbec17e4376f74eae8da5b04fd6884ad84e8d78cc86cebf extends Twig_Template
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
        $__internal_c1d2246f318b4cb8280a075d316b5ea9c5aff3b13f301086c6814b8598d612ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d2246f318b4cb8280a075d316b5ea9c5aff3b13f301086c6814b8598d612ec->enter($__internal_c1d2246f318b4cb8280a075d316b5ea9c5aff3b13f301086c6814b8598d612ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_61af9b69924cb3d95dda7cdb4abbd190aa92dd8bcc06453628a2916daa51f7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61af9b69924cb3d95dda7cdb4abbd190aa92dd8bcc06453628a2916daa51f7c2->enter($__internal_61af9b69924cb3d95dda7cdb4abbd190aa92dd8bcc06453628a2916daa51f7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c1d2246f318b4cb8280a075d316b5ea9c5aff3b13f301086c6814b8598d612ec->leave($__internal_c1d2246f318b4cb8280a075d316b5ea9c5aff3b13f301086c6814b8598d612ec_prof);

        
        $__internal_61af9b69924cb3d95dda7cdb4abbd190aa92dd8bcc06453628a2916daa51f7c2->leave($__internal_61af9b69924cb3d95dda7cdb4abbd190aa92dd8bcc06453628a2916daa51f7c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
