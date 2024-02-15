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

/* navigation/tree/quick_warp.twig */
class __TwigTemplate_abc1c627d295b85b5ff0f268757f6dfb extends Template
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
        echo "<div class=\"pma_quick_warp\">
    ";
        // line 2
        if ((isset($context["recent"]) || array_key_exists("recent", $context) ? $context["recent"] : (function () { throw new RuntimeError('Variable "recent" does not exist.', 2, $this->source); })())) {
            echo (isset($context["recent"]) || array_key_exists("recent", $context) ? $context["recent"] : (function () { throw new RuntimeError('Variable "recent" does not exist.', 2, $this->source); })());
        }
        // line 3
        echo "    ";
        if ((isset($context["favorite"]) || array_key_exists("favorite", $context) ? $context["favorite"] : (function () { throw new RuntimeError('Variable "favorite" does not exist.', 3, $this->source); })())) {
            echo (isset($context["favorite"]) || array_key_exists("favorite", $context) ? $context["favorite"] : (function () { throw new RuntimeError('Variable "favorite" does not exist.', 3, $this->source); })());
        }
        // line 4
        echo "    <div class=\"clearfloat\"></div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/quick_warp.twig";
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
        return array (  49 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pma_quick_warp\">
    {% if recent %}{{ recent|raw }}{% endif %}
    {% if favorite %}{{ favorite|raw }}{% endif %}
    <div class=\"clearfloat\"></div>
</div>
", "navigation/tree/quick_warp.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/quick_warp.twig");
    }
}
