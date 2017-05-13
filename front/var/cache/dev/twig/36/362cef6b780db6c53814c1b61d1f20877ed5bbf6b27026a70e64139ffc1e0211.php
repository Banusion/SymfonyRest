<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9b0c26221c35df812ec94b8752ea79dfed4d9da4ce389698cc1e4a34aa77d4f6 extends Twig_Template
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
        $__internal_45a6893bc2bd1fc2534008b9a5f7ecb3475c5b2d931bb8ed37753fd5b6fd6ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a6893bc2bd1fc2534008b9a5f7ecb3475c5b2d931bb8ed37753fd5b6fd6ffe->enter($__internal_45a6893bc2bd1fc2534008b9a5f7ecb3475c5b2d931bb8ed37753fd5b6fd6ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_10ea3d056deda07b85f2f5d8647589c7df71aa306a76a7a613e4108fda90dfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ea3d056deda07b85f2f5d8647589c7df71aa306a76a7a613e4108fda90dfea->enter($__internal_10ea3d056deda07b85f2f5d8647589c7df71aa306a76a7a613e4108fda90dfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_45a6893bc2bd1fc2534008b9a5f7ecb3475c5b2d931bb8ed37753fd5b6fd6ffe->leave($__internal_45a6893bc2bd1fc2534008b9a5f7ecb3475c5b2d931bb8ed37753fd5b6fd6ffe_prof);

        
        $__internal_10ea3d056deda07b85f2f5d8647589c7df71aa306a76a7a613e4108fda90dfea->leave($__internal_10ea3d056deda07b85f2f5d8647589c7df71aa306a76a7a613e4108fda90dfea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
