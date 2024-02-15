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

/* navigation/main.twig */
class __TwigTemplate_8d05e18f7ec0d89c22000d4cb69c81df extends Template
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
        if ( !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "  <div id=\"pma_navigation\" class=\"d-print-none\" data-config-navigation-width=\"";
            echo twig_escape_filter($this->env, (isset($context["config_navigation_width"]) || array_key_exists("config_navigation_width", $context) ? $context["config_navigation_width"] : (function () { throw new RuntimeError('Variable "config_navigation_width" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\">
      <div id=\"pma_navigation_header\">

        ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 8, $this->source); })()), "is_displayed", [], "any", false, false, false, 8)) {
                // line 9
                echo "          <div id=\"pmalogo\">
            ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 10, $this->source); })()), "has_link", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", false, false, false, 11), "#")) : ("#")), "html", null, true);
                    echo "\"";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 11, $this->source); })()), "attributes", [], "any", false, false, false, 11);
                    echo ">
            ";
                }
                // line 13
                echo "            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 13, $this->source); })()), "source", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "              <img id=\"imgpmalogo\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 14, $this->source); })()), "source", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" alt=\"phpMyAdmin\">
            ";
                } else {
                    // line 16
                    echo "              <h1>phpMyAdmin</h1>
            ";
                }
                // line 18
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 18, $this->source); })()), "has_link", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "              </a>
            ";
                }
                // line 21
                echo "          </div>
        ";
            }
            // line 23
            echo "
        <div id=\"navipanellinks\">
          <a href=\"";
            // line 25
            echo $this->env->getFunction('url')->getCallable()("/");
            echo "\" class=\"disableAjax\" title=\"";
echo _gettext("Home");
            echo "\">";
            // line 26
            echo $this->env->getFunction('get_image')->getCallable()("b_home", _gettext("Home"));
            // line 27
            echo "</a>

          ";
            // line 29
            if (((isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 29, $this->source); })()) > 0)) {
                // line 30
                echo "            <a class=\"logout disableAjax\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/logout");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ((((isset($context["auth_type"]) || array_key_exists("auth_type", $context) ? $context["auth_type"] : (function () { throw new RuntimeError('Variable "auth_type" does not exist.', 30, $this->source); })()) == "config")) ? (_gettext("Empty session data")) : (_gettext("Log out"))), "html", null, true);
                echo "\">";
                // line 31
                echo $this->env->getFunction('get_image')->getCallable()("s_loggoff", ((((isset($context["auth_type"]) || array_key_exists("auth_type", $context) ? $context["auth_type"] : (function () { throw new RuntimeError('Variable "auth_type" does not exist.', 31, $this->source); })()) == "config")) ? (_gettext("Empty session data")) : (_gettext("Log out"))));
                // line 32
                echo "</a>
          ";
            }
            // line 34
            echo "
          <a href=\"";
            // line 35
            echo $this->env->getFunction('get_docu_link')->getCallable()("index");
            echo "\" class=\"disableAjax\" title=\"";
echo _gettext("phpMyAdmin documentation");
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 36
            echo $this->env->getFunction('get_image')->getCallable()("b_docs", _gettext("phpMyAdmin documentation"));
            // line 37
            echo "</a>

          <a href=\"";
            // line 39
            echo $this->env->getFunction('get_docu_url')->getCallable()((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 39, $this->source); })()));
            echo "\" class=\"disableAjax\" title=\"";
            echo twig_escape_filter($this->env, (((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 39, $this->source); })())) ? (_gettext("MariaDB Documentation")) : (_gettext("MySQL Documentation"))), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 40
            echo $this->env->getFunction('get_image')->getCallable()("b_sqlhelp", (((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 40, $this->source); })())) ? (_gettext("MariaDB Documentation")) : (_gettext("MySQL Documentation"))));
            // line 41
            echo "</a>

          <a id=\"pma_navigation_settings_icon\"";
            // line 43
            echo (( !(isset($context["is_navigation_settings_enabled"]) || array_key_exists("is_navigation_settings_enabled", $context) ? $context["is_navigation_settings_enabled"] : (function () { throw new RuntimeError('Variable "is_navigation_settings_enabled" does not exist.', 43, $this->source); })())) ? (" class=\"hide\"") : (""));
            echo " href=\"#\" title=\"";
echo _gettext("Navigation panel settings");
            echo "\">";
            // line 44
            echo $this->env->getFunction('get_image')->getCallable()("s_cog", _gettext("Navigation panel settings"));
            // line 45
            echo "</a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"";
            // line 47
