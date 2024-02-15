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

/* database/events/index.twig */
class __TwigTemplate_6507143e249a4e83d864a815d2ceb065 extends Template
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
        echo $this->env->getFunction('get_icon')->getCallable()("b_events", _gettext("Events"));
        echo "
    ";
        // line 4
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("EVENTS");
        echo "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })()))) {
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
        echo (( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 27, $this->source); })()))) ? (" class=\"ms-auto\"") : (""));
        echo ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 28
        echo (( !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 28, $this->source); })())) ? (" disabled") : (""));
        echo "\" href=\"";
        echo $this->env->getFunction('url')->getCallable()("/database/events", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 28, $this->source); })()), "add_item" => true]);
        echo "\" role=\"button\"";
        echo (( !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 28, $this->source); })())) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        echo ">
        ";
        // line 29
        echo $this->env->getFunction('get_icon')->getCallable()("b_event_add", _gettext("Create new event"));
        echo "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"";
        // line 34
        echo $this->env->getFunction('url')->getCallable()("/database/events");
        echo "\">
    ";
        // line 35
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 35, $this->source); })()));
        echo "

    <div id=\"nothing2display\"";
        // line 37
        echo (( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 37, $this->source); })()))) ? (" class=\"hide\"") : (""));
        echo ">
      ";
        // line 38
        echo $this->env->getFilter('notice')->getCallable()(_gettext("There are no events to display."));
        echo "
    </div>

    <table id=\"eventsTable\" class=\"table table-striped table-hover";
        // line 41
        echo ((twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 41, $this->source); })()))) ? (" hide") : (""));
        echo " w-auto data\">
      <thead>
      <tr>
        <th></th>
        <th>";
        // line 45
echo _gettext("Name");
        echo "</th>
        <th>";
        // line 46
echo _gettext("Status");
        echo "</th>
        <th>";
        // line 47
echo _gettext("Type");
        echo "</th>
        <th colspan=\"3\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</tr>

      ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            echo "        <tr";
            echo (((isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 55, $this->source); })())) ? (" class=\"ajaxInsert hide\"") : (""));
            echo ">
          <td>
            <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
          </td>
          <td>
            <span class=\"drop_sql hide\">";
            // line 60
            echo twig_escape_filter($this->env, twig_sprintf("DROP EVENT IF EXISTS %s", $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 60))), "html", null, true);
            echo "</span>
            <strong>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</strong>
          </td>
          <td>
            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 64), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 67), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 70
            if ((isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 70, $this->source); })())) {
                // line 71
                echo "              <a class=\"ajax edit_anchor\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>                 // line 72
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 72, $this->source); })()), "edit_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,                 // line 74
$context["event"], "name", [], "any", false, false, false, 74)]);
                // line 75
                echo "\">
                ";
                // line 76
                echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
                echo "
              </a>
            ";
            } else {
                // line 79
                echo "              ";
                echo $this->env->getFunction('get_icon')->getCallable()("bd_edit", _gettext("Edit"));
                echo "
            ";
            }
            // line 81
            echo "          </td>
          <td>
            <a class=\"ajax export_anchor\" href=\"";
            // line 83
            echo $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>             // line 84
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 84, $this->source); })()), "export_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,             // line 86
$context["event"], "name", [], "any", false, false, false, 86)]);
            // line 87
            echo "\">
              ";
            // line 88
            echo $this->env->getFunction('get_icon')->getCallable()("b_export", _gettext("Export"));
            echo "
            </a>
          </td>
          <td>
            ";
            // line 92
            if ((isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 92, $this->source); })())) {
                // line 93
                echo "              ";
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["db" =>                 // line 96
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 96, $this->source); })()), "sql_query" => twig_sprintf("DROP EVENT IF EXISTS %s", $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 97
$context["event"], "name", [], "any", false, false, false, 97))), "goto" => $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>                 // line 98
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 98, $this->source); })())])], $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop")), ["class" => "ajax drop_anchor"]);
                // line 102
                echo "
            ";
            } else {
                // line 104
                echo "              ";
                echo $this->env->getFunction('get_icon')->getCallable()("bd_drop", _gettext("Drop"));
                echo "
            ";
            }
            // line 106
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "      </tbody>
    </table>
  </form>

  <div class=\"card mt-3\">
    <div class=\"card-header\">";
        // line 114
