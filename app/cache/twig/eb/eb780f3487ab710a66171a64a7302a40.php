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
class __TwigTemplate_7b2652724eb3d8763d74ae55381a2cd7 extends Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 2
            echo "  <script data-cfasync=\"false\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["base_dir"]) || array_key_exists("base_dir", $context) ? $context["base_dir"] : (function () { throw new RuntimeError('Variable "base_dir" does not exist.', 2, $this->source); })()), "html", null, true);
            echo (( !(is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 2)) && is_string($__internal_compile_1 = "index.php") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("js/") : (""));
            // line 3
            echo twig_escape_filter($this->env, ((((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($__internal_compile_3 = "vendor/") && str_starts_with($__internal_compile_2, $__internal_compile_3)) || (is_string($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($__internal_compile_5 = "index.php") && str_starts_with($__internal_compile_4, $__internal_compile_5)))) ? (twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) : (("dist/" . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)))), "html", null, true);
            // line 4
            ((twig_in_filter(".php", twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 4))) ? (print ($this->env->getFunction('get_common')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, $context["file"], "params", [], "any", false, false, false, 4), ["v" => (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 4, $this->source); })())])))) : (print (twig_escape_filter($this->env, ("?v=" . twig_urlencode_filter((isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 4, $this->source); })()))), "html", null, true))));
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
        echo (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 9, $this->source); })());
        echo "
";
        // line 10
        if ( !twig_test_empty((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 10, $this->source); })()))) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 11, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 16, $this->source); })()));
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
        return new Source("{% for file in files %}
  <script data-cfasync=\"false\" src=\"{{ base_dir }}{{ not (file.filename starts with 'index.php') ? 'js/' -}}
    {{- file.filename starts with 'vendor/' or file.filename starts with 'index.php' ? file.filename : 'dist/' ~ file.filename -}}
    {{- '.php' in file.filename ? get_common(file.params|merge({'v': version})) : '?v=' ~ version|url_encode }}\"></script>
{% endfor %}

<script data-cfasync=\"false\">
// <![CDATA[
{{ code|raw }}
{% if files is not empty %}
{% for file in files %}
window.AJAX.scriptHandler.add('{{ file.filename|escape('js') }}', {{ file.has_onload ? 'true' : 'false' }});
{% endfor %}

\$(function() {
{% for file in files %}
  {% if file.has_onload %}
  window.AJAX.fireOnload('{{ file.filename|escape('js') }}');
  {% endif %}
{% endfor %}
});
{% endif %}
// ]]>
</script>
", "scripts.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/scripts.twig");
    }
}
