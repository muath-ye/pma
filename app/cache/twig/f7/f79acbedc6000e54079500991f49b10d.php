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

/* server/status/variables/index.twig */
class __TwigTemplate_bb383ad64b4159c7b0fc7a478423b83c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "variables";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/variables/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        if ((isset($context["is_data_loaded"]) || array_key_exists("is_data_loaded", $context) ? $context["is_data_loaded"] : (function () { throw new RuntimeError('Variable "is_data_loaded" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
            // line 7
echo _gettext("Filters");
            echo "</div>
  <div class=\"card-body\">
    <form action=\"";
            // line 9
            echo $this->env->getFunction('url')->getCallable()("/server/status/variables");
            echo "\" method=\"post\" class=\"row row-cols-lg-auto g-3 align-items-center\">
      ";
            // line 10
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
            echo "

      <label class=\"col-12 col-form-label\" for=\"filterText\">";
            // line 12
echo _gettext("Containing the word:");
            echo "</label>
      <div class=\"col-12\">
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["filter_text"]) || array_key_exists("filter_text", $context) ? $context["filter_text"] : (function () { throw new RuntimeError('Variable "filter_text" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\">
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"filterAlert\" id=\"filterAlert\"";
            // line 19
            echo (((isset($context["is_only_alerts"]) || array_key_exists("is_only_alerts", $context) ? $context["is_only_alerts"] : (function () { throw new RuntimeError('Variable "is_only_alerts" does not exist.', 19, $this->source); })())) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"filterAlert\">";
            // line 20
echo _gettext("Show only alert values");
            echo "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <label class=\"visually-hidden\" for=\"filterCategory\">";
            // line 25
echo _gettext("Filter by category…");
            echo "</label>
        <select class=\"form-select\" id=\"filterCategory\" name=\"filterCategory\">
          <option value=\"\">";
            // line 27
echo _gettext("Filter by category…");
            echo "</option>
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "is_selected", [], "any", false, false, false, 29)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </select>
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"dontFormat\" id=\"dontFormat\"";
            // line 36
            echo (((isset($context["is_not_formatted"]) || array_key_exists("is_not_formatted", $context) ? $context["is_not_formatted"] : (function () { throw new RuntimeError('Variable "is_not_formatted" does not exist.', 36, $this->source); })())) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"dontFormat\">";
            // line 37
echo _gettext("Show unformatted values");
            echo "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 42
echo _gettext("Refresh");
            echo "\">
      </div>
    </form>
  </div>
</div>

  <div id=\"linkSuggestions\" class=\"defaultLinks hide\">
    <p class=\"alert alert-primary\" role=\"alert\">
      ";
            // line 50
echo _gettext("Related links:");
            // line 51
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 52
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 52), "html", null, true);
                echo "\">
          ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["link"], "links", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["link_name"] => $context["link_url"]) {
                    // line 54
                    echo "            ";
                    if (($context["link_name"] == "doc")) {
                        // line 55
                        echo "              ";
                        echo $this->env->getFunction('show_mysql_docu')->getCallable()($context["link_url"]);
                        echo "
            ";
                    } else {
                        // line 57
                        echo "              <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link_url"], "url", [], "any", false, false, false, 57), "html", null, true);
                        echo "\"";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["link_url"], "params", [], "any", false, false, false, 57))) {
                            echo " data-post=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link_url"], "params", [], "any", false, false, false, 57), "html", null, true);
                            echo "\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["link_name"], "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 59
                    echo "            |
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link_name'], $context['link_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "        </span>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </p>
  </div>

  <div class=\"responsivetable row\">
    <table class=\"table table-striped table-hover table-sm\" id=\"serverStatusVariables\">
      <colgroup>
        <col class=\"namecol\">
        <col class=\"valuecol\">
        <col class=\"descrcol\">
      </colgroup>
      <thead>
        <tr>
          <th scope=\"col\">";
            // line 75
echo _gettext("Variable");
            echo "</th>
          <th scope=\"col\">";
            // line 76
echo _gettext("Value");
            echo "</th>
          <th scope=\"col\">";
            // line 77
