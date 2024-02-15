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

/* login/header.twig */
class __TwigTemplate_0290b0d052dfff72ed6b052b0066d718 extends Template
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
        if ((isset($context["session_expired"]) || array_key_exists("session_expired", $context) ? $context["session_expired"] : (function () { throw new RuntimeError('Variable "session_expired" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "  <div id=\"modalOverlay\">
";
        }
        // line 4
        echo "<div class=\"container";
        echo (((isset($context["session_expired"]) || array_key_exists("session_expired", $context) ? $context["session_expired"] : (function () { throw new RuntimeError('Variable "session_expired" does not exist.', 4, $this->source); })())) ? (" modal_form") : (""));
        echo "\">
<div class=\"row\">
<div class=\"col-12\">
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()("https://www.phpmyadmin.net/"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"logo\" tabindex=\"-1\">
<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("logo_right.png", "pma_logo.png"), "html", null, true);
        echo "\" id=\"imLogo\" name=\"imLogo\" alt=\"phpMyAdmin\" border=\"0\">
</a>
<h1>";
        // line 10
        echo twig_sprintf(_gettext("Welcome to %s"), "<bdo dir=\"ltr\" lang=\"en\">phpMyAdmin</bdo>");
        echo "</h1>

<noscript>
";
        // line 13
        echo $this->env->getFilter('error')->getCallable()(_gettext("Javascript must be enabled past this point!"));
        echo "
</noscript>

<div class=\"hide\" id=\"js-https-mismatch\">
";
        // line 17
        echo $this->env->getFilter('error')->getCallable()(_gettext("There is a mismatch between HTTPS indicated on the server and client. This can lead to a non working phpMyAdmin or a security risk. Please fix your server configuration to indicate HTTPS properly."));
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/header.twig";
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
        return array (  72 => 17,  65 => 13,  59 => 10,  54 => 8,  50 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if session_expired %}
  <div id=\"modalOverlay\">
{% endif %}
<div class=\"container{{ session_expired ? ' modal_form' }}\">
<div class=\"row\">
<div class=\"col-12\">
<a href=\"{{ 'https://www.phpmyadmin.net/'|link }}\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"logo\" tabindex=\"-1\">
<img src=\"{{ image('logo_right.png', 'pma_logo.png') }}\" id=\"imLogo\" name=\"imLogo\" alt=\"phpMyAdmin\" border=\"0\">
</a>
<h1>{{ 'Welcome to %s'|trans|format('<bdo dir=\"ltr\" lang=\"en\">phpMyAdmin</bdo>')|raw }}</h1>

<noscript>
{{ \"Javascript must be enabled past this point!\"|trans|error }}
</noscript>

<div class=\"hide\" id=\"js-https-mismatch\">
{{ \"There is a mismatch between HTTPS indicated on the server and client. This can lead to a non working phpMyAdmin or a security risk. Please fix your server configuration to indicate HTTPS properly.\"|trans|error }}
</div>
", "login/header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/header.twig");
    }
}
