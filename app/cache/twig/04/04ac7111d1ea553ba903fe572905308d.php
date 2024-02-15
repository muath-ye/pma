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

/* table/insert/get_html_for_insert_edit_form_header.twig */
class __TwigTemplate_e2fb1ce223623e98c1a40b6d73fa8565 extends Template
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
        echo "<form id=\"insertForm\" class=\"lock-page";
        echo ((((isset($context["has_blob_field"]) || array_key_exists("has_blob_field", $context) ? $context["has_blob_field"] : (function () { throw new RuntimeError('Variable "has_blob_field" does not exist.', 1, $this->source); })()) && (isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 1, $this->source); })()))) ? (" disableAjax") : (""));
        echo "\" method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/replace");
        echo "\" name=\"insertForm\"";
        echo (((isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 1, $this->source); })())) ? (" enctype=\"multipart/form-data\"") : (""));
        echo ">
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/get_html_for_insert_edit_form_header.twig";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"insertForm\" class=\"lock-page{{ has_blob_field and is_upload ? ' disableAjax' }}\" method=\"post\" action=\"{{ url('/table/replace') }}\" name=\"insertForm\"{{ is_upload ? ' enctype=\"multipart/form-data\"' }}>
", "table/insert/get_html_for_insert_edit_form_header.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/get_html_for_insert_edit_form_header.twig");
    }
}
