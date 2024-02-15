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

/* columns_definitions/partitions.twig */
class __TwigTemplate_da5b65cfa210908e15ad70635a1842ac extends Template
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
        $context["partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY", "RANGE", "RANGE COLUMNS", "LIST", "LIST COLUMNS"];
        // line 12
        $context["sub_partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY"];
        // line 13
        $context["value_type_options"] = ["", "LESS THAN", "LESS THAN MAXVALUE", "IN"];
        // line 14
        echo "
<table class=\"table table-borderless w-auto align-middle mb-0\" id=\"partition_table\">
    <tr class=\"align-middle\">
        <td><label for=\"partition_by\">";
        // line 17
echo _gettext("Partition by:");
        echo "</label></td>
        <td>
            <select name=\"partition_by\" id=\"partition_by\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partition_options"]) || array_key_exists("partition_options", $context) ? $context["partition_options"] : (function () { throw new RuntimeError('Variable "partition_options" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 22, $this->source); })()), "partition_by", [], "array", false, false, false, 22) == $context["option"])) {
                // line 23
                echo "                            selected=\"selected\"";
            }
            // line 24
            echo ">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </select>
        </td>
        <td>
            (<input name=\"partition_expr\" type=\"text\"
                placeholder=\"";
        // line 32
echo _gettext("Expression or column list");
        echo "\"
                value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 33, $this->source); })()), "partition_expr", [], "array", false, false, false, 33), "html", null, true);
        echo "\">)
        </td>
    </tr>
    <tr class=\"align-middle\">
        <td><label for=\"partition_count\">";
        // line 37
echo _gettext("Partitions:");
        echo "</label></td>
        <td colspan=\"2\">
            <input name=\"partition_count\" type=\"number\" min=\"2\"
                value=\"";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 40, $this->source); })()), "partition_count", [], "array", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 40, $this->source); })()), "partition_count", [], "array", false, false, false, 40), "html", null, true))) : (print ("")));
        echo "\">
        </td>
    </tr>
    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 43, $this->source); })()), "can_have_subpartitions", [], "array", false, false, false, 43)) {
            // line 44
            echo "        <tr class=\"align-middle\">
            <td><label for=\"subpartition_by\">";
            // line 45
echo _gettext("Subpartition by:");
            echo "</label></td>
            <td>
                <select name=\"subpartition_by\" id=\"subpartition_by\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sub_partition_options"]) || array_key_exists("sub_partition_options", $context) ? $context["sub_partition_options"] : (function () { throw new RuntimeError('Variable "sub_partition_options" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 49
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 50, $this->source); })()), "subpartition_by", [], "array", false, false, false, 50) == $context["option"])) {
                    // line 51
                    echo "                            selected=\"selected\"";
                }
                // line 52
                echo ">
                        ";
                // line 53
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </select>
            </td>
            <td>
                (<input name=\"subpartition_expr\" type=\"text\"
                    placeholder=\"";
            // line 60
echo _gettext("Expression or column list");
            echo "\"
                    value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 61, $this->source); })()), "subpartition_expr", [], "array", false, false, false, 61), "html", null, true);
            echo "\">)
            </td>
        </tr>
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_count\">";
            // line 65
echo _gettext("Subpartitions:");
            echo "</label></td>
            <td colspan=\"2\">
                <input name=\"subpartition_count\" type=\"number\" min=\"2\"
                    value=\"";
            // line 68
            ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 68, $this->source); })()), "subpartition_count", [], "array", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 68, $this->source); })()), "subpartition_count", [], "array", false, false, false, 68), "html", null, true))) : (print ("")));
            echo "\">
            </td>
        </tr>
    ";
        }
        // line 72
        echo "</table>
";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 73, $this->source); })()), "partition_count", [], "array", false, false, false, 73) > 1)) {
            // line 74
            echo "    <table class=\"table align-middle\" id=\"partition_definition_table\">
        <thead><tr>
            <th>";
            // line 76
