<?php

/* @Admin/Instrumento/index.html.twig */
class __TwigTemplate_f01f1a8b88f3942efc855f4b685f2750ee55f8cf31fa13a81998844d1ddbcdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Instrumento/index.html.twig", 1);
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
        $__internal_554be1eb093c6dfa90a3788317343a7c6bb688ae17d77a66fcd5fa96685d83d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554be1eb093c6dfa90a3788317343a7c6bb688ae17d77a66fcd5fa96685d83d2->enter($__internal_554be1eb093c6dfa90a3788317343a7c6bb688ae17d77a66fcd5fa96685d83d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Instrumento/index.html.twig"));

        $__internal_c21180b32f42b4b075e63837bf72215b4a2bc21a2db1ec5ec4316b075aead0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21180b32f42b4b075e63837bf72215b4a2bc21a2db1ec5ec4316b075aead0cd->enter($__internal_c21180b32f42b4b075e63837bf72215b4a2bc21a2db1ec5ec4316b075aead0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Instrumento/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554be1eb093c6dfa90a3788317343a7c6bb688ae17d77a66fcd5fa96685d83d2->leave($__internal_554be1eb093c6dfa90a3788317343a7c6bb688ae17d77a66fcd5fa96685d83d2_prof);

        
        $__internal_c21180b32f42b4b075e63837bf72215b4a2bc21a2db1ec5ec4316b075aead0cd->leave($__internal_c21180b32f42b4b075e63837bf72215b4a2bc21a2db1ec5ec4316b075aead0cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82d317597f214c69ff85ea02a4d27f1f3d1ad197720dacc9c420954cf5822f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d317597f214c69ff85ea02a4d27f1f3d1ad197720dacc9c420954cf5822f83->enter($__internal_82d317597f214c69ff85ea02a4d27f1f3d1ad197720dacc9c420954cf5822f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40361c208c4c705a01e9dabc818632c2928c586674d39c483327e82f2b9840a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40361c208c4c705a01e9dabc818632c2928c586674d39c483327e82f2b9840a4->enter($__internal_40361c208c4c705a01e9dabc818632c2928c586674d39c483327e82f2b9840a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-bar-gear\"></span> Instrumentos</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instrumento_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Instrumento</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["instrumento"] ?? $this->getContext($context, "instrumento")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                    <tr>
                        <!-- <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getId", array(), "method"), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getDsTipoInstrumento", array(), "method"), "html", null, true);
            echo "</td>
                        <!-- <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "getDtCadastro", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "getDtAtualizacao", array(), "method"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instrumento_edit", array("id" => $this->getAttribute($context["i"], "getId", array(), "method"))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getDsTipoInstrumento", array(), "method"), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getId", array(), "method"), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getDsTipoInstrumento", array(), "method"), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Instrumento</th>
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
                    Deseja realmente desativar o instrumento <strong id=\"modalDescricao\"></strong>?
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
        
        $__internal_40361c208c4c705a01e9dabc818632c2928c586674d39c483327e82f2b9840a4->leave($__internal_40361c208c4c705a01e9dabc818632c2928c586674d39c483327e82f2b9840a4_prof);

        
        $__internal_82d317597f214c69ff85ea02a4d27f1f3d1ad197720dacc9c420954cf5822f83->leave($__internal_82d317597f214c69ff85ea02a4d27f1f3d1ad197720dacc9c420954cf5822f83_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6037c56259b6c9df30ee641f6dabb61f0d8f56296b6043efb78625aae07a452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6037c56259b6c9df30ee641f6dabb61f0d8f56296b6043efb78625aae07a452->enter($__internal_f6037c56259b6c9df30ee641f6dabb61f0d8f56296b6043efb78625aae07a452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1311b7f580e93e9e5dbe6fcafffbf8f82cd4c5919fc67b7ab26707fdfd87343f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1311b7f580e93e9e5dbe6fcafffbf8f82cd4c5919fc67b7ab26707fdfd87343f->enter($__internal_1311b7f580e93e9e5dbe6fcafffbf8f82cd4c5919fc67b7ab26707fdfd87343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instrumento_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_1311b7f580e93e9e5dbe6fcafffbf8f82cd4c5919fc67b7ab26707fdfd87343f->leave($__internal_1311b7f580e93e9e5dbe6fcafffbf8f82cd4c5919fc67b7ab26707fdfd87343f_prof);

        
        $__internal_f6037c56259b6c9df30ee641f6dabb61f0d8f56296b6043efb78625aae07a452->leave($__internal_f6037c56259b6c9df30ee641f6dabb61f0d8f56296b6043efb78625aae07a452_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Instrumento/index.html.twig";
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
            <h3 class=\"box-title\"><span class=\"fa fa-bar-gear\"></span> Instrumentos</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('instrumento_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Instrumento</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for i in instrumento %}
                    <tr>
                        <!-- <td>{{ i.getId() }}</td> -->
                        <td>{{ i.getDsTipoInstrumento() }}</td>
                        <!-- <td>{{ i.getDtCadastro()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ i.getDtAtualizacao()|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"{{ path('instrumento_edit', {'id': i.getId()}) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ i.getId() }}\" data-descricao=\"{{ i.getDsTipoInstrumento() }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ i.getId() }}\" data-descricao=\"{{ i.getDsTipoInstrumento() }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                <tr>
                    <th>CÓD</th>
                    <th>Instrumento</th>
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
                    Deseja realmente desativar o instrumento <strong id=\"modalDescricao\"></strong>?
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
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"instrumento_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/Instrumento/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Instrumento\\index.html.twig");
    }
}
