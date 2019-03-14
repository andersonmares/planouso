<?php

/* includes/messages.html.twig */
class __TwigTemplate_b4a71626d507fec3d729d173636bef1144e2b0a5531ae849ca398dddc069ab7d extends Twig_Template
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
        $__internal_1bb528f18147b24ba618efff7d397bc540a596b4ac07df8ffdc386ab9356071b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb528f18147b24ba618efff7d397bc540a596b4ac07df8ffdc386ab9356071b->enter($__internal_1bb528f18147b24ba618efff7d397bc540a596b4ac07df8ffdc386ab9356071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/messages.html.twig"));

        $__internal_d0b319a52895093fa938fc01fcb953cedd239bbbc1cf82f42b057d2323421476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b319a52895093fa938fc01fcb953cedd239bbbc1cf82f42b057d2323421476->enter($__internal_d0b319a52895093fa938fc01fcb953cedd239bbbc1cf82f42b057d2323421476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/messages.html.twig"));

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
        
        $__internal_1bb528f18147b24ba618efff7d397bc540a596b4ac07df8ffdc386ab9356071b->leave($__internal_1bb528f18147b24ba618efff7d397bc540a596b4ac07df8ffdc386ab9356071b_prof);

        
        $__internal_d0b319a52895093fa938fc01fcb953cedd239bbbc1cf82f42b057d2323421476->leave($__internal_d0b319a52895093fa938fc01fcb953cedd239bbbc1cf82f42b057d2323421476_prof);

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
