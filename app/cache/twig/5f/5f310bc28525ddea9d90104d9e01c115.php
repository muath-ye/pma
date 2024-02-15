<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* list_navigator.twig */
class __TwigTemplate_ca47bd3356d6e75fb3632a5f1bba658b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 1, $this->source); })()) < (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "<div class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 2, $this->source); })()), " "), "html", null, true);
            echo "\">
  ";
            // line 3
            if (((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 3, $this->source); })()) != "frame_navigation")) {
                // line 4
                echo "    ";
echo _gettext("Page number:");
                // line 5
                echo "  ";
            }
            // line 6
            echo "
  ";
            // line 7
            if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 7, $this->source); })()) > 0)) {
                // line 8
                echo "    <a href=\"";
                echo (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 8, $this->source); })());
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 8, $this->source); })()), [(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 8, $this->source); })()) => 0]), "", false);
                echo "\"";
                echo ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 8, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                echo " title=\"";
echo _pgettext("First page", "Begin");
                echo "\">
      ";
                // line 9
                if ($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) {
                    // line 10
                    echo "        &lt;&lt;
      ";
                }
                // line 12
                echo "      ";
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 13
                    echo "        ";
echo _pgettext("First page", "Begin");
                    // line 14
                    echo "      ";
                }
                // line 15
                echo "    </a>
    <a href=\"";
                // line 16
                echo (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 16, $this->source); })());
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 16, $this->source); })()), [(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 16, $this->source); })()) => ((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 16, $this->source); })()) - (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 16, $this->source); })()))]), "", false);
                echo "\"";
                echo ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 16, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                echo " title=\"";
echo _pgettext("Previous page", "Previous");
                echo "\">
      ";
                // line 17
                if ($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) {
                    // line 18
                    echo "        &lt;
      ";
                }
                // line 20
                echo "      ";
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 21
                    echo "        ";
echo _pgettext("Previous page", "Previous");
                    // line 22
                    echo "      ";
                }
                // line 23
                echo "    </a>
  ";
            }
            // line 25
            echo "
  <form action=\"";
            // line 26
            echo (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 26, $this->source); })());
            echo "\" method=\"post\">
    ";
            // line 27
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 27, $this->source); })()));
            echo "

    ";
            // line 29
            echo (isset($context["page_selector"]) || array_key_exists("page_selector", $context) ? $context["page_selector"] : (function () { throw new RuntimeError('Variable "page_selector" does not exist.', 29, $this->source); })());
            echo "
  </form>

  ";
            // line 32
            if ((((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 32, $this->source); })()) + (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 32, $this->source); })())) < (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 32, $this->source); })()))) {
                // line 33
                echo "    <a href=\"";
                echo (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 33, $this->source); })());
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 33, $this->source); })()), [(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 33, $this->source); })()) => ((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 33, $this->source); })()) + (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 33, $this->source); })()))]), "", false);
                echo "\"";
                echo ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 33, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                echo " title=\"";
echo _pgettext("Next page", "Next");
                echo "\">
      ";
                // line 34
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 35
                    echo "        ";
