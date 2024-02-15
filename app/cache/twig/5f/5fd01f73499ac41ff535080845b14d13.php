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

/* server/user_groups/edit_user_groups.twig */
class __TwigTemplate_937f8a1229869d98ea48660b83a3a62a extends Template
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
  ";
        // line 2
        if (((isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 2, $this->source); })()) == null)) {
            // line 3
            echo "    <h2>";
            echo twig_escape_filter($this->env, _gettext("Add user group"), "html", null, true);
            echo "</h2>
  ";
        } else {
            // line 5
            echo "    <h2>";
            echo twig_sprintf(_gettext("Edit user group: '%s'"), (isset($context["edit_user_group_special_chars"]) || array_key_exists("edit_user_group_special_chars", $context) ? $context["edit_user_group_special_chars"] : (function () { throw new RuntimeError('Variable "edit_user_group_special_chars" does not exist.', 5, $this->source); })()));
            echo "</h2>
  ";
        }
        // line 7
        echo "
  <form action=\"";
        // line 8
        echo (isset($context["user_group_url"]) || array_key_exists("user_group_url", $context) ? $context["user_group_url"] : (function () { throw new RuntimeError('Variable "user_group_url" does not exist.', 8, $this->source); })());
        echo "\" method=\"post\" class=\"card disableAjax\">
    ";
        // line 9
        echo (isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 9, $this->source); })());
        echo "
    <div class=\"card-header\">";
        // line 10
        echo twig_escape_filter($this->env, _gettext("User group menu assignments"), "html", null, true);
        echo "</div>

    <div class=\"card-body\">
      ";
        // line 13
        if (((isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 13, $this->source); })()) == null)) {
            // line 14
            echo "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"userGroup\">";
            // line 15
            echo twig_escape_filter($this->env, _gettext("Group name:"), "html", null, true);
            echo "</label>
          <input class=\"form-control\" type=\"text\" name=\"userGroup\" id=\"userGroup\" maxlength=\"64\" autocomplete=\"off\" required>
        </div>
      ";
        }
        // line 19
        echo "
      <div class=\"form-check mb-3\">
        <input class=\"form-check-input checkall_box\" type=\"checkbox\" id=\"addUsersForm_checkall\" title=\"";
        // line 21
        echo twig_escape_filter($this->env, _gettext("Check all"), "html", null, true);
        echo "\">
        <label class=\"form-check-label\" for=\"addUsersForm_checkall\">";
        // line 22
        echo twig_escape_filter($this->env, _gettext("Check all"), "html", null, true);
        echo "</label>
      </div>

      <div class=\"row\">
        ";
        // line 26
        echo (isset($context["tab_list"]) || array_key_exists("tab_list", $context) ? $context["tab_list"] : (function () { throw new RuntimeError('Variable "tab_list" does not exist.', 26, $this->source); })());
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ((((isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 31, $this->source); })()) == null)) ? (_gettext("Add user group")) : (_gettext("Edit user group"))), "html", null, true);
        echo "\">
    </div>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/user_groups/edit_user_groups.twig";
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
        return array (  106 => 31,  98 => 26,  91 => 22,  87 => 21,  83 => 19,  76 => 15,  73 => 14,  71 => 13,  65 => 10,  61 => 9,  57 => 8,  54 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  {% if user_group == null %}
    <h2>{{ 'Add user group'|trans }}</h2>
  {% else %}
    <h2>{{ 'Edit user group: \\'%s\\''|trans|format(edit_user_group_special_chars)|raw }}</h2>
  {% endif %}

  <form action=\"{{ user_group_url|raw }}\" method=\"post\" class=\"card disableAjax\">
    {{ hidden_inputs|raw }}
    <div class=\"card-header\">{{ 'User group menu assignments'|trans }}</div>

    <div class=\"card-body\">
      {% if user_group == null %}
        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"userGroup\">{{ 'Group name:'|trans }}</label>
          <input class=\"form-control\" type=\"text\" name=\"userGroup\" id=\"userGroup\" maxlength=\"64\" autocomplete=\"off\" required>
        </div>
      {% endif %}

      <div class=\"form-check mb-3\">
        <input class=\"form-check-input checkall_box\" type=\"checkbox\" id=\"addUsersForm_checkall\" title=\"{{ 'Check all'|trans }}\">
        <label class=\"form-check-label\" for=\"addUsersForm_checkall\">{{ 'Check all'|trans }}</label>
      </div>

      <div class=\"row\">
        {{ tab_list|raw }}
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ user_group == null ? 'Add user group'|trans : 'Edit user group'|trans }}\">
    </div>
  </form>
</div>
", "server/user_groups/edit_user_groups.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/edit_user_groups.twig");
    }
}
