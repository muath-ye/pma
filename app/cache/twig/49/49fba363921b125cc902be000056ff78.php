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

/* server/privileges/login_information_fields.twig */
class __TwigTemplate_a6699cb9181ec2569a360f9b93f109d0 extends Template
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
        echo "<div class=\"card mb-3\" id=\"fieldset_add_user_login\">
  <div class=\"card-header\">";
        // line 2
echo _gettext("Login Information");
        echo "</div>
  <div class=\"card-body\">
    <div class=\"item\">
      <label for=\"select_pred_username\">";
        // line 5
echo _gettext("User name:");
        echo "</label>
      <span class=\"options\">
        <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
        // line 7
echo _gettext("User name");
        echo "\">
          <option value=\"any\"";
        // line 8
        echo ((((isset($context["pred_username"]) || array_key_exists("pred_username", $context) ? $context["pred_username"] : (function () { throw new RuntimeError('Variable "pred_username" does not exist.', 8, $this->source); })()) == "any")) ? (" selected") : (""));
        echo ">";
echo _gettext("Any user");
        echo "</option>
          <option value=\"userdefined\"";
        // line 9
        echo ((((null === (isset($context["pred_username"]) || array_key_exists("pred_username", $context) ? $context["pred_username"] : (function () { throw new RuntimeError('Variable "pred_username" does not exist.', 9, $this->source); })())) || ((isset($context["pred_username"]) || array_key_exists("pred_username", $context) ? $context["pred_username"] : (function () { throw new RuntimeError('Variable "pred_username" does not exist.', 9, $this->source); })()) == "userdefined"))) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field");
        echo "</option>
        </select>
      </span>
      <input type=\"text\" spellcheck=\"false\" name=\"username\" id=\"pma_username\" class=\"autofocus\" maxlength=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["username_length"]) || array_key_exists("username_length", $context) ? $context["username_length"] : (function () { throw new RuntimeError('Variable "username_length" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" title=\"";
echo _gettext("User name");
        echo "\"";
        // line 13
        if ( !twig_test_empty((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 13, $this->source); })()))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (( !(null === (isset($context["new_username"]) || array_key_exists("new_username", $context) ? $context["new_username"] : (function () { throw new RuntimeError('Variable "new_username" does not exist.', 13, $this->source); })()))) ? ((isset($context["new_username"]) || array_key_exists("new_username", $context) ? $context["new_username"] : (function () { throw new RuntimeError('Variable "new_username" does not exist.', 13, $this->source); })())) : ((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 13, $this->source); })()))), "html", null, true);
            echo "\"";
        }
        // line 14
        echo ((((null === (isset($context["pred_username"]) || array_key_exists("pred_username", $context) ? $context["pred_username"] : (function () { throw new RuntimeError('Variable "pred_username" does not exist.', 14, $this->source); })())) || ((isset($context["pred_username"]) || array_key_exists("pred_username", $context) ? $context["pred_username"] : (function () { throw new RuntimeError('Variable "pred_username" does not exist.', 14, $this->source); })()) == "userdefined"))) ? (" required") : (""));
        echo ">

      <div id=\"user_exists_warning\" class=\"hide\">
        ";
        // line 17
        echo $this->env->getFilter('notice')->getCallable()(_gettext("An account already exists with the same username but possibly a different hostname."));
        echo "
      </div>
    </div>

    <div class=\"item\">
      <label for=\"select_pred_hostname\">
        ";
        // line 23
echo _gettext("Host name:");
        // line 24
        echo "      </label>
      <span class=\"options\">
        <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
        // line 26
echo _gettext("Host name");
        echo "\"";
        // line 27
        (((( !(null === (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 27, $this->source); })())) && ((isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 27, $this->source); })()) != "localhost")) && ((isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 27, $this->source); })()) != "127.0.0.1"))) ? (print (twig_escape_filter($this->env, ((" data-thishost=\"" . (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 27, $this->source); })())) . "\""), "html", null, true))) : (print ("")));
        echo ">
          <option value=\"any\"";
        // line 28
        echo ((((isset($context["pred_hostname"]) || array_key_exists("pred_hostname", $context) ? $context["pred_hostname"] : (function () { throw new RuntimeError('Variable "pred_hostname" does not exist.', 28, $this->source); })()) == "any")) ? (" selected") : (""));
        echo ">";
