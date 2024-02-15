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

/* database/structure/structure_table_row.twig */
class __TwigTemplate_bceda2998e6de76a5f125f8d2bef6fe5 extends Template
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
        echo "<tr id=\"row_tbl_";
        echo twig_escape_filter($this->env, (isset($context["curr"]) || array_key_exists("curr", $context) ? $context["curr"] : (function () { throw new RuntimeError('Variable "curr" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"";
        echo (((isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 1, $this->source); })())) ? (" class=\"is_view\"") : (""));
        echo " data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 1, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 1)), "html", null, true);
        echo "\">
    <td class=\"text-center d-print-none\">
        <input type=\"checkbox\"
            name=\"selected_tbl[]\"
            class=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\"
            value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 6, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 6), "html", null, true);
        echo "\"
            id=\"checkbox_tbl_";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["curr"]) || array_key_exists("curr", $context) ? $context["curr"] : (function () { throw new RuntimeError('Variable "curr" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
    </td>
    <th>
        <a href=\"";
        // line 10
        echo $this->env->getFunction('url')->getCallable()("/sql", twig_array_merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 10, $this->source); })()), ["pos" => 0]));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["browse_table_label_title"]) || array_key_exists("browse_table_label_title", $context) ? $context["browse_table_label_title"] : (function () { throw new RuntimeError('Variable "browse_table_label_title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["browse_table_label_truename"]) || array_key_exists("browse_table_label_truename", $context) ? $context["browse_table_label_truename"] : (function () { throw new RuntimeError('Variable "browse_table_label_truename" does not exist.', 11, $this->source); })()), "html", null, true);
        // line 12
        echo "</a>
        ";
        // line 13
        echo (isset($context["tracking_icon"]) || array_key_exists("tracking_icon", $context) ? $context["tracking_icon"] : (function () { throw new RuntimeError('Variable "tracking_icon" does not exist.', 13, $this->source); })());
        echo "
    </th>
    ";
        // line 15
        if ((isset($context["server_replica_status"]) || array_key_exists("server_replica_status", $context) ? $context["server_replica_status"] : (function () { throw new RuntimeError('Variable "server_replica_status" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <td class=\"text-center\">
            ";
            // line 17
            echo (((isset($context["ignored"]) || array_key_exists("ignored", $context) ? $context["ignored"] : (function () { throw new RuntimeError('Variable "ignored" does not exist.', 17, $this->source); })())) ? ($this->env->getFunction('get_image')->getCallable()("s_cancel", _gettext("Not replicated"))) : (""));
            echo "
            ";
            // line 18
            echo (((isset($context["do"]) || array_key_exists("do", $context) ? $context["do"] : (function () { throw new RuntimeError('Variable "do" does not exist.', 18, $this->source); })())) ? ($this->env->getFunction('get_image')->getCallable()("s_success", _gettext("Replicated"))) : (""));
            echo "
        </td>
    ";
        }
        // line 21
        echo "
    ";
        // line 23
        echo "    ";
        if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 23, $this->source); })()) > 0)) {
            // line 24
            echo "        <td class=\"text-center d-print-none\">
            ";
            // line 26
            echo "            ";
            $context["fav_params"] = ["db" =>             // line 27
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 27, $this->source); })()), "ajax_request" => true, "favorite_table" => twig_get_attribute($this->env, $this->source,             // line 29
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 29, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 29), (((            // line 30
(isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 30, $this->source); })())) ? ("remove") : ("add")) . "_favorite") => true];
            // line 32
            echo "            ";
            $this->loadTemplate("database/structure/favorite_anchor.twig", "database/structure/structure_table_row.twig", 32)->display(twig_to_array(["table_name_hash" =>             // line 33
(isset($context["table_name_hash"]) || array_key_exists("table_name_hash", $context) ? $context["table_name_hash"] : (function () { throw new RuntimeError('Variable "table_name_hash" does not exist.', 33, $this->source); })()), "db_table_name_hash" =>             // line 34
(isset($context["db_table_name_hash"]) || array_key_exists("db_table_name_hash", $context) ? $context["db_table_name_hash"] : (function () { throw new RuntimeError('Variable "db_table_name_hash" does not exist.', 34, $this->source); })()), "fav_params" =>             // line 35
(isset($context["fav_params"]) || array_key_exists("fav_params", $context) ? $context["fav_params"] : (function () { throw new RuntimeError('Variable "fav_params" does not exist.', 35, $this->source); })()), "already_favorite" =>             // line 36
(isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 36, $this->source); })())]));
            // line 38
            echo "        </td>
    ";
        }
        // line 40
        echo "
    <td class=\"text-center d-print-none\">
        <a href=\"";
        // line 42
        echo $this->env->getFunction('url')->getCallable()("/sql", twig_array_merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 42, $this->source); })()), ["pos" => 0]));
        echo "\">
          ";
        // line 43
        echo (((isset($context["may_have_rows"]) || array_key_exists("may_have_rows", $context) ? $context["may_have_rows"] : (function () { throw new RuntimeError('Variable "may_have_rows" does not exist.', 43, $this->source); })())) ? ($this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse"))) : ($this->env->getFunction('get_icon')->getCallable()("bd_browse", _gettext("Browse"))));
        echo "
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a href=\"";
        // line 47
        echo $this->env->getFunction('url')->getCallable()("/table/structure", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 47, $this->source); })()));
        echo "\">
          ";
        // line 48
        echo $this->env->getFunction('get_icon')->getCallable()("b_props", _gettext("Structure"));
        echo "
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a href=\"";
        // line 52
        echo $this->env->getFunction('url')->getCallable()("/table/search", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 52, $this->source); })()));
        echo "\">
          ";
        // line 53
        echo (((isset($context["may_have_rows"]) || array_key_exists("may_have_rows", $context) ? $context["may_have_rows"] : (function () { throw new RuntimeError('Variable "may_have_rows" does not exist.', 53, $this->source); })())) ? ($this->env->getFunction('get_icon')->getCallable()("b_select", _gettext("Search"))) : ($this->env->getFunction('get_icon')->getCallable()("bd_select", _gettext("Search"))));
        echo "
        </a>
    </td>

    ";
        // line 57
        if ( !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "        <td class=\"insert_table text-center d-print-none\">
            <a href=\"";
            // line 59
            echo $this->env->getFunction('url')->getCallable()("/table/change", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 59, $this->source); })()));
            echo "\">";
            echo $this->env->getFunction('get_icon')->getCallable()("b_insrow", _gettext("Insert"));
            echo "</a>
        </td>
        ";
            // line 61
            if ((isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "            <td class=\"text-center d-print-none\">
                <a href=\"";
                // line 63
                echo $this->env->getFunction('url')->getCallable()("/view/create", ["db" =>                 // line 64
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 64, $this->source); })()), "table" => twig_get_attribute($this->env, $this->source,                 // line 65
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 65, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 65)]);
                // line 66
                echo "\">";
                echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
                echo "</a>
            </td>
        ";
            } else {
                // line 69
                echo "          <td class=\"text-center d-print-none\">
                <a class=\"truncate_table_anchor ajax\" href=\"";
                // line 70
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 70, $this->source); })()), ["sql_query" =>                 // line 71
(isset($context["empty_table_sql_query"]) || array_key_exists("empty_table_sql_query", $context) ? $context["empty_table_sql_query"] : (function () { throw new RuntimeError('Variable "empty_table_sql_query" does not exist.', 71, $this->source); })()), "message_to_show" =>                 // line 72
(isset($context["empty_table_message_to_show"]) || array_key_exists("empty_table_message_to_show", $context) ? $context["empty_table_message_to_show"] : (function () { throw new RuntimeError('Variable "empty_table_message_to_show" does not exist.', 72, $this->source); })())]), "");
                // line 73
                echo "\">
                  ";
                // line 74
                echo (((isset($context["may_have_rows"]) || array_key_exists("may_have_rows", $context) ? $context["may_have_rows"] : (function () { throw new RuntimeError('Variable "may_have_rows" does not exist.', 74, $this->source); })())) ? ($this->env->getFunction('get_icon')->getCallable()("b_empty", _gettext("Empty"))) : ($this->env->getFunction('get_icon')->getCallable()("bd_empty", _gettext("Empty"))));
                echo "
                </a>
          </td>
        ";
            }
            // line 78
            echo "        <td class=\"text-center d-print-none\">
            <a class=\"ajax drop_table_anchor";
            // line 80
            echo ((((isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 80, $this->source); })()) || (twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 80, $this->source); })()), "ENGINE", [], "array", false, false, false, 80) == null))) ? (" view") : (""));
            echo "\" href=\"";
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" data-post=\"";
            // line 81
            echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 81, $this->source); })()), ["reload" => 1, "purge" => 1, "sql_query" =>             // line 84
(isset($context["drop_query"]) || array_key_exists("drop_query", $context) ? $context["drop_query"] : (function () { throw new RuntimeError('Variable "drop_query" does not exist.', 84, $this->source); })()), "message_to_show" =>             // line 85
(isset($context["drop_message"]) || array_key_exists("drop_message", $context) ? $context["drop_message"] : (function () { throw new RuntimeError('Variable "drop_message" does not exist.', 85, $this->source); })())]), "");
            // line 86
            echo "\">
                ";
            // line 87
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
            echo "
            </a>
        </td>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, ($context["current_table"] ?? null), "TABLE_ROWS", [], "array", true, true, false, 92) && ((twig_get_attribute($this->env, $this->source,         // line 93
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 93, $this->source); })()), "ENGINE", [], "array", false, false, false, 93) != null) || (isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 93, $this->source); })())))) {
            // line 94
            echo "        ";
            // line 95
            echo "        ";
            $context["row_count"] = $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 95, $this->source); })()), "TABLE_ROWS", [], "array", false, false, false, 95), 0);
            // line 96
            echo "
        ";
            // line 99
            echo "        <td class=\"value tbl_rows font-monospace text-end\"
            data-table=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 100, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 100), "html", null, true);
            echo "\">
            ";
            // line 101
            if ((isset($context["approx_rows"]) || array_key_exists("approx_rows", $context) ? $context["approx_rows"] : (function () { throw new RuntimeError('Variable "approx_rows" does not exist.', 101, $this->source); })())) {
                // line 102
                echo "                <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/structure/real-row-count", ["ajax_request" => true, "db" =>                 // line 104
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 104, $this->source); })()), "table" => twig_get_attribute($this->env, $this->source,                 // line 105
(isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 105, $this->source); })()), "TABLE_NAME", [], "array", false, false, false, 105)]);
                // line 106
                echo "\" class=\"ajax real_row_count\">
                    <bdi>
                        ~";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new RuntimeError('Variable "row_count" does not exist.', 108, $this->source); })()), "html", null, true);
                echo "
                    </bdi>
                </a>
            ";
            } else {
                // line 112
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["row_count"]) || array_key_exists("row_count", $context) ? $context["row_count"] : (function () { throw new RuntimeError('Variable "row_count" does not exist.', 112, $this->source); })()), "html", null, true);
                echo "
            ";
            }
            // line 114
            echo "            ";
            echo (isset($context["show_superscript"]) || array_key_exists("show_superscript", $context) ? $context["show_superscript"] : (function () { throw new RuntimeError('Variable "show_superscript" does not exist.', 114, $this->source); })());
            echo "
        </td>

        ";
            // line 117
            if ( !((isset($context["properties_num_columns"]) || array_key_exists("properties_num_columns", $context) ? $context["properties_num_columns"] : (function () { throw new RuntimeError('Variable "properties_num_columns" does not exist.', 117, $this->source); })()) > 1)) {
                // line 118
                echo "            <td class=\"text-nowrap\">
                ";
                // line 119
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 119, $this->source); })()), "ENGINE", [], "array", false, false, false, 119))) {
                    // line 120
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 120, $this->source); })()), "ENGINE", [], "array", false, false, false, 120), "html", null, true);
                    echo "
                ";
                } elseif (                // line 121
(isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 121, $this->source); })())) {
                    // line 122
                    echo "                    ";
echo _gettext("View");
                    // line 123
                    echo "                ";
                }
                // line 124
                echo "            </td>
            ";
                // line 125
                if ((twig_length_filter($this->env, (isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 125, $this->source); })())) > 0)) {
                    // line 126
                    echo "                <td class=\"text-nowrap\">
                    ";
                    // line 127
                    echo (isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 127, $this->source); })());
                    echo "
                </td>
            ";
                }
                // line 130
                echo "        ";
            }
            // line 131
            echo "
        ";
            // line 132
            if ((isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 132, $this->source); })())) {
                // line 133
                echo "            <td class=\"value tbl_size font-monospace text-end\">
                <a href=\"";
                // line 134
                echo $this->env->getFunction('url')->getCallable()("/table/structure", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 134, $this->source); })()));
                echo "#showusage\">
                    <span>";
                // line 135
                echo twig_escape_filter($this->env, (isset($context["formatted_size"]) || array_key_exists("formatted_size", $context) ? $context["formatted_size"] : (function () { throw new RuntimeError('Variable "formatted_size" does not exist.', 135, $this->source); })()), "html", null, true);
                echo "</span>&nbsp;<span class=\"unit\">";
                echo twig_escape_filter($this->env, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 135, $this->source); })()), "html", null, true);
                echo "</span>
                </a>
            </td>
            <td class=\"value tbl_overhead font-monospace text-end\">
                ";
                // line 139
                echo (isset($context["overhead"]) || array_key_exists("overhead", $context) ? $context["overhead"] : (function () { throw new RuntimeError('Variable "overhead" does not exist.', 139, $this->source); })());
                echo "
            </td>
        ";
            }
            // line 142
            echo "
        ";
            // line 143
            if ((isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 143, $this->source); })())) {
                // line 144
                echo "            <td class=\"text-nowrap\">
                ";
                // line 145
                if ((twig_length_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 145, $this->source); })())) > 0)) {
                    // line 146
                    echo "                    ";
                    echo (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 146, $this->source); })());
                    echo "
                ";
                }
                // line 148
                echo "            </td>
        ";
            }
            // line 150
            echo "
        ";
            // line 151
            if ((isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 151, $this->source); })())) {
                // line 152
                echo "            ";
                $context["comment"] = twig_get_attribute($this->env, $this->source, (isset($context["current_table"]) || array_key_exists("current_table", $context) ? $context["current_table"] : (function () { throw new RuntimeError('Variable "current_table" does not exist.', 152, $this->source); })()), "Comment", [], "array", false, false, false, 152);
                // line 153
                echo "            <td>
                ";
                // line 154
                if ((twig_length_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 154, $this->source); })())) > (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 154, $this->source); })()))) {
                    // line 155
                    echo "                    <abbr title=\"";
                    echo twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 155, $this->source); })()), "html", null, true);
                    echo "\">
                        ";
                    // line 156
                    echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 156, $this->source); })()), 0, (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 156, $this->source); })())), "html", null, true);
                    echo "
                        ...
                    </abbr>
                ";
                } else {
                    // line 160
                    echo "                    ";
                    echo twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 160, $this->source); })()), "html", null, true);
                    echo "
                ";
                }
                // line 162
                echo "            </td>
        ";
            }
            // line 164
            echo "
        ";
            // line 165
            if ((isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 165, $this->source); })())) {
                // line 166
                echo "            <td class=\"value tbl_creation font-monospace text-end\">
                ";
                // line 167
                echo twig_escape_filter($this->env, (isset($context["create_time"]) || array_key_exists("create_time", $context) ? $context["create_time"] : (function () { throw new RuntimeError('Variable "create_time" does not exist.', 167, $this->source); })()), "html", null, true);
                echo "
            </td>
        ";
            }
            // line 170
            echo "
        ";
            // line 171
            if ((isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 171, $this->source); })())) {
                // line 172
                echo "            <td class=\"value tbl_last_update font-monospace text-end\">
                ";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["update_time"]) || array_key_exists("update_time", $context) ? $context["update_time"] : (function () { throw new RuntimeError('Variable "update_time" does not exist.', 173, $this->source); })()), "html", null, true);
                echo "
            </td>
        ";
            }
            // line 176
            echo "
        ";
            // line 177
            if ((isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 177, $this->source); })())) {
                // line 178
                echo "            <td class=\"value tbl_last_check font-monospace text-end\">
                ";
                // line 179
                echo twig_escape_filter($this->env, (isset($context["check_time"]) || array_key_exists("check_time", $context) ? $context["check_time"] : (function () { throw new RuntimeError('Variable "check_time" does not exist.', 179, $this->source); })()), "html", null, true);
                echo "
            </td>
        ";
            }
            // line 182
            echo "
    ";
        } elseif (        // line 183
(isset($context["table_is_view"]) || array_key_exists("table_is_view", $context) ? $context["table_is_view"] : (function () { throw new RuntimeError('Variable "table_is_view" does not exist.', 183, $this->source); })())) {
            // line 184
            echo "        <td class=\"value tbl_rows font-monospace text-end\">-</td>
        <td class=\"text-nowrap\">
            ";
            // line 186
echo _gettext("View");
            // line 187
            echo "        </td>
        <td class=\"text-nowrap\">---</td>
        ";
            // line 189
            if ((isset($context["is_show_stats"]) || array_key_exists("is_show_stats", $context) ? $context["is_show_stats"] : (function () { throw new RuntimeError('Variable "is_show_stats" does not exist.', 189, $this->source); })())) {
                // line 190
                echo "            <td class=\"value tbl_size font-monospace text-end\">-</td>
            <td class=\"value tbl_overhead font-monospace text-end\">-</td>
        ";
            }
            // line 193
            echo "        ";
            if ((isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 193, $this->source); })())) {
                // line 194
                echo "            <td></td>
        ";
            }
            // line 196
            echo "        ";
            if ((isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 196, $this->source); })())) {
                // line 197
                echo "            <td></td>
        ";
            }
            // line 199
            echo "        ";
            if ((isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 199, $this->source); })())) {
                // line 200
                echo "            <td class=\"value tbl_creation font-monospace text-end\">-</td>
        ";
            }
            // line 202
            echo "        ";
            if ((isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 202, $this->source); })())) {
                // line 203
                echo "            <td class=\"value tbl_last_update font-monospace text-end\">-</td>
        ";
            }
            // line 205
            echo "        ";
            if ((isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 205, $this->source); })())) {
                // line 206
                echo "            <td class=\"value tbl_last_check font-monospace text-end\">-</td>
        ";
            }
            // line 208
            echo "
    ";
        } else {
            // line 210
            echo "
        ";
            // line 211
            if ((isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 211, $this->source); })())) {
                // line 212
                echo "            ";
                $context["action_colspan"] = 2;
                // line 213
                echo "        ";
            } else {
                // line 214
                echo "            ";
                $context["action_colspan"] = 4;
                // line 215
                echo "        ";
            }
            // line 216
            echo "        ";
            if (((isset($context["num_favorite_tables"]) || array_key_exists("num_favorite_tables", $context) ? $context["num_favorite_tables"] : (function () { throw new RuntimeError('Variable "num_favorite_tables" does not exist.', 216, $this->source); })()) > 0)) {
                // line 217
                echo "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 217, $this->source); })()) + 1);
                // line 218
                echo "        ";
            }
            // line 219
            echo "        ";
            if ((isset($context["show_charset"]) || array_key_exists("show_charset", $context) ? $context["show_charset"] : (function () { throw new RuntimeError('Variable "show_charset" does not exist.', 219, $this->source); })())) {
                // line 220
                echo "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 220, $this->source); })()) + 1);
                // line 221
                echo "        ";
            }
            // line 222
            echo "        ";
            if ((isset($context["show_comment"]) || array_key_exists("show_comment", $context) ? $context["show_comment"] : (function () { throw new RuntimeError('Variable "show_comment" does not exist.', 222, $this->source); })())) {
                // line 223
                echo "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 223, $this->source); })()) + 1);
                // line 224
                echo "        ";
            }
            // line 225
            echo "        ";
            if ((isset($context["show_creation"]) || array_key_exists("show_creation", $context) ? $context["show_creation"] : (function () { throw new RuntimeError('Variable "show_creation" does not exist.', 225, $this->source); })())) {
                // line 226
                echo "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 226, $this->source); })()) + 1);
                // line 227
                echo "        ";
            }
            // line 228
            echo "        ";
            if ((isset($context["show_last_update"]) || array_key_exists("show_last_update", $context) ? $context["show_last_update"] : (function () { throw new RuntimeError('Variable "show_last_update" does not exist.', 228, $this->source); })())) {
                // line 229
                echo "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 229, $this->source); })()) + 1);
                // line 230
                echo "        ";
            }
            // line 231
            echo "        ";
            if ((isset($context["show_last_check"]) || array_key_exists("show_last_check", $context) ? $context["show_last_check"] : (function () { throw new RuntimeError('Variable "show_last_check" does not exist.', 231, $this->source); })())) {
                // line 232
                echo "            ";
                $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 232, $this->source); })()) + 1);
                // line 233
                echo "        ";
            }
            // line 234
            echo "
        <td colspan=\"";
            // line 235
            echo twig_escape_filter($this->env, (isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 235, $this->source); })()), "html", null, true);
            echo "\"
            class=\"text-center\">
            ";
            // line 237
