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

/* server/privileges/privileges_table.twig */
class __TwigTemplate_6bda4945af71410bd73c59a9553c917c extends Template
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
        if ( !twig_test_empty((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "
  <input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })())), "html", null, true);
            echo "\">
  <input type=\"hidden\" name=\"column_count\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 4, $this->source); })())), "html", null, true);
            echo "\">
  <div class=\"card mb-3\" id=\"fieldset_user_priv\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 6
echo _gettext("Table");
            echo "\">
      ";
            // line 7
echo _gettext("Table-specific privileges");
            // line 8
            echo "    </div>
    <div class=\"card-body\">
    <p>
      <small><em>";
            // line 11
echo _gettext("Note: MySQL privilege names are expressed in English.");
            echo "</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"";
            // line 16
echo _gettext("Allows reading data.");
            echo "\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 21
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo ((((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 21, $this->source); })()), "Select_priv", [], "array", false, false, false, 21) == "Y") || twig_get_attribute($this->env, $this->source, $context["curr_col_privs"], "Select", [], "array", false, false, false, 21))) ? (" selected") : (""));
                echo ">
            ";
                // line 22
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          ";
            // line 29
echo _gettext("Select all");
            // line 30
            echo "        </button>
      </div>

      <em>";
            // line 33
echo _gettext("Or");
            echo "</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"";
            // line 36
echo _pgettext("None privileges", "None");
            echo "\">
        ";
            // line 37
echo _pgettext("None privileges", "None");
            // line 38
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"";
            // line 43
echo _gettext("Allows inserting and replacing data.");
            echo "\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 48
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo ((((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 48, $this->source); })()), "Insert_priv", [], "array", false, false, false, 48) == "Y") || twig_get_attribute($this->env, $this->source, $context["curr_col_privs"], "Insert", [], "array", false, false, false, 48))) ? (" selected") : (""));
                echo ">
            ";
                // line 49
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          ";
            // line 56
echo _gettext("Select all");
            // line 57
            echo "        </button>
      </div>

      <em>";
            // line 60
echo _gettext("Or");
            echo "</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"";
            // line 63
echo _pgettext("None privileges", "None");
            echo "\">
        ";
            // line 64
echo _pgettext("None privileges", "None");
            // line 65
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"";
            // line 70
echo _gettext("Allows changing data.");
            echo "\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 75
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo ((((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 75, $this->source); })()), "Update_priv", [], "array", false, false, false, 75) == "Y") || twig_get_attribute($this->env, $this->source, $context["curr_col_privs"], "Update", [], "array", false, false, false, 75))) ? (" selected") : (""));
                echo ">
            ";
                // line 76
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          ";
            // line 83
echo _gettext("Select all");
            // line 84
            echo "        </button>
      </div>

      <em>";
            // line 87
echo _gettext("Or");
            echo "</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"";
            // line 90
echo _pgettext("None privileges", "None");
            echo "\">
        ";
            // line 91
echo _pgettext("None privileges", "None");
            // line 92
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"";
            // line 97
echo _gettext("Has no effect in this MySQL version.");
            echo "\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 102
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo ((((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 102, $this->source); })()), "References_priv", [], "array", false, false, false, 102) == "Y") || twig_get_attribute($this->env, $this->source, $context["curr_col_privs"], "References", [], "array", false, false, false, 102))) ? (" selected") : (""));
                echo ">
            ";
                // line 103
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          ";
            // line 110
echo _gettext("Select all");
            // line 111
            echo "        </button>
      </div>

      <em>";
            // line 114
echo _gettext("Or");
            echo "</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"";
            // line 117
echo _pgettext("None privileges", "None");
            echo "\">
        ";
            // line 118
echo _pgettext("None privileges", "None");
            // line 119
            echo "      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
            // line 125
echo _gettext("Allows deleting data.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 125) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", false, false, false, 125)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", false, false, false, 125)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"";
            // line 128
echo _gettext("Allows deleting data.");
            echo "\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 137
echo _gettext("Allows creating new tables.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 137) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", false, false, false, 137)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", false, false, false, 137)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"";
            // line 140
echo _gettext("Allows creating new tables.");
            echo "\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 149
echo _gettext("Allows dropping tables.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 149) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", false, false, false, 149)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", false, false, false, 149)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"";
            // line 152
echo _gettext("Allows dropping tables.");
            echo "\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
            // line 161
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            echo "\"";
            // line 162
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 162) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", false, false, false, 162)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", false, false, false, 162)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
            // line 165
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
            // line 174
echo _gettext("Allows creating and dropping indexes.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 174) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", false, false, false, 174)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", false, false, false, 174)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"";
            // line 177
echo _gettext("Allows creating and dropping indexes.");
            echo "\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
            // line 186
echo _gettext("Allows altering the structure of existing tables.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 186) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", false, false, false, 186)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", false, false, false, 186)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"";
            // line 189
echo _gettext("Allows altering the structure of existing tables.");
            echo "\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
            // line 198
echo _gettext("Allows creating new views.");
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 198, $this->source); })()), "Create View_priv", [], "array", false, false, false, 198) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
            // line 201
echo _gettext("Allows creating new views.");
            echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
            // line 210
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 210, $this->source); })()), "Show view_priv", [], "array", false, false, false, 210) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"";
            // line 213
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            echo "\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
            // line 222
echo _gettext("Allows creating and dropping triggers.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Trigger_priv", [], "array", true, true, false, 222) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Trigger_priv", [], "array", false, false, false, 222)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Trigger_priv", [], "array", false, false, false, 222)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
            // line 225
