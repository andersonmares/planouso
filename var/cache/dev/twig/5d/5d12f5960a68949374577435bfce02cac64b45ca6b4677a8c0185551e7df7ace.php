<?php

/* @Admin\Importacao\index.html.twig */
class __TwigTemplate_5169c3e4abbdeaa151d19c1ba0f9e63ad4d7ded9a808be9938aa839d2a6e7a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Importacao\\index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_84da4ca1cb39a30be2aedccfaa6800e489c46651f7ee8c2db2103c8fbf4419ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84da4ca1cb39a30be2aedccfaa6800e489c46651f7ee8c2db2103c8fbf4419ee->enter($__internal_84da4ca1cb39a30be2aedccfaa6800e489c46651f7ee8c2db2103c8fbf4419ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\Importacao\\index.html.twig"));

        $__internal_ac103aa55abafd2e9e7fc35d4489b3de100f875f7e4db1325495e4ecea7b77bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac103aa55abafd2e9e7fc35d4489b3de100f875f7e4db1325495e4ecea7b77bc->enter($__internal_ac103aa55abafd2e9e7fc35d4489b3de100f875f7e4db1325495e4ecea7b77bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\Importacao\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84da4ca1cb39a30be2aedccfaa6800e489c46651f7ee8c2db2103c8fbf4419ee->leave($__internal_84da4ca1cb39a30be2aedccfaa6800e489c46651f7ee8c2db2103c8fbf4419ee_prof);

        
        $__internal_ac103aa55abafd2e9e7fc35d4489b3de100f875f7e4db1325495e4ecea7b77bc->leave($__internal_ac103aa55abafd2e9e7fc35d4489b3de100f875f7e4db1325495e4ecea7b77bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6d01f0b195a81de74784dfb6a7995be084f1c1d399f360aa46a58902c7be6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d01f0b195a81de74784dfb6a7995be084f1c1d399f360aa46a58902c7be6c7->enter($__internal_a6d01f0b195a81de74784dfb6a7995be084f1c1d399f360aa46a58902c7be6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d90e46d3fd8fe58e4fdeaf1d38819526c99684a0c7937b151a23f44677f61783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90e46d3fd8fe58e4fdeaf1d38819526c99684a0c7937b151a23f44677f61783->enter($__internal_d90e46d3fd8fe58e4fdeaf1d38819526c99684a0c7937b151a23f44677f61783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Importacao:index";
        
        $__internal_d90e46d3fd8fe58e4fdeaf1d38819526c99684a0c7937b151a23f44677f61783->leave($__internal_d90e46d3fd8fe58e4fdeaf1d38819526c99684a0c7937b151a23f44677f61783_prof);

        
        $__internal_a6d01f0b195a81de74784dfb6a7995be084f1c1d399f360aa46a58902c7be6c7->leave($__internal_a6d01f0b195a81de74784dfb6a7995be084f1c1d399f360aa46a58902c7be6c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e8e4b6fa76af77f81b0cb17baadafe1a4484cd77a7bd8ff4eca7f18c11eb125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8e4b6fa76af77f81b0cb17baadafe1a4484cd77a7bd8ff4eca7f18c11eb125->enter($__internal_6e8e4b6fa76af77f81b0cb17baadafe1a4484cd77a7bd8ff4eca7f18c11eb125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb47c30b403dc4337ba33436ccb7efb7a0376e4375d9a9b3049eb44bb237fff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb47c30b403dc4337ba33436ccb7efb7a0376e4375d9a9b3049eb44bb237fff3->enter($__internal_cb47c30b403dc4337ba33436ccb7efb7a0376e4375d9a9b3049eb44bb237fff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-file-excel-o\"></span> Importação de arquivos</h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpPlanilha", array()), 'label');
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpPlanilha", array()), 'errors');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpPlanilha", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'errors');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "planilha", array()), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "planilha", array()), 'errors');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "planilha", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success\">Importar Planilha</button>
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

             <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <br />
                    <label>Modelo dos arquivos:</label><br />
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("doc/layout_acaoorcamentaria.xlsx"), "html", null, true);
        echo "\"><span class=\"fa fa-file-excel-o\"></span> Execução Orçamentária</a>
                </div>
             </div>

        </div>
    </div>

    ";
        // line 51
        echo ($context["erros"] ?? $this->getContext($context, "erros"));
        echo "

    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Histórico de planilhas importadas</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rsHistorico"] ?? $this->getContext($context, "rsHistorico")));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 73
            echo "                    <tr>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "nuAnoExercicio", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "dsTipoPlanilha", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "noArquivo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "noPlanilha", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "noPessoaFisica", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["h"], "dtCadastro", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>
                            Lidos: ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "qtRegistro", array()), "html", null, true);
            echo "<br />
                            Novos: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "qtRegistroNovo", array()), "html", null, true);
            echo "<br />
                            Atualizados: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "qtRegistroAtualizado", array()), "html", null, true);
            echo "<br />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>

