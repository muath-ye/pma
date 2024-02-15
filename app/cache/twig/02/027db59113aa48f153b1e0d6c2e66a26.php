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

/* database/structure/table_header.twig */
class __TwigTemplate_862dd177c3ab7c6c82c94683ee7d302e extends Template
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
        echo "<form method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/database/structure");
        echo "\" name=\"tablesForm\" id=\"tablesForm\">
";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        echo "
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover table-sm w-auto data\">
    <thead>
        <tr>
            <th class=\"d-print-none\"></th>
            <th>";
        // line 8
        echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Table"), "table");
        echo "</th>
            ";
        // line 9
        if ((isset($context["replication"]) || array_key_exists("replication", $context) ? $context["replication"] : (function () { throw new RuntimeError('Variable "replication" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "                <th>";
echo _gettext("Replication");
            echo "</th>
            ";
        }
        // line 12
        echo "
            ";
        // line 13
        if ((isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                ";
            $context["action_colspan"] = 3;
            // line 15
            echo "            ";
        } else {
            // line 16
            echo "                ";
            $context["action_colspan"] = 6;
            // line 17
            echo "            ";
        }
        // line 18
        echo "            ";
        if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 18, $this->source); })()) > 0)) {
            // line 19
            echo "                ";
            $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 19, $this->source); })()) + 1);
            // line 20
            echo "            ";
        }
        // line 21
        echo "            <th colspan=\"";
        echo twig_escape_filter($this->env, (isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" class=\"d-print-none\">
                ";
        // line 22
echo _gettext("Action");
        // line 23
        echo "            </th>
            ";
        // line 25
        echo "            <th>
                ";
        // line 26
        echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Rows"), "records", "DESC");
        echo "
                ";
        // line 27
        echo $this->env->getFunction('show_hint')->getCallable()($this->env->getFilter('sanitize')->getCallable()(_gettext("May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].")));
        echo "
            </th>
            ";
        // line 29
        if ( !((isset($context["properties_num_columns"]) || array_key_exists("properties_num_columns", $context) ? $context["properties_num_columns"] : (function () { throw new RuntimeError('Variable "properties_num_columns" does not exist.', 29, $this->source); })()) > 1)) {
            // line 30
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Type"), "type");
            echo "</th>
                <th>";
            // line 31
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Collation"), "collation");
            echo "</th>
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                ";
            // line 36
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Size"), "size", "DESC");
            echo "</th>
                ";
            // line 38
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Overhead"), "overhead", "DESC");
            echo "</th>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if ((isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Charset"), "charset");
            echo "</th>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if ((isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Comment"), "comment");
            echo "</th>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if ((isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 49, $this->source); })())) {
            // line 50
            echo "                ";
            // line 51
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Creation"), "creation", "DESC");
            echo "</th>
            ";
        }
        // line 53
        echo "
            ";
        // line 54
        if ((isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                ";
            // line 56
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Last update"), "last_update", "DESC");
            echo "</th>
            ";
        }
        // line 58
        echo "
            ";
        // line 59
        if ((isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "                ";
            // line 61
            echo "                <th>";
            echo $this->env->getFunction('sortable_table_header')->getCallable()(_gettext("Last check"), "last_check", "DESC");
            echo "</th>
            ";
        }
        // line 63
        echo "        </tr>
    </thead>
    <tbody>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["structure_table_rows"]) || array_key_exists("structure_table_rows", $context) ? $context["structure_table_rows"] : (function () { throw new RuntimeError('Variable "structure_table_rows" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["structure_table_row"]) {
            // line 67
            echo "        ";
            $this->loadTemplate("database/structure/structure_table_row.twig", "database/structure/table_header.twig", 67)->display(twig_to_array($context["structure_table_row"]));
            // line 68
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure_table_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </tbody>
    ";
        // line 70
        if ((isset($context["body_for_table_summary"]) || array_key_exists("body_for_table_summary", $context) ? $context["body_for_table_summary"] : (function () { throw new RuntimeError('Variable "body_for_table_summary" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "        ";
            $this->loadTemplate("database/structure/body_for_table_summary.twig", "database/structure/table_header.twig", 71)->display(twig_to_array((isset($context["body_for_table_summary"]) || array_key_exists("body_for_table_summary", $context) ? $context["body_for_table_summary"] : (function () { throw new RuntimeError('Variable "body_for_table_summary" does not exist.', 71, $this->source); })())));
            // line 72
            echo "    ";
        }
        // line 73
        echo "</table>
</div>
";
        // line 75
        if ((isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 75, $this->source); })())) {
            // line 76
            echo "  ";
            $this->loadTemplate("database/structure/check_all_tables.twig", "database/structure/table_header.twig", 76)->display(twig_to_array((isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 76, $this->source); })())));
        }
        // line 78
        echo "</form>
";
        // line 79
        if ((isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 79, $this->source); })())) {
            // line 80
            echo "  ";
            $this->loadTemplate("database/structure/bulk_action_modal.twig", "database/structure/table_header.twig", 80)->display(twig_to_array((isset($context["check_all_tables"]) || array_key_exists("check_all_tables", $context) ? $context["check_all_tables"] : (function () { throw new RuntimeError('Variable "check_all_tables" does not exist.', 80, $this->source); })())));
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/table_header.twig";
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
        return array (  246 => 80,  244 => 79,  241 => 78,  237 => 76,  235 => 75,  231 => 73,  228 => 72,  225 => 71,  223 => 70,  220 => 69,  214 => 68,  211 => 67,  207 => 66,  202 => 63,  196 => 61,  194 => 60,  192 => 59,  189 => 58,  183 => 56,  181 => 55,  179 => 54,  176 => 53,  170 => 51,  168 => 50,  166 => 49,  163 => 48,  157 => 46,  155 => 45,  152 => 44,  146 => 42,  144 => 41,  141 => 40,  135 => 38,  130 => 36,  128 => 35,  126 => 34,  123 => 33,  118 => 31,  113 => 30,  111 => 29,  106 => 27,  102 => 26,  99 => 25,  96 => 23,  94 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  57 => 10,  55 => 9,  51 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ url('/database/structure') }}\" name=\"tablesForm\" id=\"tablesForm\">
{{ get_hidden_inputs(db) }}
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover table-sm w-auto data\">
    <thead>
        <tr>
            <th class=\"d-print-none\"></th>
            <th>{{ sortable_table_header('Table'|trans, 'table') }}</th>
            {% if replication %}
                <th>{% trans 'Replication' %}</th>
            {% endif %}

            {% if db_is_system_schema %}
                {% set action_colspan = 3 %}
            {% else %}
                {% set action_colspan = 6 %}
            {% endif %}
            {% if num_favorite_tables > 0 %}
                {% set action_colspan = action_colspan + 1 %}
            {% endif %}
            <th colspan=\"{{ action_colspan }}\" class=\"d-print-none\">
                {% trans 'Action' %}
            </th>
            {# larger values are more interesting so default sort order is DESC #}
            <th>
                {{ sortable_table_header('Rows'|trans, 'records', 'DESC') }}
                {{ show_hint('May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].'|trans|sanitize) }}
            </th>
            {% if not (properties_num_columns > 1) %}
                <th>{{ sortable_table_header('Type'|trans, 'type') }}</th>
                <th>{{ sortable_table_header('Collation'|trans, 'collation') }}</th>
            {% endif %}

            {% if is_show_stats %}
                {# larger values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header('Size'|trans, 'size', 'DESC') }}</th>
                {# larger values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header('Overhead'|trans, 'overhead', 'DESC') }}</th>
            {% endif %}

            {% if show_charset %}
                <th>{{ sortable_table_header('Charset'|trans, 'charset') }}</th>
            {% endif %}

            {% if show_comment %}
                <th>{{ sortable_table_header('Comment'|trans, 'comment') }}</th>
            {% endif %}

            {% if show_creation %}
                {# newer values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header('Creation'|trans, 'creation', 'DESC') }}</th>
            {% endif %}

            {% if show_last_update %}
                {# newer values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header('Last update'|trans, 'last_update', 'DESC') }}</th>
            {% endif %}

            {% if show_last_check %}
                {# newer values are more interesting so default sort order is DESC #}
                <th>{{ sortable_table_header('Last check'|trans, 'last_check', 'DESC') }}</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
    {% for structure_table_row in structure_table_rows %}
        {% include 'database/structure/structure_table_row.twig' with structure_table_row only %}
    {% endfor %}
    </tbody>
    {% if body_for_table_summary %}
        {% include 'database/structure/body_for_table_summary.twig' with body_for_table_summary only %}
    {% endif %}
</table>
</div>
{% if check_all_tables %}
  {% include 'database/structure/check_all_tables.twig' with check_all_tables only %}
{% endif %}
</form>
{% if check_all_tables %}
  {% include 'database/structure/bulk_action_modal.twig' with check_all_tables only %}
{% endif %}
", "database/structure/table_header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/table_header.twig");
    }
}
