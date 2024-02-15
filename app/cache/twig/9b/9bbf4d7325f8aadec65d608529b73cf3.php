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

/* config/form_display/input.twig */
class __TwigTemplate_ea5dd642a7ee65ec530c69890d44060c extends Template
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
        if ((isset($context["option_is_disabled"]) || array_key_exists("option_is_disabled", $context) ? $context["option_is_disabled"] : (function () { throw new RuntimeError('Variable "option_is_disabled" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "  ";
            $context["tr_class"] = ((isset($context["tr_class"]) || array_key_exists("tr_class", $context) ? $context["tr_class"] : (function () { throw new RuntimeError('Variable "tr_class" does not exist.', 2, $this->source); })()) . " disabled-field");
        }
        // line 4
        echo "<tr";
        if ((isset($context["tr_class"]) || array_key_exists("tr_class", $context) ? $context["tr_class"] : (function () { throw new RuntimeError('Variable "tr_class" does not exist.', 4, $this->source); })())) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["tr_class"]) || array_key_exists("tr_class", $context) ? $context["tr_class"] : (function () { throw new RuntimeError('Variable "tr_class" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">
  <th>
    <label for=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">";
        echo (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })());
        echo "</label>

    ";
        // line 8
        if ( !twig_test_empty((isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "      <span class=\"doc\">
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" target=\"documentation\">";
            echo $this->env->getFunction('get_image')->getCallable()("b_help", _gettext("Documentation"));
            echo "</a>
      </span>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((isset($context["option_is_disabled"]) || array_key_exists("option_is_disabled", $context) ? $context["option_is_disabled"] : (function () { throw new RuntimeError('Variable "option_is_disabled" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "      <span class=\"disabled-notice\" title=\"";
echo _gettext("This setting is disabled, it will not be applied to your configuration.");
            echo "\">
        ";
            // line 16
echo _gettext("Disabled");
            // line 17
            echo "      </span>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ( !twig_test_empty((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "      <small>";
            echo (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 21, $this->source); })());
            echo "</small>
    ";
        }
        // line 23
        echo "  </th>

  <td>
    ";
        // line 26
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 26, $this->source); })()) == "text")) {
            // line 27
            echo "      <input type=\"text\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" class=\"w-75";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 27, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 27, $this->source); })())) ? (" custom field-error") : (" custom"))) : (""));
            echo "\">
    ";
        } elseif ((        // line 28
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 28, $this->source); })()) == "password")) {
            // line 29
            echo "      <input type=\"password\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" class=\"w-75";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 29, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 29, $this->source); })())) ? (" custom field-error") : (" custom"))) : (""));
            echo "\" spellcheck=\"false\">
    ";
        } elseif (((        // line 30
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })()) == "short_text") &&  !is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 30, $this->source); })())))) {
            // line 31
            echo "      ";
            // line 32
            echo "      <input type=\"text\" size=\"25\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\" class=\"";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 32, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 32, $this->source); })())) ? ("custom field-error") : ("custom"))) : (""));
            echo "\">
    ";
        } elseif ((        // line 33
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })()) == "number_text")) {
            // line 34
            echo "      <input type=\"number\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" class=\"";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 34, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 34, $this->source); })())) ? ("custom field-error") : ("custom"))) : (""));
            echo "\">
    ";
        } elseif ((        // line 35
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 35, $this->source); })()) == "checkbox")) {
            // line 36
            echo "      <span class=\"checkbox";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 36, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 36, $this->source); })())) ? (" custom field-error") : (" custom"))) : (""));
            echo "\">
        <input type=\"checkbox\" name=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\"";
            echo (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 37, $this->source); })())) ? (" checked") : (""));
            echo ">
      </span>
    ";
        } elseif ((        // line 39
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 39, $this->source); })()) == "select")) {
            // line 40
            echo "      <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" class=\"w-75";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 40, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 40, $this->source); })())) ? (" custom field-error") : (" custom"))) : (""));
            echo "\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["select_values"]) || array_key_exists("select_values", $context) ? $context["select_values"] : (function () { throw new RuntimeError('Variable "select_values" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 42
                echo "          ";
                if (($context["val"] === true)) {
                    $context["val"] = _gettext("Yes");
                } elseif (($context["val"] === false)) {
                    $context["val"] = _gettext("No");
                }
                // line 43
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                ((twig_test_empty($context["val"])) ? (print (twig_escape_filter($this->env, ((" label=\"" . _gettext("None")) . "\""), "html", null, true))) : (print ("")));
                echo ((((($context["key"] === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })())) || (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })()) === true) && ($context["key"] === 1))) || (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })()) === false) && ($context["key"] === 0)))) ? (" selected") : (""));
                echo ((twig_in_filter($context["key"], (isset($context["select_values_disabled"]) || array_key_exists("select_values_disabled", $context) ? $context["select_values_disabled"] : (function () { throw new RuntimeError('Variable "select_values_disabled" does not exist.', 43, $this->source); })()))) ? (" disabled") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </select>
    ";
        } elseif ((        // line 46
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 46, $this->source); })()) == "list")) {
            // line 47
            echo "      <textarea cols=\"35\" rows=\"5\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\" class=\"";
            echo (( !(isset($context["value_is_default"]) || array_key_exists("value_is_default", $context) ? $context["value_is_default"] : (function () { throw new RuntimeError('Variable "value_is_default" does not exist.', 47, $this->source); })())) ? ((((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 47, $this->source); })())) ? ("custom field-error") : ("custom"))) : (""));
            echo "\">";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "wrapper_params")) {
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) ? ("
") : (""));
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "</textarea>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if (((isset($context["is_setup"]) || array_key_exists("is_setup", $context) ? $context["is_setup"] : (function () { throw new RuntimeError('Variable "is_setup" does not exist.', 52, $this->source); })()) && (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "      <a class=\"userprefs-comment\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\">";
            echo $this->env->getFunction('get_image')->getCallable()("b_tblops", _gettext("Comment"));
            echo "</a>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "      <a class=\"set-value hide\" href=\"#";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "=";
            echo twig_escape_filter($this->env, (isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Set value: %s"), (isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 57, $this->source); })())), "html", null, true);
            echo "\">";
            // line 58
            echo $this->env->getFunction('get_image')->getCallable()("b_edit", twig_sprintf(_gettext("Set value: %s"), (isset($context["set_value"]) || array_key_exists("set_value", $context) ? $context["set_value"] : (function () { throw new RuntimeError('Variable "set_value" does not exist.', 58, $this->source); })())));
            // line 59
            echo "</a>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ((isset($context["show_restore_default"]) || array_key_exists("show_restore_default", $context) ? $context["show_restore_default"] : (function () { throw new RuntimeError('Variable "show_restore_default" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "      <a class=\"restore-default hide\" href=\"#";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "\" title=\"";
echo _gettext("Restore default value");
            echo "\">";
            // line 64
            echo $this->env->getFunction('get_image')->getCallable()("s_reload", _gettext("Restore default value"));
            // line 65
            echo "</a>
    ";
        }
        // line 67
        echo "
    ";
        // line 69
        echo "    ";
        if ((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "      <dl class=\"inline_errors\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 72
                echo "          <dd>";
                echo $context["error"];
                echo "</dd>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </dl>
    ";
        }
        // line 76
        echo "  </td>

  ";
        // line 78
        if (((isset($context["is_setup"]) || array_key_exists("is_setup", $context) ? $context["is_setup"] : (function () { throw new RuntimeError('Variable "is_setup" does not exist.', 78, $this->source); })()) &&  !(null === (isset($context["allows_customization"]) || array_key_exists("allows_customization", $context) ? $context["allows_customization"] : (function () { throw new RuntimeError('Variable "allows_customization" does not exist.', 78, $this->source); })())))) {
            // line 79
            echo "    <td class=\"userprefs-allow\" title=\"";
echo _gettext("Allow users to customize this value");
            echo "\">
      <input type=\"checkbox\" name=\"";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 80, $this->source); })()), "html", null, true);
            echo "-userprefs-allow\"";
            echo (((isset($context["allows_customization"]) || array_key_exists("allows_customization", $context) ? $context["allows_customization"] : (function () { throw new RuntimeError('Variable "allows_customization" does not exist.', 80, $this->source); })())) ? (" checked") : (""));
            echo " aria-label=\"";
