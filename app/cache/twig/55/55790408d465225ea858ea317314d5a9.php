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

/* server/replication/change_primary.twig */
class __TwigTemplate_61cea60ac5c7bdfa8aa9aaf844fd42e4 extends Template
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
        echo "<form method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/server/replication");
        echo "\" class=\"card\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()("", "");
        echo "
  <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
  <input type=\"hidden\" name=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["submit_name"]) || array_key_exists("submit_name", $context) ? $context["submit_name"] : (function () { throw new RuntimeError('Variable "submit_name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\" value=\"1\">

  <div class=\"card-header\">
    ";
        // line 7
echo _gettext("Replica configuration - Change or reconfigure primary server");
        // line 8
        echo "  </div>

  <div class=\"card-body\" id=\"fieldset_add_user_login\">
    <p>
      ";
        // line 12
echo _gettext("Make sure you have a unique server-id in your configuration file (my.cnf). If not, please add the following line into [mysqld] section:");
        // line 13
        echo "    </p>
    <pre>server-id=";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["server_id"]) || array_key_exists("server_id", $context) ? $context["server_id"] : (function () { throw new RuntimeError('Variable "server_id" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</pre>

    <div class=\"item\">
      <label for=\"text_username\">";
        // line 17
echo _gettext("User name:");
        echo "</label>
      <input id=\"text_username\" name=\"username\" type=\"text\" maxlength=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["username_length"]) || array_key_exists("username_length", $context) ? $context["username_length"] : (function () { throw new RuntimeError('Variable "username_length" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" title=\"";
echo _gettext("User name");
        echo "\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_pma_pw\">";
        // line 21
echo _gettext("Password:");
        echo "</label>
      <input id=\"text_pma_pw\" name=\"pma_pw\" type=\"password\" spellcheck=\"false\" title=\"";
        // line 22
echo _gettext("Password");
        echo "\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_hostname\">";
        // line 25
echo _gettext("Host:");
        echo "</label>
      <input id=\"text_hostname\" name=\"hostname\" type=\"text\" maxlength=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["hostname_length"]) || array_key_exists("hostname_length", $context) ? $context["hostname_length"] : (function () { throw new RuntimeError('Variable "hostname_length" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" value=\"\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_port\">";
        // line 29
echo _gettext("Port:");
        echo "</label>
      <input id=\"text_port\" name=\"text_port\" type=\"number\" maxlength=\"6\" value=\"3306\" required>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"confreplica_submit\" value=\"";
        // line 35
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
        return "server/replication/change_primary.twig";
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
        return array (  113 => 35,  104 => 29,  98 => 26,  94 => 25,  88 => 22,  84 => 21,  76 => 18,  72 => 17,  66 => 14,  63 => 13,  61 => 12,  55 => 8,  53 => 7,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ url('/server/replication') }}\" class=\"card\">
  {{ get_hidden_inputs('', '') }}
  <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
  <input type=\"hidden\" name=\"{{ submit_name }}\" value=\"1\">

  <div class=\"card-header\">
    {% trans 'Replica configuration - Change or reconfigure primary server' %}
  </div>

  <div class=\"card-body\" id=\"fieldset_add_user_login\">
    <p>
      {% trans 'Make sure you have a unique server-id in your configuration file (my.cnf). If not, please add the following line into [mysqld] section:' %}
    </p>
    <pre>server-id={{ server_id }}</pre>

    <div class=\"item\">
      <label for=\"text_username\">{% trans 'User name:' %}</label>
      <input id=\"text_username\" name=\"username\" type=\"text\" maxlength=\"{{ username_length }}\" title=\"{% trans 'User name' %}\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_pma_pw\">{% trans 'Password:' %}</label>
      <input id=\"text_pma_pw\" name=\"pma_pw\" type=\"password\" spellcheck=\"false\" title=\"{% trans 'Password' %}\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_hostname\">{% trans 'Host:' %}</label>
      <input id=\"text_hostname\" name=\"hostname\" type=\"text\" maxlength=\"{{ hostname_length }}\" value=\"\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_port\">{% trans 'Port:' %}</label>
      <input id=\"text_port\" name=\"text_port\" type=\"number\" maxlength=\"6\" value=\"3306\" required>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"confreplica_submit\" value=\"{% trans 'Go' %}\">
  </div>
</form>
", "server/replication/change_primary.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/change_primary.twig");
    }
}
