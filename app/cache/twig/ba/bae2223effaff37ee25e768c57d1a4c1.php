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

/* table/delete/confirm.twig */
class __TwigTemplate_2aa3ce76546caaf1dd612fa1a45a8fec extends Template
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
        echo "<div class=\"container\">
  <form action=\"";
        // line 2
        echo $this->env->getFunction('url')->getCallable()("/table/delete/rows");
        echo "\" method=\"post\" class=\"card\">
    ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(["db" =>         // line 4
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 4, $this->source); })()), "table" =>         // line 5
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "selected" =>         // line 6
(isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 6, $this->source); })()), "original_sql_query" =>         // line 7
(isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 7, $this->source); })()), "fk_checks" => "0"]);
        // line 9
        echo "

    <div class=\"card-header\">
      ";
        // line 12
        echo $this->env->getFunction('get_icon')->getCallable()("s_really");
        echo "
      ";
        // line 13
echo _gettext("Do you really want to execute the following query?");
        // line 14
        echo "    </div>

    <div class=\"card-body\">
      <ul class=\"mb-3\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "          <li><code>DELETE FROM ";
            echo twig_escape_filter($this->env, $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 19, $this->source); })())), "html", null, true);
            echo " WHERE ";
            echo twig_escape_filter($this->env, $context["row"], "html", null, true);
            echo ";</code></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"checkForeignKeyCheckbox\" value=\"1\"";
        // line 24
        echo (((isset($context["is_foreign_key_check"]) || array_key_exists("is_foreign_key_check", $context) ? $context["is_foreign_key_check"] : (function () { throw new RuntimeError('Variable "is_foreign_key_check" does not exist.', 24, $this->source); })())) ? (" checked") : (""));
        echo ">
        <label class=\"form-check-label\" for=\"checkForeignKeyCheckbox\">";
        // line 25
echo _gettext("Enable foreign key checks");
        echo "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 30
echo _gettext("Yes");
        echo "\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 31
echo _gettext("No");
        echo "\">
    </div>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/delete/confirm.twig";
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
        return array (  103 => 31,  99 => 30,  91 => 25,  87 => 24,  82 => 21,  71 => 19,  67 => 18,  61 => 14,  59 => 13,  55 => 12,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <form action=\"{{ url('/table/delete/rows') }}\" method=\"post\" class=\"card\">
    {{ get_hidden_inputs({
      'db': db,
      'table': table,
      'selected': selected,
      'original_sql_query': sql_query,
      'fk_checks': '0'
    }) }}

    <div class=\"card-header\">
      {{ get_icon('s_really') }}
      {% trans 'Do you really want to execute the following query?' %}
    </div>

    <div class=\"card-body\">
      <ul class=\"mb-3\">
        {% for row in selected %}
          <li><code>DELETE FROM {{ backquote(table) }} WHERE {{ row }};</code></li>
        {% endfor %}
      </ul>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"checkForeignKeyCheckbox\" value=\"1\"{{ is_foreign_key_check ? ' checked' }}>
        <label class=\"form-check-label\" for=\"checkForeignKeyCheckbox\">{% trans 'Enable foreign key checks' %}</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"{% trans 'Yes' %}\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"{% trans 'No' %}\">
    </div>
  </form>
</div>
", "table/delete/confirm.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/delete/confirm.twig");
    }
}
