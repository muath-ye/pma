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

/* table/browse_foreigners/show_all.twig */
class __TwigTemplate_f9cb24a7b0bfca48c5f087e926ea974c extends Template
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
        if ((is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["foreign_data"]) || array_key_exists("foreign_data", $context) ? $context["foreign_data"] : (function () { throw new RuntimeError('Variable "foreign_data" does not exist.', 1, $this->source); })()), "disp_row", [], "any", false, false, false, 1)) && (        // line 2
(isset($context["show_all"]) || array_key_exists("show_all", $context) ? $context["show_all"] : (function () { throw new RuntimeError('Variable "show_all" does not exist.', 2, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["foreign_data"]) || array_key_exists("foreign_data", $context) ? $context["foreign_data"] : (function () { throw new RuntimeError('Variable "foreign_data" does not exist.', 2, $this->source); })()), "the_total", [], "any", false, false, false, 2) > (isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 2, $this->source); })()))))) {
            // line 3
            echo "    <input class=\"btn btn-secondary\" type=\"submit\" id=\"foreign_showAll\" name=\"foreign_showAll\" value=\"";
            // line 4
echo _gettext("Show all");
            echo "\">
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/browse_foreigners/show_all.twig";
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
        return array (  42 => 4,  40 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if foreign_data.disp_row is iterable and
    (show_all and foreign_data.the_total > max_rows) %}
    <input class=\"btn btn-secondary\" type=\"submit\" id=\"foreign_showAll\" name=\"foreign_showAll\" value=\"
        {%- trans 'Show all' %}\">
{% endif %}
", "table/browse_foreigners/show_all.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/browse_foreigners/show_all.twig");
    }
}
