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

/* modals/add_index.twig */
class __TwigTemplate_ed2001800606cb0b357d6927ea814e45 extends Template
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
        echo "<div class=\"modal fade\" id=\"addIndexModal\" tabindex=\"-1\" aria-labelledby=\"addIndexModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addIndexModalLabel\">";
        // line 5
echo _gettext("Loading");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" id=\"addIndexModalCloseButton\" aria-label=\"";
        // line 6
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addIndexModalGoButton\">";
        // line 10
echo _gettext("Go");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addIndexModalCancelButton\">";
        // line 11
echo _gettext("Cancel");
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modals/add_index.twig";
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
        return array (  58 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"addIndexModal\" tabindex=\"-1\" aria-labelledby=\"addIndexModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addIndexModalLabel\">{% trans 'Loading' %}</h5>
        <button type=\"button\" class=\"btn-close\" id=\"addIndexModalCloseButton\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addIndexModalGoButton\">{% trans 'Go' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addIndexModalCancelButton\">{% trans 'Cancel' %}</button>
      </div>
    </div>
  </div>
</div>
", "modals/add_index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/modals/add_index.twig");
    }
}
