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

/* table/operations/index.twig */
class __TwigTemplate_5ee215c799fcccbd476ff87c1460df4f extends Template
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
        echo "<div class=\"container my-3\">
  <h2>";
        // line 2
        echo twig_escape_filter($this->env, _gettext("Table operations"), "html", null, true);
        echo "</h2>

";
        // line 4
        if ( !(isset($context["hide_order_table"]) || array_key_exists("hide_order_table", $context) ? $context["hide_order_table"] : (function () { throw new RuntimeError('Variable "hide_order_table" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/operations");
            echo "\">
    ";
            // line 6
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 6, $this->source); })()));
            echo "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
            // line 10
echo _gettext("Alter table order by");
            echo "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
            // line 14
echo _gettext("Column");
            echo "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 17
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              ";
            // line 21
echo _pgettext("Alter table order by a single field.", "(singly)");
            // line 22
            echo "            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
            // line 28
echo _gettext("Ascending");
            echo "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
            // line 32
echo _gettext("Descending");
            echo "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 39
echo _gettext("Go");
            echo "\">
      </div>
    </div>
  </form>
";
        }
        // line 44
        echo "
<form method=\"post\" action=\"";
        // line 45
        echo $this->env->getFunction('url')->getCallable()("/table/operations");
        echo "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 46
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 46, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 46, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 51
echo _gettext("Move table to (database.table)");
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 56
        if ( !twig_test_empty((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
echo _gettext("Database");
            echo "\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 59
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 59)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "              </select>
            ";
        } else {
            // line 63
            echo "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "\" aria-label=\"";
echo _gettext("Database");
            echo "\">
            ";
        }
        // line 65
        echo "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required=\"required\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\" aria-label=\"";
echo _gettext("Table");
        echo "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
        // line 73
echo _gettext("Add AUTO_INCREMENT value");
        echo "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 77
        if ((isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 77, $this->source); })())) {
            echo " checked";
        } else {
            echo " title=\"";
            // line 78
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            echo "\" disabled";
        }
        echo ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
        // line 80
echo _gettext("Adjust privileges");
        // line 81
        echo "          ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
        // line 87
echo _gettext("Go");
        echo "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 92
        echo $this->env->getFunction('url')->getCallable()("/table/operations");
        echo "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 93
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 93, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 93, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["table_comment"]) || array_key_exists("table_comment", $context) ? $context["table_comment"] : (function () { throw new RuntimeError('Variable "table_comment" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\">
  ";
        // line 97
        if ((isset($context["has_auto_increment"]) || array_key_exists("has_auto_increment", $context) ? $context["has_auto_increment"] : (function () { throw new RuntimeError('Variable "has_auto_increment" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["auto_increment"]) || array_key_exists("auto_increment", $context) ? $context["auto_increment"] : (function () { throw new RuntimeError('Variable "auto_increment" does not exist.', 98, $this->source); })()), "html", null, true);
            echo "\">
  ";
        }
        // line 100
        echo "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 102
echo _gettext("Table options");
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
        // line 106
echo _gettext("Rename table to");
        echo "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 113
        if ((isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 113, $this->source); })())) {
            echo " checked";
        } else {
            echo " title=\"";
            // line 114
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
        // line 116
echo _gettext("Adjust privileges");
        // line 117
        echo "            ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
        // line 124
echo _gettext("Table comments");
        echo "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["table_comment"]) || array_key_exists("table_comment", $context) ? $context["table_comment"] : (function () { throw new RuntimeError('Variable "table_comment" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
        // line 134
echo _gettext("Storage engine");
        // line 135
        echo "            ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("Storage_engines");
        echo "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 141
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141), "html", null, true);
            echo "\"";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 141))) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 141), "html", null, true);
                echo "\"";
            }
            // line 142
            echo ((((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142)) == twig_lower_filter($this->env, (isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 142, $this->source); })()))) || (twig_test_empty((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 142, $this->source); })())) && twig_get_attribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 142)))) ? (" selected") : (""));
            echo ">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 143), "html", null, true);
            // line 144
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
        // line 152
