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

/* server/privileges/new_user_ajax.twig */
class __TwigTemplate_32f5f291e98ae66c4a2a459d227feb64 extends Template
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
        echo "<tr>
  <td>
    <input type=\"checkbox\" name=\"selected_usr[]\" id=\"checkbox_sel_users_\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4) . "&amp;#27;") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "host", [], "any", false, false, false, 4)), "html", null, true);
        echo "\">
  </td>
  <td>
    <label for=\"checkbox_sel_users_\">
      ";
        // line 8
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8))) {
            // line 9
            echo "        <span class=\"text-danger\">";
echo _gettext("Any");
            echo "</span>
      ";
        } else {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "
      ";
        }
        // line 13
        echo "    </label>
  </td>
  <td>
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "host", [], "any", false, false, false, 16), "html", null, true);
        echo "
  </td>
  <td>
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "has_password", [], "any", false, false, false, 19)) {
            // line 20
            echo "      ";
echo _gettext("Yes");
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "      <span class=\"text-danger\">";
echo _gettext("No");
            echo "</span>
    ";
        }
        // line 24
        echo "  </td>
  <td>
    <code>
      ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "privileges", [], "any", false, false, false, 27);
        echo "
    </code>
  </td>
  ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "has_group", [], "any", false, false, false, 30)) {
            // line 31
            echo "    <td class=\"usrGroup\"></td>
  ";
        }
        // line 33
        echo "  <td>
    ";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "has_grant", [], "any", false, false, false, 34)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
        echo "
  </td>
  ";
        // line 36
        if ((isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "    <td>
      <a class=\"edit_user_anchor\" href=\"";
            // line 38
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "hostname" => twig_get_attribute($this->env, $this->source,             // line 40
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "host", [], "any", false, false, false, 40), "dbname" => "", "tablename" => "", "routinename" => ""]);
            // line 44
            echo "\">
        ";
            // line 45
            echo $this->env->getFunction('get_icon')->getCallable()("b_usredit", _gettext("Edit privileges"));
            echo "
      </a>
    </td>
  ";
        }
        // line 49
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "has_group_edit", [], "any", false, false, false, 49)) {
            // line 50
            echo "    <td>
      <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "\">
        ";
            // line 52
            echo $this->env->getFunction('get_icon')->getCallable()("b_usrlist", _gettext("Edit user group"));
            echo "
      </button>
    </td>
  ";
        }
        // line 56
        echo "  <td>
    <a class=\"export_user_anchor ajax\" href=\"";
        // line 57
        echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "hostname" => twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "host", [], "any", false, false, false, 59), "export" => true, "initial" =>         // line 61
(isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 61, $this->source); })())]);
        // line 62
        echo "\">
      ";
        // line 63
        echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
        echo "
    </a>
  </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/new_user_ajax.twig";
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
        return array (  159 => 63,  156 => 62,  154 => 61,  153 => 59,  152 => 58,  151 => 57,  148 => 56,  141 => 52,  137 => 51,  134 => 50,  131 => 49,  124 => 45,  121 => 44,  119 => 40,  118 => 39,  117 => 38,  114 => 37,  112 => 36,  107 => 34,  104 => 33,  100 => 31,  98 => 30,  92 => 27,  87 => 24,  81 => 22,  78 => 21,  75 => 20,  73 => 19,  67 => 16,  62 => 13,  56 => 11,  50 => 9,  48 => 8,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
  <td>
    <input type=\"checkbox\" name=\"selected_usr[]\" id=\"checkbox_sel_users_\" value=\"
      {{- user.name ~ '&amp;#27;' ~ user.host }}\">
  </td>
  <td>
    <label for=\"checkbox_sel_users_\">
      {% if user.name is empty %}
        <span class=\"text-danger\">{% trans 'Any' %}</span>
      {% else %}
        {{ user.name }}
      {% endif %}
    </label>
  </td>
  <td>
    {{ user.host }}
  </td>
  <td>
    {% if user.has_password %}
      {% trans 'Yes' %}
    {% else %}
      <span class=\"text-danger\">{% trans 'No' %}</span>
    {% endif %}
  </td>
  <td>
    <code>
      {{ user.privileges|raw }}
    </code>
  </td>
  {% if user.has_group %}
    <td class=\"usrGroup\"></td>
  {% endif %}
  <td>
    {{ user.has_grant ? 'Yes'|trans : 'No'|trans }}
  </td>
  {% if is_grantuser %}
    <td>
      <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
        'username': user.name,
        'hostname': user.host,
        'dbname': '',
        'tablename': '',
        'routinename': ''
      }) }}\">
        {{ get_icon('b_usredit', 'Edit privileges'|trans) }}
      </a>
    </td>
  {% endif %}
  {% if user.has_group_edit %}
    <td>
      <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"{{ user.name }}\">
        {{ get_icon('b_usrlist', 'Edit user group'|trans) }}
      </button>
    </td>
  {% endif %}
  <td>
    <a class=\"export_user_anchor ajax\" href=\"{{ url('/server/privileges', {
      'username': user.name,
      'hostname': user.host,
      'export': true,
      'initial': initial
    }) }}\">
      {{ get_icon('b_tblexport', 'Export'|trans) }}
    </a>
  </td>
</tr>
", "server/privileges/new_user_ajax.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/new_user_ajax.twig");
    }
}
