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

/* sql/query.twig */
class __TwigTemplate_73d45d93c6aea6006b56ad88ea80648b extends Template
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
        echo $this->env->getFunction('url')->getCallable()("/import");
        echo "\" class=\"ajax lock-page\" id=\"sqlqueryform\" name=\"sqlform\"";
        // line 2
        echo (((isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 2, $this->source); })())) ? (" enctype=\"multipart/form-data\"") : (""));
        echo ">
  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"is_js_confirmed\" value=\"0\">
  <input type=\"hidden\" name=\"pos\" value=\"0\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"message_to_show\" value=\"";
        // line 7
echo _gettext("Your SQL query has been executed successfully.");
        echo "\">
  <input type=\"hidden\" name=\"prev_sql_query\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\">

  ";
        // line 10
        if ((((isset($context["display_tab"]) || array_key_exists("display_tab", $context) ? $context["display_tab"] : (function () { throw new RuntimeError('Variable "display_tab" does not exist.', 10, $this->source); })()) == "full") || ((isset($context["display_tab"]) || array_key_exists("display_tab", $context) ? $context["display_tab"] : (function () { throw new RuntimeError('Variable "display_tab" does not exist.', 10, $this->source); })()) == "sql"))) {
            // line 11
            echo "    <a id=\"querybox\"></a>

    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 14
            echo (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 14, $this->source); })());
            echo "</div>
      <div class=\"card-body\">
        <div id=\"queryfieldscontainer\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"mb-3\">
                <textarea class=\"form-control\" tabindex=\"100\" name=\"sql_query\" id=\"sqlquery\" cols=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["textarea_cols"]) || array_key_exists("textarea_cols", $context) ? $context["textarea_cols"] : (function () { throw new RuntimeError('Variable "textarea_cols" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" data-textarea-auto-select=\"";
            echo (((isset($context["textarea_auto_select"]) || array_key_exists("textarea_auto_select", $context) ? $context["textarea_auto_select"] : (function () { throw new RuntimeError('Variable "textarea_auto_select" does not exist.', 20, $this->source); })())) ? ("true") : ("false"));
            echo "\" aria-label=\"";
echo _gettext("SQL query");
            echo "\">";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()), "html", null, true);
            // line 22
            echo "</textarea>
              </div>
              <div id=\"querymessage\"></div>

              <div class=\"btn-toolbar\" role=\"toolbar\">
                ";
            // line 27
            if ( !twig_test_empty((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 27, $this->source); })()))) {
                // line 28
                echo "                  <div class=\"btn-group me-2\" role=\"group\">
                    <input type=\"button\" value=\"SELECT *\" id=\"selectall\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"SELECT\" id=\"select\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"INSERT\" id=\"insert\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"UPDATE\" id=\"update\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"DELETE\" id=\"delete\" class=\"btn btn-secondary button sqlbutton\">
                  </div>
                ";
            }
            // line 36
            echo "
                <div class=\"btn-group me-2\" role=\"group\">
                  <input type=\"button\" value=\"";
            // line 38
