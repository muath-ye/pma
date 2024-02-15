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

/* server/user_groups/user_listings.twig */
class __TwigTemplate_1cd1a1ab2c63537fb1bd60c26535f6ba extends Template
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
        echo "<h2>";
        echo twig_sprintf(_gettext("Users of '%s' user group"), (isset($context["user_group_special_chars"]) || array_key_exists("user_group_special_chars", $context) ? $context["user_group_special_chars"] : (function () { throw new RuntimeError('Variable "user_group_special_chars" does not exist.', 1, $this->source); })()));
        echo "</h2>
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 2, $this->source); })())) == 0)) {
            // line 3
            echo "    <p>";
echo _gettext("No users were found belonging to this user group.");
            echo "</p>
";
        } else {
            // line 5
            echo "<table class=\"table table-striped w-auto\">
    <thead>
        <tr>
            <th>#</th>
            <th>";
            // line 9
echo _gettext("User");
            echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 14
                echo "        <tr>
            <td>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "count", [], "any", false, false, false, 15), "html", null, true);
                echo "</td>
            <td>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obj"], "user", [], "any", false, false, false, 16), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </tbody>
</table>

";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/user_groups/user_listings.twig";
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
        return array (  83 => 19,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  56 => 9,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'Users of \\'%s\\' user group'|trans|format(user_group_special_chars)|raw }}</h2>
{% if users|length == 0 %}
    <p>{% trans 'No users were found belonging to this user group.' %}</p>
{% else %}
<table class=\"table table-striped w-auto\">
    <thead>
        <tr>
            <th>#</th>
            <th>{% trans 'User' %}</th>
        </tr>
    </thead>
    <tbody>
    {% for obj in users %}
        <tr>
            <td>{{ obj.count }}</td>
            <td>{{ obj.user }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endif %}
", "server/user_groups/user_listings.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/user_listings.twig");
    }
}
