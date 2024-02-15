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

/* export.twig */
class __TwigTemplate_818d743e7d883081c2e04920e8490875 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'message' => [$this, 'block_message'],
            'selection_options' => [$this, 'block_selection_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        echo $this->env->getFunction('get_image')->getCallable()("b_export", _gettext("Export"));
        echo "
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "  </h2>

  ";
        // line 7
        echo (isset($context["page_settings_error_html"]) || array_key_exists("page_settings_error_html", $context) ? $context["page_settings_error_html"] : (function () { throw new RuntimeError('Variable "page_settings_error_html" does not exist.', 7, $this->source); })());
        echo "
  ";
        // line 8
        echo (isset($context["page_settings_html"]) || array_key_exists("page_settings_html", $context) ? $context["page_settings_html"] : (function () { throw new RuntimeError('Variable "page_settings_html" does not exist.', 8, $this->source); })());
        echo "

  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('PhpMyAdmin\FlashMessages')->getMessages());
        foreach ($context['_seq'] as $context["flash_key"] => $context["flash_messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["flash_key"], "html", null, true);
                echo "\" role=\"alert\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flash_key'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('message', $context, $blocks);
        // line 19
        echo "
  ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 20, $this->source); })()), "is_enabled", [], "any", false, false, false, 20)) {
            // line 21
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 22
echo _gettext("Export templates:");
            echo "</div>
      <div class=\"card-body row gy-3\">
        <form method=\"post\" action=\"";
            // line 24
            echo $this->env->getFunction('url')->getCallable()("/export/template/create");
            echo "\" class=\"col-12 col-md ajax\">
          <fieldset>
            <legend>";
            // line 26
echo _gettext("New template:");
            echo "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"templateName\" class=\"col-form-label\">";
            // line 29
echo _gettext("Template name");
            echo "</label>
              </div>
              <div class=\"col-auto\">
                <input class=\"form-control\" type=\"text\" name=\"templateName\" id=\"templateName\" maxlength=\"64\" placeholder=\"";
            // line 32
echo _gettext("Template name");
            echo "\" required>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"createTemplate\" id=\"createTemplate\" value=\"";
            // line 35
echo _gettext("Create");
            echo "\">
              </div>
            </div>
          </fieldset>
        </form>

        <form method=\"post\" id=\"existingTemplatesForm\" class=\"col-12 col-md ajax\">
          <fieldset>
            <legend>";
            // line 43
echo _gettext("Existing templates:");
            echo "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"template\" class=\"col-form-label\">";
            // line 46
echo _gettext("Template:");
            echo "</label>
              </div>
              <div class=\"col-auto\">
                <select class=\"form-select\" name=\"template\" id=\"template\" required>
                  <option value=\"\">-- ";
            // line 50
echo _gettext("Select a template");
            echo " --</option>
                  ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 51, $this->source); })()), "templates", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 52
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 52), "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 52) == twig_get_attribute($this->env, $this->source, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 52, $this->source); })()), "selected", [], "any", false, false, false, 52))) ? (" selected") : (""));
                echo ">
                      ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "getName", [], "method", false, false, false, 53), "html", null, true);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </select>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 59
            echo $this->env->getFunction('url')->getCallable()("/export/template/update");
            echo "\" name=\"updateTemplate\" id=\"updateTemplate\" value=\"";
echo _gettext("Update");
            echo "\">
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 62
            echo $this->env->getFunction('url')->getCallable()("/export/template/delete");
            echo "\" name=\"deleteTemplate\" id=\"deleteTemplate\" value=\"";
echo _gettext("Delete");
            echo "\">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if ( !twig_test_empty((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 71, $this->source); })()))) {
            // line 72
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        ";
            // line 75
            echo "        ";
echo _gettext("SQL query:");
            // line 76
            echo "      </div>
      <div class=\"card-body\">
        <div id=\"sqlqueryform\">
          ";
            // line 80
            echo "          <input class=\"btn btn-secondary\" type=\"submit\" id=\"showsqlquery\" value=\"";
echo _gettext("Show SQL query");
            echo "\">
        </div>
        <div class=\"d-none\"></div>
      </div>
    </div>
    <div class=\"modal fade\" id=\"showSqlQueryModal\" tabindex=\"-1\" aria-labelledby=\"showSqlQueryModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"showSqlQueryModalLabel\">";
            // line 89
echo _gettext("Loading");
            echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 90
echo _gettext("Close");
            echo "\"></button>
          </div>
          <div class=\"modal-body\">
            <div id=\"export_sql_modal_content\">
              <code class=\"sql\">
                <pre id=\"sql_preview_query\">";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "</pre>
              </code>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 100
echo _gettext("Close");
            echo "</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 106
        echo "
  <form method=\"post\" action=\"";
        // line 107
        echo $this->env->getFunction('url')->getCallable()("/export");
        echo "\" name=\"dump\" class=\"disableAjax\">
    ";
        // line 108
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 108, $this->source); })()));
        echo "

    ";
        // line 110
        if (((isset($context["export_method"]) || array_key_exists("export_method", $context) ? $context["export_method"] : (function () { throw new RuntimeError('Variable "export_method" does not exist.', 110, $this->source); })()) != "custom-no-form")) {
            // line 111
            echo "      <div class=\"card mb-3\" id=\"quick_or_custom\">
        <div class=\"card-header\">";
            // line 112
echo _gettext("Export method:");
            echo "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"";
            // line 115
            echo ((((isset($context["export_method"]) || array_key_exists("export_method", $context) ? $context["export_method"] : (function () { throw new RuntimeError('Variable "export_method" does not exist.', 115, $this->source); })()) == "quick")) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_quick_export\">";
            // line 116
echo _gettext("Quick - display only the minimal options");
            echo "</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"";
            // line 119
            echo ((((isset($context["export_method"]) || array_key_exists("export_method", $context) ? $context["export_method"] : (function () { throw new RuntimeError('Variable "export_method" does not exist.', 119, $this->source); })()) == "custom")) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_custom_export\">";
            // line 120
echo _gettext("Custom - display all possible options");
            echo "</label>
          </div>
        </div>
      </div>
    ";
        }
        // line 125
        echo "
    <div class=\"card mb-3\" id=\"format\">
      <div class=\"card-header\">";
        // line 127
echo _gettext("Format:");
        echo "</div>
      <div class=\"card-body\">
        <select class=\"form-select\" id=\"plugins\" name=\"what\" aria-label=\"";
        // line 129
echo _gettext("File format to export");
        echo "\">
          ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins_choice"]) || array_key_exists("plugins_choice", $context) ? $context["plugins_choice"] : (function () { throw new RuntimeError('Variable "plugins_choice" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 131
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 131), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 131)) ? (" selected") : (""));
            echo " data-is-binary=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_binary", [], "any", false, false, false, 131)) ? ("true") : ("false"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 131), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "        </select>
      </div>
    </div>

    ";
        // line 137
        $this->displayBlock('selection_options', $context, $blocks);
        // line 138
        echo "
    ";
        // line 139
        if ( !twig_test_empty((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 139, $this->source); })()))) {
            // line 140
            echo "      <div class=\"card mb-3 d-none\" id=\"rows\">
        <div class=\"card-header\">";
            // line 141
echo _gettext("Rows:");
            echo "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"";
            // line 144
            echo ((((null === twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 144, $this->source); })()), "allrows", [], "any", false, false, false, 144)) || (twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 144, $this->source); })()), "allrows", [], "any", false, false, false, 144) == 1))) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_allrows_1\">";
            // line 145
