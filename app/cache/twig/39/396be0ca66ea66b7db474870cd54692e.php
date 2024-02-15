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

/* database/privileges/index.twig */
class __TwigTemplate_2ac9fe74a06db8fa37bac32d6be54ec9 extends Template
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
            echo twig_sprintf(_gettext("Users having access to \"%s\""), ((((("<a href=\"" . (isset($context["database_url"]) || array_key_exists("database_url", $context) ? $context["database_url"] : (function () { throw new RuntimeError('Variable "database_url" does not exist.', 5, $this->source); })())) . $this->env->getFunction('get_common')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 5, $this->source); })())], "&")) . "\">") . twig_escape_filter($this->env, (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 5, $this->source); })()), "html")) . "</a>"));
            echo "
    </h2>

    <form id=\"usersForm\" action=\"";
            // line 8
            echo $this->env->getFunction('url')->getCallable()("/server/privileges");
            echo "\" class=\"card mb-3\">
      ";
            // line 9
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 9, $this->source); })()));
            echo "

      <div class=\"card-body\">
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th scope=\"col\">";
            // line 17
echo _gettext("User name");
            echo "</th>
                <th scope=\"col\">";
            // line 18
echo _gettext("Host name");
            echo "</th>
                <th scope=\"col\">";
            // line 19
echo _gettext("Type");
            echo "</th>
                <th scope=\"col\">";
            // line 20
echo _gettext("Privileges");
            echo "</th>
                <th scope=\"col\">";
            // line 21
echo _gettext("Grant");
            echo "</th>
                <th scope=\"col\" colspan=\"2\">";
            // line 22
echo _gettext("Action");
            echo "</th>
              </tr>
            </thead>

            <tbody>
              ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 27, $this->source); })()));
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
                // line 28
                echo "                ";
                $context["privileges_amount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 28));
                // line 29
                echo "                <tr>
                  <td";
                // line 30
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 30, $this->source); })()) > 1)) {
                    echo " class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 30, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31), "html", null, true);
                echo "\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 32) . "&amp;#27;") . twig_get_attribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 32)), "html", null, true);
                echo "\">
                  </td>
                  <td";
                // line 34
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 34, $this->source); })()) > 1)) {
                    echo " class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 34, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 35
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                      <span class=\"text-danger\">";
echo _gettext("Any");
                    echo "</span>
                    ";
                } else {
                    // line 38
                    echo "                      ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                    ";
                }
                // line 40
                echo "                  </td>
                  <td";
                // line 41
                if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 41, $this->source); })()) > 1)) {
                    echo " class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 41, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 42), "html", null, true);
                echo "
                  </td>
                  ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                    // line 45
                    echo "                    <td>
                      ";
                    // line 46
                    if ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 46) == "g")) {
                        // line 47
                        echo "                        ";
echo _gettext("global");
                        // line 48
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 48) == "d")) {
                        // line 49
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 49) == twig_replace_filter((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 49, $this->source); })()), ["_" => "\\_", "%" => "\\%"]))) {
                            // line 50
                            echo "                          ";
echo _gettext("database-specific");
                            // line 51
                            echo "                        ";
                        } else {
                            // line 52
                            echo "                          ";
echo _gettext("wildcard");
                            echo ": <code>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 52), "html", null, true);
                            echo "</code>
                        ";
                        }
                        // line 54
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 54) == "r")) {
                        // line 55
                        echo "                        ";
echo _gettext("routine");
                        // line 56
                        echo "                      ";
                    }
                    // line 57
                    echo "                    </td>
                    <td>
                      <code>
                        ";
                    // line 60
                    if ((twig_get_attribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 60) == "r")) {
                        // line 61
                        echo "                          ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 61), "html", null, true);
                        echo "
                          (";
                        // line 62
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 62), ", ")), "html", null, true);
                        echo ")
                        ";
                    } else {
                        // line 64
                        echo "                          ";
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 64), ", ");
                        echo "
                        ";
                    }
                    // line 66
                    echo "                      </code>
                    </td>
                    <td>
                      ";
                    // line 69
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["priv"], "has_grant", [], "any", false, false, false, 69)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "
                    </td>
                    <td>
                      ";
                    // line 72
                    if ((isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 72, $this->source); })())) {
                        // line 73
                        echo "                        <a class=\"edit_user_anchor\" href=\"";
                        echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                         // line 74
$context["privilege"], "user", [], "any", false, false, false, 74), "hostname" => twig_get_attribute($this->env, $this->source,                         // line 75
$context["privilege"], "host", [], "any", false, false, false, 75), "dbname" => (((twig_get_attribute($this->env, $this->source,                         // line 76
$context["priv"], "database", [], "any", false, false, false, 76) != "*")) ? (twig_get_attribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 76)) : ("")), "tablename" => "", "routinename" => (((twig_get_attribute($this->env, $this->source,                         // line 78
$context["priv"], "routine", [], "any", true, true, false, 78) &&  !(null === twig_get_attribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 78)))) ? (twig_get_attribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 78)) : (""))]);
                        // line 79
                        echo "\">
                          ";
                        // line 80
                        echo $this->env->getFunction('get_icon')->getCallable()("b_usredit", _gettext("Edit privileges"));
                        echo "
                        </a>
                      ";
                    }
                    // line 83
                    echo "                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"";
                    // line 85
                    echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                     // line 86
