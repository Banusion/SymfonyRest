<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_56dfc931fdc8ca5cdaef8c77ff13e2cd610f4eeca33bfd69d1268604f954c1e4 extends Twig_Template
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
        $__internal_b672e75bca178b14926fc35b7ff7e6c7b5337392f6162f801050d9c8b86bbcbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b672e75bca178b14926fc35b7ff7e6c7b5337392f6162f801050d9c8b86bbcbb->enter($__internal_b672e75bca178b14926fc35b7ff7e6c7b5337392f6162f801050d9c8b86bbcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1811816737d002767536ec7bcd29359ffc19f8ca5e329dd2bb8e5e08b9545eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1811816737d002767536ec7bcd29359ffc19f8ca5e329dd2bb8e5e08b9545eb3->enter($__internal_1811816737d002767536ec7bcd29359ffc19f8ca5e329dd2bb8e5e08b9545eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b672e75bca178b14926fc35b7ff7e6c7b5337392f6162f801050d9c8b86bbcbb->leave($__internal_b672e75bca178b14926fc35b7ff7e6c7b5337392f6162f801050d9c8b86bbcbb_prof);

        
        $__internal_1811816737d002767536ec7bcd29359ffc19f8ca5e329dd2bb8e5e08b9545eb3->leave($__internal_1811816737d002767536ec7bcd29359ffc19f8ca5e329dd2bb8e5e08b9545eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
