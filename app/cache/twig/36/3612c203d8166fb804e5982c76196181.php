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

/* server/user_groups/tab_list.twig */
class __TwigTemplate_4bd933d3f0801d575989ff7685674d85 extends Template
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
        echo "<fieldset class=\"mb-3 col\">
  <legend>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</legend>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_details"]) || array_key_exists("tab_details", $context) ? $context["tab_details"] : (function () { throw new RuntimeError('Variable "tab_details" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab_detail"]) {
            // line 4
            echo "    <div class=\"form-check\">
      <input class=\"form-check-input checkall\" type=\"checkbox\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["tab_detail"], "in_array", [], "any", false, false, false, 5);
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_detail"], "tab", [], "any", false, false, false, 5), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_detail"], "tab", [], "any", false, false, false, 5), "html", null, true);
            echo "\" value=\"Y\">
      <label class=\"form-check-label\" for=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_detail"], "tab", [], "any", false, false, false, 6), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_detail"], "tab_name", [], "any", false, false, false, 6), "html", null, true);
            echo "</label>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</fieldset>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/user_groups/tab_list.twig";
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
        return array (  76 => 9,  63 => 6,  51 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"mb-3 col\">
  <legend>{{ title }}</legend>
  {% for tab_detail in tab_details %}
    <div class=\"form-check\">
      <input class=\"form-check-input checkall\" type=\"checkbox\"{{ tab_detail.in_array|raw }} name=\"{{ level }}_{{ tab_detail.tab }}\" id=\"{{ level }}_{{ tab_detail.tab }}\" value=\"Y\">
      <label class=\"form-check-label\" for=\"{{ level }}_{{ tab_detail.tab }}\">{{ tab_detail.tab_name }}</label>
    </div>
  {% endfor %}
</fieldset>
", "server/user_groups/tab_list.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/tab_list.twig");
    }
}
