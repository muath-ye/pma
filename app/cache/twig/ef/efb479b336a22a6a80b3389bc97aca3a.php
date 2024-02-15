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

/* table/index_form.twig */
class __TwigTemplate_c7c329141f4dfc744230bf6965b49219 extends Template
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
        echo "<form action=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/indexes");
        echo "\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"card ajax\">

    ";
        // line 7
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 7, $this->source); })()));
        echo "
    ";
        // line 8
        if ((isset($context["is_from_nav"]) || array_key_exists("is_from_nav", $context) ? $context["is_from_nav"] : (function () { throw new RuntimeError('Variable "is_from_nav" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    ";
        }
        // line 11
        echo "
    <div class=\"card-body\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
        // line 18
echo _gettext("Index name:");
        // line 19
        echo "                            ";
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        echo "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 29, $this->source); })()), "getName", [], "method", false, false, false, 29), "html", null, true);
        echo "\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
        // line 37
echo _gettext("Index choice:");
        // line 38
        echo "                            ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"";
        // line 43
        echo (((isset($context["create_edit_table"]) || array_key_exists("create_edit_table", $context) ? $context["create_edit_table"] : (function () { throw new RuntimeError('Variable "create_edit_table" does not exist.', 43, $this->source); })())) ? (" disabled") : (""));
        echo ">
                ";
        // line 44
        if (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 44, $this->source); })()), "getChoice", [], "method", false, false, false, 44) == "PRIMARY") ||  !twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 44, $this->source); })()), "hasPrimary", [], "method", false, false, false, 44))) {
            // line 45
            echo "                  <option value=\"PRIMARY\"";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 45, $this->source); })()), "getChoice", [], "method", false, false, false, 45) == "PRIMARY")) ? (" selected") : (""));
            echo ">PRIMARY</option>
                ";
        }
        // line 47
        echo "                <option value=\"INDEX\"";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 47, $this->source); })()), "getChoice", [], "method", false, false, false, 47) == "INDEX")) ? (" selected") : (""));
        echo ">INDEX</option>
                <option value=\"UNIQUE\"";
        // line 48
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 48, $this->source); })()), "getChoice", [], "method", false, false, false, 48) == "UNIQUE")) ? (" selected") : (""));
        echo ">UNIQUE</option>
                <option value=\"SPATIAL\"";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 49, $this->source); })()), "getChoice", [], "method", false, false, false, 49) == "SPATIAL")) ? (" selected") : (""));
        echo ">SPATIAL</option>
                <option value=\"FULLTEXT\"";
        // line 50
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 50, $this->source); })()), "getChoice", [], "method", false, false, false, 50) == "FULLTEXT")) ? (" selected") : (""));
        echo ">FULLTEXT</option>
              </select>
            </div>

            ";
        // line 54
        if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 54, $this->source); })()) != "disabled")) {
            // line 55
            echo "            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"";
            // line 56
            echo ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 56, $this->source); })()) == "open")) ? ("true") : ("false"));
            echo "\" aria-controls=\"advancedOptions\">
                ";
            // line 57
echo _gettext("Advanced options");
            // line 58
            echo "              </button>
            </div>
            <div class=\"collapse mb-3";
            // line 60
            echo ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 60, $this->source); })()) == "open")) ? (" show") : (""));
            echo "\" id=\"advancedOptions\">
            ";
        }
        // line 62
        echo "
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
        // line 67
echo _gettext("Key block size:");
        // line 68
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 76, $this->source); })()), "getKeyBlockSize", [], "method", false, false, false, 76), "html", null, true);
        echo "\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
        // line 84
echo _gettext("Index type:");
        // line 85
        echo "                            ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["", "BTREE", "HASH"]);
        foreach ($context['_seq'] as $context["_key"] => $context["index_type"]) {
            // line 92
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["index_type"], "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 92, $this->source); })()), "getType", [], "method", false, false, false, 92) == $context["index_type"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["index_type"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
        // line 101
echo _gettext("Parser:");
        // line 102
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 110, $this->source); })()), "getParser", [], "method", false, false, false, 110), "html", null, true);
        echo "\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
        // line 117
