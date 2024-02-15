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

/* server/privileges/user_overview.twig */
class __TwigTemplate_1597039e8b843416f8973857af52a93d extends Template
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
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <h2>";
        // line 4
        echo $this->env->getFunction('get_icon')->getCallable()("b_usrlist");
        // line 5
echo _gettext("User accounts overview");
        // line 6
        echo "    </h2>
  </div>
</div>";
        // line 10
        echo (isset($context["error_messages"]) || array_key_exists("error_messages", $context) ? $context["error_messages"] : (function () { throw new RuntimeError('Variable "error_messages" does not exist.', 10, $this->source); })());
        // line 12
        echo (isset($context["empty_user_notice"]) || array_key_exists("empty_user_notice", $context) ? $context["empty_user_notice"] : (function () { throw new RuntimeError('Variable "empty_user_notice" does not exist.', 12, $this->source); })());
        // line 14
        echo (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 14, $this->source); })());
        // line 16
        if ( !twig_test_empty((isset($context["users_overview"]) || array_key_exists("users_overview", $context) ? $context["users_overview"] : (function () { throw new RuntimeError('Variable "users_overview" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo (isset($context["users_overview"]) || array_key_exists("users_overview", $context) ? $context["users_overview"] : (function () { throw new RuntimeError('Variable "users_overview" does not exist.', 17, $this->source); })());
        } elseif (        // line 18
(isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "  <div class=\"card\">
    <div class=\"card-header\">";
            // line 20
echo _pgettext("Create new user", "New");
            echo "</div>
    <div class=\"card-body\" id=\"fieldset_add_user\">
      <a id=\"add_user_anchor\" href=\"";
            // line 22
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["adduser" => true]);
            echo "\">";
            // line 23
            echo $this->env->getFunction('get_icon')->getCallable()("b_usradd", _gettext("Add user account"));
            // line 24
            echo "</a>
    </div>
  </div>
";
        }
        // line 29
        echo (isset($context["flush_notice"]) || array_key_exists("flush_notice", $context) ? $context["flush_notice"] : (function () { throw new RuntimeError('Variable "flush_notice" does not exist.', 29, $this->source); })());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/user_overview.twig";
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
        return array (  80 => 29,  74 => 24,  72 => 23,  69 => 22,  64 => 20,  61 => 19,  59 => 18,  57 => 17,  55 => 16,  53 => 14,  51 => 12,  49 => 10,  45 => 6,  43 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  <div class=\"col-12\">
    <h2>
      {{- get_icon('b_usrlist') -}}
      {% trans 'User accounts overview' %}
    </h2>
  </div>
</div>

{{- error_messages|raw -}}

{{- empty_user_notice|raw -}}

{{- initials|raw -}}

{% if users_overview is not empty %}
  {{- users_overview|raw -}}
{% elseif is_createuser %}
  <div class=\"card\">
    <div class=\"card-header\">{% trans %}New{% context %}Create new user{% endtrans %}</div>
    <div class=\"card-body\" id=\"fieldset_add_user\">
      <a id=\"add_user_anchor\" href=\"{{ url('/server/privileges', {'adduser': true}) }}\">
        {{- get_icon('b_usradd', 'Add user account'|trans) -}}
      </a>
    </div>
  </div>
{% endif %}

{{- flush_notice|raw -}}
", "server/privileges/user_overview.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/user_overview.twig");
    }
}
