<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f59965bb3868083b068e523d2e3361d21443bb96bb12334a1d3b3e87f5bfa48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_941b1be6418b54310689433b8c6da5cc2744c5b70f3c94e76d0f751b3572768b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941b1be6418b54310689433b8c6da5cc2744c5b70f3c94e76d0f751b3572768b->enter($__internal_941b1be6418b54310689433b8c6da5cc2744c5b70f3c94e76d0f751b3572768b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_04c897c7ac824cf58c4bded467ed01d4453b880ef7bfa4a58f37587622e08114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c897c7ac824cf58c4bded467ed01d4453b880ef7bfa4a58f37587622e08114->enter($__internal_04c897c7ac824cf58c4bded467ed01d4453b880ef7bfa4a58f37587622e08114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_941b1be6418b54310689433b8c6da5cc2744c5b70f3c94e76d0f751b3572768b->leave($__internal_941b1be6418b54310689433b8c6da5cc2744c5b70f3c94e76d0f751b3572768b_prof);

        
        $__internal_04c897c7ac824cf58c4bded467ed01d4453b880ef7bfa4a58f37587622e08114->leave($__internal_04c897c7ac824cf58c4bded467ed01d4453b880ef7bfa4a58f37587622e08114_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65cd915c32166212c26ab5791adec65f61164ce46ebf365be9c1d85aafee65d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cd915c32166212c26ab5791adec65f61164ce46ebf365be9c1d85aafee65d6->enter($__internal_65cd915c32166212c26ab5791adec65f61164ce46ebf365be9c1d85aafee65d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c81d88e09e7c405aa1842c93b17b733fa67872bb8cd9a5e2ed56d999d40e577d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81d88e09e7c405aa1842c93b17b733fa67872bb8cd9a5e2ed56d999d40e577d->enter($__internal_c81d88e09e7c405aa1842c93b17b733fa67872bb8cd9a5e2ed56d999d40e577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c81d88e09e7c405aa1842c93b17b733fa67872bb8cd9a5e2ed56d999d40e577d->leave($__internal_c81d88e09e7c405aa1842c93b17b733fa67872bb8cd9a5e2ed56d999d40e577d_prof);

        
        $__internal_65cd915c32166212c26ab5791adec65f61164ce46ebf365be9c1d85aafee65d6->leave($__internal_65cd915c32166212c26ab5791adec65f61164ce46ebf365be9c1d85aafee65d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0dd607ea413539b8f7395284b7ecbce7301854abdcbc7c63e52adf949a07269a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd607ea413539b8f7395284b7ecbce7301854abdcbc7c63e52adf949a07269a->enter($__internal_0dd607ea413539b8f7395284b7ecbce7301854abdcbc7c63e52adf949a07269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eac80b039985a179f1e9208d82d385114190cc0644b89f84dc2a2fff06b7ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac80b039985a179f1e9208d82d385114190cc0644b89f84dc2a2fff06b7ea05->enter($__internal_eac80b039985a179f1e9208d82d385114190cc0644b89f84dc2a2fff06b7ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eac80b039985a179f1e9208d82d385114190cc0644b89f84dc2a2fff06b7ea05->leave($__internal_eac80b039985a179f1e9208d82d385114190cc0644b89f84dc2a2fff06b7ea05_prof);

        
        $__internal_0dd607ea413539b8f7395284b7ecbce7301854abdcbc7c63e52adf949a07269a->leave($__internal_0dd607ea413539b8f7395284b7ecbce7301854abdcbc7c63e52adf949a07269a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5eda311c1adc36557bbe1261d9fb43b112bc8bb2d60dbe614b0ffc3114da8e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eda311c1adc36557bbe1261d9fb43b112bc8bb2d60dbe614b0ffc3114da8e0e->enter($__internal_5eda311c1adc36557bbe1261d9fb43b112bc8bb2d60dbe614b0ffc3114da8e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8345e844838bf4e4b789d71ae5b89af0395a532d3bde0a163d9047e01cc4ac61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8345e844838bf4e4b789d71ae5b89af0395a532d3bde0a163d9047e01cc4ac61->enter($__internal_8345e844838bf4e4b789d71ae5b89af0395a532d3bde0a163d9047e01cc4ac61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8345e844838bf4e4b789d71ae5b89af0395a532d3bde0a163d9047e01cc4ac61->leave($__internal_8345e844838bf4e4b789d71ae5b89af0395a532d3bde0a163d9047e01cc4ac61_prof);

        
        $__internal_5eda311c1adc36557bbe1261d9fb43b112bc8bb2d60dbe614b0ffc3114da8e0e->leave($__internal_5eda311c1adc36557bbe1261d9fb43b112bc8bb2d60dbe614b0ffc3114da8e0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
