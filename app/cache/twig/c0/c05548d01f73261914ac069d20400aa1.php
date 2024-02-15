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

/* server/privileges/add_user.twig */
class __TwigTemplate_4d2df62540ca4dfdedd941b8c232cceb extends Template
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
        echo "<div class=\"container\">
<h2>
  ";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("b_usradd");
        echo "
  ";
        // line 4
echo _gettext("Add user account");
        // line 5
        echo "</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 7
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" method=\"post\" autocomplete=\"off\">
  ";
        // line 8
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "

  ";
        // line 10
        echo (isset($context["login_information_fields_new"]) || array_key_exists("login_information_fields_new", $context) ? $context["login_information_fields_new"] : (function () { throw new RuntimeError('Variable "login_information_fields_new" does not exist.', 10, $this->source); })());
        echo "

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 13
echo _gettext("Database for user account");
        echo "</div>
    <div class=\"card-body\">
      <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
      <label for=\"createdb-1\">";
        // line 16
echo _gettext("Create database with same name and grant all privileges.");
        echo "</label>
      <br>

      <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
      <label for=\"createdb-2\">";
        // line 20
echo _gettext("Grant all privileges on wildcard name (username\\_%).");
        echo "</label>
      <br>

      ";
        // line 23
        if ( !twig_test_empty((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "        <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
        <label for=\"createdb-3\">";
            // line 25
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Grant all privileges on database %s."), (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "</label>
        <input type=\"hidden\" name=\"dbname\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\">
        <br>
      ";
        }
        // line 29
        echo "    </div>
  </div>

  ";
        // line 32
        if ((isset($context["is_grant_user"]) || array_key_exists("is_grant_user", $context) ? $context["is_grant_user"] : (function () { throw new RuntimeError('Variable "is_grant_user" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "    ";
            echo (isset($context["privileges_table"]) || array_key_exists("privileges_table", $context) ? $context["privileges_table"] : (function () { throw new RuntimeError('Variable "privileges_table" does not exist.', 33, $this->source); })());
            echo "
  ";
        }
        // line 35
        echo "
  <div>
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 38
echo _gettext("Create user");
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
        return "server/privileges/add_user.twig";
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
        return array (  118 => 38,  113 => 35,  107 => 33,  105 => 32,  100 => 29,  94 => 26,  90 => 25,  87 => 24,  85 => 23,  79 => 20,  72 => 16,  66 => 13,  60 => 10,  55 => 8,  51 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
<h2>
  {{ get_icon('b_usradd') }}
  {% trans 'Add user account' %}
</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"{{ url('/server/privileges') }}\" method=\"post\" autocomplete=\"off\">
  {{ get_hidden_inputs() }}

  {{ login_information_fields_new|raw }}

  <div class=\"card mb-3\">
    <div class=\"card-header\">{% trans 'Database for user account' %}</div>
    <div class=\"card-body\">
      <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
      <label for=\"createdb-1\">{% trans 'Create database with same name and grant all privileges.' %}</label>
      <br>

      <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
      <label for=\"createdb-2\">{% trans 'Grant all privileges on wildcard name (username\\\\_%).' %}</label>
      <br>

      {% if database is not empty %}
        <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
        <label for=\"createdb-3\">{{ 'Grant all privileges on database %s.'|trans|format(database) }}</label>
        <input type=\"hidden\" name=\"dbname\" value=\"{{ database }}\">
        <br>
      {% endif %}
    </div>
  </div>

  {% if is_grant_user %}
    {{ privileges_table|raw }}
  {% endif %}

  <div>
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"{% trans 'Create user' %}\">
  </div>
</form>
</div>
", "server/privileges/add_user.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/add_user.twig");
    }
}
