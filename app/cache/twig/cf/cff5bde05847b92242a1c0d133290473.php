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

/* display/results/table.twig */
class __TwigTemplate_01c0e8f93ab075527262aa95c7ac49b6 extends Template
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
        ob_start();
        // line 2
        echo "  ";
        if ( !twig_test_empty((isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    <table class=\"navigation d-print-none\">
      <tr>
        <td class=\"navigation_separator\"></td>

        ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 7, $this->source); })()), "pos", [], "any", false, false, false, 7) &&  !twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 7, $this->source); })()), "is_showing_all", [], "any", false, false, false, 7))) {
                // line 8
                echo "          <td>
            <form action=\"";
                // line 9
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 10
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 10, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()));
                echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"0\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "\">
              ";
                // line 15
                ob_start();
                // line 16
                echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? ("<<") : (""));
                // line 17
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 18
                    echo "&nbsp;";
echo _pgettext("First page", "Begin");
                }
                $context["begin_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["begin_text"]) || array_key_exists("begin_text", $context) ? $context["begin_text"] : (function () { throw new RuntimeError('Variable "begin_text" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\" title=\"";
echo _pgettext("First page", "Begin");
                echo "\">
            </form>
          </td>

          <td>
            <form action=\"";
                // line 26
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 27
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 27, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 27, $this->source); })()));
                echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 29, $this->source); })()), "pos_previous", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 30, $this->source); })()), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\">
              ";
                // line 32
                ob_start();
                // line 33
                echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? ("<") : (""));
                // line 34
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 35
                    echo "&nbsp;";
echo _pgettext("Previous page", "Previous");
                }
                $context["previous_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 38
                echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["previous_text"]) || array_key_exists("previous_text", $context) ? $context["previous_text"] : (function () { throw new RuntimeError('Variable "previous_text" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "\" title=\"";
echo _pgettext("Previous page", "Previous");
                echo "\">
            </form>
          </td>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 43, $this->source); })()), "page_selector", [], "any", false, false, false, 43);
            echo "

        ";
            // line 45
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 45, $this->source); })()), "is_last_page", [], "any", false, false, false, 45)) {
                // line 46
                echo "          <td>
            <form action=\"";
                // line 47
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 48
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 48, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()));
                echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 50, $this->source); })()), "pos_next", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\">
              ";
                // line 53
                ob_start();
                // line 54
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 55
echo _pgettext("Next page", "Next");
                    echo "&nbsp;";
                }
                // line 57
                echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? (">") : (""));
                $context["next_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 59
                echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["next_text"]) || array_key_exists("next_text", $context) ? $context["next_text"] : (function () { throw new RuntimeError('Variable "next_text" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "\" title=\"";
echo _pgettext("Next page", "Next");
                echo "\">
            </form>
          </td>

          ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 63, $this->source); })()), "is_last_page_known", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "          <td>
            <form action=\"";
                    // line 65
                    echo $this->env->getFunction('url')->getCallable()("/sql");
                    echo "\" method=\"post\"";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 65, $this->source); })()), "onsubmit", [], "any", false, false, false, 65);
                    echo ">
              ";
                    // line 66
                    echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 66, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 66, $this->source); })()));
                    echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                    // line 67
                    echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 67, $this->source); })()), "html", null, true);
                    echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 68, $this->source); })()), "pos_last", [], "any", false, false, false, 68), "html", null, true);
                    echo "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                    // line 69
                    echo twig_escape_filter($this->env, (isset($context["is_browse_distinct"]) || array_key_exists("is_browse_distinct", $context) ? $context["is_browse_distinct"] : (function () { throw new RuntimeError('Variable "is_browse_distinct" does not exist.', 69, $this->source); })()), "html", null, true);
                    echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                    // line 70
                    echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 70, $this->source); })()), "html", null, true);
                    echo "\">
              ";
                    // line 71
                    ob_start();
                    // line 72
                    if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                        // line 73
echo _pgettext("Last page", "End");
                        echo "&nbsp;";
                    }
                    // line 75
                    echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? (">>") : (""));
                    $context["end_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 77
                    echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["end_text"]) || array_key_exists("end_text", $context) ? $context["end_text"] : (function () { throw new RuntimeError('Variable "end_text" does not exist.', 77, $this->source); })()), "html", null, true);
                    echo "\" title=\"";
echo _pgettext("Last page", "End");
                    echo "\">
            </form>
          </td>
          ";
                }
                // line 81
                echo "        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 83, $this->source); })()), "number_total_page", [], "any", false, false, false, 83) != 1)) {
                // line 84
                echo "          <td><div class=\"navigation_separator\">|</div></td>
        ";
            }
            // line 86
            echo "
        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 87, $this->source); })()), "has_show_all", [], "any", false, false, false, 87)) {
                // line 88
                echo "          <td>
            <form action=\"";
                // line 89
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 90
                echo $this->env->getFunction('get_hidden_fields')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 90, $this->source); })()), "hidden_fields", [], "any", false, false, false, 90), ["session_max_rows" => twig_get_attribute($this->env, $this->source,                 // line 91
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 91, $this->source); })()), "session_max_rows", [], "any", false, false, false, 91), "pos" => "0"]));
                // line 93
                echo "
              <input type=\"checkbox\" name=\"navig\" id=\"showAll_";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 94, $this->source); })()), "html", null, true);
                echo "\" class=\"showAllRows\" value=\"all\"";
                // line 95
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 95, $this->source); })()), "is_showing_all", [], "any", false, false, false, 95)) ? (" checked") : (""));
                echo ">
              <label for=\"showAll_";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 96, $this->source); })()), "html", null, true);
                echo "\">";