echo _gettext("in use");
            // line 238
            echo "        </td>
    ";
        }
        // line 240
        echo "</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/structure_table_row.twig";
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
        return array (  584 => 240,  580 => 238,  578 => 237,  573 => 235,  570 => 234,  567 => 233,  564 => 232,  561 => 231,  558 => 230,  555 => 229,  552 => 228,  549 => 227,  546 => 226,  543 => 225,  540 => 224,  537 => 223,  534 => 222,  531 => 221,  528 => 220,  525 => 219,  522 => 218,  519 => 217,  516 => 216,  513 => 215,  510 => 214,  507 => 213,  504 => 212,  502 => 211,  499 => 210,  495 => 208,  491 => 206,  488 => 205,  484 => 203,  481 => 202,  477 => 200,  474 => 199,  470 => 197,  467 => 196,  463 => 194,  460 => 193,  455 => 190,  453 => 189,  449 => 187,  447 => 186,  443 => 184,  441 => 183,  438 => 182,  432 => 179,  429 => 178,  427 => 177,  424 => 176,  418 => 173,  415 => 172,  413 => 171,  410 => 170,  404 => 167,  401 => 166,  399 => 165,  396 => 164,  392 => 162,  386 => 160,  379 => 156,  374 => 155,  372 => 154,  369 => 153,  366 => 152,  364 => 151,  361 => 150,  357 => 148,  351 => 146,  349 => 145,  346 => 144,  344 => 143,  341 => 142,  335 => 139,  326 => 135,  322 => 134,  319 => 133,  317 => 132,  314 => 131,  311 => 130,  305 => 127,  302 => 126,  300 => 125,  297 => 124,  294 => 123,  291 => 122,  289 => 121,  284 => 120,  282 => 119,  279 => 118,  277 => 117,  270 => 114,  264 => 112,  257 => 108,  253 => 106,  251 => 105,  250 => 104,  248 => 102,  246 => 101,  242 => 100,  239 => 99,  236 => 96,  233 => 95,  231 => 94,  229 => 93,  228 => 92,  225 => 91,  218 => 87,  215 => 86,  213 => 85,  212 => 84,  211 => 81,  206 => 80,  203 => 78,  196 => 74,  193 => 73,  191 => 72,  190 => 71,  187 => 70,  184 => 69,  177 => 66,  175 => 65,  174 => 64,  173 => 63,  170 => 62,  168 => 61,  161 => 59,  158 => 58,  156 => 57,  149 => 53,  145 => 52,  138 => 48,  134 => 47,  127 => 43,  123 => 42,  119 => 40,  115 => 38,  113 => 36,  112 => 35,  111 => 34,  110 => 33,  108 => 32,  106 => 30,  105 => 29,  104 => 27,  102 => 26,  99 => 24,  96 => 23,  93 => 21,  87 => 18,  83 => 17,  80 => 16,  78 => 15,  73 => 13,  70 => 12,  68 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr id=\"row_tbl_{{ curr }}\"{{ table_is_view ? ' class=\"is_view\"' }} data-filter-row=\"{{ current_table['TABLE_NAME']|upper }}\">
    <td class=\"text-center d-print-none\">
        <input type=\"checkbox\"
            name=\"selected_tbl[]\"
            class=\"{{ input_class }}\"
            value=\"{{ current_table['TABLE_NAME'] }}\"
            id=\"checkbox_tbl_{{ curr }}\">
    </td>
    <th>
        <a href=\"{{ url('/sql', table_url_params|merge({'pos': 0})) }}\" title=\"{{ browse_table_label_title }}\">
            {{- browse_table_label_truename -}}
        </a>
        {{ tracking_icon|raw }}
    </th>
    {% if server_replica_status %}
        <td class=\"text-center\">
            {{ ignored ? get_image('s_cancel', 'Not replicated'|trans) }}
            {{ do ? get_image('s_success', 'Replicated'|trans) }}
        </td>
    {% endif %}

    {# Favorite table anchor #}
    {% if num_favorite_tables > 0 %}
        <td class=\"text-center d-print-none\">
            {# Check if current table is already in favorite list #}
            {% set fav_params = {
                'db': db,
                'ajax_request': true,
                'favorite_table': current_table['TABLE_NAME'],
                ((already_favorite ? 'remove' : 'add') ~ '_favorite'): true
            } %}
            {% include 'database/structure/favorite_anchor.twig' with {
                'table_name_hash': table_name_hash,
                'db_table_name_hash': db_table_name_hash,
                'fav_params': fav_params,
                'already_favorite': already_favorite,
            } only %}
        </td>
    {% endif %}

    <td class=\"text-center d-print-none\">
        <a href=\"{{ url('/sql', table_url_params|merge({'pos': 0})) }}\">
          {{ may_have_rows ? get_icon('b_browse', 'Browse'|trans) : get_icon('bd_browse', 'Browse'|trans) }}
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a href=\"{{ url('/table/structure', table_url_params) }}\">
          {{ get_icon('b_props', 'Structure'|trans) }}
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a href=\"{{ url('/table/search', table_url_params) }}\">
          {{ may_have_rows ? get_icon('b_select', 'Search'|trans) : get_icon('bd_select', 'Search'|trans) }}
        </a>
    </td>

    {% if not db_is_system_schema %}
        <td class=\"insert_table text-center d-print-none\">
            <a href=\"{{ url('/table/change', table_url_params) }}\">{{ get_icon('b_insrow', 'Insert'|trans) }}</a>
        </td>
        {% if table_is_view %}
            <td class=\"text-center d-print-none\">
                <a href=\"{{ url('/view/create', {
                    'db': db,
                    'table': current_table['TABLE_NAME']
                }) }}\">{{ get_icon('b_edit', 'Edit'|trans) }}</a>
            </td>
        {% else %}
          <td class=\"text-center d-print-none\">
                <a class=\"truncate_table_anchor ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(table_url_params|merge({
                  'sql_query': empty_table_sql_query,
                  'message_to_show': empty_table_message_to_show
                }), '') }}\">
                  {{ may_have_rows ? get_icon('b_empty', 'Empty'|trans) : get_icon('bd_empty', 'Empty'|trans) }}
                </a>
          </td>
        {% endif %}
        <td class=\"text-center d-print-none\">
            <a class=\"ajax drop_table_anchor
                {{- table_is_view or current_table['ENGINE'] == null ? ' view' }}\" href=\"{{ url('/sql') }}\" data-post=\"
                {{- get_common(table_url_params|merge({
                  'reload': 1,
                  'purge': 1,
                  'sql_query': drop_query,
                  'message_to_show': drop_message
                }), '') }}\">
                {{ get_icon('b_drop', 'Drop'|trans) }}
            </a>
        </td>
    {% endif %}

    {% if current_table['TABLE_ROWS'] is defined
        and (current_table['ENGINE'] != null or table_is_view) %}
        {# Get the row count #}
        {% set row_count = format_number(current_table['TABLE_ROWS'], 0) %}

        {# Content to be appended into 'tbl_rows' cell.
        If row count is approximate, display it as an anchor to get real count. #}
        <td class=\"value tbl_rows font-monospace text-end\"
            data-table=\"{{ current_table['TABLE_NAME'] }}\">
            {% if approx_rows %}
                <a href=\"{{ url('/database/structure/real-row-count', {
                    'ajax_request': true,
                    'db': db,
                    'table': current_table['TABLE_NAME']
                }) }}\" class=\"ajax real_row_count\">
                    <bdi>
                        ~{{ row_count }}
                    </bdi>
                </a>
            {% else %}
                {{ row_count }}
            {% endif %}
            {{ show_superscript|raw }}
        </td>

        {% if not (properties_num_columns > 1) %}
            <td class=\"text-nowrap\">
                {% if current_table['ENGINE'] is not empty %}
                    {{ current_table['ENGINE'] }}
                {% elseif table_is_view %}
                    {% trans 'View' %}
                {% endif %}
            </td>
            {% if collation|length > 0 %}
                <td class=\"text-nowrap\">
                    {{ collation|raw }}
                </td>
            {% endif %}
        {% endif %}

        {% if is_show_stats %}
            <td class=\"value tbl_size font-monospace text-end\">
                <a href=\"{{ url('/table/structure', table_url_params) }}#showusage\">
                    <span>{{ formatted_size }}</span>&nbsp;<span class=\"unit\">{{ unit }}</span>
                </a>
            </td>
            <td class=\"value tbl_overhead font-monospace text-end\">
                {{ overhead|raw }}
            </td>
        {% endif %}

        {% if show_charset %}
            <td class=\"text-nowrap\">
                {% if charset|length > 0 %}
                    {{ charset|raw }}
                {% endif %}
            </td>
        {% endif %}

        {% if show_comment %}
            {% set comment = current_table['Comment'] %}
            <td>
                {% if comment|length > limit_chars %}
                    <abbr title=\"{{ comment }}\">
                        {{ comment|slice(0, limit_chars) }}
                        ...
                    </abbr>
                {% else %}
                    {{ comment }}
                {% endif %}
            </td>
        {% endif %}

        {% if show_creation %}
            <td class=\"value tbl_creation font-monospace text-end\">
                {{ create_time }}
            </td>
        {% endif %}

        {% if show_last_update %}
            <td class=\"value tbl_last_update font-monospace text-end\">
                {{ update_time }}
            </td>
        {% endif %}

        {% if show_last_check %}
            <td class=\"value tbl_last_check font-monospace text-end\">
                {{ check_time }}
            </td>
        {% endif %}

    {% elseif table_is_view %}
        <td class=\"value tbl_rows font-monospace text-end\">-</td>
        <td class=\"text-nowrap\">
            {% trans 'View' %}
        </td>
        <td class=\"text-nowrap\">---</td>
        {% if is_show_stats %}
            <td class=\"value tbl_size font-monospace text-end\">-</td>
            <td class=\"value tbl_overhead font-monospace text-end\">-</td>
        {% endif %}
        {% if show_charset %}
            <td></td>
        {% endif %}
        {% if show_comment %}
            <td></td>
        {% endif %}
        {% if show_creation %}
            <td class=\"value tbl_creation font-monospace text-end\">-</td>
        {% endif %}
        {% if show_last_update %}
            <td class=\"value tbl_last_update font-monospace text-end\">-</td>
        {% endif %}
        {% if show_last_check %}
            <td class=\"value tbl_last_check font-monospace text-end\">-</td>
        {% endif %}

    {% else %}

        {% if db_is_system_schema %}
            {% set action_colspan = 2 %}
        {% else %}
            {% set action_colspan = 4 %}
        {% endif %}
        {% if num_favorite_tables > 0 %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_charset %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_comment %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_creation %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_last_update %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}
        {% if show_last_check %}
            {% set action_colspan = action_colspan + 1 %}
        {% endif %}

        <td colspan=\"{{ action_colspan }}\"
            class=\"text-center\">
            {% trans 'in use' %}
        </td>
    {% endif %}
</tr>
", "database/structure/structure_table_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/structure_table_row.twig");
    }
}