echo _gettext("Dump all rows");
            echo "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"";
            // line 148
            echo ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 148, $this->source); })()), "allrows", [], "any", false, false, false, 148)) && (twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 148, $this->source); })()), "allrows", [], "any", false, false, false, 148) == 0))) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_allrows_0\">";
            // line 149
echo _gettext("Dump some row(s)");
            echo "</label>
          </div>
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_to\">";
            // line 153
echo _gettext("Number of rows:");
            echo "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"";
            // line 155
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 155, $this->source); })()), "limit_to", [], "any", false, false, false, 155))) {
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 156, $this->source); })()), "limit_to", [], "any", false, false, false, 156), "html", null, true);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 157
(isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 157, $this->source); })()), "unlim_num_rows", [], "any", false, false, false, 157)) && (twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 157, $this->source); })()), "unlim_num_rows", [], "any", false, false, false, 157) != 0))) {
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 158, $this->source); })()), "unlim_num_rows", [], "any", false, false, false, 158), "html", null, true);
            } else {
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 160, $this->source); })()), "number_of_rows", [], "any", false, false, false, 160), "html", null, true);
            }
            // line 161
            echo "\" onfocus=\"this.select()\">
            </li>
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_from\">";
            // line 164
echo _gettext("Row to begin at:");
            echo "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"";
            // line 165
            (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 165, $this->source); })()), "limit_from", [], "any", false, false, false, 165))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 165, $this->source); })()), "limit_from", [], "any", false, false, false, 165), "html", null, true))) : (print (0)));
            echo "\" onfocus=\"this.select()\">
            </li>
          </ul>
        </div>
      </div>
    ";
        }
        // line 171
        echo "
    ";
        // line 172
        if ((isset($context["has_save_dir"]) || array_key_exists("has_save_dir", $context) ? $context["has_save_dir"] : (function () { throw new RuntimeError('Variable "has_save_dir" does not exist.', 172, $this->source); })())) {
            // line 173
            echo "      <div class=\"card mb-3 d-none\" id=\"output_quick_export\">
        <div class=\"card-header\">";
            // line 174
echo _gettext("Output:");
            echo "</div>
        <div class=\"card-body\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver\" value=\"saveit\" id=\"checkbox_quick_dump_onserver\"";
            // line 177
            echo (((isset($context["export_is_checked"]) || array_key_exists("export_is_checked", $context) ? $context["export_is_checked"] : (function () { throw new RuntimeError('Variable "export_is_checked" does not exist.', 177, $this->source); })())) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver\">
              ";
            // line 179
            echo twig_sprintf(_gettext("Save on server in the directory <strong>%s</strong>"), twig_escape_filter($this->env, (isset($context["save_dir"]) || array_key_exists("save_dir", $context) ? $context["save_dir"] : (function () { throw new RuntimeError('Variable "save_dir" does not exist.', 179, $this->source); })())));
            echo "
            </label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver_overwrite\" value=\"saveitover\" id=\"checkbox_quick_dump_onserver_overwrite\"";
            // line 184
            echo (((isset($context["export_overwrite_is_checked"]) || array_key_exists("export_overwrite_is_checked", $context) ? $context["export_overwrite_is_checked"] : (function () { throw new RuntimeError('Variable "export_overwrite_is_checked" does not exist.', 184, $this->source); })())) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver_overwrite\">
              ";
            // line 186
echo _gettext("Overwrite existing file(s)");
            // line 187
            echo "            </label>
          </div>
        </div>
      </div>
    ";
        }
        // line 192
        echo "
    <div class=\"modal fade\" id=\"renameExportModal\" tabindex=\"-1\" aria-labelledby=\"renameExportModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"renameExportModalLabel\">";
        // line 197
echo _gettext("Rename exported databases/tables/columns");
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 198
echo _gettext("Close");
        echo "\"></button>
          </div>
          <div class=\"modal-body overflow-auto\">
            <table class=\"table align-middle mb-3\" id=\"alias_data\">
              <thead>
                <tr>
                  <th colspan=\"4\">
                    ";
        // line 205
echo _gettext("Defined aliases");
        // line 206
        echo "                  </th>
                </tr>
              </thead>

              <tbody>
                ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliases"]) || array_key_exists("aliases", $context) ? $context["aliases"] : (function () { throw new RuntimeError('Variable "aliases" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["db"] => $context["db_data"]) {
            // line 212
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["db_data"], "alias", [], "any", true, true, false, 212) &&  !(null === twig_get_attribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 212)))) {
                // line 213
                echo "                    <tr>
                      <th>";
                // line 214
echo _pgettext("Alias", "Database");
                echo "</th>
                      <td>";
                // line 215
                echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                echo "</td>
                      <td>
                        <input name=\"aliases[";
                // line 217
                echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                echo "][alias]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 217), "html", null, true);
                echo "\" type=\"text\">
                      </td>
                      <td>
                        <button class=\"alias_remove btn btn-secondary\">";
                // line 220
echo _gettext("Remove");
                echo "</button>
                      </td>
                    </tr>
                  ";
            }
            // line 224
            echo "
                  ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, $context["db_data"], "tables", [], "any", true, true, false, 225) &&  !(null === twig_get_attribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 225)))) ? (twig_get_attribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 225)) : ([])));
            foreach ($context['_seq'] as $context["table"] => $context["table_data"]) {
                // line 226
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["table_data"], "alias", [], "any", true, true, false, 226) &&  !(null === twig_get_attribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 226)))) {
                    // line 227
                    echo "                      <tr>
                        <th>";
                    // line 228
echo _pgettext("Alias", "Table");
                    echo "</th>
                        <td>";
                    // line 229
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 231
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo "][tables][";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "][alias]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 231), "html", null, true);
                    echo "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
                    // line 234
echo _gettext("Remove");
                    echo "</button>
                        </td>
                      </tr>
                    ";
                }
                // line 238
                echo "
                    ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, $context["table_data"], "columns", [], "any", true, true, false, 239) &&  !(null === twig_get_attribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 239)))) ? (twig_get_attribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 239)) : ([])));
                foreach ($context['_seq'] as $context["column"] => $context["column_name"]) {
                    // line 240
                    echo "                      <tr>
                        <th>";
                    // line 241
echo _pgettext("Alias", "Column");
                    echo "</th>
                        <td>";
                    // line 242
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                    echo "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 244
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo "][tables][";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "][colums][";
                    echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["column_name"], "html", null, true);
                    echo "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
                    // line 247
