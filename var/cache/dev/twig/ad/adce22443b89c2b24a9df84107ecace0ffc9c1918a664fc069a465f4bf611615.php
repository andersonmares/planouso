<?php

/* @Admin/Departamento/index.html.twig */
class __TwigTemplate_6de37eb33d7e72fd08c8299164bd0e0c2e220005659f8093409aba7f2312ed54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Departamento/index.html.twig", 1);
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
        $__internal_9599acd392edf4e734ad59b6545f6ea9cc83091605c7f7db162012fcc4326bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9599acd392edf4e734ad59b6545f6ea9cc83091605c7f7db162012fcc4326bf5->enter($__internal_9599acd392edf4e734ad59b6545f6ea9cc83091605c7f7db162012fcc4326bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Departamento/index.html.twig"));

        $__internal_38835c87476e8646b90f5a735f470a2f76a28a2086d32c13ff8f155f4970b776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38835c87476e8646b90f5a735f470a2f76a28a2086d32c13ff8f155f4970b776->enter($__internal_38835c87476e8646b90f5a735f470a2f76a28a2086d32c13ff8f155f4970b776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Departamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9599acd392edf4e734ad59b6545f6ea9cc83091605c7f7db162012fcc4326bf5->leave($__internal_9599acd392edf4e734ad59b6545f6ea9cc83091605c7f7db162012fcc4326bf5_prof);

        
        $__internal_38835c87476e8646b90f5a735f470a2f76a28a2086d32c13ff8f155f4970b776->leave($__internal_38835c87476e8646b90f5a735f470a2f76a28a2086d32c13ff8f155f4970b776_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3f5343ed09704711de704f05e548b141793875be2a12c2810f4a4b6d9fad69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f5343ed09704711de704f05e548b141793875be2a12c2810f4a4b6d9fad69c->enter($__internal_e3f5343ed09704711de704f05e548b141793875be2a12c2810f4a4b6d9fad69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68ddcdb55caa02b9368d976b231ad826a3f41c14e7f30853910ccb8eb3dbc8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ddcdb55caa02b9368d976b231ad826a3f41c14e7f30853910ccb8eb3dbc8dd->enter($__internal_68ddcdb55caa02b9368d976b231ad826a3f41c14e7f30853910ccb8eb3dbc8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-bank\"></span> Departamentos</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_add");
        echo "\" class=\"btn btn-success pull-right\" data-toggle=\"tooltip\" title=\"Teste\">Incluir</a>
            <!-- <a href=\"#\" class=\"btn btn-success pull-right\" data-toggle=\"tooltip\" title=\"Teste\"> Teste de Link </a> -->
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- 26/02/2018 - Retirada da coluna com código
                    <th>CÓD</th>
                    -->
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departamento"] ?? $this->getContext($context, "departamento")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 31
            echo "                <tr>
                    <!-- 26/02/2018 - Retirada da coluna com código
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "</td>
                    -->
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dsDepartamento", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "sgDepartamento", array(), "method"), "html", null, true);
            echo "</td>
                    <!-- <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                    <!-- <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                    <td width=\"150\">
                        <a class=\"btn btn-primary\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_edit", array("id" => $this->getAttribute($context["d"], "getId", array(), "method"))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Editar\"><li class=\"fa fa-edit\"> <!-- Editar --></li></a>
                        <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "\" data-departamento=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dsDepartamento", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> <!-- Desativar --></li></a>
                    </td>
                    <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "\" data-departamento=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dsDepartamento", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
                <tfoot>
                <!-- 26/02/2019 - Retirada das infomações do cabeçalho no final da grid
                <tr>
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
                </tr>
                -->
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
                    Deseja realmente desativar o departamento <strong id=\"descricao\"></strong>?
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
        
        $__internal_68ddcdb55caa02b9368d976b231ad826a3f41c14e7f30853910ccb8eb3dbc8dd->leave($__internal_68ddcdb55caa02b9368d976b231ad826a3f41c14e7f30853910ccb8eb3dbc8dd_prof);

        
        $__internal_e3f5343ed09704711de704f05e548b141793875be2a12c2810f4a4b6d9fad69c->leave($__internal_e3f5343ed09704711de704f05e548b141793875be2a12c2810f4a4b6d9fad69c_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9404dc2f64f5eadc1f65c2fa99cdd77268a06c15968f39075c892486003cf058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9404dc2f64f5eadc1f65c2fa99cdd77268a06c15968f39075c892486003cf058->enter($__internal_9404dc2f64f5eadc1f65c2fa99cdd77268a06c15968f39075c892486003cf058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d8d090b55903c37bfcd094d25a0848d817f879f0279f40345508212ce32901d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d090b55903c37bfcd094d25a0848d817f879f0279f40345508212ce32901d3->enter($__internal_d8d090b55903c37bfcd094d25a0848d817f879f0279f40345508212ce32901d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
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
                var descricao = \$(this).data('departamento');

                \$(\"#descricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_d8d090b55903c37bfcd094d25a0848d817f879f0279f40345508212ce32901d3->leave($__internal_d8d090b55903c37bfcd094d25a0848d817f879f0279f40345508212ce32901d3_prof);

        
        $__internal_9404dc2f64f5eadc1f65c2fa99cdd77268a06c15968f39075c892486003cf058->leave($__internal_9404dc2f64f5eadc1f65c2fa99cdd77268a06c15968f39075c892486003cf058_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Departamento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 107,  191 => 87,  182 => 86,  133 => 46,  122 => 43,  115 => 41,  111 => 40,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  89 => 33,  85 => 31,  81 => 30,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-bank\"></span> Departamentos</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('departamento_add') }}\" class=\"btn btn-success pull-right\" data-toggle=\"tooltip\" title=\"Teste\">Incluir</a>
            <!-- <a href=\"#\" class=\"btn btn-success pull-right\" data-toggle=\"tooltip\" title=\"Teste\"> Teste de Link </a> -->
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- 26/02/2018 - Retirada da coluna com código
                    <th>CÓD</th>
                    -->
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for d in departamento %}
                <tr>
                    <!-- 26/02/2018 - Retirada da coluna com código
                    <td>{{ d.getId() }}</td>
                    -->
                    <td>{{ d.dsDepartamento() }}</td>
                    <td>{{ d.sgDepartamento() }}</td>
                    <!-- <td>{{ d.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                    <!-- <td>{{ d.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                    <td width=\"150\">
                        <a class=\"btn btn-primary\" href=\"{{ path('departamento_edit', {'id': d.getId()}) }}\" data-toggle=\"tooltip\" title=\"Editar\"><li class=\"fa fa-edit\"> <!-- Editar --></li></a>
                        <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ d.getId() }}\" data-departamento=\"{{ d.dsDepartamento }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> <!-- Desativar --></li></a>
                    </td>
                    <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ d.getId() }}\" data-departamento=\"{{ d.dsDepartamento }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <!-- 26/02/2019 - Retirada das infomações do cabeçalho no final da grid
                <tr>
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
                </tr>
                -->
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
                    Deseja realmente desativar o departamento <strong id=\"descricao\"></strong>?
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
                var descricao = \$(this).data('departamento');

                \$(\"#descricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"departamento_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/Departamento/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Departamento\\index.html.twig");
    }
}
