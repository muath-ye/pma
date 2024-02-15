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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_f39f5d520d6aad01f3801f237c6c660f extends Template
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
        echo "<form method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()));
        echo "\" class=\"";
        // line 2
        echo ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()) == "/table/create")) ? ("create_table_form") : ("append_fields_form"));
        echo " ajax lock-page\">
    ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 3, $this->source); })()));
        echo "
    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 8
        (( !twig_test_empty((isset($context["primary_indexes"]) || array_key_exists("primary_indexes", $context) ? $context["primary_indexes"] : (function () { throw new RuntimeError('Variable "primary_indexes" does not exist.', 8, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["primary_indexes"]) || array_key_exists("primary_indexes", $context) ? $context["primary_indexes"] : (function () { throw new RuntimeError('Variable "primary_indexes" does not exist.', 8, $this->source); })()), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 10
        (( !twig_test_empty((isset($context["unique_indexes"]) || array_key_exists("unique_indexes", $context) ? $context["unique_indexes"] : (function () { throw new RuntimeError('Variable "unique_indexes" does not exist.', 10, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["unique_indexes"]) || array_key_exists("unique_indexes", $context) ? $context["unique_indexes"] : (function () { throw new RuntimeError('Variable "unique_indexes" does not exist.', 10, $this->source); })()), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 12
        (( !twig_test_empty((isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 12, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["indexes"]) || array_key_exists("indexes", $context) ? $context["indexes"] : (function () { throw new RuntimeError('Variable "indexes" does not exist.', 12, $this->source); })()), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 14
        (( !twig_test_empty((isset($context["fulltext_indexes"]) || array_key_exists("fulltext_indexes", $context) ? $context["fulltext_indexes"] : (function () { throw new RuntimeError('Variable "fulltext_indexes" does not exist.', 14, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["fulltext_indexes"]) || array_key_exists("fulltext_indexes", $context) ? $context["fulltext_indexes"] : (function () { throw new RuntimeError('Variable "fulltext_indexes" does not exist.', 14, $this->source); })()), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 16
        (( !twig_test_empty((isset($context["spatial_indexes"]) || array_key_exists("spatial_indexes", $context) ? $context["spatial_indexes"] : (function () { throw new RuntimeError('Variable "spatial_indexes" does not exist.', 16, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["spatial_indexes"]) || array_key_exists("spatial_indexes", $context) ? $context["spatial_indexes"] : (function () { throw new RuntimeError('Variable "spatial_indexes" does not exist.', 16, $this->source); })()), "html", null, true))) : (print ("[]")));
        echo "\">

    ";
        // line 18
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()) == "/table/create")) {
            // line 19
            echo "        <div id=\"table_name_col_no_outer\">
            <table id=\"table_name_col_no\" class=\"table table-borderless tdblock\">
                <tr class=\"align-middle float-start\">
                    <td>";
            // line 22
echo _gettext("Table name");
            echo ":
                    <input type=\"text\"
                        name=\"table\"
                        size=\"40\"
                        maxlength=\"64\"
                        value=\"";
            // line 27
            ((array_key_exists("table", $context)) ? (print (twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 27, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\"
                        class=\"textfield\" autofocus required>
                    </td>
                    <td>
                        ";
            // line 31
echo _gettext("Add");
            // line 32
            echo "                        <input type=\"number\"
                            id=\"added_fields\"
                            name=\"added_fields\"
                            size=\"2\"
                            value=\"1\"
                            min=\"1\"
                            onfocus=\"this.select()\">
                        ";
            // line 39
echo _gettext("column(s)");
            // line 40
            echo "                        <input class=\"btn btn-secondary\" type=\"button\"
                            name=\"submit_num_fields\"
                            value=\"";
            // line 42
echo _gettext("Go");
            echo "\">
                    </td>
                </tr>
            </table>
        </div>
    ";
        }
        // line 48
        echo "    ";
        if (is_iterable((isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "        ";
            $this->loadTemplate("columns_definitions/table_fields_definitions.twig", "columns_definitions/column_definitions_form.twig", 49)->display(twig_to_array(["is_backup" =>             // line 50
(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 50, $this->source); })()), "fields_meta" =>             // line 51
(isset($context["fields_meta"]) || array_key_exists("fields_meta", $context) ? $context["fields_meta"] : (function () { throw new RuntimeError('Variable "fields_meta" does not exist.', 51, $this->source); })()), "relation_parameters" =>             // line 52
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 52, $this->source); })()), "content_cells" =>             // line 53
(isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 53, $this->source); })()), "change_column" =>             // line 54
(isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 54, $this->source); })()), "is_virtual_columns_supported" =>             // line 55
(isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 55, $this->source); })()), "server_version" =>             // line 56
(isset($context["server_version"]) || array_key_exists("server_version", $context) ? $context["server_version"] : (function () { throw new RuntimeError('Variable "server_version" does not exist.', 56, $this->source); })()), "browse_mime" =>             // line 57
(isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 57, $this->source); })()), "supports_stored_keyword" =>             // line 58
(isset($context["supports_stored_keyword"]) || array_key_exists("supports_stored_keyword", $context) ? $context["supports_stored_keyword"] : (function () { throw new RuntimeError('Variable "supports_stored_keyword" does not exist.', 58, $this->source); })()), "max_rows" =>             // line 59
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 59, $this->source); })()), "char_editing" =>             // line 60
(isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 60, $this->source); })()), "attribute_types" =>             // line 61
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 61, $this->source); })()), "privs_available" =>             // line 62
(isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 62, $this->source); })()), "max_length" =>             // line 63
(isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 63, $this->source); })()), "charsets" =>             // line 64
(isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 64, $this->source); })())]));
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 67, $this->source); })()) == "/table/create")) {
            // line 68
            echo "        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>";
            // line 71
echo _gettext("Table comments:");
            echo "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
            // line 73
echo _gettext("Collation:");
            echo "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
            // line 76
echo _gettext("Storage Engine:");
            // line 77
            echo "                    ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("Storage_engines");
            echo "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    ";
            // line 81
echo _gettext("Connection:");
            // line 82
            echo "                    ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("federated-create-connection");
            echo "
                </th>
            </tr>
            <tr>
                <td>
                    <input type=\"text\"
                        name=\"comment\"
                        size=\"40\"
                        maxlength=\"60\"
                        value=\"";
            // line 91
            ((array_key_exists("comment", $context)) ? (print (twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 91, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\"
                        class=\"textfield\">
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 99
                echo "                      <optgroup label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 99), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 99), "html", null, true);
                echo "\">
                        ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 100));
                foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                    // line 101
                    echo "                          <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 101), "html", null, true);
                    echo "\"";
                    // line 102
                    echo (((twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 102) == (isset($context["tbl_collation"]) || array_key_exists("tbl_collation", $context) ? $context["tbl_collation"] : (function () { throw new RuntimeError('Variable "tbl_collation" does not exist.', 102, $this->source); })()))) ? (" selected") : (""));
                    echo ">";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 103), "html", null, true);
                    // line 104
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                      </optgroup>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"";
            // line 112
