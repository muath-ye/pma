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

/* database/search/results.twig */
class __TwigTemplate_a43845cdb71146cb4b98b11e35913074 extends Template
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
        echo "<table class=\"table table-striped caption-top w-auto\">
    <caption>";
        // line 3
        echo twig_sprintf("Search results for \"<em>%s</em>\" %s:", twig_escape_filter($this->env,         // line 4
(isset($context["criteria_search_string"]) || array_key_exists("criteria_search_string", $context) ? $context["criteria_search_string"] : (function () { throw new RuntimeError('Variable "criteria_search_string" does not exist.', 4, $this->source); })())),         // line 5
(isset($context["search_type_description"]) || array_key_exists("search_type_description", $context) ? $context["search_type_description"] : (function () { throw new RuntimeError('Variable "search_type_description" does not exist.', 5, $this->source); })()));
        // line 7
        echo "</caption>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "        <tr class=\"noclick\">
            <td>";
            // line 11
            ob_start();
            // line 12
echo _ngettext("%1\$s match in <strong>%2\$s</strong>", "%1\$s matches in <strong>%2\$s</strong>", abs(twig_get_attribute($this->env, $this->source,             // line 14
$context["row"], "result_count", [], "any", false, false, false, 14)));
            $context["result_message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo twig_sprintf((isset($context["result_message"]) || array_key_exists("result_message", $context) ? $context["result_message"] : (function () { throw new RuntimeError('Variable "result_message" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["row"], "result_count", [], "any", false, false, false, 18), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "table", [], "any", false, false, false, 18)));
            // line 19
            echo "</td>";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "result_count", [], "any", false, false, false, 20) > 0)) {
                // line 21
                $context["url_params"] = ["db" =>                 // line 22
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 22, $this->source); })()), "table" => twig_get_attribute($this->env, $this->source,                 // line 23
$context["row"], "table", [], "any", false, false, false, 23), "goto" => $this->env->getFunction('url')->getCallable()("/database/sql"), "pos" => 0, "is_js_confirmed" => 0];
                // line 28
                echo "<td><button
                        class=\"btn btn-link p-0 ajax browse_results\"
                        data-href=\"";
                // line 30
                echo $this->env->getFunction('url')->getCallable()("/sql", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 30, $this->source); })()));
                echo "\"
                        data-browse-sql=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "new_search_sqls", [], "any", false, false, false, 31), "select_columns", [], "any", false, false, false, 31), "html", null, true);
                echo "\"
                        data-table-name=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "table", [], "any", false, false, false, 32), "html", null, true);
                echo "\">";
echo _gettext("Browse");
                echo "</button>
                </td>
                <td><button
                        class=\"btn btn-link p-0 ajax delete_results\"
                        data-href=\"";
                // line 36
                echo $this->env->getFunction('url')->getCallable()("/sql", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 36, $this->source); })()));
                echo "\"
                        data-delete-sql=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "new_search_sqls", [], "any", false, false, false, 37), "delete", [], "any", false, false, false, 37), "html", null, true);
                echo "\"
                        data-table-name=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "table", [], "any", false, false, false, 38), "html", null, true);
                echo "\">";
echo _gettext("Delete");
                echo "</button>
                </td>";
            } else {
                // line 41
                echo "<td></td>
                <td></td>";
            }
            // line 44
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</table>

";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["criteria_tables"]) || array_key_exists("criteria_tables", $context) ? $context["criteria_tables"] : (function () { throw new RuntimeError('Variable "criteria_tables" does not exist.', 48, $this->source); })())) > 1)) {
            // line 49
            echo "    <p>
        ";
            // line 50
echo strtr(_ngettext("<strong>Total:</strong> <em>%count%</em> match", "<strong>Total:</strong> <em>%count%</em> matches", abs(            // line 52
(isset($context["result_total"]) || array_key_exists("result_total", $context) ? $context["result_total"] : (function () { throw new RuntimeError('Variable "result_total" does not exist.', 52, $this->source); })()))), array("%count%" => abs((isset($context["result_total"]) || array_key_exists("result_total", $context) ? $context["result_total"] : (function () { throw new RuntimeError('Variable "result_total" does not exist.', 52, $this->source); })())), "%count%" => abs((isset($context["result_total"]) || array_key_exists("result_total", $context) ? $context["result_total"] : (function () { throw new RuntimeError('Variable "result_total" does not exist.', 52, $this->source); })())), ));
            // line 55
            echo "    </p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/search/results.twig";
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
        return array (  129 => 55,  127 => 52,  126 => 50,  123 => 49,  121 => 48,  117 => 46,  110 => 44,  106 => 41,  99 => 38,  95 => 37,  91 => 36,  82 => 32,  78 => 31,  74 => 30,  70 => 28,  68 => 23,  67 => 22,  66 => 21,  64 => 20,  62 => 19,  60 => 18,  57 => 14,  56 => 12,  54 => 11,  51 => 9,  47 => 8,  44 => 7,  42 => 5,  41 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-striped caption-top w-auto\">
    <caption>
        {{- 'Search results for \"<em>%s</em>\" %s:'|format(
            criteria_search_string|e,
            search_type_description
        )|raw -}}
    </caption>
    {% for row in rows %}
        <tr class=\"noclick\">
            <td>
                {%- set result_message -%}
                    {% trans %}
                        %1\$s match in <strong>%2\$s</strong>
                    {% plural row.result_count %}
                        %1\$s matches in <strong>%2\$s</strong>
                    {% endtrans %}
                {%- endset -%}
                {{- result_message|format(row.result_count, row.table|e)|raw -}}
            </td>
            {%- if row.result_count > 0 -%}
                {%- set url_params = {
                    'db': db,
                    'table': row.table,
                    'goto': url('/database/sql'),
                    'pos': 0,
                    'is_js_confirmed': 0
                } -%}
                <td><button
                        class=\"btn btn-link p-0 ajax browse_results\"
                        data-href=\"{{ url('/sql', url_params) }}\"
                        data-browse-sql=\"{{ row.new_search_sqls.select_columns }}\"
                        data-table-name=\"{{ row.table }}\">{% trans 'Browse' %}</button>
                </td>
                <td><button
                        class=\"btn btn-link p-0 ajax delete_results\"
                        data-href=\"{{ url('/sql', url_params) }}\"
                        data-delete-sql=\"{{ row.new_search_sqls.delete }}\"
                        data-table-name=\"{{ row.table }}\">{% trans 'Delete' %}</button>
                </td>
            {%- else -%}
                <td></td>
                <td></td>
            {%- endif -%}
        </tr>
    {% endfor %}
</table>

{% if criteria_tables|length > 1 %}
    <p>
        {% trans %}
            <strong>Total:</strong> <em>{{ count }}</em> match
        {% plural result_total %}
            <strong>Total:</strong> <em>{{ count }}</em> matches
        {% endtrans %}
    </p>
{% endif %}
", "database/search/results.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/search/results.twig");
    }
}
