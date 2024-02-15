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

/* server/engines/show.twig */
class __TwigTemplate_03d29a6326c71269f348b948bf306e7d extends Template
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
        echo "<h2>
  ";
        // line 2
        echo $this->env->getFunction('get_image')->getCallable()("b_engine");
        echo "
  ";
        // line 3
echo _gettext("Storage engines");
        // line 4
        echo "</h2>

";
        // line 6
        if ( !twig_test_empty((isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "  <h2>
    ";
            // line 8
            echo $this->env->getFunction('get_image')->getCallable()("b_engine");
            echo "
    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "
    ";
            // line 10
            echo $this->env->getFunction('show_mysql_docu')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 10, $this->source); })()), "help_page", [], "any", false, false, false, 10));
            echo "
  </h2>
  <p><em>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 12, $this->source); })()), "comment", [], "any", false, false, false, 12), "html", null, true);
            echo "</em></p>

  ";
            // line 14
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 14, $this->source); })()), "info_pages", [], "any", false, false, false, 14)) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 14, $this->source); })()), "info_pages", [], "any", false, false, false, 14)))) {
                // line 15
                echo "    <p>
      <strong>[</strong>
      ";
                // line 17
                if (twig_test_empty((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()))) {
                    // line 18
                    echo "        <strong>";
echo _gettext("Variables");
                    echo "</strong>
      ";
                } else {
                    // line 20
                    echo "        <a href=\"";
                    echo $this->env->getFunction('url')->getCallable()(("/server/engines/" . twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 20, $this->source); })()), "engine", [], "any", false, false, false, 20)));
                    echo "\">
          ";
                    // line 21
echo _gettext("Variables");
                    // line 22
                    echo "        </a>
      ";
                }
                // line 24
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 24, $this->source); })()), "info_pages", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["current"] => $context["label"]) {
                    // line 25
                    echo "        <strong>|</strong>
        ";
                    // line 26
                    if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()) == $context["current"]))) {
                        // line 27
                        echo "          <strong>";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "</strong>
        ";
                    } else {
                        // line 29
                        echo "          <a href=\"";
                        echo $this->env->getFunction('url')->getCallable()(((("/server/engines/" . twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 29, $this->source); })()), "engine", [], "any", false, false, false, 29)) . "/") . $context["current"]));
                        echo "\">
            ";
                        // line 30
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "
          </a>
        ";
                    }
                    // line 33
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['current'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "      <strong>]</strong>
    </p>
  ";
            }
            // line 37
            echo "
  ";
            // line 38
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 38, $this->source); })()), "page", [], "any", false, false, false, 38))) {
                // line 39
                echo "    ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 39, $this->source); })()), "page", [], "any", false, false, false, 39);
                echo "
  ";
            } else {
                // line 41
                echo "    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 41, $this->source); })()), "support", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
    ";
                // line 42
                echo twig_get_attribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 42, $this->source); })()), "variables", [], "any", false, false, false, 42);
                echo "
  ";
            }
        } else {
            // line 45
            echo "  <p>";
            echo $this->env->getFilter('error')->getCallable()(_gettext("Unknown storage engine."));
            echo "</p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/engines/show.twig";
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
        return array (  158 => 45,  152 => 42,  147 => 41,  141 => 39,  139 => 38,  136 => 37,  131 => 34,  125 => 33,  119 => 30,  114 => 29,  108 => 27,  106 => 26,  103 => 25,  98 => 24,  94 => 22,  92 => 21,  87 => 20,  81 => 18,  79 => 17,  75 => 15,  73 => 14,  68 => 12,  63 => 10,  59 => 9,  55 => 8,  52 => 7,  50 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>
  {{ get_image('b_engine') }}
  {% trans 'Storage engines' %}
</h2>

{% if engine is not empty %}
  <h2>
    {{ get_image('b_engine') }}
    {{ engine.title }}
    {{ show_mysql_docu(engine.help_page) }}
  </h2>
  <p><em>{{ engine.comment }}</em></p>

  {% if engine.info_pages is not empty and engine.info_pages is iterable %}
    <p>
      <strong>[</strong>
      {% if page is empty %}
        <strong>{% trans 'Variables' %}</strong>
      {% else %}
        <a href=\"{{ url('/server/engines/' ~ engine.engine) }}\">
          {% trans 'Variables' %}
        </a>
      {% endif %}
      {% for current, label in engine.info_pages %}
        <strong>|</strong>
        {% if page is defined and page == current %}
          <strong>{{ label }}</strong>
        {% else %}
          <a href=\"{{ url('/server/engines/' ~ engine.engine ~ '/' ~ current) }}\">
            {{ label }}
          </a>
        {% endif %}
      {% endfor %}
      <strong>]</strong>
    </p>
  {% endif %}

  {% if engine.page is not empty %}
    {{ engine.page|raw }}
  {% else %}
    <p>{{ engine.support }}</p>
    {{ engine.variables|raw }}
  {% endif %}
{% else %}
  <p>{{ 'Unknown storage engine.'|trans|error }}</p>
{% endif %}
", "server/engines/show.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/show.twig");
    }
}
