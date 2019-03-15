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
        $__internal_de03c275892a4fb5b80d2bc8812fd53d74ff257884681bde880debae60a46987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de03c275892a4fb5b80d2bc8812fd53d74ff257884681bde880debae60a46987->enter($__internal_de03c275892a4fb5b80d2bc8812fd53d74ff257884681bde880debae60a46987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0566018876ccac5963b43f754a8457ef9fbe9c1eb36478951695021dc166dbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0566018876ccac5963b43f754a8457ef9fbe9c1eb36478951695021dc166dbdb->enter($__internal_0566018876ccac5963b43f754a8457ef9fbe9c1eb36478951695021dc166dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de03c275892a4fb5b80d2bc8812fd53d74ff257884681bde880debae60a46987->leave($__internal_de03c275892a4fb5b80d2bc8812fd53d74ff257884681bde880debae60a46987_prof);

        
        $__internal_0566018876ccac5963b43f754a8457ef9fbe9c1eb36478951695021dc166dbdb->leave($__internal_0566018876ccac5963b43f754a8457ef9fbe9c1eb36478951695021dc166dbdb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdb17ba0d5e7534369fd371549366b3d2cf5b5cdb3ec6295603d80ccc7c034f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb17ba0d5e7534369fd371549366b3d2cf5b5cdb3ec6295603d80ccc7c034f9->enter($__internal_fdb17ba0d5e7534369fd371549366b3d2cf5b5cdb3ec6295603d80ccc7c034f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b20a6ad889b555410dfd164df21b4d4da1a2aa16628450a92c3f3ece832bf273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20a6ad889b555410dfd164df21b4d4da1a2aa16628450a92c3f3ece832bf273->enter($__internal_b20a6ad889b555410dfd164df21b4d4da1a2aa16628450a92c3f3ece832bf273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b20a6ad889b555410dfd164df21b4d4da1a2aa16628450a92c3f3ece832bf273->leave($__internal_b20a6ad889b555410dfd164df21b4d4da1a2aa16628450a92c3f3ece832bf273_prof);

        
        $__internal_fdb17ba0d5e7534369fd371549366b3d2cf5b5cdb3ec6295603d80ccc7c034f9->leave($__internal_fdb17ba0d5e7534369fd371549366b3d2cf5b5cdb3ec6295603d80ccc7c034f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b25e77204a936134e12b8a6718f075e537f01095b937bd3bc8431ee4df95ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b25e77204a936134e12b8a6718f075e537f01095b937bd3bc8431ee4df95ad5->enter($__internal_1b25e77204a936134e12b8a6718f075e537f01095b937bd3bc8431ee4df95ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d54c7bb4648777a885a3af94337f867b50c02df2065d3d38a434f5a7c40fae20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54c7bb4648777a885a3af94337f867b50c02df2065d3d38a434f5a7c40fae20->enter($__internal_d54c7bb4648777a885a3af94337f867b50c02df2065d3d38a434f5a7c40fae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d54c7bb4648777a885a3af94337f867b50c02df2065d3d38a434f5a7c40fae20->leave($__internal_d54c7bb4648777a885a3af94337f867b50c02df2065d3d38a434f5a7c40fae20_prof);

        
        $__internal_1b25e77204a936134e12b8a6718f075e537f01095b937bd3bc8431ee4df95ad5->leave($__internal_1b25e77204a936134e12b8a6718f075e537f01095b937bd3bc8431ee4df95ad5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be71ca6d67fee370e2ce06dc310f72d3cbaee7378582406b1b01ab8e8898d271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be71ca6d67fee370e2ce06dc310f72d3cbaee7378582406b1b01ab8e8898d271->enter($__internal_be71ca6d67fee370e2ce06dc310f72d3cbaee7378582406b1b01ab8e8898d271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6685da68dac3c65f83629b1215f7ff715f5c691f673cc6c67b74eae8d977183e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6685da68dac3c65f83629b1215f7ff715f5c691f673cc6c67b74eae8d977183e->enter($__internal_6685da68dac3c65f83629b1215f7ff715f5c691f673cc6c67b74eae8d977183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6685da68dac3c65f83629b1215f7ff715f5c691f673cc6c67b74eae8d977183e->leave($__internal_6685da68dac3c65f83629b1215f7ff715f5c691f673cc6c67b74eae8d977183e_prof);

        
        $__internal_be71ca6d67fee370e2ce06dc310f72d3cbaee7378582406b1b01ab8e8898d271->leave($__internal_be71ca6d67fee370e2ce06dc310f72d3cbaee7378582406b1b01ab8e8898d271_prof);

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
