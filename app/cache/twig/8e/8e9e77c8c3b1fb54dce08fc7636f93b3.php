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

/* table/structure/display_structure.twig */
class __TwigTemplate_925df80dcd8076af69851323964f8a03 extends Template
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
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("table/page_with_secondary_tabs.twig", "table/structure/display_structure.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1 class=\"d-none d-print-block\">";
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h1>
<form method=\"post\" action=\"";
        // line 4
        echo $this->env->getFunction('url')->getCallable()("/table/structure");
        echo "\" name=\"fieldsForm\" id=\"fieldsForm\">
    ";
        // line 5
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 5, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()));
        echo "
    <input type=\"hidden\" name=\"table_type\" value=";
        // line 7
        if ((isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "\"information_schema\"";
        } elseif (        // line 9
(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "\"view\"";
        } else {
            // line 12
            echo "\"table\"";
        }
        // line 13
        echo ">
    <div class=\"table-responsive-md\">
    <table id=\"tablestructure\" class=\"table table-striped table-hover w-auto align-middle\">
        ";
        // line 17
        echo "        <thead>
            <tr>
                <th class=\"d-print-none\"></th>
                <th>#</th>
                <th>";
        // line 21
echo _gettext("Name");
        echo "</th>
                <th>";
        // line 22
echo _gettext("Type");
        echo "</th>
                <th>";
        // line 23
echo _gettext("Collation");
        echo "</th>
                <th>";
        // line 24
echo _gettext("Attributes");
        echo "</th>
                <th>";
        // line 25
echo _gettext("Null");
        echo "</th>
                <th>";
        // line 26
echo _gettext("Default");
        echo "</th>
                ";
        // line 27
        if ((isset($context["show_column_comments"]) || array_key_exists("show_column_comments", $context) ? $context["show_column_comments"] : (function () { throw new RuntimeError('Variable "show_column_comments" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "<th>";
echo _gettext("Comments");
            echo "</th>";
        }
        // line 30
        echo "                <th>";
echo _gettext("Extra");
        echo "</th>
                ";
        // line 32
        echo "                ";
        if (( !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 32, $this->source); })()) &&  !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                    <th colspan=\"";
            echo (($this->env->getFunction('show_icons')->getCallable()("ActionLinksMode")) ? ("8") : ("9"));
            // line 34
            echo "\" class=\"action d-print-none\">";
echo _gettext("Action");
            echo "</th>
                ";
        }
        // line 36
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        echo "        ";
        $context["rownum"] = 0;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 42
            echo "            ";
            $context["rownum"] = ((isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 42, $this->source); })()) + 1);
            // line 43
            echo "
            ";
            // line 44
            $context["extracted_columnspec"] = twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspecs"]) || array_key_exists("extracted_columnspecs", $context) ? $context["extracted_columnspecs"] : (function () { throw new RuntimeError('Variable "extracted_columnspecs" does not exist.', 44, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 44, $this->source); })()), [], "array", false, false, false, 44);
            // line 45
            echo "            ";
            $context["field_name"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 45));
            // line 46
            echo "            ";
            // line 47
            echo "            ";
            $context["comments"] = twig_get_attribute($this->env, $this->source, (isset($context["row_comments"]) || array_key_exists("row_comments", $context) ? $context["row_comments"] : (function () { throw new RuntimeError('Variable "row_comments" does not exist.', 47, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 47, $this->source); })()), [], "array", false, false, false, 47);
            // line 48
            echo "            ";
            // line 49
            echo "
        <tr>
            <td class=\"text-center d-print-none\">
                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 52), "html", null, true);
            echo "\" id=\"checkbox_row_";
            echo twig_escape_filter($this->env, (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\">
            </td>
            <td class=\"text-end\">";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "</td>
            <th class=\"text-nowrap\">
                <label for=\"checkbox_row_";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["displayed_fields"] ?? null), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 57, $this->source); })()), [], "array", false, true, false, 57), "comment", [], "any", true, true, false, 57)) {
                // line 58
                echo "                        <span class=\"commented_column\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["displayed_fields"]) || array_key_exists("displayed_fields", $context) ? $context["displayed_fields"] : (function () { throw new RuntimeError('Variable "displayed_fields" does not exist.', 58, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 58, $this->source); })()), [], "array", false, false, false, 58), "comment", [], "any", false, false, false, 58), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["displayed_fields"]) || array_key_exists("displayed_fields", $context) ? $context["displayed_fields"] : (function () { throw new RuntimeError('Variable "displayed_fields" does not exist.', 58, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 58, $this->source); })()), [], "array", false, false, false, 58), "text", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 60
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["displayed_fields"]) || array_key_exists("displayed_fields", $context) ? $context["displayed_fields"] : (function () { throw new RuntimeError('Variable "displayed_fields" does not exist.', 60, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60), "text", [], "any", false, false, false, 60), "html", null, true);
                echo "
                    ";
            }
            // line 62
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["displayed_fields"]) || array_key_exists("displayed_fields", $context) ? $context["displayed_fields"] : (function () { throw new RuntimeError('Variable "displayed_fields" does not exist.', 62, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 62, $this->source); })()), [], "array", false, false, false, 62), "icon", [], "any", false, false, false, 62);
            echo "
                </label>
            </th>
            <td";
            // line 65
            echo (((("set" != twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 65, $this->source); })()), "type", [], "array", false, false, false, 65)) && ("enum" != twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 65, $this->source); })()), "type", [], "array", false, false, false, 65)))) ? (" class=\"text-nowrap\"") : (""));
            echo ">
                <bdo dir=\"ltr\" lang=\"en\">
                    ";
            // line 67
            echo twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 67, $this->source); })()), "displayed_type", [], "array", false, false, false, 67);
            echo "
                    ";
            // line 68
            if (((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 68, $this->source); })()), "columnCommentsFeature", [], "any", false, false, false, 68)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 68, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 68))) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 68, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 69
