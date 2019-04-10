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
        $__internal_4dfef94e709c106ab1705ae927346a5233f55e8194765fbf72c2afa8db77d208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dfef94e709c106ab1705ae927346a5233f55e8194765fbf72c2afa8db77d208->enter($__internal_4dfef94e709c106ab1705ae927346a5233f55e8194765fbf72c2afa8db77d208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/processamentoacao.html.twig"));

        $__internal_917d2804896548d341732aaf3d67bbf6d43923cc7a3619ea8187a1583e334c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917d2804896548d341732aaf3d67bbf6d43923cc7a3619ea8187a1583e334c26->enter($__internal_917d2804896548d341732aaf3d67bbf6d43923cc7a3619ea8187a1583e334c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/processamentoacao.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dfef94e709c106ab1705ae927346a5233f55e8194765fbf72c2afa8db77d208->leave($__internal_4dfef94e709c106ab1705ae927346a5233f55e8194765fbf72c2afa8db77d208_prof);

        
        $__internal_917d2804896548d341732aaf3d67bbf6d43923cc7a3619ea8187a1583e334c26->leave($__internal_917d2804896548d341732aaf3d67bbf6d43923cc7a3619ea8187a1583e334c26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e63d7cfa899e2892f2d7a7445b34956c3176d850d46368b5a773add9ddf5644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e63d7cfa899e2892f2d7a7445b34956c3176d850d46368b5a773add9ddf5644->enter($__internal_0e63d7cfa899e2892f2d7a7445b34956c3176d850d46368b5a773add9ddf5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_159057287f2e3c21c8016f413427e7c95ab0a70df2284f4115d0fa6e72462bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159057287f2e3c21c8016f413427e7c95ab0a70df2284f4115d0fa6e72462bb3->enter($__internal_159057287f2e3c21c8016f413427e7c95ab0a70df2284f4115d0fa6e72462bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <!-- <th>CÓD</th> -->
                        <!-- <th>Prioridade</th> -->
                        ";
        // line 17
        echo "                        ";
        // line 18
        echo "                        <th>Status</th>
                        <th>Política/Programa/Rede</th>
                        <th>Componente</th>
                        ";
        // line 22
        echo "                        <th>Exercício</th>
                        ";
        // line 24
        echo "                        ";
        // line 25
        echo "                        ";
        // line 26
        echo "                        ";
        // line 27
        echo "                        <th>Valor total</th>
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
        
        $__internal_159057287f2e3c21c8016f413427e7c95ab0a70df2284f4115d0fa6e72462bb3->leave($__internal_159057287f2e3c21c8016f413427e7c95ab0a70df2284f4115d0fa6e72462bb3_prof);

        
        $__internal_0e63d7cfa899e2892f2d7a7445b34956c3176d850d46368b5a773add9ddf5644->leave($__internal_0e63d7cfa899e2892f2d7a7445b34956c3176d850d46368b5a773add9ddf5644_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e22a8456b724194003ebb5f9b3007183c23c39cbaafc9cdf86bd958630b15308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22a8456b724194003ebb5f9b3007183c23c39cbaafc9cdf86bd958630b15308->enter($__internal_e22a8456b724194003ebb5f9b3007183c23c39cbaafc9cdf86bd958630b15308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cdf5b414e0458dc042613a833fee8695f1cc8d7ed216335d1b0801a9ebf4b969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf5b414e0458dc042613a833fee8695f1cc8d7ed216335d1b0801a9ebf4b969->enter($__internal_cdf5b414e0458dc042613a833fee8695f1cc8d7ed216335d1b0801a9ebf4b969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_cdf5b414e0458dc042613a833fee8695f1cc8d7ed216335d1b0801a9ebf4b969->leave($__internal_cdf5b414e0458dc042613a833fee8695f1cc8d7ed216335d1b0801a9ebf4b969_prof);

        
        $__internal_e22a8456b724194003ebb5f9b3007183c23c39cbaafc9cdf86bd958630b15308->leave($__internal_e22a8456b724194003ebb5f9b3007183c23c39cbaafc9cdf86bd958630b15308_prof);

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
        return array (  193 => 82,  184 => 81,  172 => 79,  144 => 53,  135 => 50,  131 => 49,  126 => 48,  124 => 47,  122 => 46,  120 => 45,  116 => 43,  111 => 42,  106 => 40,  104 => 39,  99 => 37,  97 => 36,  94 => 34,  90 => 33,  82 => 27,  80 => 26,  78 => 25,  76 => 24,  73 => 22,  68 => 18,  66 => 17,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
                        <!-- <th>CÓD</th> -->
                        <!-- <th>Prioridade</th> -->
                        {#<th>Vinculo do Planejamento</th>#}
                        {#<th>Instrumentos</th>#}
                        <th>Status</th>
                        <th>Política/Programa/Rede</th>
                        <th>Componente</th>
                        {#<th>Objeto</th>#}
                        <th>Exercício</th>
                        {#<th>Tipo de Atividade</th>#}
                        {#<th>Proposta</th>#}
                        {#<th>UF</th>#}
                        {#<th>Município</th>#}
                        <th>Valor total</th>
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
