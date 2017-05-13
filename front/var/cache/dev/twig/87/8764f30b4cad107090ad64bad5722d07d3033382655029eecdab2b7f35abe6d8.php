<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_debfc98012f8a1d0e3045e6cb1451bc1ad11406e167da69084a3e4a5842ca62a extends Twig_Template
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
        $__internal_2ad813ff42f0065c346f9292762082612be458caf04b0beb6376d4efaafea2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad813ff42f0065c346f9292762082612be458caf04b0beb6376d4efaafea2d2->enter($__internal_2ad813ff42f0065c346f9292762082612be458caf04b0beb6376d4efaafea2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2e3df7ef158050dacf172ac525829ab326290b917c067506a6da9434ebef2a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3df7ef158050dacf172ac525829ab326290b917c067506a6da9434ebef2a6c->enter($__internal_2e3df7ef158050dacf172ac525829ab326290b917c067506a6da9434ebef2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2ad813ff42f0065c346f9292762082612be458caf04b0beb6376d4efaafea2d2->leave($__internal_2ad813ff42f0065c346f9292762082612be458caf04b0beb6376d4efaafea2d2_prof);

        
        $__internal_2e3df7ef158050dacf172ac525829ab326290b917c067506a6da9434ebef2a6c->leave($__internal_2e3df7ef158050dacf172ac525829ab326290b917c067506a6da9434ebef2a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
