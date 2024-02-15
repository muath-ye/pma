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

/* server/status/advisor/index.twig */
class __TwigTemplate_861f75be79451c3ba9f9cdc3f5c57c8c extends Template
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
        $context["active"] = "advisor";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/advisor/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
  <h2>";
        // line 6
echo _gettext("Advisor system");
        echo "</h2>

  ";
        // line 8
        if (twig_test_empty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "    ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view the advisor."));
            echo "
  ";
        } else {
            // line 11
            echo "    <button type=\"button\" class=\"btn btn-secondary mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#advisorInstructionsModal\">
      ";
            // line 12
            echo $this->env->getFunction('get_icon')->getCallable()("b_help", _gettext("Instructions"));
            echo "
    </button>

    <div class=\"modal fade\" id=\"advisorInstructionsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"advisorInstructionsModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"advisorInstructionsModalLabel\">";
            // line 19
echo _gettext("Advisor system");
            echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 20
echo _gettext("Close");
            echo "\"></button>
          </div>
          <div class=\"modal-body\">
            <p>";
            // line 24
echo _gettext("The Advisor system can provide recommendations on server variables by analyzing the server status variables.");
            // line 27
            echo "</p>
            <p>";
            // line 29
echo _gettext("Do note however that this system provides recommendations based on simple calculations and by rule of thumb which may not necessarily apply to your system.");
            // line 32
            echo "</p>
            <p>";
            // line 34
echo _gettext("Prior to changing any of the configuration, be sure to know what you are changing (by reading the documentation) and how to undo the change. Wrong tuning can have a very negative effect on performance.");
            // line 37
            echo "</p>
            <p>";
            // line 39
echo _gettext("The best way to tune your system would be to change only one setting at a time, observe or benchmark your database, and undo the change if there was no clearly measurable improvement.");
            // line 42
            echo "</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">";
            // line 45
echo _gettext("Close");
            echo "</button>
          </div>
        </div>
      </div>
    </div>

    ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 51) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "errors", [], "any", false, false, false, 51)) > 0))) {
                // line 52
                echo "      <div class=\"alert alert-danger mt-2 mb-2\" role=\"alert\">
        <h4 class=\"alert-heading\">";
                // line 53
echo _gettext("Errors occurred while executing rule expressions:");
                echo "</h4>
        <ul>
          ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "errors", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 56
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        </ul>
      </div>
    ";
            }
            // line 61
            echo "
    ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "fired", [], "any", true, true, false, 62) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "fired", [], "any", false, false, false, 62)) > 0))) {
                // line 63
                echo "      <h4>";
echo _gettext("Possible performance issues");
                echo "</h4>

      <div class=\"accordion mb-4\" id=\"rulesAccordion\">
        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "fired", [], "any", false, false, false, 66));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                    // line 67
                    echo "          <div class=\"accordion-item\">
            <div class=\"accordion-header\" id=\"heading";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68), "html", null, true);
                    echo "\">
              <button class=\"accordion-button";
                    // line 69
                    echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 69)) ? (" collapsed") : (""));
                    echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), "html", null, true);
                    echo "\" aria-expanded=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 69)) ? ("true") : ("false"));
                    echo "\" aria-controls=\"collapse";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), "html", null, true);
                    echo "\">
                ";
                    // line 70
                    echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["rule"], "issue", [], "any", false, false, false, 70)), "html", null, true);
                    echo "
              </button>
            </div>
            <div id=\"collapse";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), "html", null, true);
                    echo "\" class=\"accordion-collapse collapse";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 73)) ? (" show") : (""));
                    echo "\" aria-labelledby=\"heading";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), "html", null, true);
                    echo "\" data-bs-parent=\"#rulesAccordion\">
              <div class=\"accordion-body\">
                <dl>
                  <dt>";
                    // line 76
echo _gettext("Issue:");
                    echo "</dt>
                  <dd>";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["rule"], "issue", [], "any", false, false, false, 77);
                    echo "</dd>

                  <dt>";
                    // line 79
echo _gettext("Recommendation:");
                    echo "</dt>
                  <dd>";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["rule"], "recommendation", [], "any", false, false, false, 80);
                    echo "</dd>

                  <dt>";
                    // line 82
echo _gettext("Justification:");
                    echo "</dt>
                  <dd>";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "justification", [], "any", false, false, false, 83), "html", null, true);
                    echo "</dd>

                  <dt>";
                    // line 85
echo _gettext("Used variable / formula:");
                    echo "</dt>
                  <dd>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "formula", [], "any", false, false, false, 86), "html", null, true);
                    echo "</dd>

                  <dt>";
                    // line 88