($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 69), [], "array", false, true, false, 69), "mimetype", [], "array", true, true, false, 69))) {
                // line 70
                echo "                        <br>";
echo _gettext("Media type:");
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 70, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 70), [], "array", false, false, false, 70), "mimetype", [], "array", false, false, false, 70), ["_" => "/"])), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </bdo>
            </td>
            <td>
            ";
            // line 75
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 75))) {
                // line 76
                echo "                <dfn title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 76, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "description", [], "any", false, false, false, 76), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 76, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
                echo "</dfn>
            ";
            }
            // line 78
            echo "            </td>
            <td class=\"column_attribute text-nowrap\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 79, $this->source); })()), (isset($context["rownum"]) || array_key_exists("rownum", $context) ? $context["rownum"] : (function () { throw new RuntimeError('Variable "rownum" does not exist.', 79, $this->source); })()), [], "array", false, false, false, 79), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "isNull", [], "any", false, false, false, 80)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
            <td class=\"text-nowrap\">";
            // line 82
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 82))) {
                // line 83
                if ((twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 83, $this->source); })()), "type", [], "array", false, false, false, 83) == "bit")) {
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getFilter('convert_bit_default_value')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 84)), "html", null, true);
                } else {
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 86), "html", null, true);
                }
            } elseif (twig_get_attribute($this->env, $this->source,             // line 88
$context["row"], "isNull", [], "any", false, false, false, 88)) {
                // line 89
                echo "<em>NULL</em>";
            } else {
                // line 91
                echo "<em>";
echo _pgettext("None for default", "None");
                echo "</em>";
            }
            // line 93
            echo "</td>
            ";
            // line 94
            if ((isset($context["show_column_comments"]) || array_key_exists("show_column_comments", $context) ? $context["show_column_comments"] : (function () { throw new RuntimeError('Variable "show_column_comments" does not exist.', 94, $this->source); })())) {
                // line 95
                echo "                <td>
                    ";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 96, $this->source); })()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 99
            echo "            <td class=\"text-nowrap\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "extra", [], "any", false, false, false, 99)), "html", null, true);
            echo "</td>
            ";
            // line 100
            if (( !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 100, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 100, $this->source); })()))) {
                // line 101
                echo "                <td class=\"edit text-center d-print-none\">
                    <a class=\"change_column_anchor ajax\" href=\"";
                // line 102
                echo $this->env->getFunction('url')->getCallable()("/table/structure/change", ["db" =>                 // line 103
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 103, $this->source); })()), "table" =>                 // line 104
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 104, $this->source); })()), "field" => twig_get_attribute($this->env, $this->source,                 // line 105
$context["row"], "field", [], "any", false, false, false, 105), "change_column" => 1]);
                // line 107
                echo "\">
                      ";
                // line 108
                echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Change"));
                echo "
                    </a>
                </td>
                <td class=\"drop text-center d-print-none\">
                    <a class=\"drop_column_anchor ajax\" href=\"";
                // line 112
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 113
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 113, $this->source); })()), "table" =>                 // line 114
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 114, $this->source); })()), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                // line 115
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 115, $this->source); })()))) . " DROP ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 115))) . ";"), "dropped_column" => twig_get_attribute($this->env, $this->source,                 // line 116
$context["row"], "field", [], "any", false, false, false, 116), "purge" => true, "message_to_show" => twig_sprintf(_gettext("Column %s has been dropped."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 118
$context["row"], "field", [], "any", false, false, false, 118)))], "", false);
                // line 119
                echo "\">
                      ";
                // line 120
                echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
                echo "
                    </a>
                </td>
            ";
            }
            // line 124
            echo "
            ";
            // line 125
            if (( !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 125, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 125, $this->source); })()))) {
                // line 126
                echo "                ";
                $context["type"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 126, $this->source); })()), "print_type", [], "array", false, false, false, 126))) ? (twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 126, $this->source); })()), "print_type", [], "array", false, false, false, 126)) : (""));
                // line 127
                echo "                <td class=\"d-print-none\">
                  ";
                // line 128
                if ((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 128, $this->source); })())) {
                    // line 129
                    echo "                  <div class=\"dropdown\">
                    <button class=\"btn btn-link p-0 dropdown-toggle\" type=\"button\" id=\"moreActionsButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                    // line 130
echo _gettext("More");
                    echo "</button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"moreActionsButton\">
                  ";
                } else {
                    // line 133
                    echo "                    <ul class=\"nav\">
                  ";
                }
                // line 135
                echo "                        <li class=\"";
                echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 135, $this->source); })())) ? ("nav-item ") : (""));
                echo "primary text-nowrap\">
                          ";
                // line 136
                if ((((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 136, $this->source); })()) == "text") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 136, $this->source); })()) == "blob")) || ((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 136, $this->source); })()) == "ARCHIVE")) || ((isset($context["primary"]) || array_key_exists("primary", $context) ? $context["primary"] : (function () { throw new RuntimeError('Variable "primary" does not exist.', 136, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["primary"]) || array_key_exists("primary", $context) ? $context["primary"] : (function () { throw new RuntimeError('Variable "primary" does not exist.', 136, $this->source); })()), "hasColumn", [(isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 136, $this->source); })())], "method", false, false, false, 136)))) {
                    // line 137
                    echo "                            <span class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 137, $this->source); })())) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_primary", _gettext("Primary"));
                    echo "</span>
                          ";
                } else {
                    // line 139
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 139, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_primary_key_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 140
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 140, $this->source); })()), "table" =>                     // line 141
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 141, $this->source); })()), "sql_query" => ((((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 142
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 142, $this->source); })()))) . (((isset($context["primary"]) || array_key_exists("primary", $context) ? $context["primary"] : (function () { throw new RuntimeError('Variable "primary" does not exist.', 142, $this->source); })())) ? (" DROP PRIMARY KEY,") : (""))) . " ADD PRIMARY KEY(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 142))) . ");"), "message_to_show" => twig_sprintf(_gettext("A primary key has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 143
$context["row"], "field", [], "any", false, false, false, 143)))], "", false);
                    // line 144
                    echo "\">
                              ";
                    // line 145
                    echo $this->env->getFunction('get_icon')->getCallable()("b_primary", _gettext("Primary"));
                    echo "
                            </a>
                          ";
                }
                // line 148
                echo "                        </li>

                        <li class=\"";
                // line 150
                echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 150, $this->source); })())) ? ("nav-item ") : (""));
                echo "add_unique unique text-nowrap\">
                          ";
                // line 151
                if ((((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 151, $this->source); })()) == "text") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 151, $this->source); })()) == "blob")) || ((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 151, $this->source); })()) == "ARCHIVE")) || twig_in_filter((isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 151, $this->source); })()), (isset($context["columns_with_unique_index"]) || array_key_exists("columns_with_unique_index", $context) ? $context["columns_with_unique_index"] : (function () { throw new RuntimeError('Variable "columns_with_unique_index" does not exist.', 151, $this->source); })())))) {
                    // line 152
                    echo "                            <span class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 152, $this->source); })())) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_unique", _gettext("Unique"));
                    echo "</span>
                          ";
                } else {
                    // line 154
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 154, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_unique_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 155
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 155, $this->source); })()), "table" =>                     // line 156
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 156, $this->source); })()), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 157
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 157, $this->source); })()))) . " ADD UNIQUE(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 157))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 158
$context["row"], "field", [], "any", false, false, false, 158)))], "", false);
                    // line 159
                    echo "\">
                              ";
                    // line 160
                    echo $this->env->getFunction('get_icon')->getCallable()("b_unique", _gettext("Unique"));
                    echo "
                            </a>
                          ";
                }
                // line 163
                echo "                        </li>

                        <li class=\"";
                // line 165
                echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 165, $this->source); })())) ? ("nav-item ") : (""));
                echo "add_index text-nowrap\">
                          ";
                // line 166
                if (((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 166, $this->source); })()) == "text") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 166, $this->source); })()) == "blob")) || ((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 166, $this->source); })()) == "ARCHIVE"))) {
                    // line 167
                    echo "                            <span class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 167, $this->source); })())) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_index", _gettext("Index"));
                    echo "</span>
                          ";
                } else {
                    // line 169
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 169, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_index_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 170
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 170, $this->source); })()), "table" =>                     // line 171
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 171, $this->source); })()), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 172
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 172, $this->source); })()))) . " ADD INDEX(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 172))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 173
$context["row"], "field", [], "any", false, false, false, 173)))], "", false);
                    // line 174
                    echo "\">
                              ";
                    // line 175
                    echo $this->env->getFunction('get_icon')->getCallable()("b_index", _gettext("Index"));
                    echo "
                            </a>
                          ";
                }
                // line 178
                echo "                        </li>

                        ";
                // line 180
                $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
                // line 190
                echo "                        <li class=\"";
                echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 190, $this->source); })())) ? ("nav-item ") : (""));
                echo "spatial text-nowrap\">
                          ";
                // line 191
                if ((((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 191, $this->source); })()) == "text") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 191, $this->source); })()) == "blob")) || ((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 191, $this->source); })()) == "ARCHIVE")) || (!twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 191, $this->source); })()), (isset($context["spatial_types"]) || array_key_exists("spatial_types", $context) ? $context["spatial_types"] : (function () { throw new RuntimeError('Variable "spatial_types" does not exist.', 191, $this->source); })())) && (((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 191, $this->source); })()) == "MYISAM") || ((isset($context["mysql_int_version"]) || array_key_exists("mysql_int_version", $context) ? $context["mysql_int_version"] : (function () { throw new RuntimeError('Variable "mysql_int_version" does not exist.', 191, $this->source); })()) >= 50705))))) {
                    // line 192
                    echo "                            <span class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 192, $this->source); })())) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_spatial", _gettext("Spatial"));
                    echo "</span>
                          ";
                } else {
                    // line 194
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 194, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_spatial_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 195
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 195, $this->source); })()), "table" =>                     // line 196
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 196, $this->source); })()), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 197
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 197, $this->source); })()))) . " ADD SPATIAL(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 197))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 198
$context["row"], "field", [], "any", false, false, false, 198)))], "", false);
                    // line 199
                    echo "\">
                              ";
                    // line 200
                    echo $this->env->getFunction('get_icon')->getCallable()("b_spatial", _gettext("Spatial"));
                    echo "
                            </a>
                          ";
                }
                // line 203
                echo "                        </li>

                        ";
                // line 206
                echo "                        <li class=\"";
                echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 206, $this->source); })())) ? ("nav-item ") : (""));
                echo "fulltext text-nowrap\">
                        ";
                // line 207
                if ((( !twig_test_empty((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 207, $this->source); })())) && ((((                // line 208
(isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 208, $this->source); })()) == "MYISAM") || (                // line 209
(isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 209, $this->source); })()) == "ARIA")) || (                // line 210
(isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 210, $this->source); })()) == "MARIA")) || ((                // line 211
(isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 211, $this->source); })()) == "INNODB") && ((isset($context["mysql_int_version"]) || array_key_exists("mysql_int_version", $context) ? $context["mysql_int_version"] : (function () { throw new RuntimeError('Variable "mysql_int_version" does not exist.', 211, $this->source); })()) >= 50604)))) && (twig_in_filter("text",                 // line 212
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 212, $this->source); })())) || twig_in_filter("char", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 212, $this->source); })()))))) {
                    // line 213
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 213, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key add_fulltext_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 214
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 214, $this->source); })()), "table" =>                     // line 215
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 215, $this->source); })()), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 216
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 216, $this->source); })()))) . " ADD FULLTEXT(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 216))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 217
$context["row"], "field", [], "any", false, false, false, 217)))], "", false);
                    // line 218
                    echo "\">
                              ";
                    // line 219
                    echo $this->env->getFunction('get_icon')->getCallable()("b_ftext", _gettext("Fulltext"));
                    echo "
                            </a>
                        ";
                } else {
                    // line 222
                    echo "                            <span class=\"";
                    echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 222, $this->source); })())) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_ftext", _gettext("Fulltext"));
                    echo "</span>
                        ";
                }
                // line 224
                echo "                        </li>

                        ";
                // line 227
                echo "                        <li class=\"";
                echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 227, $this->source); })())) ? ("nav-item ") : (""));
                echo "browse text-nowrap\">
                            <a class=\"";
                // line 228
                echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 228, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                echo "\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 229
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 229, $this->source); })()), "table" =>                 // line 230
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 230, $this->source); })()), "sql_query" => ((((((((("SELECT COUNT(*) AS " . $this->env->getFunction('backquote')->getCallable()(_gettext("Rows"))) . ", ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 232
$context["row"], "field", [], "any", false, false, false, 232))) . " FROM ") . $this->env->getFunction('backquote')->getCallable()(                // line 233
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 233, $this->source); })()))) . " GROUP BY ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 234
$context["row"], "field", [], "any", false, false, false, 234))) . " ORDER BY ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 235
$context["row"], "field", [], "any", false, false, false, 235))), "is_browse_distinct" => true], "", false);
                // line 237
                echo "\">
                              ";
                // line 238
                echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Distinct values"));
                echo "
                            </a>
                        </li>
                        ";
                // line 241
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 241, $this->source); })()), "centralColumnsFeature", [], "any", false, false, false, 241))) {
                    // line 242
                    echo "                            <li class=\"";
                    echo (( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 242, $this->source); })())) ? ("nav-item ") : (""));
                    echo "browse text-nowrap\">
                            ";
                    // line 243
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 243), (isset($context["central_list"]) || array_key_exists("central_list", $context) ? $context["central_list"] : (function () { throw new RuntimeError('Variable "central_list" does not exist.', 243, $this->source); })()))) {
                        // line 244
                        echo "                                <a class=\"";
                        echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 244, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                        echo "\" href=\"";
                        echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-remove");
                        echo "\" data-post=\"";
                        echo $this->env->getFunction('get_common')->getCallable()(["db" =>                         // line 245
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 245, $this->source); })()), "table" =>                         // line 246
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 246, $this->source); })()), "selected_fld" => [twig_get_attribute($this->env, $this->source,                         // line 247
$context["row"], "field", [], "any", false, false, false, 247)]]);
                        // line 248
                        echo "\">
                                    ";
                        // line 249
                        echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_delete", _gettext("Remove from central columns"));
                        echo "
                                </a>
                            ";
                    } else {
                        // line 252
                        echo "                                <a class=\"";
                        echo (((isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 252, $this->source); })())) ? ("dropdown-item") : ("nav-link px-1"));
                        echo "\" href=\"";
                        echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-add");
                        echo "\" data-post=\"";
                        echo $this->env->getFunction('get_common')->getCallable()(["db" =>                         // line 253
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 253, $this->source); })()), "table" =>                         // line 254
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 254, $this->source); })()), "selected_fld" => [twig_get_attribute($this->env, $this->source,                         // line 255
$context["row"], "field", [], "any", false, false, false, 255)]]);
                        // line 256
                        echo "\">
                                    ";
                        // line 257
                        echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_add", _gettext("Add to central columns"));
                        echo "
                                </a>
                            ";
                    }
                    // line 260
                    echo "                            </li>
                        ";
                }
                // line 262
                echo "                  ";
                if ( !(isset($context["hide_structure_actions"]) || array_key_exists("hide_structure_actions", $context) ? $context["hide_structure_actions"] : (function () { throw new RuntimeError('Variable "hide_structure_actions" does not exist.', 262, $this->source); })())) {
                    // line 263
                    echo "                    </ul>
                  ";
                } else {
                    // line 265
                    echo "                    </ul>
                  </div>
                  ";
                }
                // line 268
                echo "                </td>
            ";
            }
            // line 270
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "        </tbody>
    </table>
    </div>
    <div class=\"d-print-none\">
        ";
        // line 276
        $this->loadTemplate("select_all.twig", "table/structure/display_structure.twig", 276)->display(twig_to_array(["text_dir" =>         // line 277
(isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 277, $this->source); })()), "form_name" => "fieldsForm"]));
        // line 280
        echo "
        <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
        // line 281
        echo $this->env->getFunction('url')->getCallable()("/table/structure/browse");
        echo "\">
          ";
        // line 282
        echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse"));
        echo "
        </button>

        ";
        // line 285
        if (( !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 285, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 285, $this->source); })()))) {
            // line 286
            echo "          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/structure/change");
            echo "\">
            ";
            // line 287
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Change"));
            echo "
          </button>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            // line 289
            echo $this->env->getFunction('url')->getCallable()("/table/structure/drop-confirm");
            echo "\">
            ";
            // line 290
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
            echo "
          </button>

          ";
            // line 293
            if (((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 293, $this->source); })()) != "ARCHIVE")) {
                // line 294
                echo "            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                echo $this->env->getFunction('url')->getCallable()("/table/structure/primary");
                echo "\">
              ";
                // line 295
                echo $this->env->getFunction('get_icon')->getCallable()("b_primary", _gettext("Primary"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 297
                echo $this->env->getFunction('url')->getCallable()("/table/structure/unique");
                echo "\">
              ";
                // line 298
                echo $this->env->getFunction('get_icon')->getCallable()("b_unique", _gettext("Unique"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 300
                echo $this->env->getFunction('url')->getCallable()("/table/structure/index");
                echo "\">
              ";
                // line 301
                echo $this->env->getFunction('get_icon')->getCallable()("b_index", _gettext("Index"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 303
                echo $this->env->getFunction('url')->getCallable()("/table/structure/spatial");
                echo "\">
              ";
                // line 304
                echo $this->env->getFunction('get_icon')->getCallable()("b_spatial", _gettext("Spatial"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 306
                echo $this->env->getFunction('url')->getCallable()("/table/structure/fulltext");
                echo "\">
              ";
                // line 307
                echo $this->env->getFunction('get_icon')->getCallable()("b_ftext", _gettext("Fulltext"));
                echo "
            </button>

            ";
                // line 310
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 310, $this->source); })()), "centralColumnsFeature", [], "any", false, false, false, 310))) {
                    // line 311
                    echo "              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-add");
                    echo "\">
                ";
                    // line 312
                    echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_add", _gettext("Add to central columns"));
                    echo "
              </button>
              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    // line 314
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-remove");
                    echo "\">
                ";
                    // line 315
                    echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_delete", _gettext("Remove from central columns"));
                    echo "
              </button>
            ";
                }
                // line 318
                echo "          ";
            }
            // line 319
            echo "        ";
        }
        // line 320
        echo "    </div>
