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

/* table/browse_foreigners/column_element.twig */
class __TwigTemplate_4d675d0a4fb82764c09a704a64675425 extends Template
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
        echo "<td";
        echo (((isset($context["nowrap"]) || array_key_exists("nowrap", $context) ? $context["nowrap"] : (function () { throw new RuntimeError('Variable "nowrap" does not exist.', 1, $this->source); })())) ? (" class=\"text-nowrap\"") : (""));
        echo ">
    ";
        // line 2
        echo (((isset($context["is_selected"]) || array_key_exists("is_selected", $context) ? $context["is_selected"] : (function () { throw new RuntimeError('Variable "is_selected" does not exist.', 2, $this->source); })())) ? ("<strong>") : (""));
        // line 3
        echo "<a class=\"foreign_value\" data-key=\"";
        echo twig_escape_filter($this->env, (isset($context["keyname"]) || array_key_exists("keyname", $context) ? $context["keyname"] : (function () { throw new RuntimeError('Variable "keyname" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" href=\"#\" title=\"";
        // line 4
echo _gettext("Use this value");
        (( !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()))) ? (print (twig_escape_filter($this->env, (": " . (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })())), "html", null, true))) : (print ("")));
        echo "\">";
        // line 5
        if ((isset($context["nowrap"]) || array_key_exists("nowrap", $context) ? $context["nowrap"] : (function () { throw new RuntimeError('Variable "nowrap" does not exist.', 5, $this->source); })())) {
            // line 6
            echo twig_escape_filter($this->env, (isset($context["keyname"]) || array_key_exists("keyname", $context) ? $context["keyname"] : (function () { throw new RuntimeError('Variable "keyname" does not exist.', 6, $this->source); })()), "html", null, true);
        } else {
            // line 8
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 8, $this->source); })()), "html", null, true);
        }
        // line 10
        echo "</a>";
        // line 11
        echo (((isset($context["is_selected"]) || array_key_exists("is_selected", $context) ? $context["is_selected"] : (function () { throw new RuntimeError('Variable "is_selected" does not exist.', 11, $this->source); })())) ? ("</strong>") : (""));
        echo "
</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/browse_foreigners/column_element.twig";
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
        return array (  62 => 11,  60 => 10,  57 => 8,  54 => 6,  52 => 5,  48 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<td{{ nowrap ? ' class=\"text-nowrap\"' }}>
    {{ is_selected ? '<strong>' -}}
        <a class=\"foreign_value\" data-key=\"{{ keyname }}\" href=\"#\" title=\"
            {%- trans 'Use this value' %}{{ title is not empty ? ': ' ~ title }}\">
            {%- if nowrap -%}
                {{- keyname -}}
            {%- else -%}
                {{- description -}}
            {%- endif -%}
        </a>
    {{- is_selected ? '</strong>' }}
</td>
", "table/browse_foreigners/column_element.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/browse_foreigners/column_element.twig");
    }
}
