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

/* server/replication/status_table.twig */
class __TwigTemplate_926ee1ffb40c08be1b5a30421ef9fe92 extends Template
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
        echo "<div id=\"replication_";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "_section\"";
        echo (((isset($context["is_hidden"]) || array_key_exists("is_hidden", $context) ? $context["is_hidden"] : (function () { throw new RuntimeError('Variable "is_hidden" does not exist.', 1, $this->source); })())) ? (" style=\"display: none;\"") : (""));
        echo ">
  ";
        // line 2
        if ((isset($context["has_title"]) || array_key_exists("has_title", $context) ? $context["has_title"] : (function () { throw new RuntimeError('Variable "has_title" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <h4>
      <a id=\"replication_";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\"></a>
      ";
            // line 5
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()) == "primary")) {
                // line 6
                echo "        ";
echo _gettext("Primary status");
                // line 7
                echo "      ";
            } else {
                // line 8
                echo "        ";
echo _gettext("Replica status");
                // line 9
                echo "      ";
            }
            // line 10
            echo "    </h4>
  ";
        }
        // line 12
        echo "
  <table id=\"server";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "replicationsummary\" class=\"table w-auto\">
    <thead>
      <tr>
        <th>";
        // line 16
echo _gettext("Variable");
        echo "</th>
        <th>";
        // line 17
echo _gettext("Value");
        echo "</th>
      </tr>
    </thead>

    <tbody>
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
            // line 23
            echo "        <tr>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
          <td class=\"text-end font-monospace\">
            <span";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["variable"], "status", [], "any", false, false, false, 26) == "text-danger")) {
                echo " class=\"text-danger\"";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["variable"], "status", [], "any", false, false, false, 26) == "text-success")) {
                echo " class=\"text-success\"";
            }
            echo ">
              ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 27), "html", null, true);
            echo "
            </span>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
  </table>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/replication/status_table.twig";
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
        return array (  123 => 32,  112 => 27,  104 => 26,  99 => 24,  96 => 23,  92 => 22,  84 => 17,  80 => 16,  74 => 13,  71 => 12,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  49 => 4,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"replication_{{ type }}_section\"{{ is_hidden ? ' style=\"display: none;\"' }}>
  {% if has_title %}
    <h4>
      <a id=\"replication_{{ type }}\"></a>
      {% if type == 'primary' %}
        {% trans 'Primary status' %}
      {% else %}
        {% trans 'Replica status' %}
      {% endif %}
    </h4>
  {% endif %}

  <table id=\"server{{ type }}replicationsummary\" class=\"table w-auto\">
    <thead>
      <tr>
        <th>{% trans 'Variable' %}</th>
        <th>{% trans 'Value' %}</th>
      </tr>
    </thead>

    <tbody>
      {% for variable in variables %}
        <tr>
          <td>{{ variable.name }}</td>
          <td class=\"text-end font-monospace\">
            <span{% if variable.status == 'text-danger' %} class=\"text-danger\"{% elseif variable.status == 'text-success' %} class=\"text-success\"{% endif %}>
              {{ variable.value }}
            </span>
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
", "server/replication/status_table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/status_table.twig");
    }
}
