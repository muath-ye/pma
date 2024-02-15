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

/* server/status/status/index.twig */
class __TwigTemplate_6a0735944310f7bfd4569d8415cc222d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "status";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/status/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        if ((isset($context["is_data_loaded"]) || array_key_exists("is_data_loaded", $context) ? $context["is_data_loaded"] : (function () { throw new RuntimeError('Variable "is_data_loaded" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "  <div class=\"row\"><h3>";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Network traffic since startup: %s"), (isset($context["network_traffic"]) || array_key_exists("network_traffic", $context) ? $context["network_traffic"] : (function () { throw new RuntimeError('Variable "network_traffic" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "</h3></div>
  <div class=\"row\"><p>";
            // line 7
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("This MySQL server has been running for %1\$s. It started up on %2\$s."), (isset($context["uptime"]) || array_key_exists("uptime", $context) ? $context["uptime"] : (function () { throw new RuntimeError('Variable "uptime" does not exist.', 7, $this->source); })()), (isset($context["start_time"]) || array_key_exists("start_time", $context) ? $context["start_time"] : (function () { throw new RuntimeError('Variable "start_time" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "</p></div>

<div class=\"row align-items-start\">
  <table class=\"table table-striped table-hover col-12 col-md-5 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">
          ";
            // line 14
echo _gettext("Traffic");
            // line 15
            echo "          ";
            echo $this->env->getFunction('show_hint')->getCallable()(_gettext("On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect."));
            echo "
        </th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">";
            // line 18
echo _gettext("ø per hour");
            echo "</th>
      </tr>
    </thead>

    <tbody>
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["traffic"]) || array_key_exists("traffic", $context) ? $context["traffic"] : (function () { throw new RuntimeError('Variable "traffic" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_traffic"]) {
                // line 24
                echo "        <tr>
          <th scope=\"row\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_traffic"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</th>
          <td class=\"font-monospace text-end\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_traffic"], "number", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
          <td class=\"font-monospace text-end\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_traffic"], "per_hour", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_traffic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </tbody>
  </table>

  <table class=\"table table-striped table-hover col-12 col-md-6 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">";
            // line 36
echo _gettext("Connections");
            echo "</th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">";
            // line 38
echo _gettext("ø per hour");
            echo "</th>
        <th class=\"text-end\" scope=\"col\">%</th>
      </tr>
    </thead>

    <tbody>
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["connections"]) || array_key_exists("connections", $context) ? $context["connections"] : (function () { throw new RuntimeError('Variable "connections" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["connection"]) {
                // line 45
                echo "        <tr>
          <th>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "name", [], "any", false, false, false, 46), "html", null, true);
                echo "</th>
          <td class=\"font-monospace text-end\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "number", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
          <td class=\"font-monospace text-end\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "per_hour", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
          <td class=\"font-monospace text-end\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "percentage", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['connection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    </tbody>
  </table>
</div>

  ";
            // line 56
            if (((isset($context["is_primary"]) || array_key_exists("is_primary", $context) ? $context["is_primary"] : (function () { throw new RuntimeError('Variable "is_primary" does not exist.', 56, $this->source); })()) || (isset($context["is_replica"]) || array_key_exists("is_replica", $context) ? $context["is_replica"] : (function () { throw new RuntimeError('Variable "is_replica" does not exist.', 56, $this->source); })()))) {
                // line 57
                echo "    <p class=\"alert alert-primary clearfloat\" role=\"alert\">
      ";
                // line 58
                if (((isset($context["is_primary"]) || array_key_exists("is_primary", $context) ? $context["is_primary"] : (function () { throw new RuntimeError('Variable "is_primary" does not exist.', 58, $this->source); })()) && (isset($context["is_replica"]) || array_key_exists("is_replica", $context) ? $context["is_replica"] : (function () { throw new RuntimeError('Variable "is_replica" does not exist.', 58, $this->source); })()))) {
                    // line 59
                    echo "        ";
echo _gettext("This MySQL server works as <b>primary</b> and <b>replica</b> in <b>replication</b> process.");
                    // line 60
                    echo "      ";
                } elseif ((isset($context["is_primary"]) || array_key_exists("is_primary", $context) ? $context["is_primary"] : (function () { throw new RuntimeError('Variable "is_primary" does not exist.', 60, $this->source); })())) {
                    // line 61
                    echo "        ";
echo _gettext("This MySQL server works as <b>primary</b> in <b>replication</b> process.");
                    // line 62
                    echo "      ";
                } elseif ((isset($context["is_replica"]) || array_key_exists("is_replica", $context) ? $context["is_replica"] : (function () { throw new RuntimeError('Variable "is_replica" does not exist.', 62, $this->source); })())) {
                    // line 63
                    echo "        ";
echo _gettext("This MySQL server works as <b>replica</b> in <b>replication</b> process.");
                    // line 64
                    echo "      ";
                }
                // line 65
                echo "    </p>

    <hr class=\"clearfloat\">

    <h3>";
                // line 69
echo _gettext("Replication status");
                echo "</h3>

    ";
                // line 71
                echo (isset($context["replication"]) || array_key_exists("replication", $context) ? $context["replication"] : (function () { throw new RuntimeError('Variable "replication" does not exist.', 71, $this->source); })());
                echo "
  ";
            }
            // line 73
            echo "
";
        } else {
            // line 75
            echo "  ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view server status."));
            echo "
";
        }
        // line 77
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/status/index.twig";
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
        return array (  221 => 77,  215 => 75,  211 => 73,  206 => 71,  201 => 69,  195 => 65,  192 => 64,  189 => 63,  186 => 62,  183 => 61,  180 => 60,  177 => 59,  175 => 58,  172 => 57,  170 => 56,  164 => 52,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  140 => 45,  136 => 44,  127 => 38,  122 => 36,  114 => 30,  105 => 27,  101 => 26,  97 => 25,  94 => 24,  90 => 23,  82 => 18,  75 => 15,  73 => 14,  63 => 7,  58 => 6,  56 => 5,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'status' %}
{% block content %}

{% if is_data_loaded %}
  <div class=\"row\"><h3>{{ 'Network traffic since startup: %s'|trans|format(network_traffic) }}</h3></div>
  <div class=\"row\"><p>{{ 'This MySQL server has been running for %1\$s. It started up on %2\$s.'|trans|format(uptime, start_time) }}</p></div>

<div class=\"row align-items-start\">
  <table class=\"table table-striped table-hover col-12 col-md-5 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">
          {% trans 'Traffic' %}
          {{ show_hint('On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.'|trans) }}
        </th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">{% trans 'ø per hour' %}</th>
      </tr>
    </thead>

    <tbody>
      {% for each_traffic in traffic %}
        <tr>
          <th scope=\"row\">{{ each_traffic.name }}</th>
          <td class=\"font-monospace text-end\">{{ each_traffic.number }}</td>
          <td class=\"font-monospace text-end\">{{ each_traffic.per_hour }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  <table class=\"table table-striped table-hover col-12 col-md-6 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">{% trans 'Connections' %}</th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">{% trans 'ø per hour' %}</th>
        <th class=\"text-end\" scope=\"col\">%</th>
      </tr>
    </thead>

    <tbody>
      {% for connection in connections %}
        <tr>
          <th>{{ connection.name }}</th>
          <td class=\"font-monospace text-end\">{{ connection.number }}</td>
          <td class=\"font-monospace text-end\">{{ connection.per_hour }}</td>
          <td class=\"font-monospace text-end\">{{ connection.percentage }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>

  {% if is_primary or is_replica %}
    <p class=\"alert alert-primary clearfloat\" role=\"alert\">
      {% if is_primary and is_replica %}
        {% trans 'This MySQL server works as <b>primary</b> and <b>replica</b> in <b>replication</b> process.' %}
      {% elseif is_primary %}
        {% trans 'This MySQL server works as <b>primary</b> in <b>replication</b> process.' %}
      {% elseif is_replica %}
        {% trans 'This MySQL server works as <b>replica</b> in <b>replication</b> process.' %}
      {% endif %}
    </p>

    <hr class=\"clearfloat\">

    <h3>{% trans 'Replication status' %}</h3>

    {{ replication|raw }}
  {% endif %}

{% else %}
  {{ 'Not enough privilege to view server status.'|trans|error }}
{% endif %}

{% endblock %}
", "server/status/status/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/status/index.twig");
    }
}
