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

/* display/results/row_data.twig */
class __TwigTemplate_d5c32c356221825002ce61a7c0cfea1f extends Template
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
        echo "<td data-decimals=\"";
        echo twig_escape_filter($this->env, (isset($context["decimals"]) || array_key_exists("decimals", $context) ? $context["decimals"] : (function () { throw new RuntimeError('Variable "decimals" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"";
        if ( !twig_test_empty((isset($context["original_length"]) || array_key_exists("original_length", $context) ? $context["original_length"] : (function () { throw new RuntimeError('Variable "original_length" does not exist.', 1, $this->source); })()))) {
            echo " data-originallength=\"";
            echo twig_escape_filter($this->env, (isset($context["original_length"]) || array_key_exists("original_length", $context) ? $context["original_length"] : (function () { throw new RuntimeError('Variable "original_length" does not exist.', 1, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " class=\"";
        echo twig_escape_filter($this->env, (isset($context["td_class"]) || array_key_exists("td_class", $context) ? $context["td_class"] : (function () { throw new RuntimeError('Variable "td_class" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">";
        // line 2
        echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })());
        // line 3
        echo "</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/row_data.twig";
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
        return array (  53 => 3,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<td data-decimals=\"{{ decimals }}\" data-type=\"{{ type }}\"{% if original_length is not empty %} data-originallength=\"{{ original_length }}\"{% endif %} class=\"{{ td_class }}\">
  {{- value|raw -}}
</td>
", "display/results/row_data.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/row_data.twig");
    }
}
