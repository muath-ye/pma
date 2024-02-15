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

/* home/index.twig */
class __TwigTemplate_e3e54abd00079655caaabfb512d0008b extends Template
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
        if (($context["is_git_revision"] ?? null)) {
            // line 2
            echo "  <div id=\"is_git_revision\"></div>
";
        }
        // line 4
        echo "
";
        // line 5
        echo ($context["message"] ?? null);
        echo "

";
        // line 7
        echo ($context["partial_logout"] ?? null);
        echo "

<div id=\"maincontainer\">
  ";
        // line 10
        echo ($context["sync_favorite_tables"] ?? null);
        echo "
  <div class=\"container-fluid\">
    <div class=\"row mb-3\">
      <div class=\"col-lg-7 col-12\">
        ";
        // line 14
        if (($context["has_server"] ?? null)) {
            // line 15
            echo "          ";
            if (($context["is_demo"] ?? null)) {
                // line 16
                echo "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
echo _gettext("phpMyAdmin Demo Server");
                // line 19
                echo "              </div>
              <div class=\"card-body\">
                ";
                // line 21
                ob_start(function () { return ''; });
                // line 22
                echo "                  ";
echo _gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.");
                // line 25
                echo "                ";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                echo twig_sprintf($___internal_parse_0_, (("<a href=\"" . $this->env->getFunction('url')->getCallable()("/url", ["url" => "https://demo.phpmyadmin.net/"])) . "\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>"));
                // line 26
                echo "              </div>
            </div>
          ";
            }
            // line 29
            echo "
            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
echo _gettext("General settings");
            // line 33
            echo "              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 35
            if (($context["has_server_selection"] ?? null)) {
                // line 36
                echo "                  <li id=\"li_select_server\" class=\"list-group-item\">
                    ";
                // line 37
                echo $this->env->getFunction('get_image')->getCallable()("s_host");
                echo "
                    ";
                // line 38
                echo ($context["server_selection"] ?? null);
                echo "
                  </li>
                ";
            }
            // line 41
            echo "
                ";
            // line 42
            if ((($context["server"] ?? null) > 0)) {
                // line 43
                echo "                  ";
                if (($context["has_change_password_link"] ?? null)) {
                    // line 44
                    echo "                    <li id=\"li_change_password\" class=\"list-group-item\">
                      <a href=\"";
                    // line 45
                    echo $this->env->getFunction('url')->getCallable()("/user-password");
                    echo "\" id=\"change_password_anchor\" class=\"ajax\">
                        ";
                    // line 46
                    echo $this->env->getFunction('get_icon')->getCallable()("s_passwd", _gettext("Change password"), true);
                    echo "
                      </a>
                      ";
                    // line 48
                    echo twig_include($this->env, $context, "modals/change_password.twig");
                    echo "
                    </li>
                  ";
                }
                // line 51
                echo "
                  <li id=\"li_select_mysql_collation\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 53
                echo $this->env->getFunction('url')->getCallable()("/collation-connection");
                echo "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 54
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()("", "", "collation_connection");
                echo "
                      <div class=\"col-12\">
                        <label for=\"collationConnectionSelect\" class=\"col-form-label\">
                          ";
                // line 57
                echo $this->env->getFunction('get_image')->getCallable()("s_asci");
                echo "
                          ";
echo _gettext("Server connection collation:");
                // line 59
                echo "                          ";
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("charset-connection");
                echo "
                        </label>
                      </div>
                      ";
                // line 62
                if ( !twig_test_empty(($context["charsets"] ?? null))) {
                    // line 63
                    echo "                      <div class=\"col-12\">
                        <select lang=\"en\" dir=\"ltr\" name=\"collation_connection\" id=\"collationConnectionSelect\" class=\"form-select autosubmit\">
                          <option value=\"\">";
echo _gettext("Collation");
                    // line 65
                    echo "</option>
                          <option value=\"\"></option>
                          ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 68
                        echo "                            <optgroup label=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 68), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 68), "html", null, true);
                        echo "\">
                              ";
                        // line 69
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 69));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 70
                            echo "                                <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 70), "html", null, true);
                            echo "\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 70)) ? (" selected") : (""));
                            echo ">";
                            // line 71
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 71), "html", null, true);
                            // line 72
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                            </optgroup>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                        </select>
                      </div>
                      ";
                }
                // line 79
                echo "                    </form>
                  </li>

                  <li id=\"li_user_preferences\" class=\"list-group-item\">
                    <a href=\"";
                // line 83
                echo $this->env->getFunction('url')->getCallable()("/preferences/manage");
                echo "\">
                      ";
                // line 84
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblops", _gettext("More settings"), true);
                echo "
                    </a>
                  </li>
                ";
            }
            // line 88
            echo "              </ul>
            </div>
          ";
        }
        // line 91
        echo "
            ";
        // line 92
        if (( !twig_test_empty(($context["available_languages"] ?? null)) || ($context["has_theme_manager"] ?? null))) {
            // line 93
            echo "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
echo _gettext("Appearance settings");
            // line 96
            echo "              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 98
            if ( !twig_test_empty(($context["available_languages"] ?? null))) {
                // line 99
                echo "                  <li id=\"li_select_lang\" class=\"list-group-item\">
                    <form method=\"get\" action=\"";
                // line 100
                echo $this->env->getFunction('url')->getCallable()("/");
                echo "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 101
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                echo "
                      <div class=\"col-12\">
                        <label for=\"languageSelect\" class=\"col-form-label text-nowrap\">
                          ";
                // line 104
                echo $this->env->getFunction('get_image')->getCallable()("s_lang");
                echo "
                          ";
echo _gettext("Language");
                // line 106
                echo "                          ";
                if ((_gettext("Language") != "Language")) {
                    // line 107
                    echo "                            ";
                    // line 109
                    echo "                            <i lang=\"en\" dir=\"ltr\">(Language)</i>
                          ";
                }
                // line 111
                echo "                          ";
                echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq7-2");
                echo "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <select name=\"lang\" class=\"form-select autosubmit w-auto\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\">
                          ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 117
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 117)), "html", null, true);
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 117)) ? (" selected") : (""));
                    echo ">";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 118);
                    // line 119
                    echo "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                        </select>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 126
            echo "
                ";
            // line 127
            if (($context["has_theme_manager"] ?? null)) {
                // line 128
                echo "                  <li id=\"li_select_theme\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 129
                echo $this->env->getFunction('url')->getCallable()("/themes/set");
                echo "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 130
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
                echo "
                      <div class=\"col-12\">
                        <label for=\"themeSelect\" class=\"col-form-label\">
                          ";
                // line 133
                echo $this->env->getFunction('get_icon')->getCallable()("s_theme", _gettext("Theme"));
                echo "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"input-group\">
                          <select name=\"set_theme\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"themeSelect\">
                            ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 140
                    echo "                              <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 140), "html", null, true);
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 140)) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 140), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "                          </select>
                          <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#themesModal\">
                            ";
