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

/* server/databases/index.twig */
class __TwigTemplate_2a8c091d8bf79726285dba73e0100ac7 extends Template
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
        echo "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("s_db", (((isset($context["has_statistics"]) || array_key_exists("has_statistics", $context) ? $context["has_statistics"] : (function () { throw new RuntimeError('Variable "has_statistics" does not exist.', 3, $this->source); })())) ? (_gettext("Databases statistics")) : (_gettext("Databases"))));
        echo "
  </h2>

  ";
        // line 6
        if ((isset($context["is_create_database_shown"]) || array_key_exists("is_create_database_shown", $context) ? $context["is_create_database_shown"] : (function () { throw new RuntimeError('Variable "is_create_database_shown" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <div class=\"card\">
      <div class=\"card-header\">
        ";
            // line 9
            echo $this->env->getFunction('get_icon')->getCallable()("b_newdb", _gettext("Create database"));
            echo "
        ";
            // line 10
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("CREATE_DATABASE");
            echo "
      </div>
      <div class=\"card-body\">
        ";
            // line 13
            if ((isset($context["has_create_database_privileges"]) || array_key_exists("has_create_database_privileges", $context) ? $context["has_create_database_privileges"] : (function () { throw new RuntimeError('Variable "has_create_database_privileges" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "          <form method=\"post\" action=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/databases/create");
                echo "\" id=\"create_database_form\" class=\"ajax row row-cols-md-auto g-3 align-items-center\">
            ";
                // line 15
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()("", "");
                echo "
            <input type=\"hidden\" name=\"reload\" value=\"1\">
            ";
                // line 17
                if ((isset($context["has_statistics"]) || array_key_exists("has_statistics", $context) ? $context["has_statistics"] : (function () { throw new RuntimeError('Variable "has_statistics" does not exist.', 17, $this->source); })())) {
                    // line 18
                    echo "              <input type=\"hidden\" name=\"statistics\" value=\"1\">
            ";
                }
                // line 20
                echo "
            <div class=\"col-12\">
              <input type=\"text\" name=\"new_db\" maxlength=\"64\" class=\"form-control\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["database_to_create"]) || array_key_exists("database_to_create", $context) ? $context["database_to_create"] : (function () { throw new RuntimeError('Variable "database_to_create" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "\" id=\"text_create_db\" placeholder=\"";
                // line 24
echo _gettext("Database name");
                echo "\" aria-label=\"";
echo _gettext("Database name");
                echo "\" required>
            </div>

            ";
                // line 27
                if ( !twig_test_empty((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 27, $this->source); })()))) {
                    // line 28
                    echo "              <div class=\"col-12\">
                <select lang=\"en\" dir=\"ltr\" name=\"db_collation\" class=\"form-select\" aria-label=\"";
                    // line 29
echo _gettext("Collation");
                    echo "\">
                  <option value=\"\">";
                    // line 30
echo _gettext("Collation");
                    echo "</option>
                  <option value=\"\"></option>
                  ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 32, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 33
                        echo "                    <optgroup label=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 33), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 33), "html", null, true);
                        echo "\">
                      ";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 34));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 35
                            echo "                        <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 35), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 35), "html", null, true);
                            echo "\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 35)) ? (" selected") : (""));
                            echo ">";
                            // line 36
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 36), "html", null, true);
                            // line 37
                            echo "</option>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                    </optgroup>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                </select>
              </div>
            ";
                }
                // line 44
                echo "
            <div class=\"col-12\">
              <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 46
echo _gettext("Create");
                echo "\">
            </div>
          </form>
        ";
            } else {
                // line 50
                echo "          <span class=\"text-danger\">";
                echo $this->env->getFunction('get_icon')->getCallable()("s_error", _gettext("No privileges to create databases"));
                echo "</span>
        ";
            }
            // line 52
            echo "      </div>
    </div>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if (((isset($context["database_count"]) || array_key_exists("database_count", $context) ? $context["database_count"] : (function () { throw new RuntimeError('Variable "database_count" does not exist.', 56, $this->source); })()) > 0)) {
            // line 57
            echo "    <div class=\"d-flex flex-wrap my-3\">
      ";
            // line 58
            if ((isset($context["is_drop_allowed"]) || array_key_exists("is_drop_allowed", $context) ? $context["is_drop_allowed"] : (function () { throw new RuntimeError('Variable "is_drop_allowed" does not exist.', 58, $this->source); })())) {
                // line 59
                echo "        <div>
          <div class=\"input-group\">
            <div class=\"input-group-text\">
              <div class=\"form-check mb-0\">
                <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"dbStatsForm\">
                <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
                // line 64
echo _gettext("Check all");
                echo "</label>
              </div>
            </div>
            <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"Drop\" form=\"dbStatsForm\" title=\"";
                // line 67
echo _gettext("Drop");
                echo "\">
              ";
                // line 68
                echo $this->env->getFunction('get_icon')->getCallable()("db_drop", _gettext("Drop"));
                echo "
            </button>
          </div>
        </div>
      ";
            }
            // line 73
            echo "
      <div class=\"ms-auto\">
        <div class=\"input-group\">
          <span class=\"input-group-text\">";
            // line 76
            echo $this->env->getFunction('get_image')->getCallable()("b_search", _gettext("Search"));
            echo "</span>
          <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
            // line 77
echo _gettext("Search");
            echo "\" aria-label=\"";
echo _gettext("Search");
            echo "\">
        </div>
      </div>
    </div>

    ";
            // line 82
            echo $this->env->getFunction('get_list_navigator')->getCallable()(            // line 83
(isset($context["database_count"]) || array_key_exists("database_count", $context) ? $context["database_count"] : (function () { throw new RuntimeError('Variable "database_count" does not exist.', 83, $this->source); })()),             // line 84
(isset($context["pos"]) || array_key_exists("pos", $context) ? $context["pos"] : (function () { throw new RuntimeError('Variable "pos" does not exist.', 84, $this->source); })()),             // line 85
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 85, $this->source); })()), $this->env->getFunction('url')->getCallable()("/server/databases"), "frame_content",             // line 88
(isset($context["max_db_list"]) || array_key_exists("max_db_list", $context) ? $context["max_db_list"] : (function () { throw new RuntimeError('Variable "max_db_list" does not exist.', 88, $this->source); })()));
            // line 89
            echo "

    <form class=\"ajax\" action=\"";
            // line 91
            echo $this->env->getFunction('url')->getCallable()("/server/databases");
            echo "\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">
      ";
            // line 92
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 92, $this->source); })()));
            echo "
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover w-auto\">
          <thead>
            <tr>
              ";
            // line 97
            if ((isset($context["is_drop_allowed"]) || array_key_exists("is_drop_allowed", $context) ? $context["is_drop_allowed"] : (function () { throw new RuntimeError('Variable "is_drop_allowed" does not exist.', 97, $this->source); })())) {
                // line 98
                echo "                <th></th>
              ";
            }
            // line 100
            echo "              <th>
                <a href=\"";
            // line 101
            echo $this->env->getFunction('url')->getCallable()("/server/databases", twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 101, $this->source); })()), ["sort_by" => "SCHEMA_NAME", "sort_order" => ((((twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 103, $this->source); })()), "sort_by", [], "any", false, false, false, 103) == "SCHEMA_NAME") && (twig_get_attribute($this->env, $this->source,             // line 104
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 104, $this->source); })()), "sort_order", [], "any", false, false, false, 104) == "asc"))) ? ("desc") : ("asc"))]));
            // line 105
            echo "\">
                  ";
            // line 106
