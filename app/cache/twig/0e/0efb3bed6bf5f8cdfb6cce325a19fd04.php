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

/* config/form_display/display.twig */
class __TwigTemplate_ef91ad80832100d406c4320b315ff7f5 extends Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "html_attr");
        echo "\" class=\"config-form disableAjax\">
  <input type=\"hidden\" name=\"tab_hash\" value=\"\">
  ";
        // line 3
        if ((isset($context["has_check_page_refresh"]) || array_key_exists("has_check_page_refresh", $context) ? $context["has_check_page_refresh"] : (function () { throw new RuntimeError('Variable "has_check_page_refresh" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <input type=\"hidden\" name=\"check_page_refresh\" id=\"check_page_refresh\" value=\"\">
  ";
        }
        // line 6
        echo "  ";
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()("", "", "server");
        echo "
  ";
        // line 7
        echo $this->env->getFunction('get_hidden_fields')->getCallable()((isset($context["hidden_fields"]) || array_key_exists("hidden_fields", $context) ? $context["hidden_fields"] : (function () { throw new RuntimeError('Variable "hidden_fields" does not exist.', 7, $this->source); })()), "", true);
        echo "

  <ul class=\"nav nav-tabs\" id=\"configFormDisplayTab\" role=\"tablist\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 11
            echo "      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) ? (" active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "-tab\" href=\"#";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" aria-selected=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) ? ("true") : ("false"));
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
      </li>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>
  <div class=\"tab-content\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 17, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 18
            echo "      <div class=\"tab-pane fade";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) ? (" show active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "-tab\">
        <div class=\"card border-top-0\">
          <div class=\"card-body\">
            <h5 class=\"card-title visually-hidden\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
            ";
            // line 22
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 22), "desc", [], "any", false, false, false, 22))) {
                // line 23
                echo "              <h6 class=\"card-subtitle mb-2 text-body-secondary\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 23), "desc", [], "any", false, false, false, 23);
                echo "</h6>
            ";
            }
            // line 25
            echo "
            <fieldset class=\"optbox\">
              <legend>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</legend>

              ";
            // line 30
            echo "              ";
            if ((is_iterable(twig_get_attribute($this->env, $this->source, $context["form"], "errors", [], "any", false, false, false, 30)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "errors", [], "any", false, false, false, 30)) > 0))) {
                // line 31
                echo "                <dl class=\"errors\">
                  ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form"], "errors", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 33
                    echo "                    <dd>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</dd>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                </dl>
              ";
            }
            // line 37
            echo "
              <table class=\"table table-borderless\">
                ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["form"], "fields_html", [], "any", false, false, false, 39);
            echo "
              </table>
            </fieldset>
          </div>

          ";
            // line 44
            if ((isset($context["show_buttons"]) || array_key_exists("show_buttons", $context) ? $context["show_buttons"] : (function () { throw new RuntimeError('Variable "show_buttons" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "            <div class=\"card-footer\">
              <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_save\" value=\"";
                // line 46
echo _gettext("Apply");
                echo "\">
              <input class=\"btn btn-secondary\" type=\"button\" name=\"submit_reset\" value=\"";
                // line 47
echo _gettext("Reset");
                echo "\">
            </div>
          ";
            }
            // line 50
            echo "        </div>
      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  </div>
</form>

<script>
  if (typeof window.configInlineParams === 'undefined' || !Array.isArray(window.configInlineParams)) {
    window.configInlineParams = [];
  }
  window.configInlineParams.push(function () {
    ";
        // line 61
        echo twig_join_filter((isset($context["js_array"]) || array_key_exists("js_array", $context) ? $context["js_array"] : (function () { throw new RuntimeError('Variable "js_array" does not exist.', 61, $this->source); })()), ";
");
        echo ";

    \$.extend(window.defaultValues,
      ";
        // line 64
        echo json_encode((isset($context["js_default"]) || array_key_exists("js_default", $context) ? $context["js_default"] : (function () { throw new RuntimeError('Variable "js_default" does not exist.', 64, $this->source); })()), twig_constant("JSON_HEX_TAG"));
        echo "
    );
  });
  if (typeof window.configScriptLoaded !== 'undefined' && window.configInlineParams) {
    window.Config.loadInlineConfig();
  }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "config/form_display/display.twig";
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
        return array (  243 => 64,  236 => 61,  226 => 53,  210 => 50,  204 => 47,  200 => 46,  197 => 45,  195 => 44,  187 => 39,  183 => 37,  179 => 35,  170 => 33,  166 => 32,  163 => 31,  160 => 30,  155 => 27,  151 => 25,  145 => 23,  143 => 22,  139 => 21,  128 => 18,  111 => 17,  107 => 15,  80 => 12,  77 => 11,  60 => 10,  54 => 7,  49 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ action|e('html_attr') }}\" class=\"config-form disableAjax\">
  <input type=\"hidden\" name=\"tab_hash\" value=\"\">
  {% if has_check_page_refresh %}
    <input type=\"hidden\" name=\"check_page_refresh\" id=\"check_page_refresh\" value=\"\">
  {% endif %}
  {{ get_hidden_inputs('', '', 'server') }}
  {{ get_hidden_fields(hidden_fields, '', true) }}

  <ul class=\"nav nav-tabs\" id=\"configFormDisplayTab\" role=\"tablist\">
    {% for id, name in tabs %}
      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link{{ loop.first ? ' active' }}\" id=\"{{ id }}-tab\" href=\"#{{ id }}\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"{{ id }}\" aria-selected=\"{{ loop.first ? 'true' : 'false' }}\">{{ name }}</a>
      </li>
    {% endfor %}
  </ul>
  <div class=\"tab-content\">
    {% for form in forms %}
      <div class=\"tab-pane fade{{ loop.first ? ' show active' }}\" id=\"{{ form.name }}\" role=\"tabpanel\" aria-labelledby=\"{{ form.name }}-tab\">
        <div class=\"card border-top-0\">
          <div class=\"card-body\">
            <h5 class=\"card-title visually-hidden\">{{ form.descriptions.name }}</h5>
            {% if form.descriptions.desc is not empty %}
              <h6 class=\"card-subtitle mb-2 text-body-secondary\">{{ form.descriptions.desc|raw }}</h6>
            {% endif %}

            <fieldset class=\"optbox\">
              <legend>{{ form.descriptions.name }}</legend>

              {# This must match with window.Config.displayErrors() in scripts.js #}
              {% if form.errors is iterable and form.errors|length > 0 %}
                <dl class=\"errors\">
                  {% for error in form.errors %}
                    <dd>{{ error }}</dd>
                  {% endfor %}
                </dl>
              {% endif %}

              <table class=\"table table-borderless\">
                {{ form.fields_html|raw }}
              </table>
            </fieldset>
          </div>

          {% if show_buttons %}
            <div class=\"card-footer\">
              <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_save\" value=\"{% trans 'Apply' %}\">
              <input class=\"btn btn-secondary\" type=\"button\" name=\"submit_reset\" value=\"{% trans 'Reset' %}\">
            </div>
          {% endif %}
        </div>
      </div>
    {% endfor %}
  </div>
</form>

<script>
  if (typeof window.configInlineParams === 'undefined' || !Array.isArray(window.configInlineParams)) {
    window.configInlineParams = [];
  }
  window.configInlineParams.push(function () {
    {{ js_array|join(';\\n')|raw }};

    \$.extend(window.defaultValues,
      {{ js_default|json_encode(constant('JSON_HEX_TAG'))|raw }}
    );
  });
  if (typeof window.configScriptLoaded !== 'undefined' && window.configInlineParams) {
    window.Config.loadInlineConfig();
  }
</script>
", "config/form_display/display.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/display.twig");
    }
}
