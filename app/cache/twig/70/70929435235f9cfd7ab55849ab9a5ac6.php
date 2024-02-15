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

/* sql/sql_query_results.twig */
class __TwigTemplate_266e11b59b00bd71f283e7f2e925fea2 extends Template
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
        echo "<div class=\"sqlqueryresults ajax\">
    ";
        // line 2
        echo (isset($context["previous_update_query"]) || array_key_exists("previous_update_query", $context) ? $context["previous_update_query"] : (function () { throw new RuntimeError('Variable "previous_update_query" does not exist.', 2, $this->source); })());
        echo "
    ";
        // line 3
        echo (isset($context["profiling_chart"]) || array_key_exists("profiling_chart", $context) ? $context["profiling_chart"] : (function () { throw new RuntimeError('Variable "profiling_chart" does not exist.', 3, $this->source); })());
        echo "
    ";
        // line 4
        echo (isset($context["missing_unique_column_message"]) || array_key_exists("missing_unique_column_message", $context) ? $context["missing_unique_column_message"] : (function () { throw new RuntimeError('Variable "missing_unique_column_message" does not exist.', 4, $this->source); })());
        echo "
    ";
        // line 5
        echo (isset($context["bookmark_created_message"]) || array_key_exists("bookmark_created_message", $context) ? $context["bookmark_created_message"] : (function () { throw new RuntimeError('Variable "bookmark_created_message" does not exist.', 5, $this->source); })());
        echo "
    ";
        // line 6
        echo (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 6, $this->source); })());
        echo "
    ";
        // line 7
        echo (isset($context["bookmark_support"]) || array_key_exists("bookmark_support", $context) ? $context["bookmark_support"] : (function () { throw new RuntimeError('Variable "bookmark_support" does not exist.', 7, $this->source); })());
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/sql_query_results.twig";
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
        return array (  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sqlqueryresults ajax\">
    {{ previous_update_query|raw }}
    {{ profiling_chart|raw }}
    {{ missing_unique_column_message|raw }}
    {{ bookmark_created_message|raw }}
    {{ table|raw }}
    {{ bookmark_support|raw }}
</div>
", "sql/sql_query_results.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/sql_query_results.twig");
    }
}
