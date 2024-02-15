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

/* table/insert/value_column_for_other_datatype.twig */
class __TwigTemplate_43c289378c1ac8ba46eafb8a298f7b60 extends Template
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
        echo (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 1, $this->source); })());
        echo "
";
        // line 2
        if ((isset($context["is_textarea"]) || array_key_exists("is_textarea", $context) ? $context["is_textarea"] : (function () { throw new RuntimeError('Variable "is_textarea" does not exist.', 2, $this->source); })())) {
            // line 3
            echo (isset($context["html_field"]) || array_key_exists("html_field", $context) ? $context["html_field"] : (function () { throw new RuntimeError('Variable "html_field" does not exist.', 3, $this->source); })());
        } else {
            // line 5
            echo (isset($context["html_field"]) || array_key_exists("html_field", $context) ? $context["html_field"] : (function () { throw new RuntimeError('Variable "html_field" does not exist.', 5, $this->source); })());
            // line 6
            if ((twig_matches("/(VIRTUAL|PERSISTENT|GENERATED)/", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "extra", [], "any", false, false, false, 6)) && !twig_in_filter("DEFAULT_GENERATED", twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "extra", [], "any", false, false, false, 6)))) {
                // line 7
                echo "<input type=\"hidden\" name=\"virtual";
                echo twig_escape_filter($this->env, (isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 7, $this->source); })()), "html", null, true);
                echo "\" value=\"1\">";
            }
            // line 9
            if ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 9, $this->source); })()), "extra", [], "any", false, false, false, 9) == "auto_increment")) {
                // line 10
                echo "<input type=\"hidden\" name=\"auto_increment";
                echo twig_escape_filter($this->env, (isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "\" value=\"1\">";
            }
            // line 12
            if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 12, $this->source); })()), "pmaType", [], "any", false, false, false, 12)) && is_string($__internal_compile_1 = "timestamp") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
                // line 13
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, (isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "\" value=\"timestamp\">";
            }
            // line 15
            if ((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 15, $this->source); })()), "pmaType", [], "any", false, false, false, 15)) && is_string($__internal_compile_3 = "datetime") && str_starts_with($__internal_compile_2, $__internal_compile_3))) {
                // line 16
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, (isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "\" value=\"datetime\">";
            } elseif ((is_string($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 17, $this->source); })()), "pmaType", [], "any", false, false, false, 17)) && is_string($__internal_compile_5 = "date") && str_starts_with($__internal_compile_4, $__internal_compile_5))) {
                // line 18
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, (isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "\" value=\"date\">";
            }
            // line 20
            if (((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "trueType", [], "any", false, false, false, 20) == "bit") || (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), "trueType", [], "any", false, false, false, 20) == "uuid"))) {
                // line 21
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, (isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 21, $this->source); })()), "trueType", [], "any", false, false, false, 21), "html", null, true);
                echo "\">";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/value_column_for_other_datatype.twig";
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
        return array (  84 => 21,  82 => 20,  77 => 18,  75 => 17,  71 => 16,  69 => 15,  64 => 13,  62 => 12,  57 => 10,  55 => 9,  50 => 7,  48 => 6,  46 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ backup_field|raw }}
{% if is_textarea %}
  {{- html_field|raw -}}
{% else %}
  {{- html_field|raw -}}
  {%- if column.extra matches '/(VIRTUAL|PERSISTENT|GENERATED)/' and 'DEFAULT_GENERATED' not in column.extra -%}
    <input type=\"hidden\" name=\"virtual{{ columnNameAppendix }}\" value=\"1\">
  {%- endif -%}
  {%- if column.extra == 'auto_increment' -%}
    <input type=\"hidden\" name=\"auto_increment{{ columnNameAppendix }}\" value=\"1\">
  {%- endif -%}
  {%- if column.pmaType starts with 'timestamp' -%}
    <input type=\"hidden\" name=\"fields_type{{ columnNameAppendix }}\" value=\"timestamp\">
  {%- endif -%}
  {%- if column.pmaType starts with 'datetime' -%}
    <input type=\"hidden\" name=\"fields_type{{ columnNameAppendix }}\" value=\"datetime\">
  {%- elseif column.pmaType starts with 'date' -%}
    <input type=\"hidden\" name=\"fields_type{{ columnNameAppendix }}\" value=\"date\">
  {%- endif -%}
  {%- if column.trueType == 'bit' or column.trueType == 'uuid' -%}
    <input type=\"hidden\" name=\"fields_type{{ columnNameAppendix }}\" value=\"{{ column.trueType }}\">
  {%- endif -%}
{% endif %}
", "table/insert/value_column_for_other_datatype.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/value_column_for_other_datatype.twig");
    }
}
