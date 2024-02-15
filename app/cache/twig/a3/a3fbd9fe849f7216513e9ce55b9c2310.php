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

/* modals/preview_sql_confirmation.twig */
class __TwigTemplate_5b3812754950ec75a7d609b90b1c8a3e extends Template
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
        echo "<div class=\"modal fade\" id=\"previewSqlConfirmModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlConfirmModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlConfirmModalLabel\">";
        // line 5
echo _gettext("Loading");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 6
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body preview_sql\">
        <code class=\"sql\">
          <pre id=\"previewSqlConfirmCode\"></pre>
        </code>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLConfirmOkButton\">";
        // line 14
echo _gettext("OK");
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 15
echo _gettext("Close");
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
        return "modals/preview_sql_confirmation.twig";
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
        return array (  62 => 15,  58 => 14,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"previewSqlConfirmModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlConfirmModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlConfirmModalLabel\">{% trans 'Loading' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body preview_sql\">
        <code class=\"sql\">
          <pre id=\"previewSqlConfirmCode\"></pre>
        </code>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLConfirmOkButton\">{% trans 'OK' %}</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>
", "modals/preview_sql_confirmation.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/modals/preview_sql_confirmation.twig");
    }
}