</form>
<hr class=\"d-print-none\">

<div class=\"modal fade\" id=\"moveColumnsModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsModalLabel\">";
        // line 328
echo _gettext("Move columns");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 329
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"move_columns_dialog\" title=\"";
        // line 332
echo _gettext("Move columns");
        echo "\">
          <p>";
        // line 333
echo _gettext("Move the columns by dragging them up and down.");
        echo "</p>
          <form action=\"";
        // line 334
        echo $this->env->getFunction('url')->getCallable()("/table/structure/move-columns");
        echo "\" name=\"move_column_form\" id=\"move_column_form\">
            <div>
              ";
        // line 336
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 336, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 336, $this->source); })()));
        echo "
              <ul></ul>
            </div>
          </form>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"designerModalGoButton\">";
        // line 343
echo _gettext("Go");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalPreviewButton\" data-bs-target=\"#designerModalPreviewModal\" data-bs-toggle=\"modal\">";
        // line 344
echo _gettext("Preview SQL");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalCloseButton\" data-bs-dismiss=\"modal\">";
        // line 345
echo _gettext("Close");
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerModalPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"designerModalPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerModalPreviewModalLabel\">";
        // line 354
echo _gettext("Preview SQL");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 355
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
        // line 359
echo _gettext("Loading…");
        echo "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#moveColumnsModal\" data-bs-toggle=\"modal\">";
        // line 363
echo _gettext("Go back");
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"moveColumnsErrorModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsErrorModalLabel\">";
        // line 372
echo _gettext("Error");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 373
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 378
echo _gettext("OK");
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 385
        echo "<div id=\"structure-action-links\" class=\"d-print-none\">
    ";
        // line 386
        if (((isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 386, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 386, $this->source); })()))) {
            // line 387
            echo "        ";
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/view/create"), ["db" =>             // line 389
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 389, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 389, $this->source); })())], $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit view"), true));
            // line 391
            echo "
    ";
        }
        // line 393
        echo "    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">";
        echo $this->env->getFunction('get_icon')->getCallable()("b_print", _gettext("Print"), true);
        echo "</button>
    ";
        // line 394
        if (( !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 394, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 394, $this->source); })()))) {
            // line 395
            echo "        ";
            // line 396
            echo "        ";
            if ((((isset($context["mysql_int_version"]) || array_key_exists("mysql_int_version", $context) ? $context["mysql_int_version"] : (function () { throw new RuntimeError('Variable "mysql_int_version" does not exist.', 396, $this->source); })()) < 80000) || (isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 396, $this->source); })()))) {
                // line 397
                echo "          <a class=\"me-0\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 398
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 398, $this->source); })()), "table" =>                 // line 399
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 399, $this->source); })()), "sql_query" => (("SELECT * FROM " . $this->env->getFunction('backquote')->getCallable()(                // line 400
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 400, $this->source); })()))) . " PROCEDURE ANALYSE()"), "session_max_rows" => "all"], "", false);
                // line 402
                echo "\">
            ";
                // line 403
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblanalyse", _gettext("Propose table structure"), true);
                // line 407
                echo "
          </a>
          ";
                // line 409
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("procedure_analyse");
                echo "
        ";
            }
            // line 411
            echo "        ";
            if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 411, $this->source); })())) {
                // line 412
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/table/tracking", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 412, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 412, $this->source); })())]);
                echo "\">
                ";
                // line 413
                echo $this->env->getFunction('get_icon')->getCallable()("eye", _gettext("Track table"), true);
                echo "
            </a>
        ";
            }
            // line 416
            echo "        <a href=\"#\" id=\"move_columns_anchor\">
            ";
            // line 417
            echo $this->env->getFunction('get_icon')->getCallable()("b_move", _gettext("Move columns"), true);
            echo "
        </a>
        <a href=\"";
            // line 419
            echo $this->env->getFunction('url')->getCallable()("/normalization", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 419, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 419, $this->source); })())]);
            echo "\">
            ";
            // line 420
            echo $this->env->getFunction('get_icon')->getCallable()("normalize", _gettext("Normalize"), true);
            echo "
        </a>
    ";
        }
        // line 423
        echo "    ";
        if (((isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 423, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 423, $this->source); })()))) {
            // line 424
            echo "        ";
            if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 424, $this->source); })())) {
                // line 425
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/table/tracking", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 425, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 425, $this->source); })())]);
                echo "\">
                ";
                // line 426
                echo $this->env->getFunction('get_icon')->getCallable()("eye", _gettext("Track view"), true);
                echo "
            </a>
        ";
            }
            // line 429
            echo "    ";
        }
        // line 430
        echo "</div>
