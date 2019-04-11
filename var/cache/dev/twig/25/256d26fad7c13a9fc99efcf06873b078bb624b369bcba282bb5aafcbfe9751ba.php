<?php

/* @Admin/Departamento/add.html.twig */
class __TwigTemplate_b706a1dc11dcf0495783663c2bfb5fd1a25b190b6c3756877f919dd6a1a22a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Departamento/add.html.twig", 1);
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
        $__internal_615cf830ee45a7d9a0f81eff40361403388ab16be65ba23fe85d4bd6dbb4d5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615cf830ee45a7d9a0f81eff40361403388ab16be65ba23fe85d4bd6dbb4d5ae->enter($__internal_615cf830ee45a7d9a0f81eff40361403388ab16be65ba23fe85d4bd6dbb4d5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Departamento/add.html.twig"));

        $__internal_a73be67ba212118ba4adb38bc6b043dd35be95caab2f8482114a978f0bba8b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73be67ba212118ba4adb38bc6b043dd35be95caab2f8482114a978f0bba8b12->enter($__internal_a73be67ba212118ba4adb38bc6b043dd35be95caab2f8482114a978f0bba8b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Departamento/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615cf830ee45a7d9a0f81eff40361403388ab16be65ba23fe85d4bd6dbb4d5ae->leave($__internal_615cf830ee45a7d9a0f81eff40361403388ab16be65ba23fe85d4bd6dbb4d5ae_prof);

        
        $__internal_a73be67ba212118ba4adb38bc6b043dd35be95caab2f8482114a978f0bba8b12->leave($__internal_a73be67ba212118ba4adb38bc6b043dd35be95caab2f8482114a978f0bba8b12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cbbafa1402d948a08d70c09b197eeec9dee4af663748a1b66120e01c70240c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbbafa1402d948a08d70c09b197eeec9dee4af663748a1b66120e01c70240c3->enter($__internal_6cbbafa1402d948a08d70c09b197eeec9dee4af663748a1b66120e01c70240c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92e6a89d5ee9f9a0b62930666f6906802e5ccf860ac394078dd2c21b0885a1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e6a89d5ee9f9a0b62930666f6906802e5ccf860ac394078dd2c21b0885a1f7->enter($__internal_92e6a89d5ee9f9a0b62930666f6906802e5ccf860ac394078dd2c21b0885a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-bank\"></span> Departamentos</h3>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento");
        echo "\">Voltar</a>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_92e6a89d5ee9f9a0b62930666f6906802e5ccf860ac394078dd2c21b0885a1f7->leave($__internal_92e6a89d5ee9f9a0b62930666f6906802e5ccf860ac394078dd2c21b0885a1f7_prof);

        
        $__internal_6cbbafa1402d948a08d70c09b197eeec9dee4af663748a1b66120e01c70240c3->leave($__internal_6cbbafa1402d948a08d70c09b197eeec9dee4af663748a1b66120e01c70240c3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Departamento/add.html.twig";
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
            <h3 class=\"box-title\"><span class=\"fa fa-bank\"></span> Departamentos</h3>
        </div>
        <div class=\"box-body\">
            <div class=\" col-lg-7\">
                {{ form_start(form) }}

                {{ form_widget(form) }}

                <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                <a class=\"btn btn-info\" href=\"{{ path('departamento') }}\">Voltar</a>
                {{ form_end(form)}}
            </div>
        </div>
    </div>

{% endblock %}", "@Admin/Departamento/add.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Departamento\\add.html.twig");
    }
}