echo _gettext("Database");
            // line 107
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 107, $this->source); })()), "sort_by", [], "any", false, false, false, 107) == "SCHEMA_NAME")) {
                // line 108
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 108, $this->source); })()), "sort_order", [], "any", false, false, false, 108) == "asc")) {
                    // line 109
                    echo "                      ";
                    echo $this->env->getFunction('get_image')->getCallable()("s_asc", _gettext("Ascending"));
                    echo "
                    ";
                } else {
                    // line 111
                    echo "                      ";
                    echo $this->env->getFunction('get_image')->getCallable()("s_desc", _gettext("Descending"));
                    echo "
                    ";
                }
                // line 113
                echo "                  ";
            }
            // line 114
            echo "                </a>
              </th>

              <th>
                <a href=\"";
            // line 118
            echo $this->env->getFunction('url')->getCallable()("/server/databases", twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 118, $this->source); })()), ["sort_by" => "DEFAULT_COLLATION_NAME", "sort_order" => ((((twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 120, $this->source); })()), "sort_by", [], "any", false, false, false, 120) == "DEFAULT_COLLATION_NAME") && (twig_get_attribute($this->env, $this->source,             // line 121
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 121, $this->source); })()), "sort_order", [], "any", false, false, false, 121) == "asc"))) ? ("desc") : ("asc"))]));
            // line 122
            echo "\">
                  ";
            // line 123
