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

/* server/privileges/add_user_fieldset.twig */
class __TwigTemplate_63824d1a75bd631ef8459bee52636b82 extends Template
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
        echo "<div class=\"card\">
  <div class=\"card-header\">";
        // line 2
echo _pgettext("Create new user", "New");
        echo "</div>
  <div class=\"card-body\" id=\"fieldset_add_user\">
    <a id=\"add_user_anchor\" href=\"";
        // line 4
        echo $this->env->getFunction('url')->getCallable()("/server/privileges", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 4, $this->source); })()));
        echo "\">";
        // line 5
        echo $this->env->getFunction('get_icon')->getCallable()("b_usradd", _gettext("Add user account"));
        // line 6
        echo "</a>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/add_user_fieldset.twig";
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
        return array (  50 => 6,  48 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
  <div class=\"card-header\">{% trans %}New{% context %}Create new user{% endtrans %}</div>
  <div class=\"card-body\" id=\"fieldset_add_user\">
    <a id=\"add_user_anchor\" href=\"{{ url('/server/privileges', url_params) }}\">
      {{- get_icon('b_usradd', 'Add user account'|trans) -}}
    </a>
  </div>
</div>
", "server/privileges/add_user_fieldset.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/add_user_fieldset.twig");
    }
}
