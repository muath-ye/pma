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

/* login/form.twig */
class __TwigTemplate_ff5c448d8bb653835c03163078822276 extends Template
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
        echo (isset($context["login_header"]) || array_key_exists("login_header", $context) ? $context["login_header"] : (function () { throw new RuntimeError('Variable "login_header" does not exist.', 1, $this->source); })());
        echo "

";
        // line 3
        if ((isset($context["is_demo"]) || array_key_exists("is_demo", $context) ? $context["is_demo"] : (function () { throw new RuntimeError('Variable "is_demo" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "  <div class=\"card mb-4\">
    <div class=\"card-header\">";
            // line 5
echo _gettext("phpMyAdmin Demo Server");
            echo "</div>
    <div class=\"card-body\">
      ";
            // line 7
            ob_start();
            // line 8
            echo "        ";
echo _gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.");
            // line 11
            echo "      ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 7
            echo twig_sprintf($___internal_parse_0_, (("<a href=\"" . $this->env->getFunction('url')->getCallable()("/url", ["url" => "https://demo.phpmyadmin.net/"])) . "\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>"));
            // line 12
            echo "    </div>
  </div>
";
        }
        // line 15
        echo "
";
        // line 16
        echo (isset($context["error_messages"]) || array_key_exists("error_messages", $context) ? $context["error_messages"] : (function () { throw new RuntimeError('Variable "error_messages" does not exist.', 16, $this->source); })());
        echo "

";
        // line 18
        if ( !twig_test_empty((isset($context["available_languages"]) || array_key_exists("available_languages", $context) ? $context["available_languages"] : (function () { throw new RuntimeError('Variable "available_languages" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "  <div class='hide js-show'>
    <div class=\"card mb-4\">
      <div class=\"card-header\">
        <span id=\"languageSelectLabel\">
          ";
            // line 23
echo _gettext("Language");
            // line 24
            echo "          ";
            if ((_gettext("Language") != "Language")) {
                // line 25
                echo "            ";
                // line 27
                echo "            <i lang=\"en\" dir=\"ltr\">(Language)</i>
          ";
            }
            // line 29
            echo "        </span>
      </div>
      <div class=\"card-body\">
        <form method=\"get\" action=\"";
            // line 32
            echo $this->env->getFunction('url')->getCallable()("/");
            echo "\" class=\"disableAjax\">
          ";
            // line 33
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 33, $this->source); })()));
            echo "
          <select name=\"lang\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\" aria-labelledby=\"languageSelectLabel\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["available_languages"]) || array_key_exists("available_languages", $context) ? $context["available_languages"] : (function () { throw new RuntimeError('Variable "available_languages" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 36
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 36)), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 36)) ? (" selected") : (""));
                echo ">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 37);
                // line 38
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          </select>
        </form>
      </div>
    </div>
  </div>
";
        }
        // line 46
        echo "
