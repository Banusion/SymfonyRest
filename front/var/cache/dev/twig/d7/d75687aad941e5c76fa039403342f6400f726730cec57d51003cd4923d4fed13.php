<?php

/* CsaGuzzleBundle:Collector:guzzle.html.twig */
class __TwigTemplate_af45f2bd9c2cdc604d808f26e1eb4491c7b1cd2d3f4fff64d72a3a554ca12df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CsaGuzzleBundle:Collector:guzzle.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e2aabafae3ada554413f743f68a568229778b3e7a898f658a480a668f55f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e2aabafae3ada554413f743f68a568229778b3e7a898f658a480a668f55f53->enter($__internal_49e2aabafae3ada554413f743f68a568229778b3e7a898f658a480a668f55f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $__internal_f71f2df3cf9e88a0b5eea64b54bbdf91c5229213b0ceaa640071565dd80f344a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71f2df3cf9e88a0b5eea64b54bbdf91c5229213b0ceaa640071565dd80f344a->enter($__internal_f71f2df3cf9e88a0b5eea64b54bbdf91c5229213b0ceaa640071565dd80f344a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CsaGuzzleBundle:Collector:guzzle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e2aabafae3ada554413f743f68a568229778b3e7a898f658a480a668f55f53->leave($__internal_49e2aabafae3ada554413f743f68a568229778b3e7a898f658a480a668f55f53_prof);

        
        $__internal_f71f2df3cf9e88a0b5eea64b54bbdf91c5229213b0ceaa640071565dd80f344a->leave($__internal_f71f2df3cf9e88a0b5eea64b54bbdf91c5229213b0ceaa640071565dd80f344a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e90bf8e9d8d8a537d726ba763d570ad8f7ef4e8faa3d9c55ad85e632f0aabad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90bf8e9d8d8a537d726ba763d570ad8f7ef4e8faa3d9c55ad85e632f0aabad2->enter($__internal_e90bf8e9d8d8a537d726ba763d570ad8f7ef4e8faa3d9c55ad85e632f0aabad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e42074c7e12963d361f9fba190693b75313b5a3c6967478068ee7c8c509375c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42074c7e12963d361f9fba190693b75313b5a3c6967478068ee7c8c509375c1->enter($__internal_e42074c7e12963d361f9fba190693b75313b5a3c6967478068ee7c8c509375c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->getSourceContext()); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        $context["callCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "calls", array()));
        // line 7
        echo "    ";
        $context["errorCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "errors", array()));
        // line 8
        echo "
    ";
        // line 9
        $context["cacheHitCount"] = 0;
        // line 10
        echo "    ";
        $context["cacheMissCount"] = 0;
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->getSourceContext()); })()), "calls", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "cache", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "cache", array()) == "HIT"))) {
                // line 13
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "cache", array()) == "HIT")) {
                    // line 14
                    echo "            ";
                    $context["cacheHitCount"] = ((isset($context["cacheHitCount"]) || array_key_exists("cacheHitCount", $context) ? $context["cacheHitCount"] : (function () { throw new Twig_Error_Runtime('Variable "cacheHitCount" does not exist.', 14, $this->getSourceContext()); })()) + 1);
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["cacheMissCount"] = ((isset($context["cacheMissCount"]) || array_key_exists("cacheMissCount", $context) ? $context["cacheMissCount"] : (function () { throw new Twig_Error_Runtime('Variable "cacheMissCount" does not exist.', 16, $this->getSourceContext()); })()) + 1);
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context["mockReplayCount"] = 0;
        // line 21
        echo "    ";
        $context["mockRecordCount"] = 0;
        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->getSourceContext()); })()), "calls", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "mock", array(), "any", true, true)) {
                // line 24
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "mock", array()) == "REPLAY")) {
                    // line 25
                    echo "            ";
                    $context["mockReplayCount"] = ((isset($context["mockReplayCount"]) || array_key_exists("mockReplayCount", $context) ? $context["mockReplayCount"] : (function () { throw new Twig_Error_Runtime('Variable "mockReplayCount" does not exist.', 25, $this->getSourceContext()); })()) + 1);
                    // line 26
                    echo "        ";
                } else {
                    // line 27
                    echo "            ";
                    $context["mockRecordCount"] = ((isset($context["mockRecordCount"]) || array_key_exists("mockRecordCount", $context) ? $context["mockRecordCount"] : (function () { throw new Twig_Error_Runtime('Variable "mockRecordCount" does not exist.', 27, $this->getSourceContext()); })()) + 1);
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        if (((isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new Twig_Error_Runtime('Variable "callCount" does not exist.', 31, $this->getSourceContext()); })()) == 0)) {
            // line 32
            echo "        ";
            $context["color_code"] = "";
            // line 33
            echo "    ";
        } elseif (((isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new Twig_Error_Runtime('Variable "errorCount" does not exist.', 33, $this->getSourceContext()); })()) > 0)) {
            // line 34
            echo "        ";
            $context["color_code"] = "red";
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        ";
            $context["color_code"] = "green";
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    ";
        // line 39
        ob_start();
        // line 40
        echo "        ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 40, $this->getSourceContext()); })()) == 1)) {
            // line 41
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 28, "color" => "#3F3F3F"));
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new Twig_Error_Runtime('Variable "color_code" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new Twig_Error_Runtime('Variable "callCount" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new Twig_Error_Runtime('Variable "callCount" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
        ";
        }
        // line 47
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 47, $this->getSourceContext()); })()), "totalTime", array()) > 0)) {
            // line 48
            echo "            <span class=\"sf-toolbar-label\">
                in <span class=\"sf-toolbar-value\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "totalTime", array())), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 52
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
    ";
        // line 54
        ob_start();
        // line 55
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 57
        echo twig_escape_filter($this->env, ((isset($context["callCount"]) || array_key_exists("callCount", $context) ? $context["callCount"] : (function () { throw new Twig_Error_Runtime('Variable "callCount" does not exist.', 57, $this->getSourceContext()); })()) - (isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new Twig_Error_Runtime('Variable "errorCount" does not exist.', 57, $this->getSourceContext()); })())), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 59
        if ((isset($context["cacheHitCount"]) || array_key_exists("cacheHitCount", $context) ? $context["cacheHitCount"] : (function () { throw new Twig_Error_Runtime('Variable "cacheHitCount" does not exist.', 59, $this->getSourceContext()); })())) {
            // line 60
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache HIT</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["cacheHitCount"]) || array_key_exists("cacheHitCount", $context) ? $context["cacheHitCount"] : (function () { throw new Twig_Error_Runtime('Variable "cacheHitCount" does not exist.', 62, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 65
        echo "        ";
        if ((isset($context["cacheMissCount"]) || array_key_exists("cacheMissCount", $context) ? $context["cacheMissCount"] : (function () { throw new Twig_Error_Runtime('Variable "cacheMissCount" does not exist.', 65, $this->getSourceContext()); })())) {
            // line 66
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache MISS</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["cacheMissCount"]) || array_key_exists("cacheMissCount", $context) ? $context["cacheMissCount"] : (function () { throw new Twig_Error_Runtime('Variable "cacheMissCount" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 71
        echo "        ";
        if ((isset($context["mockReplayCount"]) || array_key_exists("mockReplayCount", $context) ? $context["mockReplayCount"] : (function () { throw new Twig_Error_Runtime('Variable "mockReplayCount" does not exist.', 71, $this->getSourceContext()); })())) {
            // line 72
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (replayed)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["mockReplayCount"]) || array_key_exists("mockReplayCount", $context) ? $context["mockReplayCount"] : (function () { throw new Twig_Error_Runtime('Variable "mockReplayCount" does not exist.', 74, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 77
        echo "        ";
        if ((isset($context["mockRecordCount"]) || array_key_exists("mockRecordCount", $context) ? $context["mockRecordCount"] : (function () { throw new Twig_Error_Runtime('Variable "mockRecordCount" does not exist.', 77, $this->getSourceContext()); })())) {
            // line 78
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (recorded)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["mockRecordCount"]) || array_key_exists("mockRecordCount", $context) ? $context["mockRecordCount"] : (function () { throw new Twig_Error_Runtime('Variable "mockRecordCount" does not exist.', 80, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 83
        echo "        ";
        if ((isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new Twig_Error_Runtime('Variable "errorCount" does not exist.', 83, $this->getSourceContext()); })())) {
            // line 84
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["errorCount"]) || array_key_exists("errorCount", $context) ? $context["errorCount"] : (function () { throw new Twig_Error_Runtime('Variable "errorCount" does not exist.', 86, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 89
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 90
        echo "
    ";
        // line 91
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => "guzzle", "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new Twig_Error_Runtime('Variable "color_code" does not exist.', 91, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e42074c7e12963d361f9fba190693b75313b5a3c6967478068ee7c8c509375c1->leave($__internal_e42074c7e12963d361f9fba190693b75313b5a3c6967478068ee7c8c509375c1_prof);

        
        $__internal_e90bf8e9d8d8a537d726ba763d570ad8f7ef4e8faa3d9c55ad85e632f0aabad2->leave($__internal_e90bf8e9d8d8a537d726ba763d570ad8f7ef4e8faa3d9c55ad85e632f0aabad2_prof);

    }

    // line 94
    public function block_head($context, array $blocks = array())
    {
        $__internal_af5ed49f6e205546d6736bcde3710aa33ad3dfe7fbb5502b247c10410b7ac6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5ed49f6e205546d6736bcde3710aa33ad3dfe7fbb5502b247c10410b7ac6d7->enter($__internal_af5ed49f6e205546d6736bcde3710aa33ad3dfe7fbb5502b247c10410b7ac6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42513d155e48a740882ca574f00cfe39d4b71dd80a5136ad2536907aef0cc4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42513d155e48a740882ca574f00cfe39d4b71dd80a5136ad2536907aef0cc4e3->enter($__internal_42513d155e48a740882ca574f00cfe39d4b71dd80a5136ad2536907aef0cc4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 95
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/screen.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/guzzle.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 98
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 98, $this->getSourceContext()); })()), 1)) : (1));
        // line 99
        echo "    ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 99, $this->getSourceContext()); })()) == 1)) {
            // line 100
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/css/legacy.min.css"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/csaguzzle/js/legacy.min.js"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    ";
        }
        
        $__internal_42513d155e48a740882ca574f00cfe39d4b71dd80a5136ad2536907aef0cc4e3->leave($__internal_42513d155e48a740882ca574f00cfe39d4b71dd80a5136ad2536907aef0cc4e3_prof);

        
        $__internal_af5ed49f6e205546d6736bcde3710aa33ad3dfe7fbb5502b247c10410b7ac6d7->leave($__internal_af5ed49f6e205546d6736bcde3710aa33ad3dfe7fbb5502b247c10410b7ac6d7_prof);

    }

    // line 106
    public function block_menu($context, array $blocks = array())
    {
        $__internal_206bd695784515b4afe10810b34c6664c49167fa54599528cdbbbe8101fc9d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206bd695784515b4afe10810b34c6664c49167fa54599528cdbbbe8101fc9d7f->enter($__internal_206bd695784515b4afe10810b34c6664c49167fa54599528cdbbbe8101fc9d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4337d4d19e11afb21be1b66a25b022e56177bb09b98f9e07c644c113e003297c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4337d4d19e11afb21be1b66a25b022e56177bb09b98f9e07c644c113e003297c->enter($__internal_4337d4d19e11afb21be1b66a25b022e56177bb09b98f9e07c644c113e003297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 107
        echo "    <span class=\"label ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->getSourceContext()); })()), "errors", array())) > 0)) {
            echo "label-status-error";
        }
        echo "\">
        <span class=\"icon\">
            ";
        // line 109
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 109, $this->getSourceContext()); })()), 1)) : (1));
        // line 110
        echo "            ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 110, $this->getSourceContext()); })()) == 1)) {
            // line 111
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg", array("height" => 30, "color" => "#3F3F3F"));
            echo "
            ";
        } else {
            // line 113
            echo "                ";
            echo twig_include($this->env, $context, "@CsaGuzzle/Icon/guzzle.svg");
            echo "
            ";
        }
        // line 115
        echo "
        </span>
        <strong>";
        // line 117
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 117, $this->getSourceContext()); })()), "name", array())), "HTTP calls"), "html", null, true);
        echo "</strong>
        ";
        // line 118
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 118, $this->getSourceContext()); })()), "calls", array()))) {
            // line 119
            echo "            <span class=\"count\">
                <span>";
            // line 120
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 120, $this->getSourceContext()); })()), "calls", array())), "html", null, true);
            echo "</span>
                ";
            // line 121
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 121, $this->getSourceContext()); })()), "totalTime", array()) > 0)) {
                // line 122
                echo "                    <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Csa\Bundle\GuzzleBundle\Twig\Extension\GuzzleExtension')->formatDuration(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 122, $this->getSourceContext()); })()), "totalTime", array())), "html", null, true);
                echo "</span>
                ";
            }
            // line 124
            echo "            </span>
        ";
        }
        // line 126
        echo "    </span>