echo _gettext("Clear");
            echo "\" id=\"clear\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            // line 39
            if ((isset($context["codemirror_enable"]) || array_key_exists("codemirror_enable", $context) ? $context["codemirror_enable"] : (function () { throw new RuntimeError('Variable "codemirror_enable" does not exist.', 39, $this->source); })())) {
                // line 40
                echo "                    <input type=\"button\" value=\"";
echo _gettext("Format");
                echo "\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            }
            // line 42
            echo "                </div>

                <input type=\"button\" value=\"";
            // line 44
echo _gettext("Get auto-saved query");
            echo "\" id=\"saved\" class=\"btn btn-secondary button sqlbutton\">
              </div>

              <div class=\"my-3\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"parameterized\" id=\"parameterized\">
                  <label class=\"form-check-label\" for=\"parameterized\">
                    ";
            // line 51
// l10n: Bind parameters in the SQL query using :parameterName format
echo _gettext("Bind parameters");
            // line 52
            echo "                    ";
            echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-40");
            echo "
                  </label>
                </div>
              </div>
              <div class=\"mb-3\" id=\"parametersDiv\"></div>
            </div>

            ";
            // line 59
            if ( !twig_test_empty((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 59, $this->source); })()))) {
                // line 60
                echo "              <div class=\"col-xl-2 col-lg-3\">
                <div class=\"mb-3\">
                  <label class=\"visually-hidden\" for=\"fieldsSelect\">";
                // line 62
echo _gettext("Columns");
                echo "</label>
                  <select class=\"form-select resize-vertical\" id=\"fieldsSelect\" name=\"dummy\" size=\"";
                // line 63
                echo twig_escape_filter($this->env, (isset($context["textarea_rows"]) || array_key_exists("textarea_rows", $context) ? $context["textarea_rows"] : (function () { throw new RuntimeError('Variable "textarea_rows" does not exist.', 63, $this->source); })()), "html", null, true);
                echo "\" multiple>
                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns_list"]) || array_key_exists("columns_list", $context) ? $context["columns_list"] : (function () { throw new RuntimeError('Variable "columns_list" does not exist.', 64, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 65
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 65)), "html", null, true);
                    echo "\"";
                    // line 66
                    (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 66)) > 0)) ? (print (twig_escape_filter($this->env, ((" title=\"" . twig_get_attribute($this->env, $this->source, $context["field"], "comment", [], "any", false, false, false, 66)) . "\""), "html", null, true))) : (print ("")));
                    echo ">
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 67), "html", null, true);
                    echo "
                      </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                  </select>
                </div>

                <input type=\"button\" class=\"btn btn-secondary button\" id=\"insertBtn\" name=\"insert\" value=\"";
                // line 74
                if ($this->env->getFunction('show_icons')->getCallable()("ActionLinksMode")) {
                    echo "<<";
                    echo "\" title=\"";
                }
                // line 75
echo _gettext("Insert");
                echo "\">
              </div>
            ";
            }
            // line 78
            echo "          </div>
        </div>

        ";
            // line 81
            if ((isset($context["has_bookmark"]) || array_key_exists("has_bookmark", $context) ? $context["has_bookmark"] : (function () { throw new RuntimeError('Variable "has_bookmark" does not exist.', 81, $this->source); })())) {
                // line 82
                echo "          <div class=\"row row-cols-lg-auto g-3 align-items-center\">
            <div class=\"col-6\">
              <label class=\"form-label\" for=\"bkm_label\">";
                // line 84
echo _gettext("Bookmark this SQL query:");
                echo "</label>
            </div>
            <div class=\"col-6\">
              <input class=\"form-control\" type=\"text\" name=\"bkm_label\" id=\"bkm_label\" tabindex=\"110\" value=\"\">
            </div>

            ";
                // line 90
                if ((isset($context["allow_shared_bookmarks"]) || array_key_exists("allow_shared_bookmarks", $context) ? $context["allow_shared_bookmarks"] : (function () { throw new RuntimeError('Variable "allow_shared_bookmarks" does not exist.', 90, $this->source); })())) {
                    // line 91
                    echo "              <div class=\"col-12\">
                <div class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_all_users\" tabindex=\"111\" id=\"id_bkm_all_users\" value=\"true\">
                  <label class=\"form-check-label\" for=\"id_bkm_all_users\">";
                    // line 94
echo _gettext("Let every user access this bookmark");
                    echo "</label>
                </div>
              </div>
            ";
                }
                // line 98
                echo "
            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_replace\" tabindex=\"112\" id=\"id_bkm_replace\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_replace\">";
                // line 102
echo _gettext("Replace existing bookmark of same name");
                echo "</label>
              </div>
            </div>
          </div>
        ";
            }
            // line 107
            echo "      </div>
      <div class=\"card-footer\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <div class=\"input-group me-2\">
              <span class=\"input-group-text\">";
            // line 112
