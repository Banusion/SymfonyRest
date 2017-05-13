<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4b6ccc4c1545d156c5ccbf8d67095a06a97c5ae74c94c373c690d474da7db1af extends Twig_Template
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
        $__internal_a7ce7666b63b0ce0b89b53162931c2bd7b99653aa637eb6b8bda5faacacf4736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ce7666b63b0ce0b89b53162931c2bd7b99653aa637eb6b8bda5faacacf4736->enter($__internal_a7ce7666b63b0ce0b89b53162931c2bd7b99653aa637eb6b8bda5faacacf4736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7a48ea30aa56202b85ccedb89ace4cd6760b57895767050e84e47987b97d736b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a48ea30aa56202b85ccedb89ace4cd6760b57895767050e84e47987b97d736b->enter($__internal_7a48ea30aa56202b85ccedb89ace4cd6760b57895767050e84e47987b97d736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a7ce7666b63b0ce0b89b53162931c2bd7b99653aa637eb6b8bda5faacacf4736->leave($__internal_a7ce7666b63b0ce0b89b53162931c2bd7b99653aa637eb6b8bda5faacacf4736_prof);

        
        $__internal_7a48ea30aa56202b85ccedb89ace4cd6760b57895767050e84e47987b97d736b->leave($__internal_7a48ea30aa56202b85ccedb89ace4cd6760b57895767050e84e47987b97d736b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "@Framework/Form/form_errors.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
