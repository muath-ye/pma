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

/* server/replication/primary_add_replica_user.twig */
class __TwigTemplate_98b20f3ed903adb608c3c16090b020db extends Template
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
        echo "<div id=\"primary_addreplicauser_gui\">
  <form action=\"";
        // line 2
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" method=\"post\" autocomplete=\"off\" id=\"addUsersForm\" class=\"card\">
    ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()("", "");
        echo "
    <input type=\"hidden\" name=\"grant_count\" value=\"25\">
    <input type=\"hidden\" name=\"createdb\" id=\"createdb_0\" value=\"0\">
    ";
        // line 7
        echo "    <input type=\"hidden\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\">
    <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">

    <div class=\"card-header\">";
        // line 11
echo _gettext("Add replica replication user");
        echo "</div>

    <div class=\"card-body\" id=\"fieldset_add_user_login\">
      <div class=\"item\">
        <label for=\"select_pred_username\">
          ";
        // line 16
echo _gettext("User name:");
        // line 17
        echo "        </label>
        <span class=\"options\">
          <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
        // line 19
echo _gettext("User name");
        echo "\">
            <option value=\"any\"";
        // line 20
        echo ((((isset($context["predefined_username"]) || array_key_exists("predefined_username", $context) ? $context["predefined_username"] : (function () { throw new RuntimeError('Variable "predefined_username" does not exist.', 20, $this->source); })()) == "any")) ? (" selected") : (""));
        echo ">";
echo _gettext("Any user");
        echo "</option>
            <option value=\"userdefined\"";
        // line 21
        echo ((((isset($context["predefined_username"]) || array_key_exists("predefined_username", $context) ? $context["predefined_username"] : (function () { throw new RuntimeError('Variable "predefined_username" does not exist.', 21, $this->source); })()) == "userdefined")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field:");
        echo "</option>
          </select>
        </span>
        <input type=\"text\" name=\"username\" id=\"pma_username\" maxlength=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["username_length"]) || array_key_exists("username_length", $context) ? $context["username_length"] : (function () { throw new RuntimeError('Variable "username_length" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" title=\"";
echo _gettext("User name");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"select_pred_hostname\">
          ";
        // line 29
echo _gettext("Host:");
        // line 30
        echo "        </label>
        <span class=\"options\">
          <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
        // line 32
echo _gettext("Host");
        echo "\"";
        // line 33
        if ( !(null === (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 33, $this->source); })()))) {
            echo " data-thishost=\"";
            echo twig_escape_filter($this->env, (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">
            <option value=\"any\"";
        // line 34
        echo ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 34, $this->source); })()) == "any")) ? (" selected") : (""));
        echo ">";
echo _gettext("Any host");
        echo "</option>
            <option value=\"localhost\"";
        // line 35
        echo ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 35, $this->source); })()) == "localhost")) ? (" selected") : (""));
        echo ">";
echo _gettext("Local");
        echo "</option>
            ";
        // line 36
        if ( !(null === (isset($context["this_host"]) || array_key_exists("this_host", $context) ? $context["this_host"] : (function () { throw new RuntimeError('Variable "this_host" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "              <option value=\"thishost\"";
            echo ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 37, $this->source); })()) == "thishost")) ? (" selected") : (""));
            echo ">";