<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"";
        // line 48
        echo (( !(isset($context["is_session_expired"]) || array_key_exists("is_session_expired", $context) ? $context["is_session_expired"] : (function () { throw new RuntimeError('Variable "is_session_expired" does not exist.', 48, $this->source); })())) ? ("disableAjax hide ") : (""));
        echo "js-show\"";
        echo (( !(isset($context["has_autocomplete"]) || array_key_exists("has_autocomplete", $context) ? $context["has_autocomplete"] : (function () { throw new RuntimeError('Variable "has_autocomplete" does not exist.', 48, $this->source); })())) ? (" autocomplete=\"off\"") : (""));
        echo ">
  ";
        // line 50
        echo "  ";
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 50, $this->source); })()), "", "server");
        echo "
  <input type=\"hidden\" name=\"set_session\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["session_id"]) || array_key_exists("session_id", $context) ? $context["session_id"] : (function () { throw new RuntimeError('Variable "session_id" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">
  ";
        // line 52
        if ((isset($context["is_session_expired"]) || array_key_exists("is_session_expired", $context) ? $context["is_session_expired"] : (function () { throw new RuntimeError('Variable "is_session_expired" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "    <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
  ";
        }
        // line 55
        echo "
  <div class=\"card mb-4\">
    <div class=\"card-header\">
      ";
        // line 58
echo _gettext("Log in");
        // line 59
        echo "      ";
        echo $this->env->getFunction('show_docu')->getCallable()("index", "", false, true);
        echo "
    </div>
    <div class=\"card-body\">
      ";
        // line 62
        if ((isset($context["is_arbitrary_server_allowed"]) || array_key_exists("is_arbitrary_server_allowed", $context) ? $context["is_arbitrary_server_allowed"] : (function () { throw new RuntimeError('Variable "is_arbitrary_server_allowed" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "        <div class=\"row mb-3\">
          <label for=\"serverNameInput\" class=\"col-sm-4 col-form-label\" title=\"";
            // line 64
echo _gettext("You can enter hostname/IP address and port separated by space.");
            echo "\">
            ";
            // line 65
echo _gettext("Server:");
            // line 66
            echo "          </label>
          <div class=\"col-sm-8\">
            <input type=\"text\" name=\"pma_servername\" id=\"serverNameInput\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["default_server"]) || array_key_exists("default_server", $context) ? $context["default_server"] : (function () { throw new RuntimeError('Variable "default_server" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" title=\"";
            // line 69
echo _gettext("You can enter hostname/IP address and port separated by space.");
            echo "\">
          </div>
        </div>
      ";
        }
        // line 73
        echo "
      <div class=\"row mb-3\">
        <label for=\"input_username\" class=\"col-sm-4 col-form-label\">
          ";
        // line 76
echo _gettext("Username:");
        // line 77
        echo "        </label>
        <div class=\"col-sm-8\">
          <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["default_user"]) || array_key_exists("default_user", $context) ? $context["default_user"] : (function () { throw new RuntimeError('Variable "default_user" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" autocomplete=\"username\" spellcheck=\"false\" autofocus>
        </div>
      </div>

      <div class=\"row\">
        <label for=\"input_password\" class=\"col-sm-4 col-form-label\">
          ";
        // line 85
echo _gettext("Password:");
        // line 86
        echo "        </label>
        <div class=\"col-sm-8\">
          <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" class=\"form-control\" autocomplete=\"current-password\" spellcheck=\"false\">
        </div>
      </div>

      ";
        // line 92
        if ((isset($context["has_servers"]) || array_key_exists("has_servers", $context) ? $context["has_servers"] : (function () { throw new RuntimeError('Variable "has_servers" does not exist.', 92, $this->source); })())) {
            // line 93
            echo "        <div class=\"row mt-3\">
          <label for=\"select_server\" class=\"col-sm-4 col-form-label\">
            ";
            // line 95
echo _gettext("Server choice:");
            // line 96
            echo "          </label>
          <div class=\"col-sm-8\">
            <select name=\"server\" id=\"select_server\" class=\"form-select\"";
            // line 99
            if ((isset($context["is_arbitrary_server_allowed"]) || array_key_exists("is_arbitrary_server_allowed", $context) ? $context["is_arbitrary_server_allowed"] : (function () { throw new RuntimeError('Variable "is_arbitrary_server_allowed" does not exist.', 99, $this->source); })())) {
                echo " onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"";
            }
            echo ">
              ";
            // line 100
            echo (isset($context["server_options"]) || array_key_exists("server_options", $context) ? $context["server_options"] : (function () { throw new RuntimeError('Variable "server_options" does not exist.', 100, $this->source); })());
            echo "
            </select>
          </div>
        </div>
      ";
        } else {
            // line 105
            echo "        <input type=\"hidden\" name=\"server\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "\">
      ";
        }
        // line 107
        echo "    </div>
    <div class=\"card-footer\">
      ";
        // line 109
        if ((isset($context["has_captcha"]) || array_key_exists("has_captcha", $context) ? $context["has_captcha"] : (function () { throw new RuntimeError('Variable "has_captcha" does not exist.', 109, $this->source); })())) {
            // line 110
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_api"]) || array_key_exists("captcha_api", $context) ? $context["captcha_api"] : (function () { throw new RuntimeError('Variable "captcha_api" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "?hl=";
            echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "\" async defer></script>
        ";
            // line 111
            if ((isset($context["use_captcha_checkbox"]) || array_key_exists("use_captcha_checkbox", $context) ? $context["use_captcha_checkbox"] : (function () { throw new RuntimeError('Variable "use_captcha_checkbox" does not exist.', 111, $this->source); })())) {
                // line 112
                echo "          <div class=\"row g-3\">
            <div class=\"col\">
              <div class=\"";
                // line 114
                echo twig_escape_filter($this->env, (isset($context["captcha_req"]) || array_key_exists("captcha_req", $context) ? $context["captcha_req"] : (function () { throw new RuntimeError('Variable "captcha_req" does not exist.', 114, $this->source); })()), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, (isset($context["captcha_key"]) || array_key_exists("captcha_key", $context) ? $context["captcha_key"] : (function () { throw new RuntimeError('Variable "captcha_key" does not exist.', 114, $this->source); })()), "html", null, true);
                echo "\"></div>
            </div>
            <div class=\"col align-self-center text-end\">
              <input class=\"btn btn-primary\" value=\"";
                // line 117
echo _gettext("Log in");
                echo "\" type=\"submit\" id=\"input_go\">
            </div>
          </div>
        ";
            } else {
                // line 121
                echo "          <input class=\"btn btn-primary ";
                echo twig_escape_filter($this->env, (isset($context["captcha_req"]) || array_key_exists("captcha_req", $context) ? $context["captcha_req"] : (function () { throw new RuntimeError('Variable "captcha_req" does not exist.', 121, $this->source); })()), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, (isset($context["captcha_key"]) || array_key_exists("captcha_key", $context) ? $context["captcha_key"] : (function () { throw new RuntimeError('Variable "captcha_key" does not exist.', 121, $this->source); })()), "html", null, true);
                echo "\" data-callback=\"recaptchaCallback\" value=\"";
echo _gettext("Log in");
                echo "\" type=\"submit\" id=\"input_go\">
        ";
            }
            // line 123
            echo "      ";
        } else {
            // line 124
            echo "        <input class=\"btn btn-primary\" value=\"";
echo _gettext("Log in");
            echo "\" type=\"submit\" id=\"input_go\">
      ";
        }
        // line 126
        echo "    </div>
  </div>
</form>

";
        // line 130
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 130, $this->source); })()))) {
            // line 131
            echo "  <div id=\"pma_errors\">
    ";
            // line 132
            echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 132, $this->source); })());
            echo "
  </div>
  </div>
  </div>
";
        }
        // line 137
        echo "
