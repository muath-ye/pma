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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_e1f5d32691ab47b92e86064dd19352cc extends Template
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
        $context["ci"] = 0;
        // line 3
        echo "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        echo "
<td class=\"text-center\">
    ";
        // line 10
        echo "    ";
        $this->loadTemplate("columns_definitions/column_name.twig", "columns_definitions/column_attributes.twig", 10)->display(twig_to_array(["column_number" =>         // line 11
(isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 11, $this->source); })()), "ci" =>         // line 12
(isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 12, $this->source); })()), "ci_offset" =>         // line 13
(isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 13, $this->source); })()), "column_meta" =>         // line 14
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 14, $this->source); })()), "has_central_columns_feature" =>  !(null === twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 15, $this->source); })()), "centralColumnsFeature", [], "any", false, false, false, 15)), "max_rows" =>         // line 16
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 16, $this->source); })())]));
        // line 18
        echo "    ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 18, $this->source); })()) + 1);
        // line 19
        echo "</td>
<td class=\"text-center\">
  <select class=\"column_type\" name=\"field_type[";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 21, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 21, $this->source); })())), "html", null, true);
        echo "\"";
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 22) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 22, $this->source); })()), "column_status", [], "array", false, false, false, 22), "isEditable", [], "array", false, false, false, 22))) ? (" disabled") : (""));
        echo ">
    ";
        // line 23
        echo $this->env->getFunction('get_supported_datatypes')->getCallable()((isset($context["type_upper"]) || array_key_exists("type_upper", $context) ? $context["type_upper"] : (function () { throw new RuntimeError('Variable "type_upper" does not exist.', 23, $this->source); })()));
        echo "
  </select>
  ";
        // line 25
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 25, $this->source); })()) + 1);
        // line 26
        echo "</td>
<td class=\"text-center\">
  <input id=\"field_";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 28, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 28, $this->source); })())), "html", null, true);
        echo "\" type=\"text\" name=\"field_length[";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "]\" size=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["length_values_input_size"]) || array_key_exists("length_values_input_size", $context) ? $context["length_values_input_size"] : (function () { throw new RuntimeError('Variable "length_values_input_size" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" class=\"textfield\">
  <p class=\"enum_notice\" id=\"enum_notice_";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 30, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 30, $this->source); })())), "html", null, true);
        echo "\">
    <a href=\"#\" class=\"open_enum_editor\">";
        // line 31
echo _gettext("Edit ENUM/SET values");
        echo "</a>
  </p>
  ";
        // line 33
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 33, $this->source); })()) + 1);
        // line 34
        echo "</td>
<td class=\"text-center\">
  <select name=\"field_default_type[";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 36, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 36, $this->source); })())), "html", null, true);
        echo "\" class=\"default_type\">
    <option value=\"NONE\"";
        // line 37
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 37) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 37, $this->source); })()), "DefaultType", [], "array", false, false, false, 37) == "NONE"))) ? (" selected") : (""));
        echo ">
      ";
        // line 38
echo _pgettext("for default", "None");
        // line 39
        echo "    </option>
    <option value=\"USER_DEFINED\"";
        // line 40
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 40) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 40, $this->source); })()), "DefaultType", [], "array", false, false, false, 40) == "USER_DEFINED"))) ? (" selected") : (""));
        echo ">
      ";
        // line 41
