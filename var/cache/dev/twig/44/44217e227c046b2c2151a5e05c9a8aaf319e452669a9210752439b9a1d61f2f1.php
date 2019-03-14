<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3cb082b45046fab35cd71d1a3772ae1a0d98d08fc16ebfdb3051732e3d6750d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d475528ec95a736c2b321461132bc8a9a8d7219ae0781874b5c192e55f2f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d475528ec95a736c2b321461132bc8a9a8d7219ae0781874b5c192e55f2f73->enter($__internal_56d475528ec95a736c2b321461132bc8a9a8d7219ae0781874b5c192e55f2f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_21ce144cbcf2858c702919c4806561310b0ab0785e5c26607aa704d2a1697aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ce144cbcf2858c702919c4806561310b0ab0785e5c26607aa704d2a1697aef->enter($__internal_21ce144cbcf2858c702919c4806561310b0ab0785e5c26607aa704d2a1697aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d475528ec95a736c2b321461132bc8a9a8d7219ae0781874b5c192e55f2f73->leave($__internal_56d475528ec95a736c2b321461132bc8a9a8d7219ae0781874b5c192e55f2f73_prof);

        
        $__internal_21ce144cbcf2858c702919c4806561310b0ab0785e5c26607aa704d2a1697aef->leave($__internal_21ce144cbcf2858c702919c4806561310b0ab0785e5c26607aa704d2a1697aef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55123088b7c6a0ce715186feef42ebeb34dc4b43ba2d92243692121e63d13368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55123088b7c6a0ce715186feef42ebeb34dc4b43ba2d92243692121e63d13368->enter($__internal_55123088b7c6a0ce715186feef42ebeb34dc4b43ba2d92243692121e63d13368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_019fa34a55fed841dc08b663a8e7bb1742a90d8e50ebb1d9b9b9de11c411763b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019fa34a55fed841dc08b663a8e7bb1742a90d8e50ebb1d9b9b9de11c411763b->enter($__internal_019fa34a55fed841dc08b663a8e7bb1742a90d8e50ebb1d9b9b9de11c411763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_019fa34a55fed841dc08b663a8e7bb1742a90d8e50ebb1d9b9b9de11c411763b->leave($__internal_019fa34a55fed841dc08b663a8e7bb1742a90d8e50ebb1d9b9b9de11c411763b_prof);

        
        $__internal_55123088b7c6a0ce715186feef42ebeb34dc4b43ba2d92243692121e63d13368->leave($__internal_55123088b7c6a0ce715186feef42ebeb34dc4b43ba2d92243692121e63d13368_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
