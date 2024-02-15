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

/* server/engines/index.twig */
class __TwigTemplate_934d969a90f485aba578444bbca7ce7d extends Template
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
        echo $this->env->getFunction('get_image')->getCallable()("b_engine");
        echo "
    ";
        // line 5
echo _gettext("Storage engines");
        // line 6
        echo "  </h2>
  </div>

  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th scope=\"col\">";
        // line 13
echo _gettext("Storage Engine");
        echo "</th>
          <th scope=\"col\">";
        // line 14
echo _gettext("Description");
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["engines"]) || array_key_exists("engines", $context) ? $context["engines"] : (function () { throw new RuntimeError('Variable "engines" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["engine"] => $context["details"]) {
            // line 19
            echo "          <tr class=\"";
            // line 20
            echo ((((twig_get_attribute($this->env, $this->source, $context["details"], "Support", [], "array", false, false, false, 20) == "NO") || (twig_get_attribute($this->env, $this->source, $context["details"], "Support", [], "array", false, false, false, 20) == "DISABLED"))) ? (" disabled") : (""));
            echo "
            ";
            // line 21
            echo (((twig_get_attribute($this->env, $this->source, $context["details"], "Support", [], "array", false, false, false, 21) == "DEFAULT")) ? (" marked") : (""));
            echo "\">
            <td>
              <a rel=\"newpage\" href=\"";
            // line 23
            echo $this->env->getFunction('url')->getCallable()(("/server/engines/" . $context["engine"]));
            echo "\">
                ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["details"], "Engine", [], "array", false, false, false, 24), "html", null, true);
            echo "
              </a>
            </td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["details"], "Comment", [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['engine'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/engines/index.twig";
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
        return array (  102 => 30,  93 => 27,  87 => 24,  83 => 23,  78 => 21,  74 => 20,  72 => 19,  68 => 18,  61 => 14,  57 => 13,  48 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"row\">
  <h2>
    {{ get_image('b_engine') }}
    {% trans 'Storage engines' %}
  </h2>
  </div>

  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th scope=\"col\">{% trans 'Storage Engine' %}</th>
          <th scope=\"col\">{% trans 'Description' %}</th>
        </tr>
      </thead>
      <tbody>
        {% for engine, details in engines %}
          <tr class=\"
            {{- details['Support'] == 'NO' or details['Support'] == 'DISABLED' ? ' disabled' }}
            {{ details['Support'] == 'DEFAULT' ? ' marked' }}\">
            <td>
              <a rel=\"newpage\" href=\"{{ url('/server/engines/' ~ engine) }}\">
                {{ details['Engine'] }}
              </a>
            </td>
            <td>{{ details['Comment'] }}</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
", "server/engines/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/index.twig");
    }
}