echo _gettext("Any host");
        echo "</option>
          <option value=\"localhost\"";
        // line 29
        echo ((((isset($context["pred_hostname"]) || array_key_exists("pred_hostname", $context) ? $context["pred_hostname"] : (function () { throw new RuntimeError('Variable "pred_hostname" does not exist.', 29, $this->source); })()) == "localhost")) ? (" selected") : (""));
        echo ">";
echo _gettext("Local");
        echo "</option>
          ";
        // line 30
        if ( !twig_test_empty((isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "            <option value=\"thishost\"";
            echo ((((isset($context["pred_hostname"]) || array_key_exists("pred_hostname", $context) ? $context["pred_hostname"] : (function () { throw new RuntimeError('Variable "pred_hostname" does not exist.', 31, $this->source); })()) == "thishost")) ? (" selected") : (""));
            echo ">";
echo _gettext("This host");
            echo "</option>
          ";
        }
        // line 33
        echo "          <option value=\"hosttable\"";
        echo ((((isset($context["pred_hostname"]) || array_key_exists("pred_hostname", $context) ? $context["pred_hostname"] : (function () { throw new RuntimeError('Variable "pred_hostname" does not exist.', 33, $this->source); })()) == "hosttable")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use host table");
        echo "</option>
          <option value=\"userdefined\"";
        // line 34
        echo ((((isset($context["pred_hostname"]) || array_key_exists("pred_hostname", $context) ? $context["pred_hostname"] : (function () { throw new RuntimeError('Variable "pred_hostname" does not exist.', 34, $this->source); })()) == "userdefined")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field");
        echo "</option>
        </select>
      </span>
      <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["hostname_length"]) || array_key_exists("hostname_length", $context) ? $context["hostname_length"] : (function () { throw new RuntimeError('Variable "hostname_length" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("hostname", $context)) ? (_twig_default_filter((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 37, $this->source); })()), "%")) : ("%")), "html", null, true);
        echo "\" title=\"";
        // line 38
echo _gettext("Host name");
        echo "\"";
        echo ((((isset($context["pred_hostname"]) || array_key_exists("pred_hostname", $context) ? $context["pred_hostname"] : (function () { throw new RuntimeError('Variable "pred_hostname" does not exist.', 38, $this->source); })()) == "userdefined")) ? (" required") : (""));
        echo ">

      ";
        // line 40
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        echo "
    </div>

    <div class=\"item\">
      <label for=\"select_pred_password\">";
        // line 44
echo _gettext("Password:");
        echo "</label>
      <span class=\"options\">
        <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
        // line 46
echo _gettext("Password");
        echo "\">
          ";
        // line 47
        if ((isset($context["is_change"]) || array_key_exists("is_change", $context) ? $context["is_change"] : (function () { throw new RuntimeError('Variable "is_change" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "            <option value=\"keep\" selected>";
echo _gettext("Do not change the password");
            echo "</option>
          ";
        }
        // line 50
        echo "          <option value=\"none\"";
        echo ((( !(null === (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 50, $this->source); })())) &&  !(isset($context["is_change"]) || array_key_exists("is_change", $context) ? $context["is_change"] : (function () { throw new RuntimeError('Variable "is_change" does not exist.', 50, $this->source); })()))) ? (" selected") : (""));
        echo ">";
echo _gettext("No password");
        echo "</option>
          <option value=\"userdefined\"";
        // line 51
        echo (((null === (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 51, $this->source); })()))) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field");
        echo "</option>
        </select>
      </span>
      <input type=\"password\" spellcheck=\"false\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
        // line 54
echo _gettext("Password");
        echo "\"";
        echo (((null === (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 54, $this->source); })()))) ? (" required") : (""));
        echo ">
      <span>";
        // line 55
echo _pgettext("Password strength", "Strength:");
        echo "</span>
      <meter max=\"4\" id=\"password_strength_meter\" name=\"pw_meter\"></meter>
      <span id=\"password_strength\" name=\"pw_strength\"></span>
    </div>

    <div class=\"item\" id=\"div_element_before_generate_password\">
      <label for=\"text_pma_pw2\">";
        // line 61
echo _gettext("Re-type:");
        echo "</label>
      <span class=\"options\">&nbsp;</span>
      <input type=\"password\" spellcheck=\"false\" name=\"pma_pw2\" id=\"text_pma_pw2\" title=\"";
        // line 63
echo _gettext("Re-type");
        echo "\"";
        echo (((null === (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 63, $this->source); })()))) ? (" required") : (""));
        echo ">
    </div>

    <div class=\"item\" id=\"authentication_plugin_div\">
      <label for=\"select_authentication_plugin\">
        ";
        // line 68
        if ((isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "          ";
echo _gettext("Authentication plugin");
            // line 70
            echo "        ";
        } else {
            // line 71
            echo "          ";
echo _gettext("Password hashing method");
            // line 72
            echo "        ";
        }
        // line 73
        echo "      </label>
      <span class=\"options\">&nbsp;</span>

      <select name=\"authentication_plugin\" id=\"select_authentication_plugin\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["active_auth_plugins"]) || array_key_exists("active_auth_plugins", $context) ? $context["active_auth_plugins"] : (function () { throw new RuntimeError('Variable "active_auth_plugins" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
            // line 78
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["plugin_name"], "html", null, true);
            echo "\"";
            echo ((($context["plugin_name"] == (isset($context["auth_plugin"]) || array_key_exists("auth_plugin", $context) ? $context["auth_plugin"] : (function () { throw new RuntimeError('Variable "auth_plugin" does not exist.', 78, $this->source); })()))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["plugin_description"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "      </select>

      <div id=\"ssl_reqd_warning\"";
        // line 82
        echo ((((isset($context["auth_plugin"]) || array_key_exists("auth_plugin", $context) ? $context["auth_plugin"] : (function () { throw new RuntimeError('Variable "auth_plugin" does not exist.', 82, $this->source); })()) != "sha256_password")) ? (" class=\"hide\"") : (""));
        echo ">
        ";
        // line 83
        ob_start();
        // line 84
        echo "          ";
echo _gettext("This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.");
        // line 87
        echo "          ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("sha256-authentication-plugin");
        echo "
        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo $this->env->getFilter('notice')->getCallable()($___internal_parse_0_);
        // line 89
        echo "      </div>
    </div>
    ";
        // line 92
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/login_information_fields.twig";
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
        return array (  288 => 92,  284 => 89,  282 => 83,  276 => 87,  273 => 84,  271 => 83,  267 => 82,  263 => 80,  250 => 78,  246 => 77,  240 => 73,  237 => 72,  234 => 71,  231 => 70,  228 => 69,  226 => 68,  216 => 63,  211 => 61,  202 => 55,  196 => 54,  188 => 51,  181 => 50,  175 => 48,  173 => 47,  169 => 46,  164 => 44,  157 => 40,  150 => 38,  145 => 37,  137 => 34,  130 => 33,  122 => 31,  120 => 30,  114 => 29,  108 => 28,  104 => 27,  101 => 26,  97 => 24,  95 => 23,  86 => 17,  80 => 14,  74 => 13,  69 => 12,  61 => 9,  55 => 8,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3\" id=\"fieldset_add_user_login\">
  <div class=\"card-header\">{% trans 'Login Information' %}</div>
  <div class=\"card-body\">
    <div class=\"item\">
      <label for=\"select_pred_username\">{% trans 'User name:' %}</label>
      <span class=\"options\">
        <select name=\"pred_username\" id=\"select_pred_username\" title=\"{% trans 'User name' %}\">
          <option value=\"any\"{{ pred_username == 'any' ? ' selected' }}>{% trans 'Any user' %}</option>
          <option value=\"userdefined\"{{ pred_username is null or pred_username == 'userdefined' ? ' selected' }}>{% trans 'Use text field' %}</option>
        </select>
      </span>
      <input type=\"text\" spellcheck=\"false\" name=\"username\" id=\"pma_username\" class=\"autofocus\" maxlength=\"{{ username_length }}\" title=\"{% trans 'User name' %}\"
        {%- if username is not empty %} value=\"{{ new_username is not null ? new_username : username }}\"{% endif -%}
        {{- pred_username is null or pred_username == 'userdefined' ? ' required' }}>

      <div id=\"user_exists_warning\" class=\"hide\">
        {{ 'An account already exists with the same username but possibly a different hostname.'|trans|notice }}
      </div>
    </div>

    <div class=\"item\">
      <label for=\"select_pred_hostname\">
        {% trans 'Host name:' %}
      </label>
      <span class=\"options\">
        <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"{% trans 'Host name' %}\"
          {{- this_host is not null and this_host != 'localhost' and this_host != '127.0.0.1' ? ' data-thishost=\"' ~ this_host ~ '\"' }}>
          <option value=\"any\"{{ pred_hostname == 'any' ? ' selected' }}>{% trans 'Any host' %}</option>
          <option value=\"localhost\"{{ pred_hostname == 'localhost' ? ' selected' }}>{% trans 'Local' %}</option>
          {% if this_host is not empty %}
            <option value=\"thishost\"{{ pred_hostname == 'thishost' ? ' selected' }}>{% trans 'This host' %}</option>
          {% endif %}
          <option value=\"hosttable\"{{ pred_hostname == 'hosttable' ? ' selected' }}>{% trans 'Use host table' %}</option>
          <option value=\"userdefined\"{{ pred_hostname == 'userdefined' ? ' selected' }}>{% trans 'Use text field' %}</option>
        </select>
      </span>
      <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"{{ hostname_length }}\" value=\"{{ hostname|default('%') }}\" title=\"
        {%- trans 'Host name' %}\"{{ pred_hostname == 'userdefined' ? ' required' }}>

      {{ show_hint('When Host table is used, this field is ignored and values stored in Host table are used instead.'|trans) }}
    </div>

    <div class=\"item\">
      <label for=\"select_pred_password\">{% trans 'Password:' %}</label>
      <span class=\"options\">
        <select name=\"pred_password\" id=\"select_pred_password\" title=\"{% trans 'Password' %}\">
          {% if is_change %}
            <option value=\"keep\" selected>{% trans 'Do not change the password' %}</option>
          {% endif %}
          <option value=\"none\"{{ username is not null and not is_change ? ' selected' }}>{% trans 'No password' %}</option>
          <option value=\"userdefined\"{{ username is null ? ' selected' }}>{% trans 'Use text field' %}</option>
        </select>
      </span>
      <input type=\"password\" spellcheck=\"false\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"{% trans 'Password' %}\"{{ username is null ? ' required' }}>
      <span>{% trans %}Strength:{% context %}Password strength{% endtrans %}</span>
      <meter max=\"4\" id=\"password_strength_meter\" name=\"pw_meter\"></meter>
      <span id=\"password_strength\" name=\"pw_strength\"></span>
    </div>

    <div class=\"item\" id=\"div_element_before_generate_password\">
      <label for=\"text_pma_pw2\">{% trans 'Re-type:' %}</label>
      <span class=\"options\">&nbsp;</span>
      <input type=\"password\" spellcheck=\"false\" name=\"pma_pw2\" id=\"text_pma_pw2\" title=\"{% trans 'Re-type' %}\"{{ username is null ? ' required' }}>
    </div>

    <div class=\"item\" id=\"authentication_plugin_div\">
      <label for=\"select_authentication_plugin\">
        {% if is_new %}
          {% trans 'Authentication plugin' %}
        {% else %}
          {% trans 'Password hashing method' %}
        {% endif %}
      </label>
      <span class=\"options\">&nbsp;</span>

      <select name=\"authentication_plugin\" id=\"select_authentication_plugin\">
        {% for plugin_name, plugin_description in active_auth_plugins %}
          <option value=\"{{ plugin_name }}\"{{ plugin_name == auth_plugin ? ' selected' }}>{{ plugin_description }}</option>
        {% endfor %}
      </select>

      <div id=\"ssl_reqd_warning\"{{ auth_plugin != 'sha256_password' ? ' class=\"hide\"' }}>
        {% apply notice %}
          {% trans %}
            This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.
          {% endtrans %}
          {{ show_mysql_docu('sha256-authentication-plugin') }}
        {% endapply %}
      </div>
    </div>
    {# Generate password added here via jQuery #}
  </div>
</div>
", "server/privileges/login_information_fields.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/login_information_fields.twig");
    }
}
