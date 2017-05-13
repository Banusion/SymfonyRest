<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3364c03bb09280bdcd45cf6c9fc991452718adf6e5bd503363b6f7f8822a8de5 extends Twig_Template
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
        $__internal_9cd7fc3237b73c02bd6de52d0d322a8e1fc2b131c0df76742462652f97ca2ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd7fc3237b73c02bd6de52d0d322a8e1fc2b131c0df76742462652f97ca2ec0->enter($__internal_9cd7fc3237b73c02bd6de52d0d322a8e1fc2b131c0df76742462652f97ca2ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a3a8e731ad6e07ef214f7119f6e39f3f528571edf94ba0e43b568a286d2fa0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a8e731ad6e07ef214f7119f6e39f3f528571edf94ba0e43b568a286d2fa0b2->enter($__internal_a3a8e731ad6e07ef214f7119f6e39f3f528571edf94ba0e43b568a286d2fa0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9cd7fc3237b73c02bd6de52d0d322a8e1fc2b131c0df76742462652f97ca2ec0->leave($__internal_9cd7fc3237b73c02bd6de52d0d322a8e1fc2b131c0df76742462652f97ca2ec0_prof);

        
        $__internal_a3a8e731ad6e07ef214f7119f6e39f3f528571edf94ba0e43b568a286d2fa0b2->leave($__internal_a3a8e731ad6e07ef214f7119f6e39f3f528571edf94ba0e43b568a286d2fa0b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