echo _gettext("Collation");
        echo "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 158
            echo "              <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 158), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 158), "html", null, true);
            echo "\">
                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 159, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 159), [], "array", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 160
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 160), "html", null, true);
                echo "\"";
                echo ((((isset($context["tbl_collation"]) || array_key_exists("tbl_collation", $context) ? $context["tbl_collation"] : (function () { throw new RuntimeError('Variable "tbl_collation" does not exist.', 160, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160))) ? (" selected") : (""));
                echo ">
                    ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 161), "html", null, true);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
        // line 171
echo _gettext("Change all column collations");
        echo "</label>
        </div>
      </div>

      ";
        // line 175
        if ((isset($context["has_pack_keys"]) || array_key_exists("has_pack_keys", $context) ? $context["has_pack_keys"] : (function () { throw new RuntimeError('Variable "has_pack_keys" does not exist.', 175, $this->source); })())) {
            // line 176
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 182
            echo ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 182, $this->source); })()) == "DEFAULT")) ? (" selected") : (""));
            echo ">DEFAULT</option>
              <option value=\"0\"";
            // line 183
            echo ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 183, $this->source); })()) == "0")) ? (" selected") : (""));
            echo ">0</option>
              <option value=\"1\"";
            // line 184
            echo ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 184, $this->source); })()) == "1")) ? (" selected") : (""));
            echo ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 189
        echo "
      ";
        // line 190
        if ((isset($context["has_checksum_and_delay_key_write"]) || array_key_exists("has_checksum_and_delay_key_write", $context) ? $context["has_checksum_and_delay_key_write"] : (function () { throw new RuntimeError('Variable "has_checksum_and_delay_key_write" does not exist.', 190, $this->source); })())) {
            // line 191
            echo "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 192
            echo ((((isset($context["checksum"]) || array_key_exists("checksum", $context) ? $context["checksum"] : (function () { throw new RuntimeError('Variable "checksum" does not exist.', 192, $this->source); })()) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 197
            echo ((((isset($context["delay_key_write"]) || array_key_exists("delay_key_write", $context) ? $context["delay_key_write"] : (function () { throw new RuntimeError('Variable "delay_key_write" does not exist.', 197, $this->source); })()) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 201
        echo "
      ";
        // line 202
        if ((isset($context["has_transactional_and_page_checksum"]) || array_key_exists("has_transactional_and_page_checksum", $context) ? $context["has_transactional_and_page_checksum"] : (function () { throw new RuntimeError('Variable "has_transactional_and_page_checksum" does not exist.', 202, $this->source); })())) {
            // line 203
            echo "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 204
            echo ((((isset($context["transactional"]) || array_key_exists("transactional", $context) ? $context["transactional"] : (function () { throw new RuntimeError('Variable "transactional" does not exist.', 204, $this->source); })()) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 209
            echo ((((isset($context["page_checksum"]) || array_key_exists("page_checksum", $context) ? $context["page_checksum"] : (function () { throw new RuntimeError('Variable "page_checksum" does not exist.', 209, $this->source); })()) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 213
        echo "
      ";
        // line 214
        if ((isset($context["has_auto_increment"]) || array_key_exists("has_auto_increment", $context) ? $context["has_auto_increment"] : (function () { throw new RuntimeError('Variable "has_auto_increment" does not exist.', 214, $this->source); })())) {
            // line 215
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 220
            echo twig_escape_filter($this->env, (isset($context["auto_increment"]) || array_key_exists("auto_increment", $context) ? $context["auto_increment"] : (function () { throw new RuntimeError('Variable "auto_increment" does not exist.', 220, $this->source); })()), "html", null, true);
            echo "\">
          </div>
        </div>
      ";
        }
        // line 224
        echo "
      ";
        // line 225
        if ( !twig_test_empty((isset($context["row_formats"]) || array_key_exists("row_formats", $context) ? $context["row_formats"] : (function () { throw new RuntimeError('Variable "row_formats" does not exist.', 225, $this->source); })()))) {
            // line 226
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row_formats"]) || array_key_exists("row_formats", $context) ? $context["row_formats"] : (function () { throw new RuntimeError('Variable "row_formats" does not exist.', 232, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 233
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["row_format"], "html", null, true);
                echo "\"";
                echo ((($context["row_format"] == twig_upper_filter($this->env, (isset($context["row_format_current"]) || array_key_exists("row_format_current", $context) ? $context["row_format_current"] : (function () { throw new RuntimeError('Variable "row_format_current" does not exist.', 233, $this->source); })())))) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["row_format"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row_format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "            </select>
          </div>
        </div>
      ";
        }
        // line 239
        echo "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 242
echo _gettext("Go");
        echo "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 247
        echo $this->env->getFunction('url')->getCallable()("/table/operations");
        echo "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 248
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 248, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 248, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 252
echo _gettext("Copy table to (database.table)");
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 257
        if ( !twig_test_empty((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 257, $this->source); })()))) {
            // line 258
            echo "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
echo _gettext("Database");
            echo "\">
                ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 259, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 260
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 260), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 260)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 260), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "              </select>
            ";
        } else {
            // line 264
            echo "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 264, $this->source); })()), "html", null, true);
            echo "\" aria-label=\"";
echo _gettext("Database");
            echo "\">
            ";
        }
        // line 266
        echo "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 267, $this->source); })()), "html", null, true);
        echo "\" aria-label=\"";
echo _gettext("Table");
        echo "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
        // line 276
echo _gettext("Structure only");
        // line 277
        echo "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
        // line 282
echo _gettext("Structure and data");
        // line 283
        echo "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
        // line 288
echo _gettext("Data only");
        // line 289
        echo "          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 296
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
        // line 301
echo _gettext("Add AUTO_INCREMENT value");
        echo "</label>
        </div>

        ";
        // line 304
        if ((isset($context["has_foreign_keys"]) || array_key_exists("has_foreign_keys", $context) ? $context["has_foreign_keys"] : (function () { throw new RuntimeError('Variable "has_foreign_keys" does not exist.', 304, $this->source); })())) {
            // line 305
            echo "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
            // line 307
echo _gettext("Add constraints");
            echo "</label>
          </div>
        ";
        }
        // line 310
        echo "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 313
        if ((isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 313, $this->source); })())) {
            echo " checked";
        } else {
            echo " title=\"";
            // line 314
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
        // line 316
echo _gettext("Adjust privileges");
        // line 317
        echo "            ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 322
        echo (((isset($context["switch_to_new"]) || array_key_exists("switch_to_new", $context) ? $context["switch_to_new"] : (function () { throw new RuntimeError('Variable "switch_to_new" does not exist.', 322, $this->source); })())) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
        // line 323
echo _gettext("Switch to copied table");
        echo "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
        // line 329
echo _gettext("Go");
        echo "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
        // line 335
echo _gettext("Table maintenance");
        echo "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 337
        if (twig_in_filter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 337, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 338
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 339
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/analyze");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 339, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 339, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 339, $this->source); })())]], "", false);
            echo "\">
          ";
            // line 340
echo _gettext("Analyze table");
            // line 341
            echo "        </a>
        ";
            // line 342
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("ANALYZE_TABLE");
            echo "
      </li>
    ";
        }
        // line 345
        echo "
    ";
        // line 346
        if (twig_in_filter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 346, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 347
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 348
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/check");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 348, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 348, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 348, $this->source); })())]], "", false);
            echo "\">
          ";
            // line 349
echo _gettext("Check table");
            // line 350
            echo "        </a>
        ";
            // line 351
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("CHECK_TABLE");
            echo "
      </li>
    ";
        }
        // line 354
        echo "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 356
        echo $this->env->getFunction('url')->getCallable()("/table/maintenance/checksum");
        echo "\" data-post=\"";
        echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 356, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 356, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 356, $this->source); })())]], "", false);
        echo "\">
        ";
        // line 357
echo _gettext("Checksum table");
        // line 358
        echo "      </a>
      ";
        // line 359
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("CHECKSUM_TABLE");
        echo "
    </li>

    ";
        // line 362
        if (((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 362, $this->source); })()) == "INNODB")) {
            // line 363
            echo "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 364
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 364, $this->source); })()), ["sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 364, $this->source); })()))) . " ENGINE = InnoDB;")]), "", false);
            echo "\">
          ";
            // line 365
echo _gettext("Defragment table");
            // line 366
            echo "        </a>
        ";
            // line 367
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("InnoDB_File_Defragmenting");
            echo "
      </li>
    ";
        }
        // line 370
        echo "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 372
        echo $this->env->getFunction('url')->getCallable()("/sql");
        echo "\" data-post=\"";
        echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 372, $this->source); })()), ["sql_query" => ("FLUSH TABLE " . $this->env->getFunction('backquote')->getCallable()(        // line 373
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 373, $this->source); })()))), "message_to_show" => twig_sprintf(_gettext("Table %s has been flushed."), twig_escape_filter($this->env,         // line 374
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 374, $this->source); })()))), "reload" => true]), "", false);
        // line 376
        echo "\">
        ";
        // line 377
