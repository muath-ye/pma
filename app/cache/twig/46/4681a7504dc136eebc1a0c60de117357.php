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

/* database/routines/index.twig */
class __TwigTemplate_7ec5dbf5e83ab1dbff1b1009b0742677 extends Template
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
        echo $this->env->getFunction('get_icon')->getCallable()("b_routines", _gettext("Routines"));
        echo "
    ";
        // line 4
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("STORED_ROUTINES");
        echo "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ((isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 8, $this->source); })())) {
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
    </div>

    <div class=\"ms-auto\">
      <div class=\"input-group\">
        <span class=\"input-group-text\">";
            // line 28
            echo $this->env->getFunction('get_image')->getCallable()("b_search", _gettext("Search"));
            echo "</span>
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
            // line 29
echo _gettext("Search");
            echo "\" aria-label=\"";
echo _gettext("Search");
            echo "\">
      </div>
    </div>";
        }
        // line 33
        echo "
    <div";
        // line 34
        echo (((isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 34, $this->source); })())) ? (" class=\"ms-2\"") : (""));
        echo ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 35
        echo (( !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 35, $this->source); })())) ? (" disabled") : (""));
        echo "\" href=\"";
        echo $this->env->getFunction('url')->getCallable()("/database/routines", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 35, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 35, $this->source); })()), "add_item" => true]);
        echo "\" role=\"button\"";
        echo (( !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 35, $this->source); })())) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        echo ">
        ";
        // line 36
        echo $this->env->getFunction('get_icon')->getCallable()("b_routine_add", _gettext("Create new routine"));
        echo "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"";
        // line 41
        echo $this->env->getFunction('url')->getCallable()("/database/routines");
        echo "\">
    ";
        // line 42
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 42, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 42, $this->source); })()));
        echo "

    <div id=\"nothing2display\"";
        // line 44
        echo (((isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 44, $this->source); })())) ? (" class=\"hide\"") : (""));
        echo ">
      ";
        // line 45
        echo $this->env->getFilter('notice')->getCallable()(_gettext("There are no routines to display."));
        echo "
    </div>

    <table id=\"routinesTable\" class=\"table table-striped table-hover";
        // line 48
        echo (( !(isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 48, $this->source); })())) ? (" hide") : (""));
        echo " data w-auto\">
      <thead>
      <tr>
        <th></th>
        <th>";
        // line 52
echo _gettext("Name");
        echo "</th>
        <th>";
        // line 53
echo _gettext("Type");
        echo "</th>
        <th>";
        // line 54
echo _gettext("Returns");
        echo "</th>
        <th colspan=\"4\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</tr>";
        // line 61
        echo (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 61, $this->source); })());
        echo "
      </tbody>
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
        return "database/routines/index.twig";
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
        return array (  176 => 61,  166 => 59,  158 => 54,  154 => 53,  150 => 52,  143 => 48,  137 => 45,  133 => 44,  128 => 42,  124 => 41,  116 => 36,  108 => 35,  104 => 34,  101 => 33,  93 => 29,  89 => 28,  79 => 21,  75 => 20,  70 => 18,  66 => 17,  60 => 14,  53 => 9,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid my-3\">
  <h2>
    {{ get_icon('b_routines', 'Routines'|trans) }}
    {{ show_mysql_docu('STORED_ROUTINES') }}
  </h2>

  <div class=\"d-flex flex-wrap my-3\">
    {%- if has_any_routines %}
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

    <div class=\"ms-auto\">
      <div class=\"input-group\">
        <span class=\"input-group-text\">{{ get_image('b_search', 'Search'|trans) }}</span>
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"{% trans 'Search' %}\" aria-label=\"{% trans 'Search' %}\">
      </div>
    </div>
    {%- endif %}

    <div{{ has_any_routines ? ' class=\"ms-2\"' }}>
      <a class=\"ajax add_anchor btn btn-primary{{ not has_privilege ? ' disabled' }}\" href=\"{{ url('/database/routines', {'db': db, 'table': table, 'add_item': true}) }}\" role=\"button\"{{ not has_privilege ? ' tabindex=\"-1\" aria-disabled=\"true\"' }}>
        {{ get_icon('b_routine_add', 'Create new routine'|trans) }}
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"{{ url('/database/routines') }}\">
    {{ get_hidden_inputs(db, table) }}

    <div id=\"nothing2display\"{{ has_any_routines ? ' class=\"hide\"' }}>
      {{ 'There are no routines to display.'|trans|notice }}
    </div>

    <table id=\"routinesTable\" class=\"table table-striped table-hover{{ not has_any_routines ? ' hide' }} data w-auto\">
      <thead>
      <tr>
        <th></th>
        <th>{% trans 'Name' %}</th>
        <th>{% trans 'Type' %}</th>
        <th>{% trans 'Returns' %}</th>
        <th colspan=\"4\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">{% for i in 0..7 %}<td></td>{% endfor %}</tr>

      {{- rows|raw }}
      </tbody>
    </table>
  </form>
</div>
", "database/routines/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/routines/index.twig");
    }
}
