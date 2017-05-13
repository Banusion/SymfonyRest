<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_69267a913c406a4b9eb8604a8c24dbb4da46683e794c25bd42e762a9ce9c8e96 extends Twig_Template
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
        $__internal_59b0ecc8c846cfe93fc5e76e6f55ca7c976846cf658c704affb7535196c0d3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b0ecc8c846cfe93fc5e76e6f55ca7c976846cf658c704affb7535196c0d3f7->enter($__internal_59b0ecc8c846cfe93fc5e76e6f55ca7c976846cf658c704affb7535196c0d3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_adfa6a261322679aaa6e8d204b435534edd6b499f009e78a6393f2d72ad526c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfa6a261322679aaa6e8d204b435534edd6b499f009e78a6393f2d72ad526c2->enter($__internal_adfa6a261322679aaa6e8d204b435534edd6b499f009e78a6393f2d72ad526c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_59b0ecc8c846cfe93fc5e76e6f55ca7c976846cf658c704affb7535196c0d3f7->leave($__internal_59b0ecc8c846cfe93fc5e76e6f55ca7c976846cf658c704affb7535196c0d3f7_prof);

        
        $__internal_adfa6a261322679aaa6e8d204b435534edd6b499f009e78a6393f2d72ad526c2->leave($__internal_adfa6a261322679aaa6e8d204b435534edd6b499f009e78a6393f2d72ad526c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
