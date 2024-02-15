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

/* database/search/main.twig */
class __TwigTemplate_1e8d5f0078862484919a66f928760700 extends Template
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
        echo "<div class=\"container\">
  <h2>";
        // line 2
echo _gettext("Search in database");
        echo "</h2>

  <a id=\"db_search\"></a>
  <form id=\"db_search_form\" method=\"post\" action=\"";
        // line 5
        echo $this->env->getFunction('url')->getCallable()("/database/search");
        echo "\" name=\"db_search\" class=\"card mb-3 ajax lock-page\">
    ";
        // line 6
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()));
        echo "
    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label for=\"criteriaSearchString\" class=\"form-label\">";
        // line 9
echo _gettext("Words or values to search for (wildcard: \"%\"):");
        echo "</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaSearchString\" name=\"criteriaSearchString\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["criteria_search_string"]) || array_key_exists("criteria_search_string", $context) ? $context["criteria_search_string"] : (function () { throw new RuntimeError('Variable "criteria_search_string" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">
      </div>

      <fieldset class=\"mb-3\">
        <legend>";
        // line 14
echo _gettext("Find:");
        echo "</legend>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"";
        // line 17
        echo ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 17, $this->source); })()) == "1")) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio1\">";
        // line 18
echo _gettext("at least one of the words");
        echo " ";
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Words are separated by a space character (\" \")."));
        echo "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"";
        // line 21
        echo ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 21, $this->source); })()) == "2")) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio2\">";
        // line 22
echo _gettext("all of the words");
        echo " ";
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Words are separated by a space character (\" \")."));
        echo "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"";
        // line 25
        echo ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 25, $this->source); })()) == "3")) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio3\">";
        // line 26
echo _gettext("the exact phrase as substring");
        echo "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"";
        // line 29
        echo ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 29, $this->source); })()) == "4")) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio4\">";
        // line 30
echo _gettext("the exact phrase as whole field");
        echo "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"";
        // line 33
        echo ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 33, $this->source); })()) == "5")) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio5\">";
        // line 34
echo _gettext("as regular expression");
        echo " ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("Regexp");
        echo "</label>
        </div>
      </fieldset>

      <fieldset class=\"mb-3\">
        <legend>";
        // line 39
echo _gettext("Inside tables:");
        echo "</legend>

        <div>
          <button type=\"button\" class=\"btn btn-link\" id=\"select_all\">";
        // line 42
echo _gettext("Select all");
        echo "</button>
          <button type=\"button\" class=\"btn btn-link\" id=\"unselect_all\">";
        // line 43
echo _gettext("Unselect all");
        echo "</button>
        </div>
        <select class=\"form-select\" id=\"criteriaTables\" name=\"criteriaTables[]\" multiple>
          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables_names_only"]) || array_key_exists("tables_names_only", $context) ? $context["tables_names_only"] : (function () { throw new RuntimeError('Variable "tables_names_only" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
            // line 47
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["each_table"], "html", null, true);
            echo "\"
              ";
            // line 48
            if ((twig_length_filter($this->env, (isset($context["criteria_tables"]) || array_key_exists("criteria_tables", $context) ? $context["criteria_tables"] : (function () { throw new RuntimeError('Variable "criteria_tables" does not exist.', 48, $this->source); })())) > 0)) {
                // line 49
                echo ((twig_in_filter($context["each_table"], (isset($context["criteria_tables"]) || array_key_exists("criteria_tables", $context) ? $context["criteria_tables"] : (function () { throw new RuntimeError('Variable "criteria_tables" does not exist.', 49, $this->source); })()))) ? (" selected") : (""));
                echo "
              ";
            } else {
                // line 51
                echo " selected";
                echo "
              ";
            }
            // line 53
            echo "            >
              ";
            // line 54
            echo twig_escape_filter($this->env, $context["each_table"], "html", null, true);
            echo "
            </option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </select>
      </fieldset>

      <div>
        <label for=\"criteriaColumnName\" class=\"form-label\">";
        // line 61
