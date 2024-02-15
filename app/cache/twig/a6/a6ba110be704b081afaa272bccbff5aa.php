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

/* server/status/base.twig */
class __TwigTemplate_4b8b2127b523b8369f7f6fea8eae8853 extends Template
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
        echo "<div class=\"container-fluid\">
  <div class=\"row d-print-none\">
    <ul class=\"nav nav-pills m-2\">
      <li class=\"nav-item\">
        <a href=\"";
        // line 5
        echo $this->env->getFunction('url')->getCallable()("/server/status");
        echo "\" class=\"nav-link";
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 5, $this->source); })()) == "status")) ? (" active") : (""));
        echo " disableAjax\">
          ";
        // line 6
echo _gettext("Server");
        // line 7
        echo "        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 10
        echo $this->env->getFunction('url')->getCallable()("/server/status/processes");
        echo "\" class=\"nav-link";
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 10, $this->source); })()) == "processes")) ? (" active") : (""));
        echo " disableAjax\">
          ";
        // line 11
echo _gettext("Processes");
        // line 12
        echo "        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 15
        echo $this->env->getFunction('url')->getCallable()("/server/status/queries");
        echo "\" class=\"nav-link";
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 15, $this->source); })()) == "queries")) ? (" active") : (""));
        echo " disableAjax\">
          ";
        // line 16
echo _gettext("Query statistics");
        // line 17
        echo "        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 20
        echo $this->env->getFunction('url')->getCallable()("/server/status/variables");
        echo "\" class=\"nav-link";
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 20, $this->source); })()) == "variables")) ? (" active") : (""));
        echo " disableAjax\">
          ";
        // line 21
echo _gettext("All status variables");
        // line 22
        echo "        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 25
        echo $this->env->getFunction('url')->getCallable()("/server/status/monitor");
        echo "\" class=\"nav-link";
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 25, $this->source); })()) == "monitor")) ? (" active") : (""));
        echo " disableAjax\">
          ";
        // line 26
echo _gettext("Monitor");
        // line 27
        echo "        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 30
        echo $this->env->getFunction('url')->getCallable()("/server/status/advisor");
        echo "\" class=\"nav-link";
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 30, $this->source); })()) == "advisor")) ? (" active") : (""));
        echo " disableAjax\">
          ";
        // line 31
echo _gettext("Advisor");
        // line 32
        echo "        </a>
      </li>
    </ul>
  </div>

  ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "</div>
";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/status/base.twig";
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
        return array (  131 => 37,  126 => 38,  124 => 37,  117 => 32,  115 => 31,  109 => 30,  104 => 27,  102 => 26,  96 => 25,  91 => 22,  89 => 21,  83 => 20,  78 => 17,  76 => 16,  70 => 15,  65 => 12,  63 => 11,  57 => 10,  52 => 7,  50 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <div class=\"row d-print-none\">
    <ul class=\"nav nav-pills m-2\">
      <li class=\"nav-item\">
        <a href=\"{{ url('/server/status') }}\" class=\"nav-link{{ active == 'status' ? ' active' }} disableAjax\">
          {% trans 'Server' %}
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ url('/server/status/processes') }}\" class=\"nav-link{{ active == 'processes' ? ' active' }} disableAjax\">
          {% trans 'Processes' %}
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ url('/server/status/queries') }}\" class=\"nav-link{{ active == 'queries' ? ' active' }} disableAjax\">
          {% trans 'Query statistics' %}
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ url('/server/status/variables') }}\" class=\"nav-link{{ active == 'variables' ? ' active' }} disableAjax\">
          {% trans 'All status variables' %}
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ url('/server/status/monitor') }}\" class=\"nav-link{{ active == 'monitor' ? ' active' }} disableAjax\">
          {% trans 'Monitor' %}
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ url('/server/status/advisor') }}\" class=\"nav-link{{ active == 'advisor' ? ' active' }} disableAjax\">
          {% trans 'Advisor' %}
        </a>
      </li>
    </ul>
  </div>

  {% block content %}{% endblock %}
</div>
", "server/status/base.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/base.twig");
    }
}