echo _gettext("Remove");
                    echo "</button>
                        </td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['column_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['table'], $context['table_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['db'], $context['db_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "              </tbody>

              ";
        // line 256
        echo "              <tfoot class=\"hide\">
                <tr>
                  <th></th>
                  <td></td>
                  <td>
                    <input name=\"aliases_new\" value=\"\" type=\"text\">
                  </td>
                  <td>
                    <button class=\"alias_remove btn btn-secondary\">";
        // line 264
echo _gettext("Remove");
        echo "</button>
                  </td>
                </tr>
              </tfoot>
            </table>

            <table class=\"table align-middle\">
              <thead>
                <tr>
                  <th colspan=\"4\">";
        // line 273
echo _gettext("Define new aliases");
        echo "</th>
                </tr>
              </thead>
              <tr>
                <td>
                  <label>";
        // line 278
echo _gettext("Select database:");
        echo "</label>
                </td>
                <td>
                  <select id=\"db_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"db_alias_name\" placeholder=\"";
        // line 286
echo _gettext("New database name");
        echo "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"db_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 289
echo _gettext("Add");
        echo "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
        // line 294
echo _gettext("Select table:");
        echo "</label>
                </td>
                <td>
                  <select id=\"table_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"table_alias_name\" placeholder=\"";
        // line 302
echo _gettext("New table name");
        echo "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"table_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 305
echo _gettext("Add");
        echo "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
        // line 310
echo _gettext("Select column:");
        echo "</label>
                </td>
                <td>
                  <select id=\"column_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"column_alias_name\" placeholder=\"";
        // line 318
echo _gettext("New column name");
        echo "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"column_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
        // line 321
echo _gettext("Add");
        echo "</button>
                </td>
              </tr>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"saveAndCloseBtn\" data-bs-dismiss=\"modal\">
              ";
        // line 328
echo _gettext("Save & close");
        // line 329
        echo "            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"card mb-3 d-none\" id=\"output\">
      <div class=\"card-header\">";
        // line 336
echo _gettext("Output:");
        echo "</div>
      <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"btn_alias_config\"";
        // line 340
        echo (((isset($context["has_aliases"]) || array_key_exists("has_aliases", $context) ? $context["has_aliases"] : (function () { throw new RuntimeError('Variable "has_aliases" does not exist.', 340, $this->source); })())) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"btn_alias_config\">";
        // line 341
echo _gettext("Rename exported databases/tables/columns");
        echo "</label>
          </div>
        </li>

        ";
        // line 345
        if (((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 345, $this->source); })()) != "server")) {
            // line 346
            echo "          <li class=\"list-group-item\">
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"lock_tables\" value=\"something\" id=\"checkbox_lock_tables\"";
            // line 349
            echo (((( !(isset($context["repopulate"]) || array_key_exists("repopulate", $context) ? $context["repopulate"] : (function () { throw new RuntimeError('Variable "repopulate" does not exist.', 349, $this->source); })()) && (isset($context["is_checked_lock_tables"]) || array_key_exists("is_checked_lock_tables", $context) ? $context["is_checked_lock_tables"] : (function () { throw new RuntimeError('Variable "is_checked_lock_tables" does not exist.', 349, $this->source); })())) || (isset($context["lock_tables"]) || array_key_exists("lock_tables", $context) ? $context["lock_tables"] : (function () { throw new RuntimeError('Variable "lock_tables" does not exist.', 349, $this->source); })()))) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"checkbox_lock_tables\">
                ";
            // line 351
            echo twig_sprintf(_gettext("Use %s statement"), "<code>LOCK TABLES</code>");
            echo "
              </label>
            </div>
          </li>
        ";
        }
        // line 356
        echo "
        <li class=\"list-group-item\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"radio_view_as_text\" name=\"output_format\" value=\"astext\"";
        // line 359
        echo ((((isset($context["repopulate"]) || array_key_exists("repopulate", $context) ? $context["repopulate"] : (function () { throw new RuntimeError('Variable "repopulate" does not exist.', 359, $this->source); })()) || ((isset($context["export_asfile"]) || array_key_exists("export_asfile", $context) ? $context["export_asfile"] : (function () { throw new RuntimeError('Variable "export_asfile" does not exist.', 359, $this->source); })()) == false))) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"radio_view_as_text\">";
        // line 360
echo _gettext("View output as text");
        echo "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"output_format\" value=\"sendit\" id=\"radio_dump_asfile\"";
        // line 363
        echo ((( !(isset($context["repopulate"]) || array_key_exists("repopulate", $context) ? $context["repopulate"] : (function () { throw new RuntimeError('Variable "repopulate" does not exist.', 363, $this->source); })()) && (isset($context["is_checked_asfile"]) || array_key_exists("is_checked_asfile", $context) ? $context["is_checked_asfile"] : (function () { throw new RuntimeError('Variable "is_checked_asfile" does not exist.', 363, $this->source); })()))) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"radio_dump_asfile\">";
        // line 364
echo _gettext("Save output to a file");
        echo "</label>
          </div>
          <div class=\"hstack gap-3\">
            <div class=\"vr\"></div>
            <ul class=\"list-group\" id=\"ul_save_asfile\">
              ";
        // line 369
        if ((isset($context["has_save_dir"]) || array_key_exists("has_save_dir", $context) ? $context["has_save_dir"] : (function () { throw new RuntimeError('Variable "has_save_dir" does not exist.', 369, $this->source); })())) {
            // line 370
            echo "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver\" value=\"saveit\" id=\"checkbox_dump_onserver\"";
            // line 372
            echo (((isset($context["is_checked_export"]) || array_key_exists("is_checked_export", $context) ? $context["is_checked_export"] : (function () { throw new RuntimeError('Variable "is_checked_export" does not exist.', 372, $this->source); })())) ? (" checked") : (""));
            echo ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver\">
                      ";
            // line 374
            echo twig_sprintf(_gettext("Save on server in the directory <strong>%s</strong>"), twig_escape_filter($this->env, (isset($context["save_dir"]) || array_key_exists("save_dir", $context) ? $context["save_dir"] : (function () { throw new RuntimeError('Variable "save_dir" does not exist.', 374, $this->source); })())));
            echo "
                    </label>
                  </div>
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver_overwrite\" value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"";
            // line 379
            echo (((isset($context["is_checked_export_overwrite"]) || array_key_exists("is_checked_export_overwrite", $context) ? $context["is_checked_export_overwrite"] : (function () { throw new RuntimeError('Variable "is_checked_export_overwrite" does not exist.', 379, $this->source); })())) ? (" checked") : (""));
            echo ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver_overwrite\">
                      ";
            // line 381
echo _gettext("Overwrite existing file(s)");
            // line 382
            echo "                    </label>
                  </div>
                </li>
              ";
        }
        // line 386
        echo "
              <li class=\"list-group-item\">
                <div class=\"row g-3 align-items-center\">
                  <div class=\"col-auto\">
                    <label for=\"filename_template\" class=\"col-form-label\">
                      ";
        // line 391
echo _gettext("File name template:");
        // line 392
        echo "                      ";
        echo $this->env->getFunction('show_hint')->getCallable()(twig_sprintf(_gettext("This value is interpreted using the 'strftime' function, so you can use time formatting strings. Additionally the following transformations will happen: %s Other text will be kept as is. See the FAQ 6.27 for details."), (isset($context["filename_hint"]) || array_key_exists("filename_hint", $context) ? $context["filename_hint"] : (function () { throw new RuntimeError('Variable "filename_hint" does not exist.', 392, $this->source); })())));
        echo "
                    </label>
                  </div>
                  <div class=\"col-auto\">
                    <input type=\"text\" class=\"form-control\" name=\"filename_template\" id=\"filename_template\" value=\"";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["filename_template"]) || array_key_exists("filename_template", $context) ? $context["filename_template"] : (function () { throw new RuntimeError('Variable "filename_template" does not exist.', 396, $this->source); })()), "html", null, true);
        echo "\">
                  </div>
                  <div class=\"col-auto\">
                    <div class=\"form-check form-switch\">
                      <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"remember_template\" id=\"checkbox_remember_template\"";
        // line 400
        echo (((isset($context["is_checked_remember_file_template"]) || array_key_exists("is_checked_remember_file_template", $context) ? $context["is_checked_remember_file_template"] : (function () { throw new RuntimeError('Variable "is_checked_remember_file_template" does not exist.', 400, $this->source); })())) ? (" checked") : (""));
        echo ">
                      <label class=\"form-check-label\" for=\"checkbox_remember_template\">
                        ";
        // line 402