echo _gettext("Inside column:");
        echo "</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaColumnName\" name=\"criteriaColumnName\" value=\"";
        // line 62
        (( !twig_test_empty((isset($context["criteria_column_name"]) || array_key_exists("criteria_column_name", $context) ? $context["criteria_column_name"] : (function () { throw new RuntimeError('Variable "criteria_column_name" does not exist.', 62, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["criteria_column_name"]) || array_key_exists("criteria_column_name", $context) ? $context["criteria_column_name"] : (function () { throw new RuntimeError('Variable "criteria_column_name" does not exist.', 62, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
      </div>
    </div>
    <div class=\"card-footer\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"";
        // line 66
echo _gettext("Search");
        echo "\">
    </div>
  </form>
  <div id=\"togglesearchformdiv\">
    <button id=\"togglesearchformlink\" class=\"btn btn-primary my-1\"></button>
  </div>
  <div id=\"searchresults\"></div>
  <div id=\"togglesearchresultsdiv\">
    <button id=\"togglesearchresultlink\" class=\"btn btn-primary\"></button>
  </div>
  <br class=\"clearfloat\">
  ";
        // line 78
        echo "  <div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
  </div>
  ";
        // line 82
        echo "  <div id=\"browse-results\">
    ";
        // line 84
        echo "  </div>
  <div id=\"sqlqueryform\" class=\"clearfloat\">
    ";
        // line 87
        echo "  </div>
  ";
        // line 89
        echo "  <button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/search/main.twig";
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
        return array (  226 => 89,  223 => 87,  219 => 84,  216 => 82,  211 => 78,  197 => 66,  190 => 62,  186 => 61,  180 => 57,  171 => 54,  168 => 53,  163 => 51,  158 => 49,  156 => 48,  151 => 47,  147 => 46,  141 => 43,  137 => 42,  131 => 39,  121 => 34,  117 => 33,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  89 => 22,  85 => 21,  77 => 18,  73 => 17,  67 => 14,  60 => 10,  56 => 9,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h2>{% trans 'Search in database' %}</h2>

  <a id=\"db_search\"></a>
  <form id=\"db_search_form\" method=\"post\" action=\"{{ url('/database/search') }}\" name=\"db_search\" class=\"card mb-3 ajax lock-page\">
    {{ get_hidden_inputs(db) }}
    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label for=\"criteriaSearchString\" class=\"form-label\">{% trans 'Words or values to search for (wildcard: \"%\"):' %}</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaSearchString\" name=\"criteriaSearchString\" value=\"{{ criteria_search_string }}\">
      </div>

      <fieldset class=\"mb-3\">
        <legend>{% trans 'Find:' %}</legend>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"{{ criteria_search_type == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio1\">{% trans 'at least one of the words' %} {{ show_hint('Words are separated by a space character (\" \").'|trans) }}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"{{ criteria_search_type == '2' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio2\">{% trans 'all of the words' %} {{ show_hint('Words are separated by a space character (\" \").'|trans) }}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"{{ criteria_search_type == '3' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio3\">{% trans 'the exact phrase as substring' %}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"{{ criteria_search_type == '4' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio4\">{% trans 'the exact phrase as whole field' %}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"{{ criteria_search_type == '5' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio5\">{% trans 'as regular expression' %} {{ show_mysql_docu('Regexp') }}</label>
        </div>
      </fieldset>

      <fieldset class=\"mb-3\">
        <legend>{% trans 'Inside tables:' %}</legend>

        <div>
          <button type=\"button\" class=\"btn btn-link\" id=\"select_all\">{% trans 'Select all' %}</button>
          <button type=\"button\" class=\"btn btn-link\" id=\"unselect_all\">{% trans 'Unselect all' %}</button>
        </div>
        <select class=\"form-select\" id=\"criteriaTables\" name=\"criteriaTables[]\" multiple>
          {% for each_table in tables_names_only %}
            <option value=\"{{ each_table }}\"
              {% if criteria_tables|length > 0 %}
                {{- each_table in criteria_tables ? ' selected' }}
              {% else %}
                {{- ' selected' }}
              {% endif %}
            >
              {{ each_table }}
            </option>
          {% endfor %}
        </select>
      </fieldset>

      <div>
        <label for=\"criteriaColumnName\" class=\"form-label\">{% trans 'Inside column:' %}</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaColumnName\" name=\"criteriaColumnName\" value=\"{{ criteria_column_name is not empty ? criteria_column_name }}\">
      </div>
    </div>
    <div class=\"card-footer\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"{% trans 'Search' %}\">
    </div>
  </form>
  <div id=\"togglesearchformdiv\">
    <button id=\"togglesearchformlink\" class=\"btn btn-primary my-1\"></button>
  </div>
  <div id=\"searchresults\"></div>
  <div id=\"togglesearchresultsdiv\">
    <button id=\"togglesearchresultlink\" class=\"btn btn-primary\"></button>
  </div>
  <br class=\"clearfloat\">
  {# These two table-image and table-link elements display the table name in browse search results #}
  <div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
  </div>
  {# Div for browsing results #}
  <div id=\"browse-results\">
    {# This browse-results div is used to load the browse and delete results in the db search #}
  </div>
  <div id=\"sqlqueryform\" class=\"clearfloat\">
    {# This sqlqueryform div is used to load the delete form in the db search #}
  </div>
  {# Toggle query box link #}
  <button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
</div>
", "database/search/main.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/search/main.twig");
    }
}
