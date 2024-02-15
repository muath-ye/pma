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

/* home/git_info.twig */
class __TwigTemplate_3a2ac2fd8ec6833cf81e2ac16208ce54 extends Template
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
        echo "<li id=\"li_pma_version_git\" class=\"list-group-item\">
  ";
echo _gettext("Git revision:");
        // line 3
        echo "
  ";
        // line 4
        if (($context["is_remote_commit"] ?? null)) {
            // line 5
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()(twig_sprintf("https://github.com/phpmyadmin/phpmyadmin/commit/%s", twig_escape_filter($this->env, ($context["hash"] ?? null)))), "html", null, true);
            echo "\" rel=\"noopener noreferrer\" target=\"_blank\">
      <strong title=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["hash"] ?? null), 0, 7), "html", null, true);
            echo "</strong>
    </a>
  ";
        } else {
            // line 9
            echo "    <strong title=\"";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["hash"] ?? null), 0, 7), "html", null, true);
            echo "</strong>
  ";
        }
        // line 11
        echo "
  ";
        // line 12
        if ((($context["branch"] ?? null) === false)) {
            // line 13
            echo "    (";
echo _gettext("no branch");
            echo ")
  ";
        } elseif (        // line 14
($context["is_remote_branch"] ?? null)) {
            // line 15
            echo "    ";
            echo twig_sprintf(_gettext("from %s branch"), twig_sprintf("<a href=\"%s\" rel=\"noopener noreferrer\" target=\"_blank\">%s</a>", $this->env->getFilter('link')->getCallable()(twig_sprintf("https://github.com/phpmyadmin/phpmyadmin/tree/%s", twig_escape_filter($this->env,             // line 17
($context["branch"] ?? null)))), twig_escape_filter($this->env,             // line 18
($context["branch"] ?? null))));
            // line 20
            echo ",<br>
  ";
        } else {
            // line 22
            echo "    ";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("from %s branch"), ($context["branch"] ?? null)), "html", null, true);
            echo ",<br>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        echo twig_sprintf(_gettext("committed on %s by %s"), twig_get_attribute($this->env, $this->source,         // line 26
($context["committer"] ?? null), "date", [], "any", false, false, false, 26), twig_sprintf("<a href=\"mailto:%s\">%s</a>", twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 27
($context["committer"] ?? null), "email", [], "any", false, false, false, 27)), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["committer"] ?? null), "name", [], "any", false, false, false, 27))));
        // line 30
        if ( !(($context["committer"] ?? null) === ($context["author"] ?? null))) {
            // line 31
            echo ",<br>
    ";
            // line 32
            echo twig_sprintf(_gettext("authored on %s by %s"), twig_get_attribute($this->env, $this->source,             // line 33
($context["author"] ?? null), "date", [], "any", false, false, false, 33), twig_sprintf("<a href=\"mailto:%s\">%s</a>", twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 34
($context["author"] ?? null), "email", [], "any", false, false, false, 34)), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 34))));
            // line 35
            echo "
  ";
        }
        // line 37
        echo "</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/git_info.twig";
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
        return array (  114 => 37,  110 => 35,  108 => 34,  107 => 33,  106 => 32,  103 => 31,  101 => 30,  99 => 27,  98 => 26,  97 => 25,  94 => 24,  88 => 22,  84 => 20,  82 => 18,  81 => 17,  79 => 15,  77 => 14,  72 => 13,  70 => 12,  67 => 11,  59 => 9,  51 => 6,  46 => 5,  44 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/git_info.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\home\\git_info.twig");
    }
}
