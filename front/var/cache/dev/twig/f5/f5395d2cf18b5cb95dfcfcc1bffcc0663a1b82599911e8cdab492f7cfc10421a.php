<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8098da1337c6bb231dd37898b451ca4ab6150a124bc792897a5358dc19c45614 extends Twig_Template
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
        $__internal_244014e9e6cb6779511cc41db85b139898814e02370a0a49f4e1ceb8d2234fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244014e9e6cb6779511cc41db85b139898814e02370a0a49f4e1ceb8d2234fc9->enter($__internal_244014e9e6cb6779511cc41db85b139898814e02370a0a49f4e1ceb8d2234fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_36ae145de50496f96fb308d26df0c30ded833ce35c89892e9a264c3ac849acdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ae145de50496f96fb308d26df0c30ded833ce35c89892e9a264c3ac849acdf->enter($__internal_36ae145de50496f96fb308d26df0c30ded833ce35c89892e9a264c3ac849acdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_244014e9e6cb6779511cc41db85b139898814e02370a0a49f4e1ceb8d2234fc9->leave($__internal_244014e9e6cb6779511cc41db85b139898814e02370a0a49f4e1ceb8d2234fc9_prof);

        
        $__internal_36ae145de50496f96fb308d26df0c30ded833ce35c89892e9a264c3ac849acdf->leave($__internal_36ae145de50496f96fb308d26df0c30ded833ce35c89892e9a264c3ac849acdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