echo _gettext("Show all");
                echo "</label>
            </form>
          </td>
          <td><div class=\"navigation_separator\">|</div></td>
        ";
            }
            // line 101
            echo "
        <td>
          <div class=\"save_edited hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
            // line 104
echo _gettext("Save edited data");
            echo "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td>
          <div class=\"restore_column hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
            // line 110
echo _gettext("Restore column order");
            echo "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td class=\"navigation_goto\">
          <form action=\"";
            // line 115
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" method=\"post\" class=\"maxRowsForm\">
            ";
            // line 116
            echo $this->env->getFunction('get_hidden_fields')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 116, $this->source); })()), "hidden_fields", [], "any", false, false, false, 116), ["pos" => twig_get_attribute($this->env, $this->source,             // line 117
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 117, $this->source); })()), "pos", [], "any", false, false, false, 117), "unlim_num_rows" =>             // line 118
(isset($context["unlim_num_rows"]) || array_key_exists("unlim_num_rows", $context) ? $context["unlim_num_rows"] : (function () { throw new RuntimeError('Variable "unlim_num_rows" does not exist.', 118, $this->source); })())]));
            // line 119
            echo "

            <label for=\"sessionMaxRowsSelect\">";
            // line 121
echo _gettext("Number of rows:");
            echo "</label>
            <select class=\"autosubmit\" name=\"session_max_rows\" id=\"sessionMaxRowsSelect\">
              ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 123, $this->source); })()), "is_showing_all", [], "any", false, false, false, 123)) {
                // line 124
                echo "                <option value=\"\" disabled selected>";
echo _gettext("All");
                echo "</option>
              ";
            }
            // line 126
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["25", "50", "100", "250", "500"]);
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 127
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 127, $this->source); })()), "max_rows", [], "any", false, false, false, 127) == $context["option"])) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            </select>
          </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td class=\"largescreenonly\">
          <div class=\"row g-1 p-1 align-items-center\">
            <div class=\"col-auto\">
              <label for=\"filterRows\" class=\"col-form-label\">";
            // line 136
echo _gettext("Filter rows:");
            echo "</label>
            </div>
            <div class=\"col-auto\">
              <input type=\"text\" id=\"filterRows\" class=\"filter_rows form-control\"
                    placeholder=\"";
            // line 140
echo _gettext("Search this table");
            echo "\" data-for=\"";
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 140, $this->source); })()), "html", null, true);
            echo "\">
            </div>
          </div>
        </td>
        <td class=\"largescreenonly\">
          ";
            // line 145
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 145, $this->source); })()), "sort_by_key", [], "any", false, false, false, 145))) {
                // line 146
                echo "            <form action=\"";
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\" class=\"d-print-none\">
              ";
                // line 147
                echo $this->env->getFunction('get_hidden_fields')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 147, $this->source); })()), "sort_by_key", [], "any", false, false, false, 147), "hidden_fields", [], "any", false, false, false, 147));
                echo "
              ";
                // line 148
echo _gettext("Sort by key:");
                // line 149
                echo "              <select name=\"sql_query\" class=\"autosubmit\">
                ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 150, $this->source); })()), "sort_by_key", [], "any", false, false, false, 150), "options", [], "any", false, false, false, 150));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 151
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 151), "html", null, true);
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 151)) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "content", [], "any", false, false, false, 151), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "              </select>
            </form>
          ";
            }
            // line 156
            echo "        </td>
        <td class=\"navigation_separator\"></td>
      </tr>
    </table>
  ";
        }
        $context["navigation_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "
";
        // line 163
        echo (isset($context["sql_query_message"]) || array_key_exists("sql_query_message", $context) ? $context["sql_query_message"] : (function () { throw new RuntimeError('Variable "sql_query_message" does not exist.', 163, $this->source); })());
        echo "

";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["navigation_html"]) || array_key_exists("navigation_html", $context) ? $context["navigation_html"] : (function () { throw new RuntimeError('Variable "navigation_html" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "

<input class=\"save_cells_at_once\" type=\"hidden\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["save_cells_at_once"]) || array_key_exists("save_cells_at_once", $context) ? $context["save_cells_at_once"] : (function () { throw new RuntimeError('Variable "save_cells_at_once" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "\">
<div class=\"common_hidden_inputs\">
  ";
        // line 169
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 169, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 169, $this->source); })()));
        echo "
</div>

";
        // line 172
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 172, $this->source); })()), "column_order", [], "any", false, false, false, 172))) {
            // line 173
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 173, $this->source); })()), "column_order", [], "any", false, false, false, 173), "order", [], "any", false, false, false, 173)) {
                // line 174
                echo "    <input class=\"col_order\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 174, $this->source); })()), "column_order", [], "any", false, false, false, 174), "order", [], "any", false, false, false, 174), ","), "html", null, true);
                echo "\">
  ";
            }
            // line 176
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 176, $this->source); })()), "column_order", [], "any", false, false, false, 176), "visibility", [], "any", false, false, false, 176)) {
                // line 177
                echo "    <input class=\"col_visib\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 177, $this->source); })()), "column_order", [], "any", false, false, false, 177), "visibility", [], "any", false, false, false, 177), ","), "html", null, true);
                echo "\">
  ";
            }
            // line 179
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 179, $this->source); })()), "column_order", [], "any", false, false, false, 179), "is_view", [], "any", false, false, false, 179)) {
                // line 180
                echo "    <input class=\"table_create_time\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 180, $this->source); })()), "column_order", [], "any", false, false, false, 180), "table_create_time", [], "any", false, false, false, 180), "html", null, true);
                echo "\">
  ";
            }
        }
        // line 183
        echo "
