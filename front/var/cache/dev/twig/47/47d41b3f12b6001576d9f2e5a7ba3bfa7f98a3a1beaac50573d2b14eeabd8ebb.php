<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_960cff5b191167ffe0b18d021f2dff22d2b8c332fb5f8a59bf98e7e6cedcf15c extends Twig_Template
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
        $__internal_86e300c535e56e86dbaf021ff78b51bd456942772505f46e77112c5259e1a206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e300c535e56e86dbaf021ff78b51bd456942772505f46e77112c5259e1a206->enter($__internal_86e300c535e56e86dbaf021ff78b51bd456942772505f46e77112c5259e1a206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6151bee1c8dfa75b12df265325f665b060ff383dd7edb44b8dc72661c139adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6151bee1c8dfa75b12df265325f665b060ff383dd7edb44b8dc72661c139adb5->enter($__internal_6151bee1c8dfa75b12df265325f665b060ff383dd7edb44b8dc72661c139adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_86e300c535e56e86dbaf021ff78b51bd456942772505f46e77112c5259e1a206->leave($__internal_86e300c535e56e86dbaf021ff78b51bd456942772505f46e77112c5259e1a206_prof);

        
        $__internal_6151bee1c8dfa75b12df265325f665b060ff383dd7edb44b8dc72661c139adb5->leave($__internal_6151bee1c8dfa75b12df265325f665b060ff383dd7edb44b8dc72661c139adb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
