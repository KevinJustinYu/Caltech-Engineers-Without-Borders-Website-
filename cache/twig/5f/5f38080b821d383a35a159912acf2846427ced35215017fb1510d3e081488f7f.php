<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/projects.html.twig */
class __TwigTemplate_49d8302151b97287db72767af5b3f6c87bc4cd03ba0f784cc1519dfc7a1265ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"modular-row portfolio\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", [])) {
            // line 4
            echo "        <div class=\"notebooks\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 6
                echo "                <div class=\"notebook-row\">
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                    // line 8
                    echo "                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>";
                    // line 10
                    echo $this->getAttribute($context["portfolio"], "title", []);
                    echo "</h4>
                            </div>
                            <a href=\"#portfolioModal";
                    // line 12
                    echo $this->getAttribute($context["portfolio"], "modalid", []);
                    echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                                <div class='screen'><div class=\"screen-content\" style=\"background-image: url(";
                    // line 13
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []);
                    echo ")\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        }
        // line 22
        echo "</div>


";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                // line 27
                echo "        <div class=\"portfolio-modal modal\" id=\"portfolioModal";
                echo $this->getAttribute($context["portfolio"], "modalid", []);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-content\">
                <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
                <div class=\"modal-body\">
                    <h1>";
                // line 31
                echo $this->getAttribute($context["portfolio"], "title", []);
                echo "</h1>
                    <a href=\"";
                // line 32
                echo $this->getAttribute($context["portfolio"], "url", []);
                echo "\">
                        <img src=\"";
                // line 33
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []);
                echo "\" class=\"img-responsive img-centered\" alt=\"";
                echo $this->getAttribute($context["portfolio"], "alt", []);
                echo "\">
                    </a>
                    <p>";
                // line 35
                echo $this->getAttribute($context["portfolio"], "desc", []);
                echo "</p>
                    <ul class=\"client-details\">
                    </ul>
                    <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  118 => 33,  114 => 32,  110 => 31,  102 => 27,  97 => 26,  93 => 25,  88 => 22,  84 => 20,  77 => 18,  66 => 13,  62 => 12,  57 => 10,  53 => 8,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row portfolio\">
    {{ content }}
    {% if page.header.portfolio %}
        <div class=\"notebooks\">
            {% for row in page.header.portfolio|batch(4) %}
                <div class=\"notebook-row\">
                    {% for portfolio in row %}
                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>{{ portfolio.title }}</h4>
                            </div>
                            <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                                <div class='screen'><div class=\"screen-content\" style=\"background-image: url({{ page.media[portfolio.image].url }})\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>


{% for row in page.header.portfolio|batch(2) %}
    {% for portfolio in row %}
        <div class=\"portfolio-modal modal\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-content\">
                <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
                <div class=\"modal-body\">
                    <h1>{{ portfolio.title }}</h1>
                    <a href=\"{{ portfolio.url }}\">
                        <img src=\"{{ page.media[portfolio.image].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
                    </a>
                    <p>{{ portfolio.desc }}</p>
                    <ul class=\"client-details\">
                    </ul>
                    <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                </div>
            </div>
        </div>
    {% endfor %}
{% endfor %}
", "modular/projects.html.twig", "/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/themes/deliver/templates/modular/projects.html.twig");
    }
}
