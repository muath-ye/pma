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

/* database/designer/page_save_as.twig */
class __TwigTemplate_8cd150daba03cdec60c414251414140a extends Template
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
        echo "\" method=\"post\" name=\"save_as_pages\" id=\"save_as_pages\" class=\"ajax\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "
  <table class=\"table table-borderless\">
    <tbody>
      <tr>
        <td>
          <input type=\"hidden\" name=\"operation\" value=\"savePage\">
          ";
        // line 8
        $this->loadTemplate("database/designer/page_selector.twig", "database/designer/page_save_as.twig", 8)->display(twig_to_array(["pdfwork" =>         // line 9
($context["pdfwork"] ?? null), "pages" =>         // line 10
($context["pages"] ?? null)]));
        // line 12
        echo "        </td>
      </tr>
      <tr>
        <td>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageSameRadio\" value=\"same\" checked>
            <label for=\"savePageSameRadio\">";
echo _gettext("Save to selected page");
        // line 18
        echo "</label>
          </div>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageNewRadio\" value=\"new\">
            <label for=\"savePageNewRadio\">";
echo _gettext("Create a page and save to it");
        // line 22
        echo "</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label for=\"selected_value\">";
echo _gettext("New page name");
        // line 28
        echo "</label>
          <input type=\"text\" name=\"selected_value\" id=\"selected_value\">
        </td>
      </tr>
    </tbody>
  </table>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/designer/page_save_as.twig";
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
        return array (  80 => 28,  71 => 22,  64 => 18,  55 => 12,  53 => 10,  52 => 9,  51 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/page_save_as.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/page_save_as.twig");
    }
}
