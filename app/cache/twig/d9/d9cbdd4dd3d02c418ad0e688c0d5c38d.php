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

/* table/tracking/main.twig */
class __TwigTemplate_114fde131ab841c630a06e33299e263d extends Template
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
        if ((twig_length_filter($this->env, (isset($context["selectable_tables_entries"]) || array_key_exists("selectable_tables_entries", $context) ? $context["selectable_tables_entries"] : (function () { throw new RuntimeError('Variable "selectable_tables_entries" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/tracking", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
            echo "\">
        ";
            // line 3
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()));
            echo "
        <select name=\"table\" class=\"autosubmit\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selectable_tables_entries"]) || array_key_exists("selectable_tables_entries", $context) ? $context["selectable_tables_entries"] : (function () { throw new RuntimeError('Variable "selectable_tables_entries" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 6), "html", null, true);
                echo "\"";
                // line 7
                echo (((twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 7) == (isset($context["selected_table"]) || array_key_exists("selected_table", $context) ? $context["selected_table"] : (function () { throw new RuntimeError('Variable "selected_table" does not exist.', 7, $this->source); })()))) ? (" selected") : (""));
                echo ">
                    ";
                // line 8
                echo twig_escape_filter($this->env, (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 8, $this->source); })()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "
                    ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "active", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                        (";
echo _gettext("active");
                    echo ")
                    ";
                } else {
                    // line 12
                    echo "                        (";
echo _gettext("not active");
                    echo ")
                    ";
                }
                // line 14
                echo "                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
";
        }
        // line 20
        echo "<br>
";
        // line 21
        if (((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 21, $this->source); })()) > 0)) {
            // line 22
            echo "    <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/tracking");
            echo "\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        ";
            // line 23
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 23, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 23, $this->source); })()));
            echo "
        <table id=\"versions\" class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>";
            // line 28
echo _gettext("Version");
            echo "</th>
                    <th>";
            // line 29
echo _gettext("Created");
            echo "</th>
                    <th>";
            // line 30
echo _gettext("Updated");
            echo "</th>
                    <th>";
            // line 31
echo _gettext("Status");
            echo "</th>
                    <th>";
            // line 32
echo _gettext("Action");
            echo "</th>
                    <th>";
            // line 33
echo _gettext("Show");
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 38
                echo "                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 41));
                echo "\"
                                value=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 42));
                echo "\">
                        </td>
                        <td>
                            <label for=\"selected_versions_";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 45));
                echo "\">
                                <b>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "array", false, false, false, 46));
                echo "</b>
                            </label>
                        </td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "date_created", [], "array", false, false, false, 49));
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "date_updated", [], "array", false, false, false, 50));
                echo "</td>
                        ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, $context["version"], "tracking_active", [], "array", false, false, false, 51) == 1)) {
                    // line 52
                    echo "                            ";
                    $context["last_version_status"] = 1;
                    // line 53
                    echo "                            <td>";
echo _gettext("active");
                    echo "</td>
                        ";
                } else {
                    // line 55
                    echo "                            ";
                    $context["last_version_status"] = 0;
                    // line 56
                    echo "                            <td>";
echo _gettext("not active");
                    echo "</td>
                        ";
                }
                // line 58
                echo "                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"";
                // line 59
                echo $this->env->getFunction('url')->getCallable()("/table/tracking");
                echo "\" data-post=\"";
                // line 60
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 60, $this->source); })()), ["version" => twig_get_attribute($this->env, $this->source,                 // line 61
$context["version"], "version", [], "array", false, false, false, 61), "submit_delete_version" => true]), "", false);
                // line 63
                echo "\">
                                ";
                // line 64
                echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Delete version"));
                echo "
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 68
                echo $this->env->getFunction('url')->getCallable()("/table/tracking");
                echo "\" data-post=\"";
                // line 69
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 69, $this->source); })()), ["version" => twig_get_attribute($this->env, $this->source,                 // line 70
$context["version"], "version", [], "array", false, false, false, 70), "report" => "true"]), "", false);
                // line 72
                echo "\">
                                ";
                // line 73
                echo $this->env->getFunction('get_icon')->getCallable()("b_report", _gettext("Tracking report"));
                echo "
                            </a>
                            <a href=\"";
                // line 75
                echo $this->env->getFunction('url')->getCallable()("/table/tracking");
                echo "\" data-post=\"";
                // line 76
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 76, $this->source); })()), ["version" => twig_get_attribute($this->env, $this->source,                 // line 77
$context["version"], "version", [], "array", false, false, false, 77), "snapshot" => "true"]), "", false);
                // line 79
                echo "\">
                                ";
                // line 80
                echo $this->env->getFunction('get_icon')->getCallable()("b_props", _gettext("Structure snapshot"));
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            </tbody>
        </table>
        ";
            // line 87
            $this->loadTemplate("select_all.twig", "table/tracking/main.twig", 87)->display(twig_to_array(["text_dir" =>             // line 88
(isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 88, $this->source); })()), "form_name" => "versionsForm"]));
            // line 91
            echo "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"";
