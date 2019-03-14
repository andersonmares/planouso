<?php

/* @Admin\VincularAcaoDepartamento\index.html.twig */
class __TwigTemplate_b3ae0e1023da0fb98dfb52380fefdb1c799d3a6a868c85b36999b955766f9d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\VincularAcaoDepartamento\\index.html.twig", 1);
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
        $__internal_f8a98c362f9936503f758dfa509319a09667f8189669276b4cd5dfd42f52f5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a98c362f9936503f758dfa509319a09667f8189669276b4cd5dfd42f52f5ce->enter($__internal_f8a98c362f9936503f758dfa509319a09667f8189669276b4cd5dfd42f52f5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\VincularAcaoDepartamento\\index.html.twig"));

        $__internal_b9eeb744a5a1752ceea4ecc92f8a7993d4ba475be10deaed28998d26d90a8190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9eeb744a5a1752ceea4ecc92f8a7993d4ba475be10deaed28998d26d90a8190->enter($__internal_b9eeb744a5a1752ceea4ecc92f8a7993d4ba475be10deaed28998d26d90a8190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\VincularAcaoDepartamento\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a98c362f9936503f758dfa509319a09667f8189669276b4cd5dfd42f52f5ce->leave($__internal_f8a98c362f9936503f758dfa509319a09667f8189669276b4cd5dfd42f52f5ce_prof);

        
        $__internal_b9eeb744a5a1752ceea4ecc92f8a7993d4ba475be10deaed28998d26d90a8190->leave($__internal_b9eeb744a5a1752ceea4ecc92f8a7993d4ba475be10deaed28998d26d90a8190_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16afff219b51e57d959170ffba77f86beca01c5c3d167ef8d334d7b3a6e41d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16afff219b51e57d959170ffba77f86beca01c5c3d167ef8d334d7b3a6e41d4b->enter($__internal_16afff219b51e57d959170ffba77f86beca01c5c3d167ef8d334d7b3a6e41d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c331407a88037cb75e4e6a4b7aa43332b1a7183e09edaa562dac1a3e6ff21421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c331407a88037cb75e4e6a4b7aa43332b1a7183e09edaa562dac1a3e6ff21421->enter($__internal_c331407a88037cb75e4e6a4b7aa43332b1a7183e09edaa562dac1a3e6ff21421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Vincular Ação Orçamentária ao Departamento</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <label>Ano de Exercício:</label>
            <select name=\"nuAnoExercicio\" id=\"IdAnoExercicio\">
                <option value=\"\">Selecione o Ano</option>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anoExercicio"] ?? $this->getContext($context, "anoExercicio")));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            // line 14
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ano"], "nuAnoExercicio", array()), "html", null, true);
            echo "\"";
            if ((($context["nuAno"] ?? $this->getContext($context, "nuAno")) == $this->getAttribute($context["ano"], "nuAnoExercicio", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ano"], "nuAnoExercicio", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </select>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Ano de Exercício</th>
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Dep. responsável</th>
                    <th>Dep. Vinculados</th>
                    <th>Denominação</th>
                    <th>Dotação Atualizada</th>
                    <th>Vincular</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <<th>CÓD</th>
                    <th>Ano de Exercício</th>
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Departamento responsável</th>
                    <th>Departamentos Vinculados</th>
                    <th>Denominação</th>
                    <th>Dotação Atualizada</th>
                    <th>Vincular</th>

                </tr>
                </tfoot>
                -->

            </table>

        </div>
    </div>
    </div>

";
        
        $__internal_c331407a88037cb75e4e6a4b7aa43332b1a7183e09edaa562dac1a3e6ff21421->leave($__internal_c331407a88037cb75e4e6a4b7aa43332b1a7183e09edaa562dac1a3e6ff21421_prof);

        
        $__internal_16afff219b51e57d959170ffba77f86beca01c5c3d167ef8d334d7b3a6e41d4b->leave($__internal_16afff219b51e57d959170ffba77f86beca01c5c3d167ef8d334d7b3a6e41d4b_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23c6a728fa2b331b5e1576f82baa5d44be9eec4115e10649aedc32859401a848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c6a728fa2b331b5e1576f82baa5d44be9eec4115e10649aedc32859401a848->enter($__internal_23c6a728fa2b331b5e1576f82baa5d44be9eec4115e10649aedc32859401a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5a58818a7c61deebe2c1cf9adb409031ac507726745fcb994da3e1b4f8f4d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a58818a7c61deebe2c1cf9adb409031ac507726745fcb994da3e1b4f8f4d47->enter($__internal_f5a58818a7c61deebe2c1cf9adb409031ac507726745fcb994da3e1b4f8f4d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 73
        if ( !(null === ($context["nuAno"] ?? $this->getContext($context, "nuAno")))) {
            echo "  \"ajax\": Routing.generate('json_lista_acao', {'anoExercicio':";
            echo twig_escape_filter($this->env, ($context["nuAno"] ?? $this->getContext($context, "nuAno")), "html", null, true);
            echo " }), ";
        }
        // line 74
        echo "                \"aoColumns\" : [
                    //{ \"mData\": 0 },
                    { \"mData\": 1 },
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 5 },
                    { \"mData\": 6 },
                    { \"mData\": 7 },

                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                                return '<a class=\"btn btn-success\" href=\"'+ Routing.generate('vincularacao_vincular', {'idAcao': full[0]})+'\"><li class=\"fa fa-edit\"> Vincular</li></a>';
                        }
                    },
                ]
            } );

            \$(\"#IdAnoExercicio\").change(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url( Routing.generate('json_lista_acao', {'anoExercicio': \$(\"#IdAnoExercicio\").val()}) ).load();
                }
            });
        });
    </script>
";
        
        $__internal_f5a58818a7c61deebe2c1cf9adb409031ac507726745fcb994da3e1b4f8f4d47->leave($__internal_f5a58818a7c61deebe2c1cf9adb409031ac507726745fcb994da3e1b4f8f4d47_prof);

        
        $__internal_23c6a728fa2b331b5e1576f82baa5d44be9eec4115e10649aedc32859401a848->leave($__internal_23c6a728fa2b331b5e1576f82baa5d44be9eec4115e10649aedc32859401a848_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\VincularAcaoDepartamento\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 74,  156 => 73,  139 => 58,  130 => 57,  80 => 16,  65 => 14,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Vincular Ação Orçamentária ao Departamento</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <label>Ano de Exercício:</label>
            <select name=\"nuAnoExercicio\" id=\"IdAnoExercicio\">
                <option value=\"\">Selecione o Ano</option>
                {% for ano in anoExercicio %}
                    <option value=\"{{ ano.nuAnoExercicio }}\"{% if nuAno == ano.nuAnoExercicio %} selected=\"selected\"{% endif %}>{{ ano.nuAnoExercicio }}</option>
                {% endfor %}
            </select>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Ano de Exercício</th>
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Dep. responsável</th>
                    <th>Dep. Vinculados</th>
                    <th>Denominação</th>
                    <th>Dotação Atualizada</th>
                    <th>Vincular</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <<th>CÓD</th>
                    <th>Ano de Exercício</th>
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Departamento responsável</th>
                    <th>Departamentos Vinculados</th>
                    <th>Denominação</th>
                    <th>Dotação Atualizada</th>
                    <th>Vincular</th>

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
                {% if nuAno is not null %}  \"ajax\": Routing.generate('json_lista_acao', {'anoExercicio':{{ nuAno }} }), {% endif %}
                \"aoColumns\" : [
                    //{ \"mData\": 0 },
                    { \"mData\": 1 },
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 5 },
                    { \"mData\": 6 },
                    { \"mData\": 7 },

                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                                return '<a class=\"btn btn-success\" href=\"'+ Routing.generate('vincularacao_vincular', {'idAcao': full[0]})+'\"><li class=\"fa fa-edit\"> Vincular</li></a>';
                        }
                    },
                ]
            } );

            \$(\"#IdAnoExercicio\").change(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url( Routing.generate('json_lista_acao', {'anoExercicio': \$(\"#IdAnoExercicio\").val()}) ).load();
                }
            });
        });
    </script>
{% endblock %}", "@Admin\\VincularAcaoDepartamento\\index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\VincularAcaoDepartamento\\index.html.twig");
    }
}
