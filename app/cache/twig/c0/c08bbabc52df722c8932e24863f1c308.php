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

/* server/privileges/privileges_summary.twig */
class __TwigTemplate_6789725aa06619fb3ab9eef78a02b3f5 extends Template
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
        echo "<form class=\"submenu-item\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
    <input type=\"hidden\" name=\"username\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">

    <div class=\"card mb-3\">
        <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["sub_menu_label"]) || array_key_exists("sub_menu_label", $context) ? $context["sub_menu_label"] : (function () { throw new RuntimeError('Variable "sub_menu_label" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
        </div>

        <div class=\"card-body\">
        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type_label"]) || array_key_exists("type_label", $context) ? $context["type_label"] : (function () { throw new RuntimeError('Variable "type_label" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</th>
                    <th scope=\"col\">";
        // line 16
echo _gettext("Privileges");
        echo "</th>
                    <th scope=\"col\">";
        // line 17
echo _gettext("Grant");
        echo "</th>
                    ";
        // line 18
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()) == "database")) {
            // line 19
            echo "                        <th scope=\"col\">";
echo _gettext("Table-specific privileges");
            echo "</th>
                    ";
        } elseif ((        // line 20
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "table")) {
            // line 21
            echo "                        <th scope=\"col\">";
echo _gettext("Column-specific privileges");
            echo "</th>
                    ";
        }
        // line 23
        echo "                    <th scope=\"col\" colspan=\"2\">";
echo _gettext("Action");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 28, $this->source); })())) == 0)) {
            // line 29
            echo "                    ";
            $context["colspan"] = ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()) == "database")) ? (7) : (((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()) == "table")) ? (6) : (5))));
            // line 30
            echo "                    <tr>
                        <td class=\"text-center\" colspan=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["colspan"]) || array_key_exists("colspan", $context) ? $context["colspan"] : (function () { throw new RuntimeError('Variable "colspan" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\"><em>";
