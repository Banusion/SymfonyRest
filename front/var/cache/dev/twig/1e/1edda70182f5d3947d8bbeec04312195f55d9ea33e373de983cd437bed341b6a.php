<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5aa5895f720b0b9ef47a22bfa65524d384019d0f1bba1fd61456d221b57241a9 extends Twig_Template
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
        $__internal_f0a9ec617c90b4ba72115277c4999db6aeb79b84a06396cb52be28c142ff91d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a9ec617c90b4ba72115277c4999db6aeb79b84a06396cb52be28c142ff91d0->enter($__internal_f0a9ec617c90b4ba72115277c4999db6aeb79b84a06396cb52be28c142ff91d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c93f29db14e3b82409c8922aaef41e5daaf69a1930a55066d12936d774f9a80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93f29db14e3b82409c8922aaef41e5daaf69a1930a55066d12936d774f9a80d->enter($__internal_c93f29db14e3b82409c8922aaef41e5daaf69a1930a55066d12936d774f9a80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f0a9ec617c90b4ba72115277c4999db6aeb79b84a06396cb52be28c142ff91d0->leave($__internal_f0a9ec617c90b4ba72115277c4999db6aeb79b84a06396cb52be28c142ff91d0_prof);

        
        $__internal_c93f29db14e3b82409c8922aaef41e5daaf69a1930a55066d12936d774f9a80d->leave($__internal_c93f29db14e3b82409c8922aaef41e5daaf69a1930a55066d12936d774f9a80d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
