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

/* modals/page_settings.twig */
class __TwigTemplate_7c000eca7af2de3bf0c6693822197a61 extends Template
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
        echo "<div class=\"modal fade\" id=\"pageSettingsModal\" tabindex=\"-1\" aria-labelledby=\"pageSettingsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" id=\"pageSettingsModalDialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"pageSettingsModalLabel\">";
        // line 5
echo _gettext("Page-related settings");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" id=\"pageSettingsModalCloseButton\" aria-label=\"";
        // line 6
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"pageSettingsModalApplyButton\">";
        // line 10
echo _gettext("Apply");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"pageSettingsModalCancelButton\">";
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
        return "modals/page_settings.twig";
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
        return new Source("<div class=\"modal fade\" id=\"pageSettingsModal\" tabindex=\"-1\" aria-labelledby=\"pageSettingsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" id=\"pageSettingsModalDialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"pageSettingsModalLabel\">{% trans 'Page-related settings' %}</h5>
        <button type=\"button\" class=\"btn-close\" id=\"pageSettingsModalCloseButton\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"pageSettingsModalApplyButton\">{% trans 'Apply' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"pageSettingsModalCancelButton\">{% trans 'Cancel' %}</button>
      </div>
    </div>
  </div>
</div>
", "modals/page_settings.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/modals/page_settings.twig");
    }
}
