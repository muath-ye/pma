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

/* test/gettext/plural_notes.twig */
class __TwigTemplate_2ac9b039c1c51123385122fbf3262e37 extends Template
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
// l10n: Number of tables
echo strtr(_ngettext("One table", "%count% tables", abs(        // line 3
(isset($context["table_count"]) || array_key_exists("table_count", $context) ? $context["table_count"] : (function () { throw new RuntimeError('Variable "table_count" does not exist.', 3, $this->source); })()))), array("%count%" => abs((isset($context["table_count"]) || array_key_exists("table_count", $context) ? $context["table_count"] : (function () { throw new RuntimeError('Variable "table_count" does not exist.', 3, $this->source); })())), ));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "test/gettext/plural_notes.twig";
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
        return array (  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans %}
One table
{% plural table_count %}
{{ count }} tables
{% notes %}
Number of tables
{% endtrans %}
", "test/gettext/plural_notes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/test/gettext/plural_notes.twig");
    }
}