echo _gettext("Allows creating and dropping triggers.");
            echo "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      ";
            // line 232
            if ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete versioning rows_priv", [], "array", true, true, false, 232) || twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_history_priv", [], "array", true, true, false, 232))) {
                // line 233
                echo "        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"";
                // line 235
echo _gettext("Allows deleting historical rows.");
                echo "\"";
                // line 236
                echo ((((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 236, $this->source); })()), "Delete versioning rows_priv", [], "array", false, false, false, 236) == "Y") || (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 236, $this->source); })()), "Delete_history_priv", [], "array", false, false, false, 236) == "Y"))) ? (" checked") : (""));
                echo ">
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"";
                // line 239
echo _gettext("Allows deleting historical rows.");
                echo "\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      ";
            }
            // line 246
            echo "    </div>
    </div>
  </div>

";
        } else {
            // line 251
            echo "
";
            // line 252
            $context["grant_count"] = 0;
            // line 253
            echo "<div class=\"card mb-3\">
  <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 255
            if ((isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 255, $this->source); })())) {
                // line 256
echo _gettext("Global");
            } elseif (            // line 257
(isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 257, $this->source); })())) {
                // line 258
echo _gettext("Database");
            } else {
                // line 260
echo _gettext("Table");
            }
            // line 261
            echo "\">
    ";
            // line 262
            if ((isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 262, $this->source); })())) {
                // line 263
                echo "      ";
echo _gettext("Global privileges");
                // line 264
                echo "    ";
            } elseif ((isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 264, $this->source); })())) {
                // line 265
                echo "      ";
echo _gettext("Database-specific privileges");
                // line 266
                echo "    ";
            } else {
                // line 267
                echo "      ";
echo _gettext("Table-specific privileges");
                // line 268
                echo "    ";
            }
            // line 269
            echo "    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"";
echo _gettext("Check all");
            echo "\">
    <label for=\"addUsersForm_checkall\">";
            // line 270
echo _gettext("Check all");
            echo "</label>
  </div>
  <div class=\"card-body row g-3\">
  <p class=\"col-12\">
    <small><em>";
            // line 274
echo _gettext("Note: MySQL privilege names are expressed in English.");
            echo "</em></small>
  </p>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"";
            // line 279
echo _gettext("Check all");
            echo "\">
      <label for=\"checkall_Data_priv\">";
            // line 280
echo _gettext("Data");
            echo "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 285
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 285, $this->source); })()) + 1);
            // line 286
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"";
            // line 287
echo _gettext("Allows reading data.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Select_priv", [], "array", true, true, false, 287) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Select_priv", [], "array", false, false, false, 287)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Select_priv", [], "array", false, false, false, 287)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"";
            // line 290
echo _gettext("Allows reading data.");
            echo "\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 298
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 298, $this->source); })()) + 1);
            // line 299
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"";
            // line 300
echo _gettext("Allows inserting and replacing data.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Insert_priv", [], "array", true, true, false, 300) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Insert_priv", [], "array", false, false, false, 300)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Insert_priv", [], "array", false, false, false, 300)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"";
            // line 303
echo _gettext("Allows inserting and replacing data.");
            echo "\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 311
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 311, $this->source); })()) + 1);
            // line 312
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"";
            // line 313
echo _gettext("Allows changing data.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Update_priv", [], "array", true, true, false, 313) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Update_priv", [], "array", false, false, false, 313)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Update_priv", [], "array", false, false, false, 313)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"";
            // line 316
echo _gettext("Allows changing data.");
            echo "\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 324
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 324, $this->source); })()) + 1);
            // line 325
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
            // line 326
echo _gettext("Allows deleting data.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 326) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", false, false, false, 326)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", false, false, false, 326)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"";
            // line 329
echo _gettext("Allows deleting data.");
            echo "\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 336
            if ((isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 336, $this->source); })())) {
                // line 337
                echo "      <div class=\"item\">
        ";
                // line 338
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 338, $this->source); })()) + 1);
                // line 339
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"";
                // line 340
echo _gettext("Allows importing data from and exporting data into files.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "File_priv", [], "array", true, true, false, 340) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "File_priv", [], "array", false, false, false, 340)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "File_priv", [], "array", false, false, false, 340)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"";
                // line 343
echo _gettext("Allows importing data from and exporting data into files.");
                echo "\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 350
            echo "    </div>
  </div>
    </div>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"";
            // line 356
echo _gettext("Check all");
            echo "\">
      <label for=\"checkall_Structure_priv\">";
            // line 357
echo _gettext("Structure");
            echo "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 362
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 362, $this->source); })()) + 1);
            // line 363
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 364
            if ((isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 364, $this->source); })())) {
                // line 365
echo _gettext("Allows creating new databases and tables.");
            } else {
                // line 367
echo _gettext("Allows creating new tables.");
            }
            // line 368
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 368) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", false, false, false, 368)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", false, false, false, 368)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"";
            // line 372
            if ((isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 372, $this->source); })())) {
                // line 373
echo _gettext("Allows creating new databases and tables.");
            } else {
                // line 375
echo _gettext("Allows creating new tables.");
            }
            // line 376
            echo "\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 384
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 384, $this->source); })()) + 1);
            // line 385
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
            // line 386
echo _gettext("Allows altering the structure of existing tables.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 386) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", false, false, false, 386)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", false, false, false, 386)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"";
            // line 389
echo _gettext("Allows altering the structure of existing tables.");
            echo "\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 397
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 397, $this->source); })()) + 1);
            // line 398
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
            // line 399
echo _gettext("Allows creating and dropping indexes.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 399) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", false, false, false, 399)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", false, false, false, 399)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"";
            // line 402
