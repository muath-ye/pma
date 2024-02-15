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

/* server/status/processes/list.twig */
class __TwigTemplate_f55bd6cfed4637716ad22dde7eda4773 extends Template
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
        echo "<div class=\"responsivetable row\">
  <table id=\"tableprocesslist\" class=\"table table-striped table-hover sortable w-auto\">
    <thead>
      <tr>
        <th>";
        // line 5
echo _gettext("Processes");
        echo "</th>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "          <th scope=\"col\">
            <a href=\"";
            // line 8
            echo $this->env->getFunction('url')->getCallable()("/server/status/processes");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(twig_get_attribute($this->env, $this->source, $context["column"], "params", [], "any", false, false, false, 8), "", false);
            echo "\" class=\"sortlink\">
              ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
              ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["column"], "is_sorted", [], "any", false, false, false, 10)) {
                // line 11
                echo "                <img class=\"icon ic_s_desc soimg\" alt=\"";
                // line 12
echo _gettext("Descending");
                echo "\" src=\"themes/dot.gif\" style=\"display: ";
                echo (((twig_get_attribute($this->env, $this->source, $context["column"], "sort_order", [], "any", false, false, false, 12) == "DESC")) ? ("none") : ("inline"));
                echo "\">
                <img class=\"icon ic_s_asc soimg hide\" alt=\"";
                // line 14
echo _gettext("Ascending");
                echo "\" src=\"themes/dot.gif\" style=\"display: ";
                echo (((twig_get_attribute($this->env, $this->source, $context["column"], "sort_order", [], "any", false, false, false, 14) == "DESC")) ? ("inline") : ("none"));
                echo "\">
              ";
            }
            // line 16
            echo "            </a>
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["column"], "has_full_query", [], "any", false, false, false, 17)) {
                // line 18
                echo "              <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/status/processes");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()((isset($context["refresh_params"]) || array_key_exists("refresh_params", $context) ? $context["refresh_params"] : (function () { throw new RuntimeError('Variable "refresh_params" does not exist.', 18, $this->source); })()), "", false);
                echo "\">
                ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["column"], "is_full", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                  ";
                    echo $this->env->getFunction('get_image')->getCallable()("s_partialtext", _gettext("Truncate shown queries"), ["class" => "icon_fulltext"]);
                    // line 24
                    echo "
                ";
                } else {
                    // line 26
                    echo "                  ";
                    echo $this->env->getFunction('get_image')->getCallable()("s_fulltext", _gettext("Show full queries"), ["class" => "icon_fulltext"]);
                    // line 30
                    echo "
                ";
                }
                // line 32
                echo "              </a>
            ";
            }
            // line 34
            echo "          </th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </tr>
    </thead>

    <tbody>
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "        <tr>
          <td>
            <a class=\"ajax kill_process\" href=\"";
            // line 43
            echo $this->env->getFunction('url')->getCallable()(("/server/status/processes/kill/" . twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 43)));
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["kill" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 43)], "", false);
            echo "\">
              ";
            // line 44
echo _gettext("Kill");
            // line 45
            echo "            </a>
          </td>
          <td class=\"font-monospace text-end\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 49) != "system user")) {
                // line 50
                echo "              <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                 // line 51
$context["row"], "user", [], "any", false, false, false, 51), "hostname" => twig_get_attribute($this->env, $this->source,                 // line 52
$context["row"], "host", [], "any", false, false, false, 52), "dbname" => twig_get_attribute($this->env, $this->source,                 // line 53
$context["row"], "db", [], "any", false, false, false, 53), "tablename" => "", "routinename" => ""]);
                // line 56
                echo "\">
                ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 57), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 60
                echo "              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 60), "html", null, true);
                echo "
            ";
            }
            // line 62
            echo "          </td>
          <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "host", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "db", [], "any", false, false, false, 65) != "")) {
                // line 66
                echo "              <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/structure", ["db" => twig_get_attribute($this->env, $this->source,                 // line 67
$context["row"], "db", [], "any", false, false, false, 67)]);
                // line 68
                echo "\">
                ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "db", [], "any", false, false, false, 69), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 72
                echo "              <em>";
