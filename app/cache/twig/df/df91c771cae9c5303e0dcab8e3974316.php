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

/* login/twofactor/application_configure.twig */
class __TwigTemplate_9cb03078246743962b6dc3523bfd1171 extends Template
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
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
<p>
    ";
        // line 3
echo _gettext("Please scan following QR code into the two-factor authentication app on your device and enter authentication code it generates.");
        // line 4
        echo "</p>
<p>
    ";
        // line 6
        if ((isset($context["has_imagick"]) || array_key_exists("has_imagick", $context) ? $context["has_imagick"] : (function () { throw new RuntimeError('Variable "has_imagick" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 9
            echo "        ";
            echo (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })());
            echo "
    ";
        }
        // line 11
        echo "</p>
<p>
    ";
        // line 13
echo _gettext("Secret/key:");
        echo " <strong>";
        echo twig_escape_filter($this->env, (isset($context["secret"]) || array_key_exists("secret", $context) ? $context["secret"] : (function () { throw new RuntimeError('Variable "secret" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</strong>
</p>
<p>
    <label>";
        // line 16
echo _gettext("Authentication code:");
        echo " <input type=\"text\" name=\"2fa_code\" autocomplete=\"off\"></label>
</p>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/twofactor/application_configure.twig";
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
        return array (  74 => 16,  66 => 13,  62 => 11,  56 => 9,  50 => 7,  48 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ get_hidden_inputs() }}
<p>
    {% trans \"Please scan following QR code into the two-factor authentication app on your device and enter authentication code it generates.\" %}
</p>
<p>
    {% if has_imagick %}
        <img src=\"{{ image }}\">
    {% else %}
        {{ image|raw }}
    {% endif %}
</p>
<p>
    {% trans \"Secret/key:\" %} <strong>{{ secret }}</strong>
</p>
<p>
    <label>{% trans \"Authentication code:\" %} <input type=\"text\" name=\"2fa_code\" autocomplete=\"off\"></label>
</p>
", "login/twofactor/application_configure.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/application_configure.twig");
    }
}
