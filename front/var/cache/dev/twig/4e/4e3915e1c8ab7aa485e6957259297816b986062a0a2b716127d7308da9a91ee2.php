<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bc0f141728a93d137e4fead74f7d30686803f6b6027402a5083d7c6e4da93d16 extends Twig_Template
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
        $__internal_42aea230fe7bcec846af068187a974de38a09cfeadf9e03065bae0a3a61a5e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42aea230fe7bcec846af068187a974de38a09cfeadf9e03065bae0a3a61a5e56->enter($__internal_42aea230fe7bcec846af068187a974de38a09cfeadf9e03065bae0a3a61a5e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_97db7b68e8ca38693d206ff90ec90f3d1516b515b8f5ba6ac4fdaf64fc99138c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97db7b68e8ca38693d206ff90ec90f3d1516b515b8f5ba6ac4fdaf64fc99138c->enter($__internal_97db7b68e8ca38693d206ff90ec90f3d1516b515b8f5ba6ac4fdaf64fc99138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_42aea230fe7bcec846af068187a974de38a09cfeadf9e03065bae0a3a61a5e56->leave($__internal_42aea230fe7bcec846af068187a974de38a09cfeadf9e03065bae0a3a61a5e56_prof);

        
        $__internal_97db7b68e8ca38693d206ff90ec90f3d1516b515b8f5ba6ac4fdaf64fc99138c->leave($__internal_97db7b68e8ca38693d206ff90ec90f3d1516b515b8f5ba6ac4fdaf64fc99138c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
