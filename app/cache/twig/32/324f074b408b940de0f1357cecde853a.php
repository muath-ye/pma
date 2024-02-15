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

/* filter.twig */
class __TwigTemplate_e30556f2002d4034e40ad231afc0f76d extends Template
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
        echo "<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
        // line 2
echo _gettext("Filters");
        echo "</div>
  <div class=\"card-body row row-cols-lg-auto gy-1 gx-3 align-items-center\">
    <label class=\"col-12 col-form-label\" for=\"filterText\">";
        // line 4
echo _gettext("Containing the word:");
        echo "</label>
    <div class=\"col-12\">
      <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["filter_value"]) || array_key_exists("filter_value", $context) ? $context["filter_value"] : (function () { throw new RuntimeError('Variable "filter_value" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
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
        return "filter.twig";
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
        return array (  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">{% trans 'Filters' %}</div>
  <div class=\"card-body row row-cols-lg-auto gy-1 gx-3 align-items-center\">
    <label class=\"col-12 col-form-label\" for=\"filterText\">{% trans 'Containing the word:' %}</label>
    <div class=\"col-12\">
      <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"{{ filter_value }}\">
    </div>
  </div>
</div>
", "filter.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/filter.twig");
    }
}
