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

/* server/status/processes/index.twig */
class __TwigTemplate_9807b786935dbfb721bdb8ee23fa8d21 extends Template
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
        $context["active"] = "processes";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/processes/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
        // line 6
echo _gettext("Filters");
        echo "</div>
  <div class=\"card-body\">
    <form action=\"";
        // line 8
        echo $this->env->getFunction('url')->getCallable()("/server/status/processes");
        echo "\" method=\"post\" class=\"row row-cols-lg-auto gy-1 gx-3 align-items-center\">
      ";
        // line 9
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 9, $this->source); })()));
        echo "

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input autosubmit\" type=\"checkbox\" name=\"showExecuting\" id=\"showExecuting\"";
        // line 13
        echo (((isset($context["is_checked"]) || array_key_exists("is_checked", $context) ? $context["is_checked"] : (function () { throw new RuntimeError('Variable "is_checked" does not exist.', 13, $this->source); })())) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"showExecuting\">";
        // line 14
echo _gettext("Show only active");
        echo "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
        // line 19
echo _gettext("Refresh");
        echo "\">
      </div>
    </form>
  </div>
</div>

";
        // line 25
        echo (isset($context["server_process_list"]) || array_key_exists("server_process_list", $context) ? $context["server_process_list"] : (function () { throw new RuntimeError('Variable "server_process_list" does not exist.', 25, $this->source); })());
        echo "

<div class=\"row\">
";
        // line 28
        echo $this->env->getFilter('notice')->getCallable()(_gettext("Note: Enabling the auto refresh here might cause heavy traffic between the web server and the MySQL server."));
        echo "
</div>

<div class=\"tabLinks row\">
  <label>
    ";
        // line 33
echo _gettext("Refresh rate");
        echo ":

    <select id=\"id_refreshRate\" class=\"refreshRate\" name=\"refreshRate\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200]);
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 37
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["rate"], "html", null, true);
            echo "\"";
            echo ((($context["rate"] == 5)) ? (" selected") : (""));
            echo ">
          ";
            // line 38
            if (($context["rate"] < 60)) {
                // line 39
                echo "            ";
                if (($context["rate"] == 1)) {
                    // line 40
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d second"), $context["rate"]), "html", null, true);
                    echo "
            ";
                } else {
                    // line 42
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d seconds"), $context["rate"]), "html", null, true);
                    echo "
            ";
                }
                // line 44
                echo "          ";
            } else {
                // line 45
                echo "            ";
                if ((($context["rate"] / 60) == 1)) {
                    // line 46
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d minute"), ($context["rate"] / 60)), "html", null, true);
                    echo "
            ";
                } else {
                    // line 48
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d minutes"), ($context["rate"] / 60)), "html", null, true);
                    echo "
            ";
                }
                // line 50
                echo "          ";
            }
            // line 51
            echo "        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </select>
  </label>
  <a id=\"toggleRefresh\" href=\"#\">
    ";
        // line 56
        echo $this->env->getFunction('get_image')->getCallable()("play");
        echo "
    ";
        // line 57
echo _gettext("Start auto refresh");
        // line 58
        echo "  </a>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/processes/index.twig";
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
        return array (  181 => 58,  179 => 57,  175 => 56,  170 => 53,  163 => 51,  160 => 50,  154 => 48,  148 => 46,  145 => 45,  142 => 44,  136 => 42,  130 => 40,  127 => 39,  125 => 38,  118 => 37,  114 => 36,  108 => 33,  100 => 28,  94 => 25,  85 => 19,  77 => 14,  73 => 13,  66 => 9,  62 => 8,  57 => 6,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'processes' %}
{% block content %}

<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">{% trans 'Filters' %}</div>
  <div class=\"card-body\">
    <form action=\"{{ url('/server/status/processes') }}\" method=\"post\" class=\"row row-cols-lg-auto gy-1 gx-3 align-items-center\">
      {{ get_hidden_inputs(url_params) }}

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input autosubmit\" type=\"checkbox\" name=\"showExecuting\" id=\"showExecuting\"{{ is_checked ? ' checked' }}>
          <label class=\"form-check-label\" for=\"showExecuting\">{% trans 'Show only active' %}</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"{% trans 'Refresh' %}\">
      </div>
    </form>
  </div>
</div>

{{ server_process_list|raw }}

<div class=\"row\">
{{ 'Note: Enabling the auto refresh here might cause heavy traffic between the web server and the MySQL server.'|trans|notice }}
</div>

<div class=\"tabLinks row\">
  <label>
    {% trans 'Refresh rate' %}:

    <select id=\"id_refreshRate\" class=\"refreshRate\" name=\"refreshRate\">
      {% for rate in [2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200] %}
        <option value=\"{{ rate }}\"{{ rate == 5 ? ' selected' }}>
          {% if rate < 60 %}
            {% if rate == 1 %}
              {{ '%d second'|trans|format(rate) }}
            {% else %}
              {{ '%d seconds'|trans|format(rate) }}
            {% endif %}
          {% else %}
            {% if rate / 60 == 1 %}
              {{ '%d minute'|trans|format(rate / 60) }}
            {% else %}
              {{ '%d minutes'|trans|format(rate / 60) }}
            {% endif %}
          {% endif %}
        </option>
      {% endfor %}
    </select>
  </label>
  <a id=\"toggleRefresh\" href=\"#\">
    {{ get_image('play') }}
    {% trans 'Start auto refresh' %}
  </a>
</div>

{% endblock %}
", "server/status/processes/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/processes/index.twig");
    }
}
