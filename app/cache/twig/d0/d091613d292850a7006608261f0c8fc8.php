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

/* console/display.twig */
class __TwigTemplate_eb5df6e01a9e88ccf5e0bccaaebff8f7 extends Template
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
        echo "<div id=\"pma_console_container\" class=\"d-print-none\">
  <div id=\"pma_console\">
    <div class=\"toolbar collapsed\">
      <div class=\"switch_button console_switch\">
        ";
        // line 5
        echo $this->env->getFunction('get_image')->getCallable()("console", _gettext("SQL Query Console"));
        echo "
        <span>";
        // line 6
        echo twig_escape_filter($this->env, _gettext("Console"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"button clear\">
        <span>";
        // line 9
        echo twig_escape_filter($this->env, _gettext("Clear"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"button history\">
        <span>";
        // line 12
        echo twig_escape_filter($this->env, _gettext("History"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"button options\">
        <span>";
        // line 15
        echo twig_escape_filter($this->env, _gettext("Options"), "html", null, true);
        echo "</span>
      </div>
      ";
        // line 17
        if ((isset($context["has_bookmark_feature"]) || array_key_exists("has_bookmark_feature", $context) ? $context["has_bookmark_feature"] : (function () { throw new RuntimeError('Variable "has_bookmark_feature" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "        <div class=\"button bookmarks\">
          <span>";
            // line 19
            echo twig_escape_filter($this->env, _gettext("Bookmarks"), "html", null, true);
            echo "</span>
        </div>
      ";
        }
        // line 22
        echo "      <div class=\"button debug hide\">
        <span>";
        // line 23
        echo twig_escape_filter($this->env, _gettext("Debug SQL"), "html", null, true);
        echo "</span>
      </div>
    </div>

    ";
        // line 28
        echo "    <div class=\"content\">
      <div class=\"console_message_container\">
        <div class=\"message welcome\">
          <span id=\"instructions-0\">";
        // line 31
echo _gettext("Press Ctrl+Enter to execute query");
        echo "</span>
          <span class=\"hide\" id=\"instructions-1\">";
        // line 32
echo _gettext("Press Enter to execute query");
        echo "</span>
        </div>
        ";
        // line 34
        if ( !twig_test_empty((isset($context["sql_history"]) || array_key_exists("sql_history", $context) ? $context["sql_history"] : (function () { throw new RuntimeError('Variable "sql_history" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["sql_history"]) || array_key_exists("sql_history", $context) ? $context["sql_history"] : (function () { throw new RuntimeError('Variable "sql_history" does not exist.', 35, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 36
                echo "            <div class=\"message history collapsed hide";
                echo ((twig_matches("@^SELECT[[:space:]]+@i", twig_get_attribute($this->env, $this->source, $context["record"], "sqlquery", [], "array", false, false, false, 36))) ? (" select") : (""));
                echo "\" targetdb=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "db", [], "array", false, false, false, 36), "html", null, true);
                echo "\" targettable=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "table", [], "array", false, false, false, 36), "html", null, true);
                echo "\">
              <div class=\"action_content\">
                <span class=\"action collapse\">";
                // line 38
                echo twig_escape_filter($this->env, _gettext("Collapse"), "html", null, true);
                echo "</span>
                <span class=\"action expand\">";
                // line 39
                echo twig_escape_filter($this->env, _gettext("Expand"), "html", null, true);
                echo "</span>
                <span class=\"action requery\">";
                // line 40
                echo twig_escape_filter($this->env, _gettext("Requery"), "html", null, true);
                echo "</span>
                <span class=\"action edit\">";
                // line 41
                echo twig_escape_filter($this->env, _gettext("Edit"), "html", null, true);
                echo "</span>
                <span class=\"action explain\">";
                // line 42
                echo twig_escape_filter($this->env, _gettext("Explain"), "html", null, true);
                echo "</span>
                <span class=\"action profiling\">";
                // line 43
                echo twig_escape_filter($this->env, _gettext("Profiling"), "html", null, true);
                echo "</span>
                ";
                // line 44
                if ((isset($context["has_bookmark_feature"]) || array_key_exists("has_bookmark_feature", $context) ? $context["has_bookmark_feature"] : (function () { throw new RuntimeError('Variable "has_bookmark_feature" does not exist.', 44, $this->source); })())) {
                    // line 45
                    echo "                  <span class=\"action bookmark\">";
                    echo twig_escape_filter($this->env, _gettext("Bookmark"), "html", null, true);
                    echo "</span>
                ";
                }
                // line 47
                echo "                <span class=\"text failed\">";
                echo twig_escape_filter($this->env, _gettext("Query failed"), "html", null, true);
                echo "</span>
                <span class=\"text targetdb\">";
                // line 48
                echo twig_escape_filter($this->env, _gettext("Database"), "html", null, true);
                echo ": <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "db", [], "array", false, false, false, 48), "html", null, true);
                echo "</span></span>
                <span class=\"text query_time\">";
                // line 49
                echo twig_escape_filter($this->env, _gettext("Queried time"), "html", null, true);
                echo ": <span>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["record"], "timevalue", [], "array", true, true, false, 49)) ? (twig_get_attribute($this->env, $this->source, $context["record"], "timevalue", [], "array", false, false, false, 49)) : (_gettext("During current session"))), "html", null, true);
                echo "</span></span>
              </div>

              <span class=\"query\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "sqlquery", [], "array", false, false, false, 52), "html", null, true);
                echo "</span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        ";
        }
        // line 56
        echo "      </div><!-- console_message_container -->
      <div class=\"query_input\">
        <span class=\"console_query_input\"></span>
      </div>
    </div><!-- message end -->
    ";
        // line 62
        echo "    <div class=\"mid_layer\"></div>
    ";
        // line 64
        echo "    <div class=\"card\" id=\"debug_console\">
      <div class=\"toolbar\">
        <div class=\"button order order_asc\">
          <span>";
        // line 67
        echo twig_escape_filter($this->env, _gettext("ascending"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button order order_desc\">
          <span>";
        // line 70
        echo twig_escape_filter($this->env, _gettext("descending"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"text\">
          <span>";
        // line 73
        echo twig_escape_filter($this->env, _gettext("Order:"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"switch_button\">
          <span>";
        // line 76
        echo twig_escape_filter($this->env, _gettext("Debug SQL"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button order_by sort_count\">
          <span>";
        // line 79
        echo twig_escape_filter($this->env, _gettext("Count"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button order_by sort_exec\">
          <span>";
        // line 82
        echo twig_escape_filter($this->env, _gettext("Execution order"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button order_by sort_time\">
          <span>";
        // line 85
        echo twig_escape_filter($this->env, _gettext("Time taken"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"text\">
          <span>";
        // line 88
        echo twig_escape_filter($this->env, _gettext("Order by:"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button group_queries\">
          <span>";
        // line 91
        echo twig_escape_filter($this->env, _gettext("Group queries"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button ungroup_queries\">
          <span>";
        // line 94
        echo twig_escape_filter($this->env, _gettext("Ungroup queries"), "html", null, true);
        echo "</span>
        </div>
      </div>

      <div class=\"content debug\">
        <div class=\"message welcome\"></div>
        <div class=\"debugLog\"></div>
      </div> <!-- Content -->
      <div class=\"templates\">
        <div class=\"debug_query action_content\">
          <span class=\"action collapse\">";
        // line 104
        echo twig_escape_filter($this->env, _gettext("Collapse"), "html", null, true);
        echo "</span>
          <span class=\"action expand\">";
        // line 105
        echo twig_escape_filter($this->env, _gettext("Expand"), "html", null, true);
        echo "</span>
          <span class=\"action dbg_show_trace\">";
        // line 106
        echo twig_escape_filter($this->env, _gettext("Show trace"), "html", null, true);
        echo "</span>
          <span class=\"action dbg_hide_trace\">";
        // line 107
        echo twig_escape_filter($this->env, _gettext("Hide trace"), "html", null, true);
        echo "</span>
          <span class=\"text count hide\">";
        // line 108
        echo twig_escape_filter($this->env, _gettext("Count:"), "html", null, true);
        echo " <span></span></span>
          <span class=\"text time\">";
        // line 109
        echo twig_escape_filter($this->env, _gettext("Time taken:"), "html", null, true);
        echo " <span></span></span>
        </div>

      </div> <!-- Template -->
    </div> <!-- Debug SQL card -->
    ";
        // line 114
        if ((isset($context["has_bookmark_feature"]) || array_key_exists("has_bookmark_feature", $context) ? $context["has_bookmark_feature"] : (function () { throw new RuntimeError('Variable "has_bookmark_feature" does not exist.', 114, $this->source); })())) {
            // line 115
            echo "      <div class=\"card\" id=\"pma_bookmarks\">
        <div class=\"toolbar\">
          <div class=\"switch_button\">
            <span>";
            // line 118
            echo twig_escape_filter($this->env, _gettext("Bookmarks"), "html", null, true);
            echo "</span>
          </div>
          <div class=\"button refresh\">
            <span>";
            // line 121
            echo twig_escape_filter($this->env, _gettext("Refresh"), "html", null, true);
            echo "</span>
          </div>
          <div class=\"button add\">
            <span>";
            // line 124
            echo twig_escape_filter($this->env, _gettext("Add"), "html", null, true);
            echo "</span>
          </div>
        </div>

        <div class=\"content bookmark\">
          ";
            // line 129
            echo (isset($context["bookmark_content"]) || array_key_exists("bookmark_content", $context) ? $context["bookmark_content"] : (function () { throw new RuntimeError('Variable "bookmark_content" does not exist.', 129, $this->source); })());
            echo "
        </div>
        <div class=\"mid_layer\"></div>
        <div class=\"card add\">
          <div class=\"toolbar\">
            <div class=\"switch_button\">
              <span>";
            // line 135
            echo twig_escape_filter($this->env, _gettext("Add bookmark"), "html", null, true);
            echo "</span>
            </div>
          </div>

          <div class=\"content add_bookmark\">
            <div class=\"options\">
              <label>
                ";
            // line 142
echo _gettext("Label");
            echo ": <input type=\"text\" name=\"label\">
              </label>
              <label>
                ";
            // line 145
echo _gettext("Target database");
            echo ": <input type=\"text\" name=\"targetdb\">
              </label>
              <label>
                <input type=\"checkbox\" name=\"shared\">";
            // line 148
echo _gettext("Share this bookmark");
            // line 149
            echo "              </label>
              <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">";
            // line 150
echo _gettext("OK");
            echo "</button>
            </div> <!-- options -->
            <div class=\"query_input\">
              <span class=\"bookmark_add_input\"></span>
            </div>
          </div>
        </div> <!-- Add bookmark card -->
      </div> <!-- Bookmarks card -->
    ";
        }
        // line 159
        echo "    ";
        // line 160
        echo "    <div class=\"card\" id=\"pma_console_options\">
      <div class=\"toolbar\">
        <div class=\"switch_button\">
          <span>";
        // line 163
        echo twig_escape_filter($this->env, _gettext("Options"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"button default\">
          <span>";
        // line 166
        echo twig_escape_filter($this->env, _gettext("Set default"), "html", null, true);
        echo "</span>
        </div>
      </div>

      <div class=\"content\">
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsAlwaysExpandCheckbox\" name=\"always_expand\">
          <label class=\"form-check-label\" for=\"consoleOptionsAlwaysExpandCheckbox\">";
        // line 173
        echo twig_escape_filter($this->env, _gettext("Always expand query messages"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsStartHistoryCheckbox\" name=\"start_history\">
          <label class=\"form-check-label\" for=\"consoleOptionsStartHistoryCheckbox\">";
        // line 177
        echo twig_escape_filter($this->env, _gettext("Show query history at start"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsCurrentQueryCheckbox\" name=\"current_query\">
          <label class=\"form-check-label\" for=\"consoleOptionsCurrentQueryCheckbox\">";
        // line 181
        echo twig_escape_filter($this->env, _gettext("Show current browsing query"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsEnterExecutesCheckbox\" name=\"enter_executes\">
          <label class=\"form-check-label\" for=\"consoleOptionsEnterExecutesCheckbox\">";
        // line 185
        echo twig_escape_filter($this->env, _gettext("Execute queries on Enter and insert new line with Shift+Enter. To make this permanent, view settings."), "html", null, true);
        echo "</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsDarkThemeCheckbox\" name=\"dark_theme\">
          <label class=\"form-check-label\" for=\"consoleOptionsDarkThemeCheckbox\">";
        // line 189
        echo twig_escape_filter($this->env, _gettext("Switch to dark theme"), "html", null, true);
        echo "</label>
        </div>
      </div>
    </div> <!-- Options card -->
    <div class=\"templates\">
      ";
        // line 195
        echo "      <div class=\"query_actions\">
        <span class=\"action collapse\">";
        // line 196
        echo twig_escape_filter($this->env, _gettext("Collapse"), "html", null, true);
        echo "</span>
        <span class=\"action expand\">";
        // line 197
        echo twig_escape_filter($this->env, _gettext("Expand"), "html", null, true);
        echo "</span>
        <span class=\"action requery\">";
        // line 198
        echo twig_escape_filter($this->env, _gettext("Requery"), "html", null, true);
        echo "</span>
        <span class=\"action edit\">";
        // line 199
        echo twig_escape_filter($this->env, _gettext("Edit"), "html", null, true);
        echo "</span>
        <span class=\"action explain\">";
        // line 200
        echo twig_escape_filter($this->env, _gettext("Explain"), "html", null, true);
        echo "</span>
        <span class=\"action profiling\">";
        // line 201
        echo twig_escape_filter($this->env, _gettext("Profiling"), "html", null, true);
        echo "</span>
        ";
        // line 202
        if ((isset($context["has_bookmark_feature"]) || array_key_exists("has_bookmark_feature", $context) ? $context["has_bookmark_feature"] : (function () { throw new RuntimeError('Variable "has_bookmark_feature" does not exist.', 202, $this->source); })())) {
            // line 203
            echo "          <span class=\"action bookmark\">";
            echo twig_escape_filter($this->env, _gettext("Bookmark"), "html", null, true);
            echo "</span>
        ";
        }
        // line 205
        echo "        <span class=\"text failed\">";
        echo twig_escape_filter($this->env, _gettext("Query failed"), "html", null, true);
        echo "</span>
        <span class=\"text targetdb\">";
        // line 206
        echo twig_escape_filter($this->env, _gettext("Database"), "html", null, true);
        echo ": <span></span></span>
        <span class=\"text query_time\">";
        // line 207
        echo twig_escape_filter($this->env, _gettext("Queried time"), "html", null, true);
        echo ": <span></span></span>
      </div>
    </div>
  </div> <!-- #console end -->
</div> <!-- #console_container end -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "console/display.twig";
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
        return array (  473 => 207,  469 => 206,  464 => 205,  458 => 203,  456 => 202,  452 => 201,  448 => 200,  444 => 199,  440 => 198,  436 => 197,  432 => 196,  429 => 195,  421 => 189,  414 => 185,  407 => 181,  400 => 177,  393 => 173,  383 => 166,  377 => 163,  372 => 160,  370 => 159,  358 => 150,  355 => 149,  353 => 148,  347 => 145,  341 => 142,  331 => 135,  322 => 129,  314 => 124,  308 => 121,  302 => 118,  297 => 115,  295 => 114,  287 => 109,  283 => 108,  279 => 107,  275 => 106,  271 => 105,  267 => 104,  254 => 94,  248 => 91,  242 => 88,  236 => 85,  230 => 82,  224 => 79,  218 => 76,  212 => 73,  206 => 70,  200 => 67,  195 => 64,  192 => 62,  185 => 56,  182 => 55,  173 => 52,  165 => 49,  159 => 48,  154 => 47,  148 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  112 => 36,  107 => 35,  105 => 34,  100 => 32,  96 => 31,  91 => 28,  84 => 23,  81 => 22,  75 => 19,  72 => 18,  70 => 17,  65 => 15,  59 => 12,  53 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"pma_console_container\" class=\"d-print-none\">
  <div id=\"pma_console\">
    <div class=\"toolbar collapsed\">
      <div class=\"switch_button console_switch\">
        {{ get_image('console', 'SQL Query Console'|trans) }}
        <span>{{ 'Console'|trans }}</span>
      </div>
      <div class=\"button clear\">
        <span>{{ 'Clear'|trans }}</span>
      </div>
      <div class=\"button history\">
        <span>{{ 'History'|trans }}</span>
      </div>
      <div class=\"button options\">
        <span>{{ 'Options'|trans }}</span>
      </div>
      {% if has_bookmark_feature %}
        <div class=\"button bookmarks\">
          <span>{{ 'Bookmarks'|trans }}</span>
        </div>
      {% endif %}
      <div class=\"button debug hide\">
        <span>{{ 'Debug SQL'|trans }}</span>
      </div>
    </div>

    {# Console messages #}
    <div class=\"content\">
      <div class=\"console_message_container\">
        <div class=\"message welcome\">
          <span id=\"instructions-0\">{% trans 'Press Ctrl+Enter to execute query' %}</span>
          <span class=\"hide\" id=\"instructions-1\">{% trans 'Press Enter to execute query' %}</span>
        </div>
        {% if sql_history is not empty %}
          {% for record in sql_history|reverse %}
            <div class=\"message history collapsed hide{{ record['sqlquery'] matches '@^SELECT[[:space:]]+@i' ? ' select' }}\" targetdb=\"{{ record['db'] }}\" targettable=\"{{ record['table'] }}\">
              <div class=\"action_content\">
                <span class=\"action collapse\">{{ 'Collapse'|trans }}</span>
                <span class=\"action expand\">{{ 'Expand'|trans }}</span>
                <span class=\"action requery\">{{ 'Requery'|trans }}</span>
                <span class=\"action edit\">{{ 'Edit'|trans }}</span>
                <span class=\"action explain\">{{ 'Explain'|trans }}</span>
                <span class=\"action profiling\">{{ 'Profiling'|trans }}</span>
                {% if has_bookmark_feature %}
                  <span class=\"action bookmark\">{{ 'Bookmark'|trans }}</span>
                {% endif %}
                <span class=\"text failed\">{{ 'Query failed'|trans }}</span>
                <span class=\"text targetdb\">{{ 'Database'|trans }}: <span>{{ record['db'] }}</span></span>
                <span class=\"text query_time\">{{ 'Queried time'|trans }}: <span>{{ record['timevalue'] is defined ? record['timevalue'] : 'During current session'|trans }}</span></span>
              </div>

              <span class=\"query\">{{ record['sqlquery'] }}</span>
            </div>
          {% endfor %}
        {% endif %}
      </div><!-- console_message_container -->
      <div class=\"query_input\">
        <span class=\"console_query_input\"></span>
      </div>
    </div><!-- message end -->
    {# Drak the console with other cards over it #}
    <div class=\"mid_layer\"></div>
    {# Debug SQL card #}
    <div class=\"card\" id=\"debug_console\">
      <div class=\"toolbar\">
        <div class=\"button order order_asc\">
          <span>{{ 'ascending'|trans }}</span>
        </div>
        <div class=\"button order order_desc\">
          <span>{{ 'descending'|trans }}</span>
        </div>
        <div class=\"text\">
          <span>{{ 'Order:'|trans }}</span>
        </div>
        <div class=\"switch_button\">
          <span>{{ 'Debug SQL'|trans }}</span>
        </div>
        <div class=\"button order_by sort_count\">
          <span>{{ 'Count'|trans }}</span>
        </div>
        <div class=\"button order_by sort_exec\">
          <span>{{ 'Execution order'|trans }}</span>
        </div>
        <div class=\"button order_by sort_time\">
          <span>{{ 'Time taken'|trans }}</span>
        </div>
        <div class=\"text\">
          <span>{{ 'Order by:'|trans }}</span>
        </div>
        <div class=\"button group_queries\">
          <span>{{ 'Group queries'|trans }}</span>
        </div>
        <div class=\"button ungroup_queries\">
          <span>{{ 'Ungroup queries'|trans }}</span>
        </div>
      </div>

      <div class=\"content debug\">
        <div class=\"message welcome\"></div>
        <div class=\"debugLog\"></div>
      </div> <!-- Content -->
      <div class=\"templates\">
        <div class=\"debug_query action_content\">
          <span class=\"action collapse\">{{ 'Collapse'|trans }}</span>
          <span class=\"action expand\">{{ 'Expand'|trans }}</span>
          <span class=\"action dbg_show_trace\">{{ 'Show trace'|trans }}</span>
          <span class=\"action dbg_hide_trace\">{{ 'Hide trace'|trans }}</span>
          <span class=\"text count hide\">{{ 'Count:'|trans }} <span></span></span>
          <span class=\"text time\">{{ 'Time taken:'|trans }} <span></span></span>
        </div>

      </div> <!-- Template -->
    </div> <!-- Debug SQL card -->
    {% if has_bookmark_feature %}
      <div class=\"card\" id=\"pma_bookmarks\">
        <div class=\"toolbar\">
          <div class=\"switch_button\">
            <span>{{ 'Bookmarks'|trans }}</span>
          </div>
          <div class=\"button refresh\">
            <span>{{ 'Refresh'|trans }}</span>
          </div>
          <div class=\"button add\">
            <span>{{ 'Add'|trans }}</span>
          </div>
        </div>

        <div class=\"content bookmark\">
          {{ bookmark_content|raw }}
        </div>
        <div class=\"mid_layer\"></div>
        <div class=\"card add\">
          <div class=\"toolbar\">
            <div class=\"switch_button\">
              <span>{{ 'Add bookmark'|trans }}</span>
            </div>
          </div>

          <div class=\"content add_bookmark\">
            <div class=\"options\">
              <label>
                {% trans 'Label' %}: <input type=\"text\" name=\"label\">
              </label>
              <label>
                {% trans 'Target database' %}: <input type=\"text\" name=\"targetdb\">
              </label>
              <label>
                <input type=\"checkbox\" name=\"shared\">{% trans 'Share this bookmark' %}
              </label>
              <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">{% trans 'OK' %}</button>
            </div> <!-- options -->
            <div class=\"query_input\">
              <span class=\"bookmark_add_input\"></span>
            </div>
          </div>
        </div> <!-- Add bookmark card -->
      </div> <!-- Bookmarks card -->
    {% endif %}
    {# Options card #}
    <div class=\"card\" id=\"pma_console_options\">
      <div class=\"toolbar\">
        <div class=\"switch_button\">
          <span>{{ 'Options'|trans }}</span>
        </div>
        <div class=\"button default\">
          <span>{{ 'Set default'|trans }}</span>
        </div>
      </div>

      <div class=\"content\">
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsAlwaysExpandCheckbox\" name=\"always_expand\">
          <label class=\"form-check-label\" for=\"consoleOptionsAlwaysExpandCheckbox\">{{ 'Always expand query messages'|trans }}</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsStartHistoryCheckbox\" name=\"start_history\">
          <label class=\"form-check-label\" for=\"consoleOptionsStartHistoryCheckbox\">{{ 'Show query history at start'|trans }}</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsCurrentQueryCheckbox\" name=\"current_query\">
          <label class=\"form-check-label\" for=\"consoleOptionsCurrentQueryCheckbox\">{{ 'Show current browsing query'|trans }}</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsEnterExecutesCheckbox\" name=\"enter_executes\">
          <label class=\"form-check-label\" for=\"consoleOptionsEnterExecutesCheckbox\">{{ 'Execute queries on Enter and insert new line with Shift+Enter. To make this permanent, view settings.'|trans }}</label>
        </div>
        <div class=\"form-check form-switch\">
          <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"consoleOptionsDarkThemeCheckbox\" name=\"dark_theme\">
          <label class=\"form-check-label\" for=\"consoleOptionsDarkThemeCheckbox\">{{ 'Switch to dark theme'|trans }}</label>
        </div>
      </div>
    </div> <!-- Options card -->
    <div class=\"templates\">
      {# Templates for console message actions #}
      <div class=\"query_actions\">
        <span class=\"action collapse\">{{ 'Collapse'|trans }}</span>
        <span class=\"action expand\">{{ 'Expand'|trans }}</span>
        <span class=\"action requery\">{{ 'Requery'|trans }}</span>
        <span class=\"action edit\">{{ 'Edit'|trans }}</span>
        <span class=\"action explain\">{{ 'Explain'|trans }}</span>
        <span class=\"action profiling\">{{ 'Profiling'|trans }}</span>
        {% if has_bookmark_feature %}
          <span class=\"action bookmark\">{{ 'Bookmark'|trans }}</span>
        {% endif %}
        <span class=\"text failed\">{{ 'Query failed'|trans }}</span>
        <span class=\"text targetdb\">{{ 'Database'|trans }}: <span></span></span>
        <span class=\"text query_time\">{{ 'Queried time'|trans }}: <span></span></span>
      </div>
    </div>
  </div> <!-- #console end -->
</div> <!-- #console_container end -->
", "console/display.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/console/display.twig");
    }
}
