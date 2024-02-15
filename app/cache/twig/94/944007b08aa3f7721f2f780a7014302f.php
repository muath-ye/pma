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

/* navigation/tree/controls.twig */
class __TwigTemplate_bec9ce98bf68aefbf799861db755132b extends Template
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
        echo "<!-- CONTROLS START -->
<li id=\"navigation_controls_outer\">
    <div id=\"navigation_controls\">
        ";
        // line 4
        echo (isset($context["collapse_all"]) || array_key_exists("collapse_all", $context) ? $context["collapse_all"] : (function () { throw new RuntimeError('Variable "collapse_all" does not exist.', 4, $this->source); })());
        echo "
        ";
        // line 5
        echo (isset($context["unlink"]) || array_key_exists("unlink", $context) ? $context["unlink"] : (function () { throw new RuntimeError('Variable "unlink" does not exist.', 5, $this->source); })());
        echo "
    </div>
</li>
<!-- CONTROLS ENDS -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/controls.twig";
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
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CONTROLS START -->
<li id=\"navigation_controls_outer\">
    <div id=\"navigation_controls\">
        {{ collapse_all|raw }}
        {{ unlink|raw }}
    </div>
</li>
<!-- CONTROLS ENDS -->
", "navigation/tree/controls.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/controls.twig");
    }
}
