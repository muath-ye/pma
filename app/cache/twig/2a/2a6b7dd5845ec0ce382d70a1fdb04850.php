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

/* database/routines/row.twig */
class __TwigTemplate_541713b8c9f5f15ccbec2222ed3d60af extends Template
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
        echo " data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1)), "html", null, true);
        echo "\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
  </td>
  <td>
    <span class=\"drop_sql hide\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["sql_drop"]) || array_key_exists("sql_drop", $context) ? $context["sql_drop"] : (function () { throw new RuntimeError('Variable "sql_drop" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</span>
    <strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong>
  </td>
  <td>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), "html", null, true);
        echo "</td>
  <td dir=\"ltr\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 10, $this->source); })()), "returns", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
  <td>
    ";
        // line 12
        if ((isset($context["has_edit_privilege"]) || array_key_exists("has_edit_privilege", $context) ? $context["has_edit_privilege"] : (function () { throw new RuntimeError('Variable "has_edit_privilege" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "      <a class=\"ajax edit_anchor\" href=\"";
            echo $this->env->getFunction('url')->getCallable()("/database/routines", ["db" =>             // line 14
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 14, $this->source); })()), "table" =>             // line 15
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })()), "edit_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "item_type" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18)]);
            // line 19
            echo "\">
        ";
            // line 20
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
            echo "
      </a>
    ";
        } else {
            // line 23
            echo "      ";
            echo $this->env->getFunction('get_icon')->getCallable()("bd_edit", _gettext("Edit"));
            echo "
    ";
        }
        // line 25
        echo "  </td>
  <td>
    ";
        // line 27
        if (((isset($context["has_execute_privilege"]) || array_key_exists("has_execute_privilege", $context) ? $context["has_execute_privilege"] : (function () { throw new RuntimeError('Variable "has_execute_privilege" does not exist.', 27, $this->source); })()) &&  !twig_test_empty((isset($context["execute_action"]) || array_key_exists("execute_action", $context) ? $context["execute_action"] : (function () { throw new RuntimeError('Variable "execute_action" does not exist.', 27, $this->source); })())))) {
            // line 28
            echo "      ";
            if (((isset($context["execute_action"]) || array_key_exists("execute_action", $context) ? $context["execute_action"] : (function () { throw new RuntimeError('Variable "execute_action" does not exist.', 28, $this->source); })()) == "execute_routine")) {
                // line 29
                echo "        <a class=\"ajax exec_anchor\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/routines", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 29, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 29, $this->source); })())]);
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["execute_routine" => true, "item_name" => twig_get_attribute($this->env, $this->source,                 // line 31
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "item_type" => twig_get_attribute($this->env, $this->source,                 // line 32
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32)], "");
                // line 33
                echo "\">
          ";
                // line 34
                echo $this->env->getFunction('get_icon')->getCallable()("b_nextpage", _gettext("Execute"));
                echo "
        </a>
      ";
            } else {
                // line 37
                echo "        <a class=\"ajax exec_anchor\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/routines", ["db" =>                 // line 38
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 38, $this->source); })()), "table" =>                 // line 39
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 39, $this->source); })()), "execute_dialog" => true, "item_name" => twig_get_attribute($this->env, $this->source,                 // line 41
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "item_type" => twig_get_attribute($this->env, $this->source,                 // line 42
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42)]);
                // line 43
                echo "\">
          ";
                // line 44
                echo $this->env->getFunction('get_icon')->getCallable()("b_nextpage", _gettext("Execute"));
                echo "
        </a>
      ";
            }
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "      ";
            echo $this->env->getFunction('get_icon')->getCallable()("bd_nextpage", _gettext("Execute"));
            echo "
    ";
        }
        // line 50
        echo "  </td>
  <td>
    ";
        // line 52
        if ((isset($context["has_export_privilege"]) || array_key_exists("has_export_privilege", $context) ? $context["has_export_privilege"] : (function () { throw new RuntimeError('Variable "has_export_privilege" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "      <a class=\"ajax export_anchor\" href=\"";
            echo $this->env->getFunction('url')->getCallable()("/database/routines", ["db" =>             // line 54
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 54, $this->source); })()), "table" =>             // line 55
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 55, $this->source); })()), "export_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "item_type" => twig_get_attribute($this->env, $this->source,             // line 58
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58)]);
            // line 59
            echo "\">
        ";
            // line 60
            echo $this->env->getFunction('get_icon')->getCallable()("b_export", _gettext("Export"));
            echo "
      </a>
    ";
        } else {
            // line 63
            echo "      ";
            echo $this->env->getFunction('get_icon')->getCallable()("bd_export", _gettext("Export"));
            echo "
    ";
        }
        // line 65
        echo "  </td>
  <td>
    ";
        // line 67
        echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["db" =>         // line 70
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 70, $this->source); })()), "table" =>         // line 71
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 71, $this->source); })()), "sql_query" =>         // line 72
(isset($context["sql_drop"]) || array_key_exists("sql_drop", $context) ? $context["sql_drop"] : (function () { throw new RuntimeError('Variable "sql_drop" does not exist.', 72, $this->source); })()), "goto" => $this->env->getFunction('url')->getCallable()("/database/routines", ["db" =>         // line 73
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 73, $this->source); })())])], $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop")), ["class" => "ajax drop_anchor"]);
        // line 77
        echo "
  </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/routines/row.twig";
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
        return array (  185 => 77,  183 => 73,  182 => 72,  181 => 71,  180 => 70,  179 => 67,  175 => 65,  169 => 63,  163 => 60,  160 => 59,  158 => 58,  157 => 57,  156 => 55,  155 => 54,  153 => 53,  151 => 52,  147 => 50,  141 => 48,  138 => 47,  132 => 44,  129 => 43,  127 => 42,  126 => 41,  125 => 39,  124 => 38,  122 => 37,  116 => 34,  113 => 33,  111 => 32,  110 => 31,  106 => 29,  103 => 28,  101 => 27,  97 => 25,  91 => 23,  85 => 20,  82 => 19,  80 => 18,  79 => 17,  78 => 15,  77 => 14,  75 => 13,  73 => 12,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  49 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr{% if row_class is not empty %} class=\"{{ row_class }}\"{% endif %} data-filter-row=\"{{ routine.name|upper }}\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"{{ routine.name }}\">
  </td>
  <td>
    <span class=\"drop_sql hide\">{{ sql_drop }}</span>
    <strong>{{ routine.name }}</strong>
  </td>
  <td>{{ routine.type }}</td>
  <td dir=\"ltr\">{{ routine.returns }}</td>
  <td>
    {% if has_edit_privilege %}
      <a class=\"ajax edit_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'edit_item': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_edit', 'Edit'|trans) }}
      </a>
    {% else %}
      {{ get_icon('bd_edit', 'Edit'|trans) }}
    {% endif %}
  </td>
  <td>
    {% if has_execute_privilege and execute_action is not empty %}
      {% if execute_action == 'execute_routine' %}
        <a class=\"ajax exec_anchor\" href=\"{{ url('/database/routines', {'db': db, 'table': table}) }}\" data-post=\"{{ get_common({
          'execute_routine': true,
          'item_name': routine.name,
          'item_type': routine.type
        }, '') }}\">
          {{ get_icon('b_nextpage', 'Execute'|trans) }}
        </a>
      {% else %}
        <a class=\"ajax exec_anchor\" href=\"{{ url('/database/routines', {
          'db': db,
          'table': table,
          'execute_dialog': true,
          'item_name': routine.name,
          'item_type': routine.type
        }) }}\">
          {{ get_icon('b_nextpage', 'Execute'|trans) }}
        </a>
      {% endif %}
    {% else %}
      {{ get_icon('bd_nextpage', 'Execute'|trans) }}
    {% endif %}
  </td>
  <td>
    {% if has_export_privilege %}
      <a class=\"ajax export_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'export_item': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_export', 'Export'|trans) }}
      </a>
    {% else %}
      {{ get_icon('bd_export', 'Export'|trans) }}
    {% endif %}
  </td>
  <td>
    {{ link_or_button(
      url('/sql'),
      {
        'db': db,
        'table': table,
        'sql_query': sql_drop,
        'goto': url('/database/routines', {'db': db})
      },
      get_icon('b_drop', 'Drop'|trans),
      {'class': 'ajax drop_anchor'}
    ) }}
  </td>
</tr>
", "database/routines/row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/routines/row.twig");
    }
}
