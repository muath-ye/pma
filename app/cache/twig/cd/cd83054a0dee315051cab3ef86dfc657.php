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

/* create_tracking_version.twig */
class __TwigTemplate_3be532c71a716b24b6aeb3dd35e1cb02 extends Template
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
        echo "<div class=\"card mt-3\">
    <form method=\"post\" action=\"";
        // line 2
        echo $this->env->getFunction('url')->getCallable()((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 2, $this->source); })()), (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
        echo "\">
        ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()));
        echo "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["selected_table"]) {
            // line 5
            echo "            <input type=\"hidden\" name=\"selected[]\" value=\"";
            echo twig_escape_filter($this->env, $context["selected_table"], "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selected_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
        <div class=\"card-header\">
                ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 9, $this->source); })())) == 1)) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Create version %1\$s of %2\$s"), (            // line 11
(isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 11, $this->source); })()) + 1), ((            // line 12
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 12, $this->source); })()) . ".") . twig_get_attribute($this->env, $this->source, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12))), "html", null, true);
            // line 13
            echo "
                ";
        } else {
            // line 15
            echo "                    ";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Create version %1\$s"), ((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 15, $this->source); })()) + 1)), "html", null, true);
            echo "
                ";
        }
        // line 17
        echo "        </div>

        <div class=\"card-body\">
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 20, $this->source); })()) + 1), "html", null, true);
        echo "\">
            <p>";
        // line 21