echo _gettext("Allows creating and dropping indexes.");
            echo "\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 410
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 410, $this->source); })()) + 1);
            // line 411
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 412
            if ((isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 412, $this->source); })())) {
                // line 413
echo _gettext("Allows dropping databases and tables.");
            } else {
                // line 415
echo _gettext("Allows dropping tables.");
            }
            // line 416
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 416) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", false, false, false, 416)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", false, false, false, 416)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"";
            // line 420
            if ((isset($context["is_database"]) || array_key_exists("is_database", $context) ? $context["is_database"] : (function () { throw new RuntimeError('Variable "is_database" does not exist.', 420, $this->source); })())) {
                // line 421
echo _gettext("Allows dropping databases and tables.");
            } else {
                // line 423
echo _gettext("Allows dropping tables.");
            }
            // line 424
            echo "\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 432
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 432, $this->source); })()) + 1);
            // line 433
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"";
            // line 434
echo _gettext("Allows creating temporary tables.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_tmp_table_priv", [], "array", true, true, false, 434) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_tmp_table_priv", [], "array", false, false, false, 434)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_tmp_table_priv", [], "array", false, false, false, 434)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"";
            // line 437
echo _gettext("Allows creating temporary tables.");
            echo "\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 445
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 445, $this->source); })()) + 1);
            // line 446
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
            // line 447
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_view_priv", [], "array", true, true, false, 447) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_view_priv", [], "array", false, false, false, 447)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_view_priv", [], "array", false, false, false, 447)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"";
            // line 450
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            echo "\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 458
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 458, $this->source); })()) + 1);
            // line 459
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"";
            // line 460
echo _gettext("Allows creating stored routines.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_routine_priv", [], "array", true, true, false, 460) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_routine_priv", [], "array", false, false, false, 460)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_routine_priv", [], "array", false, false, false, 460)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"";
            // line 463
echo _gettext("Allows creating stored routines.");
            echo "\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 471
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 471, $this->source); })()) + 1);
            // line 472
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"";
            // line 473
echo _gettext("Allows altering and dropping stored routines.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_routine_priv", [], "array", true, true, false, 473) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_routine_priv", [], "array", false, false, false, 473)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_routine_priv", [], "array", false, false, false, 473)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"";
            // line 476
echo _gettext("Allows altering and dropping stored routines.");
            echo "\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 484
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 484, $this->source); })()) + 1);
            // line 485
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"";
            // line 486
echo _gettext("Allows executing stored routines.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Execute_priv", [], "array", true, true, false, 486) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Execute_priv", [], "array", false, false, false, 486)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Execute_priv", [], "array", false, false, false, 486)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"";
            // line 489
echo _gettext("Allows executing stored routines.");
            echo "\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 496
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_view_priv", [], "array", true, true, false, 496)) {
                // line 497
                echo "      <div class=\"item\">
        ";
                // line 498
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 498, $this->source); })()) + 1);
                // line 499
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
                // line 500
echo _gettext("Allows creating new views.");
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 500, $this->source); })()), "Create_view_priv", [], "array", false, false, false, 500) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
                // line 503
echo _gettext("Allows creating new views.");
                echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 510
            echo "
    ";
            // line 511
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create View_priv", [], "array", true, true, false, 511)) {
                // line 512
                echo "      <div class=\"item\">
        ";
                // line 513
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 513, $this->source); })()) + 1);
                // line 514
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"";
                // line 515
echo _gettext("Allows creating new views.");
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 515, $this->source); })()), "Create View_priv", [], "array", false, false, false, 515) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"";
                // line 518
echo _gettext("Allows creating new views.");
                echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 525
            echo "
    ";
            // line 526
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Event_priv", [], "array", true, true, false, 526)) {
                // line 527
                echo "      <div class=\"item\">
        ";
                // line 528
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 528, $this->source); })()) + 1);
                // line 529
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"";
                // line 530
echo _gettext("Allows to set up events for the event scheduler.");
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 530, $this->source); })()), "Event_priv", [], "array", false, false, false, 530) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"";
                // line 533
echo _gettext("Allows to set up events for the event scheduler.");
                echo "\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 541
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 541, $this->source); })()) + 1);
                // line 542
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
                // line 543
echo _gettext("Allows creating and dropping triggers.");
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 543, $this->source); })()), "Trigger_priv", [], "array", false, false, false, 543) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
                // line 546
echo _gettext("Allows creating and dropping triggers.");
                echo "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 553
            echo "    </div>
  </div>
    </div>
    <div class=\"col\">

  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"";
            // line 560
echo _gettext("Check all");
            echo "\">
      <label for=\"checkall_Administration_priv\">";
            // line 561
echo _gettext("Administration");
            echo "</label>
    </div>

    <div class=\"card-body\">

    ";
            // line 566
            if ((isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 566, $this->source); })())) {
                // line 567
                echo "      <div class=\"item\">
        ";
                // line 568
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 568, $this->source); })()) + 1);
                // line 569
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
                // line 570
echo _gettext("Allows adding users and privileges without reloading the privilege tables.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 570) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", false, false, false, 570)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", false, false, false, 570)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
                // line 573
echo _gettext("Allows adding users and privileges without reloading the privilege tables.");
                echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 581
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 581, $this->source); })()) + 1);
                // line 582
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"";
                // line 583
echo _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                echo "\"";
                // line 584
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Super_priv", [], "array", true, true, false, 584) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Super_priv", [], "array", false, false, false, 584)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Super_priv", [], "array", false, false, false, 584)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"";
                // line 587
echo _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                echo "\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 595
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 595, $this->source); })()) + 1);
                // line 596
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"";
                // line 597
echo _gettext("Allows viewing processes of all users.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Process_priv", [], "array", true, true, false, 597) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Process_priv", [], "array", false, false, false, 597)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Process_priv", [], "array", false, false, false, 597)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"";
                // line 600
