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

/* server/replication/replica_configuration.twig */
class __TwigTemplate_55979772d4b653f5a729de5b51ff7f91 extends Template
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
        echo "<div class=\"card\">
  <div class=\"card-header\">";
        // line 2
echo _gettext("Replica replication");
        echo "</div>
  <div class=\"card-body\">
  ";
        // line 4
        if ((isset($context["server_replica_multi_replication"]) || array_key_exists("server_replica_multi_replication", $context) ? $context["server_replica_multi_replication"] : (function () { throw new RuntimeError('Variable "server_replica_multi_replication" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    ";
echo _gettext("Primary connection:");
            // line 6
            echo "    <form method=\"get\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\">
      ";
            // line 7
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
            echo "
      <select name=\"primary_connection\">
        <option value=\"\">";
            // line 9
echo _gettext("Default");
            echo "</option>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["server_replica_multi_replication"]) || array_key_exists("server_replica_multi_replication", $context) ? $context["server_replica_multi_replication"] : (function () { throw new RuntimeError('Variable "server_replica_multi_replication" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 11
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "Connection_name", [], "array", false, false, false, 11), "html", null, true);
                echo "\"";
                echo ((((isset($context["primary_connection"]) || array_key_exists("primary_connection", $context) ? $context["primary_connection"] : (function () { throw new RuntimeError('Variable "primary_connection" does not exist.', 11, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["server"], "Connection_name", [], "array", false, false, false, 11))) ? (" selected") : (""));
                echo ">
            ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "Connection_name", [], "array", false, false, false, 12), "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </select>
      <input id=\"goButton\" class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 16
echo _gettext("Go");
            echo "\">
    </form>
    <br>
    <br>
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ((isset($context["server_replica_status"]) || array_key_exists("server_replica_status", $context) ? $context["server_replica_status"] : (function () { throw new RuntimeError('Variable "server_replica_status" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "    <div id=\"replica_configuration_gui\">
      ";
            // line 24
            if ( !(isset($context["replica_sql_running"]) || array_key_exists("replica_sql_running", $context) ? $context["replica_sql_running"] : (function () { throw new RuntimeError('Variable "replica_sql_running" does not exist.', 24, $this->source); })())) {
                // line 25
                echo "        ";
                echo $this->env->getFilter('error')->getCallable()(_gettext("Replica SQL Thread not running!"));
                echo "
      ";
            }
            // line 27
            echo "      ";
            if ( !(isset($context["replica_io_running"]) || array_key_exists("replica_io_running", $context) ? $context["replica_io_running"] : (function () { throw new RuntimeError('Variable "replica_io_running" does not exist.', 27, $this->source); })())) {
                // line 28
                echo "        ";
                echo $this->env->getFilter('error')->getCallable()(_gettext("Replica IO Thread not running!"));
                echo "
      ";
            }
            // line 30
            echo "
      <p>";
            // line 31
echo _gettext("Server is configured as replica in a replication process. Would you like to:");
            echo "</p>
      <ul>
        <li>
          <a href=\"#replica_status_href\" id=\"replica_status_href\">";
            // line 34
echo _gettext("See replica status table");
            echo "</a>
          ";
            // line 35
            echo (isset($context["replica_status_table"]) || array_key_exists("replica_status_table", $context) ? $context["replica_status_table"] : (function () { throw new RuntimeError('Variable "replica_status_table" does not exist.', 35, $this->source); })());
            echo "
        </li>
        <li>
          <a href=\"#replica_control_href\" id=\"replica_control_href\">";
            // line 38
echo _gettext("Control replica:");
            echo "</a>
          <div id=\"replica_control_gui\" class=\"hide\">
            <ul>
              <li>
                <a href=\"";
            // line 42
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo (isset($context["replica_control_full_link"]) || array_key_exists("replica_control_full_link", $context) ? $context["replica_control_full_link"] : (function () { throw new RuntimeError('Variable "replica_control_full_link" does not exist.', 42, $this->source); })());
            echo "\">
                  ";
            // line 43
            echo ((( !(isset($context["replica_io_running"]) || array_key_exists("replica_io_running", $context) ? $context["replica_io_running"] : (function () { throw new RuntimeError('Variable "replica_io_running" does not exist.', 43, $this->source); })()) ||  !(isset($context["replica_sql_running"]) || array_key_exists("replica_sql_running", $context) ? $context["replica_sql_running"] : (function () { throw new RuntimeError('Variable "replica_sql_running" does not exist.', 43, $this->source); })()))) ? ("Full start") : ("Full stop"));
            echo "
                </a>
              </li>
              <li>
                <a class=\"ajax\" id=\"reset_replica\" href=\"";
            // line 47
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo (isset($context["replica_control_reset_link"]) || array_key_exists("replica_control_reset_link", $context) ? $context["replica_control_reset_link"] : (function () { throw new RuntimeError('Variable "replica_control_reset_link" does not exist.', 47, $this->source); })());
            echo "\">
                  ";
            // line 48
echo _gettext("Reset replica");
            // line 49
            echo "                </a>
              </li>
              <li>
                <a href=\"";
            // line 52
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo (isset($context["replica_control_sql_link"]) || array_key_exists("replica_control_sql_link", $context) ? $context["replica_control_sql_link"] : (function () { throw new RuntimeError('Variable "replica_control_sql_link" does not exist.', 52, $this->source); })());
            echo "\">
                  ";
            // line 53
            if ( !(isset($context["replica_sql_running"]) || array_key_exists("replica_sql_running", $context) ? $context["replica_sql_running"] : (function () { throw new RuntimeError('Variable "replica_sql_running" does not exist.', 53, $this->source); })())) {
                // line 54
                echo "                    ";
echo _gettext("Start SQL Thread only");
                // line 55
                echo "                  ";
            } else {
                // line 56
                echo "                    ";
echo _gettext("Stop SQL Thread only");
                // line 57
                echo "                  ";
            }
            // line 58
            echo "                </a>
              </li>
              <li>
                <a href=\"";
            // line 61
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo (isset($context["replica_control_io_link"]) || array_key_exists("replica_control_io_link", $context) ? $context["replica_control_io_link"] : (function () { throw new RuntimeError('Variable "replica_control_io_link" does not exist.', 61, $this->source); })());
            echo "\">
                  ";
            // line 62
            if ( !(isset($context["replica_io_running"]) || array_key_exists("replica_io_running", $context) ? $context["replica_io_running"] : (function () { throw new RuntimeError('Variable "replica_io_running" does not exist.', 62, $this->source); })())) {
                // line 63
                echo "                    ";
echo _gettext("Start IO Thread only");
                // line 64
                echo "                  ";
            } else {
                // line 65
                echo "                    ";
echo _gettext("Stop IO Thread only");
                // line 66
                echo "                  ";
            }
            // line 67
            echo "                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"#replica_errormanagement_href\" id=\"replica_errormanagement_href\">
            ";
            // line 74
echo _gettext("Error management:");
            // line 75
            echo "          </a>
          <div id=\"replica_errormanagement_gui\" class=\"hide\">
            ";
            // line 77
            echo $this->env->getFilter('error')->getCallable()(_gettext("Skipping errors might lead into unsynchronized primary and replica!"));
            echo "
            <ul>
              <li>
                <a href=\"";
            // line 80
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo (isset($context["replica_skip_error_link"]) || array_key_exists("replica_skip_error_link", $context) ? $context["replica_skip_error_link"] : (function () { throw new RuntimeError('Variable "replica_skip_error_link" does not exist.', 80, $this->source); })());
            echo "\">
                  ";
            // line 81
echo _gettext("Skip current error");
            // line 82
            echo "                </a>
              </li>
              <li>
                <form method=\"post\" action=\"";
            // line 85
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\">
                  ";
            // line 86
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()("", "");
            echo "
                  ";
            // line 87
            echo twig_sprintf(_gettext("Skip next %s errors."), "<input type=\"text\" name=\"sr_skip_errors_count\" value=\"1\" class=\"repl_gui_skip_err_cnt\">");
            echo "
                  <input class=\"btn btn-primary\" type=\"submit\" name=\"sr_replica_skip_error\" value=\"";
            // line 88
echo _gettext("Go");
            echo "\">
                  <input type=\"hidden\" name=\"sr_take_action\" value=\"1\">
                </form>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"";
            // line 96
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo (isset($context["reconfigure_primary_link"]) || array_key_exists("reconfigure_primary_link", $context) ? $context["reconfigure_primary_link"] : (function () { throw new RuntimeError('Variable "reconfigure_primary_link" does not exist.', 96, $this->source); })());
            echo "\">
            ";
            // line 97
echo _gettext("Change or reconfigure primary server");
            // line 98
            echo "          </a>
        </li>
      </ul>
    </div>
  ";
        } elseif ( !        // line 102
(isset($context["has_replica_configure"]) || array_key_exists("has_replica_configure", $context) ? $context["has_replica_configure"] : (function () { throw new RuntimeError('Variable "has_replica_configure" does not exist.', 102, $this->source); })())) {
            // line 103
            echo "    ";
            ob_start();
            // line 107
            echo "      ";
echo _gettext("This server is not configured as replica in a replication process. Would you like to %sconfigure%s it?");
            // line 108
            echo "    ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 103
            echo twig_sprintf($___internal_parse_0_, (((("<a href=\"" . $this->env->getFunction('url')->getCallable()("/server/replication")) . "\" data-post=\"") . $this->env->getFunction('get_common')->getCallable()(twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 103, $this->source); })()), ["replica_configure" => true, "replica_clear_screen" => true]))) . "\">"), "</a>");
            // line 109
            echo "  ";
        }
        // line 110
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/replication/replica_configuration.twig";
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
        return array (  304 => 110,  301 => 109,  299 => 103,  296 => 108,  293 => 107,  290 => 103,  288 => 102,  282 => 98,  280 => 97,  274 => 96,  263 => 88,  259 => 87,  255 => 86,  251 => 85,  246 => 82,  244 => 81,  238 => 80,  232 => 77,  228 => 75,  226 => 74,  217 => 67,  214 => 66,  211 => 65,  208 => 64,  205 => 63,  203 => 62,  197 => 61,  192 => 58,  189 => 57,  186 => 56,  183 => 55,  180 => 54,  178 => 53,  172 => 52,  167 => 49,  165 => 48,  159 => 47,  152 => 43,  146 => 42,  139 => 38,  133 => 35,  129 => 34,  123 => 31,  120 => 30,  114 => 28,  111 => 27,  105 => 25,  103 => 24,  100 => 23,  98 => 22,  95 => 21,  87 => 16,  84 => 15,  75 => 12,  68 => 11,  64 => 10,  60 => 9,  55 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
  <div class=\"card-header\">{% trans 'Replica replication' %}</div>
  <div class=\"card-body\">
  {% if server_replica_multi_replication %}
    {% trans 'Primary connection:' %}
    <form method=\"get\" action=\"{{ url('/server/replication') }}\">
      {{ get_hidden_inputs(url_params) }}
      <select name=\"primary_connection\">
        <option value=\"\">{% trans 'Default' %}</option>
        {% for server in server_replica_multi_replication %}
          <option value=\"{{ server['Connection_name'] }}\"{{ primary_connection == server['Connection_name'] ? ' selected' }}>
            {{ server['Connection_name'] }}
          </option>
        {% endfor %}
      </select>
      <input id=\"goButton\" class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
    </form>
    <br>
    <br>
  {% endif %}

  {% if server_replica_status %}
    <div id=\"replica_configuration_gui\">
      {% if not replica_sql_running %}
        {{ 'Replica SQL Thread not running!'|trans|error }}
      {% endif %}
      {% if not replica_io_running %}
        {{ 'Replica IO Thread not running!'|trans|error }}
      {% endif %}

      <p>{% trans 'Server is configured as replica in a replication process. Would you like to:' %}</p>
      <ul>
        <li>
          <a href=\"#replica_status_href\" id=\"replica_status_href\">{% trans 'See replica status table' %}</a>
          {{ replica_status_table|raw }}
        </li>
        <li>
          <a href=\"#replica_control_href\" id=\"replica_control_href\">{% trans 'Control replica:' %}</a>
          <div id=\"replica_control_gui\" class=\"hide\">
            <ul>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_full_link|raw }}\">
                  {{ not replica_io_running or not replica_sql_running ? 'Full start' : 'Full stop' }}
                </a>
              </li>
              <li>
                <a class=\"ajax\" id=\"reset_replica\" href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_reset_link|raw }}\">
                  {% trans 'Reset replica' %}
                </a>
              </li>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_sql_link|raw }}\">
                  {% if not replica_sql_running %}
                    {% trans 'Start SQL Thread only' %}
                  {% else %}
                    {% trans 'Stop SQL Thread only' %}
                  {% endif %}
                </a>
              </li>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_io_link|raw }}\">
                  {% if not replica_io_running %}
                    {% trans 'Start IO Thread only' %}
                  {% else %}
                    {% trans 'Stop IO Thread only' %}
                  {% endif %}
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"#replica_errormanagement_href\" id=\"replica_errormanagement_href\">
            {% trans 'Error management:' %}
          </a>
          <div id=\"replica_errormanagement_gui\" class=\"hide\">
            {{ 'Skipping errors might lead into unsynchronized primary and replica!'|trans|error }}
            <ul>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_skip_error_link|raw }}\">
                  {% trans 'Skip current error' %}
                </a>
              </li>
              <li>
                <form method=\"post\" action=\"{{ url('/server/replication') }}\">
                  {{ get_hidden_inputs('', '') }}
                  {{ 'Skip next %s errors.'|trans|format('<input type=\"text\" name=\"sr_skip_errors_count\" value=\"1\" class=\"repl_gui_skip_err_cnt\">')|raw }}
                  <input class=\"btn btn-primary\" type=\"submit\" name=\"sr_replica_skip_error\" value=\"{% trans 'Go' %}\">
                  <input type=\"hidden\" name=\"sr_take_action\" value=\"1\">
                </form>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ reconfigure_primary_link|raw }}\">
            {% trans 'Change or reconfigure primary server' %}
          </a>
        </li>
      </ul>
    </div>
  {% elseif not has_replica_configure %}
    {% apply format('<a href=\"' ~ url('/server/replication') ~ '\" data-post=\"' ~ get_common(url_params|merge({
      'replica_configure': true,
      'replica_clear_screen': true
    })) ~ '\">', '</a>')|raw %}
      {% trans 'This server is not configured as replica in a replication process. Would you like to %sconfigure%s it?' %}
    {% endapply %}
  {% endif %}
  </div>
</div>
", "server/replication/replica_configuration.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/replica_configuration.twig");
    }
}
