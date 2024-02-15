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

/* columns_definitions/column_attribute.twig */
class __TwigTemplate_1d609c80b0a92dfcbc203c015566b073 extends Template
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
        if ((array_key_exists("submit_attribute", $context) && ((isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 1, $this->source); })()) != false))) {
            // line 2
            echo "    ";
            $context["attribute"] = (isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 2, $this->source); })());
            // line 3
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 4
($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 4) && (twig_in_filter("on update current_timestamp", twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 5, $this->source); })()), "Extra", [], "array", false, false, false, 5)) || twig_in_filter("on update current_timestamp()", twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 5, $this->source); })()), "Extra", [], "array", false, false, false, 5)))))) {
            // line 6
            echo "    ";
            $context["attribute"] = "on update CURRENT_TIMESTAMP";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 7
($context["extracted_columnspec"] ?? null), "attribute", [], "array", true, true, false, 7)) {
            // line 8
            echo "    ";
            $context["attribute"] = twig_get_attribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 8, $this->source); })()), "attribute", [], "array", false, false, false, 8);
        } else {
            // line 10
            echo "    ";
            $context["attribute"] = "";
        }
        // line 12
        $context["attribute"] = twig_upper_filter($this->env, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 12, $this->source); })()));
        // line 13
        echo "<select name=\"field_attribute[";
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 14, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "\">
    ";
        // line 15
        $context["cnt_attribute_types"] = (twig_length_filter($this->env, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 15, $this->source); })())) - 1);
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["cnt_attribute_types"]) || array_key_exists("cnt_attribute_types", $context) ? $context["cnt_attribute_types"] : (function () { throw new RuntimeError('Variable "cnt_attribute_types" does not exist.', 16, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 17, $this->source); })()), $context["i"], [], "array", false, false, false, 17), "html", null, true);
            echo "\"";
            // line 18
            echo ((((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 18, $this->source); })()) == twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 18, $this->source); })()), $context["i"], [], "array", false, false, false, 18)))) ? (" selected=\"selected\"") : (""));
            echo ">
            ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 19, $this->source); })()), $context["i"], [], "array", false, false, false, 19), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</select>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_attribute.twig";
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
        return array (  97 => 22,  88 => 19,  84 => 18,  80 => 17,  75 => 16,  73 => 15,  67 => 14,  62 => 13,  60 => 12,  56 => 10,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if submit_attribute is defined and submit_attribute != false %}
    {% set attribute = submit_attribute %}
    {# MariaDB has additional parentheses #}
{% elseif column_meta['Extra'] is defined
    and ('on update current_timestamp' in column_meta['Extra'] or 'on update current_timestamp()' in column_meta['Extra']|lower) %}
    {% set attribute = 'on update CURRENT_TIMESTAMP' %}
{% elseif extracted_columnspec['attribute'] is defined %}
    {% set attribute = extracted_columnspec['attribute'] %}
{% else %}
    {% set attribute = '' %}
{% endif %}
{% set attribute = attribute|upper %}
<select name=\"field_attribute[{{ column_number }}]\"
    id=\"field_{{ column_number }}_{{ ci - ci_offset }}\">
    {% set cnt_attribute_types = attribute_types|length - 1 %}
    {% for i in 0..cnt_attribute_types %}
        <option value=\"{{ attribute_types[i] }}\"
            {{- attribute == attribute_types[i]|upper ? ' selected=\"selected\"' }}>
            {{ attribute_types[i] }}
        </option>
    {% endfor %}
</select>
", "columns_definitions/column_attribute.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_attribute.twig");
    }
}
