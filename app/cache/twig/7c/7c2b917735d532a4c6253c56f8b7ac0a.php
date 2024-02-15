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

/* navigation/tree/database_select.twig */
class __TwigTemplate_15ea5f991f3f4d3fdfc67f0c0411c874 extends Template
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
        echo (isset($context["quick_warp"]) || array_key_exists("quick_warp", $context) ? $context["quick_warp"] : (function () { throw new RuntimeError('Variable "quick_warp" does not exist.', 1, $this->source); })());
        echo "

<div id=\"pma_navigation_select_database\">
  ";
        // line 4
        echo (isset($context["list_navigator"]) || array_key_exists("list_navigator", $context) ? $context["list_navigator"] : (function () { throw new RuntimeError('Variable "list_navigator" does not exist.', 4, $this->source); })());
        echo "

  <div id=\"pma_navigation_db_select\">
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["database_url"]) || array_key_exists("database_url", $context) ? $context["database_url"] : (function () { throw new RuntimeError('Variable "database_url" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" method=\"get\">
      ";
        // line 8
        echo $this->env->getFunction('get_hidden_fields')->getCallable()(["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 8, $this->source); })())]);
        echo "

      <select name=\"db\" class=\"hide\" id=\"navi_db_select\" aria-label=\"";
        // line 10
echo _gettext("Databases");
        echo "\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 12
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "\"
            data-apath=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 13), "apath", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
            data-vpath=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 14), "vpath", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
            data-pos=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 15), "pos", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
            ";
            // line 16
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "isSelected", [], "any", false, false, false, 16)) ? (" selected") : (""));
            echo ">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 17), "html", null, true);
            // line 18
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </select>
    </form>
  </div>
</div>

<div id=\"pma_navigation_tree_content\">
  <ul>
    ";
        // line 27
        echo (isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new RuntimeError('Variable "nodes" does not exist.', 27, $this->source); })());
        echo "
  </ul>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/database_select.twig";
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
        return array (  106 => 27,  97 => 20,  90 => 18,  88 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  66 => 12,  62 => 11,  58 => 10,  53 => 8,  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ quick_warp|raw }}

<div id=\"pma_navigation_select_database\">
  {{ list_navigator|raw }}

  <div id=\"pma_navigation_db_select\">
    <form action=\"{{ database_url }}\" method=\"get\">
      {{ get_hidden_fields({'server': server}) }}

      <select name=\"db\" class=\"hide\" id=\"navi_db_select\" aria-label=\"{% trans 'Databases' %}\">
        {% for option in options %}
          <option value=\"{{ option.name }}\" title=\"{{ option.title }}\"
            data-apath=\"{{ option.data.apath }}\"
            data-vpath=\"{{ option.data.vpath }}\"
            data-pos=\"{{ option.data.pos }}\"
            {{ option.isSelected ? \" selected\" : \"\" }}>
              {{- option.name -}}
            </option>
        {% endfor %}
      </select>
    </form>
  </div>
</div>

<div id=\"pma_navigation_tree_content\">
  <ul>
    {{ nodes|raw }}
  </ul>
</div>
", "navigation/tree/database_select.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/database_select.twig");
    }
}
