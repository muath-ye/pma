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

/* setup/error.twig */
class __TwigTemplate_a0b674848fe20e71934ad9798316e75b extends Template
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
        echo "<div class=\"error\">
  <h4>";
        // line 2
echo _gettext("Warning");
        echo "</h4>
  <p>";
        // line 3
echo _gettext("Submitted form contains errors");
        echo "</p>
  <p>
    <a href=\"../setup/";
        // line 5
        echo $this->env->getFunction('url')->getCallable()("/setup", twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 5, $this->source); })()), ["mode" => "revert"]));
        echo "\">
      ";
        // line 6
echo _gettext("Try to revert erroneous fields to their default values");
        // line 7
        echo "    </a>
  </p>
</div>

";
        // line 11
        echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })());
        echo "

<a class=\"btn\" href=\"../setup/";
        // line 13
        echo $this->env->getFunction('url')->getCallable()("/setup");
        echo "\">
  ";
        // line 14
echo _gettext("Ignore errors");
        // line 15
        echo "</a>

<a class=\"btn\" href=\"../setup/";
        // line 17
        echo $this->env->getFunction('url')->getCallable()("/setup", twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 17, $this->source); })()), ["mode" => "edit"]));
        echo "\">
  ";
        // line 18
echo _gettext("Show form");
        // line 19
        echo "</a>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "setup/error.twig";
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
        return array (  82 => 19,  80 => 18,  76 => 17,  72 => 15,  70 => 14,  66 => 13,  61 => 11,  55 => 7,  53 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"error\">
  <h4>{% trans 'Warning' %}</h4>
  <p>{% trans 'Submitted form contains errors' %}</p>
  <p>
    <a href=\"../setup/{{ url('/setup', url_params|merge({'mode': 'revert'})) }}\">
      {% trans 'Try to revert erroneous fields to their default values' %}
    </a>
  </p>
</div>

{{ errors|raw }}

<a class=\"btn\" href=\"../setup/{{ url('/setup') }}\">
  {% trans 'Ignore errors' %}
</a>

<a class=\"btn\" href=\"../setup/{{ url('/setup', url_params|merge({'mode': 'edit'})) }}\">
  {% trans 'Show form' %}
</a>
", "setup/error.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/setup/error.twig");
    }
}
