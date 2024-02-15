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

/* server/status/queries/index.twig */
class __TwigTemplate_4136f858ab1f722a4dec7504a73f3652 extends Template
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
        $context["active"] = "queries";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/queries/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container\">
    ";
        // line 5
        if ( !(isset($context["is_data_loaded"]) || array_key_exists("is_data_loaded", $context) ? $context["is_data_loaded"] : (function () { throw new RuntimeError('Variable "is_data_loaded" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "      ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view query statistics."));
            echo "
    ";
        } else {
            // line 8
            echo "      <h3>
        ";
            // line 9
// l10n: Questions is the name of a MySQL Status variable
echo _gettext("Questions since startup:");
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 9, $this->source); })()), "total", [], "any", false, false, false, 9), 0), "html", null, true);
            echo "
        ";
            // line 10
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("server-status-variables", false, null, null, "statvar_Questions");
            echo "
      </h3>

      <div class=\"row\">
        <ul>
          <li>ø ";
            // line 15
echo _gettext("per hour:");
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()), "per_hour", [], "any", false, false, false, 15), 0), "html", null, true);
            echo "</li>
          <li>ø ";
            // line 16
echo _gettext("per minute:");
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "per_minute", [], "any", false, false, false, 16), 0), "html", null, true);
            echo "</li>
          ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 17, $this->source); })()), "per_second", [], "any", false, false, false, 17) >= 1)) {
                // line 18
                echo "            <li>ø ";
echo _gettext("per second:");
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "per_second", [], "any", false, false, false, 18), 0), "html", null, true);
                echo "</li>
          ";
            }
            // line 20
            echo "        </ul>
      </div>

      <div class=\"row\">
        <table id=\"serverStatusQueriesDetails\" class=\"table table-striped table-hover col\">
          <colgroup>
            <col class=\"namecol\">
            <col class=\"valuecol\" span=\"3\">
          </colgroup>

          <thead>
            <tr>
              <th scope=\"col\">";
            // line 32
echo _gettext("Statements");
            echo "</th>
              <th class=\"text-end\" scope=\"col\">";
            // line 33
// l10n: # = Amount of queries
echo _gettext("#");
            echo "</th>
              <th class=\"text-end\" scope=\"col\">";
            // line 34
echo _gettext("ø per hour");
            echo "</th>
              <th class=\"text-end\" scope=\"col\">%</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["queries"]) || array_key_exists("queries", $context) ? $context["queries"] : (function () { throw new RuntimeError('Variable "queries" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 41
                echo "              <tr>
                <th scope=\"row\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</th>
                <td class=\"font-monospace text-end\">";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["query"], "value", [], "any", false, false, false, 43), 5, 0, true), "html", null, true);
                echo "</td>
                <td class=\"font-monospace text-end\">";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["query"], "per_hour", [], "any", false, false, false, 44), 4, 1, true), "html", null, true);
                echo "</td>
                <td class=\"font-monospace text-end\">";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["query"], "percentage", [], "any", false, false, false, 45), 0, 2), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </tbody>
        </table>

        <div class=\"col\">
          <canvas id=\"query-statistics-chart\" data-chart-data=\"";
            // line 52
            echo twig_escape_filter($this->env, json_encode((isset($context["chart_data"]) || array_key_exists("chart_data", $context) ? $context["chart_data"] : (function () { throw new RuntimeError('Variable "chart_data" does not exist.', 52, $this->source); })())), "html_attr");
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, _gettext("Pie chart with the most frequent statements."), "html", null, true);
            echo "\" role=\"img\"></canvas>
        </div>
      </div>
    ";
        }
        // line 56
        echo "  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/queries/index.twig";
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
        return array (  179 => 56,  170 => 52,  164 => 48,  155 => 45,  151 => 44,  147 => 43,  143 => 42,  140 => 41,  136 => 40,  127 => 34,  122 => 33,  118 => 32,  104 => 20,  96 => 18,  94 => 17,  88 => 16,  82 => 15,  74 => 10,  67 => 9,  64 => 8,  58 => 6,  56 => 5,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'queries' %}
{% block content %}
  <div class=\"container\">
    {% if not is_data_loaded %}
      {{ 'Not enough privilege to view query statistics.'|trans|error }}
    {% else %}
      <h3>
        {% trans %}Questions since startup:{% notes %}Questions is the name of a MySQL Status variable{% endtrans %} {{ format_number(stats.total, 0) }}
        {{ show_mysql_docu('server-status-variables', false, null, null, 'statvar_Questions') }}
      </h3>

      <div class=\"row\">
        <ul>
          <li>ø {% trans 'per hour:' %} {{ format_number(stats.per_hour, 0) }}</li>
          <li>ø {% trans 'per minute:' %} {{ format_number(stats.per_minute, 0) }}</li>
          {% if stats.per_second >= 1 %}
            <li>ø {% trans 'per second:' %} {{ format_number(stats.per_second, 0) }}</li>
          {% endif %}
        </ul>
      </div>

      <div class=\"row\">
        <table id=\"serverStatusQueriesDetails\" class=\"table table-striped table-hover col\">
          <colgroup>
            <col class=\"namecol\">
            <col class=\"valuecol\" span=\"3\">
          </colgroup>

          <thead>
            <tr>
              <th scope=\"col\">{% trans 'Statements' %}</th>
              <th class=\"text-end\" scope=\"col\">{% trans %}#{% notes %}# = Amount of queries{% endtrans %}</th>
              <th class=\"text-end\" scope=\"col\">{% trans 'ø per hour' %}</th>
              <th class=\"text-end\" scope=\"col\">%</th>
            </tr>
          </thead>

          <tbody>
            {% for query in queries %}
              <tr>
                <th scope=\"row\">{{ query.name }}</th>
                <td class=\"font-monospace text-end\">{{ format_number(query.value, 5, 0, true) }}</td>
                <td class=\"font-monospace text-end\">{{ format_number(query.per_hour, 4, 1, true) }}</td>
                <td class=\"font-monospace text-end\">{{ format_number(query.percentage, 0, 2) }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>

        <div class=\"col\">
          <canvas id=\"query-statistics-chart\" data-chart-data=\"{{ chart_data|json_encode|e('html_attr') }}\" aria-label=\"{{ 'Pie chart with the most frequent statements.'|trans }}\" role=\"img\"></canvas>
        </div>
      </div>
    {% endif %}
  </div>
{% endblock %}
", "server/status/queries/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/queries/index.twig");
    }
}