echo _gettext("As defined:");
        // line 42
        echo "    </option>
    <option value=\"NULL\"";
        // line 43
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 43) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 43, $this->source); })()), "DefaultType", [], "array", false, false, false, 43) == "NULL"))) ? (" selected") : (""));
        echo ">
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"";
        // line 46
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 46) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 46, $this->source); })()), "DefaultType", [], "array", false, false, false, 46) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        echo ">
      CURRENT_TIMESTAMP
    </option>
    ";
        // line 49
        if ($this->env->getFunction('is_uuid_supported')->getCallable()()) {
            // line 50
            echo "    <option value=\"UUID\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 50) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 50, $this->source); })()), "DefaultType", [], "array", false, false, false, 50) == "UUID"))) ? (" selected") : (""));
            echo ">
      UUID
    </option>
    ";
        }
        // line 54
        echo "  </select>
  ";
        // line 55
        if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 55, $this->source); })()) == "textarea")) {
            // line 56
            echo "    <textarea name=\"field_default_value[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "]\" cols=\"15\" class=\"textfield default_value\">";
            echo twig_escape_filter($this->env, (isset($context["default_value"]) || array_key_exists("default_value", $context) ? $context["default_value"] : (function () { throw new RuntimeError('Variable "default_value" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</textarea>
  ";
        } else {
            // line 58
            echo "    <input type=\"text\" name=\"field_default_value[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "]\" size=\"12\" value=\"";
            (((array_key_exists("default_value", $context) &&  !(null === (isset($context["default_value"]) || array_key_exists("default_value", $context) ? $context["default_value"] : (function () { throw new RuntimeError('Variable "default_value" does not exist.', 58, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["default_value"]) || array_key_exists("default_value", $context) ? $context["default_value"] : (function () { throw new RuntimeError('Variable "default_value" does not exist.', 58, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\" class=\"textfield default_value\">
  ";
        }
        // line 60
        echo "  ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 60, $this->source); })()) + 1);
        // line 61
        echo "</td>
<td class=\"text-center\">
  ";
        // line 64
        echo "  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 64, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 64, $this->source); })())), "html", null, true);
        echo "\">
    <option value=\"\"></option>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 67
            echo "      <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 69
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 69), "html", null, true);
                echo "\"";
                // line 70
                echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Collation", [], "array", true, true, false, 70) && (twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70) == twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 70, $this->source); })()), "Collation", [], "array", false, false, false, 70)))) ? (" selected") : (""));
                echo ">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 71), "html", null, true);
                // line 72
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </optgroup>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </select>
  ";
        // line 77
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 77, $this->source); })()) + 1);
        // line 78
        echo "</td>
<td class=\"text-center\">
    ";
        // line 81
        echo "    ";
        $this->loadTemplate("columns_definitions/column_attribute.twig", "columns_definitions/column_attributes.twig", 81)->display(twig_to_array(["column_number" =>         // line 82
(isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 82, $this->source); })()), "ci" =>         // line 83
(isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 83, $this->source); })()), "ci_offset" =>         // line 84
(isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 84, $this->source); })()), "column_meta" =>         // line 85
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 85, $this->source); })()), "extracted_columnspec" =>         // line 86
(isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 86, $this->source); })()), "submit_attribute" =>         // line 87
(isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 87, $this->source); })()), "attribute_types" =>         // line 88
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 88, $this->source); })())]));
        // line 90
        echo "    ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 90, $this->source); })()) + 1);
        // line 91
        echo "</td>
<td class=\"text-center\">
    <input name=\"field_null[";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 93, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 93, $this->source); })())), "html", null, true);
        echo "\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 94
        echo (((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Null", [], "array", true, true, false, 94) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 94, $this->source); })()), "Null", [], "array", false, false, false, 94))) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 94, $this->source); })()), "Null", [], "array", false, false, false, 94) != "NO")) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 94, $this->source); })()), "Null", [], "array", false, false, false, 94) != "NOT NULL"))) ? (" checked") : (""));
        echo ">
    ";
        // line 95
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 95, $this->source); })()) + 1);
        // line 96
        echo "</td>
";
        // line 97
        if ((array_key_exists("change_column", $context) &&  !twig_test_empty((isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 97, $this->source); })())))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 100, $this->source); })()), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 100, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 100, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 100, $this->source); })())), "html", null, true);
            echo "\" type=\"checkbox\" value=\"NULL\" class=\"allow_null\"";
            // line 101
            if ((isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 101, $this->source); })())) {
                echo " checked>";
            } else {
                // line 102
                echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details");
                echo "\" disabled>";
            }
            // line 104
            echo "      ";
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 104, $this->source); })()) + 1);
            // line 105
            echo "    </td>
";
        }
        // line 107
        if ( !(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 107, $this->source); })())) {
            // line 108
            echo "    ";
            // line 109
            echo "    <td class=\"text-center\">
      <select name=\"field_key[";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 110, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 110, $this->source); })())), "html", null, true);
            echo "\" data-index=\"\">
        <option value=\"none_";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "\">---</option>
        <option value=\"primary_";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "\" title=\"";
echo _gettext("Primary");
            echo "\"";
            // line 113
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 113) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 113, $this->source); })()), "Key", [], "array", false, false, false, 113) == "PRI"))) ? (" selected") : (""));
            echo ">
          PRIMARY
        </option>
        <option value=\"unique_";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 116, $this->source); })()), "html", null, true);
            echo "\" title=\"";
echo _gettext("Unique");
            echo "\"";
            // line 117
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 117) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 117, $this->source); })()), "Key", [], "array", false, false, false, 117) == "UNI"))) ? (" selected") : (""));
            echo ">
          UNIQUE
        </option>
        <option value=\"index_";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "\" title=\"";
echo _gettext("Index");
            echo "\"";
            // line 121
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 121) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 121, $this->source); })()), "Key", [], "array", false, false, false, 121) == "MUL"))) ? (" selected") : (""));
            echo ">
          INDEX
        </option>
        <option value=\"fulltext_";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 124, $this->source); })()), "html", null, true);
            echo "\" title=\"";
