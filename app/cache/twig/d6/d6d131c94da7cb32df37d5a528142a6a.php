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
class __TwigTemplate_6e6710bdeda492357225b49e68d733be extends Template
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
        echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 6, $this->source); })()), "url", [], "any", false, false, false, 6));
        echo "\" data-raw-text=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\" draggable=\"false\">
        ";
        // line 7
        if ($this->env->getFunction('show_text')->getCallable()("TabsMode")) {
echo _gettext("Server:");
        }
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
      </a>
    </li>

    ";
        // line 12
        if ( !twig_test_empty((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "      <li class=\"breadcrumb-item\">
        ";
            // line 14
            echo (($this->env->getFunction('show_icons')->getCallable()("TabsMode")) ? ($this->env->getFunction('get_image')->getCallable()("s_db")) : (""));
            echo "
        <a href=\"";
            // line 15
            echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 15, $this->source); })()), "url", [], "any", false, false, false, 15), ["db" => twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15)]);
            echo "\" data-raw-text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\" draggable=\"false\">
          ";
            // line 16
            if ($this->env->getFunction('show_text')->getCallable()("TabsMode")) {
echo _gettext("Database:");
            }
            // line 17
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
        </a>
      </li>

      ";
            // line 21
            if ( !twig_test_empty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 21, $this->source); })()))) {
                // line 22
                echo "        <li class=\"breadcrumb-item\">
          ";
                // line 23
                echo (($this->env->getFunction('show_icons')->getCallable()("TabsMode")) ? ($this->env->getFunction('get_image')->getCallable()(((twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 23, $this->source); })()), "is_view", [], "any", false, false, false, 23)) ? ("b_views") : ("s_tbl")))) : (""));
                echo "
          <a href=\"";
                // line 24
                echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 24, $this->source); })()), "url", [], "any", false, false, false, 24), ["db" => twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "table" => twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24)]);
                echo "\" data-raw-text=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\" draggable=\"false\">
            ";
                // line 25
                if ($this->env->getFunction('show_text')->getCallable()("TabsMode")) {
                    // line 26
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 26, $this->source); })()), "is_view", [], "any", false, false, false, 26)) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "
          </a>
        </li>

        ";
                // line 36
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 36, $this->source); })()), "comment", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "          <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 37, $this->source); })()), "comment", [], "any", false, false, false, 37), "html", null, true);
                    echo "”</span>
        ";
                }
                // line 39
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", true, true, false, 39) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 39, $this->source); })()), "comment", [], "any", false, false, false, 39)))) {
                // line 40
                echo "        <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 40, $this->source); })()), "comment", [], "any", false, false, false, 40), "html", null, true);
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
        // line 49
// l10n: Show or hide the menu using the hamburger style button
echo _gettext("Toggle navigation");
        echo "\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul id=\"topmenu\" class=\"navbar-nav\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 55
            echo "          <li class=\"nav-item";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 55)) ? (" active") : (""));
            echo "\">
            <a class=\"nav-link text-nowrap disableAjax\" href=\"";
            // line 56
            echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tab"], "route", [], "any", false, false, false, 56), twig_array_merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 56, $this->source); })()), (((twig_get_attribute($this->env, $this->source, $context["tab"], "args", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 56)) : ([]))));
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
        return array (  205 => 64,  197 => 61,  190 => 59,  188 => 58,  184 => 57,  180 => 56,  175 => 55,  171 => 54,  162 => 49,  155 => 43,  152 => 42,  146 => 40,  143 => 39,  137 => 37,  135 => 36,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  112 => 27,  109 => 26,  107 => 25,  101 => 24,  97 => 23,  94 => 22,  92 => 21,  84 => 17,  80 => 16,  74 => 15,  70 => 14,  67 => 13,  65 => 12,  57 => 8,  53 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"floating_menubar\" class=\"w-100 position-fixed top-0 start-0 end-0 d-print-none\"></div>
<nav id=\"server-breadcrumb\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb breadcrumb-navbar\">
    <li class=\"breadcrumb-item\">
      {{ show_icons('TabsMode') ? get_image('s_host') }}
      <a href=\"{{ url(server.url) }}\" data-raw-text=\"{{ server.name }}\" draggable=\"false\">
        {% if show_text('TabsMode') %}{% trans 'Server:' %}{% endif %}
        {{ server.name }}
      </a>
    </li>

    {% if database is not empty %}
      <li class=\"breadcrumb-item\">
        {{ show_icons('TabsMode') ? get_image('s_db') }}
        <a href=\"{{ url(database.url, {'db': database.name}) }}\" data-raw-text=\"{{ database.name }}\" draggable=\"false\">
          {% if show_text('TabsMode') %}{% trans 'Database:' %}{% endif %}
          {{ database.name }}
        </a>
      </li>

      {% if table is not empty %}
        <li class=\"breadcrumb-item\">
          {{ show_icons('TabsMode') ? get_image(table.is_view ? 'b_views' : 's_tbl') }}
          <a href=\"{{ url(table.url, {'db': database.name, 'table': table.name}) }}\" data-raw-text=\"{{ table.name }}\" draggable=\"false\">
            {% if show_text('TabsMode') %}
              {% if table.is_view %}
                {% trans 'View:' %}
              {% else %}
                {% trans 'Table:' %}
              {% endif %}
            {% endif %}
            {{ table.name }}
          </a>
        </li>

        {% if table.comment is not empty %}
          <span class=\"breadcrumb-comment\" draggable=\"false\">“{{ table.comment }}”</span>
        {% endif %}
      {% elseif database.comment is defined and database.comment is not empty %}
        <span class=\"breadcrumb-comment\" draggable=\"false\">“{{ database.comment }}”</span>
      {% endif %}
    {% endif %}
  </ol>
</nav>

<div id=\"topmenucontainer\" class=\"menucontainer\">
  <nav class=\"navbar navbar-expand-lg\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-label=\"
      {%- trans %}Toggle navigation{% notes %}Show or hide the menu using the hamburger style button{% endtrans %}\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul id=\"topmenu\" class=\"navbar-nav\">
        {% for tab in tabs %}
          <li class=\"nav-item{{ tab.active ? ' active' }}\">
            <a class=\"nav-link text-nowrap disableAjax\" href=\"{{ url(tab.route, url_params|merge(tab.args ?? [])) }}\">
              {{ get_icon(tab.icon, tab.text, false, true, 'TabsMode') }}
              {% if tab.active %}
                <span class=\"visually-hidden\">{% trans %}(current){% notes %}Current page{% endtrans %}</span>
              {% endif %}
            </a>
          </li>
        {% endfor %}
      </ul>
    </div>
  </nav>
</div>
", "menu/main.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/menu/main.twig");
    }
}
