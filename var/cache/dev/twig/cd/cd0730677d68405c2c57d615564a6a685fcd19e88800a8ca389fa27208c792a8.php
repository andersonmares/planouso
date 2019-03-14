<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_658ca2072063bb3dbbfa5057c2830cfc35ea0285834b97e60d409cd1b8a871dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd81b4b160a2c5d83bf1efa350607bd049c39e0cc95d18cde5c94b77c3a6664d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd81b4b160a2c5d83bf1efa350607bd049c39e0cc95d18cde5c94b77c3a6664d->enter($__internal_dd81b4b160a2c5d83bf1efa350607bd049c39e0cc95d18cde5c94b77c3a6664d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_648fd99f99b0002598a7613b7630afe462582ec9959135b1045bd6237926fab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648fd99f99b0002598a7613b7630afe462582ec9959135b1045bd6237926fab5->enter($__internal_648fd99f99b0002598a7613b7630afe462582ec9959135b1045bd6237926fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd81b4b160a2c5d83bf1efa350607bd049c39e0cc95d18cde5c94b77c3a6664d->leave($__internal_dd81b4b160a2c5d83bf1efa350607bd049c39e0cc95d18cde5c94b77c3a6664d_prof);

        
        $__internal_648fd99f99b0002598a7613b7630afe462582ec9959135b1045bd6237926fab5->leave($__internal_648fd99f99b0002598a7613b7630afe462582ec9959135b1045bd6237926fab5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32624121765ab12c5843c490a7af207831c58ff5a92c40b918a3c9e079f149d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32624121765ab12c5843c490a7af207831c58ff5a92c40b918a3c9e079f149d6->enter($__internal_32624121765ab12c5843c490a7af207831c58ff5a92c40b918a3c9e079f149d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_300bea596c6bb7c44435f39a600dee5b7442e0deb769b556931553ffe9d16f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300bea596c6bb7c44435f39a600dee5b7442e0deb769b556931553ffe9d16f3b->enter($__internal_300bea596c6bb7c44435f39a600dee5b7442e0deb769b556931553ffe9d16f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_300bea596c6bb7c44435f39a600dee5b7442e0deb769b556931553ffe9d16f3b->leave($__internal_300bea596c6bb7c44435f39a600dee5b7442e0deb769b556931553ffe9d16f3b_prof);

        
        $__internal_32624121765ab12c5843c490a7af207831c58ff5a92c40b918a3c9e079f149d6->leave($__internal_32624121765ab12c5843c490a7af207831c58ff5a92c40b918a3c9e079f149d6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b229a742e01edfdc706e816830adac497fc11630848b4efce5cc36345f6feb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b229a742e01edfdc706e816830adac497fc11630848b4efce5cc36345f6feb0->enter($__internal_6b229a742e01edfdc706e816830adac497fc11630848b4efce5cc36345f6feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5a0b207fbfdb545c53d44682d623af623f5aeede1d937872bdf59112be515a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a0b207fbfdb545c53d44682d623af623f5aeede1d937872bdf59112be515a5->enter($__internal_c5a0b207fbfdb545c53d44682d623af623f5aeede1d937872bdf59112be515a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c5a0b207fbfdb545c53d44682d623af623f5aeede1d937872bdf59112be515a5->leave($__internal_c5a0b207fbfdb545c53d44682d623af623f5aeede1d937872bdf59112be515a5_prof);

        
        $__internal_6b229a742e01edfdc706e816830adac497fc11630848b4efce5cc36345f6feb0->leave($__internal_6b229a742e01edfdc706e816830adac497fc11630848b4efce5cc36345f6feb0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