echo _gettext("Track these data definition statements:");
        echo "</p>

            ";
        // line 23
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()) == "both") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()) == "table"))) {
            // line 24
            echo "                <input type=\"checkbox\" name=\"alter_table\" value=\"true\"";
            // line 25
            echo ((twig_in_filter("ALTER TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 25, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                ALTER TABLE<br>
                <input type=\"checkbox\" name=\"rename_table\" value=\"true\"";
            // line 28
            echo ((twig_in_filter("RENAME TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 28, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                RENAME TABLE<br>
                <input type=\"checkbox\" name=\"create_table\" value=\"true\"";
            // line 31
            echo ((twig_in_filter("CREATE TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 31, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                CREATE TABLE<br>
                <input type=\"checkbox\" name=\"drop_table\" value=\"true\"";
            // line 34
            echo ((twig_in_filter("DROP TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 34, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                DROP TABLE<br>
            ";
        }
        // line 37
        echo "            ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()) == "both")) {
            // line 38
            echo "                <br>
            ";
        }
        // line 40
        echo "            ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()) == "both") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()) == "view"))) {
            // line 41
            echo "                <input type=\"checkbox\" name=\"alter_view\" value=\"true\"";
            // line 42
            echo ((twig_in_filter("ALTER VIEW", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 42, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                ALTER VIEW<br>
                <input type=\"checkbox\" name=\"create_view\" value=\"true\"";
            // line 45
            echo ((twig_in_filter("CREATE VIEW", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 45, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                CREATE VIEW<br>
                <input type=\"checkbox\" name=\"drop_view\" value=\"true\"";
            // line 48
            echo ((twig_in_filter("DROP VIEW", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 48, $this->source); })()))) ? (" checked=\"checked\"") : (""));
            echo ">
                DROP VIEW<br>
            ";
        }
        // line 51
        echo "            <br>

            <input type=\"checkbox\" name=\"create_index\" value=\"true\"";
        // line 54
        echo ((twig_in_filter("CREATE INDEX", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 54, $this->source); })()))) ? (" checked=\"checked\"") : (""));
        echo ">
            CREATE INDEX<br>
            <input type=\"checkbox\" name=\"drop_index\" value=\"true\"";
        // line 57
        echo ((twig_in_filter("DROP INDEX", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 57, $this->source); })()))) ? (" checked=\"checked\"") : (""));
        echo ">
            DROP INDEX<br>

            <p>";
        // line 60
echo _gettext("Track these data manipulation statements:");
        echo "</p>
            <input type=\"checkbox\" name=\"insert\" value=\"true\"";
        // line 62
        echo ((twig_in_filter("INSERT", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 62, $this->source); })()))) ? (" checked=\"checked\"") : (""));
        echo ">
            INSERT<br>
            <input type=\"checkbox\" name=\"update\" value=\"true\"";
        // line 65
        echo ((twig_in_filter("UPDATE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 65, $this->source); })()))) ? (" checked=\"checked\"") : (""));
        echo ">
            UPDATE<br>
            <input type=\"checkbox\" name=\"delete\" value=\"true\"";
        // line 68
        echo ((twig_in_filter("DELETE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 68, $this->source); })()))) ? (" checked=\"checked\"") : (""));
        echo ">
            DELETE<br>
            <input type=\"checkbox\" name=\"truncate\" value=\"true\"";
        // line 71
        echo ((twig_in_filter("TRUNCATE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 71, $this->source); })()))) ? (" checked=\"checked\"") : (""));
        echo ">
            TRUNCATE<br>
        </div>

        <div class=\"card-footer\">
            <input type=\"hidden\" name=\"submit_create_version\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 77
echo _gettext("Create version");
        echo "\">
        </div>
    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "create_tracking_version.twig";
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
        return array (  192 => 77,  183 => 71,  178 => 68,  173 => 65,  168 => 62,  164 => 60,  158 => 57,  153 => 54,  149 => 51,  143 => 48,  138 => 45,  133 => 42,  131 => 41,  128 => 40,  124 => 38,  121 => 37,  115 => 34,  110 => 31,  105 => 28,  100 => 25,  98 => 24,  96 => 23,  91 => 21,  87 => 20,  82 => 17,  76 => 15,  72 => 13,  70 => 12,  69 => 11,  67 => 10,  65 => 9,  61 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mt-3\">
    <form method=\"post\" action=\"{{ url(route, url_params) }}\">
        {{ get_hidden_inputs(db) }}
        {% for selected_table in selected %}
            <input type=\"hidden\" name=\"selected[]\" value=\"{{ selected_table }}\">
        {% endfor %}

        <div class=\"card-header\">
                {% if selected|length == 1 %}
                    {{ 'Create version %1\$s of %2\$s'|trans|format(
                        last_version + 1,
                        db ~ '.' ~ selected[0]
                    ) }}
                {% else %}
                    {{ 'Create version %1\$s'|trans|format(last_version + 1) }}
                {% endif %}
        </div>

        <div class=\"card-body\">
            <input type=\"hidden\" name=\"version\" value=\"{{ last_version + 1 }}\">
            <p>{% trans 'Track these data definition statements:' %}</p>

            {% if type == 'both' or type == 'table' %}
                <input type=\"checkbox\" name=\"alter_table\" value=\"true\"
                    {{- 'ALTER TABLE' in default_statements ? ' checked=\"checked\"' }}>
                ALTER TABLE<br>
                <input type=\"checkbox\" name=\"rename_table\" value=\"true\"
                    {{- 'RENAME TABLE' in default_statements ? ' checked=\"checked\"' }}>
                RENAME TABLE<br>
                <input type=\"checkbox\" name=\"create_table\" value=\"true\"
                    {{- 'CREATE TABLE' in default_statements ? ' checked=\"checked\"' }}>
                CREATE TABLE<br>
                <input type=\"checkbox\" name=\"drop_table\" value=\"true\"
                    {{- 'DROP TABLE' in default_statements ? ' checked=\"checked\"' }}>
                DROP TABLE<br>
            {% endif %}
            {% if type == 'both' %}
                <br>
            {% endif %}
            {% if type == 'both' or type == 'view' %}
                <input type=\"checkbox\" name=\"alter_view\" value=\"true\"
                    {{- 'ALTER VIEW' in default_statements ? ' checked=\"checked\"' }}>
                ALTER VIEW<br>
                <input type=\"checkbox\" name=\"create_view\" value=\"true\"
                    {{- 'CREATE VIEW' in default_statements ? ' checked=\"checked\"' }}>
                CREATE VIEW<br>
                <input type=\"checkbox\" name=\"drop_view\" value=\"true\"
                    {{- 'DROP VIEW' in default_statements ? ' checked=\"checked\"' }}>
                DROP VIEW<br>
            {% endif %}
            <br>

            <input type=\"checkbox\" name=\"create_index\" value=\"true\"
                {{- 'CREATE INDEX' in default_statements ? ' checked=\"checked\"' }}>
            CREATE INDEX<br>
            <input type=\"checkbox\" name=\"drop_index\" value=\"true\"
                {{- 'DROP INDEX' in default_statements ? ' checked=\"checked\"' }}>
            DROP INDEX<br>

            <p>{% trans 'Track these data manipulation statements:' %}</p>
            <input type=\"checkbox\" name=\"insert\" value=\"true\"
                {{- 'INSERT' in default_statements ? ' checked=\"checked\"' }}>
            INSERT<br>
            <input type=\"checkbox\" name=\"update\" value=\"true\"
                {{- 'UPDATE' in default_statements ? ' checked=\"checked\"' }}>
            UPDATE<br>
            <input type=\"checkbox\" name=\"delete\" value=\"true\"
                {{- 'DELETE' in default_statements ? ' checked=\"checked\"' }}>
            DELETE<br>
            <input type=\"checkbox\" name=\"truncate\" value=\"true\"
                {{- 'TRUNCATE' in default_statements ? ' checked=\"checked\"' }}>
            TRUNCATE<br>
        </div>

        <div class=\"card-footer\">
            <input type=\"hidden\" name=\"submit_create_version\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Create version' %}\">
        </div>
    </form>
</div>
", "create_tracking_version.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/create_tracking_version.twig");
    }
}
