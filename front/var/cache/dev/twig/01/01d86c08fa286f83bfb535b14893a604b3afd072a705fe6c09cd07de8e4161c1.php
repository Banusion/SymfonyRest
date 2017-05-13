<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_83d168a98782472b580bd6adf14d0b5d76e2941515dc23e25239b8153f36a0ca extends Twig_Template
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
        $__internal_f3e036c542f92c88b029498496214e6f369a9c30d8b894c3d503c008ad26e034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e036c542f92c88b029498496214e6f369a9c30d8b894c3d503c008ad26e034->enter($__internal_f3e036c542f92c88b029498496214e6f369a9c30d8b894c3d503c008ad26e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_70c9de57c1cf619955c613d5ce359e4a5070a554a0f590976589aaae6a98da1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c9de57c1cf619955c613d5ce359e4a5070a554a0f590976589aaae6a98da1e->enter($__internal_70c9de57c1cf619955c613d5ce359e4a5070a554a0f590976589aaae6a98da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_f3e036c542f92c88b029498496214e6f369a9c30d8b894c3d503c008ad26e034->leave($__internal_f3e036c542f92c88b029498496214e6f369a9c30d8b894c3d503c008ad26e034_prof);

        
        $__internal_70c9de57c1cf619955c613d5ce359e4a5070a554a0f590976589aaae6a98da1e->leave($__internal_70c9de57c1cf619955c613d5ce359e4a5070a554a0f590976589aaae6a98da1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
