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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_8b6f4d8d1331b9d533d6fd0a09115f94 extends Template
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
        yield "<div class=\"product-thumb\">
  <div class=\"image\"><a href=\"";
        // line 2
        yield ($context["href"] ?? null);
        yield "\"><img src=\"";
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\" title=\"";
        yield ($context["name"] ?? null);
        yield "\" class=\"img-fluid\"/></a></div>
  <div class=\"content\">
    <div class=\"description\">
      <h4><a href=\"";
        // line 5
        yield ($context["href"] ?? null);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</a></h4>
      <p>";
        // line 6
        yield ($context["description"] ?? null);
        yield "</p>
      ";
        // line 7
        if (($context["price"] ?? null)) {
            // line 8
            yield "        <div class=\"price\">
          ";
            // line 9
            if ( !($context["special"] ?? null)) {
                // line 10
                yield "            <span class=\"price-new\"><x-currency code=\"";
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["price"] ?? null);
                yield "\"></x-currency></span>
          ";
            } else {
                // line 12
                yield "            <span class=\"price-new\"><x-currency code=\"";
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["special"] ?? null);
                yield "\"></x-currency></span>
            <span class=\"price-old\"><x-currency code=\"";
                // line 13
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["price"] ?? null);
                yield "\"></x-currency></span>
          ";
            }
            // line 15
            yield "          ";
            if (($context["tax"] ?? null)) {
                // line 16
                yield "            <span class=\"price-tax\">";
                yield ($context["text_tax"] ?? null);
                yield " <x-currency code=\"";
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["tax"] ?? null);
                yield "\"></x-currency></span>
          ";
            }
            // line 18
            yield "        </div>
      ";
        }
        // line 20
        yield "      ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 21
            yield "        <div class=\"rating\">
          ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 23
                yield "            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 24
                    yield "              <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            ";
                } else {
                    // line 26
                    yield "              <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            ";
                }
                // line 28
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </div>
      ";
        }
        // line 31
        yield "    </div>
    <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 32
        yield ($context["cart"] ?? null);
        yield "\" data-oc-target=\"#cart\">
      <div class=\"button\">
        <button type=\"submit\" formaction=\"";
        // line 34
        yield ($context["cart_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_cart"] ?? null);
        yield "\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 35
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\" ><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 36
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div>
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 38
        yield ($context["product_id"] ?? null);
        yield "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
        yield ($context["minimum"] ?? null);
        yield "\"/>
    </form>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/thumb.twig";
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
        return array (  171 => 38,  164 => 36,  158 => 35,  152 => 34,  147 => 32,  144 => 31,  140 => 29,  134 => 28,  130 => 26,  126 => 24,  123 => 23,  119 => 22,  116 => 21,  113 => 20,  109 => 18,  99 => 16,  96 => 15,  89 => 13,  82 => 12,  74 => 10,  72 => 9,  69 => 8,  67 => 7,  63 => 6,  57 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"product-thumb\">
  <div class=\"image\"><a href=\"{{ href }}\"><img src=\"{{ thumb }}\" alt=\"{{ name }}\" title=\"{{ name }}\" class=\"img-fluid\"/></a></div>
  <div class=\"content\">
    <div class=\"description\">
      <h4><a href=\"{{ href }}\">{{ name }}</a></h4>
      <p>{{ description }}</p>
      {% if price %}
        <div class=\"price\">
          {% if not special %}
            <span class=\"price-new\"><x-currency code=\"{{ currency }}\" amount=\"{{ price }}\"></x-currency></span>
          {% else %}
            <span class=\"price-new\"><x-currency code=\"{{ currency }}\" amount=\"{{ special }}\"></x-currency></span>
            <span class=\"price-old\"><x-currency code=\"{{ currency }}\" amount=\"{{ price }}\"></x-currency></span>
          {% endif %}
          {% if tax %}
            <span class=\"price-tax\">{{ text_tax }} <x-currency code=\"{{ currency }}\" amount=\"{{ tax }}\"></x-currency></span>
          {% endif %}
        </div>
      {% endif %}
      {% if review_status and rating %}
        <div class=\"rating\">
          {% for i in 1..5 %}
            {% if rating < i %}
              <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            {% else %}
              <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            {% endif %}
          {% endfor %}
        </div>
      {% endif %}
    </div>
    <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
      <div class=\"button\">
        <button type=\"submit\" formaction=\"{{ cart_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_cart }}\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
        <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_wishlist }}\" ><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div>
      <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/> <input type=\"hidden\" name=\"quantity\" value=\"{{ minimum }}\"/>
    </form>
  </div>
</div>", "catalog/view/template/product/thumb.twig", "/var/www/html/catalog/view/template/product/thumb.twig");
    }
}