echo _pgettext("View all themes", "View all");
                // line 145
                echo "                          </button>
                        </div>
                      </div>

                      ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 150
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 150) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "color_modes", [], "any", false, false, false, 150)) > 1))) {
                        // line 151
                        echo "                          <div class=\"col-12\">
                            <select class=\"form-select autosubmit\" name=\"themeColorMode\" aria-label=\"";
                        // line 152
                        echo twig_escape_filter($this->env, _gettext("Color mode for the theme"), "html", null, true);
                        echo "\">
                              ";
                        // line 153
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["theme"], "color_modes", [], "any", false, false, false, 153));
                        foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                            // line 154
                            echo "                                <option value=\"";
                            echo twig_escape_filter($this->env, $context["color_mode"], "html", null, true);
                            echo "\"";
                            echo (((twig_get_attribute($this->env, $this->source, $context["theme"], "color_mode", [], "any", false, false, false, 154) == $context["color_mode"])) ? (" selected") : (""));
                            echo ">";
                            // line 155
                            if (($context["color_mode"] == "light")) {
echo _pgettext("Light color mode of the theme", "Light");
                            } elseif ((                            // line 157
$context["color_mode"] == "dark")) {
echo _pgettext("Dark color mode of the theme", "Dark");
                            } else {
                                // line 160
                                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["color_mode"]), "html", null, true);
                            }
                            // line 162
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color_mode'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 164
                        echo "                            </select>
                          </div>
                        ";
                    }
                    // line 167
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "                    </form>
                  </li>
                ";
            }
            // line 171
            echo "              </ul>
            </div>
            ";
        }
        // line 174
        echo "          </div>

      <div class=\"col-lg-5 col-12\">
        ";
        // line 177
        if ( !twig_test_empty(($context["database_server"] ?? null))) {
            // line 178
            echo "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
echo _gettext("Database server");
            // line 181
            echo "            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                ";
echo _gettext("Server:");
            // line 185
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "host", [], "any", false, false, false, 185), "html", null, true);
            echo "
              </li>
              <li class=\"list-group-item\">
                ";