echo _gettext("Reload navigation panel");
            echo "\">";
            // line 48
            echo $this->env->getFunction('get_image')->getCallable()("s_reload", _gettext("Reload navigation panel"));
            // line 49
            echo "</a>
        </div>

        ";
            // line 52
            if (((isset($context["is_servers_displayed"]) || array_key_exists("is_servers_displayed", $context) ? $context["is_servers_displayed"] : (function () { throw new RuntimeError('Variable "is_servers_displayed" does not exist.', 52, $this->source); })()) && (twig_length_filter($this->env, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 52, $this->source); })())) > 1))) {
                // line 53
                echo "          <div id=\"serverChoice\">
            ";
                // line 54
                echo (isset($context["server_select"]) || array_key_exists("server_select", $context) ? $context["server_select"] : (function () { throw new RuntimeError('Variable "server_select" does not exist.', 54, $this->source); })());
                echo "
          </div>
        ";
            }
            // line 57
            echo "
        ";
            // line 58
            echo $this->env->getFunction('get_image')->getCallable()("ajax_clock_small", _gettext("Loading…"), ["style" => "visibility: hidden; display:none", "class" => "throbber"]);
            // line 61
            echo "
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container";
            // line 63
            echo (((isset($context["is_synced"]) || array_key_exists("is_synced", $context) ? $context["is_synced"] : (function () { throw new RuntimeError('Variable "is_synced" does not exist.', 63, $this->source); })())) ? (" synced") : (""));
            echo (((isset($context["is_highlighted"]) || array_key_exists("is_highlighted", $context) ? $context["is_highlighted"] : (function () { throw new RuntimeError('Variable "is_highlighted" does not exist.', 63, $this->source); })())) ? (" highlight") : (""));
            echo (((isset($context["is_autoexpanded"]) || array_key_exists("is_autoexpanded", $context) ? $context["is_autoexpanded"] : (function () { throw new RuntimeError('Variable "is_autoexpanded" does not exist.', 63, $this->source); })())) ? (" autoexpand") : (""));
            echo "\">
";
        }
        // line 65
        echo "