echo _gettext("Comment:");
        // line 118
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 127, $this->source); })()), "getComment", [], "method", false, false, false, 127), "html", null, true);
        echo "\">
            </div>

            ";
        // line 130
        if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 130, $this->source); })()) != "disabled")) {
            // line 131
            echo "            </div>
            ";
        }
        // line 133
        echo "
        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
        // line 141
echo _gettext("Column");
        // line 142
        echo "                    </th>
                    <th>
                        ";
        // line 144
echo _gettext("Size");
        // line 145
        echo "                    </th>
                </tr>
            </thead>
            ";
        // line 148
        $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
        // line 158
        echo "            <tbody>
                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 159, $this->source); })()), "getColumns", [], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 160
            echo "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
            // line 162
echo _gettext("Drag to reorder");
            echo "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
            // line 167
echo _gettext("Ignore");
            echo " --
                                </option>
                                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 169, $this->source); })()));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 170
                echo "                                    ";
                if ((((twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 170, $this->source); })()), "getChoice", [], "method", false, false, false, 170) != "FULLTEXT") || twig_matches("/(char|text)/i",                 // line 171
$context["field_type"])) && ((twig_get_attribute($this->env, $this->source,                 // line 172
(isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 172, $this->source); })()), "getChoice", [], "method", false, false, false, 172) != "SPATIAL") || twig_in_filter(                // line 173
$context["field_type"], (isset($context["spatial_types"]) || array_key_exists("spatial_types", $context) ? $context["spatial_types"] : (function () { throw new RuntimeError('Variable "spatial_types" does not exist.', 173, $this->source); })()))))) {
                    // line 174
                    echo "
                                        <option value=\"";
                    // line 175
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\"";
                    // line 176
                    if (($context["field_name"] == twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 176))) {
                        // line 177
                        echo "                                                selected=\"selected\"";
                    }
                    // line 178
                    echo ">
                                            ";
                    // line 179
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                // line 182
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 191
            (((twig_get_attribute($this->env, $this->source,             // line 190
(isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 190, $this->source); })()), "getChoice", [], "method", false, false, false, 190) != "SPATIAL")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 191
$context["column"], "getSubPart", [], "method", false, false, false, 191), "html", null, true))) : (print ("")));
            echo "\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                ";
        if (((isset($context["add_fields"]) || array_key_exists("add_fields", $context) ? $context["add_fields"] : (function () { throw new RuntimeError('Variable "add_fields" does not exist.', 195, $this->source); })()) > 0)) {
            // line 196
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["add_fields"]) || array_key_exists("add_fields", $context) ? $context["add_fields"] : (function () { throw new RuntimeError('Variable "add_fields" does not exist.', 196, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 197
                echo "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
                // line 199
echo _gettext("Drag to reorder");
                echo "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
                // line 203
echo _gettext("Ignore");
                echo " --</option>
                                    ";
                // line 204
                $context["j"] = 0;
                // line 205
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 205, $this->source); })()));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 206
                    echo "                                        ";
                    if ((isset($context["create_edit_table"]) || array_key_exists("create_edit_table", $context) ? $context["create_edit_table"] : (function () { throw new RuntimeError('Variable "create_edit_table" does not exist.', 206, $this->source); })())) {
                        // line 207
                        echo "                                            ";
                        $context["col_index"] = twig_get_attribute($this->env, $this->source, $context["field_type"], 1, [], "array", false, false, false, 207);
                        // line 208
                        echo "                                            ";
                        $context["field_type"] = twig_get_attribute($this->env, $this->source, $context["field_type"], 0, [], "array", false, false, false, 208);
                        // line 209
                        echo "                                        ";
                    }
                    // line 210
                    echo "                                        ";
                    $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 210, $this->source); })()) + 1);
                    // line 211
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, ((array_key_exists("col_index", $context)) ? (                    // line 212
(isset($context["col_index"]) || array_key_exists("col_index", $context) ? $context["col_index"] : (function () { throw new RuntimeError('Variable "col_index" does not exist.', 212, $this->source); })())) : ($context["field_name"])), "html", null, true);
                    echo "\"";
                    // line 213
                    echo ((((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 213, $this->source); })()) == $context["i"])) ? (" selected=\"selected\"") : (""));
                    echo ">
                                            ";
                    // line 214
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                ";
        }
        // line 229
        echo "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s column(s) to index"), 1), "html", null, true);
        echo "\">
            </div>
        </div>
        </div>
    </div>
    ";
        // line 243
        if ( !(isset($context["create_edit_table"]) || array_key_exists("create_edit_table", $context) ? $context["create_edit_table"] : (function () { throw new RuntimeError('Variable "create_edit_table" does not exist.', 243, $this->source); })())) {
            // line 244
            echo "<div class=\"card-footer\">
        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 245
echo _gettext("Go");
            echo "</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
            // line 246
echo _gettext("Preview SQL");
            echo "</button>
    </div>";
        }
        // line 249
        echo "</form>
