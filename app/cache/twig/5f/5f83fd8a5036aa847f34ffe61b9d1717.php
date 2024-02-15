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

/* table/tracking/structure_snapshot_columns.twig */
class __TwigTemplate_904dc90f40df80521ac84644adec2257 extends Template
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
        echo "<h3>";
echo _gettext("Structure");
        echo "</h3>
<table id=\"tablestructure\" class=\"table table-striped table-hover w-auto\">
    <thead>
        <tr>
            <th>";
        // line 5
echo _pgettext("Number", "#");
        echo "</th>
            <th>";
        // line 6
echo _gettext("Column");
        echo "</th>
            <th>";
        // line 7
echo _gettext("Type");
        echo "</th>
            <th>";
        // line 8
echo _gettext("Collation");
        echo "</th>
            <th>";
        // line 9
echo _gettext("Null");
        echo "</th>
            <th>";
        // line 10
echo _gettext("Default");
        echo "</th>
            <th>";
        // line 11
echo _gettext("Extra");
        echo "</th>
            <th>";
        // line 12
echo _gettext("Comment");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context["index"] = 1;
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "            <tr class=\"noclick\">
                <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</td>
                ";
            // line 20
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 20, $this->source); })()) + 1);
            // line 21
            echo "                <td>
                    <strong>
                        ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "Field", [], "array", false, false, false, 23), "html", null, true);
            echo "
                        ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "Key", [], "array", false, false, false, 24) == "PRI")) {
                // line 25
                echo "                            ";
                echo $this->env->getFunction('get_image')->getCallable()("b_primary", _gettext("Primary"));
                echo "
                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 26
$context["field"], "Key", [], "array", false, false, false, 26))) {
                // line 27
                echo "                            ";
                echo $this->env->getFunction('get_image')->getCallable()("bd_primary", _gettext("Index"));
                echo "
                        ";
            }
            // line 29
            echo "                    </strong>
                </td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "Type", [], "array", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "Collation", [], "array", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["field"], "Null", [], "array", false, false, false, 33) == "YES")) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["field"], "Default", [], "array", true, true, false, 35)) {
                // line 36
                echo "                        ";
                $context["extracted_columnspec"] = $this->env->getFunction('extract_column_spec')->getCallable()(twig_get_attribute($this->env, $this->source, $context["field"], "Type", [], "array", false, false, false, 36));
                // line 37
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 37, $this->source); })()), "type", [], "array", false, false, false, 37) == "bit")) {
                    // line 38
                    echo "                            ";
                    // line 39
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getFilter('convert_bit_default_value')->getCallable()(twig_get_attribute($this->env, $this->source, $context["field"], "Default", [], "array", false, false, false, 39)), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 41
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "Default", [], "array", false, false, false, 41), "html", null, true);
                    echo "
                        ";
                }
                // line 43
                echo "                    ";
            } else {
                // line 44
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "Null", [], "array", false, false, false, 44) == "YES")) {
                    // line 45
                    echo "                            <em>NULL</em>
                        ";
                } else {
                    // line 47
                    echo "                            <em>";
echo _pgettext("None for default", "None");
                    echo "</em>
                        ";
                }
                // line 49
                echo "                    ";
            }
            // line 50
            echo "                </td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "Extra", [], "array", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "Comment", [], "array", false, false, false, 52), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/structure_snapshot_columns.twig";
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
        return array (  193 => 55,  184 => 52,  180 => 51,  177 => 50,  174 => 49,  168 => 47,  164 => 45,  161 => 44,  158 => 43,  152 => 41,  146 => 39,  144 => 38,  141 => 37,  138 => 36,  136 => 35,  131 => 33,  127 => 32,  123 => 31,  119 => 29,  113 => 27,  111 => 26,  106 => 25,  104 => 24,  100 => 23,  96 => 21,  94 => 20,  90 => 19,  87 => 18,  82 => 17,  80 => 16,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>{% trans 'Structure' %}</h3>
<table id=\"tablestructure\" class=\"table table-striped table-hover w-auto\">
    <thead>
        <tr>
            <th>{% trans %}#{% context %}Number{% endtrans %}</th>
            <th>{% trans 'Column' %}</th>
            <th>{% trans 'Type' %}</th>
            <th>{% trans 'Collation' %}</th>
            <th>{% trans 'Null' %}</th>
            <th>{% trans 'Default' %}</th>
            <th>{% trans 'Extra' %}</th>
            <th>{% trans 'Comment' %}</th>
        </tr>
    </thead>
    <tbody>
        {% set index = 1 %}
        {% for field in columns %}
            <tr class=\"noclick\">
                <td>{{ index }}</td>
                {% set index = index + 1 %}
                <td>
                    <strong>
                        {{ field['Field'] }}
                        {% if field['Key'] == 'PRI' %}
                            {{ get_image('b_primary', 'Primary'|trans) }}
                        {% elseif field['Key'] is not empty %}
                            {{ get_image('bd_primary', 'Index'|trans) }}
                        {% endif %}
                    </strong>
                </td>
                <td>{{ field['Type'] }}</td>
                <td>{{ field['Collation'] }}</td>
                <td>{{ field['Null'] == 'YES' ? 'Yes'|trans : 'No'|trans }}</td>
                <td>
                    {% if field['Default'] is defined %}
                        {% set extracted_columnspec = extract_column_spec(field['Type']) %}
                        {% if extracted_columnspec['type'] == 'bit' %}
                            {# here, \$field['Default'] contains something like b'010' #}
                            {{ field['Default']|convert_bit_default_value }}
                        {% else %}
                            {{ field['Default'] }}
                        {% endif %}
                    {% else %}
                        {% if field['Null'] == 'YES' %}
                            <em>NULL</em>
                        {% else %}
                            <em>{% trans %}None{% context %}None for default{% endtrans %}</em>
                        {% endif %}
                    {% endif %}
                </td>
                <td>{{ field['Extra'] }}</td>
                <td>{{ field['Comment'] }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "table/tracking/structure_snapshot_columns.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/structure_snapshot_columns.twig");
    }
}