echo _gettext("This host");
            echo "</option>
            ";
        }
        // line 39
        echo "            <option value=\"hosttable\"";
        echo ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 39, $this->source); })()) == "hosttable")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use host table");
        echo "</option>
            <option value=\"userdefined\"";
        // line 40
        echo ((((isset($context["predefined_hostname"]) || array_key_exists("predefined_hostname", $context) ? $context["predefined_hostname"] : (function () { throw new RuntimeError('Variable "predefined_hostname" does not exist.', 40, $this->source); })()) == "userdefined")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field:");
        echo "</option>
          </select>
        </span>
        <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["hostname_length"]) || array_key_exists("hostname_length", $context) ? $context["hostname_length"] : (function () { throw new RuntimeError('Variable "hostname_length" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" title=\"";
echo _gettext("Host");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 44
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        echo "
      </div>

      <div class=\"item\">
        <label for=\"select_pred_password\">
          ";
        // line 49
echo _gettext("Password:");
        // line 50
        echo "        </label>
        <span class=\"options\">
          <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
        // line 52
echo _gettext("Password");
        echo "\">
            <option value=\"none\"";
        // line 53
        echo (((isset($context["has_username"]) || array_key_exists("has_username", $context) ? $context["has_username"] : (function () { throw new RuntimeError('Variable "has_username" does not exist.', 53, $this->source); })())) ? (" selected") : (""));
        echo ">";
echo _gettext("No password");
        echo "</option>
            <option value=\"userdefined\"";
        // line 54
        echo (( !(isset($context["has_username"]) || array_key_exists("has_username", $context) ? $context["has_username"] : (function () { throw new RuntimeError('Variable "has_username" does not exist.', 54, $this->source); })())) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field:");
        echo "</option>
          </select>
        </span>
        <input type=\"password\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
        // line 57
echo _gettext("Password");
        echo "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"text_pma_pw2\">
          ";
        // line 62
echo _gettext("Re-type:");
        // line 63
        echo "        </label>
        <span class=\"options\"></span>
        <input type=\"password\" id=\"text_pma_pw2\" name=\"pma_pw2\" title=\"";
        // line 65
echo _gettext("Re-type");
        echo "\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"button_generate_password\">
          ";
        // line 70
echo _gettext("Generate password:");
        // line 71
        echo "        </label>
        <span class=\"options\">
          <input type=\"button\" class=\"btn btn-secondary button\" id=\"button_generate_password\" value=\"";
        // line 73
echo _gettext("Generate");
        echo "\">
        </span>
        <input type=\"text\" name=\"generated_pw\" id=\"generated_pw\">
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 80
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
        return "server/replication/primary_add_replica_user.twig";
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
        return array (  232 => 80,  222 => 73,  218 => 71,  216 => 70,  208 => 65,  204 => 63,  202 => 62,  194 => 57,  186 => 54,  180 => 53,  176 => 52,  172 => 50,  170 => 49,  162 => 44,  154 => 43,  146 => 40,  139 => 39,  131 => 37,  129 => 36,  123 => 35,  117 => 34,  109 => 33,  106 => 32,  102 => 30,  100 => 29,  88 => 24,  80 => 21,  74 => 20,  70 => 19,  66 => 17,  64 => 16,  56 => 11,  50 => 7,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"primary_addreplicauser_gui\">
  <form action=\"{{ url('/server/privileges') }}\" method=\"post\" autocomplete=\"off\" id=\"addUsersForm\" class=\"card\">
    {{ get_hidden_inputs('', '') }}
    <input type=\"hidden\" name=\"grant_count\" value=\"25\">
    <input type=\"hidden\" name=\"createdb\" id=\"createdb_0\" value=\"0\">
    {# Needed for the replication replicas. #}
    <input type=\"hidden\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\">
    <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">

    <div class=\"card-header\">{% trans 'Add replica replication user' %}</div>

    <div class=\"card-body\" id=\"fieldset_add_user_login\">
      <div class=\"item\">
        <label for=\"select_pred_username\">
          {% trans 'User name:' %}
        </label>
        <span class=\"options\">
          <select name=\"pred_username\" id=\"select_pred_username\" title=\"{% trans 'User name' %}\">
            <option value=\"any\"{{ predefined_username == 'any' ? ' selected' }}>{% trans 'Any user' %}</option>
            <option value=\"userdefined\"{{ predefined_username == 'userdefined' ? ' selected' }}>{% trans 'Use text field:' %}</option>
          </select>
        </span>
        <input type=\"text\" name=\"username\" id=\"pma_username\" maxlength=\"{{ username_length }}\" title=\"{% trans 'User name' %}\" value=\"{{ username }}\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"select_pred_hostname\">
          {% trans 'Host:' %}
        </label>
        <span class=\"options\">
          <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"{% trans 'Host' %}\"
            {%- if this_host is not null %} data-thishost=\"{{ this_host }}\"{% endif %}>
            <option value=\"any\"{{ predefined_hostname == 'any' ? ' selected' }}>{% trans 'Any host' %}</option>
            <option value=\"localhost\"{{ predefined_hostname == 'localhost' ? ' selected' }}>{% trans 'Local' %}</option>
            {% if this_host is not null %}
              <option value=\"thishost\"{{ predefined_hostname == 'thishost' ? ' selected' }}>{% trans 'This host' %}</option>
            {% endif %}
            <option value=\"hosttable\"{{ predefined_hostname == 'hosttable' ? ' selected' }}>{% trans 'Use host table' %}</option>
            <option value=\"userdefined\"{{ predefined_hostname == 'userdefined' ? ' selected' }}>{% trans 'Use text field:' %}</option>
          </select>
        </span>
        <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"{{ hostname_length }}\" title=\"{% trans 'Host' %}\" value=\"{{ hostname }}\">
        {{ show_hint('When Host table is used, this field is ignored and values stored in Host table are used instead.'|trans) }}
      </div>

      <div class=\"item\">
        <label for=\"select_pred_password\">
          {% trans 'Password:' %}
        </label>
        <span class=\"options\">
          <select name=\"pred_password\" id=\"select_pred_password\" title=\"{% trans 'Password' %}\">
            <option value=\"none\"{{ has_username ? ' selected' }}>{% trans 'No password' %}</option>
            <option value=\"userdefined\"{{ not has_username ? ' selected' }}>{% trans 'Use text field:' %}</option>
          </select>
        </span>
        <input type=\"password\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"{% trans 'Password' %}\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"text_pma_pw2\">
          {% trans 'Re-type:' %}
        </label>
        <span class=\"options\"></span>
        <input type=\"password\" id=\"text_pma_pw2\" name=\"pma_pw2\" title=\"{% trans 'Re-type' %}\" spellcheck=\"false\">
      </div>

      <div class=\"item\">
        <label for=\"button_generate_password\">
          {% trans 'Generate password:' %}
        </label>
        <span class=\"options\">
          <input type=\"button\" class=\"btn btn-secondary button\" id=\"button_generate_password\" value=\"{% trans 'Generate' %}\">
        </span>
        <input type=\"text\" name=\"generated_pw\" id=\"generated_pw\">
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"{% trans 'Go' %}\">
    </div>
  </form>
</div>
", "server/replication/primary_add_replica_user.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/primary_add_replica_user.twig");
    }
}
