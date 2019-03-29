<?php

/* @Admin/RedePrograma/index.html.twig */
class __TwigTemplate_c5881fe7319f88ee1269848aab2d077acad51166d01166c29e62677aec312e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/RedePrograma/index.html.twig", 1);
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
        $__internal_01958aacb2f6db4168f61b2c9f16ef497e3f9acdfec7ba7e3bf984ed0d8145d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01958aacb2f6db4168f61b2c9f16ef497e3f9acdfec7ba7e3bf984ed0d8145d4->enter($__internal_01958aacb2f6db4168f61b2c9f16ef497e3f9acdfec7ba7e3bf984ed0d8145d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/RedePrograma/index.html.twig"));

        $__internal_2c0f51970f8bcab9c398dadfa0be68c997a90aa9b0fac36960da08f5e75a00a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0f51970f8bcab9c398dadfa0be68c997a90aa9b0fac36960da08f5e75a00a7->enter($__internal_2c0f51970f8bcab9c398dadfa0be68c997a90aa9b0fac36960da08f5e75a00a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/RedePrograma/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01958aacb2f6db4168f61b2c9f16ef497e3f9acdfec7ba7e3bf984ed0d8145d4->leave($__internal_01958aacb2f6db4168f61b2c9f16ef497e3f9acdfec7ba7e3bf984ed0d8145d4_prof);

        
        $__internal_2c0f51970f8bcab9c398dadfa0be68c997a90aa9b0fac36960da08f5e75a00a7->leave($__internal_2c0f51970f8bcab9c398dadfa0be68c997a90aa9b0fac36960da08f5e75a00a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a30e6050039660d11a155d9cf94c571217ed950400f57563b7fdbe73e1a2666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a30e6050039660d11a155d9cf94c571217ed950400f57563b7fdbe73e1a2666->enter($__internal_7a30e6050039660d11a155d9cf94c571217ed950400f57563b7fdbe73e1a2666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa4bc97652084e0ebe1e66aabad4e821e3f79abe276cbe09b7f4373f9533a280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4bc97652084e0ebe1e66aabad4e821e3f79abe276cbe09b7f4373f9533a280->enter($__internal_fa4bc97652084e0ebe1e66aabad4e821e3f79abe276cbe09b7f4373f9533a280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-hospital-o\"></span> Política/Programa/Rede</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redeprograma_add");
        echo "\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Departamento (Sigla)</th>
                    <th>Política/Programa/Rede</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["redeprograma"] ?? $this->getContext($context, "redeprograma")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 25
            echo "                    <tr>
                        <!-- <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "sgDepartamento", array()), "html", null, true);
            echo "</td>
                        <td style=\"text-align: center !important;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "dsRedePrograma", array()), "html", null, true);
            echo "</td>
                        <!-- <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dtCadastro", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dtAtualizacao", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redeprograma_edit", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "dsRedePrograma", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "dsRedePrograma", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
                <tfoot>
                <tr>
                    <!--
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Rede de Programa</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                    -->
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
                    Deseja realmente desativar a Rede de Proigrama <strong id=\"modalDescricao\"></strong>?
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
        
        $__internal_fa4bc97652084e0ebe1e66aabad4e821e3f79abe276cbe09b7f4373f9533a280->leave($__internal_fa4bc97652084e0ebe1e66aabad4e821e3f79abe276cbe09b7f4373f9533a280_prof);

        
        $__internal_7a30e6050039660d11a155d9cf94c571217ed950400f57563b7fdbe73e1a2666->leave($__internal_7a30e6050039660d11a155d9cf94c571217ed950400f57563b7fdbe73e1a2666_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37ab5f92ffdf4038b7e30a674e313010bf5b8ffb7e75b93b5bd364e50982d6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ab5f92ffdf4038b7e30a674e313010bf5b8ffb7e75b93b5bd364e50982d6a6->enter($__internal_37ab5f92ffdf4038b7e30a674e313010bf5b8ffb7e75b93b5bd364e50982d6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5ad0ee8a47734684ec29c558e44488af5d65ab2ee325be0e81d63cc6aa74873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ad0ee8a47734684ec29c558e44488af5d65ab2ee325be0e81d63cc6aa74873->enter($__internal_d5ad0ee8a47734684ec29c558e44488af5d65ab2ee325be0e81d63cc6aa74873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
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
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redeprograma_disable");
        echo "/\" + id);

            });

        })
    </script>
";
        
        $__internal_d5ad0ee8a47734684ec29c558e44488af5d65ab2ee325be0e81d63cc6aa74873->leave($__internal_d5ad0ee8a47734684ec29c558e44488af5d65ab2ee325be0e81d63cc6aa74873_prof);

        
        $__internal_37ab5f92ffdf4038b7e30a674e313010bf5b8ffb7e75b93b5bd364e50982d6a6->leave($__internal_37ab5f92ffdf4038b7e30a674e313010bf5b8ffb7e75b93b5bd364e50982d6a6_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/RedePrograma/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 100,  184 => 80,  175 => 79,  125 => 38,  114 => 35,  107 => 33,  103 => 32,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  79 => 25,  75 => 24,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-hospital-o\"></span> Política/Programa/Rede</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <a href=\"{{ path('redeprograma_add') }}\" class=\"btn btn-success pull-right\">Incluir</a>
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <!-- <th>CÓD</th> -->
                    <th>Departamento (Sigla)</th>
                    <th>Política/Programa/Rede</th>
                    <!-- <th>Cadastro em</th> -->
                    <!-- <th>Atualizado em</th> -->
                    <th>Ação</th>
                    <!-- <th>Desativar</th> -->
                </tr>
                </thead>
                <tbody>
                {% for r in redeprograma %}
                    <tr>
                        <!-- <td>{{ r.id }}</td> -->
                        <td>{{ r.sgDepartamento }}</td>
                        <td style=\"text-align: center !important;\">{{ r.dsRedePrograma }}</td>
                        <!-- <td>{{ r.dtCadastro|date(\"d/m/Y H:i:s\") }}</td> -->
                        <!-- <td>{{ r.dtAtualizacao|date(\"d/m/Y H:i:s\") }}</td> -->
                        <td width=\"150\">
                            <a class=\"btn btn-primary\" href=\"{{ path('redeprograma_edit', {'id': r.id }) }}\"><li class=\"fa fa-edit\"> </li></a>
                            <a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ r.id }}\" data-descricao=\"{{ r.dsRedePrograma }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> </li></a>
                        </td>
                        <!-- <td><a class=\"btn btn-danger desativar\" data-toggle=\"modal\" data-id=\"{{ r.id }}\" data-descricao=\"{{ r.dsRedePrograma }}\" href=\"#modal-disabled\"><li class=\"fa fa-trash\"> Desativar</li></a></td> -->
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <!--
                    <th>CÓD</th>
                    <th>Departamento</th>
                    <th>Rede de Programa</th>
                    <th>Cadastro em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                    -->
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
                    Deseja realmente desativar a Rede de Proigrama <strong id=\"modalDescricao\"></strong>?
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
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"redeprograma_disable\") }}/\" + id);

            });

        })
    </script>
{% endblock %}", "@Admin/RedePrograma/index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\RedePrograma\\index.html.twig");
    }
}
