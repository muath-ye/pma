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

/* database/designer/schema_export.twig */
class __TwigTemplate_cf255862761d3959ba6593999cd0aee7 extends Template
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
        echo "<form method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/schema-export");
        echo "\" class=\"disableAjax\" id=\"id_export_pages\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"page_number\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">

  <div class=\"mb-3\">
    <label class=\"form-label\" for=\"plugins\">";
        // line 6
echo _gettext("Select export relational type:");
        echo "</label>
    <select class=\"form-select\" id=\"plugins\" name=\"export_type\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins_choice"]) || array_key_exists("plugins_choice", $context) ? $context["plugins_choice"] : (function () { throw new RuntimeError('Variable "plugins_choice" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 9
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 9)) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 9), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </select>
  </div>

  <div>
    ";
        // line 15
        echo (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })());
        echo "
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/designer/schema_export.twig";
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
        return array (  80 => 15,  74 => 11,  61 => 9,  57 => 8,  52 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ url('/schema-export') }}\" class=\"disableAjax\" id=\"id_export_pages\">
  {{ get_hidden_inputs(db) }}
  <input type=\"hidden\" name=\"page_number\" value=\"{{ page }}\">

  <div class=\"mb-3\">
    <label class=\"form-label\" for=\"plugins\">{% trans 'Select export relational type:' %}</label>
    <select class=\"form-select\" id=\"plugins\" name=\"export_type\">
      {% for option in plugins_choice %}
        <option value=\"{{ option.name }}\"{{ option.is_selected ? ' selected' }}>{{ option.text }}</option>
      {% endfor %}
    </select>
  </div>

  <div>
    {{ options|raw }}
  </div>
</form>
", "database/designer/schema_export.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/schema_export.twig");
    }
}