echo _gettext("Storage engine");
            echo "\">
                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                // line 114
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 114), "html", null, true);
                echo "\"";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 114))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 114), "html", null, true);
                    echo "\"";
                }
                // line 115
                echo ((((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 115)) == twig_lower_filter($this->env, (isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 115, $this->source); })()))) || (twig_test_empty((isset($context["tbl_storage_engine"]) || array_key_exists("tbl_storage_engine", $context) ? $context["tbl_storage_engine"] : (function () { throw new RuntimeError('Variable "tbl_storage_engine" does not exist.', 115, $this->source); })())) && twig_get_attribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 115)))) ? (" selected") : (""));
                echo ">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 116), "html", null, true);
                // line 117
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 126
            ((array_key_exists("connection", $context)) ? (print (twig_escape_filter($this->env, (isset($context["connection"]) || array_key_exists("connection", $context) ? $context["connection"] : (function () { throw new RuntimeError('Variable "connection" does not exist.', 126, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required=\"required\">
                </td>
            </tr>
            ";
            // line 132
            if ((isset($context["have_partitioning"]) || array_key_exists("have_partitioning", $context) ? $context["have_partitioning"] : (function () { throw new RuntimeError('Variable "have_partitioning" does not exist.', 132, $this->source); })())) {
                // line 133
                echo "                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        ";
                // line 135
echo _gettext("PARTITION definition:");
                // line 136
                echo "                        ";
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("Partitioning");
                echo "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 141
                $this->loadTemplate("columns_definitions/partitions.twig", "columns_definitions/column_definitions_form.twig", 141)->display(twig_to_array(["partition_details" =>                 // line 142
(isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 142, $this->source); })()), "storage_engines" =>                 // line 143
(isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 143, $this->source); })())]));
                // line 145
                echo "                    </td>
                </tr>
            ";
            }
            // line 148
            echo "        </table>
        </div>
    ";
        }
        // line 151
        echo "    <div class=\"card mt-3\">
      <div class=\"card-body\">
        ";
        // line 153
        if ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 153, $this->source); })()) == "/table/add-field") || ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 153, $this->source); })()) == "/table/structure/save"))) {
            // line 154
            echo "            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />";
echo _pgettext("Online transaction part of the SQL DDL for InnoDB", "Online transaction");
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("innodb-online-ddl");
            echo "
        ";
        }
        // line 156
        echo "        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"";
        // line 157
