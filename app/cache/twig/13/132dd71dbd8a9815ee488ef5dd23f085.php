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

/* table/index_rename_form.twig */
class __TwigTemplate_b55c65ca8ad942c43ab660a2016e883b extends Template
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
        echo $this->env->getFunction('url')->getCallable()("/table/indexes/rename");
        echo "\" method=\"post\" name=\"index_frm\" id=\"index_frm\" class=\"card ajax\">

  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 3, $this->source); })()));
        echo "

  <div class=\"card-body\">
    <div class=\"index_info\">
      <div>
          <div class=\"label\">
              <strong>
                  <label for=\"input_index_name\">
                      ";
        // line 11
echo _gettext("Index name:");
        // line 12
        echo "                      ";
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        echo "
                  </label>
              </strong>
          </div>

          <input type=\"text\"
              name=\"index\"
              id=\"input_index_name\"
              size=\"25\"
              maxlength=\"64\"
              value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 22, $this->source); })()), "getName", [], "method", false, false, false, 22), "html", null, true);
        echo "\"
              onfocus=\"this.select()\">
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
        // line 28
echo _gettext("Preview SQL");
        echo "</button>
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/index_rename_form.twig";
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
        return array (  79 => 28,  70 => 22,  56 => 12,  54 => 11,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ url('/table/indexes/rename') }}\" method=\"post\" name=\"index_frm\" id=\"index_frm\" class=\"card ajax\">

  {{ get_hidden_inputs(form_params) }}

  <div class=\"card-body\">
    <div class=\"index_info\">
      <div>
          <div class=\"label\">
              <strong>
                  <label for=\"input_index_name\">
                      {% trans 'Index name:' %}
                      {{ show_hint('\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!'|trans) }}
                  </label>
              </strong>
          </div>

          <input type=\"text\"
              name=\"index\"
              id=\"input_index_name\"
              size=\"25\"
              maxlength=\"64\"
              value=\"{{ index.getName() }}\"
              onfocus=\"this.select()\">
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">{% trans 'Preview SQL' %}</button>
  </div>
</form>
", "table/index_rename_form.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/index_rename_form.twig");
    }
}
