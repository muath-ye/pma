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

/* table/insert/get_head_and_foot_of_insert_row_table.twig */
class __TwigTemplate_1101ebf912203388d8087cee04c63f08 extends Template
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
        echo "<div class=\"table-responsive-lg\">
  <table class=\"table table-striped align-middle my-3 insertRowTable w-auto\">
    <thead>
    <tr>
      <th>";
        // line 5
echo _gettext("Column");
        echo "</th>
      ";
        // line 6
        echo (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })());
        echo "
      ";
        // line 7
        echo (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 7, $this->source); })());
        echo "
      <th>";
        // line 8
echo _gettext("Null");
        echo "</th>
      <th class=\"w-50\">";
        // line 9
echo _gettext("Value");
        echo "</th>
    </tr>
    </thead>
     <tfoot>
    <tr>
      <th colspan=\"5\" class=\"text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 15
echo _gettext("Go");
        echo "\">
        </th>
      </tr>
    </tfoot>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/get_head_and_foot_of_insert_row_table.twig";
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
        return array (  68 => 15,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive-lg\">
  <table class=\"table table-striped align-middle my-3 insertRowTable w-auto\">
    <thead>
    <tr>
      <th>{% trans 'Column' %}</th>
      {{ type|raw }}
      {{ function|raw }}
      <th>{% trans 'Null' %}</th>
      <th class=\"w-50\">{% trans 'Value' %}</th>
    </tr>
    </thead>
     <tfoot>
    <tr>
      <th colspan=\"5\" class=\"text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
        </th>
      </tr>
    </tfoot>
", "table/insert/get_head_and_foot_of_insert_row_table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/get_head_and_foot_of_insert_row_table.twig");
    }
}
