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
        $__internal_de68caef3ae5900ba3c49b93b1353dfa11e18964cca2a2c2c9495124e9db8e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de68caef3ae5900ba3c49b93b1353dfa11e18964cca2a2c2c9495124e9db8e7d->enter($__internal_de68caef3ae5900ba3c49b93b1353dfa11e18964cca2a2c2c9495124e9db8e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/index.html.twig"));

        $__internal_0e5c296fb23f26575b118635d92aa4535645e0b589795286823546d732f783bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5c296fb23f26575b118635d92aa4535645e0b589795286823546d732f783bc->enter($__internal_0e5c296fb23f26575b118635d92aa4535645e0b589795286823546d732f783bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de68caef3ae5900ba3c49b93b1353dfa11e18964cca2a2c2c9495124e9db8e7d->leave($__internal_de68caef3ae5900ba3c49b93b1353dfa11e18964cca2a2c2c9495124e9db8e7d_prof);

        
        $__internal_0e5c296fb23f26575b118635d92aa4535645e0b589795286823546d732f783bc->leave($__internal_0e5c296fb23f26575b118635d92aa4535645e0b589795286823546d732f783bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1436e98d8caa65cd00ce2d1c73c3d80d106e28a3c2a78f530166709b289fb400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1436e98d8caa65cd00ce2d1c73c3d80d106e28a3c2a78f530166709b289fb400->enter($__internal_1436e98d8caa65cd00ce2d1c73c3d80d106e28a3c2a78f530166709b289fb400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eccbbf30c24d45c4c5f0fdec201c79202a3c6ae64d7904efce784b47553bca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccbbf30c24d45c4c5f0fdec201c79202a3c6ae64d7904efce784b47553bca75->enter($__internal_eccbbf30c24d45c4c5f0fdec201c79202a3c6ae64d7904efce784b47553bca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <label>Ano de Exercício</label><br>
                            <select class=\"form-control\" name=\"nuAnoExercicio\" id=\"IdAnoExercicio\">
                                <option value=\"\">Selecione o Ano</option>
                                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anoExercicio"] ?? $this->getContext($context, "anoExercicio")));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            // line 18
            echo "                                    <option value=\"";
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
        // line 20
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            ";
        // line 26
        echo "                            ";
        // line 27
        echo "                            ";
        // line 28
        echo "
                            <label class=\"control-label\">Departamento</label>
                            <select class=\"form-control\" id=\"departamento\">
                                <option value=\"\">Selecione</option>
                                <option value=\"CGPO\">Nome do Departamento</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ação Orçamentária</label>
                            <select class=\"form-control\" id=\"acaoOrcamentaria\">
                                <option value=\"\">Selecione</option>
                                <option value=\"1\">Número da Ação Orçamentária</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <label class=\"control-label\">PO</label>
                        <select class=\"form-control\">
                            <option value=\"\" selected=selected>Selecione</option>
                            <option value=\"\">Número do Plano Orçamentária</option>
                        </select>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <label class=\"control-label\">Tipo de Despesa</label>
                        <select class=\"form-control\">
                            <option value=\"\" selected=selected>Selecione</option>
                            <option value=\"\">Tipo de Despesa</option>
                        </select>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nº da Proposta</label>
                            <input class=\"form-control\" type=\"number\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Descrição do PO</label>
                            <input class=\"form-control\" type=\"text\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        <button type=\"button\" id=\"btnPesquisarProcessamento\" class=\"btn btn-success\">Pesquisar</button>
                        <a class=\"btn btn-primary\">Voltar</a>
                    </div>
                </div>

                <br>
                <table id=\"lista\" class=\"table table-bordered table-hover\">
                    <thead>
                    <tr>
                        <!-- <th>CÓD</th> -->
                        <!-- <th>Ano de Exercício</th> -->
                        <!-- <th>Dep. Vinculados</th> -->
                        <!-- <th>Tipo de Despesa</th> -->
                        <!-- <th>R\$ Processado</th> -->
                        <!-- <th>Atividades</th> -->
                        <!-- <th>Itens</th> -->
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
                </table>

            </div>
        </div>
        ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_eccbbf30c24d45c4c5f0fdec201c79202a3c6ae64d7904efce784b47553bca75->leave($__internal_eccbbf30c24d45c4c5f0fdec201c79202a3c6ae64d7904efce784b47553bca75_prof);

        
        $__internal_1436e98d8caa65cd00ce2d1c73c3d80d106e28a3c2a78f530166709b289fb400->leave($__internal_1436e98d8caa65cd00ce2d1c73c3d80d106e28a3c2a78f530166709b289fb400_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_213cd1f7aa8a07833c0569d016231190f30c0a18222ace8b38f8ee91f2e44323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213cd1f7aa8a07833c0569d016231190f30c0a18222ace8b38f8ee91f2e44323->enter($__internal_213cd1f7aa8a07833c0569d016231190f30c0a18222ace8b38f8ee91f2e44323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_31206fde908ff599580cfbc2284964ddd4f9218151beee62052e7a0b535dec1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31206fde908ff599580cfbc2284964ddd4f9218151beee62052e7a0b535dec1f->enter($__internal_31206fde908ff599580cfbc2284964ddd4f9218151beee62052e7a0b535dec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    <script>
        \$(function () {
            \$lista = \$('#lista').DataTable( {
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                ";
        // line 116
        if ( !(null === ($context["nuAno"] ?? $this->getContext($context, "nuAno")))) {
            echo "  \"ajax\": Routing.generate('json_lista_processamento', {'anoExercicio':";
            echo twig_escape_filter($this->env, ($context["nuAno"] ?? $this->getContext($context, "nuAno")), "html", null, true);
            echo " }), ";
        }
        // line 117
        echo "                'iDisplayLength': 10,
                'iDisplayStart': 0,
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                \"bProcessing\": true,
                \"aoColumns\" : [
                    { \"mData\": 4 }, //Departamento
                    { \"mData\": 2 }, //Ação/PO
                    { \"mData\": 3 }, //Tipo de Despesa
                    { \"mData\": 6 }, //Denominação
                    { \"mData\": 7 }, //Valor Atualizado
                    { \"mData\": 9 }, //Saldo
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            return '<a class=\"btn btn-success\" href=\"'+ Routing.generate('processamento_acao', {'id': full[0]})+'\"><li class=\"fa fa-edit\"> <!-- Processamento --></li></a>';
                        }
                    },
                ]
            } );

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
        
        $__internal_31206fde908ff599580cfbc2284964ddd4f9218151beee62052e7a0b535dec1f->leave($__internal_31206fde908ff599580cfbc2284964ddd4f9218151beee62052e7a0b535dec1f_prof);

        
        $__internal_213cd1f7aa8a07833c0569d016231190f30c0a18222ace8b38f8ee91f2e44323->leave($__internal_213cd1f7aa8a07833c0569d016231190f30c0a18222ace8b38f8ee91f2e44323_prof);

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
        return array (  214 => 117,  208 => 116,  200 => 110,  191 => 109,  178 => 106,  98 => 28,  96 => 27,  94 => 26,  87 => 20,  72 => 18,  68 => 17,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
                            <label>Ano de Exercício</label><br>
                            <select class=\"form-control\" name=\"nuAnoExercicio\" id=\"IdAnoExercicio\">
                                <option value=\"\">Selecione o Ano</option>
                                {% for ano in anoExercicio %}
                                    <option value=\"{{ ano.nuAnoExercicio }}\"{% if nuAno == ano.nuAnoExercicio %} selected=\"selected\"{% endif %}>{{ ano.nuAnoExercicio }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            {#{{ form_label(form.nuAnoExercicio) }}#}
                            {#{{ form_errors(form.nuAnoExercicio) }}#}
                            {#{{ form_widget(form.nuAnoExercicio) }}#}

                            <label class=\"control-label\">Departamento</label>
                            <select class=\"form-control\" id=\"departamento\">
                                <option value=\"\">Selecione</option>
                                <option value=\"CGPO\">Nome do Departamento</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ação Orçamentária</label>
                            <select class=\"form-control\" id=\"acaoOrcamentaria\">
                                <option value=\"\">Selecione</option>
                                <option value=\"1\">Número da Ação Orçamentária</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <label class=\"control-label\">PO</label>
                        <select class=\"form-control\">
                            <option value=\"\" selected=selected>Selecione</option>
                            <option value=\"\">Número do Plano Orçamentária</option>
                        </select>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <label class=\"control-label\">Tipo de Despesa</label>
                        <select class=\"form-control\">
                            <option value=\"\" selected=selected>Selecione</option>
                            <option value=\"\">Tipo de Despesa</option>
                        </select>
                    </div>
                    <div class=\"col-md-2 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nº da Proposta</label>
                            <input class=\"form-control\" type=\"number\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Descrição do PO</label>
                            <input class=\"form-control\" type=\"text\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6 col-xs-12\">
                        <button type=\"button\" id=\"btnPesquisarProcessamento\" class=\"btn btn-success\">Pesquisar</button>
                        <a class=\"btn btn-primary\">Voltar</a>
                    </div>
                </div>

                <br>
                <table id=\"lista\" class=\"table table-bordered table-hover\">
                    <thead>
                    <tr>
                        <!-- <th>CÓD</th> -->
                        <!-- <th>Ano de Exercício</th> -->
                        <!-- <th>Dep. Vinculados</th> -->
                        <!-- <th>Tipo de Despesa</th> -->
                        <!-- <th>R\$ Processado</th> -->
                        <!-- <th>Atividades</th> -->
                        <!-- <th>Itens</th> -->
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
                </table>

            </div>
        </div>
        {{ form_end(form) }}
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
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                \"bProcessing\": true,
                \"aoColumns\" : [
                    { \"mData\": 4 }, //Departamento
                    { \"mData\": 2 }, //Ação/PO
                    { \"mData\": 3 }, //Tipo de Despesa
                    { \"mData\": 6 }, //Denominação
                    { \"mData\": 7 }, //Valor Atualizado
                    { \"mData\": 9 }, //Saldo
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            return '<a class=\"btn btn-success\" href=\"'+ Routing.generate('processamento_acao', {'id': full[0]})+'\"><li class=\"fa fa-edit\"> <!-- Processamento --></li></a>';
                        }
                    },
                ]
            } );

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