echo _gettext("Delete version");
            echo "\">
            ";
            // line 92
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Delete version"));
            echo "
        </button>
    </form>
    ";
            // line 95
            $context["last_version_element"] = twig_first($this->env, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 95, $this->source); })()));
            // line 96
            echo "    <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/tracking", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 96, $this->source); })()));
            echo "\" class=\"card\">
      ";
            // line 97
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 97, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 97, $this->source); })()));
            echo "
      <div class=\"card-header\">
        ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, (isset($context["last_version_element"]) || array_key_exists("last_version_element", $context) ? $context["last_version_element"] : (function () { throw new RuntimeError('Variable "last_version_element" does not exist.', 99, $this->source); })()), "tracking_active", [], "array", false, false, false, 99) == 0)) {
                // line 100
                echo "          ";
                $context["legend"] = _gettext("Activate tracking for %s");
                // line 101
                echo "          ";
                $context["value"] = "activate_now";
                // line 102
                echo "          ";
                $context["button"] = _gettext("Activate now");
                // line 103
                echo "        ";
            } else {
                // line 104
                echo "          ";
                $context["legend"] = _gettext("Deactivate tracking for %s");
                // line 105
                echo "          ";
                $context["value"] = "deactivate_now";
                // line 106
                echo "          ";
                $context["button"] = _gettext("Deactivate now");
                // line 107
                echo "        ";
            }
            // line 108
            echo "
        ";
            // line 109
            echo twig_escape_filter($this->env, twig_sprintf((isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 109, $this->source); })()), (((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 109, $this->source); })()) . ".") . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 109, $this->source); })()))), "html", null, true);
            echo "
      </div>
      <div class=\"card-body\">
        <input type=\"hidden\" name=\"version\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"toggle_activation\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 113, $this->source); })()), "html", null, true);
            echo "\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 114, $this->source); })()), "html", null, true);
            echo "\">
      </div>
    </form>