echo _gettext("Use this for future exports");
        // line 403
        echo "                      </label>
                    </div>
                  </div>
                </div>
              </li>

              ";
        // line 409
        if ((isset($context["is_encoding_supported"]) || array_key_exists("is_encoding_supported", $context) ? $context["is_encoding_supported"] : (function () { throw new RuntimeError('Variable "is_encoding_supported" does not exist.', 409, $this->source); })())) {
            // line 410
            echo "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"select_charset\" class=\"col-form-label\">";
            // line 413
echo _gettext("Character set of the file:");
            echo "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"select_charset\" name=\"charset\">
                        ";
            // line 417
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["encodings"]) || array_key_exists("encodings", $context) ? $context["encodings"] : (function () { throw new RuntimeError('Variable "encodings" does not exist.', 417, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 418
                echo "                          <option value=\"";
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                echo "\"";
                // line 419
                echo ((((twig_test_empty((isset($context["export_charset"]) || array_key_exists("export_charset", $context) ? $context["export_charset"] : (function () { throw new RuntimeError('Variable "export_charset" does not exist.', 419, $this->source); })())) && ($context["charset"] == "utf-8")) || ($context["charset"] == (isset($context["export_charset"]) || array_key_exists("export_charset", $context) ? $context["export_charset"] : (function () { throw new RuntimeError('Variable "export_charset" does not exist.', 419, $this->source); })())))) ? (" selected") : (""));
                echo ">";
                // line 420
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                // line 421
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "                      </select>
                    </div>
                  </div>
                </li>
              ";
        }
        // line 428
        echo "
              ";
        // line 429
        if (((isset($context["has_zip"]) || array_key_exists("has_zip", $context) ? $context["has_zip"] : (function () { throw new RuntimeError('Variable "has_zip" does not exist.', 429, $this->source); })()) || (isset($context["has_gzip"]) || array_key_exists("has_gzip", $context) ? $context["has_gzip"] : (function () { throw new RuntimeError('Variable "has_gzip" does not exist.', 429, $this->source); })()))) {
            // line 430
            echo "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"compression\" class=\"col-form-label\">";
            // line 433
echo _gettext("Compression:");
            echo "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"compression\" name=\"compression\">
                        <option value=\"none\">";
            // line 437
echo _gettext("None");
            echo "</option>
                        ";
            // line 438
            if ((isset($context["has_zip"]) || array_key_exists("has_zip", $context) ? $context["has_zip"] : (function () { throw new RuntimeError('Variable "has_zip" does not exist.', 438, $this->source); })())) {
                // line 439
                echo "                          <option value=\"zip\"";
                // line 440
                echo ((((isset($context["selected_compression"]) || array_key_exists("selected_compression", $context) ? $context["selected_compression"] : (function () { throw new RuntimeError('Variable "selected_compression" does not exist.', 440, $this->source); })()) == "zip")) ? (" selected") : (""));
                echo ">
                            ";
                // line 441
echo _gettext("zipped");
                // line 442
                echo "                          </option>
                        ";
            }
            // line 444
            echo "                        ";
            if ((isset($context["has_gzip"]) || array_key_exists("has_gzip", $context) ? $context["has_gzip"] : (function () { throw new RuntimeError('Variable "has_gzip" does not exist.', 444, $this->source); })())) {
                // line 445
                echo "                          <option value=\"gzip\"";
                // line 446
                echo ((((isset($context["selected_compression"]) || array_key_exists("selected_compression", $context) ? $context["selected_compression"] : (function () { throw new RuntimeError('Variable "selected_compression" does not exist.', 446, $this->source); })()) == "gzip")) ? (" selected") : (""));
                echo ">
                            ";
                // line 447
echo _gettext("gzipped");
                // line 448
                echo "                          </option>
                        ";
            }
            // line 450
            echo "                      </select>
                    </div>
                  </div>
                </li>
              ";
        } else {
            // line 455
            echo "                <input type=\"hidden\" name=\"compression\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["selected_compression"]) || array_key_exists("selected_compression", $context) ? $context["selected_compression"] : (function () { throw new RuntimeError('Variable "selected_compression" does not exist.', 455, $this->source); })()), "html", null, true);
            echo "\">
              ";
        }
        // line 457
        echo "
              ";
        // line 458
        if ((((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 458, $this->source); })()) == "server") || ((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 458, $this->source); })()) == "database"))) {
            // line 459
            echo "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"checkbox_as_separate_files\" name=\"as_separate_files\" value=\"";
            // line 461
            echo twig_escape_filter($this->env, (isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 461, $this->source); })()), "html", null, true);
            echo "\"";
            // line 462
            echo (((isset($context["is_checked_as_separate_files"]) || array_key_exists("is_checked_as_separate_files", $context) ? $context["is_checked_as_separate_files"] : (function () { throw new RuntimeError('Variable "is_checked_as_separate_files" does not exist.', 462, $this->source); })())) ? (" checked") : (""));
            echo ">
                    <label class=\"form-check-label\" for=\"checkbox_as_separate_files\">
                      ";
            // line 464
            if (((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 464, $this->source); })()) == "server")) {
                // line 465
                echo "                        ";
echo _gettext("Export databases as separate files");
                // line 466
                echo "                      ";
            } elseif (((isset($context["export_type"]) || array_key_exists("export_type", $context) ? $context["export_type"] : (function () { throw new RuntimeError('Variable "export_type" does not exist.', 466, $this->source); })()) == "database")) {
                // line 467
                echo "                        ";
echo _gettext("Export tables as separate files");
                // line 468
                echo "                      ";
            }
            // line 469
            echo "                    </label>
                  </div>
                </li>
              ";
        }
        // line 473
        echo "            </ul>
          </div>
        </li>

        <li class=\"list-group-item\">
          <label for=\"maxsize\" class=\"form-label\">";
        // line 478
