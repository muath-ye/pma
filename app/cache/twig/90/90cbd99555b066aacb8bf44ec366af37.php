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

/* server/replication/primary_replication.twig */
class __TwigTemplate_594f545efc1f9d98eed3f7cd12a09463 extends Template
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
        if ( !(isset($context["clear_screen"]) || array_key_exists("clear_screen", $context) ? $context["clear_screen"] : (function () { throw new RuntimeError('Variable "clear_screen" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 3
echo _gettext("Primary replication");
            echo "</div>
    <div class=\"card-body\">
    ";
            // line 5
echo _gettext("This server is configured as primary in a replication process.");
            // line 6
            echo "    <ul>
      <li>
        <a href=\"#primary_status_href\" id=\"primary_status_href\">
          ";
            // line 9
echo _gettext("Show primary status");
            // line 10
            echo "        </a>
        ";
            // line 11
            echo (isset($context["primary_status_table"]) || array_key_exists("primary_status_table", $context) ? $context["primary_status_table"] : (function () { throw new RuntimeError('Variable "primary_status_table" does not exist.', 11, $this->source); })());
            echo "
      </li>
      <li>
        <p>
          <a href=\"#primary_replicas_href\" id=\"primary_replicas_href\">
            ";
            // line 16
echo _gettext("Show connected replicas");
            // line 17
            echo "          </a>
        </p>

        <div id=\"replication_replicas_section\" style=\"display: none;\">
          <table class=\"table w-auto\">
            <thead>
              <tr>
                <th>";
            // line 24
echo _gettext("Server ID");
            echo "</th>
                <th>";
            // line 25
echo _gettext("Host");
            echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["replicas"]) || array_key_exists("replicas", $context) ? $context["replicas"] : (function () { throw new RuntimeError('Variable "replicas" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["replica"]) {
                // line 30
                echo "                <tr>
                  <td class=\"text-end font-monospace\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["replica"], "Server_id", [], "array", false, false, false, 31), "html", null, true);
                echo "</td>
                  <td class=\"text-end font-monospace\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["replica"], "Host", [], "array", false, false, false, 32), "html", null, true);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['replica'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
          </table>
          <br>
          ";
            // line 38
            echo $this->env->getFilter('notice')->getCallable()(_gettext("Only replicas started with the --report-host=host_name option are visible in this list."));
            echo "
          <br>
        </div>
      </li>
      <li>
        <a href=\"";
            // line 43
            echo $this->env->getFunction('url')->getCallable()("/server/replication");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 43, $this->source); })()), "");
            echo "\" id=\"primary_addreplicauser_href\">
          ";
            // line 44
echo _gettext("Add replica replication user");
            // line 45
            echo "        </a>
      </li>
";
        }
        // line 48
        if ((isset($context["primary_add_user"]) || array_key_exists("primary_add_user", $context) ? $context["primary_add_user"] : (function () { throw new RuntimeError('Variable "primary_add_user" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "    ";
            echo (isset($context["primary_add_replica_user"]) || array_key_exists("primary_add_replica_user", $context) ? $context["primary_add_replica_user"] : (function () { throw new RuntimeError('Variable "primary_add_replica_user" does not exist.', 49, $this->source); })());
            echo "
";
        } elseif ( !        // line 50
(isset($context["clear_screen"]) || array_key_exists("clear_screen", $context) ? $context["clear_screen"] : (function () { throw new RuntimeError('Variable "clear_screen" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "    </ul>
    </div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/replication/primary_replication.twig";
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
        return array (  144 => 51,  142 => 50,  137 => 49,  135 => 48,  130 => 45,  128 => 44,  122 => 43,  114 => 38,  109 => 35,  100 => 32,  96 => 31,  93 => 30,  89 => 29,  82 => 25,  78 => 24,  69 => 17,  67 => 16,  59 => 11,  56 => 10,  54 => 9,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not clear_screen %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{% trans 'Primary replication' %}</div>
    <div class=\"card-body\">
    {% trans 'This server is configured as primary in a replication process.' %}
    <ul>
      <li>
        <a href=\"#primary_status_href\" id=\"primary_status_href\">
          {% trans 'Show primary status' %}
        </a>
        {{ primary_status_table|raw }}
      </li>
      <li>
        <p>
          <a href=\"#primary_replicas_href\" id=\"primary_replicas_href\">
            {% trans 'Show connected replicas' %}
          </a>
        </p>

        <div id=\"replication_replicas_section\" style=\"display: none;\">
          <table class=\"table w-auto\">
            <thead>
              <tr>
                <th>{% trans 'Server ID' %}</th>
                <th>{% trans 'Host' %}</th>
              </tr>
            </thead>
            <tbody>
              {% for replica in replicas %}
                <tr>
                  <td class=\"text-end font-monospace\">{{ replica['Server_id'] }}</td>
                  <td class=\"text-end font-monospace\">{{ replica['Host'] }}</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
          <br>
          {{ 'Only replicas started with the --report-host=host_name option are visible in this list.'|trans|notice }}
          <br>
        </div>
      </li>
      <li>
        <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ get_common(url_params, '') }}\" id=\"primary_addreplicauser_href\">
          {% trans 'Add replica replication user' %}
        </a>
      </li>
{% endif %}
{% if primary_add_user %}
    {{ primary_add_replica_user|raw }}
{% elseif not clear_screen %}
    </ul>
    </div>
  </div>
{% endif %}
", "server/replication/primary_replication.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/primary_replication.twig");
    }
}