echo _gettext("Fulltext");
            echo "\"";
            // line 125
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 125) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 125, $this->source); })()), "Key", [], "array", false, false, false, 125) == "FULLTEXT"))) ? (" selected") : (""));
            echo ">
          FULLTEXT
        </option>
        <option value=\"spatial_";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "\" title=\"";
echo _gettext("Spatial");
            echo "\"";
            // line 129
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 129) && (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 129, $this->source); })()), "Key", [], "array", false, false, false, 129) == "SPATIAL"))) ? (" selected") : (""));
            echo ">
          SPATIAL
        </option>
      </select>
      ";
            // line 133
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 133, $this->source); })()) + 1);
            // line 134
            echo "    </td>
";
        }
        // line 136
        echo "<td class=\"text-center\">
  <input name=\"field_extra[";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 137, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 137, $this->source); })())), "html", null, true);
        echo "\" type=\"checkbox\" value=\"AUTO_INCREMENT\"";
        // line 138
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 138) && (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 138, $this->source); })()), "Extra", [], "array", false, false, false, 138)) == "auto_increment"))) ? (" checked") : (""));
        echo ">
  ";
        // line 139
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 139, $this->source); })()) + 1);
        // line 140
        echo "</td>
<td class=\"text-center\">
  <textarea id=\"field_";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 142, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 142, $this->source); })())), "html", null, true);
        echo "\" rows=\"1\" name=\"field_comments[";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "]\" maxlength=\"";
        echo twig_escape_filter($this->env, (isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "\">";
        // line 143
        ((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 143) && is_iterable((isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 143, $this->source); })()))) && twig_get_attribute($this->env, $this->source, ($context["comments_map"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 143, $this->source); })()), "Field", [], "array", false, false, false, 143), [], "array", true, true, false, 143))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 143, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 143, $this->source); })()), "Field", [], "array", false, false, false, 143), [], "array", false, false, false, 143), "html", null, true))) : (print ("")));
        // line 144
        echo "</textarea>
  ";
        // line 145
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 145, $this->source); })()) + 1);
        // line 146
        echo "</td>
 ";
        // line 148
        if ((isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 148, $this->source); })())) {
            // line 149
            echo "    <td class=\"text-center\">
      <select name=\"field_virtuality[";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 150, $this->source); })()), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 150, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 150, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 150, $this->source); })())), "html", null, true);
            echo "\" class=\"virtuality\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 151, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 152
                echo "          ";
                $context["virtuality"] = ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 152)) ? (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 152, $this->source); })()), "Extra", [], "array", false, false, false, 152)) : (null));
                // line 153
                echo "          ";
                // line 154
                echo "          ";
                $context["virtuality"] = ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Virtuality", [], "array", true, true, false, 154)) ? (twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 154, $this->source); })()), "Virtuality", [], "array", false, false, false, 154)) : ((isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 154, $this->source); })())));
                // line 155
                echo "
          <option value=\"";
                // line 156
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                echo (((( !(null === (isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 156, $this->source); })())) && ($context["key"] != "")) && (twig_slice($this->env, (isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 156, $this->source); })()), 0, twig_length_filter($this->env, $context["key"])) === $context["key"]))) ? (" selected") : (""));
                echo ">
            ";
                // line 157
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "      </select>

      ";
            // line 162
            if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 162, $this->source); })()) == "textarea")) {
                // line 163
                echo "        <textarea name=\"field_expression[";
                echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 163, $this->source); })()), "html", null, true);
                echo "]\" cols=\"15\" class=\"textfield expression\">";
                ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 163)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 163, $this->source); })()), "Expression", [], "array", false, false, false, 163), "html", null, true))) : (print ("")));
                echo "</textarea>
      ";
            } else {
                // line 165
                echo "        <input type=\"text\" name=\"field_expression[";
                echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 165, $this->source); })()), "html", null, true);
                echo "]\" size=\"12\" value=\"";
                ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 165)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 165, $this->source); })()), "Expression", [], "array", false, false, false, 165), "html", null, true))) : (print ("")));
                echo "\" placeholder=\"";
echo _gettext("Expression");
                echo "\" class=\"textfield expression\">
      ";
            }
            // line 167
            echo "      ";
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 167, $this->source); })()) + 1);
            // line 168
            echo "    </td>
