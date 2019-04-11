<?php

/* @Admin/Atividade/index.html.twig */
class __TwigTemplate_21f16a6308065cc5016f75b626541648ab608602d1ade86d44629c0758838af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Atividade/index.html.twig", 1);
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
        $__internal_5ecb02e28bbafc90c613ea9e3858fde0126ab2557353d030d4852bd8ddc1a57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecb02e28bbafc90c613ea9e3858fde0126ab2557353d030d4852bd8ddc1a57f->enter($__internal_5ecb02e28bbafc90c613ea9e3858fde0126ab2557353d030d4852bd8ddc1a57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Atividade/index.html.twig"));

        $__internal_15fb4b05aa4fd4620ccd923c15f4441ba69fa1b0e9bf37417e7e8e6b8bb2dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fb4b05aa4fd4620ccd923c15f4441ba69fa1b0e9bf37417e7e8e6b8bb2dac5->enter($__internal_15fb4b05aa4fd4620ccd923c15f4441ba69fa1b0e9bf37417e7e8e6b8bb2dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Atividade/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ecb02e28bbafc90c613ea9e3858fde0126ab2557353d030d4852bd8ddc1a57f->leave($__internal_5ecb02e28bbafc90c613ea9e3858fde0126ab2557353d030d4852bd8ddc1a57f_prof);

        
        $__internal_15fb4b05aa4fd4620ccd923c15f4441ba69fa1b0e9bf37417e7e8e6b8bb2dac5->leave($__internal_15fb4b05aa4fd4620ccd923c15f4441ba69fa1b0e9bf37417e7e8e6b8bb2dac5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11c96e1166e3c5ce99549394c8965ef92b03aaa32db1c8a7b10ca687034a3c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c96e1166e3c5ce99549394c8965ef92b03aaa32db1c8a7b10ca687034a3c8d->enter($__internal_11c96e1166e3c5ce99549394c8965ef92b03aaa32db1c8a7b10ca687034a3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10c5e07c31517c12dd09612d2c9b8f429345621cc8dd6f93cff389cd512eec52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c5e07c31517c12dd09612d2c9b8f429345621cc8dd6f93cff389cd512eec52->enter($__internal_10c5e07c31517c12dd09612d2c9b8f429345621cc8dd6f93cff389cd512eec52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Objeto</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <<th>Objeto</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsAtividade", array(), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_edit", array("id" => $this->getAttribute($context["a"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsAtividade", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsAtividade", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Atividade</th>
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
                    Deseja realmente desativar o Objeto? <strong id=\"descricao\"></strong>?
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
        
        $__internal_10c5e07c31517c12dd09612d2c9b8f429345621cc8dd6f93cff389cd512eec52->leave($__internal_10c5e07c31517c12dd09612d2c9b8f429345621cc8dd6f93cff389cd512eec52_prof);

        
        $__internal_11c96e1166e3c5ce99549394c8965ef92b03aaa32db1c8a7b10ca687034a3c8d->leave($__internal_11c96e1166e3c5ce99549394c8965ef92b03aaa32db1c8a7b10ca687034a3c8d_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2ca65346f3681ed100645fb6d24bcfc823ddd59c2da50ec30479a40f6eb29c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ca65346f3681ed100645fb6d24bcfc823ddd59c2da50ec30479a40f6eb29c2->enter($__internal_d2ca65346f3681ed100645fb6d24bcfc823ddd59c2da50ec30479a40f6eb29c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_87e6431379674be0e7629b69deb0d3e1aff57a5a566636c156823495fa9c3891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e6431379674be0e7629b69deb0d3e1aff57a5a566636c156823495fa9c3891->enter($__internal_87e6431379674be0e7629b69deb0d3e1aff57a5a566636c156823495fa9c3891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_87e6431379674be0e7629b69deb0d3e1aff57a5a566636c156823495fa9c3891->leave($__internal_87e6431379674be0e7629b69deb0d3e1aff57a5a566636c156823495fa9c3891_prof);

        
        $__internal_d2ca65346f3681ed100645fb6d24bcfc823ddd59c2da50ec30479a40f6eb29c2->leave($__internal_d2ca65346f3681ed100645fb6d24bcfc823ddd59c2da50ec30479a40f6eb29c2_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Atividade/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 97,  178 => 77,  169 => 76,  120 => 36,  109 => 33,  102 => 31,  98 => 30,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Objeto</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('atividade_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <<th>Objeto</th>
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
                        <td>{{ a.dsAtividade() }}</td>
                        <!-- <td>{{ a.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ a.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"{{ path('atividade_edit', {'id': a.getId()}) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ a.getId() }}\" data-descricao=\"{{ a.dsAtividade }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ a.getId() }}\" data-descricao=\"{{ a.dsAtividade }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Atividade</th>
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
                    Deseja realmente desativar o Objeto? <strong id=\"descricao\"></strong>?
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
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"atividade_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/Atividade/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Atividade\\index.html.twig");
    }
}
