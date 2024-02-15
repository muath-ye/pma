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

/* database/designer/page_selector.twig */
class __TwigTemplate_d917c1f6cf64d11f260018393eb6daf5 extends Template
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
        echo "<select name=\"selected_page\" id=\"selected_page\">
    <option value=\"0\">-- ";
        // line 2
echo _gettext("Select page");
        echo " --</option>
    ";
        // line 3
        if ((isset($context["pdfwork"]) || array_key_exists("pdfwork", $context) ? $context["pdfwork"] : (function () { throw new RuntimeError('Variable "pdfwork" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["nr"] => $context["desc"]) {
                // line 5
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["nr"], "html", null, true);
                echo "\">
                ";
                // line 6
                echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['nr'], $context['desc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    ";
        }
        // line 10
        echo "</select>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/designer/page_selector.twig";
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
        return array (  68 => 10,  65 => 9,  56 => 6,  51 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<select name=\"selected_page\" id=\"selected_page\">
    <option value=\"0\">-- {% trans 'Select page' %} --</option>
    {% if pdfwork %}
        {% for nr, desc in pages %}
            <option value=\"{{ nr }}\">
                {{ desc }}
            </option>
        {% endfor %}
    {% endif %}
</select>
", "database/designer/page_selector.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/page_selector.twig");
    }
}
