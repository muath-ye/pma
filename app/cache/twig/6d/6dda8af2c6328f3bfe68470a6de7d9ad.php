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

/* server/variables/index.twig */
class __TwigTemplate_e7edfa734af5f2e61cd25f8d52584df9 extends Template
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
        echo "<div class=\"container-fluid\">
<div class=\"row\">
  <h2>
    ";
        // line 4
        echo $this->env->getFunction('get_image')->getCallable()("s_vars");
        echo "
    ";
        // line 5
echo _gettext("Server variables and settings");
        // line 6
        echo "    ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("server_system_variables");
        echo "
  </h2>
</div>

";
        // line 10
        if ( !twig_test_empty((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "  <a href=\"#\" class=\"ajax saveLink hide\">
    ";
            // line 12
            echo $this->env->getFunction('get_icon')->getCallable()("b_save", _gettext("Save"));
            echo "
  </a>
  <a href=\"#\" class=\"cancelLink hide\">
    ";
            // line 15
            echo $this->env->getFunction('get_icon')->getCallable()("b_close", _gettext("Cancel"));
            echo "
  </a>
  ";
            // line 17
            echo $this->env->getFunction('get_image')->getCallable()("b_help", _gettext("Documentation"), ["class" => "hide", "id" => "docImage"]);
            // line 20
            echo "

  ";
            // line 22
            $this->loadTemplate("filter.twig", "server/variables/index.twig", 22)->display(twig_to_array(["filter_value" =>             // line 23
(isset($context["filter_value"]) || array_key_exists("filter_value", $context) ? $context["filter_value"] : (function () { throw new RuntimeError('Variable "filter_value" does not exist.', 23, $this->source); })())]));
            // line 25
            echo "
  <div class=\"table-responsive\">
    <table id=\"serverVariables\" class=\"table table-striped table-hover table-sm\">
      <thead>
        <tr>
          <th scope=\"col\">";
            // line 30
echo _gettext("Action");
            echo "</th>
          <th scope=\"col\">";
            // line 31
echo _gettext("Variable");
            echo "</th>
          <th scope=\"col\" class=\"text-end\">";
            // line 32
echo _gettext("Value");
            echo "</th>
        </tr>
      </thead>

      <tbody>
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 38
                echo "          <tr class=\"var-row\" data-filter-row=\"";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 38)), "html", null, true);
                echo "\">
            <td>
              ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "is_editable", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "                <a href=\"#\" data-variable=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" class=\"editLink\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
                    echo "</a>
              ";
                } else {
                    // line 43
                    echo "                <span title=\"";
echo _gettext("This is a read-only variable and can not be edited");
                    echo "\" class=\"read_only_var\">
                  ";
                    // line 44
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_edit", _gettext("Edit"));
                    echo "
                </span>
              ";
                }
                // line 47
                echo "            </td>
            <td class=\"var-name fw-bold\">
              ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["variable"], "doc_link", [], "any", false, false, false, 49) != null)) {
                    // line 50
                    echo "                <span title=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 50), ["_" => " "]), "html", null, true);
                    echo "\">
                  ";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["variable"], "doc_link", [], "any", false, false, false, 51);
                    echo "
                </span>
              ";
                } else {
                    // line 54
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 54), ["_" => " "]), "html", null, true);
                    echo "
              ";
                }
                // line 56
                echo "            </td>
            <td class=\"var-value text-end font-monospace";
                // line 57
                echo (((isset($context["is_superuser"]) || array_key_exists("is_superuser", $context) ? $context["is_superuser"] : (function () { throw new RuntimeError('Variable "is_superuser" does not exist.', 57, $this->source); })())) ? (" editable") : (""));
                echo "\">
              ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "is_escaped", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 59);
                    echo "
              ";
                } else {
                    // line 61
                    echo "                ";
                    echo twig_replace_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 61)), ["," => ",&#8203;"]);
                    echo "
              ";
                }
                // line 63
                echo "            </td>
          </tr>

          ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["variable"], "has_session_value", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "            <tr class=\"var-row\" data-filter-row=\"";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 67)), "html", null, true);
                    echo "\">
              <td></td>
              <td class=\"var-name font-italic\">";
                    // line 69
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 69), ["_" => " "]), "html", null, true);
                    echo " (";
