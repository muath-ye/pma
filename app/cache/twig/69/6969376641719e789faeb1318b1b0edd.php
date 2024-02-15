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

/* table/privileges/index.twig */
class __TwigTemplate_76d2fccdbf8531b43f0aa1913cb1883e extends Template
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
  ";
        // line 2
        if ((isset($context["is_superuser"]) || array_key_exists("is_superuser", $context) ? $context["is_superuser"] : (function () { throw new RuntimeError('Variable "is_superuser" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <h2>
      ";
            // line 4
            echo $this->env->getFunction('get_icon')->getCallable()("b_usrcheck");
            echo "
      ";
            // line 5
            echo twig_sprintf(_gettext("Users having access to \"%s\""), ((((((("<a href=\"" . (isset($context["table_url"]) || array_key_exists("table_url", $context) ? $context["table_url"] : (function () { throw new RuntimeError('Variable "table_url" does not exist.', 5, $this->source); })())) . $this->env->getFunction('get_common')->getCallable()(["db" =>             // line 6
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), "table" =>             // line 7
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 7, $this->source); })())], "&")) . "\">") . twig_escape_filter($this->env,             // line 8
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 8, $this->source); })()), "html")) . ".") . twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 8, $this->source); })()), "html")) . "</a>"));
            echo "
    </h2>

    <form id=\"usersForm\" action=\"";
            // line 11
            echo $this->env->getFunction('url')->getCallable()("/server/privileges");
            echo "\" class=\"card mb-3\">
      ";
            // line 12
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 12, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 12, $this->source); })()));
            echo "
      <div class=\"card-body\">
        <div class=\"table-responsive-md jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th>";
            // line 19
echo _gettext("User name");
            echo "</th>
                <th>";
            // line 20
echo _gettext("Host name");
            echo "</th>
                <th>";
            // line 21
echo _gettext("Type");
            echo "</th>
                <th>";
            // line 22
echo _gettext("Privileges");
            echo "</th>
                <th>";
            // line 23
echo _gettext("Grant");
            echo "</th>
                <th colspan=\"2\">";
            // line 24
echo _gettext("Action");
            echo "</th>
              </tr>
            </thead>

            <tbody>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 29, $this->source); })()));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 30
                echo "                ";
                $context["privileges_amount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 30));
                // line 31
                echo "                <tr>
                  <td";
                // line 32
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 32, $this->source); })()) > 1)) {
                    echo " class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 32, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 33), "html", null, true);
                echo "\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 34) . "&amp;#27;") . twig_get_attribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 34)), "html", null, true);
                echo "\">
                  </td>
                  <td";
                // line 36
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 36, $this->source); })()) > 1)) {
                    echo " class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 36, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                      <span class=\"text-danger\">";
echo _gettext("Any");
                    echo "</span>
                    ";
                } else {
                    // line 40
                    echo "                      ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 40), "html", null, true);
                    echo "
                    ";
                }
                // line 42
                echo "                  </td>
                  <td";
                // line 43
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 43, $this->source); })()) > 1)) {
                    echo " class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 43, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 44), "html", null, true);
                echo "
                  </td>
                  ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                    // line 47
                    echo "                    <td>
                      ";
                    // line 48
                    if ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 48) == "g")) {
                        // line 49
                        echo "                        ";
echo _gettext("global");
                        // line 50
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 50) == "d")) {
                        // line 51
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 51) == twig_replace_filter((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 51, $this->source); })()), ["_" => "\\_", "%" => "\\%"]))) {
                            // line 52
                            echo "                          ";
echo _gettext("database-specific");
                            // line 53
                            echo "                        ";
                        } else {
                            // line 54
                            echo "                          ";
echo _gettext("wildcard");
                            echo ": <code>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 54), "html", null, true);
                            echo "</code>
                        ";
                        }
                        // line 56
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 56) == "t")) {
                        // line 57
                        echo "                        ";
echo _gettext("table-specific");
                        // line 58
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 58) == "r")) {
                        // line 59
                        echo "                        ";
echo _gettext("routine");
                        // line 60
                        echo "                      ";
                    }
                    // line 61
                    echo "                    </td>
                    <td>
                      <code>
                        ";
                    // line 64
                    if ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 64) == "r")) {
                        // line 65
                        echo "                          ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 65), "html", null, true);
                        echo "
                          (";
                        // line 66
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 66), ", ")), "html", null, true);
                        echo ")
                        ";
                    } else {
                        // line 68
                        echo "                          ";
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 68), ", ");
                        echo "
                        ";
                    }
                    // line 70
                    echo "                      </code>
                    </td>
                    <td>
                      ";
                    // line 73
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["priv"], "has_grant", [], "any", false, false, false, 73)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "
                    </td>
                    <td>
                      ";
                    // line 76
                    if ((isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 76, $this->source); })())) {
                        // line 77
                        echo "                        <a class=\"edit_user_anchor\" href=\"";
                        echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                         // line 78
$context["privilege"], "user", [], "any", false, false, false, 78), "hostname" => twig_get_attribute($this->env, $this->source,                         // line 79
$context["privilege"], "host", [], "any", false, false, false, 79), "dbname" => (((twig_get_attribute($this->env, $this->source,                         // line 80
$context["priv"], "database", [], "any", false, false, false, 80) != "*")) ? (twig_get_attribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 80)) : ("")), "tablename" => (((twig_get_attribute($this->env, $this->source,                         // line 81
$context["priv"], "table", [], "any", true, true, false, 81) && (twig_get_attribute($this->env, $this->source, $context["priv"], "table", [], "any", false, false, false, 81) != "*"))) ? (twig_get_attribute($this->env, $this->source, $context["priv"], "table", [], "any", false, false, false, 81)) : ("")), "routinename" => (((twig_get_attribute($this->env, $this->source,                         // line 82
$context["priv"], "routine", [], "any", true, true, false, 82) &&  !(null === twig_get_attribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 82)))) ? (twig_get_attribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 82)) : (""))]);
                        // line 83
                        echo "\">
                          ";
                        // line 84
                        echo $this->env->getFunction('get_icon')->getCallable()("b_usredit", _gettext("Edit privileges"));
                        echo "
                        </a>
                      ";
                    }
                    // line 87
                    echo "                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"";
                    // line 89
                    echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                     // line 90
