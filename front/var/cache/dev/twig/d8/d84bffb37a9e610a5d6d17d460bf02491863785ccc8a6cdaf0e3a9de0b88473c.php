<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_2a30d7a6f5a1fc2c54d025b20324a717f682611d6ea397aaa27837cb6489b4dd extends Twig_Template
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
        $__internal_01c144c40c120bb723438f4105b191b5adb4292f94f1f6c07c7e49f1f9d5dbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c144c40c120bb723438f4105b191b5adb4292f94f1f6c07c7e49f1f9d5dbdf->enter($__internal_01c144c40c120bb723438f4105b191b5adb4292f94f1f6c07c7e49f1f9d5dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_88cd8a905a13e4787985c8217b9907df26a9c6fa9f2886e7bcfe85400cb211fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cd8a905a13e4787985c8217b9907df26a9c6fa9f2886e7bcfe85400cb211fc->enter($__internal_88cd8a905a13e4787985c8217b9907df26a9c6fa9f2886e7bcfe85400cb211fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_01c144c40c120bb723438f4105b191b5adb4292f94f1f6c07c7e49f1f9d5dbdf->leave($__internal_01c144c40c120bb723438f4105b191b5adb4292f94f1f6c07c7e49f1f9d5dbdf_prof);

        
        $__internal_88cd8a905a13e4787985c8217b9907df26a9c6fa9f2886e7bcfe85400cb211fc->leave($__internal_88cd8a905a13e4787985c8217b9907df26a9c6fa9f2886e7bcfe85400cb211fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
