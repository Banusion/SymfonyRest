<?php

/* :default:admin.html.twig */
class __TwigTemplate_d7398bdfea6ee3542ebe89c8f6ba4b08bd30366c448da43ca49c5f754ad6e663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Administration</h1>
    <p class=\"lead\">If you can access this page, it's because you are authenticated.</p>
    <p class=\"lead\">
        Actually you are!
        <br />
        We have an access token: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return ":default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:admin.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/app/Resources/views/default/admin.html.twig");
    }
}
