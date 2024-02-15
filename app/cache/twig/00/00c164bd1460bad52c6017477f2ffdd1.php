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

/* navigation/tree/state.twig */
class __TwigTemplate_d25487ffd1c053891372f5a75ac990b6 extends Template
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
        echo (isset($context["quick_warp"]) || array_key_exists("quick_warp", $context) ? $context["quick_warp"] : (function () { throw new RuntimeError('Variable "quick_warp" does not exist.', 1, $this->source); })());
        echo "

<div class=\"clearfloat\"></div>

<ul>
  ";
        // line 6
        echo (isset($context["fast_filter"]) || array_key_exists("fast_filter", $context) ? $context["fast_filter"] : (function () { throw new RuntimeError('Variable "fast_filter" does not exist.', 6, $this->source); })());
        echo "
  ";
        // line 7
        echo (isset($context["controls"]) || array_key_exists("controls", $context) ? $context["controls"] : (function () { throw new RuntimeError('Variable "controls" does not exist.', 7, $this->source); })());
        echo "
</ul>

";
        // line 10
        echo (isset($context["page_selector"]) || array_key_exists("page_selector", $context) ? $context["page_selector"] : (function () { throw new RuntimeError('Variable "page_selector" does not exist.', 10, $this->source); })());
        echo "

<div id='pma_navigation_tree_content'>
  <ul>
    ";
        // line 14
        echo (isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new RuntimeError('Variable "nodes" does not exist.', 14, $this->source); })());
        echo "
  </ul>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/state.twig";
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
        return array (  62 => 14,  55 => 10,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ quick_warp|raw }}

<div class=\"clearfloat\"></div>

<ul>
  {{ fast_filter|raw }}
  {{ controls|raw }}
</ul>

{{ page_selector|raw }}

<div id='pma_navigation_tree_content'>
  <ul>
    {{ nodes|raw }}
  </ul>
</div>
", "navigation/tree/state.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/state.twig");
    }
}