";
        }
        // line 171
        if (array_key_exists("fields_meta", $context)) {
            // line 172
            echo "    ";
            $context["current_index"] = 0;
            // line 173
            echo "    ";
            $context["break"] = false;
            // line 174
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["move_columns"]) || array_key_exists("move_columns", $context) ? $context["move_columns"] : (function () { throw new RuntimeError('Variable "move_columns" does not exist.', 174, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 175
                echo "      ";
                if (((twig_get_attribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 175) == twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 175, $this->source); })()), "Field", [], "array", false, false, false, 175)) &&  !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 175, $this->source); })()))) {
                    // line 176
                    echo "        ";
                    $context["current_index"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 176);
                    // line 177
                    echo "        ";
                    $context["break"] = true;
                    // line 178
                    echo "      ";
                }
                // line 179
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "
    <td class=\"text-center\">
      <select id=\"field_";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 182, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 182, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 182, $this->source); })())), "html", null, true);
            echo "\" name=\"field_move_to[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 182, $this->source); })()), "html", null, true);
            echo "]\" size=\"1\" width=\"5em\">
        <option value=\"\" selected=\"selected\">&nbsp;</option>
        <option value=\"-first\"";
            // line 184
            echo ((((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 184, $this->source); })()) == 0)) ? (" disabled=\"disabled\"") : (""));
            echo ">
          ";
            // line 185
echo _gettext("first");
            // line 186
            echo "        </option>
        ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["move_columns"]) || array_key_exists("move_columns", $context) ? $context["move_columns"] : (function () { throw new RuntimeError('Variable "move_columns" does not exist.', 187, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 188
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 188), "html", null, true);
                echo "\"";
                // line 189
                echo (((((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 189, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189)) || ((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 189, $this->source); })()) == (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189) + 1)))) ? (" disabled") : (""));
                echo ">
            ";
                // line 190
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("after %s"), $this->env->getFunction('backquote')->getCallable()(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 190)))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "      </select>
      ";
            // line 194
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 194, $this->source); })()) + 1);
            // line 195
            echo "    </td>
";
        }
        // line 197
        echo "
";
        // line 198
        if ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 198, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 198)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 198, $this->source); })()), "columnCommentsFeature", [], "any", false, false, false, 198))) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 198, $this->source); })()))) {
            // line 199
            echo "    <td class=\"text-center\">
      <select id=\"field_";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 200, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 200, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 200, $this->source); })())), "html", null, true);
            echo "\" size=\"1\" name=\"field_mimetype[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 200, $this->source); })()), "html", null, true);
            echo "]\">
        <option value=\"\">&nbsp;</option>
        ";
            // line 202
            if ((twig_get_attribute($this->env, $this->source, ($context["available_mime"] ?? null), "mimetype", [], "array", true, true, false, 202) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 202, $this->source); })()), "mimetype", [], "array", false, false, false, 202)))) {
                // line 203
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 203, $this->source); })()), "mimetype", [], "array", false, false, false, 203));
                foreach ($context['_seq'] as $context["_key"] => $context["media_type"]) {
                    // line 204
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["media_type"], ["/" => "_"]), "html", null, true);
                    echo "\"";
                    // line 205
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 205) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 205, $this->source); })()), "Field", [], "array", false, false, false, 205), [], "array", false, true, false, 205), "mimetype", [], "array", true, true, false, 205)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 206
(isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 206, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 206, $this->source); })()), "Field", [], "array", false, false, false, 206), [], "array", false, false, false, 206), "mimetype", [], "array", false, false, false, 206) == twig_replace_filter($context["media_type"], ["/" => "_"])))) ? (" selected") : (""));
                    echo ">
              ";
                    // line 207
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["media_type"]), "html", null, true);
                    echo "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "        ";
            }
            // line 211
            echo "      </select>
      ";
            // line 212
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 212, $this->source); })()) + 1);
            // line 213
            echo "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 215
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 215, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 215, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 215, $this->source); })())), "html", null, true);
            echo "\" size=\"1\" name=\"field_transformation[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 215, $this->source); })()), "html", null, true);
            echo "]\">
        <option value=\"\" title=\"";
            // line 216
