<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7b35d637e9ba3493b2021ffe26a96b96da74b1735075c14fd558f1984b48ffe1 extends Twig_Template
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
        $__internal_e875e76b365c38dcc93eb768499edc5bab9e5ce5f4ce99567655b8c7b3a0a7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e875e76b365c38dcc93eb768499edc5bab9e5ce5f4ce99567655b8c7b3a0a7f1->enter($__internal_e875e76b365c38dcc93eb768499edc5bab9e5ce5f4ce99567655b8c7b3a0a7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_03afce15c078110489044ce359e379d88f3d8b9473958ae4c25d2a72dd9312fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03afce15c078110489044ce359e379d88f3d8b9473958ae4c25d2a72dd9312fe->enter($__internal_03afce15c078110489044ce359e379d88f3d8b9473958ae4c25d2a72dd9312fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e875e76b365c38dcc93eb768499edc5bab9e5ce5f4ce99567655b8c7b3a0a7f1->leave($__internal_e875e76b365c38dcc93eb768499edc5bab9e5ce5f4ce99567655b8c7b3a0a7f1_prof);

        
        $__internal_03afce15c078110489044ce359e379d88f3d8b9473958ae4c25d2a72dd9312fe->leave($__internal_03afce15c078110489044ce359e379d88f3d8b9473958ae4c25d2a72dd9312fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
