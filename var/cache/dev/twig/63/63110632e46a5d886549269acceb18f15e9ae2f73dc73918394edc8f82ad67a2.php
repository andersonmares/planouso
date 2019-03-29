<?php

/* @Admin/TipoAtividade/index.html.twig */
class __TwigTemplate_e68547d9be29928d4b857d7a691af9a45c06f1d39417c8c1d7edf43f800b5576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/TipoAtividade/index.html.twig", 1);
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
        $__internal_fefb42b3bdfb79676cae49227ab1c2ec22bcdc1a3ba4e433ed11ac4c108c5221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefb42b3bdfb79676cae49227ab1c2ec22bcdc1a3ba4e433ed11ac4c108c5221->enter($__internal_fefb42b3bdfb79676cae49227ab1c2ec22bcdc1a3ba4e433ed11ac4c108c5221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoAtividade/index.html.twig"));

        $__internal_989093211b90563a90d8f2ec2005488f3c163303a9945c950a077d6ffb4673f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989093211b90563a90d8f2ec2005488f3c163303a9945c950a077d6ffb4673f9->enter($__internal_989093211b90563a90d8f2ec2005488f3c163303a9945c950a077d6ffb4673f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoAtividade/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefb42b3bdfb79676cae49227ab1c2ec22bcdc1a3ba4e433ed11ac4c108c5221->leave($__internal_fefb42b3bdfb79676cae49227ab1c2ec22bcdc1a3ba4e433ed11ac4c108c5221_prof);

        
        $__internal_989093211b90563a90d8f2ec2005488f3c163303a9945c950a077d6ffb4673f9->leave($__internal_989093211b90563a90d8f2ec2005488f3c163303a9945c950a077d6ffb4673f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_897c3679f7771b16f2e41df238f32b037de1d84fd30ecbeafa31d647facc3a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897c3679f7771b16f2e41df238f32b037de1d84fd30ecbeafa31d647facc3a86->enter($__internal_897c3679f7771b16f2e41df238f32b037de1d84fd30ecbeafa31d647facc3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3c7ee1c22e433392bf2ce971b0b832994ff43dbc775f3092bde318da2d1657f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c7ee1c22e433392bf2ce971b0b832994ff43dbc775f3092bde318da2d1657f->enter($__internal_a3c7ee1c22e433392bf2ce971b0b832994ff43dbc775f3092bde318da2d1657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-server\"></span> Ano de Referência</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipoatividade_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Ano de Referência</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["atividade"] ?? $this->getContext($context, "atividade")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 24
            echo "                    <tr>
                        <!-- <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getId", array(), "method"), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getDsTipoAtividade", array(), "method"), "html", null, true);
            echo "</td>
                        <!-- <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipoatividade_edit", array("id" => $this->getAttribute($context["a"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsTipoAtividade", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>

                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsTipoAtividade", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Tipo de Atividade</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
                </tr>
                </tfoot>
                -->
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
                    Deseja realmente desativar o Tipo de Atividade <strong id=\"descricao\"></strong>?
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
        
        $__internal_a3c7ee1c22e433392bf2ce971b0b832994ff43dbc775f3092bde318da2d1657f->leave($__internal_a3c7ee1c22e433392bf2ce971b0b832994ff43dbc775f3092bde318da2d1657f_prof);

        
        $__internal_897c3679f7771b16f2e41df238f32b037de1d84fd30ecbeafa31d647facc3a86->leave($__internal_897c3679f7771b16f2e41df238f32b037de1d84fd30ecbeafa31d647facc3a86_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee13ce4c275a7e8d73087cde050a07c19171268589de179ed95cb0c135573c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee13ce4c275a7e8d73087cde050a07c19171268589de179ed95cb0c135573c46->enter($__internal_ee13ce4c275a7e8d73087cde050a07c19171268589de179ed95cb0c135573c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_629c63e9d58d262dbe709820b805812c540cdd468069bca4b7bd846db2e4ea86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629c63e9d58d262dbe709820b805812c540cdd468069bca4b7bd846db2e4ea86->enter($__internal_629c63e9d58d262dbe709820b805812c540cdd468069bca4b7bd846db2e4ea86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <script>
        \$(function () {

            \$('#lista').DataTable({
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

            \$(document).on(\"click\", \".desativar\", function () {
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#descricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipoatividade_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_629c63e9d58d262dbe709820b805812c540cdd468069bca4b7bd846db2e4ea86->leave($__internal_629c63e9d58d262dbe709820b805812c540cdd468069bca4b7bd846db2e4ea86_prof);

        
        $__internal_ee13ce4c275a7e8d73087cde050a07c19171268589de179ed95cb0c135573c46->leave($__internal_ee13ce4c275a7e8d73087cde050a07c19171268589de179ed95cb0c135573c46_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoAtividade/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 97,  178 => 77,  169 => 76,  121 => 37,  110 => 34,  102 => 31,  98 => 30,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-server\"></span> Ano de Referência</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('tipoatividade_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Ano de Referência</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for a in atividade %}
                    <tr>
                        <!-- <td>{{ a.getId() }}</td> -->
                        <td>{{ a.getDsTipoAtividade() }}</td>
                        <!-- <td>{{ a.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ a.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"{{ path('tipoatividade_edit', {'id': a.getId()}) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ a.getId() }}\" data-descricao=\"{{ a.dsTipoAtividade }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>

                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ a.getId() }}\" data-descricao=\"{{ a.dsTipoAtividade }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Tipo de Atividade</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
                </tr>
                </tfoot>
                -->
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
                    Deseja realmente desativar o Tipo de Atividade <strong id=\"descricao\"></strong>?
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

            \$('#lista').DataTable({
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

            \$(document).on(\"click\", \".desativar\", function () {
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#descricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"tipoatividade_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/TipoAtividade/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\TipoAtividade\\index.html.twig");
    }
}
