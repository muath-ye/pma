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

/* preferences/autoload.twig */
class __TwigTemplate_e01b995f6f89df5f42d29246c7f697ac extends Template
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
        echo "<div id=\"prefs_autoload\" class=\"alert alert-primary d-print-none hide\" role=\"alert\">
    <form action=\"";
        // line 2
        echo $this->env->getFunction('url')->getCallable()("/preferences/manage");
        echo "\" method=\"post\" class=\"disableAjax\">
        ";
        // line 3
        echo (isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 3, $this->source); })());
        echo "
        <input type=\"hidden\" name=\"json\" value=\"\">
        <input type=\"hidden\" name=\"submit_import\" value=\"1\">
        <input type=\"hidden\" name=\"return_url\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["return_url"]) || array_key_exists("return_url", $context) ? $context["return_url"] : (function () { throw new RuntimeError('Variable "return_url" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 7
echo _gettext("Your browser has phpMyAdmin configuration for this domain. Would you like to import it for current session?");
        // line 10
        echo "        <br>
        <a href=\"#yes\">";
        // line 11
echo _gettext("Yes");
        echo "</a>
        / <a href=\"#no\">";
        // line 12
echo _gettext("No");
        echo "</a>
        / <a href=\"#delete\">";
        // line 13
echo _gettext("Delete settings");
        echo "</a>
    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "preferences/autoload.twig";
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
        return array (  67 => 13,  63 => 12,  59 => 11,  56 => 10,  54 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"prefs_autoload\" class=\"alert alert-primary d-print-none hide\" role=\"alert\">
    <form action=\"{{ url('/preferences/manage') }}\" method=\"post\" class=\"disableAjax\">
        {{ hidden_inputs|raw }}
        <input type=\"hidden\" name=\"json\" value=\"\">
        <input type=\"hidden\" name=\"submit_import\" value=\"1\">
        <input type=\"hidden\" name=\"return_url\" value=\"{{ return_url }}\">
        {% trans %}
            Your browser has phpMyAdmin configuration for this domain. Would you like to import it for current session?
        {% endtrans %}
        <br>
        <a href=\"#yes\">{% trans \"Yes\" %}</a>
        / <a href=\"#no\">{% trans \"No\" %}</a>
        / <a href=\"#delete\">{% trans \"Delete settings\" %}</a>
    </form>
</div>
", "preferences/autoload.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/preferences/autoload.twig");
    }
}
