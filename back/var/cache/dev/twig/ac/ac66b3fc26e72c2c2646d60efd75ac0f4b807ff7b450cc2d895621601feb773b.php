<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0d54b6747a0106426afd4073f716d20b4feb370fc56c4f3671e82de7175a028c extends Twig_Template
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
        $__internal_359037e5c4e9b5e0f57dc59250c86664cd30402aa728ba6f54cdd3be94fd6cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359037e5c4e9b5e0f57dc59250c86664cd30402aa728ba6f54cdd3be94fd6cbc->enter($__internal_359037e5c4e9b5e0f57dc59250c86664cd30402aa728ba6f54cdd3be94fd6cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f547902d81f45962d485db093bc232ff54946ba4bfb750cb474039a467b1e83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f547902d81f45962d485db093bc232ff54946ba4bfb750cb474039a467b1e83a->enter($__internal_f547902d81f45962d485db093bc232ff54946ba4bfb750cb474039a467b1e83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_359037e5c4e9b5e0f57dc59250c86664cd30402aa728ba6f54cdd3be94fd6cbc->leave($__internal_359037e5c4e9b5e0f57dc59250c86664cd30402aa728ba6f54cdd3be94fd6cbc_prof);

        
        $__internal_f547902d81f45962d485db093bc232ff54946ba4bfb750cb474039a467b1e83a->leave($__internal_f547902d81f45962d485db093bc232ff54946ba4bfb750cb474039a467b1e83a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
