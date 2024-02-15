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

/* file_select_options.twig */
class __TwigTemplate_b5c60384badf4da704936c933cfba3e0 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filesList"]) || array_key_exists("filesList", $context) ? $context["filesList"] : (function () { throw new RuntimeError('Variable "filesList" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 2
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "\"";
            if (($context["file"] == (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 2, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">
    ";
            // line 3
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "
  </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "file_select_options.twig";
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
        return array (  50 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for file in filesList %}
  <option value=\"{{ file }}\"{% if file == active %} selected=\"selected\"{% endif %}>
    {{ file }}
  </option>
{% endfor %}
", "file_select_options.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/file_select_options.twig");
    }
}
