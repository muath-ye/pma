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

/* config/form_display/group_header.twig */
class __TwigTemplate_ba2ecfa75411ea40c0415c5677b88278 extends Template
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
        echo "<tr class=\"group-header group-header-";
        echo twig_escape_filter($this->env, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <th colspan=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["colspan"]) || array_key_exists("colspan", $context) ? $context["colspan"] : (function () { throw new RuntimeError('Variable "colspan" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["header_text"]) || array_key_exists("header_text", $context) ? $context["header_text"] : (function () { throw new RuntimeError('Variable "header_text" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
    </th>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "config/form_display/group_header.twig";
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
        return array (  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"group-header group-header-{{ group }}\">
    <th colspan=\"{{ colspan }}\">
        {{ header_text }}
    </th>
</tr>
", "config/form_display/group_header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/group_header.twig");
    }
}
