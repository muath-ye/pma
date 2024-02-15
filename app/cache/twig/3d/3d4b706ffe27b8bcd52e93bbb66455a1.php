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

/* display/results/comment_for_row.twig */
class __TwigTemplate_fd19c1d889e01d9aead62ca7e9d99278 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["comments_map"] ?? null), (isset($context["table_name"]) || array_key_exists("table_name", $context) ? $context["table_name"] : (function () { throw new RuntimeError('Variable "table_name" does not exist.', 1, $this->source); })()), [], "array", true, true, false, 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comments_map"] ?? null), (isset($context["table_name"]) || array_key_exists("table_name", $context) ? $context["table_name"] : (function () { throw new RuntimeError('Variable "table_name" does not exist.', 1, $this->source); })()), [], "array", false, true, false, 1), (isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 1, $this->source); })()), [], "array", true, true, false, 1))) {
            // line 2
            echo "  <br>
  <small class=\"text-body-secondary\" title=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 3, $this->source); })()), (isset($context["table_name"]) || array_key_exists("table_name", $context) ? $context["table_name"] : (function () { throw new RuntimeError('Variable "table_name" does not exist.', 3, $this->source); })()), [], "array", false, false, false, 3), (isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 3, $this->source); })()), [], "array", false, false, false, 3), "html", null, true);
            echo "\">
    ";
            // line 4
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 4, $this->source); })()), (isset($context["table_name"]) || array_key_exists("table_name", $context) ? $context["table_name"] : (function () { throw new RuntimeError('Variable "table_name" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4), (isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4)) > (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 4, $this->source); })()))) {
                // line 5
                echo "      ";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 5, $this->source); })()), (isset($context["table_name"]) || array_key_exists("table_name", $context) ? $context["table_name"] : (function () { throw new RuntimeError('Variable "table_name" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5), (isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5), 0, (isset($context["limit_chars"]) || array_key_exists("limit_chars", $context) ? $context["limit_chars"] : (function () { throw new RuntimeError('Variable "limit_chars" does not exist.', 5, $this->source); })())), "html", null, true);
                echo "…
    ";
            } else {
                // line 7
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 7, $this->source); })()), (isset($context["table_name"]) || array_key_exists("table_name", $context) ? $context["table_name"] : (function () { throw new RuntimeError('Variable "table_name" does not exist.', 7, $this->source); })()), [], "array", false, false, false, 7), (isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 7, $this->source); })()), [], "array", false, false, false, 7), "html", null, true);
                echo "
    ";
            }
            // line 9
            echo "  </small>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/comment_for_row.twig";
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
        return array (  60 => 9,  54 => 7,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if comments_map[table_name] is defined and comments_map[table_name][column_name] is defined %}
  <br>
  <small class=\"text-body-secondary\" title=\"{{ comments_map[table_name][column_name] }}\">
    {% if comments_map[table_name][column_name]|length > limit_chars %}
      {{ comments_map[table_name][column_name]|slice(0, limit_chars) }}…
    {% else %}
      {{ comments_map[table_name][column_name] }}
    {% endif %}
  </small>
{% endif %}
", "display/results/comment_for_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/comment_for_row.twig");
    }
}
