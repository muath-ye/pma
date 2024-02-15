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

/* display/results/table_headers_for_columns.twig */
class __TwigTemplate_3a60e47f6eba7c5cb7df8226734b90a1 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 2
            echo "  <th class=\"draggable position-sticky bg-body";
            echo ((twig_get_attribute($this->env, $this->source, $context["column"], "is_column_numeric", [], "any", false, false, false, 2)) ? (" text-end") : (""));
            echo ((twig_get_attribute($this->env, $this->source, $context["column"], "is_column_hidden", [], "any", false, false, false, 2)) ? (" hide") : (""));
            // line 3
            echo (((isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 3, $this->source); })())) ? (" column_heading") : (""));
            echo ((((isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 3, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["column"], "is_browse_marker_enabled", [], "any", false, false, false, 3))) ? (" marker") : (""));
            echo ((((isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 3, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["column"], "is_browse_pointer_enabled", [], "any", false, false, false, 3))) ? (" pointer") : (""));
            // line 4
            echo ((( !(isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 4, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["column"], "has_condition", [], "any", false, false, false, 4))) ? (" condition") : (""));
            echo "\" data-column=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "column_name", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
    ";
            // line 5
            if ((isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 5, $this->source); })())) {
                // line 6
                echo "      ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "order_link", [], "any", false, false, false, 6);
                echo "
    ";
            } else {
                // line 8
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "column_name", [], "any", false, false, false, 8), "html", null, true);
                echo "
    ";
            }
            // line 10
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "comments", [], "any", false, false, false, 10);
            echo "
  </th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/table_headers_for_columns.twig";
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
        return array (  69 => 10,  63 => 8,  57 => 6,  55 => 5,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for column in columns %}
  <th class=\"draggable position-sticky bg-body{{ column.is_column_numeric ? ' text-end' }}{{ column.is_column_hidden ? ' hide' -}}
    {{- is_sortable ? ' column_heading' }}{{ is_sortable and column.is_browse_marker_enabled ? ' marker' }}{{ is_sortable and column.is_browse_pointer_enabled ? ' pointer' -}}
    {{- not is_sortable and column.has_condition ? ' condition' }}\" data-column=\"{{ column.column_name }}\">
    {% if is_sortable %}
      {{ column.order_link|raw }}
    {% else %}
      {{ column.column_name }}
    {% endif %}
    {{ column.comments|raw }}
  </th>
{% endfor %}
", "display/results/table_headers_for_columns.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/table_headers_for_columns.twig");
    }
}
