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

/* table/gis_visualization/gis_visualization.twig */
class __TwigTemplate_cbb906236fccc5015582b2caa69e5962 extends Template
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
echo _gettext("Display GIS Visualization");
        echo "</h2>

  <div class=\"card\">
    <div id=\"gis_div\" class=\"card-body\">
      <form method=\"post\" action=\"";
        // line 6
        echo $this->env->getFunction('url')->getCallable()("/table/gis-visualization");
        echo "\" class=\"row g-3 align-items-start\">
        ";
        // line 7
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
        echo "

        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"labelColumn\">";
        // line 10
echo _gettext("Label column");
        echo "</label>
          <select name=\"visualizationSettings[labelColumn]\" id=\"labelColumn\" class=\"form-select autosubmit\">
            <option value=\"\">";
        // line 12
echo _gettext("-- None --");
        echo "</option>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_candidates"]) || array_key_exists("label_candidates", $context) ? $context["label_candidates"] : (function () { throw new RuntimeError('Variable "label_candidates" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 14, $this->source); })()))) ? (" selected") : (""));
            echo ">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          </select>
        </div>
        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"spatialColumn\">";
        // line 21
echo _gettext("Spatial column");
        echo "</label>
          <select name=\"visualizationSettings[spatialColumn]\" id=\"spatialColumn\" class=\"form-select autosubmit\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spatial_candidates"]) || array_key_exists("spatial_candidates", $context) ? $context["spatial_candidates"] : (function () { throw new RuntimeError('Variable "spatial_candidates" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 24
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == (isset($context["spatialColumn"]) || array_key_exists("spatialColumn", $context) ? $context["spatialColumn"] : (function () { throw new RuntimeError('Variable "spatialColumn" does not exist.', 24, $this->source); })()))) ? (" selected") : (""));
            echo ">
                ";
            // line 25
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </select>
        </div>

        <div class=\"col-12\">
          ";
        // line 32
        echo twig_include($this->env, $context, "table/start_and_number_of_rows_fieldset.twig", (isset($context["start_and_number_of_rows_fieldset"]) || array_key_exists("start_and_number_of_rows_fieldset", $context) ? $context["start_and_number_of_rows_fieldset"] : (function () { throw new RuntimeError('Variable "start_and_number_of_rows_fieldset" does not exist.', 32, $this->source); })()));
        echo "
        </div>

        <div class=\"d-flex justify-content-between align-items-center\">
          <input type=\"hidden\" name=\"redraw\" value=\"true\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"useBaseLayer\" id=\"choice\"";
        // line 38
        echo (((($context["useBaseLayer"]) ?? (false))) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"choice\" id=\"labelChoice\">";
        // line 39
echo _gettext("Use OpenStreetMaps as Base Layer");
        echo "</label>
          </div>
          <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"saveImageButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
        // line 43
        echo $this->env->getFunction('get_icon')->getCallable()("b_saveimage", _gettext("Save"));
        echo "
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"saveImageButton\">
              <li><a class=\"dropdown-item disableAjax\" href=\"";
        // line 46
        echo (isset($context["download_url"]) || array_key_exists("download_url", $context) ? $context["download_url"] : (function () { throw new RuntimeError('Variable "download_url" does not exist.', 46, $this->source); })());
        echo "&fileFormat=png\">PNG</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"";
        // line 47
        echo (isset($context["download_url"]) || array_key_exists("download_url", $context) ? $context["download_url"] : (function () { throw new RuntimeError('Variable "download_url" does not exist.', 47, $this->source); })());
        echo "&fileFormat=pdf\">PDF</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"";
        // line 48
        echo (isset($context["download_url"]) || array_key_exists("download_url", $context) ? $context["download_url"] : (function () { throw new RuntimeError('Variable "download_url" does not exist.', 48, $this->source); })());
        echo "&fileFormat=svg\">SVG</a></li>
            </ul>
          </div>
        </div>
      </form>

      <div id=\"visualization-placeholder\" class=\"mt-3\" style=\"height: ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "px;\">
        <div class=\"visualization-target visualization-target-svg hide\">";
        // line 55
        echo (isset($context["visualization"]) || array_key_exists("visualization", $context) ? $context["visualization"] : (function () { throw new RuntimeError('Variable "visualization" does not exist.', 55, $this->source); })());
        echo "</div>
        <div class=\"visualization-target visualization-target-ol hide\"></div>
      </div>
      <script>";
        // line 58
        echo (isset($context["draw_ol"]) || array_key_exists("draw_ol", $context) ? $context["draw_ol"] : (function () { throw new RuntimeError('Variable "draw_ol" does not exist.', 58, $this->source); })());
        echo "</script>
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
        return "table/gis_visualization/gis_visualization.twig";
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
        return array (  175 => 58,  169 => 55,  165 => 54,  156 => 48,  152 => 47,  148 => 46,  142 => 43,  135 => 39,  131 => 38,  122 => 32,  116 => 28,  107 => 25,  100 => 24,  96 => 23,  91 => 21,  86 => 18,  77 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 10,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"div_view_options\" class=\"container-fluid\">
  <h2>{% trans 'Display GIS Visualization' %}</h2>

  <div class=\"card\">
    <div id=\"gis_div\" class=\"card-body\">
      <form method=\"post\" action=\"{{ url('/table/gis-visualization') }}\" class=\"row g-3 align-items-start\">
        {{ get_hidden_inputs(url_params) }}

        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"labelColumn\">{% trans 'Label column' %}</label>
          <select name=\"visualizationSettings[labelColumn]\" id=\"labelColumn\" class=\"form-select autosubmit\">
            <option value=\"\">{% trans '-- None --' %}</option>
            {% for value in label_candidates %}
              <option value=\"{{ value }}\"{{ value == labelColumn ? ' selected' }}>
                {{ value }}
              </option>
            {% endfor %}
          </select>
        </div>
        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"spatialColumn\">{% trans 'Spatial column' %}</label>
          <select name=\"visualizationSettings[spatialColumn]\" id=\"spatialColumn\" class=\"form-select autosubmit\">
            {% for value in spatial_candidates %}
              <option value=\"{{ value }}\"{{ value == spatialColumn ? ' selected' }}>
                {{ value }}
              </option>
            {% endfor %}
          </select>
        </div>

        <div class=\"col-12\">
          {{ include('table/start_and_number_of_rows_fieldset.twig', start_and_number_of_rows_fieldset) }}
        </div>

        <div class=\"d-flex justify-content-between align-items-center\">
          <input type=\"hidden\" name=\"redraw\" value=\"true\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"useBaseLayer\" id=\"choice\"{{ useBaseLayer ?? false ? ' checked' }}>
            <label class=\"form-check-label\" for=\"choice\" id=\"labelChoice\">{% trans 'Use OpenStreetMaps as Base Layer' %}</label>
          </div>
          <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"saveImageButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              {{ get_icon('b_saveimage', 'Save'|trans) }}
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"saveImageButton\">
              <li><a class=\"dropdown-item disableAjax\" href=\"{{ download_url|raw }}&fileFormat=png\">PNG</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"{{ download_url|raw }}&fileFormat=pdf\">PDF</a></li>
              <li><a class=\"dropdown-item disableAjax\" href=\"{{ download_url|raw }}&fileFormat=svg\">SVG</a></li>
            </ul>
          </div>
        </div>
      </form>

      <div id=\"visualization-placeholder\" class=\"mt-3\" style=\"height: {{ height }}px;\">
        <div class=\"visualization-target visualization-target-svg hide\">{{ visualization|raw }}</div>
        <div class=\"visualization-target visualization-target-ol hide\"></div>
      </div>
      <script>{{ draw_ol|raw }}</script>
    </div>
  </div>
</div>
", "table/gis_visualization/gis_visualization.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/gis_visualization/gis_visualization.twig");
    }
}
