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
class __TwigTemplate_47797b8890061b3e0a77772261c8b20e extends Template
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
        echo ($context["quick_warp"] ?? null);
        echo "

<div class=\"clearfloat\"></div>

<ul>
  ";
        // line 6
        echo ($context["fast_filter"] ?? null);
        echo "
  ";
        // line 7
        echo ($context["controls"] ?? null);
        echo "
</ul>

";
        // line 10
        echo ($context["page_selector"] ?? null);
        echo "

<div id='pma_navigation_tree_content'>
  <ul>
    ";
        // line 14
        echo ($context["nodes"] ?? null);
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
        return new Source("", "navigation/tree/state.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\navigation\\tree\\state.twig");
    }
}
