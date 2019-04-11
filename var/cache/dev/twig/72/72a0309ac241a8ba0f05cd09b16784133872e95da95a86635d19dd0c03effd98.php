<?php

/* @Admin/Processamento/processamentoacao.html.twig */
class __TwigTemplate_e59cad7261a3049ccab7f386a79128921255be3060d964698df8a33582c43d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Processamento/processamentoacao.html.twig", 1);
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
        $__internal_7bf9a86ff22dd22cd02dc53f875f021a183a813d250dc531924fd1a7f069db16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf9a86ff22dd22cd02dc53f875f021a183a813d250dc531924fd1a7f069db16->enter($__internal_7bf9a86ff22dd22cd02dc53f875f021a183a813d250dc531924fd1a7f069db16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/processamentoacao.html.twig"));

        $__internal_c5adaf4b42965faca47f317487636a9ac6a6f6810bdba5078aff5ee21db0e012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5adaf4b42965faca47f317487636a9ac6a6f6810bdba5078aff5ee21db0e012->enter($__internal_c5adaf4b42965faca47f317487636a9ac6a6f6810bdba5078aff5ee21db0e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/processamentoacao.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf9a86ff22dd22cd02dc53f875f021a183a813d250dc531924fd1a7f069db16->leave($__internal_7bf9a86ff22dd22cd02dc53f875f021a183a813d250dc531924fd1a7f069db16_prof);

        
        $__internal_c5adaf4b42965faca47f317487636a9ac6a6f6810bdba5078aff5ee21db0e012->leave($__internal_c5adaf4b42965faca47f317487636a9ac6a6f6810bdba5078aff5ee21db0e012_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_286e208423f42bc818397c4568e39b8d8a6649ba28f1624328681401ab897419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286e208423f42bc818397c4568e39b8d8a6649ba28f1624328681401ab897419->enter($__internal_286e208423f42bc818397c4568e39b8d8a6649ba28f1624328681401ab897419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a739764a2c28431b9212080476ac66347c23809d3b702734fa62e5338e37fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a739764a2c28431b9212080476ac66347c23809d3b702734fa62e5338e37fdf->enter($__internal_1a739764a2c28431b9212080476ac66347c23809d3b702734fa62e5338e37fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig", "@Admin/Processamento/processamentoacao.html.twig", 4)->display($context);
        // line 5
        echo "   <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Itens Cadastrados</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                    <tr>
                        ";
        // line 15
        echo "                        ";
        // line 16
        echo "                        ";
        // line 17
        echo "                        ";
        // line 18
        echo "                        ";
        // line 19
        echo "                        ";
        // line 20
        echo "                        ";
        // line 21
        echo "                        ";
        // line 22
        echo "                        ";
        // line 23
        echo "                        <th>Status</th>
                        <th>Política/Programa/Rede</th>
                        <th>Componente</th>
                        <th>Exercício</th>
                        <th>Valor Total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
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
                        ";
            // line 36
            echo "                        ";
            // line 37
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuPrioridade", array()), "html", null, true);
            echo "</td> <!-- Apenas para teste para popular a grid-->
                        ";
            // line 39
            echo "                        ";
            // line 40
            echo "                        <td >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsRedePrograma", array()), "html", null, true);
            echo "</td>
                        ";
            // line 42
            echo "                        <td >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsAtividade", array()), "html", null, true);
            echo "</td> <!-- Apenas para teste para popular a grid-->
                        <td >";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuAnoExercicioAtividade", array()), "html", null, true);
            echo "</td>
                        ";
            // line 45
            echo "                        ";
            // line 46
            echo "                        ";
            // line 47
            echo "                        ";
            // line 48
            echo "                        <td >";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlTotal", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td >";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlExecutarExercicio", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-success\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_edit", array("idAcao" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()), "id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
                        <th>Proposta</th>
                        <th>UF</th>
                        <th>Município</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
                -->
            </table>
        </div>
    </div>
    </div>

    <a class=\"btn btn-primary\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_index", array("nuAno" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()))), "html", null, true);
        echo "\">Voltar</a>