echo _gettext("Skip tables larger than:");
        echo "</label>
          <input class=\"form-control\" type=\"number\" id=\"maxsize\" name=\"maxsize\" aria-describedby=\"maxsizeHelp\">
          <div id=\"maxsizeHelp\" class=\"form-text\">";
        // line 480
echo _gettext("The size is measured in MiB.");
        echo "</div>
        </li>
      </ul>
    </div>

    <div class=\"card mb-3 d-none\" id=\"format_specific_opts\">
      <div class=\"card-header\">";
        // line 486
echo _gettext("Format-specific options:");
        echo "</div>
      <div class=\"card-body\">
        ";
        // line 488
        echo (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 488, $this->source); })());
        echo "
      </div>
    </div>

    ";
        // line 492
        if ((isset($context["can_convert_kanji"]) || array_key_exists("can_convert_kanji", $context) ? $context["can_convert_kanji"] : (function () { throw new RuntimeError('Variable "can_convert_kanji" does not exist.', 492, $this->source); })())) {
            // line 493
            echo "      ";
            // line 494
            echo "      <div class=\"card mb-3\" id=\"kanji_encoding\">
        <div class=\"card-header\">";
            // line 495
echo _gettext("Encoding Conversion:");
            echo "</div>
        <div class=\"card-body\">
          ";
            // line 497
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "export.twig", 497)->display($context);
            // line 498
            echo "        </div>
      </div>
    ";
        }
        // line 501
        echo "
    <div id=\"submit\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 503
echo _gettext("Export");
        echo "\" data-exec-time-limit=\"";
        echo twig_escape_filter($this->env, (isset($context["exec_time_limit"]) || array_key_exists("exec_time_limit", $context) ? $context["exec_time_limit"] : (function () { throw new RuntimeError('Variable "exec_time_limit" does not exist.', 503, $this->source); })()), "html", null, true);
        echo "\">
    </div>
  </form>
