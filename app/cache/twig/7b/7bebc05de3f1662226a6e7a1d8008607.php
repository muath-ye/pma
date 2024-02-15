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

/* database/designer/edit_delete_pages.twig */
class __TwigTemplate_3fc83f26a736e6dc7aeeb2fa2114cd5d extends Template
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
        echo "<form action=\"";
        echo $this->env->getFunction('url')->getCallable()("/database/designer");
        echo "\" method=\"post\" name=\"edit_delete_pages\" id=\"edit_delete_pages\" class=\"ajax\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"operation\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
  <label for=\"selected_page\">
    ";
        // line 5
        echo twig_escape_filter($this->env, ((((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 5, $this->source); })()) == "editPage")) ? (_gettext("Page to open")) : (_gettext("Page to delete"))), "html", null, true);
        echo ":
  </label>
  ";
        // line 7
        $this->loadTemplate("database/designer/page_selector.twig", "database/designer/edit_delete_pages.twig", 7)->display(twig_to_array(["pdfwork" =>         // line 8
(isset($context["pdfwork"]) || array_key_exists("pdfwork", $context) ? $context["pdfwork"] : (function () { throw new RuntimeError('Variable "pdfwork" does not exist.', 8, $this->source); })()), "pages" =>         // line 9
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 9, $this->source); })())]));
        // line 11
        echo "</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/designer/edit_delete_pages.twig";
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
        return array (  60 => 11,  58 => 9,  57 => 8,  56 => 7,  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ url('/database/designer') }}\" method=\"post\" name=\"edit_delete_pages\" id=\"edit_delete_pages\" class=\"ajax\">
  {{ get_hidden_inputs(db) }}
  <input type=\"hidden\" name=\"operation\" value=\"{{ operation }}\">
  <label for=\"selected_page\">
    {{ operation == 'editPage' ? 'Page to open'|trans : 'Page to delete'|trans }}:
  </label>
  {% include 'database/designer/page_selector.twig' with {
    'pdfwork': pdfwork,
    'pages': pages
  } only %}
</form>
", "database/designer/edit_delete_pages.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/edit_delete_pages.twig");
    }
}
