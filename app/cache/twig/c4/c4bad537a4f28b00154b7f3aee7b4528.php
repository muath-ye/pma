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

/* login/twofactor/key.twig */
class __TwigTemplate_7c9e7c5e2cddccb39921ffd96f7e8b27 extends Template
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
        $this->loadTemplate("login/twofactor/key-https-warning.twig", "login/twofactor/key.twig", 1)->display($context);
        // line 2
        echo "<div class=\"alert alert-danger\" role=\"alert\">
  <h4 class=\"alert-heading\">";
        // line 3
        echo twig_escape_filter($this->env, _gettext("Deprecated!"), "html", null, true);
        echo "</h4>
  <p>";
        // line 4
        echo twig_escape_filter($this->env, _gettext("The FIDO U2F API has been deprecated in favor of the Web Authentication API (WebAuthn)."), "html", null, true);
        echo "</p>
  <p class=\"mb-0\">
    ";
        // line 6
        echo twig_escape_filter($this->env, _gettext("You can still use Firefox to authenticate your account using the FIDO U2F API, however it's recommended that you use the WebAuthn authentication instead."), "html", null, true);
        echo "
  </p>
</div>
<p>
";
        // line 10
echo _gettext("Please connect your FIDO U2F device into your computer's USB port. Then confirm login on the device.");
        // line 11
        echo "</p>
<input id=\"u2f_authentication_response\" name=\"u2f_authentication_response\" value=\"\" type=\"hidden\" data-request=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/twofactor/key.twig";
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
        return array (  63 => 12,  60 => 11,  58 => 10,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'login/twofactor/key-https-warning.twig' %}
<div class=\"alert alert-danger\" role=\"alert\">
  <h4 class=\"alert-heading\">{{ 'Deprecated!'|trans }}</h4>
  <p>{{ 'The FIDO U2F API has been deprecated in favor of the Web Authentication API (WebAuthn).'|trans }}</p>
  <p class=\"mb-0\">
    {{ 'You can still use Firefox to authenticate your account using the FIDO U2F API, however it\\'s recommended that you use the WebAuthn authentication instead.'|trans }}
  </p>
</div>
<p>
{% trans \"Please connect your FIDO U2F device into your computer's USB port. Then confirm login on the device.\" %}
</p>
<input id=\"u2f_authentication_response\" name=\"u2f_authentication_response\" value=\"\" type=\"hidden\" data-request=\"{{ request }}\">
", "login/twofactor/key.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/key.twig");
    }
}
