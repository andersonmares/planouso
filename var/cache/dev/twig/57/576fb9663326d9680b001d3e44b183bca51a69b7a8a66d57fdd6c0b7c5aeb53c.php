<?php

/* includes/messages.html.twig */
class __TwigTemplate_9dcb944915407ac067c42c7cd5e646816cd8d19a81a1a30319eeb28403a35c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7ee40324813f9cd7813b9f034c34cf574151bcae75e75ea44b52948bc3688a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ee40324813f9cd7813b9f034c34cf574151bcae75e75ea44b52948bc3688a4->enter($__internal_f7ee40324813f9cd7813b9f034c34cf574151bcae75e75ea44b52948bc3688a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/messages.html.twig"));

        $__internal_654355be2e362c52bb23c4be6c9773be5ff56c9ee320aff21c7009cd5af93955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654355be2e362c52bb23c4be6c9773be5ff56c9ee320aff21c7009cd5af93955->enter($__internal_654355be2e362c52bb23c4be6c9773be5ff56c9ee320aff21c7009cd5af93955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/messages.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 2
            echo "    <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        <i class=\"icon fa fa-check\"></i>
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 10
            echo "    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 17
            echo "    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 19
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f7ee40324813f9cd7813b9f034c34cf574151bcae75e75ea44b52948bc3688a4->leave($__internal_f7ee40324813f9cd7813b9f034c34cf574151bcae75e75ea44b52948bc3688a4_prof);

        
        $__internal_654355be2e362c52bb23c4be6c9773be5ff56c9ee320aff21c7009cd5af93955->leave($__internal_654355be2e362c52bb23c4be6c9773be5ff56c9ee320aff21c7009cd5af93955_prof);

    }

    public function getTemplateName()
    {
        return "includes/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 17,  66 => 16,  63 => 15,  54 => 12,  50 => 10,  46 => 9,  43 => 8,  34 => 5,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for msg in app.session.flashBag.get('success') %}
    <div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        <i class=\"icon fa fa-check\"></i>
        {{ msg }}
    </div>
{% endfor %}

{% for msg in app.session.flashBag.get('error') %}
    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ msg }}
    </div>
{% endfor %}

{% for msg in app.session.flashBag.get('warning') %}
    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ msg }}
    </div>
{% endfor %}", "includes/messages.html.twig", "D:\\planouso\\app\\Resources\\views\\includes\\messages.html.twig");
    }
}
