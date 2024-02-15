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

/* navigation/tree/path.twig */
class __TwigTemplate_76eb2bfca70b56f0428eb05d11b2154e extends Template
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
        echo "<div class='list_container hide'>
  <ul";
        // line 2
        echo (((isset($context["has_search_results"]) || array_key_exists("has_search_results", $context) ? $context["has_search_results"] : (function () { throw new RuntimeError('Variable "has_search_results" does not exist.', 2, $this->source); })())) ? (" class=\"search_results\"") : (""));
        echo ">
    ";
        // line 3
        echo (isset($context["list_content"]) || array_key_exists("list_content", $context) ? $context["list_content"] : (function () { throw new RuntimeError('Variable "list_content" does not exist.', 3, $this->source); })());
        echo "
  </ul>

  ";
        // line 6
        if ( !(isset($context["is_tree"]) || array_key_exists("is_tree", $context) ? $context["is_tree"] : (function () { throw new RuntimeError('Variable "is_tree" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <span class='hide loaded_db'>";
            echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["parent_name"]) || array_key_exists("parent_name", $context) ? $context["parent_name"] : (function () { throw new RuntimeError('Variable "parent_name" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "</span>
    ";
            // line 8
            if (twig_test_empty((isset($context["list_content"]) || array_key_exists("list_content", $context) ? $context["list_content"] : (function () { throw new RuntimeError('Variable "list_content" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "      <div>";
echo _gettext("No tables found in database.");
                echo "</div>
    ";
            }
            // line 11
            echo "  ";
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
        return "navigation/tree/path.twig";
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
        return array (  68 => 12,  65 => 11,  59 => 9,  57 => 8,  52 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='list_container hide'>
  <ul{{ has_search_results ? ' class=\"search_results\"' }}>
    {{ list_content|raw }}
  </ul>

  {% if not is_tree %}
    <span class='hide loaded_db'>{{ parent_name|url_encode }}</span>
    {% if list_content is empty %}
      <div>{% trans 'No tables found in database.' %}</div>
    {% endif %}
  {% endif %}
</div>
", "navigation/tree/path.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/path.twig");
    }
}
