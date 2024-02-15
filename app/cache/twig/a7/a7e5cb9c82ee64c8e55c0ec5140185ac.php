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

/* server/select/index.twig */
class __TwigTemplate_f570437510363d2cc7c00b4af753de99 extends Template
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
        if ((isset($context["not_only_options"]) || array_key_exists("not_only_options", $context) ? $context["not_only_options"] : (function () { throw new RuntimeError('Variable "not_only_options" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <form class=\"disableAjax\" method=\"post\" action=\"";
            echo (isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 2, $this->source); })());
            echo "\">
        ";
            // line 3
            echo $this->env->getFunction('get_hidden_fields')->getCallable()([]);
            echo "
        <label for=\"select_server\" class=\"form-label\">";
            // line 4
echo _gettext("Current server:");
            echo "</label>
        <select id=\"select_server\" class=\"form-select autosubmit\" name=\"server\">
            <option value=\"\">(";
            // line 6
echo _gettext("Servers");
            echo ") ...</option>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 7, $this->source); })()), "select", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 8
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "value", [], "any", false, false, false, 8), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 8)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 8), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </select>
    </form>
";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 12, $this->source); })()), "list", [], "any", false, false, false, 12))) {
            // line 13
            echo "    ";
echo _gettext("Current server:");
            echo "<br>
    <ul id=\"list_server\">
        <li>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 16, $this->source); })()), "list", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 17
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                    <strong>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 18), "html", null, true);
                    echo "</strong>
                ";
                } else {
                    // line 20
                    echo "                    <a class=\"disableAjax item\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "href", [], "any", false, false, false, 20), "html", null, true);
                    echo "\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 21), "html", null, true);
                    // line 22
                    echo "</a>
                ";
                }
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </li>
    </ul>
";
        } else {
            // line 28
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 28, $this->source); })()), "select", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 29
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "value", [], "any", false, false, false, 29), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 29)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 29), "html", null, true);
                echo "</option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/select/index.twig";
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
        return array (  126 => 29,  121 => 28,  116 => 25,  110 => 24,  106 => 22,  104 => 21,  100 => 20,  94 => 18,  91 => 17,  87 => 16,  80 => 13,  78 => 12,  74 => 10,  61 => 8,  57 => 7,  53 => 6,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not_only_options %}
    <form class=\"disableAjax\" method=\"post\" action=\"{{ form_action|raw }}\">
        {{ get_hidden_fields([]) }}
        <label for=\"select_server\" class=\"form-label\">{% trans 'Current server:' %}</label>
        <select id=\"select_server\" class=\"form-select autosubmit\" name=\"server\">
            <option value=\"\">({% trans 'Servers' %}) ...</option>
            {% for server in servers.select %}
              <option value=\"{{ server.value }}\"{{ server.selected ? ' selected' }}>{{ server.label }}</option>
            {% endfor %}
        </select>
    </form>
{% elseif servers.list is not empty %}
    {% trans 'Current server:' %}<br>
    <ul id=\"list_server\">
        <li>
            {% for server in servers.list %}
                {% if server.selected %}
                    <strong>{{ server.label }}</strong>
                {% else %}
                    <a class=\"disableAjax item\" href=\"{{ server.href }}\">
                        {{- server.label -}}
                    </a>
                {% endif %}
            {% endfor %}
        </li>
    </ul>
{% else %}
  {% for server in servers.select %}
    <option value=\"{{ server.value }}\"{{ server.selected ? ' selected' }}>{{ server.label }}</option>
  {% endfor %}
{% endif %}
", "server/select/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/select/index.twig");
    }
}
