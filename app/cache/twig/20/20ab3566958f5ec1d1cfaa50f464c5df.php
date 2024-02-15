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

/* navigation/tree/node.twig */
class __TwigTemplate_b07b3021e087c847e2790fc0f1c95240 extends Template
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
        if ((isset($context["show_node"]) || array_key_exists("show_node", $context) ? $context["show_node"] : (function () { throw new RuntimeError('Variable "show_node" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "  <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["li_classes"]) || array_key_exists("li_classes", $context) ? $context["li_classes"] : (function () { throw new RuntimeError('Variable "li_classes" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\">
    <div class=\"block\">
      <i";
            // line 4
            echo ((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })()) == "first")) ? (" class=\"first\"") : (""));
            echo "></i>
      ";
            // line 5
            if ((isset($context["node_is_group"]) || array_key_exists("node_is_group", $context) ? $context["node_is_group"] : (function () { throw new RuntimeError('Variable "node_is_group" does not exist.', 5, $this->source); })())) {
                // line 6
                echo "        ";
                echo ((!twig_in_filter("last", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })()))) ? ("<b></b>") : (""));
                echo "
        <a class=\"";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["link_classes"]) || array_key_exists("link_classes", $context) ? $context["link_classes"] : (function () { throw new RuntimeError('Variable "link_classes" does not exist.', 7, $this->source); })()), "html", null, true);
                echo "\" href=\"#\">
          <span class=\"hide paths_nav\" data-apath=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 8, $this->source); })()), "a_path", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-vpath=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 8, $this->source); })()), "v_path", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-pos=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 8, $this->source); })()), "pos", [], "any", false, false, false, 8), "html", null, true);
                echo "\"></span>
          ";
                // line 9
                if ( !twig_test_empty((isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 9, $this->source); })()))) {
                    // line 10
                    echo "            <span class=\"hide ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 10, $this->source); })()), "position", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" data-name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 10, $this->source); })()), "data_name", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 10, $this->source); })()), "data_value", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"></span>
          ";
                }
                // line 12
                echo "          ";
                echo (isset($context["node_icon"]) || array_key_exists("node_icon", $context) ? $context["node_icon"] : (function () { throw new RuntimeError('Variable "node_icon" does not exist.', 12, $this->source); })());
                echo "
        </a>
      ";
            } elseif ( !twig_test_empty(            // line 14
(isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 14, $this->source); })()))) {
                // line 15
                echo "        <span class=\"hide ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 15, $this->source); })()), "position", [], "any", false, false, false, 15), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 15, $this->source); })()), "data_name", [], "any", false, false, false, 15), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 15, $this->source); })()), "data_value", [], "any", false, false, false, 15), "html", null, true);
                echo "\"></span>
      ";
            }
            // line 17
            echo "    </div>
    ";
            // line 18
            if ((isset($context["node_is_container"]) || array_key_exists("node_is_container", $context) ? $context["node_is_container"] : (function () { throw new RuntimeError('Variable "node_is_container" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "      <div class=\"fst-italic\">
    ";
            }
            // line 21
            echo "
    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 22, $this->source); })()), "isGroup", [], "any", false, false, false, 22)) {
                // line 23
                echo "      <div class=\"block second";
                echo (((isset($context["has_second_icon"]) || array_key_exists("has_second_icon", $context) ? $context["has_second_icon"] : (function () { throw new RuntimeError('Variable "has_second_icon" does not exist.', 23, $this->source); })())) ? (" double") : (""));
                echo "\">
        <u>";
                // line 24
                echo $this->env->getFunction('get_image')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 24, $this->source); })()), "icon", [], "any", false, false, false, 24), "image", [], "array", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 24, $this->source); })()), "icon", [], "any", false, false, false, 24), "title", [], "array", false, false, false, 24));
                echo "</u>
      </div>
      &nbsp;";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "
    ";
            } else {
                // line 28
                echo "      <div class=\"block second";
                echo (((isset($context["has_second_icon"]) || array_key_exists("has_second_icon", $context) ? $context["has_second_icon"] : (function () { throw new RuntimeError('Variable "has_second_icon" does not exist.', 28, $this->source); })())) ? (" double") : (""));
                echo "\">
        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["icon_links"]) || array_key_exists("icon_links", $context) ? $context["icon_links"] : (function () { throw new RuntimeError('Variable "icon_links" does not exist.', 29, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 30
                    echo "          <a href=\"";
                    echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, $context["link"], "params", [], "any", false, false, false, 30));
                    echo "\" class=\"disableAjax\">";
                    // line 31
                    echo $this->env->getFunction('get_image')->getCallable()(twig_get_attribute($this->env, $this->source, $context["link"], "image", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 31));
                    // line 32
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "      </div>

      ";
                // line 36
                if ((isset($context["node_is_container"]) || array_key_exists("node_is_container", $context) ? $context["node_is_container"] : (function () { throw new RuntimeError('Variable "node_is_container" does not exist.', 36, $this->source); })())) {
                    // line 37
                    echo "        &nbsp;<a class=\"hover_show_full disableAjax\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 37, $this->source); })()), "route", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 37, $this->source); })()), "params", [], "any", false, false, false, 37));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
                    echo "</a>
      ";
                } elseif (twig_in_filter("index", twig_get_attribute($this->env, $this->source,                 // line 38
(isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 38, $this->source); })()), "classes", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "        <a class=\"hover_show_full disableAjax\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 39, $this->source); })()), "route", [], "any", false, false, false, 39));
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 39, $this->source); })()), "params", [], "any", false, false, false, 39), ["is_from_nav" => true]));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">";
                    // line 40
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", false, false, false, 40)))) ? (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", false, false, false, 40)) : (twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 40, $this->source); })()), "realName", [], "any", false, false, false, 40))), "html", null, true);
                    // line 41
                    echo "</a>
      ";
                } else {
                    // line 43
                    echo "        <a class=\"hover_show_full disableAjax\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 43, $this->source); })()), "route", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 43, $this->source); })()), "params", [], "any", false, false, false, 43));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text_link"]) || array_key_exists("text_link", $context) ? $context["text_link"] : (function () { throw new RuntimeError('Variable "text_link" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">";
                    // line 44
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", false, false, false, 44)))) ? (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", false, false, false, 44)) : (twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 44, $this->source); })()), "realName", [], "any", false, false, false, 44))), "html", null, true);
                    // line 45
                    echo "</a>
      ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            echo (isset($context["control_buttons"]) || array_key_exists("control_buttons", $context) ? $context["control_buttons"] : (function () { throw new RuntimeError('Variable "control_buttons" does not exist.', 49, $this->source); })());
            echo "

    ";
            // line 51
            if ((isset($context["node_is_container"]) || array_key_exists("node_is_container", $context) ? $context["node_is_container"] : (function () { throw new RuntimeError('Variable "node_is_container" does not exist.', 51, $this->source); })())) {
                // line 52
                echo "      </div>
    ";
            }
            // line 54
            echo "
    <div class=\"clearfloat\"></div>
