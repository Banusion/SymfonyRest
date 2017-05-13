<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8336f649218b2f719e74cfb384d29029c2fcacd2128e5154352293c64dea885b extends Twig_Template
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
        $__internal_b6e18b956ef911d4c1fc5fd76f5e59ce70dcfd2de47e0f82125854c5c50c8887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e18b956ef911d4c1fc5fd76f5e59ce70dcfd2de47e0f82125854c5c50c8887->enter($__internal_b6e18b956ef911d4c1fc5fd76f5e59ce70dcfd2de47e0f82125854c5c50c8887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2293cc11a71b693dc1f2a6fcc45dc1e479122e105f30701604748a822b8f05f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2293cc11a71b693dc1f2a6fcc45dc1e479122e105f30701604748a822b8f05f4->enter($__internal_2293cc11a71b693dc1f2a6fcc45dc1e479122e105f30701604748a822b8f05f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b6e18b956ef911d4c1fc5fd76f5e59ce70dcfd2de47e0f82125854c5c50c8887->leave($__internal_b6e18b956ef911d4c1fc5fd76f5e59ce70dcfd2de47e0f82125854c5c50c8887_prof);

        
        $__internal_2293cc11a71b693dc1f2a6fcc45dc1e479122e105f30701604748a822b8f05f4->leave($__internal_2293cc11a71b693dc1f2a6fcc45dc1e479122e105f30701604748a822b8f05f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