echo _gettext("Description");
            echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 82
                echo "          <tr";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["variable"], "class", [], "any", false, false, false, 82))) {
                    echo " class=\"s_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "class", [], "any", false, false, false, 82), "html", null, true);
                    echo "\"";
                }
                echo ">
            <th class=\"name\">
              ";
                // line 84
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 84), ["_" => " "]), "html", null, true);
                echo "
              ";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["variable"], "doc", [], "any", false, false, false, 85);
                echo "
            </th>

            <td class=\"value font-monospace text-end\">
              <span class=\"formatted\">
                ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "                  <span class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["variable"], "is_alert", [], "any", false, false, false, 91)) ? ("text-danger") : ("text-success"));
                    echo "\">
                ";
                }
                // line 93
                echo "
                ";
                // line 94
                if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 94)) && is_string($__internal_compile_1 = "%") && str_ends_with($__internal_compile_0, $__internal_compile_1))) {
                    // line 95
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 95), 0, 2), "html", null, true);
                    echo " %
                ";
                } elseif (twig_in_filter("Uptime", twig_get_attribute($this->env, $this->source,                 // line 96
$context["variable"], "name", [], "any", false, false, false, 96))) {
                    // line 97
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('timespan_format')->getCallable()(twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 97)), "html", null, true);
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 98
$context["variable"], "is_numeric", [], "any", false, false, false, 98) && (twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 98) >= 1000))) {
                    // line 99
                    echo "                  <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 99), 0), "html", null, true);
                    echo "\">
                    ";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 100), 3, 1), "html", null, true);
                    echo "
                  </abbr>
                ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 102
$context["variable"], "is_numeric", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 103), 3, 1), "html", null, true);
                    echo "
                ";
                } else {
                    // line 105
                    echo "                  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 105), "html", null, true);
                    echo "
                ";
                }
                // line 107
                echo "
                ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "                  </span>
                ";
                }
                // line 111
                echo "              </span>
              <span class=\"original hide\">
                ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                  <span class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["variable"], "is_alert", [], "any", false, false, false, 114)) ? ("text-danger") : ("text-success"));
                    echo "\">
                ";
                }
                // line 116
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 116), "html", null, true);
                echo "
                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "has_alert", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "                  </span>
                ";
                }
                // line 120
                echo "              </span>
            </td>

            <td class=\"w-50\">
              ";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "description", [], "any", false, false, false, 124), "html", null, true);
                echo "
              ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["variable"], "description_doc", [], "any", false, false, false, 125));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 126
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["doc"], "name", [], "any", false, false, false, 126) == "doc")) {
                        // line 127
                        echo "                  ";
                        echo $this->env->getFunction('show_mysql_docu')->getCallable()(twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "any", false, false, false, 127));
                        echo "
                ";
                    } else {
                        // line 129
                        echo "                  <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "any", false, false, false, 129), "url", [], "any", false, false, false, 129), "html", null, true);
                        echo "\" data-post=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "any", false, false, false, 129), "params", [], "any", false, false, false, 129), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "name", [], "any", false, false, false, 129), "html", null, true);
                        echo "</a>
                ";
                    }
                    // line 131
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "      </tbody>
    </table>
  </div>
";
        } else {
            // line 139
            echo "  ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view status variables."));
            echo "
";
        }
        // line 141
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/variables/index.twig";
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
        return array (  406 => 141,  400 => 139,  394 => 135,  386 => 132,  380 => 131,  370 => 129,  364 => 127,  361 => 126,  357 => 125,  353 => 124,  347 => 120,  343 => 118,  341 => 117,  336 => 116,  330 => 114,  328 => 113,  324 => 111,  320 => 109,  318 => 108,  315 => 107,  309 => 105,  303 => 103,  301 => 102,  296 => 100,  291 => 99,  289 => 98,  284 => 97,  282 => 96,  277 => 95,  275 => 94,  272 => 93,  266 => 91,  264 => 90,  256 => 85,  252 => 84,  242 => 82,  238 => 81,  231 => 77,  227 => 76,  223 => 75,  209 => 63,  202 => 61,  195 => 59,  181 => 57,  175 => 55,  172 => 54,  168 => 53,  163 => 52,  158 => 51,  156 => 50,  145 => 42,  137 => 37,  133 => 36,  126 => 31,  113 => 29,  109 => 28,  105 => 27,  100 => 25,  92 => 20,  88 => 19,  80 => 14,  75 => 12,  70 => 10,  66 => 9,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'variables' %}
{% block content %}

