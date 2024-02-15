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

/* menu/main.twig */
class __TwigTemplate_f5ce7ff5f67dbe98604e418c6302f4f6 extends Template
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
        echo "<div id=\"floating_menubar\" class=\"w-100 position-fixed top-0 start-0 end-0 d-print-none\"></div>
<nav id=\"server-breadcrumb\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb breadcrumb-navbar\">
    <li class=\"breadcrumb-item\">
      ";
        // line 5
        echo (($this->env->getFunction('show_icons')->getCallable()("TabsMode")) ? ($this->env->getFunction('get_image')->getCallable()("s_host")) : (""));
        echo "
      <a href=\"";
        // line 6
        echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "url", [], "any", false, false, false, 6));
        echo "\" data-raw-text=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\" draggable=\"false\">
        ";
        // line 7
        if ($this->env->getFunction('show_text')->getCallable()("TabsMode")) {
echo _gettext("Server:");
        }
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
      </a>
    </li>

    ";
        // line 12
        if ( !twig_test_empty(($context["database"] ?? null))) {
            // line 13
            echo "      <li class=\"breadcrumb-item\">
        ";
            // line 14
            echo (($this->env->getFunction('show_icons')->getCallable()("TabsMode")) ? ($this->env->getFunction('get_image')->getCallable()("s_db")) : (""));
            echo "
        <a href=\"";
            // line 15
            echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "url", [], "any", false, false, false, 15), ["db" => twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 15)]);
            echo "\" data-raw-text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\" draggable=\"false\">
          ";
            // line 16
            if ($this->env->getFunction('show_text')->getCallable()("TabsMode")) {
echo _gettext("Database:");
            }
            // line 17
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
        </a>
      </li>

      ";
            // line 21
            if ( !twig_test_empty(($context["table"] ?? null))) {
                // line 22
                echo "        <li class=\"breadcrumb-item\">
          ";
                // line 23
                echo (($this->env->getFunction('show_icons')->getCallable()("TabsMode")) ? ($this->env->getFunction('get_image')->getCallable()(((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "is_view", [], "any", false, false, false, 23)) ? ("b_views") : ("s_tbl")))) : (""));
                echo "
          <a href=\"";
                // line 24
                echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "url", [], "any", false, false, false, 24), ["db" => twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 24), "table" => twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 24)]);
                echo "\" data-raw-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\" draggable=\"false\">
            ";
                // line 25
                if ($this->env->getFunction('show_text')->getCallable()("TabsMode")) {
                    // line 26
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "is_view", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "                ";
echo _gettext("View:");
                        // line 28
                        echo "              ";
                    } else {
                        // line 29
                        echo "                ";
echo _gettext("Table:");
                        // line 30
                        echo "              ";
                    }
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "
          </a>
        </li>

        ";
                // line 36
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "comment", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "          <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "comment", [], "any", false, false, false, 37), "html", null, true);
                    echo "”</span>
        ";
                }
                // line 39
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", true, true, false, 39) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", false, false, false, 39)))) {
                // line 40
                echo "        <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", false, false, false, 40), "html", null, true);
                echo "”</span>
      ";
            }
            // line 42
            echo "    ";
        }
        // line 43
        echo "  </ol>
</nav>

<div id=\"topmenucontainer\" class=\"menucontainer\">
  <nav class=\"navbar navbar-expand-lg\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-label=\"";
// l10n: Show or hide the menu using the hamburger style button
echo _gettext("Toggle navigation");
        // line 49
        echo "\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul id=\"topmenu\" class=\"navbar-nav\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 55
            echo "          <li class=\"nav-item";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 55)) ? (" active") : (""));
            echo "\">
            <a class=\"nav-link text-nowrap disableAjax\" href=\"";
            // line 56
            echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tab"], "route", [], "any", false, false, false, 56), twig_array_merge(($context["url_params"] ?? null), (((twig_get_attribute($this->env, $this->source, $context["tab"], "args", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 56)) : ([]))));
            echo "\">
              ";
            // line 57
            echo $this->env->getFunction('get_icon')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, $context["tab"], "text", [], "any", false, false, false, 57), false, true, "TabsMode");
            echo "
              ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 58)) {
                // line 59
                echo "                <span class=\"visually-hidden\">";
// l10n: Current page
echo _gettext("(current)");
                echo "</span>
              ";
            }
            // line 61
            echo "            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      </ul>
    </div>
  </nav>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "menu/main.twig";
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
        return array (  205 => 64,  197 => 61,  190 => 59,  188 => 58,  184 => 57,  180 => 56,  175 => 55,  171 => 54,  164 => 49,  155 => 43,  152 => 42,  146 => 40,  143 => 39,  137 => 37,  135 => 36,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  112 => 27,  109 => 26,  107 => 25,  101 => 24,  97 => 23,  94 => 22,  92 => 21,  84 => 17,  80 => 16,  74 => 15,  70 => 14,  67 => 13,  65 => 12,  57 => 8,  53 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/main.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\menu\\main.twig");
    }
}
