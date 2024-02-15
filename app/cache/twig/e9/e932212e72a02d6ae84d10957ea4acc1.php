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

/* columns_definitions/column_name.twig */
class __TwigTemplate_b6c76242793911c810ed52315d0b4dda extends Template
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
        $context["title"] = "";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 2)) {
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 3, $this->source); })()), "column_status", [], "array", false, false, false, 3), "isReferenced", [], "array", false, false, false, 3)) {
                // line 4
                echo "        ";
                $context["title"] = ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()) . twig_sprintf(_gettext("Referenced by %s."), twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 5
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 5, $this->source); })()), "column_status", [], "array", false, false, false, 5), "references", [], "array", false, false, false, 5), ",")));
                // line 7
                echo "    ";
            }
            // line 8
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 8, $this->source); })()), "column_status", [], "array", false, false, false, 8), "isForeignKey", [], "array", false, false, false, 8)) {
                // line 9
                echo "        ";
                if ( !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()))) {
                    // line 10
                    echo "            ";
                    $context["title"] = ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()) . "
");
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                $context["title"] = ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()) . _gettext("Is a foreign key."));
                // line 13
                echo "    ";
            }
        }
        // line 15
        if (twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    ";
            $context["title"] = _gettext("Column");
        }
        // line 18
        echo "
<input id=\"field_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 19, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "\"
    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 20) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 21, $this->source); })()), "column_status", [], "array", false, false, false, 21), "isEditable", [], "array", false, false, false, 21))) {
            // line 22
            echo "        disabled=\"disabled\"
    ";
        }
        // line 24
        echo "    type=\"text\"
    name=\"field_name[";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "]\"
    maxlength=\"64\"
    class=\"textfield\"
    title=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\"
    size=\"10\"
    value=\"";
        // line 30
        ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 30)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 30, $this->source); })()), "Field", [], "array", false, false, false, 30), "html", null, true))) : (print ("")));
        echo "\">

";
        // line 32
        if (((isset($context["has_central_columns_feature"]) || array_key_exists("has_central_columns_feature", $context) ? $context["has_central_columns_feature"] : (function () { throw new RuntimeError('Variable "has_central_columns_feature" does not exist.', 32, $this->source); })()) &&  !(twig_get_attribute($this->env, $this->source,         // line 33
($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 33) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 34, $this->source); })()), "column_status", [], "array", false, false, false, 34), "isEditable", [], "array", false, false, false, 34)))) {
            // line 35
            echo "    <p class=\"column_name\" id=\"central_columns_";
            echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 35, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 35, $this->source); })())), "html", null, true);
            echo "\">
        <a data-maxrows=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\"
            href=\"#\"
            class=\"central_columns_dialog\">
            ";
            // line 39
echo _gettext("Pick from Central Columns");
            // line 40
            echo "        </a>
    </p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_name.twig";
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
        return array (  131 => 40,  129 => 39,  123 => 36,  116 => 35,  114 => 34,  113 => 33,  112 => 32,  107 => 30,  102 => 28,  96 => 25,  93 => 24,  89 => 22,  87 => 21,  86 => 20,  80 => 19,  77 => 18,  73 => 16,  71 => 15,  67 => 13,  64 => 12,  61 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = '' %}
{% if column_meta['column_status'] is defined %}
    {% if column_meta['column_status']['isReferenced'] %}
        {% set title = title ~ 'Referenced by %s.'|trans|format(
            column_meta['column_status']['references']|join(',')
        ) %}
    {% endif %}
    {% if column_meta['column_status']['isForeignKey'] %}
        {% if title is not empty %}
            {% set title = title ~ '\\n'|raw %}
        {% endif %}
        {% set title = title ~ 'Is a foreign key.'|trans %}
    {% endif %}
{% endif %}
{% if title is empty %}
    {% set title = 'Column'|trans %}
{% endif %}

<input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\"
    {% if column_meta['column_status'] is defined
        and not column_meta['column_status']['isEditable'] %}
        disabled=\"disabled\"
    {% endif %}
    type=\"text\"
    name=\"field_name[{{ column_number }}]\"
    maxlength=\"64\"
    class=\"textfield\"
    title=\"{{ title }}\"
    size=\"10\"
    value=\"{{ column_meta['Field'] is defined ? column_meta['Field'] }}\">

{% if has_central_columns_feature
    and not (column_meta['column_status'] is defined
        and not column_meta['column_status']['isEditable']) %}
    <p class=\"column_name\" id=\"central_columns_{{ column_number }}_{{ ci - ci_offset }}\">
        <a data-maxrows=\"{{ max_rows }}\"
            href=\"#\"
            class=\"central_columns_dialog\">
            {% trans 'Pick from Central Columns' %}
        </a>
    </p>
{% endif %}
", "columns_definitions/column_name.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_name.twig");
    }
}