";
        
        $__internal_4337d4d19e11afb21be1b66a25b022e56177bb09b98f9e07c644c113e003297c->leave($__internal_4337d4d19e11afb21be1b66a25b022e56177bb09b98f9e07c644c113e003297c_prof);

        
        $__internal_206bd695784515b4afe10810b34c6664c49167fa54599528cdbbbe8101fc9d7f->leave($__internal_206bd695784515b4afe10810b34c6664c49167fa54599528cdbbbe8101fc9d7f_prof);

    }

    // line 129
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cd843d9c315e0e2a8ebb84cfe90d90383667ff828a6258e5e30c08bdaa198e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd843d9c315e0e2a8ebb84cfe90d90383667ff828a6258e5e30c08bdaa198e9->enter($__internal_5cd843d9c315e0e2a8ebb84cfe90d90383667ff828a6258e5e30c08bdaa198e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23b7594bc05bb1bd6fce7ea0832a41e11abc78e19e3f5845ed3c14a9ca89c2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b7594bc05bb1bd6fce7ea0832a41e11abc78e19e3f5845ed3c14a9ca89c2bb->enter($__internal_23b7594bc05bb1bd6fce7ea0832a41e11abc78e19e3f5845ed3c14a9ca89c2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 130
        echo "    <h2>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 130, $this->getSourceContext()); })()), "name", array())), "HTTP calls"), "html", null, true);
        echo "</h2>
    ";
        // line 131
        echo twig_include($this->env, $context, "@CsaGuzzle/Calls/list.html.twig", array("calls" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 131, $this->getSourceContext()); })()), "calls", array())));
        echo "
