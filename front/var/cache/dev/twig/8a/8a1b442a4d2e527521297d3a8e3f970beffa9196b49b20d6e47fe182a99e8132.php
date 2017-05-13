<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4cccd1731c68df331e68122770b4ba254935a4c6ae947af38e06f2c3c7b6dc34 extends Twig_Template
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
        $__internal_73987229177af1ac0b9a7599bc3fd8edc2a4b5ece6394e5d05d9b3b1b95483e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73987229177af1ac0b9a7599bc3fd8edc2a4b5ece6394e5d05d9b3b1b95483e2->enter($__internal_73987229177af1ac0b9a7599bc3fd8edc2a4b5ece6394e5d05d9b3b1b95483e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_28765f31683788c5c2bdc14a548af68d098ca835e8a186de95f4e1f22086a770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28765f31683788c5c2bdc14a548af68d098ca835e8a186de95f4e1f22086a770->enter($__internal_28765f31683788c5c2bdc14a548af68d098ca835e8a186de95f4e1f22086a770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_73987229177af1ac0b9a7599bc3fd8edc2a4b5ece6394e5d05d9b3b1b95483e2->leave($__internal_73987229177af1ac0b9a7599bc3fd8edc2a4b5ece6394e5d05d9b3b1b95483e2_prof);

        
        $__internal_28765f31683788c5c2bdc14a548af68d098ca835e8a186de95f4e1f22086a770->leave($__internal_28765f31683788c5c2bdc14a548af68d098ca835e8a186de95f4e1f22086a770_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
