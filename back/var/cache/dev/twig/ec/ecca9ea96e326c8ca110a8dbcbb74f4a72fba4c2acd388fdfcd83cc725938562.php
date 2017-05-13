<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_12bdaf6aa50b04c40c61688a120aa5901b4fb758d97a94b536a6d0fb5ff82d34 extends Twig_Template
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
        $__internal_2986d9a0b37486308ce2c902056a922c3d267ebffcce8bd941524b2b01e12416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2986d9a0b37486308ce2c902056a922c3d267ebffcce8bd941524b2b01e12416->enter($__internal_2986d9a0b37486308ce2c902056a922c3d267ebffcce8bd941524b2b01e12416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_54a116a7de9bc8c5a6b9665d7fbabc336e2447c714a6080e012a5bde1898770b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a116a7de9bc8c5a6b9665d7fbabc336e2447c714a6080e012a5bde1898770b->enter($__internal_54a116a7de9bc8c5a6b9665d7fbabc336e2447c714a6080e012a5bde1898770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2986d9a0b37486308ce2c902056a922c3d267ebffcce8bd941524b2b01e12416->leave($__internal_2986d9a0b37486308ce2c902056a922c3d267ebffcce8bd941524b2b01e12416_prof);

        
        $__internal_54a116a7de9bc8c5a6b9665d7fbabc336e2447c714a6080e012a5bde1898770b->leave($__internal_54a116a7de9bc8c5a6b9665d7fbabc336e2447c714a6080e012a5bde1898770b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
