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

/* server/privileges/user_properties.twig */
class __TwigTemplate_c8b61378a13ebfca8301d95375347088 extends Template
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
        echo "<div class=\"container\" id=\"edit_user_dialog\">
  <h2>
    ";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("b_usredit");
        echo "
    ";
        // line 4
echo _gettext("Edit privileges:");
        // line 5
        echo "    ";
echo _gettext("User account");
        // line 6
        echo "
    ";
        // line 7
        if ( !twig_test_empty((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "      <em>
        <a class=\"edit_user_anchor\" href=\"";
            // line 9
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" =>             // line 10
(isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 10, $this->source); })()), "hostname" =>             // line 11
(isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 11, $this->source); })()), "dbname" => "", "tablename" => ""]);
            // line 14
            echo "\">
          '";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "'@'";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "'
        </a>
      </em>
      -
      ";
            // line 19
            if ((isset($context["is_databases"]) || array_key_exists("is_databases", $context) ? $context["is_databases"] : (function () { throw new RuntimeError('Variable "is_databases" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "        ";
echo _gettext("Databases");
                // line 21
                echo "      ";
            } else {
                // line 22
                echo "        ";
echo _gettext("Database");
                // line 23
                echo "      ";
            }
            // line 24
            echo "
      ";
            // line 25
            if ( !twig_test_empty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 25, $this->source); })()))) {
                // line 26
                echo "        <em>
          <a href=\"";
                // line 27
                echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" =>                 // line 28
(isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 28, $this->source); })()), "hostname" =>                 // line 29
(isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 29, $this->source); })()), "dbname" =>                 // line 30
(isset($context["dbname"]) || array_key_exists("dbname", $context) ? $context["dbname"] : (function () { throw new RuntimeError('Variable "dbname" does not exist.', 30, $this->source); })()), "tablename" => ""]);
                // line 32
                echo "\">
            ";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "
          </a>
        </em>
        -
        ";
                // line 37
echo _gettext("Table");
                // line 38
                echo "        <em>";
                echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "</em>
      ";
            } else {
                // line 40
                echo "        ";
                if ( !is_iterable((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 40, $this->source); })()))) {
                    // line 41
                    echo "          ";
                    $context["database"] = [(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 41, $this->source); })())];
                    // line 42
                    echo "        ";
                }
                // line 43
                echo "        <em>
          ";
                // line 44
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 44, $this->source); })()), ", "), "html", null, true);
                echo "
        </em>
      ";
            }
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "      <em>'";
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "'@'";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "'</em>
    ";
        }
        // line 50
        echo "  </h2>

  ";
        // line 52
        if (((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 52, $this->source); })()) == (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 52, $this->source); })()) . "@") . (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 52, $this->source); })())))) {
            // line 53
            echo "    ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("Note: You are attempting to edit privileges of the user with which you are currently logged in."));
            echo "
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if ((isset($context["user_does_not_exists"]) || array_key_exists("user_does_not_exists", $context) ? $context["user_does_not_exists"] : (function () { throw new RuntimeError('Variable "user_does_not_exists" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "    ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("The selected user was not found in the privilege table."));
            echo "
  ";
        }
        // line 59
        echo "
  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 60
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" method=\"post\">
    ";
        // line 61
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 61, $this->source); })()));
        echo "

    ";
        // line 63
        echo (isset($context["privileges_table"]) || array_key_exists("privileges_table", $context) ? $context["privileges_table"] : (function () { throw new RuntimeError('Variable "privileges_table" does not exist.', 63, $this->source); })());
        echo "
  </form>

  ";
        // line 66
        echo (isset($context["table_specific_rights"]) || array_key_exists("table_specific_rights", $context) ? $context["table_specific_rights"] : (function () { throw new RuntimeError('Variable "table_specific_rights" does not exist.', 66, $this->source); })());
        echo "

  ";
        // line 68
        if ((( !is_iterable((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 68, $this->source); })())) && (twig_length_filter($this->env, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 68, $this->source); })())) > 0)) &&  !(isset($context["is_wildcard"]) || array_key_exists("is_wildcard", $context) ? $context["is_wildcard"] : (function () { throw new RuntimeError('Variable "is_wildcard" does not exist.', 68, $this->source); })()))) {
            // line 69
            echo "    [
    ";
            // line 70
echo _gettext("Database");
            // line 71
            echo "    <a href=\"";
            echo (isset($context["database_url"]) || array_key_exists("database_url", $context) ? $context["database_url"] : (function () { throw new RuntimeError('Variable "database_url" does not exist.', 71, $this->source); })());
            echo $this->env->getFunction('get_common')->getCallable()(["db" => twig_replace_filter(            // line 72
(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 72, $this->source); })()), ["\\_" => "_", "\\%" => "%"]), "reload" => true], "&");
            // line 74
            echo "\">
      ";
            // line 75
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 75, $this->source); })()), ["\\_" => "_", "\\%" => "%"]), "html", null, true);
            echo ":
      ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["database_url_title"]) || array_key_exists("database_url_title", $context) ? $context["database_url_title"] : (function () { throw new RuntimeError('Variable "database_url_title" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "
    </a>
    ]
    ";
            // line 79
            if ((twig_length_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 79, $this->source); })())) > 0)) {
                // line 80
                echo "      [
      ";
                // line 81
echo _gettext("Table");
                // line 82
                echo "      <a href=\"";
                echo (isset($context["table_url"]) || array_key_exists("table_url", $context) ? $context["table_url"] : (function () { throw new RuntimeError('Variable "table_url" does not exist.', 82, $this->source); })());
                echo $this->env->getFunction('get_common')->getCallable()(["db" => twig_replace_filter(                // line 83
(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 83, $this->source); })()), ["\\_" => "_", "\\%" => "%"]), "table" =>                 // line 84
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 84, $this->source); })()), "reload" => true], "&");
                // line 86
                echo "\">
        ";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 87, $this->source); })()), "html", null, true);
                echo ":
        ";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["table_url_title"]) || array_key_exists("table_url_title", $context) ? $context["table_url_title"] : (function () { throw new RuntimeError('Variable "table_url_title" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "
      </a>
      ]
    ";
            }
            // line 92
            echo "  ";
        }
        // line 93
        echo "
  ";
        // line 94
        echo (isset($context["change_password"]) || array_key_exists("change_password", $context) ? $context["change_password"] : (function () { throw new RuntimeError('Variable "change_password" does not exist.', 94, $this->source); })());
        echo "

  <form action=\"";
        // line 96
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    ";
        // line 97
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
    <input type=\"hidden\" name=\"old_username\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 100
        if ( !twig_test_empty((isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 100, $this->source); })()))) {
            // line 101
            echo "      <input type=\"hidden\" name=\"old_usergroup\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 101, $this->source); })()), "html", null, true);
            echo "\">
    ";
        }
        // line 103
        echo "
    <div class=\"card mb-3\">
      <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 105
