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

/* test/add_data.twig */
class __TwigTemplate_4841217a3343b2e4343853d9061f1c17 extends Template
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
        echo twig_escape_filter($this->env, (isset($context["variable1"]) || array_key_exists("variable1", $context) ? $context["variable1"] : (function () { throw new RuntimeError('Variable "variable1" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["variable2"]) || array_key_exists("variable2", $context) ? $context["variable2"] : (function () { throw new RuntimeError('Variable "variable2" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "test/add_data.twig";
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
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ variable1 }}
{{ variable2 }}
", "test/add_data.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/test/add_data.twig");
    }
}
