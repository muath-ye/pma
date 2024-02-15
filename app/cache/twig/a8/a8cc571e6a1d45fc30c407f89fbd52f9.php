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

/* login/twofactor/application.twig */
class __TwigTemplate_6a2dbd40e656659ddd666a98b1f63f0a extends Template
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
        echo "<div class=\"mb-3\">
  <label class=\"form-label\" for=\"2faCodeInput\">";
echo _gettext("Authentication code:");
        // line 2
        echo "</label>
  <input class=\"form-control\" id=\"2faCodeInput\" type=\"text\" name=\"2fa_code\" autocomplete=\"off\" autofocus>
</div>
";
echo _gettext("Open the two-factor authentication app on your device to view your authentication code and verify your identity.");
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/twofactor/application.twig";
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
        return new Source("", "login/twofactor/application.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\login\\twofactor\\application.twig");
    }
}
