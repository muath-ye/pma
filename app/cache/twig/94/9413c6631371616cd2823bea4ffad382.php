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

/* database/central_columns/edit_table_row.twig */
class __TwigTemplate_2f7cb0395849a2c6caba425f8ac3472d extends Template
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
        echo "<tr>
  <input name=\"orig_col_name[";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "]\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })()), "col_name", [], "array", false, false, false, 2), "html", null, true);
        echo "\">
  <td name=\"col_name\" class=\"text-nowrap\">
    ";
        // line 4
        $this->loadTemplate("columns_definitions/column_name.twig", "database/central_columns/edit_table_row.twig", 4)->display(twig_to_array(["column_number" =>         // line 5
(isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 5, $this->source); })()), "ci" => 0, "ci_offset" => 0, "column_meta" => ["Field" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 8, $this->source); })()), "col_name", [], "array", false, false, false, 8)], "has_central_columns_feature" => false, "max_rows" =>         // line 10
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 10, $this->source); })())]));
        // line 12
        echo "  </td>

  <td name=\"col_type\" class=\"text-nowrap\">
    <select class=\"column_type\" name=\"field_type[";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "_1\">
      ";
        // line 16
        echo $this->env->getFunction('get_supported_datatypes')->getCallable()(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 16, $this->source); })()), "col_type", [], "array", false, false, false, 16)));
        echo "
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_length\">
    <input id=\"field_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "_2\" type=\"text\" name=\"field_length[";
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "]\" size=\"8\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 21, $this->source); })()), "col_length", [], "array", false, false, false, 21), "html", null, true);
        echo "\" class=\"textfield\">
    <p class=\"enum_notice\" id=\"enum_notice_";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "_2\">
      <a href=\"#\" class=\"open_enum_editor\">";
        // line 23
echo _gettext("Edit ENUM/SET values");
        echo "</a>
    </p>
  </td>

  <td class=\"text-nowrap\" name=\"col_default\">
    <select name=\"field_default_type[";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "_3\" class=\"default_type\">
      <option value=\"NONE\"";
        // line 29
        echo (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 29) && (twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 29, $this->source); })()), "DefaultType", [], "array", false, false, false, 29) == "NONE"))) ? (" selected") : (""));
        echo ">
        ";
        // line 30
echo _pgettext("for default", "None");
        // line 31
        echo "      </option>
      <option value=\"USER_DEFINED\"";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 32) && (twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 32, $this->source); })()), "DefaultType", [], "array", false, false, false, 32) == "USER_DEFINED"))) ? (" selected") : (""));
        echo ">
        ";
        // line 33
