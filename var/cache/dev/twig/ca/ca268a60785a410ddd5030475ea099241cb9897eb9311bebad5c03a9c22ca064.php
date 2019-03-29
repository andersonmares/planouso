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
        $__internal_8ba2701c786c43986b997c4710ddc691a70f0bb4c401265fe483c4ef0d3f27cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba2701c786c43986b997c4710ddc691a70f0bb4c401265fe483c4ef0d3f27cc->enter($__internal_8ba2701c786c43986b997c4710ddc691a70f0bb4c401265fe483c4ef0d3f27cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/index.html.twig"));

        $__internal_f19ffa6613f15d16b779f98d5a53fde42d0b94f42f43a998fd7e004276cb97f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19ffa6613f15d16b779f98d5a53fde42d0b94f42f43a998fd7e004276cb97f7->enter($__internal_f19ffa6613f15d16b779f98d5a53fde42d0b94f42f43a998fd7e004276cb97f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba2701c786c43986b997c4710ddc691a70f0bb4c401265fe483c4ef0d3f27cc->leave($__internal_8ba2701c786c43986b997c4710ddc691a70f0bb4c401265fe483c4ef0d3f27cc_prof);

        
        $__internal_f19ffa6613f15d16b779f98d5a53fde42d0b94f42f43a998fd7e004276cb97f7->leave($__internal_f19ffa6613f15d16b779f98d5a53fde42d0b94f42f43a998fd7e004276cb97f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_491a53badc48a105cc8628357016bfce11395e59bcfefa6bde8ed83e84861a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491a53badc48a105cc8628357016bfce11395e59bcfefa6bde8ed83e84861a75->enter($__internal_491a53badc48a105cc8628357016bfce11395e59bcfefa6bde8ed83e84861a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5c1112921ee2f6c54171f3ec701c41aa8125d625153dbfcaed723fdfa4db3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c1112921ee2f6c54171f3ec701c41aa8125d625153dbfcaed723fdfa4db3bc->enter($__internal_f5c1112921ee2f6c54171f3ec701c41aa8125d625153dbfcaed723fdfa4db3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Processamento CGPO</h3>
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
                    <!-- <th>Ano de Exercício</th> -->
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Dep. responsável</th>
                    <th>Dep. Vinculados</th>
                    <th>Denominação</th>
                    <th>R\$ atualizado</th>
                    <th>R\$ Empenhado</th>
                    <th>R\$ Saldo</th>
                    <th>R\$ Processado</th>
                    <!-- <th>Atividades</th> -->
                    <th>Itens</th>
                    <th>Processamento</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Ano de Exercício</th>
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Dep. responsável</th>
                    <th>Dep. Vinculados</th>
                    <th>Denominação</th>
                    <th>R\$ atualizado</th>
                    <th>R\$ Empenhado</th>
                    <th>R\$ Saldo</th>
                    <th>R\$ Processado</th>
                    <th>Atividades</th>
                    <th>Processamento</th>
                </tr>
                </tfoot>
                -->

            </table>

        </div>
    </div>
    </div>
";
        
        $__internal_f5c1112921ee2f6c54171f3ec701c41aa8125d625153dbfcaed723fdfa4db3bc->leave($__internal_f5c1112921ee2f6c54171f3ec701c41aa8125d625153dbfcaed723fdfa4db3bc_prof);

        
        $__internal_491a53badc48a105cc8628357016bfce11395e59bcfefa6bde8ed83e84861a75->leave($__internal_491a53badc48a105cc8628357016bfce11395e59bcfefa6bde8ed83e84861a75_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c67b8902e0edc469c5c11e929a50c43a23cc7ea0a1768569cdb0716e1a0e42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c67b8902e0edc469c5c11e929a50c43a23cc7ea0a1768569cdb0716e1a0e42b->enter($__internal_6c67b8902e0edc469c5c11e929a50c43a23cc7ea0a1768569cdb0716e1a0e42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a8c5561c70aa9a152ce5c56b15ea6fbea78cdb4922f95c09bcc91e4f72900754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c5561c70aa9a152ce5c56b15ea6fbea78cdb4922f95c09bcc91e4f72900754->enter($__internal_a8c5561c70aa9a152ce5c56b15ea6fbea78cdb4922f95c09bcc91e4f72900754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    <script>
        \$(function () {
            \$lista = \$('#lista').DataTable( {
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                ";
        // line 71
        if ( !(null === ($context["nuAno"] ?? $this->getContext($context, "nuAno")))) {
            echo "  \"ajax\": Routing.generate('json_lista_processamento', {'anoExercicio':";
            echo twig_escape_filter($this->env, ($context["nuAno"] ?? $this->getContext($context, "nuAno")), "html", null, true);
            echo " }), ";
        }
        // line 72
        echo "                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                \"bProcessing\": true,

                \"aoColumns\" : [
                    //{ \"mData\": 0 },
                    //{ \"mData\": 1 },
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 5 },
                    { \"mData\": 6 },
                    { \"mData\": 7 },
                    { \"mData\": 8 },
                    { \"mData\": 9 },
                    { \"mData\": 10 },
                    { \"mData\": 11 },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            return '<a class=\"btn btn-success\" href=\"'+ Routing.generate('processamento_acao', {'id': full[0]})+'\"><li class=\"fa fa-edit\"> <!-- Processamento --></li></a>';
                        }
                    },
                ]
            } );

            \$(\"#IdAnoExercicio\").change(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url( Routing.generate('json_lista_processamento', {'anoExercicio': \$(\"#IdAnoExercicio\").val()}) ).load();
                }
            });

        });
    </script>
";
        
        $__internal_a8c5561c70aa9a152ce5c56b15ea6fbea78cdb4922f95c09bcc91e4f72900754->leave($__internal_a8c5561c70aa9a152ce5c56b15ea6fbea78cdb4922f95c09bcc91e4f72900754_prof);

        
        $__internal_6c67b8902e0edc469c5c11e929a50c43a23cc7ea0a1768569cdb0716e1a0e42b->leave($__internal_6c67b8902e0edc469c5c11e929a50c43a23cc7ea0a1768569cdb0716e1a0e42b_prof);

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
        return array (  160 => 72,  154 => 71,  146 => 65,  137 => 64,  80 => 16,  65 => 14,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
                    <!-- <th>Ano de Exercício</th> -->
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Dep. responsável</th>
                    <th>Dep. Vinculados</th>
                    <th>Denominação</th>
                    <th>R\$ atualizado</th>
                    <th>R\$ Empenhado</th>
                    <th>R\$ Saldo</th>
                    <th>R\$ Processado</th>
                    <!-- <th>Atividades</th> -->
                    <th>Itens</th>
                    <th>Processamento</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Ano de Exercício</th>
                    <th>Ação/PO</th>
                    <th>Despesa</th>
                    <th>Dep. responsável</th>
                    <th>Dep. Vinculados</th>
                    <th>Denominação</th>
                    <th>R\$ atualizado</th>
                    <th>R\$ Empenhado</th>
                    <th>R\$ Saldo</th>
                    <th>R\$ Processado</th>
                    <th>Atividades</th>
                    <th>Processamento</th>
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
                {% if nuAno is not null %}  \"ajax\": Routing.generate('json_lista_processamento', {'anoExercicio':{{ nuAno }} }), {% endif %}
                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                \"bProcessing\": true,

                \"aoColumns\" : [
                    //{ \"mData\": 0 },
                    //{ \"mData\": 1 },
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 5 },
                    { \"mData\": 6 },
                    { \"mData\": 7 },
                    { \"mData\": 8 },
                    { \"mData\": 9 },
                    { \"mData\": 10 },
                    { \"mData\": 11 },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            return '<a class=\"btn btn-success\" href=\"'+ Routing.generate('processamento_acao', {'id': full[0]})+'\"><li class=\"fa fa-edit\"> <!-- Processamento --></li></a>';
                        }
                    },
                ]
            } );

            \$(\"#IdAnoExercicio\").change(function () {
                if (\$(\"#IdAnoExercicio\").val() != \"\") {
                    \$lista.ajax.url( Routing.generate('json_lista_processamento', {'anoExercicio': \$(\"#IdAnoExercicio\").val()}) ).load();
                }
            });

        });
    </script>
{% endblock %}", "@Admin/Processamento/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\index.html.twig");
    }
}
