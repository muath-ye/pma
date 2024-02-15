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

/* sql/bookmark.twig */
class __TwigTemplate_4fd5a8485b099ff04389c82e43f57ccd extends Template
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
        echo $this->env->getFunction('url')->getCallable()("/sql");
        echo "\" method=\"post\" class=\"card bookmarkQueryForm d-print-none\"
  onsubmit=\"return ! Functions.emptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
  <input type=\"hidden\" name=\"db\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"store_bkm\" value=\"1\">

  <div class=\"card-header\">";
        // line 11
        echo $this->env->getFunction('get_icon')->getCallable()("b_bookmark", _gettext("Bookmark this SQL query"), true);
        echo "</div>
  <div class=\"card-body\">
    <div class=\"mb-3\">
      <label class=\"form-label\" for=\"bookmarkLabelField\">";
        // line 14
echo _gettext("Bookmark label:");
        echo "</label>
      <input class=\"form-control\" id=\"bookmarkLabelField\" type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
    </div>

    ";
        // line 18
        if ((array_key_exists("allow_shared_bookmarks", $context) && (isset($context["allow_shared_bookmarks"]) || array_key_exists("allow_shared_bookmarks", $context) ? $context["allow_shared_bookmarks"] : (function () { throw new RuntimeError('Variable "allow_shared_bookmarks" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "      <div class=\"form-check form-switch\">
        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"bookmarkAllUsersCheckbox\" name=\"bkm_all_users\" value=\"true\">
        <label class=\"form-check-label\" for=\"bookmarkAllUsersCheckbox\">";
            // line 21
echo _gettext("Let every user access this bookmark");
            echo "</label>
      </div>
    ";
        }
        // line 24
        echo "  </div>
  <div class=\"card-footer\">
    <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
        // line 26
echo _gettext("Create new bookmark");
        echo "\">
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/bookmark.twig";
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
        return array (  98 => 26,  94 => 24,  88 => 21,  84 => 19,  82 => 18,  75 => 14,  69 => 11,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ url('/sql') }}\" method=\"post\" class=\"card bookmarkQueryForm d-print-none\"
  onsubmit=\"return ! Functions.emptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
  {{ get_hidden_inputs() }}
  <input type=\"hidden\" name=\"db\" value=\"{{ db }}\">
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"{{ db }}\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"{{ user }}\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"{{ sql_query }}\">
  <input type=\"hidden\" name=\"store_bkm\" value=\"1\">

  <div class=\"card-header\">{{ get_icon('b_bookmark', 'Bookmark this SQL query'|trans, true) }}</div>
  <div class=\"card-body\">
    <div class=\"mb-3\">
      <label class=\"form-label\" for=\"bookmarkLabelField\">{% trans 'Bookmark label:' %}</label>
      <input class=\"form-control\" id=\"bookmarkLabelField\" type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
    </div>

    {% if allow_shared_bookmarks is defined and allow_shared_bookmarks %}
      <div class=\"form-check form-switch\">
        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"bookmarkAllUsersCheckbox\" name=\"bkm_all_users\" value=\"true\">
        <label class=\"form-check-label\" for=\"bookmarkAllUsersCheckbox\">{% trans 'Let every user access this bookmark' %}</label>
      </div>
    {% endif %}
  </div>
  <div class=\"card-footer\">
    <input class=\"btn btn-secondary\" type=\"submit\" value=\"{% trans 'Create new bookmark' %}\">
  </div>
</form>
", "sql/bookmark.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/bookmark.twig");
    }
}
