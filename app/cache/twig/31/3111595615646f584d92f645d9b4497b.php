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

/* server/privileges/change_password.twig */
class __TwigTemplate_7f46a4a210ade9848c89733e782cfa10 extends Template
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
        echo "<form method=\"post\" id=\"change_password_form\" action=\"";
        // line 2
        echo (((isset($context["is_privileges"]) || array_key_exists("is_privileges", $context) ? $context["is_privileges"] : (function () { throw new RuntimeError('Variable "is_privileges" does not exist.', 2, $this->source); })())) ? ($this->env->getFunction('url')->getCallable()("/server/privileges")) : ($this->env->getFunction('url')->getCallable()("/user-password")));
        echo "\" name=\"chgPassword\" class=\"";
        echo (((isset($context["is_privileges"]) || array_key_exists("is_privileges", $context) ? $context["is_privileges"] : (function () { throw new RuntimeError('Variable "is_privileges" does not exist.', 2, $this->source); })())) ? ("submenu-item") : (""));
        echo "\" autocomplete=\"off\">
  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
  ";
        // line 4
        if ((isset($context["is_privileges"]) || array_key_exists("is_privileges", $context) ? $context["is_privileges"] : (function () { throw new RuntimeError('Variable "is_privileges" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    <input type=\"hidden\" name=\"username\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\">
  ";
        }
        // line 8
        echo "
  <div class=\"card mb-3\" id=\"fieldset_change_password\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 10
echo _gettext("Change password");
        echo "\">
      ";
        // line 11
echo _gettext("Change password");
        // line 12
        echo "    </div>
    <div class=\"card-body\">
    <table class=\"table-borderless\" style=\"background: transparent;\">
      <tr class=\"mb-4\">
        <td colspan=\"3\">
          <input type=\"radio\" name=\"nopass\" value=\"1\" id=\"nopass_1\">
          <label for=\"nopass_1\">";
        // line 18
echo _gettext("No Password");
        echo "</label>
        </td>
      </tr>
      <tr class=\"align-middle mb-4\">
        <td>
          <input type=\"radio\" name=\"nopass\" value=\"0\" id=\"nopass_0\" checked>
          <label for=\"nopass_0\">";
        // line 24
echo _gettext("Password:");
        echo "&nbsp;</label>
        </td>
        <td>
          <div class=\"row\">
            <span class=\"d-flex align-items-center col-4\">";
        // line 28
echo _gettext("Enter:");
        echo "</span>
            <input type=\"password\" name=\"pma_pw\" id=\"text_pma_change_pw\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
          <div class=\"row mt-2\">
            <span class=\"d-flex align-items-center col-4\">";
        // line 32
echo _gettext("Re-type:");
        echo "</span>
            <input type=\"password\" name=\"pma_pw2\" id=\"text_pma_change_pw2\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
        </td>
        <td class=\"col-2\">
          <div>
            <span>";
        // line 38
echo _pgettext("Password strength", "Strength:");
        echo "</span>
            <meter max=\"4\" id=\"change_password_strength_meter\" name=\"pw_meter\"></meter>
          </div>
          <span id=\"change_password_strength\" name=\"pw_strength\"></span>
        </td>
      </tr>

      ";
        // line 45
        if (( !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 45, $this->source); })()) || ((isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 45, $this->source); })()) && (isset($context["has_more_auth_plugins"]) || array_key_exists("has_more_auth_plugins", $context) ? $context["has_more_auth_plugins"] : (function () { throw new RuntimeError('Variable "has_more_auth_plugins" does not exist.', 45, $this->source); })())))) {
            // line 46
            echo "        <tr class=\"align-middle mb-4\">
          <td>
            <label for=\"select_authentication_plugin_cp\">";
            // line 48
echo _gettext("Password Hashing:");
            echo "</label>
          </td>
          <td colspan=\"2\">
            <select name=\"authentication_plugin\" id=\"select_authentication_plugin_cp\" class=\"col-8\">
              ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["active_auth_plugins"]) || array_key_exists("active_auth_plugins", $context) ? $context["active_auth_plugins"] : (function () { throw new RuntimeError('Variable "active_auth_plugins" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
                // line 53
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["plugin_name"], "html", null, true);
                echo "\"";
                echo ((($context["plugin_name"] == (isset($context["orig_auth_plugin"]) || array_key_exists("orig_auth_plugin", $context) ? $context["orig_auth_plugin"] : (function () { throw new RuntimeError('Variable "orig_auth_plugin" does not exist.', 53, $this->source); })()))) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["plugin_description"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </select>
          </td>
        </tr>
      ";
        }
        // line 59
        echo "
      <tr id=\"tr_element_before_generate_password\"></tr>
    </table>

    ";
        // line 63
        if (((isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 63, $this->source); })()) && (isset($context["has_more_auth_plugins"]) || array_key_exists("has_more_auth_plugins", $context) ? $context["has_more_auth_plugins"] : (function () { throw new RuntimeError('Variable "has_more_auth_plugins" does not exist.', 63, $this->source); })()))) {
            // line 64
            echo "      <div";
            echo ((((isset($context["orig_auth_plugin"]) || array_key_exists("orig_auth_plugin", $context) ? $context["orig_auth_plugin"] : (function () { throw new RuntimeError('Variable "orig_auth_plugin" does not exist.', 64, $this->source); })()) != "sha256_password")) ? (" class=\"hide\"") : (""));
            echo " id=\"ssl_reqd_warning_cp\">
        ";
            // line 65
            ob_start();
            // line 66
            echo "          ";
echo _gettext("This method requires using an '<i>SSL connection</i>' or an '<i>unencrypted connection that encrypts the password using RSA</i>'; while connecting to the server.");
            // line 69
            echo "          ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("sha256-authentication-plugin");
            echo "
        ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            echo $this->env->getFilter('notice')->getCallable()($___internal_parse_0_);
            // line 71
            echo "      </div>
    ";
        }
        // line 73
        echo "    </div>

  </div>

  <div id=\"fieldset_change_password_footer\">
    <input type=\"hidden\" name=\"change_pw\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 79
