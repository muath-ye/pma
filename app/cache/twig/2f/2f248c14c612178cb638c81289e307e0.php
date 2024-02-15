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

/* sql/no_results_returned.twig */
class __TwigTemplate_14ac638daeae48529ca40f3c6da96ce6 extends Template
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
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 1, $this->source); })());
        echo "

";
        // line 3
        echo (isset($context["sql_query_results_table"]) || array_key_exists("sql_query_results_table", $context) ? $context["sql_query_results_table"] : (function () { throw new RuntimeError('Variable "sql_query_results_table" does not exist.', 3, $this->source); })());
        echo "

";
        // line 5
        echo (isset($context["profiling_chart"]) || array_key_exists("profiling_chart", $context) ? $context["profiling_chart"] : (function () { throw new RuntimeError('Variable "profiling_chart" does not exist.', 5, $this->source); })());
        echo "

";
        // line 7
        if ( !(isset($context["is_procedure"]) || array_key_exists("is_procedure", $context) ? $context["is_procedure"] : (function () { throw new RuntimeError('Variable "is_procedure" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
            // line 9
echo _gettext("Query results operations");
            echo "</div>
    <div class=\"card-body\">
      <span>
        ";
            // line 12
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/view/create"), ["db" =>             // line 14
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 14, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "printview" => "1", "sql_query" => (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 14, $this->source); })())], $this->env->getFunction('get_icon')->getCallable()("b_view_add", _gettext("Create view"), true), ["class" => "create_view ajax btn"]);
            // line 17
            echo "
      </span>
    </div>
  </div>
";
        }
        // line 22
        echo "
";
        // line 23
        echo (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new RuntimeError('Variable "bookmark" does not exist.', 23, $this->source); })());
        echo "

";
        // line 25
        echo twig_include($this->env, $context, "modals/create_view.twig");
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/no_results_returned.twig";
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
        return array (  81 => 25,  76 => 23,  73 => 22,  66 => 17,  64 => 14,  63 => 12,  57 => 9,  54 => 8,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ message|raw }}

{{ sql_query_results_table|raw }}

{{ profiling_chart|raw }}

{% if not is_procedure %}
  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">{% trans 'Query results operations' %}</div>
    <div class=\"card-body\">
      <span>
        {{ link_or_button(
          url('/view/create'),
          {'db': db, 'table': table, 'printview': '1', 'sql_query': sql_query},
          get_icon('b_view_add', 'Create view'|trans, true),
          {'class': 'create_view ajax btn'}
        ) }}
      </span>
    </div>
  </div>
{% endif %}

{{ bookmark|raw }}

{{ include('modals/create_view.twig') }}
", "sql/no_results_returned.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/no_results_returned.twig");
    }
}