";
        // line 250
        if ((isset($context["is_from_nav"]) || array_key_exists("is_from_nav", $context) ? $context["is_from_nav"] : (function () { throw new RuntimeError('Variable "is_from_nav" does not exist.', 250, $this->source); })())) {
            // line 251
            echo "  ";
            echo twig_include($this->env, $context, "modals/preview_sql_modal.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/index_form.twig";
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
        return array (  500 => 251,  498 => 250,  495 => 249,  490 => 246,  486 => 245,  483 => 244,  481 => 243,  473 => 237,  463 => 229,  460 => 228,  444 => 217,  433 => 214,  429 => 213,  426 => 212,  424 => 211,  421 => 210,  418 => 209,  415 => 208,  412 => 207,  409 => 206,  404 => 205,  402 => 204,  398 => 203,  391 => 199,  387 => 197,  382 => 196,  379 => 195,  369 => 191,  368 => 190,  367 => 191,  358 => 183,  352 => 182,  344 => 179,  341 => 178,  338 => 177,  336 => 176,  333 => 175,  330 => 174,  328 => 173,  327 => 172,  326 => 171,  324 => 170,  320 => 169,  315 => 167,  307 => 162,  303 => 160,  299 => 159,  296 => 158,  294 => 148,  289 => 145,  287 => 144,  283 => 142,  281 => 141,  271 => 133,  267 => 131,  265 => 130,  259 => 127,  248 => 118,  246 => 117,  236 => 110,  226 => 102,  224 => 101,  215 => 94,  202 => 92,  198 => 91,  188 => 85,  186 => 84,  175 => 76,  165 => 68,  163 => 67,  156 => 62,  151 => 60,  147 => 58,  145 => 57,  141 => 56,  138 => 55,  136 => 54,  129 => 50,  125 => 49,  121 => 48,  116 => 47,  110 => 45,  108 => 44,  104 => 43,  95 => 38,  93 => 37,  82 => 29,  68 => 19,  66 => 18,  57 => 11,  53 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ url('/table/indexes') }}\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"card ajax\">

    {{ get_hidden_inputs(form_params) }}
    {% if is_from_nav %}
      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    {% endif %}

    <div class=\"card-body\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            {% trans 'Index name:' %}
                            {{ show_hint('\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!'|trans) }}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"{{ index.getName() }}\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            {% trans 'Index choice:' %}
                            {{ show_mysql_docu('ALTER_TABLE') }}
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"{{ create_edit_table ? ' disabled' }}>
                {% if index.getChoice() == 'PRIMARY' or not index.hasPrimary() %}
                  <option value=\"PRIMARY\"{{ index.getChoice() == 'PRIMARY' ? ' selected' }}>PRIMARY</option>
                {% endif %}
                <option value=\"INDEX\"{{ index.getChoice() == 'INDEX' ? ' selected' }}>INDEX</option>
                <option value=\"UNIQUE\"{{ index.getChoice() == 'UNIQUE' ? ' selected' }}>UNIQUE</option>
                <option value=\"SPATIAL\"{{ index.getChoice() == 'SPATIAL' ? ' selected' }}>SPATIAL</option>
                <option value=\"FULLTEXT\"{{ index.getChoice() == 'FULLTEXT' ? ' selected' }}>FULLTEXT</option>
              </select>
            </div>

            {% if default_sliders_state != 'disabled' %}
            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"{{ default_sliders_state == 'open' ? 'true' : 'false' }}\" aria-controls=\"advancedOptions\">
                {% trans 'Advanced options' %}
              </button>
            </div>
            <div class=\"collapse mb-3{{ default_sliders_state == 'open' ? ' show' }}\" id=\"advancedOptions\">
            {% endif %}

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            {% trans 'Key block size:' %}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"{{ index.getKeyBlockSize() }}\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            {% trans 'Index type:' %}
                            {{ show_mysql_docu('ALTER_TABLE') }}
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                {% for index_type in ['', 'BTREE', 'HASH'] %}
                  <option value=\"{{ index_type }}\"{{ index.getType() == index_type ? ' selected' }}>{{ index_type }}</option>
                {% endfor %}
              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            {% trans 'Parser:' %}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"{{ index.getParser() }}\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            {% trans 'Comment:' %}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"{{ index.getComment() }}\">
            </div>

            {% if default_sliders_state != 'disabled' %}
            </div>
            {% endif %}

        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        {% trans 'Column' %}
                    </th>
                    <th>
                        {% trans 'Size' %}
                    </th>
                </tr>
            </thead>
            {% set spatial_types = [
                'geometry',
                'point',
                'linestring',
                'polygon',
                'multipoint',
                'multilinestring',
                'multipolygon',
                'geomtrycollection'
            ] %}
            <tbody>
                {% for column in index.getColumns() %}
                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"{% trans 'Drag to reorder' %}\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- {% trans 'Ignore' %} --
                                </option>
                                {% for field_name, field_type in fields %}
                                    {% if (index.getChoice() != 'FULLTEXT'
                                            or field_type matches '/(char|text)/i')
                                        and (index.getChoice() != 'SPATIAL'
                                            or field_type in spatial_types) %}

                                        <option value=\"{{ field_name }}\"
                                            {%- if field_name == column.getName() %}
                                                selected=\"selected\"
                                            {%- endif %}>
                                            {{ field_name }} [{{ field_type }}]
                                        </option>
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"{{ index.getChoice() != 'SPATIAL' ?
                                    column.getSubPart() }}\">
                        </td>
                    </tr>
                {% endfor %}
                {% if add_fields > 0 %}
                    {% for i in range(1, add_fields) %}
                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"{% trans 'Drag to reorder' %}\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- {% trans 'Ignore' %} --</option>
                                    {% set j = 0 %}
                                    {% for field_name, field_type in fields %}
                                        {% if create_edit_table %}
                                            {% set col_index = field_type[1] %}
                                            {% set field_type = field_type[0] %}
                                        {% endif %}
                                        {% set j = j + 1 %}
                                        <option value=\"{{ col_index is defined ?
                                            col_index : field_name }}\"
                                            {{- j == i ? ' selected=\"selected\"' }}>
                                            {{ field_name }} [{{ field_type }}]
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"{{ 'Add %s column(s) to index'|trans|format(1) }}\">
            </div>
        </div>
        </div>
    </div>
    {# The modal already has buttons to execute and preview SQL #}
    {%- if not create_edit_table -%}
    <div class=\"card-footer\">
        <button class=\"btn btn-primary\" type=\"submit\">{% trans 'Go' %}</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">{% trans 'Preview SQL' %}</button>
    </div>
    {%- endif -%}
</form>
{% if is_from_nav %}
  {{ include('modals/preview_sql_modal.twig') }}
{% endif %}
", "table/index_form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/index_form.twig");
    }
}