echo _gettext("Collation");
            // line 124
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 124, $this->source); })()), "sort_by", [], "any", false, false, false, 124) == "DEFAULT_COLLATION_NAME")) {
                // line 125
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 125, $this->source); })()), "sort_order", [], "any", false, false, false, 125) == "asc")) {
                    // line 126
                    echo "                      ";
                    echo $this->env->getFunction('get_image')->getCallable()("s_asc", _gettext("Ascending"));
                    echo "
                    ";
                } else {
                    // line 128
                    echo "                      ";
                    echo $this->env->getFunction('get_image')->getCallable()("s_desc", _gettext("Descending"));
                    echo "
                    ";
                }
                // line 130
                echo "                  ";
            }
            // line 131
            echo "                </a>
              </th>

              ";
            // line 134
            if ((isset($context["has_statistics"]) || array_key_exists("has_statistics", $context) ? $context["has_statistics"] : (function () { throw new RuntimeError('Variable "has_statistics" does not exist.', 134, $this->source); })())) {
                // line 135
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["header_statistics"]) || array_key_exists("header_statistics", $context) ? $context["header_statistics"] : (function () { throw new RuntimeError('Variable "header_statistics" does not exist.', 135, $this->source); })()));
                foreach ($context['_seq'] as $context["name"] => $context["statistic"]) {
                    // line 136
                    echo "                  <th";
                    echo (((twig_get_attribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 136) == "byte")) ? (" colspan=\"2\"") : (""));
                    echo ">
                    <a href=\"";
                    // line 137
                    echo $this->env->getFunction('url')->getCallable()("/server/databases", twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 137, $this->source); })()), ["sort_by" =>                     // line 138
$context["name"], "sort_order" => ((((twig_get_attribute($this->env, $this->source,                     // line 139
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 139, $this->source); })()), "sort_by", [], "any", false, false, false, 139) == $context["name"]) && (twig_get_attribute($this->env, $this->source,                     // line 140
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 140, $this->source); })()), "sort_order", [], "any", false, false, false, 140) == "asc"))) ? ("desc") : ("asc"))]));
                    // line 141
                    echo "\">
                      ";
                    // line 142
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "title", [], "any", false, false, false, 142), "html", null, true);
                    echo "
                      ";
                    // line 143
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 143, $this->source); })()), "sort_by", [], "any", false, false, false, 143) == $context["name"])) {
                        // line 144
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 144, $this->source); })()), "sort_order", [], "any", false, false, false, 144) == "asc")) {
                            // line 145
                            echo "                          ";
                            echo $this->env->getFunction('get_image')->getCallable()("s_asc", _gettext("Ascending"));
                            echo "
                        ";
                        } else {
                            // line 147
                            echo "                          ";
                            echo $this->env->getFunction('get_image')->getCallable()("s_desc", _gettext("Descending"));
                            echo "
                        ";
                        }
                        // line 149
                        echo "                      ";
                    }
                    // line 150
                    echo "                    </a>
                  </th>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['statistic'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "              ";
            }
            // line 154
            echo "
              ";
            // line 155
            if ((isset($context["has_primary_replication"]) || array_key_exists("has_primary_replication", $context) ? $context["has_primary_replication"] : (function () { throw new RuntimeError('Variable "has_primary_replication" does not exist.', 155, $this->source); })())) {
                // line 156
                echo "                <th>";
echo _gettext("Primary replication");
                echo "</th>
              ";
            }
            // line 158
            echo "
              ";
            // line 159
            if ((isset($context["has_replica_replication"]) || array_key_exists("has_replica_replication", $context) ? $context["has_replica_replication"] : (function () { throw new RuntimeError('Variable "has_replica_replication" does not exist.', 159, $this->source); })())) {
                // line 160
                echo "                <th>";
echo _gettext("Replica replication");
                echo "</th>
              ";
            }
            // line 162
            echo "
              <th>";
            // line 163
