<?php

/* @Admin/Departamento/index.html.twig */
class __TwigTemplate_0b434df71edd0907060c81a8e5fea844451e0a942fa1379f93f33e9021ca8f43 extends Twig_Template
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
        $__internal_3c4ba4142b1246847d4140deeeae2f222452d85dd2eb72a1e552fa7ba44709d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4ba4142b1246847d4140deeeae2f222452d85dd2eb72a1e552fa7ba44709d4->enter($__internal_3c4ba4142b1246847d4140deeeae2f222452d85dd2eb72a1e552fa7ba44709d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Departamento/index.html.twig"));

        $__internal_b4f34d2e5b93d7ae15463d4197f3946edd585963558fe0added91a605c4e83df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f34d2e5b93d7ae15463d4197f3946edd585963558fe0added91a605c4e83df->enter($__internal_b4f34d2e5b93d7ae15463d4197f3946edd585963558fe0added91a605c4e83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Departamento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c4ba4142b1246847d4140deeeae2f222452d85dd2eb72a1e552fa7ba44709d4->leave($__internal_3c4ba4142b1246847d4140deeeae2f222452d85dd2eb72a1e552fa7ba44709d4_prof);

        
        $__internal_b4f34d2e5b93d7ae15463d4197f3946edd585963558fe0added91a605c4e83df->leave($__internal_b4f34d2e5b93d7ae15463d4197f3946edd585963558fe0added91a605c4e83df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9659ec3c485be59484d1995cf3bacdb77447d1b8966274e1a3cfb9282f5f80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9659ec3c485be59484d1995cf3bacdb77447d1b8966274e1a3cfb9282f5f80a->enter($__internal_f9659ec3c485be59484d1995cf3bacdb77447d1b8966274e1a3cfb9282f5f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e3e7b460a8dc8ea31de184d3de6fefcfe0586c1374512e8950585e0bd28ddf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3e7b460a8dc8ea31de184d3de6fefcfe0586c1374512e8950585e0bd28ddf5->enter($__internal_8e3e7b460a8dc8ea31de184d3de6fefcfe0586c1374512e8950585e0bd28ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-bank\"></span> Departamentos</h3>
        </div>
        <div class=\"box-body\">
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_add");
        echo "\" class=\"btn btn-success pull-right\">Registrar Departamento</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departamento"] ?? $this->getContext($context, "departamento")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 24
            echo "                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dsDepartamento", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "sgDepartamento", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                    <td><a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_edit", array("id" => $this->getAttribute($context["d"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> Editar</li></a></td>
                    <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "getId", array(), "method"), "html", null, true);
            echo "\" data-departamento=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dsDepartamento", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
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
        
        $__internal_8e3e7b460a8dc8ea31de184d3de6fefcfe0586c1374512e8950585e0bd28ddf5->leave($__internal_8e3e7b460a8dc8ea31de184d3de6fefcfe0586c1374512e8950585e0bd28ddf5_prof);

        
        $__internal_f9659ec3c485be59484d1995cf3bacdb77447d1b8966274e1a3cfb9282f5f80a->leave($__internal_f9659ec3c485be59484d1995cf3bacdb77447d1b8966274e1a3cfb9282f5f80a_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b967c286a9f18b68a092002c7e2d5244099d0886704c7a00186fb7518b588e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b967c286a9f18b68a092002c7e2d5244099d0886704c7a00186fb7518b588e9->enter($__internal_3b967c286a9f18b68a092002c7e2d5244099d0886704c7a00186fb7518b588e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b06693dbb17170b1bf9799e0378795c26aa12061e45ef10cad6957b9fbb7d2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06693dbb17170b1bf9799e0378795c26aa12061e45ef10cad6957b9fbb7d2c3->enter($__internal_b06693dbb17170b1bf9799e0378795c26aa12061e45ef10cad6957b9fbb7d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
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
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_b06693dbb17170b1bf9799e0378795c26aa12061e45ef10cad6957b9fbb7d2c3->leave($__internal_b06693dbb17170b1bf9799e0378795c26aa12061e45ef10cad6957b9fbb7d2c3_prof);

        
        $__internal_3b967c286a9f18b68a092002c7e2d5244099d0886704c7a00186fb7518b588e9->leave($__internal_3b967c286a9f18b68a092002c7e2d5244099d0886704c7a00186fb7518b588e9_prof);

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
        return array (  193 => 92,  171 => 72,  162 => 71,  116 => 34,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
        <div class=\"box-body\">
            <a href=\"{{ path('departamento_add') }}\" class=\"btn btn-success pull-right\">Registrar Departamento</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
                </thead>
                <tbody>
                {% for d in departamento %}
                <tr>
                    <td>{{ d.getId() }}</td>
                    <td>{{ d.dsDepartamento() }}</td>
                    <td>{{ d.sgDepartamento() }}</td>
                    <td>{{ d.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td>
                    <td>{{ d.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td>
                    <td><a class=\"btn btn-primary\" href=\"{{ path('departamento_edit', {'id': d.getId()}) }}\"><li class=\"fa fa-edit\"> Editar</li></a></td>
                    <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ d.getId() }}\" data-departamento=\"{{ d.dsDepartamento }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td>
                </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Sigla</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
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
