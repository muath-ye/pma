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

/* table/insert/column_row.twig */
class __TwigTemplate_6013352cb84fefd1c3fd6873a80a045f extends Template
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
        echo "<tr class=\"noclick\">
  <td class=\"text-center\">
    ";
        // line 3
        echo (isset($context["field_title"]) || array_key_exists("field_title", $context) ? $context["field_title"] : (function () { throw new RuntimeError('Variable "field_title" does not exist.', 3, $this->source); })());
        echo "
    <input type=\"hidden\" name=\"fields_name[multi_edit][";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "md5", [], "any", false, false, false, 4), "html", null, true);
        echo "]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()), "field", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
  </td>

  ";
        // line 7
        if ((isset($context["show_field_types_in_data_edit_view"]) || array_key_exists("show_field_types_in_data_edit_view", $context) ? $context["show_field_types_in_data_edit_view"] : (function () { throw new RuntimeError('Variable "show_field_types_in_data_edit_view" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "    <td class=\"text-center";
            echo ((!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 8, $this->source); })()), "trueType", [], "any", false, false, false, 8), ["set", "enum"])) ? (" text-nowrap") : (""));
            echo "\">
      <span class=\"column_type\" dir=\"ltr\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 9, $this->source); })()), "pmaType", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
    </td>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if ((isset($context["show_function_fields"]) || array_key_exists("show_function_fields", $context) ? $context["show_function_fields"] : (function () { throw new RuntimeError('Variable "show_function_fields" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "    ";
            if ((isset($context["is_column_binary"]) || array_key_exists("is_column_binary", $context) ? $context["is_column_binary"] : (function () { throw new RuntimeError('Variable "is_column_binary" does not exist.', 14, $this->source); })())) {
                // line 15
                echo "      <td class=\"text-center\">";
echo _gettext("Binary");
                echo "</td>
    ";
            } elseif ((twig_in_filter("enum", twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 16, $this->source); })()), "trueType", [], "any", false, false, false, 16)) || twig_in_filter("set", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 16, $this->source); })()), "trueType", [], "any", false, false, false, 16)))) {
                // line 17
                echo "      <td class=\"text-center\">--</td>
    ";
            } else {
                // line 19
                echo "      <td>
        <select name=\"funcs[multi_edit][";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "md5", [], "any", false, false, false, 20), "html", null, true);
                echo "]\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "md5", [], "any", false, false, false, 20), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 20, $this->source); })()), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "pmaType", [], "any", false, false, false, 20), "html", null, true);
                echo "')\" id=\"field_";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "_1\">
          ";
                // line 21
                echo (isset($context["function_options"]) || array_key_exists("function_options", $context) ? $context["function_options"] : (function () { throw new RuntimeError('Variable "function_options" does not exist.', 21, $this->source); })());
                echo "
        </select>
      </td>
    ";
            }
            // line 25
            echo "  ";
        }
        // line 26
        echo "
  <td>
    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })()), "isNull", [], "any", false, false, false, 28)) {
            // line 29
            echo "      <input type=\"hidden\" name=\"fields_null_prev[multi_edit][";
            echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "md5", [], "any", false, false, false, 29), "html", null, true);
            echo "]\"";
            echo ((((isset($context["real_null_value"]) || array_key_exists("real_null_value", $context) ? $context["real_null_value"] : (function () { throw new RuntimeError('Variable "real_null_value" does not exist.', 29, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "firstTimestamp", [], "any", false, false, false, 29))) ? (" value=\"on\"") : (""));
            echo ">
      <input type=\"checkbox\" class=\"checkbox_null\" name=\"fields_null[multi_edit][";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 30, $this->source); })()), "md5", [], "any", false, false, false, 30), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "_2\" aria-label=\"";
