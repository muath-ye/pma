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

/* transformation_overview.twig */
class __TwigTemplate_102da15c747ea77f84cd010ed49aef11 extends Template
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
        echo "<h2>";
echo _gettext("Available media types");
        echo "</h2>

<ul>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mime_types"]) || array_key_exists("mime_types", $context) ? $context["mime_types"] : (function () { throw new RuntimeError('Variable "mime_types" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mime_type"]) {
            // line 5
            echo "    <li>
      ";
            // line 6
            echo ((twig_get_attribute($this->env, $this->source, $context["mime_type"], "is_empty", [], "any", false, false, false, 6)) ? ("<em>") : (""));
            echo "
      ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mime_type"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
      ";
            // line 8
            echo ((twig_get_attribute($this->env, $this->source, $context["mime_type"], "is_empty", [], "any", false, false, false, 8)) ? ("</em>") : (""));
            echo "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mime_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<h2 id=\"transformation\">";
        // line 13
echo _gettext("Available browser display transformations");
        echo "</h2>

<table class=\"table table-striped align-middle\">
  <thead>
    <tr>
      <th>";
        // line 18
echo _gettext("Browser display transformation");
        echo "</th>
      <th>";
        // line 19
echo _pgettext("for media type transformation", "Description");
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["transformations"]) || array_key_exists("transformations", $context) ? $context["transformations"] : (function () { throw new RuntimeError('Variable "transformations" does not exist.', 23, $this->source); })()), "transformation", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["transformation"]) {
            // line 24
            echo "      <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transformation"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transformation"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transformation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </tbody>
</table>

<h2 id=\"input_transformation\">";
        // line 32
echo _gettext("Available input transformations");
        echo "</h2>

<table class=\"table table-striped align-middle\">
  <thead>
    <tr>
      <th>";
        // line 37
echo _gettext("Input transformation");
        echo "</th>
      <th>";
        // line 38
echo _pgettext("for media type transformation", "Description");
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["transformations"]) || array_key_exists("transformations", $context) ? $context["transformations"] : (function () { throw new RuntimeError('Variable "transformations" does not exist.', 42, $this->source); })()), "input_transformation", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["transformation"]) {
            // line 43
            echo "      <tr>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transformation"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transformation"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transformation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "transformation_overview.twig";
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
        return array (  155 => 48,  146 => 45,  142 => 44,  139 => 43,  135 => 42,  128 => 38,  124 => 37,  116 => 32,  111 => 29,  102 => 26,  98 => 25,  95 => 24,  91 => 23,  84 => 19,  80 => 18,  72 => 13,  68 => 11,  59 => 8,  55 => 7,  51 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{% trans 'Available media types' %}</h2>

<ul>
  {% for mime_type in mime_types %}
    <li>
      {{ mime_type.is_empty ? '<em>' }}
      {{ mime_type.name }}
      {{ mime_type.is_empty ? '</em>' }}
    </li>
  {% endfor %}
</ul>

<h2 id=\"transformation\">{% trans 'Available browser display transformations' %}</h2>

<table class=\"table table-striped align-middle\">
  <thead>
    <tr>
      <th>{% trans 'Browser display transformation' %}</th>
      <th>{% trans %}Description{% context %}for media type transformation{% endtrans %}</th>
    </tr>
  </thead>
  <tbody>
    {% for transformation in transformations.transformation %}
      <tr>
        <td>{{ transformation.name }}</td>
        <td>{{ transformation.description }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>

<h2 id=\"input_transformation\">{% trans 'Available input transformations' %}</h2>

<table class=\"table table-striped align-middle\">
  <thead>
    <tr>
      <th>{% trans 'Input transformation' %}</th>
      <th>{% trans %}Description{% context %}for media type transformation{% endtrans %}</th>
    </tr>
  </thead>
  <tbody>
    {% for transformation in transformations.input_transformation %}
      <tr>
        <td>{{ transformation.name }}</td>
        <td>{{ transformation.description }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "transformation_overview.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/transformation_overview.twig");
    }
}
