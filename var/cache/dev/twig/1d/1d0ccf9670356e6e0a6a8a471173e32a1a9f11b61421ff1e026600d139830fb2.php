<?php

/* @Admin/Atividade/add.html.twig */
class __TwigTemplate_6255b1aa1f84fdcdb580dbc60b7095a6490f3ba3cfce2400294645db9ea5508b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Atividade/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9b7605c4127697abf896a8b88f8d27d41e45dcf999a08f5e1f1126e0793efb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b7605c4127697abf896a8b88f8d27d41e45dcf999a08f5e1f1126e0793efb4->enter($__internal_e9b7605c4127697abf896a8b88f8d27d41e45dcf999a08f5e1f1126e0793efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Atividade/add.html.twig"));

        $__internal_e4895045134c26c9385afb18e0bf7db5faa6e670400814f99bf1d6b0cfc81de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4895045134c26c9385afb18e0bf7db5faa6e670400814f99bf1d6b0cfc81de6->enter($__internal_e4895045134c26c9385afb18e0bf7db5faa6e670400814f99bf1d6b0cfc81de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Atividade/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b7605c4127697abf896a8b88f8d27d41e45dcf999a08f5e1f1126e0793efb4->leave($__internal_e9b7605c4127697abf896a8b88f8d27d41e45dcf999a08f5e1f1126e0793efb4_prof);

        
        $__internal_e4895045134c26c9385afb18e0bf7db5faa6e670400814f99bf1d6b0cfc81de6->leave($__internal_e4895045134c26c9385afb18e0bf7db5faa6e670400814f99bf1d6b0cfc81de6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15dd58f037d28d4a8cf151493714aaad02e5d7ce5fb3ab8edaa7648c25125cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dd58f037d28d4a8cf151493714aaad02e5d7ce5fb3ab8edaa7648c25125cd3->enter($__internal_15dd58f037d28d4a8cf151493714aaad02e5d7ce5fb3ab8edaa7648c25125cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f1393249299e034b27d81950fa7caf83e7682db816b502cbecf77488914e278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1393249299e034b27d81950fa7caf83e7682db816b502cbecf77488914e278->enter($__internal_5f1393249299e034b27d81950fa7caf83e7682db816b502cbecf77488914e278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Objeto</h3>
        </div>
        <div class=\"box-body\">
            <div class=\" col-lg-7\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                <a class=\"btn btn-info\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade");
        echo "\">Voltar</a>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5f1393249299e034b27d81950fa7caf83e7682db816b502cbecf77488914e278->leave($__internal_5f1393249299e034b27d81950fa7caf83e7682db816b502cbecf77488914e278_prof);

        
        $__internal_15dd58f037d28d4a8cf151493714aaad02e5d7ce5fb3ab8edaa7648c25125cd3->leave($__internal_15dd58f037d28d4a8cf151493714aaad02e5d7ce5fb3ab8edaa7648c25125cd3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Atividade/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  68 => 15,  62 => 12,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Objeto</h3>
        </div>
        <div class=\"box-body\">
            <div class=\" col-lg-7\">
                {{ form_start(form) }}

                {{ form_widget(form) }}

                <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                <a class=\"btn btn-info\" href=\"{{ path('atividade') }}\">Voltar</a>
                {{ form_end(form)}}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/Atividade/add.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Atividade\\add.html.twig");
    }
}
