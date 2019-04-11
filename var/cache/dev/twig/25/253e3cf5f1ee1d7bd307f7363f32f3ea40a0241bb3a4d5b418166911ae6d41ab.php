<?php

/* @Admin/Componente/index.html.twig */
class __TwigTemplate_6fd47b3c65484ea8207713924ff399ef2c291605ad286bdd021c3c9b56d05288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Componente/index.html.twig", 1);
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
        $__internal_e8a4334cd67e9878bf41311ca7262b90220a28291205f78990b873a7458812c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a4334cd67e9878bf41311ca7262b90220a28291205f78990b873a7458812c0->enter($__internal_e8a4334cd67e9878bf41311ca7262b90220a28291205f78990b873a7458812c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Componente/index.html.twig"));

        $__internal_e567f90450d6660e1d1313d011f04349183226b5c86c5e801710354fde9856f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e567f90450d6660e1d1313d011f04349183226b5c86c5e801710354fde9856f7->enter($__internal_e567f90450d6660e1d1313d011f04349183226b5c86c5e801710354fde9856f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Componente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a4334cd67e9878bf41311ca7262b90220a28291205f78990b873a7458812c0->leave($__internal_e8a4334cd67e9878bf41311ca7262b90220a28291205f78990b873a7458812c0_prof);

        
        $__internal_e567f90450d6660e1d1313d011f04349183226b5c86c5e801710354fde9856f7->leave($__internal_e567f90450d6660e1d1313d011f04349183226b5c86c5e801710354fde9856f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de2153a47f8027724a41e837d0e6d3892357904480de5308330353d9818ba7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2153a47f8027724a41e837d0e6d3892357904480de5308330353d9818ba7af->enter($__internal_de2153a47f8027724a41e837d0e6d3892357904480de5308330353d9818ba7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81d347268d682fe375bc37452d409e913e3284790c852e86f171084fefb951b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d347268d682fe375bc37452d409e913e3284790c852e86f171084fefb951b0->enter($__internal_81d347268d682fe375bc37452d409e913e3284790c852e86f171084fefb951b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-bars\"></span> Componentes</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("componente_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Componente</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["componente"] ?? $this->getContext($context, "componente")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 24
            echo "                    <tr>
                        <!-- <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getId", array(), "method"), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "dsTipoComponente", array(), "method"), "html", null, true);
            echo "</td>
                        <!-- <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <td>
                            <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("componente_edit", array("id" => $this->getAttribute($context["c"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "dsTipoComponente", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "dsTipoComponente", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Componente</th>
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
                    Deseja realmente desativar o Componente <strong id=\"descricao\"></strong>?
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
        
        $__internal_81d347268d682fe375bc37452d409e913e3284790c852e86f171084fefb951b0->leave($__internal_81d347268d682fe375bc37452d409e913e3284790c852e86f171084fefb951b0_prof);

        
        $__internal_de2153a47f8027724a41e837d0e6d3892357904480de5308330353d9818ba7af->leave($__internal_de2153a47f8027724a41e837d0e6d3892357904480de5308330353d9818ba7af_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3354824488c0b2fc3da3e2050d1a7fa5ffab8722a4a9b915df6279140a2d41c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3354824488c0b2fc3da3e2050d1a7fa5ffab8722a4a9b915df6279140a2d41c3->enter($__internal_3354824488c0b2fc3da3e2050d1a7fa5ffab8722a4a9b915df6279140a2d41c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c83c00db5aaf671b3d69132c8bc5b292ab11ef442bb237d6a31b9130e5ce9609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83c00db5aaf671b3d69132c8bc5b292ab11ef442bb237d6a31b9130e5ce9609->enter($__internal_c83c00db5aaf671b3d69132c8bc5b292ab11ef442bb237d6a31b9130e5ce9609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

                \$(\"#descricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("componente_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_c83c00db5aaf671b3d69132c8bc5b292ab11ef442bb237d6a31b9130e5ce9609->leave($__internal_c83c00db5aaf671b3d69132c8bc5b292ab11ef442bb237d6a31b9130e5ce9609_prof);

        
        $__internal_3354824488c0b2fc3da3e2050d1a7fa5ffab8722a4a9b915df6279140a2d41c3->leave($__internal_3354824488c0b2fc3da3e2050d1a7fa5ffab8722a4a9b915df6279140a2d41c3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Componente/index.html.twig";
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
            <h3 class=\"box-title\"><span class=\"fa fa-bars\"></span> Componentes</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('componente_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Componente</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for c in componente %}
                    <tr>
                        <!-- <td>{{ c.getId() }}</td> -->
                        <td>{{ c.dsTipoComponente() }}</td>
                        <!-- <td>{{ c.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ c.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td>
                            <a class=\"btn btn-primary\" href=\"{{ path('componente_edit', {'id': c.getId()}) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ c.getId() }}\" data-descricao=\"{{ c.dsTipoComponente }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ c.getId() }}\" data-descricao=\"{{ c.dsTipoComponente }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Componente</th>
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
                    Deseja realmente desativar o Componente <strong id=\"descricao\"></strong>?
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
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"componente_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/Componente/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Componente\\index.html.twig");
    }
}