echo _gettext("Allows viewing processes of all users.");
                echo "\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 608
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 608, $this->source); })()) + 1);
                // line 609
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"";
                // line 610
echo _gettext("Allows reloading server settings and flushing the server's caches.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Reload_priv", [], "array", true, true, false, 610) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Reload_priv", [], "array", false, false, false, 610)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Reload_priv", [], "array", false, false, false, 610)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"";
                // line 613
echo _gettext("Allows reloading server settings and flushing the server's caches.");
                echo "\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 621
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 621, $this->source); })()) + 1);
                // line 622
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"";
                // line 623
echo _gettext("Allows shutting down the server.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Shutdown_priv", [], "array", true, true, false, 623) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Shutdown_priv", [], "array", false, false, false, 623)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Shutdown_priv", [], "array", false, false, false, 623)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"";
                // line 626
echo _gettext("Allows shutting down the server.");
                echo "\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 634
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 634, $this->source); })()) + 1);
                // line 635
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"";
                // line 636
echo _gettext("Gives access to the complete list of databases.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_db_priv", [], "array", true, true, false, 636) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_db_priv", [], "array", false, false, false, 636)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_db_priv", [], "array", false, false, false, 636)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"";
                // line 639
echo _gettext("Gives access to the complete list of databases.");
                echo "\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    ";
            } else {
                // line 646
                echo "      <div class=\"item\">
        ";
                // line 647
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 647, $this->source); })()) + 1);
                // line 648
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
                // line 649
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                echo "\"";
                // line 650
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 650) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", false, false, false, 650)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", false, false, false, 650)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
                // line 653
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 660
            echo "
    <div class=\"item\">
      ";
            // line 662
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 662, $this->source); })()) + 1);
            // line 663
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"";
            // line 664
echo _gettext("Allows locking tables for the current thread.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Lock_tables_priv", [], "array", true, true, false, 664) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Lock_tables_priv", [], "array", false, false, false, 664)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Lock_tables_priv", [], "array", false, false, false, 664)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"";
            // line 667
echo _gettext("Allows locking tables for the current thread.");
            echo "\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 675
            $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 675, $this->source); })()) + 1);
            // line 676
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"";
            // line 677
echo _gettext("Has no effect in this MySQL version.");
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "References_priv", [], "array", true, true, false, 677) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "References_priv", [], "array", false, false, false, 677)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "References_priv", [], "array", false, false, false, 677)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_References_priv\">
        <code>
          ";
            // line 681
            echo "          <dfn title=\"";
            echo twig_escape_filter($this->env, (((isset($context["supports_references_privilege"]) || array_key_exists("supports_references_privilege", $context) ? $context["supports_references_privilege"] : (function () { throw new RuntimeError('Variable "supports_references_privilege" does not exist.', 681, $this->source); })())) ? (_gettext("Allows creating foreign key relations.")) : ((((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 681, $this->source); })())) ? (_gettext("Not used on MariaDB.")) : (_gettext("Not used for this MySQL version."))))), "html", null, true);
            echo "\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 688
            if ((isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 688, $this->source); })())) {
                // line 689
                echo "      <div class=\"item\">
        ";
                // line 690
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 690, $this->source); })()) + 1);
                // line 691
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"";
                // line 692
echo _gettext("Allows the user to ask where the replicas / primaries are.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_client_priv", [], "array", true, true, false, 692) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_client_priv", [], "array", false, false, false, 692)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_client_priv", [], "array", false, false, false, 692)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"";
                // line 695
echo _gettext("Allows the user to ask where the replicas / primaries are.");
                echo "\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 703
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 703, $this->source); })()) + 1);
                // line 704
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"";
                // line 705
echo _gettext("Needed for the replication replicas.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_slave_priv", [], "array", true, true, false, 705) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_slave_priv", [], "array", false, false, false, 705)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_slave_priv", [], "array", false, false, false, 705)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"";
                // line 708
echo _gettext("Needed for the replication replicas.");
                echo "\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 716
                $context["grant_count"] = ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 716, $this->source); })()) + 1);
                // line 717
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"";
                // line 718
echo _gettext("Allows creating, dropping and renaming user accounts.");
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_user_priv", [], "array", true, true, false, 718) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_user_priv", [], "array", false, false, false, 718)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_user_priv", [], "array", false, false, false, 718)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"";
                // line 721
echo _gettext("Allows creating, dropping and renaming user accounts.");
                echo "\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 728
            echo "    </div>
  </div>
    </div>

  ";
            // line 732
            if ((isset($context["is_global"]) || array_key_exists("is_global", $context) ? $context["is_global"] : (function () { throw new RuntimeError('Variable "is_global" does not exist.', 732, $this->source); })())) {
                // line 733
                echo "    <div class=\"col\">
    <div class=\"card\">
      <div class=\"card-header\">";
                // line 735
echo _gettext("Resource limits");
                echo "</div>
      <div class=\"card-body\">
      <p>
        <small><em>";
                // line 738
echo _gettext("Note: Setting these options to 0 (zero) removes the limit.");
                echo "</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"";
                // line 744
echo _gettext("Limits the number of queries the user may send to the server per hour.");
                echo "\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"";
                // line 750
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", true, true, false, 750) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 750)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 750), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
                // line 751
echo _gettext("Limits the number of queries the user may send to the server per hour.");
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"";
                // line 757
echo _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                echo "\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"";
                // line 763
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", true, true, false, 763) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 763)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 763), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
                // line 764
echo _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"";
                // line 770
echo _gettext("Limits the number of new connections the user may open per hour.");
                echo "\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"";
                // line 776
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", true, true, false, 776) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 776)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 776), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
                // line 777
echo _gettext("Limits the number of new connections the user may open per hour.");
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"";
                // line 783
echo _gettext("Limits the number of simultaneous connections the user may have.");
                echo "\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"";
                // line 789
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", true, true, false, 789) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 789)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 789), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
                // line 790
echo _gettext("Limits the number of simultaneous connections the user may have.");
                echo "\">
      </div>
      </div>
    </div>
    </div>
    <div class=\"col\">

    <div class=\"card\">
      <div class=\"card-header\">SSL</div>
      <div class=\"card-body\">
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"";
                // line 803
echo _gettext("Does not require SSL-encrypted connections.");
                echo "\" value=\"NONE\"";
                // line 804
                echo (((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 804) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)) : (null)) == "NONE") || ((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 804) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)) : (null)) == ""))) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"";
                // line 812
