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

/* server/privileges/users_overview.twig */
class __TwigTemplate_383506b4d5e2ef8bb1415735023741bf extends Template
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
        echo "<form name=\"usersForm\" id=\"usersForm\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" method=\"post\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
  <div class=\"table-responsive\">
    <table id=\"userRightsTable\" class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th></th>
          <th scope=\"col\">";
        // line 8
echo _gettext("User name");
        echo "</th>
          <th scope=\"col\">";
        // line 9
echo _gettext("Host name");
        echo "</th>
          <th scope=\"col\">";
        // line 10
echo _gettext("Password");
        echo "</th>
          <th scope=\"col\">
            ";
        // line 12
echo _gettext("Global privileges");
        // line 13
        echo "            ";
        echo $this->env->getFunction('show_hint')->getCallable()("Note: MySQL privilege names are expressed in English.");
        echo "
          </th>
          ";
        // line 15
        if ((isset($context["menus_work"]) || array_key_exists("menus_work", $context) ? $context["menus_work"] : (function () { throw new RuntimeError('Variable "menus_work" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "            <th scope=\"col\">";
echo _gettext("User group");
            echo "</th>
          ";
        }
        // line 18
        echo "          <th scope=\"col\">";
echo _gettext("Grant");
        echo "</th>";
        // line 19
        $context["action_colspan"] = 2;
        // line 20
        if (((isset($context["user_group_count"]) || array_key_exists("user_group_count", $context) ? $context["user_group_count"] : (function () { throw new RuntimeError('Variable "user_group_count" does not exist.', 20, $this->source); })()) > 0)) {
            $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 20, $this->source); })()) + 1);
        }
        // line 21
        if ((isset($context["has_account_locking"]) || array_key_exists("has_account_locking", $context) ? $context["has_account_locking"] : (function () { throw new RuntimeError('Variable "has_account_locking" does not exist.', 21, $this->source); })())) {
            $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 21, $this->source); })()) + 1);
        }
        // line 22
        echo "          <th scope=\"col\" colspan=\"";
        echo twig_escape_filter($this->env, (isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">";
echo _gettext("Action");
        echo "</th>
        </tr>
      </thead>

      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hosts"]) || array_key_exists("hosts", $context) ? $context["hosts"] : (function () { throw new RuntimeError('Variable "hosts" does not exist.', 27, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
            // line 28
            echo "          <tr>
            <td>
              <input type=\"checkbox\" class=\"checkall\" id=\"checkbox_sel_users_";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 31) . "&amp;#27;") . twig_get_attribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" name=\"selected_usr[]\">
            </td>
            <td>
              <label for=\"checkbox_sel_users_";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                ";
            // line 35
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 35))) {
                // line 36
                echo "                  <span class=\"text-danger\">";
echo _gettext("Any");
                echo "</span>
                ";
            } else {
                // line 38
                echo "                 <a class=\"edit_user_anchor\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                 // line 39
$context["host"], "user", [], "any", false, false, false, 39), "hostname" => twig_get_attribute($this->env, $this->source,                 // line 40
$context["host"], "host", [], "any", false, false, false, 40), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 44
                echo "\">
                 ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 45), "html", null, true);
                echo "
                 </a>
                ";
            }
            // line 48
            echo "              </label>
            </td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["host"], "has_password", [], "any", false, false, false, 52)) {
                // line 53
                echo "                ";
echo _gettext("Yes");
                // line 54
                echo "              ";
            } else {
                // line 55
                echo "                <span class=\"text-danger\">";
echo _gettext("No");
                echo "</span>
              ";
            }
            // line 57
            echo "              ";
            echo (( !twig_get_attribute($this->env, $this->source, $context["host"], "has_select_priv", [], "any", false, false, false, 57)) ? ($this->env->getFunction('show_hint')->getCallable()(_gettext("The selected user was not found in the privilege table."))) : (""));
            echo "
            </td>
            <td>
              <code>";
            // line 60
            echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["host"], "privileges", [], "any", false, false, false, 60), ", ");
            echo "</code>
            </td>
            ";
            // line 62
            if ((isset($context["menus_work"]) || array_key_exists("menus_work", $context) ? $context["menus_work"] : (function () { throw new RuntimeError('Variable "menus_work" does not exist.', 62, $this->source); })())) {
                // line 63
                echo "              <td class=\"usrGroup\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "group", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
            ";
            }
            // line 65
            echo "            <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["host"], "has_grant", [], "any", false, false, false, 65)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
            ";
            // line 66
            if ((isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 66, $this->source); })())) {
                // line 67
                echo "              <td class=\"text-center\">
                <a class=\"edit_user_anchor\" href=\"";
                // line 68
                echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                 // line 69
$context["host"], "user", [], "any", false, false, false, 69), "hostname" => twig_get_attribute($this->env, $this->source,                 // line 70
$context["host"], "host", [], "any", false, false, false, 70), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 74
                echo "\">
                  ";
                // line 75
                echo $this->env->getFunction('get_icon')->getCallable()("b_usredit", _gettext("Edit privileges"));
                echo "
                </a>
              </td>
            ";
            }
            // line 79
            echo "            ";
            if (((isset($context["menus_work"]) || array_key_exists("menus_work", $context) ? $context["menus_work"] : (function () { throw new RuntimeError('Variable "menus_work" does not exist.', 79, $this->source); })()) && ((isset($context["user_group_count"]) || array_key_exists("user_group_count", $context) ? $context["user_group_count"] : (function () { throw new RuntimeError('Variable "user_group_count" does not exist.', 79, $this->source); })()) > 0))) {
                // line 80
                echo "              <td class=\"text-center\">
                ";
                // line 81
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "                  <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 82), "html", null, true);
                    echo "\">
                    ";
                    // line 83
                    echo $this->env->getFunction('get_icon')->getCallable()("b_usrlist", _gettext("Edit user group"));
                    echo "
                  </button>
                ";
                }
                // line 86
                echo "              </td>
            ";
            }
            // line 88
            echo "            <td class=\"text-center\">
              <a class=\"export_user_anchor ajax\" href=\"";
            // line 89
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,             // line 90
$context["host"], "user", [], "any", false, false, false, 90), "hostname" => twig_get_attribute($this->env, $this->source,             // line 91
$context["host"], "host", [], "any", false, false, false, 91), "initial" =>             // line 92
(isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 92, $this->source); })()), "export" => true]);
            // line 94
            echo "\">
                ";
            // line 95
            echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
            echo "
              </a>
            </td>
            ";
            // line 98
            if ((isset($context["has_account_locking"]) || array_key_exists("has_account_locking", $context) ? $context["has_account_locking"] : (function () { throw new RuntimeError('Variable "has_account_locking" does not exist.', 98, $this->source); })())) {
                // line 99
                echo "              <td>
                <button type=\"button\" class=\"btn btn-link p-0 jsAccountLocking\" title=\"";
                // line 100
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) ? (_gettext("Unlock this account.")) : (_gettext("Lock this account."))), "html", null, true);
                echo "\" data-is-locked=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) ? ("true") : ("false"));
                echo "\" data-user-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 100), "html", null, true);
                echo "\" data-host-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 100), "html", null, true);
                echo "\">
                  ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "                    ";
                    ob_start();