$context["privilege"], "user", [], "any", false, false, false, 86), "hostname" => twig_get_attribute($this->env, $this->source,                     // line 87
$context["privilege"], "host", [], "any", false, false, false, 87), "export" => true, "initial" => ""]);
                    // line 90
                    echo "\">
                        ";
                    // line 91
                    echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
                    echo "
                      </a>
                    </td>
                  </tr>
                  ";
                    // line 95
                    if (((isset($context["privileges_amount"]) || array_key_exists("privileges_amount", $context) ? $context["privileges_amount"] : (function () { throw new RuntimeError('Variable "privileges_amount" does not exist.', 95, $this->source); })()) > 1)) {
                        // line 96
                        echo "                    <tr class=\"noclick\">
                  ";
                    }
                    // line 98
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
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
                // line 100
                echo "                <tr>
                  <td colspan=\"7\">
                    ";
                // line 102
echo _gettext("No user found.");
                // line 103
                echo "                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            </tbody>
          </table>
        </div>

        <div>
          ";
            // line 111
            echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 111, $this->source); })()), "width" => "38", "height" => "22"]);
            echo "
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
            // line 112
echo _gettext("Check all");
            echo "\">
          <label for=\"usersForm_checkall\">";
            // line 113
echo _gettext("Check all");
            echo "</label>
          <em class=\"with-selected\">";
            // line 114
echo _gettext("With selected:");
            echo "</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
            // line 115
echo _gettext("Export");
            echo "\">
            ";
            // line 116
            echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
            echo "
          </button>
        </div>
      </div>
    </form>
  ";
        } else {
            // line 122
            echo "    ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view users."));
            echo "
  ";
        }
        // line 124
        echo "
  ";
        // line 125
        if ((isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 125, $this->source); })())) {
            // line 126
            echo "    <div>
      <a class=\"btn btn-primary\" id=\"add_user_anchor\" href=\"";
            // line 127
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["adduser" => true, "dbname" =>             // line 129
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 129, $this->source); })())]);
            // line 130
            echo "\">
        ";
            // line 131
            echo $this->env->getFunction('get_icon')->getCallable()("b_usradd", _gettext("Add user account"));
            echo "
      </a>
    </div>
  ";
        }
        // line 135
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/privileges/index.twig";
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
        return array (  389 => 135,  382 => 131,  379 => 130,  377 => 129,  376 => 127,  373 => 126,  371 => 125,  368 => 124,  362 => 122,  353 => 116,  349 => 115,  345 => 114,  341 => 113,  337 => 112,  333 => 111,  326 => 106,  318 => 103,  316 => 102,  312 => 100,  299 => 99,  293 => 98,  289 => 96,  287 => 95,  280 => 91,  277 => 90,  275 => 87,  274 => 86,  273 => 85,  269 => 83,  263 => 80,  260 => 79,  258 => 78,  257 => 76,  256 => 75,  255 => 74,  253 => 73,  251 => 72,  245 => 69,  240 => 66,  234 => 64,  229 => 62,  224 => 61,  222 => 60,  217 => 57,  214 => 56,  211 => 55,  208 => 54,  200 => 52,  197 => 51,  194 => 50,  191 => 49,  188 => 48,  185 => 47,  183 => 46,  180 => 45,  176 => 44,  171 => 42,  163 => 41,  160 => 40,  154 => 38,  148 => 36,  146 => 35,  138 => 34,  133 => 32,  130 => 31,  122 => 30,  119 => 29,  116 => 28,  98 => 27,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  59 => 9,  55 => 8,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  {% if is_superuser %}
    <h2>
      {{ get_icon('b_usrcheck') }}
      {{ 'Users having access to \"%s\"'|trans|format('<a href=\"' ~ database_url ~ get_common({'db': db}, '&') ~ '\">' ~ db|escape('html') ~ '</a>')|raw }}
    </h2>

    <form id=\"usersForm\" action=\"{{ url('/server/privileges') }}\" class=\"card mb-3\">
      {{ get_hidden_inputs(db) }}

      <div class=\"card-body\">
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th scope=\"col\">{% trans 'User name' %}</th>
                <th scope=\"col\">{% trans 'Host name' %}</th>
                <th scope=\"col\">{% trans 'Type' %}</th>
                <th scope=\"col\">{% trans 'Privileges' %}</th>
                <th scope=\"col\">{% trans 'Grant' %}</th>
                <th scope=\"col\" colspan=\"2\">{% trans 'Action' %}</th>
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
                          'tablename': '',
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
        'dbname': db
      }) }}\">
        {{ get_icon('b_usradd', 'Add user account'|trans) }}
      </a>
    </div>
  {% endif %}
</div>
", "database/privileges/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/privileges/index.twig");
    }
}