echo _gettext("Use the NULL value for this column.");
            echo "\"";
            echo (((isset($context["real_null_value"]) || array_key_exists("real_null_value", $context) ? $context["real_null_value"] : (function () { throw new RuntimeError('Variable "real_null_value" does not exist.', 30, $this->source); })())) ? (" checked") : (""));
            echo ">
      <input type=\"hidden\" class=\"nullify_code\" name=\"nullify_code[multi_edit][";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })()), "md5", [], "any", false, false, false, 31), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["nullify_code"]) || array_key_exists("nullify_code", $context) ? $context["nullify_code"] : (function () { throw new RuntimeError('Variable "nullify_code" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\">
      <input type=\"hidden\" class=\"hashed_field\" name=\"hashed_field[multi_edit][";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()), "md5", [], "any", false, false, false, 32), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()), "md5", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
      <input type=\"hidden\" class=\"multi_edit\" name=\"multi_edit[multi_edit][";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 33, $this->source); })()), "md5", [], "any", false, false, false, 33), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (("[multi_edit][" . (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 33, $this->source); })())) . "]"), "html", null, true);
            echo "\">
    ";
        }
        // line 35
        echo "  </td>

  <td data-type=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" data-decimals=\"";
        echo twig_escape_filter($this->env, (isset($context["decimals"]) || array_key_exists("decimals", $context) ? $context["decimals"] : (function () { throw new RuntimeError('Variable "decimals" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 39
        echo "    <span class=\"default_value hide\">";
        echo (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 39, $this->source); })());
        echo "</span>

    ";
        // line 41
        if ( !twig_test_empty((isset($context["transformed_value"]) || array_key_exists("transformed_value", $context) ? $context["transformed_value"] : (function () { throw new RuntimeError('Variable "transformed_value" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "      ";
            echo (isset($context["transformed_value"]) || array_key_exists("transformed_value", $context) ? $context["transformed_value"] : (function () { throw new RuntimeError('Variable "transformed_value" does not exist.', 42, $this->source); })());
            echo "
    ";
        } else {
            // line 44
            echo "      ";
            if ((isset($context["is_value_foreign_link"]) || array_key_exists("is_value_foreign_link", $context) ? $context["is_value_foreign_link"] : (function () { throw new RuntimeError('Variable "is_value_foreign_link" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "        ";
                echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 45, $this->source); })());
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 46, $this->source); })()), "md5", [], "any", false, false, false, 46), "html", null, true);
                echo "]\" value=\"foreign\">
        <input type=\"text\" name=\"fields[multi_edit][";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "md5", [], "any", false, false, false, 47), "html", null, true);
                echo "]\" class=\"textfield\" tabindex=\"";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "md5", [], "any", false, false, false, 47), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 47, $this->source); })()), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 47, $this->source); })()), "pmaType", [], "any", false, false, false, 47), "html", null, true);
                echo "')\" id=\"field_";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "_3\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "\">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 48
                echo $this->env->getFunction('url')->getCallable()("/browse-foreigners");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 48, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()), "field" => twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 48, $this->source); })()), "field", [], "any", false, false, false, 48), "rownumber" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 48, $this->source); })()), "data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })())]);
                echo "\">";
                echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse foreign values"));
                echo "</a>
      ";
            } elseif ( !twig_test_empty(            // line 49
(isset($context["foreign_dropdown"]) || array_key_exists("foreign_dropdown", $context) ? $context["foreign_dropdown"] : (function () { throw new RuntimeError('Variable "foreign_dropdown" does not exist.', 49, $this->source); })()))) {
                // line 50
                echo "        ";
                echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 50, $this->source); })());
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 51, $this->source); })()), "md5", [], "any", false, false, false, 51), "html", null, true);
                echo "]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 51, $this->source); })()), "isBinary", [], "any", false, false, false, 51)) ? ("hex") : ("foreign"));
                echo "\">
        <select name=\"fields[multi_edit][";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "md5", [], "any", false, false, false, 52), "html", null, true);
                echo "]\" class=\"textfield\" tabindex=\"";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\" id=\"field_";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "_3\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "md5", [], "any", false, false, false, 52), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 52, $this->source); })()), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 52, $this->source); })()), "pmaType", [], "any", false, false, false, 52), "html", null, true);
                echo "')\">
          ";
                // line 53
                echo (isset($context["foreign_dropdown"]) || array_key_exists("foreign_dropdown", $context) ? $context["foreign_dropdown"] : (function () { throw new RuntimeError('Variable "foreign_dropdown" does not exist.', 53, $this->source); })());
                echo "
        </select>
      ";
            } elseif ((((            // line 55
(isset($context["longtext_double_textarea"]) || array_key_exists("longtext_double_textarea", $context) ? $context["longtext_double_textarea"] : (function () { throw new RuntimeError('Variable "longtext_double_textarea" does not exist.', 55, $this->source); })()) && twig_in_filter("longtext", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 55, $this->source); })()), "pmaType", [], "any", false, false, false, 55))) || twig_in_filter("json", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 55, $this->source); })()), "pmaType", [], "any", false, false, false, 55))) || twig_in_filter("text", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 55, $this->source); })()), "pmaType", [], "any", false, false, false, 55)))) {
                // line 56
                echo "        ";
                echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 56, $this->source); })());
                echo "
        <textarea name=\"fields[multi_edit][";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 57, $this->source); })()), "md5", [], "any", false, false, false, 57), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "_3\" data-type=\"";
                echo twig_escape_filter($this->env, (isset($context["data_type"]) || array_key_exists("data_type", $context) ? $context["data_type"] : (function () { throw new RuntimeError('Variable "data_type" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\" dir=\"";
                echo twig_escape_filter($this->env, (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\" rows=\"";
                echo twig_escape_filter($this->env, (isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\" cols=\"";
                echo twig_escape_filter($this->env, (isset($context["textarea_cols"]) || array_key_exists("textarea_cols", $context) ? $context["textarea_cols"] : (function () { throw new RuntimeError('Variable "textarea_cols" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\" tabindex=\"";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\"";
                // line 58
                (((isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 58, $this->source); })())) ? (print (twig_escape_filter($this->env, ((" data-maxlength=\"" . (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 58, $this->source); })())) . "\""), "html", null, true))) : (print ("")));
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "isChar", [], "any", false, false, false, 58)) ? (" class=\"char charField\"") : (""));
                echo " onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "md5", [], "any", false, false, false, 58), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 58, $this->source); })()), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "pmaType", [], "any", false, false, false, 58), "html", null, true);
                echo "')\">";
                // line 60
                echo (((is_string($__internal_compile_0 = (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 60, $this->source); })())) && is_string($__internal_compile_1 = "
") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("
") : (""));
                echo (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 60, $this->source); })());
                // line 61
                echo "</textarea>
        ";
                // line 62
                if ((twig_in_filter("text", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 62, $this->source); })()), "pmaType", [], "any", false, false, false, 62)) && (twig_length_filter($this->env, (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 62, $this->source); })())) > 32000))) {
                    // line 63
                    echo "          </td>
          <td>
          ";
                    // line 65
echo _gettext("Because of its length,<br> this column might not be editable.");
                    // line 66
                    echo "        ";
                }
                // line 67
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 67, $this->source); })()), "pmaType", [], "any", false, false, false, 67) == "enum")) {
                // line 68
                echo "        ";
                echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 68, $this->source); })());
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 69
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 69, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 69, $this->source); })()), "md5", [], "any", false, false, false, 69), "html", null, true);
                echo "]\" value=\"enum\">
        ";
                // line 70
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70)) > 20)) {
                    // line 71
                    echo "          <select name=\"fields[multi_edit][";
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 71, $this->source); })()), "md5", [], "any", false, false, false, 71), "html", null, true);
                    echo "]\" class=\"textfield\" tabindex=\"";
                    echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo "\" id=\"field_";
                    echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo "_3\" onchange=\"return verificationsAfterFieldChange('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 71, $this->source); })()), "md5", [], "any", false, false, false, 71), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 71, $this->source); })()), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 71, $this->source); })()), "pmaType", [], "any", false, false, false, 71), "html", null, true);
                    echo "')\">
            <option value=\"\"></option>
            ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["enum_values"]) || array_key_exists("enum_values", $context) ? $context["enum_values"] : (function () { throw new RuntimeError('Variable "enum_values" does not exist.', 73, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 74
                        echo "              <option value=\"";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "\"";
                        echo ((($context["enum_value"] == (isset($context["enum_selected_value"]) || array_key_exists("enum_selected_value", $context) ? $context["enum_selected_value"] : (function () { throw new RuntimeError('Variable "enum_selected_value" does not exist.', 74, $this->source); })()))) ? (" selected") : (""));
                        echo ">";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enum_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "          </select>
        ";
                } else {
                    // line 78
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["enum_values"]) || array_key_exists("enum_values", $context) ? $context["enum_values"] : (function () { throw new RuntimeError('Variable "enum_values" does not exist.', 78, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 79
                        echo "            <input type=\"radio\" name=\"fields[multi_edit][";
                        echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 79, $this->source); })()), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 79, $this->source); })()), "md5", [], "any", false, false, false, 79), "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "\" class=\"textfield\" tabindex=\"";
                        echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 79, $this->source); })()), "html", null, true);
                        echo "\" id=\"field_";
                        echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 79, $this->source); })()), "html", null, true);
                        echo "_3_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), "html", null, true);
                        echo "\" onchange=\"return verificationsAfterFieldChange('";
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 79, $this->source); })()), "md5", [], "any", false, false, false, 79), "js"), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 79, $this->source); })()), "js"), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 79, $this->source); })()), "pmaType", [], "any", false, false, false, 79), "html", null, true);
                        echo "')\"";
                        echo ((($context["enum_value"] == (isset($context["enum_selected_value"]) || array_key_exists("enum_selected_value", $context) ? $context["enum_selected_value"] : (function () { throw new RuntimeError('Variable "enum_selected_value" does not exist.', 79, $this->source); })()))) ? (" checked") : (""));
                        echo ">
            <label for=\"field_";
                        // line 80
                        echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 80, $this->source); })()), "html", null, true);
                        echo "_3_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "</label>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enum_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "        ";
                }
                // line 83
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 83, $this->source); })()), "pmaType", [], "any", false, false, false, 83) == "set")) {
                // line 84
                echo "        ";
                echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 84, $this->source); })());
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 85, $this->source); })()), "md5", [], "any", false, false, false, 85), "html", null, true);
                echo "]\" value=\"set\">
        <select name=\"fields[multi_edit][";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 86, $this->source); })()), "md5", [], "any", false, false, false, 86), "html", null, true);
                echo "][]\" class=\"textfield\" tabindex=\"";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "\" size=\"";
                echo twig_escape_filter($this->env, (isset($context["set_select_size"]) || array_key_exists("set_select_size", $context) ? $context["set_select_size"] : (function () { throw new RuntimeError('Variable "set_select_size" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "\" id=\"field_";
                echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "_3\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 86, $this->source); })()), "md5", [], "any", false, false, false, 86), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 86, $this->source); })()), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 86, $this->source); })()), "pmaType", [], "any", false, false, false, 86), "html", null, true);
                echo "')\" multiple>
          ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["set_values"]) || array_key_exists("set_values", $context) ? $context["set_values"] : (function () { throw new RuntimeError('Variable "set_values" does not exist.', 87, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["set_value"]) {
                    // line 88
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["set_value"], "html", null, true);
                    echo "\"";
                    echo ((twig_in_filter($context["set_value"], twig_split_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), ","))) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $context["set_value"], "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['set_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "        </select>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 91
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 91, $this->source); })()), "isBinary", [], "any", false, false, false, 91) || twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 91, $this->source); })()), "isBlob", [], "any", false, false, false, 91))) {
                // line 92
                echo "        ";
                if ((isset($context["is_column_protected_blob"]) || array_key_exists("is_column_protected_blob", $context) ? $context["is_column_protected_blob"] : (function () { throw new RuntimeError('Variable "is_column_protected_blob" does not exist.', 92, $this->source); })())) {
                    // line 93
                    echo "          ";
echo _gettext("Binary - do not edit");
                    // line 94
                    echo "          (";
                    echo twig_escape_filter($this->env, (isset($context["blob_value"]) || array_key_exists("blob_value", $context) ? $context["blob_value"] : (function () { throw new RuntimeError('Variable "blob_value" does not exist.', 94, $this->source); })()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["blob_value_unit"]) || array_key_exists("blob_value_unit", $context) ? $context["blob_value_unit"] : (function () { throw new RuntimeError('Variable "blob_value_unit" does not exist.', 94, $this->source); })()), "html", null, true);
                    echo ")
          <input type=\"hidden\" name=\"fields[multi_edit][";
                    // line 95
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 95, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 95, $this->source); })()), "md5", [], "any", false, false, false, 95), "html", null, true);
                    echo "]\" value=\"\">
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 96
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 96, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 96, $this->source); })()), "md5", [], "any", false, false, false, 96), "html", null, true);
                    echo "]\" value=\"protected\">
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 97
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 97, $this->source); })()), "isBlob", [], "any", false, false, false, 97) || (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 97, $this->source); })()), "length", [], "any", false, false, false, 97) > (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 97, $this->source); })())))) {
                    // line 98
                    echo "          ";
                    echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 98, $this->source); })());
                    echo "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 99
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 99, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 99, $this->source); })()), "md5", [], "any", false, false, false, 99), "html", null, true);
                    echo "]\" value=\"hex\">
          <textarea name=\"fields[multi_edit][";
                    // line 100
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 100, $this->source); })()), "md5", [], "any", false, false, false, 100), "html", null, true);
                    echo "]\" id=\"field_";
                    echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo "_3\" data-type=\"HEX\" dir=\"";
                    echo twig_escape_filter($this->env, (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo "\" rows=\"";
                    echo twig_escape_filter($this->env, (isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo "\" cols=\"";
                    echo twig_escape_filter($this->env, (isset($context["textarea_cols"]) || array_key_exists("textarea_cols", $context) ? $context["textarea_cols"] : (function () { throw new RuntimeError('Variable "textarea_cols" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo "\" tabindex=\"";
                    echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo "\"";
                    // line 101
                    (((isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 101, $this->source); })())) ? (print (twig_escape_filter($this->env, ((" data-maxlength=\"" . (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 101, $this->source); })())) . "\""), "html", null, true))) : (print ("")));
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()), "isChar", [], "any", false, false, false, 101)) ? (" class=\"char charField\"") : (""));
                    echo " onchange=\"return verificationsAfterFieldChange('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()), "md5", [], "any", false, false, false, 101), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 101, $this->source); })()), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 101, $this->source); })()), "pmaType", [], "any", false, false, false, 101), "html", null, true);
                    echo "')\">";
                    // line 103
                    echo (((is_string($__internal_compile_2 = (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 103, $this->source); })())) && is_string($__internal_compile_3 = "
") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? ("
") : (""));
                    echo (isset($context["special_chars"]) || array_key_exists("special_chars", $context) ? $context["special_chars"] : (function () { throw new RuntimeError('Variable "special_chars" does not exist.', 103, $this->source); })());
                    // line 104
                    echo "</textarea>
        ";
                } else {
                    // line 106
                    echo "          ";
                    echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 106, $this->source); })());
                    echo "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 107, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 107, $this->source); })()), "md5", [], "any", false, false, false, 107), "html", null, true);
                    echo "]\" value=\"hex\">
          ";
                    // line 108
                    echo (isset($context["input_field_html"]) || array_key_exists("input_field_html", $context) ? $context["input_field_html"] : (function () { throw new RuntimeError('Variable "input_field_html" does not exist.', 108, $this->source); })());
                    echo "
        ";
                }
                // line 110
                echo "        ";
                if (((isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 110, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 110, $this->source); })()), "isBlob", [], "any", false, false, false, 110))) {
                    // line 111
                    echo "          <br>
          ";
                    // line 113
                    echo "          <input type=\"file\" name=\"fields_upload[multi_edit][";
                    echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 113, $this->source); })()), "md5", [], "any", false, false, false, 113), "html", null, true);
                    echo "]\" class=\"textfield noDragDrop\" id=\"field_";
                    echo twig_escape_filter($this->env, (isset($context["id_index"]) || array_key_exists("id_index", $context) ? $context["id_index"] : (function () { throw new RuntimeError('Variable "id_index" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "_3\" size=\"10\" onchange=\"return verificationsAfterFieldChange('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 113, $this->source); })()), "md5", [], "any", false, false, false, 113), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 113, $this->source); })()), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 113, $this->source); })()), "pmaType", [], "any", false, false, false, 113), "html", null, true);
                    echo "')\">
          ";
                    // line 114
                    echo twig_escape_filter($this->env, (isset($context["max_upload_size"]) || array_key_exists("max_upload_size", $context) ? $context["max_upload_size"] : (function () { throw new RuntimeError('Variable "max_upload_size" does not exist.', 114, $this->source); })()), "html", null, true);
                    echo "
        ";
                }
                // line 116
                echo "        ";
                echo (isset($context["select_option_for_upload"]) || array_key_exists("select_option_for_upload", $context) ? $context["select_option_for_upload"] : (function () { throw new RuntimeError('Variable "select_option_for_upload" does not exist.', 116, $this->source); })());
                echo "
      ";
            } else {
                // line 118
                echo "        ";
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 118, $this->source); })());
                echo "
      ";
            }
            // line 120
            echo "
      ";
            // line 121
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 121, $this->source); })()), "pmaType", [], "any", false, false, false, 121), (isset($context["gis_data_types"]) || array_key_exists("gis_data_types", $context) ? $context["gis_data_types"] : (function () { throw new RuntimeError('Variable "gis_data_types" does not exist.', 121, $this->source); })()))) {
                // line 122
                echo "        <span class=\"open_gis_editor\" data-row-id=\"";
                echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 122, $this->source); })()), "html", null, true);
                echo "\">
          ";
                // line 123
                echo $this->env->getFunction('link_or_button')->getCallable()("#", null, $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit/Insert")));
                echo "
        </span>
      ";
            }
            // line 126
            echo "    ";
        }
        // line 127
        echo "  </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/column_row.twig";
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
        return array (  637 => 127,  634 => 126,  628 => 123,  623 => 122,  621 => 121,  618 => 120,  612 => 118,  606 => 116,  601 => 114,  586 => 113,  583 => 111,  580 => 110,  575 => 108,  569 => 107,  564 => 106,  560 => 104,  555 => 103,  545 => 101,  530 => 100,  524 => 99,  519 => 98,  517 => 97,  511 => 96,  505 => 95,  498 => 94,  495 => 93,  492 => 92,  490 => 91,  487 => 90,  474 => 88,  470 => 87,  452 => 86,  446 => 85,  441 => 84,  438 => 83,  435 => 82,  415 => 80,  392 => 79,  374 => 78,  370 => 76,  357 => 74,  353 => 73,  335 => 71,  333 => 70,  327 => 69,  322 => 68,  319 => 67,  316 => 66,  314 => 65,  310 => 63,  308 => 62,  305 => 61,  300 => 60,  290 => 58,  273 => 57,  268 => 56,  266 => 55,  261 => 53,  245 => 52,  237 => 51,  232 => 50,  230 => 49,  222 => 48,  204 => 47,  198 => 46,  193 => 45,  190 => 44,  184 => 42,  182 => 41,  176 => 39,  170 => 37,  166 => 35,  157 => 33,  149 => 32,  141 => 31,  129 => 30,  120 => 29,  118 => 28,  114 => 26,  111 => 25,  104 => 21,  90 => 20,  87 => 19,  83 => 17,  81 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  62 => 9,  57 => 8,  55 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"noclick\">
  <td class=\"text-center\">
    {{ field_title|raw }}
    <input type=\"hidden\" name=\"fields_name[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ column.field }}\">
  </td>

  {% if show_field_types_in_data_edit_view %}
    <td class=\"text-center{{ column.trueType not in ['set', 'enum'] ? ' text-nowrap' }}\">
      <span class=\"column_type\" dir=\"ltr\">{{ column.pmaType }}</span>
    </td>
  {% endif %}

  {% if show_function_fields %}
    {% if is_column_binary %}
      <td class=\"text-center\">{% trans 'Binary' %}</td>
    {% elseif 'enum' in column.trueType or 'set' in column.trueType %}
      <td class=\"text-center\">--</td>
    {% else %}
      <td>
        <select name=\"funcs[multi_edit][{{ row_id }}][{{ column.md5 }}]\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\" id=\"field_{{ id_index }}_1\">
          {{ function_options|raw }}
        </select>
      </td>
    {% endif %}
  {% endif %}

  <td>
    {% if column.isNull %}
      <input type=\"hidden\" name=\"fields_null_prev[multi_edit][{{ row_id }}][{{ column.md5 }}]\"{{ real_null_value and not column.firstTimestamp ? ' value=\"on\"' }}>
      <input type=\"checkbox\" class=\"checkbox_null\" name=\"fields_null[multi_edit][{{ row_id }}][{{ column.md5 }}]\" id=\"field_{{ id_index }}_2\" aria-label=\"{% trans 'Use the NULL value for this column.' %}\"{{ real_null_value ? ' checked' }}>
      <input type=\"hidden\" class=\"nullify_code\" name=\"nullify_code[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ nullify_code }}\">
      <input type=\"hidden\" class=\"hashed_field\" name=\"hashed_field[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ column.md5 }}\">
      <input type=\"hidden\" class=\"multi_edit\" name=\"multi_edit[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ ('[multi_edit][' ~ row_id ~ ']') }}\">
    {% endif %}
  </td>

  <td data-type=\"{{ type }}\" data-decimals=\"{{ decimals }}\">
    {# Will be used by table/change.js to set the default value for the \"Continue insertion\" feature. #}
    <span class=\"default_value hide\">{{ special_chars|raw }}</span>

    {% if transformed_value is not empty %}
      {{ transformed_value|raw }}
    {% else %}
      {% if is_value_foreign_link %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"foreign\">
        <input type=\"text\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield\" tabindex=\"{{ id_index }}\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\" id=\"field_{{ id_index }}_3\" value=\"{{ data }}\">
        <a class=\"ajax browse_foreign\" href=\"{{ url('/browse-foreigners') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'field': column.field, 'rownumber': row_id, 'data': data}) }}\">{{ get_icon('b_browse', 'Browse foreign values'|trans) }}</a>
      {% elseif foreign_dropdown is not empty %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ column.isBinary ? 'hex' : 'foreign' }}\">
        <select name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield\" tabindex=\"{{ id_index }}\" id=\"field_{{ id_index }}_3\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\">
          {{ foreign_dropdown|raw }}
        </select>
      {% elseif (longtext_double_textarea and 'longtext' in column.pmaType) or 'json' in column.pmaType or 'text' in column.pmaType %}
        {{ backup_field|raw }}
        <textarea name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" id=\"field_{{ id_index }}_3\" data-type=\"{{ data_type }}\" dir=\"{{ text_dir }}\" rows=\"{{ textarea_rows }}\" cols=\"{{ textarea_cols }}\" tabindex=\"{{ id_index }}\"
          {{- max_length ? ' data-maxlength=\"' ~ max_length ~ '\"' }}{{ column.isChar ? ' class=\"char charField\"' }} onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\">
          {#- We need to duplicate the first \\n or otherwise we will lose the first newline entered in a VARCHAR or TEXT column -#}
          {{- special_chars starts with \"\\r\\n\" ? \"\\n\" }}{{ special_chars|raw -}}
        </textarea>
        {% if 'text' in column.pmaType and special_chars|length > 32000 %}
          </td>
          <td>
          {% trans 'Because of its length,<br> this column might not be editable.' %}
        {% endif %}
      {% elseif column.pmaType == 'enum' %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"enum\">
        {% if column.type|length > 20 %}
          <select name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield\" tabindex=\"{{ id_index }}\" id=\"field_{{ id_index }}_3\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\">
            <option value=\"\"></option>
            {% for enum_value in enum_values %}
              <option value=\"{{ enum_value }}\"{{ enum_value == enum_selected_value ? ' selected' }}>{{ enum_value }}</option>
            {% endfor %}
          </select>
        {% else %}
          {% for enum_value in enum_values %}
            <input type=\"radio\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"{{ enum_value }}\" class=\"textfield\" tabindex=\"{{ id_index }}\" id=\"field_{{ id_index }}_3_{{ loop.index0 }}\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\"{{ enum_value == enum_selected_value ? ' checked' }}>
            <label for=\"field_{{ id_index }}_3_{{ loop.index0 }}\">{{ enum_value }}</label>
          {% endfor %}
        {% endif %}
      {% elseif column.pmaType == 'set' %}
        {{ backup_field|raw }}
        <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"set\">
        <select name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}][]\" class=\"textfield\" tabindex=\"{{ id_index }}\" size=\"{{ set_select_size }}\" id=\"field_{{ id_index }}_3\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\" multiple>
          {% for set_value in set_values %}
            <option value=\"{{ set_value }}\"{{ set_value in data|split(',') ? ' selected' }}>{{ set_value }}</option>
          {% endfor %}
        </select>
      {% elseif column.isBinary or column.isBlob %}
        {% if is_column_protected_blob %}
          {% trans 'Binary - do not edit' %}
          ({{ blob_value }} {{ blob_value_unit }})
          <input type=\"hidden\" name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"\">
          <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"protected\">
        {% elseif column.isBlob or (column.length > limit_chars) %}
          {{ backup_field|raw }}
          <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"hex\">
          <textarea name=\"fields[multi_edit][{{ row_id }}][{{ column.md5 }}]\" id=\"field_{{ id_index }}_3\" data-type=\"HEX\" dir=\"{{ text_dir }}\" rows=\"{{ textarea_rows }}\" cols=\"{{ textarea_cols }}\" tabindex=\"{{ id_index }}\"
            {{- max_length ? ' data-maxlength=\"' ~ max_length ~ '\"' }}{{ column.isChar ? ' class=\"char charField\"' }} onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\">
            {#- We need to duplicate the first \\n or otherwise we will lose the first newline entered in a VARCHAR or TEXT column -#}
            {{- special_chars starts with \"\\r\\n\" ? \"\\n\" }}{{ special_chars|raw -}}
          </textarea>
        {% else %}
          {{ backup_field|raw }}
          <input type=\"hidden\" name=\"fields_type[multi_edit][{{ row_id }}][{{ column.md5 }}]\" value=\"hex\">
          {{ input_field_html|raw }}
        {% endif %}
        {% if is_upload and column.isBlob %}
          <br>
          {# We don't want to prevent users from using browser's default drag-drop feature on some page(s), so we add noDragDrop class to the input #}
          <input type=\"file\" name=\"fields_upload[multi_edit][{{ row_id }}][{{ column.md5 }}]\" class=\"textfield noDragDrop\" id=\"field_{{ id_index }}_3\" size=\"10\" onchange=\"return verificationsAfterFieldChange('{{ column.md5|escape('js') }}', '{{ row_id|escape('js') }}', '{{ column.pmaType }}')\">
          {{ max_upload_size }}
        {% endif %}
        {{ select_option_for_upload|raw }}
      {% else %}
        {{ value|raw }}
      {% endif %}

      {% if column.pmaType in gis_data_types %}
        <span class=\"open_gis_editor\" data-row-id=\"{{ row_id }}\">
          {{ link_or_button('#', null, get_icon('b_edit', 'Edit/Insert'|trans)) }}
        </span>
      {% endif %}
    {% endif %}
  </td>
</tr>
", "table/insert/column_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/column_row.twig");
    }
}