";
        // line 184
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 184, $this->source); })()), "options", [], "any", false, false, false, 184))) {
            // line 185
            echo "  <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" name=\"displayOptionsForm\" class=\"ajax d-print-none\">
    ";
            // line 186
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(["db" =>             // line 187
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 187, $this->source); })()), "table" =>             // line 188
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 188, $this->source); })()), "sql_query" =>             // line 189
(isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 189, $this->source); })()), "goto" =>             // line 190
(isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 190, $this->source); })()), "display_options_form" => 1]);
            // line 192
            echo "

    ";
            // line 194
            if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 194, $this->source); })()) != "disabled")) {
                // line 195
                echo "    <div class=\"mb-3\">
      <button class=\"btn btn-sm btn-secondary\" type=\"button\" id=\"extraOptionsButton\" data-bs-toggle=\"collapse\" data-bs-target=\"#extraOptions\" aria-expanded=\"";
                // line 196
                echo ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 196, $this->source); })()) == "open")) ? ("true") : ("false"));
                echo "\" aria-controls=\"extraOptions\">
        ";
                // line 197
echo _gettext("Extra options");
                // line 198
                echo "      </button>
    </div>
    <div class=\"collapse mb-3";
                // line 200
                echo ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 200, $this->source); })()) == "open")) ? (" show") : (""));
                echo "\" id=\"extraOptions\">
    ";
            }
            // line 202
            echo "
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioP";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "\" value=\"P\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 208, $this->source); })()), "options", [], "any", false, false, false, 208), "pftext", [], "any", false, false, false, 208) == "P")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"partialFulltextRadioP";
            // line 209
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 209, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Partial texts");
            echo "</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioF";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 212, $this->source); })()), "html", null, true);
            echo "\" value=\"F\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 212, $this->source); })()), "options", [], "any", false, false, false, 212), "pftext", [], "any", false, false, false, 212) == "F")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"partialFulltextRadioF";
            // line 213
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 213, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Full texts");
            echo "</label>
              </div>
            </fieldset>

            ";
            // line 217
            if (((isset($context["relwork"]) || array_key_exists("relwork", $context) ? $context["relwork"] : (function () { throw new RuntimeError('Variable "relwork" does not exist.', 217, $this->source); })()) && (isset($context["displaywork"]) || array_key_exists("displaywork", $context) ? $context["displaywork"] : (function () { throw new RuntimeError('Variable "displaywork" does not exist.', 217, $this->source); })()))) {
                // line 218
                echo "              <fieldset class=\"col-auto\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioK";
                // line 220
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 220, $this->source); })()), "html", null, true);
                echo "\" value=\"K\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 220, $this->source); })()), "options", [], "any", false, false, false, 220), "relational_display", [], "any", false, false, false, 220) == "K")) ? (" checked") : (""));
                echo ">
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioK";
                // line 221
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 221, $this->source); })()), "html", null, true);
                echo "\">";
echo _gettext("Relational key");
                echo "</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioD";
                // line 224
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 224, $this->source); })()), "html", null, true);
                echo "\" value=\"D\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 224, $this->source); })()), "options", [], "any", false, false, false, 224), "relational_display", [], "any", false, false, false, 224) == "D")) ? (" checked") : (""));
                echo ">
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioD";
                // line 225
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 225, $this->source); })()), "html", null, true);
                echo "\">";
echo _gettext("Display column for relationships");
                echo "</label>
                </div>
              </fieldset>
            ";
            }
            // line 229
            echo "
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_binary\" id=\"display_binary_";
            // line 232
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 232, $this->source); })()), "html", null, true);
            echo "\"";
            // line 233
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 233, $this->source); })()), "options", [], "any", false, false, false, 233), "display_binary", [], "any", false, false, false, 233))) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"display_binary_";
            // line 234
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 234, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Show binary contents");
            echo "</label>
              </div>

              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_blob\" id=\"display_blob_";
            // line 238
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "\"";
            // line 239
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 239, $this->source); })()), "options", [], "any", false, false, false, 239), "display_blob", [], "any", false, false, false, 239))) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"display_blob_";
            // line 240
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 240, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Show BLOB contents");
            echo "</label>
              </div>
            </fieldset>

            ";
            // line 248
            echo "            <div class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"hide_transformation\" id=\"hide_transformation_";
            // line 250
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 250, $this->source); })()), "html", null, true);
            echo "\"";
            // line 251
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 251, $this->source); })()), "options", [], "any", false, false, false, 251), "hide_transformation", [], "any", false, false, false, 251))) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"hide_transformation_";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 252, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Hide browser transformation");
            echo "</label>
              </div>
            </div>

            <fieldset class=\"col-auto\">
              ";
            // line 257
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 257, $this->source); })()), "options", [], "any", false, false, false, 257), "possible_as_geometry", [], "any", false, false, false, 257)) {
                // line 258
                echo "                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioGeom";
                // line 259
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 259, $this->source); })()), "html", null, true);
                echo "\" value=\"GEOM\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 259, $this->source); })()), "options", [], "any", false, false, false, 259), "geo_option", [], "any", false, false, false, 259) == "GEOM")) ? (" checked") : (""));
                echo ">
                  <label class=\"form-check-label\" for=\"geoOptionRadioGeom";
                // line 260
                echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 260, $this->source); })()), "html", null, true);
                echo "\">";