";
        } elseif ( !twig_test_empty(        // line 56
(isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "  <span class=\"hide ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 57, $this->source); })()), "position", [], "any", false, false, false, 57), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 57, $this->source); })()), "data_name", [], "any", false, false, false, 57), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination_params"]) || array_key_exists("pagination_params", $context) ? $context["pagination_params"] : (function () { throw new RuntimeError('Variable "pagination_params" does not exist.', 57, $this->source); })()), "data_value", [], "any", false, false, false, 57), "html", null, true);
            echo "\"></span>
";
        }
        // line 59
        echo "
";
        // line 60
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 60, $this->source); })()), "html", [], "any", false, false, false, 60)) && twig_get_attribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 60, $this->source); })()), "has_wrapper", [], "any", false, false, false, 60))) {
            // line 61
            echo "  <div class=\"list_container\"";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 61, $this->source); })()), "is_hidden", [], "any", false, false, false, 61)) ? (" style=\"display: none;\"") : (""));
            echo ">
    <ul>
";
        }
        // line 64
        echo twig_get_attribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 64, $this->source); })()), "html", [], "any", false, false, false, 64);
        echo "
";
        // line 65
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 65, $this->source); })()), "html", [], "any", false, false, false, 65)) && twig_get_attribute($this->env, $this->source, (isset($context["recursive"]) || array_key_exists("recursive", $context) ? $context["recursive"] : (function () { throw new RuntimeError('Variable "recursive" does not exist.', 65, $this->source); })()), "has_wrapper", [], "any", false, false, false, 65))) {
            // line 66
            echo "    </ul>
  </div>
";
        }
        // line 69
        echo "