echo _gettext("None");
            echo "</em></td>
                    </tr>
                ";
        } else {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["privilege"], "name", [], "array", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td><code>";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["privilege"], "privileges", [], "array", false, false, false, 37);
                echo "</code></td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["privilege"], "grant", [], "array", false, false, false, 38)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                echo "</td>

                            ";
                // line 40
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()) == "database")) {
                    // line 41
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["privilege"], "table_privs", [], "array", false, false, false, 41)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                            ";
                } elseif ((                // line 42
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 42, $this->source); })()) == "table")) {
                    // line 43
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["privilege"], "column_privs", [], "array", false, false, false, 43)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 45
                echo "
                            <td>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["privilege"], "edit_link", [], "array", false, false, false, 46);
                echo "</td>
                            <td>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["privilege"], "revoke_link", [], "array", false, false, false, 47);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                ";
        }
        // line 51
        echo "            </tbody>
        </table>

        ";
        // line 54
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 54, $this->source); })()) == "database")) {
            // line 55
            echo "            <label for=\"text_dbname\">";
echo _gettext("Add privileges on the following database(s):");
            echo "</label>";
            // line 57
            if ( !twig_test_empty((isset($context["databases"]) || array_key_exists("databases", $context) ? $context["databases"] : (function () { throw new RuntimeError('Variable "databases" does not exist.', 57, $this->source); })()))) {
                // line 58
                echo "                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["databases"]) || array_key_exists("databases", $context) ? $context["databases"] : (function () { throw new RuntimeError('Variable "databases" does not exist.', 59, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 60
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escaped_databases"]) || array_key_exists("escaped_databases", $context) ? $context["escaped_databases"] : (function () { throw new RuntimeError('Variable "escaped_databases" does not exist.', 60, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 60), [], "array", false, false, false, 60), "html", null, true);
                    echo "\">
                            ";
                    // line 61
                    echo twig_escape_filter($this->env, $context["database"], "html", null, true);
                    echo "
                        </option>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                </select>
            ";
            }
            // line 67
            echo "<input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            ";
            // line 68
            echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Wildcards % and _ should be escaped with a \\ to use them literally."));
            echo "
        ";
        } elseif ((        // line 69
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 69, $this->source); })()) == "table")) {
            // line 70
            echo "            <input type=\"hidden\" name=\"dbname\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["escaped_database"]) || array_key_exists("escaped_database", $context) ? $context["escaped_database"] : (function () { throw new RuntimeError('Variable "escaped_database" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\">

            <label for=\"text_tablename\">";
            // line 72
echo _gettext("Add privileges on the following table:");
            echo "</label>";
            // line 74
            if ( !twig_test_empty((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 74, $this->source); })()))) {
                // line 75
                echo "                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">";
                // line 76
echo _gettext("Use text field");
                echo ":</option>
                    ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 77, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                    // line 78
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                </select>
            ";
            }
            // line 83
            echo "<input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        ";
        } else {
            // line 85
            echo "            <input type=\"hidden\" name=\"dbname\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["escaped_database"]) || array_key_exists("escaped_database", $context) ? $context["escaped_database"] : (function () { throw new RuntimeError('Variable "escaped_database" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "\">

            <label for=\"text_routinename\">";
            // line 87
echo _gettext("Add privileges on the following routine:");
            echo "</label>";
            // line 89
            if ( !twig_test_empty((isset($context["routines"]) || array_key_exists("routines", $context) ? $context["routines"] : (function () { throw new RuntimeError('Variable "routines" does not exist.', 89, $this->source); })()))) {
                // line 90
                echo "                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">";
                // line 91
echo _gettext("Use text field");
                echo ":</option>
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["routines"]) || array_key_exists("routines", $context) ? $context["routines"] : (function () { throw new RuntimeError('Variable "routines" does not exist.', 92, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["routine"]) {
                    // line 93
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["routine"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["routine"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['routine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                </select>
            ";
            }
            // line 98
            echo "<input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        ";
        }
        // line 100
        echo "        </div>
    </div>

    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 104
echo _gettext("Go");
        echo "\">
    </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/privileges_summary.twig";
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
        return array (  335 => 104,  329 => 100,  325 => 98,  321 => 95,  310 => 93,  306 => 92,  302 => 91,  299 => 90,  297 => 89,  294 => 87,  288 => 85,  284 => 83,  280 => 80,  269 => 78,  265 => 77,  261 => 76,  258 => 75,  256 => 74,  253 => 72,  247 => 70,  245 => 69,  241 => 68,  238 => 67,  234 => 64,  217 => 61,  212 => 60,  195 => 59,  192 => 58,  190 => 57,  186 => 55,  184 => 54,  179 => 51,  176 => 50,  167 => 47,  163 => 46,  160 => 45,  154 => 43,  152 => 42,  147 => 41,  145 => 40,  140 => 38,  136 => 37,  132 => 36,  129 => 35,  124 => 34,  116 => 31,  113 => 30,  110 => 29,  108 => 28,  99 => 23,  93 => 21,  91 => 20,  86 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  62 => 8,  58 => 7,  52 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"submenu-item\" action=\"{{ url('/server/privileges') }}\" id=\"{{ form_id }}\" method=\"post\">
    {{ get_hidden_inputs() }}
    <input type=\"hidden\" name=\"username\" value=\"{{ username }}\">
    <input type=\"hidden\" name=\"hostname\" value=\"{{ hostname }}\">

    <div class=\"card mb-3\">
        <div class=\"card-header js-submenu-label\" data-submenu-label=\"{{ sub_menu_label }}\">
            {{ legend }}
        </div>

        <div class=\"card-body\">
        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">{{ type_label }}</th>
                    <th scope=\"col\">{% trans 'Privileges' %}</th>
                    <th scope=\"col\">{% trans 'Grant' %}</th>
                    {% if type == 'database' %}
                        <th scope=\"col\">{% trans 'Table-specific privileges' %}</th>
                    {% elseif type == 'table' %}
                        <th scope=\"col\">{% trans 'Column-specific privileges' %}</th>
                    {% endif %}
                    <th scope=\"col\" colspan=\"2\">{% trans 'Action' %}</th>
                </tr>
            </thead>

            <tbody>
                {% if privileges|length == 0 %}
                    {% set colspan = type == 'database' ? 7 : (type == 'table' ? 6 : 5) %}
                    <tr>
                        <td class=\"text-center\" colspan=\"{{ colspan }}\"><em>{% trans 'None' %}</em></td>
                    </tr>
                {% else %}
                    {% for privilege in privileges %}
                        <tr>
                            <td>{{ privilege['name'] }}</td>
                            <td><code>{{ privilege['privileges']|raw }}</code></td>
                            <td>{{ privilege['grant'] ? 'Yes'|trans : 'No'|trans }}</td>

                            {% if type == 'database' %}
                                <td>{{ privilege['table_privs'] ? 'Yes'|trans : 'No'|trans }}</td>
                            {% elseif type == 'table' %}
                                <td>{{ privilege['column_privs'] ? 'Yes'|trans : 'No'|trans }}</td>
                            {% endif %}

                            <td>{{ privilege['edit_link']|raw }}</td>
                            <td>{{ privilege['revoke_link']|raw }}</td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>

        {% if type == 'database' %}
            <label for=\"text_dbname\">{% trans 'Add privileges on the following database(s):' %}</label>

            {%- if databases is not empty %}
                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    {% for database in databases %}
                        <option value=\"{{ escaped_databases[loop.index0] }}\">
                            {{ database }}
                        </option>
                    {% endfor %}
                </select>
            {% endif -%}

            <input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            {{ show_hint(\"Wildcards % and _ should be escaped with a \\\\ to use them literally.\"|trans) }}
        {% elseif type == 'table' %}
            <input type=\"hidden\" name=\"dbname\" value=\"{{ escaped_database }}\">

            <label for=\"text_tablename\">{% trans 'Add privileges on the following table:' %}</label>

            {%- if tables is not empty %}
                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">{% trans 'Use text field' %}:</option>
                    {% for table in tables %}
                        <option value=\"{{ table }}\">{{ table }}</option>
                    {% endfor %}
                </select>
            {% endif -%}

            <input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        {% else %}
            <input type=\"hidden\" name=\"dbname\" value=\"{{ escaped_database }}\">

            <label for=\"text_routinename\">{% trans 'Add privileges on the following routine:' %}</label>

            {%- if routines is not empty %}
                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">{% trans 'Use text field' %}:</option>
                    {% for routine in routines %}
                        <option value=\"{{ routine }}\">{{ routine }}</option>
                    {% endfor %}
                </select>
            {% endif -%}

            <input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        {% endif %}
        </div>
    </div>

    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Go' %}\">
    </div>
</form>
", "server/privileges/privileges_summary.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/privileges_summary.twig");
    }
}
