<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6498855f7f85f37fe5862060924b8a692db7a51ac896e9f32e65135cfe9db272 extends Twig_Template
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
        $__internal_a799414eda4811b8ece8fcf3ec0a1c9c18b02cf384984e9117042877cea88ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a799414eda4811b8ece8fcf3ec0a1c9c18b02cf384984e9117042877cea88ac0->enter($__internal_a799414eda4811b8ece8fcf3ec0a1c9c18b02cf384984e9117042877cea88ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_934cc421ee27ae28c62a92e3e62d9b28fe5c3490e9e7204da43bf2184a14ba74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934cc421ee27ae28c62a92e3e62d9b28fe5c3490e9e7204da43bf2184a14ba74->enter($__internal_934cc421ee27ae28c62a92e3e62d9b28fe5c3490e9e7204da43bf2184a14ba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a799414eda4811b8ece8fcf3ec0a1c9c18b02cf384984e9117042877cea88ac0->leave($__internal_a799414eda4811b8ece8fcf3ec0a1c9c18b02cf384984e9117042877cea88ac0_prof);

        
        $__internal_934cc421ee27ae28c62a92e3e62d9b28fe5c3490e9e7204da43bf2184a14ba74->leave($__internal_934cc421ee27ae28c62a92e3e62d9b28fe5c3490e9e7204da43bf2184a14ba74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
