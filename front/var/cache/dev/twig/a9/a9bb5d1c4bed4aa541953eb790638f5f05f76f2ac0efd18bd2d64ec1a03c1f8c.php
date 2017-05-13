<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c12065d1dfbfc7d630c905fc7831fc1c783260a14328639a362b6e8e6cc5b24d extends Twig_Template
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
        $__internal_f6d9070b4d2eae5abd0aa33fbfae276c1c6b23c9a0df39b85ea15dab0e791a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d9070b4d2eae5abd0aa33fbfae276c1c6b23c9a0df39b85ea15dab0e791a57->enter($__internal_f6d9070b4d2eae5abd0aa33fbfae276c1c6b23c9a0df39b85ea15dab0e791a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c50ce61a3af7629a929de747fb29e29be5eef1da5b877091529bc40e0a977dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50ce61a3af7629a929de747fb29e29be5eef1da5b877091529bc40e0a977dde->enter($__internal_c50ce61a3af7629a929de747fb29e29be5eef1da5b877091529bc40e0a977dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f6d9070b4d2eae5abd0aa33fbfae276c1c6b23c9a0df39b85ea15dab0e791a57->leave($__internal_f6d9070b4d2eae5abd0aa33fbfae276c1c6b23c9a0df39b85ea15dab0e791a57_prof);

        
        $__internal_c50ce61a3af7629a929de747fb29e29be5eef1da5b877091529bc40e0a977dde->leave($__internal_c50ce61a3af7629a929de747fb29e29be5eef1da5b877091529bc40e0a977dde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
