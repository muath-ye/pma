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

/* database/structure/body_for_table_summary.twig */
class __TwigTemplate_d9348db12acff28663af4c3b87353cc1 extends Template
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
        echo "<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        ";
        // line 5
        ob_start();
        // line 6
echo _ngettext("%s table", "%s tables", abs((isset($context["num_tables"]) || array_key_exists("num_tables", $context) ? $context["num_tables"] : (function () { throw new RuntimeError('Variable "num_tables" does not exist.', 6, $this->source); })())));
        $context["num_tables_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, twig_sprintf((isset($context["num_tables_trans"]) || array_key_exists("num_tables_trans", $context) ? $context["num_tables_trans"] : (function () { throw new RuntimeError('Variable "num_tables_trans" does not exist.', 8, $this->source); })()), $this->env->getFunction('format_number')->getCallable()((isset($context["num_tables"]) || array_key_exists("num_tables", $context) ? $context["num_tables"] : (function () { throw new RuntimeError('Variable "num_tables" does not exist.', 8, $this->source); })()), 0)), "html", null, true);
        echo "
    </th>
    ";
        // line 10
        if ((isset($context["server_replica_status"]) || array_key_exists("server_replica_status", $context) ? $context["server_replica_status"] : (function () { throw new RuntimeError('Variable "server_replica_status" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <th>";
echo _gettext("Replication");
            echo "</th>
    ";
        }
        // line 13
        echo "    ";
        $context["sum_colspan"] = (((isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 13, $this->source); })())) ? (4) : (7));
        // line 14
        echo "    ";
        if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 14, $this->source); })()) == 0)) {
            // line 15
            echo "        ";
            $context["sum_colspan"] = ((isset($context["sum_colspan"]) || array_key_exists("sum_colspan", $context) ? $context["sum_colspan"] : (function () { throw new RuntimeError('Variable "sum_colspan" does not exist.', 15, $this->source); })()) - 1);
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <th colspan=\"";
        echo twig_escape_filter($this->env, (isset($context["sum_colspan"]) || array_key_exists("sum_colspan", $context) ? $context["sum_colspan"] : (function () { throw new RuntimeError('Variable "sum_colspan" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"d-print-none\">";
echo _gettext("Sum");
        echo "</th>
    ";
        // line 18
        $context["row_count_sum"] = $this->env->getFunction('format_number')->getCallable()((isset($context["sum_entries"]) || array_key_exists("sum_entries", $context) ? $context["sum_entries"] : (function () { throw new RuntimeError('Variable "sum_entries" does not exist.', 18, $this->source); })()), 0);
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        $context["row_sum_url"] = [];
        // line 21
        echo "    ";
        if (array_key_exists("approx_rows", $context)) {
            // line 22
            echo "        ";
            $context["row_sum_url"] = ["ajax_request" => true, "db" =>             // line 24
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 24, $this->source); })()), "real_row_count_all" => "true"];
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if ((isset($context["approx_rows"]) || array_key_exists("approx_rows", $context) ? $context["approx_rows"] : (function () { throw new RuntimeError('Variable "approx_rows" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "        ";
            ob_start();
            // line 30
            echo "<a href=\"";
            echo $this->env->getFunction('url')->getCallable()("/database/structure/real-row-count", (isset($context["row_sum_url"]) || array_key_exists("row_sum_url", $context) ? $context["row_sum_url"] : (function () { throw new RuntimeError('Variable "row_sum_url" does not exist.', 30, $this->source); })()));
            echo "\" class=\"ajax row_count_sum\">~";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["row_count_sum"]) || array_key_exists("row_count_sum", $context) ? $context["row_count_sum"] : (function () { throw new RuntimeError('Variable "row_count_sum" does not exist.', 31, $this->source); })()), "html", null, true);
            // line 32
            echo "</a>";
            $context["cell_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        ";
            $context["cell_text"] = (isset($context["row_count_sum"]) || array_key_exists("row_count_sum", $context) ? $context["row_count_sum"] : (function () { throw new RuntimeError('Variable "row_count_sum" does not exist.', 35, $this->source); })());
            // line 36
            echo "    ";
        }
        // line 37
        echo "    <th class=\"value tbl_rows font-monospace text-end\">";
        echo twig_escape_filter($this->env, (isset($context["cell_text"]) || array_key_exists("cell_text", $context) ? $context["cell_text"] : (function () { throw new RuntimeError('Variable "cell_text" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</th>
    ";
        // line 38
        if ( !((isset($context["properties_num_columns"]) || array_key_exists("properties_num_columns", $context) ? $context["properties_num_columns"] : (function () { throw new RuntimeError('Variable "properties_num_columns" does not exist.', 38, $this->source); })()) > 1)) {
            // line 39
            echo "        <th class=\"text-center\">
            <dfn title=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("%s is the default storage engine on this MySQL server."), (isset($context["default_storage_engine"]) || array_key_exists("default_storage_engine", $context) ? $context["default_storage_engine"] : (function () { throw new RuntimeError('Variable "default_storage_engine" does not exist.', 40, $this->source); })())), "html", null, true);
            echo "\">
                ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["default_storage_engine"]) || array_key_exists("default_storage_engine", $context) ? $context["default_storage_engine"] : (function () { throw new RuntimeError('Variable "default_storage_engine" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "
            </dfn>
        </th>
        <th>
            ";
            // line 45
            if ( !twig_test_empty((isset($context["database_collation"]) || array_key_exists("database_collation", $context) ? $context["database_collation"] : (function () { throw new RuntimeError('Variable "database_collation" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "                <dfn title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["database_collation"]) || array_key_exists("database_collation", $context) ? $context["database_collation"] : (function () { throw new RuntimeError('Variable "database_collation" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
                echo " (";
echo _gettext("Default");
                echo ")\">
                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["database_collation"]) || array_key_exists("database_collation", $context) ? $context["database_collation"] : (function () { throw new RuntimeError('Variable "database_collation" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "
                </dfn>
            ";
            }
            // line 50
            echo "        </th>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if ((isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "        ";
            $context["sum"] = $this->env->getFunction('format_byte_down')->getCallable()((isset($context["sum_size"]) || array_key_exists("sum_size", $context) ? $context["sum_size"] : (function () { throw new RuntimeError('Variable "sum_size" does not exist.', 54, $this->source); })()), 3, 1);
            // line 55
            echo "        ";
            $context["sum_formatted"] = twig_get_attribute($this->env, $this->source, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 55, $this->source); })()), 0, [], "array", false, false, false, 55);
            // line 56
            echo "        ";
            $context["sum_unit"] = twig_get_attribute($this->env, $this->source, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 56, $this->source); })()), 1, [], "array", false, false, false, 56);
            // line 57
            echo "        <th class=\"value tbl_size font-monospace text-end\">";
            echo twig_escape_filter($this->env, (isset($context["sum_formatted"]) || array_key_exists("sum_formatted", $context) ? $context["sum_formatted"] : (function () { throw new RuntimeError('Variable "sum_formatted" does not exist.', 57, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["sum_unit"]) || array_key_exists("sum_unit", $context) ? $context["sum_unit"] : (function () { throw new RuntimeError('Variable "sum_unit" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "</th>

        ";
            // line 59
            $context["overhead"] = $this->env->getFunction('format_byte_down')->getCallable()((isset($context["overhead_size"]) || array_key_exists("overhead_size", $context) ? $context["overhead_size"] : (function () { throw new RuntimeError('Variable "overhead_size" does not exist.', 59, $this->source); })()), 3, 1);
            // line 60
            echo "        ";
            $context["overhead_formatted"] = twig_get_attribute($this->env, $this->source, (isset($context["overhead"]) || array_key_exists("overhead", $context) ? $context["overhead"] : (function () { throw new RuntimeError('Variable "overhead" does not exist.', 60, $this->source); })()), 0, [], "array", false, false, false, 60);
            // line 61
            echo "        ";
            $context["overhead_unit"] = twig_get_attribute($this->env, $this->source, (isset($context["overhead"]) || array_key_exists("overhead", $context) ? $context["overhead"] : (function () { throw new RuntimeError('Variable "overhead" does not exist.', 61, $this->source); })()), 1, [], "array", false, false, false, 61);
            // line 62
            echo "        <th class=\"value tbl_overhead font-monospace text-end\">";
            echo twig_escape_filter($this->env, (isset($context["overhead_formatted"]) || array_key_exists("overhead_formatted", $context) ? $context["overhead_formatted"] : (function () { throw new RuntimeError('Variable "overhead_formatted" does not exist.', 62, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["overhead_unit"]) || array_key_exists("overhead_unit", $context) ? $context["overhead_unit"] : (function () { throw new RuntimeError('Variable "overhead_unit" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "</th>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if ((isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 65, $this->source); })())) {
            // line 66
            echo "        <th>";
            echo twig_escape_filter($this->env, (isset($context["database_charset"]) || array_key_exists("database_charset", $context) ? $context["database_charset"] : (function () { throw new RuntimeError('Variable "database_charset" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "</th>
    ";
        }
        // line 68
        echo "    ";
        if ((isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "        <th></th>
    ";
        }
        // line 71
        echo "    ";
        if ((isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 71, $this->source); })())) {
            // line 72
            echo "        <th class=\"value tbl_creation font-monospace text-end\">
            ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["create_time_all"]) || array_key_exists("create_time_all", $context) ? $context["create_time_all"] : (function () { throw new RuntimeError('Variable "create_time_all" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "
        </th>
    ";
        }
        // line 76
        echo "    ";
        if ((isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        <th class=\"value tbl_last_update font-monospace text-end\">
            ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["update_time_all"]) || array_key_exists("update_time_all", $context) ? $context["update_time_all"] : (function () { throw new RuntimeError('Variable "update_time_all" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "
        </th>
    ";
        }
        // line 81
        echo "    ";
        if ((isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 81, $this->source); })())) {
            // line 82
            echo "        <th class=\"value tbl_last_check font-monospace text-end\">
            ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["check_time_all"]) || array_key_exists("check_time_all", $context) ? $context["check_time_all"] : (function () { throw new RuntimeError('Variable "check_time_all" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "
        </th>
    ";
        }
        // line 86
        echo "</tr>
</tfoot>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/body_for_table_summary.twig";
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
        return array (  254 => 86,  248 => 83,  245 => 82,  242 => 81,  236 => 78,  233 => 77,  230 => 76,  224 => 73,  221 => 72,  218 => 71,  214 => 69,  211 => 68,  205 => 66,  203 => 65,  200 => 64,  192 => 62,  189 => 61,  186 => 60,  184 => 59,  176 => 57,  173 => 56,  170 => 55,  167 => 54,  165 => 53,  162 => 52,  158 => 50,  152 => 47,  145 => 46,  143 => 45,  136 => 41,  132 => 40,  129 => 39,  127 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  110 => 32,  108 => 31,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  93 => 24,  91 => 22,  88 => 21,  85 => 20,  83 => 19,  81 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  56 => 11,  54 => 10,  48 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        {% set num_tables_trans -%}
            {% trans %}%s table{% plural num_tables %}%s tables{% endtrans %}
        {%- endset %}
        {{ num_tables_trans|format(format_number(num_tables, 0)) }}
    </th>
    {% if server_replica_status %}
        <th>{% trans 'Replication' %}</th>
    {% endif %}
    {% set sum_colspan = db_is_system_schema ? 4 : 7 %}
    {% if num_favorite_tables == 0 %}
        {% set sum_colspan = sum_colspan - 1 %}
    {% endif %}
    <th colspan=\"{{ sum_colspan }}\" class=\"d-print-none\">{% trans 'Sum' %}</th>
    {% set row_count_sum = format_number(sum_entries, 0) %}
    {# If a table shows approximate rows count, display update-all-real-count anchor. #}
    {% set row_sum_url = [] %}
    {% if approx_rows is defined %}
        {% set row_sum_url = {
            'ajax_request': true,
            'db': db,
            'real_row_count_all': 'true'
        } %}
    {% endif %}
    {% if approx_rows %}
        {% set cell_text -%}
            <a href=\"{{ url('/database/structure/real-row-count', row_sum_url) }}\" class=\"ajax row_count_sum\">~
                {{- row_count_sum -}}
            </a>
        {%- endset %}
    {% else %}
        {% set cell_text = row_count_sum %}
    {% endif %}
    <th class=\"value tbl_rows font-monospace text-end\">{{ cell_text }}</th>
    {% if not (properties_num_columns > 1) %}
        <th class=\"text-center\">
            <dfn title=\"{{ '%s is the default storage engine on this MySQL server.'|trans|format(default_storage_engine) }}\">
                {{ default_storage_engine }}
            </dfn>
        </th>
        <th>
            {% if database_collation is not empty %}
                <dfn title=\"{{ database_collation.description }} ({% trans 'Default' %})\">
                    {{ database_collation.name }}
                </dfn>
            {% endif %}
        </th>
    {% endif %}

    {% if is_show_stats %}
        {% set sum = format_byte_down(sum_size, 3, 1) %}
        {% set sum_formatted = sum[0] %}
        {% set sum_unit = sum[1] %}
        <th class=\"value tbl_size font-monospace text-end\">{{ sum_formatted }} {{ sum_unit }}</th>

        {% set overhead = format_byte_down(overhead_size, 3, 1) %}
        {% set overhead_formatted = overhead[0] %}
        {% set overhead_unit = overhead[1] %}
        <th class=\"value tbl_overhead font-monospace text-end\">{{ overhead_formatted }} {{ overhead_unit }}</th>
    {% endif %}

    {% if show_charset %}
        <th>{{ database_charset }}</th>
    {% endif %}
    {% if show_comment %}
        <th></th>
    {% endif %}
    {% if show_creation %}
        <th class=\"value tbl_creation font-monospace text-end\">
            {{ create_time_all }}
        </th>
    {% endif %}
    {% if show_last_update %}
        <th class=\"value tbl_last_update font-monospace text-end\">
            {{ update_time_all }}
        </th>
    {% endif %}
    {% if show_last_check %}
        <th class=\"value tbl_last_check font-monospace text-end\">
            {{ check_time_all }}
        </th>
    {% endif %}
</tr>
</tfoot>
", "database/structure/body_for_table_summary.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/body_for_table_summary.twig");
    }
}
