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

/* database/structure/check_all_tables.twig */
class __TwigTemplate_89a4d8be53a96fa0f74c516602899d8c extends Template
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
        echo "<div class=\"clearfloat d-print-none\">
    ";
        // line 2
        echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 2, $this->source); })()), "width" => "38", "height" => "22"]);
        echo "
    <input type=\"checkbox\" id=\"tablesForm_checkall\" class=\"checkall_box\" title=\"";
        // line 3
echo _gettext("Check all");
        echo "\">
    <label for=\"tablesForm_checkall\">";
        // line 4
echo _gettext("Check all");
        echo "</label>
    ";
        // line 5
        if (((isset($context["overhead_check"]) || array_key_exists("overhead_check", $context) ? $context["overhead_check"] : (function () { throw new RuntimeError('Variable "overhead_check" does not exist.', 5, $this->source); })()) != "")) {
            // line 6
            echo "        / <a href=\"#\" class=\"checkall-filter\" data-checkall-selector=\".tbl-overhead\">";
echo _gettext("Check tables having overhead");
            echo "</a>
    ";
        }
        // line 8
        echo "    <select name=\"submit_mult\" class=\"mx-5 my-0\">
        <option value=\"";
        // line 9
echo _gettext("With selected:");
        echo "\" selected=\"selected\">";
echo _gettext("With selected:");
        echo "</option>
        <option value=\"copy_tbl\">";
        // line 10
echo _gettext("Copy table");
        echo "</option>
        <option value=\"show_create\">";
        // line 11
echo _gettext("Show create");
        echo "</option>
        <option value=\"export\">";
        // line 12
