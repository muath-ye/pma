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

/* display/results/null_display.twig */
class __TwigTemplate_609c0576de1d50980e273ecfd48dd320 extends Template
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
        echo "<td data-decimals=\"";
        echo twig_escape_filter($this->env, (isset($context["data_decimals"]) || array_key_exists("data_decimals", $context) ? $context["data_decimals"] : (function () { throw new RuntimeError('Variable "data_decimals" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"
    data-type=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["data_type"]) || array_key_exists("data_type", $context) ? $context["data_type"] : (function () { throw new RuntimeError('Variable "data_type" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\"
    ";
        // line 4
        echo "    class=\"";
        echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " null\">
    <em>NULL</em>
</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/null_display.twig";
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
        return array (  46 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<td data-decimals=\"{{ data_decimals }}\"
    data-type=\"{{ data_type }}\"
    {# The null class is needed for grid editing #}
    class=\"{{ classes }} null\">
    <em>NULL</em>
</td>
", "display/results/null_display.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/null_display.twig");
    }
}
