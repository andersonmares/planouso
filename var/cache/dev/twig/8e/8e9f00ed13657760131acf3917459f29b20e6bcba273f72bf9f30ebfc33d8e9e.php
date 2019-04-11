<?php

/* @Admin/VinculoPlanejamento/index.html.twig */
class __TwigTemplate_c33f29003ce0878f5f7b701f9aed063d74be6ecdb3ebb9a5993a955fa14d6998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/VinculoPlanejamento/index.html.twig", 1);
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
        $__internal_2e843b24fff716e9f5d0a58deafa8b3b9faecab51ccd1d5b5a5902c3d2f72606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e843b24fff716e9f5d0a58deafa8b3b9faecab51ccd1d5b5a5902c3d2f72606->enter($__internal_2e843b24fff716e9f5d0a58deafa8b3b9faecab51ccd1d5b5a5902c3d2f72606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/VinculoPlanejamento/index.html.twig"));

        $__internal_81980e852e6d7d3bb31df072a8fa9c495e9f7d3207766e9118188bca90b9fc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81980e852e6d7d3bb31df072a8fa9c495e9f7d3207766e9118188bca90b9fc69->enter($__internal_81980e852e6d7d3bb31df072a8fa9c495e9f7d3207766e9118188bca90b9fc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/VinculoPlanejamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e843b24fff716e9f5d0a58deafa8b3b9faecab51ccd1d5b5a5902c3d2f72606->leave($__internal_2e843b24fff716e9f5d0a58deafa8b3b9faecab51ccd1d5b5a5902c3d2f72606_prof);

        
        $__internal_81980e852e6d7d3bb31df072a8fa9c495e9f7d3207766e9118188bca90b9fc69->leave($__internal_81980e852e6d7d3bb31df072a8fa9c495e9f7d3207766e9118188bca90b9fc69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e093d0d9b5011daea83e7f2b9496b430c44fbe3826bece12b7bbdf36ba7a395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e093d0d9b5011daea83e7f2b9496b430c44fbe3826bece12b7bbdf36ba7a395->enter($__internal_4e093d0d9b5011daea83e7f2b9496b430c44fbe3826bece12b7bbdf36ba7a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b815b611fb5257eaea208e8f05c6ab47fadf3ceef69a65c8b68fd0df011b02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b815b611fb5257eaea208e8f05c6ab47fadf3ceef69a65c8b68fd0df011b02b->enter($__internal_5b815b611fb5257eaea208e8f05c6ab47fadf3ceef69a65c8b68fd0df011b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Vinculo Planejamento</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vinculoplanejamento_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Vínculo de Planejamento</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["vinculo"] ?? $this->getContext($context, "vinculo")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 24
            echo "                    <tr>
                        <!-- <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "getId", array(), "method"), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "getDsVinculoPlanejamento", array(), "method"), "html", null, true);
            echo "</td>
                        <!-- <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vinculoplanejamento_edit", array("id" => $this->getAttribute($context["v"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "getDsVinculoPlanejamento", array(), "method"), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "getDsVinculoPlanejamento", array(), "method"), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Vínculo de Planejamento</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
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
                    Deseja realmente desativar o Vínculo de Planejamento <strong id=\"modalDescricao\"></strong>?
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
        
        $__internal_5b815b611fb5257eaea208e8f05c6ab47fadf3ceef69a65c8b68fd0df011b02b->leave($__internal_5b815b611fb5257eaea208e8f05c6ab47fadf3ceef69a65c8b68fd0df011b02b_prof);

        
        $__internal_4e093d0d9b5011daea83e7f2b9496b430c44fbe3826bece12b7bbdf36ba7a395->leave($__internal_4e093d0d9b5011daea83e7f2b9496b430c44fbe3826bece12b7bbdf36ba7a395_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2214264fe4c512c0d2fbb05f2afc1e901a513b77e40b35a12717fca3506c19f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2214264fe4c512c0d2fbb05f2afc1e901a513b77e40b35a12717fca3506c19f8->enter($__internal_2214264fe4c512c0d2fbb05f2afc1e901a513b77e40b35a12717fca3506c19f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb75e24b8dbdf370746c3ec0279bf06f7ef0cfed161d39dc39653d494e152116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb75e24b8dbdf370746c3ec0279bf06f7ef0cfed161d39dc39653d494e152116->enter($__internal_eb75e24b8dbdf370746c3ec0279bf06f7ef0cfed161d39dc39653d494e152116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vinculoplanejamento_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_eb75e24b8dbdf370746c3ec0279bf06f7ef0cfed161d39dc39653d494e152116->leave($__internal_eb75e24b8dbdf370746c3ec0279bf06f7ef0cfed161d39dc39653d494e152116_prof);

        
        $__internal_2214264fe4c512c0d2fbb05f2afc1e901a513b77e40b35a12717fca3506c19f8->leave($__internal_2214264fe4c512c0d2fbb05f2afc1e901a513b77e40b35a12717fca3506c19f8_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/VinculoPlanejamento/index.html.twig";
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
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Vinculo Planejamento</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('vinculoplanejamento_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Vínculo de Planejamento</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for v in vinculo %}
                    <tr>
                        <!-- <td>{{ v.getId() }}</td> -->
                        <td>{{ v.getDsVinculoPlanejamento() }}</td>
                        <!-- <td>{{ v.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ v.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"{{ path('vinculoplanejamento_edit', {'id': v.getId()}) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ v.getId() }}\" data-descricao=\"{{ v.getDsVinculoPlanejamento() }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ v.getId() }}\" data-descricao=\"{{ v.getDsVinculoPlanejamento() }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Vínculo de Planejamento</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
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
                    Deseja realmente desativar o Vínculo de Planejamento <strong id=\"modalDescricao\"></strong>?
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

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"vinculoplanejamento_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/VinculoPlanejamento/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\VinculoPlanejamento\\index.html.twig");
    }
}