echo _gettext("Delimiter");
            echo "</span>
              <label class=\"visually-hidden\" for=\"id_sql_delimiter\">";
            // line 113
echo _gettext("Delimiter");
            echo "</label>
              <input class=\"form-control\" type=\"text\" name=\"sql_delimiter\" tabindex=\"131\" size=\"3\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["delimiter"]) || array_key_exists("delimiter", $context) ? $context["delimiter"] : (function () { throw new RuntimeError('Variable "delimiter" does not exist.', 114, $this->source); })()), "html", null, true);
            echo "\" id=\"id_sql_delimiter\">
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"show_query\" value=\"1\" id=\"checkbox_show_query\" tabindex=\"132\">
              <label class=\"form-check-label\" for=\"checkbox_show_query\">";
            // line 121
echo _gettext("Show this query here again");
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"retain_query_box\" value=\"1\" id=\"retain_query_box\" tabindex=\"133\"";
            // line 128
            echo (((isset($context["retain_query_box"]) || array_key_exists("retain_query_box", $context) ? $context["retain_query_box"] : (function () { throw new RuntimeError('Variable "retain_query_box" does not exist.', 128, $this->source); })())) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"retain_query_box\">";
            // line 129
echo _gettext("Retain query box");
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"rollback_query\" value=\"1\" id=\"rollback_query\" tabindex=\"134\">
              <label class=\"form-check-label\" for=\"rollback_query\">";
            // line 136
echo _gettext("Rollback when finished");
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check\">
              <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
            // line 143
            echo (((isset($context["is_foreign_key_check"]) || array_key_exists("is_foreign_key_check", $context) ? $context["is_foreign_key_check"] : (function () { throw new RuntimeError('Variable "is_foreign_key_check" does not exist.', 143, $this->source); })())) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"fk_checks\">";
            // line 144
echo _gettext("Enable foreign key checks");
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <input class=\"btn btn-primary ms-1\" type=\"submit\" id=\"button_submit_query\" name=\"SQL\" tabindex=\"200\" value=\"";
            // line 149
echo _gettext("Go");
            echo "\">
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 155
        echo "
  ";
        // line 156
        if ((((isset($context["display_tab"]) || array_key_exists("display_tab", $context) ? $context["display_tab"] : (function () { throw new RuntimeError('Variable "display_tab" does not exist.', 156, $this->source); })()) == "full") &&  !twig_test_empty((isset($context["bookmarks"]) || array_key_exists("bookmarks", $context) ? $context["bookmarks"] : (function () { throw new RuntimeError('Variable "bookmarks" does not exist.', 156, $this->source); })())))) {
            // line 157
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 158
echo _gettext("Bookmarked SQL query");
            echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label class=\"form-label\" for=\"id_bookmark\">";
            // line 162
echo _gettext("Bookmark:");
            echo "</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"id_bookmark\" id=\"id_bookmark\">
              <option value=\"\">&nbsp;</option>
              ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) || array_key_exists("bookmarks", $context) ? $context["bookmarks"] : (function () { throw new RuntimeError('Variable "bookmarks" does not exist.', 167, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 168
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "id", [], "any", false, false, false, 168), "html", null, true);
                echo "\" data-varcount=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "variable_count", [], "any", false, false, false, 168), "html", null, true);
                echo "\">
                  ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "label", [], "any", false, false, false, 169), "html", null, true);
                echo "
                  ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, $context["bookmark"], "is_shared", [], "any", false, false, false, 170)) {
                    // line 171
                    echo "                    (";
echo _gettext("shared");
                    echo ")
                  ";
                }
                // line 173
                echo "                </option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "            </select>
          </div>

          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"0\" id=\"radio_bookmark_exe\" checked>
            <label class=\"form-check-label\" for=\"radio_bookmark_exe\">";
            // line 180
