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
class __TwigTemplate_a7cfa195ed8e0a3f991febfef59d77df extends Template
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
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "
  <input type=\"hidden\" name=\"operation\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["operation"] ?? null), "html", null, true);
        echo "\">
  <label for=\"selected_page\">
    ";
        // line 5
        echo twig_escape_filter($this->env, (((($context["operation"] ?? null) == "editPage")) ? (_gettext("Page to open")) : (_gettext("Page to delete"))), "html", null, true);
        echo ":
  </label>
  ";
        // line 7
        $this->loadTemplate("database/designer/page_selector.twig", "database/designer/edit_delete_pages.twig", 7)->display(twig_to_array(["pdfwork" =>         // line 8
($context["pdfwork"] ?? null), "pages" =>         // line 9
($context["pages"] ?? null)]));
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
        return new Source("", "database/designer/edit_delete_pages.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/edit_delete_pages.twig");
    }
}
