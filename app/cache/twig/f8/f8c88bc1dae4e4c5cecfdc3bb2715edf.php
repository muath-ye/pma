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

/* navigation/item_unhide_dialog.twig */
class __TwigTemplate_d19095b6a9e7ec500f7568dc9796d4e9 extends Template
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
        echo "<form class=\"ajax\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/navigation");
        echo "\" method=\"post\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 2, $this->source); })()));
        echo "

  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 4, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 5
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["hidden"] ?? null), $context["type"], [], "array", true, true, false, 5) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 5, $this->source); })()), $context["type"], [], "array", false, false, false, 5)))) {
                // line 6
                echo "      ";
                echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) ? ("<br>") : (""));
                echo "
      <strong>";
                // line 7
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</strong>
      <table class=\"table w-100\">
        <tbody>
          ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 10, $this->source); })()), $context["type"], [], "array", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    echo "            <tr>
              <td>";
                    // line 12
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "</td>
              <td class=\"text-end\">
                <a class=\"unhideNavItem ajax\" href=\"";
                    // line 14
                    echo $this->env->getFunction('url')->getCallable()("/navigation");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["unhideNavItem" => true, "itemType" =>                     // line 16
$context["type"], "itemName" =>                     // line 17
$context["item"], "dbName" =>                     // line 18
(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 18, $this->source); })())], "", false);
                    // line 19
                    echo "\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("show", _gettext("Unhide"));
                    echo "</a>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </tbody>
      </table>
    ";
            }
            // line 26
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/item_unhide_dialog.twig";
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
        return array (  127 => 27,  113 => 26,  108 => 23,  97 => 19,  95 => 18,  94 => 17,  93 => 16,  90 => 14,  85 => 12,  82 => 11,  78 => 10,  72 => 7,  67 => 6,  64 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"ajax\" action=\"{{ url('/navigation') }}\" method=\"post\">
  {{ get_hidden_inputs(database) }}

  {% for type, label in types %}
    {% if hidden[type] is defined and hidden[type] is iterable %}
      {{ not loop.first ? '<br>' }}
      <strong>{{ label }}</strong>
      <table class=\"table w-100\">
        <tbody>
          {% for item in hidden[type] %}
            <tr>
              <td>{{ item }}</td>
              <td class=\"text-end\">
                <a class=\"unhideNavItem ajax\" href=\"{{ url('/navigation') }}\" data-post=\"{{ get_common({
                  'unhideNavItem': true,
                  'itemType': type,
                  'itemName': item,
                  'dbName': database
                }, '', false) }}\">{{ get_icon('show', 'Unhide'|trans) }}</a>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endif %}
  {% endfor %}
</form>
", "navigation/item_unhide_dialog.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/item_unhide_dialog.twig");
    }
}
