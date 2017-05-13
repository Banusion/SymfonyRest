<?php

/* CsaGuzzleBundle:Calls:list.html.twig */
class __TwigTemplate_34c293d4851b4ebac35befe7e8aeaa34cf7b56ccc9ef6e38a1be706507377c85 extends Twig_Template
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
        $__internal_db858ef9a7cc5c45bf40cfd738457d6b6ab35e6231ad067d22e49ecd052ec9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db858ef9a7cc5c45bf40cfd738457d6b6ab35e6231ad067d22e49ecd052ec9a3->enter($__internal_db858ef9a7cc5c45bf40cfd738457d6b6ab35e6231ad067d22e49ecd052ec9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Calls:list.html.twig"));

        $__internal_49bb6d2bc0d0c531b75fce452c7388dbe4a1a303ed7257a6c822018deab6d871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bb6d2bc0d0c531b75fce452c7388dbe4a1a303ed7257a6c822018deab6d871->enter($__internal_49bb6d2bc0d0c531b75fce452c7388dbe4a1a303ed7257a6c822018deab6d871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Calls:list.html.twig"));

        // line 1
        $context["macros"] = $this->loadTemplate("@CsaGuzzle/Calls/macros.html.twig", "CsaGuzzleBundle:Calls:list.html.twig", 1);
        // line 2
        echo "
<div class=\"accordion\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) || array_key_exists("calls", $context) ? $context["calls"] : (function () { throw new Twig_Error_Runtime('Variable "calls" does not exist.', 4, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 5
            echo "        <section class=\"call\">
            <header class=\"accordion-header ";
            // line 6
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "request", array()), "method", array())), "html", null, true);
            echo "\">
                <span class=\"method-name\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "request", array()), "method", array()), "html", null, true);
            echo "</span>
                ";
            // line 8
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "request", array()), "method", array()) == "GET")) {
                // line 9
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "uri", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"path\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "uri", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 11
                echo "                    <span class=\"path\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "uri", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 13
            echo "                ";
            $context["statusCode"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "httpCode", array());
            // line 14
            echo "                <span class=\"badge status-code ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->statusCodeClass((isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new Twig_Error_Runtime('Variable "statusCode" does not exist.', 14, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new Twig_Error_Runtime('Variable "statusCode" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "response", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "response", array()), "reasonPhrase", array())) : ("Unknown error")), "html", null, true);
            echo "
                </span>
                ";
            // line 17
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "cache", array(), "any", true, true)) {
                echo "<span class=\"badge cache ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "cache", array())), "html", null, true);
                echo "\">Cache ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "cache", array()), "html", null, true);
                echo "</span>";
            }
            // line 18
            echo "                ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "mock", array(), "any", true, true)) {
                echo "<span class=\"badge mock ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "mock", array())), "html", null, true);
                echo "\">Mock ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "mock", array()), "html", null, true);
                echo "</span>";
            }
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "info", array())) {
                // line 20
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "info", array()), "total_time", array()) > 1)) {
                    // line 21
                    echo "                        ";
                    $context["duration_color"] = "error";
                    // line 22
                    echo "                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "info", array()), "total_time", array()) < 0.2)) {
                    // line 23
                    echo "                        ";
                    $context["duration_color"] = "success";
                    // line 24
                    echo "                    ";
                } else {
                    // line 25
                    echo "                        ";
                    $context["duration_color"] = "warning";
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                    <span class=\"badge duration ";
                echo twig_escape_filter($this->env, (isset($context["duration_color"]) || array_key_exists("duration_color", $context) ? $context["duration_color"] : (function () { throw new Twig_Error_Runtime('Variable "duration_color" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "info", array()), "total_time", array())), "html", null, true);
                echo "</span>
                ";
            }
            // line 29
            echo "            </header>

            <div class=\"accordion-content";
            // line 31
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) ? (" expanded") : (""));
            echo "\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            ";
            // line 36
            echo $context["macros"]->macro_render_infos(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "info", array()));
            echo "
                            ";
            // line 37
            echo $context["macros"]->macro_render_headers(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "request", array()), "headers", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "uri", array()));
            echo "
                            ";
            // line 38
            echo $context["macros"]->macro_render_body(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "request", array()), "body", array()));
            echo "
                            ";
            // line 39
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "curl", array(), "any", true, true)) {
                // line 40
                echo "                                ";
                echo $context["macros"]->macro_render_curl(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "curl", array()));
                echo "
                            ";
            }
            // line 42
            echo "                        </div>
                    </div>
                    ";
            // line 44
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "response", array(), "any", true, true)) {
                // line 45
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                ";
                // line 48
                echo $context["macros"]->macro_render_headers(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "response", array()), "headers", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "uri", array()));
                echo "
                                ";
                // line 49
                echo $context["macros"]->macro_render_body(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "response", array()), "body", array()));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 53
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "error", array()))) {
                // line 54
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Error</h3>
                            <div class=\"tab-content\">
                                ";
                // line 57
                echo $context["macros"]->macro_render_error(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "error", array()));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 61
            echo "                </div>
            </div>
        </section>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>
