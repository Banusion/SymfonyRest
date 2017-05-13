<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a52a6e70538e1ebe71bdca2cd244deaeb2d514bd828afccb12e078c96af9c3ed extends Twig_Template
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
        $__internal_5af4f7a4e5f8782b1ac6fe70e8967af1c2cb1dde756552cb1898d06bc28f21d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af4f7a4e5f8782b1ac6fe70e8967af1c2cb1dde756552cb1898d06bc28f21d9->enter($__internal_5af4f7a4e5f8782b1ac6fe70e8967af1c2cb1dde756552cb1898d06bc28f21d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_faeebe8fb5dbff7ba0db0e647425f620d7b9bdd378afccfc1d01e3695444f457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faeebe8fb5dbff7ba0db0e647425f620d7b9bdd378afccfc1d01e3695444f457->enter($__internal_faeebe8fb5dbff7ba0db0e647425f620d7b9bdd378afccfc1d01e3695444f457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5af4f7a4e5f8782b1ac6fe70e8967af1c2cb1dde756552cb1898d06bc28f21d9->leave($__internal_5af4f7a4e5f8782b1ac6fe70e8967af1c2cb1dde756552cb1898d06bc28f21d9_prof);

        
        $__internal_faeebe8fb5dbff7ba0db0e647425f620d7b9bdd378afccfc1d01e3695444f457->leave($__internal_faeebe8fb5dbff7ba0db0e647425f620d7b9bdd378afccfc1d01e3695444f457_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