echo _gettext("Action");
            echo "</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["databases"]) || array_key_exists("databases", $context) ? $context["databases"] : (function () { throw new RuntimeError('Variable "databases" does not exist.', 168, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                // line 169
                echo "              <tr class=\"db-row";
                echo (((twig_get_attribute($this->env, $this->source, $context["database"], "is_system_schema", [], "any", false, false, false, 169) || twig_get_attribute($this->env, $this->source, $context["database"], "is_pmadb", [], "any", false, false, false, 169))) ? (" noclick") : (""));
                echo "\" data-filter-row=\"";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 169)), "html", null, true);
                echo "\">
                ";
                // line 170
                if ((isset($context["is_drop_allowed"]) || array_key_exists("is_drop_allowed", $context) ? $context["is_drop_allowed"] : (function () { throw new RuntimeError('Variable "is_drop_allowed" does not exist.', 170, $this->source); })())) {
                    // line 171
                    echo "                  <td class=\"tool\">
                    <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"";
                    // line 173
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 173), "html", null, true);
                    echo "\" value=\"";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 174), "html", null, true);
                    echo "\"";
                    // line 175
                    echo (((twig_get_attribute($this->env, $this->source, $context["database"], "is_system_schema", [], "any", false, false, false, 175) || twig_get_attribute($this->env, $this->source, $context["database"], "is_pmadb", [], "any", false, false, false, 175))) ? (" disabled") : (""));
                    echo ">
                  </td>
                ";
                }
                // line 178
                echo "
                <td class=\"name\">
                  <a href=\"";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["database"], "url", [], "any", false, false, false, 180), "html", null, true);
                echo "\" title=\"";
                // line 181
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("Jump to database '%s'"), twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 181)), "html", null, true);
                echo "\">
                    ";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 182), "html", null, true);
                echo "
                  </a>
                </td>

                <td class=\"value\">
                  <dfn title=\"";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["database"], "collation", [], "any", false, false, false, 187), "description", [], "any", false, false, false, 187), "html", null, true);
                echo "\">
                    ";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["database"], "collation", [], "any", false, false, false, 188), "name", [], "any", false, false, false, 188), "html", null, true);
                echo "
                  </dfn>
                </td>

                ";
                // line 192
                if ((isset($context["has_statistics"]) || array_key_exists("has_statistics", $context) ? $context["has_statistics"] : (function () { throw new RuntimeError('Variable "has_statistics" does not exist.', 192, $this->source); })())) {
                    // line 193
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["database"], "statistics", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                        // line 194
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 194) === "byte")) {
                            // line 195
                            echo "                      ";
                            $context["value"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 195), 3, 1);
                            // line 196
                            echo "                      <td class=\"value\">
                        <data value=\"";
                            // line 197
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 197), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 197), "html", null, true);
                            echo "\">
                          ";
                            // line 198
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 198, $this->source); })()), 0, [], "array", false, false, false, 198), "html", null, true);
                            echo "
                        </data>
                      </td>
                      <td class=\"unit\">";
                            // line 201
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 201, $this->source); })()), 1, [], "array", false, false, false, 201), "html", null, true);
                            echo "</td>
                    ";
                        } else {
                            // line 203
                            echo "                      <td class=\"value\">
                        <data value=\"";
                            // line 204
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 204), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 204), "html", null, true);
                            echo "\">
                          ";
                            // line 205
                            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 205), 0), "html", null, true);
                            echo "
                        </data>
                      </td>
                    ";
                        }
                        // line 209
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    echo "                ";
                }
                // line 211
                echo "
                ";
                // line 212
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 212), "primary", [], "any", false, false, false, 212), "status", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 213), "primary", [], "any", false, false, false, 213), "is_replicated", [], "any", false, false, false, 213)) {
                        // line 214
                        echo "                    <td class=\"tool text-center\">
                      ";
                        // line 215
                        echo $this->env->getFunction('get_icon')->getCallable()("s_success", _gettext("Replicated"));
                        echo "
                    </td>
                  ";
                    } else {
                        // line 218
                        echo "                    <td class=\"tool text-center\">
                      ";
                        // line 219
                        echo $this->env->getFunction('get_icon')->getCallable()("s_cancel", _gettext("Not replicated"));
                        echo "
                    </td>
                  ";
                    }
                    // line 222
                    echo "                ";
                }
                // line 223
                echo "
                ";
                // line 224
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 224), "replica", [], "any", false, false, false, 224), "status", [], "any", false, false, false, 224)) {
                    // line 225
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 225), "replica", [], "any", false, false, false, 225), "is_replicated", [], "any", false, false, false, 225)) {
                        // line 226
                        echo "                    <td class=\"tool text-center\">
                      ";
                        // line 227
                        echo $this->env->getFunction('get_icon')->getCallable()("s_success", _gettext("Replicated"));
                        echo "
                    </td>
                  ";
                    } else {
                        // line 230
                        echo "                    <td class=\"tool text-center\">
                      ";
                        // line 231
                        echo $this->env->getFunction('get_icon')->getCallable()("s_cancel", _gettext("Not replicated"));
                        echo "
                    </td>
                  ";
                    }
                    // line 234
                    echo "                ";
                }
                // line 235
                echo "
                <td class=\"tool\">
                  <a class=\"server_databases\" data=\"";
                // line 238
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 238), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/privileges", ["db" => twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 238)]);
                echo "\" title=\"";
                // line 239
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("Check privileges for database \"%s\"."), twig_get_attribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 239)), "html", null, true);
                echo "\">
                    ";
                // line 240
                echo $this->env->getFunction('get_icon')->getCallable()("s_rights", _gettext("Check privileges"));
                echo "
                  </a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "          </tbody>

          <tfoot>
            <tr>
              <th colspan=\"";
            // line 249
            echo (((isset($context["is_drop_allowed"]) || array_key_exists("is_drop_allowed", $context) ? $context["is_drop_allowed"] : (function () { throw new RuntimeError('Variable "is_drop_allowed" does not exist.', 249, $this->source); })())) ? ("3") : ("2"));
            echo "\">
                ";
            // line 250
