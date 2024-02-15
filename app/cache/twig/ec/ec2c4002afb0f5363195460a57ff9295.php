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

/* table/chart/tbl_chart.twig */
class __TwigTemplate_196ca90835ffb4531f4fdc8a93447023 extends Template
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
        echo "<div id=\"div_view_options\" class=\"container-fluid\">
  <h2>";
        // line 2
echo _gettext("Display chart");
        echo "</h2>

  <div class=\"card\">
    <div class=\"card-body\">
      <form method=\"post\" id=\"tblchartform\" action=\"";
        // line 6
        echo $this->env->getFunction('url')->getCallable()("/table/chart");
        echo "\" class=\"ajax\">
        ";
        // line 7
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
        echo "

        <fieldset class=\"mb-3\" role=\"radiogroup\">
          <legend class=\"visually-hidden\">";
        // line 10
echo _gettext("Chart type");
        echo "</legend>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"bar\" id=\"barChartTypeRadio\">
            <label class=\"form-check-label\" for=\"barChartTypeRadio\">";
        // line 13
echo _pgettext("Chart type", "Bar");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"column\" id=\"columnChartTypeRadio\">
            <label class=\"form-check-label\" for=\"columnChartTypeRadio\">";
        // line 17
echo _pgettext("Chart type", "Column");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"line\" id=\"lineChartTypeRadio\" checked>
            <label class=\"form-check-label\" for=\"lineChartTypeRadio\">";
        // line 21
echo _pgettext("Chart type", "Line");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"spline\" id=\"splineChartTypeRadio\">
            <label class=\"form-check-label\" for=\"splineChartTypeRadio\">";
        // line 25
echo _pgettext("Chart type", "Spline");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"area\" id=\"areaChartTypeRadio\">
            <label class=\"form-check-label\" for=\"areaChartTypeRadio\">";
        // line 29
echo _pgettext("Chart type", "Area");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"pieChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"pie\" id=\"pieChartTypeRadio\">
            <label class=\"form-check-label\" for=\"pieChartTypeRadio\">";
        // line 33
echo _pgettext("Chart type", "Pie");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"timelineChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"timeline\" id=\"timelineChartTypeRadio\">
            <label class=\"form-check-label\" for=\"timelineChartTypeRadio\">";
        // line 37
echo _pgettext("Chart type", "Timeline");
        echo "</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"scatterChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"scatter\" id=\"scatterChartTypeRadio\">
            <label class=\"form-check-label\" for=\"scatterChartTypeRadio\">";
        // line 41
echo _pgettext("Chart type", "Scatter");
        echo "</label>
          </div>
        </fieldset>

        <div class=\"form-check mb-3 d-none\" id=\"barStacked\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"barStackedCheckbox\" value=\"1\" id=\"barStackedCheckbox\">
          <label class=\"form-check-label\" for=\"barStackedCheckbox\">";
        // line 47
echo _gettext("Stacked");
        echo "</label>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartTitleInput\">";
        // line 51
echo _gettext("Chart title:");
        echo "</label>
          <input class=\"form-control\" type=\"text\" name=\"chartTitleInput\" id=\"chartTitleInput\">
        </div>

        ";
        // line 55
        $context["xaxis"] = null;
        // line 56
        echo "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartXAxisSelect\">";
        // line 57
echo _gettext("X-Axis:");
        echo "</label>
          <select class=\"form-select\" name=\"chartXAxisSelect\" id=\"chartXAxisSelect\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 60
            echo "              ";
            if (((isset($context["xaxis"]) || array_key_exists("xaxis", $context) ? $context["xaxis"] : (function () { throw new RuntimeError('Variable "xaxis" does not exist.', 60, $this->source); })()) === null)) {
                // line 61
                echo "                ";
                $context["xaxis"] = $context["idx"];
                // line 62
                echo "              ";
            }
            // line 63
            echo "              ";
            if (((isset($context["xaxis"]) || array_key_exists("xaxis", $context) ? $context["xaxis"] : (function () { throw new RuntimeError('Variable "xaxis" does not exist.', 63, $this->source); })()) === $context["idx"])) {
                // line 64
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</option>
              ";
            } else {
                // line 66
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</option>
              ";
            }
            // line 68
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "          </select>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartSeriesSelect\">";
        // line 73
