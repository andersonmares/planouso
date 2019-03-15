<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b29e966a5a1121c7b0fb798cfe084e33fe1befcd2b9d6d531d24cc73bdf46d1 extends Twig_Template
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
        $__internal_1274b28cd977eb67b5fba812ac71d0e373bcfb16ac4b98b6aa08c82817559e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1274b28cd977eb67b5fba812ac71d0e373bcfb16ac4b98b6aa08c82817559e59->enter($__internal_1274b28cd977eb67b5fba812ac71d0e373bcfb16ac4b98b6aa08c82817559e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d8c212fbd06077539bb1867195e6b4caadf9f0129d82b62a6f70696e8742a0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c212fbd06077539bb1867195e6b4caadf9f0129d82b62a6f70696e8742a0a5->enter($__internal_d8c212fbd06077539bb1867195e6b4caadf9f0129d82b62a6f70696e8742a0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1274b28cd977eb67b5fba812ac71d0e373bcfb16ac4b98b6aa08c82817559e59->leave($__internal_1274b28cd977eb67b5fba812ac71d0e373bcfb16ac4b98b6aa08c82817559e59_prof);

        
        $__internal_d8c212fbd06077539bb1867195e6b4caadf9f0129d82b62a6f70696e8742a0a5->leave($__internal_d8c212fbd06077539bb1867195e6b4caadf9f0129d82b62a6f70696e8742a0a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d379abba43085ef84eb026a40f9fbd57bea285c1a358869d8afdb48da6f6f49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d379abba43085ef84eb026a40f9fbd57bea285c1a358869d8afdb48da6f6f49c->enter($__internal_d379abba43085ef84eb026a40f9fbd57bea285c1a358869d8afdb48da6f6f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fd57349917886eb869a9fc8105e29bc05fc4646d27b4d2f0a2a004b0938f6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd57349917886eb869a9fc8105e29bc05fc4646d27b4d2f0a2a004b0938f6bd->enter($__internal_6fd57349917886eb869a9fc8105e29bc05fc4646d27b4d2f0a2a004b0938f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fd57349917886eb869a9fc8105e29bc05fc4646d27b4d2f0a2a004b0938f6bd->leave($__internal_6fd57349917886eb869a9fc8105e29bc05fc4646d27b4d2f0a2a004b0938f6bd_prof);

        
        $__internal_d379abba43085ef84eb026a40f9fbd57bea285c1a358869d8afdb48da6f6f49c->leave($__internal_d379abba43085ef84eb026a40f9fbd57bea285c1a358869d8afdb48da6f6f49c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e6264da015ab1c074dd545713d6bd0f24b933283b69b6329bec49e2287308e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6264da015ab1c074dd545713d6bd0f24b933283b69b6329bec49e2287308e3->enter($__internal_6e6264da015ab1c074dd545713d6bd0f24b933283b69b6329bec49e2287308e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_741b1e0a4d4bc3eb44b0175aa92c36efd1c52750468dc50c4dc0ea0d08ef9af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741b1e0a4d4bc3eb44b0175aa92c36efd1c52750468dc50c4dc0ea0d08ef9af1->enter($__internal_741b1e0a4d4bc3eb44b0175aa92c36efd1c52750468dc50c4dc0ea0d08ef9af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_741b1e0a4d4bc3eb44b0175aa92c36efd1c52750468dc50c4dc0ea0d08ef9af1->leave($__internal_741b1e0a4d4bc3eb44b0175aa92c36efd1c52750468dc50c4dc0ea0d08ef9af1_prof);

        
        $__internal_6e6264da015ab1c074dd545713d6bd0f24b933283b69b6329bec49e2287308e3->leave($__internal_6e6264da015ab1c074dd545713d6bd0f24b933283b69b6329bec49e2287308e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f83b951fbafc4337270b9387febd2e1ca5b4386b64b92ee2646c95053bda465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f83b951fbafc4337270b9387febd2e1ca5b4386b64b92ee2646c95053bda465->enter($__internal_5f83b951fbafc4337270b9387febd2e1ca5b4386b64b92ee2646c95053bda465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ebd4ebe4e87bd08f0b215e1aae0a4fc9345295207861fde5569c20e14f2b3d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd4ebe4e87bd08f0b215e1aae0a4fc9345295207861fde5569c20e14f2b3d1c->enter($__internal_ebd4ebe4e87bd08f0b215e1aae0a4fc9345295207861fde5569c20e14f2b3d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebd4ebe4e87bd08f0b215e1aae0a4fc9345295207861fde5569c20e14f2b3d1c->leave($__internal_ebd4ebe4e87bd08f0b215e1aae0a4fc9345295207861fde5569c20e14f2b3d1c_prof);

        
        $__internal_5f83b951fbafc4337270b9387febd2e1ca5b4386b64b92ee2646c95053bda465->leave($__internal_5f83b951fbafc4337270b9387febd2e1ca5b4386b64b92ee2646c95053bda465_prof);

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
