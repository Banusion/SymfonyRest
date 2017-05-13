<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7dcae4b6d54df8fc26eae00ec5b229eb96b173ff2f5739f93e4a40d3c48a80de extends Twig_Template
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
        $__internal_cc857b590e0055d56f29255ebde7deaab665c9e8b3ba3c0a6353b777e04b7002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc857b590e0055d56f29255ebde7deaab665c9e8b3ba3c0a6353b777e04b7002->enter($__internal_cc857b590e0055d56f29255ebde7deaab665c9e8b3ba3c0a6353b777e04b7002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b2205ad9f0189b21cd2fd8f001161b4528acdcc778190fcef91f1bc0d6f94a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2205ad9f0189b21cd2fd8f001161b4528acdcc778190fcef91f1bc0d6f94a01->enter($__internal_b2205ad9f0189b21cd2fd8f001161b4528acdcc778190fcef91f1bc0d6f94a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc857b590e0055d56f29255ebde7deaab665c9e8b3ba3c0a6353b777e04b7002->leave($__internal_cc857b590e0055d56f29255ebde7deaab665c9e8b3ba3c0a6353b777e04b7002_prof);

        
        $__internal_b2205ad9f0189b21cd2fd8f001161b4528acdcc778190fcef91f1bc0d6f94a01->leave($__internal_b2205ad9f0189b21cd2fd8f001161b4528acdcc778190fcef91f1bc0d6f94a01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
