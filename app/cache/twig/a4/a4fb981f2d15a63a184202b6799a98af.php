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

/* server/plugins/index.twig */
class __TwigTemplate_0a9f70e4966544fbc4e2249392911515 extends Template
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
<h2>
  ";
        // line 3
        echo $this->env->getFunction('get_image')->getCallable()("b_plugin");
        echo "
  ";
        // line 4
echo _gettext("Plugins");
        // line 5
        echo "</h2>

<div id=\"plugins_plugins\">
  <div class=\"card\">
    <div class=\"card-body\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 10, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 11
            echo "        <a class=\"btn btn-primary\" href=\"#plugins-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clean_types"]) || array_key_exists("clean_types", $context) ? $context["clean_types"] : (function () { throw new RuntimeError('Variable "clean_types" does not exist.', 11, $this->source); })()), $context["type"], [], "array", false, false, false, 11), "html", null, true);
            echo "\">
          ";
            // line 12
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
        </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
  </div>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["list"]) {
            // line 18
            echo "    <div class=\"row\">
      <div class=\"table-responsive col-12\">
        <table class=\"table table-striped table-hover caption-top w-auto\" id=\"plugins-";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clean_types"]) || array_key_exists("clean_types", $context) ? $context["clean_types"] : (function () { throw new RuntimeError('Variable "clean_types" does not exist.', 20, $this->source); })()), $context["type"], [], "array", false, false, false, 20), "html", null, true);
            echo "\">
          <caption>
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
          </caption>
          <thead>
            <tr>
              <th scope=\"col\">";
            // line 26
echo _gettext("Plugin");
            echo "</th>
              <th scope=\"col\">";
            // line 27
echo _gettext("Description");
            echo "</th>
              <th scope=\"col\">";
            // line 28
echo _gettext("Version");
            echo "</th>
              <th scope=\"col\">";
            // line 29
echo _gettext("Author");
            echo "</th>
              <th scope=\"col\">";
            // line 30
echo _gettext("License");
            echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 35
                echo "              <tr class=\"noclick\">
                <th>
                  ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "
                  ";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 38) != "ACTIVE")) {
                    // line 39
                    echo "                    <span class=\"badge bg-danger\">
                      ";
                    // line 40
                    if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 40) == "INACTIVE")) {
                        // line 41
                        echo "                        ";
echo _gettext("inactive");
                        // line 42
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 42) == "DISABLED")) {
                        // line 43
                        echo "                        ";
echo _gettext("disabled");
                        // line 44
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 44) == "DELETING")) {
                        // line 45
                        echo "                        ";
echo _gettext("deleting");
                        // line 46
                        echo "                      ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["plugin"], "status", [], "any", false, false, false, 46) == "DELETED")) {
                        // line 47
                        echo "                        ";
echo _gettext("deleted");
                        // line 48
                        echo "                      ";
                    }
                    // line 49
                    echo "                    </span>
                  ";
                }
                // line 51
                echo "                </th>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "author", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "license", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          </tbody>
        </table>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/plugins/index.twig";
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
        return array (  200 => 63,  190 => 58,  181 => 55,  177 => 54,  173 => 53,  169 => 52,  166 => 51,  162 => 49,  159 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  136 => 40,  133 => 39,  131 => 38,  127 => 37,  123 => 35,  119 => 34,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  89 => 22,  84 => 20,  80 => 18,  76 => 17,  72 => 15,  63 => 12,  58 => 11,  54 => 10,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
<h2>
  {{ get_image('b_plugin') }}
  {% trans 'Plugins' %}
</h2>

<div id=\"plugins_plugins\">
  <div class=\"card\">
    <div class=\"card-body\">
      {% for type in plugins|keys %}
        <a class=\"btn btn-primary\" href=\"#plugins-{{ clean_types[type] }}\">
          {{ type }}
        </a>
      {% endfor %}
    </div>
  </div>
  {% for type, list in plugins %}
    <div class=\"row\">
      <div class=\"table-responsive col-12\">
        <table class=\"table table-striped table-hover caption-top w-auto\" id=\"plugins-{{ clean_types[type] }}\">
          <caption>
            {{ type }}
          </caption>
          <thead>
            <tr>
              <th scope=\"col\">{% trans 'Plugin' %}</th>
              <th scope=\"col\">{% trans 'Description' %}</th>
              <th scope=\"col\">{% trans 'Version' %}</th>
              <th scope=\"col\">{% trans 'Author' %}</th>
              <th scope=\"col\">{% trans 'License' %}</th>
            </tr>
          </thead>
          <tbody>
            {% for plugin in list %}
              <tr class=\"noclick\">
                <th>
                  {{ plugin.name }}
                  {% if plugin.status != 'ACTIVE' %}
                    <span class=\"badge bg-danger\">
                      {% if plugin.status == 'INACTIVE' %}
                        {% trans 'inactive' %}
                      {% elseif plugin.status == 'DISABLED' %}
                        {% trans 'disabled' %}
                      {% elseif plugin.status == 'DELETING' %}
                        {% trans 'deleting' %}
                      {% elseif plugin.status == 'DELETED' %}
                        {% trans 'deleted' %}
                      {% endif %}
                    </span>
                  {% endif %}
                </th>
                <td>{{ plugin.description }}</td>
                <td>{{ plugin.version }}</td>
                <td>{{ plugin.author }}</td>
                <td>{{ plugin.license }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  {% endfor %}
</div>
</div>
", "server/plugins/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/plugins/index.twig");
    }
}
