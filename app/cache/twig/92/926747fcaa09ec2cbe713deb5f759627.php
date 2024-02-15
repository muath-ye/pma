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

/* table/tracking/report_table.twig */
class __TwigTemplate_9756cea5b2c915ce4cfb4ee21c49931b extends Template
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
        echo "<table id=\"";
        echo twig_escape_filter($this->env, (isset($context["table_id"]) || array_key_exists("table_id", $context) ? $context["table_id"] : (function () { throw new RuntimeError('Variable "table_id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>";
        // line 4
echo _pgettext("Number", "#");
        echo "</th>
            <th>";
        // line 5
echo _gettext("Date");
        echo "</th>
            <th>";
        // line 6
echo _gettext("Username");
        echo "</th>
            <th>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["header_message"]) || array_key_exists("header_message", $context) ? $context["header_message"] : (function () { throw new RuntimeError('Variable "header_message" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</th>
            <th>";
        // line 8
echo _gettext("Action");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 13
            echo "            <tr class=\"noclick\">
                <td class=\"text-end\"><small>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "line_number", [], "any", false, false, false, 14), "html", null, true);
            echo "</small></td>
                <td><small>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "date", [], "any", false, false, false, 15), "html", null, true);
            echo "</small></td>
                <td><small>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "username", [], "any", false, false, false, 16), "html", null, true);
            echo "</small></td>
                <td>";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "formated_statement", [], "any", false, false, false, 17);
            echo "</td>
                <td class=\"text-nowrap\">
                    <a class=\"delete_entry_anchor ajax\" href=\"";
            // line 19
            echo $this->env->getFunction('url')->getCallable()("/table/tracking");
            echo "\" data-post=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["entry"], "url_params", [], "any", false, false, false, 20);
            echo "\">
                        ";
            // line 21
            echo (isset($context["drop_image_or_text"]) || array_key_exists("drop_image_or_text", $context) ? $context["drop_image_or_text"] : (function () { throw new RuntimeError('Variable "drop_image_or_text" does not exist.', 21, $this->source); })());
            echo "
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/report_table.twig";
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
        return array (  109 => 26,  98 => 21,  94 => 20,  91 => 19,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  67 => 12,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"{{ table_id }}\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>{% trans %}#{% context %}Number{% endtrans %}</th>
            <th>{% trans 'Date' %}</th>
            <th>{% trans 'Username' %}</th>
            <th>{{ header_message }}</th>
            <th>{% trans 'Action' %}</th>
        </tr>
    </thead>
    <tbody>
        {% for entry in entries %}
            <tr class=\"noclick\">
                <td class=\"text-end\"><small>{{ entry.line_number }}</small></td>
                <td><small>{{ entry.date }}</small></td>
                <td><small>{{ entry.username }}</small></td>
                <td>{{ entry.formated_statement|raw }}</td>
                <td class=\"text-nowrap\">
                    <a class=\"delete_entry_anchor ajax\" href=\"{{ url('/table/tracking') }}\" data-post=\"
                        {{- entry.url_params|raw }}\">
                        {{ drop_image_or_text|raw }}
                    </a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "table/tracking/report_table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/report_table.twig");
    }
}
