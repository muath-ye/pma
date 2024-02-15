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

/* table/structure/display_partitions.twig */
class __TwigTemplate_c1a76381fd00e28f17849c4cd893e1a5 extends Template
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
        echo "<div id=\"partitions\" class=\"card mb-3\">
    <div class=\"card-header\">
      ";
        // line 3
echo _gettext("Partitions");
        // line 4
        echo "      ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("partitioning");
        echo "
    </div>

    <div class=\"card-body\">
        ";
        // line 8
        if (( !array_key_exists("partitions", $context) || twig_test_empty((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "            ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("No partitioning defined!"));
            echo "
        ";
        } else {
            // line 11
            echo "            <p>
                ";
            // line 12
echo _gettext("Partitioned by:");
            // line 13
            echo "                <code>";
            echo twig_escape_filter($this->env, (isset($context["partition_method"]) || array_key_exists("partition_method", $context) ? $context["partition_method"] : (function () { throw new RuntimeError('Variable "partition_method" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, (isset($context["partition_expression"]) || array_key_exists("partition_expression", $context) ? $context["partition_expression"] : (function () { throw new RuntimeError('Variable "partition_expression" does not exist.', 13, $this->source); })()), "html", null, true);
            echo ")</code>
            </p>
            ";
            // line 15
            if ((isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "                <p>
                    ";
                // line 17
echo _gettext("Sub partitioned by:");
                // line 18
                echo "                    <code>";
                echo twig_escape_filter($this->env, (isset($context["sub_partition_method"]) || array_key_exists("sub_partition_method", $context) ? $context["sub_partition_method"] : (function () { throw new RuntimeError('Variable "sub_partition_method" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, (isset($context["sub_partition_expression"]) || array_key_exists("sub_partition_expression", $context) ? $context["sub_partition_expression"] : (function () { throw new RuntimeError('Variable "sub_partition_expression" does not exist.', 18, $this->source); })()), "html", null, true);
                echo ")</code>
                <p>
            ";
            }
            // line 21
            echo "            <table class=\"table table-striped table-hover table-sm\">
                <thead>
                    <tr>
                        <th colspan=\"2\">#</th>
                        <th>";
            // line 25
echo _gettext("Partition");
            echo "</th>
                        ";
            // line 26
            if ((isset($context["has_description"]) || array_key_exists("has_description", $context) ? $context["has_description"] : (function () { throw new RuntimeError('Variable "has_description" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "                            <th>";
echo _gettext("Expression");
                echo "</th>
                        ";
            }
            // line 29
            echo "                        <th>";
echo _gettext("Rows");
            echo "</th>
                        <th>";
            // line 30
echo _gettext("Data length");
            echo "</th>
                        <th>";
            // line 31
echo _gettext("Index length");
            echo "</th>
                        <th>";
            // line 32
echo _gettext("Comment");
            echo "</th>
                        <th colspan=\"";
            // line 33
            echo (((isset($context["range_or_list"]) || array_key_exists("range_or_list", $context) ? $context["range_or_list"] : (function () { throw new RuntimeError('Variable "range_or_list" does not exist.', 33, $this->source); })())) ? ("7") : ("6"));
            echo "\">
                            ";
            // line 34
echo _gettext("Action");
            // line 35
            echo "                        </th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 40
                echo "                    <tr class=\"noclick";
                echo (((isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 40, $this->source); })())) ? (" table-active") : (""));
                echo "\">
                        ";
                // line 41
                if ((isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 41, $this->source); })())) {
                    // line 42
                    echo "                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 42), "html", null, true);
                    echo "</td>
                            <td></td>
                        ";
                } else {
                    // line 45
                    echo "                            <td colspan=\"2\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 45), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 47
                echo "                        <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getName", [], "method", false, false, false, 47), "html", null, true);
                echo "</th>
                        ";
                // line 48
                if ((isset($context["has_description"]) || array_key_exists("has_description", $context) ? $context["has_description"] : (function () { throw new RuntimeError('Variable "has_description" does not exist.', 48, $this->source); })())) {
                    // line 49
                    echo "                            <td>
                                <code>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getExpression", [], "method", false, false, false, 51), "html", null, true);
                    // line 52
                    echo (((twig_get_attribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 52) == "LIST")) ? (" IN (") : (" < "));
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
                    // line 54
                    echo (((twig_get_attribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 54) == "LIST")) ? (")") : (""));
                    // line 55
                    echo "</code>
                            </td>
                        ";
                }
                // line 58
                echo "                        <td class=\"value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getRows", [], "method", false, false, false, 58), "html", null, true);
                echo "</td>
                        <td class=\"value\">
                            ";
                // line 60
                $context["data_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 61
$context["partition"], "getDataLength", [], "method", false, false, false, 61), 3, 1);
                // line 65
                echo "                            <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_length"]) || array_key_exists("data_length", $context) ? $context["data_length"] : (function () { throw new RuntimeError('Variable "data_length" does not exist.', 65, $this->source); })()), 0, [], "array", false, false, false, 65), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_length"]) || array_key_exists("data_length", $context) ? $context["data_length"] : (function () { throw new RuntimeError('Variable "data_length" does not exist.', 66, $this->source); })()), 1, [], "array", false, false, false, 66), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"value\">
                            ";
                // line 69
                $context["index_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 70
$context["partition"], "getIndexLength", [], "method", false, false, false, 70), 3, 1);
                // line 74
                echo "                            <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index_length"]) || array_key_exists("index_length", $context) ? $context["index_length"] : (function () { throw new RuntimeError('Variable "index_length" does not exist.', 74, $this->source); })()), 0, [], "array", false, false, false, 74), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index_length"]) || array_key_exists("index_length", $context) ? $context["index_length"] : (function () { throw new RuntimeError('Variable "index_length" does not exist.', 75, $this->source); })()), 1, [], "array", false, false, false, 75), "html", null, true);
                echo "</span>
                        </td>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getComment", [], "method", false, false, false, 77), "html", null, true);
                echo "</td>

                        <td>
                          <a id=\"partition_action_ANALYZE\" class=\"ajax\" href=\"";
                // line 80
                echo $this->env->getFunction('url')->getCallable()("/table/partition/analyze");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 81
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 81, $this->source); })()), "table" =>                 // line 82
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 82, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 83
$context["partition"], "getName", [], "method", false, false, false, 83)], "", false);
                // line 84
                echo "\">
                            ";
                // line 85
                echo $this->env->getFunction('get_icon')->getCallable()("b_search", _gettext("Analyze"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_CHECK\" class=\"ajax\" href=\"";
                // line 90
                echo $this->env->getFunction('url')->getCallable()("/table/partition/check");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 91
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 91, $this->source); })()), "table" =>                 // line 92
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 92, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 93
$context["partition"], "getName", [], "method", false, false, false, 93)], "", false);
                // line 94
                echo "\">
                            ";
                // line 95
                echo $this->env->getFunction('get_icon')->getCallable()("eye", _gettext("Check"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_OPTIMIZE\" class=\"ajax\" href=\"";
                // line 100
                echo $this->env->getFunction('url')->getCallable()("/table/partition/optimize");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 101
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 101, $this->source); })()), "table" =>                 // line 102
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 102, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 103
$context["partition"], "getName", [], "method", false, false, false, 103)], "", false);
                // line 104
                echo "\">
                            ";
                // line 105
                echo $this->env->getFunction('get_icon')->getCallable()("normalize", _gettext("Optimize"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REBUILD\" class=\"ajax\" href=\"";
                // line 110
                echo $this->env->getFunction('url')->getCallable()("/table/partition/rebuild");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 111
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 111, $this->source); })()), "table" =>                 // line 112
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 112, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 113
$context["partition"], "getName", [], "method", false, false, false, 113)], "", false);
                // line 114
                echo "\">
                            ";
                // line 115
                echo $this->env->getFunction('get_icon')->getCallable()("s_tbl", _gettext("Rebuild"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REPAIR\" class=\"ajax\" href=\"";
                // line 120
                echo $this->env->getFunction('url')->getCallable()("/table/partition/repair");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 121
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 121, $this->source); })()), "table" =>                 // line 122
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 122, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 123
$context["partition"], "getName", [], "method", false, false, false, 123)], "", false);
                // line 124
                echo "\">
                            ";
                // line 125
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblops", _gettext("Repair"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_TRUNCATE\" class=\"ajax\" href=\"";
                // line 130
                echo $this->env->getFunction('url')->getCallable()("/table/partition/truncate");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 131
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 131, $this->source); })()), "table" =>                 // line 132
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 132, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 133
$context["partition"], "getName", [], "method", false, false, false, 133)], "", false);
                // line 134
                echo "\">
                            ";
                // line 135
                echo $this->env->getFunction('get_icon')->getCallable()("b_empty", _gettext("Truncate"));
                echo "
                          </a>
                        </td>

                        ";
                // line 139
                if ((isset($context["range_or_list"]) || array_key_exists("range_or_list", $context) ? $context["range_or_list"] : (function () { throw new RuntimeError('Variable "range_or_list" does not exist.', 139, $this->source); })())) {
                    // line 140
                    echo "                          <td>
                            <a id=\"partition_action_DROP\" class=\"ajax\" href=\"";
                    // line 141
                    echo $this->env->getFunction('url')->getCallable()("/table/partition/drop");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 142
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 142, $this->source); })()), "table" =>                     // line 143
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 143, $this->source); })()), "partition_name" => twig_get_attribute($this->env, $this->source,                     // line 144
$context["partition"], "getName", [], "method", false, false, false, 144)], "", false);
                    // line 145
                    echo "\">
                              ";
                    // line 146
                    echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
                    echo "
                            </a>
                          </td>
                        ";
                }
                // line 150
                echo "
                        ";
                // line 151
                if ((isset($context["has_sub_partitions"]) || array_key_exists("has_sub_partitions", $context) ? $context["has_sub_partitions"] : (function () { throw new RuntimeError('Variable "has_sub_partitions" does not exist.', 151, $this->source); })())) {
                    // line 152
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["partition"], "getSubPartitions", [], "method", false, false, false, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_partition"]) {
                        // line 153
                        echo "                                <tr class=\"noclick\">
                                    <td></td>
                                    <td>";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getOrdinal", [], "method", false, false, false, 155), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 156
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getName", [], "method", false, false, false, 156), "html", null, true);
                        echo "</td>
                                    ";
                        // line 157
                        if ((isset($context["has_description"]) || array_key_exists("has_description", $context) ? $context["has_description"] : (function () { throw new RuntimeError('Variable "has_description" does not exist.', 157, $this->source); })())) {
                            // line 158
                            echo "                                        <td></td>
                                    ";
                        }
                        // line 160
                        echo "                                    <td class=\"value\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getRows", [], "method", false, false, false, 160), "html", null, true);
                        echo "</td>
                                    <td class=\"value\">
                                        ";
                        // line 162
                        $context["data_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                         // line 163
$context["sub_partition"], "getDataLength", [], "method", false, false, false, 163), 3, 1);
                        // line 167
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_length"]) || array_key_exists("data_length", $context) ? $context["data_length"] : (function () { throw new RuntimeError('Variable "data_length" does not exist.', 167, $this->source); })()), 0, [], "array", false, false, false, 167), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 168
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_length"]) || array_key_exists("data_length", $context) ? $context["data_length"] : (function () { throw new RuntimeError('Variable "data_length" does not exist.', 168, $this->source); })()), 1, [], "array", false, false, false, 168), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td class=\"value\">
                                        ";
                        // line 171
                        $context["index_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                         // line 172
$context["sub_partition"], "getIndexLength", [], "method", false, false, false, 172), 3, 1);
                        // line 176
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index_length"]) || array_key_exists("index_length", $context) ? $context["index_length"] : (function () { throw new RuntimeError('Variable "index_length" does not exist.', 176, $this->source); })()), 0, [], "array", false, false, false, 176), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 177
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["index_length"]) || array_key_exists("index_length", $context) ? $context["index_length"] : (function () { throw new RuntimeError('Variable "index_length" does not exist.', 177, $this->source); })()), 1, [], "array", false, false, false, 177), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td>";
                        // line 179
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getComment", [], "method", false, false, false, 179), "html", null, true);
                        echo "</td>
                                    <td colspan=\"";
                        // line 180
                        echo (((isset($context["range_or_list"]) || array_key_exists("range_or_list", $context) ? $context["range_or_list"] : (function () { throw new RuntimeError('Variable "range_or_list" does not exist.', 180, $this->source); })())) ? ("7") : ("6"));
                        echo "\"></td>
                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_partition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                        ";
                }
                // line 184
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                </tbody>
            </table>
        ";
        }
        // line 189
        echo "    </div>
    <div class=\"card-footer d-print-none\">
        <form action=\"";
        // line 191
        echo $this->env->getFunction('url')->getCallable()("/table/structure/partitioning");
        echo "\" method=\"post\">
            ";
        // line 192
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 192, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 192, $this->source); })()));
        echo "

            ";
        // line 194
        if (( !array_key_exists("partitions", $context) || twig_test_empty((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 194, $this->source); })())))) {
            // line 195
            echo "                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
echo _gettext("Partition table");
            echo "\">
            ";
        } else {
            // line 197
            echo "                ";
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["db" =>             // line 200
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 200, $this->source); })()), "table" =>             // line 201
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 201, $this->source); })()), "sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 202
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 202, $this->source); })()))) . " REMOVE PARTITIONING")], _gettext("Remove partitioning"), ["class" => "btn btn-secondary ajax", "id" => "remove_partitioning"]);
            // line 207
            echo "
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 208
echo _gettext("Edit partitioning");
            echo "\">
            ";
        }
        // line 210
        echo "        </form>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/structure/display_partitions.twig";
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
        return array (  474 => 210,  469 => 208,  466 => 207,  464 => 202,  463 => 201,  462 => 200,  460 => 197,  454 => 195,  452 => 194,  447 => 192,  443 => 191,  439 => 189,  434 => 186,  427 => 184,  424 => 183,  415 => 180,  411 => 179,  406 => 177,  401 => 176,  399 => 172,  398 => 171,  392 => 168,  387 => 167,  385 => 163,  384 => 162,  378 => 160,  374 => 158,  372 => 157,  368 => 156,  364 => 155,  360 => 153,  355 => 152,  353 => 151,  350 => 150,  343 => 146,  340 => 145,  338 => 144,  337 => 143,  336 => 142,  333 => 141,  330 => 140,  328 => 139,  321 => 135,  318 => 134,  316 => 133,  315 => 132,  314 => 131,  311 => 130,  303 => 125,  300 => 124,  298 => 123,  297 => 122,  296 => 121,  293 => 120,  285 => 115,  282 => 114,  280 => 113,  279 => 112,  278 => 111,  275 => 110,  267 => 105,  264 => 104,  262 => 103,  261 => 102,  260 => 101,  257 => 100,  249 => 95,  246 => 94,  244 => 93,  243 => 92,  242 => 91,  239 => 90,  231 => 85,  228 => 84,  226 => 83,  225 => 82,  224 => 81,  221 => 80,  215 => 77,  210 => 75,  205 => 74,  203 => 70,  202 => 69,  196 => 66,  191 => 65,  189 => 61,  188 => 60,  182 => 58,  177 => 55,  175 => 54,  173 => 53,  171 => 52,  169 => 51,  166 => 49,  164 => 48,  159 => 47,  153 => 45,  146 => 42,  144 => 41,  139 => 40,  135 => 39,  129 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  106 => 29,  100 => 27,  98 => 26,  94 => 25,  88 => 21,  79 => 18,  77 => 17,  74 => 16,  72 => 15,  64 => 13,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"partitions\" class=\"card mb-3\">
    <div class=\"card-header\">
      {% trans 'Partitions' %}
      {{ show_mysql_docu('partitioning') }}
    </div>

    <div class=\"card-body\">
        {% if partitions is not defined or partitions is empty %}
            {{ 'No partitioning defined!'|trans|notice }}
        {% else %}
            <p>
                {% trans 'Partitioned by:' %}
                <code>{{ partition_method }}({{ partition_expression }})</code>
            </p>
            {% if has_sub_partitions %}
                <p>
                    {% trans 'Sub partitioned by:' %}
                    <code>{{ sub_partition_method }}({{ sub_partition_expression }})</code>
                <p>
            {% endif %}
            <table class=\"table table-striped table-hover table-sm\">
                <thead>
                    <tr>
                        <th colspan=\"2\">#</th>
                        <th>{% trans 'Partition' %}</th>
                        {% if has_description %}
                            <th>{% trans 'Expression' %}</th>
                        {% endif %}
                        <th>{% trans 'Rows' %}</th>
                        <th>{% trans 'Data length' %}</th>
                        <th>{% trans 'Index length' %}</th>
                        <th>{% trans 'Comment' %}</th>
                        <th colspan=\"{{ range_or_list ? '7' : '6' }}\">
                            {% trans 'Action' %}
                        </th>
                    </tr>
                </thead>
                <tbody>
                {% for partition in partitions %}
                    <tr class=\"noclick{{ has_sub_partitions ? ' table-active' }}\">
                        {% if has_sub_partitions %}
                            <td>{{ partition.getOrdinal() }}</td>
                            <td></td>
                        {% else %}
                            <td colspan=\"2\">{{ partition.getOrdinal() }}</td>
                        {% endif %}
                        <th>{{ partition.getName() }}</th>
                        {% if has_description %}
                            <td>
                                <code>
                                    {{- partition.getExpression() -}}
                                    {{- partition.getMethod() == 'LIST' ? ' IN (' : ' < ' -}}
                                    {{- partition.getDescription() -}}
                                    {{- partition.getMethod() == 'LIST' ? ')' -}}
                                </code>
                            </td>
                        {% endif %}
                        <td class=\"value\">{{ partition.getRows() }}</td>
                        <td class=\"value\">
                            {% set data_length = format_byte_down(
                                partition.getDataLength(),
                                3,
                                1
                            ) %}
                            <span>{{ data_length[0] }}</span>
                            <span class=\"unit\">{{ data_length[1] }}</span>
                        </td>
                        <td class=\"value\">
                            {% set index_length = format_byte_down(
                                partition.getIndexLength(),
                                3,
                                1
                            ) %}
                            <span>{{ index_length[0] }}</span>
                            <span class=\"unit\">{{ index_length[1] }}</span>
                        </td>
                        <td>{{ partition.getComment() }}</td>

                        <td>
                          <a id=\"partition_action_ANALYZE\" class=\"ajax\" href=\"{{ url('/table/partition/analyze') }}\" data-post=\"{{ get_common({
                            'db': db,
                            'table': table,
                            'partition_name': partition.getName(),
                          }, '', false) }}\">
                            {{ get_icon('b_search', 'Analyze'|trans) }}
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_CHECK\" class=\"ajax\" href=\"{{ url('/table/partition/check') }}\" data-post=\"{{ get_common({
                            'db': db,
                            'table': table,
                            'partition_name': partition.getName(),
                          }, '', false) }}\">
                            {{ get_icon('eye', 'Check'|trans) }}
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_OPTIMIZE\" class=\"ajax\" href=\"{{ url('/table/partition/optimize') }}\" data-post=\"{{ get_common({
                            'db': db,
                            'table': table,
                            'partition_name': partition.getName(),
                          }, '', false) }}\">
                            {{ get_icon('normalize', 'Optimize'|trans) }}
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REBUILD\" class=\"ajax\" href=\"{{ url('/table/partition/rebuild') }}\" data-post=\"{{ get_common({
                            'db': db,
                            'table': table,
                            'partition_name': partition.getName(),
                          }, '', false) }}\">
                            {{ get_icon('s_tbl', 'Rebuild'|trans) }}
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REPAIR\" class=\"ajax\" href=\"{{ url('/table/partition/repair') }}\" data-post=\"{{ get_common({
                            'db': db,
                            'table': table,
                            'partition_name': partition.getName(),
                          }, '', false) }}\">
                            {{ get_icon('b_tblops', 'Repair'|trans) }}
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_TRUNCATE\" class=\"ajax\" href=\"{{ url('/table/partition/truncate') }}\" data-post=\"{{ get_common({
                            'db': db,
                            'table': table,
                            'partition_name': partition.getName(),
                          }, '', false) }}\">
                            {{ get_icon('b_empty', 'Truncate'|trans) }}
                          </a>
                        </td>

                        {% if range_or_list %}
                          <td>
                            <a id=\"partition_action_DROP\" class=\"ajax\" href=\"{{ url('/table/partition/drop') }}\" data-post=\"{{ get_common({
                              'db': db,
                              'table': table,
                              'partition_name': partition.getName(),
                            }, '', false) }}\">
                              {{ get_icon('b_drop', 'Drop'|trans) }}
                            </a>
                          </td>
                        {% endif %}

                        {% if has_sub_partitions %}
                            {% for sub_partition in partition.getSubPartitions() %}
                                <tr class=\"noclick\">
                                    <td></td>
                                    <td>{{ sub_partition.getOrdinal() }}</td>
                                    <td>{{ sub_partition.getName() }}</td>
                                    {% if has_description %}
                                        <td></td>
                                    {% endif %}
                                    <td class=\"value\">{{ sub_partition.getRows() }}</td>
                                    <td class=\"value\">
                                        {% set data_length = format_byte_down(
                                            sub_partition.getDataLength(),
                                            3,
                                            1
                                        ) %}
                                        <span>{{ data_length[0] }}</span>
                                        <span class=\"unit\">{{ data_length[1] }}</span>
                                    </td>
                                    <td class=\"value\">
                                        {% set index_length = format_byte_down(
                                            sub_partition.getIndexLength(),
                                            3,
                                            1
                                        ) %}
                                        <span>{{ index_length[0] }}</span>
                                        <span class=\"unit\">{{ index_length[1] }}</span>
                                    </td>
                                    <td>{{ sub_partition.getComment() }}</td>
                                    <td colspan=\"{{ range_or_list ? '7' : '6' }}\"></td>
                                </tr>
                            {% endfor %}
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
    <div class=\"card-footer d-print-none\">
        <form action=\"{{ url('/table/structure/partitioning') }}\" method=\"post\">
            {{ get_hidden_inputs(db, table) }}

            {% if partitions is not defined or partitions is empty %}
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"{% trans 'Partition table' %}\">
            {% else %}
                {{ link_or_button(
                  url('/sql'),
                  {
                    'db': db,
                    'table': table,
                    'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' REMOVE PARTITIONING'
                  },
                  'Remove partitioning'|trans, {
                    'class': 'btn btn-secondary ajax',
                    'id': 'remove_partitioning'
                }) }}
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"{% trans 'Edit partitioning' %}\">
            {% endif %}
        </form>
    </div>
</div>
", "table/structure/display_partitions.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/structure/display_partitions.twig");
    }
}
