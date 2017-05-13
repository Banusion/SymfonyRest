<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_027d170ebb8d39a1f72d2c15f43e4a4c25c90010ad2efdb188c30eb587c61d7d extends Twig_Template
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
        $__internal_339c81eb041b4b07281d3eea5eefa46ed2e52ff4ddee77e2faabd04d880e480f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339c81eb041b4b07281d3eea5eefa46ed2e52ff4ddee77e2faabd04d880e480f->enter($__internal_339c81eb041b4b07281d3eea5eefa46ed2e52ff4ddee77e2faabd04d880e480f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f65296d24616feba1e8000d96cb504af218f7ed858e138a8cbf029482d426b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65296d24616feba1e8000d96cb504af218f7ed858e138a8cbf029482d426b23->enter($__internal_f65296d24616feba1e8000d96cb504af218f7ed858e138a8cbf029482d426b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_339c81eb041b4b07281d3eea5eefa46ed2e52ff4ddee77e2faabd04d880e480f->leave($__internal_339c81eb041b4b07281d3eea5eefa46ed2e52ff4ddee77e2faabd04d880e480f_prof);

        
        $__internal_f65296d24616feba1e8000d96cb504af218f7ed858e138a8cbf029482d426b23->leave($__internal_f65296d24616feba1e8000d96cb504af218f7ed858e138a8cbf029482d426b23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