";
        
        $__internal_cb47c30b403dc4337ba33436ccb7efb7a0376e4375d9a9b3049eb44bb237fff3->leave($__internal_cb47c30b403dc4337ba33436ccb7efb7a0376e4375d9a9b3049eb44bb237fff3_prof);

        
        $__internal_6e8e4b6fa76af77f81b0cb17baadafe1a4484cd77a7bd8ff4eca7f18c11eb125->leave($__internal_6e8e4b6fa76af77f81b0cb17baadafe1a4484cd77a7bd8ff4eca7f18c11eb125_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21c28e621efaf69b24bb842e44ca6efedaf53044dec65203d10bf997b5ebb2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c28e621efaf69b24bb842e44ca6efedaf53044dec65203d10bf997b5ebb2b8->enter($__internal_21c28e621efaf69b24bb842e44ca6efedaf53044dec65203d10bf997b5ebb2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_046c39e72370047fd56f56134817489ab7f1da4bb6644132941057cf32e99312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046c39e72370047fd56f56134817489ab7f1da4bb6644132941057cf32e99312->enter($__internal_046c39e72370047fd56f56134817489ab7f1da4bb6644132941057cf32e99312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    <script>
        \$(function () {

            var table =  \$('#lista').DataTable({
                \"autoWidth\": true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });

            table.columns.adjust().draw();
        })


    </script>
";
        
        $__internal_046c39e72370047fd56f56134817489ab7f1da4bb6644132941057cf32e99312->leave($__internal_046c39e72370047fd56f56134817489ab7f1da4bb6644132941057cf32e99312_prof);

        
        $__internal_21c28e621efaf69b24bb842e44ca6efedaf53044dec65203d10bf997b5ebb2b8->leave($__internal_21c28e621efaf69b24bb842e44ca6efedaf53044dec65203d10bf997b5ebb2b8_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Importacao\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 107,  256 => 106,  229 => 87,  219 => 83,  215 => 82,  211 => 81,  206 => 79,  202 => 78,  198 => 77,  194 => 76,  190 => 75,  186 => 74,  183 => 73,  179 => 72,  155 => 51,  145 => 44,  136 => 38,  130 => 35,  123 => 31,  119 => 30,  115 => 29,  107 => 24,  103 => 23,  99 => 22,  91 => 17,  87 => 16,  83 => 15,  76 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}AdminBundle:Importacao:index{% endblock %}

{% block body %}
    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-file-excel-o\"></span> Importação de arquivos</h3>
        </div>
        <div class=\"box-body\">
            {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tpPlanilha) }}
                        {{ form_errors(form.tpPlanilha) }}
                        {{ form_widget(form.tpPlanilha) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuAnoExercicio) }}
                        {{ form_errors(form.nuAnoExercicio) }}
                        {{ form_widget(form.nuAnoExercicio) }}
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.planilha) }}
                        {{ form_errors(form.planilha) }}
                        {{ form_widget(form.planilha) }}
                    </div>
                </div>
            </div>
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success\">Importar Planilha</button>
            {{ form_end(form)}}

             <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <br />
                    <label>Modelo dos arquivos:</label><br />
                    <a href=\"{{ asset('doc/layout_acaoorcamentaria.xlsx') }}\"><span class=\"fa fa-file-excel-o\"></span> Execução Orçamentária</a>
                </div>
             </div>

        </div>
    </div>

    {{ erros | raw }}

    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Histórico de planilhas importadas</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </thead>
                <tbody>
                {% for h in rsHistorico %}
                    <tr>
                        <td>{{ h.nuAnoExercicio }}</td>
                        <td>{{ h.dsTipoPlanilha }}</td>
                        <td>{{ h.noArquivo }}</td>
                        <td>{{ h.noPlanilha }}</td>
                        <td>{{ h.noPessoaFisica }}</td>
                        <td>{{ h.dtCadastro|date(\"d/m/Y H:i:s\") }}</td>
                        <td>
                            Lidos: {{ h.qtRegistro }}<br />
                            Novos: {{ h.qtRegistroNovo }}<br />
                            Atualizados: {{ h.qtRegistroAtualizado }}<br />
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(function () {

            var table =  \$('#lista').DataTable({
                \"autoWidth\": true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });

            table.columns.adjust().draw();
        })


    </script>
{% endblock %}", "@Admin\\Importacao\\index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Importacao\\index.html.twig");
    }
}