echo _gettext("Server type:");
            // line 189
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "type", [], "any", false, false, false, 189), "html", null, true);
            echo "
              </li>
              <li class=\"list-group-item\">
                ";
echo _gettext("Server connection:");
            // line 193
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "connection", [], "any", false, false, false, 193);
            echo "
              </li>
              <li class=\"list-group-item\">
                ";
echo _gettext("Server version:");
            // line 197
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "version", [], "any", false, false, false, 197), "html", null, true);
            echo "
              </li>
              <li class=\"list-group-item\">
                ";
echo _gettext("Protocol version:");
            // line 201
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "protocol", [], "any", false, false, false, 201), "html", null, true);
            echo "
              </li>
              <li class=\"list-group-item\">
                ";
echo _gettext("User:");
            // line 205
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "user", [], "any", false, false, false, 205), "html", null, true);
            echo "
              </li>
              <li class=\"list-group-item\">
                ";
echo _gettext("Server charset:");
            // line 209
            echo "                <span lang=\"en\" dir=\"ltr\">
                  ";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_server"] ?? null), "charset", [], "any", false, false, false, 210), "html", null, true);
            echo "
                </span>
              </li>
            </ul>
          </div>
        ";
        }
        // line 216
        echo "
        ";
        // line 217
        if (( !twig_test_empty(($context["web_server"] ?? null)) || ($context["show_php_info"] ?? null))) {
            // line 218
            echo "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
echo _gettext("Web server");
            // line 221
            echo "            </div>
            <ul class=\"list-group list-group-flush\">
              ";
            // line 223
            if ( !twig_test_empty(($context["web_server"] ?? null))) {
                // line 224
                echo "                ";
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 224))) {
                    // line 225
                    echo "                <li class=\"list-group-item\">
                  ";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 226), "html", null, true);
                    echo "
                </li>
                ";
                }
                // line 229
                echo "                <li class=\"list-group-item\" id=\"li_mysql_client_version\">
                  ";
echo _gettext("Database client version:");
                // line 231
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["web_server"] ?? null), "database", [], "any", false, false, false, 231), "html", null, true);
                echo "
                </li>
                <li class=\"list-group-item\">
                  ";
echo _gettext("PHP extension:");
                // line 235
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["web_server"] ?? null), "php_extensions", [], "any", false, false, false, 235));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 236
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                    echo "
                    ";
                    // line 237
                    echo $this->env->getFunction('show_php_docu')->getCallable()((("book." . $context["extension"]) . ".php"));
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 239
                echo "                </li>
                <li class=\"list-group-item\">
                  ";
echo _gettext("PHP version:");
                // line 242
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["web_server"] ?? null), "php_version", [], "any", false, false, false, 242), "html", null, true);
                echo "
                </li>
              ";
            }
            // line 245
            echo "              ";
            if (($context["show_php_info"] ?? null)) {
                // line 246
                echo "                <li class=\"list-group-item\">
                  <a href=\"";
                // line 247
                echo $this->env->getFunction('url')->getCallable()("/phpinfo");
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                    ";
echo _gettext("Show PHP information");
                // line 249
                echo "                  </a>
                </li>
              ";
            }
            // line 252
            echo "            </ul>
          </div>
        ";
        }
        // line 255
        echo "
          <div class=\"card mt-4\">
            <div class=\"card-header\">
              phpMyAdmin
            </div>
            <ul class=\"list-group list-group-flush\">
              <li id=\"li_pma_version\" class=\"list-group-item";
        // line 261
        echo ((($context["is_version_checked"] ?? null)) ? (" jsversioncheck") : (""));
        echo "\">
                ";
echo _gettext("Version information:");
        // line 263
        echo "                <span class=\"version\">";
        echo twig_escape_filter($this->env, ($context["phpmyadmin_version"] ?? null), "html", null, true);
        echo "</span>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 266
        echo $this->env->getFunction('get_docu_link')->getCallable()("index");
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
echo _gettext("Documentation");
        // line 268
        echo "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()("https://www.phpmyadmin.net/"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
echo _gettext("Official Homepage");
        // line 273
        echo "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()("https://www.phpmyadmin.net/contribute/"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
echo _gettext("Contribute");
        // line 278
        echo "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()("https://www.phpmyadmin.net/support/"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
echo _gettext("Get support");
        // line 283
        echo "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 286
        echo $this->env->getFunction('url')->getCallable()("/changelog");
        echo "\" target=\"_blank\">
                  ";
