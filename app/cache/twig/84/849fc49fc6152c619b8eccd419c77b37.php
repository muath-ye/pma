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

/* modals/index_dialog_modal.twig */
class __TwigTemplate_075648ebe47574f5faa735ca8cb952c0 extends Template
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
        echo "<div class=\"modal fade\" id=\"indexDialogModal\" tabindex=\"-1\" aria-labelledby=\"indexDialogModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"indexDialogModalLabel\">";
        // line 5
echo _gettext("Loading");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 6
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"indexDialogModalGoButton\">";
        // line 10
echo _gettext("Go");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-target=\"#indexDialogPreviewModal\" data-bs-toggle=\"modal\">";
        // line 11
echo _gettext("Preview SQL");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 12
echo _gettext("Close");
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"indexDialogPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"indexDialogPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"indexDialogPreviewModalLabel\">";
        // line 21
echo _gettext("Preview SQL");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 22
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
        // line 26
echo _gettext("Loading…");
        echo "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#indexDialogModal\" data-bs-toggle=\"modal\">";
        // line 30
echo _gettext("Go back");
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
        return "modals/index_dialog_modal.twig";
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
        return array (  92 => 30,  85 => 26,  78 => 22,  74 => 21,  62 => 12,  58 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"indexDialogModal\" tabindex=\"-1\" aria-labelledby=\"indexDialogModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"indexDialogModalLabel\">{% trans 'Loading' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"indexDialogModalGoButton\">{% trans 'Go' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-target=\"#indexDialogPreviewModal\" data-bs-toggle=\"modal\">{% trans 'Preview SQL' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"indexDialogPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"indexDialogPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"indexDialogPreviewModalLabel\">{% trans 'Preview SQL' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">{% trans 'Loading…' %}</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#indexDialogModal\" data-bs-toggle=\"modal\">{% trans 'Go back' %}</button>
      </div>
    </div>
  </div>
</div>
", "modals/index_dialog_modal.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/modals/index_dialog_modal.twig");
    }
}
