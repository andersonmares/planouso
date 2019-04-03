<?php

/* @Atividade/default/index.html.twig */
class __TwigTemplate_3c53fe6a0e6c699f1f84a5bdd79ef6893baff445dd48ff9fe741a74cdbb19b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Atividade/default/index.html.twig", 1);
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
        $__internal_4fcde70368bde1f14fc6c9109a623b79a35f2717bb0fd44adb71cfff348ed12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcde70368bde1f14fc6c9109a623b79a35f2717bb0fd44adb71cfff348ed12b->enter($__internal_4fcde70368bde1f14fc6c9109a623b79a35f2717bb0fd44adb71cfff348ed12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/index.html.twig"));

        $__internal_f403059daf64739aff6707beef0bfa2d74da36f12bfaf785cb2743c771df891c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f403059daf64739aff6707beef0bfa2d74da36f12bfaf785cb2743c771df891c->enter($__internal_f403059daf64739aff6707beef0bfa2d74da36f12bfaf785cb2743c771df891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcde70368bde1f14fc6c9109a623b79a35f2717bb0fd44adb71cfff348ed12b->leave($__internal_4fcde70368bde1f14fc6c9109a623b79a35f2717bb0fd44adb71cfff348ed12b_prof);

        
        $__internal_f403059daf64739aff6707beef0bfa2d74da36f12bfaf785cb2743c771df891c->leave($__internal_f403059daf64739aff6707beef0bfa2d74da36f12bfaf785cb2743c771df891c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26023163e9d5783d957bd9070cfc2f663b2395d0cbb0f2761a13ad38b833862b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26023163e9d5783d957bd9070cfc2f663b2395d0cbb0f2761a13ad38b833862b->enter($__internal_26023163e9d5783d957bd9070cfc2f663b2395d0cbb0f2761a13ad38b833862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12af80efc773277ae41267012a7b5cdecbf743126ade21740192e11d2c69446a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12af80efc773277ae41267012a7b5cdecbf743126ade21740192e11d2c69446a->enter($__internal_12af80efc773277ae41267012a7b5cdecbf743126ade21740192e11d2c69446a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-usd\"></span> Ação Orçamentária</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\" >
            <label>Ano de Exercício:</label>
            <select name=\"nuAnoExercicio\" id=\"IdAnoExercicio\">
                <option value=\"\">Selecione o Ano</option>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anoExercicio"] ?? $this->getContext($context, "anoExercicio")));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            // line 15
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ano"], "nuAnoExercicio", array()), "html", null, true);
            echo "\"";
            if ((($context["nuAno"] ?? $this->getContext($context, "nuAno")) == $this->getAttribute($context["ano"], "nuAnoExercicio", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ano"], "labelAnoExercicio", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </select>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Ação/PO</th>
                    <th>Denominação</th>
                    <th>Despesa</th>
                    <th>Valor Atualizado</th>
                    <th>Valor Utilizado</th>
                    <th>Saldo disponivel</th>
                    <!-- <th>Atividades<br />Cadastradas</th> -->
                    <th>Itens<br />Cadastrados</th>
                    <th>Selecionar<br />Ação/PO</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Ação/PO</th>
                    <th>Denominação</th>
                    <th>Despesa</th>
                    <th>Valor Atualizado</th>
                    <th>Valor Utilizado</th>
                    <th>Saldo disponivel</th>
                    <th>Atividades<br />Cadastradas</th>
                    <th>Selecionar<br />Ação/Plano</th>
                </tr>
                </tfoot>
                -->

            </table>

        </div>
        </div>
    </div>
";
        
        $__internal_12af80efc773277ae41267012a7b5cdecbf743126ade21740192e11d2c69446a->leave($__internal_12af80efc773277ae41267012a7b5cdecbf743126ade21740192e11d2c69446a_prof);

        
        $__internal_26023163e9d5783d957bd9070cfc2f663b2395d0cbb0f2761a13ad38b833862b->leave($__internal_26023163e9d5783d957bd9070cfc2f663b2395d0cbb0f2761a13ad38b833862b_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24c6d385411df485b29177855b7213bed32cdfff215e1b2b630d65ac8d419b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c6d385411df485b29177855b7213bed32cdfff215e1b2b630d65ac8d419b34->enter($__internal_24c6d385411df485b29177855b7213bed32cdfff215e1b2b630d65ac8d419b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3b01bc689608c2f9fd504a83e235992cf46924cec7bfff858e9994bb295abfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b01bc689608c2f9fd504a83e235992cf46924cec7bfff858e9994bb295abfb7->enter($__internal_3b01bc689608c2f9fd504a83e235992cf46924cec7bfff858e9994bb295abfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <script>
        \$(function () {

            \$lista = \$('#lista').DataTable( {
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                \"bProcessing\": true,
                ";
        // line 74
        if ( !(null === ($context["nuAno"] ?? $this->getContext($context, "nuAno")))) {
            echo "  \"ajax\": Routing.generate('json_plano_lista_acao', {'anoExercicio':";
            echo twig_escape_filter($this->env, ($context["nuAno"] ?? $this->getContext($context, "nuAno")), "html", null, true);
            echo " }), ";
        }
        // line 75
        echo "                \"aoColumns\" : [
                    //{ \"mData\": 0 }, Código da tabela no banco
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 6 },
                    { \"mData\": 7 },
                    { \"mData\": 8 },
                    { \"mData\": 9 },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            if (full[1] >= ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ") {
                                return '<a class=\"btn btn-success\" href=\"' + Routing.generate('planodeuso_acao', {'id': full[0]}) + '\"><li class=\"fa fa-edit\"> </li></a>';
                            }else{
                                return '-';
                            }
                        }
                    },
                ]
            } );

            \$(\"#IdAnoExercicio\").change(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url( Routing.generate('json_plano_lista_acao', {'anoExercicio': \$(\"#IdAnoExercicio\").val()}) ).load();
                }else{
                    \$lista.clear().draw();
                }
            });
        })
    </script>
";
        
        $__internal_3b01bc689608c2f9fd504a83e235992cf46924cec7bfff858e9994bb295abfb7->leave($__internal_3b01bc689608c2f9fd504a83e235992cf46924cec7bfff858e9994bb295abfb7_prof);

        
        $__internal_24c6d385411df485b29177855b7213bed32cdfff215e1b2b630d65ac8d419b34->leave($__internal_24c6d385411df485b29177855b7213bed32cdfff215e1b2b630d65ac8d419b34_prof);

    }

    public function getTemplateName()
    {
        return "@Atividade/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 87,  163 => 75,  157 => 74,  139 => 58,  130 => 57,  81 => 17,  66 => 15,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-usd\"></span> Ação Orçamentária</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\" >
            <label>Ano de Exercício:</label>
            <select name=\"nuAnoExercicio\" id=\"IdAnoExercicio\">
                <option value=\"\">Selecione o Ano</option>
                {% for ano in anoExercicio %}
                    <option value=\"{{ ano.nuAnoExercicio }}\"{% if nuAno == ano.nuAnoExercicio %} selected=\"selected\"{% endif %}>{{ ano.labelAnoExercicio }}</option>
                {% endfor %}
            </select>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Ação/PO</th>
                    <th>Denominação</th>
                    <th>Despesa</th>
                    <th>Valor Atualizado</th>
                    <th>Valor Utilizado</th>
                    <th>Saldo disponivel</th>
                    <!-- <th>Atividades<br />Cadastradas</th> -->
                    <th>Itens<br />Cadastrados</th>
                    <th>Selecionar<br />Ação/PO</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Ação/PO</th>
                    <th>Denominação</th>
                    <th>Despesa</th>
                    <th>Valor Atualizado</th>
                    <th>Valor Utilizado</th>
                    <th>Saldo disponivel</th>
                    <th>Atividades<br />Cadastradas</th>
                    <th>Selecionar<br />Ação/Plano</th>
                </tr>
                </tfoot>
                -->

            </table>

        </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        \$(function () {

            \$lista = \$('#lista').DataTable( {
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                \"bProcessing\": true,
                {% if nuAno is not null %}  \"ajax\": Routing.generate('json_plano_lista_acao', {'anoExercicio':{{ nuAno }} }), {% endif %}
                \"aoColumns\" : [
                    //{ \"mData\": 0 }, Código da tabela no banco
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 6 },
                    { \"mData\": 7 },
                    { \"mData\": 8 },
                    { \"mData\": 9 },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            if (full[1] >= {{ \"now\"|date(\"Y\") }}) {
                                return '<a class=\"btn btn-success\" href=\"' + Routing.generate('planodeuso_acao', {'id': full[0]}) + '\"><li class=\"fa fa-edit\"> </li></a>';
                            }else{
                                return '-';
                            }
                        }
                    },
                ]
            } );

            \$(\"#IdAnoExercicio\").change(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url( Routing.generate('json_plano_lista_acao', {'anoExercicio': \$(\"#IdAnoExercicio\").val()}) ).load();
                }else{
                    \$lista.clear().draw();
                }
            });
        })
    </script>
{% endblock %}", "@Atividade/default/index.html.twig", "D:\\planouso\\src\\Planodeuso\\AtividadeBundle\\Resources\\views\\default\\index.html.twig");
    }
}