";
        
        $__internal_1a739764a2c28431b9212080476ac66347c23809d3b702734fa62e5338e37fdf->leave($__internal_1a739764a2c28431b9212080476ac66347c23809d3b702734fa62e5338e37fdf_prof);

        
        $__internal_286e208423f42bc818397c4568e39b8d8a6649ba28f1624328681401ab897419->leave($__internal_286e208423f42bc818397c4568e39b8d8a6649ba28f1624328681401ab897419_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcfa14695fa400ebb853386c575b52bd7fd5662219f06a8166c222731df5fe75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfa14695fa400ebb853386c575b52bd7fd5662219f06a8166c222731df5fe75->enter($__internal_fcfa14695fa400ebb853386c575b52bd7fd5662219f06a8166c222731df5fe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91b1615ff7c2e6ab2259a1fd7b1217ec57234efb25ffc87feae8653ef0ec620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b1615ff7c2e6ab2259a1fd7b1217ec57234efb25ffc87feae8653ef0ec620d->enter($__internal_91b1615ff7c2e6ab2259a1fd7b1217ec57234efb25ffc87feae8653ef0ec620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    <script>
        \$(function () {

            \$('#lista').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        })
    </script>
";
        
        $__internal_91b1615ff7c2e6ab2259a1fd7b1217ec57234efb25ffc87feae8653ef0ec620d->leave($__internal_91b1615ff7c2e6ab2259a1fd7b1217ec57234efb25ffc87feae8653ef0ec620d_prof);

        
        $__internal_fcfa14695fa400ebb853386c575b52bd7fd5662219f06a8166c222731df5fe75->leave($__internal_fcfa14695fa400ebb853386c575b52bd7fd5662219f06a8166c222731df5fe75_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Processamento/processamentoacao.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 82,  186 => 81,  174 => 79,  146 => 53,  137 => 50,  133 => 49,  128 => 48,  126 => 47,  124 => 46,  122 => 45,  118 => 43,  113 => 42,  108 => 40,  106 => 39,  101 => 37,  99 => 36,  96 => 34,  92 => 33,  80 => 23,  78 => 22,  76 => 21,  74 => 20,  72 => 19,  70 => 18,  68 => 17,  66 => 16,  64 => 15,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {% include '@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig' %}
   <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Itens Cadastrados</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                    <tr>
                        {#<th>CÓD</th>#}
                        {#<th>Prioridade</th>#}
                        {#<th>Vinculo do Planejamento</th>#}
                        {#<th>Instrumentos</th>#}
                        {#<th>Objeto</th>#}
                        {#<th>Tipo de Atividade</th>#}
                        {#<th>Proposta</th>#}
                        {#<th>UF</th>#}
                        {#<th>Município</th>#}
                        <th>Status</th>
                        <th>Política/Programa/Rede</th>
                        <th>Componente</th>
                        <th>Exercício</th>
                        <th>Valor Total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                {% for a in atividadePlanoUso %}
                    <tr>
                        {#<td>{{ a.id }}</td>#}
                        {#<td>{{ a.nuPrioridade }}</td>#}
                        <td>{{ a.nuPrioridade }}</td> <!-- Apenas para teste para popular a grid-->
                        {#<td>{{ a.dsVinculoPlanejamento }}</td>#}
                        {#<td >{{ a.dsTipoInstrumento }}</td>#}
                        <td >{{ a.dsRedePrograma }}</td>
                        {#<td >{{ a.dsAtividade }}</td>#}
                        <td >{{ a.dsAtividade }}</td> <!-- Apenas para teste para popular a grid-->
                        <td >{{ a.nuAnoExercicioAtividade }}</td>
                        {#<td >{{ a.dsTipoAtividade }}</td>#}
                        {#<td >{{ a.nuProposta }}</td>#}
                        {#<td >{{ a.sgUf }}</td>#}
                        {#<td >{{ a.noMunicipioAcentuado }}</td>#}
                        <td >{{ a.vlTotal|number_format(2, ',', '.') }}</td>
                        <td >{{ a.vlExecutarExercicio|number_format(2, ',', '.') }}</td>
                        <td><a class=\"btn btn-success\" href=\"{{ path('processamento_edit', {idAcao: acaoOrcamentaria.id, id: a.id}) }}\"><li class=\"fa fa-edit\"> </li></a></td>
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
                        <th>Proposta</th>
                        <th>UF</th>
                        <th>Município</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
                -->
            </table>
        </div>
    </div>
    </div>

    <a class=\"btn btn-primary\" href=\"{{ path('processamento_index', {nuAno: acaoOrcamentaria.nuAnoExercicio}) }}\">Voltar</a>
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
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        })
    </script>
{% endblock %}", "@Admin/Processamento/processamentoacao.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\processamentoacao.html.twig");
    }
}
