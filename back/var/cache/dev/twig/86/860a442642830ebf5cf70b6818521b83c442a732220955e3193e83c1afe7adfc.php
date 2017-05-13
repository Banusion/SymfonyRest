<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_40d80e258b8b34b0b2ef2d8775cedadd805a1591fb2fea468446d21d275ec7fb extends Twig_Template
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
        $__internal_43a94f1174fc2cd95263e2e44a82590594ca2193cdcc149752a2707ca011ddf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a94f1174fc2cd95263e2e44a82590594ca2193cdcc149752a2707ca011ddf6->enter($__internal_43a94f1174fc2cd95263e2e44a82590594ca2193cdcc149752a2707ca011ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9968ed3d2d5b42a89321472e8d6c6954d4b7e6e04f27943483d559d1b4298e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9968ed3d2d5b42a89321472e8d6c6954d4b7e6e04f27943483d559d1b4298e64->enter($__internal_9968ed3d2d5b42a89321472e8d6c6954d4b7e6e04f27943483d559d1b4298e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_43a94f1174fc2cd95263e2e44a82590594ca2193cdcc149752a2707ca011ddf6->leave($__internal_43a94f1174fc2cd95263e2e44a82590594ca2193cdcc149752a2707ca011ddf6_prof);

        
        $__internal_9968ed3d2d5b42a89321472e8d6c6954d4b7e6e04f27943483d559d1b4298e64->leave($__internal_9968ed3d2d5b42a89321472e8d6c6954d4b7e6e04f27943483d559d1b4298e64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Volumes/DATA/Site/Symfony/blog-api/back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
