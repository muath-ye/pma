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

/* server/status/monitor/index.twig */
class __TwigTemplate_97722f96a55ccdc6f0936dc8a083a0bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "monitor";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/monitor/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <h2 class=\"mb-3\">";
        echo twig_escape_filter($this->env, _gettext("System monitor"), "html", null, true);
        echo "</h2>

  <div class=\"mb-3 d-print-none\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"monitorPauseResumeButton\">";
        // line 7
        echo $this->env->getFunction('get_icon')->getCallable()("play", _gettext("Start monitor"));
        echo "</button>
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"collapse\" data-bs-target=\"#monitorSettingsContent\" aria-expanded=\"false\" aria-controls=\"monitorSettingsContent\">";
        // line 8
        echo $this->env->getFunction('get_icon')->getCallable()("s_cog", _gettext("Settings"));
        echo "</button>
    <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorInstructionsButton\">";
        // line 9
        echo $this->env->getFunction('get_icon')->getCallable()("b_help", _gettext("Instructions/Setup"));
        echo "</button>
  </div>

  <div class=\"collapse\" id=\"monitorSettingsContent\">
    <div class=\"card mb-3 d-print-none\">
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorAddNewChartButton\">";
        // line 16
        echo $this->env->getFunction('get_icon')->getCallable()("b_chart", _gettext("Add chart"));
        echo "</button>
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorRearrangeChartButton\">";
        // line 17
        echo $this->env->getFunction('get_icon')->getCallable()("b_tblops", _gettext("Enable charts dragging"));
        echo "</button>
          <button type=\"button\" class=\"btn btn-primary d-none\" id=\"monitorDoneRearrangeChartButton\">";
        // line 18
        echo $this->env->getFunction('get_icon')->getCallable()("s_okay", _gettext("Done dragging (rearranging) charts"));
        echo "</button>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartRefreshRateSelect\">";
        // line 23
        echo twig_escape_filter($this->env, _gettext("Refresh rate"), "html", null, true);
        echo "</label>
            <select class=\"form-select\" id=\"monitorChartRefreshRateSelect\" name=\"monitorChartRefreshRate\">
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200]);
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 26
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["rate"], "html", null, true);
            echo "\"";
            echo ((($context["rate"] == 5)) ? (" selected") : (""));
            echo ">";
            // line 27
            if (($context["rate"] < 60)) {
                // line 28
                if (($context["rate"] == 1)) {
                    // line 29
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d second"), $context["rate"]), "html", null, true);
                } else {
                    // line 31
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d seconds"), $context["rate"]), "html", null, true);
                }
            } else {
                // line 34
                if ((($context["rate"] / 60) == 1)) {
                    // line 35
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d minute"), ($context["rate"] / 60)), "html", null, true);
                } else {
                    // line 37
                    echo twig_escape_filter($this->env, twig_sprintf(_gettext("%d minutes"), ($context["rate"] / 60)), "html", null, true);
                }
            }
            // line 40
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </select>
          </div>

          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartColumnsSelect\">";
        // line 46
        echo twig_escape_filter($this->env, _gettext("Chart columns"), "html", null, true);
        echo "</label>
            <select class=\"form-select\" id=\"monitorChartColumnsSelect\" name=\"monitorChartColumns\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["number_of_columns"]) {
            // line 49
            echo "                <option>";
            echo twig_escape_filter($this->env, $context["number_of_columns"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number_of_columns'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </select>
          </div>
        </div>

        <div>
          <p class=\"card-text\">
            <strong>";
        // line 57
echo _gettext("Chart arrangement");
        echo "</strong><br>
            <span class=\"text-body-secondary\">";
        // line 58
        echo twig_escape_filter($this->env, _gettext("The arrangement of the charts is stored to the browsers local storage. You may want to export it if you have a complicated set up."), "html", null, true);
        echo "</span>
          </p>
          <div>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorImportConfigButton\">";
        // line 61
        echo twig_escape_filter($this->env, _gettext("Import"), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorExportConfigButton\">";
        // line 62
        echo twig_escape_filter($this->env, _gettext("Export"), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorResetConfigButton\">";
        // line 63
        echo twig_escape_filter($this->env, _gettext("Reset to default"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id=\"monitorInstructionsDialog\" title=\"";
        // line 70
echo _gettext("Monitor Instructions");
        echo "\" class=\"hide\">
  <p>
    ";
        // line 72
echo _gettext("The phpMyAdmin Monitor can assist you in optimizing the server configuration and track down time intensive queries. For the latter you will need to set log_output to 'TABLE' and have either the slow_query_log or general_log enabled. Note however, that the general_log produces a lot of data and increases server load by up to 15%.");
        // line 75
        echo "  </p>
  <img class=\"ajaxIcon\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
        echo "\" alt=\"";
echo _gettext("Loading…");
        echo "\">

  <div class=\"ajaxContent\"></div>
  <br>

  <div class=\"monitorUse hide\">
    <p><strong>";
        // line 82
echo _gettext("Using the monitor:");
        echo "</strong></p>
    <p>
      ";
        // line 84
echo _gettext("Your browser will refresh all displayed charts in a regular interval. You may add charts and change the refresh rate under 'Settings', or remove any chart using the cog icon on each respective chart.");
        // line 87
        echo "    </p>
    <p>
      ";
        // line 89
echo _gettext("To display queries from the logs, select the relevant time span on any chart by holding down the left mouse button and panning over the chart. Once confirmed, this will load a table of grouped queries, there you may click on any occurring SELECT statements to further analyze them.");
        // line 92
        echo "    </p>
    <p>
      ";
        // line 94
        echo $this->env->getFunction('get_image')->getCallable()("s_attention");
        echo "
      <strong>";
        // line 95
echo _gettext("Please note:");
        echo "</strong>
    </p>
    <p>
      ";
        // line 98
echo _gettext("Enabling the general_log may increase the server load by 5-15%. Also be aware that generating statistics from the logs is a load intensive task, so it is advisable to select only a small time span and to disable the general_log and empty its table once monitoring is not required any more.");
        // line 101
        echo "    </p>
  </div>
</div>

<div class=\"modal fade\" id=\"addChartModal\" tabindex=\"-1\" aria-labelledby=\"addChartModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addChartModalLabel\">";
        // line 109
echo _gettext("Chart Title");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 110
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"tabGridVariables\">
          <p>
            <input type=\"text\" name=\"chartTitle\" value=\"";
        // line 115
echo _gettext("Chart Title");
        echo "\">
          </p>
          <input type=\"radio\" name=\"chartType\" value=\"preset\" id=\"chartPreset\">

          <label for=\"chartPreset\">";
        // line 119
echo _gettext("Preset chart");
        echo "</label>
          <select name=\"presetCharts\"></select>
          <br>

          <input type=\"radio\" name=\"chartType\" value=\"variable\" id=\"chartStatusVar\" checked=\"checked\">
          <label for=\"chartStatusVar\">
            ";
        // line 125
echo _gettext("Status variable(s)");
        // line 126
        echo "          </label>
          <br>

          <div id=\"chartVariableSettings\">
            <label for=\"chartSeries\">";
        // line 130
echo _gettext("Select series:");
        echo "</label>
            <br>
            <select id=\"chartSeries\" name=\"varChartList\" size=\"1\">
              <option>";
        // line 133
echo _gettext("Commonly monitored");
        echo "</option>
              <option>Processes</option>
              <option>Questions</option>
              <option>Connections</option>
              <option>Bytes_sent</option>
              <option>Bytes_received</option>
              <option>Threads_connected</option>
              <option>Created_tmp_disk_tables</option>
              <option>Handler_read_first</option>
              <option>Innodb_buffer_pool_wait_free</option>
              <option>Key_reads</option>
              <option>Open_tables</option>
              <option>Select_full_join</option>
              <option>Slow_queries</option>
            </select>
            <br>

            <label for=\"variableInput\">
              ";
        // line 151
echo _gettext("or type variable name:");
        // line 152
        echo "            </label>
            <input type=\"text\" name=\"variableInput\" id=\"variableInput\">
            <br>

            <input type=\"checkbox\" name=\"differentialValue\" id=\"differentialValue\" value=\"differential\" checked=\"checked\">
            <label for=\"differentialValue\">
              ";
        // line 158
echo _gettext("Display as differential value");
        // line 159
        echo "            </label>
            <br>

            <input type=\"checkbox\" id=\"useDivisor\" name=\"useDivisor\" value=\"1\">
            <label for=\"useDivisor\">";
        // line 163
echo _gettext("Apply a divisor");
        echo "</label>

            <span class=\"divisorInput hide\">
              <input type=\"text\" name=\"valueDivisor\" size=\"4\" value=\"1\">
              (<a href=\"#kibDivisor\">";
        // line 167
echo _gettext("KiB");
        echo "</a>,
              <a href=\"#mibDivisor\">";
        // line 168
echo _gettext("MiB");
        echo "</a>)
            </span>
            <br>

            <input type=\"checkbox\" id=\"useUnit\" name=\"useUnit\" value=\"1\">
            <label for=\"useUnit\">
              ";
        // line 174
echo _gettext("Append unit to data values");
        // line 175
        echo "            </label>
            <span class=\"unitInput hide\">
              <input type=\"text\" name=\"valueUnit\" size=\"4\" value=\"\">
            </span>

            <p>
              <a href=\"#submitAddSeries\">
                <strong>";
        // line 182
echo _gettext("Add this series");
        echo "</strong>
              </a>
              <span id=\"clearSeriesLink\" class=\"hide\">
                | <a href=\"#submitClearSeries\">";
        // line 185
echo _gettext("Clear series");
        echo "</a>
              </span>
            </p>

            ";
        // line 189
echo _gettext("Series in chart:");
        // line 190
        echo "            <br>
            <span id=\"seriesPreview\">
              <em>";
        // line 192
echo _gettext("None");
        echo "</em>
            </span>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addChartButton\" data-bs-dismiss=\"modal\">";
        // line 198
echo _gettext("Add chart to grid");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"closeModalButton\" data-bs-dismiss=\"modal\">";
        // line 199
echo _gettext("Close");
        echo "</button>
      </div>
    </div>
  </div>
</div>

<div id=\"logAnalyseDialog\" title=\"";
        // line 205
echo _gettext("Log statistics");
        echo "\" class=\"hide\">
  <p>
    ";
        // line 207
echo _gettext("Selected time range:");
        // line 208
        echo "    <input type=\"text\" name=\"dateStart\" class=\"datetimefield\" value=\"\">
    -
    <input type=\"text\" name=\"dateEnd\" class=\"datetimefield\" value=\"\">
  </p>

  <input type=\"checkbox\" id=\"limitTypes\" value=\"1\" checked=\"checked\">
  <label for=\"limitTypes\">
    ";
        // line 215
echo _gettext("Only retrieve SELECT,INSERT,UPDATE and DELETE Statements");
        // line 216
        echo "  </label>
  <br>

  <input type=\"checkbox\" id=\"removeVariables\" value=\"1\" checked=\"checked\">
  <label for=\"removeVariables\">
    ";
        // line 221
echo _gettext("Remove variable data in INSERT statements for better grouping");
        // line 222
        echo "  </label>

  <p>
    ";
        // line 225
echo _gettext("Choose from which log you want the statistics to be generated from.");
        // line 226
        echo "  </p>
  <p>
    ";
        // line 228
echo _gettext("Results are grouped by query text.");
        // line 229
        echo "  </p>
</div>

<div id=\"queryAnalyzerDialog\" title=\"";
        // line 232
echo _gettext("Query analyzer");
        echo "\" class=\"hide\">
  <textarea id=\"sqlquery\"></textarea>
  <br>
  <div class=\"placeHolder\"></div>
</div>

<div class=\"clearfloat\"></div>
<div><table class=\"clearfloat tdblock\" id=\"chartGrid\"></table></div>
<div id=\"logTable\"><br></div>

<script>
  var variableNames = [
    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["javascript_variable_names"]) || array_key_exists("javascript_variable_names", $context) ? $context["javascript_variable_names"] : (function () { throw new RuntimeError('Variable "javascript_variable_names" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variable_name"]) {
            // line 245
            echo "      \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["variable_name"], "js"), "html", null, true);
            echo "\",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "  ];
</script>

<form id=\"js_data\" class=\"hide\">
  ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 252
            echo "    <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "</form>

<div id=\"profiling_docu\" class=\"hide\">
  ";
        // line 257
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("general-thread-states");
        echo "
</div>

<div id=\"explain_docu\" class=\"hide\">
  ";
        // line 261
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("explain-output");
        echo "
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/monitor/index.twig";
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
        return array (  515 => 261,  508 => 257,  503 => 254,  492 => 252,  488 => 251,  482 => 247,  473 => 245,  469 => 244,  454 => 232,  449 => 229,  447 => 228,  443 => 226,  441 => 225,  436 => 222,  434 => 221,  427 => 216,  425 => 215,  416 => 208,  414 => 207,  409 => 205,  400 => 199,  396 => 198,  387 => 192,  383 => 190,  381 => 189,  374 => 185,  368 => 182,  359 => 175,  357 => 174,  348 => 168,  344 => 167,  337 => 163,  331 => 159,  329 => 158,  321 => 152,  319 => 151,  298 => 133,  292 => 130,  286 => 126,  284 => 125,  275 => 119,  268 => 115,  260 => 110,  256 => 109,  246 => 101,  244 => 98,  238 => 95,  234 => 94,  230 => 92,  228 => 89,  224 => 87,  222 => 84,  217 => 82,  206 => 76,  203 => 75,  201 => 72,  196 => 70,  186 => 63,  182 => 62,  178 => 61,  172 => 58,  168 => 57,  160 => 51,  151 => 49,  147 => 48,  142 => 46,  136 => 42,  129 => 40,  125 => 37,  122 => 35,  120 => 34,  116 => 31,  113 => 29,  111 => 28,  109 => 27,  103 => 26,  99 => 25,  94 => 23,  86 => 18,  82 => 17,  78 => 16,  68 => 9,  64 => 8,  60 => 7,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'monitor' %}
{% block content %}
  <h2 class=\"mb-3\">{{ 'System monitor'|trans }}</h2>

  <div class=\"mb-3 d-print-none\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"monitorPauseResumeButton\">{{ get_icon('play', 'Start monitor'|trans) }}</button>
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"collapse\" data-bs-target=\"#monitorSettingsContent\" aria-expanded=\"false\" aria-controls=\"monitorSettingsContent\">{{ get_icon('s_cog', 'Settings'|trans) }}</button>
    <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorInstructionsButton\">{{ get_icon('b_help', 'Instructions/Setup'|trans) }}</button>
  </div>

  <div class=\"collapse\" id=\"monitorSettingsContent\">
    <div class=\"card mb-3 d-print-none\">
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorAddNewChartButton\">{{ get_icon('b_chart', 'Add chart'|trans) }}</button>
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorRearrangeChartButton\">{{ get_icon('b_tblops', 'Enable charts dragging'|trans) }}</button>
          <button type=\"button\" class=\"btn btn-primary d-none\" id=\"monitorDoneRearrangeChartButton\">{{ get_icon('s_okay', 'Done dragging (rearranging) charts'|trans) }}</button>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartRefreshRateSelect\">{{ 'Refresh rate'|trans }}</label>
            <select class=\"form-select\" id=\"monitorChartRefreshRateSelect\" name=\"monitorChartRefreshRate\">
              {% for rate in [2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200] %}
                <option value=\"{{ rate }}\"{{ rate == 5 ? ' selected' }}>
                  {%- if rate < 60 -%}
                    {% if rate == 1 %}
                      {{- '%d second'|trans|format(rate) -}}
                    {% else %}
                      {{- '%d seconds'|trans|format(rate) -}}
                    {% endif %}
                  {%- else -%}
                    {% if rate / 60 == 1 %}
                      {{- '%d minute'|trans|format(rate / 60) -}}
                    {% else %}
                      {{- '%d minutes'|trans|format(rate / 60) -}}
                    {% endif %}
                  {%- endif -%}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartColumnsSelect\">{{ 'Chart columns'|trans }}</label>
            <select class=\"form-select\" id=\"monitorChartColumnsSelect\" name=\"monitorChartColumns\">
              {% for number_of_columns in 1..6 %}
                <option>{{ number_of_columns }}</option>
              {% endfor %}
            </select>
          </div>
        </div>

        <div>
          <p class=\"card-text\">
            <strong>{% trans 'Chart arrangement' %}</strong><br>
            <span class=\"text-body-secondary\">{{ 'The arrangement of the charts is stored to the browsers local storage. You may want to export it if you have a complicated set up.'|trans }}</span>
          </p>
          <div>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorImportConfigButton\">{{ 'Import'|trans }}</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorExportConfigButton\">{{ 'Export'|trans }}</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorResetConfigButton\">{{ 'Reset to default'|trans }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id=\"monitorInstructionsDialog\" title=\"{% trans 'Monitor Instructions' %}\" class=\"hide\">
  <p>
    {% trans %}
      The phpMyAdmin Monitor can assist you in optimizing the server configuration and track down time intensive queries. For the latter you will need to set log_output to 'TABLE' and have either the slow_query_log or general_log enabled. Note however, that the general_log produces a lot of data and increases server load by up to 15%.
    {% endtrans %}
  </p>
  <img class=\"ajaxIcon\" src=\"{{ image('ajax_clock_small.gif') }}\" alt=\"{% trans 'Loading…' %}\">

  <div class=\"ajaxContent\"></div>
  <br>

  <div class=\"monitorUse hide\">
    <p><strong>{% trans 'Using the monitor:' %}</strong></p>
    <p>
      {% trans %}
        Your browser will refresh all displayed charts in a regular interval. You may add charts and change the refresh rate under 'Settings', or remove any chart using the cog icon on each respective chart.
      {% endtrans %}
    </p>
    <p>
      {% trans %}
        To display queries from the logs, select the relevant time span on any chart by holding down the left mouse button and panning over the chart. Once confirmed, this will load a table of grouped queries, there you may click on any occurring SELECT statements to further analyze them.
      {% endtrans %}
    </p>
    <p>
      {{ get_image('s_attention') }}
      <strong>{% trans 'Please note:' %}</strong>
    </p>
    <p>
      {% trans %}
        Enabling the general_log may increase the server load by 5-15%. Also be aware that generating statistics from the logs is a load intensive task, so it is advisable to select only a small time span and to disable the general_log and empty its table once monitoring is not required any more.
      {% endtrans %}
    </p>
  </div>
</div>

<div class=\"modal fade\" id=\"addChartModal\" tabindex=\"-1\" aria-labelledby=\"addChartModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addChartModalLabel\">{% trans 'Chart Title' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"tabGridVariables\">
          <p>
            <input type=\"text\" name=\"chartTitle\" value=\"{% trans 'Chart Title' %}\">
          </p>
          <input type=\"radio\" name=\"chartType\" value=\"preset\" id=\"chartPreset\">

          <label for=\"chartPreset\">{% trans 'Preset chart' %}</label>
          <select name=\"presetCharts\"></select>
          <br>

          <input type=\"radio\" name=\"chartType\" value=\"variable\" id=\"chartStatusVar\" checked=\"checked\">
          <label for=\"chartStatusVar\">
            {% trans 'Status variable(s)' %}
          </label>
          <br>

          <div id=\"chartVariableSettings\">
            <label for=\"chartSeries\">{% trans 'Select series:' %}</label>
            <br>
            <select id=\"chartSeries\" name=\"varChartList\" size=\"1\">
              <option>{% trans 'Commonly monitored' %}</option>
              <option>Processes</option>
              <option>Questions</option>
              <option>Connections</option>
              <option>Bytes_sent</option>
              <option>Bytes_received</option>
              <option>Threads_connected</option>
              <option>Created_tmp_disk_tables</option>
              <option>Handler_read_first</option>
              <option>Innodb_buffer_pool_wait_free</option>
              <option>Key_reads</option>
              <option>Open_tables</option>
              <option>Select_full_join</option>
              <option>Slow_queries</option>
            </select>
            <br>

            <label for=\"variableInput\">
              {% trans 'or type variable name:' %}
            </label>
            <input type=\"text\" name=\"variableInput\" id=\"variableInput\">
            <br>

            <input type=\"checkbox\" name=\"differentialValue\" id=\"differentialValue\" value=\"differential\" checked=\"checked\">
            <label for=\"differentialValue\">
              {% trans 'Display as differential value' %}
            </label>
            <br>

            <input type=\"checkbox\" id=\"useDivisor\" name=\"useDivisor\" value=\"1\">
            <label for=\"useDivisor\">{% trans 'Apply a divisor' %}</label>

            <span class=\"divisorInput hide\">
              <input type=\"text\" name=\"valueDivisor\" size=\"4\" value=\"1\">
              (<a href=\"#kibDivisor\">{% trans 'KiB' %}</a>,
              <a href=\"#mibDivisor\">{% trans 'MiB' %}</a>)
            </span>
            <br>

            <input type=\"checkbox\" id=\"useUnit\" name=\"useUnit\" value=\"1\">
            <label for=\"useUnit\">
              {% trans 'Append unit to data values' %}
            </label>
            <span class=\"unitInput hide\">
              <input type=\"text\" name=\"valueUnit\" size=\"4\" value=\"\">
            </span>

            <p>
              <a href=\"#submitAddSeries\">
                <strong>{% trans 'Add this series' %}</strong>
              </a>
              <span id=\"clearSeriesLink\" class=\"hide\">
                | <a href=\"#submitClearSeries\">{% trans 'Clear series' %}</a>
              </span>
            </p>

            {% trans 'Series in chart:' %}
            <br>
            <span id=\"seriesPreview\">
              <em>{% trans 'None' %}</em>
            </span>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addChartButton\" data-bs-dismiss=\"modal\">{% trans 'Add chart to grid' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"closeModalButton\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>

<div id=\"logAnalyseDialog\" title=\"{% trans 'Log statistics' %}\" class=\"hide\">
  <p>
    {% trans 'Selected time range:' %}
    <input type=\"text\" name=\"dateStart\" class=\"datetimefield\" value=\"\">
    -
    <input type=\"text\" name=\"dateEnd\" class=\"datetimefield\" value=\"\">
  </p>

  <input type=\"checkbox\" id=\"limitTypes\" value=\"1\" checked=\"checked\">
  <label for=\"limitTypes\">
    {% trans 'Only retrieve SELECT,INSERT,UPDATE and DELETE Statements' %}
  </label>
  <br>

  <input type=\"checkbox\" id=\"removeVariables\" value=\"1\" checked=\"checked\">
  <label for=\"removeVariables\">
    {% trans 'Remove variable data in INSERT statements for better grouping' %}
  </label>

  <p>
    {% trans 'Choose from which log you want the statistics to be generated from.' %}
  </p>
  <p>
    {% trans 'Results are grouped by query text.' %}
  </p>
</div>

<div id=\"queryAnalyzerDialog\" title=\"{% trans 'Query analyzer' %}\" class=\"hide\">
  <textarea id=\"sqlquery\"></textarea>
  <br>
  <div class=\"placeHolder\"></div>
</div>

<div class=\"clearfloat\"></div>
<div><table class=\"clearfloat tdblock\" id=\"chartGrid\"></table></div>
<div id=\"logTable\"><br></div>

<script>
  var variableNames = [
    {% for variable_name in javascript_variable_names %}
      \"{{ variable_name|e('js') }}\",
    {% endfor %}
  ];
</script>

<form id=\"js_data\" class=\"hide\">
  {% for name, value in form %}
    <input type=\"hidden\" name=\"{{ name }}\" value=\"{{ value }}\">
  {% endfor %}
</form>

<div id=\"profiling_docu\" class=\"hide\">
  {{ show_mysql_docu('general-thread-states') }}
</div>

<div id=\"explain_docu\" class=\"hide\">
  {{ show_mysql_docu('explain-output') }}
</div>

{% endblock %}
", "server/status/monitor/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/monitor/index.twig");
    }
}
