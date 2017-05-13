<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_61c48963ce7627132f86db069b1ed21a90e119a5bee7219fde73e025078ee293 extends Twig_Template
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
        $__internal_2d4d43d3040e14fd279bf9181bb141d5bd7b9d4fe03b2ad30e2e93ec39cae85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4d43d3040e14fd279bf9181bb141d5bd7b9d4fe03b2ad30e2e93ec39cae85c->enter($__internal_2d4d43d3040e14fd279bf9181bb141d5bd7b9d4fe03b2ad30e2e93ec39cae85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7b8c5e16cfd2b44075387351d1b3e3314c93317033925f69157513f5b36d0065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8c5e16cfd2b44075387351d1b3e3314c93317033925f69157513f5b36d0065->enter($__internal_7b8c5e16cfd2b44075387351d1b3e3314c93317033925f69157513f5b36d0065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2d4d43d3040e14fd279bf9181bb141d5bd7b9d4fe03b2ad30e2e93ec39cae85c->leave($__internal_2d4d43d3040e14fd279bf9181bb141d5bd7b9d4fe03b2ad30e2e93ec39cae85c_prof);

        
        $__internal_7b8c5e16cfd2b44075387351d1b3e3314c93317033925f69157513f5b36d0065->leave($__internal_7b8c5e16cfd2b44075387351d1b3e3314c93317033925f69157513f5b36d0065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
