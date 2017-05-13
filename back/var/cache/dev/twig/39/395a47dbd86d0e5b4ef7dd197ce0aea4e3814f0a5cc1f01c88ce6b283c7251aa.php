<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fd29546ea8a387b8a17eb13a54229e33c4a279c81b76f8166c8888127184a478 extends Twig_Template
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
        $__internal_3c68652bd40b6dd6bb4fa65de0cb7ca0e592df02268afad1166c52e2048c0f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c68652bd40b6dd6bb4fa65de0cb7ca0e592df02268afad1166c52e2048c0f3f->enter($__internal_3c68652bd40b6dd6bb4fa65de0cb7ca0e592df02268afad1166c52e2048c0f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a73a153e477d95271cea2e762b3e2030397b0c8b48cccfb2a9f42b6ec3e19ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73a153e477d95271cea2e762b3e2030397b0c8b48cccfb2a9f42b6ec3e19ed5->enter($__internal_a73a153e477d95271cea2e762b3e2030397b0c8b48cccfb2a9f42b6ec3e19ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3c68652bd40b6dd6bb4fa65de0cb7ca0e592df02268afad1166c52e2048c0f3f->leave($__internal_3c68652bd40b6dd6bb4fa65de0cb7ca0e592df02268afad1166c52e2048c0f3f_prof);

        
        $__internal_a73a153e477d95271cea2e762b3e2030397b0c8b48cccfb2a9f42b6ec3e19ed5->leave($__internal_a73a153e477d95271cea2e762b3e2030397b0c8b48cccfb2a9f42b6ec3e19ed5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