";
        // line 431
        if (( !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 431, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 431, $this->source); })()))) {
            // line 432
            echo "    <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/add-field");
            echo "\" id=\"addColumns\" name=\"addColumns\" class=\"d-print-none\">
        ";
            // line 433
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 433, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 433, $this->source); })()));
            echo "
        ";
            // line 434
            if ($this->env->getFunction('show_icons')->getCallable()("ActionLinksMode")) {
                // line 435
                echo "            ";
                echo $this->env->getFunction('get_image')->getCallable()("b_insrow", _gettext("Add column"));
                echo "&nbsp;
        ";
            }
            // line 437
            echo "        ";
            $context["num_fields"] = ('' === $tmp = "<input type=\"number\" name=\"num_fields\" value=\"1\" onfocus=\"this.select()\" min=\"1\" required>") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 440
            echo "        ";
            echo twig_sprintf(_gettext("Add %s column(s)"), (isset($context["num_fields"]) || array_key_exists("num_fields", $context) ? $context["num_fields"] : (function () { throw new RuntimeError('Variable "num_fields" does not exist.', 440, $this->source); })()));
            echo "
        <input type=\"hidden\" name=\"field_where\" value=\"after\">&nbsp;
        ";
            // line 443
            echo "        <select name=\"after_field\">
            <option value=\"first\" data-pos=\"first\">
                ";
            // line 445
echo _gettext("at beginning of table");
            // line 446
            echo "            </option>
            ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 447, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["one_column_name"]) {
                // line 448
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["one_column_name"], "html", null, true);
                echo "\"";
                // line 449
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 449) == 0)) ? (" selected=\"selected\"") : (""));
                echo ">
                    ";
                // line 450
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("after %s"), $context["one_column_name"]), "html", null, true);
                echo "
                </option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_column_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 453
            echo "        </select>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 454
echo _gettext("Go");
            echo "\">
    </form>
";
        }
        // line 457
        echo "
";
        // line 458
        if ((( !(isset($context["tbl_is_view"]) || array_key_exists("tbl_is_view", $context) ? $context["tbl_is_view"] : (function () { throw new RuntimeError('Variable "tbl_is_view" does not exist.', 458, $this->source); })()) &&  !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 458, $this->source); })())) && ((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 458, $this->source); })()) != "ARCHIVE"))) {
            // line 459
            echo "  <div id=\"index_div\" class=\"card mb-3 ajax\">
    <div class=\"card-header\">
      ";
            // line 461
echo _gettext("Indexes");
            // line 462
            echo "      ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("optimizing-database-structure");
            echo "
    </div>

    <div class=\"card-body index_info\">
      ";
            // line 466
            if ( !twig_test_empty((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 466, $this->source); })()))) {
                // line 467
                echo "        ";
                echo (isset($context["indexes_duplicates"]) || array_key_exists("indexes_duplicates", $context) ? $context["indexes_duplicates"] : (function () { throw new RuntimeError('Variable "indexes_duplicates" does not exist.', 467, $this->source); })());
                echo "

        ";
                // line 469
                echo twig_include($this->env, $context, "modals/preview_sql_confirmation.twig");
                echo "
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover table-sm w-auto align-middle\" id=\"table_index\">
            <thead>
              <tr>
                <th colspan=\"3\" class=\"d-print-none\">";
                // line 474
echo _gettext("Action");
                echo "</th>
                <th>";
                // line 475
echo _gettext("Keyname");
                echo "</th>
                <th>";
                // line 476
echo _gettext("Type");
                echo "</th>
                <th>";
                // line 477
echo _gettext("Unique");
                echo "</th>
                <th>";
                // line 478
echo _gettext("Packed");
                echo "</th>
                <th>";
                // line 479
echo _gettext("Column");
                echo "</th>
                <th>";
                // line 480
echo _gettext("Cardinality");
                echo "</th>
                <th>";
                // line 481
echo _gettext("Collation");
                echo "</th>
                <th>";
                // line 482
echo _gettext("Null");
                echo "</th>
                <th>";
                // line 483
echo _gettext("Comment");
                echo "</th>
              </tr>
            </thead>

          <tbody class=\"row_span\">
            ";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 488, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 489
                    echo "                ";
                    $context["columns_count"] = twig_get_attribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 489);
                    // line 490
                    echo "                <tr class=\"noclick\">
                <td rowspan=\"";
                    // line 491
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 491, $this->source); })()), "html", null, true);
                    echo "\" class=\"edit_index d-print-none ajax\">
                  <a class=\"ajax\" href=\"";
                    // line 492
                    echo $this->env->getFunction('url')->getCallable()("/table/indexes");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 493
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 493, $this->source); })()), "table" =>                     // line 494
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 494, $this->source); })()), "index" => twig_get_attribute($this->env, $this->source,                     // line 495
$context["index"], "getName", [], "method", false, false, false, 495)], "", false);
                    // line 496
                    echo "\">
                    ";
                    // line 497
                    echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
                    echo "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 500
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 500, $this->source); })()), "html", null, true);
                    echo "\" class=\"rename_index d-print-none ajax\" >
                  <a class=\"ajax\" href=\"";
                    // line 501
                    echo $this->env->getFunction('url')->getCallable()("/table/indexes/rename");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 502
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 502, $this->source); })()), "table" =>                     // line 503
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 503, $this->source); })()), "index" => twig_get_attribute($this->env, $this->source,                     // line 504
$context["index"], "getName", [], "method", false, false, false, 504)], "", false);
                    // line 505
                    echo "\">
                    ";
                    // line 506
                    echo $this->env->getFunction('get_icon')->getCallable()("b_rename", _gettext("Rename"));
                    echo "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 509
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 509, $this->source); })()), "html", null, true);
                    echo "\" class=\"d-print-none\">
                  ";
                    // line 510
                    if ((twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 510) == "PRIMARY")) {
                        // line 511
                        echo "                    ";
                        $context["index_params"] = ["sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                        // line 512
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 512, $this->source); })()))) . " DROP PRIMARY KEY;"), "message_to_show" => _gettext("The primary key has been dropped.")];
                        // line 515
                        echo "                  ";
                    } else {
                        // line 516
                        echo "                    ";
                        $context["index_params"] = ["sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                        // line 517
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 517, $this->source); })()))) . " DROP INDEX ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 517))) . ";"), "message_to_show" => twig_sprintf(_gettext("Index %s has been dropped."), twig_get_attribute($this->env, $this->source,                         // line 518
$context["index"], "getName", [], "method", false, false, false, 518))];
                        // line 520
                        echo "                  ";
                    }
                    // line 521
                    echo "
                  <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"";
                    // line 522
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index_params"]) || array_key_exists("index_params", $context) ? $context["index_params"] : (function () { throw new RuntimeError('Variable "index_params" does not exist.', 522, $this->source); })()), "sql_query", [], "any", false, false, false, 522), "html", null, true);
                    echo "\">
                  ";
                    // line 523
                    echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(                    // line 525
(isset($context["index_params"]) || array_key_exists("index_params", $context) ? $context["index_params"] : (function () { throw new RuntimeError('Variable "index_params" does not exist.', 525, $this->source); })()), ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 525, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 525, $this->source); })())]), $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop")), ["class" => "drop_primary_key_index_anchor ajax"]);
                    // line 528
                    echo "
                </td>
                <th rowspan=\"";
                    // line 530
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 530, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 530), "html", null, true);
                    echo "</th>
                <td rowspan=\"";
                    // line 531
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 531, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 531), twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 531))) : (twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 531))), "html", null, true);
                    echo "</td>
                <td rowspan=\"";
                    // line 532
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 532, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 532)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                <td rowspan=\"";
                    // line 533
                    echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 533, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 533);
                    echo "</td>

                ";
                    // line 535
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 535));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 536
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 536) > 1)) {
                            // line 537
                            echo "                    <tr class=\"noclick\">
                  ";
                        }
                        // line 539
                        echo "                  <td>
                    ";
                        // line 540
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "hasExpression", [], "method", false, false, false, 540)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getExpression", [], "method", false, false, false, 540), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 540), "html", null, true);
                        }
                        // line 541
                        echo "                    ";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 541))) {
                            // line 542
                            echo "                      (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 542), "html", null, true);
                            echo ")
                    ";
                        }
                        // line 544
                        echo "                  </td>
                  <td>";
                        // line 545
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 545), "html", null, true);
                        echo "</td>
                  <td>";
                        // line 546
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 546), "html", null, true);
                        echo "</td>
                  <td>";
                        // line 547
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getNull", [], "method", false, false, false, 547), "html", null, true);
                        echo "</td>

                  ";
                        // line 549
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 549) == 1)) {
                            // line 550
                            echo "                    <td rowspan=\"";
                            echo twig_escape_filter($this->env, (isset($context["columns_count"]) || array_key_exists("columns_count", $context) ? $context["columns_count"] : (function () { throw new RuntimeError('Variable "columns_count" does not exist.', 550, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 550), "html", null, true);
                            echo "</td>
                  ";
                        }
                        // line 552
                        echo "                  </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 554
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 555
                echo "            </tbody>
          </table>
        </div>
      ";
            } else {
                // line 559
                echo "        <div class=\"no_indexes_defined\">";
                echo $this->env->getFilter('notice')->getCallable()(_gettext("No index defined!"));
                echo "</div>
      ";
            }
            // line 561
            echo "    </div>

    <div class=\"card-footer d-print-none\">
      <form action=\"";
            // line 564
            echo $this->env->getFunction('url')->getCallable()("/table/indexes");
            echo "\" method=\"post\">
        ";
            // line 565
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 565, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 565, $this->source); })()));
            echo "
        <input type=\"hidden\" name=\"create_index\" value=\"1\">

        ";
            // line 568
            ob_start();
            // line 569
            echo "          ";
echo _gettext("Create an index on %s columns");
            // line 570
            echo "        ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 568
            echo twig_sprintf($___internal_parse_0_, "<input class=\"mx-2\" type=\"number\" name=\"added_fields\" value=\"1\" min=\"1\" max=\"16\" required>");
            // line 571
            echo "
        <input class=\"btn btn-primary add_index ajax\" type=\"submit\" value=\"";
            // line 572
