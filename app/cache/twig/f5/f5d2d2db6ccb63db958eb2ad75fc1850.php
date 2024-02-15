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

/* relation/check_relations.twig */
class __TwigTemplate_4cfab4fd4bda3fe4e3238de7e89cc1d5 extends Template
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
        echo "<div class=\"container\">
  <h1 class=\"my-3\">
    ";
        // line 3
echo _gettext("phpMyAdmin configuration storage");
        // line 4
        echo "    ";
        echo $this->env->getFunction('show_docu')->getCallable()("setup", "phpmyadmin-configuration-storage");
        echo "
  </h1>

  ";
        // line 7
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 7, $this->source); })()), "db", [], "any", false, false, false, 7))) {
            // line 8
            echo "    <p>
      ";
            // line 9
echo _gettext("Configuration of pmadb…");
            // line 10
            echo "      <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
            echo "</strong></span>
      ";
            // line 11
            echo $this->env->getFunction('show_docu')->getCallable()("setup", "phpmyadmin-configuration-storage");
            echo "
    </p>
    <p>
      ";
            // line 14
echo _gettext("General relation features");
            // line 15
            echo "      <span class=\"text-danger\">";
echo _gettext("Disabled");
            echo "</span>
    </p>
    ";
            // line 17
            if ((isset($context["zero_conf"]) || array_key_exists("zero_conf", $context) ? $context["zero_conf"] : (function () { throw new RuntimeError('Variable "zero_conf" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "      ";
                if (((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 18, $this->source); })()) == "")) {
                    // line 19
                    echo "        ";
                    ob_start();
                    // line 20
                    echo "          ";
echo _gettext("%sCreate%s a database named '%s' and setup the phpMyAdmin configuration storage there.");
                    // line 21
                    echo "        ";
                    $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 19
                    echo $this->env->getFilter('notice')->getCallable()(twig_sprintf($___internal_parse_0_, (((("<a href=\"" . $this->env->getFunction('url')->getCallable()("/check-relations")) . "\" data-post=\"") . $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 19, $this->source); })()), "create_pmadb" => true, "goto" => $this->env->getFunction('url')->getCallable()("/database/operations")])) . "\">"), "</a>", (isset($context["config_storage_database_name"]) || array_key_exists("config_storage_database_name", $context) ? $context["config_storage_database_name"] : (function () { throw new RuntimeError('Variable "config_storage_database_name" does not exist.', 19, $this->source); })())));
                    // line 22
                    echo "      ";
                } else {
                    // line 23
                    echo "        ";
                    ob_start();
                    // line 24
                    echo "          ";
echo _gettext("%sCreate%s the phpMyAdmin configuration storage in the current database.");
                    // line 25
                    echo "        ";
                    $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 23
                    echo $this->env->getFilter('notice')->getCallable()(twig_sprintf($___internal_parse_1_, (((("<a href=\"" . $this->env->getFunction('url')->getCallable()("/check-relations")) . "\" data-post=\"") . $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 23, $this->source); })()), "fixall_pmadb" => true, "goto" => $this->env->getFunction('url')->getCallable()("/database/operations")])) . "\">"), "</a>"));
                    // line 26
                    echo "      ";
                }
                // line 27
                echo "    ";
            }
            // line 28
            echo "  ";
        } else {
            // line 29
            echo "    ";
            if ((( !twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 29, $this->source); })()), "allworks", [], "any", false, false, false, 29) && (isset($context["zero_conf"]) || array_key_exists("zero_conf", $context) ? $context["zero_conf"] : (function () { throw new RuntimeError('Variable "zero_conf" does not exist.', 29, $this->source); })())) && (isset($context["are_config_storage_tables_defined"]) || array_key_exists("are_config_storage_tables_defined", $context) ? $context["are_config_storage_tables_defined"] : (function () { throw new RuntimeError('Variable "are_config_storage_tables_defined" does not exist.', 29, $this->source); })()))) {
                // line 30
                echo "      ";
                ob_start();
                // line 31
                echo "        ";
echo _gettext("%sCreate%s missing phpMyAdmin configuration storage tables.");
                // line 32
                echo "      ";
                $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 30
                echo $this->env->getFilter('notice')->getCallable()(twig_sprintf($___internal_parse_2_, (((("<a href=\"" . $this->env->getFunction('url')->getCallable()("/check-relations")) . "\" data-post=\"") . $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 30, $this->source); })()), "fix_pmadb" => true, "goto" => $this->env->getFunction('url')->getCallable()("/database/operations")])) . "\">"), "</a>"));
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    <table class=\"table table-striped\">
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pmadb']</code>
          ";
            // line 39
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_pmadb");
            echo "
        </th>
        <td class=\"text-end\">
          <span class=\"text-success\"><strong>";
            // line 42