echo _gettext("Series:");
        echo "</label>
          <select class=\"form-select resize-vertical\" name=\"chartSeriesSelect\" id=\"chartSeriesSelect\" multiple>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 76
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields_meta"]) || array_key_exists("fields_meta", $context) ? $context["fields_meta"] : (function () { throw new RuntimeError('Variable "fields_meta" does not exist.', 76, $this->source); })()), $context["idx"], [], "array", false, false, false, 76), "isNumeric", [], "any", false, false, false, 76)) {
                // line 77
                echo "                ";
                if ((($context["idx"] == (isset($context["xaxis"]) || array_key_exists("xaxis", $context) ? $context["xaxis"] : (function () { throw new RuntimeError('Variable "xaxis" does not exist.', 77, $this->source); })())) && (isset($context["table_has_a_numeric_column"]) || array_key_exists("table_has_a_numeric_column", $context) ? $context["table_has_a_numeric_column"] : (function () { throw new RuntimeError('Variable "table_has_a_numeric_column" does not exist.', 77, $this->source); })()))) {
                    // line 78
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                ";
                } else {
                    // line 80
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                ";
                }
                // line 82
                echo "              ";
            }
            // line 83
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "          </select>
        </div>

        <input type=\"hidden\" name=\"dateTimeCols\" value=\"";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 89
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields_meta"]) || array_key_exists("fields_meta", $context) ? $context["fields_meta"] : (function () { throw new RuntimeError('Variable "fields_meta" does not exist.', 89, $this->source); })()), $context["idx"], [], "array", false, false, false, 89), "isDateTimeType", [], "method", false, false, false, 89)) {
                // line 90
                echo twig_escape_filter($this->env, ($context["idx"] . " "), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\">
        <input type=\"hidden\" name=\"numericCols\" value=\"";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 95
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields_meta"]) || array_key_exists("fields_meta", $context) ? $context["fields_meta"] : (function () { throw new RuntimeError('Variable "fields_meta" does not exist.', 95, $this->source); })()), $context["idx"], [], "array", false, false, false, 95), "isNumeric", [], "any", false, false, false, 95)) {
                // line 96
                echo twig_escape_filter($this->env, ($context["idx"] . " "), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\">

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"xAxisLabelInput\">";
        // line 101
echo _gettext("X-Axis label:");
        echo "</label>
          <input class=\"form-control\" type=\"text\" name=\"xAxisLabelInput\" id=\"xAxisLabelInput\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, ((((isset($context["xaxis"]) || array_key_exists("xaxis", $context) ? $context["xaxis"] : (function () { throw new RuntimeError('Variable "xaxis" does not exist.', 102, $this->source); })()) ==  -1)) ? (_gettext("X Values")) : (twig_get_attribute($this->env, $this->source, (isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 102, $this->source); })()), (isset($context["xaxis"]) || array_key_exists("xaxis", $context) ? $context["xaxis"] : (function () { throw new RuntimeError('Variable "xaxis" does not exist.', 102, $this->source); })()), [], "array", false, false, false, 102))), "html", null, true);
        echo "\">
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"yAxisLabelInput\">";
        // line 106
echo _gettext("Y-Axis label:");
        echo "</label>
          <input class=\"form-control\" type=\"text\" name=\"yAxisLabelInput\" id=\"yAxisLabelInput\" value=\"";
        // line 107
echo _gettext("Y Values");
        echo "\">
        </div>

        <div class=\"form-check mb-3\">
          <input class=\"form-check-input\" type=\"checkbox\" id=\"seriesColumnCheckbox\" name=\"seriesColumnCheckbox\" value=\"1\">
          <label class=\"form-check-label\" for=\"seriesColumnCheckbox\">";
        // line 112
echo _gettext("Series names are in a column");
        echo "</label>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartSeriesColumnSelect\">";
        // line 116
echo _gettext("Series column:");
        echo "</label>
          <select class=\"form-select\" name=\"chartSeriesColumnSelect\" id=\"chartSeriesColumnSelect\" disabled>
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 119
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\"";
            echo ((($context["idx"] == 1)) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
              ";
            // line 120
            $context["series_column"] = $context["idx"];
            // line 121
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "          </select>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartValueColumnSelect\">";
        // line 126
echo _gettext("Value Column:");
        echo "</label>
          <select class=\"form-select\" name=\"chartValueColumnSelect\" id=\"chartValueColumnSelect\" disabled>
            ";
        // line 128
        $context["selected"] = false;
        // line 129
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["key"]) {
            // line 130
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields_meta"]) || array_key_exists("fields_meta", $context) ? $context["fields_meta"] : (function () { throw new RuntimeError('Variable "fields_meta" does not exist.', 130, $this->source); })()), $context["idx"], [], "array", false, false, false, 130), "isNumeric", [], "any", false, false, false, 130)) {
                // line 131
                echo "                ";
                if (((( !(isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 131, $this->source); })()) && ($context["idx"] != (isset($context["xaxis"]) || array_key_exists("xaxis", $context) ? $context["xaxis"] : (function () { throw new RuntimeError('Variable "xaxis" does not exist.', 131, $this->source); })()))) && array_key_exists("series_column", $context)) && ($context["idx"] != (isset($context["series_column"]) || array_key_exists("series_column", $context) ? $context["series_column"] : (function () { throw new RuntimeError('Variable "series_column" does not exist.', 131, $this->source); })())))) {
                    // line 132
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                  ";
                    // line 133
                    $context["selected"] = true;
                    // line 134
                    echo "                ";
                } else {
                    // line 135
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</option>
                ";
                }
                // line 137
                echo "              ";
            }
            // line 138
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "          </select>
        </div>

        ";
        // line 142
        echo twig_include($this->env, $context, "table/start_and_number_of_rows_fieldset.twig", (isset($context["start_and_number_of_rows_fieldset"]) || array_key_exists("start_and_number_of_rows_fieldset", $context) ? $context["start_and_number_of_rows_fieldset"] : (function () { throw new RuntimeError('Variable "start_and_number_of_rows_fieldset" does not exist.', 142, $this->source); })()));
        echo "

        <div id=\"resizer\" class=\"mt-3\">
          <div class=\"position-absolute top-0 end-0 mt-1 me-1\">
            <a class=\"disableAjax\" id=\"saveChart\" href=\"#\" download=\"chart.png\">
              ";
        // line 147
        echo $this->env->getFunction('get_image')->getCallable()("b_saveimage", _gettext("Save chart as image"));
        echo "
            </a>
          </div>
          <div id=\"querychart\" dir=\"ltr\"></div>
        </div>
      </form>
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
        return "table/chart/tbl_chart.twig";
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
        return array (  390 => 147,  382 => 142,  377 => 139,  371 => 138,  368 => 137,  360 => 135,  357 => 134,  355 => 133,  348 => 132,  345 => 131,  342 => 130,  337 => 129,  335 => 128,  330 => 126,  324 => 122,  318 => 121,  316 => 120,  307 => 119,  303 => 118,  298 => 116,  291 => 112,  283 => 107,  279 => 106,  272 => 102,  268 => 101,  263 => 98,  256 => 96,  254 => 95,  250 => 94,  247 => 92,  240 => 90,  238 => 89,  234 => 88,  229 => 84,  223 => 83,  220 => 82,  212 => 80,  204 => 78,  201 => 77,  198 => 76,  194 => 75,  189 => 73,  183 => 69,  177 => 68,  169 => 66,  161 => 64,  158 => 63,  155 => 62,  152 => 61,  149 => 60,  145 => 59,  140 => 57,  137 => 56,  135 => 55,  128 => 51,  121 => 47,  112 => 41,  105 => 37,  98 => 33,  91 => 29,  84 => 25,  77 => 21,  70 => 17,  63 => 13,  57 => 10,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"div_view_options\" class=\"container-fluid\">
  <h2>{% trans 'Display chart' %}</h2>

  <div class=\"card\">
    <div class=\"card-body\">
      <form method=\"post\" id=\"tblchartform\" action=\"{{ url('/table/chart') }}\" class=\"ajax\">
        {{ get_hidden_inputs(url_params) }}

        <fieldset class=\"mb-3\" role=\"radiogroup\">
          <legend class=\"visually-hidden\">{% trans 'Chart type' %}</legend>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"bar\" id=\"barChartTypeRadio\">
            <label class=\"form-check-label\" for=\"barChartTypeRadio\">{% trans %}Bar{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"column\" id=\"columnChartTypeRadio\">
            <label class=\"form-check-label\" for=\"columnChartTypeRadio\">{% trans %}Column{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"line\" id=\"lineChartTypeRadio\" checked>
            <label class=\"form-check-label\" for=\"lineChartTypeRadio\">{% trans %}Line{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"spline\" id=\"splineChartTypeRadio\">
            <label class=\"form-check-label\" for=\"splineChartTypeRadio\">{% trans %}Spline{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"area\" id=\"areaChartTypeRadio\">
            <label class=\"form-check-label\" for=\"areaChartTypeRadio\">{% trans %}Area{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"pieChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"pie\" id=\"pieChartTypeRadio\">
            <label class=\"form-check-label\" for=\"pieChartTypeRadio\">{% trans %}Pie{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"timelineChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"timeline\" id=\"timelineChartTypeRadio\">
            <label class=\"form-check-label\" for=\"timelineChartTypeRadio\">{% trans %}Timeline{% context %}Chart type{% endtrans %}</label>
          </div>
          <div class=\"form-check form-check-inline d-none\" id=\"scatterChartType\">
            <input class=\"form-check-input\" type=\"radio\" name=\"chartType\" value=\"scatter\" id=\"scatterChartTypeRadio\">
            <label class=\"form-check-label\" for=\"scatterChartTypeRadio\">{% trans %}Scatter{% context %}Chart type{% endtrans %}</label>
          </div>
        </fieldset>

        <div class=\"form-check mb-3 d-none\" id=\"barStacked\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"barStackedCheckbox\" value=\"1\" id=\"barStackedCheckbox\">
          <label class=\"form-check-label\" for=\"barStackedCheckbox\">{% trans 'Stacked' %}</label>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartTitleInput\">{% trans 'Chart title:' %}</label>
          <input class=\"form-control\" type=\"text\" name=\"chartTitleInput\" id=\"chartTitleInput\">
        </div>

        {% set xaxis = null %}
        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartXAxisSelect\">{% trans 'X-Axis:' %}</label>
          <select class=\"form-select\" name=\"chartXAxisSelect\" id=\"chartXAxisSelect\">
            {% for idx, key in keys %}
              {% if xaxis is same as(null) %}
                {% set xaxis = idx %}
              {% endif %}
              {% if xaxis is same as(idx) %}
                <option value=\"{{ idx }}\" selected>{{ key }}</option>
              {% else %}
                <option value=\"{{ idx }}\">{{ key }}</option>
              {% endif %}
            {% endfor %}
          </select>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartSeriesSelect\">{% trans 'Series:' %}</label>
          <select class=\"form-select resize-vertical\" name=\"chartSeriesSelect\" id=\"chartSeriesSelect\" multiple>
            {% for idx, key in keys %}
              {% if fields_meta[idx].isNumeric %}
                {% if idx == xaxis and table_has_a_numeric_column %}
                  <option value=\"{{ idx }}\">{{ key }}</option>
                {% else %}
                  <option value=\"{{ idx }}\" selected>{{ key }}</option>
                {% endif %}
              {% endif %}
            {% endfor %}
          </select>
        </div>

        <input type=\"hidden\" name=\"dateTimeCols\" value=\"
          {%- for idx, key in keys -%}
            {%- if fields_meta[idx].isDateTimeType() -%}
              {{- idx ~ ' ' -}}
            {%- endif -%}
          {%- endfor %}\">
        <input type=\"hidden\" name=\"numericCols\" value=\"
          {%- for idx, key in keys -%}
            {%- if fields_meta[idx].isNumeric -%}
              {{- idx ~ ' ' -}}
            {%- endif -%}
          {%- endfor %}\">

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"xAxisLabelInput\">{% trans 'X-Axis label:' %}</label>
          <input class=\"form-control\" type=\"text\" name=\"xAxisLabelInput\" id=\"xAxisLabelInput\" value=\"{{ xaxis == -1 ? 'X Values'|trans : keys[xaxis] }}\">
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"yAxisLabelInput\">{% trans 'Y-Axis label:' %}</label>
          <input class=\"form-control\" type=\"text\" name=\"yAxisLabelInput\" id=\"yAxisLabelInput\" value=\"{% trans 'Y Values' %}\">
        </div>

        <div class=\"form-check mb-3\">
          <input class=\"form-check-input\" type=\"checkbox\" id=\"seriesColumnCheckbox\" name=\"seriesColumnCheckbox\" value=\"1\">
          <label class=\"form-check-label\" for=\"seriesColumnCheckbox\">{% trans 'Series names are in a column' %}</label>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartSeriesColumnSelect\">{% trans 'Series column:' %}</label>
          <select class=\"form-select\" name=\"chartSeriesColumnSelect\" id=\"chartSeriesColumnSelect\" disabled>
            {% for idx, key in keys %}
              <option value=\"{{ idx }}\"{{ idx == 1 ? ' selected' }}>{{ key }}</option>
              {% set series_column = idx %}
            {% endfor %}
          </select>
        </div>

        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"chartValueColumnSelect\">{% trans 'Value Column:' %}</label>
          <select class=\"form-select\" name=\"chartValueColumnSelect\" id=\"chartValueColumnSelect\" disabled>
            {% set selected = false %}
            {% for idx, key in keys %}
              {% if fields_meta[idx].isNumeric %}
                {% if not selected and idx != xaxis and series_column is defined and idx != series_column %}
                  <option value=\"{{ idx }}\" selected>{{ key }}</option>
                  {% set selected = true %}
                {% else %}
                  <option value=\"{{ idx }}\">{{ key }}</option>
                {% endif %}
              {% endif %}
            {% endfor %}
          </select>
        </div>

        {{ include('table/start_and_number_of_rows_fieldset.twig', start_and_number_of_rows_fieldset) }}

        <div id=\"resizer\" class=\"mt-3\">
          <div class=\"position-absolute top-0 end-0 mt-1 me-1\">
            <a class=\"disableAjax\" id=\"saveChart\" href=\"#\" download=\"chart.png\">
              {{ get_image('b_saveimage', 'Save chart as image'|trans) }}
            </a>
          </div>
          <div id=\"querychart\" dir=\"ltr\"></div>
        </div>
      </form>
    </div>
  </div>
</div>
", "table/chart/tbl_chart.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/chart/tbl_chart.twig");
    }
}
