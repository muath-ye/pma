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

/* database/structure/overhead.twig */
class __TwigTemplate_f7a7d7a25524277055ced655ce7320fa extends Template
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
        echo "<a href=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/structure", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 1, $this->source); })()));
        echo "#showusage\" id=\"overhead\">
  <span>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["formatted_overhead"]) || array_key_exists("formatted_overhead", $context) ? $context["formatted_overhead"] : (function () { throw new RuntimeError('Variable "formatted_overhead" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</span>&nbsp;<span class=\"unit\">";
        echo twig_escape_filter($this->env, (isset($context["overhead_unit"]) || array_key_exists("overhead_unit", $context) ? $context["overhead_unit"] : (function () { throw new RuntimeError('Variable "overhead_unit" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</span>
</a>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/overhead.twig";
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
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ url('/table/structure', table_url_params) }}#showusage\" id=\"overhead\">
  <span>{{ formatted_overhead }}</span>&nbsp;<span class=\"unit\">{{ overhead_unit }}</span>
</a>
", "database/structure/overhead.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/overhead.twig");
    }
}