echo _pgettext("Unlock the account.", "Unlock");
                    $context["unlock_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 103
                    echo "                    ";
                    echo $this->env->getFunction('get_icon')->getCallable()("s_unlock", twig_escape_filter($this->env, (isset($context["unlock_text"]) || array_key_exists("unlock_text", $context) ? $context["unlock_text"] : (function () { throw new RuntimeError('Variable "unlock_text" does not exist.', 103, $this->source); })())));
                    echo "
                  ";
                } else {
                    // line 105
                    echo "                    ";
                    ob_start();
echo _pgettext("Lock the account.", "Lock");
                    $context["lock_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 106
                    echo "                    ";
                    echo $this->env->getFunction('get_icon')->getCallable()("s_lock", twig_escape_filter($this->env, (isset($context["lock_text"]) || array_key_exists("lock_text", $context) ? $context["lock_text"] : (function () { throw new RuntimeError('Variable "lock_text" does not exist.', 106, $this->source); })())));
                    echo "
                  ";
                }
                // line 108
                echo "                </button>
              </td>
            ";
            }
            // line 111
            echo "          </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "      </tbody>
    </table>
  </div>

  <div class=\"float-start row\">
    <div class=\"col-12\">
      ";
        // line 119
        echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 119, $this->source); })()), "width" => "38", "height" => "22"]);
        echo "
      <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
        // line 120
echo _gettext("Check all");
        echo "\">
      <label for=\"usersForm_checkall\">";
        // line 121
echo _gettext("Check all");
        echo "</label>
      <em class=\"with-selected\">";
        // line 122
echo _gettext("With selected:");
        echo "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
        // line 124
echo _gettext("Export");
        echo "\">
        ";
        // line 125
        echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
        echo "
      </button>

      <input type=\"hidden\" name=\"initial\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 128, $this->source); })()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"clearfloat\"></div>

  ";
        // line 134
        if ((isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 134, $this->source); })())) {
            // line 135
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 136
echo _pgettext("Create new user", "New");
            echo "</div>
      <div class=\"card-body\">
        <a id=\"add_user_anchor\" href=\"";
            // line 138
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["adduser" => true]);
            echo "\">
          ";
            // line 139
            echo $this->env->getFunction('get_icon')->getCallable()("b_usradd", _gettext("Add user account"));
            echo "
        </a>
      </div>
    </div>
  ";
        }
        // line 144
        echo "
  <div id=\"deleteUserCard\" class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 146
        echo $this->env->getFunction('get_icon')->getCallable()("b_usrdrop", _gettext("Remove selected user accounts"));
        echo "</div>
    <div class=\"card-body\">
      <p class=\"card-text\">";
        // line 148