echo _gettext("Flush the table (FLUSH)");
        // line 378
        echo "      </a>
      ";
        // line 379
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("FLUSH");
        echo "
    </li>

    ";
        // line 382
        if (twig_in_filter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 382, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 383
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 384
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/optimize");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 384, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 384, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 384, $this->source); })())]], "", false);
            echo "\">
          ";
            // line 385
echo _gettext("Optimize table");
            // line 386
            echo "        </a>
        ";
            // line 387
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("OPTIMIZE_TABLE");
            echo "
      </li>
    ";
        }
        // line 390
        echo "
    ";
        // line 391
        if (twig_in_filter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 391, $this->source); })()), ["MYISAM", "ARIA"])) {
            // line 392
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 393
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/repair");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 393, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 393, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 393, $this->source); })())]], "", false);
            echo "\">
          ";
            // line 394
echo _gettext("Repair table");
            // line 395
            echo "        </a>
        ";
            // line 396
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("REPAIR_TABLE");
            echo "
      </li>
    ";
        }
        // line 399
        echo "  </ul>
</div>

";
        // line 402
        if ( !(isset($context["is_system_schema"]) || array_key_exists("is_system_schema", $context) ? $context["is_system_schema"] : (function () { throw new RuntimeError('Variable "is_system_schema" does not exist.', 402, $this->source); })())) {
            // line 403
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 404
echo _gettext("Delete data or table");
            echo "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 406
            if ( !(isset($context["is_view"]) || array_key_exists("is_view", $context) ? $context["is_view"] : (function () { throw new RuntimeError('Variable "is_view" does not exist.', 406, $this->source); })())) {
                // line 407
                echo "        <li class=\"list-group-item\">
          ";
                // line 408
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(                // line 410
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 410, $this->source); })()), ["sql_query" => ((("TRUNCATE TABLE " . $this->env->getFunction('backquote')->getCallable()(                // line 411
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 411, $this->source); })()))) . ".") . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 411, $this->source); })()))), "goto" => $this->env->getFunction('url')->getCallable()("/table/structure"), "reload" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been emptied."),                 // line 414
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 414, $this->source); })())))]), _gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . $this->env->getFunction('backquote')->getCallable()(                // line 420
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 420, $this->source); })()))) . ".") . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 420, $this->source); })())))]);
                // line 422
                echo "
          ";
                // line 423
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("TRUNCATE_TABLE");
                echo "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 426
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(                // line 428
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 428, $this->source); })()), ["sql_query" => ((("DELETE FROM " . $this->env->getFunction('backquote')->getCallable()(                // line 429
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 429, $this->source); })()))) . ".") . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 429, $this->source); })()))), "goto" => $this->env->getFunction('url')->getCallable()("/table/structure"), "reload" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been emptied."),                 // line 432
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 432, $this->source); })())))]), _gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . $this->env->getFunction('backquote')->getCallable()(                // line 438
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 438, $this->source); })()))) . ".") . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 438, $this->source); })())))]);
                // line 440
                echo "
          ";
                // line 441
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("DELETE");
                echo "
        </li>
      ";
            }
            // line 444
            echo "      <li class=\"list-group-item\">
        ";
            // line 445
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(            // line 447
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 447, $this->source); })()), ["sql_query" => ((("DROP TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 448
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 448, $this->source); })()))) . ".") . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 448, $this->source); })()))), "goto" => $this->env->getFunction('url')->getCallable()("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => ((            // line 452
(isset($context["is_view"]) || array_key_exists("is_view", $context) ? $context["is_view"] : (function () { throw new RuntimeError('Variable "is_view" does not exist.', 452, $this->source); })())) ? (twig_escape_filter($this->env, twig_sprintf(_gettext("View %s has been dropped."), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 452, $this->source); })())))) : (twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been dropped."), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 452, $this->source); })()))))), "table" =>             // line 453
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 453, $this->source); })())]), _gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 459
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 459, $this->source); })()))) . ".") . $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 459, $this->source); })())))]);
            // line 461
            echo "
        ";
            // line 462
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("DROP_TABLE");
            echo "
      </li>
    </ul>
  </div>