echo _gettext("Test:");
                    echo "</dt>
                  <dd>";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "test", [], "any", false, false, false, 89), "html", null, true);
                    echo "</dd>
                </dl>
              </div>
            </div>
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "      </div>
    ";
            }
            // line 97
            echo "  ";
        }
        // line 98
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/advisor/index.twig";
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
        return array (  280 => 98,  277 => 97,  273 => 95,  253 => 89,  249 => 88,  244 => 86,  240 => 85,  235 => 83,  231 => 82,  226 => 80,  222 => 79,  217 => 77,  213 => 76,  203 => 73,  197 => 70,  187 => 69,  183 => 68,  180 => 67,  163 => 66,  156 => 63,  154 => 62,  151 => 61,  146 => 58,  137 => 56,  133 => 55,  128 => 53,  125 => 52,  123 => 51,  114 => 45,  109 => 42,  107 => 39,  104 => 37,  102 => 34,  99 => 32,  97 => 29,  94 => 27,  92 => 24,  86 => 20,  82 => 19,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  56 => 6,  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'advisor' %}

{% block content %}

  <h2>{% trans 'Advisor system' %}</h2>

  {% if data is empty %}
    {{ 'Not enough privilege to view the advisor.'|trans|error }}
  {% else %}
    <button type=\"button\" class=\"btn btn-secondary mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#advisorInstructionsModal\">
      {{ get_icon('b_help', 'Instructions'|trans) }}
    </button>

    <div class=\"modal fade\" id=\"advisorInstructionsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"advisorInstructionsModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"advisorInstructionsModalLabel\">{% trans 'Advisor system' %}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
          </div>
          <div class=\"modal-body\">
            <p>
              {%- trans -%}
                The Advisor system can provide recommendations on server variables by analyzing the server status variables.
              {%- endtrans -%}
            </p>
            <p>
              {%- trans -%}
                Do note however that this system provides recommendations based on simple calculations and by rule of thumb which may not necessarily apply to your system.
              {%- endtrans -%}
            </p>
            <p>
              {%- trans -%}
                Prior to changing any of the configuration, be sure to know what you are changing (by reading the documentation) and how to undo the change. Wrong tuning can have a very negative effect on performance.
              {%- endtrans -%}
            </p>
            <p>
              {%- trans -%}
                The best way to tune your system would be to change only one setting at a time, observe or benchmark your database, and undo the change if there was no clearly measurable improvement.
              {%- endtrans -%}
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
          </div>
        </div>
      </div>
    </div>

    {% if data.errors is defined and data.errors|length > 0 %}
      <div class=\"alert alert-danger mt-2 mb-2\" role=\"alert\">
        <h4 class=\"alert-heading\">{% trans 'Errors occurred while executing rule expressions:' %}</h4>
        <ul>
          {% for error in data.errors %}
            <li>{{ error }}</li>
          {% endfor %}
        </ul>
      </div>
    {% endif %}

    {% if data.fired is defined and data.fired|length > 0 %}
      <h4>{% trans 'Possible performance issues' %}</h4>

      <div class=\"accordion mb-4\" id=\"rulesAccordion\">
        {% for rule in data.fired %}
          <div class=\"accordion-item\">
            <div class=\"accordion-header\" id=\"heading{{ loop.index }}\">
              <button class=\"accordion-button{{ not loop.first ? ' collapsed' }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse{{ loop.index }}\" aria-expanded=\"{{ loop.first ? 'true' : 'false' }}\" aria-controls=\"collapse{{ loop.index }}\">
                {{ rule.issue|striptags }}
              </button>
            </div>
            <div id=\"collapse{{ loop.index }}\" class=\"accordion-collapse collapse{{ loop.first ? ' show' }}\" aria-labelledby=\"heading{{ loop.index }}\" data-bs-parent=\"#rulesAccordion\">
              <div class=\"accordion-body\">
                <dl>
                  <dt>{% trans 'Issue:' %}</dt>
                  <dd>{{ rule.issue|raw }}</dd>

                  <dt>{% trans 'Recommendation:' %}</dt>
                  <dd>{{ rule.recommendation|raw }}</dd>

                  <dt>{% trans 'Justification:' %}</dt>
                  <dd>{{ rule.justification }}</dd>

                  <dt>{% trans 'Used variable / formula:' %}</dt>
                  <dd>{{ rule.formula }}</dd>

                  <dt>{% trans 'Test:' %}</dt>
                  <dd>{{ rule.test }}</dd>
                </dl>
              </div>
            </div>
          </div>
        {% endfor %}
      </div>
    {% endif %}
  {% endif %}

{% endblock %}
", "server/status/advisor/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/advisor/index.twig");
    }
}
