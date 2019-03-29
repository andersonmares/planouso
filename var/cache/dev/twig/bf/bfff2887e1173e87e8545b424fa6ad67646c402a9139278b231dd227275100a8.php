<?php

/* @Admin/Despesa/index.html.twig */
class __TwigTemplate_60e57624d53048c43f39f1324c3314bc7f068e8a6bc6cb5b74bbdaacfca4a1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Despesa/index.html.twig", 1);
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
        $__internal_63afaebee4b40e31d801040b1af324a2d2c1f9d6133321a00c8caa94d666b80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63afaebee4b40e31d801040b1af324a2d2c1f9d6133321a00c8caa94d666b80e->enter($__internal_63afaebee4b40e31d801040b1af324a2d2c1f9d6133321a00c8caa94d666b80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Despesa/index.html.twig"));

        $__internal_832796f8682af2c38d0db879326ce520e0c8aff112a9428af5ca9267829fa4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832796f8682af2c38d0db879326ce520e0c8aff112a9428af5ca9267829fa4c8->enter($__internal_832796f8682af2c38d0db879326ce520e0c8aff112a9428af5ca9267829fa4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Despesa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63afaebee4b40e31d801040b1af324a2d2c1f9d6133321a00c8caa94d666b80e->leave($__internal_63afaebee4b40e31d801040b1af324a2d2c1f9d6133321a00c8caa94d666b80e_prof);

        
        $__internal_832796f8682af2c38d0db879326ce520e0c8aff112a9428af5ca9267829fa4c8->leave($__internal_832796f8682af2c38d0db879326ce520e0c8aff112a9428af5ca9267829fa4c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fbaf805420acab2a793fed087c7b01888cddf56f6b57f129e49a5f7e439ca60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbaf805420acab2a793fed087c7b01888cddf56f6b57f129e49a5f7e439ca60->enter($__internal_1fbaf805420acab2a793fed087c7b01888cddf56f6b57f129e49a5f7e439ca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b38492bbf4de26de0c55cd86423ca9fc9a389306a8256e4d6c195e84cf8b270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38492bbf4de26de0c55cd86423ca9fc9a389306a8256e4d6c195e84cf8b270->enter($__internal_1b38492bbf4de26de0c55cd86423ca9fc9a389306a8256e4d6c195e84cf8b270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-bar-chart\"></span> Despesas</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("despesa_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Despesa</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["despesa"] ?? $this->getContext($context, "despesa")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 24
            echo "                    <tr>
                        <!-- <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getDsTipoDespesa", array(), "method"), "html", null, true);
            echo "</td>
                        <!-- <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("despesa_edit", array("id" => $this->getAttribute($context["d"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getDsTipoDespesa", array(), "method"), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getDsTipoDespesa", array(), "method"), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Despesa</th>
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
                    Deseja realmente desativar a despesa <strong id=\"modalDescricao\"></strong>?
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
        
        $__internal_1b38492bbf4de26de0c55cd86423ca9fc9a389306a8256e4d6c195e84cf8b270->leave($__internal_1b38492bbf4de26de0c55cd86423ca9fc9a389306a8256e4d6c195e84cf8b270_prof);

        
        $__internal_1fbaf805420acab2a793fed087c7b01888cddf56f6b57f129e49a5f7e439ca60->leave($__internal_1fbaf805420acab2a793fed087c7b01888cddf56f6b57f129e49a5f7e439ca60_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd2a2022c69ef132f64d310e45ccb6e7e843ced8ce9b8c54fb6d43e4c8759d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2a2022c69ef132f64d310e45ccb6e7e843ced8ce9b8c54fb6d43e4c8759d05->enter($__internal_dd2a2022c69ef132f64d310e45ccb6e7e843ced8ce9b8c54fb6d43e4c8759d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b403849b8796cb7b88a7995226323da337696cfe1597ca7cef00bc6119d12270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b403849b8796cb7b88a7995226323da337696cfe1597ca7cef00bc6119d12270->enter($__internal_b403849b8796cb7b88a7995226323da337696cfe1597ca7cef00bc6119d12270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
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
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("despesa_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_b403849b8796cb7b88a7995226323da337696cfe1597ca7cef00bc6119d12270->leave($__internal_b403849b8796cb7b88a7995226323da337696cfe1597ca7cef00bc6119d12270_prof);

        
        $__internal_dd2a2022c69ef132f64d310e45ccb6e7e843ced8ce9b8c54fb6d43e4c8759d05->leave($__internal_dd2a2022c69ef132f64d310e45ccb6e7e843ced8ce9b8c54fb6d43e4c8759d05_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Despesa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 96,  177 => 76,  168 => 75,  120 => 36,  109 => 33,  102 => 31,  98 => 30,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-bar-chart\"></span> Despesas</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('despesa_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Despesa</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for d in despesa %}
                    <tr>
                        <!-- <td>{{ d.getId() }}</td> -->
                        <td>{{ d.getDsTipoDespesa() }}</td>
                        <!-- <td>{{ d.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ d.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"{{ path('despesa_edit', {'id': d.getId()}) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ d.getId() }}\" data-descricao=\"{{ d.getDsTipoDespesa() }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ d.getId() }}\" data-descricao=\"{{ d.getDsTipoDespesa() }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Despesa</th>
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
                    Deseja realmente desativar a despesa <strong id=\"modalDescricao\"></strong>?
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
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"despesa_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/Despesa/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Despesa\\index.html.twig");
    }
}
