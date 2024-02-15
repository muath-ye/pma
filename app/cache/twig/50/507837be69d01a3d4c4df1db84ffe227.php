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

/* table/structure/drop_confirm.twig */
class __TwigTemplate_4d73fca0fd1d47921fadd2426be24a0e extends Template
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
  <h1 class=\"mt-3 mb-4\">";
        // line 2
echo _gettext("Dropping columns from the table");
        echo "</h1>

  <form action=\"";
        // line 4
        echo $this->env->getFunction('url')->getCallable()("/table/structure/drop");
        echo "\" method=\"post\" class=\"disableAjax card border-danger\">
    ";
        // line 5
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 5, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "selected" => (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 5, $this->source); })())]);
        echo "

    <div class=\"card-header\">";
        // line 7
echo _gettext("Do you really want to execute the following query?");
        echo "</div>
    <div class=\"card-body\">
      <code>
        ALTER TABLE ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('backquote')->getCallable()((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "<br>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 12
            echo "          &nbsp;&nbsp;DROP ";
            echo twig_escape_filter($this->env, $this->env->getFunction('backquote')->getCallable()($context["field"]), "html", null, true);
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) {
                echo ";";
            } else {
                echo ",<br>";
            }
            // line 14
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </code>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 19
echo _gettext("Yes");
        echo "\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 20
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
        return "table/structure/drop_confirm.twig";
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
        return array (  114 => 20,  110 => 19,  104 => 15,  90 => 14,  84 => 13,  81 => 12,  64 => 11,  60 => 10,  54 => 7,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h1 class=\"mt-3 mb-4\">{% trans 'Dropping columns from the table' %}</h1>

  <form action=\"{{ url('/table/structure/drop') }}\" method=\"post\" class=\"disableAjax card border-danger\">
    {{ get_hidden_inputs({'db': db, 'table': table, 'selected': fields}) }}

    <div class=\"card-header\">{% trans 'Do you really want to execute the following query?' %}</div>
    <div class=\"card-body\">
      <code>
        ALTER TABLE {{ backquote(table) }}<br>
        {% for field in fields %}
          &nbsp;&nbsp;DROP {{ backquote(field) }}
          {%- if loop.last %};{% else %},<br>{% endif %}
        {% endfor %}
      </code>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"{% trans 'Yes' %}\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"{% trans 'No' %}\">
    </div>
  </form>
</div>
", "table/structure/drop_confirm.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/structure/drop_confirm.twig");
    }
}
