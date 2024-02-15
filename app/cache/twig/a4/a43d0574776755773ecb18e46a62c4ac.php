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

/* test/gettext/pgettext.twig */
class __TwigTemplate_d25a5584d382b1744362f891d7a689e4 extends Template
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
echo _pgettext("Text context", "Text");
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "test/gettext/pgettext.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans %}
Text
{% context %}
Text context
{% endtrans %}
", "test/gettext/pgettext.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/test/gettext/pgettext.twig");
    }
}