echo _gettext("List of changes");
        // line 288
        echo "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 291
        echo $this->env->getFunction('url')->getCallable()("/license");
        echo "\" target=\"_blank\">
                  ";
echo _gettext("License");
        // line 293
        echo "                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 301
            echo "        <div class=\"alert ";
            echo (((twig_get_attribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 301) == "warning")) ? ("alert-warning") : ("alert-info"));
            echo "\" role=\"alert\">
          ";
            // line 302
            if ((twig_get_attribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 302) == "warning")) {
                // line 303
                echo "            ";
                echo $this->env->getFunction('get_image')->getCallable()("s_attention", _gettext("Warning"));
                echo "
          ";
            } else {
                // line 305
                echo "            ";
                echo $this->env->getFunction('get_image')->getCallable()("s_notice", _gettext("Notice"));
                echo "
          ";
            }
            // line 307
            echo "          ";
            echo $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 307));
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "    </div>
  </div>

";
        // line 313
        if (($context["has_theme_manager"] ?? null)) {
            // line 314
            echo "  <div class=\"modal fade\" id=\"themesModal\" tabindex=\"-1\" aria-labelledby=\"themesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"themesModalLabel\">";
echo _gettext("phpMyAdmin Themes");
            // line 318
            echo "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
            // line 319
            echo "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
echo _gettext("Loading…");
            // line 323
            echo "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
            // line 327
            echo "</button>
          <a href=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()("https://www.phpmyadmin.net/themes/"), "html", null, true);
            echo "#pma_";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["phpmyadmin_major_version"] ?? null), ["." => "_"]), "html", null, true);
            echo "\" class=\"btn btn-primary\" rel=\"noopener noreferrer\" target=\"_blank\">
            ";
echo _gettext("Get more themes!");
            // line 330
            echo "          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 336
        echo "
";
        // line 337
        echo ($context["config_storage_message"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.twig";
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
        return array (  781 => 337,  778 => 336,  770 => 330,  763 => 328,  760 => 327,  753 => 323,  746 => 319,  742 => 318,  735 => 314,  733 => 313,  728 => 310,  718 => 307,  712 => 305,  706 => 303,  704 => 302,  699 => 301,  695 => 300,  686 => 293,  681 => 291,  676 => 288,  671 => 286,  666 => 283,  661 => 281,  656 => 278,  651 => 276,  646 => 273,  641 => 271,  636 => 268,  631 => 266,  624 => 263,  619 => 261,  611 => 255,  606 => 252,  601 => 249,  596 => 247,  593 => 246,  590 => 245,  583 => 242,  578 => 239,  570 => 237,  565 => 236,  560 => 235,  552 => 231,  548 => 229,  542 => 226,  539 => 225,  536 => 224,  534 => 223,  530 => 221,  525 => 218,  523 => 217,  520 => 216,  511 => 210,  508 => 209,  500 => 205,  492 => 201,  484 => 197,  476 => 193,  468 => 189,  460 => 185,  454 => 181,  449 => 178,  447 => 177,  442 => 174,  437 => 171,  432 => 168,  426 => 167,  421 => 164,  414 => 162,  411 => 160,  407 => 157,  404 => 155,  398 => 154,  394 => 153,  390 => 152,  387 => 151,  384 => 150,  380 => 149,  374 => 145,  369 => 142,  356 => 140,  352 => 139,  343 => 133,  337 => 130,  333 => 129,  330 => 128,  328 => 127,  325 => 126,  318 => 121,  311 => 119,  309 => 118,  303 => 117,  299 => 116,  290 => 111,  286 => 109,  284 => 107,  281 => 106,  276 => 104,  270 => 101,  266 => 100,  263 => 99,  261 => 98,  257 => 96,  252 => 93,  250 => 92,  247 => 91,  242 => 88,  235 => 84,  231 => 83,  225 => 79,  220 => 76,  213 => 74,  206 => 72,  204 => 71,  196 => 70,  192 => 69,  185 => 68,  181 => 67,  177 => 65,  172 => 63,  170 => 62,  163 => 59,  158 => 57,  152 => 54,  148 => 53,  144 => 51,  138 => 48,  133 => 46,  129 => 45,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  112 => 38,  108 => 37,  105 => 36,  103 => 35,  99 => 33,  93 => 29,  88 => 26,  86 => 21,  83 => 25,  80 => 22,  78 => 21,  74 => 19,  69 => 16,  66 => 15,  64 => 14,  57 => 10,  51 => 7,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\home\\index.twig");
    }
}
