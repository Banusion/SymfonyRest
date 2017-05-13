<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7dafb3d88ff3992ad07cb61c06f32ebc4fc5e55b03fe71ec95c4c0ff0baab627 extends Twig_Template
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
        $__internal_95f7badca4ccd1a7255ba4f7c53abdb57aebda8003e4e192dc957a1e40054dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f7badca4ccd1a7255ba4f7c53abdb57aebda8003e4e192dc957a1e40054dca->enter($__internal_95f7badca4ccd1a7255ba4f7c53abdb57aebda8003e4e192dc957a1e40054dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c3f7373de1c1e40a4cd6458322831b8b07a18eaf34206a930c3ab22f6b5b097c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f7373de1c1e40a4cd6458322831b8b07a18eaf34206a930c3ab22f6b5b097c->enter($__internal_c3f7373de1c1e40a4cd6458322831b8b07a18eaf34206a930c3ab22f6b5b097c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95f7badca4ccd1a7255ba4f7c53abdb57aebda8003e4e192dc957a1e40054dca->leave($__internal_95f7badca4ccd1a7255ba4f7c53abdb57aebda8003e4e192dc957a1e40054dca_prof);

        
        $__internal_c3f7373de1c1e40a4cd6458322831b8b07a18eaf34206a930c3ab22f6b5b097c->leave($__internal_c3f7373de1c1e40a4cd6458322831b8b07a18eaf34206a930c3ab22f6b5b097c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
