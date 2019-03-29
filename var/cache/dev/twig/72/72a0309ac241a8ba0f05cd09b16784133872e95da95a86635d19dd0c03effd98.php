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
        $__internal_f48653a15fa38eac9d4d4ac6619d8fc7f9bcc738785c7c1dee9e7ddd7ff51a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48653a15fa38eac9d4d4ac6619d8fc7f9bcc738785c7c1dee9e7ddd7ff51a46->enter($__internal_f48653a15fa38eac9d4d4ac6619d8fc7f9bcc738785c7c1dee9e7ddd7ff51a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/processamentoacao.html.twig"));

        $__internal_6895f1a216ea6b6c15aa0149319cf9f44026e3d8d8098cbe715ec6ac952bb2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6895f1a216ea6b6c15aa0149319cf9f44026e3d8d8098cbe715ec6ac952bb2a5->enter($__internal_6895f1a216ea6b6c15aa0149319cf9f44026e3d8d8098cbe715ec6ac952bb2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/processamentoacao.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48653a15fa38eac9d4d4ac6619d8fc7f9bcc738785c7c1dee9e7ddd7ff51a46->leave($__internal_f48653a15fa38eac9d4d4ac6619d8fc7f9bcc738785c7c1dee9e7ddd7ff51a46_prof);

        
        $__internal_6895f1a216ea6b6c15aa0149319cf9f44026e3d8d8098cbe715ec6ac952bb2a5->leave($__internal_6895f1a216ea6b6c15aa0149319cf9f44026e3d8d8098cbe715ec6ac952bb2a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a77da26aa4c36cd8588face67cf83819397e15a31408655b46d94404b31592c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a77da26aa4c36cd8588face67cf83819397e15a31408655b46d94404b31592c->enter($__internal_4a77da26aa4c36cd8588face67cf83819397e15a31408655b46d94404b31592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_424aa4eef0d45e3acf9bf1e6f501e6d5a68d8804a3da76359b356d209789483a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424aa4eef0d45e3acf9bf1e6f501e6d5a68d8804a3da76359b356d209789483a->enter($__internal_424aa4eef0d45e3acf9bf1e6f501e6d5a68d8804a3da76359b356d209789483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <th>Vinculo do Planejamento</th>
                        <th>Instrumento</th>
                        <th>Programa</th>
                        <th>Item</th>
                        <th>Exercício</th>
                        <th>Tipo de Atividade</th>
                        <th>Proposta</th>
                        <th>UF</th>
                        <th>Município</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 32
            echo "                    <tr>
                       <!--  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "</td> -->
                        <!-- <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuPrioridade", array()), "html", null, true);
            echo "</td> -->
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsVinculoPlanejamento", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsTipoInstrumento", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsRedePrograma", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsAtividade", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuAnoExercicioAtividade", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsTipoAtividade", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuProposta", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sgUf", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "noMunicipioAcentuado", array()), "html", null, true);
            echo "</td>
                        <td >";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlTotal", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td >";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlExecutarExercicio", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                        <td><a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_edit", array("idAcao" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()), "id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"><li class=\"fa fa-edit\"> </li></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_index", array("nuAno" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()))), "html", null, true);
        echo "\">Voltar</a>
";
        
        $__internal_424aa4eef0d45e3acf9bf1e6f501e6d5a68d8804a3da76359b356d209789483a->leave($__internal_424aa4eef0d45e3acf9bf1e6f501e6d5a68d8804a3da76359b356d209789483a_prof);

        
        $__internal_4a77da26aa4c36cd8588face67cf83819397e15a31408655b46d94404b31592c->leave($__internal_4a77da26aa4c36cd8588face67cf83819397e15a31408655b46d94404b31592c_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3ef8bd7e8ae267da46ab80ea26e7ce9db1971b4b375733cca6dbabe31919163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ef8bd7e8ae267da46ab80ea26e7ce9db1971b4b375733cca6dbabe31919163->enter($__internal_a3ef8bd7e8ae267da46ab80ea26e7ce9db1971b4b375733cca6dbabe31919163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4919a1789dba56191088c82f6944b7f7cd0ba1d7d389a2d3cea6736856220c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4919a1789dba56191088c82f6944b7f7cd0ba1d7d389a2d3cea6736856220c0->enter($__internal_d4919a1789dba56191088c82f6944b7f7cd0ba1d7d389a2d3cea6736856220c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
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
        
        $__internal_d4919a1789dba56191088c82f6944b7f7cd0ba1d7d389a2d3cea6736856220c0->leave($__internal_d4919a1789dba56191088c82f6944b7f7cd0ba1d7d389a2d3cea6736856220c0_prof);

        
        $__internal_a3ef8bd7e8ae267da46ab80ea26e7ce9db1971b4b375733cca6dbabe31919163->leave($__internal_a3ef8bd7e8ae267da46ab80ea26e7ce9db1971b4b375733cca6dbabe31919163_prof);

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
        return array (  198 => 78,  189 => 77,  177 => 75,  149 => 49,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  85 => 32,  81 => 31,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
                        <th>Vinculo do Planejamento</th>
                        <th>Instrumento</th>
                        <th>Programa</th>
                        <th>Item</th>
                        <th>Exercício</th>
                        <th>Tipo de Atividade</th>
                        <th>Proposta</th>
                        <th>UF</th>
                        <th>Município</th>
                        <th>Valor total</th>
                        <th>Valor Ano Vigente</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                {% for a in atividadePlanoUso %}
                    <tr>
                       <!--  <td>{{ a.id }}</td> -->
                        <!-- <td>{{ a.nuPrioridade }}</td> -->
                        <td>{{ a.dsVinculoPlanejamento }}</td>
                        <td >{{ a.dsTipoInstrumento }}</td>
                        <td >{{ a.dsRedePrograma }}</td>
                        <td >{{ a.dsAtividade }}</td>
                        <td >{{ a.nuAnoExercicioAtividade }}</td>
                        <td >{{ a.dsTipoAtividade }}</td>
                        <td >{{ a.nuProposta }}</td>
                        <td >{{ a.sgUf }}</td>
                        <td >{{ a.noMunicipioAcentuado }}</td>
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