";
        
        $__internal_db858ef9a7cc5c45bf40cfd738457d6b6ab35e6231ad067d22e49ecd052ec9a3->leave($__internal_db858ef9a7cc5c45bf40cfd738457d6b6ab35e6231ad067d22e49ecd052ec9a3_prof);

        
        $__internal_49bb6d2bc0d0c531b75fce452c7388dbe4a1a303ed7257a6c822018deab6d871->leave($__internal_49bb6d2bc0d0c531b75fce452c7388dbe4a1a303ed7257a6c822018deab6d871_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Calls:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 65,  208 => 61,  201 => 57,  196 => 54,  193 => 53,  186 => 49,  182 => 48,  177 => 45,  175 => 44,  171 => 42,  165 => 40,  163 => 39,  159 => 38,  155 => 37,  151 => 36,  143 => 31,  139 => 29,  131 => 27,  128 => 26,  125 => 25,  122 => 24,  119 => 23,  116 => 22,  113 => 21,  110 => 20,  107 => 19,  98 => 18,  90 => 17,  83 => 15,  78 => 14,  75 => 13,  69 => 11,  61 => 9,  59 => 8,  55 => 7,  51 => 6,  48 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@CsaGuzzle/Calls/macros.html.twig' as macros %}

<div class=\"accordion\">
    {% for call in calls %}
        <section class=\"call\">
            <header class=\"accordion-header {{ call.request.method|lower }}\">
                <span class=\"method-name\">{{ call.request.method }}</span>
                {% if call.request.method == 'GET' %}
                    <a href=\"{{ call.uri }}\" target=\"_blank\" class=\"path\">{{ call.uri }}</a>
                {% else %}
                    <span class=\"path\">{{ call.uri }}</span>
                {% endif %}
                {% set statusCode = call.httpCode %}
                <span class=\"badge status-code {{ statusCode|csa_guzzle_status_code_class }}\">
                    {{ statusCode }} - {{ call.response is defined ? call.response.reasonPhrase : 'Unknown error' }}
                </span>
                {% if call.cache is defined %}<span class=\"badge cache {{ call.cache|lower }}\">Cache {{ call.cache }}</span>{% endif %}
                {% if call.mock is defined %}<span class=\"badge mock {{ call.mock|lower }}\">Mock {{ call.mock }}</span>{% endif %}
                {% if call.info %}
                    {% if call.info.total_time > 1 %}
                        {% set duration_color = 'error' %}
                    {% elseif call.info.total_time < 0.2 %}
                        {% set duration_color = 'success' %}
                    {% else %}
                        {% set duration_color = 'warning' %}
                    {% endif %}
                    <span class=\"badge duration {{ duration_color }}\">{{ call.info.total_time|csa_guzzle_format_duration }}</span>
                {% endif %}
            </header>

            <div class=\"accordion-content{{ loop.first ? ' expanded': '' }}\">
                <div class=\"sf-tabs\">
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Request</h3>
                        <div class=\"tab-content\">
                            {{ macros.render_infos(call.info) }}
                            {{ macros.render_headers(call.request.headers, call.uri) }}
                            {{ macros.render_body(call.request.body) }}
                            {% if call.curl is defined %}
                                {{ macros.render_curl(call.curl) }}
                            {% endif %}
                        </div>
                    </div>
                    {% if call.response is defined %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Response</h3>
                            <div class=\"tab-content\">
                                {{ macros.render_headers(call.response.headers, call.uri) }}
                                {{ macros.render_body(call.response.body) }}
                            </div>
                        </div>
                    {% endif %}
                    {% if call.error is not null %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Error</h3>
                            <div class=\"tab-content\">
                                {{ macros.render_error(call.error) }}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </section>
    {% endfor %}
</div>
", "CsaGuzzleBundle:Calls:list.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/csa/guzzle-bundle/src/Resources/views/Calls/list.html.twig");
    }
}