";
        }
        // line 467
        echo "
";
        // line 468
        if ( !twig_test_empty((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 468, $this->source); })()))) {
            // line 469
            echo "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/operations");
            echo "\">
    ";
            // line 470
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 470, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 470, $this->source); })()));
            echo "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
            // line 475
echo _gettext("Partition maintenance");
            // line 476
            echo "        ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("partitioning_maintenance");
            echo "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
            // line 481
echo _gettext("Partition");
            echo "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 483
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 483, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 484
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["partition"], "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 484)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["partition"], "html", null, true);
                echo "</option>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partitions_choices"]) || array_key_exists("partitions_choices", $context) ? $context["partitions_choices"] : (function () { throw new RuntimeError('Variable "partitions_choices" does not exist.', 490, $this->source); })()));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 491
                echo "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 492
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["value"]), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
                echo ((($context["value"] == "ANALYZE")) ? (" checked") : (""));
                echo ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 493
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["value"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                echo "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 496
            echo "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 499
            echo $this->env->getFunction('url')->getCallable()("/sql", twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 499, $this->source); })()), ["sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 500
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 500, $this->source); })()))) . " REMOVE PARTITIONING;")]));
            // line 501
            echo "\">";
echo _gettext("Remove partitioning");
            echo "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 506
echo _gettext("Go");
            echo "\">
      </div>
    </div>
  </form>
