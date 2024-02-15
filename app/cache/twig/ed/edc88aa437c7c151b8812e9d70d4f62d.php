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

/* select_all.twig */
class __TwigTemplate_dfb2f478f46f974684340ee53b08a9ad extends Template
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
        echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 1, $this->source); })()), "width" => "38", "height" => "22"]);
        echo "
<input type=\"checkbox\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "_checkall\" class=\"checkall_box\"
    title=\"";
        // line 3
echo _gettext("Check all");
        echo "\">
<label for=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "_checkall\">";
echo _gettext("Check all");
        echo "</label>
<em class=\"with-selected\">";
        // line 5
echo _gettext("With selected:");
        echo "</em>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "select_all.twig";
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
        return array (  55 => 5,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ get_image('select_all_arrow', 'With selected:'|trans, {'dir': text_dir, 'width': '38', 'height': '22'}) }}
<input type=\"checkbox\" id=\"{{ form_name }}_checkall\" class=\"checkall_box\"
    title=\"{% trans 'Check all' %}\">
<label for=\"{{ form_name }}_checkall\">{% trans 'Check all' %}</label>
<em class=\"with-selected\">{% trans 'With selected:' %}</em>
", "select_all.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/select_all.twig");
    }
}