echo _gettext("Submit");
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"1\" id=\"radio_bookmark_view\">
            <label class=\"form-check-label\" for=\"radio_bookmark_view\">";
            // line 184
echo _gettext("View only");
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"2\" id=\"radio_bookmark_del\">
            <label class=\"form-check-label\" for=\"radio_bookmark_del\">";
            // line 188
echo _gettext("Delete");
            echo "</label>
          </div>
        </div>

        <div class=\"hide\">
          ";
            // line 193
echo _gettext("Variables");
            // line 194
            echo "          ";
            echo $this->env->getFunction('show_docu')->getCallable()("faq", "faqbookmark");
            echo "
          <div class=\"row row-cols-auto\" id=\"bookmarkVariables\"></div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-secondary\" type=\"submit\" name=\"SQL\" id=\"button_submit_bookmark\" value=\"";
            // line 200
echo _gettext("Go");
            echo "\">
      </div>
    </div>
  ";
        }
        // line 204
        echo "
  ";
        // line 205
        if ((isset($context["can_convert_kanji"]) || array_key_exists("can_convert_kanji", $context) ? $context["can_convert_kanji"] : (function () { throw new RuntimeError('Variable "can_convert_kanji" does not exist.', 205, $this->source); })())) {
            // line 206
            echo "    <div class=\"card mb-3\">
      <div class=\"card-body\">
        ";
            // line 208
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "sql/query.twig", 208)->display($context);
            // line 209
            echo "      </div>
    </div>
  ";
        }
        // line 212
        echo "</form>

<div id=\"sqlqueryresultsouter\"></div>

<div class=\"modal fade\" id=\"simulateDmlModal\" tabindex=\"-1\" aria-labelledby=\"simulateDmlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"simulateDmlModalLabel\">";
        // line 220