echo _pgettext("Next page", "Next");
                    // line 36
                    echo "      ";
                }
                // line 37
                echo "      ";
                if ($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) {
                    // line 38
                    echo "        &gt;
      ";
                }
                // line 40
                echo "    </a>
    ";
                // line 41
                $context["last_pos"] = ((int) floor(((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 41, $this->source); })()) / (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 41, $this->source); })()))) * (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 41, $this->source); })()));
                // line 42
                echo "    <a href=\"";
                echo (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 42, $this->source); })());
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 42, $this->source); })()), [(isset($context["param_name"]) || array_key_exists("param_name", $context) ? $context["param_name"] : (function () { throw new RuntimeError('Variable "param_name" does not exist.', 42, $this->source); })()) => ((((isset($context["last_pos"]) || array_key_exists("last_pos", $context) ? $context["last_pos"] : (function () { throw new RuntimeError('Variable "last_pos" does not exist.', 42, $this->source); })()) == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()))) ? (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()) - (isset($context["max_count"]) || array_key_exists("max_count", $context) ? $context["max_count"] : (function () { throw new RuntimeError('Variable "max_count" does not exist.', 42, $this->source); })()))) : ((isset($context["last_pos"]) || array_key_exists("last_pos", $context) ? $context["last_pos"] : (function () { throw new RuntimeError('Variable "last_pos" does not exist.', 42, $this->source); })())))]), "", false);
                echo "\"";
                echo ((((isset($context["frame"]) || array_key_exists("frame", $context) ? $context["frame"] : (function () { throw new RuntimeError('Variable "frame" does not exist.', 42, $this->source); })()) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                echo " title=\"";
echo _pgettext("Last page", "End");
                echo "\">
      ";
                // line 43
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 44
                    echo "        ";
echo _pgettext("Last page", "End");
                    // line 45
                    echo "      ";
                }
                // line 46
                echo "      ";
                if ($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) {
                    // line 47
                    echo "        &gt;&gt;
      ";
                }
                // line 49
                echo "    </a>
  ";
            }
            // line 51
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "list_navigator.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  196 => 51,  192 => 49,  188 => 47,  185 => 46,  182 => 45,  179 => 44,  177 => 43,  166 => 42,  164 => 41,  161 => 40,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  146 => 34,  135 => 33,  133 => 32,  127 => 29,  122 => 27,  118 => 26,  115 => 25,  111 => 23,  108 => 22,  105 => 21,  102 => 20,  98 => 18,  96 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  70 => 10,  68 => 9,  57 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if max_count < count %}
<div class=\"{{ classes|join(' ') }}\">
  {% if frame != 'frame_navigation' %}
    {% trans 'Page number:' %}
  {% endif %}

  {% if position > 0 %}
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): 0}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{% trans %}Begin{% context %}First page{% endtrans %}\">
      {% if show_icons('TableNavigationLinksMode') %}
        &lt;&lt;
      {% endif %}
      {% if show_text('TableNavigationLinksMode') %}
        {% trans %}Begin{% context %}First page{% endtrans %}
      {% endif %}
    </a>
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): position - max_count}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{% trans %}Previous{% context %}Previous page{% endtrans %}\">
      {% if show_icons('TableNavigationLinksMode') %}
        &lt;
      {% endif %}
      {% if show_text('TableNavigationLinksMode') %}
        {% trans %}Previous{% context %}Previous page{% endtrans %}
      {% endif %}
    </a>
  {% endif %}

  <form action=\"{{ script|raw }}\" method=\"post\">
    {{ get_hidden_inputs(url_params) }}

    {{ page_selector|raw }}
  </form>

  {% if position + max_count < count %}
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): position + max_count}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{% trans %}Next{% context %}Next page{% endtrans %}\">
      {% if show_text('TableNavigationLinksMode') %}
        {% trans %}Next{% context %}Next page{% endtrans %}
      {% endif %}
      {% if show_icons('TableNavigationLinksMode') %}
        &gt;
      {% endif %}
    </a>
    {% set last_pos = (count // max_count) * max_count %}
    <a href=\"{{ script|raw }}\" data-post=\"{{ get_common(url_params|merge({(param_name): (last_pos == count ? count - max_count : last_pos)}), '', false) }}\"{{ frame == 'frame_navigation' ? ' class=\"ajax\"' }} title=\"{% trans %}End{% context %}Last page{% endtrans %}\">
      {% if show_text('TableNavigationLinksMode') %}
        {% trans %}End{% context %}Last page{% endtrans %}
      {% endif %}
      {% if show_icons('TableNavigationLinksMode') %}
        &gt;&gt;
      {% endif %}
    </a>
  {% endif %}
</div>
{% endif %}
", "list_navigator.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/list_navigator.twig");
    }
}
