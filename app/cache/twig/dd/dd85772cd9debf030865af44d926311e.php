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

/* table/tracking/index.twig */
class __TwigTemplate_94fb36eed11e2a9af307891f8eae0ec2 extends Template
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
        echo (isset($context["active_message"]) || array_key_exists("active_message", $context) ? $context["active_message"] : (function () { throw new RuntimeError('Variable "active_message" does not exist.', 1, $this->source); })());
        echo "

<br>

";
        // line 5
        echo (isset($context["action_message"]) || array_key_exists("action_message", $context) ? $context["action_message"] : (function () { throw new RuntimeError('Variable "action_message" does not exist.', 5, $this->source); })());
        echo "

";
        // line 7
        echo (isset($context["delete_version"]) || array_key_exists("delete_version", $context) ? $context["delete_version"] : (function () { throw new RuntimeError('Variable "delete_version" does not exist.', 7, $this->source); })());
        echo "

";
        // line 9
        echo (isset($context["create_version"]) || array_key_exists("create_version", $context) ? $context["create_version"] : (function () { throw new RuntimeError('Variable "create_version" does not exist.', 9, $this->source); })());
        echo "

";
        // line 11
        echo (isset($context["deactivate_tracking"]) || array_key_exists("deactivate_tracking", $context) ? $context["deactivate_tracking"] : (function () { throw new RuntimeError('Variable "deactivate_tracking" does not exist.', 11, $this->source); })());
        echo "

";
        // line 13
        echo (isset($context["activate_tracking"]) || array_key_exists("activate_tracking", $context) ? $context["activate_tracking"] : (function () { throw new RuntimeError('Variable "activate_tracking" does not exist.', 13, $this->source); })());
        echo "

";
        // line 15
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })());
        echo "

";
        // line 17
        echo (isset($context["sql_dump"]) || array_key_exists("sql_dump", $context) ? $context["sql_dump"] : (function () { throw new RuntimeError('Variable "sql_dump" does not exist.', 17, $this->source); })());
        echo "

";
        // line 19
        echo (isset($context["schema_snapshot"]) || array_key_exists("schema_snapshot", $context) ? $context["schema_snapshot"] : (function () { throw new RuntimeError('Variable "schema_snapshot" does not exist.', 19, $this->source); })());
        echo "

";
        // line 21
        echo (isset($context["tracking_report_rows"]) || array_key_exists("tracking_report_rows", $context) ? $context["tracking_report_rows"] : (function () { throw new RuntimeError('Variable "tracking_report_rows" does not exist.', 21, $this->source); })());
        echo "

";
        // line 23
        echo (isset($context["tracking_report"]) || array_key_exists("tracking_report", $context) ? $context["tracking_report"] : (function () { throw new RuntimeError('Variable "tracking_report" does not exist.', 23, $this->source); })());
        echo "

";
        // line 25
        echo (isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new RuntimeError('Variable "main" does not exist.', 25, $this->source); })());
        echo "

<br class=\"clearfloat\">
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/index.twig";
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
        return array (  94 => 25,  89 => 23,  84 => 21,  79 => 19,  74 => 17,  69 => 15,  64 => 13,  59 => 11,  54 => 9,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ active_message|raw }}

<br>

{{ action_message|raw }}

{{ delete_version|raw }}

{{ create_version|raw }}

{{ deactivate_tracking|raw }}

{{ activate_tracking|raw }}

{{ message|raw }}

{{ sql_dump|raw }}

{{ schema_snapshot|raw }}

{{ tracking_report_rows|raw }}

{{ tracking_report|raw }}

{{ main|raw }}

<br class=\"clearfloat\">
", "table/tracking/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/index.twig");
    }
}