echo _pgettext("Correctly working", "OK");
            echo "</strong></span>
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['relation']</code>
          ";
            // line 50
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_relation");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 53
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 53, $this->source); })()), "relation", [], "any", false, false, false, 53))) {
                // line 54
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 56
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 58
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 62
echo _gettext("General relation features:");
            // line 63
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 63, $this->source); })()), "relwork", [], "any", false, false, false, 63)) {
                // line 64
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 66
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 68
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_info']</code>
          ";
            // line 75
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_table_info");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 78
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 78, $this->source); })()), "table_info", [], "any", false, false, false, 78))) {
                // line 79
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 81
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 83
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 87
echo _gettext("Display features:");
            // line 88
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 88, $this->source); })()), "displaywork", [], "any", false, false, false, 88)) {
                // line 89
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 91
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 93
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_coords']</code>
          ";
            // line 100
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_table_coords");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 103
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 103, $this->source); })()), "table_coords", [], "any", false, false, false, 103))) {
                // line 104
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 106
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 108
            echo "        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pdf_pages']</code>
          ";
            // line 113
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_pdf_pages");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 116
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 116, $this->source); })()), "pdf_pages", [], "any", false, false, false, 116))) {
                // line 117
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 119
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 121
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 125
echo _gettext("Designer and creation of PDFs:");
            // line 126
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 126, $this->source); })()), "pdfwork", [], "any", false, false, false, 126)) {
                // line 127
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 129
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 131
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['column_info']</code>
          ";
            // line 138
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_column_info");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 141
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 141, $this->source); })()), "column_info", [], "any", false, false, false, 141))) {
                // line 142
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 144
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 146
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 150
echo _gettext("Displaying column comments:");
            // line 151
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 151, $this->source); })()), "commwork", [], "any", false, false, false, 151)) {
                // line 152
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 154
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 156
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 160
echo _gettext("Browser transformation:");
            // line 161
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 161, $this->source); })()), "mimework", [], "any", false, false, false, 161)) {
                // line 162
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 164
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 166
            echo "        </td>
      </tr>
      ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 168, $this->source); })()), "commwork", [], "any", false, false, false, 168) &&  !twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 168, $this->source); })()), "mimework", [], "any", false, false, false, 168))) {
                // line 169
                echo "        <tr>
          <td colspan=\"2\" class=\"text-end\">
            <span class=\"text-danger\">
              ";
                // line 172
echo _gettext("Please see the documentation on how to update your column_info table.");
                // line 173
                echo "              ";
                echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_column_info");
                echo "
            </span>
          </td>
        </tr>
      ";
            }
            // line 178
            echo "      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['bookmarktable']</code>
          ";
            // line 183
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_bookmarktable");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 186
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 186, $this->source); })()), "bookmark", [], "any", false, false, false, 186))) {
                // line 187
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 189
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 191
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 195
echo _gettext("Bookmarked SQL query:");
            // line 196
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 196, $this->source); })()), "bookmarkwork", [], "any", false, false, false, 196)) {
                // line 197
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 199
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 201
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['history']</code>
          ";
            // line 208
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_history");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 211
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 211, $this->source); })()), "history", [], "any", false, false, false, 211))) {
                // line 212
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 214
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 216
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 220
echo _gettext("SQL history:");
            // line 221
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 221, $this->source); })()), "historywork", [], "any", false, false, false, 221)) {
                // line 222
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 224
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 226
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['recent']</code>
          ";
            // line 233
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_recent");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 236
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 236, $this->source); })()), "recent", [], "any", false, false, false, 236))) {
                // line 237
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 239
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 241
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 245
echo _gettext("Persistent recently used tables:");
            // line 246
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 246, $this->source); })()), "recentwork", [], "any", false, false, false, 246)) {
                // line 247
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 249
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 251
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['favorite']</code>
          ";
            // line 258
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_favorite");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 261
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 261, $this->source); })()), "favorite", [], "any", false, false, false, 261))) {
                // line 262
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 264
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 266
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 270
echo _gettext("Persistent favorite tables:");
            // line 271
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 271, $this->source); })()), "favoritework", [], "any", false, false, false, 271)) {
                // line 272
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 274
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 276
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_uiprefs']</code>
          ";
            // line 283
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_table_uiprefs");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 286
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 286, $this->source); })()), "table_uiprefs", [], "any", false, false, false, 286))) {
                // line 287
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 289
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 291
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 295
echo _gettext("Persistent tables' UI preferences:");
            // line 296
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 296, $this->source); })()), "uiprefswork", [], "any", false, false, false, 296)) {
                // line 297
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 299
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 301
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['tracking']</code>
          ";
            // line 308
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_tracking");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 311
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 311, $this->source); })()), "tracking", [], "any", false, false, false, 311))) {
                // line 312
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 314
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 316
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 320
echo _gettext("Tracking:");
            // line 321
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 321, $this->source); })()), "trackingwork", [], "any", false, false, false, 321)) {
                // line 322
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 324
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 326
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['userconfig']</code>
          ";
            // line 333
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_userconfig");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 336
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 336, $this->source); })()), "userconfig", [], "any", false, false, false, 336))) {
                // line 337
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 339
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 341
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 345
echo _gettext("User preferences:");
            // line 346
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 346, $this->source); })()), "userconfigwork", [], "any", false, false, false, 346)) {
                // line 347
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 349
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 351
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['users']</code>
          ";
            // line 358
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_users");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 361
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 361, $this->source); })()), "users", [], "any", false, false, false, 361))) {
                // line 362
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 364
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 366
            echo "        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['usergroups']</code>
          ";
            // line 371
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_usergroups");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 374
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 374, $this->source); })()), "usergroups", [], "any", false, false, false, 374))) {
                // line 375
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 377
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 379
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 383
echo _gettext("Configurable menus:");
            // line 384
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 384, $this->source); })()), "menuswork", [], "any", false, false, false, 384)) {
                // line 385
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 387
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 389
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['navigationhiding']</code>
          ";
            // line 396
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_navigationhiding");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 399
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 399, $this->source); })()), "navigationhiding", [], "any", false, false, false, 399))) {
                // line 400
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 402
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 404
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 408
echo _gettext("Hide/show navigation items:");
            // line 409
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 409, $this->source); })()), "navwork", [], "any", false, false, false, 409)) {
                // line 410
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 412
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 414
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['savedsearches']</code>
          ";
            // line 421
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_savedsearches");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 424
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 424, $this->source); })()), "savedsearches", [], "any", false, false, false, 424))) {
                // line 425
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 427
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 429
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 433
echo _gettext("Saving Query-By-Example searches:");
            // line 434
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 434, $this->source); })()), "savedsearcheswork", [], "any", false, false, false, 434)) {
                // line 435
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 437
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 439
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['central_columns']</code>
          ";
            // line 446
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_central_columns");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 449
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 449, $this->source); })()), "central_columns", [], "any", false, false, false, 449))) {
                // line 450
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 452
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 454
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 458
echo _gettext("Managing central list of columns:");
            // line 459
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 459, $this->source); })()), "centralcolumnswork", [], "any", false, false, false, 459)) {
                // line 460
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 462
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 464
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['designer_settings']</code>
          ";
            // line 471
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_designer_settings");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 474
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 474, $this->source); })()), "designer_settings", [], "any", false, false, false, 474))) {
                // line 475
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 477
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 479
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 483
echo _gettext("Remembering designer settings:");
            // line 484
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 484, $this->source); })()), "designersettingswork", [], "any", false, false, false, 484)) {
                // line 485
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 487
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 489
            echo "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['export_templates']</code>
          ";
            // line 496
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_export_templates");
            echo "
        </th>
        <td class=\"text-end\">
          ";
            // line 499
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 499, $this->source); })()), "export_templates", [], "any", false, false, false, 499))) {
                // line 500
                echo "            <span class=\"text-success\"><strong>";
echo _pgettext("Correctly working", "OK");
                echo "</strong></span>
          ";
            } else {
                // line 502
                echo "            <span class=\"text-danger\"><strong>";
echo _gettext("not OK");
                echo "</strong></span>
          ";
            }
            // line 504
            echo "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 508
