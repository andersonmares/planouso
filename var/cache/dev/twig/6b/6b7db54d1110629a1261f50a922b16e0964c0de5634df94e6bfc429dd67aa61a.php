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
        $__internal_1c95c02147459e243cdeec215d72d652dbed70ff0f09a4088efde1caea640b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c95c02147459e243cdeec215d72d652dbed70ff0f09a4088efde1caea640b82->enter($__internal_1c95c02147459e243cdeec215d72d652dbed70ff0f09a4088efde1caea640b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_58fff7ad425f0d8ed2109d9617f461620c2112fea688529208012574c6446770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fff7ad425f0d8ed2109d9617f461620c2112fea688529208012574c6446770->enter($__internal_58fff7ad425f0d8ed2109d9617f461620c2112fea688529208012574c6446770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c95c02147459e243cdeec215d72d652dbed70ff0f09a4088efde1caea640b82->leave($__internal_1c95c02147459e243cdeec215d72d652dbed70ff0f09a4088efde1caea640b82_prof);

        
        $__internal_58fff7ad425f0d8ed2109d9617f461620c2112fea688529208012574c6446770->leave($__internal_58fff7ad425f0d8ed2109d9617f461620c2112fea688529208012574c6446770_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_226ee40729e74fbff0400f59d9c43a15b529b622f38daf22cc133a6be02ee0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226ee40729e74fbff0400f59d9c43a15b529b622f38daf22cc133a6be02ee0d0->enter($__internal_226ee40729e74fbff0400f59d9c43a15b529b622f38daf22cc133a6be02ee0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_970662692d6ce3a72588752a7ceb31463c6c2ac80820bbdecc35ab5c9a751d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970662692d6ce3a72588752a7ceb31463c6c2ac80820bbdecc35ab5c9a751d6a->enter($__internal_970662692d6ce3a72588752a7ceb31463c6c2ac80820bbdecc35ab5c9a751d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_970662692d6ce3a72588752a7ceb31463c6c2ac80820bbdecc35ab5c9a751d6a->leave($__internal_970662692d6ce3a72588752a7ceb31463c6c2ac80820bbdecc35ab5c9a751d6a_prof);

        
        $__internal_226ee40729e74fbff0400f59d9c43a15b529b622f38daf22cc133a6be02ee0d0->leave($__internal_226ee40729e74fbff0400f59d9c43a15b529b622f38daf22cc133a6be02ee0d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6957fa3c95860decaf5451ecba4d8e815582a66ef9b7061a05efb3369c760469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6957fa3c95860decaf5451ecba4d8e815582a66ef9b7061a05efb3369c760469->enter($__internal_6957fa3c95860decaf5451ecba4d8e815582a66ef9b7061a05efb3369c760469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c74d9e862e59028ce5eef6c06dc0e3ac5af8382fa335bd564ad0085dc4d9ea2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74d9e862e59028ce5eef6c06dc0e3ac5af8382fa335bd564ad0085dc4d9ea2b->enter($__internal_c74d9e862e59028ce5eef6c06dc0e3ac5af8382fa335bd564ad0085dc4d9ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c74d9e862e59028ce5eef6c06dc0e3ac5af8382fa335bd564ad0085dc4d9ea2b->leave($__internal_c74d9e862e59028ce5eef6c06dc0e3ac5af8382fa335bd564ad0085dc4d9ea2b_prof);

        
        $__internal_6957fa3c95860decaf5451ecba4d8e815582a66ef9b7061a05efb3369c760469->leave($__internal_6957fa3c95860decaf5451ecba4d8e815582a66ef9b7061a05efb3369c760469_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d9fc5aa24868c23c80a9cb6639be04ab8d152ab5c77cc8e920db3b7957cfe30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9fc5aa24868c23c80a9cb6639be04ab8d152ab5c77cc8e920db3b7957cfe30->enter($__internal_3d9fc5aa24868c23c80a9cb6639be04ab8d152ab5c77cc8e920db3b7957cfe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e060cae1aba056ced1553baf35fcb034635e380e0a11ac0873ea4efaa5998add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e060cae1aba056ced1553baf35fcb034635e380e0a11ac0873ea4efaa5998add->enter($__internal_e060cae1aba056ced1553baf35fcb034635e380e0a11ac0873ea4efaa5998add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e060cae1aba056ced1553baf35fcb034635e380e0a11ac0873ea4efaa5998add->leave($__internal_e060cae1aba056ced1553baf35fcb034635e380e0a11ac0873ea4efaa5998add_prof);

        
        $__internal_3d9fc5aa24868c23c80a9cb6639be04ab8d152ab5c77cc8e920db3b7957cfe30->leave($__internal_3d9fc5aa24868c23c80a9cb6639be04ab8d152ab5c77cc8e920db3b7957cfe30_prof);

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