echo _gettext("Session value");
                    echo ")</td>
              <td class=\"var-value text-end font-monospace\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "session_value", [], "any", false, false, false, 70), "html", null, true);
                    echo "</td>
            </tr>
          ";
                }
                // line 73
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </tbody>
    </table>
  </div>
</div>

";
        } else {
            // line 80
            echo "  ";
            echo $this->env->getFilter('error')->getCallable()(twig_sprintf(_gettext("Not enough privilege to view server variables and settings. %s"), $this->env->getFunction('link_to_var_documentation')->getCallable()("show_compatibility_56",             // line 81
(isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 81, $this->source); })()))));
            // line 82
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/variables/index.twig";
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
        return array (  222 => 82,  220 => 81,  218 => 80,  210 => 74,  204 => 73,  198 => 70,  192 => 69,  186 => 67,  184 => 66,  179 => 63,  173 => 61,  167 => 59,  165 => 58,  161 => 57,  158 => 56,  152 => 54,  146 => 51,  141 => 50,  139 => 49,  135 => 47,  129 => 44,  124 => 43,  116 => 41,  114 => 40,  108 => 38,  104 => 37,  96 => 32,  92 => 31,  88 => 30,  81 => 25,  79 => 23,  78 => 22,  74 => 20,  72 => 17,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  48 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
<div class=\"row\">
  <h2>
    {{ get_image('s_vars') }}
    {% trans 'Server variables and settings' %}
    {{ show_mysql_docu('server_system_variables') }}
  </h2>
</div>

{% if variables is not empty %}
  <a href=\"#\" class=\"ajax saveLink hide\">
    {{ get_icon('b_save', 'Save'|trans) }}
  </a>
  <a href=\"#\" class=\"cancelLink hide\">
    {{ get_icon('b_close', 'Cancel'|trans) }}
  </a>
  {{ get_image('b_help', 'Documentation'|trans, {
    'class': 'hide',
    'id': 'docImage'
  }) }}

  {% include 'filter.twig' with {
    'filter_value': filter_value
  } only %}

  <div class=\"table-responsive\">
    <table id=\"serverVariables\" class=\"table table-striped table-hover table-sm\">
      <thead>
        <tr>
          <th scope=\"col\">{% trans 'Action' %}</th>
          <th scope=\"col\">{% trans 'Variable' %}</th>
          <th scope=\"col\" class=\"text-end\">{% trans 'Value' %}</th>
        </tr>
      </thead>

      <tbody>
        {% for variable in variables %}
          <tr class=\"var-row\" data-filter-row=\"{{ variable.name|upper }}\">
            <td>
              {% if variable.is_editable %}
                <a href=\"#\" data-variable=\"{{ variable.name }}\" class=\"editLink\">{{ get_icon('b_edit', 'Edit'|trans) }}</a>
              {% else %}
                <span title=\"{% trans 'This is a read-only variable and can not be edited' %}\" class=\"read_only_var\">
                  {{ get_icon('bd_edit', 'Edit'|trans) }}
                </span>
              {% endif %}
            </td>
            <td class=\"var-name fw-bold\">
              {% if variable.doc_link != null %}
                <span title=\"{{ variable.name|replace({'_': ' '}) }}\">
                  {{ variable.doc_link|raw }}
                </span>
              {% else %}
                {{ variable.name|replace({'_': ' '}) }}
              {% endif %}
            </td>
            <td class=\"var-value text-end font-monospace{{ is_superuser ? ' editable' }}\">
              {% if variable.is_escaped %}
                {{ variable.value|raw }}
              {% else %}
                {{ variable.value|e|replace({',': ',&#8203;'})|raw }}
              {% endif %}
            </td>
          </tr>

          {% if variable.has_session_value %}
            <tr class=\"var-row\" data-filter-row=\"{{ variable.name|upper }}\">
              <td></td>
              <td class=\"var-name font-italic\">{{ variable.name|replace({'_': ' '}) }} ({% trans 'Session value' %})</td>
              <td class=\"var-value text-end font-monospace\">{{ variable.session_value }}</td>
            </tr>
          {% endif %}
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>

{% else %}
  {{ 'Not enough privilege to view server variables and settings. %s'|trans|format(
    link_to_var_documentation('show_compatibility_56', is_mariadb)
  )|error }}
{% endif %}
", "server/variables/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/variables/index.twig");
    }
}
