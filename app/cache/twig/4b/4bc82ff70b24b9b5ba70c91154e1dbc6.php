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

/* footer.twig */
class __TwigTemplate_c1d5620251622298675ba868c07c39af extends Template
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
        echo twig_include($this->env, $context, "modals/function_confirm.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "modals/add_index.twig");
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "modals/page_settings.twig");
        echo "
";
        // line 4
        if ( !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "  </div>
";
        }
        // line 7
        if (( !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 7, $this->source); })()) &&  !(isset($context["is_minimal"]) || array_key_exists("is_minimal", $context) ? $context["is_minimal"] : (function () { throw new RuntimeError('Variable "is_minimal" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "  ";
            if ( !twig_test_empty((isset($context["self_url"]) || array_key_exists("self_url", $context) ? $context["self_url"] : (function () { throw new RuntimeError('Variable "self_url" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["self_url"]) || array_key_exists("self_url", $context) ? $context["self_url"] : (function () { throw new RuntimeError('Variable "self_url" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "\" title=\"";
echo _gettext("Open new phpMyAdmin window");
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
        ";
                // line 11
                if ($this->env->getFunction('show_icons')->getCallable()("TabsMode")) {
                    // line 12
                    echo "          ";
                    echo $this->env->getFunction('get_image')->getCallable()("window-new", _gettext("Open new phpMyAdmin window"));
                    echo "
        ";
                } else {
                    // line 14
                    echo "          ";
echo _gettext("Open new phpMyAdmin window");
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "      </a>
    </div>
  ";
            }
            // line 19
            echo "
  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    ";
            // line 21
            echo (isset($context["error_messages"]) || array_key_exists("error_messages", $context) ? $context["error_messages"] : (function () { throw new RuntimeError('Variable "error_messages" does not exist.', 21, $this->source); })());
            echo "
  </div>

  ";
            // line 24
            echo (isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new RuntimeError('Variable "scripts" does not exist.', 24, $this->source); })());
            echo "

  ";
            // line 26
            if ((isset($context["is_demo"]) || array_key_exists("is_demo", $context) ? $context["is_demo"] : (function () { throw new RuntimeError('Variable "is_demo" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "    <div id=\"pma_demo\" class=\"d-print-none\">
      ";
                // line 28
                ob_start();
                // line 29
                echo "        <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/");
                echo "\">";
echo _gettext("phpMyAdmin Demo Server");
                echo ":</a>
        ";
                // line 30
                if ( !twig_test_empty((isset($context["git_revision_info"]) || array_key_exists("git_revision_info", $context) ? $context["git_revision_info"] : (function () { throw new RuntimeError('Variable "git_revision_info" does not exist.', 30, $this->source); })()))) {
                    // line 31
                    echo "          ";
                    ob_start();
                    // line 32
                    echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["git_revision_info"]) || array_key_exists("git_revision_info", $context) ? $context["git_revision_info"] : (function () { throw new RuntimeError('Variable "git_revision_info" does not exist.', 32, $this->source); })()), "revisionUrl", [], "any", false, false, false, 32)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["git_revision_info"]) || array_key_exists("git_revision_info", $context) ? $context["git_revision_info"] : (function () { throw new RuntimeError('Variable "git_revision_info" does not exist.', 32, $this->source); })()), "revision", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a>";
                    $context["revision_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 34
                    echo "          ";
                    ob_start();
                    // line 35
                    echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFilter('link')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["git_revision_info"]) || array_key_exists("git_revision_info", $context) ? $context["git_revision_info"] : (function () { throw new RuntimeError('Variable "git_revision_info" does not exist.', 35, $this->source); })()), "branchUrl", [], "any", false, false, false, 35)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["git_revision_info"]) || array_key_exists("git_revision_info", $context) ? $context["git_revision_info"] : (function () { throw new RuntimeError('Variable "git_revision_info" does not exist.', 35, $this->source); })()), "branch", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a>";
                    $context["branch_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 37
                    echo "          ";
                    echo twig_sprintf(_gettext("Currently running Git revision %1\$s from the %2\$s branch."), (isset($context["revision_info"]) || array_key_exists("revision_info", $context) ? $context["revision_info"] : (function () { throw new RuntimeError('Variable "revision_info" does not exist.', 37, $this->source); })()), (isset($context["branch_info"]) || array_key_exists("branch_info", $context) ? $context["branch_info"] : (function () { throw new RuntimeError('Variable "branch_info" does not exist.', 37, $this->source); })()));
                    echo "
        ";
                } else {
                    // line 39
                    echo "          ";
echo _gettext("Git information missing!");
                    // line 40
                    echo "        ";
                }
                // line 41
                echo "      ";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 28
                echo $this->env->getFilter('notice')->getCallable()($___internal_parse_0_);
                // line 42
                echo "    </div>
  ";
            }
            // line 44
            echo "
  ";
            // line 45
            echo (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 45, $this->source); })());
            echo "
";
        }
        // line 47
        if ( !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "  </body>
</html>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.twig";
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
        return array (  170 => 48,  168 => 47,  163 => 45,  160 => 44,  156 => 42,  154 => 28,  151 => 41,  148 => 40,  145 => 39,  139 => 37,  132 => 35,  129 => 34,  122 => 32,  119 => 31,  117 => 30,  110 => 29,  108 => 28,  105 => 27,  103 => 26,  98 => 24,  92 => 21,  88 => 19,  83 => 16,  80 => 15,  77 => 14,  71 => 12,  69 => 11,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('modals/function_confirm.twig') }}
{{ include('modals/add_index.twig') }}
{{ include('modals/page_settings.twig') }}
{% if not is_ajax %}
  </div>
{% endif %}
{% if not is_ajax and not is_minimal %}
  {% if self_url is not empty %}
    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"{{ self_url }}\" title=\"{% trans 'Open new phpMyAdmin window' %}\" target=\"_blank\" rel=\"noopener noreferrer\">
        {% if show_icons('TabsMode') %}
          {{ get_image('window-new', 'Open new phpMyAdmin window'|trans) }}
        {% else %}
          {% trans 'Open new phpMyAdmin window' %}
        {% endif %}
      </a>
    </div>
  {% endif %}

  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    {{ error_messages|raw }}
  </div>

  {{ scripts|raw }}

  {% if is_demo %}
    <div id=\"pma_demo\" class=\"d-print-none\">
      {% apply notice %}
        <a href=\"{{ url('/') }}\">{% trans 'phpMyAdmin Demo Server' %}:</a>
        {% if git_revision_info is not empty %}
          {% set revision_info -%}
            <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ git_revision_info.revisionUrl|link }}\">{{ git_revision_info.revision }}</a>
          {%- endset %}
          {% set branch_info -%}
            <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ git_revision_info.branchUrl|link }}\">{{ git_revision_info.branch }}</a>
          {%- endset %}
          {{ 'Currently running Git revision %1\$s from the %2\$s branch.'|trans|format(revision_info, branch_info)|raw }}
        {% else %}
          {% trans 'Git information missing!' %}
        {% endif %}
      {% endapply %}
    </div>
  {% endif %}

  {{ footer|raw }}
{% endif %}
{% if not is_ajax %}
  </body>
</html>
{% endif %}
", "footer.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/footer.twig");
    }
}
