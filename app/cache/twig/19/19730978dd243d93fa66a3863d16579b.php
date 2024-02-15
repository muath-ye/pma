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

/* triggers/row.twig */
class __TwigTemplate_b75a10e0321ce8d78988e44432113627 extends Template
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
        echo "<tr";
        if ( !twig_test_empty((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
  </td>
  <td>
    <span class='drop_sql hide'>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 6, $this->source); })()), "getDropSql", [], "method", false, false, false, 6), "html", null, true);
        echo "</span>
    <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong>
  </td>
  ";
        // line 9
        if (twig_test_empty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "    <td>
      <a href=\"";
            // line 11
            echo $this->env->getFunction('url')->getCallable()("/triggers", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 11, $this->source); })()), "table" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 11, $this->source); })()), "table", [], "any", false, false, false, 11), "getName", [], "method", false, false, false, 11)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 11, $this->source); })()), "table", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
    </td>
  ";
        }
        // line 14
        echo "  <td>
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 15, $this->source); })()), "timing", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "html", null, true);
        echo "
  </td>
  <td>
    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 18, $this->source); })()), "event", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "html", null, true);
        echo "
  </td>
  <td>
    ";
        // line 21
        if ((isset($context["has_edit_privilege"]) || array_key_exists("has_edit_privilege", $context) ? $context["has_edit_privilege"] : (function () { throw new RuntimeError('Variable "has_edit_privilege" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "      <a class=\"ajax edit_anchor\" href=\"";
            echo $this->env->getFunction('url')->getCallable()("/triggers", ["db" =>             // line 23
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 23, $this->source); })()), "table" =>             // line 24
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 24, $this->source); })()), "edit_item" => true, "item_name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "getName", [], "method", false, false, false, 26)]);
            // line 27
            echo "\">
        ";
            // line 28
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
            echo "
      </a>
    ";
        } else {
            // line 31
            echo "      ";
            echo $this->env->getFunction('get_icon')->getCallable()("bd_edit", _gettext("Edit"));
            echo "
    ";
        }
        // line 33
        echo "  </td>
  <td>
    <a class=\"ajax export_anchor\" href=\"";
        // line 35
        echo $this->env->getFunction('url')->getCallable()("/triggers", ["db" =>         // line 36
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 36, $this->source); })()), "table" =>         // line 37
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 37, $this->source); })()), "export_item" => true, "item_name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "getName", [], "method", false, false, false, 39)]);
        // line 40
        echo "\">
      ";
        // line 41
        echo $this->env->getFunction('get_icon')->getCallable()("b_export", _gettext("Export"));
        echo "
    </a>
  </td>
  <td>
    ";
        // line 45
        if ((isset($context["has_drop_privilege"]) || array_key_exists("has_drop_privilege", $context) ? $context["has_drop_privilege"] : (function () { throw new RuntimeError('Variable "has_drop_privilege" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "      ";
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["db" =>             // line 49
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 49, $this->source); })()), "table" =>             // line 50
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 50, $this->source); })()), "sql_query" => twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 51, $this->source); })()), "getDropSql", [], "method", false, false, false, 51), "goto" => $this->env->getFunction('url')->getCallable()("/triggers", ["db" =>             // line 52
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 52, $this->source); })())])], $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop")), ["class" => "ajax drop_anchor"]);
            // line 56
            echo "
    ";
        } else {
            // line 58
            echo "      ";
            echo $this->env->getFunction('get_icon')->getCallable()("bd_drop", _gettext("Drop"));
            echo "
    ";
        }
        // line 60
        echo "  </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "triggers/row.twig";
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
        return array (  151 => 60,  145 => 58,  141 => 56,  139 => 52,  138 => 51,  137 => 50,  136 => 49,  134 => 46,  132 => 45,  125 => 41,  122 => 40,  120 => 39,  119 => 37,  118 => 36,  117 => 35,  113 => 33,  107 => 31,  101 => 28,  98 => 27,  96 => 26,  95 => 24,  94 => 23,  92 => 22,  90 => 21,  84 => 18,  78 => 15,  75 => 14,  67 => 11,  64 => 10,  62 => 9,  57 => 7,  53 => 6,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr{% if row_class is not empty %} class=\"{{ row_class }}\"{% endif %}>
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"{{ trigger.name }}\">
  </td>
  <td>
    <span class='drop_sql hide'>{{ trigger.getDropSql() }}</span>
    <strong>{{ trigger.name }}</strong>
  </td>
  {% if table is empty %}
    <td>
      <a href=\"{{ url('/triggers', {'db': db, 'table': trigger.table.getName()}) }}\">{{ trigger.table }}</a>
    </td>
  {% endif %}
  <td>
    {{ trigger.timing.value }}
  </td>
  <td>
    {{ trigger.event.value }}
  </td>
  <td>
    {% if has_edit_privilege %}
      <a class=\"ajax edit_anchor\" href=\"{{ url('/triggers', {
        'db': db,
        'table': table,
        'edit_item': true,
        'item_name': trigger.name.getName()
      }) }}\">
        {{ get_icon('b_edit', 'Edit'|trans) }}
      </a>
    {% else %}
      {{ get_icon('bd_edit', 'Edit'|trans) }}
    {% endif %}
  </td>
  <td>
    <a class=\"ajax export_anchor\" href=\"{{ url('/triggers', {
      'db': db,
      'table': table,
      'export_item': true,
      'item_name': trigger.name.getName()
    }) }}\">
      {{ get_icon('b_export', 'Export'|trans) }}
    </a>
  </td>
  <td>
    {% if has_drop_privilege %}
      {{ link_or_button(
        url('/sql'),
        {
          'db': db,
          'table': table,
          'sql_query': trigger.getDropSql(),
          'goto': url('/triggers', {'db': db})
        },
        get_icon('b_drop', 'Drop'|trans),
        {'class': 'ajax drop_anchor'}
      ) }}
    {% else %}
      {{ get_icon('bd_drop', 'Drop'|trans) }}
    {% endif %}
  </td>
</tr>
", "triggers/row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/triggers/row.twig");
    }
}