echo _gettext("Go");
        echo "\">
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/change_password.twig";
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
        return array (  195 => 79,  187 => 73,  183 => 71,  181 => 65,  175 => 69,  172 => 66,  170 => 65,  165 => 64,  163 => 63,  157 => 59,  151 => 55,  138 => 53,  134 => 52,  127 => 48,  123 => 46,  121 => 45,  111 => 38,  102 => 32,  95 => 28,  88 => 24,  79 => 18,  71 => 12,  69 => 11,  65 => 10,  61 => 8,  56 => 6,  51 => 5,  49 => 4,  45 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" id=\"change_password_form\" action=\"
  {{- is_privileges ? url('/server/privileges') : url('/user-password') }}\" name=\"chgPassword\" class=\"{{ is_privileges ? 'submenu-item' }}\" autocomplete=\"off\">
  {{ get_hidden_inputs() }}
  {% if is_privileges %}
    <input type=\"hidden\" name=\"username\" value=\"{{ username }}\">
    <input type=\"hidden\" name=\"hostname\" value=\"{{ hostname }}\">
  {% endif %}

  <div class=\"card mb-3\" id=\"fieldset_change_password\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"{% trans 'Change password' %}\">
      {% trans 'Change password' %}
    </div>
    <div class=\"card-body\">
    <table class=\"table-borderless\" style=\"background: transparent;\">
      <tr class=\"mb-4\">
        <td colspan=\"3\">
          <input type=\"radio\" name=\"nopass\" value=\"1\" id=\"nopass_1\">
          <label for=\"nopass_1\">{% trans 'No Password' %}</label>
        </td>
      </tr>
      <tr class=\"align-middle mb-4\">
        <td>
          <input type=\"radio\" name=\"nopass\" value=\"0\" id=\"nopass_0\" checked>
          <label for=\"nopass_0\">{% trans 'Password:' %}&nbsp;</label>
        </td>
        <td>
          <div class=\"row\">
            <span class=\"d-flex align-items-center col-4\">{% trans 'Enter:' %}</span>
            <input type=\"password\" name=\"pma_pw\" id=\"text_pma_change_pw\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
          <div class=\"row mt-2\">
            <span class=\"d-flex align-items-center col-4\">{% trans 'Re-type:' %}</span>
            <input type=\"password\" name=\"pma_pw2\" id=\"text_pma_change_pw2\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
        </td>
        <td class=\"col-2\">
          <div>
            <span>{% trans %}Strength:{% context %}Password strength{% endtrans %}</span>
            <meter max=\"4\" id=\"change_password_strength_meter\" name=\"pw_meter\"></meter>
          </div>
          <span id=\"change_password_strength\" name=\"pw_strength\"></span>
        </td>
      </tr>

      {% if not is_new or (is_new and has_more_auth_plugins) %}
        <tr class=\"align-middle mb-4\">
          <td>
            <label for=\"select_authentication_plugin_cp\">{% trans 'Password Hashing:' %}</label>
          </td>
          <td colspan=\"2\">
            <select name=\"authentication_plugin\" id=\"select_authentication_plugin_cp\" class=\"col-8\">
              {% for plugin_name, plugin_description in active_auth_plugins %}
                <option value=\"{{ plugin_name }}\"{{ plugin_name == orig_auth_plugin ? ' selected' }}>{{ plugin_description }}</option>
              {% endfor %}
            </select>
          </td>
        </tr>
      {% endif %}

      <tr id=\"tr_element_before_generate_password\"></tr>
    </table>

    {% if is_new and has_more_auth_plugins %}
      <div{{ orig_auth_plugin != 'sha256_password' ? ' class=\"hide\"' }} id=\"ssl_reqd_warning_cp\">
        {% apply notice %}
          {% trans %}
            This method requires using an '<i>SSL connection</i>' or an '<i>unencrypted connection that encrypts the password using RSA</i>'; while connecting to the server.
          {% endtrans %}
          {{ show_mysql_docu('sha256-authentication-plugin') }}
        {% endapply %}
      </div>
    {% endif %}
    </div>

  </div>

  <div id=\"fieldset_change_password_footer\">
    <input type=\"hidden\" name=\"change_pw\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
  </div>
</form>
", "server/privileges/change_password.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/change_password.twig");
    }
}