echo _gettext("Go");
            echo "\">
      </form>
    </div>
  </div>
  ";
            // line 576
            echo twig_include($this->env, $context, "modals/index_dialog_modal.twig");
            echo "
";
        }
        // line 578
        echo "
";
        // line 580
        if ((isset($context["have_partitioning"]) || array_key_exists("have_partitioning", $context) ? $context["have_partitioning"] : (function () { throw new RuntimeError('Variable "have_partitioning" does not exist.', 580, $this->source); })())) {
            // line 581
            echo "    ";
            // line 582
            echo "    ";
            if (( !twig_test_empty((isset($context["partition_names"]) || array_key_exists("partition_names", $context) ? $context["partition_names"] : (function () { throw new RuntimeError('Variable "partition_names" does not exist.', 582, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["partition_names"]) || array_key_exists("partition_names", $context) ? $context["partition_names"] : (function () { throw new RuntimeError('Variable "partition_names" does not exist.', 582, $this->source); })()), 0, [], "array", false, false, false, 582)))) {
                // line 583
                echo "        ";
                $context["first_partition"] = twig_get_attribute($this->env, $this->source, (isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 583, $this->source); })()), 0, [], "array", false, false, false, 583);
                // line 584
                echo "        ";
                $context["range_or_list"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 584, $this->source); })()), "getMethod", [], "method", false, false, false, 584) == "RANGE") || (twig_get_attribute($this->env, $this->source,                 // line 585
(isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 585, $this->source); })()), "getMethod", [], "method", false, false, false, 585) == "RANGE COLUMNS")) || (twig_get_attribute($this->env, $this->source,                 // line 586
(isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 586, $this->source); })()), "getMethod", [], "method", false, false, false, 586) == "LIST")) || (twig_get_attribute($this->env, $this->source,                 // line 587
(isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 587, $this->source); })()), "getMethod", [], "method", false, false, false, 587) == "LIST COLUMNS"));
                // line 588
                echo "        ";
                $context["sub_partitions"] = twig_get_attribute($this->env, $this->source, (isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 588, $this->source); })()), "getSubPartitions", [], "method", false, false, false, 588);
                // line 589
                echo "        ";
                $context["has_sub_partitions"] = twig_get_attribute($this->env, $this->source, (isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 589, $this->source); })()), "hasSubPartitions", [], "method", false, false, false, 589);
                // line 590
                echo "        ";
                if ((isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 590, $this->source); })())) {
                    // line 591
                    echo "            ";
                    $context["first_sub_partition"] = twig_get_attribute($this->env, $this->source, (isset($context["sub_partitions"]) || array_key_exists("sub_partitions", $context) ? $context["sub_partitions"] : (function () { throw new RuntimeError('Variable "sub_partitions" does not exist.', 591, $this->source); })()), 0, [], "array", false, false, false, 591);
                    // line 592
                    echo "        ";
                }
                // line 593
                echo "
        ";
                // line 594
                if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 594, $this->source); })()) != "disabled")) {
                    // line 595
                    echo "        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#partitionsCollapse\" aria-expanded=\"";
                    // line 596
                    echo ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 596, $this->source); })()) == "open")) ? ("true") : ("false"));
                    echo "\" aria-controls=\"partitionsCollapse\">
            ";
                    // line 597
echo _gettext("Partitions");
                    // line 598
                    echo "          </button>
        </div>
        <div class=\"collapse mb-3";
                    // line 600
                    echo ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 600, $this->source); })()) == "open")) ? (" show") : (""));
                    echo "\" id=\"partitionsCollapse\">
        ";
                }
                // line 602
                echo "
        ";
                // line 603
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 603)->display(twig_to_array(["db" =>                 // line 604
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 604, $this->source); })()), "table" =>                 // line 605
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 605, $this->source); })()), "partitions" =>                 // line 606
(isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 606, $this->source); })()), "partition_method" => twig_get_attribute($this->env, $this->source,                 // line 607
(isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 607, $this->source); })()), "getMethod", [], "method", false, false, false, 607), "partition_expression" => twig_get_attribute($this->env, $this->source,                 // line 608
(isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 608, $this->source); })()), "getExpression", [], "method", false, false, false, 608), "has_description" =>  !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 609
(isset($context["first_partition"]) || array_key_exists("first_partition", $context) ? $context["first_partition"] : (function () { throw new RuntimeError('Variable "first_partition" does not exist.', 609, $this->source); })()), "getDescription", [], "method", false, false, false, 609)), "has_sub_partitions" =>                 // line 610
(isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 610, $this->source); })()), "sub_partition_method" => ((                // line 611
(isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 611, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["first_sub_partition"]) || array_key_exists("first_sub_partition", $context) ? $context["first_sub_partition"] : (function () { throw new RuntimeError('Variable "first_sub_partition" does not exist.', 611, $this->source); })()), "getMethod", [], "method", false, false, false, 611)) : ("")), "sub_partition_expression" => ((                // line 612
(isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 612, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["first_sub_partition"]) || array_key_exists("first_sub_partition", $context) ? $context["first_sub_partition"] : (function () { throw new RuntimeError('Variable "first_sub_partition" does not exist.', 612, $this->source); })()), "getExpression", [], "method", false, false, false, 612)) : ("")), "range_or_list" =>                 // line 613
(isset($context["range_or_list"]) || array_key_exists("range_or_list", $context) ? $context["range_or_list"] : (function () { throw new RuntimeError('Variable "range_or_list" does not exist.', 613, $this->source); })())]));
                // line 615
                echo "    ";
            } else {
                // line 616
                echo "        ";
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 616)->display(twig_to_array(["db" =>                 // line 617
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 617, $this->source); })()), "table" =>                 // line 618
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 618, $this->source); })())]));
                // line 620
                echo "    ";
            }
            // line 621
            echo "    ";
            if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 621, $this->source); })()) != "disabled")) {
                // line 622
                echo "    </div>
    ";
            }
        }
        // line 625
        echo "
