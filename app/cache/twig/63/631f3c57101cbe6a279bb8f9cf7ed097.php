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

/* triggers/list.twig */
class __TwigTemplate_bda2fade0454d891a0d26b6128e78f49 extends Template
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
        echo "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("b_triggers", _gettext("Triggers"));
        echo "
    ";
        // line 4
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("TRIGGERS");
        echo "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ( !twig_test_empty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
            // line 14
echo _gettext("Check all");
            echo "</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"";
            // line 17
echo _gettext("Export");
            echo "\">
          ";
            // line 18
            echo $this->env->getFunction('get_icon')->getCallable()("b_export", _gettext("Export"));
            echo "
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"";
            // line 20
echo _gettext("Drop");
            echo "\">
          ";
            // line 21
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
            echo "
        </button>
      </div>
    </div>";
        }
        // line 26
        echo "
    <div";
        // line 27
        echo (( !twig_test_empty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 27, $this->source); })()))) ? (" class=\"ms-auto\"") : (""));
        echo ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 28
        echo (( !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 28, $this->source); })())) ? (" disabled") : (""));
        echo "\" href=\"";
        echo $this->env->getFunction('url')->getCallable()("/triggers", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 28, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 28, $this->source); })()), "add_item" => true]);
        echo "\" role=\"button\"";
        echo (( !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 28, $this->source); })())) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        echo ">
        ";
        // line 29
        echo $this->env->getFunction('get_icon')->getCallable()("b_trigger_add", _gettext("Create new trigger"));
        echo "
      </a>
    </div>
  </div>

  ";
        // line 34
        echo (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 34, $this->source); })());
        // line 36
        echo "<form id=\"rteListForm\" class=\"ajax\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/triggers");
        echo "\">
    ";
        // line 37
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 37, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 37, $this->source); })()));
        echo "

    <div id=\"nothing2display\"";
        // line 39
        echo (( !twig_test_empty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 39, $this->source); })()))) ? (" class=\"hide\"") : (""));
        echo ">
      ";
        // line 40
        echo $this->env->getFilter('notice')->getCallable()(_gettext("There are no triggers to display."));
        echo "
    </div>

    <table id=\"triggersTable\" class=\"table table-striped table-hover";
        // line 43
        echo ((twig_test_empty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 43, $this->source); })()))) ? (" hide") : (""));
        echo " w-auto data\">
      <thead>
        <tr>
          <th></th>
          <th>";
        // line 47
echo _gettext("Name");
        echo "</th>
          ";
        // line 48
        if (twig_test_empty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "            <th>";
echo _gettext("Table");
            echo "</th>
          ";
        }
        // line 51
        echo "          <th>";
echo _gettext("Time");
        echo "</th>
          <th>";
        // line 52
echo _gettext("Event");
        echo "</th>
          <th colspan=\"3\"></th>
        </tr>
      </thead>
      <tbody>
        <tr class=\"hide\">";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((twig_test_empty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 57, $this->source); })()))) ? (7) : (6))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</tr>";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trigger"]) {
            // line 60
            echo twig_include($this->env, $context, "triggers/row.twig", ["db" =>             // line 63
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 63, $this->source); })()), "table" =>             // line 64
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 64, $this->source); })()), "trigger" =>             // line 65
$context["trigger"], "has_drop_privilege" =>             // line 66
(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 66, $this->source); })()), "has_edit_privilege" =>             // line 67
(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 67, $this->source); })()), "row_class" => ((            // line 68
(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 68, $this->source); })())) ? ("ajaxInsert hide") : (""))], false);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trigger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "      </tbody>
    </table>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "triggers/list.twig";
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
        return array (  189 => 73,  183 => 68,  182 => 67,  181 => 66,  180 => 65,  179 => 64,  178 => 63,  177 => 60,  173 => 59,  163 => 57,  155 => 52,  150 => 51,  144 => 49,  142 => 48,  138 => 47,  131 => 43,  125 => 40,  121 => 39,  116 => 37,  111 => 36,  109 => 34,  101 => 29,  93 => 28,  89 => 27,  86 => 26,  79 => 21,  75 => 20,  70 => 18,  66 => 17,  60 => 14,  53 => 9,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid my-3\">
  <h2>
    {{ get_icon('b_triggers', 'Triggers'|trans) }}
    {{ show_mysql_docu('TRIGGERS') }}
  </h2>

  <div class=\"d-flex flex-wrap my-3\">
    {%- if triggers is not empty %}
    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">{% trans 'Check all' %}</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"{% trans 'Export' %}\">
          {{ get_icon('b_export', 'Export'|trans) }}
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"{% trans 'Drop' %}\">
          {{ get_icon('b_drop', 'Drop'|trans) }}
        </button>
      </div>
    </div>
    {%- endif %}

    <div{{ triggers is not empty ? ' class=\"ms-auto\"' }}>
      <a class=\"ajax add_anchor btn btn-primary{{ not has_privilege ? ' disabled' }}\" href=\"{{ url('/triggers', {'db': db, 'table': table, 'add_item': true}) }}\" role=\"button\"{{ not has_privilege ? ' tabindex=\"-1\" aria-disabled=\"true\"' }}>
        {{ get_icon('b_trigger_add', 'Create new trigger'|trans) }}
      </a>
    </div>
  </div>

  {{ error_message|raw -}}

  <form id=\"rteListForm\" class=\"ajax\" action=\"{{ url('/triggers') }}\">
    {{ get_hidden_inputs(db, table) }}

    <div id=\"nothing2display\"{{ triggers is not empty ? ' class=\"hide\"' }}>
      {{ 'There are no triggers to display.'|trans|notice }}
    </div>

    <table id=\"triggersTable\" class=\"table table-striped table-hover{{ triggers is empty ? ' hide' }} w-auto data\">
      <thead>
        <tr>
          <th></th>
          <th>{% trans 'Name' %}</th>
          {% if table is empty %}
            <th>{% trans 'Table' %}</th>
          {% endif %}
          <th>{% trans 'Time' %}</th>
          <th>{% trans 'Event' %}</th>
          <th colspan=\"3\"></th>
        </tr>
      </thead>
      <tbody>
        <tr class=\"hide\">{% for i in 0..(table is empty ? 7 : 6) %}<td></td>{% endfor %}</tr>

        {%- for trigger in triggers %}
          {{- include(
            'triggers/row.twig',
            {
              'db': db,
              'table': table,
              'trigger': trigger,
              'has_drop_privilege': has_privilege,
              'has_edit_privilege': has_privilege,
              'row_class': is_ajax ? 'ajaxInsert hide' : '',
            },
            with_context = false
          ) }}
        {%- endfor %}
      </tbody>
    </table>
  </form>
</div>
", "triggers/list.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/triggers/list.twig");
    }
}
