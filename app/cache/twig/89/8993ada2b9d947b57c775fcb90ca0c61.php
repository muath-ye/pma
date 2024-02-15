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

/* recent_favorite_table_no_tables.twig */
class __TwigTemplate_8d0ef595a58adcaff99d712d938a3126 extends Template
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
        echo "<li class=\"warp_link\">
    ";
        // line 2
        if ((isset($context["is_recent"]) || array_key_exists("is_recent", $context) ? $context["is_recent"] : (function () { throw new RuntimeError('Variable "is_recent" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        ";
echo _gettext("There are no recent tables.");
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
echo _gettext("There are no favorite tables.");
            // line 6
            echo "    ";
        }
        // line 7
        echo "</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recent_favorite_table_no_tables.twig";
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
        return array (  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"warp_link\">
    {% if is_recent %}
        {% trans 'There are no recent tables.' %}
    {% else %}
        {% trans 'There are no favorite tables.' %}
    {% endif %}
</li>
", "recent_favorite_table_no_tables.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/recent_favorite_table_no_tables.twig");
    }
}
