<?php

/* @Admin/Processamento/index.html.twig */
class __TwigTemplate_993e6c3e3f6d89c54983f8f6cf543d90849b3fb0333c85527b15fd051813dc8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Processamento/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_340ed399aa2665b70077b6a7efea38b8d33c7cb25f977a0b930852969d29a1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340ed399aa2665b70077b6a7efea38b8d33c7cb25f977a0b930852969d29a1c8->enter($__internal_340ed399aa2665b70077b6a7efea38b8d33c7cb25f977a0b930852969d29a1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/index.html.twig"));

        $__internal_0cf58b4ea0f8488651902d0e13327310573b1dedc2f50278fc013dd4f54b74b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf58b4ea0f8488651902d0e13327310573b1dedc2f50278fc013dd4f54b74b5->enter($__internal_0cf58b4ea0f8488651902d0e13327310573b1dedc2f50278fc013dd4f54b74b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340ed399aa2665b70077b6a7efea38b8d33c7cb25f977a0b930852969d29a1c8->leave($__internal_340ed399aa2665b70077b6a7efea38b8d33c7cb25f977a0b930852969d29a1c8_prof);

        
        $__internal_0cf58b4ea0f8488651902d0e13327310573b1dedc2f50278fc013dd4f54b74b5->leave($__internal_0cf58b4ea0f8488651902d0e13327310573b1dedc2f50278fc013dd4f54b74b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15982ff93040febe8d962077c78e2c674da5cc559f6e9e846ec114b7ac5bca84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15982ff93040febe8d962077c78e2c674da5cc559f6e9e846ec114b7ac5bca84->enter($__internal_15982ff93040febe8d962077c78e2c674da5cc559f6e9e846ec114b7ac5bca84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdfc4b3f6d11540310985b21a7199052c1933f366e3ccef6fe4b79f14ba57fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfc4b3f6d11540310985b21a7199052c1933f366e3ccef6fe4b79f14ba57fe0->enter($__internal_fdfc4b3f6d11540310985b21a7199052c1933f366e3ccef6fe4b79f14ba57fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Processamento CGPO</h3>
        </div>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"table-responsive\">
            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'label');
        echo "
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'errors');
        echo "
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPlanoOrcamentario", array()), 'label');
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPlanoOrcamentario", array()), 'errors');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPlanoOrcamentario", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsTipoDespesa", array()), 'label');
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsTipoDespesa", array()), 'errors');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsTipoDespesa", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'label');
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'errors');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coDepartamento", array()), 'label');
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coDepartamento", array()), 'errors');
        echo "
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coDepartamento", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsDescicao", array()), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsDescicao", array()), 'errors');
        echo "
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsDescicao", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "btnPesquisar", array()), 'widget', array("label" => "Pesquisar"));
        echo "
                        <a class=\"btn btn-primary\">Voltar</a>
                    </div>
                </div>
                <br>
                <table id=\"lista\" class=\"table table-bordered table-hover\">
                    <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Ação/PO</th>
                        <th>Tipo de Despesa</th>
                        <th>Descrição do PO</th>
                        <th>Dotação Atualizada</th>
                        <th>Saldo</th>
                        <th>Selecionar Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["acaoorcamentaria"] ?? $this->getContext($context, "acaoorcamentaria")));
        foreach ($context['_seq'] as $context["_key"] => $context["acao"]) {
            // line 76
            echo "                          <tr>
                           <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["acao"], "sgDepartamento", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["acao"], "nuAcaoOrcamentaria", array()), "html", null, true);
            echo " -  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["acao"], "nuPlanoOrcamentario", array()), "html", null, true);
            echo " </td>
                           <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["acao"], "dsTipoDespesa", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["acao"], "dsDenominacao", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["acao"], "sgDepartamento", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["acao"], "vlSaldo", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                           <td><a class=\"btn btn-primary\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_acao", array("id" => $this->getAttribute($context["acao"], "id", array()))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\">
                                   </li>
                               </a>
                           </td>

                          </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    </tbody>

                </table>

            </div>
        </div>
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_fdfc4b3f6d11540310985b21a7199052c1933f366e3ccef6fe4b79f14ba57fe0->leave($__internal_fdfc4b3f6d11540310985b21a7199052c1933f366e3ccef6fe4b79f14ba57fe0_prof);

        
        $__internal_15982ff93040febe8d962077c78e2c674da5cc559f6e9e846ec114b7ac5bca84->leave($__internal_15982ff93040febe8d962077c78e2c674da5cc559f6e9e846ec114b7ac5bca84_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14b79eaffa456462703be384cb07beff264fcda8b0ea7e0abb0fb4ce6857bbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b79eaffa456462703be384cb07beff264fcda8b0ea7e0abb0fb4ce6857bbc0->enter($__internal_14b79eaffa456462703be384cb07beff264fcda8b0ea7e0abb0fb4ce6857bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc74374dd76d97c19155069f51577383337ecc0f6aa08b1daef62129521f5fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc74374dd76d97c19155069f51577383337ecc0f6aa08b1daef62129521f5fa7->enter($__internal_cc74374dd76d97c19155069f51577383337ecc0f6aa08b1daef62129521f5fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    <script>
        \$(function () {
            \$lista = \$('#lista').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                ";
        // line 107
        if ( !(null === ($context["nuAno"] ?? $this->getContext($context, "nuAno")))) {
            // line 108
            echo "              //  \"ajax\": Routing.generate('json_lista_processamento', {'anoExercicio':";
            echo twig_escape_filter($this->env, ($context["nuAno"] ?? $this->getContext($context, "nuAno")), "html", null, true);
            echo " }), ";
        }
        // line 109
        echo "                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                \"bProcessing\": true,

            });

            \$(\"#btnPesquisarProcessamento\").click(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url(Routing.generate('json_lista_processamento', {
                        'departamento': \$(\"#departamento\").val(),
                        'anoExercicio': \$(\"#IdAnoExercicio\").val(),
                        'acaoOrcamentaria': \$(\"#acaoOrcamentaria\").val()
                    })).load();
                }
            });

        });
    </script>
