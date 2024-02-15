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

/* table/insert/continue_insertion_form.twig */
class __TwigTemplate_95e38f9ad58ec8f0cd60417c9b96d31f extends Template
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
        echo "<form id=\"continueForm\" method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/change");
        echo "\" name=\"continueForm\" class=\"row g-3\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 2, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"err_url\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["err_url"]) || array_key_exists("err_url", $context) ? $context["err_url"] : (function () { throw new RuntimeError('Variable "err_url" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">

  ";
        // line 7
        if ((isset($context["has_where_clause"]) || array_key_exists("has_where_clause", $context) ? $context["has_where_clause"] : (function () { throw new RuntimeError('Variable "has_where_clause" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["where_clause_array"]) || array_key_exists("where_clause_array", $context) ? $context["where_clause_array"] : (function () { throw new RuntimeError('Variable "where_clause_array" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["key_id"] => $context["where_clause"]) {
                // line 9
                echo "      <input type=\"hidden\" name=\"where_clause[";
                echo twig_escape_filter($this->env, $context["key_id"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, twig_trim_filter($context["where_clause"]), "html", null, true);
                echo "\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key_id'], $context['where_clause'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  ";
        }
        // line 12
        echo "
  <div class=\"col-auto\">
    <label class=\"form-label\" for=\"insert_rows\">";
        // line 14
        echo twig_escape_filter($this->env, _gettext("Amount of rows to insert"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["insert_rows_default"]) || array_key_exists("insert_rows_default", $context) ? $context["insert_rows_default"] : (function () { throw new RuntimeError('Variable "insert_rows_default" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" min=\"1\">
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/continue_insertion_form.twig";
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
        return array (  88 => 15,  84 => 14,  80 => 12,  77 => 11,  66 => 9,  61 => 8,  59 => 7,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"continueForm\" method=\"post\" action=\"{{ url('/table/change') }}\" name=\"continueForm\" class=\"row g-3\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"err_url\" value=\"{{ err_url }}\">
  <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">

  {% if has_where_clause %}
    {% for key_id, where_clause in where_clause_array %}
      <input type=\"hidden\" name=\"where_clause[{{ key_id }}]\" value=\"{{ where_clause|trim }}\">
    {% endfor %}
  {% endif %}

  <div class=\"col-auto\">
    <label class=\"form-label\" for=\"insert_rows\">{{ 'Amount of rows to insert'|trans }}</label>
    <input class=\"form-control\" type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"{{ insert_rows_default }}\" min=\"1\">
  </div>
</form>
", "table/insert/continue_insertion_form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/continue_insertion_form.twig");
    }
}
