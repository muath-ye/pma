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

/* table/insert/actions_panel.twig */
class __TwigTemplate_f27efbc680996b8d190ce75c19bac992 extends Template
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
<fieldset class=\"card-body\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          ";
        // line 7
        if ( !twig_test_empty((isset($context["where_clause"]) || array_key_exists("where_clause", $context) ? $context["where_clause"] : (function () { throw new RuntimeError('Variable "where_clause" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            <option value=\"save\">";
echo _gettext("Save");
            echo "</option>
          ";
        }
        // line 10
        echo "          <option value=\"insert\">";
echo _gettext("Insert as new row");
        echo "</option>
          <option value=\"insertignore\">";
        // line 11
echo _gettext("Insert as new row and ignore errors");
        echo "</option>
          <option value=\"showinsert\">";
        // line 12
echo _gettext("Show insert query");
        echo "</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>";
        // line 16
echo _gettext("and then");
        echo "</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"";
        // line 20
        echo ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 20, $this->source); })()) == "back")) ? (" selected") : (""));
        echo ">";
echo _gettext("Go back to previous page");
        echo "</option>
          <option value=\"new_insert\"";
        // line 21
        echo ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 21, $this->source); })()) == "new_insert")) ? (" selected") : (""));
        echo ">";
echo _gettext("Insert another new row");
        echo "</option>
          ";
        // line 22
        if ( !twig_test_empty((isset($context["where_clause"]) || array_key_exists("where_clause", $context) ? $context["where_clause"] : (function () { throw new RuntimeError('Variable "where_clause" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "            <option value=\"same_insert\"";
            echo ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 23, $this->source); })()) == "same_insert")) ? (" selected") : (""));
            echo ">";
echo _gettext("Go back to this page");
            echo "</option>
            ";
            // line 24
            if (((isset($context["found_unique_key"]) || array_key_exists("found_unique_key", $context) ? $context["found_unique_key"] : (function () { throw new RuntimeError('Variable "found_unique_key" does not exist.', 24, $this->source); })()) && (isset($context["is_numeric"]) || array_key_exists("is_numeric", $context) ? $context["is_numeric"] : (function () { throw new RuntimeError('Variable "is_numeric" does not exist.', 24, $this->source); })()))) {
                // line 25
                echo "              <option value=\"edit_next\"";
                echo ((((isset($context["after_insert"]) || array_key_exists("after_insert", $context) ? $context["after_insert"] : (function () { throw new RuntimeError('Variable "after_insert" does not exist.', 25, $this->source); })()) == "edit_next")) ? (" selected") : (""));
                echo ">";
echo _gettext("Edit next row");
                echo "</option>
            ";
            }
            // line 27
            echo "          ";
        }
        // line 28
        echo "        </select>
      </td>
    </tr>
    <tr>
      <td>
        ";
        // line 33
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Use TAB key to move from value to value, or CTRL+arrows to move anywhere."));
        echo "
      </td>
      <td colspan=\"3\" class=\"text-end align-middle\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"";
        // line 36
echo _gettext("Preview SQL");
        echo "\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"";
        // line 37
echo _gettext("Reset");
        echo "\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"";
        // line 38
echo _gettext("Go");
        echo "\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
</div>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
        // line 48
echo _gettext("Loading");
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 49
echo _gettext("Close");
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
        // line 54
echo _gettext("Close");
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/actions_panel.twig";
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
        return array (  156 => 54,  148 => 49,  144 => 48,  131 => 38,  127 => 37,  123 => 36,  117 => 33,  110 => 28,  107 => 27,  99 => 25,  97 => 24,  90 => 23,  88 => 22,  82 => 21,  76 => 20,  69 => 16,  62 => 12,  58 => 11,  53 => 10,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
<fieldset class=\"card-body\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          {% if where_clause is not empty %}
            <option value=\"save\">{% trans 'Save' %}</option>
          {% endif %}
          <option value=\"insert\">{% trans 'Insert as new row' %}</option>
          <option value=\"insertignore\">{% trans 'Insert as new row and ignore errors' %}</option>
          <option value=\"showinsert\">{% trans 'Show insert query' %}</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>{% trans 'and then' %}</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"{{ after_insert == 'back' ? ' selected' }}>{% trans 'Go back to previous page' %}</option>
          <option value=\"new_insert\"{{ after_insert == 'new_insert' ? ' selected' }}>{% trans 'Insert another new row' %}</option>
          {% if where_clause is not empty %}
            <option value=\"same_insert\"{{ after_insert == 'same_insert' ? ' selected' }}>{% trans 'Go back to this page' %}</option>
            {% if found_unique_key and is_numeric %}
              <option value=\"edit_next\"{{ after_insert == 'edit_next' ? ' selected' }}>{% trans 'Edit next row' %}</option>
            {% endif %}
          {% endif %}
        </select>
      </td>
    </tr>
    <tr>
      <td>
        {{ show_hint('Use TAB key to move from value to value, or CTRL+arrows to move anywhere.'|trans) }}
      </td>
      <td colspan=\"3\" class=\"text-end align-middle\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"{% trans 'Preview SQL' %}\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"{% trans 'Reset' %}\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"{% trans 'Go' %}\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
</div>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">{% trans 'Loading' %}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{% trans 'Close' %}\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">{% trans 'Close' %}</button>
      </div>
    </div>
  </div>
</div>
", "table/insert/actions_panel.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/actions_panel.twig");
    }
}
