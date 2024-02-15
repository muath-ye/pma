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

/* database/structure/favorite_anchor.twig */
class __TwigTemplate_ba4bc16d8e0806d1dbd6fbe63dae6222 extends Template
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
        echo "<a id=\"";
        echo twig_escape_filter($this->env, (isset($context["table_name_hash"]) || array_key_exists("table_name_hash", $context) ? $context["table_name_hash"] : (function () { throw new RuntimeError('Variable "table_name_hash" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "_favorite_anchor\"
    class=\"ajax favorite_table_anchor\"
    href=\"";
        // line 3
        echo $this->env->getFunction('url')->getCallable()("/database/structure/favorite-table", (isset($context["fav_params"]) || array_key_exists("fav_params", $context) ? $context["fav_params"] : (function () { throw new RuntimeError('Variable "fav_params" does not exist.', 3, $this->source); })()));
        echo "\"
    title=\"";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 4, $this->source); })())) ? (_gettext("Remove from Favorites")) : (_gettext("Add to Favorites"))), "html", null, true);
        echo "\"
    data-favtargets=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["db_table_name_hash"]) || array_key_exists("db_table_name_hash", $context) ? $context["db_table_name_hash"] : (function () { throw new RuntimeError('Variable "db_table_name_hash" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 6
        echo (((isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 6, $this->source); })())) ? ($this->env->getFunction('get_icon')->getCallable()("b_favorite")) : ($this->env->getFunction('get_icon')->getCallable()("b_no_favorite")));
        echo "
</a>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/favorite_anchor.twig";
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
        return array (  55 => 6,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"{{ table_name_hash }}_favorite_anchor\"
    class=\"ajax favorite_table_anchor\"
    href=\"{{ url('/database/structure/favorite-table', fav_params) }}\"
    title=\"{{ already_favorite ? 'Remove from Favorites'|trans : 'Add to Favorites'|trans }}\"
    data-favtargets=\"{{ db_table_name_hash }}\">
    {{ already_favorite ? get_icon('b_favorite') : get_icon('b_no_favorite') }}
</a>
", "database/structure/favorite_anchor.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/favorite_anchor.twig");
    }
}