";
        }
        // line 118
        $this->loadTemplate("create_tracking_version.twig", "table/tracking/main.twig", 118)->display(twig_to_array(["route" => "/table/tracking", "url_params" =>         // line 120
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 120, $this->source); })()), "last_version" =>         // line 121
(isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 121, $this->source); })()), "db" =>         // line 122
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 122, $this->source); })()), "selected" => [        // line 123
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 123, $this->source); })())], "type" =>         // line 124
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 124, $this->source); })()), "default_statements" =>         // line 125
(isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 125, $this->source); })())]));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/main.twig";
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
        return array (  335 => 125,  334 => 124,  333 => 123,  332 => 122,  331 => 121,  330 => 120,  329 => 118,  322 => 114,  318 => 113,  314 => 112,  308 => 109,  305 => 108,  302 => 107,  299 => 106,  296 => 105,  293 => 104,  290 => 103,  287 => 102,  284 => 101,  281 => 100,  279 => 99,  274 => 97,  269 => 96,  267 => 95,  261 => 92,  256 => 91,  254 => 88,  253 => 87,  249 => 85,  238 => 80,  235 => 79,  233 => 77,  232 => 76,  229 => 75,  224 => 73,  221 => 72,  219 => 70,  218 => 69,  215 => 68,  208 => 64,  205 => 63,  203 => 61,  202 => 60,  199 => 59,  196 => 58,  190 => 56,  187 => 55,  181 => 53,  178 => 52,  176 => 51,  172 => 50,  168 => 49,  162 => 46,  158 => 45,  152 => 42,  148 => 41,  143 => 38,  139 => 37,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  104 => 23,  99 => 22,  97 => 21,  94 => 20,  88 => 16,  81 => 14,  75 => 12,  69 => 10,  67 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if selectable_tables_entries|length > 0 %}
    <form method=\"post\" action=\"{{ url('/table/tracking', url_params) }}\">
        {{ get_hidden_inputs(db, table) }}
        <select name=\"table\" class=\"autosubmit\">
            {% for entry in selectable_tables_entries %}
                <option value=\"{{ entry.name }}\"
                    {{- entry.name == selected_table ? ' selected' }}>
                    {{ db }}.{{ entry.name }}
                    {% if entry.active %}
                        ({% trans 'active' %})
                    {% else %}
                        ({% trans 'not active' %})
                    {% endif %}
                </option>
            {% endfor %}
        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
{% endif %}
<br>
{% if last_version > 0 %}
    <form method=\"post\" action=\"{{ url('/table/tracking') }}\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        {{ get_hidden_inputs(db, table) }}
        <table id=\"versions\" class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>{% trans 'Version' %}</th>
                    <th>{% trans 'Created' %}</th>
                    <th>{% trans 'Updated' %}</th>
                    <th>{% trans 'Status' %}</th>
                    <th>{% trans 'Action' %}</th>
                    <th>{% trans 'Show' %}</th>
                </tr>
            </thead>
            <tbody>
                {% for version in versions %}
                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_{{- version['version']|escape }}\"
                                value=\"{{- version['version']|escape }}\">
                        </td>
                        <td>
                            <label for=\"selected_versions_{{- version['version']|escape }}\">
                                <b>{{ version['version']|escape }}</b>
                            </label>
                        </td>
                        <td>{{ version['date_created']|escape }}</td>
                        <td>{{ version['date_updated']|escape }}</td>
                        {% if version['tracking_active'] == 1 %}
                            {% set last_version_status = 1 %}
                            <td>{% trans 'active' %}</td>
                        {% else %}
                            {% set last_version_status = 0 %}
                            <td>{% trans 'not active' %}</td>
                        {% endif %}
                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"{{ url('/table/tracking') }}\" data-post=\"
                                {{- get_common(url_params|merge({
                                    'version': version['version'],
                                    'submit_delete_version': true
                                }), '', false) }}\">
                                {{ get_icon('b_drop', 'Delete version'|trans) }}
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ url('/table/tracking') }}\" data-post=\"
                                {{- get_common(url_params|merge({
                                    'version': version['version'],
                                    'report': 'true'
                                }), '', false) }}\">
                                {{ get_icon('b_report', 'Tracking report'|trans) }}
                            </a>
                            <a href=\"{{ url('/table/tracking') }}\" data-post=\"
                                {{- get_common(url_params|merge({
                                    'version': version['version'],
                                    'snapshot': 'true'
                                }), '', false) }}\">
                                {{ get_icon('b_props', 'Structure snapshot'|trans) }}
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        {% include 'select_all.twig' with {
            'text_dir': text_dir,
            'form_name': 'versionsForm',
        } only %}
        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"{% trans 'Delete version' %}\">
            {{ get_icon('b_drop', 'Delete version'|trans) }}
        </button>
    </form>
    {% set last_version_element = versions|first %}
    <form method=\"post\" action=\"{{ url('/table/tracking', url_params) }}\" class=\"card\">
      {{ get_hidden_inputs(db, table) }}
      <div class=\"card-header\">
        {% if last_version_element['tracking_active'] == 0 %}
          {% set legend = 'Activate tracking for %s'|trans %}
          {% set value = 'activate_now' %}
          {% set button = 'Activate now'|trans %}
        {% else %}
          {% set legend = 'Deactivate tracking for %s'|trans %}
          {% set value = 'deactivate_now' %}
          {% set button = 'Deactivate now'|trans %}
        {% endif %}

        {{ legend|format(db ~ '.' ~ table) }}
      </div>
      <div class=\"card-body\">
        <input type=\"hidden\" name=\"version\" value=\"{{ last_version }}\">
        <input type=\"hidden\" name=\"toggle_activation\" value=\"{{ value }}\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"{{ button }}\">
      </div>
    </form>
{% endif %}
{% include 'create_tracking_version.twig' with {
    'route': '/table/tracking',
    'url_params': url_params,
    'last_version': last_version,
    'db': db,
    'selected': [table],
    'type': type,
    'default_statements': default_statements,
} only %}
", "table/tracking/main.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/main.twig");
    }
}