echo _gettext("Login Information");
        echo "\">
        ";
        // line 106
echo _gettext("Change login information / Copy user account");
        // line 107
        echo "      </div>

      <div class=\"card-body\">
        ";
        // line 110
        echo (isset($context["change_login_info_fields"]) || array_key_exists("change_login_info_fields", $context) ? $context["change_login_info_fields"] : (function () { throw new RuntimeError('Variable "change_login_info_fields" does not exist.', 110, $this->source); })());
        echo "

        <div class=\"card\">
          <div class=\"card-header\">
            ";
        // line 114
echo _gettext("Create a new user account with the same privileges and …");
        // line 115
        echo "          </div>

          <div class=\"card-body\">

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
              <label class=\"form-check-label\" for=\"mode_4\">
                ";
        // line 122
echo _gettext("… keep the old one.");
        // line 123
        echo "              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
              <label class=\"form-check-label\" for=\"mode_1\">
                ";
        // line 129
echo _gettext("… delete the old one from the user tables.");
        // line 130
        echo "              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
              <label class=\"form-check-label\" for=\"mode_2\">
                ";
        // line 136
echo _gettext("… revoke all active privileges from the old one and delete it afterwards.");
        // line 137
        echo "              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
              <label class=\"form-check-label\" for=\"mode_3\">
                ";
        // line 143
echo _gettext("… delete the old one from the user tables and reload the privileges afterwards.");
        // line 144
        echo "              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 153
