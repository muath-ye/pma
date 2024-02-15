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

/* header.twig */
class __TwigTemplate_9c4ed247b3b9648412cca3154fb2bbbe extends Template
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
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" data-bs-theme=\"";
        echo twig_escape_filter($this->env, (isset($context["theme_color_mode"]) || array_key_exists("theme_color_mode", $context) ? $context["theme_color_mode"] : (function () { throw new RuntimeError('Variable "theme_color_mode" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"no-referrer\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = ";
        // line 9
        echo ((((isset($context["allow_third_party_framing"]) || array_key_exists("allow_third_party_framing", $context) ? $context["allow_third_party_framing"] : (function () { throw new RuntimeError('Variable "allow_third_party_framing" does not exist.', 9, $this->source); })()) == "sameorigin")) ? ("\"sameorigin\"") : ((((isset($context["allow_third_party_framing"]) || array_key_exists("allow_third_party_framing", $context) ? $context["allow_third_party_framing"] : (function () { throw new RuntimeError('Variable "allow_third_party_framing" does not exist.', 9, $this->source); })())) ? ("1") : ("0"))));
        echo ";</script>
  ";
        // line 10
        if ( !(isset($context["allow_third_party_framing"]) || array_key_exists("allow_third_party_framing", $context) ? $context["allow_third_party_framing"] : (function () { throw new RuntimeError('Variable "allow_third_party_framing" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "<style id=\"cfs-style\">html{display: none;}</style>";
        }
        // line 13
        echo "
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["theme_path"]) || array_key_exists("theme_path", $context) ? $context["theme_path"] : (function () { throw new RuntimeError('Variable "theme_path" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "/jquery/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) || array_key_exists("base_dir", $context) ? $context["base_dir"] : (function () { throw new RuntimeError('Variable "base_dir" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "js/vendor/codemirror/lib/codemirror.css?";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) || array_key_exists("base_dir", $context) ? $context["base_dir"] : (function () { throw new RuntimeError('Variable "base_dir" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "js/vendor/codemirror/addon/hint/show-hint.css?";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) || array_key_exists("base_dir", $context) ? $context["base_dir"] : (function () { throw new RuntimeError('Variable "base_dir" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "js/vendor/codemirror/addon/lint/lint.css?";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["theme_path"]) || array_key_exists("theme_path", $context) ? $context["theme_path"] : (function () { throw new RuntimeError('Variable "theme_path" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "/css/theme";
        echo ((((isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 20, $this->source); })()) == "rtl")) ? (".rtl") : (""));
        echo ".css?";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
  <title>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</title>
  ";
        // line 22
        echo (isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new RuntimeError('Variable "scripts" does not exist.', 22, $this->source); })());
        echo "
  <noscript><style>html{display:block}</style></noscript>
</head>
<body";
        // line 25
        (( !twig_test_empty((isset($context["body_id"]) || array_key_exists("body_id", $context) ? $context["body_id"] : (function () { throw new RuntimeError('Variable "body_id" does not exist.', 25, $this->source); })()))) ? (print (twig_escape_filter($this->env, (" id=" . (isset($context["body_id"]) || array_key_exists("body_id", $context) ? $context["body_id"] : (function () { throw new RuntimeError('Variable "body_id" does not exist.', 25, $this->source); })())), "html", null, true))) : (print ("")));
        echo ">
  ";
        // line 26
        echo (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 26, $this->source); })());
        echo "
  ";
        // line 27
        echo (isset($context["custom_header"]) || array_key_exists("custom_header", $context) ? $context["custom_header"] : (function () { throw new RuntimeError('Variable "custom_header" does not exist.', 27, $this->source); })());
        echo "
  ";
        // line 28
        echo (isset($context["load_user_preferences"]) || array_key_exists("load_user_preferences", $context) ? $context["load_user_preferences"] : (function () { throw new RuntimeError('Variable "load_user_preferences" does not exist.', 28, $this->source); })());
        echo "

  ";
        // line 30
        if ( !(isset($context["show_hint"]) || array_key_exists("show_hint", $context) ? $context["show_hint"] : (function () { throw new RuntimeError('Variable "show_hint" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "    <span id=\"no_hint\" class=\"hide\"></span>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if ((isset($context["is_warnings_enabled"]) || array_key_exists("is_warnings_enabled", $context) ? $context["is_warnings_enabled"] : (function () { throw new RuntimeError('Variable "is_warnings_enabled" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "    <noscript>
      ";
            // line 36
            echo $this->env->getFilter('error')->getCallable()(_gettext("Javascript must be enabled past this point!"));
            echo "
    </noscript>
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if (((isset($context["is_menu_enabled"]) || array_key_exists("is_menu_enabled", $context) ? $context["is_menu_enabled"] : (function () { throw new RuntimeError('Variable "is_menu_enabled" does not exist.', 40, $this->source); })()) && ((isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 40, $this->source); })()) > 0))) {
            // line 41
            echo "    ";
            echo (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 41, $this->source); })());
            echo "
    <div id=\"page_nav_icons\" class=\"row row-cols-sm-auto align-items-center d-print-none me-3 p-1\">
      <div class=\"col-12\">
        <div id=\"userAccountDropdown\" class=\"dropdown\">
          <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
            // line 46
            echo $this->env->getFunction('get_image')->getCallable()("user", _gettext("Open user account menu"));
            // line 47
            echo "</button>
          <ul class=\"dropdown-menu\">
            <li>
              <a class=\"dropdown-item text-nowrap disableAjax\" href=\"";
            // line 50
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 50, $this->source); })()), 0, [], "array", false, false, false, 50), "hostname" => twig_get_attribute($this->env, $this->source, (isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 50, $this->source); })()), 1, [], "array", false, false, false, 50)]);
            echo "\">
                ";
            // line 51
            echo $this->env->getFunction('get_image')->getCallable()("user", "", ["aria-hidden" => "true"]);
            echo " <span dir=\"ltr\">";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 51, $this->source); })()), "@"), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            <li>
              <a class=\"dropdown-item disableAjax\" href=\"";
            // line 56
            echo $this->env->getFunction('get_docu_link')->getCallable()("index");
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                ";
            // line 57
            echo $this->env->getFunction('get_icon')->getCallable()("b_docs", _gettext("phpMyAdmin documentation"));
            echo "
              </a>
            </li>
            <li>
              <a class=\"dropdown-item disableAjax\" href=\"";
            // line 61
            echo $this->env->getFunction('get_docu_url')->getCallable()((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 61, $this->source); })()));
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                ";
            // line 62
            echo $this->env->getFunction('get_icon')->getCallable()("b_sqlhelp", (((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 62, $this->source); })())) ? (_gettext("MariaDB documentation")) : (_gettext("MySQL documentation"))));
            echo "
              </a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            ";
            // line 66
            if ((twig_length_filter($this->env, (isset($context["theme_color_modes"]) || array_key_exists("theme_color_modes", $context) ? $context["theme_color_modes"] : (function () { throw new RuntimeError('Variable "theme_color_modes" does not exist.', 66, $this->source); })())) > 1)) {
                // line 67
                echo "              <li>
                <form method=\"post\" action=\"";
                // line 68
                echo $this->env->getFunction('url')->getCallable()("/themes/set");
                echo "\" class=\"dropdown-item py-0 disableAjax\">
                  ";
                // line 69
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
                echo "
                  <input type=\"hidden\" name=\"set_theme\" value=\"";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["theme_id"]) || array_key_exists("theme_id", $context) ? $context["theme_id"] : (function () { throw new RuntimeError('Variable "theme_id" does not exist.', 70, $this->source); })()), "html", null, true);
                echo "\">
                  <div class=\"row row-cols-lg-auto align-items-center flex-nowrap\">
                  <div class=\"col-12\">
                    <label class=\"col-form-label\" for=\"themeColorModeToggle\">";
                // line 73
                echo $this->env->getFunction('get_icon')->getCallable()("s_theme", _gettext("Appearance:"));
                echo "</label>
                  </div>
                  <div class=\"col-12\">
                    <select class=\"form-select form-select-sm\" name=\"themeColorMode\" id=\"themeColorModeToggle\" aria-label=\"";
                // line 76
                echo twig_escape_filter($this->env, _gettext("Color mode for the theme"), "html", null, true);
                echo "\">
                      ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["theme_color_modes"]) || array_key_exists("theme_color_modes", $context) ? $context["theme_color_modes"] : (function () { throw new RuntimeError('Variable "theme_color_modes" does not exist.', 77, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                    // line 78
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["color_mode"], "html", null, true);
                    echo "\"";
                    echo ((((isset($context["theme_color_mode"]) || array_key_exists("theme_color_mode", $context) ? $context["theme_color_mode"] : (function () { throw new RuntimeError('Variable "theme_color_mode" does not exist.', 78, $this->source); })()) == $context["color_mode"])) ? (" selected") : (""));
                    echo ">";
                    // line 79
                    if (($context["color_mode"] == "light")) {
                        // line 80
echo _pgettext("Light color mode of the theme", "Light");
                    } elseif ((                    // line 81
$context["color_mode"] == "dark")) {
                        // line 82
echo _pgettext("Dark color mode of the theme", "Dark");
                    } else {
                        // line 84
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["color_mode"]), "html", null, true);
                    }
                    // line 86
                    echo "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color_mode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                    </select>
                  </div>
                  </div>
                </form>
              </li>
            ";
            }
            // line 94
            echo "            <li>
              <a class=\"dropdown-item disableAjax\" href=\"";
            // line 95
            echo $this->env->getFunction('url')->getCallable()("/preferences/manage");
            echo "\">";
            echo $this->env->getFunction('get_icon')->getCallable()("s_cog", _gettext("Settings"));
            echo "</a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            <li>
              <a class=\"dropdown-item logout disableAjax\" href=\"";
            // line 99
            echo $this->env->getFunction('url')->getCallable()("/logout");
            echo "\">";
            echo $this->env->getFunction('get_icon')->getCallable()("s_loggoff", _gettext("Log out"));
            echo "</a>
            </li>
          </ul>
        </div>
      </div>

      <div class=\"col-12\">
        <span id=\"lock_page_icon\"></span>
        <span id=\"page_settings_icon\">
          ";
            // line 108
            echo $this->env->getFunction('get_image')->getCallable()("s_cog", _gettext("Page-related settings"));
            echo "
        </span>
        <a id=\"goto_pagetop\" href=\"#\">";
            // line 110
            echo $this->env->getFunction('get_image')->getCallable()("s_top", _gettext("Click on the bar to scroll to top of page"));
            echo "</a>
      </div>
    </div>
  ";
        }
        // line 114
        echo "
  ";
        // line 115
        echo (isset($context["console"]) || array_key_exists("console", $context) ? $context["console"] : (function () { throw new RuntimeError('Variable "console" does not exist.', 115, $this->source); })());
        echo "

  <div id=\"page_content\">
    ";
        // line 118
        echo (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 118, $this->source); })());
        echo "

    ";
        // line 120
        echo (isset($context["recent_table"]) || array_key_exists("recent_table", $context) ? $context["recent_table"] : (function () { throw new RuntimeError('Variable "recent_table" does not exist.', 120, $this->source); })());
        // line 121
        if ((isset($context["is_logged_in"]) || array_key_exists("is_logged_in", $context) ? $context["is_logged_in"] : (function () { throw new RuntimeError('Variable "is_logged_in" does not exist.', 121, $this->source); })())) {
            // line 122
            echo twig_include($this->env, $context, "modals/preview_sql_modal.twig");
            echo "
    ";
            // line 123
            echo twig_include($this->env, $context, "modals/enum_set_editor.twig");
            echo "
    ";
            // line 124
            echo twig_include($this->env, $context, "modals/create_view.twig");
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.twig";
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
        return array (  331 => 124,  327 => 123,  323 => 122,  321 => 121,  319 => 120,  314 => 118,  308 => 115,  305 => 114,  298 => 110,  293 => 108,  279 => 99,  270 => 95,  267 => 94,  259 => 88,  252 => 86,  249 => 84,  246 => 82,  244 => 81,  242 => 80,  240 => 79,  234 => 78,  230 => 77,  226 => 76,  220 => 73,  214 => 70,  210 => 69,  206 => 68,  203 => 67,  201 => 66,  194 => 62,  190 => 61,  183 => 57,  179 => 56,  169 => 51,  165 => 50,  160 => 47,  158 => 46,  150 => 41,  148 => 40,  145 => 39,  139 => 36,  136 => 35,  134 => 34,  131 => 33,  127 => 31,  125 => 30,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  102 => 22,  98 => 21,  90 => 20,  84 => 19,  78 => 18,  72 => 17,  68 => 16,  63 => 13,  60 => 11,  58 => 10,  54 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{ lang }}\" dir=\"{{ text_dir }}\" data-bs-theme=\"{{ theme_color_mode }}\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"no-referrer\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = {{ allow_third_party_framing == 'sameorigin' ? '\"sameorigin\"' : (allow_third_party_framing ? '1' : '0') }};</script>
  {% if not allow_third_party_framing -%}
    <style id=\"cfs-style\">html{display: none;}</style>
  {%- endif %}

  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ theme_path }}/jquery/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_dir }}js/vendor/codemirror/lib/codemirror.css?{{ version }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_dir }}js/vendor/codemirror/addon/hint/show-hint.css?{{ version }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_dir }}js/vendor/codemirror/addon/lint/lint.css?{{ version }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ theme_path }}/css/theme{{ text_dir == 'rtl' ? '.rtl' }}.css?{{ version }}\">
  <title>{{ title }}</title>
  {{ scripts|raw }}
  <noscript><style>html{display:block}</style></noscript>