echo _gettext("Event scheduler status");
        echo "</div>
    <div class=\"card-body\">
      <div class=\"wrap\">
        <div class=\"wrapper toggleAjax hide\">
          <div class=\"toggleButton\">
            <div title=\"";
        // line 119
echo _gettext("Click to toggle");
        echo "\" class=\"toggle-container ";
        echo (((isset($context["scheduler_state"]) || array_key_exists("scheduler_state", $context) ? $context["scheduler_state"] : (function () { throw new RuntimeError('Variable "scheduler_state" does not exist.', 119, $this->source); })())) ? ("on") : ("off"));
        echo "\">
              <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("toggle-" . (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 120, $this->source); })())) . ".png")), "html", null, true);
        echo "\">
              <table>
                <tbody>
                <tr>
                  <td class=\"toggleOn\">
                  <span class=\"hide\">";
        // line 126
        echo $this->env->getFunction('url')->getCallable()("/sql", ["db" =>         // line 127
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 127, $this->source); })()), "goto" => $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>         // line 128
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 128, $this->source); })())]), "sql_query" => "SET GLOBAL event_scheduler=\"ON\""]);
        // line 131
        echo "</span>
                    <div>";
        // line 132
echo _gettext("ON");
        echo "</div>
                  </td>
                  <td><div>&nbsp;</div></td>
                  <td class=\"toggleOff\">
                  <span class=\"hide\">";
        // line 137
        echo $this->env->getFunction('url')->getCallable()("/sql", ["db" =>         // line 138
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 138, $this->source); })()), "goto" => $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>         // line 139
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 139, $this->source); })())]), "sql_query" => "SET GLOBAL event_scheduler=\"OFF\""]);
        // line 142
        echo "</span>
                    <div>";
        // line 143
