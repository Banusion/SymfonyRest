<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd5bdc92be2b343c182d74b8e86a59ded95f5c4c6ba07dcfb272907dc636491d extends Twig_Template
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
        $__internal_9f9cac0d100dbcc0e3c3908f3212bfdd3b370e452d058a3e9c96a3d8876947ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9cac0d100dbcc0e3c3908f3212bfdd3b370e452d058a3e9c96a3d8876947ed->enter($__internal_9f9cac0d100dbcc0e3c3908f3212bfdd3b370e452d058a3e9c96a3d8876947ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b7dcaf9ef88ea19949228971146a707c9f54e755788b9b939f9da034b44fb573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dcaf9ef88ea19949228971146a707c9f54e755788b9b939f9da034b44fb573->enter($__internal_b7dcaf9ef88ea19949228971146a707c9f54e755788b9b939f9da034b44fb573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9f9cac0d100dbcc0e3c3908f3212bfdd3b370e452d058a3e9c96a3d8876947ed->leave($__internal_9f9cac0d100dbcc0e3c3908f3212bfdd3b370e452d058a3e9c96a3d8876947ed_prof);

        
        $__internal_b7dcaf9ef88ea19949228971146a707c9f54e755788b9b939f9da034b44fb573->leave($__internal_b7dcaf9ef88ea19949228971146a707c9f54e755788b9b939f9da034b44fb573_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
