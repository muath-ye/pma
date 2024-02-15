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
class __TwigTemplate_c3a6df50b109b9c5693e683888ce9b13 extends Template
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
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 2, $this->source); })()));
        echo "
  <table class=\"table table-borderless\">
    <tbody>
      <tr>
        <td>
          <input type=\"hidden\" name=\"operation\" value=\"savePage\">
          ";
        // line 8
        $this->loadTemplate("database/designer/page_selector.twig", "database/designer/page_save_as.twig", 8)->display(twig_to_array(["pdfwork" =>         // line 9
(isset($context["pdfwork"]) || array_key_exists("pdfwork", $context) ? $context["pdfwork"] : (function () { throw new RuntimeError('Variable "pdfwork" does not exist.', 9, $this->source); })()), "pages" =>         // line 10
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 10, $this->source); })())]));
        // line 12
        echo "        </td>
      </tr>
      <tr>
        <td>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageSameRadio\" value=\"same\" checked>
            <label for=\"savePageSameRadio\">";
        // line 18
echo _gettext("Save to selected page");
        echo "</label>
          </div>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageNewRadio\" value=\"new\">
            <label for=\"savePageNewRadio\">";
        // line 22
echo _gettext("Create a page and save to it");
        echo "</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label for=\"selected_value\">";
        // line 28
echo _gettext("New page name");
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
        return array (  79 => 28,  70 => 22,  63 => 18,  55 => 12,  53 => 10,  52 => 9,  51 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ url('/database/designer') }}\" method=\"post\" name=\"save_as_pages\" id=\"save_as_pages\" class=\"ajax\">
  {{ get_hidden_inputs(db) }}
  <table class=\"table table-borderless\">
    <tbody>
      <tr>
        <td>
          <input type=\"hidden\" name=\"operation\" value=\"savePage\">
          {% include 'database/designer/page_selector.twig' with {
            'pdfwork': pdfwork,
            'pages': pages
          } only %}
        </td>
      </tr>
      <tr>
        <td>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageSameRadio\" value=\"same\" checked>
            <label for=\"savePageSameRadio\">{% trans 'Save to selected page' %}</label>
          </div>
          <div>
            <input type=\"radio\" name=\"save_page\" id=\"savePageNewRadio\" value=\"new\">
            <label for=\"savePageNewRadio\">{% trans 'Create a page and save to it' %}</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label for=\"selected_value\">{% trans 'New page name' %}</label>
          <input type=\"text\" name=\"selected_value\" id=\"selected_value\">
        </td>
      </tr>
    </tbody>
  </table>
</form>
", "database/designer/page_save_as.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/page_save_as.twig");
    }
}
