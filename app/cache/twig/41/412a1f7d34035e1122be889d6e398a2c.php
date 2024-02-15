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

/* error/report_form.twig */
class __TwigTemplate_5cd0e8103a81a00a780e2d82cd805ff1 extends Template
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
        if ((isset($context["allowed_to_send_error_reports"]) || array_key_exists("allowed_to_send_error_reports", $context) ? $context["allowed_to_send_error_reports"] : (function () { throw new RuntimeError('Variable "allowed_to_send_error_reports" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<p>
  ";
            // line 3
echo _gettext("This report automatically includes data about the error and information about relevant configuration settings. It will be sent to the phpMyAdmin team for debugging the error.");
            // line 6
            echo "</p>
<form action=\"";
            // line 7
            echo $this->env->getFunction('url')->getCallable()("/error-report");
            echo "\" method=\"post\" id=\"errorReportForm\" class=\"ajax\">
  <div class=\"mb-3\">
    <label for=\"errorReportDescription\">
      <strong>
        ";
            // line 11
echo _gettext("Can you tell us the steps leading to this error? It decisively helps in debugging:");
            // line 12
            echo "      </strong>
    </label>
    <textarea class=\"form-control\" name=\"description\" id=\"errorReportDescription\"></textarea>
  </div>

  <div class=\"mb-3\">
    ";
            // line 18
echo _gettext("You may examine the data in the error report:");
            // line 19
            echo "    <pre class=\"pre-scrollable\">";
            echo twig_escape_filter($this->env, json_encode((isset($context["report_data"]) || array_key_exists("report_data", $context) ? $context["report_data"] : (function () { throw new RuntimeError('Variable "report_data" does not exist.', 19, $this->source); })()), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
            echo "</pre>
  </div>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" name=\"always_send\" id=\"errorReportAlwaysSendCheckbox\">
    <label class=\"form-check-label\" for=\"errorReportAlwaysSendCheckbox\">
      ";
            // line 25
echo _gettext("Automatically send report next time");
            // line 26
            echo "    </label>
  </div>

  ";
            // line 29
            echo (isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 29, $this->source); })());
            echo "
  ";
            // line 30
            echo (isset($context["hidden_fields"]) || array_key_exists("hidden_fields", $context) ? $context["hidden_fields"] : (function () { throw new RuntimeError('Variable "hidden_fields" does not exist.', 30, $this->source); })());
            echo "
</form>
";
        } else {
            // line 33
            echo "<div class=\"mb-3\">
  <pre class=\"pre-scrollable\">";
            // line 34
            echo twig_escape_filter($this->env, json_encode((isset($context["report_data"]) || array_key_exists("report_data", $context) ? $context["report_data"] : (function () { throw new RuntimeError('Variable "report_data" does not exist.', 34, $this->source); })()), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
            echo "</pre>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "error/report_form.twig";
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
        return array (  96 => 34,  93 => 33,  87 => 30,  83 => 29,  78 => 26,  76 => 25,  66 => 19,  64 => 18,  56 => 12,  54 => 11,  47 => 7,  44 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if allowed_to_send_error_reports %}
<p>
  {% trans %}
    This report automatically includes data about the error and information about relevant configuration settings. It will be sent to the phpMyAdmin team for debugging the error.
  {% endtrans %}
</p>
<form action=\"{{ url('/error-report') }}\" method=\"post\" id=\"errorReportForm\" class=\"ajax\">
  <div class=\"mb-3\">
    <label for=\"errorReportDescription\">
      <strong>
        {% trans \"Can you tell us the steps leading to this error? It decisively helps in debugging:\" %}
      </strong>
    </label>
    <textarea class=\"form-control\" name=\"description\" id=\"errorReportDescription\"></textarea>
  </div>

  <div class=\"mb-3\">
    {% trans \"You may examine the data in the error report:\" %}
    <pre class=\"pre-scrollable\">{{ report_data|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES')) }}</pre>
  </div>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" name=\"always_send\" id=\"errorReportAlwaysSendCheckbox\">
    <label class=\"form-check-label\" for=\"errorReportAlwaysSendCheckbox\">
      {% trans \"Automatically send report next time\" %}
    </label>
  </div>

  {{ hidden_inputs|raw }}
  {{ hidden_fields|raw }}
</form>
{% else %}
<div class=\"mb-3\">
  <pre class=\"pre-scrollable\">{{ report_data|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES')) }}</pre>
</div>
{% endif %}
", "error/report_form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/error/report_form.twig");
    }
}