$context["privilege"], "user", [], "any", false, false, false, 90), "hostname" => twig_get_attribute($this->env, $this->source,                     // line 91
$context["privilege"], "host", [], "any", false, false, false, 91), "export" => true, "initial" => ""]);
                    // line 94
                    echo "\">
                        ";
                    // line 95
                    echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
                    echo "
                      </a>
                    </td>
                  </tr>
                  ";
                    // line 99
                    if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 99, $this->source); })()) > 1)) {
                        // line 100
                        echo "                    <tr class=\"noclick\">
                  ";
                    }
                    // line 102
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "              ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 104
                echo "                <tr>
                  <td colspan=\"7\">
                    ";
                // line 106
echo _gettext("No user found.");
                // line 107
                echo "                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            </tbody>
          </table>
        </div>

        <div>
          ";
            // line 115
            echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 115, $this->source); })()), "width" => "38", "height" => "22"]);
            echo "
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
            // line 116
echo _gettext("Check all");
            echo "\">
          <label for=\"usersForm_checkall\">";
            // line 117
echo _gettext("Check all");
            echo "</label>
          <em class=\"with-selected\">";
            // line 118
echo _gettext("With selected:");
            echo "</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
            // line 119
echo _gettext("Export");
            echo "\">
            ";
            // line 120
            echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
            echo "
          </button>
        </div>
      </div>
    </form>
  ";
        } else {
            // line 126
            echo "    ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view users."));
            echo "
  ";
        }
        // line 128
        echo "
  ";
        // line 129
        if ((isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 129, $this->source); })())) {
            // line 130
            echo "    <div>
      <a class=\"btn btn-primary\" id=\"add_user_anchor\" href=\"";
            // line 131
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["adduser" => true, "dbname" =>             // line 133
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 133, $this->source); })()), "tablename" =>             // line 134
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 134, $this->source); })())]);
            // line 135
            echo "\">
        ";
            // line 136
            echo $this->env->getFunction('get_icon')->getCallable()("b_usradd", _gettext("Add user account"));
            echo "
      </a>
    </div>
  ";
        }
        // line 140
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/privileges/index.twig";
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
        return array (  399 => 140,  392 => 136,  389 => 135,  387 => 134,  386 => 133,  385 => 131,  382 => 130,  380 => 129,  377 => 128,  371 => 126,  362 => 120,  358 => 119,  354 => 118,  350 => 117,  346 => 116,  342 => 115,  335 => 110,  327 => 107,  325 => 106,  321 => 104,  308 => 103,  302 => 102,  298 => 100,  296 => 99,  289 => 95,  286 => 94,  284 => 91,  283 => 90,  282 => 89,  278 => 87,  272 => 84,  269 => 83,  267 => 82,  266 => 81,  265 => 80,  264 => 79,  263 => 78,  261 => 77,  259 => 76,  253 => 73,  248 => 70,  242 => 68,  237 => 66,  232 => 65,  230 => 64,  225 => 61,  222 => 60,  219 => 59,  216 => 58,  213 => 57,  210 => 56,  202 => 54,  199 => 53,  196 => 52,  193 => 51,  190 => 50,  187 => 49,  185 => 48,  182 => 47,  178 => 46,  173 => 44,  165 => 43,  162 => 42,  156 => 40,  150 => 38,  148 => 37,  140 => 36,  135 => 34,  132 => 33,  124 => 32,  121 => 31,  118 => 30,  100 => 29,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  62 => 12,  58 => 11,  52 => 8,  51 => 7,  50 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  {% if is_superuser %}
    <h2>
      {{ get_icon('b_usrcheck') }}
      {{ 'Users having access to \"%s\"'|trans|format('<a href=\"' ~ table_url ~ get_common({
        'db': db,
        'table': table
      }, '&') ~ '\">' ~ db|escape('html') ~ '.' ~ table|escape('html') ~ '</a>')|raw }}
    </h2>

    <form id=\"usersForm\" action=\"{{ url('/server/privileges') }}\" class=\"card mb-3\">
      {{ get_hidden_inputs(db, table) }}
      <div class=\"card-body\">
        <div class=\"table-responsive-md jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th>{% trans 'User name' %}</th>
                <th>{% trans 'Host name' %}</th>
                <th>{% trans 'Type' %}</th>
                <th>{% trans 'Privileges' %}</th>
                <th>{% trans 'Grant' %}</th>
                <th colspan=\"2\">{% trans 'Action' %}</th>
              </tr>
            </thead>

            <tbody>
              {% for privilege in privileges %}
                {% set privileges_amount = privilege.privileges|length %}
                <tr>
                  <td{% if privileges_amount > 1 %} class=\"align-middle\" rowspan=\"{{ privileges_amount }}\"{% endif %}>
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_{{ loop.index0 }}\" value=\"
                      {{- privilege.user ~ '&amp;#27;' ~ privilege.host }}\">
                  </td>
                  <td{% if privileges_amount > 1 %} class=\"align-middle\" rowspan=\"{{ privileges_amount }}\"{% endif %}>
                    {% if privilege.user is empty %}
                      <span class=\"text-danger\">{% trans 'Any' %}</span>
                    {% else %}
                      {{ privilege.user }}
                    {% endif %}
                  </td>
                  <td{% if privileges_amount > 1 %} class=\"align-middle\" rowspan=\"{{ privileges_amount }}\"{% endif %}>
                    {{ privilege.host }}
                  </td>
                  {% for priv in privilege.privileges %}
                    <td>
                      {% if priv.type == 'g' %}
                        {% trans 'global' %}
                      {% elseif priv.type == 'd' %}
                        {% if priv.database == db|replace({'_': '\\\\_', '%': '\\\\%'}) %}
                          {% trans 'database-specific' %}
                        {% else %}
                          {% trans 'wildcard' %}: <code>{{ priv.database }}</code>
                        {% endif %}
                      {% elseif priv.type == 't' %}
                        {% trans 'table-specific' %}
                      {% elseif priv.type == 'r' %}
                        {% trans 'routine' %}
                      {% endif %}
                    </td>
                    <td>
                      <code>
                        {% if priv.type == 'r' %}
                          {{ priv.routine }}
                          ({{ priv.privileges|join(', ')|upper }})
                        {% else %}
                          {{ priv.privileges|join(', ')|raw }}
                        {% endif %}
                      </code>
                    </td>
                    <td>
                      {{ priv.has_grant ? 'Yes'|trans : 'No'|trans }}
                    </td>
                    <td>
                      {% if is_grantuser %}
                        <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
                          'username': privilege.user,
                          'hostname': privilege.host,
                          'dbname': priv.database != '*' ? priv.database,
                          'tablename': priv.table is defined and priv.table != '*' ? priv.table,
                          'routinename': priv.routine ?? ''
                        }) }}\">
                          {{ get_icon('b_usredit', 'Edit privileges'|trans) }}
                        </a>
                      {% endif %}
                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"{{ url('/server/privileges', {
                        'username': privilege.user,
                        'hostname': privilege.host,
                        'export': true,
                        'initial': ''
                      }) }}\">
                        {{ get_icon('b_tblexport', 'Export'|trans) }}
                      </a>
                    </td>
                  </tr>
                  {% if privileges_amount > 1 %}
                    <tr class=\"noclick\">
                  {% endif %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"7\">
                    {% trans 'No user found.' %}
                  </td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>

        <div>
          {{ get_image('select_all_arrow', 'With selected:'|trans, {'dir': text_dir, 'width': '38', 'height': '22'}) }}
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"{% trans 'Check all' %}\">
          <label for=\"usersForm_checkall\">{% trans 'Check all' %}</label>
          <em class=\"with-selected\">{% trans 'With selected:' %}</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"{% trans 'Export' %}\">
            {{ get_icon('b_tblexport', 'Export'|trans) }}
          </button>
        </div>
      </div>
    </form>
  {% else %}
    {{ 'Not enough privilege to view users.'|trans|error }}
  {% endif %}

  {% if is_createuser %}
    <div>
      <a class=\"btn btn-primary\" id=\"add_user_anchor\" href=\"{{ url('/server/privileges', {
        'adduser': true,
        'dbname': db,
        'tablename': table
      }) }}\">
        {{ get_icon('b_usradd', 'Add user account'|trans) }}
      </a>
    </div>
  {% endif %}
</div>
", "table/privileges/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/privileges/index.twig");
    }
}