echo _gettext("Preview SQL");
        echo "\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"";
        // line 160
echo _gettext("Save");
        echo "\">
      </div>
    </div>
    <div id=\"properties_message\"></div>
     ";
        // line 164
        if ((isset($context["is_integers_length_restricted"]) || array_key_exists("is_integers_length_restricted", $context) ? $context["is_integers_length_restricted"] : (function () { throw new RuntimeError('Variable "is_integers_length_restricted" does not exist.', 164, $this->source); })())) {
            // line 165
            echo "        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            ";
            // line 166
            echo $this->env->getFunction('get_image')->getCallable()("s_notice");
            echo "
            ";
            // line 167
echo _gettext("The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column");
            // line 168
            echo "            ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("", false, "https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html");
            echo "
        </div>
     ";
        }
        // line 171
        echo "</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
        // line 176
echo _gettext("Loading");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 177
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
        // line 182
echo _gettext("Close");
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 189
        echo twig_include($this->env, $context, "modals/enum_set_editor.twig");
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_definitions_form.twig";
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
        return array (  401 => 189,  392 => 182,  384 => 177,  380 => 176,  373 => 171,  366 => 168,  364 => 167,  360 => 166,  357 => 165,  355 => 164,  348 => 160,  342 => 157,  339 => 156,  332 => 154,  330 => 153,  326 => 151,  321 => 148,  316 => 145,  314 => 143,  313 => 142,  312 => 141,  303 => 136,  301 => 135,  297 => 133,  295 => 132,  286 => 126,  277 => 119,  270 => 117,  268 => 116,  265 => 115,  256 => 114,  252 => 113,  248 => 112,  242 => 108,  235 => 106,  228 => 104,  226 => 103,  223 => 102,  217 => 101,  213 => 100,  206 => 99,  202 => 98,  192 => 91,  179 => 82,  177 => 81,  169 => 77,  167 => 76,  161 => 73,  156 => 71,  151 => 68,  148 => 67,  145 => 66,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  139 => 60,  138 => 59,  137 => 58,  136 => 57,  135 => 56,  134 => 55,  133 => 54,  132 => 53,  131 => 52,  130 => 51,  129 => 50,  127 => 49,  124 => 48,  115 => 42,  111 => 40,  109 => 39,  100 => 32,  98 => 31,  91 => 27,  83 => 22,  78 => 19,  76 => 18,  71 => 16,  67 => 14,  63 => 12,  59 => 10,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ url(action) }}\" class=\"
    {{- action == '/table/create' ? 'create_table_form' : 'append_fields_form' }} ajax lock-page\">
    {{ get_hidden_inputs(form_params) }}
    {# happens when an index has been set on a column #}
    {# and a column is added to the table creation dialog #}
    {# This contains a JSON-encoded string #}
    <input type=\"hidden\" name=\"primary_indexes\" value=\"
        {{- primary_indexes is not empty ? primary_indexes : '[]' }}\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"
        {{- unique_indexes is not empty ? unique_indexes : '[]' }}\">
    <input type=\"hidden\" name=\"indexes\" value=\"
        {{- indexes is not empty ? indexes : '[]' }}\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"
        {{- fulltext_indexes is not empty ? fulltext_indexes : '[]' }}\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"
        {{- spatial_indexes is not empty ? spatial_indexes : '[]' }}\">

    {% if action == '/table/create' %}
        <div id=\"table_name_col_no_outer\">
            <table id=\"table_name_col_no\" class=\"table table-borderless tdblock\">
                <tr class=\"align-middle float-start\">
                    <td>{% trans 'Table name' %}:
                    <input type=\"text\"
                        name=\"table\"
                        size=\"40\"
                        maxlength=\"64\"
                        value=\"{{ table is defined ? table }}\"
                        class=\"textfield\" autofocus required>
                    </td>
                    <td>
                        {% trans 'Add' %}
                        <input type=\"number\"
                            id=\"added_fields\"
                            name=\"added_fields\"
                            size=\"2\"
                            value=\"1\"
                            min=\"1\"
                            onfocus=\"this.select()\">
                        {% trans 'column(s)' %}
                        <input class=\"btn btn-secondary\" type=\"button\"
                            name=\"submit_num_fields\"
                            value=\"{% trans 'Go' %}\">
                    </td>
                </tr>
            </table>
        </div>
    {% endif %}
    {% if content_cells is iterable %}
        {% include 'columns_definitions/table_fields_definitions.twig' with {
            'is_backup': is_backup,
            'fields_meta': fields_meta,
            'relation_parameters': relation_parameters,
            'content_cells': content_cells,
            'change_column': change_column,
            'is_virtual_columns_supported': is_virtual_columns_supported,
            'server_version': server_version,
            'browse_mime': browse_mime,
            'supports_stored_keyword': supports_stored_keyword,
            'max_rows': max_rows,
            'char_editing': char_editing,
            'attribute_types': attribute_types,
            'privs_available': privs_available,
            'max_length': max_length,
            'charsets': charsets
        } only %}
    {% endif %}
    {% if action == '/table/create' %}
        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>{% trans 'Table comments:' %}</th>
                <td width=\"25\">&nbsp;</td>
                <th>{% trans 'Collation:' %}</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    {% trans 'Storage Engine:' %}
                    {{ show_mysql_docu('Storage_engines') }}
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    {% trans 'Connection:' %}
                    {{ show_mysql_docu('federated-create-connection') }}
                </th>
            </tr>
            <tr>
                <td>
                    <input type=\"text\"
                        name=\"comment\"
                        size=\"40\"
                        maxlength=\"60\"
                        value=\"{{ comment is defined ? comment }}\"
                        class=\"textfield\">
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    {% for charset in charsets %}
                      <optgroup label=\"{{ charset.name }}\" title=\"{{ charset.description }}\">
                        {% for collation in charset.collations %}
                          <option value=\"{{ collation.name }}\" title=\"{{ collation.description }}\"
                            {{- collation.name == tbl_collation ? ' selected' }}>
                            {{- collation.name -}}
                          </option>
                        {% endfor %}
                      </optgroup>
                    {% endfor %}
                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"{% trans 'Storage engine' %}\">
                    {% for engine in storage_engines %}
                      <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                        {{- engine.name|lower == tbl_storage_engine|lower or (tbl_storage_engine is empty and engine.is_default) ? ' selected' }}>
                        {{- engine.name -}}
                      </option>
                    {% endfor %}
                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"{{ connection is defined ? connection }}\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required=\"required\">
                </td>
            </tr>
            {% if have_partitioning %}
                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        {% trans 'PARTITION definition:' %}
                        {{ show_mysql_docu('Partitioning') }}
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        {% include 'columns_definitions/partitions.twig' with {
                          'partition_details': partition_details,
                          'storage_engines': storage_engines
                        } only %}
                    </td>
                </tr>
            {% endif %}
        </table>
        </div>
    {% endif %}
    <div class=\"card mt-3\">
      <div class=\"card-body\">
        {% if action == '/table/add-field' or action == '/table/structure/save' %}
            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />{% trans %}Online transaction{% context %}Online transaction part of the SQL DDL for InnoDB{% endtrans %}{{ show_mysql_docu('innodb-online-ddl') }}
        {% endif %}
        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"{% trans 'Preview SQL' %}\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"{% trans 'Save' %}\">
      </div>
    </div>
    <div id=\"properties_message\"></div>
     {% if is_integers_length_restricted %}
        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            {{ get_image('s_notice') }}
            {% trans %}The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column{% endtrans %}
            {{ show_mysql_docu('', false, 'https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html') }}
        </div>
     {% endif %}
</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">{% trans 'Loading' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>

{# Used by add new column of type ENUM/SET #}
{{ include('modals/enum_set_editor.twig') }}
", "columns_definitions/column_definitions_form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_definitions_form.twig");
    }
}
