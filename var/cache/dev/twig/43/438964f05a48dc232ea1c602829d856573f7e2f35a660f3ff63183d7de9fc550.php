<?php

/* @Admin/Usuario/index.html.twig */
class __TwigTemplate_c26d4d459fabc33d41ec5e51b35263a72ece40dbb9e74fed74f715e0a8dfbcaa extends Twig_Template
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
        $__internal_6e69b4de0b7d931351248c07d26de83645b4f3943d4cf29df30e983aec7538f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e69b4de0b7d931351248c07d26de83645b4f3943d4cf29df30e983aec7538f5->enter($__internal_6e69b4de0b7d931351248c07d26de83645b4f3943d4cf29df30e983aec7538f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/index.html.twig"));

        $__internal_fd3bc7576219843e61c8cd7c33b0f545a48f5e14cb2acd7fc360111c5d86dcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3bc7576219843e61c8cd7c33b0f545a48f5e14cb2acd7fc360111c5d86dcbf->enter($__internal_fd3bc7576219843e61c8cd7c33b0f545a48f5e14cb2acd7fc360111c5d86dcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e69b4de0b7d931351248c07d26de83645b4f3943d4cf29df30e983aec7538f5->leave($__internal_6e69b4de0b7d931351248c07d26de83645b4f3943d4cf29df30e983aec7538f5_prof);

        
        $__internal_fd3bc7576219843e61c8cd7c33b0f545a48f5e14cb2acd7fc360111c5d86dcbf->leave($__internal_fd3bc7576219843e61c8cd7c33b0f545a48f5e14cb2acd7fc360111c5d86dcbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_456c30cd1bf8384fd1dcc58fce5bda2a0f67f3759e34a79b3e829ea2efd0f9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456c30cd1bf8384fd1dcc58fce5bda2a0f67f3759e34a79b3e829ea2efd0f9bb->enter($__internal_456c30cd1bf8384fd1dcc58fce5bda2a0f67f3759e34a79b3e829ea2efd0f9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69c4c69091ea9ba542c6283accbeaf71250ad3e373b61f09cd09fc672d0e4f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c4c69091ea9ba542c6283accbeaf71250ad3e373b61f09cd09fc672d0e4f58->enter($__internal_69c4c69091ea9ba542c6283accbeaf71250ad3e373b61f09cd09fc672d0e4f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-users\"></span> Cadastro de Usuários</h3>
        </div>
        <div class=\"table-responsive\">
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
        
        $__internal_69c4c69091ea9ba542c6283accbeaf71250ad3e373b61f09cd09fc672d0e4f58->leave($__internal_69c4c69091ea9ba542c6283accbeaf71250ad3e373b61f09cd09fc672d0e4f58_prof);

        
        $__internal_456c30cd1bf8384fd1dcc58fce5bda2a0f67f3759e34a79b3e829ea2efd0f9bb->leave($__internal_456c30cd1bf8384fd1dcc58fce5bda2a0f67f3759e34a79b3e829ea2efd0f9bb_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a56cbeb996c1f5da94c0debf08aa0bb8f7f0f8b7bb578b74f24ccb4acb4f7593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56cbeb996c1f5da94c0debf08aa0bb8f7f0f8b7bb578b74f24ccb4acb4f7593->enter($__internal_a56cbeb996c1f5da94c0debf08aa0bb8f7f0f8b7bb578b74f24ccb4acb4f7593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06a9c70ea1c4f574a07abc29eb1a378550ab067e536137d6605404d5c6e06a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a9c70ea1c4f574a07abc29eb1a378550ab067e536137d6605404d5c6e06a3e->enter($__internal_06a9c70ea1c4f574a07abc29eb1a378550ab067e536137d6605404d5c6e06a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <script>


        \$(function () {

            \$(document).on(\"click\", \".desativar\", function () {
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 82
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
        
        $__internal_06a9c70ea1c4f574a07abc29eb1a378550ab067e536137d6605404d5c6e06a3e->leave($__internal_06a9c70ea1c4f574a07abc29eb1a378550ab067e536137d6605404d5c6e06a3e_prof);

        
        $__internal_a56cbeb996c1f5da94c0debf08aa0bb8f7f0f8b7bb578b74f24ccb4acb4f7593->leave($__internal_a56cbeb996c1f5da94c0debf08aa0bb8f7f0f8b7bb578b74f24ccb4acb4f7593_prof);

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
        return array (  147 => 82,  135 => 72,  126 => 71,  50 => 4,  41 => 3,  11 => 1,);
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
        <div class=\"table-responsive\">
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