echo _gettext("Requires SSL-encrypted connections.");
                echo "\" value=\"ANY\"";
                // line 813
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 813) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 813)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 813)) : (null)) == "ANY")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"";
                // line 821
echo _gettext("Requires a valid X509 certificate.");
                echo "\" value=\"X509\"";
                // line 822
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 822) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 822)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 822)) : (null)) == "X509")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"";
                // line 830
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 830) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 830)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 830)) : (null)) == "SPECIFIED")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"";
                // line 841
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", true, true, false, 841) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 841)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 841), "html", null, true))) : (print (null)));
                echo "\" size=\"80\" title=\"";
                // line 842
echo _gettext("Requires that a specific cipher method be used for a connection.");
                echo "\"";
                // line 843
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 843) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 843)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 843)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"";
                // line 850
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", true, true, false, 850) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 850)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 850), "html", null, true))) : (print (null)));
                echo "\" size=\"80\" title=\"";
                // line 851
echo _gettext("Requires that a valid X509 certificate issued by this CA be presented.");
                echo "\"";
                // line 852
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 852) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 852)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 852)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"";
                // line 859
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", true, true, false, 859) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 859)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 859), "html", null, true))) : (print (null)));
                echo "\" size=\"80\" title=\"";
                // line 860
echo _gettext("Requires that a valid X509 certificate with this subject be presented.");
                echo "\"";
                // line 861
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 861) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 861)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 861)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  ";
            }
            // line 869
            echo "  </div>
</div>
<input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 871
            echo twig_escape_filter($this->env, ((isset($context["grant_count"]) || array_key_exists("grant_count", $context) ? $context["grant_count"] : (function () { throw new RuntimeError('Variable "grant_count" does not exist.', 871, $this->source); })()) - ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 871)) ? (1) : (0))), "html", null, true);
            echo "\">

";
        }
        // line 874
        echo "
