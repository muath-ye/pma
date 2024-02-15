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
class __TwigTemplate_7bbd3b3077a2d08cc60dfd263b9a2b8a extends Template
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
        echo twig_escape_filter($this->env, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" role=\"alert\">";
        // line 2
        if ( !(isset($context["is_user_error"]) || array_key_exists("is_user_error", $context) ? $context["is_user_error"] : (function () { throw new RuntimeError('Variable "is_user_error" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "<p><strong>";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</strong> in ";
            echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new RuntimeError('Variable "line" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</p>";
        }
        // line 6
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })());
        // line 8
        if ( !(isset($context["is_user_error"]) || array_key_exists("is_user_error", $context) ? $context["is_user_error"] : (function () { throw new RuntimeError('Variable "is_user_error" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "<p class=\"mt-3\"><strong>Backtrace</strong></p>";
            // line 10
            echo (isset($context["formatted_backtrace"]) || array_key_exists("formatted_backtrace", $context) ? $context["formatted_backtrace"] : (function () { throw new RuntimeError('Variable "formatted_backtrace" does not exist.', 10, $this->source); })());
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
        return new Source("<div class=\"alert alert-{{ context }}\" role=\"alert\">
  {%- if not is_user_error -%}
    <p><strong>{{ type }}</strong> in {{ file }}#{{ line }}</p>
  {%- endif -%}

  {{ message|raw }}

  {%- if not is_user_error -%}
    <p class=\"mt-3\"><strong>Backtrace</strong></p>
    {{- formatted_backtrace|raw -}}
  {%- endif -%}
</div>
", "error/get_display.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/error/get_display.twig");
    }
}
