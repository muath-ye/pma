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

/* server/privileges/initials_row.twig */
class __TwigTemplate_382acfa2c0ce8f82076d93f5f8f07bfe extends Template
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
        echo "<nav aria-label=\"";
echo _gettext("Pagination of user accounts");
        echo "\">
  <ul id=\"userAccountsPagination\" class=\"pagination\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array_initials"]) || array_key_exists("array_initials", $context) ? $context["array_initials"] : (function () { throw new RuntimeError('Variable "array_initials" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["initial"] => $context["user_available"]) {
            // line 4
            echo "      ";
            if ($context["user_available"]) {
                // line 5
                echo "        <li class=\"page-item";
                echo ((((isset($context["selected_initial"]) || array_key_exists("selected_initial", $context) ? $context["selected_initial"] : (function () { throw new RuntimeError('Variable "selected_initial" does not exist.', 5, $this->source); })()) === $context["initial"])) ? (" active") : (""));
                echo "\"";
                echo ((((isset($context["selected_initial"]) || array_key_exists("selected_initial", $context) ? $context["selected_initial"] : (function () { throw new RuntimeError('Variable "selected_initial" does not exist.', 5, $this->source); })()) === $context["initial"])) ? (" aria-current=\"page\"") : (""));
                echo ">
          <a class=\"page-link\" href=\"";
                // line 6
                echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["initial" => $context["initial"]]);
                echo "\">
          ";
                // line 7
                if (($context["initial"] === "")) {
                    // line 8
                    echo "            <span class=\"text-danger text-nowrap\">";
                    echo twig_escape_filter($this->env, _gettext("Any"), "html", null, true);
                    echo "</span>
          ";
                } else {
                    // line 10
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["initial"], "html", null, true);
                    echo "
          ";
                }
                // line 12
                echo "          </a>
        </li>
      ";
            } else {
                // line 15
                echo "        <li class=\"page-item disabled\">
          <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">";
                // line 16
                echo twig_escape_filter($this->env, $context["initial"], "html", null, true);
                echo "</a>
        </li>
      ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['initial'], $context['user_available'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    <li class=\"page-item\">
      <a class=\"page-link text-nowrap\" href=\"";
        // line 21
        echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["showall" => true]);
        echo "\">";
echo _gettext("Show all");
        echo "</a>
    </li>
  </ul>
</nav>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/initials_row.twig";
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
        return array (  98 => 21,  95 => 20,  89 => 19,  83 => 16,  80 => 15,  75 => 12,  69 => 10,  63 => 8,  61 => 7,  57 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav aria-label=\"{% trans 'Pagination of user accounts' %}\">
  <ul id=\"userAccountsPagination\" class=\"pagination\">
    {% for initial, user_available in array_initials %}
      {% if user_available %}
        <li class=\"page-item{{ selected_initial is same as(initial) ? ' active' }}\"{{ selected_initial is same as(initial) ? ' aria-current=\"page\"' }}>
          <a class=\"page-link\" href=\"{{ url('/server/privileges', {'initial': initial}) }}\">
          {% if initial is same as('') %}
            <span class=\"text-danger text-nowrap\">{{ 'Any'|trans }}</span>
          {% else %}
            {{ initial }}
          {% endif %}
          </a>
        </li>
      {% else %}
        <li class=\"page-item disabled\">
          <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">{{ initial }}</a>
        </li>
      {% endif %}
    {% endfor %}
    <li class=\"page-item\">
      <a class=\"page-link text-nowrap\" href=\"{{ url('/server/privileges', {'showall': true}) }}\">{% trans 'Show all' %}</a>
    </li>
  </ul>
</nav>
", "server/privileges/initials_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/initials_row.twig");
    }
}