";
        // line 66
        if ( !(isset($context["navigation_tree"]) || array_key_exists("navigation_tree", $context) ? $context["navigation_tree"] : (function () { throw new RuntimeError('Variable "navigation_tree" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "  ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("An error has occurred while loading the navigation display"));
            echo "
";
        } else {
            // line 69
            echo "  ";
            echo (isset($context["navigation_tree"]) || array_key_exists("navigation_tree", $context) ? $context["navigation_tree"] : (function () { throw new RuntimeError('Variable "navigation_tree" does not exist.', 69, $this->source); })());
            echo "
";
        }
        // line 71
        echo "
";
        // line 72
        if ( !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "      </div>

      <div id=\"pma_navi_settings_container\">
        ";
            // line 76
            if ((isset($context["is_navigation_settings_enabled"]) || array_key_exists("is_navigation_settings_enabled", $context) ? $context["is_navigation_settings_enabled"] : (function () { throw new RuntimeError('Variable "is_navigation_settings_enabled" does not exist.', 76, $this->source); })())) {
                // line 77
                echo "          ";
                echo (isset($context["navigation_settings"]) || array_key_exists("navigation_settings", $context) ? $context["navigation_settings"] : (function () { throw new RuntimeError('Variable "navigation_settings" does not exist.', 77, $this->source); })());
                echo "
        ";
            }
            // line 79
            echo "      </div>
    </div>

    ";
            // line 82
            if ((isset($context["is_drag_drop_import_enabled"]) || array_key_exists("is_drag_drop_import_enabled", $context) ? $context["is_drag_drop_import_enabled"] : (function () { throw new RuntimeError('Variable "is_drag_drop_import_enabled" does not exist.', 82, $this->source); })())) {
                // line 83
                echo "      <div class=\"pma_drop_handler\">
        ";
                // line 84
echo _gettext("Drop files here");
                // line 85
                echo "      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          ";
                // line 88
echo _gettext("SQL upload");
                // line 89
                echo "          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    ";
            }
            // line 96
            echo "  </div>
  ";
            // line 97
            echo twig_include($this->env, $context, "modals/unhide_nav_item.twig");
            echo "
  ";
            // line 98
            echo twig_include($this->env, $context, "modals/create_view.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/main.twig";
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
        return array (  260 => 98,  256 => 97,  253 => 96,  244 => 89,  242 => 88,  237 => 85,  235 => 84,  232 => 83,  230 => 82,  225 => 79,  219 => 77,  217 => 76,  212 => 73,  210 => 72,  207 => 71,  201 => 69,  195 => 67,  193 => 66,  190 => 65,  183 => 63,  179 => 61,  177 => 58,  174 => 57,  168 => 54,  165 => 53,  163 => 52,  158 => 49,  156 => 48,  153 => 47,  149 => 45,  147 => 44,  142 => 43,  138 => 41,  136 => 40,  131 => 39,  127 => 37,  125 => 36,  120 => 35,  117 => 34,  113 => 32,  111 => 31,  105 => 30,  103 => 29,  99 => 27,  97 => 26,  92 => 25,  88 => 23,  84 => 21,  80 => 19,  77 => 18,  73 => 16,  67 => 14,  64 => 13,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not is_ajax %}
  <div id=\"pma_navigation\" class=\"d-print-none\" data-config-navigation-width=\"{{ config_navigation_width }}\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\">
      <div id=\"pma_navigation_header\">

        {% if logo.is_displayed %}
          <div id=\"pmalogo\">
            {% if logo.has_link %}
              <a href=\"{{ logo.link|default('#') }}\"{{ logo.attributes|raw }}>
            {% endif %}
            {% if logo.source is not empty %}
              <img id=\"imgpmalogo\" src=\"{{ logo.source }}\" alt=\"phpMyAdmin\">
            {% else %}
              <h1>phpMyAdmin</h1>
            {% endif %}
            {% if logo.has_link %}
              </a>
            {% endif %}
          </div>
        {% endif %}

        <div id=\"navipanellinks\">
          <a href=\"{{ url('/') }}\" class=\"disableAjax\" title=\"{% trans 'Home' %}\">
            {{- get_image('b_home', 'Home'|trans) -}}
          </a>

          {% if server > 0 %}
            <a class=\"logout disableAjax\" href=\"{{ url('/logout') }}\" title=\"{{ auth_type == 'config' ? 'Empty session data'|trans : 'Log out'|trans }}\">
              {{- get_image('s_loggoff', auth_type == 'config' ? 'Empty session data'|trans : 'Log out'|trans) -}}
            </a>
          {% endif %}

          <a href=\"{{ get_docu_link('index') }}\" class=\"disableAjax\" title=\"{% trans 'phpMyAdmin documentation' %}\" target=\"_blank\" rel=\"noopener noreferrer\">
            {{- get_image('b_docs', 'phpMyAdmin documentation'|trans) -}}
          </a>

          <a href=\"{{ get_docu_url(is_mariadb) }}\" class=\"disableAjax\" title=\"{{ is_mariadb ? 'MariaDB Documentation'|trans : 'MySQL Documentation'|trans }}\" target=\"_blank\" rel=\"noopener noreferrer\">
            {{- get_image('b_sqlhelp', is_mariadb ? 'MariaDB Documentation'|trans : 'MySQL Documentation'|trans) -}}
          </a>

          <a id=\"pma_navigation_settings_icon\"{{ not is_navigation_settings_enabled ? ' class=\"hide\"' }} href=\"#\" title=\"{% trans 'Navigation panel settings' %}\">
            {{- get_image('s_cog', 'Navigation panel settings'|trans) -}}
          </a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"{% trans 'Reload navigation panel' %}\">
            {{- get_image('s_reload', 'Reload navigation panel'|trans) -}}
          </a>
        </div>

        {% if is_servers_displayed and servers|length > 1 %}
          <div id=\"serverChoice\">
            {{ server_select|raw }}
          </div>
        {% endif %}

        {{ get_image('ajax_clock_small', 'Loading…'|trans, {
          'style': 'visibility: hidden; display:none',
          'class': 'throbber'
        }) }}
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container{{ is_synced ? ' synced' }}{{ is_highlighted ? ' highlight' }}{{ is_autoexpanded ? ' autoexpand' }}\">
{% endif %}

{% if not navigation_tree %}
  {{ 'An error has occurred while loading the navigation display'|trans|error }}
{% else %}
  {{ navigation_tree|raw }}
{% endif %}

{% if not is_ajax %}
      </div>

      <div id=\"pma_navi_settings_container\">
        {% if is_navigation_settings_enabled %}
          {{ navigation_settings|raw }}
        {% endif %}
      </div>
    </div>

    {% if is_drag_drop_import_enabled %}
      <div class=\"pma_drop_handler\">
        {% trans 'Drop files here' %}
      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          {% trans 'SQL upload' %}
          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    {% endif %}
  </div>
  {{ include('modals/unhide_nav_item.twig') }}
  {{ include('modals/create_view.twig') }}
{% endif %}
", "navigation/main.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/main.twig");
    }
}
