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

/* navigation/tree/fast_filter.twig */
class __TwigTemplate_e9f2d0063d014129d472580ab7d19e08 extends Template
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
        if ((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <li class=\"fast_filter";
            if ((isset($context["is_root_node"]) || array_key_exists("is_root_node", $context) ? $context["is_root_node"] : (function () { throw new RuntimeError('Variable "is_root_node" does not exist.', 2, $this->source); })())) {
                echo " db_fast_filter";
            }
            echo "\">
        <form class=\"ajax fast_filter\">
            ";
            // line 4
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 4, $this->source); })()));
            echo "
            <div class=\"input-group\">
              <input
                  class=\"searchClause form-control\"
                  type=\"text\"
                  name=\"";
            // line 9
            echo (((isset($context["is_root_node"]) || array_key_exists("is_root_node", $context) ? $context["is_root_node"] : (function () { throw new RuntimeError('Variable "is_root_node" does not exist.', 9, $this->source); })())) ? ("searchClause") : ("searchClause2"));
            echo "\"
                  accesskey=\"q\"
                  aria-label=\"";
            // line 11
echo _gettext("Type to filter these, Enter to search all");
            echo "\"
                  placeholder=\"";
            // line 12
echo _gettext("Type to filter these, Enter to search all");
            echo "\"
              >
              <button
                class=\"btn btn-outline-secondary searchClauseClear\"
                type=\"button\" aria-label=\"";
            // line 16
echo _gettext("Clear fast filter");
            echo "\">X</button>
            </div>
        </form>
    </li>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/fast_filter.twig";
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
        return array (  71 => 16,  64 => 12,  60 => 11,  55 => 9,  47 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if url_params %}
    <li class=\"fast_filter{% if is_root_node %} db_fast_filter{% endif %}\">
        <form class=\"ajax fast_filter\">
            {{ get_hidden_inputs(url_params) }}
            <div class=\"input-group\">
              <input
                  class=\"searchClause form-control\"
                  type=\"text\"
                  name=\"{{ is_root_node ? 'searchClause' : 'searchClause2' }}\"
                  accesskey=\"q\"
                  aria-label=\"{% trans 'Type to filter these, Enter to search all' %}\"
                  placeholder=\"{% trans 'Type to filter these, Enter to search all' %}\"
              >
              <button
                class=\"btn btn-outline-secondary searchClauseClear\"
                type=\"button\" aria-label=\"{% trans 'Clear fast filter' %}\">X</button>
            </div>
        </form>
    </li>
{% endif %}
", "navigation/tree/fast_filter.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/fast_filter.twig");
    }
}
