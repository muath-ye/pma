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

/* import.twig */
class __TwigTemplate_a2c4548718300d04bd966d9d62882bca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        echo $this->env->getFunction('get_image')->getCallable()("b_import", _gettext("Import"));
        echo "
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "  </h2>

  ";
        // line 7
        echo (isset($context["page_settings_error_html"]) || array_key_exists("page_settings_error_html", $context) ? $context["page_settings_error_html"] : (function () { throw new RuntimeError('Variable "page_settings_error_html" does not exist.', 7, $this->source); })());
        echo "
  ";
        // line 8
        echo (isset($context["page_settings_html"]) || array_key_exists("page_settings_html", $context) ? $context["page_settings_html"] : (function () { throw new RuntimeError('Variable "page_settings_html" does not exist.', 8, $this->source); })());
        echo "

  <iframe id=\"import_upload_iframe\" name=\"import_upload_iframe\" width=\"1\" height=\"1\" class=\"hide\"></iframe>
  <div id=\"import_form_status\" class=\"hide\"></div>

  <div class=\"d-none\" id=\"upload_progress_info\" data-upload-id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["upload_id"]) || array_key_exists("upload_id", $context) ? $context["upload_id"] : (function () { throw new RuntimeError('Variable "upload_id" does not exist.', 13, $this->source); })()), "html_attr");
        echo "\" data-handler=\"";
        echo twig_escape_filter($this->env, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 13, $this->source); })()), "html_attr");
        echo "\"></div>

  <div id=\"importmain\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" alt=\"ajax clock\" class=\"hide\">

    <form id=\"import_file_form\" action=\"";
        // line 18
        echo $this->env->getFunction('url')->getCallable()("/import");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" name=\"import\" class=\"ajax\"";
        // line 19
        if (((isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 19, $this->source); })()) != "PhpMyAdmin\\Plugins\\Import\\Upload\\UploadNoplugin")) {
            echo " target=\"import_upload_iframe\"";
        }
        echo ">
      ";
        // line 20
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 20, $this->source); })()));
        echo "

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 23
echo _gettext("File to import:");
        echo "</div>
        <div class=\"card-body\">
          ";
        // line 26
        echo "          ";
        if ( !twig_test_empty((isset($context["compressions"]) || array_key_exists("compressions", $context) ? $context["compressions"] : (function () { throw new RuntimeError('Variable "compressions" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "            <p class=\"card-text\">
              ";
            // line 28
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("File may be compressed (%s) or uncompressed."), twig_join_filter((isset($context["compressions"]) || array_key_exists("compressions", $context) ? $context["compressions"] : (function () { throw new RuntimeError('Variable "compressions" does not exist.', 28, $this->source); })()), ", ")), "html", null, true);
            echo "<br>
              ";
            // line 29
echo _gettext("A compressed file's name must end in <strong>.[format].[compression]</strong>. Example: <strong>.sql.zip</strong>");
            // line 30
            echo "            </p>
          ";
        }
        // line 32
        echo "
          ";
        // line 33
        if (((isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 33, $this->source); })()) &&  !twig_test_empty((isset($context["upload_dir"]) || array_key_exists("upload_dir", $context) ? $context["upload_dir"] : (function () { throw new RuntimeError('Variable "upload_dir" does not exist.', 33, $this->source); })())))) {
            // line 34
            echo "            ";
            $context["use_local_file_import"] = ( !twig_test_empty((isset($context["timeout_passed_global"]) || array_key_exists("timeout_passed_global", $context) ? $context["timeout_passed_global"] : (function () { throw new RuntimeError('Variable "timeout_passed_global" does not exist.', 34, $this->source); })())) &&  !twig_test_empty((isset($context["local_import_file"]) || array_key_exists("local_import_file", $context) ? $context["local_import_file"] : (function () { throw new RuntimeError('Variable "local_import_file" does not exist.', 34, $this->source); })())));
            // line 35
            echo "            <ul class=\"nav nav-pills mb-3\" id=\"importFileTab\" role=\"tablist\">
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link";
            // line 37
            echo (( !(isset($context["use_local_file_import"]) || array_key_exists("use_local_file_import", $context) ? $context["use_local_file_import"] : (function () { throw new RuntimeError('Variable "use_local_file_import" does not exist.', 37, $this->source); })())) ? (" active") : (""));
            echo "\" id=\"uploadFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#uploadFile\" type=\"button\" role=\"tab\" aria-controls=\"uploadFile\" aria-selected=\"";
            echo (( !(isset($context["use_local_file_import"]) || array_key_exists("use_local_file_import", $context) ? $context["use_local_file_import"] : (function () { throw new RuntimeError('Variable "use_local_file_import" does not exist.', 37, $this->source); })())) ? ("true") : ("false"));
            echo "\">";
echo _gettext("Upload a file");
            echo "</button>
              </li>
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link";
            // line 40
            echo (((isset($context["use_local_file_import"]) || array_key_exists("use_local_file_import", $context) ? $context["use_local_file_import"] : (function () { throw new RuntimeError('Variable "use_local_file_import" does not exist.', 40, $this->source); })())) ? (" active") : (""));
            echo "\" id=\"localFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#localFile\" type=\"button\" role=\"tab\" aria-controls=\"localFile\" aria-selected=\"";
            echo (((isset($context["use_local_file_import"]) || array_key_exists("use_local_file_import", $context) ? $context["use_local_file_import"] : (function () { throw new RuntimeError('Variable "use_local_file_import" does not exist.', 40, $this->source); })())) ? ("true") : ("false"));
            echo "\">";
echo _gettext("Select file to import");
            echo "</button>
              </li>
            </ul>
            <div class=\"tab-content mb-3\" id=\"importFileTabContent\">
              <div class=\"tab-pane fade";
            // line 44
            echo (( !(isset($context["use_local_file_import"]) || array_key_exists("use_local_file_import", $context) ? $context["use_local_file_import"] : (function () { throw new RuntimeError('Variable "use_local_file_import" does not exist.', 44, $this->source); })())) ? (" show active") : (""));
            echo "\" id=\"uploadFile\" role=\"tabpanel\" aria-labelledby=\"uploadFileTab\">
                <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"input_import_file\">";
            // line 46
echo _gettext("Browse your computer:");
            echo " <small>";
            echo twig_escape_filter($this->env, (isset($context["formatted_maximum_upload_size"]) || array_key_exists("formatted_maximum_upload_size", $context) ? $context["formatted_maximum_upload_size"] : (function () { throw new RuntimeError('Variable "formatted_maximum_upload_size" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "</small></label>
                  <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
                </div>
                <div id=\"upload_form_status\" class=\"hide\"></div>
                <div id=\"upload_form_status_info\" class=\"hide\"></div>
                <p class=\"card-text\">";
            // line 51
echo _gettext("You may also drag and drop a file on any page.");
            echo "</p>
              </div>

              <div class=\"tab-pane fade";
            // line 54
            echo (((isset($context["use_local_file_import"]) || array_key_exists("use_local_file_import", $context) ? $context["use_local_file_import"] : (function () { throw new RuntimeError('Variable "use_local_file_import" does not exist.', 54, $this->source); })())) ? (" show active") : (""));
            echo "\" id=\"localFile\" role=\"tabpanel\" aria-labelledby=\"localFileTab\">
                ";
            // line 55
            if (((isset($context["local_files"]) || array_key_exists("local_files", $context) ? $context["local_files"] : (function () { throw new RuntimeError('Variable "local_files" does not exist.', 55, $this->source); })()) === false)) {
                // line 56
                echo "                  ";
                echo $this->env->getFilter('error')->getCallable()(_gettext("The directory you set for upload work cannot be reached."));
                echo "
                ";
            } elseif ( !twig_test_empty(            // line 57
(isset($context["local_files"]) || array_key_exists("local_files", $context) ? $context["local_files"] : (function () { throw new RuntimeError('Variable "local_files" does not exist.', 57, $this->source); })()))) {
                // line 58
                echo "                  <label class=\"form-label\" for=\"select_local_import_file\">";
                echo $this->env->getFilter('sanitize')->getCallable()(twig_sprintf(_gettext("Select from the web server upload directory [strong]%s[/strong]:"), (isset($context["user_upload_dir"]) || array_key_exists("user_upload_dir", $context) ? $context["user_upload_dir"] : (function () { throw new RuntimeError('Variable "user_upload_dir" does not exist.', 58, $this->source); })())));
                echo "</label>
                  <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                    <option value=\"\"></option>
                    ";
                // line 61
                echo (isset($context["local_files"]) || array_key_exists("local_files", $context) ? $context["local_files"] : (function () { throw new RuntimeError('Variable "local_files" does not exist.', 61, $this->source); })());
                echo "
                  </select>
                ";
            } else {
                // line 64
                echo "                  <div class=\"alert alert-info\" role=\"alert\">
                    ";
                // line 65
echo _gettext("There are no files to import!");
                // line 66
                echo "                  </div>
                ";
            }
            // line 68
            echo "              </div>
            </div>
          ";
        } elseif (        // line 70
(isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input_import_file\">";
            // line 72
echo _gettext("Browse your computer:");
            echo " <small>";
            echo twig_escape_filter($this->env, (isset($context["formatted_maximum_upload_size"]) || array_key_exists("formatted_maximum_upload_size", $context) ? $context["formatted_maximum_upload_size"] : (function () { throw new RuntimeError('Variable "formatted_maximum_upload_size" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "</small></label>
              <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
            </div>
            <div id=\"upload_form_status\" class=\"hide\"></div>
            <div id=\"upload_form_status_info\" class=\"hide\"></div>
            <p class=\"card-text\">";
            // line 77
echo _gettext("You may also drag and drop a file on any page.");
            echo "</p>
          ";
        } elseif ( !twig_test_empty(        // line 78
(isset($context["upload_dir"]) || array_key_exists("upload_dir", $context) ? $context["upload_dir"] : (function () { throw new RuntimeError('Variable "upload_dir" does not exist.', 78, $this->source); })()))) {
            // line 79
            echo "            ";
            if (((isset($context["local_files"]) || array_key_exists("local_files", $context) ? $context["local_files"] : (function () { throw new RuntimeError('Variable "local_files" does not exist.', 79, $this->source); })()) === false)) {
                // line 80
                echo "              ";
                echo $this->env->getFilter('error')->getCallable()(_gettext("The directory you set for upload work cannot be reached."));
                echo "
            ";
            } elseif ( !twig_test_empty(            // line 81
(isset($context["local_files"]) || array_key_exists("local_files", $context) ? $context["local_files"] : (function () { throw new RuntimeError('Variable "local_files" does not exist.', 81, $this->source); })()))) {
                // line 82
                echo "              <div class=\"mb-3\">
                <label class=\"form-label\" for=\"select_local_import_file\">";
                // line 83
                echo $this->env->getFilter('sanitize')->getCallable()(twig_sprintf(_gettext("Select from the web server upload directory [strong]%s[/strong]:"), (isset($context["user_upload_dir"]) || array_key_exists("user_upload_dir", $context) ? $context["user_upload_dir"] : (function () { throw new RuntimeError('Variable "user_upload_dir" does not exist.', 83, $this->source); })())));
                echo "</label>
                <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                  <option value=\"\"></option>
                  ";
                // line 86
                echo (isset($context["local_files"]) || array_key_exists("local_files", $context) ? $context["local_files"] : (function () { throw new RuntimeError('Variable "local_files" does not exist.', 86, $this->source); })());
                echo "
                </select>
              </div>
            ";
            } else {
                // line 90
                echo "              <div class=\"alert alert-info\" role=\"alert\">
                ";
                // line 91
echo _gettext("There are no files to import!");
                // line 92
                echo "              </div>
            ";
            }
            // line 94
            echo "          ";
        } else {
            // line 95
            echo "            ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("File uploads are not allowed on this server."));
            echo "
          ";
        }
        // line 97
        echo "
          <label class=\"form-label\" for=\"charset_of_file\">";
        // line 98
echo _gettext("Character set of the file:");
        echo "</label>
          ";
        // line 99
        if ((isset($context["is_encoding_supported"]) || array_key_exists("is_encoding_supported", $context) ? $context["is_encoding_supported"] : (function () { throw new RuntimeError('Variable "is_encoding_supported" does not exist.', 99, $this->source); })())) {
            // line 100
            echo "            <select class=\"form-select\" id=\"charset_of_file\" name=\"charset_of_file\" size=\"1\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["encodings"]) || array_key_exists("encodings", $context) ? $context["encodings"] : (function () { throw new RuntimeError('Variable "encodings" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 102
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                echo "\"";
                if (((twig_test_empty((isset($context["import_charset"]) || array_key_exists("import_charset", $context) ? $context["import_charset"] : (function () { throw new RuntimeError('Variable "import_charset" does not exist.', 102, $this->source); })())) && ($context["charset"] == "utf-8")) || ($context["charset"] == (isset($context["import_charset"]) || array_key_exists("import_charset", $context) ? $context["import_charset"] : (function () { throw new RuntimeError('Variable "import_charset" does not exist.', 102, $this->source); })())))) {
                    echo " selected";
                }
                echo ">";
                // line 103
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                // line 104
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            </select>
          ";
        } else {
            // line 108
            echo "            <select class=\"form-select\" lang=\"en\" dir=\"ltr\" name=\"charset_of_file\" id=\"charset_of_file\">
              <option value=\"\"></option>
              ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 111
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 111), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 111), "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 111) == "utf8")) ? (" selected") : (""));
                echo ">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 112), "html", null, true);
                // line 113
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            </select>
          ";
        }
        // line 117
        echo "        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 121
echo _gettext("Partial import:");
        echo "</div>
        <div class=\"card-body\">
          ";
        // line 123
        if ((array_key_exists("timeout_passed", $context) && (isset($context["timeout_passed"]) || array_key_exists("timeout_passed", $context) ? $context["timeout_passed"] : (function () { throw new RuntimeError('Variable "timeout_passed" does not exist.', 123, $this->source); })()))) {
            // line 124
            echo "            <input type=\"hidden\" name=\"skip\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 124, $this->source); })()), "html", null, true);
            echo "\">
            <div class=\"alert alert-info\" role=\"alert\">
              ";
            // line 126
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Previous import timed out, after resubmitting will continue from position %d."), (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 126, $this->source); })())), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 129
        echo "
          <div class=\"form-check form-switch mb-3\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"allow_interrupt\" value=\"yes\" id=\"checkbox_allow_interrupt\"";
        // line 131
        echo (isset($context["is_allow_interrupt_checked"]) || array_key_exists("is_allow_interrupt_checked", $context) ? $context["is_allow_interrupt_checked"] : (function () { throw new RuntimeError('Variable "is_allow_interrupt_checked" does not exist.', 131, $this->source); })());
        echo " aria-describedby=\"allowInterruptHelp\">
            <label class=\"form-check-label\" for=\"checkbox_allow_interrupt\">
              ";
        // line 133
echo _gettext("Allow the interruption of an import in case the script detects it is close to the PHP timeout limit.");
        // line 134
        echo "            </label>
            <div id=\"allowInterruptHelp\" class=\"form-text\">";
        // line 135
echo _gettext("This might be a good way to import large files, however it can break transactions.");
        echo "</div>
          </div>

          ";
        // line 138
        if ( !(array_key_exists("timeout_passed", $context) && (isset($context["timeout_passed"]) || array_key_exists("timeout_passed", $context) ? $context["timeout_passed"] : (function () { throw new RuntimeError('Variable "timeout_passed" does not exist.', 138, $this->source); })()))) {
            // line 139
            echo "            <label class=\"form-label\" for=\"text_skip_queries\">";
echo _gettext("Skip this number of queries (for SQL) starting from the first one:");
            echo "</label>
            <input class=\"form-control\" type=\"number\" name=\"skip_queries\" value=\"";
            // line 140
            echo (isset($context["skip_queries_default"]) || array_key_exists("skip_queries_default", $context) ? $context["skip_queries_default"] : (function () { throw new RuntimeError('Variable "skip_queries_default" does not exist.', 140, $this->source); })());
            echo "\" id=\"text_skip_queries\" min=\"0\">
          ";
        } else {
            // line 142
            echo "            ";
            // line 143
            echo "            <input type=\"hidden\" name=\"skip_queries\" value=\"";
            echo (isset($context["skip_queries_default"]) || array_key_exists("skip_queries_default", $context) ? $context["skip_queries_default"] : (function () { throw new RuntimeError('Variable "skip_queries_default" does not exist.', 143, $this->source); })());
            echo "\" id=\"text_skip_queries\">
          ";
        }
        // line 145
        echo "        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 149
echo _gettext("Other options");
        echo "</div>
        <div class=\"card-body\">
          <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
        // line 153
        echo (((isset($context["is_foreign_key_check"]) || array_key_exists("is_foreign_key_check", $context) ? $context["is_foreign_key_check"] : (function () { throw new RuntimeError('Variable "is_foreign_key_check" does not exist.', 153, $this->source); })())) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"fk_checks\">";
        // line 154
echo _gettext("Enable foreign key checks");
        echo "</label>
          </div>
        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
        // line 160
echo _gettext("Format");
        echo "</div>
        <div class=\"card-body\">
          <select class=\"form-select\" id=\"plugins\" name=\"format\" aria-label=\"";
        // line 162
echo _gettext("Format");
        echo "\">
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins_choice"]) || array_key_exists("plugins_choice", $context) ? $context["plugins_choice"] : (function () { throw new RuntimeError('Variable "plugins_choice" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 164
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 164)) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 164), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </select>

          <div id=\"import_notification\"></div>
        </div>
      </div>

      <div class=\"card mb-3\" id=\"format_specific_opts\">
        <div class=\"card-header\">";
        // line 173
echo _gettext("Format-specific options:");
        echo "</div>
        <div class=\"card-body\">
          ";
        // line 175
        echo (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 175, $this->source); })());
        echo "
        </div>
      </div>

      ";
        // line 180
        echo "      ";
        if ((isset($context["can_convert_kanji"]) || array_key_exists("can_convert_kanji", $context) ? $context["can_convert_kanji"] : (function () { throw new RuntimeError('Variable "can_convert_kanji" does not exist.', 180, $this->source); })())) {
            // line 181
            echo "        <div class=\"card mb-3\" id=\"kanji_encoding\">
          <div class=\"card-header\">";
            // line 182
echo _gettext("Encoding Conversion:");
            echo "</div>
          <div class=\"card-body\">
            ";
            // line 184
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "import.twig", 184)->display($context);
            // line 185
            echo "          </div>
        </div>
      ";
        }
        // line 188
        echo "
      <div id=\"submit\">
        <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 190
echo _gettext("Import");
        echo "\">
      </div>
    </form>
  </div>
</div>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "import.twig";
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
        return array (  507 => 4,  497 => 190,  493 => 188,  488 => 185,  486 => 184,  481 => 182,  478 => 181,  475 => 180,  468 => 175,  463 => 173,  454 => 166,  441 => 164,  437 => 163,  433 => 162,  428 => 160,  419 => 154,  415 => 153,  408 => 149,  402 => 145,  396 => 143,  394 => 142,  389 => 140,  384 => 139,  382 => 138,  376 => 135,  373 => 134,  371 => 133,  366 => 131,  362 => 129,  356 => 126,  350 => 124,  348 => 123,  343 => 121,  337 => 117,  333 => 115,  326 => 113,  324 => 112,  316 => 111,  312 => 110,  308 => 108,  304 => 106,  297 => 104,  295 => 103,  287 => 102,  283 => 101,  280 => 100,  278 => 99,  274 => 98,  271 => 97,  265 => 95,  262 => 94,  258 => 92,  256 => 91,  253 => 90,  246 => 86,  240 => 83,  237 => 82,  235 => 81,  230 => 80,  227 => 79,  225 => 78,  221 => 77,  211 => 72,  208 => 71,  206 => 70,  202 => 68,  198 => 66,  196 => 65,  193 => 64,  187 => 61,  180 => 58,  178 => 57,  173 => 56,  171 => 55,  167 => 54,  161 => 51,  151 => 46,  146 => 44,  135 => 40,  125 => 37,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  109 => 30,  107 => 29,  103 => 28,  100 => 27,  97 => 26,  92 => 23,  86 => 20,  80 => 19,  77 => 18,  72 => 16,  64 => 13,  56 => 8,  52 => 7,  48 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h2 class=\"my-3\">
    {{ get_image('b_import', 'Import'|trans) }}
    {% block title %}{% endblock %}
  </h2>

  {{ page_settings_error_html|raw }}
  {{ page_settings_html|raw }}

  <iframe id=\"import_upload_iframe\" name=\"import_upload_iframe\" width=\"1\" height=\"1\" class=\"hide\"></iframe>
  <div id=\"import_form_status\" class=\"hide\"></div>

  <div class=\"d-none\" id=\"upload_progress_info\" data-upload-id=\"{{ upload_id|e('html_attr') }}\" data-handler=\"{{ handler|e('html_attr') }}\"></div>

  <div id=\"importmain\">
    <img src=\"{{ image('ajax_clock_small.gif') }}\" width=\"16\" height=\"16\" alt=\"ajax clock\" class=\"hide\">

    <form id=\"import_file_form\" action=\"{{ url('/import') }}\" method=\"post\" enctype=\"multipart/form-data\" name=\"import\" class=\"ajax\"
      {%- if handler != 'PhpMyAdmin\\\\Plugins\\\\Import\\\\Upload\\\\UploadNoplugin' %} target=\"import_upload_iframe\"{% endif %}>
      {{ get_hidden_inputs(hidden_inputs) }}

      <div class=\"card mb-3\">
        <div class=\"card-header\">{% trans 'File to import:' %}</div>
        <div class=\"card-body\">
          {# We don't have show anything about compression, when no supported #}
          {% if compressions is not empty %}
            <p class=\"card-text\">
              {{ 'File may be compressed (%s) or uncompressed.'|trans|format(compressions|join(', ')) }}<br>
              {% trans 'A compressed file\\'s name must end in <strong>.[format].[compression]</strong>. Example: <strong>.sql.zip</strong>' %}
            </p>
          {% endif %}

          {% if is_upload and upload_dir is not empty %}
            {% set use_local_file_import = timeout_passed_global is not empty and local_import_file is not empty %}
            <ul class=\"nav nav-pills mb-3\" id=\"importFileTab\" role=\"tablist\">
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link{{ not use_local_file_import ? ' active' }}\" id=\"uploadFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#uploadFile\" type=\"button\" role=\"tab\" aria-controls=\"uploadFile\" aria-selected=\"{{ not use_local_file_import ? 'true' : 'false' }}\">{% trans 'Upload a file' %}</button>
              </li>
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link{{ use_local_file_import ? ' active' }}\" id=\"localFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#localFile\" type=\"button\" role=\"tab\" aria-controls=\"localFile\" aria-selected=\"{{ use_local_file_import ? 'true' : 'false' }}\">{% trans 'Select file to import' %}</button>
              </li>
            </ul>
            <div class=\"tab-content mb-3\" id=\"importFileTabContent\">
              <div class=\"tab-pane fade{{ not use_local_file_import ? ' show active' }}\" id=\"uploadFile\" role=\"tabpanel\" aria-labelledby=\"uploadFileTab\">
                <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"input_import_file\">{% trans 'Browse your computer:' %} <small>{{ formatted_maximum_upload_size }}</small></label>
                  <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
                </div>
                <div id=\"upload_form_status\" class=\"hide\"></div>
                <div id=\"upload_form_status_info\" class=\"hide\"></div>
                <p class=\"card-text\">{% trans 'You may also drag and drop a file on any page.' %}</p>
              </div>

              <div class=\"tab-pane fade{{ use_local_file_import ? ' show active' }}\" id=\"localFile\" role=\"tabpanel\" aria-labelledby=\"localFileTab\">
                {% if local_files is same as(false) %}
                  {{ 'The directory you set for upload work cannot be reached.'|trans|error }}
                {% elseif local_files is not empty %}
                  <label class=\"form-label\" for=\"select_local_import_file\">{{ 'Select from the web server upload directory [strong]%s[/strong]:'|trans|format(user_upload_dir)|sanitize }}</label>
                  <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                    <option value=\"\"></option>
                    {{ local_files|raw }}
                  </select>
                {% else %}
                  <div class=\"alert alert-info\" role=\"alert\">
                    {% trans 'There are no files to import!' %}
                  </div>
                {% endif %}
              </div>
            </div>
          {% elseif is_upload %}
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input_import_file\">{% trans 'Browse your computer:' %} <small>{{ formatted_maximum_upload_size }}</small></label>
              <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
            </div>
            <div id=\"upload_form_status\" class=\"hide\"></div>
            <div id=\"upload_form_status_info\" class=\"hide\"></div>
            <p class=\"card-text\">{% trans 'You may also drag and drop a file on any page.' %}</p>
          {% elseif upload_dir is not empty %}
            {% if local_files is same as(false) %}
              {{ 'The directory you set for upload work cannot be reached.'|trans|error }}
            {% elseif local_files is not empty %}
              <div class=\"mb-3\">
                <label class=\"form-label\" for=\"select_local_import_file\">{{ 'Select from the web server upload directory [strong]%s[/strong]:'|trans|format(user_upload_dir)|sanitize }}</label>
                <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                  <option value=\"\"></option>
                  {{ local_files|raw }}
                </select>
              </div>
            {% else %}
              <div class=\"alert alert-info\" role=\"alert\">
                {% trans 'There are no files to import!' %}
              </div>
            {% endif %}
          {% else %}
            {{ 'File uploads are not allowed on this server.'|trans|notice }}
          {% endif %}

          <label class=\"form-label\" for=\"charset_of_file\">{% trans 'Character set of the file:' %}</label>
          {% if is_encoding_supported %}
            <select class=\"form-select\" id=\"charset_of_file\" name=\"charset_of_file\" size=\"1\">
              {% for charset in encodings %}
                <option value=\"{{ charset }}\"{% if (import_charset is empty and charset == 'utf-8') or charset == import_charset %} selected{% endif %}>
                  {{- charset -}}
                </option>
              {% endfor %}
            </select>
          {% else %}
            <select class=\"form-select\" lang=\"en\" dir=\"ltr\" name=\"charset_of_file\" id=\"charset_of_file\">
              <option value=\"\"></option>
              {% for charset in charsets %}
                <option value=\"{{ charset.getName() }}\" title=\"{{ charset.getDescription() }}\"{{ charset.getName() == 'utf8' ? ' selected' }}>
                  {{- charset.getName() -}}
                </option>
              {% endfor %}
            </select>
          {% endif %}
        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">{% trans 'Partial import:' %}</div>
        <div class=\"card-body\">
          {% if timeout_passed is defined and timeout_passed %}
            <input type=\"hidden\" name=\"skip\" value=\"{{ offset }}\">
            <div class=\"alert alert-info\" role=\"alert\">
              {{ 'Previous import timed out, after resubmitting will continue from position %d.'|trans|format(offset) }}
            </div>
          {% endif %}

          <div class=\"form-check form-switch mb-3\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"allow_interrupt\" value=\"yes\" id=\"checkbox_allow_interrupt\"{{ is_allow_interrupt_checked|raw }} aria-describedby=\"allowInterruptHelp\">
            <label class=\"form-check-label\" for=\"checkbox_allow_interrupt\">
              {% trans 'Allow the interruption of an import in case the script detects it is close to the PHP timeout limit.' %}
            </label>
            <div id=\"allowInterruptHelp\" class=\"form-text\">{% trans 'This might be a good way to import large files, however it can break transactions.' %}</div>
          </div>

          {% if not (timeout_passed is defined and timeout_passed) %}
            <label class=\"form-label\" for=\"text_skip_queries\">{% trans 'Skip this number of queries (for SQL) starting from the first one:' %}</label>
            <input class=\"form-control\" type=\"number\" name=\"skip_queries\" value=\"{{ skip_queries_default|raw }}\" id=\"text_skip_queries\" min=\"0\">
          {% else %}
            {# If timeout has passed, do not show the Skip dialog to avoid the risk of someone entering a value here that would interfere with \"skip\" #}
            <input type=\"hidden\" name=\"skip_queries\" value=\"{{ skip_queries_default|raw }}\" id=\"text_skip_queries\">
          {% endif %}
        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">{% trans 'Other options' %}</div>
        <div class=\"card-body\">
          <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"{{ is_foreign_key_check ? ' checked' }}>
            <label class=\"form-check-label\" for=\"fk_checks\">{% trans 'Enable foreign key checks' %}</label>
          </div>
        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">{% trans 'Format' %}</div>
        <div class=\"card-body\">
          <select class=\"form-select\" id=\"plugins\" name=\"format\" aria-label=\"{% trans 'Format' %}\">
            {% for option in plugins_choice %}
              <option value=\"{{ option.name }}\"{{ option.is_selected ? ' selected' }}>{{ option.text }}</option>
            {% endfor %}
          </select>

          <div id=\"import_notification\"></div>
        </div>
      </div>

      <div class=\"card mb-3\" id=\"format_specific_opts\">
        <div class=\"card-header\">{% trans 'Format-specific options:' %}</div>
        <div class=\"card-body\">
          {{ options|raw }}
        </div>
      </div>

      {# Japanese encoding setting #}
      {% if can_convert_kanji %}
        <div class=\"card mb-3\" id=\"kanji_encoding\">
          <div class=\"card-header\">{% trans 'Encoding Conversion:' %}</div>
          <div class=\"card-body\">
            {% include 'encoding/kanji_encoding_form.twig' %}
          </div>
        </div>
      {% endif %}

      <div id=\"submit\">
        <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Import' %}\">
      </div>
    </form>
  </div>
</div>
", "import.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/import.twig");
    }
}
