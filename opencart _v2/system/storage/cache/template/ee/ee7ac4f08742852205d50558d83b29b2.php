<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/view/template/common/security_list.twig */
class __TwigTemplate_703ab5f455450074c02a7e6af3d9ccf8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">

        ";
        // line 10
        if (($context["install"] ?? null)) {
            // line 11
            yield "          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> ";
            // line 12
            yield ($context["text_install"] ?? null);
            yield "</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 15
            yield ($context["text_install_description"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 17
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 18
            yield ($context["install"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 21
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 27
        yield "
        ";
        // line 28
        if (($context["storage"] ?? null)) {
            // line 29
            yield "          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> ";
            // line 30
            yield ($context["text_storage"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-storage\">
                  <p>";
            // line 34
            yield ($context["text_storage_description"] ?? null);
            yield "</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 36
            yield ($context["entry_path_current"] ?? null);
            yield "</label>
                    <input type=\"text\" value=\"";
            // line 37
            yield ($context["storage"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 40
            yield ($context["entry_path_new"] ?? null);
            yield "</label>
                    <div class=\"input-group\">
                      <select name=\"path\" id=\"input-path\" class=\"form-select\">
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["paths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 44
                yield "                          <option value=\"";
                yield $context["path"];
                yield "\">";
                yield $context["path"];
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['path'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                      </select>
                      <input type=\"text\" name=\"name\" value=\"storage\" placeholder=\"";
            // line 47
            yield ($context["text_path"] ?? null);
            yield "\" id=\"input-storage\" class=\"form-control w-50\"/>
                    </div>
                    <div class=\"form-text\">";
            // line 49
            yield ($context["help_storage"] ?? null);
            yield "</div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-storage\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> ";
            // line 52
            yield ($context["button_move"] ?? null);
            yield "</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        ";
        }
        // line 59
        yield "
        ";
        // line 60
        if (($context["storage_delete"] ?? null)) {
            // line 61
            yield "          <div id=\"security-storage-delete\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> ";
            // line 62
            yield ($context["text_storage_delete"] ?? null);
            yield "</button></h5>
            <div id=\"accordion-storage-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 65
            yield ($context["text_storage_description_delete"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 67
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 68
            yield ($context["storage_delete"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"storage\" id=\"button-storage-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 71
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 77
        yield "
        ";
        // line 78
        if (($context["admin"] ?? null)) {
            // line 79
            yield "          <div id=\"security-admin\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> ";
            // line 80
            yield ($context["text_admin"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-admin\">
                  <p>";
            // line 84
            yield ($context["text_admin_description"] ?? null);
            yield "</p>
                  <div class=\"mb-3\">
                    <div class=\"input-group\">
                      <div class=\"input-group-text\">";
            // line 87
            yield ($context["text_path"] ?? null);
            yield "</div>
                      <input type=\"text\" name=\"name\" value=\"admin\" placeholder=\"";
            // line 88
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-admin\" class=\"form-control is-invalid\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> ";
            // line 92
            yield ($context["button_move"] ?? null);
            yield "</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        ";
        }
        // line 99
        yield "
        ";
        // line 100
        if (($context["admin_delete"] ?? null)) {
            // line 101
            yield "          <div id=\"security-admin-delete\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> ";
            // line 102
            yield ($context["text_admin_delete"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-admin-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 105
            yield ($context["text_admin_description_delete"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 107
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 108
            yield ($context["admin_delete"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"admin\" id=\"button-admin-delete\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i> ";
            // line 111
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 117
        yield "
      </div>
    </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/security_list.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  284 => 117,  275 => 111,  269 => 108,  265 => 107,  260 => 105,  254 => 102,  251 => 101,  249 => 100,  246 => 99,  236 => 92,  229 => 88,  225 => 87,  219 => 84,  212 => 80,  209 => 79,  207 => 78,  204 => 77,  195 => 71,  189 => 68,  185 => 67,  180 => 65,  174 => 62,  171 => 61,  169 => 60,  166 => 59,  156 => 52,  150 => 49,  145 => 47,  142 => 46,  131 => 44,  127 => 43,  121 => 40,  115 => 37,  111 => 36,  106 => 34,  99 => 30,  96 => 29,  94 => 28,  91 => 27,  82 => 21,  76 => 18,  72 => 17,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> {{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">

        {% if install %}
          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> {{ text_install }}</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>{{ text_install_description }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ install }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

        {% if storage %}
          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> {{ text_storage }}</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-storage\">
                  <p>{{ text_storage_description }}</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">{{ entry_path_current }}</label>
                    <input type=\"text\" value=\"{{ storage }}\" class=\"form-control is-invalid\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">{{ entry_path_new }}</label>
                    <div class=\"input-group\">
                      <select name=\"path\" id=\"input-path\" class=\"form-select\">
                        {% for path in paths %}
                          <option value=\"{{ path }}\">{{ path }}</option>
                        {% endfor %}
                      </select>
                      <input type=\"text\" name=\"name\" value=\"storage\" placeholder=\"{{ text_path }}\" id=\"input-storage\" class=\"form-control w-50\"/>
                    </div>
                    <div class=\"form-text\">{{ help_storage }}</div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-storage\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> {{ button_move }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        {% endif %}

        {% if storage_delete %}
          <div id=\"security-storage-delete\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> {{ text_storage_delete }}</button></h5>
            <div id=\"accordion-storage-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>{{ text_storage_description_delete }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ storage_delete }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"storage\" id=\"button-storage-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

        {% if admin %}
          <div id=\"security-admin\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-folder me-1\"></i> {{ text_admin }}</button></h2>
            <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-admin\">
                  <p>{{ text_admin_description }}</p>
                  <div class=\"mb-3\">
                    <div class=\"input-group\">
                      <div class=\"input-group-text\">{{ text_path }}</div>
                      <input type=\"text\" name=\"name\" value=\"admin\" placeholder=\"{{ entry_name }}\" id=\"input-admin\" class=\"form-control is-invalid\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> {{ button_move }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        {% endif %}

        {% if admin_delete %}
          <div id=\"security-admin-delete\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin-delete\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-trash-can me-1\"></i> {{ text_admin_delete }}</button></h2>
            <div id=\"accordion-admin-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>{{ text_admin_description_delete }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ admin_delete }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"admin\" id=\"button-admin-delete\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

      </div>
    </div>
  </div>
</div>", "admin/view/template/common/security_list.twig", "/var/www/html/admin/view/template/common/security_list.twig");
    }
}