";
        // line 70
        if ((isset($context["has_siblings"]) || array_key_exists("has_siblings", $context) ? $context["has_siblings"] : (function () { throw new RuntimeError('Variable "has_siblings" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "  </li>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/node.twig";
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
        return array (  251 => 71,  249 => 70,  246 => 69,  241 => 66,  239 => 65,  235 => 64,  228 => 61,  226 => 60,  223 => 59,  213 => 57,  211 => 56,  207 => 54,  203 => 52,  201 => 51,  196 => 49,  193 => 48,  190 => 47,  186 => 45,  184 => 44,  178 => 43,  174 => 41,  172 => 40,  164 => 39,  162 => 38,  155 => 37,  153 => 36,  149 => 34,  142 => 32,  140 => 31,  136 => 30,  132 => 29,  127 => 28,  122 => 26,  117 => 24,  112 => 23,  110 => 22,  107 => 21,  103 => 19,  101 => 18,  98 => 17,  88 => 15,  86 => 14,  80 => 12,  70 => 10,  68 => 9,  60 => 8,  56 => 7,  51 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if show_node %}
  <li class=\"{{ li_classes }}\">
    <div class=\"block\">
      <i{{ class == 'first' ? ' class=\"first\"' }}></i>
      {% if node_is_group %}
        {{ 'last' not in class ? '<b></b>' }}
        <a class=\"{{ link_classes }}\" href=\"#\">
          <span class=\"hide paths_nav\" data-apath=\"{{ paths.a_path }}\" data-vpath=\"{{ paths.v_path }}\" data-pos=\"{{ paths.pos }}\"></span>
          {% if pagination_params is not empty %}
            <span class=\"hide {{ pagination_params.position }}\" data-name=\"{{ pagination_params.data_name }}\" data-value=\"{{ pagination_params.data_value }}\"></span>
          {% endif %}
          {{ node_icon|raw }}
        </a>
      {% elseif pagination_params is not empty %}
        <span class=\"hide {{ pagination_params.position }}\" data-name=\"{{ pagination_params.data_name }}\" data-value=\"{{ pagination_params.data_value }}\"></span>
      {% endif %}
    </div>
    {% if node_is_container %}
      <div class=\"fst-italic\">
    {% endif %}

    {% if node.isGroup %}
      <div class=\"block second{{ has_second_icon ? ' double' }}\">
        <u>{{ get_image(node.icon['image'], node.icon['title']) }}</u>
      </div>
      &nbsp;{{ node.name }}
    {% else %}
      <div class=\"block second{{ has_second_icon ? ' double' }}\">
        {% for link in icon_links %}
          <a href=\"{{ url(link.route, link.params) }}\" class=\"disableAjax\">
            {{- get_image(link.image, link.title) -}}
          </a>
        {% endfor %}
      </div>

      {% if node_is_container %}
        &nbsp;<a class=\"hover_show_full disableAjax\" href=\"{{ url(text_link.route, text_link.params) }}\">{{ node.name }}</a>
      {% elseif 'index' in node.classes %}
        <a class=\"hover_show_full disableAjax\" href=\"{{ url(text_link.route) }}\" data-post=\"{{ get_common(text_link.params|merge({'is_from_nav': true})) }}\" title=\"{{ text_link.title }}\">
          {{- node.displayName ?? node.realName -}}
        </a>
      {% else %}
        <a class=\"hover_show_full disableAjax\" href=\"{{ url(text_link.route, text_link.params) }}\" title=\"{{ text_link.title }}\">
          {{- node.displayName ?? node.realName -}}
        </a>
      {% endif %}
    {% endif %}

    {{ control_buttons|raw }}

    {% if node_is_container %}
      </div>
    {% endif %}

    <div class=\"clearfloat\"></div>
{% elseif pagination_params is not empty %}
  <span class=\"hide {{ pagination_params.position }}\" data-name=\"{{ pagination_params.data_name }}\" data-value=\"{{ pagination_params.data_value }}\"></span>
{% endif %}

{% if recursive.html is not empty and recursive.has_wrapper %}
  <div class=\"list_container\"{{ recursive.is_hidden ? ' style=\"display: none;\"' }}>
    <ul>
{% endif %}
{{ recursive.html|raw }}
{% if recursive.html is not empty and recursive.has_wrapper %}
    </ul>
  </div>
{% endif %}

{% if has_siblings %}
  </li>
{% endif %}
", "navigation/tree/node.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/node.twig");
    }
}