";
        // line 627
        if ((isset($context["show_stats"]) || array_key_exists("show_stats", $context) ? $context["show_stats"] : (function () { throw new RuntimeError('Variable "show_stats" does not exist.', 627, $this->source); })())) {
            // line 628
            echo "    ";
            echo (isset($context["table_stats"]) || array_key_exists("table_stats", $context) ? $context["table_stats"] : (function () { throw new RuntimeError('Variable "table_stats" does not exist.', 628, $this->source); })());
            echo "
";
        }
        // line 630
        echo "<div class=\"clearfloat\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/structure/display_structure.twig";
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
        return array (  1495 => 630,  1489 => 628,  1487 => 627,  1484 => 625,  1479 => 622,  1476 => 621,  1473 => 620,  1471 => 618,  1470 => 617,  1468 => 616,  1465 => 615,  1463 => 613,  1462 => 612,  1461 => 611,  1460 => 610,  1459 => 609,  1458 => 608,  1457 => 607,  1456 => 606,  1455 => 605,  1454 => 604,  1453 => 603,  1450 => 602,  1445 => 600,  1441 => 598,  1439 => 597,  1435 => 596,  1432 => 595,  1430 => 594,  1427 => 593,  1424 => 592,  1421 => 591,  1418 => 590,  1415 => 589,  1412 => 588,  1410 => 587,  1409 => 586,  1408 => 585,  1406 => 584,  1403 => 583,  1400 => 582,  1398 => 581,  1396 => 580,  1393 => 578,  1388 => 576,  1381 => 572,  1378 => 571,  1376 => 568,  1373 => 570,  1370 => 569,  1368 => 568,  1362 => 565,  1358 => 564,  1353 => 561,  1347 => 559,  1341 => 555,  1335 => 554,  1328 => 552,  1320 => 550,  1318 => 549,  1313 => 547,  1309 => 546,  1305 => 545,  1302 => 544,  1296 => 542,  1293 => 541,  1287 => 540,  1284 => 539,  1280 => 537,  1277 => 536,  1273 => 535,  1266 => 533,  1260 => 532,  1254 => 531,  1248 => 530,  1244 => 528,  1242 => 525,  1241 => 523,  1237 => 522,  1234 => 521,  1231 => 520,  1229 => 518,  1228 => 517,  1226 => 516,  1223 => 515,  1221 => 512,  1219 => 511,  1217 => 510,  1213 => 509,  1207 => 506,  1204 => 505,  1202 => 504,  1201 => 503,  1200 => 502,  1197 => 501,  1193 => 500,  1187 => 497,  1184 => 496,  1182 => 495,  1181 => 494,  1180 => 493,  1177 => 492,  1173 => 491,  1170 => 490,  1167 => 489,  1163 => 488,  1155 => 483,  1151 => 482,  1147 => 481,  1143 => 480,  1139 => 479,  1135 => 478,  1131 => 477,  1127 => 476,  1123 => 475,  1119 => 474,  1111 => 469,  1105 => 467,  1103 => 466,  1095 => 462,  1093 => 461,  1089 => 459,  1087 => 458,  1084 => 457,  1078 => 454,  1075 => 453,  1058 => 450,  1054 => 449,  1050 => 448,  1033 => 447,  1030 => 446,  1028 => 445,  1024 => 443,  1018 => 440,  1015 => 437,  1009 => 435,  1007 => 434,  1003 => 433,  998 => 432,  996 => 431,  993 => 430,  990 => 429,  984 => 426,  979 => 425,  976 => 424,  973 => 423,  967 => 420,  963 => 419,  958 => 417,  955 => 416,  949 => 413,  944 => 412,  941 => 411,  936 => 409,  932 => 407,  930 => 403,  927 => 402,  925 => 400,  924 => 399,  923 => 398,  919 => 397,  916 => 396,  914 => 395,  912 => 394,  907 => 393,  903 => 391,  901 => 389,  899 => 387,  897 => 386,  894 => 385,  885 => 378,  877 => 373,  873 => 372,  861 => 363,  854 => 359,  847 => 355,  843 => 354,  831 => 345,  827 => 344,  823 => 343,  813 => 336,  808 => 334,  804 => 333,  800 => 332,  794 => 329,  790 => 328,  780 => 320,  777 => 319,  774 => 318,  768 => 315,  764 => 314,  759 => 312,  754 => 311,  752 => 310,  746 => 307,  742 => 306,  737 => 304,  733 => 303,  728 => 301,  724 => 300,  719 => 298,  715 => 297,  710 => 295,  705 => 294,  703 => 293,  697 => 290,  693 => 289,  688 => 287,  683 => 286,  681 => 285,  675 => 282,  671 => 281,  668 => 280,  666 => 277,  665 => 276,  659 => 272,  652 => 270,  648 => 268,  643 => 265,  639 => 263,  636 => 262,  632 => 260,  626 => 257,  623 => 256,  621 => 255,  620 => 254,  619 => 253,  613 => 252,  607 => 249,  604 => 248,  602 => 247,  601 => 246,  600 => 245,  594 => 244,  592 => 243,  587 => 242,  585 => 241,  579 => 238,  576 => 237,  574 => 235,  573 => 234,  572 => 233,  571 => 232,  570 => 230,  569 => 229,  564 => 228,  559 => 227,  555 => 224,  547 => 222,  541 => 219,  538 => 218,  536 => 217,  535 => 216,  534 => 215,  533 => 214,  527 => 213,  525 => 212,  524 => 211,  523 => 210,  522 => 209,  521 => 208,  520 => 207,  515 => 206,  511 => 203,  505 => 200,  502 => 199,  500 => 198,  499 => 197,  498 => 196,  497 => 195,  491 => 194,  483 => 192,  481 => 191,  476 => 190,  474 => 180,  470 => 178,  464 => 175,  461 => 174,  459 => 173,  458 => 172,  457 => 171,  456 => 170,  450 => 169,  442 => 167,  440 => 166,  436 => 165,  432 => 163,  426 => 160,  423 => 159,  421 => 158,  420 => 157,  419 => 156,  418 => 155,  412 => 154,  404 => 152,  402 => 151,  398 => 150,  394 => 148,  388 => 145,  385 => 144,  383 => 143,  382 => 142,  381 => 141,  380 => 140,  374 => 139,  366 => 137,  364 => 136,  359 => 135,  355 => 133,  349 => 130,  346 => 129,  344 => 128,  341 => 127,  338 => 126,  336 => 125,  333 => 124,  326 => 120,  323 => 119,  321 => 118,  320 => 116,  319 => 115,  318 => 114,  317 => 113,  314 => 112,  307 => 108,  304 => 107,  302 => 105,  301 => 104,  300 => 103,  299 => 102,  296 => 101,  294 => 100,  289 => 99,  283 => 96,  280 => 95,  278 => 94,  275 => 93,  270 => 91,  267 => 89,  265 => 88,  262 => 86,  259 => 84,  257 => 83,  255 => 82,  251 => 80,  247 => 79,  244 => 78,  236 => 76,  234 => 75,  229 => 72,  221 => 70,  219 => 69,  218 => 68,  214 => 67,  209 => 65,  202 => 62,  196 => 60,  188 => 58,  186 => 57,  182 => 56,  177 => 54,  170 => 52,  165 => 49,  163 => 48,  160 => 47,  158 => 46,  155 => 45,  153 => 44,  150 => 43,  147 => 42,  142 => 41,  139 => 40,  134 => 36,  128 => 34,  125 => 33,  122 => 32,  117 => 30,  112 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  80 => 17,  75 => 13,  72 => 12,  69 => 10,  67 => 9,  65 => 8,  63 => 7,  59 => 5,  55 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'table/page_with_secondary_tabs.twig' %}
{% block content %}
<h1 class=\"d-none d-print-block\">{{ table }}</h1>
<form method=\"post\" action=\"{{ url('/table/structure') }}\" name=\"fieldsForm\" id=\"fieldsForm\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"table_type\" value=
        {%- if db_is_system_schema -%}
            \"information_schema\"
        {%- elseif tbl_is_view -%}
            \"view\"
        {%- else -%}
            \"table\"
        {%- endif %}>
    <div class=\"table-responsive-md\">
    <table id=\"tablestructure\" class=\"table table-striped table-hover w-auto align-middle\">
        {# Table header #}
        <thead>
            <tr>
                <th class=\"d-print-none\"></th>
                <th>#</th>
                <th>{% trans 'Name' %}</th>
                <th>{% trans 'Type' %}</th>
                <th>{% trans 'Collation' %}</th>
                <th>{% trans 'Attributes' %}</th>
                <th>{% trans 'Null' %}</th>
                <th>{% trans 'Default' %}</th>
                {% if show_column_comments -%}
                    <th>{% trans 'Comments' %}</th>
                {%- endif %}
                <th>{% trans 'Extra' %}</th>
                {# @see table/structure.js, function moreOptsMenuResize() #}
                {% if not db_is_system_schema and not tbl_is_view %}
                    <th colspan=\"{{ show_icons('ActionLinksMode') ? '8' : '9' -}}
                        \" class=\"action d-print-none\">{% trans 'Action' %}</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {# Table body #}
        {% set rownum = 0 %}
        {% for row in fields %}
            {% set rownum = rownum + 1 %}

            {% set extracted_columnspec = extracted_columnspecs[rownum] %}
            {% set field_name = row.field|e %}
            {# For column comments #}
            {% set comments = row_comments[rownum] %}
            {# Underline commented fields and display a hover-title (CSS only) #}

        <tr>
            <td class=\"text-center d-print-none\">
                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\" value=\"{{ row.field }}\" id=\"checkbox_row_{{ rownum }}\">
            </td>
            <td class=\"text-end\">{{ rownum }}</td>
            <th class=\"text-nowrap\">
                <label for=\"checkbox_row_{{ rownum }}\">
                    {% if displayed_fields[rownum].comment is defined %}
                        <span class=\"commented_column\" title=\"{{ displayed_fields[rownum].comment }}\">{{ displayed_fields[rownum].text }}</span>
                    {% else %}
                        {{ displayed_fields[rownum].text }}
                    {% endif %}
                    {{ displayed_fields[rownum].icon|raw }}
                </label>
            </th>
            <td{{ 'set' != extracted_columnspec['type'] and 'enum' != extracted_columnspec['type'] ? ' class=\"text-nowrap\"' }}>
                <bdo dir=\"ltr\" lang=\"en\">
                    {{ extracted_columnspec['displayed_type']|raw }}
                    {% if relation_parameters.columnCommentsFeature is not null and relation_parameters.browserTransformationFeature is not null and browse_mime
                        and mime_map[row.field]['mimetype'] is defined %}
                        <br>{% trans 'Media type:' %} {{ mime_map[row.field]['mimetype']|replace({'_': '/'})|lower }}
                    {% endif %}
                </bdo>
            </td>
            <td>
            {% if row.collation is not empty %}
                <dfn title=\"{{ collations[row.collation].description }}\">{{ collations[row.collation].name }}</dfn>
            {% endif %}
            </td>
            <td class=\"column_attribute text-nowrap\">{{ attributes[rownum] }}</td>
            <td>{{ row.isNull ? 'Yes'|trans : 'No'|trans }}</td>
            <td class=\"text-nowrap\">
                {%- if row.default is not null -%}
                    {%- if extracted_columnspec['type'] == 'bit' -%}
                        {{- row.default|convert_bit_default_value -}}
                    {%- else -%}
                        {{- row.default -}}
                    {%- endif -%}
                {%- elseif row.isNull -%}
                    <em>NULL</em>
                {%- else -%}
                    <em>{% trans %}None{% context %}None for default{% endtrans %}</em>
                {%- endif -%}
            </td>
            {% if show_column_comments %}
                <td>
                    {{ comments }}
                </td>
            {% endif %}
            <td class=\"text-nowrap\">{{ row.extra|upper }}</td>
            {% if not tbl_is_view and not db_is_system_schema %}
                <td class=\"edit text-center d-print-none\">
                    <a class=\"change_column_anchor ajax\" href=\"{{ url('/table/structure/change', {
                      'db': db,
                      'table': table,
                      'field': row.field,
                      'change_column': 1
                    }) }}\">
                      {{ get_icon('b_edit', 'Change'|trans) }}
                    </a>
                </td>
                <td class=\"drop text-center d-print-none\">
                    <a class=\"drop_column_anchor ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common({
                      'db': db,
                      'table': table,
                      'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' DROP ' ~ backquote(row.field) ~ ';',
                      'dropped_column': row.field,
                      'purge': true,
                      'message_to_show': 'Column %s has been dropped.'|trans|format(row.field|e)
                    }, '', false) }}\">
                      {{ get_icon('b_drop', 'Drop'|trans) }}
                    </a>
                </td>
            {% endif %}

            {% if not tbl_is_view and not db_is_system_schema %}
                {% set type = extracted_columnspec['print_type'] is not empty ? extracted_columnspec['print_type'] %}
                <td class=\"d-print-none\">
                  {% if hide_structure_actions %}
                  <div class=\"dropdown\">
                    <button class=\"btn btn-link p-0 dropdown-toggle\" type=\"button\" id=\"moreActionsButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">{% trans 'More' %}</button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"moreActionsButton\">
                  {% else %}
                    <ul class=\"nav\">
                  {% endif %}
                        <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}primary text-nowrap\">
                          {% if type == 'text' or type == 'blob' or tbl_storage_engine == 'ARCHIVE' or (primary and primary.hasColumn(field_name)) %}
                            <span class=\"{{ hide_structure_actions ? 'dropdown-item-text' : 'nav-link px-1' }} disabled\">{{ get_icon('bd_primary', 'Primary'|trans) }}</span>
                          {% else %}
                            <a rel=\"samepage\" class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }} ajax add_key d-print-none add_primary_key_anchor\" href=\"{{ url('/table/structure/add-key') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ (primary ? ' DROP PRIMARY KEY,') ~ ' ADD PRIMARY KEY(' ~ backquote(row.field) ~ ');',
                              'message_to_show': 'A primary key has been added on %s.'|trans|format(row.field|e)
                            }, '', false) }}\">
                              {{ get_icon('b_primary', 'Primary'|trans) }}
                            </a>
                          {% endif %}
                        </li>

                        <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}add_unique unique text-nowrap\">
                          {% if type == 'text' or type == 'blob' or tbl_storage_engine == 'ARCHIVE' or field_name in columns_with_unique_index %}
                            <span class=\"{{ hide_structure_actions ? 'dropdown-item-text' : 'nav-link px-1' }} disabled\">{{ get_icon('bd_unique', 'Unique'|trans) }}</span>
                          {% else %}
                            <a rel=\"samepage\" class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }} ajax add_key d-print-none add_unique_anchor\" href=\"{{ url('/table/structure/add-key') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ADD UNIQUE(' ~ backquote(row.field) ~ ');',
                              'message_to_show': 'An index has been added on %s.'|trans|format(row.field|e)
                            }, '', false) }}\">
                              {{ get_icon('b_unique', 'Unique'|trans) }}
                            </a>
                          {% endif %}
                        </li>

                        <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}add_index text-nowrap\">
                          {% if type == 'text' or type == 'blob' or tbl_storage_engine == 'ARCHIVE' %}
                            <span class=\"{{ hide_structure_actions ? 'dropdown-item-text' : 'nav-link px-1' }} disabled\">{{ get_icon('bd_index', 'Index'|trans) }}</span>
                          {% else %}
                            <a rel=\"samepage\" class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }} ajax add_key d-print-none add_index_anchor\" href=\"{{ url('/table/structure/add-key') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ADD INDEX(' ~ backquote(row.field) ~ ');',
                              'message_to_show': 'An index has been added on %s.'|trans|format(row.field|e)
                            }, '', false) }}\">
                              {{ get_icon('b_index', 'Index'|trans) }}
                            </a>
                          {% endif %}
                        </li>

                        {% set spatial_types = [
                            'geometry',
                            'point',
                            'linestring',
                            'polygon',
                            'multipoint',
                            'multilinestring',
                            'multipolygon',
                            'geomtrycollection'
                        ] %}
                        <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}spatial text-nowrap\">
                          {% if type == 'text' or type == 'blob' or tbl_storage_engine == 'ARCHIVE' or (type not in spatial_types and (tbl_storage_engine == 'MYISAM' or mysql_int_version >= 50705)) %}
                            <span class=\"{{ hide_structure_actions ? 'dropdown-item-text' : 'nav-link px-1' }} disabled\">{{ get_icon('bd_spatial', 'Spatial'|trans) }}</span>
                          {% else %}
                            <a rel=\"samepage\" class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }} ajax add_key d-print-none add_spatial_anchor\" href=\"{{ url('/table/structure/add-key') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ADD SPATIAL(' ~ backquote(row.field) ~ ');',
                              'message_to_show': 'An index has been added on %s.'|trans|format(row.field|e)
                            }, '', false) }}\">
                              {{ get_icon('b_spatial', 'Spatial'|trans) }}
                            </a>
                          {% endif %}
                        </li>

                        {# FULLTEXT is possible on TEXT, CHAR and VARCHAR #}
                        <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}fulltext text-nowrap\">
                        {% if tbl_storage_engine is not empty and (
                                tbl_storage_engine == 'MYISAM'
                                or tbl_storage_engine == 'ARIA'
                                or tbl_storage_engine == 'MARIA'
                                or (tbl_storage_engine == 'INNODB' and mysql_int_version >= 50604)
                            ) and ('text' in type or 'char' in type) %}
                            <a rel=\"samepage\" class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }} ajax add_key add_fulltext_anchor\" href=\"{{ url('/table/structure/add-key') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ADD FULLTEXT(' ~ backquote(row.field) ~ ');',
                              'message_to_show': 'An index has been added on %s.'|trans|format(row.field|e)
                            }, '', false) }}\">
                              {{ get_icon('b_ftext', 'Fulltext'|trans) }}
                            </a>
                        {% else %}
                            <span class=\"{{ hide_structure_actions ? 'dropdown-item-text' : 'nav-link px-1' }} disabled\">{{ get_icon('bd_ftext', 'Fulltext'|trans) }}</span>
                        {% endif %}
                        </li>

                        {# Distinct value action #}
                        <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}browse text-nowrap\">
                            <a class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }}\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'sql_query': 'SELECT COUNT(*) AS ' ~ backquote('Rows'|trans)
                                ~ ', ' ~ backquote(row.field)
                                ~ ' FROM ' ~ backquote(table)
                                ~ ' GROUP BY ' ~ backquote(row.field)
                                ~ ' ORDER BY ' ~ backquote(row.field),
                              'is_browse_distinct': true
                            }, '', false) }}\">
                              {{ get_icon('b_browse', 'Distinct values'|trans) }}
                            </a>
                        </li>
                        {% if relation_parameters.centralColumnsFeature is not null %}
                            <li class=\"{{ not hide_structure_actions ? 'nav-item ' }}browse text-nowrap\">
                            {% if row.field in central_list %}
                                <a class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }}\" href=\"{{ url('/table/structure/central-columns-remove') }}\" data-post=\"{{ get_common({
                                  'db': db,
                                  'table': table,
                                  'selected_fld': [row.field],
                                }) }}\">
                                    {{ get_icon('centralColumns_delete', 'Remove from central columns'|trans) }}
                                </a>
                            {% else %}
                                <a class=\"{{ hide_structure_actions ? 'dropdown-item' : 'nav-link px-1' }}\" href=\"{{ url('/table/structure/central-columns-add') }}\" data-post=\"{{ get_common({
                                  'db': db,
                                  'table': table,
                                  'selected_fld': [row.field],
                                }) }}\">
                                    {{ get_icon('centralColumns_add', 'Add to central columns'|trans) }}
                                </a>
                            {% endif %}
                            </li>
                        {% endif %}
                  {% if not hide_structure_actions %}
                    </ul>
                  {% else %}
                    </ul>
                  </div>
                  {% endif %}
                </td>
            {% endif %}
        </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
    <div class=\"d-print-none\">
        {% include 'select_all.twig' with {
            'text_dir': text_dir,
            'form_name': 'fieldsForm'
        } only %}

        <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/browse') }}\">
          {{ get_icon('b_browse', 'Browse'|trans) }}
        </button>

        {% if not tbl_is_view and not db_is_system_schema %}
          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/change') }}\">
            {{ get_icon('b_edit', 'Change'|trans) }}
          </button>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/drop-confirm') }}\">
            {{ get_icon('b_drop', 'Drop'|trans) }}
          </button>

          {% if tbl_storage_engine != 'ARCHIVE' %}
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/primary') }}\">
              {{ get_icon('b_primary', 'Primary'|trans) }}
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/unique') }}\">
              {{ get_icon('b_unique', 'Unique'|trans) }}
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/index') }}\">
              {{ get_icon('b_index', 'Index'|trans) }}
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/spatial') }}\">
              {{ get_icon('b_spatial', 'Spatial'|trans) }}
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/fulltext') }}\">
              {{ get_icon('b_ftext', 'Fulltext'|trans) }}
            </button>

            {% if relation_parameters.centralColumnsFeature is not null %}
              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/central-columns-add') }}\">
                {{ get_icon('centralColumns_add', 'Add to central columns'|trans) }}
              </button>
              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"{{ url('/table/structure/central-columns-remove') }}\">
                {{ get_icon('centralColumns_delete', 'Remove from central columns'|trans) }}
              </button>
            {% endif %}
          {% endif %}
        {% endif %}
    </div>