echo _gettext("Total:");
            // line 251
            echo "                <span id=\"filter-rows-count\">";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["database_count"]) || array_key_exists("database_count", $context) ? $context["database_count"] : (function () { throw new RuntimeError('Variable "database_count" does not exist.', 252, $this->source); })()), "html", null, true);
            // line 253
            echo "</span>
              </th>

              ";
            // line 256
            if ((isset($context["has_statistics"]) || array_key_exists("has_statistics", $context) ? $context["has_statistics"] : (function () { throw new RuntimeError('Variable "has_statistics" does not exist.', 256, $this->source); })())) {
                // line 257
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["total_statistics"]) || array_key_exists("total_statistics", $context) ? $context["total_statistics"] : (function () { throw new RuntimeError('Variable "total_statistics" does not exist.', 257, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                    // line 258
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 258) === "byte")) {
                        // line 259
                        echo "                    ";
                        $context["value"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 259), 3, 1);
                        // line 260
                        echo "                    <th class=\"value\">
                      <data value=\"";
                        // line 261
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 261), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 261), "html", null, true);
                        echo "\">
                        ";
                        // line 262
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 262, $this->source); })()), 0, [], "array", false, false, false, 262), "html", null, true);
                        echo "
                      </data>
                    </th>
                    <th class=\"unit\">";
                        // line 265
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 265, $this->source); })()), 1, [], "array", false, false, false, 265), "html", null, true);
                        echo "</th>
                  ";
                    } else {
                        // line 267
                        echo "                    <th class=\"value\">
                      <data value=\"";
                        // line 268
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 268), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 268), "html", null, true);
                        echo "\">
                        ";
                        // line 269
                        echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 269), 0), "html", null, true);
                        echo "
                      </data>
                    </th>
                  ";
                    }
                    // line 273
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "              ";
            }
            // line 275
            echo "
              ";
            // line 276
            if ((isset($context["has_primary_replication"]) || array_key_exists("has_primary_replication", $context) ? $context["has_primary_replication"] : (function () { throw new RuntimeError('Variable "has_primary_replication" does not exist.', 276, $this->source); })())) {
                // line 277
                echo "                <th></th>
              ";
            }
            // line 279
            echo "
              ";
            // line 280
            if ((isset($context["has_replica_replication"]) || array_key_exists("has_replica_replication", $context) ? $context["has_replica_replication"] : (function () { throw new RuntimeError('Variable "has_replica_replication" does not exist.', 280, $this->source); })())) {
                // line 281
                echo "                <th></th>
              ";
            }
            // line 283
            echo "
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </form>

    ";
            // line 291
            if ( !(isset($context["has_statistics"]) || array_key_exists("has_statistics", $context) ? $context["has_statistics"] : (function () { throw new RuntimeError('Variable "has_statistics" does not exist.', 291, $this->source); })())) {
                // line 292
                echo "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"alert alert-info\" role=\"alert\">
            ";
                // line 295
                echo $this->env->getFunction('get_icon')->getCallable()("s_notice", _gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server."));
                echo "
          </div>
          <a class=\"card-link\" href=\"";
                // line 297
                echo $this->env->getFunction('url')->getCallable()("/server/databases");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["statistics" => "1"], "", false);
                echo "\" title=\"";
echo _gettext("Enable statistics");
                echo "\">
            ";
                // line 298
echo _gettext("Enable statistics");
                // line 299
                echo "          </a>
        </div>
      </div>
    ";
            }
            // line 303
            echo "  ";
        } else {
            // line 304
            echo "    <div class=\"alert alert-primary my-3\" role=\"alert\">
      ";
            // line 305
            echo $this->env->getFunction('get_icon')->getCallable()("s_notice", _gettext("No databases"));
            echo "
    </div>
  ";
        }
        // line 308
        echo "</div>

