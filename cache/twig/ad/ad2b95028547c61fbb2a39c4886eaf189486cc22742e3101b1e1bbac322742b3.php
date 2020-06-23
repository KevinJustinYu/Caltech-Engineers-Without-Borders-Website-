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

/* item.html.twig */
class __TwigTemplate_99631db5287772913fcf97e9def9b61ec838237506b973001546a4bc97ac5067 extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "813423637")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

\t{% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}
   
\t{% block content %}
        {% set blog_image = page.parent.media.images|first %}
        
\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.parent.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
            <h1>{{ page.title }}</h1>
        </div>
        {% endif %}
    
        {% include 'partials/breadcrumbs.html.twig' %}
\t\t
\t\t<div class=\"blog-content-item g-grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"g-block pure-u-2-3\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/themes/deliver/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_99631db5287772913fcf97e9def9b61ec838237506b973001546a4bc97ac5067___813423637 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 6
        if ((($context["base_url"] ?? null) == "/")) {
            // line 7
            $context["base_url"] = "";
        }
        // line 10
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 11
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "        ";
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "media", []), "images", []));
        // line 16
        echo "        
\t\t";
        // line 17
        if (($context["blog_image"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "bg_color", []);
            echo " url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", []);
            echo ") no-repeat right;\">
            <h1>";
            // line 19
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
        </div>
        ";
        }
        // line 22
        echo "    
        ";
        // line 23
        $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 23)->display($context);
        // line 24
        echo "\t\t
\t\t<div class=\"blog-content-item g-grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"g-block pure-u-2-3\">
\t\t\t    ";
        // line 27
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 27)->display(array_merge($context, ["truncate" => false, "big_header" => true]));
        // line 28
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 30
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 31,  172 => 30,  168 => 28,  166 => 27,  161 => 24,  159 => 23,  156 => 22,  150 => 19,  143 => 18,  141 => 17,  138 => 16,  135 => 15,  132 => 14,  128 => 1,  125 => 11,  123 => 10,  120 => 7,  118 => 6,  116 => 4,  114 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

\t{% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}
   
\t{% block content %}
        {% set blog_image = page.parent.media.images|first %}
        
\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.parent.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
            <h1>{{ page.title }}</h1>
        </div>
        {% endif %}
    
        {% include 'partials/breadcrumbs.html.twig' %}
\t\t
\t\t<div class=\"blog-content-item g-grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"g-block pure-u-2-3\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/themes/deliver/templates/item.html.twig");
    }
}