";
        }
        // line 511
        echo "
";
        // line 512
        if ( !twig_test_empty((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 512, $this->source); })()))) {
            // line 513
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 514
echo _gettext("Check referential integrity");
            echo "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 516, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 517
                echo "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 518
                echo $this->env->getFunction('url')->getCallable()("/sql", twig_get_attribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 518));
                echo "\">
            ";
                // line 519
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 519), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 519), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 519), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 519), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            echo "    </ul>
  </div>
";
        }
        // line 526
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/operations/index.twig";
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
        return array (  1156 => 526,  1151 => 523,  1135 => 519,  1131 => 518,  1128 => 517,  1124 => 516,  1119 => 514,  1116 => 513,  1114 => 512,  1111 => 511,  1103 => 506,  1094 => 501,  1092 => 500,  1091 => 499,  1086 => 496,  1075 => 493,  1067 => 492,  1064 => 491,  1060 => 490,  1054 => 486,  1033 => 484,  1016 => 483,  1011 => 481,  1002 => 476,  1000 => 475,  992 => 470,  987 => 469,  985 => 468,  982 => 467,  974 => 462,  971 => 461,  969 => 459,  968 => 453,  967 => 452,  966 => 448,  965 => 447,  964 => 445,  961 => 444,  955 => 441,  952 => 440,  950 => 438,  949 => 432,  948 => 429,  947 => 428,  946 => 426,  940 => 423,  937 => 422,  935 => 420,  934 => 414,  933 => 411,  932 => 410,  931 => 408,  928 => 407,  926 => 406,  921 => 404,  918 => 403,  916 => 402,  911 => 399,  905 => 396,  902 => 395,  900 => 394,  894 => 393,  891 => 392,  889 => 391,  886 => 390,  880 => 387,  877 => 386,  875 => 385,  869 => 384,  866 => 383,  864 => 382,  858 => 379,  855 => 378,  853 => 377,  850 => 376,  848 => 374,  847 => 373,  844 => 372,  840 => 370,  834 => 367,  831 => 366,  829 => 365,  823 => 364,  820 => 363,  818 => 362,  812 => 359,  809 => 358,  807 => 357,  801 => 356,  797 => 354,  791 => 351,  788 => 350,  786 => 349,  780 => 348,  777 => 347,  775 => 346,  772 => 345,  766 => 342,  763 => 341,  761 => 340,  755 => 339,  752 => 338,  750 => 337,  745 => 335,  736 => 329,  727 => 323,  723 => 322,  714 => 317,  712 => 316,  705 => 314,  700 => 313,  696 => 310,  690 => 307,  686 => 305,  684 => 304,  678 => 301,  670 => 296,  661 => 289,  659 => 288,  652 => 283,  650 => 282,  643 => 277,  641 => 276,  627 => 267,  624 => 266,  616 => 264,  612 => 262,  599 => 260,  595 => 259,  590 => 258,  588 => 257,  580 => 252,  573 => 248,  569 => 247,  561 => 242,  556 => 239,  550 => 235,  537 => 233,  533 => 232,  525 => 226,  523 => 225,  520 => 224,  513 => 220,  506 => 215,  504 => 214,  501 => 213,  494 => 209,  486 => 204,  483 => 203,  481 => 202,  478 => 201,  471 => 197,  463 => 192,  460 => 191,  458 => 190,  455 => 189,  447 => 184,  443 => 183,  439 => 182,  431 => 176,  429 => 175,  422 => 171,  415 => 166,  408 => 164,  399 => 161,  390 => 160,  386 => 159,  379 => 158,  375 => 157,  367 => 152,  359 => 146,  352 => 144,  350 => 143,  347 => 142,  338 => 141,  334 => 140,  325 => 135,  323 => 134,  313 => 127,  307 => 124,  296 => 117,  294 => 116,  287 => 114,  282 => 113,  276 => 109,  270 => 106,  263 => 102,  259 => 100,  253 => 98,  251 => 97,  247 => 96,  241 => 93,  237 => 92,  229 => 87,  219 => 81,  217 => 80,  210 => 78,  205 => 77,  199 => 73,  187 => 66,  184 => 65,  176 => 63,  172 => 61,  159 => 59,  155 => 58,  150 => 57,  148 => 56,  140 => 51,  132 => 46,  128 => 45,  125 => 44,  117 => 39,  107 => 32,  100 => 28,  92 => 22,  90 => 21,  86 => 19,  75 => 17,  71 => 16,  66 => 14,  59 => 10,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container my-3\">
  <h2>{{ 'Table operations'|trans }}</h2>

{% if not hide_order_table %}
  <form method=\"post\" id=\"alterTableOrderby\" action=\"{{ url('/table/operations') }}\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">{% trans 'Alter table order by' %}</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">{% trans 'Column' %}</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              {% for column in columns %}
                <option value=\"{{ column.field }}\">{{ column.field }}</option>
              {% endfor %}
            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              {% trans %}(singly){% context %}Alter table order by a single field.{% endtrans %}
            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">{% trans 'Ascending' %}</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">{% trans 'Descending' %}</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
      </div>
    </div>
  </form>
{% endif %}

<form method=\"post\" action=\"{{ url('/table/operations') }}\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">{% trans 'Move table to (database.table)' %}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            {% if database_list is not empty %}
              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"{% trans 'Database' %}\">
                {% for each_db in database_list %}
                  <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
                {% endfor %}
              </select>
            {% else %}
              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"{{ db }}\" aria-label=\"{% trans 'Database' %}\">
            {% endif %}
            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required=\"required\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" aria-label=\"{% trans 'Table' %}\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">{% trans 'Add AUTO_INCREMENT value' %}</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"
          {%- if has_privileges %} checked{% else %} title=\"
          {%- trans 'You don\\'t have sufficient privileges to perform this operation; Please refer to the documentation for more details.' %}\" disabled{% endif %}>
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          {% trans 'Adjust privileges' %}
          {{ show_docu('faq', 'faq6-39') }}
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"{% trans 'Go' %}\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"{{ url('/table/operations') }}\" id=\"tableOptionsForm\" class=\"ajax\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"{{ table_comment }}\">
  {% if has_auto_increment %}
    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"{{ auto_increment }}\">
  {% endif %}

  <div class=\"card mb-2\">
    <div class=\"card-header\">{% trans 'Table options' %}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">{% trans 'Rename table to' %}</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"
            {%- if has_privileges %} checked{% else %} title=\"
            {%- trans 'You don\\'t have sufficient privileges to perform this operation; Please refer to the documentation for more details.' %}\" disabled{% endif %}>
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            {% trans 'Adjust privileges' %}
            {{ show_docu('faq', 'faq6-39') }}
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">{% trans 'Table comments' %}</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"{{ table_comment }}\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            {% trans 'Storage engine' %}
            {{ show_mysql_docu('Storage_engines') }}
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            {% for engine in storage_engines %}
              <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                {{- engine.name|lower == storage_engine|lower or (storage_engine is empty and engine.is_default) ? ' selected' }}>
                {{- engine.name -}}
              </option>
            {% endfor %}
          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">{% trans 'Collation' %}</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            {% for charset in charsets %}
              <optgroup label=\"{{ charset.getName() }}\" title=\"{{ charset.getDescription() }}\">
                {% for collation in collations[charset.getName()] %}
                  <option value=\"{{ collation.getName() }}\" title=\"{{ collation.getDescription() }}\"{{ tbl_collation == collation.getName() ? ' selected' }}>
                    {{ collation.getName() }}
                  </option>
                {% endfor %}
              </optgroup>
            {% endfor %}
          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">{% trans 'Change all column collations' %}</label>
        </div>
      </div>

      {% if has_pack_keys %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"{{ pack_keys == 'DEFAULT' ? ' selected' }}>DEFAULT</option>
              <option value=\"0\"{{ pack_keys == '0' ? ' selected' }}>0</option>
              <option value=\"1\"{{ pack_keys == '1' ? ' selected' }}>1</option>
            </select>
          </div>
        </div>
      {% endif %}

      {% if has_checksum_and_delay_key_write %}
        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"{{ checksum == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"{{ delay_key_write == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      {% endif %}

      {% if has_transactional_and_page_checksum %}
        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"{{ transactional == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"{{ page_checksum == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      {% endif %}

      {% if has_auto_increment %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"{{ auto_increment }}\">
          </div>
        </div>
      {% endif %}

      {% if row_formats is not empty %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              {% for row_format in row_formats %}
                <option value=\"{{ row_format }}\"{{ row_format == row_format_current|upper ? ' selected' }}>{{ row_format }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
      {% endif %}
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"{{ url('/table/operations') }}\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">{% trans 'Copy table to (database.table)' %}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            {% if database_list is not empty %}
              <select class=\"form-select\" name=\"target_db\" aria-label=\"{% trans 'Database' %}\">
                {% for each_db in database_list %}
                  <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
                {% endfor %}
              </select>
            {% else %}
              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"{{ db }}\" aria-label=\"{% trans 'Database' %}\">
            {% endif %}
            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" aria-label=\"{% trans 'Table' %}\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            {% trans 'Structure only' %}
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            {% trans 'Structure and data' %}
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            {% trans 'Data only' %}
          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">{{ 'Add %s'|trans|format('DROP TABLE') }}</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">{% trans 'Add AUTO_INCREMENT value' %}</label>
        </div>

        {% if has_foreign_keys %}
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">{% trans 'Add constraints' %}</label>
          </div>
        {% endif %}

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"
            {%- if has_privileges %} checked{% else %} title=\"
          {%- trans 'You don\\'t have sufficient privileges to perform this operation; Please refer to the documentation for more details.' %}\" disabled{% endif %}>
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            {% trans 'Adjust privileges' %}
            {{ show_docu('faq', 'faq6-39') }}
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"{{ switch_to_new ? ' checked' }}>
          <label class=\"form-check-label\" for=\"checkbox_switch\">{% trans 'Switch to copied table' %}</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"{% trans 'Go' %}\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">{% trans 'Table maintenance' %}</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'BERKELEYDB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/analyze') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {% trans 'Analyze table' %}
        </a>
        {{ show_mysql_docu('ANALYZE_TABLE') }}
      </li>
    {% endif %}

    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/check') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {% trans 'Check table' %}
        </a>
        {{ show_mysql_docu('CHECK_TABLE') }}
      </li>
    {% endif %}

    <li class=\"list-group-item\">
      <a href=\"{{ url('/table/maintenance/checksum') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
        {% trans 'Checksum table' %}
      </a>
      {{ show_mysql_docu('CHECKSUM_TABLE') }}
    </li>

    {% if storage_engine == 'INNODB' %}
      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(url_params|merge({'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ENGINE = InnoDB;'}), '', false) }}\">
          {% trans 'Defragment table' %}
        </a>
        {{ show_mysql_docu('InnoDB_File_Defragmenting') }}
      </li>
    {% endif %}

    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(url_params|merge({
        'sql_query': 'FLUSH TABLE ' ~ backquote(table),
        'message_to_show': 'Table %s has been flushed.'|trans|format(table|e),
        'reload': true
      }), '', false) }}\">
        {% trans 'Flush the table (FLUSH)' %}
      </a>
      {{ show_mysql_docu('FLUSH') }}
    </li>

    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'BERKELEYDB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/optimize') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {% trans 'Optimize table' %}
        </a>
        {{ show_mysql_docu('OPTIMIZE_TABLE') }}
      </li>
    {% endif %}

    {% if storage_engine in ['MYISAM', 'ARIA'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/repair') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {% trans 'Repair table' %}
        </a>
        {{ show_mysql_docu('REPAIR_TABLE') }}
      </li>
    {% endif %}
  </ul>
</div>

{% if not is_system_schema %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{% trans 'Delete data or table' %}</div>
    <ul class=\"list-group list-group-flush\">
      {% if not is_view %}
        <li class=\"list-group-item\">
          {{ link_or_button(
            url('/sql'),
            url_params|merge({
              'sql_query': 'TRUNCATE TABLE ' ~ backquote(db) ~ '.' ~ backquote(table),
              'goto': url('/table/structure'),
              'reload': true,
              'message_to_show': 'Table %s has been emptied.'|trans|format(table)|e
            }),
            'Empty the table (TRUNCATE)'|trans,
            {
              'id': 'truncate_tbl_anchor',
              'class': 'text-danger ajax',
              'data-query': 'TRUNCATE TABLE ' ~ backquote(db) ~ '.' ~ backquote(table)
            }
          ) }}
          {{ show_mysql_docu('TRUNCATE_TABLE') }}
        </li>
        <li class=\"list-group-item\">
          {{ link_or_button(
            url('/sql'),
            url_params|merge({
              'sql_query': 'DELETE FROM ' ~ backquote(db) ~ '.' ~ backquote(table),
              'goto': url('/table/structure'),
              'reload': true,
              'message_to_show': 'Table %s has been emptied.'|trans|format(table)|e
            }),
            'Empty the table (DELETE FROM)'|trans,
            {
              'id': 'delete_tbl_anchor',
              'class': 'text-danger ajax',
              'data-query': 'DELETE FROM ' ~ backquote(db) ~ '.' ~ backquote(table)
            }
          ) }}
          {{ show_mysql_docu('DELETE') }}
        </li>
      {% endif %}
      <li class=\"list-group-item\">
        {{ link_or_button(
          url('/sql'),
          url_params|merge({
            'sql_query': 'DROP TABLE ' ~ backquote(db) ~ '.' ~ backquote(table),
            'goto': url('/database/operations'),
            'reload': true,
            'purge': true,
            'message_to_show': is_view ? 'View %s has been dropped.'|trans|format(table)|e : 'Table %s has been dropped.'|trans|format(table)|e,
            'table': table
          }),
          'Delete the table (DROP)'|trans,
          {
            'id': 'drop_tbl_anchor',
            'class': 'text-danger ajax',
            'data-query': 'DROP TABLE ' ~ backquote(db) ~ '.' ~ backquote(table)
          }
        ) }}
        {{ show_mysql_docu('DROP_TABLE') }}
      </li>
    </ul>
  </div>
{% endif %}

{% if partitions is not empty %}
  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"{{ url('/table/operations') }}\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        {% trans 'Partition maintenance' %}
        {{ show_mysql_docu('partitioning_maintenance') }}
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">{% trans 'Partition' %}</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            {% for partition in partitions %}
              <option value=\"{{ partition }}\"{{ loop.first ? ' selected' }}>{{ partition }}</option>
            {% endfor %}
          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          {% for value, description in partitions_choices %}
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio{{ value|capitalize }}\" value=\"{{ value }}\"{{ value == 'ANALYZE' ? ' checked' }}>
              <label class=\"form-check-label\" for=\"partitionOperationRadio{{ value|capitalize }}\">{{ description }}</label>
            </div>
          {% endfor %}
        </div>

        <div class=\"form-text\">
          <a href=\"{{ url('/sql', url_params|merge({
            'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' REMOVE PARTITIONING;'
          })) }}\">{% trans 'Remove partitioning' %}</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
      </div>
    </div>
  </form>
{% endif %}

{% if foreigners is not empty %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{% trans 'Check referential integrity' %}</div>
    <ul class=\"list-group list-group-flush\">
      {% for foreign in foreigners %}
        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"{{ url('/sql', foreign.params) }}\">
            {{ foreign.master }} -> {{ foreign.db }}.{{ foreign.table }}.{{ foreign.field }}
          </a>
        </li>
      {% endfor %}
    </ul>
  </div>
{% endif %}

</div>
", "table/operations/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/operations/index.twig");
    }
}
