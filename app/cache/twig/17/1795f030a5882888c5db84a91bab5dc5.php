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

/* server/privileges/get_user_link.twig */
class __TwigTemplate_91a58741a7f84da33ede7aaf9a8b7a9f extends Template
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
        echo "<a
  ";
        // line 2
        if ( !((isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 2, $this->source); })()) === "")) {
            // line 3
            echo "    class=\"";
            echo twig_escape_filter($this->env, (isset($context["link_class"]) || array_key_exists("link_class", $context) ? $context["link_class"] : (function () { throw new RuntimeError('Variable "link_class" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\"
  ";
        }
        // line 5
        echo "  href=\"";
        echo $this->env->getFunction('url')->getCallable()("/server/privileges", (((isset($context["is_revoke"]) || array_key_exists("is_revoke", $context) ? $context["is_revoke"] : (function () { throw new RuntimeError('Variable "is_revoke" does not exist.', 5, $this->source); })())) ? ([]) : ((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 5, $this->source); })()))));
        echo "\"
  ";
        // line 6
        if ((isset($context["is_revoke"]) || array_key_exists("is_revoke", $context) ? $context["is_revoke"] : (function () { throw new RuntimeError('Variable "is_revoke" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()), "");
            echo "\"
  ";
        }
        // line 9
        echo ">
  ";
        // line 10
        echo $this->env->getFunction('get_icon')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "text", [], "any", false, false, false, 10));
        echo "
</a>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/get_user_link.twig";
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
        return array (  64 => 10,  61 => 9,  55 => 7,  53 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a
  {% if link_class is not same as ('') %}
    class=\"{{ link_class }}\"
  {% endif %}
  href=\"{{ url('/server/privileges', is_revoke ? [] : url_params) }}\"
  {% if is_revoke %}
    data-post=\"{{ get_common(url_params, '') }}\"
  {% endif %}
>
  {{ get_icon(action.icon, action.text) }}
</a>
", "server/privileges/get_user_link.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/get_user_link.twig");
    }
}