";
        
        $__internal_23b7594bc05bb1bd6fce7ea0832a41e11abc78e19e3f5845ed3c14a9ca89c2bb->leave($__internal_23b7594bc05bb1bd6fce7ea0832a41e11abc78e19e3f5845ed3c14a9ca89c2bb_prof);

        
        $__internal_5cd843d9c315e0e2a8ebb84cfe90d90383667ff828a6258e5e30c08bdaa198e9->leave($__internal_5cd843d9c315e0e2a8ebb84cfe90d90383667ff828a6258e5e30c08bdaa198e9_prof);

    }

    public function getTemplateName()
    {
        return "CsaGuzzleBundle:Collector:guzzle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 131,  432 => 130,  423 => 129,  412 => 126,  408 => 124,  402 => 122,  400 => 121,  396 => 120,  393 => 119,  391 => 118,  387 => 117,  383 => 115,  377 => 113,  371 => 111,  368 => 110,  366 => 109,  358 => 107,  349 => 106,  335 => 101,  330 => 100,  327 => 99,  325 => 98,  321 => 97,  317 => 96,  312 => 95,  303 => 94,  291 => 91,  288 => 90,  285 => 89,  279 => 86,  275 => 84,  272 => 83,  266 => 80,  262 => 78,  259 => 77,  253 => 74,  249 => 72,  246 => 71,  240 => 68,  236 => 66,  233 => 65,  227 => 62,  223 => 60,  221 => 59,  216 => 57,  212 => 55,  210 => 54,  207 => 53,  204 => 52,  198 => 49,  195 => 48,  192 => 47,  187 => 45,  182 => 44,  175 => 42,  170 => 41,  167 => 40,  165 => 39,  162 => 38,  159 => 37,  156 => 36,  153 => 35,  150 => 34,  147 => 33,  144 => 32,  142 => 31,  139 => 30,  132 => 29,  129 => 28,  126 => 27,  123 => 26,  120 => 25,  117 => 24,  112 => 23,  109 => 22,  106 => 21,  104 => 20,  101 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set callCount = collector.calls|length %}
    {% set errorCount = collector.errors|length %}

    {% set cacheHitCount = 0 %}
    {% set cacheMissCount = 0 %}

    {% for call in collector.calls if call.cache is defined and call.cache == 'HIT' %}
        {% if call.cache == 'HIT' %}
            {% set cacheHitCount = cacheHitCount + 1 %}
        {% else %}
            {% set cacheMissCount = cacheMissCount + 1 %}
        {% endif %}
    {% endfor %}

    {% set mockReplayCount = 0 %}
    {% set mockRecordCount = 0 %}

    {% for call in collector.calls if call.mock is defined %}
        {% if call.mock == 'REPLAY' %}
            {% set mockReplayCount = mockReplayCount + 1 %}
        {% else %}
            {% set mockRecordCount = mockRecordCount + 1 %}
        {% endif %}
    {% endfor %}

    {% if callCount == 0 %}
        {% set color_code = '' %}
    {% elseif errorCount > 0 %}
        {% set color_code = 'red' %}
    {% else %}
        {% set color_code = 'green' %}
    {% endif %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 28, color: '#3F3F3F' }) }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color_code }}\">{{ callCount }}</span>
        {% else %}
            {{ include('@CsaGuzzle/Icon/guzzle.svg') }}
            <span class=\"sf-toolbar-value\">{{ callCount }}</span>
        {% endif %}
        {% if collector.totalTime > 0 %}
            <span class=\"sf-toolbar-label\">
                in <span class=\"sf-toolbar-value\">{{ collector.totalTime|csa_guzzle_format_duration }}</span>
            </span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Success</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ callCount - errorCount }}</span>
        </div>
        {% if cacheHitCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache HIT</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ cacheHitCount }}</span>
            </div>
        {% endif %}
        {% if cacheMissCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache MISS</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ cacheMissCount }}</span>
            </div>
        {% endif %}
        {% if mockReplayCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (replayed)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ mockReplayCount }}</span>
            </div>
        {% endif %}
        {% if mockRecordCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Mocks (recorded)</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ mockRecordCount }}</span>
            </div>
        {% endif %}
        {% if errorCount %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ errorCount }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'guzzle', status: color_code }) }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/screen.min.css') }}\">
    <script src=\"{{ asset('bundles/csaguzzle/js/guzzle.min.js') }}\"></script>
    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version == 1 %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/csaguzzle/css/legacy.min.css') }}\">
        <script src=\"{{ asset('bundles/csaguzzle/js/legacy.min.js') }}\"></script>
        <script type=\"text/javascript\">window.addEventListener('load', Guzzle.createTabs, false);</script>
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.errors|length > 0 %}label-status-error{% endif %}\">
        <span class=\"icon\">
            {% set profiler_markup_version = profiler_markup_version|default(1) %}
            {% if profiler_markup_version == 1 %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg', { height: 30, color: '#3F3F3F' }) }}
            {% else %}
                {{ include('@CsaGuzzle/Icon/guzzle.svg')}}
            {% endif %}

        </span>
        <strong>{{ collector.name|capitalize|default('HTTP calls') }}</strong>
        {% if collector.calls is not empty %}
            <span class=\"count\">
                <span>{{ collector.calls|length }}</span>
                {% if collector.totalTime > 0 %}
                    <span>{{ collector.totalTime|csa_guzzle_format_duration }}</span>
                {% endif %}
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>{{ (collector.name|capitalize)|default('HTTP calls') }}</h2>
    {{  include('@CsaGuzzle/Calls/list.html.twig', { calls: collector.calls }) }}
{% endblock %}
", "CsaGuzzleBundle:Collector:guzzle.html.twig", "/Volumes/DATA/Site/Symfony/blog-api/front/vendor/csa/guzzle-bundle/src/Resources/views/Collector/guzzle.html.twig");
    }
}