echo _gettext("Export");
        echo "</option>
        ";
        // line 13
        if (( !(isset($context["db_is_system_schema"]) || array_key_exists("db_is_system_schema", $context) ? $context["db_is_system_schema"] : (function () { throw new RuntimeError('Variable "db_is_system_schema" does not exist.', 13, $this->source); })()) &&  !(isset($context["disable_multi_table"]) || array_key_exists("disable_multi_table", $context) ? $context["disable_multi_table"] : (function () { throw new RuntimeError('Variable "disable_multi_table" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "            <optgroup label=\"";
echo _gettext("Delete data or table");
            echo "\">
                <option value=\"empty_tbl\">";
            // line 15
echo _gettext("Empty");
            echo "</option>
                <option value=\"drop_tbl\">";
            // line 16
echo _gettext("Drop");
            echo "</option>
            </optgroup>
            <optgroup label=\"";
            // line 18
echo _gettext("Table maintenance");
            echo "\">
                <option value=\"analyze_tbl\">";
            // line 19
echo _gettext("Analyze table");
            echo "</option>
                <option value=\"check_tbl\">";
            // line 20
echo _gettext("Check table");
            echo "</option>
                <option value=\"checksum_tbl\">";
            // line 21
echo _gettext("Checksum table");
            echo "</option>
                <option value=\"optimize_tbl\">";
            // line 22
echo _gettext("Optimize table");
            echo "</option>
                <option value=\"repair_tbl\">";
            // line 23
echo _gettext("Repair table");
            echo "</option>
            </optgroup>
            <optgroup label=\"";
            // line 25
echo _gettext("Prefix");
            echo "\">
                <option value=\"add_prefix_tbl\">";
            // line 26
echo _gettext("Add prefix to table");
            echo "</option>
                <option value=\"replace_prefix_tbl\">";
            // line 27
echo _gettext("Replace table prefix");
            echo "</option>
                <option value=\"copy_tbl_change_prefix\">";
            // line 28
echo _gettext("Copy table with prefix");
            echo "</option>
            </optgroup>
        ";
        }
        // line 31
        echo "        ";
        if ((array_key_exists("central_columns_work", $context) && (isset($context["central_columns_work"]) || array_key_exists("central_columns_work", $context) ? $context["central_columns_work"] : (function () { throw new RuntimeError('Variable "central_columns_work" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "            <optgroup label=\"";
echo _gettext("Central columns");
            echo "\">
                <option value=\"sync_unique_columns_central_list\">";
            // line 33
echo _gettext("Add columns to central list");
            echo "</option>
                <option value=\"delete_unique_columns_central_list\">";
            // line 34
echo _gettext("Remove columns from central list");
            echo "</option>
                <option value=\"make_consistent_with_central_list\">";
            // line 35
echo _gettext("Make consistent with central list");
            echo "</option>
            </optgroup>
        ";
        }
        // line 38
        echo "    </select>
    ";
        // line 39
        echo twig_join_filter((isset($context["hidden_fields"]) || array_key_exists("hidden_fields", $context) ? $context["hidden_fields"] : (function () { throw new RuntimeError('Variable "hidden_fields" does not exist.', 39, $this->source); })()), "
");
        echo "
</div>

";
        // line 42
        if ((array_key_exists("central_columns_work", $context) && (isset($context["central_columns_work"]) || array_key_exists("central_columns_work", $context) ? $context["central_columns_work"] : (function () { throw new RuntimeError('Variable "central_columns_work" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "  <div class=\"modal fade\" id=\"makeConsistentWithCentralListModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
       tabindex=\"-1\" aria-labelledby=\"makeConsistentWithCentralListModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"makeConsistentWithCentralListModalLabel\">";
            // line 48
echo _gettext("Are you sure?");
            echo "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 49
echo _gettext("Cancel");
            echo "\"></button>
        </div>
        <div class=\"modal-body\">
          ";
            // line 52
            echo $this->env->getFilter('sanitize')->getCallable()(_gettext("This action may change some of the columns definition.[br]Are you sure you want to continue?"));
            echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 55
echo _gettext("Cancel");
            echo "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"makeConsistentWithCentralListContinue\">";
            // line 56
echo _gettext("Continue");
            echo "</button>
        </div>
      </div>
    </div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/check_all_tables.twig";
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
        return array (  201 => 56,  197 => 55,  191 => 52,  185 => 49,  181 => 48,  174 => 43,  172 => 42,  165 => 39,  162 => 38,  156 => 35,  152 => 34,  148 => 33,  143 => 32,  140 => 31,  134 => 28,  130 => 27,  126 => 26,  122 => 25,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  92 => 16,  88 => 15,  83 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"clearfloat d-print-none\">
    {{ get_image('select_all_arrow', 'With selected:'|trans, {'dir': text_dir, 'width': '38', 'height': '22'}) }}
    <input type=\"checkbox\" id=\"tablesForm_checkall\" class=\"checkall_box\" title=\"{% trans 'Check all' %}\">
    <label for=\"tablesForm_checkall\">{% trans 'Check all' %}</label>
    {% if overhead_check != '' %}
        / <a href=\"#\" class=\"checkall-filter\" data-checkall-selector=\".tbl-overhead\">{% trans 'Check tables having overhead' %}</a>
    {% endif %}
    <select name=\"submit_mult\" class=\"mx-5 my-0\">
        <option value=\"{% trans 'With selected:' %}\" selected=\"selected\">{% trans 'With selected:' %}</option>
        <option value=\"copy_tbl\">{% trans 'Copy table' %}</option>
        <option value=\"show_create\">{% trans 'Show create' %}</option>
        <option value=\"export\">{% trans 'Export' %}</option>
        {% if not db_is_system_schema and not disable_multi_table %}
            <optgroup label=\"{% trans 'Delete data or table' %}\">
                <option value=\"empty_tbl\">{% trans 'Empty' %}</option>
                <option value=\"drop_tbl\">{% trans 'Drop' %}</option>
            </optgroup>
            <optgroup label=\"{% trans 'Table maintenance' %}\">
                <option value=\"analyze_tbl\">{% trans 'Analyze table' %}</option>
                <option value=\"check_tbl\">{% trans 'Check table' %}</option>
                <option value=\"checksum_tbl\">{% trans 'Checksum table' %}</option>
                <option value=\"optimize_tbl\">{% trans 'Optimize table' %}</option>
                <option value=\"repair_tbl\">{% trans 'Repair table' %}</option>
            </optgroup>
            <optgroup label=\"{% trans 'Prefix' %}\">
                <option value=\"add_prefix_tbl\">{% trans 'Add prefix to table' %}</option>
                <option value=\"replace_prefix_tbl\">{% trans 'Replace table prefix' %}</option>
                <option value=\"copy_tbl_change_prefix\">{% trans 'Copy table with prefix' %}</option>
            </optgroup>
        {% endif %}
        {% if central_columns_work is defined and central_columns_work %}
            <optgroup label=\"{% trans 'Central columns' %}\">
                <option value=\"sync_unique_columns_central_list\">{% trans 'Add columns to central list' %}</option>
                <option value=\"delete_unique_columns_central_list\">{% trans 'Remove columns from central list' %}</option>
                <option value=\"make_consistent_with_central_list\">{% trans 'Make consistent with central list' %}</option>
            </optgroup>
        {% endif %}
    </select>
    {{ hidden_fields|join('\\n')|raw }}
</div>

{% if central_columns_work is defined and central_columns_work %}
  <div class=\"modal fade\" id=\"makeConsistentWithCentralListModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
       tabindex=\"-1\" aria-labelledby=\"makeConsistentWithCentralListModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"makeConsistentWithCentralListModalLabel\">{% trans 'Are you sure?' %}</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Cancel' %}\"></button>
        </div>
        <div class=\"modal-body\">
          {{ 'This action may change some of the columns definition.[br]Are you sure you want to continue?'|trans|sanitize }}
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Cancel' %}</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"makeConsistentWithCentralListContinue\">{% trans 'Continue' %}</button>
        </div>
      </div>
    </div>
  </div>
{% endif %}
", "database/structure/check_all_tables.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/check_all_tables.twig");
    }
}
