<?php

/* RelatorioBundle:Default:index.html.twig */
class __TwigTemplate_1a5e896eb22d71181a8299e6d1477026c764e00c780f1b47c74f8733343d3854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RelatorioBundle:Default:index.html.twig", 1);
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
        $__internal_99f876db80a2fba330c756be1bca2806ffa4f9d8f98dc32ba36f5455a8c10fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f876db80a2fba330c756be1bca2806ffa4f9d8f98dc32ba36f5455a8c10fd3->enter($__internal_99f876db80a2fba330c756be1bca2806ffa4f9d8f98dc32ba36f5455a8c10fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RelatorioBundle:Default:index.html.twig"));

        $__internal_31206d494ab392033b1c246f2ff73d2ac2f11ec1fe178d6c52df497769668545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31206d494ab392033b1c246f2ff73d2ac2f11ec1fe178d6c52df497769668545->enter($__internal_31206d494ab392033b1c246f2ff73d2ac2f11ec1fe178d6c52df497769668545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RelatorioBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f876db80a2fba330c756be1bca2806ffa4f9d8f98dc32ba36f5455a8c10fd3->leave($__internal_99f876db80a2fba330c756be1bca2806ffa4f9d8f98dc32ba36f5455a8c10fd3_prof);

        
        $__internal_31206d494ab392033b1c246f2ff73d2ac2f11ec1fe178d6c52df497769668545->leave($__internal_31206d494ab392033b1c246f2ff73d2ac2f11ec1fe178d6c52df497769668545_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_034d368e742645212eaef5413fe48b34d1cb1cca5f6e037f14b1111a5a2f51ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034d368e742645212eaef5413fe48b34d1cb1cca5f6e037f14b1111a5a2f51ad->enter($__internal_034d368e742645212eaef5413fe48b34d1cb1cca5f6e037f14b1111a5a2f51ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e68b2d475df2693db28ca111f7b0a098ff5f590fb869cb4bcf39ac2059ca956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e68b2d475df2693db28ca111f7b0a098ff5f590fb869cb4bcf39ac2059ca956->enter($__internal_2e68b2d475df2693db28ca111f7b0a098ff5f590fb869cb4bcf39ac2059ca956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div class=\"box box-success box-solid\">
          <div class=\"box-header with-border\">
               <h3 class=\"box-title fa fa-file-excel-o\"> Relatório</h3>
          </div>
          <div class=\"box-body\">
               ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
               <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                         <div class=\"form-group\">
                         ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpRelatorio", array()), 'label');
        echo "
                         ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpRelatorio", array()), 'errors');
        echo "
                         ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpRelatorio", array()), 'widget');
        echo "
                         </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                         <div class=\"form-group\">
                         ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'label');
        echo "
                         ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'errors');
        echo "
                         ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'widget');
        echo "
                         </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                         <div class=\"form-group\">
                         ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpExibicao", array()), 'label');
        echo "
                         ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpExibicao", array()), 'errors');
        echo "
                         ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpExibicao", array()), 'widget');
        echo "
                         </div>
                    </div>
               </div>
               <button type=\"submit\" class=\"btn btn-success\">Gerar Relatório</button>
               ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
     </div>
";
        
        $__internal_2e68b2d475df2693db28ca111f7b0a098ff5f590fb869cb4bcf39ac2059ca956->leave($__internal_2e68b2d475df2693db28ca111f7b0a098ff5f590fb869cb4bcf39ac2059ca956_prof);

        
        $__internal_034d368e742645212eaef5413fe48b34d1cb1cca5f6e037f14b1111a5a2f51ad->leave($__internal_034d368e742645212eaef5413fe48b34d1cb1cca5f6e037f14b1111a5a2f51ad_prof);

    }

    public function getTemplateName()
    {
        return "RelatorioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  103 => 29,  99 => 28,  95 => 27,  87 => 22,  83 => 21,  79 => 20,  71 => 15,  67 => 14,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
               <h3 class=\"box-title fa fa-file-excel-o\"> Relatório</h3>
          </div>
          <div class=\"box-body\">
               {{ form_start(form) }}
               <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                         <div class=\"form-group\">
                         {{ form_label(form.tpRelatorio) }}
                         {{ form_errors(form.tpRelatorio) }}
                         {{ form_widget(form.tpRelatorio) }}
                         </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                         <div class=\"form-group\">
                         {{ form_label(form.nuAnoExercicio) }}
                         {{ form_errors(form.nuAnoExercicio) }}
                         {{ form_widget(form.nuAnoExercicio) }}
                         </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                         <div class=\"form-group\">
                         {{ form_label(form.tpExibicao) }}
                         {{ form_errors(form.tpExibicao) }}
                         {{ form_widget(form.tpExibicao) }}
                         </div>
                    </div>
               </div>
               <button type=\"submit\" class=\"btn btn-success\">Gerar Relatório</button>
               {{ form_end(form) }}
          </div>
     </div>
{% endblock %}", "RelatorioBundle:Default:index.html.twig", "D:\\planouso\\src\\Planodeuso\\RelatorioBundle/Resources/views/Default/index.html.twig");
    }
}
