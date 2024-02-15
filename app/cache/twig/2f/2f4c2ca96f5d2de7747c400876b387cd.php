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

/* sql/set_column.twig */
class __TwigTemplate_a43119c7c67fd4b0b2ee33f6da222fb1 extends Template
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
        $context["values_amount"] = twig_length_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })()));
        // line 2
        echo "<select class=\"resize-vertical\" size=\"";
        ((((isset($context["values_amount"]) || array_key_exists("values_amount", $context) ? $context["values_amount"] : (function () { throw new RuntimeError('Variable "values_amount" does not exist.', 2, $this->source); })()) < 10)) ? (print (twig_escape_filter($this->env, (isset($context["values_amount"]) || array_key_exists("values_amount", $context) ? $context["values_amount"] : (function () { throw new RuntimeError('Variable "values_amount" does not exist.', 2, $this->source); })()), "html", null, true))) : (print (10)));
        echo "\" multiple>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 4
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((twig_in_filter($context["value"], (isset($context["current_values"]) || array_key_exists("current_values", $context) ? $context["current_values"] : (function () { throw new RuntimeError('Variable "current_values" does not exist.', 4, $this->source); })()))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</select>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/set_column.twig";
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
        return array (  61 => 6,  48 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set values_amount = values|length %}
<select class=\"resize-vertical\" size=\"{{ values_amount < 10 ? values_amount : 10 }}\" multiple>
  {% for value in values %}
    <option value=\"{{ value }}\"{{ value in current_values ? ' selected' }}>{{ value }}</option>
  {% endfor %}
</select>
", "sql/set_column.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/set_column.twig");
    }
}
