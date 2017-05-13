<?php

/* CsaGuzzleBundle:Calls:macros.html.twig */
class __TwigTemplate_00ff3e5f3fda33c03d2971a5cd2e83ea2519fc1b3b1c7e72148f71abcb3ceede extends Twig_Template
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
        $__internal_298f191df7f19e810434f53ccc465a0af60332154d48e3e394c0f1d738be27f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298f191df7f19e810434f53ccc465a0af60332154d48e3e394c0f1d738be27f9->enter($__internal_298f191df7f19e810434f53ccc465a0af60332154d48e3e394c0f1d738be27f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Calls:macros.html.twig"));

        $__internal_234aa1fdcec07154b799607718284f56621b79dc94ede4fb8742c8f10b9d38bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234aa1fdcec07154b799607718284f56621b79dc94ede4fb8742c8f10b9d38bf->enter($__internal_234aa1fdcec07154b799607718284f56621b79dc94ede4fb8742c8f10b9d38bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Calls:macros.html.twig"));

        // line 32
        echo "
";
        // line 42
        echo "
";
        // line 91
        echo "
";
        // line 102
        echo "
";
        
        $__internal_298f191df7f19e810434f53ccc465a0af60332154d48e3e394c0f1d738be27f9->leave($__internal_298f191df7f19e810434f53ccc465a0af60332154d48e3e394c0f1d738be27f9_prof);

        
        $__internal_234aa1fdcec07154b799607718284f56621b79dc94ede4fb8742c8f10b9d38bf->leave($__internal_234aa1fdcec07154b799607718284f56621b79dc94ede4fb8742c8f10b9d38bf_prof);

    }

    // line 1
    public function macro_render_headers($__headers__ = null, $__uri__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "headers" => $__headers__,
            "uri" => $__uri__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3f0b8490350907bb756d5c914e80bc685b76c88e16cd3730ce7c9febfb740325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3f0b8490350907bb756d5c914e80bc685b76c88e16cd3730ce7c9febfb740325->enter($__internal_3f0b8490350907bb756d5c914e80bc685b76c88e16cd3730ce7c9febfb740325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_headers"));

            $__internal_b54fa0dc695c14eef128489ccd93f6dbcec670dfb10a57fabf249d9743ae2e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b54fa0dc695c14eef128489ccd93f6dbcec670dfb10a57fabf249d9743ae2e1f->enter($__internal_b54fa0dc695c14eef128489ccd93f6dbcec670dfb10a57fabf249d9743ae2e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_headers"));

            // line 2
            echo "    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new Twig_Error_Runtime('Variable "headers" does not exist.', 10, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["header"] => $context["values"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 14
                if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                    // line 15
                    echo "                    <ul>
                        ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["values"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 17
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                    </ul>
                    ";
                } else {
                    // line 21
                    echo "                        ";
                    if (($context["header"] == "X-Debug-Token-Link")) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["values"], 0, array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["values"], 0, array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["values"], 0, array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['header'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </table>
";
            
            $__internal_b54fa0dc695c14eef128489ccd93f6dbcec670dfb10a57fabf249d9743ae2e1f->leave($__internal_b54fa0dc695c14eef128489ccd93f6dbcec670dfb10a57fabf249d9743ae2e1f_prof);

            
            $__internal_3f0b8490350907bb756d5c914e80bc685b76c88e16cd3730ce7c9febfb740325->leave($__internal_3f0b8490350907bb756d5c914e80bc685b76c88e16cd3730ce7c9febfb740325_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_render_body($__body__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "body" => $__body__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a330e0f4e9f24adffe5fb76e408821ecc33813fbc43b4140d6701dc9d1ca3f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a330e0f4e9f24adffe5fb76e408821ecc33813fbc43b4140d6701dc9d1ca3f0e->enter($__internal_a330e0f4e9f24adffe5fb76e408821ecc33813fbc43b4140d6701dc9d1ca3f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_body"));

            $__internal_827bbe88a3b4fa64545d1fcd20093f56013c7283eb8a99775dd1cdf5e3c31b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_827bbe88a3b4fa64545d1fcd20093f56013c7283eb8a99775dd1cdf5e3c31b6a->enter($__internal_827bbe88a3b4fa64545d1fcd20093f56013c7283eb8a99775dd1cdf5e3c31b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_body"));

            // line 34
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new Twig_Error_Runtime('Variable "body" does not exist.', 34, $this->getSourceContext()); })()))) {
                // line 35
                echo "        <h4>Content</h4>

        ";
                // line 37
                $context["lang"] = $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->detectLang((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new Twig_Error_Runtime('Variable "body" does not exist.', 37, $this->getSourceContext()); })()));
                // line 38
                echo "
        <pre><code class=\"language-";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->prettyPrint((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new Twig_Error_Runtime('Variable "body" does not exist.', 39, $this->getSourceContext()); })()), (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 39, $this->getSourceContext()); })())), "html", null, true);
                echo "</code></pre>
    ";
            }
            
            $__internal_827bbe88a3b4fa64545d1fcd20093f56013c7283eb8a99775dd1cdf5e3c31b6a->leave($__internal_827bbe88a3b4fa64545d1fcd20093f56013c7283eb8a99775dd1cdf5e3c31b6a_prof);

            
            $__internal_a330e0f4e9f24adffe5fb76e408821ecc33813fbc43b4140d6701dc9d1ca3f0e->leave($__internal_a330e0f4e9f24adffe5fb76e408821ecc33813fbc43b4140d6701dc9d1ca3f0e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 43
    public function macro_render_infos($__info__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "info" => $__info__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_be5c33baf0eb73b374593d34cbdf5e21cce32831428f2bb3d0790952a1e67ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_be5c33baf0eb73b374593d34cbdf5e21cce32831428f2bb3d0790952a1e67ed1->enter($__internal_be5c33baf0eb73b374593d34cbdf5e21cce32831428f2bb3d0790952a1e67ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_infos"));

            $__internal_2ac581182d3f9b36d924b40ecf835574d9e8d59cb4c867977fd2be5d9390731b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2ac581182d3f9b36d924b40ecf835574d9e8d59cb4c867977fd2be5d9390731b->enter($__internal_2ac581182d3f9b36d924b40ecf835574d9e8d59cb4c867977fd2be5d9390731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_infos"));

            // line 44
            echo "    ";
            if (((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 44, $this->getSourceContext()); })()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 44, $this->getSourceContext()); })()), "total_time", array()))) {
                // line 45
                echo "        <h4>Time</h4>

        ";
                // line 47
                $context["wait_time"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 47, $this->getSourceContext()); })()), "namelookup_time", array()) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 47, $this->getSourceContext()); })()), "connect_time", array())) + twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 47, $this->getSourceContext()); })()), "redirect_time", array()));
                // line 48
                echo "        ";
                $context["process_time"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 48, $this->getSourceContext()); })()), "total_time", array()) - (isset($context["wait_time"]) || array_key_exists("wait_time", $context) ? $context["wait_time"] : (function () { throw new Twig_Error_Runtime('Variable "wait_time" does not exist.', 48, $this->getSourceContext()); })()));
                // line 49
                echo "
        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 59, $this->getSourceContext()); })()), "total_time", array())), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 63, $this->getSourceContext()); })()), "namelookup_time", array())), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 67, $this->getSourceContext()); })()), "connect_time", array())), "html", null, true);
                echo "</td>
            </tr>
            ";
                // line 69
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 69, $this->getSourceContext()); })()), "redirect_time", array())) {
                    // line 70
                    echo "                <tr>
                    <td>Redirect</td>
                    <td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 72, $this->getSourceContext()); })()), "redirect_time", array())), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 75
                echo "            <tr>
                <td>Process</td>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration((isset($context["process_time"]) || array_key_exists("process_time", $context) ? $context["process_time"] : (function () { throw new Twig_Error_Runtime('Variable "process_time" does not exist.', 77, $this->getSourceContext()); })())), "html", null, true);
                echo "</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: ";
                // line 82
                echo twig_escape_filter($this->env, (((isset($context["wait_time"]) || array_key_exists("wait_time", $context) ? $context["wait_time"] : (function () { throw new Twig_Error_Runtime('Variable "wait_time" does not exist.', 82, $this->getSourceContext()); })()) / twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 82, $this->getSourceContext()); })()), "total_time", array())) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                // line 85
                echo twig_escape_filter($this->env, (((isset($context["process_time"]) || array_key_exists("process_time", $context) ? $context["process_time"] : (function () { throw new Twig_Error_Runtime('Variable "process_time" does not exist.', 85, $this->getSourceContext()); })()) / twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new Twig_Error_Runtime('Variable "info" does not exist.', 85, $this->getSourceContext()); })()), "total_time", array())) * 100), "html", null, true);
                echo "%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    ";
            }
            
            $__internal_2ac581182d3f9b36d924b40ecf835574d9e8d59cb4c867977fd2be5d9390731b->leave($__internal_2ac581182d3f9b36d924b40ecf835574d9e8d59cb4c867977fd2be5d9390731b_prof);

            
            $__internal_be5c33baf0eb73b374593d34cbdf5e21cce32831428f2bb3d0790952a1e67ed1->leave($__internal_be5c33baf0eb73b374593d34cbdf5e21cce32831428f2bb3d0790952a1e67ed1_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 92
    public function macro_render_error($__error__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "error" => $__error__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8596c6140d012a50996b9e566e5e3b0fcc7e99ffb428e35f9709b4099239579c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8596c6140d012a50996b9e566e5e3b0fcc7e99ffb428e35f9709b4099239579c->enter($__internal_8596c6140d012a50996b9e566e5e3b0fcc7e99ffb428e35f9709b4099239579c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_error"));

            $__internal_9c46577ee098196497fb91282da7569bce3679aed092fb516b8f6e8ccdc6aa0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9c46577ee098196497fb91282da7569bce3679aed092fb516b8f6e8ccdc6aa0f->enter($__internal_9c46577ee098196497fb91282da7569bce3679aed092fb516b8f6e8ccdc6aa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_error"));

            // line 93
            echo "    <h4>Message</h4>
    <p><pre>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 94, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</pre></p>

    <h4>Origin</h4>
    <p><pre>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 97, $this->getSourceContext()); })()), "file", array()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 97, $this->getSourceContext()); })()), "line", array()), "html", null, true);
            echo ")</pre></p>

    <h4>Stack trace</h4>
    <pre><code class=\"language-text\">";
            // line 100
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 100, $this->getSourceContext()); })()), "trace", array()), "html", null, true));
            echo "</code></pre>