echo _gettext("Revoke all active privileges from the users and delete them afterwards.");
        echo "</p>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"dropUsersDbCheckbox\" name=\"drop_users_db\">
        <label class=\"form-check-label\" for=\"dropUsersDbCheckbox\">
          ";
        // line 152
echo _gettext("Drop the databases that have the same names as the users.");
        // line 153
        echo "        </label>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input type=\"hidden\" name=\"mode\" value=\"2\">
      <input id=\"buttonGo\" class=\"btn btn-primary ajax\" type=\"submit\" name=\"delete\" value=\"";
        // line 158
echo _gettext("Go");
        echo "\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"editUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"editUserGroupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"editUserGroupModalLabel\">";
        // line 167
echo _gettext("Edit user group");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 168
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
        // line 172
echo _gettext("Loading…");
        echo "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 176
echo _gettext("Close");
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editUserGroupModalSaveButton\">";
        // line 177
echo _gettext("Save changes");
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
        return "server/privileges/users_overview.twig";
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
        return array (  452 => 177,  448 => 176,  441 => 172,  434 => 168,  430 => 167,  418 => 158,  411 => 153,  409 => 152,  402 => 148,  397 => 146,  393 => 144,  385 => 139,  381 => 138,  376 => 136,  373 => 135,  371 => 134,  362 => 128,  356 => 125,  352 => 124,  347 => 122,  343 => 121,  339 => 120,  335 => 119,  327 => 113,  312 => 111,  307 => 108,  301 => 106,  296 => 105,  290 => 103,  285 => 102,  283 => 101,  273 => 100,  270 => 99,  268 => 98,  262 => 95,  259 => 94,  257 => 92,  256 => 91,  255 => 90,  254 => 89,  251 => 88,  247 => 86,  241 => 83,  236 => 82,  234 => 81,  231 => 80,  228 => 79,  221 => 75,  218 => 74,  216 => 70,  215 => 69,  214 => 68,  211 => 67,  209 => 66,  204 => 65,  198 => 63,  196 => 62,  191 => 60,  184 => 57,  178 => 55,  175 => 54,  172 => 53,  170 => 52,  165 => 50,  161 => 48,  155 => 45,  152 => 44,  150 => 40,  149 => 39,  147 => 38,  141 => 36,  139 => 35,  135 => 34,  129 => 31,  126 => 30,  122 => 28,  105 => 27,  94 => 22,  90 => 21,  86 => 20,  84 => 19,  80 => 18,  74 => 16,  72 => 15,  66 => 13,  64 => 12,  59 => 10,  55 => 9,  51 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form name=\"usersForm\" id=\"usersForm\" action=\"{{ url('/server/privileges') }}\" method=\"post\">
  {{ get_hidden_inputs() }}
  <div class=\"table-responsive\">
    <table id=\"userRightsTable\" class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th></th>
          <th scope=\"col\">{% trans 'User name' %}</th>
          <th scope=\"col\">{% trans 'Host name' %}</th>
          <th scope=\"col\">{% trans 'Password' %}</th>
          <th scope=\"col\">
            {% trans 'Global privileges' %}
            {{ show_hint('Note: MySQL privilege names are expressed in English.') }}
          </th>
          {% if menus_work %}
            <th scope=\"col\">{% trans 'User group' %}</th>
          {% endif %}
          <th scope=\"col\">{% trans 'Grant' %}</th>
          {%- set action_colspan = 2 %}
          {%- if user_group_count > 0 %}{% set action_colspan = action_colspan + 1 %}{% endif %}
          {%- if has_account_locking %}{% set action_colspan = action_colspan + 1 %}{% endif %}
          <th scope=\"col\" colspan=\"{{ action_colspan }}\">{% trans 'Action' %}</th>
        </tr>
      </thead>

      <tbody>
        {% for host in hosts %}
          <tr>
            <td>
              <input type=\"checkbox\" class=\"checkall\" id=\"checkbox_sel_users_{{ loop.index }}\" value=\"
                {{- host.user ~ '&amp;#27;' ~ host.host }}\" name=\"selected_usr[]\">
            </td>
            <td>
              <label for=\"checkbox_sel_users_{{ loop.index }}\">
                {% if host.user is empty %}
                  <span class=\"text-danger\">{% trans 'Any' %}</span>
                {% else %}
                 <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
                  'username': host.user,
                  'hostname': host.host,
                  'dbname': '',
                  'tablename': '',
                  'routinename': '',
                }) }}\">
                 {{ host.user }}
                 </a>
                {% endif %}
              </label>
            </td>
            <td>{{ host.host }}</td>
            <td>
              {% if host.has_password %}
                {% trans 'Yes' %}
              {% else %}
                <span class=\"text-danger\">{% trans 'No' %}</span>
              {% endif %}
              {{ not host.has_select_priv ? show_hint('The selected user was not found in the privilege table.'|trans) }}
            </td>
            <td>
              <code>{{ host.privileges|join(', ')|raw }}</code>
            </td>
            {% if menus_work %}
              <td class=\"usrGroup\">{{ host.group }}</td>
            {% endif %}
            <td>{{ host.has_grant ? 'Yes'|trans : 'No'|trans }}</td>
            {% if is_grantuser %}
              <td class=\"text-center\">
                <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
                  'username': host.user,
                  'hostname': host.host,
                  'dbname': '',
                  'tablename': '',
                  'routinename': '',
                }) }}\">
                  {{ get_icon('b_usredit', 'Edit privileges'|trans) }}
                </a>
              </td>
            {% endif %}
            {% if menus_work and user_group_count > 0 %}
              <td class=\"text-center\">
                {% if host.user is not empty %}
                  <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"{{ host.user }}\">
                    {{ get_icon('b_usrlist', 'Edit user group'|trans) }}
                  </button>
                {% endif %}
              </td>
            {% endif %}
            <td class=\"text-center\">
              <a class=\"export_user_anchor ajax\" href=\"{{ url('/server/privileges', {
                'username': host.user,
                'hostname': host.host,
                'initial': initial,
                'export': true,
              }) }}\">
                {{ get_icon('b_tblexport', 'Export'|trans) }}
              </a>
            </td>
            {% if has_account_locking %}
              <td>
                <button type=\"button\" class=\"btn btn-link p-0 jsAccountLocking\" title=\"{{ host.is_account_locked ? 'Unlock this account.'|trans : 'Lock this account.'|trans }}\" data-is-locked=\"{{ host.is_account_locked ? 'true' : 'false' }}\" data-user-name=\"{{ host.user }}\" data-host-name=\"{{ host.host }}\">
                  {% if host.is_account_locked %}
                    {% set unlock_text %}{% trans %}Unlock{% context %}Unlock the account.{% endtrans %}{% endset %}
                    {{ get_icon('s_unlock', unlock_text|e) }}
                  {% else %}
                    {% set lock_text %}{% trans %}Lock{% context %}Lock the account.{% endtrans %}{% endset %}
                    {{ get_icon('s_lock', lock_text|e) }}
                  {% endif %}
                </button>
              </td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>

  <div class=\"float-start row\">
    <div class=\"col-12\">
      {{ get_image('select_all_arrow', 'With selected:'|trans, {'dir': text_dir, 'width': '38', 'height': '22'}) }}
      <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"{% trans 'Check all' %}\">
      <label for=\"usersForm_checkall\">{% trans 'Check all' %}</label>
      <em class=\"with-selected\">{% trans 'With selected:' %}</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"{% trans 'Export' %}\">
        {{ get_icon('b_tblexport', 'Export'|trans) }}
      </button>

      <input type=\"hidden\" name=\"initial\" value=\"{{ initial }}\">
    </div>
  </div>

  <div class=\"clearfloat\"></div>

  {% if is_createuser %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">{% trans %}New{% context %}Create new user{% endtrans %}</div>
      <div class=\"card-body\">
        <a id=\"add_user_anchor\" href=\"{{ url('/server/privileges', {'adduser': true}) }}\">
          {{ get_icon('b_usradd', 'Add user account'|trans) }}
        </a>
      </div>
    </div>
  {% endif %}

  <div id=\"deleteUserCard\" class=\"card mb-3\">
    <div class=\"card-header\">{{ get_icon('b_usrdrop', 'Remove selected user accounts'|trans) }}</div>
    <div class=\"card-body\">
      <p class=\"card-text\">{% trans 'Revoke all active privileges from the users and delete them afterwards.' %}</p>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"dropUsersDbCheckbox\" name=\"drop_users_db\">
        <label class=\"form-check-label\" for=\"dropUsersDbCheckbox\">
          {% trans 'Drop the databases that have the same names as the users.' %}
        </label>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input type=\"hidden\" name=\"mode\" value=\"2\">
      <input id=\"buttonGo\" class=\"btn btn-primary ajax\" type=\"submit\" name=\"delete\" value=\"{% trans 'Go' %}\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"editUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"editUserGroupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"editUserGroupModalLabel\">{% trans 'Edit user group' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">{% trans 'Loading…' %}</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editUserGroupModalSaveButton\">{% trans 'Save changes' %}</button>
      </div>
    </div>
  </div>
</div>
", "server/privileges/users_overview.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/users_overview.twig");
    }
}