";
        // line 138
        echo (isset($context["login_footer"]) || array_key_exists("login_footer", $context) ? $context["login_footer"] : (function () { throw new RuntimeError('Variable "login_footer" does not exist.', 138, $this->source); })());
        echo "

";
        // line 140
        echo (isset($context["config_footer"]) || array_key_exists("config_footer", $context) ? $context["config_footer"] : (function () { throw new RuntimeError('Variable "config_footer" does not exist.', 140, $this->source); })());
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/form.twig";
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
        return array (  340 => 140,  335 => 138,  332 => 137,  324 => 132,  321 => 131,  319 => 130,  313 => 126,  307 => 124,  304 => 123,  294 => 121,  287 => 117,  279 => 114,  275 => 112,  273 => 111,  266 => 110,  264 => 109,  260 => 107,  254 => 105,  246 => 100,  240 => 99,  236 => 96,  234 => 95,  230 => 93,  228 => 92,  220 => 86,  218 => 85,  209 => 79,  205 => 77,  203 => 76,  198 => 73,  191 => 69,  188 => 68,  184 => 66,  182 => 65,  178 => 64,  175 => 63,  173 => 62,  166 => 59,  164 => 58,  159 => 55,  155 => 53,  153 => 52,  149 => 51,  144 => 50,  138 => 48,  135 => 46,  127 => 40,  120 => 38,  118 => 37,  112 => 36,  108 => 35,  103 => 33,  99 => 32,  94 => 29,  90 => 27,  88 => 25,  85 => 24,  83 => 23,  77 => 19,  75 => 18,  70 => 16,  67 => 15,  62 => 12,  60 => 7,  57 => 11,  54 => 8,  52 => 7,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ login_header|raw }}

{% if is_demo %}
  <div class=\"card mb-4\">
    <div class=\"card-header\">{% trans 'phpMyAdmin Demo Server' %}</div>
    <div class=\"card-body\">
      {% apply format('<a href=\"' ~ url('/url', {'url': 'https://demo.phpmyadmin.net/'}) ~ '\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>')|raw %}
        {% trans %}
          You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.
        {% endtrans %}
      {% endapply %}
    </div>
  </div>
{% endif %}

{{ error_messages|raw }}

