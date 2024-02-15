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
class __TwigTemplate_c340620d78c2f43689b082e21caf48f2 extends Template
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
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo "\" data-bs-theme=\"";
        echo twig_escape_filter($this->env, ($context["theme_color_mode"] ?? null), "html", null, true);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"no-referrer\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = ";
        // line 9
        echo (((($context["allow_third_party_framing"] ?? null) == "sameorigin")) ? ("\"sameorigin\"") : (((($context["allow_third_party_framing"] ?? null)) ? ("1") : ("0"))));
        echo ";</script>
  ";
        // line 10
        if ( !($context["allow_third_party_framing"] ?? null)) {
            // line 11
            echo "<style id=\"cfs-style\">html{display: none;}</style>";
        }
        // line 13
        echo "
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["theme_path"] ?? null), "html", null, true);
        echo "/jquery/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? null), "html", null, true);
        echo "js/vendor/codemirror/lib/codemirror.css?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? null), "html", null, true);
        echo "js/vendor/codemirror/addon/hint/show-hint.css?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_dir"] ?? null), "html", null, true);
        echo "js/vendor/codemirror/addon/lint/lint.css?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["theme_path"] ?? null), "html", null, true);
        echo "/css/theme";
        echo (((($context["text_dir"] ?? null) == "rtl")) ? (".rtl") : (""));
        echo ".css?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\">
  <title>";
        // line 21
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
  ";
        // line 22
        echo ($context["scripts"] ?? null);
        echo "
  <noscript><style>html{display:block}</style></noscript>
</head>
<body";
        // line 25
        (( !twig_test_empty(($context["body_id"] ?? null))) ? (print (twig_escape_filter($this->env, (" id=" . ($context["body_id"] ?? null)), "html", null, true))) : (print ("")));
        echo ">
  ";
        // line 26
        echo ($context["navigation"] ?? null);
        echo "
  ";
        // line 27
        echo ($context["custom_header"] ?? null);
        echo "
  ";
        // line 28
        echo ($context["load_user_preferences"] ?? null);
        echo "

  ";
        // line 30
        if ( !($context["show_hint"] ?? null)) {
            // line 31
            echo "    <span id=\"no_hint\" class=\"hide\"></span>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if (($context["is_warnings_enabled"] ?? null)) {
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
        if ((($context["is_menu_enabled"] ?? null) && (($context["server"] ?? null) > 0))) {
            // line 41
            echo "    ";
            echo ($context["menu"] ?? null);
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
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => (($__internal_compile_0 = ($context["current_user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "hostname" => (($__internal_compile_1 = ($context["current_user"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null)]);
            echo "\">
                ";
            // line 51
            echo $this->env->getFunction('get_image')->getCallable()("user", "", ["aria-hidden" => "true"]);
            echo " <span dir=\"ltr\">";
            echo twig_escape_filter($this->env, twig_join_filter(($context["current_user"] ?? null), "@"), "html", null, true);
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
            echo $this->env->getFunction('get_docu_url')->getCallable()(($context["is_mariadb"] ?? null));
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                ";
            // line 62
            echo $this->env->getFunction('get_icon')->getCallable()("b_sqlhelp", ((($context["is_mariadb"] ?? null)) ? (_gettext("MariaDB documentation")) : (_gettext("MySQL documentation"))));
            echo "
              </a>
            </li>
            <li><hr class=\"dropdown-divider\"></li>
            ";
            // line 66
            if ((twig_length_filter($this->env, ($context["theme_color_modes"] ?? null)) > 1)) {
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
                echo twig_escape_filter($this->env, ($context["theme_id"] ?? null), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["theme_color_modes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                    // line 78
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["color_mode"], "html", null, true);
                    echo "\"";
                    echo (((($context["theme_color_mode"] ?? null) == $context["color_mode"])) ? (" selected") : (""));
                    echo ">";
                    // line 79
                    if (($context["color_mode"] == "light")) {
echo _pgettext("Light color mode of the theme", "Light");
                    } elseif ((                    // line 81
$context["color_mode"] == "dark")) {
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
        echo ($context["console"] ?? null);
        echo "

  <div id=\"page_content\">
    ";
        // line 118
        echo ($context["messages"] ?? null);
        echo "

    ";
        // line 120
        echo ($context["recent_table"] ?? null);
        // line 121
        if (($context["is_logged_in"] ?? null)) {
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
        return array (  329 => 124,  325 => 123,  321 => 122,  319 => 121,  317 => 120,  312 => 118,  306 => 115,  303 => 114,  296 => 110,  291 => 108,  277 => 99,  268 => 95,  265 => 94,  257 => 88,  250 => 86,  247 => 84,  243 => 81,  240 => 79,  234 => 78,  230 => 77,  226 => 76,  220 => 73,  214 => 70,  210 => 69,  206 => 68,  203 => 67,  201 => 66,  194 => 62,  190 => 61,  183 => 57,  179 => 56,  169 => 51,  165 => 50,  160 => 47,  158 => 46,  150 => 41,  148 => 40,  145 => 39,  139 => 36,  136 => 35,  134 => 34,  131 => 33,  127 => 31,  125 => 30,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  102 => 22,  98 => 21,  90 => 20,  84 => 19,  78 => 18,  72 => 17,  68 => 16,  63 => 13,  60 => 11,  58 => 10,  54 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\header.twig");
    }
}