echo _gettext("None");
                echo "</em>
            ";
            }
            // line 74
            echo "          </td>
          <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "command", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
          <td class=\"font-monospace text-end\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
          <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "state", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
          ";
            // line 78
            if ((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 78, $this->source); })())) {
                // line 79
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
          ";
            }
            // line 81
            echo "          <td>";
            echo twig_get_attribute($this->env, $this->source, $context["row"], "info", [], "any", false, false, false, 81);
            echo "</td>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </tbody>
  </table>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/processes/list.twig";
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
        return array (  235 => 83,  226 => 81,  220 => 79,  218 => 78,  214 => 77,  210 => 76,  206 => 75,  203 => 74,  197 => 72,  191 => 69,  188 => 68,  186 => 67,  184 => 66,  182 => 65,  177 => 63,  174 => 62,  168 => 60,  162 => 57,  159 => 56,  157 => 53,  156 => 52,  155 => 51,  153 => 50,  151 => 49,  146 => 47,  142 => 45,  140 => 44,  134 => 43,  130 => 41,  126 => 40,  120 => 36,  113 => 34,  109 => 32,  105 => 30,  102 => 26,  98 => 24,  95 => 20,  93 => 19,  86 => 18,  84 => 17,  81 => 16,  74 => 14,  68 => 12,  66 => 11,  64 => 10,  60 => 9,  54 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"responsivetable row\">
  <table id=\"tableprocesslist\" class=\"table table-striped table-hover sortable w-auto\">
    <thead>
      <tr>
        <th>{% trans 'Processes' %}</th>
        {% for column in columns %}
          <th scope=\"col\">
            <a href=\"{{ url('/server/status/processes') }}\" data-post=\"{{ get_common(column.params, '', false) }}\" class=\"sortlink\">
              {{ column.name }}
              {% if column.is_sorted %}
                <img class=\"icon ic_s_desc soimg\" alt=\"
                  {%- trans 'Descending' %}\" src=\"themes/dot.gif\" style=\"display: {{ column.sort_order == 'DESC' ? 'none' : 'inline' }}\">
                <img class=\"icon ic_s_asc soimg hide\" alt=\"
                  {%- trans 'Ascending' %}\" src=\"themes/dot.gif\" style=\"display: {{ column.sort_order == 'DESC' ? 'inline' : 'none' }}\">
              {% endif %}
            </a>
            {% if column.has_full_query %}
              <a href=\"{{ url('/server/status/processes') }}\" data-post=\"{{ get_common(refresh_params, '', false) }}\">
                {% if column.is_full %}
                  {{ get_image(
                    's_partialtext',
                    'Truncate shown queries'|trans,
                    {'class': 'icon_fulltext'}
                  ) }}
                {% else %}
                  {{ get_image(
                    's_fulltext',
                    'Show full queries'|trans,
                    {'class': 'icon_fulltext'}
                  ) }}
                {% endif %}
              </a>
            {% endif %}
          </th>
        {% endfor %}
      </tr>
    </thead>

    <tbody>
      {% for row in rows %}
        <tr>
          <td>
            <a class=\"ajax kill_process\" href=\"{{ url('/server/status/processes/kill/' ~ row.id) }}\" data-post=\"{{ get_common({'kill': row.id}, '', false) }}\">
              {% trans 'Kill' %}
            </a>
          </td>
          <td class=\"font-monospace text-end\">{{ row.id }}</td>
          <td>
            {% if row.user != 'system user' %}
              <a href=\"{{ url('/server/privileges', {
                  'username': row.user,
                  'hostname': row.host,
                  'dbname': row.db,
                  'tablename': '',
                  'routinename': '',
                }) }}\">
                {{ row.user }}
              </a>
            {% else %}
              {{ row.user }}
            {% endif %}
          </td>
          <td>{{ row.host }}</td>
          <td>
            {% if row.db != '' %}
              <a href=\"{{ url('/database/structure', {
                  'db': row.db,
                }) }}\">
                {{ row.db }}
              </a>
            {% else %}
              <em>{% trans 'None' %}</em>
            {% endif %}
          </td>
          <td>{{ row.command }}</td>
          <td class=\"font-monospace text-end\">{{ row.time }}</td>
          <td>{{ row.state }}</td>
          {% if is_mariadb %}
            <td>{{ row.progress }}</td>
          {% endif %}
          <td>{{ row.info|raw }}</td>
      {% endfor %}
    </tbody>
  </table>
</div>
", "server/status/processes/list.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/processes/list.twig");
    }
}
