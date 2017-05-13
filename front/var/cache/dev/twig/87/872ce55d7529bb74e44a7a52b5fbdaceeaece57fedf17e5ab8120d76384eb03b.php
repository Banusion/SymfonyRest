<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9ce138b6516d21095f29bf9b0c37181303f9590c078bafd37856c9cbf162b031 extends Twig_Template
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
        $__internal_46a9f285eb31b2d51f41a49a5fe86fcebb593cebb2796a2eaf05d13e270e2756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a9f285eb31b2d51f41a49a5fe86fcebb593cebb2796a2eaf05d13e270e2756->enter($__internal_46a9f285eb31b2d51f41a49a5fe86fcebb593cebb2796a2eaf05d13e270e2756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b88cfe777180f5bfa3719625ce45b2a1b36fabeee683c3a3b47d3921071c9eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88cfe777180f5bfa3719625ce45b2a1b36fabeee683c3a3b47d3921071c9eee->enter($__internal_b88cfe777180f5bfa3719625ce45b2a1b36fabeee683c3a3b47d3921071c9eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_46a9f285eb31b2d51f41a49a5fe86fcebb593cebb2796a2eaf05d13e270e2756->leave($__internal_46a9f285eb31b2d51f41a49a5fe86fcebb593cebb2796a2eaf05d13e270e2756_prof);

        
        $__internal_b88cfe777180f5bfa3719625ce45b2a1b36fabeee683c3a3b47d3921071c9eee->leave($__internal_b88cfe777180f5bfa3719625ce45b2a1b36fabeee683c3a3b47d3921071c9eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
