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

/* forms/default/data.txt.twig */
class __TwigTemplate_b04fdb722ca177b7d3116f3f62d16a59576eecb5f61e383b38cb5c7caf4c4f48 extends \Twig\Template
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
        // line 16
        echo ($this->getAttribute($this, "render_field", [0 => ($context["form"] ?? null), 1 => $this->getAttribute(($context["form"] ?? null), "fields", []), 2 => ""], "method") . "
");
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 3
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 4
                if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                    // line 5
                    $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"])))], "method");
                    // line 6
                    echo (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"])));
                    echo ": ";
                    echo ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc(((twig_test_iterable(($context["value"] ?? null))) ? (twig_jsonencode_filter(($context["value"] ?? null))) : (twig_escape_filter($this->env, ($context["value"] ?? null), "yaml")))) . "
");
                } else {
                    // line 8
                    if ($this->getAttribute($context["field"], "fields", [])) {
                        // line 9
                        $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", [])) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", [])) . ".")) : (($context["scope"] ?? null)));
                        // line 10
                        echo $this->getAttribute($this, "render_field", [0 => ($context["form"] ?? null), 1 => $this->getAttribute($context["field"], "fields", []), 2 => ($context["new_scope"] ?? null)], "method");
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  67 => 9,  65 => 8,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  49 => 2,  35 => 1,  30 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- macro render_field(form, fields, scope) %}
{%- for index, field in fields %}
    {%- set input = attribute(field, \"input@\") %}
        {%- if input is null or input == true %}
        {%- set value = form.value(scope ~ (field.name ?? index)) %}
        {{- scope ~ (field.name ?? index) }}: {{ string(value is iterable ? value|json_encode : value|escape('yaml')) ~ \"\\r\\n\" }}
    {%- else %}
        {%- if field.fields %}
        {%- set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope -%}
        {{- _self.render_field(form, field.fields, new_scope) }}
        {%- endif %}
    {%- endif %}
{%- endfor %}
{%- endmacro %}
{%- autoescape false %}
{{- _self.render_field(form, form.fields, '') ~ \"\\r\\n\" }}
{%- endautoescape %}", "forms/default/data.txt.twig", "/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/user/plugins/form/templates/forms/default/data.txt.twig");
    }
}
