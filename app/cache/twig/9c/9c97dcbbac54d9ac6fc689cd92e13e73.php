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

/* error/get_display.twig */
class __TwigTemplate_570c3ffe5b606ac5128fd5d94d1700f8 extends Template
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
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, ($context["context"] ?? null), "html", null, true);
        echo "\" role=\"alert\">";
        // line 2
        if ( !($context["is_user_error"] ?? null)) {
            // line 3
            echo "<p><strong>";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "</strong> in ";
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, ($context["line"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 6
        echo ($context["message"] ?? null);
        // line 8
        if ( !($context["is_user_error"] ?? null)) {
            // line 9
            echo "<p class=\"mt-3\"><strong>Backtrace</strong></p>";
            // line 10
            echo ($context["formatted_backtrace"] ?? null);
        }
        // line 12
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "error/get_display.twig";
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
        return array (  61 => 12,  58 => 10,  56 => 9,  54 => 8,  52 => 6,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error/get_display.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/error/get_display.twig");
    }
}