echo _gettext("None");
            echo "\"></option>
        ";
            // line 217
            if ((twig_get_attribute($this->env, $this->source, ($context["available_mime"] ?? null), "transformation", [], "array", true, true, false, 217) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 217, $this->source); })()), "transformation", [], "array", false, false, false, 217)))) {
                // line 218
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 218, $this->source); })()), "transformation", [], "array", false, false, false, 218));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 219
                    echo "            ";
                    $context["parts"] = twig_split_filter($this->env, $context["transform"], ":");
                    // line 220
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 220, $this->source); })()), "transformation_file", [], "array", false, false, false, 220), $context["mimekey"], [], "array", false, false, false, 220), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('get_description')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 220, $this->source); })()), "transformation_file", [], "array", false, false, false, 220), $context["mimekey"], [], "array", false, false, false, 220)), "html", null, true);
                    echo "\"";
                    // line 221
                    echo (((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 221) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 222
($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 222, $this->source); })()), "Field", [], "array", false, false, false, 222), [], "array", false, true, false, 222), "transformation", [], "array", true, true, false, 222)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 223
(isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 223, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 223, $this->source); })()), "Field", [], "array", false, false, false, 223), [], "array", false, false, false, 223), "transformation", [], "array", false, false, false, 223))) && twig_matches((("@" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 224
(isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 224, $this->source); })()), "transformation_file_quoted", [], "array", false, false, false, 224), $context["mimekey"], [], "array", false, false, false, 224)) . "3?@i"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 224, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 224, $this->source); })()), "Field", [], "array", false, false, false, 224), [], "array", false, false, false, 224), "transformation", [], "array", false, false, false, 224)))) ? (" selected") : (""));
                    echo ">
              ";
                    // line 225
                    echo twig_escape_filter($this->env, ((((($this->env->getFunction('get_name')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 225, $this->source); })()), "transformation_file", [], "array", false, false, false, 225), $context["mimekey"], [], "array", false, false, false, 225)) . " (") . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 225, $this->source); })()), 0, [], "array", false, false, false, 225))) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 225, $this->source); })()), 1, [], "array", false, false, false, 225)) . ")"), "html", null, true);
                    echo "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mimekey'], $context['transform'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "        ";
            }
            // line 229
            echo "      </select>
      ";
            // line 230
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 230, $this->source); })()) + 1);
            // line 231
            echo "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 233
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 233, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 233, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 233, $this->source); })())), "html", null, true);
            echo "\" type=\"text\" name=\"field_transformation_options[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 233, $this->source); })()), "html", null, true);
            echo "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 234
            (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 234) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 234, $this->source); })()), "Field", [], "array", false, false, false, 234), [], "array", false, true, false, 234), "transformation_options", [], "array", true, true, false, 234))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 234, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 234, $this->source); })()), "Field", [], "array", false, false, false, 234), [], "array", false, false, false, 234), "transformation_options", [], "array", false, false, false, 234), "html", null, true))) : (print ("")));
            echo "\">
      ";
            // line 235
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 235, $this->source); })()) + 1);
            // line 236
            echo "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 238
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 238, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 238, $this->source); })())), "html", null, true);
            echo "\" size=\"1\" name=\"field_input_transformation[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "]\">
        <option value=\"\" title=\"";
            // line 239
