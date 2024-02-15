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

/* table/page_with_secondary_tabs.twig */
class __TwigTemplate_b7e559572c8f732a45883c439077324a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 1, $this->source); })()), "relationFeature", [], "any", false, false, false, 1)) || (isset($context["is_foreign_key_supported"]) || array_key_exists("is_foreign_key_supported", $context) ? $context["is_foreign_key_supported"] : (function () { throw new RuntimeError('Variable "is_foreign_key_supported" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "  <ul class=\"nav nav-pills m-2 d-print-none\">
    <li class=\"nav-item\">
      <a href=\"";
            // line 4
            echo $this->env->getFunction('url')->getCallable()("/table/structure", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 4, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 4, $this->source); })())]);
            echo "\" id=\"table_structure_id\" class=\"nav-link";
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 4, $this->source); })()) == "/table/structure")) ? (" active") : (""));
            echo " disableAjax\">
        ";
            // line 5
            echo $this->env->getFunction('get_icon')->getCallable()("b_props", _gettext("Table structure"), true);
            echo "
      </a>
    </li>

    <li class=\"nav-item\">
      <a href=\"";
            // line 10
            echo $this->env->getFunction('url')->getCallable()("/table/relation", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 10, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })())]);
            echo "\" id=\"table_relation_id\" class=\"nav-link";
            echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 10, $this->source); })()) == "/table/relation")) ? (" active") : (""));
            echo " disableAjax\">
        ";
            // line 11
            echo $this->env->getFunction('get_icon')->getCallable()("b_relations", _gettext("Relation view"), true);
            echo "
      </a>
    </li>
  </ul>
";
        }
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('PhpMyAdmin\FlashMessages')->getMessages());
        foreach ($context['_seq'] as $context["flash_key"] => $context["flash_messages"]) {
            // line 18
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 19
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["flash_key"], "html", null, true);
                echo "\" role=\"alert\">
      ";
                // line 20
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flash_key'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div id=\"structure_content\">
  ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/page_with_secondary_tabs.twig";
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
        return array (  113 => 26,  108 => 27,  106 => 26,  102 => 24,  89 => 20,  84 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 11,  58 => 10,  50 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if relation_parameters.relationFeature is not null or is_foreign_key_supported %}
  <ul class=\"nav nav-pills m-2 d-print-none\">
    <li class=\"nav-item\">
      <a href=\"{{ url('/table/structure', {'db': db, 'table': table}) }}\" id=\"table_structure_id\" class=\"nav-link{{ route == '/table/structure' ? ' active' }} disableAjax\">
        {{ get_icon('b_props', 'Table structure'|trans, true) }}
      </a>
    </li>

    <li class=\"nav-item\">
      <a href=\"{{ url('/table/relation', {'db': db, 'table': table}) }}\" id=\"table_relation_id\" class=\"nav-link{{ route == '/table/relation' ? ' active' }} disableAjax\">
        {{ get_icon('b_relations', 'Relation view'|trans, true) }}
      </a>
    </li>
  </ul>
{% endif %}

{% for flash_key, flash_messages in flash() %}
  {% for flash_message in flash_messages %}
    <div class=\"alert alert-{{ flash_key }}\" role=\"alert\">
      {{ flash_message }}
    </div>
  {% endfor %}
{% endfor %}

<div id=\"structure_content\">
  {% block content %}{% endblock %}
</div>
", "table/page_with_secondary_tabs.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/page_with_secondary_tabs.twig");
    }
}