echo _gettext("As defined:");
        // line 34
        echo "      </option>
      <option value=\"NULL\"";
        // line 35
        echo (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 35) && (twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 35, $this->source); })()), "DefaultType", [], "array", false, false, false, 35) == "NULL"))) ? (" selected") : (""));
        echo ">
        NULL
      </option>
      <option value=\"CURRENT_TIMESTAMP\"";
        // line 38
        echo (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "DefaultType", [], "array", true, true, false, 38) && (twig_get_attribute($this->env, $this->source, (isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 38, $this->source); })()), "DefaultType", [], "array", false, false, false, 38) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        echo ">
        CURRENT_TIMESTAMP
      </option>
    </select>
    ";
        // line 42
        if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 42, $this->source); })()) == "textarea")) {
            // line 43
            echo "      <textarea name=\"field_default_value[";
            echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "]\" cols=\"15\" class=\"textfield default_value\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 43, $this->source); })()), "col_default", [], "array", false, false, false, 43), "html", null, true);
            echo "</textarea>
    ";
        } else {
            // line 45
            echo "      <input type=\"text\" name=\"field_default_value[";
            echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "]\" size=\"12\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 45, $this->source); })()), "col_default", [], "array", false, false, false, 45), "html", null, true);
            echo "\" class=\"textfield default_value\">
    ";
        }
        // line 47
        echo "  </td>

  <td name=\"collation\" class=\"text-nowrap\">
    <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "_4\">
      <option value=\"\"></option>
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 53
            echo "        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 53), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
            echo "\">
          ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 54), [], "array", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 55
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 55), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 55), "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 55, $this->source); })()), "col_collation", [], "array", false, false, false, 55) == twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 55))) ? (" selected") : (""));
                echo ">
              ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 56), "html", null, true);
                echo "
            </option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </optgroup>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_attribute\">
    ";
        // line 65
        $this->loadTemplate("columns_definitions/column_attribute.twig", "database/central_columns/edit_table_row.twig", 65)->display(twig_to_array(["column_number" =>         // line 66
(isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 66, $this->source); })()), "ci" => 5, "ci_offset" => 0, "column_meta" => [], "extracted_columnspec" => ["attribute" => twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 70, $this->source); })()), "col_attribute", [], "array", false, false, false, 70)], "submit_attribute" => false, "attribute_types" =>         // line 72
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 72, $this->source); })())]));
        // line 74
        echo "  </td>

  <td class=\"text-nowrap\" name=\"col_isNull\">
    <input name=\"field_null[";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 78
        echo (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78)) && (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78) != "NO")) && (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "col_isNull", [], "array", false, false, false, 78) != "NOT NULL"))) ? (" checked") : (""));
        echo ">
  </td>

  <td class=\"text-nowrap\" name=\"col_extra\">
    <input name=\"col_extra[";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, (isset($context["row_num"]) || array_key_exists("row_num", $context) ? $context["row_num"] : (function () { throw new RuntimeError('Variable "row_num" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "_7\" type=\"checkbox\" value=\"auto_increment\"";
        // line 83
        echo twig_escape_filter($this->env, ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 83, $this->source); })()), "col_extra", [], "array", false, false, false, 83)) && (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 83, $this->source); })()), "col_extra", [], "array", false, false, false, 83) == "auto_increment")), "html", null, true);
        echo ">
  </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/central_columns/edit_table_row.twig";
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
        return array (  231 => 83,  226 => 82,  219 => 78,  214 => 77,  209 => 74,  207 => 72,  206 => 70,  205 => 66,  204 => 65,  198 => 61,  191 => 59,  182 => 56,  173 => 55,  169 => 54,  162 => 53,  158 => 52,  151 => 50,  146 => 47,  138 => 45,  130 => 43,  128 => 42,  121 => 38,  115 => 35,  112 => 34,  110 => 33,  106 => 32,  103 => 31,  101 => 30,  97 => 29,  91 => 28,  83 => 23,  79 => 22,  71 => 21,  63 => 16,  57 => 15,  52 => 12,  50 => 10,  49 => 8,  48 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
  <input name=\"orig_col_name[{{ row_num }}]\" type=\"hidden\" value=\"{{ row['col_name'] }}\">
  <td name=\"col_name\" class=\"text-nowrap\">
    {% include 'columns_definitions/column_name.twig' with {
      'column_number': row_num,
      'ci': 0,
      'ci_offset': 0,
      'column_meta': {'Field': row['col_name']},
      'has_central_columns_feature': false,
      'max_rows': max_rows
    } only %}
  </td>

  <td name=\"col_type\" class=\"text-nowrap\">
    <select class=\"column_type\" name=\"field_type[{{ row_num }}]\" id=\"field_{{ row_num }}_1\">
      {{ get_supported_datatypes(row['col_type']|upper) }}
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_length\">
    <input id=\"field_{{ row_num }}_2\" type=\"text\" name=\"field_length[{{ row_num }}]\" size=\"8\" value=\"{{ row['col_length'] }}\" class=\"textfield\">
    <p class=\"enum_notice\" id=\"enum_notice_{{ row_num }}_2\">
      <a href=\"#\" class=\"open_enum_editor\">{% trans 'Edit ENUM/SET values' %}</a>
    </p>
  </td>

  <td class=\"text-nowrap\" name=\"col_default\">
    <select name=\"field_default_type[{{ row_num }}]\" id=\"field_{{ row_num }}_3\" class=\"default_type\">
      <option value=\"NONE\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'NONE' ? ' selected' }}>
        {% trans %}None{% context %}for default{% endtrans %}
      </option>
      <option value=\"USER_DEFINED\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'USER_DEFINED' ? ' selected' }}>
        {% trans 'As defined:' %}
      </option>
      <option value=\"NULL\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'NULL' ? ' selected' }}>
        NULL
      </option>
      <option value=\"CURRENT_TIMESTAMP\"{{ meta['DefaultType'] is defined and meta['DefaultType'] == 'CURRENT_TIMESTAMP' ? ' selected' }}>
        CURRENT_TIMESTAMP
      </option>
    </select>
    {% if char_editing == 'textarea' %}
      <textarea name=\"field_default_value[{{ row_num }}]\" cols=\"15\" class=\"textfield default_value\">{{ row['col_default'] }}</textarea>
    {% else %}
      <input type=\"text\" name=\"field_default_value[{{ row_num }}]\" size=\"12\" value=\"{{ row['col_default'] }}\" class=\"textfield default_value\">
    {% endif %}
  </td>

  <td name=\"collation\" class=\"text-nowrap\">
    <select lang=\"en\" dir=\"ltr\" name=\"field_collation[{{ row_num }}]\" id=\"field_{{ row_num }}_4\">
      <option value=\"\"></option>
      {% for charset in charsets %}
        <optgroup label=\"{{ charset.getName() }}\" title=\"{{ charset.getDescription() }}\">
          {% for collation in collations[charset.getName()] %}
            <option value=\"{{ collation.getName() }}\" title=\"{{ collation.getDescription() }}\"{{ row['col_collation'] == collation.getName() ? ' selected' }}>
              {{ collation.getName() }}
            </option>
          {% endfor %}
        </optgroup>
      {% endfor %}
    </select>
  </td>

  <td class=\"text-nowrap\" name=\"col_attribute\">
    {% include 'columns_definitions/column_attribute.twig' with {
      'column_number': row_num,
      'ci': 5,
      'ci_offset': 0,
      'column_meta': [],
      'extracted_columnspec': {'attribute': row['col_attribute']},
      'submit_attribute': false,
      'attribute_types': attribute_types
    } only %}
  </td>

  <td class=\"text-nowrap\" name=\"col_isNull\">
    <input name=\"field_null[{{ row_num }}]\" id=\"field_{{ row_num }}_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"
      {{- row['col_isNull'] is not empty and row['col_isNull'] != 'NO' and row['col_isNull'] != 'NOT NULL' ? ' checked' }}>
  </td>

  <td class=\"text-nowrap\" name=\"col_extra\">
    <input name=\"col_extra[{{ row_num }}]\" id=\"field_{{ row_num }}_7\" type=\"checkbox\" value=\"auto_increment\"
      {{- row['col_extra'] is not empty and row['col_extra'] == 'auto_increment' }}>
  </td>
</tr>
", "database/central_columns/edit_table_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/central_columns/edit_table_row.twig");
    }
}
