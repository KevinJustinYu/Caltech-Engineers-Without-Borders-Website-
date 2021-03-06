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

/* partials/social.html.twig */
class __TwigTemplate_8ff4dd568346c89212ae895a3bde25847441ccabb78a4c7dfa5efa94078bd152 extends \Twig\Template
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
        echo "<ul class=\"social-icons\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo $this->getAttribute($context["social"], "url", []);
            echo "\">
                ";
            // line 5
            if ($this->getAttribute($context["social"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["social"], "icon", []);
                echo "\"></i>";
            }
            // line 6
            echo "            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>  
";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  50 => 6,  44 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"social-icons\">
    {% for social in site.social %}
        <li>
            <a href=\"{{ social.url }}\">
                {% if social.icon %}<i class=\"fa fa-{{ social.icon }}\"></i>{% endif %}
            </a>
        </li>
    {% endfor %}
</ul>  
", "partials/social.html.twig", "/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/themes/deliver/templates/partials/social.html.twig");
    }
}
