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

/* admin/view/template/common/column_left.twig */
class __TwigTemplate_38013bd8e530b8c265df97296df350ff extends Template
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
        yield "<nav id=\"column-left\">
\t<div id=\"navigation\"><i class=\"fa-solid fa-bars\"></i> ";
        // line 2
        yield ($context["text_navigation"] ?? null);
        yield "</div>
\t<ul id=\"menu\">
\t\t";
        // line 4
        $context["i"] = 0;
        // line 5
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            yield "\t\t\t<li id=\"menu-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "code", [], "any", false, false, false, 6);
            yield "\">
        ";
            // line 7
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) {
                // line 8
                yield "\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 8);
                yield "\"><i class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 8);
                yield "\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 8);
                yield "</a>
\t\t\t\t";
            } else {
                // line 10
                yield "\t\t\t\t\t<a href=\"#collapse-";
                yield ($context["i"] ?? null);
                yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 10);
                yield "\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 10);
                yield "</a>
\t\t\t\t";
            }
            // line 12
            yield "\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 12)) {
                // line 13
                yield "\t\t\t\t\t<ul id=\"collapse-";
                yield ($context["i"] ?? null);
                yield "\" class=\"collapse\">
\t\t\t\t\t\t";
                // line 14
                $context["j"] = 0;
                // line 15
                yield "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 16
                    yield "\t\t\t\t\t\t\t<li>
                ";
                    // line 17
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 17)) {
                        // line 18
                        yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 18);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 18);
                        yield "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 20
                        yield "\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 20);
                        yield "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 22
                    yield "\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 22)) {
                        // line 23
                        yield "\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" class=\"collapse\">
                    ";
                        // line 24
                        $context["k"] = 0;
                        // line 25
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 26
                            yield "\t\t\t\t\t\t\t\t\t\t\t<li>
                        ";
                            // line 27
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 27)) {
                                // line 28
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 28);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 28);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 30
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 30);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 32
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 32)) {
                                // line 33
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 34
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 34));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 35
                                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 35);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 35);
                                    yield "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['children_3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 37
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 39
                            yield "                      </li>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 40
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 41
                            yield "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['children_2'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                    }
                    // line 44
                    yield "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    // line 45
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 46
                    yield "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['children_1'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 49
            yield "\t\t\t</li>
\t\t\t";
            // line 50
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 51
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "\t</ul>
\t";
        // line 53
        if (($context["statistics_status"] ?? null)) {
            // line 54
            yield "\t\t<div id=\"stats\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 57
            yield ($context["text_complete_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["complete_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 59
            yield ($context["complete_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["complete_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["complete_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 63
            yield ($context["text_processing_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["processing_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 65
            yield ($context["processing_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["processing_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["processing_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 69
            yield ($context["text_other_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["other_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 71
            yield ($context["other_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["other_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["other_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 77
        yield "</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/column_left.twig";
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
        return array (  302 => 77,  289 => 71,  282 => 69,  271 => 65,  264 => 63,  253 => 59,  246 => 57,  241 => 54,  239 => 53,  236 => 52,  230 => 51,  228 => 50,  225 => 49,  221 => 47,  215 => 46,  213 => 45,  210 => 44,  206 => 42,  200 => 41,  198 => 40,  195 => 39,  191 => 37,  180 => 35,  176 => 34,  167 => 33,  164 => 32,  152 => 30,  144 => 28,  142 => 27,  139 => 26,  134 => 25,  132 => 24,  125 => 23,  122 => 22,  112 => 20,  104 => 18,  102 => 17,  99 => 16,  94 => 15,  92 => 14,  87 => 13,  84 => 12,  74 => 10,  64 => 8,  62 => 7,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav id=\"column-left\">
\t<div id=\"navigation\"><i class=\"fa-solid fa-bars\"></i> {{ text_navigation }}</div>
\t<ul id=\"menu\">
\t\t{% set i = 0 %}
\t\t{% for menu in menus %}
\t\t\t<li id=\"menu-{{ menu.code }}\">
        {% if menu.href %}
\t\t\t\t\t<a href=\"{{ menu.href }}\"><i class=\"{{ menu.icon }}\"></i> {{ menu.name }}</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"#collapse-{{ i }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"{{ menu.icon }}\"></i> {{ menu.name }}</a>
\t\t\t\t{% endif %}
\t\t\t\t{% if menu.children %}
\t\t\t\t\t<ul id=\"collapse-{{ i }}\" class=\"collapse\">
\t\t\t\t\t\t{% set j = 0 %}
\t\t\t\t\t\t{% for children_1 in menu.children %}
\t\t\t\t\t\t\t<li>
                {% if children_1.href %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ children_1.href }}\">{{ children_1.name }}</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"#collapse-{{ i }}-{{ j }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">{{ children_1.name }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if children_1.children %}
\t\t\t\t\t\t\t\t\t<ul id=\"collapse-{{ i }}-{{ j }}\" class=\"collapse\">
                    {% set k = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for children_2 in children_1.children %}
\t\t\t\t\t\t\t\t\t\t\t<li>
                        {% if children_2.href %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ children_2.href }}\">{{ children_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-{{ i }}-{{ j }}-{{ k }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">{{ children_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if children_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-{{ i }}-{{ j }}-{{ k }}\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for children_3 in children_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ children_3.href }}\">{{ children_3.name }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
                      </li>
\t\t\t\t\t\t\t\t\t\t\t{% set k = k + 1 %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% set j = j + 1 %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t\t{% set i = i + 1 %}
\t\t{% endfor %}
\t</ul>
\t{% if statistics_status %}
\t\t<div id=\"stats\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_complete_status }} <span class=\"float-end\">{{ complete_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"{{ complete_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ complete_status }}%\"><span class=\"sr-only\">{{ complete_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_processing_status }} <span class=\"float-end\">{{ processing_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"{{ processing_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ processing_status }}%\"><span class=\"sr-only\">{{ processing_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_other_status }} <span class=\"float-end\">{{ other_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"{{ other_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ other_status }}%\"><span class=\"sr-only\">{{ other_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t{% endif %}
</nav>
", "admin/view/template/common/column_left.twig", "/var/www/html/admin/view/template/common/column_left.twig");
    }
}
