<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_98e17614ea6b2939181bd261c70e7765548dc46268f6f9a569172c800522031f extends Twig_Template
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
        $__internal_daa047dc4bc8286637002d672edaad264769c033e638aa98302316f326dadca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa047dc4bc8286637002d672edaad264769c033e638aa98302316f326dadca2->enter($__internal_daa047dc4bc8286637002d672edaad264769c033e638aa98302316f326dadca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_041d1b95a240b2efb1e52ab6106dd69c580107f201c50abd831dbf3acd3ade0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041d1b95a240b2efb1e52ab6106dd69c580107f201c50abd831dbf3acd3ade0b->enter($__internal_041d1b95a240b2efb1e52ab6106dd69c580107f201c50abd831dbf3acd3ade0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_daa047dc4bc8286637002d672edaad264769c033e638aa98302316f326dadca2->leave($__internal_daa047dc4bc8286637002d672edaad264769c033e638aa98302316f326dadca2_prof);

        
        $__internal_041d1b95a240b2efb1e52ab6106dd69c580107f201c50abd831dbf3acd3ade0b->leave($__internal_041d1b95a240b2efb1e52ab6106dd69c580107f201c50abd831dbf3acd3ade0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