echo _gettext("Simulate query");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 221
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 226
echo _gettext("Close");
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/query.twig";
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
        return array (  471 => 226,  463 => 221,  459 => 220,  449 => 212,  444 => 209,  442 => 208,  438 => 206,  436 => 205,  433 => 204,  426 => 200,  416 => 194,  414 => 193,  406 => 188,  399 => 184,  392 => 180,  385 => 175,  378 => 173,  372 => 171,  370 => 170,  366 => 169,  359 => 168,  355 => 167,  347 => 162,  340 => 158,  337 => 157,  335 => 156,  332 => 155,  323 => 149,  315 => 144,  311 => 143,  301 => 136,  291 => 129,  287 => 128,  278 => 121,  268 => 114,  264 => 113,  260 => 112,  253 => 107,  245 => 102,  239 => 98,  232 => 94,  227 => 91,  225 => 90,  216 => 84,  212 => 82,  210 => 81,  205 => 78,  199 => 75,  194 => 74,  189 => 70,  180 => 67,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 60,  154 => 59,  143 => 52,  140 => 51,  130 => 44,  126 => 42,  120 => 40,  118 => 39,  114 => 38,  110 => 36,  100 => 28,  98 => 27,  91 => 22,  89 => 21,  80 => 20,  71 => 14,  66 => 11,  64 => 10,  59 => 8,  55 => 7,  51 => 6,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ url('/import') }}\" class=\"ajax lock-page\" id=\"sqlqueryform\" name=\"sqlform\"
  {{- is_upload ? ' enctype=\"multipart/form-data\"' }}>
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"is_js_confirmed\" value=\"0\">
  <input type=\"hidden\" name=\"pos\" value=\"0\">
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"message_to_show\" value=\"{% trans 'Your SQL query has been executed successfully.' %}\">
  <input type=\"hidden\" name=\"prev_sql_query\" value=\"{{ query }}\">

  {% if display_tab == 'full' or display_tab == 'sql' %}
    <a id=\"querybox\"></a>

    <div class=\"card mb-3\">
      <div class=\"card-header\">{{ legend|raw }}</div>
      <div class=\"card-body\">
        <div id=\"queryfieldscontainer\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"mb-3\">
                <textarea class=\"form-control\" tabindex=\"100\" name=\"sql_query\" id=\"sqlquery\" cols=\"{{ textarea_cols }}\" rows=\"{{ textarea_rows }}\" data-textarea-auto-select=\"{{ textarea_auto_select ? \"true\" : \"false\" }}\" aria-label=\"{% trans 'SQL query' %}\">
                  {{- query -}}
                </textarea>
              </div>
              <div id=\"querymessage\"></div>

              <div class=\"btn-toolbar\" role=\"toolbar\">
                {% if columns_list is not empty %}
                  <div class=\"btn-group me-2\" role=\"group\">
                    <input type=\"button\" value=\"SELECT *\" id=\"selectall\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"SELECT\" id=\"select\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"INSERT\" id=\"insert\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"UPDATE\" id=\"update\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"DELETE\" id=\"delete\" class=\"btn btn-secondary button sqlbutton\">
                  </div>
                {% endif %}

                <div class=\"btn-group me-2\" role=\"group\">
                  <input type=\"button\" value=\"{% trans 'Clear' %}\" id=\"clear\" class=\"btn btn-secondary button sqlbutton\">
                  {% if codemirror_enable %}
                    <input type=\"button\" value=\"{% trans 'Format' %}\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                  {% endif %}
                </div>

                <input type=\"button\" value=\"{% trans 'Get auto-saved query' %}\" id=\"saved\" class=\"btn btn-secondary button sqlbutton\">
              </div>

              <div class=\"my-3\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"parameterized\" id=\"parameterized\">
                  <label class=\"form-check-label\" for=\"parameterized\">
                    {% trans %}Bind parameters{% notes %}Bind parameters in the SQL query using :parameterName format{% endtrans %}
                    {{ show_docu('faq', 'faq6-40') }}
                  </label>
                </div>
              </div>
              <div class=\"mb-3\" id=\"parametersDiv\"></div>
            </div>

            {% if columns_list is not empty %}
              <div class=\"col-xl-2 col-lg-3\">
                <div class=\"mb-3\">
                  <label class=\"visually-hidden\" for=\"fieldsSelect\">{% trans 'Columns' %}</label>
                  <select class=\"form-select resize-vertical\" id=\"fieldsSelect\" name=\"dummy\" size=\"{{ textarea_rows }}\" multiple>
                    {% for field in columns_list %}
                      <option value=\"{{ backquote(field.field) }}\"
                        {{- field.field|length > 0 ? ' title=\"' ~ field.comment ~ '\"' }}>
                        {{ field.field }}
                      </option>
                    {% endfor %}
                  </select>
                </div>

                <input type=\"button\" class=\"btn btn-secondary button\" id=\"insertBtn\" name=\"insert\" value=\"
                    {%- if show_icons('ActionLinksMode') %}{{ '<<' }}\" title=\"{% endif -%}
                    {%- trans 'Insert' %}\">
              </div>
            {% endif %}
          </div>
        </div>

        {% if has_bookmark %}
          <div class=\"row row-cols-lg-auto g-3 align-items-center\">
            <div class=\"col-6\">
              <label class=\"form-label\" for=\"bkm_label\">{% trans 'Bookmark this SQL query:' %}</label>
            </div>
            <div class=\"col-6\">
              <input class=\"form-control\" type=\"text\" name=\"bkm_label\" id=\"bkm_label\" tabindex=\"110\" value=\"\">
            </div>

            {% if allow_shared_bookmarks %}
              <div class=\"col-12\">
                <div class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_all_users\" tabindex=\"111\" id=\"id_bkm_all_users\" value=\"true\">
                  <label class=\"form-check-label\" for=\"id_bkm_all_users\">{% trans 'Let every user access this bookmark' %}</label>
                </div>
              </div>
            {% endif %}

            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_replace\" tabindex=\"112\" id=\"id_bkm_replace\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_replace\">{% trans 'Replace existing bookmark of same name' %}</label>
              </div>
            </div>
          </div>
        {% endif %}
      </div>
      <div class=\"card-footer\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <div class=\"input-group me-2\">
              <span class=\"input-group-text\">{% trans 'Delimiter' %}</span>
              <label class=\"visually-hidden\" for=\"id_sql_delimiter\">{% trans 'Delimiter' %}</label>
              <input class=\"form-control\" type=\"text\" name=\"sql_delimiter\" tabindex=\"131\" size=\"3\" value=\"{{ delimiter }}\" id=\"id_sql_delimiter\">
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"show_query\" value=\"1\" id=\"checkbox_show_query\" tabindex=\"132\">
              <label class=\"form-check-label\" for=\"checkbox_show_query\">{% trans 'Show this query here again' %}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"retain_query_box\" value=\"1\" id=\"retain_query_box\" tabindex=\"133\"
                {{- retain_query_box ? ' checked' }}>
              <label class=\"form-check-label\" for=\"retain_query_box\">{% trans 'Retain query box' %}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"rollback_query\" value=\"1\" id=\"rollback_query\" tabindex=\"134\">
              <label class=\"form-check-label\" for=\"rollback_query\">{% trans 'Rollback when finished' %}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check\">
              <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"{{ is_foreign_key_check ? ' checked' }}>
              <label class=\"form-check-label\" for=\"fk_checks\">{% trans 'Enable foreign key checks' %}</label>
            </div>
          </div>

          <div class=\"col-12\">
            <input class=\"btn btn-primary ms-1\" type=\"submit\" id=\"button_submit_query\" name=\"SQL\" tabindex=\"200\" value=\"{% trans 'Go' %}\">
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if display_tab == 'full' and bookmarks is not empty %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">{% trans 'Bookmarked SQL query' %}</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label class=\"form-label\" for=\"id_bookmark\">{% trans 'Bookmark:' %}</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"id_bookmark\" id=\"id_bookmark\">
              <option value=\"\">&nbsp;</option>
              {% for bookmark in bookmarks %}
                <option value=\"{{ bookmark.id }}\" data-varcount=\"{{ bookmark.variable_count }}\">
                  {{ bookmark.label }}
                  {% if bookmark.is_shared %}
                    ({% trans 'shared' %})
                  {% endif %}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"0\" id=\"radio_bookmark_exe\" checked>
            <label class=\"form-check-label\" for=\"radio_bookmark_exe\">{% trans 'Submit' %}</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"1\" id=\"radio_bookmark_view\">
            <label class=\"form-check-label\" for=\"radio_bookmark_view\">{% trans 'View only' %}</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"2\" id=\"radio_bookmark_del\">
            <label class=\"form-check-label\" for=\"radio_bookmark_del\">{% trans 'Delete' %}</label>
          </div>
        </div>

        <div class=\"hide\">
          {% trans 'Variables' %}
          {{ show_docu('faq', 'faqbookmark') }}
          <div class=\"row row-cols-auto\" id=\"bookmarkVariables\"></div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-secondary\" type=\"submit\" name=\"SQL\" id=\"button_submit_bookmark\" value=\"{% trans 'Go' %}\">
      </div>
    </div>
  {% endif %}

  {% if can_convert_kanji %}
    <div class=\"card mb-3\">
      <div class=\"card-body\">
        {% include 'encoding/kanji_encoding_form.twig' %}
      </div>
    </div>
  {% endif %}
</form>

<div id=\"sqlqueryresultsouter\"></div>

<div class=\"modal fade\" id=\"simulateDmlModal\" tabindex=\"-1\" aria-labelledby=\"simulateDmlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"simulateDmlModalLabel\">{% trans 'Simulate query' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>
", "sql/query.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/query.twig");
    }
}
