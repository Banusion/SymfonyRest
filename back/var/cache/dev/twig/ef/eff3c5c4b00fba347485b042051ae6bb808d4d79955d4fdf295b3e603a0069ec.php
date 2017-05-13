<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2aab486947658f145bd2042f668a6a19b96d6451eebafb720869bfe7c2c7701d extends Twig_Template
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
        $__internal_3582686c9132763585045b5145a036ae249c1ef4bd090636b8439abf5f77886a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3582686c9132763585045b5145a036ae249c1ef4bd090636b8439abf5f77886a->enter($__internal_3582686c9132763585045b5145a036ae249c1ef4bd090636b8439abf5f77886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0181b70e5750857dc40b833314dfaab0a06071f79947c440a7eac4c302186f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0181b70e5750857dc40b833314dfaab0a06071f79947c440a7eac4c302186f15->enter($__internal_0181b70e5750857dc40b833314dfaab0a06071f79947c440a7eac4c302186f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3582686c9132763585045b5145a036ae249c1ef4bd090636b8439abf5f77886a->leave($__internal_3582686c9132763585045b5145a036ae249c1ef4bd090636b8439abf5f77886a_prof);

        
        $__internal_0181b70e5750857dc40b833314dfaab0a06071f79947c440a7eac4c302186f15->leave($__internal_0181b70e5750857dc40b833314dfaab0a06071f79947c440a7eac4c302186f15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