</head>
<body{{ body_id is not empty ? ' id=' ~ body_id }}>
  {{ navigation|raw }}
  {{ custom_header|raw }}
  {{ load_user_preferences|raw }}

  {% if not show_hint %}
    <span id=\"no_hint\" class=\"hide\"></span>
  {% endif %}

  {% if is_warnings_enabled %}
    <noscript>
      {{ 'Javascript must be enabled past this point!'|trans|error }}
    </noscript>
  {% endif %}

  {% if is_menu_enabled and server > 0 %}
    {{ menu|raw }}
    <div id=\"page_nav_icons\" class=\"row row-cols-sm-auto align-items-center d-print-none me-3 p-1\">
      <div class=\"col-12\">
        <div id=\"userAccountDropdown\" class=\"dropdown\">
          <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {{- get_image('user', 'Open user account menu'|trans) -}}
          </button>
          <ul class=\"dropdown-menu\">
            <li>
              <a class=\"dropdown-item text-nowrap disableAjax\" href=\"{{ url('/server/privileges', {'username': current_user[0], 'hostname': current_user[1]}) }}\">
                {{ get_image('user', '', {'aria-hidden': 'true'}) }} <span dir=\"ltr\">{{ current_user|join('@') }}</span>
              </a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            <li>
              <a class=\"dropdown-item disableAjax\" href=\"{{ get_docu_link('index') }}\" target=\"_blank\" rel=\"noopener noreferrer\">
                {{ get_icon('b_docs', 'phpMyAdmin documentation'|trans) }}
              </a>
            </li>
            <li>
              <a class=\"dropdown-item disableAjax\" href=\"{{ get_docu_url(is_mariadb) }}\" target=\"_blank\" rel=\"noopener noreferrer\">
                {{ get_icon('b_sqlhelp', is_mariadb ? 'MariaDB documentation'|trans : 'MySQL documentation'|trans) }}
              </a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            {% if theme_color_modes|length > 1 %}
              <li>
                <form method=\"post\" action=\"{{ url('/themes/set') }}\" class=\"dropdown-item py-0 disableAjax\">
                  {{ get_hidden_inputs() }}
                  <input type=\"hidden\" name=\"set_theme\" value=\"{{ theme_id }}\">
                  <div class=\"row row-cols-lg-auto align-items-center flex-nowrap\">
                  <div class=\"col-12\">
                    <label class=\"col-form-label\" for=\"themeColorModeToggle\">{{ get_icon('s_theme', 'Appearance:'|trans) }}</label>
                  </div>
                  <div class=\"col-12\">
                    <select class=\"form-select form-select-sm\" name=\"themeColorMode\" id=\"themeColorModeToggle\" aria-label=\"{{ 'Color mode for the theme'|trans }}\">
                      {% for color_mode in theme_color_modes %}
                        <option value=\"{{ color_mode }}\"{{ theme_color_mode == color_mode ? ' selected' }}>
                          {%- if color_mode == 'light' -%}
                            {% trans %}Light{% context %}Light color mode of the theme{% endtrans %}
                          {%- elseif color_mode == 'dark' -%}
                            {% trans %}Dark{% context %}Dark color mode of the theme{% endtrans %}
                          {%- else -%}
                            {{ color_mode|title }}
                          {%- endif -%}
                        </option>
                      {% endfor %}
                    </select>
                  </div>
                  </div>
                </form>
              </li>
            {% endif %}
            <li>
              <a class=\"dropdown-item disableAjax\" href=\"{{ url('/preferences/manage') }}\">{{ get_icon('s_cog', 'Settings'|trans) }}</a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            <li>
              <a class=\"dropdown-item logout disableAjax\" href=\"{{ url('/logout') }}\">{{ get_icon('s_loggoff', 'Log out'|trans) }}</a>
            </li>
          </ul>
        </div>
      </div>

      <div class=\"col-12\">
        <span id=\"lock_page_icon\"></span>
        <span id=\"page_settings_icon\">
          {{ get_image('s_cog', 'Page-related settings'|trans) }}
        </span>
        <a id=\"goto_pagetop\" href=\"#\">{{ get_image('s_top', 'Click on the bar to scroll to top of page'|trans) }}</a>
      </div>
    </div>
  {% endif %}

  {{ console|raw }}

  <div id=\"page_content\">
    {{ messages|raw }}

    {{ recent_table|raw }}
    {%- if is_logged_in -%}
    {{ include('modals/preview_sql_modal.twig') }}
    {{ include('modals/enum_set_editor.twig') }}
    {{ include('modals/create_view.twig') }}
    {%- endif -%}
", "header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/header.twig");
    }
}