{% if available_languages is not empty %}
  <div class='hide js-show'>
    <div class=\"card mb-4\">
      <div class=\"card-header\">
        <span id=\"languageSelectLabel\">
          {% trans 'Language' %}
          {% if 'Language'|trans != 'Language' %}
            {# For non-English, display \"Language\" with emphasis because it's not a proper word
               in the current language; we show it to help people recognize the dialog #}
            <i lang=\"en\" dir=\"ltr\">(Language)</i>
          {% endif %}
        </span>
      </div>
      <div class=\"card-body\">
        <form method=\"get\" action=\"{{ url('/') }}\" class=\"disableAjax\">
          {{ get_hidden_inputs(form_params) }}
          <select name=\"lang\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\" aria-labelledby=\"languageSelectLabel\">
            {% for language in available_languages %}
              <option value=\"{{ language.getCode()|lower }}\"{{ language.isActive() ? ' selected' }}>
                {{- language.getName()|raw -}}
              </option>
            {% endfor %}
          </select>
        </form>
      </div>
    </div>
  </div>
{% endif %}

<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"
  {{- not is_session_expired ? 'disableAjax hide ' }}js-show\"{{ not has_autocomplete ? ' autocomplete=\"off\"' }}>
  {# Do not generate a \"server\" hidden field as we want the \"server\" drop-down to have priority. #}
  {{ get_hidden_inputs(form_params, '', 'server') }}
  <input type=\"hidden\" name=\"set_session\" value=\"{{ session_id }}\">
  {% if is_session_expired %}
    <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
  {% endif %}

  <div class=\"card mb-4\">
    <div class=\"card-header\">
      {% trans 'Log in' %}
      {{ show_docu('index', '', false, true) }}
    </div>
    <div class=\"card-body\">
      {% if is_arbitrary_server_allowed %}
        <div class=\"row mb-3\">
          <label for=\"serverNameInput\" class=\"col-sm-4 col-form-label\" title=\"{% trans 'You can enter hostname/IP address and port separated by space.' %}\">
            {% trans 'Server:' %}
          </label>
          <div class=\"col-sm-8\">
            <input type=\"text\" name=\"pma_servername\" id=\"serverNameInput\" value=\"{{ default_server }}\" class=\"form-control\" title=\"
              {%- trans 'You can enter hostname/IP address and port separated by space.' %}\">
          </div>
        </div>
      {% endif %}

      <div class=\"row mb-3\">
        <label for=\"input_username\" class=\"col-sm-4 col-form-label\">
          {% trans 'Username:' %}
        </label>
        <div class=\"col-sm-8\">
          <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"{{ default_user }}\" class=\"form-control\" autocomplete=\"username\" spellcheck=\"false\" autofocus>
        </div>
      </div>

      <div class=\"row\">
        <label for=\"input_password\" class=\"col-sm-4 col-form-label\">
          {% trans 'Password:' %}
        </label>
        <div class=\"col-sm-8\">
          <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" class=\"form-control\" autocomplete=\"current-password\" spellcheck=\"false\">
        </div>
      </div>

      {% if has_servers %}
        <div class=\"row mt-3\">
          <label for=\"select_server\" class=\"col-sm-4 col-form-label\">
            {% trans 'Server choice:' %}
          </label>
          <div class=\"col-sm-8\">
            <select name=\"server\" id=\"select_server\" class=\"form-select\"
              {%- if is_arbitrary_server_allowed %} onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"{% endif %}>
              {{ server_options|raw }}
            </select>
          </div>
        </div>
      {% else %}
        <input type=\"hidden\" name=\"server\" value=\"{{ server }}\">
      {% endif %}
    </div>
    <div class=\"card-footer\">
      {% if has_captcha %}
        <script src=\"{{ captcha_api }}?hl={{ lang }}\" async defer></script>
        {% if use_captcha_checkbox %}
          <div class=\"row g-3\">
            <div class=\"col\">
              <div class=\"{{ captcha_req }}\" data-sitekey=\"{{ captcha_key }}\"></div>
            </div>
            <div class=\"col align-self-center text-end\">
              <input class=\"btn btn-primary\" value=\"{% trans 'Log in' %}\" type=\"submit\" id=\"input_go\">
            </div>
          </div>
        {% else %}
          <input class=\"btn btn-primary {{ captcha_req }}\" data-sitekey=\"{{ captcha_key }}\" data-callback=\"recaptchaCallback\" value=\"{% trans 'Log in' %}\" type=\"submit\" id=\"input_go\">
        {% endif %}
      {% else %}
        <input class=\"btn btn-primary\" value=\"{% trans 'Log in' %}\" type=\"submit\" id=\"input_go\">
      {% endif %}
    </div>
  </div>
</form>

{% if errors is not empty %}
  <div id=\"pma_errors\">
    {{ errors|raw }}
  </div>
  </div>
  </div>
{% endif %}

{{ login_footer|raw }}

{{ config_footer|raw }}
", "login/form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/form.twig");
    }
}