echo _gettext("Geometry");
                echo "</label>
                </div>
              ";
            }
            // line 263
            echo "              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkt";
            // line 264
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 264, $this->source); })()), "html", null, true);
            echo "\" value=\"WKT\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 264, $this->source); })()), "options", [], "any", false, false, false, 264), "geo_option", [], "any", false, false, false, 264) == "WKT")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"geoOptionRadioWkt";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 265, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Well Known Text");
            echo "</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkb";
            // line 268
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 268, $this->source); })()), "html", null, true);
            echo "\" value=\"WKB\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 268, $this->source); })()), "options", [], "any", false, false, false, 268), "geo_option", [], "any", false, false, false, 268) == "WKB")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"geoOptionRadioWkb";
            // line 269
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 269, $this->source); })()), "html", null, true);
            echo "\">";
echo _gettext("Well Known Binary");
            echo "</label>
              </div>
            </fieldset>
          </div>
        </div>

        <div class=\"card-footer\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 276
echo _gettext("Go");
            echo "\">
        </div>
      </div>
    ";
            // line 279
            if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 279, $this->source); })()) != "disabled")) {
                // line 280
                echo "    </div>
    ";
            }
            // line 282
            echo "  </form>
";
        }
        // line 284
        echo "
";
        // line 285
        if (twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 285, $this->source); })()), "has_bulk_actions_form", [], "any", false, false, false, 285)) {
            // line 286
            echo "  <form method=\"post\" name=\"resultsForm\" id=\"resultsForm_";
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 286, $this->source); })()), "html", null, true);
            echo "\" class=\"ajax\">
    ";
            // line 287
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 287, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 287, $this->source); })()));
            echo "
    <input type=\"hidden\" name=\"goto\" value=\"";
            // line 288
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\">
";
        }
        // line 290
        echo "
  <div class=\"table-responsive-md\">
    <table class=\"table table-striped table-hover table-sm table_results data ajax w-auto\" data-uniqueId=\"";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 292, $this->source); })()), "html", null, true);
        echo "\">
      <thead>
        <tr>

          ";
        // line 296
        echo twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 296, $this->source); })()), "button", [], "any", false, false, false, 296);
        echo "
          ";
        // line 297
        echo twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 297, $this->source); })()), "table_headers_for_columns", [], "any", false, false, false, 297);
        echo "
          ";
        // line 298
        echo twig_get_attribute($this->env, $this->source, (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 298, $this->source); })()), "column_at_right_side", [], "any", false, false, false, 298);
        echo "

        </tr>
      </thead>

      <tbody>
        ";
        // line 304
        echo (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 304, $this->source); })());
        echo "
      </tbody>
    </table>
  </div>

";
        // line 309
        if ((array_key_exists("has_bulk_links", $context) && (isset($context["has_bulk_links"]) || array_key_exists("has_bulk_links", $context) ? $context["has_bulk_links"] : (function () { throw new RuntimeError('Variable "has_bulk_links" does not exist.', 309, $this->source); })()))) {
            // line 310
            echo "    <div class=\"d-print-none\">
      ";
            // line 311
            echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => (isset($context["text_dir"]) || array_key_exists("text_dir", $context) ? $context["text_dir"] : (function () { throw new RuntimeError('Variable "text_dir" does not exist.', 311, $this->source); })()), "width" => "38", "height" => "22"]);
            echo "
      <input type=\"checkbox\" id=\"resultsForm_";
            // line 312
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 312, $this->source); })()), "html", null, true);
            echo "_checkall\" class=\"checkall_box\" title=\"";
echo _gettext("Check all");
            echo "\">
      <label for=\"resultsForm_";
            // line 313
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 313, $this->source); })()), "html", null, true);
            echo "_checkall\">";
echo _gettext("Check all");
            echo "</label>
      <em class=\"with-selected\">";
            // line 314
echo _gettext("With selected:");
            echo "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"edit\" title=\"";
            // line 316
echo _gettext("Edit");
            echo "\">
        ";
            // line 317
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
            echo "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"copy\" title=\"";
            // line 320
echo _gettext("Copy");
            echo "\">
        ";
            // line 321
            echo $this->env->getFunction('get_icon')->getCallable()("b_insrow", _gettext("Copy"));
            echo "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete\" title=\"";
            // line 324
echo _gettext("Delete");
            echo "\">
        ";
            // line 325
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Delete"));
            echo "
      </button>

      ";
            // line 328
            if ((isset($context["has_export_button"]) || array_key_exists("has_export_button", $context) ? $context["has_export_button"] : (function () { throw new RuntimeError('Variable "has_export_button" does not exist.', 328, $this->source); })())) {
                // line 329
                echo "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
echo _gettext("Export");
                echo "\">
          ";
                // line 330
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
                echo "
        </button>
      ";
            }
            // line 333
            echo "    </div>

    <input type=\"hidden\" name=\"clause_is_unique\" value=\"";
            // line 335
            echo twig_escape_filter($this->env, (isset($context["clause_is_unique"]) || array_key_exists("clause_is_unique", $context) ? $context["clause_is_unique"] : (function () { throw new RuntimeError('Variable "clause_is_unique" does not exist.', 335, $this->source); })()), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"sql_query\" value=\"";
            // line 336
            echo twig_escape_filter($this->env, (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 336, $this->source); })()), "html", null, true);
            echo "\">
  </form>