";
        // line 310
        if ((isset($context["is_drop_allowed"]) || array_key_exists("is_drop_allowed", $context) ? $context["is_drop_allowed"] : (function () { throw new RuntimeError('Variable "is_drop_allowed" does not exist.', 310, $this->source); })())) {
            // line 311
            echo "  <div class=\"modal fade\" id=\"dropDatabaseModal\" tabindex=\"-1\" aria-labelledby=\"dropDatabaseModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"dropDatabaseModalLabel\">";
            // line 315
echo _gettext("Confirm");
            echo "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 316
echo _gettext("Cancel");
            echo "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 320
echo _gettext("Cancel");
            echo "</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"dropDatabaseModalDropButton\">";
            // line 321
echo _gettext("Drop");
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
        return "server/databases/index.twig";
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
        return array (  792 => 321,  788 => 320,  781 => 316,  777 => 315,  771 => 311,  769 => 310,  765 => 308,  759 => 305,  756 => 304,  753 => 303,  747 => 299,  745 => 298,  737 => 297,  732 => 295,  727 => 292,  725 => 291,  715 => 283,  711 => 281,  709 => 280,  706 => 279,  702 => 277,  700 => 276,  697 => 275,  694 => 274,  688 => 273,  681 => 269,  675 => 268,  672 => 267,  667 => 265,  661 => 262,  655 => 261,  652 => 260,  649 => 259,  646 => 258,  641 => 257,  639 => 256,  634 => 253,  632 => 252,  630 => 251,  628 => 250,  624 => 249,  618 => 245,  607 => 240,  603 => 239,  598 => 238,  594 => 235,  591 => 234,  585 => 231,  582 => 230,  576 => 227,  573 => 226,  570 => 225,  568 => 224,  565 => 223,  562 => 222,  556 => 219,  553 => 218,  547 => 215,  544 => 214,  541 => 213,  539 => 212,  536 => 211,  533 => 210,  527 => 209,  520 => 205,  514 => 204,  511 => 203,  506 => 201,  500 => 198,  494 => 197,  491 => 196,  488 => 195,  485 => 194,  480 => 193,  478 => 192,  471 => 188,  467 => 187,  459 => 182,  455 => 181,  452 => 180,  448 => 178,  442 => 175,  439 => 174,  436 => 173,  433 => 171,  431 => 170,  424 => 169,  420 => 168,  412 => 163,  409 => 162,  403 => 160,  401 => 159,  398 => 158,  392 => 156,  390 => 155,  387 => 154,  384 => 153,  376 => 150,  373 => 149,  367 => 147,  361 => 145,  358 => 144,  356 => 143,  352 => 142,  349 => 141,  347 => 140,  346 => 139,  345 => 138,  344 => 137,  339 => 136,  334 => 135,  332 => 134,  327 => 131,  324 => 130,  318 => 128,  312 => 126,  309 => 125,  306 => 124,  304 => 123,  301 => 122,  299 => 121,  298 => 120,  297 => 118,  291 => 114,  288 => 113,  282 => 111,  276 => 109,  273 => 108,  270 => 107,  268 => 106,  265 => 105,  263 => 104,  262 => 103,  261 => 101,  258 => 100,  254 => 98,  252 => 97,  244 => 92,  240 => 91,  236 => 89,  234 => 88,  233 => 85,  232 => 84,  231 => 83,  230 => 82,  220 => 77,  216 => 76,  211 => 73,  203 => 68,  199 => 67,  193 => 64,  186 => 59,  184 => 58,  181 => 57,  179 => 56,  176 => 55,  171 => 52,  165 => 50,  158 => 46,  154 => 44,  149 => 41,  142 => 39,  135 => 37,  133 => 36,  125 => 35,  121 => 34,  114 => 33,  110 => 32,  105 => 30,  101 => 29,  98 => 28,  96 => 27,  88 => 24,  85 => 23,  81 => 20,  77 => 18,  75 => 17,  70 => 15,  65 => 14,  63 => 13,  57 => 10,  53 => 9,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid my-3\">
  <h2>
    {{ get_icon('s_db', has_statistics ? 'Databases statistics'|trans : 'Databases'|trans) }}
  </h2>

  {% if is_create_database_shown %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ get_icon('b_newdb', 'Create database'|trans) }}
        {{ show_mysql_docu('CREATE_DATABASE') }}
      </div>
      <div class=\"card-body\">
        {% if has_create_database_privileges %}
          <form method=\"post\" action=\"{{ url('/server/databases/create') }}\" id=\"create_database_form\" class=\"ajax row row-cols-md-auto g-3 align-items-center\">
            {{ get_hidden_inputs('', '') }}
            <input type=\"hidden\" name=\"reload\" value=\"1\">
            {% if has_statistics %}
              <input type=\"hidden\" name=\"statistics\" value=\"1\">
            {% endif %}

            <div class=\"col-12\">
              <input type=\"text\" name=\"new_db\" maxlength=\"64\" class=\"form-control\" value=\"
                {{- database_to_create }}\" id=\"text_create_db\" placeholder=\"
                {%- trans 'Database name' %}\" aria-label=\"{% trans 'Database name' %}\" required>
            </div>

            {% if charsets is not empty %}
              <div class=\"col-12\">
                <select lang=\"en\" dir=\"ltr\" name=\"db_collation\" class=\"form-select\" aria-label=\"{% trans 'Collation' %}\">
                  <option value=\"\">{% trans 'Collation' %}</option>
                  <option value=\"\"></option>
                  {% for charset in charsets %}
                    <optgroup label=\"{{ charset.name }}\" title=\"{{ charset.description }}\">
                      {% for collation in charset.collations %}
                        <option value=\"{{ collation.name }}\" title=\"{{ collation.description }}\"{{ collation.is_selected ? ' selected' }}>
                          {{- collation.name -}}
                        </option>
                      {% endfor %}
                    </optgroup>
                  {% endfor %}
                </select>
              </div>
            {% endif %}

            <div class=\"col-12\">
              <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Create' %}\">
            </div>
          </form>
        {% else %}
          <span class=\"text-danger\">{{ get_icon('s_error', 'No privileges to create databases'|trans) }}</span>
        {% endif %}
      </div>
    </div>
  {% endif %}

  {% if database_count > 0 %}
    <div class=\"d-flex flex-wrap my-3\">
      {% if is_drop_allowed %}
        <div>
          <div class=\"input-group\">
            <div class=\"input-group-text\">
              <div class=\"form-check mb-0\">
                <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"dbStatsForm\">
                <label class=\"form-check-label\" for=\"checkAllCheckbox\">{% trans 'Check all' %}</label>
              </div>
            </div>
            <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"Drop\" form=\"dbStatsForm\" title=\"{% trans 'Drop' %}\">
              {{ get_icon('db_drop', 'Drop'|trans) }}
            </button>
          </div>
        </div>
      {% endif %}

      <div class=\"ms-auto\">
        <div class=\"input-group\">
          <span class=\"input-group-text\">{{ get_image('b_search', 'Search'|trans) }}</span>
          <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"{% trans 'Search' %}\" aria-label=\"{% trans 'Search' %}\">
        </div>
      </div>
    </div>

    {{ get_list_navigator(
      database_count,
      pos,
      url_params,
      url('/server/databases'),
      'frame_content',
      max_db_list
    ) }}

    <form class=\"ajax\" action=\"{{ url('/server/databases') }}\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">
      {{ get_hidden_inputs(url_params) }}
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover w-auto\">
          <thead>
            <tr>
              {% if is_drop_allowed %}
                <th></th>
              {% endif %}
              <th>
                <a href=\"{{ url('/server/databases', url_params|merge({
                  'sort_by': 'SCHEMA_NAME',
                  'sort_order': url_params.sort_by == 'SCHEMA_NAME'
                  and url_params.sort_order == 'asc' ? 'desc' : 'asc'
                })) }}\">
                  {% trans 'Database' %}
                  {% if url_params.sort_by == 'SCHEMA_NAME' %}
                    {% if url_params.sort_order == 'asc' %}
                      {{ get_image('s_asc', 'Ascending'|trans) }}
                    {% else %}
                      {{ get_image('s_desc', 'Descending'|trans) }}
                    {% endif %}
                  {% endif %}
                </a>
              </th>

              <th>
                <a href=\"{{ url('/server/databases', url_params|merge({
                  'sort_by': 'DEFAULT_COLLATION_NAME',
                  'sort_order': url_params.sort_by == 'DEFAULT_COLLATION_NAME'
                    and url_params.sort_order == 'asc' ? 'desc' : 'asc'
                })) }}\">
                  {% trans 'Collation' %}
                  {% if url_params.sort_by == 'DEFAULT_COLLATION_NAME' %}
                    {% if url_params.sort_order == 'asc' %}
                      {{ get_image('s_asc', 'Ascending'|trans) }}
                    {% else %}
                      {{ get_image('s_desc', 'Descending'|trans) }}
                    {% endif %}
                  {% endif %}
                </a>
              </th>

              {% if has_statistics %}
                {% for name, statistic in header_statistics %}
                  <th{{ statistic.format == 'byte' ? ' colspan=\"2\"' }}>
                    <a href=\"{{ url('/server/databases', url_params|merge({
                      'sort_by': name,
                      'sort_order': url_params.sort_by == name
                      and url_params.sort_order == 'asc' ? 'desc' : 'asc'
                    })) }}\">
                      {{ statistic.title }}
                      {% if url_params.sort_by == name %}
                        {% if url_params.sort_order == 'asc' %}
                          {{ get_image('s_asc', 'Ascending'|trans) }}
                        {% else %}
                          {{ get_image('s_desc', 'Descending'|trans) }}
                        {% endif %}
                      {% endif %}
                    </a>
                  </th>
                {% endfor %}
              {% endif %}

              {% if has_primary_replication %}
                <th>{% trans 'Primary replication' %}</th>
              {% endif %}

              {% if has_replica_replication %}
                <th>{% trans 'Replica replication' %}</th>
              {% endif %}

              <th>{% trans 'Action' %}</th>
            </tr>
          </thead>

          <tbody>
            {% for database in databases %}
              <tr class=\"db-row{{ database.is_system_schema or database.is_pmadb ? ' noclick' }}\" data-filter-row=\"{{ database.name|upper }}\">
                {% if is_drop_allowed %}
                  <td class=\"tool\">
                    <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"
                      {{- database.name }}\" value=\"
                      {{- database.name }}\"
                      {{- database.is_system_schema or database.is_pmadb ? ' disabled' }}>
                  </td>
                {% endif %}

                <td class=\"name\">
                  <a href=\"{{ database.url }}\" title=\"
                    {{- \"Jump to database '%s'\"|trans|format(database.name) }}\">
                    {{ database.name }}
                  </a>
                </td>

                <td class=\"value\">
                  <dfn title=\"{{ database.collation.description }}\">
                    {{ database.collation.name }}
                  </dfn>
                </td>

                {% if has_statistics %}
                  {% for statistic in database.statistics %}
                    {% if statistic.format is same as('byte') %}
                      {% set value = format_byte_down(statistic.raw, 3, 1) %}
                      <td class=\"value\">
                        <data value=\"{{ statistic.raw }}\" title=\"{{ statistic.raw }}\">
                          {{ value[0] }}
                        </data>
                      </td>
                      <td class=\"unit\">{{ value[1] }}</td>
                    {% else %}
                      <td class=\"value\">
                        <data value=\"{{ statistic.raw }}\" title=\"{{ statistic.raw }}\">
                          {{ format_number(statistic.raw, 0) }}
                        </data>
                      </td>
                    {% endif %}
                  {% endfor %}
                {% endif %}

                {% if database.replication.primary.status %}
                  {% if database.replication.primary.is_replicated %}
                    <td class=\"tool text-center\">
                      {{ get_icon('s_success', 'Replicated'|trans) }}
                    </td>
                  {% else %}
                    <td class=\"tool text-center\">
                      {{ get_icon('s_cancel', 'Not replicated'|trans) }}
                    </td>
                  {% endif %}
                {% endif %}

                {% if database.replication.replica.status %}
                  {% if database.replication.replica.is_replicated %}
                    <td class=\"tool text-center\">
                      {{ get_icon('s_success', 'Replicated'|trans) }}
                    </td>
                  {% else %}
                    <td class=\"tool text-center\">
                      {{ get_icon('s_cancel', 'Not replicated'|trans) }}
                    </td>
                  {% endif %}
                {% endif %}

                <td class=\"tool\">
                  <a class=\"server_databases\" data=\"
                    {{- database.name }}\" href=\"{{ url('/database/privileges', {'db': database.name}) }}\" title=\"
                    {{- 'Check privileges for database \"%s\".'|trans|format(database.name) }}\">
                    {{ get_icon('s_rights', 'Check privileges'|trans) }}
                  </a>
                </td>
              </tr>
            {% endfor %}
          </tbody>

          <tfoot>
            <tr>
              <th colspan=\"{{ is_drop_allowed ? '3' : '2' }}\">
                {% trans 'Total:' %}
                <span id=\"filter-rows-count\">
                  {{- database_count -}}
                </span>
              </th>

              {% if has_statistics %}
                {% for statistic in total_statistics %}
                  {% if statistic.format is same as('byte') %}
                    {% set value = format_byte_down(statistic.raw, 3, 1) %}
                    <th class=\"value\">
                      <data value=\"{{ statistic.raw }}\" title=\"{{ statistic.raw }}\">
                        {{ value[0] }}
                      </data>
                    </th>
                    <th class=\"unit\">{{ value[1] }}</th>
                  {% else %}
                    <th class=\"value\">
                      <data value=\"{{ statistic.raw }}\" title=\"{{ statistic.raw }}\">
                        {{ format_number(statistic.raw, 0) }}
                      </data>
                    </th>
                  {% endif %}
                {% endfor %}
              {% endif %}

              {% if has_primary_replication %}
                <th></th>
              {% endif %}

              {% if has_replica_replication %}
                <th></th>
              {% endif %}

              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </form>

    {% if not has_statistics %}
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"alert alert-info\" role=\"alert\">
            {{ get_icon('s_notice', 'Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.'|trans) }}
          </div>
          <a class=\"card-link\" href=\"{{ url('/server/databases') }}\" data-post=\"{{ get_common({'statistics': '1'}, '', false) }}\" title=\"{% trans 'Enable statistics' %}\">
            {% trans 'Enable statistics' %}
          </a>
        </div>
      </div>
    {% endif %}
  {% else %}
    <div class=\"alert alert-primary my-3\" role=\"alert\">
      {{ get_icon('s_notice', 'No databases'|trans) }}
    </div>
  {% endif %}
</div>

{% if is_drop_allowed %}
  <div class=\"modal fade\" id=\"dropDatabaseModal\" tabindex=\"-1\" aria-labelledby=\"dropDatabaseModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"dropDatabaseModalLabel\">{% trans 'Confirm' %}</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Cancel' %}\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Cancel' %}</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"dropDatabaseModalDropButton\">{% trans 'Drop' %}</button>
        </div>
      </div>
    </div>
  </div>
{% endif %}
", "server/databases/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/databases/index.twig");
    }
}
