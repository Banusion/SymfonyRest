<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9dc3ffed2e38ab3c84b599d6ea650e96ed1c7b6675e0f8cf4bbc4b4ea9aa8475 extends Twig_Template
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
        $__internal_248358f7f0940fa7d0029b64aaab779b19b5402a1a5f0b699deb9d294fa46b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248358f7f0940fa7d0029b64aaab779b19b5402a1a5f0b699deb9d294fa46b9d->enter($__internal_248358f7f0940fa7d0029b64aaab779b19b5402a1a5f0b699deb9d294fa46b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_86c636ae857dbc6533f8dcc12bc8a8dcf3957b76e724c160aadfd5152c91ea9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c636ae857dbc6533f8dcc12bc8a8dcf3957b76e724c160aadfd5152c91ea9f->enter($__internal_86c636ae857dbc6533f8dcc12bc8a8dcf3957b76e724c160aadfd5152c91ea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_248358f7f0940fa7d0029b64aaab779b19b5402a1a5f0b699deb9d294fa46b9d->leave($__internal_248358f7f0940fa7d0029b64aaab779b19b5402a1a5f0b699deb9d294fa46b9d_prof);

        
        $__internal_86c636ae857dbc6533f8dcc12bc8a8dcf3957b76e724c160aadfd5152c91ea9f->leave($__internal_86c636ae857dbc6533f8dcc12bc8a8dcf3957b76e724c160aadfd5152c91ea9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