";
        }
        // line 339
        echo "
";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["navigation_html"]) || array_key_exists("navigation_html", $context) ? $context["navigation_html"] : (function () { throw new RuntimeError('Variable "navigation_html" does not exist.', 340, $this->source); })()), "html", null, true);
        echo "

";
        // line 342
        if ( !twig_test_empty((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 342, $this->source); })()))) {
            // line 343
            echo "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
            // line 344
echo _gettext("Query results operations");
            echo "</div>

    <div class=\"card-body\">
      ";
            // line 347
            if (twig_get_attribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 347, $this->source); })()), "has_print_link", [], "any", false, false, false, 347)) {
                // line 348
                echo "        <button type=\"button\" class=\"btn btn-link jsPrintButton\">";
                echo $this->env->getFunction('get_icon')->getCallable()("b_print", _gettext("Print"), true);
                echo "</button>

        ";
                // line 350
                echo $this->env->getFunction('link_or_button')->getCallable()("#", null, $this->env->getFunction('get_icon')->getCallable()("b_insrow", _gettext("Copy to clipboard"), true), ["id" => "copyToClipBoard", "class" => "btn"]);
                // line 355
                echo "
      ";
            }
            // line 357
            echo "
      ";
            // line 358
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 358, $this->source); })()), "has_procedure", [], "any", false, false, false, 358)) {
                // line 359
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 359, $this->source); })()), "has_export_link", [], "any", false, false, false, 359)) {
                    // line 360
                    echo "          ";
                    echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/table/export"), twig_get_attribute($this->env, $this->source,                     // line 362
(isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 362, $this->source); })()), "url_params", [], "any", false, false, false, 362), $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"), true), ["class" => "btn"]);
                    // line 365
                    echo "

          ";
                    // line 367
                    echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/table/chart"), twig_get_attribute($this->env, $this->source,                     // line 369
(isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 369, $this->source); })()), "url_params", [], "any", false, false, false, 369), $this->env->getFunction('get_icon')->getCallable()("b_chart", _gettext("Display chart"), true), ["class" => "btn"]);
                    // line 372
                    echo "

          ";
                    // line 374
                    if (twig_get_attribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 374, $this->source); })()), "has_geometry", [], "any", false, false, false, 374)) {
                        // line 375
                        echo "            ";
                        echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/table/gis-visualization"), twig_get_attribute($this->env, $this->source,                         // line 377
(isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 377, $this->source); })()), "url_params", [], "any", false, false, false, 377), $this->env->getFunction('get_icon')->getCallable()("b_globe", _gettext("Visualize GIS data"), true), ["class" => "btn"]);
                        // line 380
                        echo "
          ";
                    }
                    // line 382
                    echo "        ";
                }
                // line 383
                echo "
        <span>
          ";
                // line 385
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/view/create"), ["db" =>                 // line 387
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 387, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 387, $this->source); })()), "sql_query" => (isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 387, $this->source); })()), "printview" => true], $this->env->getFunction('get_icon')->getCallable()("b_view_add", _gettext("Create view"), true), ["class" => "btn create_view ajax"]);
                // line 390
                echo "
        </span>
      ";
            }
            // line 393
            echo "    </div>
  </div>
