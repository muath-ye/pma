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

/* login/twofactor.twig */
class __TwigTemplate_f6ed0ebdfc37f807f7c56813af4a5f3b extends Template
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
        echo "<form method=\"post\" class=\"disableAjax\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "

  <div class=\"card\">
    <div class=\"card-body\">
      ";
        // line 6
        echo (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })());
        echo "
    </div>
    <div class=\"card-footer\">
      ";
        // line 9
        if ((isset($context["show_submit"]) || array_key_exists("show_submit", $context) ? $context["show_submit"] : (function () { throw new RuntimeError('Variable "show_submit" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Verify");
            echo "\">
      ";
        }
        // line 12
        echo "    </div>
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/twofactor.twig";
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
        return array (  61 => 12,  55 => 10,  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" class=\"disableAjax\">
  {{ get_hidden_inputs() }}

  <div class=\"card\">
    <div class=\"card-body\">
      {{ form|raw }}
    </div>
    <div class=\"card-footer\">
      {% if show_submit %}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans \"Verify\" %}\">
      {% endif %}
    </div>
  </div>
</form>
", "login/twofactor.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor.twig");
    }
}
