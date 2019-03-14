<?php

/* @Admin/Usuario/index.html.twig */
class __TwigTemplate_72b53fcd6ada765491258a160a2aaa204993ae455f02b3eb2fa093744f79a7bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Usuario/index.html.twig", 1);
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
        $__internal_99d6cc03046172875bf014d780478002ec2f7a621e995122894d3365454c911c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d6cc03046172875bf014d780478002ec2f7a621e995122894d3365454c911c->enter($__internal_99d6cc03046172875bf014d780478002ec2f7a621e995122894d3365454c911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/index.html.twig"));

        $__internal_273d2fd810ad91b2cc93f118498b36994fb0d60acf801e5ab2dc8639d1429b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273d2fd810ad91b2cc93f118498b36994fb0d60acf801e5ab2dc8639d1429b05->enter($__internal_273d2fd810ad91b2cc93f118498b36994fb0d60acf801e5ab2dc8639d1429b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99d6cc03046172875bf014d780478002ec2f7a621e995122894d3365454c911c->leave($__internal_99d6cc03046172875bf014d780478002ec2f7a621e995122894d3365454c911c_prof);

        
        $__internal_273d2fd810ad91b2cc93f118498b36994fb0d60acf801e5ab2dc8639d1429b05->leave($__internal_273d2fd810ad91b2cc93f118498b36994fb0d60acf801e5ab2dc8639d1429b05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_148411b6aadbe3da439ff87bb0307f71d5688bb5267bf452c78bde657fa35149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148411b6aadbe3da439ff87bb0307f71d5688bb5267bf452c78bde657fa35149->enter($__internal_148411b6aadbe3da439ff87bb0307f71d5688bb5267bf452c78bde657fa35149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dfd580be88df3eebc4e74e540a9a8adf223615ca5f9bc04355c2f4252c73fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfd580be88df3eebc4e74e540a9a8adf223615ca5f9bc04355c2f4252c73fd2->enter($__internal_9dfd580be88df3eebc4e74e540a9a8adf223615ca5f9bc04355c2f4252c73fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-users\"></span> Cadastro de Usuários</h3>
        </div>
        <div class=\"box-body\">
            <h4>Informe o CPF para localizar ou cadastrar um novo usuário</h4>
            <div class=\"input-group col-lg-2\">
                <input type=\"text\" class=\"form-control\" placeholder=\"CPF\" maxlength=\"11\" name=\"cpf\" id=\"cpf\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-info btn-flat\" id=\"localizarCPF\">Localizar CPF</button>
                </span>
            </div>
        <br />
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Perfil de Acesso</th>
                    <th>Departamento</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Perfil de Acesso</th>
                    <th>Departamento</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal-disabled\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Atenção!</h4>
                </div>
                <div class=\"modal-body\">
                    Deseja realmente desativar o Usuário <strong id=\"modalDescricao\"></strong>?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-success\" href=\"\" id=\"confirmar\">Confirmar</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

";
        
        $__internal_9dfd580be88df3eebc4e74e540a9a8adf223615ca5f9bc04355c2f4252c73fd2->leave($__internal_9dfd580be88df3eebc4e74e540a9a8adf223615ca5f9bc04355c2f4252c73fd2_prof);

        
        $__internal_148411b6aadbe3da439ff87bb0307f71d5688bb5267bf452c78bde657fa35149->leave($__internal_148411b6aadbe3da439ff87bb0307f71d5688bb5267bf452c78bde657fa35149_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab062c27a4c42dc0dbf4fb397e9c6d50f77c7143eac202eba51b5411b5857a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab062c27a4c42dc0dbf4fb397e9c6d50f77c7143eac202eba51b5411b5857a06->enter($__internal_ab062c27a4c42dc0dbf4fb397e9c6d50f77c7143eac202eba51b5411b5857a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8e306bc590fd60dc6ed47c731b0fe83b3161dc734ad649edd3190f99c55ca575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e306bc590fd60dc6ed47c731b0fe83b3161dc734ad649edd3190f99c55ca575->enter($__internal_8e306bc590fd60dc6ed47c731b0fe83b3161dc734ad649edd3190f99c55ca575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    <script>


        \$(function () {

            \$(document).on(\"click\", \".desativar\", function () {
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_disable");
        echo "/\" + id);

            });

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
                \"ajax\": Routing.generate('json_lista_usuario'),
                \"aoColumns\" : [
                    { \"mData\": 1 },
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 5 },
                    { \"mData\": 6 },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            if (full[0]) {
                                return '<a class=\"btn btn-primary\" href=\"' + Routing.generate('usuario_edit', {'id': full[0]}) + '\"><li class=\"fa fa-edit\"> Editar</li></a>';
                            } else {
                                return '<a class=\"btn btn-success\" href=\"' + Routing.generate('usuario_add', {'cpf': full[1]}) + '\"><li class=\"fa fa-edit\"> Cadastrar Usuário</li></a>';
                            }
                        }
                    },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            if (full[0]) {
                                return '<a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"' + full[0] + '\" data-descricao=\"' + full[1] + ' - ' + full[2] + '\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a>';
                            } else {
                                return null;
                            }

                        }
                    }
                ]
            } );

            \$(\"#localizarCPF\").click(function () {
                if (\$(\"#cpf\").val() != \"\" && \$(\"#cpf\").val().length == 11) {
                    \$lista.ajax.url( Routing.generate('json_localiza_cpf', {'cpf': \$(\"#cpf\").val()}) ).load();
                }
            });

        })


    </script>
";
        
        $__internal_8e306bc590fd60dc6ed47c731b0fe83b3161dc734ad649edd3190f99c55ca575->leave($__internal_8e306bc590fd60dc6ed47c731b0fe83b3161dc734ad649edd3190f99c55ca575_prof);

        
        $__internal_ab062c27a4c42dc0dbf4fb397e9c6d50f77c7143eac202eba51b5411b5857a06->leave($__internal_ab062c27a4c42dc0dbf4fb397e9c6d50f77c7143eac202eba51b5411b5857a06_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 80,  133 => 70,  124 => 69,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-users\"></span> Cadastro de Usuários</h3>
        </div>
        <div class=\"box-body\">
            <h4>Informe o CPF para localizar ou cadastrar um novo usuário</h4>
            <div class=\"input-group col-lg-2\">
                <input type=\"text\" class=\"form-control\" placeholder=\"CPF\" maxlength=\"11\" name=\"cpf\" id=\"cpf\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-info btn-flat\" id=\"localizarCPF\">Localizar CPF</button>
                </span>
            </div>
        <br />
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Perfil de Acesso</th>
                    <th>Departamento</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Perfil de Acesso</th>
                    <th>Departamento</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modal-disabled\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Atenção!</h4>
                </div>
                <div class=\"modal-body\">
                    Deseja realmente desativar o Usuário <strong id=\"modalDescricao\"></strong>?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-success\" href=\"\" id=\"confirmar\">Confirmar</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

{% endblock %}
{% block javascripts %}
    <script>


        \$(function () {

            \$(document).on(\"click\", \".desativar\", function () {
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"usuario_disable\") }}/\" + id);

            });

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
                \"ajax\": Routing.generate('json_lista_usuario'),
                \"aoColumns\" : [
                    { \"mData\": 1 },
                    { \"mData\": 2 },
                    { \"mData\": 3 },
                    { \"mData\": 4 },
                    { \"mData\": 5 },
                    { \"mData\": 6 },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            if (full[0]) {
                                return '<a class=\"btn btn-primary\" href=\"' + Routing.generate('usuario_edit', {'id': full[0]}) + '\"><li class=\"fa fa-edit\"> Editar</li></a>';
                            } else {
                                return '<a class=\"btn btn-success\" href=\"' + Routing.generate('usuario_add', {'cpf': full[1]}) + '\"><li class=\"fa fa-edit\"> Cadastrar Usuário</li></a>';
                            }
                        }
                    },
                    { \"mData\": null,
                        \"bSortable\": false,
                        \"mRender\": function(data, type, full) {
                            if (full[0]) {
                                return '<a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"' + full[0] + '\" data-descricao=\"' + full[1] + ' - ' + full[2] + '\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a>';
                            } else {
                                return null;
                            }

                        }
                    }
                ]
            } );

            \$(\"#localizarCPF\").click(function () {
                if (\$(\"#cpf\").val() != \"\" && \$(\"#cpf\").val().length == 11) {
                    \$lista.ajax.url( Routing.generate('json_localiza_cpf', {'cpf': \$(\"#cpf\").val()}) ).load();
                }
            });

        })


    </script>
{% endblock %}", "@Admin/Usuario/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Usuario\\index.html.twig");
    }
}