echo _gettext("Go");
        echo "\">
    </div>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/user_properties.twig";
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
        return array (  357 => 153,  346 => 144,  344 => 143,  336 => 137,  334 => 136,  326 => 130,  324 => 129,  316 => 123,  314 => 122,  305 => 115,  303 => 114,  296 => 110,  291 => 107,  289 => 106,  285 => 105,  281 => 103,  275 => 101,  273 => 100,  269 => 99,  265 => 98,  261 => 97,  257 => 96,  252 => 94,  249 => 93,  246 => 92,  239 => 88,  235 => 87,  232 => 86,  230 => 84,  229 => 83,  226 => 82,  224 => 81,  221 => 80,  219 => 79,  213 => 76,  209 => 75,  206 => 74,  204 => 72,  201 => 71,  199 => 70,  196 => 69,  194 => 68,  189 => 66,  183 => 63,  178 => 61,  174 => 60,  171 => 59,  165 => 57,  163 => 56,  160 => 55,  154 => 53,  152 => 52,  148 => 50,  140 => 48,  137 => 47,  131 => 44,  128 => 43,  125 => 42,  122 => 41,  119 => 40,  113 => 38,  111 => 37,  104 => 33,  101 => 32,  99 => 30,  98 => 29,  97 => 28,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  74 => 19,  65 => 15,  62 => 14,  60 => 11,  59 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\" id=\"edit_user_dialog\">
  <h2>
    {{ get_icon('b_usredit') }}
    {% trans 'Edit privileges:' %}
    {% trans 'User account' %}

    {% if database is not empty %}
      <em>
        <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
          'username': username,
          'hostname': hostname,
          'dbname': '',
          'tablename': ''
        }) }}\">
          '{{ username }}'@'{{ hostname }}'
        </a>
      </em>
      -
      {% if is_databases %}
        {% trans 'Databases' %}
      {% else %}
        {% trans 'Database' %}
      {% endif %}

      {% if table is not empty %}
        <em>
          <a href=\"{{ url('/server/privileges', {
            'username': username,
            'hostname': hostname,
            'dbname': dbname,
            'tablename': ''
          }) }}\">
            {{ database }}
          </a>
        </em>
        -
        {% trans 'Table' %}
        <em>{{ table }}</em>
      {% else %}
        {% if database is not iterable %}
          {% set database = [database] %}
        {% endif %}
        <em>
          {{ database|join(', ') }}
        </em>
      {% endif %}
    {% else %}
      <em>'{{ username }}'@'{{ hostname }}'</em>
    {% endif %}
  </h2>

  {% if current_user == username ~ '@' ~ hostname %}
    {{ 'Note: You are attempting to edit privileges of the user with which you are currently logged in.'|trans|notice }}
  {% endif %}

  {% if user_does_not_exists %}
    {{ 'The selected user was not found in the privilege table.'|trans|error }}
  {% endif %}

  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"{{ url('/server/privileges') }}\" method=\"post\">
    {{ get_hidden_inputs(params) }}

    {{ privileges_table|raw }}
  </form>

  {{ table_specific_rights|raw }}

  {% if database is not iterable and database|length > 0 and not is_wildcard %}
    [
    {% trans 'Database' %}
    <a href=\"{{ database_url|raw }}{{ get_common({
      'db': database|replace({'\\\\_': '_', '\\\\%': '%'}),
      'reload': true
    }, '&') }}\">
      {{ database|replace({'\\\\_': '_', '\\\\%': '%'}) }}:
      {{ database_url_title }}
    </a>
    ]
    {% if table|length > 0 %}
      [
      {% trans 'Table' %}
      <a href=\"{{ table_url|raw }}{{ get_common({
        'db': database|replace({'\\\\_': '_', '\\\\%': '%'}),
        'table': table,
        'reload': true
      }, '&') }}\">
        {{ table }}:
        {{ table_url_title }}
      </a>
      ]
    {% endif %}
  {% endif %}

  {{ change_password|raw }}

  <form action=\"{{ url('/server/privileges') }}\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    {{ get_hidden_inputs() }}
    <input type=\"hidden\" name=\"old_username\" value=\"{{ username }}\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"{{ hostname }}\">
    {% if user_group is not empty %}
      <input type=\"hidden\" name=\"old_usergroup\" value=\"{{ user_group }}\">
    {% endif %}

    <div class=\"card mb-3\">
      <div class=\"card-header js-submenu-label\" data-submenu-label=\"{% trans 'Login Information' %}\">
        {% trans 'Change login information / Copy user account' %}
      </div>

      <div class=\"card-body\">
        {{ change_login_info_fields|raw }}

        <div class=\"card\">
          <div class=\"card-header\">
            {% trans 'Create a new user account with the same privileges and …' %}
          </div>

          <div class=\"card-body\">

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
              <label class=\"form-check-label\" for=\"mode_4\">
                {% trans '… keep the old one.' %}
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
              <label class=\"form-check-label\" for=\"mode_1\">
                {% trans '… delete the old one from the user tables.' %}
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
              <label class=\"form-check-label\" for=\"mode_2\">
                {% trans '… revoke all active privileges from the old one and delete it afterwards.' %}
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
              <label class=\"form-check-label\" for=\"mode_3\">
                {% trans '… delete the old one from the user tables and reload the privileges afterwards.' %}
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
    </div>
  </form>
</div>
", "server/privileges/user_properties.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/user_properties.twig");
    }
}