echo _gettext("None");
            echo "\"></option>
        ";
            // line 240
            if ((twig_get_attribute($this->env, $this->source, ($context["available_mime"] ?? null), "input_transformation", [], "array", true, true, false, 240) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 240, $this->source); })()), "input_transformation", [], "array", false, false, false, 240)))) {
                // line 241
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 241, $this->source); })()), "input_transformation", [], "array", false, false, false, 241));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 242
                    echo "            ";
                    $context["parts"] = twig_split_filter($this->env, $context["transform"], ":");
                    // line 243
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 243, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 243), $context["mimekey"], [], "array", false, false, false, 243), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('get_description')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 243, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 243), $context["mimekey"], [], "array", false, false, false, 243)), "html", null, true);
                    echo "\"";
                    // line 244
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 244) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 244, $this->source); })()), "Field", [], "array", false, false, false, 244), [], "array", false, true, false, 244), "input_transformation", [], "array", true, true, false, 244)) && twig_matches((("@" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 245
(isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 245, $this->source); })()), "input_transformation_file_quoted", [], "array", false, false, false, 245), $context["mimekey"], [], "array", false, false, false, 245)) . "3?@i"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 245, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 245, $this->source); })()), "Field", [], "array", false, false, false, 245), [], "array", false, false, false, 245), "input_transformation", [], "array", false, false, false, 245)))) ? (" selected") : (""));
                    echo ">
              ";
                    // line 246
                    echo twig_escape_filter($this->env, ((((($this->env->getFunction('get_name')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 246, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 246), $context["mimekey"], [], "array", false, false, false, 246)) . " (") . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 246, $this->source); })()), 0, [], "array", false, false, false, 246))) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 246, $this->source); })()), 1, [], "array", false, false, false, 246)) . ")"), "html", null, true);
                    echo "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mimekey'], $context['transform'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "        ";
            }
            // line 250
            echo "      </select>
      ";
            // line 251
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 251, $this->source); })()) + 1);
            // line 252
            echo "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 254
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 254, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 254, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 254, $this->source); })())), "html", null, true);
            echo "\" type=\"text\" name=\"field_input_transformation_options[";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 254, $this->source); })()), "html", null, true);
            echo "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 255
            (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 255) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 255, $this->source); })()), "Field", [], "array", false, false, false, 255), [], "array", false, true, false, 255), "input_transformation_options", [], "array", true, true, false, 255))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 255, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 255, $this->source); })()), "Field", [], "array", false, false, false, 255), [], "array", false, false, false, 255), "input_transformation_options", [], "array", false, false, false, 255), "html", null, true))) : (print ("")));
            echo "\">
      ";
            // line 256
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 256, $this->source); })()) + 1);
            // line 257
            echo "    </td>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_attributes.twig";
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
        return array (  827 => 257,  825 => 256,  821 => 255,  814 => 254,  810 => 252,  808 => 251,  805 => 250,  802 => 249,  793 => 246,  789 => 245,  788 => 244,  782 => 243,  779 => 242,  774 => 241,  772 => 240,  768 => 239,  760 => 238,  756 => 236,  754 => 235,  750 => 234,  743 => 233,  739 => 231,  737 => 230,  734 => 229,  731 => 228,  722 => 225,  718 => 224,  717 => 223,  716 => 222,  715 => 221,  709 => 220,  706 => 219,  701 => 218,  699 => 217,  695 => 216,  687 => 215,  683 => 213,  681 => 212,  678 => 211,  675 => 210,  666 => 207,  662 => 206,  661 => 205,  657 => 204,  652 => 203,  650 => 202,  641 => 200,  638 => 199,  636 => 198,  633 => 197,  629 => 195,  627 => 194,  624 => 193,  607 => 190,  603 => 189,  599 => 188,  582 => 187,  579 => 186,  577 => 185,  573 => 184,  564 => 182,  560 => 180,  546 => 179,  543 => 178,  540 => 177,  537 => 176,  534 => 175,  516 => 174,  513 => 173,  510 => 172,  508 => 171,  504 => 168,  501 => 167,  491 => 165,  483 => 163,  481 => 162,  477 => 160,  468 => 157,  462 => 156,  459 => 155,  456 => 154,  454 => 153,  451 => 152,  447 => 151,  439 => 150,  436 => 149,  434 => 148,  431 => 146,  429 => 145,  426 => 144,  424 => 143,  415 => 142,  411 => 140,  409 => 139,  405 => 138,  398 => 137,  395 => 136,  391 => 134,  389 => 133,  382 => 129,  377 => 128,  371 => 125,  366 => 124,  360 => 121,  355 => 120,  349 => 117,  344 => 116,  338 => 113,  333 => 112,  329 => 111,  321 => 110,  318 => 109,  316 => 108,  314 => 107,  310 => 105,  307 => 104,  302 => 102,  298 => 101,  291 => 100,  288 => 99,  286 => 98,  284 => 97,  281 => 96,  279 => 95,  275 => 94,  268 => 93,  264 => 91,  261 => 90,  259 => 88,  258 => 87,  257 => 86,  256 => 85,  255 => 84,  254 => 83,  253 => 82,  251 => 81,  247 => 78,  245 => 77,  242 => 76,  235 => 74,  228 => 72,  226 => 71,  223 => 70,  217 => 69,  213 => 68,  206 => 67,  202 => 66,  192 => 64,  188 => 61,  185 => 60,  177 => 58,  169 => 56,  167 => 55,  164 => 54,  156 => 50,  154 => 49,  148 => 46,  142 => 43,  139 => 42,  137 => 41,  133 => 40,  130 => 39,  128 => 38,  124 => 37,  116 => 36,  112 => 34,  110 => 33,  105 => 31,  99 => 30,  93 => 29,  86 => 28,  82 => 26,  80 => 25,  75 => 23,  71 => 22,  64 => 21,  60 => 19,  57 => 18,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  48 => 10,  44 => 7,  42 => 6,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Cell index: If certain fields get left out, the counter shouldn't change. #}
{% set ci = 0 %}

{# Every time a cell shall be left out the STRG-jumping feature, \$ci_offset has
   to be incremented (\$ci_offset++) #}
{% set ci_offset = -1 %}

<td class=\"text-center\">
    {# column name #}
    {% include 'columns_definitions/column_name.twig' with {
        'column_number': column_number,
        'ci': ci,
        'ci_offset': ci_offset,
        'column_meta': column_meta,
        'has_central_columns_feature': relation_parameters.centralColumnsFeature is not null,
        'max_rows': max_rows
    } only %}
    {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <select class=\"column_type\" name=\"field_type[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\"
    {{- column_meta['column_status'] is defined and not column_meta['column_status']['isEditable'] ? ' disabled' }}>
    {{ get_supported_datatypes(type_upper) }}
  </select>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_length[{{ column_number }}]\" size=\"
    {{- length_values_input_size }}\" value=\"{{ length }}\" class=\"textfield\">
  <p class=\"enum_notice\" id=\"enum_notice_{{ column_number }}_{{ ci - ci_offset }}\">
    <a href=\"#\" class=\"open_enum_editor\">{% trans 'Edit ENUM/SET values' %}</a>
  </p>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <select name=\"field_default_type[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"default_type\">
    <option value=\"NONE\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'NONE' ? ' selected' }}>
      {% trans %}None{% context %}for default{% endtrans %}
    </option>
    <option value=\"USER_DEFINED\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'USER_DEFINED' ? ' selected' }}>
      {% trans 'As defined:' %}
    </option>
    <option value=\"NULL\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'NULL' ? ' selected' }}>
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'CURRENT_TIMESTAMP' ? ' selected' }}>
      CURRENT_TIMESTAMP
    </option>
    {% if is_uuid_supported() %}
    <option value=\"UUID\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'UUID' ? ' selected' }}>
      UUID
    </option>
    {% endif %}
  </select>
  {% if char_editing == 'textarea' %}
    <textarea name=\"field_default_value[{{ column_number }}]\" cols=\"15\" class=\"textfield default_value\">{{ default_value }}</textarea>
  {% else %}
    <input type=\"text\" name=\"field_default_value[{{ column_number }}]\" size=\"12\" value=\"{{ default_value ?? '' }}\" class=\"textfield default_value\">
  {% endif %}
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  {# column collation #}
  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\">
    <option value=\"\"></option>
    {% for charset in charsets %}
      <optgroup label=\"{{ charset.name }}\" title=\"{{ charset.description }}\">
        {% for collation in charset.collations %}
          <option value=\"{{ collation.name }}\" title=\"{{ collation.description }}\"
            {{- column_meta['Collation'] is defined and collation.name == column_meta['Collation'] ? ' selected' }}>
            {{- collation.name -}}
          </option>
        {% endfor %}
      </optgroup>
    {% endfor %}
  </select>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
    {# column attribute #}
    {% include 'columns_definitions/column_attribute.twig' with {
        'column_number': column_number,
        'ci': ci,
        'ci_offset': ci_offset,
        'column_meta': column_meta,
        'extracted_columnspec': extracted_columnspec,
        'submit_attribute': submit_attribute,
        'attribute_types': attribute_types
    } only %}
    {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
    <input name=\"field_null[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"
      {{- column_meta['Null'] is defined and column_meta['Null'] is not empty and column_meta['Null'] != 'NO' and column_meta['Null'] != 'NOT NULL' ? ' checked' }}>
    {% set ci = ci + 1 %}
</td>
{% if change_column is defined and change_column is not empty %}
    {# column Adjust privileges, Only for 'Edit' Column(s) #}
    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"NULL\" class=\"allow_null\"
        {%- if privs_available %} checked>
        {%- else %} title=\"{% trans \"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details\" %}\" disabled>
        {%- endif %}
      {% set ci = ci + 1 %}
    </td>
{% endif %}
{% if not is_backup %}
    {# column indexes, See my other comment about  this 'if'. #}
    <td class=\"text-center\">
      <select name=\"field_key[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" data-index=\"\">
        <option value=\"none_{{ column_number }}\">---</option>
        <option value=\"primary_{{ column_number }}\" title=\"{% trans \"Primary\" %}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'PRI' ? ' selected' }}>
          PRIMARY
        </option>
        <option value=\"unique_{{ column_number }}\" title=\"{% trans \"Unique\" %}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'UNI' ? ' selected' }}>
          UNIQUE
        </option>
        <option value=\"index_{{ column_number }}\" title=\"{% trans \"Index\" %}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'MUL' ? ' selected' }}>
          INDEX
        </option>
        <option value=\"fulltext_{{ column_number }}\" title=\"{% trans \"Fulltext\" %}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'FULLTEXT' ? ' selected' }}>
          FULLTEXT
        </option>
        <option value=\"spatial_{{ column_number }}\" title=\"{% trans \"Spatial\" %}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'SPATIAL' ? ' selected' }}>
          SPATIAL
        </option>
      </select>
      {% set ci = ci + 1 %}
    </td>
{% endif %}
<td class=\"text-center\">
  <input name=\"field_extra[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"AUTO_INCREMENT\"
    {{- column_meta['Extra'] is defined and column_meta['Extra']|lower == 'auto_increment' ? ' checked' }}>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <textarea id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" rows=\"1\" name=\"field_comments[{{ column_number }}]\" maxlength=\"{{ max_length }}\">
    {{- column_meta['Field'] is defined and comments_map is iterable and comments_map[column_meta['Field']] is defined ? comments_map[column_meta['Field']] -}}
  </textarea>
  {% set ci = ci + 1 %}
</td>
 {# column virtuality #}
{% if is_virtual_columns_supported %}
    <td class=\"text-center\">
      <select name=\"field_virtuality[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"virtuality\">
        {% for key, value in options %}
          {% set virtuality = column_meta['Extra'] is defined ? column_meta['Extra'] : null %}
          {# Creating a new row on create table sends a Virtuality field #}
          {% set virtuality = column_meta['Virtuality'] is defined ? column_meta['Virtuality'] : virtuality %}

          <option value=\"{{ key }}\"{{ virtuality is not null and key != '' and virtuality|slice(0, key|length) is same as (key) ? ' selected' }}>
            {{ value }}
          </option>
        {% endfor %}
      </select>

      {% if char_editing == 'textarea' %}
        <textarea name=\"field_expression[{{ column_number }}]\" cols=\"15\" class=\"textfield expression\">{{ column_meta['Expression'] is defined ? column_meta['Expression'] }}</textarea>
      {% else %}
        <input type=\"text\" name=\"field_expression[{{ column_number }}]\" size=\"12\" value=\"{{ column_meta['Expression'] is defined ? column_meta['Expression'] }}\" placeholder=\"{% trans 'Expression' %}\" class=\"textfield expression\">
      {% endif %}
      {% set ci = ci + 1 %}
    </td>
{% endif %}
{# move column #}
{% if fields_meta is defined %}
    {% set current_index = 0 %}
    {% set break = false %}
    {% for move_column in move_columns %}
      {% if move_column.name == column_meta['Field'] and not break %}
        {% set current_index = loop.index0 %}
        {% set break = true %}
      {% endif %}
    {% endfor %}

    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" name=\"field_move_to[{{ column_number }}]\" size=\"1\" width=\"5em\">
        <option value=\"\" selected=\"selected\">&nbsp;</option>
        <option value=\"-first\"{{ current_index == 0 ? ' disabled=\"disabled\"' }}>
          {% trans 'first' %}
        </option>
        {% for move_column in move_columns %}
          <option value=\"{{ move_column.name }}\"
            {{- current_index == loop.index0 or current_index == loop.index0 + 1 ? ' disabled' }}>
            {{ 'after %s'|trans|format(backquote(move_column.name|e)) }}
          </option>
        {% endfor %}
      </select>
      {% set ci = ci + 1 %}
    </td>
{% endif %}

{% if relation_parameters.browserTransformationFeature is not null and relation_parameters.columnCommentsFeature is not null and browse_mime %}
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_mimetype[{{ column_number }}]\">
        <option value=\"\">&nbsp;</option>
        {% if available_mime['mimetype'] is defined and available_mime['mimetype'] is iterable %}
          {% for media_type in available_mime['mimetype'] %}
            <option value=\"{{ media_type|replace({'/': '_'}) }}\"
              {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['mimetype'] is defined
                and mime_map[column_meta['Field']]['mimetype'] == media_type|replace({'/': '_'}) ? ' selected' }}>
              {{ media_type|lower }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_transformation[{{ column_number }}]\">
        <option value=\"\" title=\"{% trans 'None' %}\"></option>
        {% if available_mime['transformation'] is defined and available_mime['transformation'] is iterable %}
          {% for mimekey, transform in available_mime['transformation'] %}
            {% set parts = transform|split(':') %}
            <option value=\"{{ available_mime['transformation_file'][mimekey] }}\" title=\"{{ get_description(available_mime['transformation_file'][mimekey]) }}\"
              {{- column_meta['Field'] is defined
                and mime_map[column_meta['Field']]['transformation'] is defined
                and mime_map[column_meta['Field']]['transformation'] is not null
                and mime_map[column_meta['Field']]['transformation'] matches '@' ~ available_mime['transformation_file_quoted'][mimekey] ~ '3?@i' ? ' selected' }}>
              {{ get_name(available_mime['transformation_file'][mimekey]) ~ ' (' ~ parts[0]|lower ~ ':' ~ parts[1] ~ ')' }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_transformation_options[{{ column_number }}]\" size=\"16\" class=\"textfield\" value=\"
        {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['transformation_options'] is defined ? mime_map[column_meta['Field']]['transformation_options'] }}\">
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_input_transformation[{{ column_number }}]\">
        <option value=\"\" title=\"{% trans 'None' %}\"></option>
        {% if available_mime['input_transformation'] is defined and available_mime['input_transformation'] is iterable %}
          {% for mimekey, transform in available_mime['input_transformation'] %}
            {% set parts = transform|split(':') %}
            <option value=\"{{ available_mime['input_transformation_file'][mimekey] }}\" title=\"{{ get_description(available_mime['input_transformation_file'][mimekey]) }}\"
              {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['input_transformation'] is defined
                and mime_map[column_meta['Field']]['input_transformation'] matches '@' ~ available_mime['input_transformation_file_quoted'][mimekey] ~ '3?@i' ? ' selected' }}>
              {{ get_name(available_mime['input_transformation_file'][mimekey]) ~ ' (' ~ parts[0]|lower ~ ':' ~ parts[1] ~ ')' }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_input_transformation_options[{{ column_number }}]\" size=\"16\" class=\"textfield\" value=\"
        {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['input_transformation_options'] is defined ? mime_map[column_meta['Field']]['input_transformation_options'] }}\">
      {% set ci = ci + 1 %}
    </td>
{% endif %}
", "columns_definitions/column_attributes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_attributes.twig");
    }
}
