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

/* table/search/column_comparison_operators.twig */
class __TwigTemplate_94601b4133ea748cfc7a2a9c31c11de2 extends Template
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
        echo "<select class=\"column-operator\" id=\"ColumnOperator";
        echo twig_escape_filter($this->env, (isset($context["search_index"]) || array_key_exists("search_index", $context) ? $context["search_index"] : (function () { throw new RuntimeError('Variable "search_index" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" name=\"criteriaColumnOperators[";
        echo twig_escape_filter($this->env, (isset($context["search_index"]) || array_key_exists("search_index", $context) ? $context["search_index"] : (function () { throw new RuntimeError('Variable "search_index" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "]\">
  ";
        // line 2
        echo (isset($context["type_operators"]) || array_key_exists("type_operators", $context) ? $context["type_operators"] : (function () { throw new RuntimeError('Variable "type_operators" does not exist.', 2, $this->source); })());
        echo "
</select>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/search/column_comparison_operators.twig";
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
        return array (  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<select class=\"column-operator\" id=\"ColumnOperator{{ search_index }}\" name=\"criteriaColumnOperators[{{ search_index }}]\">
  {{ type_operators|raw }}
</select>
", "table/search/column_comparison_operators.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/search/column_comparison_operators.twig");
    }
}
