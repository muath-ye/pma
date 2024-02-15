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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_5cefcc9e1609fe2c7d0be02c68dfe0b8 extends Template
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
        echo "<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        ";
        // line 4
echo _gettext("Structure");
        // line 5
        echo "        ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("CREATE_TABLE");
        echo "
    </caption>
    <tr>
        <th>
            ";
        // line 9
echo _gettext("Name");
        // line 10
        echo "        </th>
        <th>
            ";
        // line 12
echo _gettext("Type");
        // line 13
        echo "            ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("data-types");
        echo "
        </th>
        <th>
            ";
        // line 16
echo _gettext("Length/Values");
        // line 17
        echo "            ";
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        echo "
        </th>
        <th>
            ";
        // line 20
echo _gettext("Default");
        // line 21
        echo "            ";
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        echo "
        </th>
        <th>
            ";
        // line 24
echo _gettext("Collation");
        // line 25
        echo "        </th>
        <th>
            ";
        // line 27
echo _gettext("Attributes");
        // line 28
        echo "        </th>
        <th>
            ";
        // line 30
echo _gettext("Null");
        // line 31
        echo "        </th>

        ";
        // line 34
        echo "        ";
        if ((array_key_exists("change_column", $context) &&  !twig_test_empty((isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 34, $this->source); })())))) {
            // line 35
            echo "            <th>
                ";
            // line 36
echo _gettext("Adjust privileges");
            // line 37
            echo "                ";
            echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
            echo "
            </th>
        ";
        }
        // line 40
        echo "
        ";
        // line 44
        echo "        ";
        if ( !(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "            <th>
                ";
            // line 46
echo _gettext("Index");
            // line 47
            echo "            </th>
        ";
        }
        // line 49
        echo "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
        // line 54
echo _gettext("Comments");
        // line 55
        echo "        </th>

        ";
        // line 57
        if ((isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "            <th>
                ";
            // line 59
echo _gettext("Virtuality");
            // line 60
            echo "            </th>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if (array_key_exists("fields_meta", $context)) {
            // line 64
            echo "            <th>
                ";
            // line 65
echo _gettext("Move column");
            // line 66
            echo "            </th>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 69, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 69)) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 69, $this->source); })()))) {
            // line 70
            echo "            <th>
                ";
            // line 71
echo _gettext("Media type");
            // line 72
            echo "            </th>
            <th>
                <a href=\"";
            // line 74
            echo $this->env->getFunction('url')->getCallable()("/transformation/overview");
            echo "#transformation\" title=\"";
            // line 75
echo _gettext("List of available transformations and their options");
            // line 76
            echo "\" target=\"_blank\">
                    ";
            // line 77
echo _gettext("Browser display transformation");
            // line 78
            echo "                </a>
            </th>
            <th>
                ";
            // line 81
echo _gettext("Browser display transformation options");
            // line 82
            echo "                ";
            echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            echo "
            </th>
            <th>
                <a href=\"";
            // line 85
            echo $this->env->getFunction('url')->getCallable()("/transformation/overview");
            echo "#input_transformation\"
                   title=\"";
            // line 86
echo _gettext("List of available transformations and their options");
            echo "\"
                   target=\"_blank\">
                    ";
            // line 88
echo _gettext("Input transformation");
            // line 89
            echo "                </a>
            </th>
            <th>
                ";
            // line 92
echo _gettext("Input transformation options");
            // line 93
            echo "                ";
            echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            echo "
            </th>
        ";
        }
        // line 96
        echo "    </tr>
    ";
        // line 97
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 98
        echo "    ";
        if ((isset($context["supports_stored_keyword"]) || array_key_exists("supports_stored_keyword", $context) ? $context["supports_stored_keyword"] : (function () { throw new RuntimeError('Variable "supports_stored_keyword" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 99, $this->source); })()), ["STORED" => "STORED"]);
            // line 100
            echo "    ";
        } else {
            // line 101
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 101, $this->source); })()), ["PERSISTENT" => "PERSISTENT"]);
            // line 102
            echo "    ";
        }
        // line 103
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 104
            echo "        <tr>
            ";
            // line 105
            $this->loadTemplate("columns_definitions/column_attributes.twig", "columns_definitions/table_fields_definitions.twig", 105)->display(twig_to_array(twig_array_merge($context["content_row"], ["options" =>             // line 106
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 106, $this->source); })()), "change_column" =>             // line 107
(isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 107, $this->source); })()), "is_virtual_columns_supported" =>             // line 108
(isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 108, $this->source); })()), "browse_mime" =>             // line 109
(isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 109, $this->source); })()), "max_rows" =>             // line 110
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 110, $this->source); })()), "char_editing" =>             // line 111
(isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 111, $this->source); })()), "attribute_types" =>             // line 112
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 112, $this->source); })()), "privs_available" =>             // line 113
(isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 113, $this->source); })()), "max_length" =>             // line 114
(isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 114, $this->source); })()), "charsets" =>             // line 115
(isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 115, $this->source); })()), "relation_parameters" =>             // line 116
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 116, $this->source); })())])));
            // line 118
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</table>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/table_fields_definitions.twig";
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
        return array (  282 => 120,  275 => 118,  273 => 116,  272 => 115,  271 => 114,  270 => 113,  269 => 112,  268 => 111,  267 => 110,  266 => 109,  265 => 108,  264 => 107,  263 => 106,  262 => 105,  259 => 104,  254 => 103,  251 => 102,  248 => 101,  245 => 100,  242 => 99,  239 => 98,  237 => 97,  234 => 96,  227 => 93,  225 => 92,  220 => 89,  218 => 88,  213 => 86,  209 => 85,  202 => 82,  200 => 81,  195 => 78,  193 => 77,  190 => 76,  188 => 75,  185 => 74,  181 => 72,  179 => 71,  176 => 70,  174 => 69,  171 => 68,  167 => 66,  165 => 65,  162 => 64,  160 => 63,  157 => 62,  153 => 60,  151 => 59,  148 => 58,  146 => 57,  142 => 55,  140 => 54,  133 => 49,  129 => 47,  127 => 46,  124 => 45,  121 => 44,  118 => 40,  111 => 37,  109 => 36,  106 => 35,  103 => 34,  99 => 31,  97 => 30,  93 => 28,  91 => 27,  87 => 25,  85 => 24,  78 => 21,  76 => 20,  69 => 17,  67 => 16,  60 => 13,  58 => 12,  54 => 10,  52 => 9,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        {% trans 'Structure' %}
        {{ show_mysql_docu('CREATE_TABLE') }}
    </caption>
    <tr>
        <th>
            {% trans 'Name' %}
        </th>
        <th>
            {% trans 'Type' %}
            {{ show_mysql_docu('data-types') }}
        </th>
        <th>
            {% trans 'Length/Values' %}
            {{ show_hint('If column type is \"enum\" or \"set\", please enter the values using this format: \\'a\\',\\'b\\',\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').'|trans) }}
        </th>
        <th>
            {% trans 'Default' %}
            {{ show_hint('For default values, please enter just a single value, without backslash escaping or quotes, using this format: a'|trans) }}
        </th>
        <th>
            {% trans 'Collation' %}
        </th>
        <th>
            {% trans 'Attributes' %}
        </th>
        <th>
            {% trans 'Null' %}
        </th>

        {# Only for 'Edit' Column(s) #}
        {% if change_column is defined and change_column is not empty %}
            <th>
                {% trans 'Adjust privileges' %}
                {{ show_docu('faq', 'faq6-39') }}
            </th>
        {% endif %}

        {# We could remove this 'if' and let the key information be shown and
           editable. However, for this to work, structure.lib.php must be
           modified to use the key fields, as tbl_addfield does. #}
        {% if not is_backup %}
            <th>
                {% trans 'Index' %}
            </th>
        {% endif %}

        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            {% trans 'Comments' %}
        </th>

        {% if is_virtual_columns_supported %}
            <th>
                {% trans 'Virtuality' %}
            </th>
        {% endif %}

        {% if fields_meta is defined %}
            <th>
                {% trans 'Move column' %}
            </th>
        {% endif %}

        {% if relation_parameters.browserTransformationFeature is not null and browse_mime %}
            <th>
                {% trans 'Media type' %}
            </th>
            <th>
                <a href=\"{{ url('/transformation/overview') }}#transformation\" title=\"
                    {%- trans 'List of available transformations and their options' -%}
                    \" target=\"_blank\">
                    {% trans 'Browser display transformation' %}
                </a>
            </th>
            <th>
                {% trans 'Browser display transformation options' %}
                {{ show_hint('Please enter the values for transformation options using this format: \\'a\\', 100, b,\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').'|trans) }}
            </th>
            <th>
                <a href=\"{{ url('/transformation/overview') }}#input_transformation\"
                   title=\"{% trans 'List of available transformations and their options' %}\"
                   target=\"_blank\">
                    {% trans 'Input transformation' %}
                </a>
            </th>
            <th>
                {% trans 'Input transformation options' %}
                {{ show_hint('Please enter the values for transformation options using this format: \\'a\\', 100, b,\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').'|trans) }}
            </th>
        {% endif %}
    </tr>
    {% set options = {'': '', 'VIRTUAL': 'VIRTUAL'} %}
    {% if supports_stored_keyword %}
        {% set options = options|merge({'STORED': 'STORED'}) %}
    {% else %}
        {% set options = options|merge({'PERSISTENT': 'PERSISTENT'}) %}
    {% endif %}
    {% for content_row in content_cells %}
        <tr>
            {% include 'columns_definitions/column_attributes.twig' with content_row|merge({
                'options': options,
                'change_column': change_column,
                'is_virtual_columns_supported': is_virtual_columns_supported,
                'browse_mime': browse_mime,
                'max_rows': max_rows,
                'char_editing': char_editing,
                'attribute_types': attribute_types,
                'privs_available': privs_available,
                'max_length': max_length,
                'charsets': charsets,
                'relation_parameters': relation_parameters
            }) only %}
        </tr>
    {% endfor %}
</table>
</div>
", "columns_definitions/table_fields_definitions.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/table_fields_definitions.twig");
    }
}