echo _gettext("OFF");
        echo "</div>
                  </td>
                </tr>
                </tbody>
              </table>
              <span class=\"hide callback\">Functions.slidingMessage(data.sql_query);</span>
              <span class=\"hide text_direction\">";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 149, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/events/index.twig";
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
        return array (  326 => 149,  317 => 143,  314 => 142,  312 => 139,  311 => 138,  310 => 137,  303 => 132,  300 => 131,  298 => 128,  297 => 127,  296 => 126,  288 => 120,  282 => 119,  274 => 114,  267 => 109,  259 => 106,  253 => 104,  249 => 102,  247 => 98,  246 => 97,  245 => 96,  243 => 93,  241 => 92,  234 => 88,  231 => 87,  229 => 86,  228 => 84,  227 => 83,  223 => 81,  217 => 79,  211 => 76,  208 => 75,  206 => 74,  205 => 72,  203 => 71,  201 => 70,  195 => 67,  189 => 64,  183 => 61,  179 => 60,  173 => 57,  167 => 55,  163 => 54,  151 => 52,  143 => 47,  139 => 46,  135 => 45,  128 => 41,  122 => 38,  118 => 37,  113 => 35,  109 => 34,  101 => 29,  93 => 28,  89 => 27,  86 => 26,  79 => 21,  75 => 20,  70 => 18,  66 => 17,  60 => 14,  53 => 9,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid my-3\">
  <h2>
    {{ get_icon('b_events', 'Events'|trans) }}
    {{ show_mysql_docu('EVENTS') }}
  </h2>

  <div class=\"d-flex flex-wrap my-3\">
    {%- if items is not empty %}
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

    <div{{ items is not empty ? ' class=\"ms-auto\"' }}>
      <a class=\"ajax add_anchor btn btn-primary{{ not has_privilege ? ' disabled' }}\" href=\"{{ url('/database/events', {'db': db, 'add_item': true}) }}\" role=\"button\"{{ not has_privilege ? ' tabindex=\"-1\" aria-disabled=\"true\"' }}>
        {{ get_icon('b_event_add', 'Create new event'|trans) }}
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"{{ url('/database/events') }}\">
    {{ get_hidden_inputs(db) }}

    <div id=\"nothing2display\"{{ items is not empty ? ' class=\"hide\"' }}>
      {{ 'There are no events to display.'|trans|notice }}
    </div>

    <table id=\"eventsTable\" class=\"table table-striped table-hover{{ items is empty ? ' hide' }} w-auto data\">
      <thead>
      <tr>
        <th></th>
        <th>{% trans 'Name' %}</th>
        <th>{% trans 'Status' %}</th>
        <th>{% trans 'Type' %}</th>
        <th colspan=\"3\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">{% for i in 0..6 %}<td></td>{% endfor %}</tr>

      {% for event in items %}
        <tr{{ is_ajax ? ' class=\"ajaxInsert hide\"' }}>
          <td>
            <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"{{ event.name }}\">
          </td>
          <td>
            <span class=\"drop_sql hide\">{{ 'DROP EVENT IF EXISTS %s'|format(backquote(event.name)) }}</span>
            <strong>{{ event.name }}</strong>
          </td>
          <td>
            {{ event.status }}
          </td>
          <td>
            {{ event.type }}
          </td>
          <td>
            {% if has_privilege %}
              <a class=\"ajax edit_anchor\" href=\"{{ url('/database/events', {
                'db': db,
                'edit_item': true,
                'item_name': event.name
              }) }}\">
                {{ get_icon('b_edit', 'Edit'|trans) }}
              </a>
            {% else %}
              {{ get_icon('bd_edit', 'Edit'|trans) }}
            {% endif %}
          </td>
          <td>
            <a class=\"ajax export_anchor\" href=\"{{ url('/database/events', {
              'db': db,
              'export_item': true,
              'item_name': event.name
            }) }}\">
              {{ get_icon('b_export', 'Export'|trans) }}
            </a>
          </td>
          <td>
            {% if has_privilege %}
              {{ link_or_button(
                url('/sql'),
                {
                  'db': db,
                  'sql_query': 'DROP EVENT IF EXISTS %s'|format(backquote(event.name)),
                  'goto': url('/database/events', {'db': db})
                },
                get_icon('b_drop', 'Drop'|trans),
                {'class': 'ajax drop_anchor'}
              ) }}
            {% else %}
              {{ get_icon('bd_drop', 'Drop'|trans) }}
            {% endif %}
          </td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  </form>

  <div class=\"card mt-3\">
    <div class=\"card-header\">{% trans 'Event scheduler status' %}</div>
    <div class=\"card-body\">
      <div class=\"wrap\">
        <div class=\"wrapper toggleAjax hide\">
          <div class=\"toggleButton\">
            <div title=\"{% trans 'Click to toggle' %}\" class=\"toggle-container {{ scheduler_state ? 'on' : 'off' }}\">
              <img src=\"{{ image('toggle-' ~ text_dir ~ '.png') }}\">
              <table>
                <tbody>
                <tr>
                  <td class=\"toggleOn\">
                  <span class=\"hide\">
                    {{- url('/sql', {
                      'db': db,
                      'goto': url('/database/events', {'db': db}),
                      'sql_query': 'SET GLOBAL event_scheduler=\"ON\"',
                    }) -}}
                  </span>
                    <div>{% trans 'ON' %}</div>
                  </td>
                  <td><div>&nbsp;</div></td>
                  <td class=\"toggleOff\">
                  <span class=\"hide\">
                    {{- url('/sql', {
                      'db': db,
                      'goto': url('/database/events', {'db': db}),
                      'sql_query': 'SET GLOBAL event_scheduler=\"OFF\"',
                    }) -}}
                  </span>
                    <div>{% trans 'OFF' %}</div>
                  </td>
                </tr>
                </tbody>
              </table>
              <span class=\"hide callback\">Functions.slidingMessage(data.sql_query);</span>
              <span class=\"hide text_direction\">{{ text_dir }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "database/events/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/events/index.twig");
    }
}