</form>
<hr class=\"d-print-none\">

<div class=\"modal fade\" id=\"moveColumnsModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsModalLabel\">{% trans 'Move columns' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"move_columns_dialog\" title=\"{% trans 'Move columns' %}\">
          <p>{% trans 'Move the columns by dragging them up and down.' %}</p>
          <form action=\"{{ url('/table/structure/move-columns') }}\" name=\"move_column_form\" id=\"move_column_form\">
            <div>
              {{ get_hidden_inputs(db, table) }}
              <ul></ul>
            </div>
          </form>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"designerModalGoButton\">{% trans 'Go' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalPreviewButton\" data-bs-target=\"#designerModalPreviewModal\" data-bs-toggle=\"modal\">{% trans 'Preview SQL' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalCloseButton\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerModalPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"designerModalPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerModalPreviewModalLabel\">{% trans 'Preview SQL' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">{% trans 'Loading…' %}</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#moveColumnsModal\" data-bs-toggle=\"modal\">{% trans 'Go back' %}</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"moveColumnsErrorModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsErrorModalLabel\">{% trans 'Error' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'OK' %}</button>
      </div>
    </div>
  </div>
</div>

{# Work on the table #}
<div id=\"structure-action-links\" class=\"d-print-none\">
    {% if tbl_is_view and not db_is_system_schema %}
        {{ link_or_button(
            url('/view/create'),
            {'db': db, 'table': table},
            get_icon('b_edit', 'Edit view'|trans, true)
        ) }}
    {% endif %}
    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">{{ get_icon('b_print', 'Print'|trans, true) }}</button>
    {% if not tbl_is_view and not db_is_system_schema %}
        {# Only display propose table structure for MySQL < 8.0 #}
        {% if mysql_int_version < 80000 or is_mariadb %}
          <a class=\"me-0\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common({
            'db': db,
            'table': table,
            'sql_query': 'SELECT * FROM ' ~ backquote(table) ~ ' PROCEDURE ANALYSE()',
            'session_max_rows': 'all'
          }, '', false) }}\">
            {{ get_icon(
              'b_tblanalyse',
              'Propose table structure'|trans,
              true
            ) }}
          </a>
          {{ show_mysql_docu('procedure_analyse') }}
        {% endif %}
        {% if is_active %}
            <a href=\"{{ url('/table/tracking', {'db': db, 'table': table}) }}\">
                {{ get_icon('eye', 'Track table'|trans, true) }}
            </a>
        {% endif %}
        <a href=\"#\" id=\"move_columns_anchor\">
            {{ get_icon('b_move', 'Move columns'|trans, true) }}
        </a>
        <a href=\"{{ url('/normalization', {'db': db, 'table': table}) }}\">
            {{ get_icon('normalize', 'Normalize'|trans, true) }}
        </a>
    {% endif %}
    {% if tbl_is_view and not db_is_system_schema %}
        {% if is_active %}
            <a href=\"{{ url('/table/tracking', {'db': db, 'table': table}) }}\">
                {{ get_icon('eye', 'Track view'|trans, true) }}
            </a>
        {% endif %}
    {% endif %}
