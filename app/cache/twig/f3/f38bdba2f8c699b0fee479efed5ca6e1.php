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

/* scripts.twig */
class __TwigTemplate_729cc18f807b9619a902e13e876aa630 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 2
            echo "  <script data-cfasync=\"false\" src=\"";
            echo twig_escape_filter($this->env, ($context["base_dir"] ?? null), "html", null, true);
            echo (( !(is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 2)) && is_string($__internal_compile_1 = "index.php") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("js/") : (""));
            // line 3
            echo twig_escape_filter($this->env, ((((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($__internal_compile_3 = "vendor/") && str_starts_with($__internal_compile_2, $__internal_compile_3)) || (is_string($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($__internal_compile_5 = "index.php") && str_starts_with($__internal_compile_4, $__internal_compile_5)))) ? (twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) : (("dist/" . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)))), "html", null, true);
            // line 4
            ((twig_in_filter(".php", twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 4))) ? (print ($this->env->getFunction('get_common')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, $context["file"], "params", [], "any", false, false, false, 4), ["v" => ($context["version"] ?? null)])))) : (print (twig_escape_filter($this->env, ("?v=" . twig_urlencode_filter(($context["version"] ?? null))), "html", null, true))));
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
<script data-cfasync=\"false\">
// <![CDATA[
";
        // line 9
        echo ($context["code"] ?? null);
        echo "
";
        // line 10
        if ( !twig_test_empty(($context["files"] ?? null))) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 12
                echo "window.AJAX.scriptHandler.add('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 12), "js"), "html", null, true);
                echo "', ";
                echo ((twig_get_attribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 12)) ? ("true") : ("false"));
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
\$(function() {
";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 17
                echo "  ";
                if (twig_get_attribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "  window.AJAX.fireOnload('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 18), "js"), "html", null, true);
                    echo "');
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "});
";
        }
        // line 23
        echo "// ]]>
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scripts.twig";
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
        return array (  106 => 23,  102 => 21,  92 => 18,  89 => 17,  85 => 16,  81 => 14,  70 => 12,  66 => 11,  64 => 10,  60 => 9,  55 => 6,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "scripts.twig", "A:\\SwadiServer\\www\\pma\\resources\\templates\\scripts.twig");
    }
}