";
        // line 875
        if ((isset($context["has_submit"]) || array_key_exists("has_submit", $context) ? $context["has_submit"] : (function () { throw new RuntimeError('Variable "has_submit" does not exist.', 875, $this->source); })())) {
            // line 876
            echo "  <div>
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 878
echo _gettext("Update user privileges");
            echo "\">
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/privileges_table.twig";
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
        return array (  1608 => 878,  1604 => 876,  1602 => 875,  1599 => 874,  1593 => 871,  1589 => 869,  1578 => 861,  1575 => 860,  1572 => 859,  1562 => 852,  1559 => 851,  1556 => 850,  1546 => 843,  1543 => 842,  1540 => 841,  1526 => 830,  1516 => 822,  1513 => 821,  1503 => 813,  1500 => 812,  1490 => 804,  1487 => 803,  1472 => 790,  1469 => 789,  1461 => 783,  1452 => 777,  1449 => 776,  1441 => 770,  1432 => 764,  1429 => 763,  1421 => 757,  1412 => 751,  1409 => 750,  1401 => 744,  1392 => 738,  1386 => 735,  1382 => 733,  1380 => 732,  1374 => 728,  1364 => 721,  1356 => 718,  1354 => 717,  1352 => 716,  1341 => 708,  1333 => 705,  1331 => 704,  1329 => 703,  1318 => 695,  1310 => 692,  1308 => 691,  1306 => 690,  1303 => 689,  1301 => 688,  1290 => 681,  1282 => 677,  1280 => 676,  1278 => 675,  1267 => 667,  1259 => 664,  1257 => 663,  1255 => 662,  1251 => 660,  1241 => 653,  1235 => 650,  1232 => 649,  1230 => 648,  1228 => 647,  1225 => 646,  1215 => 639,  1207 => 636,  1205 => 635,  1203 => 634,  1192 => 626,  1184 => 623,  1182 => 622,  1180 => 621,  1169 => 613,  1161 => 610,  1159 => 609,  1157 => 608,  1146 => 600,  1138 => 597,  1136 => 596,  1134 => 595,  1123 => 587,  1117 => 584,  1114 => 583,  1112 => 582,  1110 => 581,  1099 => 573,  1091 => 570,  1089 => 569,  1087 => 568,  1084 => 567,  1082 => 566,  1074 => 561,  1070 => 560,  1061 => 553,  1051 => 546,  1043 => 543,  1041 => 542,  1039 => 541,  1028 => 533,  1020 => 530,  1018 => 529,  1016 => 528,  1013 => 527,  1011 => 526,  1008 => 525,  998 => 518,  990 => 515,  988 => 514,  986 => 513,  983 => 512,  981 => 511,  978 => 510,  968 => 503,  960 => 500,  958 => 499,  956 => 498,  953 => 497,  951 => 496,  941 => 489,  933 => 486,  931 => 485,  929 => 484,  918 => 476,  910 => 473,  908 => 472,  906 => 471,  895 => 463,  887 => 460,  885 => 459,  883 => 458,  872 => 450,  864 => 447,  862 => 446,  860 => 445,  849 => 437,  841 => 434,  839 => 433,  837 => 432,  827 => 424,  824 => 423,  821 => 421,  819 => 420,  812 => 416,  809 => 415,  806 => 413,  804 => 412,  802 => 411,  800 => 410,  789 => 402,  781 => 399,  779 => 398,  777 => 397,  766 => 389,  758 => 386,  756 => 385,  754 => 384,  744 => 376,  741 => 375,  738 => 373,  736 => 372,  729 => 368,  726 => 367,  723 => 365,  721 => 364,  719 => 363,  717 => 362,  709 => 357,  705 => 356,  697 => 350,  687 => 343,  679 => 340,  677 => 339,  675 => 338,  672 => 337,  670 => 336,  660 => 329,  652 => 326,  650 => 325,  648 => 324,  637 => 316,  629 => 313,  627 => 312,  625 => 311,  614 => 303,  606 => 300,  604 => 299,  602 => 298,  591 => 290,  583 => 287,  581 => 286,  579 => 285,  571 => 280,  567 => 279,  559 => 274,  552 => 270,  547 => 269,  544 => 268,  541 => 267,  538 => 266,  535 => 265,  532 => 264,  529 => 263,  527 => 262,  524 => 261,  521 => 260,  518 => 258,  516 => 257,  514 => 256,  512 => 255,  509 => 253,  507 => 252,  504 => 251,  497 => 246,  487 => 239,  481 => 236,  478 => 235,  475 => 233,  473 => 232,  463 => 225,  455 => 222,  444 => 213,  436 => 210,  425 => 201,  417 => 198,  406 => 189,  398 => 186,  387 => 177,  379 => 174,  368 => 165,  362 => 162,  359 => 161,  348 => 152,  340 => 149,  329 => 140,  321 => 137,  310 => 128,  302 => 125,  295 => 119,  293 => 118,  289 => 117,  284 => 114,  279 => 111,  277 => 110,  271 => 106,  262 => 103,  255 => 102,  251 => 101,  244 => 97,  237 => 92,  235 => 91,  231 => 90,  226 => 87,  221 => 84,  219 => 83,  213 => 79,  204 => 76,  197 => 75,  193 => 74,  186 => 70,  179 => 65,  177 => 64,  173 => 63,  168 => 60,  163 => 57,  161 => 56,  155 => 52,  146 => 49,  139 => 48,  135 => 47,  128 => 43,  121 => 38,  119 => 37,  115 => 36,  110 => 33,  105 => 30,  103 => 29,  97 => 25,  88 => 22,  81 => 21,  77 => 20,  70 => 16,  62 => 11,  57 => 8,  55 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if columns is not empty %}

  <input type=\"hidden\" name=\"grant_count\" value=\"{{ row|length }}\">
  <input type=\"hidden\" name=\"column_count\" value=\"{{ columns|length }}\">
  <div class=\"card mb-3\" id=\"fieldset_user_priv\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"{% trans 'Table' %}\">
      {% trans 'Table-specific privileges' %}
    </div>
    <div class=\"card-body\">
    <p>
      <small><em>{% trans 'Note: MySQL privilege names are expressed in English.' %}</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"{% trans 'Allows reading data.' %}\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['Select_priv'] == 'Y' or curr_col_privs['Select'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          {% trans 'Select all' %}
        </button>
      </div>

      <em>{% trans 'Or' %}</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"
          {%- trans %}None{% context %}None privileges{% endtrans %}\">
        {% trans %}None{% context %}None privileges{% endtrans %}
      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"{% trans 'Allows inserting and replacing data.' %}\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['Insert_priv'] == 'Y' or curr_col_privs['Insert'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          {% trans 'Select all' %}
        </button>
      </div>

      <em>{% trans 'Or' %}</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"
          {%- trans %}None{% context %}None privileges{% endtrans %}\">
        {% trans %}None{% context %}None privileges{% endtrans %}
      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"{% trans 'Allows changing data.' %}\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['Update_priv'] == 'Y' or curr_col_privs['Update'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          {% trans 'Select all' %}
        </button>
      </div>

      <em>{% trans 'Or' %}</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"
          {%- trans %}None{% context %}None privileges{% endtrans %}\">
        {% trans %}None{% context %}None privileges{% endtrans %}
      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"{% trans 'Has no effect in this MySQL version.' %}\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        {% for curr_col, curr_col_privs in columns %}
          <option value=\"{{ curr_col }}\"{{ row['References_priv'] == 'Y' or curr_col_privs['References'] ? ' selected' }}>
            {{ curr_col }}
          </option>
        {% endfor %}
      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          {% trans 'Select all' %}
        </button>
      </div>

      <em>{% trans 'Or' %}</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"
          {%- trans %}None{% context %}None privileges{% endtrans %}\">
        {% trans %}None{% context %}None privileges{% endtrans %}
      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"
          {%- trans 'Allows deleting data.' %}\"{{ row['Delete_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"{% trans 'Allows deleting data.' %}\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating new tables.' %}\"{{ row['Create_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating new tables.' %}\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"
          {%- trans 'Allows dropping tables.' %}\"{{ row['Drop_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"{% trans 'Allows dropping tables.' %}\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"
          {%- trans 'Allows user to give to other users or remove from other users the privileges that user possess yourself.' %}\"
          {{- row['Grant_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"{% trans 'Allows user to give to other users or remove from other users the privileges that user possess yourself.' %}\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating and dropping indexes.' %}\"{{ row['Index_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating and dropping indexes.' %}\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"
          {%- trans 'Allows altering the structure of existing tables.' %}\"{{ row['Alter_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"{% trans 'Allows altering the structure of existing tables.' %}\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating new views.' %}\"{{ row['Create View_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating new views.' %}\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"
          {%- trans 'Allows performing SHOW CREATE VIEW queries.' %}\"{{ row['Show view_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"{% trans 'Allows performing SHOW CREATE VIEW queries.' %}\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating and dropping triggers.' %}\"{{ row['Trigger_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating and dropping triggers.' %}\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      {% if row['Delete versioning rows_priv'] is defined or row['Delete_history_priv'] is defined %}
        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"
            {%- trans 'Allows deleting historical rows.' %}\"
            {{- row['Delete versioning rows_priv'] == 'Y' or row['Delete_history_priv'] == 'Y' ? ' checked' }}>
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"{% trans 'Allows deleting historical rows.' %}\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      {% endif %}
    </div>
    </div>
  </div>

{% else %}

{% set grant_count = 0 %}
<div class=\"card mb-3\">
  <div class=\"card-header js-submenu-label\" data-submenu-label=\"
    {%- if is_global %}
      {%- trans 'Global' -%}
    {% elseif is_database %}
      {%- trans 'Database' -%}
    {% else %}
      {%- trans 'Table' -%}
    {% endif %}\">
    {% if is_global %}
      {% trans 'Global privileges' %}
    {% elseif is_database %}
      {% trans 'Database-specific privileges' %}
    {% else %}
      {% trans 'Table-specific privileges' %}
    {% endif %}
    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"{% trans 'Check all' %}\">
    <label for=\"addUsersForm_checkall\">{% trans 'Check all' %}</label>
  </div>
  <div class=\"card-body row g-3\">
  <p class=\"col-12\">
    <small><em>{% trans 'Note: MySQL privilege names are expressed in English.' %}</em></small>
  </p>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"{% trans 'Check all' %}\">
      <label for=\"checkall_Data_priv\">{% trans 'Data' %}</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"
        {%- trans 'Allows reading data.' %}\"{{ row['Select_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"{% trans 'Allows reading data.' %}\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"
        {%- trans 'Allows inserting and replacing data.' %}\"{{ row['Insert_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"{% trans 'Allows inserting and replacing data.' %}\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"
        {%- trans 'Allows changing data.' %}\"{{ row['Update_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"{% trans 'Allows changing data.' %}\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"
        {%- trans 'Allows deleting data.' %}\"{{ row['Delete_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"{% trans 'Allows deleting data.' %}\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    {% if is_global %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"
          {%- trans 'Allows importing data from and exporting data into files.' %}\"{{ row['File_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"{% trans 'Allows importing data from and exporting data into files.' %}\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}
    </div>
  </div>
    </div>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"{% trans 'Check all' %}\">
      <label for=\"checkall_Structure_priv\">{% trans 'Structure' %}</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"
        {%- if is_database %}
          {%- trans 'Allows creating new databases and tables.' -%}
        {% else %}
          {%- trans 'Allows creating new tables.' -%}
        {% endif %}\"{{ row['Create_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"
            {%- if is_database %}
              {%- trans 'Allows creating new databases and tables.' -%}
            {% else %}
              {%- trans 'Allows creating new tables.' -%}
            {% endif %}\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"
        {%- trans 'Allows altering the structure of existing tables.' %}\"{{ row['Alter_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"{% trans 'Allows altering the structure of existing tables.' %}\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"
        {%- trans 'Allows creating and dropping indexes.' %}\"{{ row['Index_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"{% trans 'Allows creating and dropping indexes.' %}\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"
        {%- if is_database %}
          {%- trans 'Allows dropping databases and tables.' -%}
        {% else %}
          {%- trans 'Allows dropping tables.' -%}
        {% endif %}\"{{ row['Drop_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"
            {%- if is_database %}
              {%- trans 'Allows dropping databases and tables.' -%}
            {% else %}
              {%- trans 'Allows dropping tables.' -%}
            {% endif %}\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"
        {%- trans 'Allows creating temporary tables.' %}\"{{ row['Create_tmp_table_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"{% trans 'Allows creating temporary tables.' %}\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"
        {%- trans 'Allows performing SHOW CREATE VIEW queries.' %}\"{{ row['Show_view_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"{% trans 'Allows performing SHOW CREATE VIEW queries.' %}\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"
        {%- trans 'Allows creating stored routines.' %}\"{{ row['Create_routine_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"{% trans 'Allows creating stored routines.' %}\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"
        {%- trans 'Allows altering and dropping stored routines.' %}\"{{ row['Alter_routine_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"{% trans 'Allows altering and dropping stored routines.' %}\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"
        {%- trans 'Allows executing stored routines.' %}\"{{ row['Execute_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"{% trans 'Allows executing stored routines.' %}\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    {% if row['Create_view_priv'] is defined %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating new views.' %}\"{{ row['Create_view_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating new views.' %}\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}

    {% if row['Create View_priv'] is defined %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating new views.' %}\"{{ row['Create View_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating new views.' %}\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}

    {% if row['Event_priv'] is defined %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"
          {%- trans 'Allows to set up events for the event scheduler.' %}\"{{ row['Event_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"{% trans 'Allows to set up events for the event scheduler.' %}\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating and dropping triggers.' %}\"{{ row['Trigger_priv'] == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating and dropping triggers.' %}\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}
    </div>
  </div>
    </div>
    <div class=\"col\">

  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"{% trans 'Check all' %}\">
      <label for=\"checkall_Administration_priv\">{% trans 'Administration' %}</label>
    </div>

    <div class=\"card-body\">

    {% if is_global %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"
          {%- trans 'Allows adding users and privileges without reloading the privilege tables.' %}\"{{ row['Grant_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"{% trans 'Allows adding users and privileges without reloading the privilege tables.' %}\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"
          {%- trans 'Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.' %}\"
          {{- row['Super_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"{% trans 'Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.' %}\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"
          {%- trans 'Allows viewing processes of all users.' %}\"{{ row['Process_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"{% trans 'Allows viewing processes of all users.' %}\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"
          {%- trans 'Allows reloading server settings and flushing the server\\'s caches.' %}\"{{ row['Reload_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"{% trans 'Allows reloading server settings and flushing the server\\'s caches.' %}\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"
          {%- trans 'Allows shutting down the server.' %}\"{{ row['Shutdown_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"{% trans 'Allows shutting down the server.' %}\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"
          {%- trans 'Gives access to the complete list of databases.' %}\"{{ row['Show_db_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"{% trans 'Gives access to the complete list of databases.' %}\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    {% else %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"
          {%- trans 'Allows user to give to other users or remove from other users the privileges that user possess yourself.' %}\"
          {{- row['Grant_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"{% trans 'Allows user to give to other users or remove from other users the privileges that user possess yourself.' %}\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"
        {%- trans 'Allows locking tables for the current thread.' %}\"{{ row['Lock_tables_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"{% trans 'Allows locking tables for the current thread.' %}\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      {% set grant_count = grant_count + 1 %}
      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"
        {%- trans 'Has no effect in this MySQL version.' %}\"{{ row['References_priv'] ?? null == 'Y' ? ' checked' }}>
      <label for=\"checkbox_References_priv\">
        <code>
          {# l10n: The \"REFERENCES\" privilege when granting privileges #}
          <dfn title=\"{{ supports_references_privilege ? 'Allows creating foreign key relations.'|trans : (is_mariadb ? 'Not used on MariaDB.'|trans : 'Not used for this MySQL version.'|trans) }}\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    {% if is_global %}
      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"
          {%- trans 'Allows the user to ask where the replicas / primaries are.' %}\"{{ row['Repl_client_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"{% trans 'Allows the user to ask where the replicas / primaries are.' %}\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"
          {%- trans 'Needed for the replication replicas.' %}\"{{ row['Repl_slave_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"{% trans 'Needed for the replication replicas.' %}\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        {% set grant_count = grant_count + 1 %}
        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"
          {%- trans 'Allows creating, dropping and renaming user accounts.' %}\"{{ row['Create_user_priv'] ?? null == 'Y' ? ' checked' }}>
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"{% trans 'Allows creating, dropping and renaming user accounts.' %}\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    {% endif %}
    </div>
  </div>
    </div>

  {% if is_global %}
    <div class=\"col\">
    <div class=\"card\">
      <div class=\"card-header\">{% trans 'Resource limits' %}</div>
      <div class=\"card-body\">
      <p>
        <small><em>{% trans 'Note: Setting these options to 0 (zero) removes the limit.' %}</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"{% trans 'Limits the number of queries the user may send to the server per hour.' %}\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"
          {{- row.max_questions ?? '0' }}\" title=\"
          {%- trans 'Limits the number of queries the user may send to the server per hour.' %}\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"{% trans 'Limits the number of commands that change any table or database the user may execute per hour.' %}\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"
          {{- row.max_updates ?? '0' }}\" title=\"
          {%- trans 'Limits the number of commands that change any table or database the user may execute per hour.' %}\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"{% trans 'Limits the number of new connections the user may open per hour.' %}\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"
          {{- row.max_connections ?? '0' }}\" title=\"
          {%- trans 'Limits the number of new connections the user may open per hour.' %}\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"{% trans 'Limits the number of simultaneous connections the user may have.' %}\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"
          {{- row.max_user_connections ?? '0' }}\" title=\"
          {%- trans 'Limits the number of simultaneous connections the user may have.' %}\">
      </div>
      </div>
    </div>
    </div>
    <div class=\"col\">

    <div class=\"card\">
      <div class=\"card-header\">SSL</div>
      <div class=\"card-body\">
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"
            {%- trans 'Does not require SSL-encrypted connections.' %}\" value=\"NONE\"
            {{- row.ssl_type ?? null == 'NONE' or row.ssl_type ?? null == '' ? ' checked' }}>
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"
            {%- trans 'Requires SSL-encrypted connections.' %}\" value=\"ANY\"
            {{- row.ssl_type ?? null == 'ANY' ? ' checked' }}>
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"
            {%- trans 'Requires a valid X509 certificate.' %}\" value=\"X509\"
            {{- row.ssl_type ?? null == 'X509' ? ' checked' }}>
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"
            {{- row.ssl_type ?? null == 'SPECIFIED' ? ' checked' }}>
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"{{ row.ssl_cipher ?? null }}\" size=\"80\" title=\"
              {%- trans 'Requires that a specific cipher method be used for a connection.' %}\"
              {{- row.ssl_type ?? null != 'SPECIFIED' ? ' disabled' }}>
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"{{ row.x509_issuer ?? null }}\" size=\"80\" title=\"
              {%- trans 'Requires that a valid X509 certificate issued by this CA be presented.' %}\"
              {{- row.ssl_type ?? null != 'SPECIFIED' ? ' disabled' }}>
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"{{ row.x509_subject ?? null }}\" size=\"80\" title=\"
              {%- trans 'Requires that a valid X509 certificate with this subject be presented.' %}\"
              {{- row.ssl_type ?? null != 'SPECIFIED' ? ' disabled' }}>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  {% endif %}
  </div>
</div>
<input type=\"hidden\" name=\"grant_count\" value=\"{{ grant_count - (row['Grant_priv'] is defined ? 1 : 0) }}\">

{% endif %}

{% if has_submit %}
  <div>
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Update user privileges' %}\">
  </div>
{% endif %}
", "server/privileges/privileges_table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/privileges_table.twig");
    }
}
