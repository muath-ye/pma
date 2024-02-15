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

/* table/search/input_box.twig */
class __TwigTemplate_7970f1349c117040eeabd614891c40a3 extends Template
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
        // line 2
        if (((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 2, $this->source); })()) && (isset($context["search_column_in_foreigners"]) || array_key_exists("search_column_in_foreigners", $context) ? $context["search_column_in_foreigners"] : (function () { throw new RuntimeError('Variable "search_column_in_foreigners" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    ";
            if (is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["foreign_data"]) || array_key_exists("foreign_data", $context) ? $context["foreign_data"] : (function () { throw new RuntimeError('Variable "foreign_data" does not exist.', 3, $this->source); })()), "disp_row", [], "array", false, false, false, 3))) {
                // line 4
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 4, $this->source); })()), "html", null, true);
                echo "]\"
            id=\"";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 5, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 5, $this->source); })()), "html", null, true);
                echo "\">
            ";
                // line 6
                echo (isset($context["foreign_dropdown"]) || array_key_exists("foreign_dropdown", $context) ? $context["foreign_dropdown"] : (function () { throw new RuntimeError('Variable "foreign_dropdown" does not exist.', 6, $this->source); })());
                echo "
        </select>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["foreign_data"]) || array_key_exists("foreign_data", $context) ? $context["foreign_data"] : (function () { throw new RuntimeError('Variable "foreign_data" does not exist.', 8, $this->source); })()), "foreign_link", [], "array", false, false, false, 8) == true)) {
                // line 9
                echo "        <input type=\"text\"
            id=\"";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 10, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "\"
            name=\"criteriaValues[";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "]\"
            id=\"field_";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["column_name_hash"]) || array_key_exists("column_name_hash", $context) ? $context["column_name_hash"] : (function () { throw new RuntimeError('Variable "column_name_hash" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "]\"
            class=\"textfield\"
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, ($context["criteria_values"] ?? null), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 14, $this->source); })()), [], "array", true, true, false, 14)) {
                    // line 15
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 15, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 15, $this->source); })()), [], "array", false, false, false, 15), "html", null, true);
                    echo "\"
            ";
                }
                // line 16
                echo ">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 17
                echo $this->env->getFunction('url')->getCallable()("/browse-foreigners");
                echo "\" data-post=\"";
                // line 18
                echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 18, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 18, $this->source); })())], "", false);
                // line 19
                echo "&amp;field=";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 19, $this->source); })())), "html", null, true);
                echo "&amp;fieldkey=";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "&amp;fromsearch=1\">
            ";
                // line 21
                echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse foreign values"));
                echo "
        </a>
    ";
            }
        } elseif (twig_in_filter(        // line 24
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 24, $this->source); })()), $this->env->getFunction('get_gis_datatypes')->getCallable()())) {
            // line 25
            echo "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\">
    ";
            // line 30
            if ((isset($context["in_fbs"]) || array_key_exists("in_fbs", $context) ? $context["in_fbs"] : (function () { throw new RuntimeError('Variable "in_fbs" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "        <span class=\"open_search_gis_editor\">
            ";
                // line 32
                echo $this->env->getFunction('link_or_button')->getCallable()("#", null, $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit/Insert")));
                echo "
        </span>
    ";
            }
        } elseif (((is_string($__internal_compile_0 =         // line 35
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 35, $this->source); })())) && is_string($__internal_compile_1 = "enum") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || ((is_string($__internal_compile_2 =         // line 36
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 36, $this->source); })())) && is_string($__internal_compile_3 = "set") && str_starts_with($__internal_compile_2, $__internal_compile_3)) && (isset($context["in_zoom_search_edit"]) || array_key_exists("in_zoom_search_edit", $context) ? $context["in_zoom_search_edit"] : (function () { throw new RuntimeError('Variable "in_zoom_search_edit" does not exist.', 36, $this->source); })())))) {
            // line 37
            echo "    ";
            $context["in_zoom_search_edit"] = false;
            // line 38
            echo "    ";
            $context["value"] = PhpMyAdmin\Util::parseEnumSetValues((isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 38, $this->source); })()));
            // line 39
            echo "    ";
            $context["cnt_value"] = twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()));
            // line 40
            echo "    ";
            // line 46
            echo "    ";
            if ((((is_string($__internal_compile_4 = (isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 46, $this->source); })())) && is_string($__internal_compile_5 = "enum") && str_starts_with($__internal_compile_4, $__internal_compile_5)) &&  !(isset($context["in_zoom_search_edit"]) || array_key_exists("in_zoom_search_edit", $context) ? $context["in_zoom_search_edit"] : (function () { throw new RuntimeError('Variable "in_zoom_search_edit" does not exist.', 46, $this->source); })())) || ((is_string($__internal_compile_6 =             // line 47
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 47, $this->source); })())) && is_string($__internal_compile_7 = "set") && str_starts_with($__internal_compile_6, $__internal_compile_7)) && (isset($context["in_zoom_search_edit"]) || array_key_exists("in_zoom_search_edit", $context) ? $context["in_zoom_search_edit"] : (function () { throw new RuntimeError('Variable "in_zoom_search_edit" does not exist.', 47, $this->source); })())))) {
                // line 48
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "]\"
            id=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 49, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\">
    ";
            } else {
                // line 51
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "]\"
            id=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 52, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\"
            multiple=\"multiple\"
            size=\"";
                // line 54
                echo twig_escape_filter($this->env, min(3, (isset($context["cnt_value"]) || array_key_exists("cnt_value", $context) ? $context["cnt_value"] : (function () { throw new RuntimeError('Variable "cnt_value" does not exist.', 54, $this->source); })())), "html", null, true);
                echo "\">
    ";
            }
            // line 56
            echo "    ";
            // line 57
            echo "    <option value=\"\"></option>
    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cnt_value"]) || array_key_exists("cnt_value", $context) ? $context["cnt_value"] : (function () { throw new RuntimeError('Variable "cnt_value" does not exist.', 58, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["criteria_values"] ?? null), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 59, $this->source); })()), [], "array", true, true, false, 59) && is_iterable(twig_get_attribute($this->env, $this->source,                 // line 60
(isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 60, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60))) && twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 61
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), $context["i"], [], "array", false, false, false, 61), twig_get_attribute($this->env, $this->source, (isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 61, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 61, $this->source); })()), [], "array", false, false, false, 61)))) {
                    // line 62
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 62, $this->source); })()), $context["i"], [], "array", false, false, false, 62);
                    echo "\" selected>
                ";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 63, $this->source); })()), $context["i"], [], "array", false, false, false, 63);
                    echo "
            </option>
        ";
                } else {
                    // line 66
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), $context["i"], [], "array", false, false, false, 66);
                    echo "\">
                ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), $context["i"], [], "array", false, false, false, 67);
                    echo "
            </option>
        ";
                }
                // line 70
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "    </select>
";
        } else {
            // line 73
            echo "    ";
            $context["the_class"] = "textfield";
            // line 74
            echo "    ";
            if (((isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 74, $this->source); })()) == "date")) {
                // line 75
                echo "        ";
                $context["the_class"] = ((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 75, $this->source); })()) . " datefield");
                // line 76
                echo "    ";
            } elseif ((((isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 76, $this->source); })()) == "datetime") || (is_string($__internal_compile_8 = (isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 76, $this->source); })())) && is_string($__internal_compile_9 = "timestamp") && str_starts_with($__internal_compile_8, $__internal_compile_9)))) {
                // line 77
                echo "        ";
                $context["the_class"] = ((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 77, $this->source); })()) . " datetimefield");
                // line 78
                echo "    ";
            } elseif ((is_string($__internal_compile_10 = (isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 78, $this->source); })())) && is_string($__internal_compile_11 = "bit") && str_starts_with($__internal_compile_10, $__internal_compile_11))) {
                // line 79
                echo "        ";
                $context["the_class"] = ((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 79, $this->source); })()) . " bit");
                // line 80
                echo "    ";
            }
            // line 81
            echo "    <input
        ";
            // line 82
            if (((isset($context["is_integer"]) || array_key_exists("is_integer", $context) ? $context["is_integer"] : (function () { throw new RuntimeError('Variable "is_integer" does not exist.', 82, $this->source); })()) || (isset($context["is_float"]) || array_key_exists("is_float", $context) ? $context["is_float"] : (function () { throw new RuntimeError('Variable "is_float" does not exist.', 82, $this->source); })()))) {
                // line 83
                echo "            type=\"number\"
            ";
                // line 84
                if ((isset($context["is_integer"]) || array_key_exists("is_integer", $context) ? $context["is_integer"] : (function () { throw new RuntimeError('Variable "is_integer" does not exist.', 84, $this->source); })())) {
                    // line 85
                    echo "                inputmode=\"numeric\"
            ";
                } else {
                    // line 87
                    echo "                inputmode=\"decimal\"
            ";
                }
                // line 89
                echo "        ";
            } else {
                // line 90
                echo "            type=\"text\"";
            }
            // line 92
            echo "
        name=\"criteriaValues[";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "]\"
        data-type=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["column_data_type"]) || array_key_exists("column_data_type", $context) ? $context["column_data_type"] : (function () { throw new RuntimeError('Variable "column_data_type" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "\"
        ";
            // line 95
            echo (isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 95, $this->source); })());
            echo "
        size=\"40\"
        class=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\"
        id=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 98, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 98, $this->source); })()), "html", null, true);
            echo "\"
        ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["criteria_values"] ?? null), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 99, $this->source); })()), [], "array", true, true, false, 99)) {
                // line 100
                echo "           value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 100, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 100, $this->source); })()), [], "array", false, false, false, 100), "html", null, true);
                echo "\"";
            }
            // line 101
            echo ">
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/search/input_box.twig";
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
        return array (  305 => 101,  300 => 100,  298 => 99,  293 => 98,  289 => 97,  284 => 95,  280 => 94,  276 => 93,  273 => 92,  270 => 90,  267 => 89,  263 => 87,  259 => 85,  257 => 84,  254 => 83,  252 => 82,  249 => 81,  246 => 80,  243 => 79,  240 => 78,  237 => 77,  234 => 76,  231 => 75,  228 => 74,  225 => 73,  221 => 71,  215 => 70,  209 => 67,  204 => 66,  198 => 63,  193 => 62,  191 => 61,  190 => 60,  188 => 59,  184 => 58,  181 => 57,  179 => 56,  174 => 54,  168 => 52,  163 => 51,  157 => 49,  152 => 48,  150 => 47,  148 => 46,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  135 => 36,  134 => 35,  128 => 32,  125 => 31,  123 => 30,  119 => 29,  113 => 26,  110 => 25,  108 => 24,  102 => 21,  98 => 20,  94 => 19,  92 => 18,  89 => 17,  86 => 16,  80 => 15,  78 => 14,  71 => 12,  67 => 11,  62 => 10,  59 => 9,  57 => 8,  52 => 6,  47 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get inputbox based on different column types (Foreign key, geometrical, enum) #}
{% if foreigners and search_column_in_foreigners %}
    {% if foreign_data['disp_row'] is iterable %}
        <select name=\"criteriaValues[{{ column_index }}]\"
            id=\"{{ column_id }}{{ column_index }}\">
            {{ foreign_dropdown|raw }}
        </select>
    {% elseif foreign_data['foreign_link'] == true %}
        <input type=\"text\"
            id=\"{{ column_id }}{{ column_index }}\"
            name=\"criteriaValues[{{ column_index }}]\"
            id=\"field_{{ column_name_hash }}[{{ column_index }}]\"
            class=\"textfield\"
            {% if criteria_values[column_index] is defined %}
                value=\"{{ criteria_values[column_index] }}\"
            {% endif %}>
        <a class=\"ajax browse_foreign\" href=\"{{ url('/browse-foreigners') }}\" data-post=\"
            {{- get_common({'db': db, 'table': table}, '', false) -}}
            &amp;field={{ column_name|url_encode }}&amp;fieldkey=
            {{- column_index }}&amp;fromsearch=1\">
            {{ get_icon('b_browse', 'Browse foreign values'|trans) }}
        </a>
    {% endif %}
{% elseif column_type in get_gis_datatypes() %}
    <input type=\"text\"
        name=\"criteriaValues[{{ column_index }}]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_{{ column_index }}\">
    {% if in_fbs %}
        <span class=\"open_search_gis_editor\">
            {{ link_or_button('#', null, get_icon('b_edit', 'Edit/Insert'|trans)) }}
        </span>
    {% endif %}
{% elseif column_type starts with 'enum'
    or (column_type starts with 'set' and in_zoom_search_edit) %}
    {% set in_zoom_search_edit = false %}
    {% set value = parse_enum_set_values(column_type) %}
    {% set cnt_value = value|length %}
    {#
    Enum in edit mode   --> dropdown
    Enum in search mode --> multiselect
    Set in edit mode    --> multiselect
    Set in search mode  --> input (skipped here, so the 'else' section would handle it)
    #}
    {% if (column_type starts with 'enum' and not in_zoom_search_edit)
        or (column_type starts with 'set' and in_zoom_search_edit) %}
        <select name=\"criteriaValues[{{ column_index }}]\"
            id=\"{{ column_id }}{{ column_index }}\">
    {% else %}
        <select name=\"criteriaValues[{{ column_index }}]\"
            id=\"{{ column_id }}{{ column_index }}\"
            multiple=\"multiple\"
            size=\"{{ min(3, cnt_value) }}\">
    {% endif %}
    {# Add select options #}
    <option value=\"\"></option>
    {% for i in 0..cnt_value - 1 %}
        {% if criteria_values[column_index] is defined
            and criteria_values[column_index] is iterable
            and value[i] in criteria_values[column_index] %}
            <option value=\"{{ value[i]|raw }}\" selected>
                {{ value[i]|raw }}
            </option>
        {% else %}
            <option value=\"{{ value[i]|raw }}\">
                {{ value[i]|raw }}
            </option>
        {% endif %}
    {% endfor %}
    </select>
{% else %}
    {% set the_class = 'textfield' %}
    {% if column_type == 'date' %}
        {% set the_class = the_class ~ ' datefield' %}
    {% elseif column_type == 'datetime' or column_type starts with 'timestamp' %}
        {% set the_class = the_class ~ ' datetimefield' %}
    {% elseif column_type starts with 'bit' %}
        {% set the_class = the_class ~ ' bit' %}
    {% endif %}
    <input
        {% if is_integer or is_float %}
            type=\"number\"
            {% if is_integer %}
                inputmode=\"numeric\"
            {% else %}
                inputmode=\"decimal\"
            {% endif %}
        {% else %}
            type=\"text\"
        {%- endif %}

        name=\"criteriaValues[{{ column_index }}]\"
        data-type=\"{{ column_data_type }}\"
        {{ html_attributes|raw }}
        size=\"40\"
        class=\"{{ the_class }}\"
        id=\"{{ column_id }}{{ column_index }}\"
        {% if criteria_values[column_index] is defined %}
           value=\"{{ criteria_values[column_index] }}\"
        {%- endif %}>
{% endif %}
", "table/search/input_box.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/search/input_box.twig");
    }
}