echo _gettext("Partition");
            echo "</th>
            ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 77, $this->source); })()), "value_enabled", [], "array", false, false, false, 77)) {
                // line 78
                echo "                <th>";
echo _gettext("Values");
                echo "</th>
            ";
            }
            // line 80
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 80, $this->source); })()), "can_have_subpartitions", [], "array", false, false, false, 80) && (twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 81, $this->source); })()), "subpartition_count", [], "array", false, false, false, 81) > 1))) {
                // line 82
                echo "                <th>";
echo _gettext("Subpartition");
                echo "</th>
            ";
            }
            // line 84
            echo "            <th>";
echo _gettext("Engine");
            echo "</th>
            <th>";
            // line 85
echo _gettext("Comment");
            echo "</th>
            <th>";
            // line 86
echo _gettext("Data directory");
            echo "</th>
            <th>";
            // line 87
echo _gettext("Index directory");
            echo "</th>
            <th>";
            // line 88
echo _gettext("Max rows");
            echo "</th>
            <th>";
            // line 89
echo _gettext("Min rows");
            echo "</th>
            <th>";
            // line 90
echo _gettext("Table space");
            echo "</th>
            <th>";
            // line 91
echo _gettext("Node group");
            echo "</th>
        </tr></thead>
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 93, $this->source); })()), "partitions", [], "array", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 94
                echo "            ";
                $context["rowspan"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["partition"], "subpartition_count", [], "array", false, false, false, 94))) ? ((twig_get_attribute($this->env, $this->source,                 // line 95
$context["partition"], "subpartition_count", [], "array", false, false, false, 95) + 1)) : (2));
                // line 96
                echo "            <tr>
                <td rowspan=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new RuntimeError('Variable "rowspan" does not exist.', 97, $this->source); })()), "html", null, true);
                echo "\">
                    <input type=\"text\" name=\"";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "prefix", [], "array", false, false, false, 98), "html", null, true);
                echo "[name]\"
                        value=\"";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "name", [], "array", false, false, false, 99), "html", null, true);
                echo "\">
                </td>
                ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 101, $this->source); })()), "value_enabled", [], "array", false, false, false, 101)) {
                    // line 102
                    echo "                    <td rowspan=\"";
                    echo twig_escape_filter($this->env, (isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new RuntimeError('Variable "rowspan" does not exist.', 102, $this->source); })()), "html", null, true);
                    echo "\" class=\"align-middle\">
                        <select class=\"partition_value\"
                            name=\"";
                    // line 104
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "prefix", [], "array", false, false, false, 104), "html", null, true);
                    echo "[value_type]\">
                            ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["value_type_options"]) || array_key_exists("value_type_options", $context) ? $context["value_type_options"] : (function () { throw new RuntimeError('Variable "value_type_options" does not exist.', 105, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 106
                        echo "                                <option value=\"";
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "\"";
                        // line 107
                        if ((twig_get_attribute($this->env, $this->source, $context["partition"], "value_type", [], "array", false, false, false, 107) == $context["option"])) {
                            // line 108
                            echo "                                        selected=\"selected\"";
                        }
                        // line 109
                        echo ">
                                    ";
                        // line 110
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "
                                </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    echo "                        </select>
                        <input type=\"text\" class=\"partition_value\"
                            name=\"";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "prefix", [], "array", false, false, false, 115), "html", null, true);
                    echo "[value]\"
                            value=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "value", [], "array", false, false, false, 116), "html", null, true);
                    echo "\">
                    </td>
                ";
                }
                // line 119
                echo "            </tr>

            ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, $context["partition"], "subpartitions", [], "array", true, true, false, 121)) {
                    // line 122
                    echo "                ";
                    $context["subpartitions"] = twig_get_attribute($this->env, $this->source, $context["partition"], "subpartitions", [], "array", false, false, false, 122);
                    // line 123
                    echo "            ";
                } else {
                    // line 124
                    echo "                ";
                    $context["subpartitions"] = [$context["partition"]];
                    // line 125
                    echo "            ";
                }
                // line 126
                echo "
            ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["subpartitions"]) || array_key_exists("subpartitions", $context) ? $context["subpartitions"] : (function () { throw new RuntimeError('Variable "subpartitions" does not exist.', 127, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["subpartition"]) {
                    // line 128
                    echo "                <tr>
                    ";
                    // line 129
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 129, $this->source); })()), "can_have_subpartitions", [], "array", false, false, false, 129) && (twig_get_attribute($this->env, $this->source,                     // line 130
(isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 130, $this->source); })()), "subpartition_count", [], "array", false, false, false, 130) > 1))) {
                        // line 131
                        echo "                        <td>
                            <input type=\"text\" name=\"";
                        // line 132
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 132), "html", null, true);
                        echo "[name]\"
                                value=\"";
                        // line 133
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "name", [], "array", false, false, false, 133), "html", null, true);
                        echo "\">
                        </td>
                    ";
                    }
                    // line 136
                    echo "                    <td>
                      <select name=\"";
                    // line 137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 137), "html", null, true);
                    echo "[engine]\" aria-label=\"";