</div>
{% if not tbl_is_view and not db_is_system_schema %}
    <form method=\"post\" action=\"{{ url('/table/add-field') }}\" id=\"addColumns\" name=\"addColumns\" class=\"d-print-none\">
        {{ get_hidden_inputs(db, table) }}
        {% if show_icons('ActionLinksMode') %}
            {{ get_image('b_insrow', 'Add column'|trans) }}&nbsp;
        {% endif %}
        {% set num_fields -%}
            <input type=\"number\" name=\"num_fields\" value=\"1\" onfocus=\"this.select()\" min=\"1\" required>
        {%- endset %}
        {{ 'Add %s column(s)'|trans|format(num_fields)|raw }}
        <input type=\"hidden\" name=\"field_where\" value=\"after\">&nbsp;
        {# I tried displaying the drop-down inside the label but with Firefox the drop-down was blinking #}
        <select name=\"after_field\">
            <option value=\"first\" data-pos=\"first\">
                {% trans 'at beginning of table' %}
            </option>
            {% for one_column_name in columns_list %}
                <option value=\"{{ one_column_name }}\"
                    {{- loop.revindex0 == 0 ? ' selected=\"selected\"' }}>
                    {{ 'after %s'|trans|format(one_column_name) }}
                </option>
            {% endfor %}
        </select>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
    </form>
{% endif %}

{% if not tbl_is_view and not db_is_system_schema and tbl_storage_engine != 'ARCHIVE' %}
  <div id=\"index_div\" class=\"card mb-3 ajax\">
    <div class=\"card-header\">
      {% trans 'Indexes' %}
      {{ show_mysql_docu('optimizing-database-structure') }}
    </div>

    <div class=\"card-body index_info\">
      {% if indexes is not empty %}
        {{ indexes_duplicates|raw }}

        {{ include('modals/preview_sql_confirmation.twig') }}
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover table-sm w-auto align-middle\" id=\"table_index\">
            <thead>
              <tr>
                <th colspan=\"3\" class=\"d-print-none\">{% trans 'Action' %}</th>
                <th>{% trans 'Keyname' %}</th>
                <th>{% trans 'Type' %}</th>
                <th>{% trans 'Unique' %}</th>
                <th>{% trans 'Packed' %}</th>
                <th>{% trans 'Column' %}</th>
                <th>{% trans 'Cardinality' %}</th>
                <th>{% trans 'Collation' %}</th>
                <th>{% trans 'Null' %}</th>
                <th>{% trans 'Comment' %}</th>
              </tr>
            </thead>

          <tbody class=\"row_span\">
            {% for index in indexes %}
                {% set columns_count = index.getColumnCount() %}
                <tr class=\"noclick\">
                <td rowspan=\"{{ columns_count }}\" class=\"edit_index d-print-none ajax\">
                  <a class=\"ajax\" href=\"{{ url('/table/indexes') }}\" data-post=\"{{ get_common({
                    'db': db,
                    'table': table,
                    'index': index.getName()
                  }, '', false) }}\">
                    {{ get_icon('b_edit', 'Edit'|trans) }}
                  </a>
                </td>
                <td rowspan=\"{{ columns_count }}\" class=\"rename_index d-print-none ajax\" >
                  <a class=\"ajax\" href=\"{{ url('/table/indexes/rename') }}\" data-post=\"{{ get_common({
                    'db': db,
                    'table': table,
                    'index': index.getName()
                  }, '', false) }}\">
                    {{ get_icon('b_rename', 'Rename'|trans) }}
                  </a>
                </td>
                <td rowspan=\"{{ columns_count }}\" class=\"d-print-none\">
                  {% if index.getName() == 'PRIMARY' %}
                    {% set index_params = {
                      'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' DROP PRIMARY KEY;',
                      'message_to_show': 'The primary key has been dropped.'|trans
                    } %}
                  {% else %}
                    {% set index_params = {
                      'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' DROP INDEX ' ~ backquote(index.getName()) ~ ';',
                      'message_to_show': 'Index %s has been dropped.'|trans|format(index.getName())
                    } %}
                  {% endif %}

                  <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"{{ index_params.sql_query }}\">
                  {{ link_or_button(
                    url('/sql'),
                    index_params|merge({'db': db, 'table': table}),
                    get_icon('b_drop', 'Drop'|trans),
                    {'class': 'drop_primary_key_index_anchor ajax'}
                  ) }}
                </td>
                <th rowspan=\"{{ columns_count }}\">{{ index.getName() }}</th>
                <td rowspan=\"{{ columns_count }}\">{{ index.getType()|default(index.getChoice()) }}</td>
                <td rowspan=\"{{ columns_count }}\">{{ index.isUnique() ? 'Yes'|trans : 'No'|trans }}</td>
                <td rowspan=\"{{ columns_count }}\">{{ index.isPacked()|raw }}</td>

                {% for column in index.getColumns() %}
                  {% if column.getSeqInIndex() > 1 %}
                    <tr class=\"noclick\">
                  {% endif %}
                  <td>
                    {% if column.hasExpression() %}{{ column.getExpression() }}{% else %}{{ column.getName() }}{% endif %}
                    {% if column.getSubPart() is not empty %}
                      ({{ column.getSubPart() }})
                    {% endif %}
                  </td>
                  <td>{{ column.getCardinality() }}</td>
                  <td>{{ column.getCollation() }}</td>
                  <td>{{ column.getNull() }}</td>

                  {% if column.getSeqInIndex() == 1 %}
                    <td rowspan=\"{{ columns_count }}\">{{ index.getComments() }}</td>
                  {% endif %}
                  </tr>
                {% endfor %}
              {% endfor %}
            </tbody>
          </table>
        </div>
      {% else %}
        <div class=\"no_indexes_defined\">{{ 'No index defined!'|trans|notice }}</div>
      {% endif %}
    </div>

    <div class=\"card-footer d-print-none\">
      <form action=\"{{ url('/table/indexes') }}\" method=\"post\">
        {{ get_hidden_inputs(db, table) }}
        <input type=\"hidden\" name=\"create_index\" value=\"1\">

        {% apply format('<input class=\"mx-2\" type=\"number\" name=\"added_fields\" value=\"1\" min=\"1\" max=\"16\" required>')|raw %}
          {% trans %}Create an index on %s columns{% endtrans %}
        {% endapply %}

        <input class=\"btn btn-primary add_index ajax\" type=\"submit\" value=\"{% trans 'Go' %}\">
      </form>
    </div>
  </div>
  {{ include('modals/index_dialog_modal.twig') }}
{% endif %}

{# Display partition details #}
{% if have_partitioning %}
    {# Detect partitioning #}
    {% if partition_names is not empty and partition_names[0] is not null %}
        {% set first_partition = partitions[0] %}
        {% set range_or_list = first_partition.getMethod() == 'RANGE'
            or first_partition.getMethod() == 'RANGE COLUMNS'
            or first_partition.getMethod() == 'LIST'
            or first_partition.getMethod() == 'LIST COLUMNS' %}
        {% set sub_partitions = first_partition.getSubPartitions() %}
        {% set has_sub_partitions = first_partition.hasSubPartitions() %}
        {% if has_sub_partitions %}
            {% set first_sub_partition = sub_partitions[0] %}
        {% endif %}

        {% if default_sliders_state != 'disabled' %}
        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#partitionsCollapse\" aria-expanded=\"{{ default_sliders_state == 'open' ? 'true' : 'false' }}\" aria-controls=\"partitionsCollapse\">
            {% trans 'Partitions' %}
          </button>
        </div>
        <div class=\"collapse mb-3{{ default_sliders_state == 'open' ? ' show' }}\" id=\"partitionsCollapse\">
        {% endif %}

        {% include 'table/structure/display_partitions.twig' with {
            'db': db,
            'table': table,
            'partitions': partitions,
            'partition_method': first_partition.getMethod(),
            'partition_expression': first_partition.getExpression(),
            'has_description': first_partition.getDescription() is not empty,
            'has_sub_partitions': has_sub_partitions,
            'sub_partition_method': has_sub_partitions ? first_sub_partition.getMethod(),
            'sub_partition_expression': has_sub_partitions ? first_sub_partition.getExpression(),
            'range_or_list': range_or_list
        } only %}
    {% else %}
        {% include 'table/structure/display_partitions.twig' with {
            'db': db,
            'table': table
        } only %}
    {% endif %}
    {% if default_sliders_state != 'disabled' %}
    </div>
    {% endif %}
{% endif %}

{# Displays Space usage and row statistics #}
{% if show_stats %}
    {{ table_stats|raw }}
{% endif %}
<div class=\"clearfloat\"></div>
{% endblock %}
", "table/structure/display_structure.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/structure/display_structure.twig");
    }
}
