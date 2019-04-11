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
        $__internal_d76829931da7b3f410068cc9142275db31ecb468b292f37e972280798d820228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76829931da7b3f410068cc9142275db31ecb468b292f37e972280798d820228->enter($__internal_d76829931da7b3f410068cc9142275db31ecb468b292f37e972280798d820228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\VincularAcaoDepartamento\\index.html.twig"));

        $__internal_146e94ea6424802d858a019660999077e41d5f92d3f3cc41c138e3976cdcfb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146e94ea6424802d858a019660999077e41d5f92d3f3cc41c138e3976cdcfb61->enter($__internal_146e94ea6424802d858a019660999077e41d5f92d3f3cc41c138e3976cdcfb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\VincularAcaoDepartamento\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d76829931da7b3f410068cc9142275db31ecb468b292f37e972280798d820228->leave($__internal_d76829931da7b3f410068cc9142275db31ecb468b292f37e972280798d820228_prof);

        
        $__internal_146e94ea6424802d858a019660999077e41d5f92d3f3cc41c138e3976cdcfb61->leave($__internal_146e94ea6424802d858a019660999077e41d5f92d3f3cc41c138e3976cdcfb61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d6952f6fbaa1b0f1decef5c7b4e5a045da48aac3a4a1ed046b1c218fbe4139a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6952f6fbaa1b0f1decef5c7b4e5a045da48aac3a4a1ed046b1c218fbe4139a->enter($__internal_8d6952f6fbaa1b0f1decef5c7b4e5a045da48aac3a4a1ed046b1c218fbe4139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f97334f5da46c03ba5f954e0024528497ee328bfb8c1991408aca63a8b4b6120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97334f5da46c03ba5f954e0024528497ee328bfb8c1991408aca63a8b4b6120->enter($__internal_f97334f5da46c03ba5f954e0024528497ee328bfb8c1991408aca63a8b4b6120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f97334f5da46c03ba5f954e0024528497ee328bfb8c1991408aca63a8b4b6120->leave($__internal_f97334f5da46c03ba5f954e0024528497ee328bfb8c1991408aca63a8b4b6120_prof);

        
        $__internal_8d6952f6fbaa1b0f1decef5c7b4e5a045da48aac3a4a1ed046b1c218fbe4139a->leave($__internal_8d6952f6fbaa1b0f1decef5c7b4e5a045da48aac3a4a1ed046b1c218fbe4139a_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d770b39a6b6b2061f4a595afb70a91ec405c1745d18020fadfa06d6cfe68632f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d770b39a6b6b2061f4a595afb70a91ec405c1745d18020fadfa06d6cfe68632f->enter($__internal_d770b39a6b6b2061f4a595afb70a91ec405c1745d18020fadfa06d6cfe68632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bde5b9c0870578a924097dd0f7c2f530c49309a8366aa7063d4a5742cfa3f63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde5b9c0870578a924097dd0f7c2f530c49309a8366aa7063d4a5742cfa3f63a->enter($__internal_bde5b9c0870578a924097dd0f7c2f530c49309a8366aa7063d4a5742cfa3f63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bde5b9c0870578a924097dd0f7c2f530c49309a8366aa7063d4a5742cfa3f63a->leave($__internal_bde5b9c0870578a924097dd0f7c2f530c49309a8366aa7063d4a5742cfa3f63a_prof);

        
        $__internal_d770b39a6b6b2061f4a595afb70a91ec405c1745d18020fadfa06d6cfe68632f->leave($__internal_d770b39a6b6b2061f4a595afb70a91ec405c1745d18020fadfa06d6cfe68632f_prof);

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
