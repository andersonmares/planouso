<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f6846b6c2e076733c77d7a19c380a3a9d981f78feee9bc3e692038e308fd9584 extends Twig_Template
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
        $__internal_2d806ee987cdf53e901edb03a3aac4fa6762ca92f11cac456b20fc564b3bec0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d806ee987cdf53e901edb03a3aac4fa6762ca92f11cac456b20fc564b3bec0a->enter($__internal_2d806ee987cdf53e901edb03a3aac4fa6762ca92f11cac456b20fc564b3bec0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bf2b9ca634b330e5019956400931821bbdc603b7e1f053f6bfc6623f6b2a7cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2b9ca634b330e5019956400931821bbdc603b7e1f053f6bfc6623f6b2a7cc5->enter($__internal_bf2b9ca634b330e5019956400931821bbdc603b7e1f053f6bfc6623f6b2a7cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d806ee987cdf53e901edb03a3aac4fa6762ca92f11cac456b20fc564b3bec0a->leave($__internal_2d806ee987cdf53e901edb03a3aac4fa6762ca92f11cac456b20fc564b3bec0a_prof);

        
        $__internal_bf2b9ca634b330e5019956400931821bbdc603b7e1f053f6bfc6623f6b2a7cc5->leave($__internal_bf2b9ca634b330e5019956400931821bbdc603b7e1f053f6bfc6623f6b2a7cc5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e3a868abcbbd2f873ac5346aabdfab589ee6bcb4f98070c5c8b7e5c9f30c122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3a868abcbbd2f873ac5346aabdfab589ee6bcb4f98070c5c8b7e5c9f30c122->enter($__internal_8e3a868abcbbd2f873ac5346aabdfab589ee6bcb4f98070c5c8b7e5c9f30c122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f5979daca36e271bd515985053e55cccd4422a82b30e2a280d90a2b044a9855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5979daca36e271bd515985053e55cccd4422a82b30e2a280d90a2b044a9855->enter($__internal_4f5979daca36e271bd515985053e55cccd4422a82b30e2a280d90a2b044a9855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4f5979daca36e271bd515985053e55cccd4422a82b30e2a280d90a2b044a9855->leave($__internal_4f5979daca36e271bd515985053e55cccd4422a82b30e2a280d90a2b044a9855_prof);

        
        $__internal_8e3a868abcbbd2f873ac5346aabdfab589ee6bcb4f98070c5c8b7e5c9f30c122->leave($__internal_8e3a868abcbbd2f873ac5346aabdfab589ee6bcb4f98070c5c8b7e5c9f30c122_prof);

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
