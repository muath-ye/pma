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

/* table/start_and_number_of_rows_fieldset.twig */
class __TwigTemplate_6c96090041dc8b1fdef994d81b19c012 extends Template
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
        echo "<fieldset class=\"row g-3 align-items-center\">
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"startRowInput\">";
        // line 3
echo _gettext("Start row:");
        echo "</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"startRowInput\" type=\"number\" name=\"pos\" min=\"0\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pos"]) || array_key_exists("pos", $context) ? $context["pos"] : (function () { throw new RuntimeError('Variable "pos" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\"";
        if (((isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 6, $this->source); })()) > 0)) {
            echo " max=\"";
            echo twig_escape_filter($this->env, ((isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 6, $this->source); })()) - 1), "html", null, true);
            echo "\"";
        }
        echo " required>
  </div>
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"maxRowsInput\">";
        // line 9
echo _gettext("Number of rows:");
        echo "</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" required>
  </div>
  <div class=\"col-auto\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 15
echo _gettext("Go");
        echo "\">
  </div>
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"unlim_num_rows\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
</fieldset>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/start_and_number_of_rows_fieldset.twig";
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
        return array (  80 => 18,  76 => 17,  71 => 15,  65 => 12,  59 => 9,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"row g-3 align-items-center\">
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"startRowInput\">{% trans 'Start row:' %}</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"startRowInput\" type=\"number\" name=\"pos\" min=\"0\" value=\"{{ pos }}\"{% if unlim_num_rows > 0 %} max=\"{{ unlim_num_rows - 1 }}\"{% endif %} required>
  </div>
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"maxRowsInput\">{% trans 'Number of rows:' %}</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"{{ rows }}\" required>
  </div>
  <div class=\"col-auto\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"{% trans 'Go' %}\">
  </div>
  <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
  <input type=\"hidden\" name=\"unlim_num_rows\" value=\"{{ unlim_num_rows }}\">
</fieldset>
", "table/start_and_number_of_rows_fieldset.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/start_and_number_of_rows_fieldset.twig");
    }
}
