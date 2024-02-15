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

/* server/collations/index.twig */
class __TwigTemplate_52191ac93f878e4473fe0ad72ca8a7d6 extends Template
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
        echo "<div class=container-fluid>
  <h2>
    ";
        // line 3
        echo $this->env->getFunction('get_image')->getCallable()("s_asci");
        echo "
    ";
        // line 4
echo _gettext("Character sets and collations");
        // line 5
        echo "  </h2>

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 8
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <div><strong>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</strong></div>
        <div>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
      </div>
      <ul class=\"list-group list-group-flush\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 15
                echo "          <li class=\"list-group-item\">
            <div class=\"row\">
              <div class=\"col\">
                <div><strong>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</strong></div>
                <div>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 19), "html", null, true);
                echo "</div>
              </div>
              <div class=\"col align-self-center text-end\">
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["collation"], "is_default", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                  <span class=\"badge bg-secondary text-dark\">";
echo _pgettext("The collation is the default one", "default");
                    echo "</span>
                ";
                }
                // line 25
                echo "              </div>
            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      </ul>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/collations/index.twig";
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
        return array (  113 => 32,  105 => 29,  96 => 25,  90 => 23,  88 => 22,  82 => 19,  78 => 18,  73 => 15,  69 => 14,  63 => 11,  59 => 10,  55 => 8,  51 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=container-fluid>
  <h2>
    {{ get_image('s_asci') }}
    {% trans 'Character sets and collations' %}
  </h2>

  {% for charset in charsets %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <div><strong>{{ charset.name }}</strong></div>
        <div>{{ charset.description }}</div>
      </div>
      <ul class=\"list-group list-group-flush\">
        {% for collation in charset.collations %}
          <li class=\"list-group-item\">
            <div class=\"row\">
              <div class=\"col\">
                <div><strong>{{ collation.name }}</strong></div>
                <div>{{ collation.description }}</div>
              </div>
              <div class=\"col align-self-center text-end\">
                {% if collation.is_default %}
                  <span class=\"badge bg-secondary text-dark\">{% trans %}default{% context %}The collation is the default one{% endtrans %}</span>
                {% endif %}
              </div>
            </div>
          </li>
        {% endfor %}
      </ul>
    </div>
  {% endfor %}
</div>
", "server/collations/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/collations/index.twig");
    }
}