";
            
            $__internal_9c46577ee098196497fb91282da7569bce3679aed092fb516b8f6e8ccdc6aa0f->leave($__internal_9c46577ee098196497fb91282da7569bce3679aed092fb516b8f6e8ccdc6aa0f_prof);

            
            $__internal_8596c6140d012a50996b9e566e5e3b0fcc7e99ffb428e35f9709b4099239579c->leave($__internal_8596c6140d012a50996b9e566e5e3b0fcc7e99ffb428e35f9709b4099239579c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 103
    public function macro_render_curl($__curl__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "curl" => $__curl__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_385aaa50a0211c3e9dcd27fb7c0d4838b2cbca732c0983dee3a54c21fbb153df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_385aaa50a0211c3e9dcd27fb7c0d4838b2cbca732c0983dee3a54c21fbb153df->enter($__internal_385aaa50a0211c3e9dcd27fb7c0d4838b2cbca732c0983dee3a54c21fbb153df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_curl"));

            $__internal_4ef701d2e135defcef0e976957532953649e6b9103270840f30948bded8778a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4ef701d2e135defcef0e976957532953649e6b9103270840f30948bded8778a7->enter($__internal_4ef701d2e135defcef0e976957532953649e6b9103270840f30948bded8778a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_curl"));

            // line 104
            echo "    <h4>cURL</h4>

    <pre><code>";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["curl"]) || array_key_exists("curl", $context) ? $context["curl"] : (function () { throw new Twig_Error_Runtime('Variable "curl" does not exist.', 106, $this->getSourceContext()); })()), "html", null, true);
            echo "</code></pre>
";
            
            $__internal_4ef701d2e135defcef0e976957532953649e6b9103270840f30948bded8778a7->leave($__internal_4ef701d2e135defcef0e976957532953649e6b9103270840f30948bded8778a7_prof);

            
            $__internal_385aaa50a0211c3e9dcd27fb7c0d4838b2cbca732c0983dee3a54c21fbb153df->leave($__internal_385aaa50a0211c3e9dcd27fb7c0d4838b2cbca732c0983dee3a54c21fbb153df_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Calls:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 106,  384 => 104,  366 => 103,  349 => 100,  341 => 97,  335 => 94,  332 => 93,  314 => 92,  293 => 85,  287 => 82,  279 => 77,  275 => 75,  269 => 72,  265 => 70,  263 => 69,  258 => 67,  251 => 63,  244 => 59,  232 => 49,  229 => 48,  227 => 47,  223 => 45,  220 => 44,  202 => 43,  182 => 39,  179 => 38,  177 => 37,  173 => 35,  170 => 34,  152 => 33,  136 => 30,  128 => 27,  125 => 26,  119 => 24,  111 => 22,  108 => 21,  104 => 19,  95 => 17,  91 => 16,  88 => 15,  86 => 14,  81 => 12,  78 => 11,  74 => 10,  64 => 2,  45 => 1,  34 => 102,  31 => 91,  28 => 42,  25 => 32,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_headers(headers, uri) %}
    <h4>Headers</h4>
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">Header</th>
                <th scope=\"col\">Value</th>
            </tr>
        </thead>
        {% for header, values in headers %}
            <tr>
                <td>{{ header }}</td>
                <td>
                    {% if values|length > 1 %}
                    <ul>
                        {% for value in values %}
                            <li>{{ value }}</li>
                        {% endfor %}
                    </ul>
                    {% else %}
                        {% if header == 'X-Debug-Token-Link' %}
                            <a href=\"{{ values.0 }}\" target=\"_blank\">{{ values.0 }}</a>
                        {% else %}
                            {{ values.0 }}
                        {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro render_body(body) %}
    {% if body is not empty %}
        <h4>Content</h4>

        {% set lang = csa_guzzle_detect_lang(body) %}

        <pre><code class=\"language-{{ lang }}\">{{ body|csa_guzzle_pretty_print(lang) }}</code></pre>
    {% endif %}
{% endmacro %}

{% macro render_infos(info) %}
    {% if info and info.total_time %}
        <h4>Time</h4>

        {% set wait_time = info.namelookup_time + info.connect_time + info.redirect_time %}
        {% set process_time = info.total_time - wait_time %}

        <table>
            <thead>
                <tr>
                    <th>Measure</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tr>
                <td>Total</td>
                <td>{{ info.total_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Name lookup</td>
                <td>{{ info.namelookup_time|csa_guzzle_format_duration }}</td>
            </tr>
            <tr>
                <td>Connection</td>
                <td>{{ info.connect_time|csa_guzzle_format_duration }}</td>
            </tr>
            {% if info.redirect_time %}
                <tr>
                    <td>Redirect</td>
                    <td>{{ info.redirect_time|csa_guzzle_format_duration }}</td>
                </tr>
            {% endif %}
            <tr>
                <td>Process</td>
                <td>{{ process_time | csa_guzzle_format_duration }}</td>
            </tr>
        </table>

        <div class=\"progress\">
            <div class=\"progress-bar progress-bar-warning\" style=\"width: {{ wait_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Wait</span>
            </div>
            <div class=\"progress-bar progress-bar-success\" style=\"width: {{ process_time/info.total_time * 100 }}%\">
                <span class=\"sr-only\">Process</span>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_error(error) %}
    <h4>Message</h4>
    <p><pre>{{ error.message }}</pre></p>

    <h4>Origin</h4>
    <p><pre>{{ error.file }}({{ error.line }})</pre></p>

    <h4>Stack trace</h4>
    <pre><code class=\"language-text\">{{error.trace|nl2br}}</code></pre>
{% endmacro %}

{% macro render_curl(curl) %}
    <h4>cURL</h4>

    <pre><code>{{ curl }}</code></pre>
{% endmacro %}
", "CsaGuzzleBundle:Calls:macros.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/csa/guzzle-bundle/src/Resources/views/Calls/macros.html.twig");
    }
}