{% if is_data_loaded %}
<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">{% trans 'Filters' %}</div>
  <div class=\"card-body\">
    <form action=\"{{ url('/server/status/variables') }}\" method=\"post\" class=\"row row-cols-lg-auto g-3 align-items-center\">
      {{ get_hidden_inputs() }}

      <label class=\"col-12 col-form-label\" for=\"filterText\">{% trans 'Containing the word:' %}</label>
      <div class=\"col-12\">
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"{{ filter_text }}\">
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"filterAlert\" id=\"filterAlert\"{{ is_only_alerts ? ' checked' }}>
          <label class=\"form-check-label\" for=\"filterAlert\">{% trans 'Show only alert values' %}</label>
        </div>
      </div>

      <div class=\"col-12\">
        <label class=\"visually-hidden\" for=\"filterCategory\">{% trans 'Filter by category…' %}</label>
        <select class=\"form-select\" id=\"filterCategory\" name=\"filterCategory\">
          <option value=\"\">{% trans 'Filter by category…' %}</option>
          {% for category in categories %}
            <option value=\"{{ category.id }}\"{{ category.is_selected ? ' selected' }}>{{ category.name }}</option>
          {% endfor %}
        </select>
      </div>

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"dontFormat\" id=\"dontFormat\"{{ is_not_formatted ? ' checked' }}>
          <label class=\"form-check-label\" for=\"dontFormat\">{% trans 'Show unformatted values' %}</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"{% trans 'Refresh' %}\">
      </div>
    </form>
  </div>
</div>

  <div id=\"linkSuggestions\" class=\"defaultLinks hide\">
    <p class=\"alert alert-primary\" role=\"alert\">
      {% trans 'Related links:' %}
      {% for link in links %}
        <span class=\"{{ link.name }}\">
          {% for link_name, link_url in link.links %}
            {% if link_name == 'doc' %}
              {{ show_mysql_docu(link_url) }}
            {% else %}
              <a href=\"{{ link_url.url }}\"{% if link_url.params is not empty %} data-post=\"{{ link_url.params }}\"{% endif %}>{{ link_name }}</a>
            {% endif %}
            |
          {% endfor %}
        </span>
      {% endfor %}
    </p>
  </div>

  <div class=\"responsivetable row\">
    <table class=\"table table-striped table-hover table-sm\" id=\"serverStatusVariables\">
      <colgroup>
        <col class=\"namecol\">
        <col class=\"valuecol\">
        <col class=\"descrcol\">
      </colgroup>
      <thead>
        <tr>
          <th scope=\"col\">{% trans 'Variable' %}</th>
          <th scope=\"col\">{% trans 'Value' %}</th>
          <th scope=\"col\">{% trans 'Description' %}</th>
        </tr>
      </thead>
      <tbody>
        {% for variable in variables %}
          <tr{% if variable.class is not empty %} class=\"s_{{ variable.class }}\"{% endif %}>
            <th class=\"name\">
              {{ variable.name|replace({'_': ' '}) }}
              {{ variable.doc|raw }}
            </th>

            <td class=\"value font-monospace text-end\">
              <span class=\"formatted\">
                {% if variable.has_alert %}
                  <span class=\"{{ variable.is_alert ? 'text-danger' : 'text-success' }}\">
                {% endif %}

                {% if variable.name ends with '%' %}
                  {{ format_number(variable.value, 0, 2) }} %
                {% elseif 'Uptime' in variable.name %}
                  {{ timespan_format(variable.value) }}
                {% elseif variable.is_numeric and variable.value >= 1000 %}
                  <abbr title=\"{{ format_number(variable.value, 0) }}\">
                    {{ format_number(variable.value, 3, 1) }}
                  </abbr>
                {% elseif variable.is_numeric %}
                  {{ format_number(variable.value, 3, 1) }}
                {% else %}
                  {{ variable.value }}
                {% endif %}

                {% if variable.has_alert %}
                  </span>
                {% endif %}
              </span>
              <span class=\"original hide\">
                {% if variable.has_alert %}
                  <span class=\"{{ variable.is_alert ? 'text-danger' : 'text-success' }}\">
                {% endif %}
                {{ variable.value }}
                {% if variable.has_alert %}
                  </span>
                {% endif %}
              </span>
            </td>

            <td class=\"w-50\">
              {{ variable.description }}
              {% for doc in variable.description_doc %}
                {% if doc.name == 'doc' %}
                  {{ show_mysql_docu(doc.url) }}
                {% else %}
                  <a href=\"{{ doc.url.url }}\" data-post=\"{{ doc.url.params }}\">{{ doc.name }}</a>
                {% endif %}
              {% endfor %}
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% else %}
  {{ 'Not enough privilege to view status variables.'|trans|error }}
{% endif %}

{% endblock %}
", "server/status/variables/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/variables/index.twig");
    }
}
