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

/* server/user_groups/user_groups.twig */
class __TwigTemplate_066f8ac6c2358dc0dbc8d0cf23d9dd71 extends Template
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
        echo "<div class=\"row\"><h2>";
echo _gettext("User groups");
        echo "</h2></div>
";
        // line 2
        if ((isset($context["has_rows"]) || array_key_exists("has_rows", $context) ? $context["has_rows"] : (function () { throw new RuntimeError('Variable "has_rows" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <form name=\"userGroupsForm\" id=\"userGroupsForm\" action=\"";
            echo (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })());
            echo "\" method=\"post\">
        ";
            // line 4
            echo (isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 4, $this->source); })());
            echo "
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr class=\"text-nowrap\">
                    <th scope=\"col\">
                        ";
            // line 9
echo _gettext("User groups");
            // line 10
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 12
echo _gettext("Server level tabs");
            // line 13
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 15
echo _gettext("Database level tabs");
            // line 16
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 18
echo _gettext("Table level tabs");
            // line 19
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 21
echo _gettext("Action");
            // line 22
            echo "                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_groups_values"]) || array_key_exists("user_groups_values", $context) ? $context["user_groups_values"] : (function () { throw new RuntimeError('Variable "user_groups_values" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["groupName"]) {
                // line 27
                echo "                    <tr>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupName"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupName"], "serverTab", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupName"], "dbTab", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupName"], "tableTab", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                        <td class=\"text-nowrap\">
                            <a class=\"\" href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["groupName"], "userGroupUrl", [], "any", false, false, false, 33);
                echo "\" data-post=\"";
                echo twig_get_attribute($this->env, $this->source, $context["groupName"], "viewUsersUrl", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["groupName"], "viewUsersIcon", [], "any", false, false, false, 33);
                echo "</a>
                            &nbsp;&nbsp;
                            <a class=\"\" href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["groupName"], "userGroupUrl", [], "any", false, false, false, 35);
                echo "\" data-post=\"";
                echo twig_get_attribute($this->env, $this->source, $context["groupName"], "editUsersUrl", [], "any", false, false, false, 35);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["groupName"], "editUsersIcon", [], "any", false, false, false, 35);
                echo "</a>
                          <button type=\"button\" class=\"btn btn-link\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserGroupModal\" data-user-group=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupName"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                            ";
                // line 37
                echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Delete"));
                echo "
                          </button>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </tbody>
        </table>
    </form>

  <div class=\"modal fade\" id=\"deleteUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"deleteUserGroupModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteUserGroupModalLabel\">";
            // line 50
echo _gettext("Delete user group");
            echo "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 51
echo _gettext("Close");
            echo "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 55
echo _gettext("Close");
            echo "</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"deleteUserGroupConfirm\">";
            // line 56
echo _gettext("Delete");
            echo "</button>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 62
        echo "<div>
  <a class=\"btn btn-primary\" href=\"";
        // line 63
        echo (isset($context["add_user_url"]) || array_key_exists("add_user_url", $context) ? $context["add_user_url"] : (function () { throw new RuntimeError('Variable "add_user_url" does not exist.', 63, $this->source); })());
        echo "\">";
        echo (isset($context["add_user_icon"]) || array_key_exists("add_user_icon", $context) ? $context["add_user_icon"] : (function () { throw new RuntimeError('Variable "add_user_icon" does not exist.', 63, $this->source); })());
echo _gettext("Add user group");
        echo "</a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/user_groups/user_groups.twig";
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
        return array (  182 => 63,  179 => 62,  170 => 56,  166 => 55,  159 => 51,  155 => 50,  145 => 42,  134 => 37,  130 => 36,  122 => 35,  113 => 33,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  93 => 27,  89 => 26,  83 => 22,  81 => 21,  77 => 19,  75 => 18,  71 => 16,  69 => 15,  65 => 13,  63 => 12,  59 => 10,  57 => 9,  49 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\"><h2>{% trans 'User groups' %}</h2></div>
{% if  has_rows %}
    <form name=\"userGroupsForm\" id=\"userGroupsForm\" action=\"{{ action|raw }}\" method=\"post\">
        {{ hidden_inputs|raw }}
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr class=\"text-nowrap\">
                    <th scope=\"col\">
                        {% trans 'User groups' %}
                    </th>
                    <th scope=\"col\">
                        {% trans 'Server level tabs' %}
                    </th>
                    <th scope=\"col\">
                        {% trans 'Database level tabs' %}
                    </th>
                    <th scope=\"col\">
                        {% trans 'Table level tabs' %}
                    </th>
                    <th scope=\"col\">
                        {% trans 'Action' %}
                    </th>
                </tr>
            </thead>
            <tbody>
                {% for groupName in user_groups_values %}
                    <tr>
                        <td>{{ groupName.name }}</td>
                        <td>{{ groupName.serverTab }}</td>
                        <td>{{ groupName.dbTab }}</td>
                        <td>{{ groupName.tableTab }}</td>
                        <td class=\"text-nowrap\">
                            <a class=\"\" href=\"{{ groupName.userGroupUrl|raw }}\" data-post=\"{{ groupName.viewUsersUrl|raw }}\">{{ groupName.viewUsersIcon|raw }}</a>
                            &nbsp;&nbsp;
                            <a class=\"\" href=\"{{ groupName.userGroupUrl|raw }}\" data-post=\"{{ groupName.editUsersUrl|raw }}\">{{ groupName.editUsersIcon|raw }}</a>
                          <button type=\"button\" class=\"btn btn-link\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserGroupModal\" data-user-group=\"{{ groupName.name }}\">
                            {{ get_icon('b_drop', 'Delete'|trans) }}
                          </button>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </form>

  <div class=\"modal fade\" id=\"deleteUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"deleteUserGroupModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"deleteUserGroupModalLabel\">{% trans 'Delete user group' %}</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"deleteUserGroupConfirm\">{% trans 'Delete' %}</button>
        </div>
      </div>
    </div>
  </div>
{% endif %}
<div>
  <a class=\"btn btn-primary\" href=\"{{ add_user_url|raw }}\">{{ add_user_icon|raw }}{% trans 'Add user group' %}</a>
</div>
", "server/user_groups/user_groups.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/user_groups.twig");
    }
}
