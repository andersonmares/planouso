<?php

/* @Atividade/default/acaoorcamentaria.html.twig */
class __TwigTemplate_4d06bac112459bdc66139c3591bb777389887ca48db42c8ac355e204a703af1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Atividade/default/acaoorcamentaria.html.twig", 1);
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
        $__internal_82087f15c5fdf390ecb5fb9391e6e5442aba431110381e8f4408b289983dea2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82087f15c5fdf390ecb5fb9391e6e5442aba431110381e8f4408b289983dea2d->enter($__internal_82087f15c5fdf390ecb5fb9391e6e5442aba431110381e8f4408b289983dea2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/acaoorcamentaria.html.twig"));

        $__internal_20e08d49e335f8b301d15d06428daa5399f0da8f50066f1e98db7d09d3ed4a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e08d49e335f8b301d15d06428daa5399f0da8f50066f1e98db7d09d3ed4a05->enter($__internal_20e08d49e335f8b301d15d06428daa5399f0da8f50066f1e98db7d09d3ed4a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/acaoorcamentaria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82087f15c5fdf390ecb5fb9391e6e5442aba431110381e8f4408b289983dea2d->leave($__internal_82087f15c5fdf390ecb5fb9391e6e5442aba431110381e8f4408b289983dea2d_prof);

        
        $__internal_20e08d49e335f8b301d15d06428daa5399f0da8f50066f1e98db7d09d3ed4a05->leave($__internal_20e08d49e335f8b301d15d06428daa5399f0da8f50066f1e98db7d09d3ed4a05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c216bfa606e69d64482c661579913d821f8d9212f2f6508a4a1d9983d63b308e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c216bfa606e69d64482c661579913d821f8d9212f2f6508a4a1d9983d63b308e->enter($__internal_c216bfa606e69d64482c661579913d821f8d9212f2f6508a4a1d9983d63b308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1fa0b0d1360f02f869075e2e761dabef420ce64539744f2c9c5ac192221de67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fa0b0d1360f02f869075e2e761dabef420ce64539744f2c9c5ac192221de67->enter($__internal_f1fa0b0d1360f02f869075e2e761dabef420ce64539744f2c9c5ac192221de67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Atividade/default/cabecalho_acaoorcamentaria.html.twig", "@Atividade/default/acaoorcamentaria.html.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Atividades cadastradas</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
            ";
        // line 12
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_atividade_add", array("idAcao" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\"><li class=\"glyphicon glyphicon-plus\"></li> Adicionar Atividade</a>
            ";
        // line 14
        echo "            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                    <tr>
                        <!-- <th>CÓD</th> -->
                        <th>Prioridade</th>
                        <th>Vinculo do Planejamento</th>
                        <<th>Instrumento</th>
                        <th>Programa</th>
                        <th>Atividade</th>
                        <th>Exercício</th>
                        <th>Tipo de Atividade</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th align=\"center\">Ação</th>
                        <!-- <th>Vincular Nota de Empenho</th> -->
                        <!-- <th>Excluir</th> -->
                    </tr>
                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 34
            echo "                    <tr>
                        <!-- <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuPrioridade", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsVinculoPlanejamento", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsTipoInstrumento", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsRedePrograma", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsAtividade", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuAnoExercicioAtividade", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsTipoAtividade", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlTotal", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td >";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlExecutarExercicio", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_atividade_edit", array("idAcao" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()), "id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a>
                        <!--
                        </td>
                        <td>
                        -->
                            <a class=\"btn btn-primary\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_nota_empenho", array("idAcao" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()), "id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><li class=\"fa fa-check\"> </li></a>
                        <!--
                        </td>
                        <td>
                        -->
                            <a class=\"btn btn-danger excluir\" data-toggle=\"modal\" data-idacao=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\" href=\"#modal-disabled\"> <li class=\"fa fa-trash\"> </li></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
                <!--
                <tfoot>
                    <tr>
                        <th>CÓD</th>
                        <th>Prioridade</th>
                        <th>Vinculo do Planejamento</th>
                        <th>Instrumento</th>
                        <th>Programa</th>
                        <th>Atividade</th>
                        <th>Exercício</th>
                        <th>Tipo de Atividade</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                        <th>Vincular Nota de Empenho</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>
                -->
            </table>
        </div>
    </div>
    </div>
    <a class=\"btn btn-primary\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_atividade", array("nuAno" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()))), "html", null, true);
        echo "\">Voltar</a>

    <div class=\"modal fade\" id=\"modal-disabled\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Atenção!</h4>
                </div>
                <div class=\"modal-body\">
                    Deseja realmente excluir a Atividade <strong id=\"modalDescricao\"></strong>?
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
        
        $__internal_f1fa0b0d1360f02f869075e2e761dabef420ce64539744f2c9c5ac192221de67->leave($__internal_f1fa0b0d1360f02f869075e2e761dabef420ce64539744f2c9c5ac192221de67_prof);

        
        $__internal_c216bfa606e69d64482c661579913d821f8d9212f2f6508a4a1d9983d63b308e->leave($__internal_c216bfa606e69d64482c661579913d821f8d9212f2f6508a4a1d9983d63b308e_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ee352fd1eae0feb79c4b9431c0c83449e28d538664f98ecacd09631597f3ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee352fd1eae0feb79c4b9431c0c83449e28d538664f98ecacd09631597f3ab7->enter($__internal_6ee352fd1eae0feb79c4b9431c0c83449e28d538664f98ecacd09631597f3ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_55e793df74c56897758dd11dc1e0eb1915450b6d1f90475cbd41e3a6798b9b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e793df74c56897758dd11dc1e0eb1915450b6d1f90475cbd41e3a6798b9b02->enter($__internal_55e793df74c56897758dd11dc1e0eb1915450b6d1f90475cbd41e3a6798b9b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    <script>
        \$(function () {


            \$(document).on(\"click\", \".excluir\", function () {
                var idAcao = \$(this).data('idacao');
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_atividade_excluir");
        echo "/\" + idAcao + \"/\" + id);

            });

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
        })
    </script>
";
        
        $__internal_55e793df74c56897758dd11dc1e0eb1915450b6d1f90475cbd41e3a6798b9b02->leave($__internal_55e793df74c56897758dd11dc1e0eb1915450b6d1f90475cbd41e3a6798b9b02_prof);

        
        $__internal_6ee352fd1eae0feb79c4b9431c0c83449e28d538664f98ecacd09631597f3ab7->leave($__internal_6ee352fd1eae0feb79c4b9431c0c83449e28d538664f98ecacd09631597f3ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Atividade/default/acaoorcamentaria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 119,  234 => 109,  225 => 108,  191 => 84,  165 => 60,  151 => 56,  143 => 51,  135 => 46,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  91 => 34,  87 => 33,  66 => 14,  61 => 12,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {% include '@Atividade/default/cabecalho_acaoorcamentaria.html.twig' %}
    <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Atividades cadastradas</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"table-responsive\">
            {#% #if (acaoOrcamentaria.vlSaldo > 0)%#}
            <a href=\"{{ path('planodeuso_atividade_add', {idAcao: acaoOrcamentaria.id}) }}\" class=\"btn btn-success pull-right\"><li class=\"glyphicon glyphicon-plus\"></li> Adicionar Atividade</a>
            {#% endif %#}
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                    <tr>
                        <!-- <th>CÓD</th> -->
                        <th>Prioridade</th>
                        <th>Vinculo do Planejamento</th>
                        <<th>Instrumento</th>
                        <th>Programa</th>
                        <th>Atividade</th>
                        <th>Exercício</th>
                        <th>Tipo de Atividade</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th align=\"center\">Ação</th>
                        <!-- <th>Vincular Nota de Empenho</th> -->
                        <!-- <th>Excluir</th> -->
                    </tr>
                </thead>
                <tbody>
                {% for a in atividadePlanoUso %}
                    <tr>
                        <!-- <td>{{ a.id }}</td> -->
                        <td>{{ a.nuPrioridade }}</td>
                        <td>{{ a.dsVinculoPlanejamento }}</td>
                        <td >{{ a.dsTipoInstrumento }}</td>
                        <td >{{ a.dsRedePrograma }}</td>
                        <td >{{ a.dsAtividade }}</td>
                        <td >{{ a.nuAnoExercicioAtividade }}</td>
                        <td >{{ a.dsTipoAtividade }}</td>
                        <td >{{ a.vlTotal|number_format(2, ',', '.') }}</td>
                        <td >{{ a.vlExecutarExercicio|number_format(2, ',', '.') }}</td>
                        <td>
                            <a class=\"btn btn-success\" href=\"{{ path('planodeuso_atividade_edit', {idAcao: acaoOrcamentaria.id, id: a.id}) }}\"><li class=\"fa fa-edit\"> </li></a>
                        <!--
                        </td>
                        <td>
                        -->
                            <a class=\"btn btn-primary\" href=\"{{ path('planodeuso_nota_empenho', {idAcao: acaoOrcamentaria.id, id: a.id}) }}\"><li class=\"fa fa-check\"> </li></a>
                        <!--
                        </td>
                        <td>
                        -->
                            <a class=\"btn btn-danger excluir\" data-toggle=\"modal\" data-idacao=\"{{ acaoOrcamentaria.id }}\" data-id=\"{{ a.id }}\" data-descricao=\"{{ a.id }}\" href=\"#modal-disabled\"> <li class=\"fa fa-trash\"> </li></a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                <!--
                <tfoot>
                    <tr>
                        <th>CÓD</th>
                        <th>Prioridade</th>
                        <th>Vinculo do Planejamento</th>
                        <th>Instrumento</th>
                        <th>Programa</th>
                        <th>Atividade</th>
                        <th>Exercício</th>
                        <th>Tipo de Atividade</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                        <th>Vincular Nota de Empenho</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>
                -->
            </table>
        </div>
    </div>
    </div>
    <a class=\"btn btn-primary\" href=\"{{ path('planodeuso_atividade', {nuAno: acaoOrcamentaria.nuAnoExercicio}) }}\">Voltar</a>

    <div class=\"modal fade\" id=\"modal-disabled\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Atenção!</h4>
                </div>
                <div class=\"modal-body\">
                    Deseja realmente excluir a Atividade <strong id=\"modalDescricao\"></strong>?
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


            \$(document).on(\"click\", \".excluir\", function () {
                var idAcao = \$(this).data('idacao');
                var id = \$(this).data('id');
                var descricao = \$(this).data('descricao');

                \$(\"#modalDescricao\").html(descricao);
                \$(\"#confirmar\").attr(\"href\", \"{{ path(\"planodeuso_atividade_excluir\") }}/\" + idAcao + \"/\" + id);

            });

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
        })
    </script>
{% endblock %}", "@Atividade/default/acaoorcamentaria.html.twig", "D:\\planouso\\src\\Planodeuso\\AtividadeBundle\\Resources\\views\\default\\acaoorcamentaria.html.twig");
    }
}
