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

/* login/twofactor/webauthn_creation.twig */
class __TwigTemplate_ee738cbd897415d7796d94f821b09b97 extends Template
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
        echo "<p class=\"card-text\">";
        echo twig_escape_filter($this->env, _gettext("Please connect your WebAuthn/FIDO2 device. Then confirm registration on the device."), "html", null, true);
        echo "</p>

<input type=\"hidden\" id=\"webauthn_creation_response\" name=\"webauthn_creation_response\" value=\"\" data-creation-options=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["creation_options"]) || array_key_exists("creation_options", $context) ? $context["creation_options"] : (function () { throw new RuntimeError('Variable "creation_options" does not exist.', 3, $this->source); })()), "html_attr");
        echo "\">
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/twofactor/webauthn_creation.twig";
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
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"card-text\">{{ 'Please connect your WebAuthn/FIDO2 device. Then confirm registration on the device.'|trans }}</p>

<input type=\"hidden\" id=\"webauthn_creation_response\" name=\"webauthn_creation_response\" value=\"\" data-creation-options=\"{{ creation_options|e('html_attr') }}\">
", "login/twofactor/webauthn_creation.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/webauthn_creation.twig");
    }
}