echo _gettext("Storage engine");
                    echo "\">
                        <option value=\"\"></option>
                        ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 139, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                        // line 140
                        echo "                          <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 140), "html", null, true);
                        echo "\"";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140))) {
                            echo " title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140), "html", null, true);
                            echo "\"";
                        }
                        // line 141
                        echo (((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141)) == twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "engine", [], "array", false, false, false, 141)))) ? (" selected") : (""));
                        echo ">";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142), "html", null, true);
                        // line 143
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                      </select>
                    </td>
                    <td>
                        <textarea name=\"";
                    // line 148
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 148), "html", null, true);
                    echo "[comment]\">";
                    // line 149
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "comment", [], "array", false, false, false, 149), "html", null, true);
                    // line 150
                    echo "</textarea>
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 153
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 153), "html", null, true);
                    echo "[data_directory]\"
                            value=\"";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "data_directory", [], "array", false, false, false, 154), "html", null, true);
                    echo "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 157
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 157), "html", null, true);
                    echo "[index_directory]\"
                            value=\"";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "index_directory", [], "array", false, false, false, 158), "html", null, true);
                    echo "\">
                    </td>
                    <td>
                        <input type=\"number\" name=\"";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 161), "html", null, true);
                    echo "[max_rows]\"
                            value=\"";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "max_rows", [], "array", false, false, false, 162), "html", null, true);
                    echo "\">
                    </td>
                    <td>
                        <input type=\"number\" min=\"0\" name=\"";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 165), "html", null, true);
                    echo "[min_rows]\"
                            value=\"";
                    // line 166
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "min_rows", [], "array", false, false, false, 166), "html", null, true);
                    echo "\">
                    </td>
                    <td>
                        <input type=\"text\" min=\"0\" name=\"";
                    // line 169
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 169), "html", null, true);
                    echo "[tablespace]\"
                            value=\"";
                    // line 170
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "tablespace", [], "array", false, false, false, 170), "html", null, true);
                    echo "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 173
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 173), "html", null, true);
                    echo "[node_group]\"
                            value=\"";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpartition"], "node_group", [], "array", false, false, false, 174), "html", null, true);
                    echo "\">
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpartition'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "    </table>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/partitions.twig";
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
        return array (  478 => 179,  472 => 178,  462 => 174,  458 => 173,  452 => 170,  448 => 169,  442 => 166,  438 => 165,  432 => 162,  428 => 161,  422 => 158,  418 => 157,  412 => 154,  408 => 153,  403 => 150,  401 => 149,  398 => 148,  393 => 145,  386 => 143,  384 => 142,  381 => 141,  372 => 140,  368 => 139,  361 => 137,  358 => 136,  352 => 133,  348 => 132,  345 => 131,  343 => 130,  342 => 129,  339 => 128,  335 => 127,  332 => 126,  329 => 125,  326 => 124,  323 => 123,  320 => 122,  318 => 121,  314 => 119,  308 => 116,  304 => 115,  300 => 113,  291 => 110,  288 => 109,  285 => 108,  283 => 107,  279 => 106,  275 => 105,  271 => 104,  265 => 102,  263 => 101,  258 => 99,  254 => 98,  250 => 97,  247 => 96,  245 => 95,  243 => 94,  239 => 93,  234 => 91,  230 => 90,  226 => 89,  222 => 88,  218 => 87,  214 => 86,  210 => 85,  205 => 84,  199 => 82,  197 => 81,  195 => 80,  189 => 78,  187 => 77,  183 => 76,  179 => 74,  177 => 73,  174 => 72,  167 => 68,  161 => 65,  154 => 61,  150 => 60,  144 => 56,  135 => 53,  132 => 52,  129 => 51,  127 => 50,  123 => 49,  119 => 48,  113 => 45,  110 => 44,  108 => 43,  102 => 40,  96 => 37,  89 => 33,  85 => 32,  79 => 28,  70 => 25,  67 => 24,  64 => 23,  62 => 22,  58 => 21,  54 => 20,  48 => 17,  43 => 14,  41 => 13,  39 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set partition_options = [
    '',
    'HASH',
    'LINEAR HASH',
    'KEY',
    'LINEAR KEY',
    'RANGE',
    'RANGE COLUMNS',
    'LIST',
    'LIST COLUMNS'
] %}
{% set sub_partition_options = ['', 'HASH', 'LINEAR HASH', 'KEY', 'LINEAR KEY'] %}
{% set value_type_options = ['', 'LESS THAN', 'LESS THAN MAXVALUE', 'IN'] %}

