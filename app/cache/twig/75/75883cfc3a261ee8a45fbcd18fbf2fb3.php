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

/* server/binlog/index.twig */
class __TwigTemplate_fbf1dd65cbe1f018b74df73f8652b706 extends Template
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
        echo "<h2>
  ";
        // line 2
        echo $this->env->getFunction('get_image')->getCallable()("s_tbl");
        echo "
  ";
        // line 3
echo _gettext("Binary log");
        // line 4
        echo "</h2>

<form action=\"";
        // line 6
        echo $this->env->getFunction('url')->getCallable()("/server/binlog");
        echo "\" method=\"post\" class=\"card\">
  ";
        // line 7
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
        echo "
  <div class=\"card-header\">";
        // line 8
echo _gettext("Select binary log to view");
        echo "</div>

  <div class=\"card-body\">
    ";
        // line 11
        $context["full_size"] = 0;
        // line 12
        echo "    <select name=\"log\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["binary_logs"]) || array_key_exists("binary_logs", $context) ? $context["binary_logs"] : (function () { throw new RuntimeError('Variable "binary_logs" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["each_log"]) {
            // line 14
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_log"], "Log_name", [], "array", false, false, false, 14), "html", null, true);
            echo "\"";
            // line 15
            echo (((twig_get_attribute($this->env, $this->source, $context["each_log"], "Log_name", [], "array", false, false, false, 15) == (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 15, $this->source); })()))) ? (" selected") : (""));
            echo ">
          ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_log"], "Log_name", [], "array", false, false, false, 16), "html", null, true);
            echo "
          ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", true, true, false, 17)) {
                // line 18
                echo "            (";
                echo twig_escape_filter($this->env, twig_join_filter($this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", false, false, false, 18), 3, 2), " "), "html", null, true);
                echo ")
            ";
                // line 19
                $context["full_size"] = ((isset($context["full_size"]) || array_key_exists("full_size", $context) ? $context["full_size"] : (function () { throw new RuntimeError('Variable "full_size" does not exist.', 19, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["each_log"], "File_size", [], "array", false, false, false, 19));
                // line 20
                echo "          ";
            }
            // line 21
            echo "        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </select>
    ";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["binary_logs"]) || array_key_exists("binary_logs", $context) ? $context["binary_logs"] : (function () { throw new RuntimeError('Variable "binary_logs" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "
    ";
        // line 25
echo _gettext("Files");
        echo ",
    ";
        // line 26
        if (((isset($context["full_size"]) || array_key_exists("full_size", $context) ? $context["full_size"] : (function () { throw new RuntimeError('Variable "full_size" does not exist.', 26, $this->source); })()) > 0)) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, twig_join_filter($this->env->getFunction('format_byte_down')->getCallable()((isset($context["full_size"]) || array_key_exists("full_size", $context) ? $context["full_size"] : (function () { throw new RuntimeError('Variable "full_size" does not exist.', 27, $this->source); })())), " "), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 32
echo _gettext("Go");
        echo "\">
  </div>
</form>

";
        // line 36
        echo (isset($context["sql_message"]) || array_key_exists("sql_message", $context) ? $context["sql_message"] : (function () { throw new RuntimeError('Variable "sql_message" does not exist.', 36, $this->source); })());
        echo "

<table class=\"table table-striped table-hover align-middle\" id=\"binlogTable\">
  <thead>
    <tr>
      <td colspan=\"6\" class=\"text-center\">
        ";
        // line 42
        if ((isset($context["has_previous"]) || array_key_exists("has_previous", $context) ? $context["has_previous"] : (function () { throw new RuntimeError('Variable "has_previous" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "          ";
            if ((isset($context["has_icons"]) || array_key_exists("has_icons", $context) ? $context["has_icons"] : (function () { throw new RuntimeError('Variable "has_icons" does not exist.', 43, $this->source); })())) {
                // line 44
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/binlog");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()((isset($context["previous_params"]) || array_key_exists("previous_params", $context) ? $context["previous_params"] : (function () { throw new RuntimeError('Variable "previous_params" does not exist.', 44, $this->source); })()), "", false);
                echo "\" title=\"";
                // line 45
echo _pgettext("Previous page", "Previous");
                echo "\">
              &laquo;
            </a>
          ";
            } else {
                // line 49
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/binlog");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()((isset($context["previous_params"]) || array_key_exists("previous_params", $context) ? $context["previous_params"] : (function () { throw new RuntimeError('Variable "previous_params" does not exist.', 49, $this->source); })()), "", false);
                echo "\">
              ";
                // line 50
echo _pgettext("Previous page", "Previous");
                echo " &laquo;
            </a>
          ";
            }
            // line 53
            echo "          -
        ";
        }
        // line 55
        echo "
        ";
        // line 56
        if ((isset($context["is_full_query"]) || array_key_exists("is_full_query", $context) ? $context["is_full_query"] : (function () { throw new RuntimeError('Variable "is_full_query" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "          <a href=\"";
            echo $this->env->getFunction('url')->getCallable()("/server/binlog");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()((isset($context["full_queries_params"]) || array_key_exists("full_queries_params", $context) ? $context["full_queries_params"] : (function () { throw new RuntimeError('Variable "full_queries_params" does not exist.', 57, $this->source); })()), "", false);
            echo "\" title=\"";
echo _gettext("Truncate shown queries");
            echo "\">
            <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("s_partialtext.png"), "html", null, true);
            echo "\" alt=\"";
echo _gettext("Truncate shown queries");
            echo "\">
          </a>
        ";
        } else {
            // line 61
            echo "          <a href=\"";
            echo $this->env->getFunction('url')->getCallable()("/server/binlog");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()((isset($context["full_queries_params"]) || array_key_exists("full_queries_params", $context) ? $context["full_queries_params"] : (function () { throw new RuntimeError('Variable "full_queries_params" does not exist.', 61, $this->source); })()), "", false);
            echo "\" title=\"";
echo _gettext("Show full queries");
            echo "\">
            <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("s_fulltext.png"), "html", null, true);
            echo "\" alt=\"";
echo _gettext("Show full queries");
            echo "\">
          </a>
        ";
        }
        // line 65
        echo "
        ";
        // line 66
        if ((isset($context["has_next"]) || array_key_exists("has_next", $context) ? $context["has_next"] : (function () { throw new RuntimeError('Variable "has_next" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "          -
          ";
            // line 68
            if ((isset($context["has_icons"]) || array_key_exists("has_icons", $context) ? $context["has_icons"] : (function () { throw new RuntimeError('Variable "has_icons" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/binlog");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()((isset($context["next_params"]) || array_key_exists("next_params", $context) ? $context["next_params"] : (function () { throw new RuntimeError('Variable "next_params" does not exist.', 69, $this->source); })()), "", false);
                echo "\" title=\"";
                // line 70
echo _pgettext("Next page", "Next");
                echo "\">
              &raquo;
            </a>
          ";
            } else {
                // line 74
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/binlog");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()((isset($context["next_params"]) || array_key_exists("next_params", $context) ? $context["next_params"] : (function () { throw new RuntimeError('Variable "next_params" does not exist.', 74, $this->source); })()), "", false);
                echo "\">
              ";
                // line 75
echo _pgettext("Next page", "Next");
                echo " &raquo;
            </a>
          ";
            }
            // line 78
            echo "        ";
        }
        // line 79
        echo "      </td>
    </tr>
    <tr class=\"text-nowrap\">
      <th>";
        // line 82
echo _gettext("Log name");
        echo "</th>
      <th>";
        // line 83
echo _gettext("Position");
        echo "</th>
      <th>";
        // line 84
echo _gettext("Event type");
        echo "</th>
      <th>";
        // line 85
echo _gettext("Server ID");
        echo "</th>
      <th>";
        // line 86
echo _gettext("Original position");
        echo "</th>
      <th>";
        // line 87
echo _gettext("Information");
        echo "</th>
    </tr>
  </thead>

  <tbody>
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 93
            echo "      <tr class=\"noclick\">
        <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "Log_name", [], "array", false, false, false, 94), "html", null, true);
            echo "</td>
        <td class=\"text-end\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "Pos", [], "array", false, false, false, 95), "html", null, true);
            echo "</td>
        <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "Event_type", [], "array", false, false, false, 96), "html", null, true);
            echo "</td>
        <td class=\"text-end\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "Server_id", [], "array", false, false, false, 97), "html", null, true);
            echo "</td>
        <td class=\"text-end\">";
            // line 99
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "Orig_log_pos", [], "array", true, true, false, 99)) ? (twig_get_attribute($this->env, $this->source, $context["value"], "Orig_log_pos", [], "array", false, false, false, 99)) : (twig_get_attribute($this->env, $this->source, $context["value"], "End_log_pos", [], "array", false, false, false, 99))), "html", null, true);
            // line 100
            echo "</td>
        <td>";
            // line 101
            echo $this->env->getFunction('format_sql')->getCallable()(twig_get_attribute($this->env, $this->source, $context["value"], "Info", [], "array", false, false, false, 101),  !(isset($context["is_full_query"]) || array_key_exists("is_full_query", $context) ? $context["is_full_query"] : (function () { throw new RuntimeError('Variable "is_full_query" does not exist.', 101, $this->source); })()));
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "  </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/binlog/index.twig";
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
        return array (  327 => 104,  318 => 101,  315 => 100,  313 => 99,  309 => 97,  305 => 96,  301 => 95,  297 => 94,  294 => 93,  290 => 92,  282 => 87,  278 => 86,  274 => 85,  270 => 84,  266 => 83,  262 => 82,  257 => 79,  254 => 78,  248 => 75,  241 => 74,  234 => 70,  228 => 69,  226 => 68,  223 => 67,  221 => 66,  218 => 65,  210 => 62,  201 => 61,  193 => 58,  184 => 57,  182 => 56,  179 => 55,  175 => 53,  169 => 50,  162 => 49,  155 => 45,  149 => 44,  146 => 43,  144 => 42,  135 => 36,  128 => 32,  123 => 29,  117 => 27,  115 => 26,  111 => 25,  107 => 24,  104 => 23,  97 => 21,  94 => 20,  92 => 19,  87 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  66 => 12,  64 => 11,  58 => 8,  54 => 7,  50 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>
  {{ get_image('s_tbl') }}
  {% trans 'Binary log' %}
</h2>

<form action=\"{{ url('/server/binlog') }}\" method=\"post\" class=\"card\">
  {{ get_hidden_inputs(url_params) }}
  <div class=\"card-header\">{% trans 'Select binary log to view' %}</div>

  <div class=\"card-body\">
    {% set full_size = 0 %}
    <select name=\"log\">
      {% for each_log in binary_logs %}
        <option value=\"{{ each_log['Log_name'] }}\"
          {{- each_log['Log_name'] == log ? ' selected' }}>
          {{ each_log['Log_name'] }}
          {% if each_log['File_size'] is defined %}
            ({{ format_byte_down(each_log['File_size'], 3, 2)|join(' ') }})
            {% set full_size = full_size + each_log['File_size'] %}
          {% endif %}
        </option>
      {% endfor %}
    </select>
    {{ binary_logs|length }}
    {% trans 'Files' %},
    {% if full_size > 0 %}
      {{ format_byte_down(full_size)|join(' ') }}
    {% endif %}
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
  </div>
</form>

{{ sql_message|raw }}

<table class=\"table table-striped table-hover align-middle\" id=\"binlogTable\">
  <thead>
    <tr>
      <td colspan=\"6\" class=\"text-center\">
        {% if has_previous %}
          {% if has_icons %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(previous_params, '', false) }}\" title=\"
                {%- trans %}Previous{% context %}Previous page{% endtrans %}\">
              &laquo;
            </a>
          {% else %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(previous_params, '', false) }}\">
              {% trans %}Previous{% context %}Previous page{% endtrans %} &laquo;
            </a>
          {% endif %}
          -
        {% endif %}

        {% if is_full_query %}
          <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(full_queries_params, '', false) }}\" title=\"{% trans 'Truncate shown queries' %}\">
            <img src=\"{{ image('s_partialtext.png') }}\" alt=\"{% trans 'Truncate shown queries' %}\">
          </a>
        {% else %}
          <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(full_queries_params, '', false) }}\" title=\"{% trans 'Show full queries' %}\">
            <img src=\"{{ image('s_fulltext.png') }}\" alt=\"{% trans 'Show full queries' %}\">
          </a>
        {% endif %}

        {% if has_next %}
          -
          {% if has_icons %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(next_params, '', false) }}\" title=\"
                {%- trans %}Next{% context %}Next page{% endtrans %}\">
              &raquo;
            </a>
          {% else %}
            <a href=\"{{ url('/server/binlog') }}\" data-post=\"{{ get_common(next_params, '', false) }}\">
              {% trans %}Next{% context %}Next page{% endtrans %} &raquo;
            </a>
          {% endif %}
        {% endif %}
      </td>
    </tr>
    <tr class=\"text-nowrap\">
      <th>{% trans 'Log name' %}</th>
      <th>{% trans 'Position' %}</th>
      <th>{% trans 'Event type' %}</th>
      <th>{% trans 'Server ID' %}</th>
      <th>{% trans 'Original position' %}</th>
      <th>{% trans 'Information' %}</th>
    </tr>
  </thead>

  <tbody>
    {% for value in values %}
      <tr class=\"noclick\">
        <td>{{ value['Log_name'] }}</td>
        <td class=\"text-end\">{{ value['Pos'] }}</td>
        <td>{{ value['Event_type'] }}</td>
        <td class=\"text-end\">{{ value['Server_id'] }}</td>
        <td class=\"text-end\">
          {{- value['Orig_log_pos'] is defined ? value['Orig_log_pos'] : value['End_log_pos'] -}}
        </td>
        <td>{{ format_sql(value['Info'], not is_full_query) }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "server/binlog/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/binlog/index.twig");
    }
}