";
        
        $__internal_cc74374dd76d97c19155069f51577383337ecc0f6aa08b1daef62129521f5fa7->leave($__internal_cc74374dd76d97c19155069f51577383337ecc0f6aa08b1daef62129521f5fa7_prof);

        
        $__internal_14b79eaffa456462703be384cb07beff264fcda8b0ea7e0abb0fb4ce6857bbc0->leave($__internal_14b79eaffa456462703be384cb07beff264fcda8b0ea7e0abb0fb4ce6857bbc0_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Processamento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 109,  270 => 108,  268 => 107,  260 => 101,  251 => 100,  238 => 97,  230 => 91,  216 => 83,  212 => 82,  208 => 81,  204 => 80,  200 => 79,  194 => 78,  190 => 77,  187 => 76,  183 => 75,  162 => 57,  153 => 51,  149 => 50,  145 => 49,  135 => 42,  131 => 41,  127 => 40,  117 => 33,  113 => 32,  109 => 31,  102 => 27,  98 => 26,  94 => 25,  88 => 22,  84 => 21,  80 => 20,  73 => 16,  69 => 15,  65 => 14,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Processamento CGPO</h3>
        </div>
        {{ form_start(form) }}
        <div class=\"table-responsive\">
            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            {{ form_label(form.nuAnoExercicio) }}
                            {{ form_errors(form.nuAnoExercicio) }}
                            {{ form_widget(form.nuAnoExercicio) }}
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        {{ form_label(form.nuPlanoOrcamentario) }}
                        {{ form_errors(form.nuPlanoOrcamentario) }}
                        {{ form_widget(form.nuPlanoOrcamentario) }}
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        {{ form_label(form.dsTipoDespesa) }}
                        {{ form_errors(form.dsTipoDespesa) }}
                        {{ form_widget(form.dsTipoDespesa) }}
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            {{ form_label(form.nuProposta) }}
                            {{ form_errors(form.nuProposta) }}
                            {{ form_widget(form.nuProposta) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            {{ form_label(form.coDepartamento) }}
                            {{ form_errors(form.coDepartamento) }}
                            {{ form_widget(form.coDepartamento) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            {{ form_label(form.dsDescicao) }}
                            {{ form_errors(form.dsDescicao) }}
                            {{ form_widget(form.dsDescicao) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        {{ form_widget(form.btnPesquisar, { 'label': 'Pesquisar'  }) }}
                        <a class=\"btn btn-primary\">Voltar</a>
                    </div>
                </div>
                <br>
                <table id=\"lista\" class=\"table table-bordered table-hover\">
                    <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Ação/PO</th>
                        <th>Tipo de Despesa</th>
                        <th>Descrição do PO</th>
                        <th>Dotação Atualizada</th>
                        <th>Saldo</th>
                        <th>Selecionar Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                        {% for acao in acaoorcamentaria %}
                          <tr>
                           <td>{{ acao.sgDepartamento }}</td>
                           <td>{{ acao.nuAcaoOrcamentaria  }} -  {{ acao.nuPlanoOrcamentario}} </td>
                           <td>{{ acao.dsTipoDespesa }}</td>
                           <td>{{ acao.dsDenominacao }}</td>
                           <td>{{ acao.sgDepartamento }}</td>
                           <td>{{ (acao.vlSaldo)|number_format(2,',','.') }}</td>
                           <td><a class=\"btn btn-primary\" href=\"{{ path('processamento_acao', {'id': acao.id }) }}\"><li class=\"fa fa-edit\">
                                   </li>
                               </a>
                           </td>

                          </tr>

                        {% endfor %}
                    </tbody>

                </table>

            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        \$(function () {
            \$lista = \$('#lista').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                {% if nuAno is not null %}
              //  \"ajax\": Routing.generate('json_lista_processamento', {'anoExercicio':{{ nuAno }} }), {% endif %}
                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                \"bProcessing\": true,

            });

            \$(\"#btnPesquisarProcessamento\").click(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url(Routing.generate('json_lista_processamento', {
                        'departamento': \$(\"#departamento\").val(),
                        'anoExercicio': \$(\"#IdAnoExercicio\").val(),
                        'acaoOrcamentaria': \$(\"#acaoOrcamentaria\").val()
                    })).load();
                }
            });

        });
    </script>
{% endblock %}", "@Admin/Processamento/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\index.html.twig");
    }
}
