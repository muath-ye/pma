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

/* table/tracking/structure_snapshot_indexes.twig */
class __TwigTemplate_12b00f14b7de62f01583fe691055ac7a extends Template
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
echo _gettext("Indexes");
        echo "</h3>
<table id=\"tablestructure_indexes\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>";
        // line 5
echo _gettext("Keyname");
        echo "</th>
            <th>";
        // line 6
echo _gettext("Type");
        echo "</th>
            <th>";
        // line 7
echo _gettext("Unique");
        echo "</th>
            <th>";
        // line 8
echo _gettext("Packed");
        echo "</th>
            <th>";
        // line 9
echo _gettext("Column");
        echo "</th>
            <th>";
        // line 10
echo _gettext("Cardinality");
        echo "</th>
            <th>";
        // line 11
echo _gettext("Collation");
        echo "</th>
            <th>";
        // line 12
echo _gettext("Null");
        echo "</th>
            <th>";
        // line 13
echo _gettext("Comment");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 18
            echo "            <tr class=\"noclick\">
                <td>
                    <strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Key_name", [], "array", false, false, false, 20), "html", null, true);
            echo "</strong>
                </td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Index_type", [], "array", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["index"], "Non_unique", [], "array", false, false, false, 23) == 0)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["index"], "Packed", [], "array", false, false, false, 24) != "")) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Column_name", [], "array", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Cardinality", [], "array", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Collation", [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Null", [], "array", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "Comment", [], "array", false, false, false, 29), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/structure_snapshot_indexes.twig";
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
        return array (  134 => 32,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  92 => 20,  88 => 18,  84 => 17,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>{% trans 'Indexes' %}</h3>
<table id=\"tablestructure_indexes\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
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
    <tbody>
        {% for index in indexes %}
            <tr class=\"noclick\">
                <td>
                    <strong>{{ index['Key_name'] }}</strong>
                </td>
                <td>{{ index['Index_type'] }}</td>
                <td>{{ index['Non_unique'] == 0 ? 'Yes'|trans : 'No'|trans }}</td>
                <td>{{ index['Packed'] != '' ? 'Yes'|trans : 'No'|trans }}</td>
                <td>{{ index['Column_name'] }}</td>
                <td>{{ index['Cardinality'] }}</td>
                <td>{{ index['Collation'] }}</td>
                <td>{{ index['Null'] }}</td>
                <td>{{ index['Comment'] }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "table/tracking/structure_snapshot_indexes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/structure_snapshot_indexes.twig");
    }
}
