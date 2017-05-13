<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_192ce787dedd99c829ebb39354985a981dfdfc23587d8f438fb5607a825a2d0c extends Twig_Template
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
        $__internal_f76ac82938ec2264aca70716998cb9bd14da4e3c85463a98e49499fd86209ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76ac82938ec2264aca70716998cb9bd14da4e3c85463a98e49499fd86209ce1->enter($__internal_f76ac82938ec2264aca70716998cb9bd14da4e3c85463a98e49499fd86209ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_be1e568d33aeb44fd029bad304b669b01f481d3a718babf17b8ddc27e10da28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1e568d33aeb44fd029bad304b669b01f481d3a718babf17b8ddc27e10da28e->enter($__internal_be1e568d33aeb44fd029bad304b669b01f481d3a718babf17b8ddc27e10da28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f76ac82938ec2264aca70716998cb9bd14da4e3c85463a98e49499fd86209ce1->leave($__internal_f76ac82938ec2264aca70716998cb9bd14da4e3c85463a98e49499fd86209ce1_prof);

        
        $__internal_be1e568d33aeb44fd029bad304b669b01f481d3a718babf17b8ddc27e10da28e->leave($__internal_be1e568d33aeb44fd029bad304b669b01f481d3a718babf17b8ddc27e10da28e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
