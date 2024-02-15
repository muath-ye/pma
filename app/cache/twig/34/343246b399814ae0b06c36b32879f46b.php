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

/* login/twofactor/key-https-warning.twig */
class __TwigTemplate_e66d29c307e9136ff4ce11407cfb4c75 extends Template
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
        if ( !(isset($context["is_https"]) || array_key_exists("is_https", $context) ? $context["is_https"] : (function () { throw new RuntimeError('Variable "is_https" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "  <div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 3
echo _gettext("You are not using https to access phpMyAdmin, therefore FIDO U2F device will most likely refuse to authenticate you.");
            // line 4
            echo "  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/twofactor/key-https-warning.twig";
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
        return array (  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not is_https %}
  <div class=\"alert alert-danger\" role=\"alert\">
    {% trans \"You are not using https to access phpMyAdmin, therefore FIDO U2F device will most likely refuse to authenticate you.\" %}
  </div>
{% endif %}
", "login/twofactor/key-https-warning.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/key-https-warning.twig");
    }
}