echo _gettext("Saving export templates:");
            // line 509
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 509, $this->source); })()), "exporttemplateswork", [], "any", false, false, false, 509)) {
                // line 510
                echo "            <span class=\"text-success\">";
echo _gettext("Enabled");
                echo "</span>
          ";
            } else {
                // line 512
                echo "            <span class=\"text-danger\">";
echo _gettext("Disabled");
                echo "</span>
          ";
            }
            // line 514
            echo "        </td>
      </tr>
    </table>

    ";
            // line 518
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 518, $this->source); })()), "allworks", [], "any", false, false, false, 518)) {
                // line 519
                echo "      <p>";
echo _gettext("Quick steps to set up advanced features:");
                echo "</p>

      <ul>
        <li>
          ";
                // line 523
                echo twig_sprintf(_gettext("Create the needed tables with the <code>%screate_tables.sql</code>."), twig_escape_filter($this->env, (isset($context["sql_dir"]) || array_key_exists("sql_dir", $context) ? $context["sql_dir"] : (function () { throw new RuntimeError('Variable "sql_dir" does not exist.', 523, $this->source); })())));
                echo "
          ";
                // line 524
                echo $this->env->getFunction('show_docu')->getCallable()("setup", "linked-tables");
                echo "
        </li>
        <li>
          ";
                // line 527
echo _gettext("Create a pma user and give access to these tables.");
                // line 528
                echo "          ";
                echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_controluser");
                echo "
        </li>
        <li>
          ";
                // line 531
echo _gettext("Enable advanced features in configuration file (<code>config.inc.php</code>), for example by starting from <code>config.sample.inc.php</code>.");
                // line 532
                echo "          ";
                echo $this->env->getFunction('show_docu')->getCallable()("setup", "quick-install");
                echo "
        </li>
        <li>
          ";
                // line 535
echo _gettext("Re-login to phpMyAdmin to load the updated configuration file.");
                // line 536
                echo "        </li>
      </ul>
    ";
            }
            // line 539
            echo "  ";
        }
        // line 540
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "relation/check_relations.twig";
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
        return array (  1182 => 540,  1179 => 539,  1174 => 536,  1172 => 535,  1165 => 532,  1163 => 531,  1156 => 528,  1154 => 527,  1148 => 524,  1144 => 523,  1136 => 519,  1134 => 518,  1128 => 514,  1122 => 512,  1116 => 510,  1113 => 509,  1111 => 508,  1105 => 504,  1099 => 502,  1093 => 500,  1091 => 499,  1085 => 496,  1076 => 489,  1070 => 487,  1064 => 485,  1061 => 484,  1059 => 483,  1053 => 479,  1047 => 477,  1041 => 475,  1039 => 474,  1033 => 471,  1024 => 464,  1018 => 462,  1012 => 460,  1009 => 459,  1007 => 458,  1001 => 454,  995 => 452,  989 => 450,  987 => 449,  981 => 446,  972 => 439,  966 => 437,  960 => 435,  957 => 434,  955 => 433,  949 => 429,  943 => 427,  937 => 425,  935 => 424,  929 => 421,  920 => 414,  914 => 412,  908 => 410,  905 => 409,  903 => 408,  897 => 404,  891 => 402,  885 => 400,  883 => 399,  877 => 396,  868 => 389,  862 => 387,  856 => 385,  853 => 384,  851 => 383,  845 => 379,  839 => 377,  833 => 375,  831 => 374,  825 => 371,  818 => 366,  812 => 364,  806 => 362,  804 => 361,  798 => 358,  789 => 351,  783 => 349,  777 => 347,  774 => 346,  772 => 345,  766 => 341,  760 => 339,  754 => 337,  752 => 336,  746 => 333,  737 => 326,  731 => 324,  725 => 322,  722 => 321,  720 => 320,  714 => 316,  708 => 314,  702 => 312,  700 => 311,  694 => 308,  685 => 301,  679 => 299,  673 => 297,  670 => 296,  668 => 295,  662 => 291,  656 => 289,  650 => 287,  648 => 286,  642 => 283,  633 => 276,  627 => 274,  621 => 272,  618 => 271,  616 => 270,  610 => 266,  604 => 264,  598 => 262,  596 => 261,  590 => 258,  581 => 251,  575 => 249,  569 => 247,  566 => 246,  564 => 245,  558 => 241,  552 => 239,  546 => 237,  544 => 236,  538 => 233,  529 => 226,  523 => 224,  517 => 222,  514 => 221,  512 => 220,  506 => 216,  500 => 214,  494 => 212,  492 => 211,  486 => 208,  477 => 201,  471 => 199,  465 => 197,  462 => 196,  460 => 195,  454 => 191,  448 => 189,  442 => 187,  440 => 186,  434 => 183,  427 => 178,  418 => 173,  416 => 172,  411 => 169,  409 => 168,  405 => 166,  399 => 164,  393 => 162,  390 => 161,  388 => 160,  382 => 156,  376 => 154,  370 => 152,  367 => 151,  365 => 150,  359 => 146,  353 => 144,  347 => 142,  345 => 141,  339 => 138,  330 => 131,  324 => 129,  318 => 127,  315 => 126,  313 => 125,  307 => 121,  301 => 119,  295 => 117,  293 => 116,  287 => 113,  280 => 108,  274 => 106,  268 => 104,  266 => 103,  260 => 100,  251 => 93,  245 => 91,  239 => 89,  236 => 88,  234 => 87,  228 => 83,  222 => 81,  216 => 79,  214 => 78,  208 => 75,  199 => 68,  193 => 66,  187 => 64,  184 => 63,  182 => 62,  176 => 58,  170 => 56,  164 => 54,  162 => 53,  156 => 50,  145 => 42,  139 => 39,  132 => 34,  129 => 33,  127 => 30,  124 => 32,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  104 => 23,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  90 => 19,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  70 => 15,  68 => 14,  62 => 11,  57 => 10,  55 => 9,  52 => 8,  50 => 7,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h1 class=\"my-3\">
    {% trans 'phpMyAdmin configuration storage' %}
    {{ show_docu('setup', 'phpmyadmin-configuration-storage') }}
  </h1>

  {% if relation_parameters.db is null %}
    <p>
      {% trans 'Configuration of pmadb…' %}
      <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
      {{ show_docu('setup', 'phpmyadmin-configuration-storage') }}
    </p>
    <p>
      {% trans 'General relation features' %}
      <span class=\"text-danger\">{% trans 'Disabled' %}</span>
    </p>
    {% if zero_conf %}
      {% if db == '' %}
        {% apply format('<a href=\"' ~ url('/check-relations') ~ '\" data-post=\"' ~ get_common({'db': db, 'create_pmadb': true, 'goto': url('/database/operations')}) ~ '\">', '</a>', config_storage_database_name)|notice %}
          {% trans '%sCreate%s a database named \\'%s\\' and setup the phpMyAdmin configuration storage there.' %}
        {% endapply %}
      {% else %}
        {% apply format('<a href=\"' ~ url('/check-relations') ~ '\" data-post=\"' ~ get_common({'db': db, 'fixall_pmadb': true, 'goto': url('/database/operations')}) ~ '\">', '</a>')|notice %}
          {% trans '%sCreate%s the phpMyAdmin configuration storage in the current database.' %}
        {% endapply %}
      {% endif %}
    {% endif %}
  {% else %}
    {% if not relation_parameters.allworks and zero_conf and are_config_storage_tables_defined %}
      {% apply format('<a href=\"' ~ url('/check-relations') ~ '\" data-post=\"' ~ get_common({'db': db, 'fix_pmadb': true, 'goto': url('/database/operations')}) ~ '\">', '</a>')|notice %}
        {% trans '%sCreate%s missing phpMyAdmin configuration storage tables.' %}
      {% endapply %}
    {% endif %}

    <table class=\"table table-striped\">
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pmadb']</code>
          {{ show_docu('config', 'cfg_Servers_pmadb') }}
        </th>
        <td class=\"text-end\">
          <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['relation']</code>
          {{ show_docu('config', 'cfg_Servers_relation') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.relation is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'General relation features:' %}
          {% if relation_parameters.relwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_info']</code>
          {{ show_docu('config', 'cfg_Servers_table_info') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.table_info is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Display features:' %}
          {% if relation_parameters.displaywork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_coords']</code>
          {{ show_docu('config', 'cfg_Servers_table_coords') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.table_coords is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pdf_pages']</code>
          {{ show_docu('config', 'cfg_Servers_pdf_pages') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.pdf_pages is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Designer and creation of PDFs:' %}
          {% if relation_parameters.pdfwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['column_info']</code>
          {{ show_docu('config', 'cfg_Servers_column_info') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.column_info is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Displaying column comments:' %}
          {% if relation_parameters.commwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Browser transformation:' %}
          {% if relation_parameters.mimework %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      {% if relation_parameters.commwork and not relation_parameters.mimework %}
        <tr>
          <td colspan=\"2\" class=\"text-end\">
            <span class=\"text-danger\">
              {% trans 'Please see the documentation on how to update your column_info table.' %}
              {{ show_docu('config', 'cfg_Servers_column_info') }}
            </span>
          </td>
        </tr>
      {% endif %}
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['bookmarktable']</code>
          {{ show_docu('config', 'cfg_Servers_bookmarktable') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.bookmark is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Bookmarked SQL query:' %}
          {% if relation_parameters.bookmarkwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['history']</code>
          {{ show_docu('config', 'cfg_Servers_history') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.history is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'SQL history:' %}
          {% if relation_parameters.historywork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['recent']</code>
          {{ show_docu('config', 'cfg_Servers_recent') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.recent is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Persistent recently used tables:' %}
          {% if relation_parameters.recentwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['favorite']</code>
          {{ show_docu('config', 'cfg_Servers_favorite') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.favorite is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Persistent favorite tables:' %}
          {% if relation_parameters.favoritework %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_uiprefs']</code>
          {{ show_docu('config', 'cfg_Servers_table_uiprefs') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.table_uiprefs is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Persistent tables\\' UI preferences:' %}
          {% if relation_parameters.uiprefswork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['tracking']</code>
          {{ show_docu('config', 'cfg_Servers_tracking') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.tracking is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Tracking:' %}
          {% if relation_parameters.trackingwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['userconfig']</code>
          {{ show_docu('config', 'cfg_Servers_userconfig') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.userconfig is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'User preferences:' %}
          {% if relation_parameters.userconfigwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['users']</code>
          {{ show_docu('config', 'cfg_Servers_users') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.users is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['usergroups']</code>
          {{ show_docu('config', 'cfg_Servers_usergroups') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.usergroups is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Configurable menus:' %}
          {% if relation_parameters.menuswork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['navigationhiding']</code>
          {{ show_docu('config', 'cfg_Servers_navigationhiding') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.navigationhiding is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Hide/show navigation items:' %}
          {% if relation_parameters.navwork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['savedsearches']</code>
          {{ show_docu('config', 'cfg_Servers_savedsearches') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.savedsearches is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Saving Query-By-Example searches:' %}
          {% if relation_parameters.savedsearcheswork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['central_columns']</code>
          {{ show_docu('config', 'cfg_Servers_central_columns') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.central_columns is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Managing central list of columns:' %}
          {% if relation_parameters.centralcolumnswork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['designer_settings']</code>
          {{ show_docu('config', 'cfg_Servers_designer_settings') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.designer_settings is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Remembering designer settings:' %}
          {% if relation_parameters.designersettingswork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['export_templates']</code>
          {{ show_docu('config', 'cfg_Servers_export_templates') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.export_templates is not null %}
            <span class=\"text-success\"><strong>{% trans %}OK{% context %}Correctly working{% endtrans %}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{% trans 'not OK' %}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {% trans 'Saving export templates:' %}
          {% if relation_parameters.exporttemplateswork %}
            <span class=\"text-success\">{% trans 'Enabled' %}</span>
          {% else %}
            <span class=\"text-danger\">{% trans 'Disabled' %}</span>
          {% endif %}
        </td>
      </tr>
    </table>

    {% if not relation_parameters.allworks %}
      <p>{% trans 'Quick steps to set up advanced features:' %}</p>

      <ul>
        <li>
          {{ 'Create the needed tables with the <code>%screate_tables.sql</code>.'|trans|format(sql_dir|e)|raw }}
          {{ show_docu('setup', 'linked-tables') }}
        </li>
        <li>
          {% trans 'Create a pma user and give access to these tables.' %}
          {{ show_docu('config', 'cfg_Servers_controluser') }}
        </li>
        <li>
          {% trans 'Enable advanced features in configuration file (<code>config.inc.php</code>), for example by starting from <code>config.sample.inc.php</code>.' %}
          {{ show_docu('setup', 'quick-install') }}
        </li>
        <li>
          {% trans 'Re-login to phpMyAdmin to load the updated configuration file.' %}
        </li>
      </ul>
    {% endif %}
  {% endif %}
</div>
", "relation/check_relations.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/relation/check_relations.twig");
    }
}