<table class=\"table table-borderless w-auto align-middle mb-0\" id=\"partition_table\">
    <tr class=\"align-middle\">
        <td><label for=\"partition_by\">{% trans 'Partition by:' %}</label></td>
        <td>
            <select name=\"partition_by\" id=\"partition_by\">
                {% for option in partition_options %}
                    <option value=\"{{ option }}\"
                        {%- if partition_details['partition_by'] == option %}
                            selected=\"selected\"
                        {%- endif %}>
                        {{ option }}
                    </option>
                {% endfor %}
            </select>
        </td>
        <td>
            (<input name=\"partition_expr\" type=\"text\"
                placeholder=\"{% trans 'Expression or column list' %}\"
                value=\"{{ partition_details['partition_expr'] }}\">)
        </td>
    </tr>
    <tr class=\"align-middle\">
        <td><label for=\"partition_count\">{% trans 'Partitions:' %}</label></td>
        <td colspan=\"2\">
            <input name=\"partition_count\" type=\"number\" min=\"2\"
                value=\"{{ partition_details['partition_count'] ?: '' }}\">
        </td>
    </tr>
    {% if partition_details['can_have_subpartitions'] %}
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_by\">{% trans 'Subpartition by:' %}</label></td>
            <td>
                <select name=\"subpartition_by\" id=\"subpartition_by\">
                    {% for option in sub_partition_options %}
                    <option value=\"{{ option }}\"
                        {%- if partition_details['subpartition_by'] == option %}
                            selected=\"selected\"
                        {%- endif %}>
                        {{ option }}
                    </option>
                {% endfor %}
                </select>
            </td>
            <td>
                (<input name=\"subpartition_expr\" type=\"text\"
                    placeholder=\"{% trans 'Expression or column list' %}\"
                    value=\"{{ partition_details['subpartition_expr'] }}\">)
            </td>
        </tr>
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_count\">{% trans 'Subpartitions:' %}</label></td>
            <td colspan=\"2\">
                <input name=\"subpartition_count\" type=\"number\" min=\"2\"
                    value=\"{{ partition_details['subpartition_count'] ?: '' }}\">
            </td>
        </tr>
    {% endif %}
</table>
{% if partition_details['partition_count'] > 1 %}
    <table class=\"table align-middle\" id=\"partition_definition_table\">
        <thead><tr>
            <th>{% trans 'Partition' %}</th>
            {% if partition_details['value_enabled'] %}
                <th>{% trans 'Values' %}</th>
            {% endif %}
            {% if partition_details['can_have_subpartitions']
                and partition_details['subpartition_count'] > 1 %}
                <th>{% trans 'Subpartition' %}</th>
            {% endif %}
            <th>{% trans 'Engine' %}</th>
            <th>{% trans 'Comment' %}</th>
            <th>{% trans 'Data directory' %}</th>
            <th>{% trans 'Index directory' %}</th>
            <th>{% trans 'Max rows' %}</th>
            <th>{% trans 'Min rows' %}</th>
            <th>{% trans 'Table space' %}</th>
            <th>{% trans 'Node group' %}</th>
        </tr></thead>
        {% for partition in partition_details['partitions'] %}
            {% set rowspan = partition['subpartition_count'] is not empty
                ? partition['subpartition_count'] + 1 : 2 %}
            <tr>
                <td rowspan=\"{{ rowspan }}\">
                    <input type=\"text\" name=\"{{ partition['prefix'] }}[name]\"
                        value=\"{{ partition['name'] }}\">
                </td>
                {% if partition_details['value_enabled'] %}
                    <td rowspan=\"{{ rowspan }}\" class=\"align-middle\">
                        <select class=\"partition_value\"
                            name=\"{{ partition['prefix'] }}[value_type]\">
                            {% for option in value_type_options %}
                                <option value=\"{{ option }}\"
                                    {%- if partition['value_type'] == option %}
                                        selected=\"selected\"
                                    {%- endif %}>
                                    {{ option }}
                                </option>
                            {% endfor %}
                        </select>
                        <input type=\"text\" class=\"partition_value\"
                            name=\"{{ partition['prefix'] }}[value]\"
                            value=\"{{ partition['value'] }}\">
                    </td>
                {% endif %}
            </tr>

            {% if partition['subpartitions'] is defined %}
                {% set subpartitions = partition['subpartitions'] %}
            {% else %}
                {% set subpartitions = [partition] %}
            {% endif %}

            {% for subpartition in subpartitions %}
                <tr>
                    {% if partition_details['can_have_subpartitions']
                        and partition_details['subpartition_count'] > 1 %}
                        <td>
                            <input type=\"text\" name=\"{{ subpartition['prefix'] }}[name]\"
                                value=\"{{ subpartition['name'] }}\">
                        </td>
                    {% endif %}
                    <td>
                      <select name=\"{{ subpartition['prefix'] }}[engine]\" aria-label=\"{% trans 'Storage engine' %}\">
                        <option value=\"\"></option>
                        {% for engine in storage_engines %}
                          <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                            {{- engine.name|lower == subpartition['engine']|lower ? ' selected' }}>
                            {{- engine.name -}}
                          </option>
                        {% endfor %}
                      </select>
                    </td>
                    <td>
                        <textarea name=\"{{ subpartition['prefix'] }}[comment]\">
                            {{- subpartition['comment'] -}}
                        </textarea>
                    </td>
                    <td>
                        <input type=\"text\" name=\"{{ subpartition['prefix'] }}[data_directory]\"
                            value=\"{{ subpartition['data_directory'] }}\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"{{ subpartition['prefix'] }}[index_directory]\"
                            value=\"{{ subpartition['index_directory'] }}\">
                    </td>
                    <td>
                        <input type=\"number\" name=\"{{ subpartition['prefix'] }}[max_rows]\"
                            value=\"{{ subpartition['max_rows'] }}\">
                    </td>
                    <td>
                        <input type=\"number\" min=\"0\" name=\"{{ subpartition['prefix'] }}[min_rows]\"
                            value=\"{{ subpartition['min_rows'] }}\">
                    </td>
                    <td>
                        <input type=\"text\" min=\"0\" name=\"{{ subpartition['prefix'] }}[tablespace]\"
                            value=\"{{ subpartition['tablespace'] }}\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"{{ subpartition['prefix'] }}[node_group]\"
                            value=\"{{ subpartition['node_group'] }}\">
                    </td>
                </tr>
            {% endfor %}
        {% endfor %}
    </table>
{% endif %}
", "columns_definitions/partitions.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/partitions.twig");
    }
}