";
        }
        // line 396
        if (( !twig_test_empty((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 396, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, (isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 396, $this->source); })()), "has_procedure", [], "any", false, false, false, 396))) {
            // line 397
            echo twig_include($this->env, $context, "modals/create_view.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/table.twig";
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
        return array (  955 => 397,  953 => 396,  948 => 393,  943 => 390,  941 => 387,  940 => 385,  936 => 383,  933 => 382,  929 => 380,  927 => 377,  925 => 375,  923 => 374,  919 => 372,  917 => 369,  916 => 367,  912 => 365,  910 => 362,  908 => 360,  905 => 359,  903 => 358,  900 => 357,  896 => 355,  894 => 350,  888 => 348,  886 => 347,  880 => 344,  877 => 343,  875 => 342,  870 => 340,  867 => 339,  861 => 336,  857 => 335,  853 => 333,  847 => 330,  842 => 329,  840 => 328,  834 => 325,  830 => 324,  824 => 321,  820 => 320,  814 => 317,  810 => 316,  805 => 314,  799 => 313,  793 => 312,  789 => 311,  786 => 310,  784 => 309,  776 => 304,  767 => 298,  763 => 297,  759 => 296,  752 => 292,  748 => 290,  743 => 288,  739 => 287,  734 => 286,  732 => 285,  729 => 284,  725 => 282,  721 => 280,  719 => 279,  713 => 276,  701 => 269,  695 => 268,  687 => 265,  681 => 264,  678 => 263,  670 => 260,  664 => 259,  661 => 258,  659 => 257,  649 => 252,  645 => 251,  642 => 250,  638 => 248,  629 => 240,  625 => 239,  622 => 238,  613 => 234,  609 => 233,  606 => 232,  601 => 229,  592 => 225,  586 => 224,  578 => 221,  572 => 220,  568 => 218,  566 => 217,  557 => 213,  551 => 212,  543 => 209,  537 => 208,  529 => 202,  524 => 200,  520 => 198,  518 => 197,  514 => 196,  511 => 195,  509 => 194,  505 => 192,  503 => 190,  502 => 189,  501 => 188,  500 => 187,  499 => 186,  494 => 185,  492 => 184,  489 => 183,  482 => 180,  479 => 179,  473 => 177,  470 => 176,  464 => 174,  461 => 173,  459 => 172,  453 => 169,  448 => 167,  443 => 165,  438 => 163,  435 => 162,  427 => 156,  422 => 153,  409 => 151,  405 => 150,  402 => 149,  400 => 148,  396 => 147,  391 => 146,  389 => 145,  379 => 140,  372 => 136,  363 => 129,  350 => 127,  345 => 126,  339 => 124,  337 => 123,  332 => 121,  328 => 119,  326 => 118,  325 => 117,  324 => 116,  320 => 115,  312 => 110,  303 => 104,  298 => 101,  288 => 96,  284 => 95,  281 => 94,  278 => 93,  276 => 91,  275 => 90,  271 => 89,  268 => 88,  266 => 87,  263 => 86,  259 => 84,  257 => 83,  254 => 82,  251 => 81,  241 => 77,  238 => 75,  234 => 73,  232 => 72,  230 => 71,  226 => 70,  222 => 69,  218 => 68,  214 => 67,  210 => 66,  204 => 65,  201 => 64,  199 => 63,  189 => 59,  186 => 57,  182 => 55,  180 => 54,  178 => 53,  174 => 52,  170 => 51,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  151 => 46,  149 => 45,  144 => 43,  141 => 42,  131 => 38,  126 => 35,  124 => 34,  122 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  85 => 21,  80 => 18,  78 => 17,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set navigation_html %}
  {% if navigation is not empty %}
    <table class=\"navigation d-print-none\">
      <tr>
        <td class=\"navigation_separator\"></td>

        {% if navigation.pos and not navigation.is_showing_all %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"0\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set begin_text %}
                {{- show_icons('TableNavigationLinksMode') ? '<<' }}
                {%- if show_text('TableNavigationLinksMode') -%}
                  &nbsp;{% trans %}Begin{% context %}First page{% endtrans %}
                {%- endif -%}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ begin_text }}\" title=\"{% trans %}Begin{% context %}First page{% endtrans %}\">
            </form>
          </td>

          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"{{ navigation.pos_previous }}\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set previous_text %}
                {{- show_icons('TableNavigationLinksMode') ? '<' }}
                {%- if show_text('TableNavigationLinksMode') -%}
                  &nbsp;{% trans %}Previous{% context %}Previous page{% endtrans %}
                {%- endif -%}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ previous_text }}\" title=\"{% trans %}Previous{% context %}Previous page{% endtrans %}\">
            </form>
          </td>
        {% endif %}

        {{ navigation.page_selector|raw }}

        {% if not navigation.is_last_page %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"{{ navigation.pos_next }}\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set next_text %}
                {%- if show_text('TableNavigationLinksMode') -%}
                  {% trans %}Next{% context %}Next page{% endtrans %}&nbsp;
                {%- endif -%}
                {{ show_icons('TableNavigationLinksMode') ? '>' -}}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ next_text }}\" title=\"{% trans %}Next{% context %}Next page{% endtrans %}\">
            </form>
          </td>

          {% if navigation.is_last_page_known %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\"{{ navigation.onsubmit|raw }}>
              {{ get_hidden_inputs(db, table) }}
              <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
              <input type=\"hidden\" name=\"pos\" value=\"{{ navigation.pos_last }}\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"{{ is_browse_distinct }}\">
              <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
              {% set end_text %}
                {%- if show_text('TableNavigationLinksMode') -%}
                  {% trans %}End{% context %}Last page{% endtrans %}&nbsp;
                {%- endif -%}
                {{ show_icons('TableNavigationLinksMode') ? '>>' -}}
              {% endset %}
              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"{{ end_text }}\" title=\"{% trans %}End{% context %}Last page{% endtrans %}\">
            </form>
          </td>
          {% endif %}
        {% endif %}

        {% if navigation.number_total_page != 1 %}
          <td><div class=\"navigation_separator\">|</div></td>
        {% endif %}

        {% if navigation.has_show_all %}
          <td>
            <form action=\"{{ url('/sql') }}\" method=\"post\">
              {{ get_hidden_fields(navigation.hidden_fields|merge({
                'session_max_rows': navigation.session_max_rows,
                'pos': '0'
              })) }}
              <input type=\"checkbox\" name=\"navig\" id=\"showAll_{{ unique_id }}\" class=\"showAllRows\" value=\"all\"
                {{- navigation.is_showing_all ? ' checked' }}>
              <label for=\"showAll_{{ unique_id }}\">{% trans 'Show all' %}</label>
            </form>
          </td>
          <td><div class=\"navigation_separator\">|</div></td>
        {% endif %}

        <td>
          <div class=\"save_edited hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"{% trans 'Save edited data' %}\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td>
          <div class=\"restore_column hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"{% trans 'Restore column order' %}\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td class=\"navigation_goto\">
          <form action=\"{{ url('/sql') }}\" method=\"post\" class=\"maxRowsForm\">
            {{ get_hidden_fields(navigation.hidden_fields|merge({
              'pos': navigation.pos,
              'unlim_num_rows': unlim_num_rows
            })) }}

            <label for=\"sessionMaxRowsSelect\">{% trans 'Number of rows:' %}</label>
            <select class=\"autosubmit\" name=\"session_max_rows\" id=\"sessionMaxRowsSelect\">
              {% if navigation.is_showing_all %}
                <option value=\"\" disabled selected>{% trans 'All' %}</option>
              {% endif %}
              {% for option in ['25', '50', '100', '250', '500'] %}
                <option value=\"{{ option }}\"{{ navigation.max_rows == option ? ' selected' }}>{{ option }}</option>
              {% endfor %}
            </select>
          </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td class=\"largescreenonly\">
          <div class=\"row g-1 p-1 align-items-center\">
            <div class=\"col-auto\">
              <label for=\"filterRows\" class=\"col-form-label\">{% trans 'Filter rows:' %}</label>
            </div>
            <div class=\"col-auto\">
              <input type=\"text\" id=\"filterRows\" class=\"filter_rows form-control\"
                    placeholder=\"{% trans 'Search this table' %}\" data-for=\"{{ unique_id }}\">
            </div>
          </div>
        </td>
        <td class=\"largescreenonly\">
          {% if navigation.sort_by_key is not empty %}
            <form action=\"{{ url('/sql') }}\" method=\"post\" class=\"d-print-none\">
              {{ get_hidden_fields(navigation.sort_by_key.hidden_fields) }}
              {% trans 'Sort by key:' %}
              <select name=\"sql_query\" class=\"autosubmit\">
                {% for option in navigation.sort_by_key.options %}
                  <option value=\"{{ option.value }}\"{{ option.is_selected ? ' selected' }}>{{ option.content }}</option>
                {% endfor %}
              </select>
            </form>
          {% endif %}
        </td>
        <td class=\"navigation_separator\"></td>
      </tr>
    </table>
  {% endif %}
{% endset %}

{{ sql_query_message|raw }}

{{ navigation_html }}

<input class=\"save_cells_at_once\" type=\"hidden\" value=\"{{ save_cells_at_once }}\">
<div class=\"common_hidden_inputs\">
  {{ get_hidden_inputs(db, table) }}
</div>

{% if headers.column_order is not empty %}
  {% if headers.column_order.order %}
    <input class=\"col_order\" type=\"hidden\" value=\"{{ headers.column_order.order|join(',') }}\">
  {% endif %}
  {% if headers.column_order.visibility %}
    <input class=\"col_visib\" type=\"hidden\" value=\"{{ headers.column_order.visibility|join(',') }}\">
  {% endif %}
  {% if not headers.column_order.is_view %}
    <input class=\"table_create_time\" type=\"hidden\" value=\"{{ headers.column_order.table_create_time }}\">
  {% endif %}
{% endif %}

{% if headers.options is not empty %}
  <form method=\"post\" action=\"{{ url('/sql') }}\" name=\"displayOptionsForm\" class=\"ajax d-print-none\">
    {{ get_hidden_inputs({
      'db': db,
      'table': table,
      'sql_query': sql_query,
      'goto': goto,
      'display_options_form': 1
    }) }}

    {% if default_sliders_state != 'disabled' %}
    <div class=\"mb-3\">
      <button class=\"btn btn-sm btn-secondary\" type=\"button\" id=\"extraOptionsButton\" data-bs-toggle=\"collapse\" data-bs-target=\"#extraOptions\" aria-expanded=\"{{ default_sliders_state == 'open' ? 'true' : 'false' }}\" aria-controls=\"extraOptions\">
        {% trans 'Extra options' %}
      </button>
    </div>
    <div class=\"collapse mb-3{{ default_sliders_state == 'open' ? ' show' }}\" id=\"extraOptions\">
    {% endif %}

      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioP{{ unique_id }}\" value=\"P\"{{ headers.options.pftext == 'P' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"partialFulltextRadioP{{ unique_id }}\">{% trans 'Partial texts' %}</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioF{{ unique_id }}\" value=\"F\"{{ headers.options.pftext == 'F' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"partialFulltextRadioF{{ unique_id }}\">{% trans 'Full texts' %}</label>
              </div>
            </fieldset>

            {% if relwork and displaywork %}
              <fieldset class=\"col-auto\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioK{{ unique_id }}\" value=\"K\"{{ headers.options.relational_display == 'K' ? ' checked' }}>
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioK{{ unique_id }}\">{% trans 'Relational key' %}</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioD{{ unique_id }}\" value=\"D\"{{ headers.options.relational_display == 'D' ? ' checked' }}>
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioD{{ unique_id }}\">{% trans 'Display column for relationships' %}</label>
                </div>
              </fieldset>
            {% endif %}

            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_binary\" id=\"display_binary_{{ unique_id }}\"
                  {{- headers.options.display_binary is not empty ? ' checked' }}>
                <label class=\"form-check-label\" for=\"display_binary_{{ unique_id }}\">{% trans 'Show binary contents' %}</label>
              </div>

              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_blob\" id=\"display_blob_{{ unique_id }}\"
                  {{- headers.options.display_blob is not empty ? ' checked' }}>
                <label class=\"form-check-label\" for=\"display_blob_{{ unique_id }}\">{% trans 'Show BLOB contents' %}</label>
              </div>
            </fieldset>

            {# I would have preferred to name this \"display_transformation\".
               This is the only way I found to be able to keep this setting sticky
               per SQL query, and at the same time have a default that displays
               the transformations. #}
            <div class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"hide_transformation\" id=\"hide_transformation_{{ unique_id }}\"
                  {{- headers.options.hide_transformation is not empty ? ' checked' }}>
                <label class=\"form-check-label\" for=\"hide_transformation_{{ unique_id }}\">{% trans 'Hide browser transformation' %}</label>
              </div>
            </div>

            <fieldset class=\"col-auto\">
              {% if headers.options.possible_as_geometry %}
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioGeom{{ unique_id }}\" value=\"GEOM\"{{ headers.options.geo_option == 'GEOM' ? ' checked' }}>
                  <label class=\"form-check-label\" for=\"geoOptionRadioGeom{{ unique_id }}\">{% trans 'Geometry' %}</label>
                </div>
              {% endif %}
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkt{{ unique_id }}\" value=\"WKT\"{{ headers.options.geo_option == 'WKT' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"geoOptionRadioWkt{{ unique_id }}\">{% trans 'Well Known Text' %}</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkb{{ unique_id }}\" value=\"WKB\"{{ headers.options.geo_option == 'WKB' ? ' checked' }}>
                <label class=\"form-check-label\" for=\"geoOptionRadioWkb{{ unique_id }}\">{% trans 'Well Known Binary' %}</label>
              </div>
            </fieldset>
          </div>
        </div>

        <div class=\"card-footer\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
        </div>
      </div>
    {% if default_sliders_state != 'disabled' %}
    </div>
    {% endif %}
  </form>
{% endif %}

{% if headers.has_bulk_actions_form %}
  <form method=\"post\" name=\"resultsForm\" id=\"resultsForm_{{ unique_id }}\" class=\"ajax\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"goto\" value=\"{{ url('/sql') }}\">
{% endif %}

  <div class=\"table-responsive-md\">
    <table class=\"table table-striped table-hover table-sm table_results data ajax w-auto\" data-uniqueId=\"{{ unique_id }}\">
      <thead>
        <tr>

          {{ headers.button|raw }}
          {{ headers.table_headers_for_columns|raw }}
          {{ headers.column_at_right_side|raw }}

        </tr>
      </thead>

      <tbody>
        {{ body|raw }}
      </tbody>
    </table>
  </div>

{% if has_bulk_links is defined and has_bulk_links %}
    <div class=\"d-print-none\">
      {{ get_image('select_all_arrow', 'With selected:'|trans, {'dir': text_dir, 'width': '38', 'height': '22'}) }}
      <input type=\"checkbox\" id=\"resultsForm_{{ unique_id }}_checkall\" class=\"checkall_box\" title=\"{% trans 'Check all' %}\">
      <label for=\"resultsForm_{{ unique_id }}_checkall\">{% trans 'Check all' %}</label>
      <em class=\"with-selected\">{% trans 'With selected:' %}</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"edit\" title=\"{% trans 'Edit' %}\">
        {{ get_icon('b_edit', 'Edit'|trans) }}
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"copy\" title=\"{% trans 'Copy' %}\">
        {{ get_icon('b_insrow', 'Copy'|trans) }}
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete\" title=\"{% trans 'Delete' %}\">
        {{ get_icon('b_drop', 'Delete'|trans) }}
      </button>

      {% if has_export_button %}
        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"{% trans 'Export' %}\">
          {{ get_icon('b_tblexport', 'Export'|trans) }}
        </button>
      {% endif %}
    </div>

    <input type=\"hidden\" name=\"clause_is_unique\" value=\"{{ clause_is_unique }}\">
    <input type=\"hidden\" name=\"sql_query\" value=\"{{ sql_query }}\">
  </form>
{% endif %}

{{ navigation_html }}

{% if operations is not empty %}
  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">{% trans 'Query results operations' %}</div>

    <div class=\"card-body\">
      {% if operations.has_print_link %}
        <button type=\"button\" class=\"btn btn-link jsPrintButton\">{{ get_icon('b_print', 'Print'|trans, true) }}</button>

        {{ link_or_button(
          '#',
          null,
          get_icon('b_insrow', 'Copy to clipboard'|trans, true),
          {'id': 'copyToClipBoard', 'class': 'btn'}
        ) }}
      {% endif %}

      {% if not operations.has_procedure %}
        {% if operations.has_export_link %}
          {{ link_or_button(
            url('/table/export'),
            operations.url_params,
            get_icon('b_tblexport', 'Export'|trans, true),
            {'class': 'btn'}
          ) }}

          {{ link_or_button(
            url('/table/chart'),
            operations.url_params,
            get_icon('b_chart', 'Display chart'|trans, true),
            {'class': 'btn'}
          ) }}

          {% if operations.has_geometry %}
            {{ link_or_button(
              url('/table/gis-visualization'),
              operations.url_params,
              get_icon('b_globe', 'Visualize GIS data'|trans, true),
              {'class': 'btn'}
            ) }}
          {% endif %}
        {% endif %}

        <span>
          {{ link_or_button(
            url('/view/create'),
            {'db': db, 'table': table, 'sql_query': sql_query, 'printview': true},
            get_icon('b_view_add', 'Create view'|trans, true),
            {'class': 'btn create_view ajax'}
          ) }}
        </span>
      {% endif %}
    </div>
  </div>
{% endif %}
{% if operations is not empty and not operations.has_procedure %}
{{ include('modals/create_view.twig') }}
{% endif %}
", "display/results/table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/table.twig");
    }
}
