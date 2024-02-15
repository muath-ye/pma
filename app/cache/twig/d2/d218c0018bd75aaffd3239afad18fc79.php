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

/* preview_sql.twig */
class __TwigTemplate_6a88387f6ac0a20be329116aa6afd493 extends Template
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
        echo "<div class=\"preview_sql\">
    ";
        // line 2
        if (twig_test_empty((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        ";
echo _gettext("No change");
            // line 4
            echo "    ";
        } elseif (is_iterable((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 6
                echo "            ";
                echo $this->env->getFunction('format_sql')->getCallable()($context["query"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            echo $this->env->getFunction('format_sql')->getCallable()((isset($context["query_data"]) || array_key_exists("query_data", $context) ? $context["query_data"] : (function () { throw new RuntimeError('Variable "query_data" does not exist.', 9, $this->source); })()));
            echo "
    ";
        }
        // line 11
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "preview_sql.twig";
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
        return array (  71 => 11,  65 => 9,  62 => 8,  53 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"preview_sql\">
    {% if query_data is empty %}
        {% trans 'No change' %}
    {% elseif query_data is iterable %}
        {% for query in query_data %}
            {{ format_sql(query) }}
        {% endfor %}
    {% else %}
        {{ format_sql(query_data) }}
    {% endif %}
</div>
", "preview_sql.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/preview_sql.twig");
    }
}
