<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c373817ff1f10329ef9998227fd778593204ce265f1777eccaeeb59821a7737e extends Twig_Template
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
        $__internal_db6f9a655acdc859f6bc037f31f96eceb748377cf7ba6551c4a668663b53d80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6f9a655acdc859f6bc037f31f96eceb748377cf7ba6551c4a668663b53d80f->enter($__internal_db6f9a655acdc859f6bc037f31f96eceb748377cf7ba6551c4a668663b53d80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_53e563733fc0261d96db84aceaa681aa8898c544957a0d960d76d75f90e43db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e563733fc0261d96db84aceaa681aa8898c544957a0d960d76d75f90e43db9->enter($__internal_53e563733fc0261d96db84aceaa681aa8898c544957a0d960d76d75f90e43db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6f9a655acdc859f6bc037f31f96eceb748377cf7ba6551c4a668663b53d80f->leave($__internal_db6f9a655acdc859f6bc037f31f96eceb748377cf7ba6551c4a668663b53d80f_prof);

        
        $__internal_53e563733fc0261d96db84aceaa681aa8898c544957a0d960d76d75f90e43db9->leave($__internal_53e563733fc0261d96db84aceaa681aa8898c544957a0d960d76d75f90e43db9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b247538c15b117fed42eda6bd1973f0ec77f0896d2f7a0a7434fb5dcafa648a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b247538c15b117fed42eda6bd1973f0ec77f0896d2f7a0a7434fb5dcafa648a->enter($__internal_3b247538c15b117fed42eda6bd1973f0ec77f0896d2f7a0a7434fb5dcafa648a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d6447959a05d188d360288b594b1bbc3b1224a4a0011deea9bf3e48a24f5d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6447959a05d188d360288b594b1bbc3b1224a4a0011deea9bf3e48a24f5d94->enter($__internal_4d6447959a05d188d360288b594b1bbc3b1224a4a0011deea9bf3e48a24f5d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4d6447959a05d188d360288b594b1bbc3b1224a4a0011deea9bf3e48a24f5d94->leave($__internal_4d6447959a05d188d360288b594b1bbc3b1224a4a0011deea9bf3e48a24f5d94_prof);

        
        $__internal_3b247538c15b117fed42eda6bd1973f0ec77f0896d2f7a0a7434fb5dcafa648a->leave($__internal_3b247538c15b117fed42eda6bd1973f0ec77f0896d2f7a0a7434fb5dcafa648a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29e7093dc4ea54b53140addac414ca4e0909f67260d7e87f6caacc0194a8019e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e7093dc4ea54b53140addac414ca4e0909f67260d7e87f6caacc0194a8019e->enter($__internal_29e7093dc4ea54b53140addac414ca4e0909f67260d7e87f6caacc0194a8019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a73d63976e7d8817ae8bb11a1b1dbf9b62a91e7a33fefcfeeb9d0642b784c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a73d63976e7d8817ae8bb11a1b1dbf9b62a91e7a33fefcfeeb9d0642b784c97->enter($__internal_5a73d63976e7d8817ae8bb11a1b1dbf9b62a91e7a33fefcfeeb9d0642b784c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5a73d63976e7d8817ae8bb11a1b1dbf9b62a91e7a33fefcfeeb9d0642b784c97->leave($__internal_5a73d63976e7d8817ae8bb11a1b1dbf9b62a91e7a33fefcfeeb9d0642b784c97_prof);

        
        $__internal_29e7093dc4ea54b53140addac414ca4e0909f67260d7e87f6caacc0194a8019e->leave($__internal_29e7093dc4ea54b53140addac414ca4e0909f67260d7e87f6caacc0194a8019e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74b59513a4c6f82eca7fd1d9d531a9d4649b6bee746bb3cadb9cfa93256e17ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b59513a4c6f82eca7fd1d9d531a9d4649b6bee746bb3cadb9cfa93256e17ff->enter($__internal_74b59513a4c6f82eca7fd1d9d531a9d4649b6bee746bb3cadb9cfa93256e17ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ade2f49dfecb79e19228605019d678afd8733b01116e724b519e0d2495312a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ade2f49dfecb79e19228605019d678afd8733b01116e724b519e0d2495312a3->enter($__internal_3ade2f49dfecb79e19228605019d678afd8733b01116e724b519e0d2495312a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3ade2f49dfecb79e19228605019d678afd8733b01116e724b519e0d2495312a3->leave($__internal_3ade2f49dfecb79e19228605019d678afd8733b01116e724b519e0d2495312a3_prof);

        
        $__internal_74b59513a4c6f82eca7fd1d9d531a9d4649b6bee746bb3cadb9cfa93256e17ff->leave($__internal_74b59513a4c6f82eca7fd1d9d531a9d4649b6bee746bb3cadb9cfa93256e17ff_prof);

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
