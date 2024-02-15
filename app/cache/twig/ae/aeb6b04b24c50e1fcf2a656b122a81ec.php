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

/* javascript/variables.twig */
class __TwigTemplate_eecb660c3da42c980aea36259795b503 extends Template
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
        // line 2
        echo "var firstDayOfCalendar = '";
        echo twig_escape_filter($this->env, (isset($context["first_day_of_calendar"]) || array_key_exists("first_day_of_calendar", $context) ? $context["first_day_of_calendar"] : (function () { throw new RuntimeError('Variable "first_day_of_calendar" does not exist.', 2, $this->source); })()), "js", null, true);
        echo "';
var themeImagePath = '";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath(), "js", null, true);
        echo "';
var mysqlDocTemplate = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFunction('get_mysql_docu_url')->getCallable()("%s"), "js", null, true);
        echo "';
var maxInputVars = ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["max_input_vars"]) || array_key_exists("max_input_vars", $context) ? $context["max_input_vars"] : (function () { throw new RuntimeError('Variable "max_input_vars" does not exist.', 5, $this->source); })()), "js", null, true);
        echo ";
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "javascript/variables.twig";
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
        return array (  50 => 5,  46 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape 'js' %}
var firstDayOfCalendar = '{{ first_day_of_calendar }}';
var themeImagePath = '{{ image() }}';
var mysqlDocTemplate = '{{ get_mysql_docu_url('%s') }}';
var maxInputVars = {{ max_input_vars }};
{% endautoescape %}
", "javascript/variables.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/javascript/variables.twig");
    }
}