echo _gettext("Allow users to customize this value");
            echo "\">
    </td>
  ";
        } elseif (        // line 82
(isset($context["is_setup"]) || array_key_exists("is_setup", $context) ? $context["is_setup"] : (function () { throw new RuntimeError('Variable "is_setup" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "    <td>&nbsp;</td>
  ";
        }
        // line 85
        echo "</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "config/form_display/input.twig";
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
        return array (  364 => 85,  360 => 83,  358 => 82,  349 => 80,  344 => 79,  342 => 78,  338 => 76,  334 => 74,  325 => 72,  321 => 71,  318 => 70,  315 => 69,  312 => 67,  308 => 65,  306 => 64,  300 => 63,  298 => 62,  295 => 61,  291 => 59,  289 => 58,  281 => 57,  279 => 56,  276 => 55,  268 => 53,  266 => 52,  263 => 51,  259 => 49,  225 => 48,  217 => 47,  215 => 46,  212 => 45,  197 => 43,  190 => 42,  186 => 41,  177 => 40,  175 => 39,  166 => 37,  161 => 36,  159 => 35,  148 => 34,  146 => 33,  135 => 32,  133 => 31,  131 => 30,  120 => 29,  118 => 28,  107 => 27,  105 => 26,  100 => 23,  94 => 21,  92 => 20,  89 => 19,  85 => 17,  83 => 16,  78 => 15,  76 => 14,  73 => 13,  65 => 10,  62 => 9,  60 => 8,  53 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if option_is_disabled %}
  {% set tr_class = tr_class ~ ' disabled-field' %}
{% endif %}
<tr{% if tr_class %} class=\"{{ tr_class }}\"{% endif %}>
  <th>
    <label for=\"{{ path }}\">{{ name|raw }}</label>

    {% if doc is not empty %}
      <span class=\"doc\">
        <a href=\"{{ doc }}\" target=\"documentation\">{{- get_image('b_help', 'Documentation'|trans) -}}</a>
      </span>
    {% endif %}

    {% if option_is_disabled %}
      <span class=\"disabled-notice\" title=\"{% trans 'This setting is disabled, it will not be applied to your configuration.' %}\">
        {% trans 'Disabled' %}
      </span>
    {% endif %}

    {% if description is not empty %}
      <small>{{ description|raw }}</small>
    {% endif %}
  </th>

  <td>
    {% if type == 'text' %}
      <input type=\"text\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"w-75{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\">
    {% elseif type == 'password' %}
      <input type=\"password\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"w-75{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\" spellcheck=\"false\">
    {% elseif type == 'short_text' and value is not iterable %}
      {# https://github.com/phpmyadmin/phpmyadmin/issues/11505 #}
      <input type=\"text\" size=\"25\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"{{ not value_is_default ? (has_errors ? 'custom field-error' : 'custom') }}\">
    {% elseif type == 'number_text' %}
      <input type=\"number\" name=\"{{ path }}\" id=\"{{ path }}\" value=\"{{ value }}\" class=\"{{ not value_is_default ? (has_errors ? 'custom field-error' : 'custom') }}\">
    {% elseif type == 'checkbox' %}
      <span class=\"checkbox{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\">
        <input type=\"checkbox\" name=\"{{ path }}\" id=\"{{ path }}\"{{ value ? ' checked' }}>
      </span>
    {% elseif type == 'select' %}
      <select name=\"{{ path }}\" id=\"{{ path }}\" class=\"w-75{{ not value_is_default ? (has_errors ? ' custom field-error' : ' custom') }}\">
        {% for key, val in select_values %}
          {% if val is same as(true) %}{% set val = 'Yes'|trans %}{% elseif val is same as(false) %}{% set val = 'No'|trans %}{% endif %}
          <option value=\"{{ key }}\"{{ val is empty ? ' label=\"' ~ 'None'|trans ~ '\"' }}{{ key is same as(value) or (value is same as(true) and key is same as(1)) or (value is same as(false) and key is same as(0)) ? ' selected' }}{{ key in select_values_disabled ? ' disabled' }}>{{ val }}</option>
        {% endfor %}
      </select>
    {% elseif type == 'list' %}
      <textarea cols=\"35\" rows=\"5\" name=\"{{ path }}\" id=\"{{ path }}\" class=\"{{ not value_is_default ? (has_errors ? 'custom field-error' : 'custom') }}\">
        {%- for key, val in value %}{% if key != 'wrapper_params' %}{{ val }}{{ not loop.last ? \"\\n\" }}{% endif %}{% endfor -%}
      </textarea>
    {% endif %}

    {% if is_setup and comment %}
      <a class=\"userprefs-comment\" title=\"{{ comment }}\">{{ get_image('b_tblops', 'Comment'|trans) }}</a>
    {% endif %}

    {% if set_value %}
      <a class=\"set-value hide\" href=\"#{{ path }}={{ set_value }}\" title=\"{{ 'Set value: %s'|trans|format(set_value) }}\">
        {{- get_image('b_edit', 'Set value: %s'|trans|format(set_value)) -}}
      </a>
    {% endif %}

    {% if show_restore_default %}
      <a class=\"restore-default hide\" href=\"#{{ path }}\" title=\"{% trans 'Restore default value' %}\">
        {{- get_image('s_reload', 'Restore default value'|trans) -}}
      </a>
    {% endif %}

    {# This must match with window.Config.displayErrors() in scripts/config.js. #}
    {% if has_errors %}
      <dl class=\"inline_errors\">
        {% for error in errors %}
          <dd>{{ error|raw }}</dd>
        {% endfor %}
      </dl>
    {% endif %}
  </td>

  {% if is_setup and allows_customization is not null %}
    <td class=\"userprefs-allow\" title=\"{% trans 'Allow users to customize this value' %}\">
      <input type=\"checkbox\" name=\"{{ path }}-userprefs-allow\"{{ allows_customization ? ' checked' }} aria-label=\"{% trans 'Allow users to customize this value' %}\">
    </td>
  {% elseif is_setup %}
    <td>&nbsp;</td>
  {% endif %}
</tr>
", "config/form_display/input.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/input.twig");
    }
}
