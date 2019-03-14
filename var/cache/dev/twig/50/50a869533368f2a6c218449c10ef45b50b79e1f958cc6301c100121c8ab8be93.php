<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e640beab269f843e460a633fc496c1d61de17eb6e2b12b5011c366c622934b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6228e9f0f65108a88ea9e1ee54457dca8e2368492a77420bfc195038b96fa469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6228e9f0f65108a88ea9e1ee54457dca8e2368492a77420bfc195038b96fa469->enter($__internal_6228e9f0f65108a88ea9e1ee54457dca8e2368492a77420bfc195038b96fa469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_af1035d9794a0aedc80b1abd18e668897f55c9d56dbcf0959a183a94655446ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1035d9794a0aedc80b1abd18e668897f55c9d56dbcf0959a183a94655446ee->enter($__internal_af1035d9794a0aedc80b1abd18e668897f55c9d56dbcf0959a183a94655446ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6228e9f0f65108a88ea9e1ee54457dca8e2368492a77420bfc195038b96fa469->leave($__internal_6228e9f0f65108a88ea9e1ee54457dca8e2368492a77420bfc195038b96fa469_prof);

        
        $__internal_af1035d9794a0aedc80b1abd18e668897f55c9d56dbcf0959a183a94655446ee->leave($__internal_af1035d9794a0aedc80b1abd18e668897f55c9d56dbcf0959a183a94655446ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1e3428523ea274960da7417181c6679cb0b35bb1ddb378f832fdf22f98f1b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e3428523ea274960da7417181c6679cb0b35bb1ddb378f832fdf22f98f1b0a->enter($__internal_c1e3428523ea274960da7417181c6679cb0b35bb1ddb378f832fdf22f98f1b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50aada2f2054a2abab3ee8364cf34f61013fe8490fe4fc8e920b3c5491a7cfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50aada2f2054a2abab3ee8364cf34f61013fe8490fe4fc8e920b3c5491a7cfa4->enter($__internal_50aada2f2054a2abab3ee8364cf34f61013fe8490fe4fc8e920b3c5491a7cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_50aada2f2054a2abab3ee8364cf34f61013fe8490fe4fc8e920b3c5491a7cfa4->leave($__internal_50aada2f2054a2abab3ee8364cf34f61013fe8490fe4fc8e920b3c5491a7cfa4_prof);

        
        $__internal_c1e3428523ea274960da7417181c6679cb0b35bb1ddb378f832fdf22f98f1b0a->leave($__internal_c1e3428523ea274960da7417181c6679cb0b35bb1ddb378f832fdf22f98f1b0a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04c64cba5840ed5e2e5f853468c06adc3a96a033ef9b4d1dec6d7da9a95ebaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c64cba5840ed5e2e5f853468c06adc3a96a033ef9b4d1dec6d7da9a95ebaca->enter($__internal_04c64cba5840ed5e2e5f853468c06adc3a96a033ef9b4d1dec6d7da9a95ebaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a223ec6bffd7819eeecc596620b5752ba3be883419b72f39046e595694d12d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a223ec6bffd7819eeecc596620b5752ba3be883419b72f39046e595694d12d4->enter($__internal_0a223ec6bffd7819eeecc596620b5752ba3be883419b72f39046e595694d12d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0a223ec6bffd7819eeecc596620b5752ba3be883419b72f39046e595694d12d4->leave($__internal_0a223ec6bffd7819eeecc596620b5752ba3be883419b72f39046e595694d12d4_prof);

        
        $__internal_04c64cba5840ed5e2e5f853468c06adc3a96a033ef9b4d1dec6d7da9a95ebaca->leave($__internal_04c64cba5840ed5e2e5f853468c06adc3a96a033ef9b4d1dec6d7da9a95ebaca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce38bce26a8e550c75c1ce48f7ea254659de4dfca7c0fcd117b8be9a24113c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce38bce26a8e550c75c1ce48f7ea254659de4dfca7c0fcd117b8be9a24113c48->enter($__internal_ce38bce26a8e550c75c1ce48f7ea254659de4dfca7c0fcd117b8be9a24113c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f04ca544767ac976b7552d67dd35d46eeed7d98df5c794cf4c053f30e024310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f04ca544767ac976b7552d67dd35d46eeed7d98df5c794cf4c053f30e024310->enter($__internal_1f04ca544767ac976b7552d67dd35d46eeed7d98df5c794cf4c053f30e024310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1f04ca544767ac976b7552d67dd35d46eeed7d98df5c794cf4c053f30e024310->leave($__internal_1f04ca544767ac976b7552d67dd35d46eeed7d98df5c794cf4c053f30e024310_prof);

        
        $__internal_ce38bce26a8e550c75c1ce48f7ea254659de4dfca7c0fcd117b8be9a24113c48->leave($__internal_ce38bce26a8e550c75c1ce48f7ea254659de4dfca7c0fcd117b8be9a24113c48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