</div>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 137
    public function block_selection_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "export.twig";
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
        return array (  1098 => 137,  1092 => 18,  1086 => 4,  1075 => 503,  1071 => 501,  1066 => 498,  1064 => 497,  1059 => 495,  1056 => 494,  1054 => 493,  1052 => 492,  1045 => 488,  1040 => 486,  1031 => 480,  1026 => 478,  1019 => 473,  1013 => 469,  1010 => 468,  1007 => 467,  1004 => 466,  1001 => 465,  999 => 464,  994 => 462,  991 => 461,  987 => 459,  985 => 458,  982 => 457,  976 => 455,  969 => 450,  965 => 448,  963 => 447,  959 => 446,  957 => 445,  954 => 444,  950 => 442,  948 => 441,  944 => 440,  942 => 439,  940 => 438,  936 => 437,  929 => 433,  924 => 430,  922 => 429,  919 => 428,  912 => 423,  905 => 421,  903 => 420,  900 => 419,  896 => 418,  892 => 417,  885 => 413,  880 => 410,  878 => 409,  870 => 403,  868 => 402,  863 => 400,  856 => 396,  848 => 392,  846 => 391,  839 => 386,  833 => 382,  831 => 381,  826 => 379,  819 => 374,  814 => 372,  810 => 370,  808 => 369,  800 => 364,  796 => 363,  790 => 360,  786 => 359,  781 => 356,  773 => 351,  768 => 349,  764 => 346,  762 => 345,  755 => 341,  751 => 340,  744 => 336,  735 => 329,  733 => 328,  723 => 321,  717 => 318,  706 => 310,  698 => 305,  692 => 302,  681 => 294,  673 => 289,  667 => 286,  656 => 278,  648 => 273,  636 => 264,  626 => 256,  622 => 253,  616 => 252,  610 => 251,  600 => 247,  588 => 244,  579 => 242,  575 => 241,  572 => 240,  568 => 239,  565 => 238,  558 => 234,  548 => 231,  541 => 229,  537 => 228,  534 => 227,  531 => 226,  527 => 225,  524 => 224,  517 => 220,  509 => 217,  504 => 215,  500 => 214,  497 => 213,  494 => 212,  490 => 211,  483 => 206,  481 => 205,  471 => 198,  467 => 197,  460 => 192,  453 => 187,  451 => 186,  446 => 184,  439 => 179,  434 => 177,  428 => 174,  425 => 173,  423 => 172,  420 => 171,  411 => 165,  407 => 164,  402 => 161,  399 => 160,  396 => 158,  394 => 157,  392 => 156,  390 => 155,  386 => 153,  379 => 149,  375 => 148,  369 => 145,  365 => 144,  359 => 141,  356 => 140,  354 => 139,  351 => 138,  349 => 137,  343 => 133,  328 => 131,  324 => 130,  320 => 129,  315 => 127,  311 => 125,  303 => 120,  299 => 119,  293 => 116,  289 => 115,  283 => 112,  280 => 111,  278 => 110,  273 => 108,  269 => 107,  266 => 106,  257 => 100,  249 => 95,  241 => 90,  237 => 89,  224 => 80,  219 => 76,  216 => 75,  212 => 72,  210 => 71,  207 => 70,  194 => 62,  186 => 59,  181 => 56,  172 => 53,  165 => 52,  161 => 51,  157 => 50,  150 => 46,  144 => 43,  133 => 35,  127 => 32,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  102 => 21,  100 => 20,  97 => 19,  95 => 18,  92 => 17,  86 => 16,  77 => 13,  72 => 12,  67 => 11,  63 => 10,  58 => 8,  54 => 7,  50 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h2 class=\"my-3\">
    {{ get_image('b_export', 'Export'|trans) }}
    {% block title %}{% endblock %}
  </h2>

  {{ page_settings_error_html|raw }}
  {{ page_settings_html|raw }}

  {% for flash_key, flash_messages in flash() %}
    {% for flash_message in flash_messages %}
      <div class=\"alert alert-{{ flash_key }}\" role=\"alert\">
        {{ flash_message }}
      </div>
    {% endfor %}
  {% endfor %}

  {% block message %}{% endblock %}

  {% if templates.is_enabled %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">{% trans 'Export templates:' %}</div>
      <div class=\"card-body row gy-3\">
        <form method=\"post\" action=\"{{ url('/export/template/create') }}\" class=\"col-12 col-md ajax\">
          <fieldset>
            <legend>{% trans 'New template:' %}</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"templateName\" class=\"col-form-label\">{% trans 'Template name' %}</label>
              </div>
              <div class=\"col-auto\">
                <input class=\"form-control\" type=\"text\" name=\"templateName\" id=\"templateName\" maxlength=\"64\" placeholder=\"{% trans 'Template name' %}\" required>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"createTemplate\" id=\"createTemplate\" value=\"{% trans 'Create' %}\">
              </div>
            </div>
          </fieldset>
        </form>

        <form method=\"post\" id=\"existingTemplatesForm\" class=\"col-12 col-md ajax\">
          <fieldset>
            <legend>{% trans 'Existing templates:' %}</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"template\" class=\"col-form-label\">{% trans 'Template:' %}</label>
              </div>
              <div class=\"col-auto\">
                <select class=\"form-select\" name=\"template\" id=\"template\" required>
                  <option value=\"\">-- {% trans 'Select a template' %} --</option>
                  {% for template in templates.templates %}
                    <option value=\"{{ template.getId() }}\"{{ template.getId() == templates.selected ? ' selected' }}>
                      {{ template.getName() }}
                    </option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"{{ url('/export/template/update') }}\" name=\"updateTemplate\" id=\"updateTemplate\" value=\"{% trans 'Update' %}\">
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"{{ url('/export/template/delete') }}\" name=\"deleteTemplate\" id=\"deleteTemplate\" value=\"{% trans 'Delete' %}\">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  {% endif %}

  {% if sql_query is not empty %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        {# l10n: Title of the option on the Export page #}
        {% trans 'SQL query:' %}
      </div>
      <div class=\"card-body\">
        <div id=\"sqlqueryform\">
          {# l10n: Button to show the SQL query on the export page #}
          <input class=\"btn btn-secondary\" type=\"submit\" id=\"showsqlquery\" value=\"{% trans 'Show SQL query' %}\">
        </div>
        <div class=\"d-none\"></div>
      </div>
    </div>
    <div class=\"modal fade\" id=\"showSqlQueryModal\" tabindex=\"-1\" aria-labelledby=\"showSqlQueryModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"showSqlQueryModalLabel\">{% trans 'Loading' %}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
          </div>
          <div class=\"modal-body\">
            <div id=\"export_sql_modal_content\">
              <code class=\"sql\">
                <pre id=\"sql_preview_query\">{{ sql_query }}</pre>
              </code>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  <form method=\"post\" action=\"{{ url('/export') }}\" name=\"dump\" class=\"disableAjax\">
    {{ get_hidden_inputs(hidden_inputs) }}

    {% if export_method != 'custom-no-form' %}
      <div class=\"card mb-3\" id=\"quick_or_custom\">
        <div class=\"card-header\">{% trans 'Export method:' %}</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"{{ export_method == 'quick' ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_quick_export\">{% trans 'Quick - display only the minimal options' %}</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"{{ export_method == 'custom' ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_custom_export\">{% trans 'Custom - display all possible options' %}</label>
          </div>
        </div>
      </div>
    {% endif %}

    <div class=\"card mb-3\" id=\"format\">
      <div class=\"card-header\">{% trans 'Format:' %}</div>
      <div class=\"card-body\">
        <select class=\"form-select\" id=\"plugins\" name=\"what\" aria-label=\"{% trans 'File format to export' %}\">
          {% for option in plugins_choice %}
            <option value=\"{{ option.name }}\"{{ option.is_selected ? ' selected' }} data-is-binary=\"{{ option.is_binary ? 'true' : 'false' }}\">{{ option.text }}</option>
          {% endfor %}
        </select>
      </div>
    </div>

    {% block selection_options %}{% endblock %}

    {% if rows is not empty %}
      <div class=\"card mb-3 d-none\" id=\"rows\">
        <div class=\"card-header\">{% trans 'Rows:' %}</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"{{ rows.allrows is null or rows.allrows == 1 ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_allrows_1\">{% trans 'Dump all rows' %}</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"{{ rows.allrows is not null and rows.allrows == 0 ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_allrows_0\">{% trans 'Dump some row(s)' %}</label>
          </div>
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_to\">{% trans 'Number of rows:' %}</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"
                  {%- if rows.limit_to is not null -%}
                    {{- rows.limit_to -}}
                  {%- elseif rows.unlim_num_rows is not empty and rows.unlim_num_rows != 0 -%}
                    {{- rows.unlim_num_rows -}}
                  {%- else %}
                    {{- rows.number_of_rows -}}
                  {%- endif -%}\" onfocus=\"this.select()\">
            </li>
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_from\">{% trans 'Row to begin at:' %}</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"{{ rows.limit_from is not null ? rows.limit_from : 0 }}\" onfocus=\"this.select()\">
            </li>
          </ul>
        </div>
      </div>
    {% endif %}

    {% if has_save_dir %}
      <div class=\"card mb-3 d-none\" id=\"output_quick_export\">
        <div class=\"card-header\">{% trans 'Output:' %}</div>
        <div class=\"card-body\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver\" value=\"saveit\" id=\"checkbox_quick_dump_onserver\"{{ export_is_checked ? ' checked' }}>
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver\">
              {{ 'Save on server in the directory <strong>%s</strong>'|trans|format(save_dir|e)|raw }}
            </label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver_overwrite\" value=\"saveitover\" id=\"checkbox_quick_dump_onserver_overwrite\"
              {{- export_overwrite_is_checked ? ' checked' }}>
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver_overwrite\">
              {% trans 'Overwrite existing file(s)' %}
            </label>
          </div>
        </div>
      </div>
    {% endif %}

    <div class=\"modal fade\" id=\"renameExportModal\" tabindex=\"-1\" aria-labelledby=\"renameExportModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"renameExportModalLabel\">{% trans 'Rename exported databases/tables/columns' %}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
          </div>
          <div class=\"modal-body overflow-auto\">
            <table class=\"table align-middle mb-3\" id=\"alias_data\">
              <thead>
                <tr>
                  <th colspan=\"4\">
                    {% trans 'Defined aliases' %}
                  </th>
                </tr>
              </thead>

              <tbody>
                {% for db, db_data in aliases %}
                  {% if db_data.alias is defined and db_data.alias is not null %}
                    <tr>
                      <th>{% trans %}Database{% context %}Alias{% endtrans %}</th>
                      <td>{{ db }}</td>
                      <td>
                        <input name=\"aliases[{{ db }}][alias]\" value=\"{{ db_data.alias }}\" type=\"text\">
                      </td>
                      <td>
                        <button class=\"alias_remove btn btn-secondary\">{% trans 'Remove' %}</button>
                      </td>
                    </tr>
                  {% endif %}

                  {% for table, table_data in db_data.tables ?? [] %}
                    {% if table_data.alias is defined and table_data.alias is not null %}
                      <tr>
                        <th>{% trans %}Table{% context %}Alias{% endtrans %}</th>
                        <td>{{ db }}.{{ table }}</td>
                        <td>
                          <input name=\"aliases[{{ db }}][tables][{{ table }}][alias]\" value=\"{{ table_data.alias }}\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">{% trans 'Remove' %}</button>
                        </td>
                      </tr>
                    {% endif %}

                    {% for column, column_name in table_data.columns ?? [] %}
                      <tr>
                        <th>{% trans %}Column{% context %}Alias{% endtrans %}</th>
                        <td>{{ db }}.{{ table }}.{{ column }}</td>
                        <td>
                          <input name=\"aliases[{{ db }}][tables][{{ table }}][colums][{{ column }}]\" value=\"{{ column_name }}\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">{% trans 'Remove' %}</button>
                        </td>
                      </tr>
                    {% endfor %}
                  {% endfor %}
                {% endfor %}
              </tbody>

              {# Empty row for javascript manipulations. #}
              <tfoot class=\"hide\">
                <tr>
                  <th></th>
                  <td></td>
                  <td>
                    <input name=\"aliases_new\" value=\"\" type=\"text\">
                  </td>
                  <td>
                    <button class=\"alias_remove btn btn-secondary\">{% trans 'Remove' %}</button>
                  </td>
                </tr>
              </tfoot>
            </table>

            <table class=\"table align-middle\">
              <thead>
                <tr>
                  <th colspan=\"4\">{% trans 'Define new aliases' %}</th>
                </tr>
              </thead>
              <tr>
                <td>
                  <label>{% trans 'Select database:' %}</label>
                </td>
                <td>
                  <select id=\"db_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"db_alias_name\" placeholder=\"{% trans 'New database name' %}\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"db_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">{% trans 'Add' %}</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>{% trans 'Select table:' %}</label>
                </td>
                <td>
                  <select id=\"table_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"table_alias_name\" placeholder=\"{% trans 'New table name' %}\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"table_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">{% trans 'Add' %}</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>{% trans 'Select column:' %}</label>
                </td>
                <td>
                  <select id=\"column_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"column_alias_name\" placeholder=\"{% trans 'New column name' %}\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"column_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">{% trans 'Add' %}</button>
                </td>
              </tr>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"saveAndCloseBtn\" data-bs-dismiss=\"modal\">
              {% trans 'Save & close' %}
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"card mb-3 d-none\" id=\"output\">
      <div class=\"card-header\">{% trans 'Output:' %}</div>
      <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"btn_alias_config\"{{ has_aliases ? ' checked' }}>
            <label class=\"form-check-label\" for=\"btn_alias_config\">{% trans 'Rename exported databases/tables/columns' %}</label>
          </div>
        </li>

        {% if export_type != 'server' %}
          <li class=\"list-group-item\">
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"lock_tables\" value=\"something\" id=\"checkbox_lock_tables\"
                {{- (not repopulate and is_checked_lock_tables) or lock_tables ? ' checked' }}>
              <label class=\"form-check-label\" for=\"checkbox_lock_tables\">
                {{ 'Use %s statement'|trans|format('<code>LOCK TABLES</code>')|raw }}
              </label>
            </div>
          </li>
        {% endif %}

        <li class=\"list-group-item\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"radio_view_as_text\" name=\"output_format\" value=\"astext\"{{ repopulate or export_asfile == false ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_view_as_text\">{% trans 'View output as text' %}</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"output_format\" value=\"sendit\" id=\"radio_dump_asfile\"{{ not repopulate and is_checked_asfile ? ' checked' }}>
            <label class=\"form-check-label\" for=\"radio_dump_asfile\">{% trans 'Save output to a file' %}</label>
          </div>
          <div class=\"hstack gap-3\">
            <div class=\"vr\"></div>
            <ul class=\"list-group\" id=\"ul_save_asfile\">
              {% if has_save_dir %}
                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver\" value=\"saveit\" id=\"checkbox_dump_onserver\"{{ is_checked_export ? ' checked' }}>
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver\">
                      {{ 'Save on server in the directory <strong>%s</strong>'|trans|format(save_dir|e)|raw }}
                    </label>
                  </div>
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver_overwrite\" value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"
                      {{- is_checked_export_overwrite ? ' checked' }}>
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver_overwrite\">
                      {% trans 'Overwrite existing file(s)' %}
                    </label>
                  </div>
                </li>
              {% endif %}

              <li class=\"list-group-item\">
                <div class=\"row g-3 align-items-center\">
                  <div class=\"col-auto\">
                    <label for=\"filename_template\" class=\"col-form-label\">
                      {% trans 'File name template:' %}
                      {{ show_hint('This value is interpreted using the \\'strftime\\' function, so you can use time formatting strings. Additionally the following transformations will happen: %s Other text will be kept as is. See the FAQ 6.27 for details.'|trans|format(filename_hint)) }}
                    </label>
                  </div>
                  <div class=\"col-auto\">
                    <input type=\"text\" class=\"form-control\" name=\"filename_template\" id=\"filename_template\" value=\"{{ filename_template }}\">
                  </div>
                  <div class=\"col-auto\">
                    <div class=\"form-check form-switch\">
                      <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"remember_template\" id=\"checkbox_remember_template\"{{ is_checked_remember_file_template ? ' checked' }}>
                      <label class=\"form-check-label\" for=\"checkbox_remember_template\">
                        {% trans 'Use this for future exports' %}
                      </label>
                    </div>
                  </div>
                </div>
              </li>

              {% if is_encoding_supported %}
                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"select_charset\" class=\"col-form-label\">{% trans 'Character set of the file:' %}</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"select_charset\" name=\"charset\">
                        {% for charset in encodings %}
                          <option value=\"{{ charset }}\"
                            {{- (export_charset is empty and charset == 'utf-8') or charset == export_charset ? ' selected' }}>
                            {{- charset -}}
                          </option>
                        {% endfor %}
                      </select>
                    </div>
                  </div>
                </li>
              {% endif %}

              {% if has_zip or has_gzip %}
                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"compression\" class=\"col-form-label\">{% trans 'Compression:' %}</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"compression\" name=\"compression\">
                        <option value=\"none\">{% trans 'None' %}</option>
                        {% if has_zip %}
                          <option value=\"zip\"
                            {{- selected_compression == 'zip' ? ' selected' }}>
                            {% trans 'zipped' %}
                          </option>
                        {% endif %}
                        {% if has_gzip %}
                          <option value=\"gzip\"
                            {{- selected_compression == 'gzip' ? ' selected' }}>
                            {% trans 'gzipped' %}
                          </option>
                        {% endif %}
                      </select>
                    </div>
                  </div>
                </li>
              {% else %}
                <input type=\"hidden\" name=\"compression\" value=\"{{ selected_compression }}\">
              {% endif %}

              {% if export_type == 'server' or export_type == 'database' %}
                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"checkbox_as_separate_files\" name=\"as_separate_files\" value=\"{{ export_type }}\"
                      {{- is_checked_as_separate_files ? ' checked' }}>
                    <label class=\"form-check-label\" for=\"checkbox_as_separate_files\">
                      {% if export_type == 'server' %}
                        {% trans 'Export databases as separate files' %}
                      {% elseif export_type == 'database' %}
                        {% trans 'Export tables as separate files' %}
                      {% endif %}
                    </label>
                  </div>
                </li>
              {% endif %}
            </ul>
          </div>
        </li>

        <li class=\"list-group-item\">
          <label for=\"maxsize\" class=\"form-label\">{% trans 'Skip tables larger than:' %}</label>
          <input class=\"form-control\" type=\"number\" id=\"maxsize\" name=\"maxsize\" aria-describedby=\"maxsizeHelp\">
          <div id=\"maxsizeHelp\" class=\"form-text\">{% trans 'The size is measured in MiB.' %}</div>
        </li>
      </ul>
    </div>

    <div class=\"card mb-3 d-none\" id=\"format_specific_opts\">
      <div class=\"card-header\">{% trans 'Format-specific options:' %}</div>
      <div class=\"card-body\">
        {{ options|raw }}
      </div>
    </div>

    {% if can_convert_kanji %}
      {# Japanese encoding setting #}
      <div class=\"card mb-3\" id=\"kanji_encoding\">
        <div class=\"card-header\">{% trans 'Encoding Conversion:' %}</div>
        <div class=\"card-body\">
          {% include 'encoding/kanji_encoding_form.twig' %}
        </div>
      </div>
    {% endif %}

    <div id=\"submit\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Export' %}\" data-exec-time-limit=\"{{ exec_time_limit }}\">
    </div>
  </form>
</div>
", "export.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/export.twig");
    }
}
