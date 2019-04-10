<?php

/* @Admin/Processamento/cabecalho_acaoorcamentaria.html.twig */
class __TwigTemplate_431d5ec518fb3c8d72477682d465bf776948f8200f393033c5ba6682c872dc38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c36769a61f162a3724b0c8a177f6bea9d3dd333cf0cb8a1e1674f0966f4e1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c36769a61f162a3724b0c8a177f6bea9d3dd333cf0cb8a1e1674f0966f4e1a9->enter($__internal_5c36769a61f162a3724b0c8a177f6bea9d3dd333cf0cb8a1e1674f0966f4e1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig"));

        $__internal_cb4489d4b2f63638f25801080af9f50daa3a174c630ed8e6b39b401b9b98ac9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4489d4b2f63638f25801080af9f50daa3a174c630ed8e6b39b401b9b98ac9f->enter($__internal_cb4489d4b2f63638f25801080af9f50daa3a174c630ed8e6b39b401b9b98ac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig"));

        // line 1
        echo "<!----------------------------------------->


<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
       <h3 class=\"box-title\">Ação Orçamentária</h3>
        <a class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#demo\">
            <li class=\"fa fa-arrows-v fa-plus\"> </li>
        </a>
        <!--<div class=\"pull-right \">
          legenda da tela
        </div>-->
    </div>
    <div id=\"demo\" class=\"box-body\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Ação Orçamentária</span>
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAcaoOrcamentaria", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">PO</span>
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuPlanoOrcamentario", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Tipo de Despesa</span>
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "dsTipoDespesa", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-text\">Dotação atualizada</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlAtualizado", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 55
        echo "                    ";
        // line 56
        echo "                    <div class=\"info-box\">
                        ";
        // line 58
        echo "                        <span class=\"info-box-text\">Saldo</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlSaldo", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
            ";
        // line 76
        echo "            ";
        // line 83
        echo "        </div>
        ";
        // line 118
        echo "        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 122
        echo "                    ";
        // line 123
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-text\">PLANEJADO</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 134
        echo "                    ";
        // line 135
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-text\">PRIORIZADO</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 146
        echo "                    ";
        // line 147
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-text\">A PROCESSAR</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 158
        echo "                    ";
        // line 159
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-text\">EM PROCESSAMENTO</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 170
        echo "                    ";
        // line 171
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-number\">PROCESSADO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Filtros de Pesquisa</h3>
    </div>
    <div id=\"demo\" class=\"box-body\">
        <div class=\"col-md-2 col-sm-6 col-xs-12\">
            <div>
                <label class=\"control-label required\" for=\"processamento_nuAnoExercicio\">Ano Exercicio</label>
                ";
        // line 192
        echo "                <label> Apresentar o Ano Exercício </label>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div>
                <label class=\"control-label\">Status do Item</label>
                <select class=\"form-control\">
                    <option value=\"\" selected = selected>Selecione</option>
                    <option value=\"\">PLANEJADO</option>
                    <option value=\"\">PRIORIZADO</option>
                    <option value=\"\">A PROCESSAR</option>
                    <option value=\"\">EM PROCESSAMENTO</option>
                    <option value=\"\">PROCESSADO</option>
                </select>
            </div>
            ";
        // line 214
        echo "            ";
        // line 219
        echo "        </div>
    </div>
</div>";
        
        $__internal_5c36769a61f162a3724b0c8a177f6bea9d3dd333cf0cb8a1e1674f0966f4e1a9->leave($__internal_5c36769a61f162a3724b0c8a177f6bea9d3dd333cf0cb8a1e1674f0966f4e1a9_prof);

        
        $__internal_cb4489d4b2f63638f25801080af9f50daa3a174c630ed8e6b39b401b9b98ac9f->leave($__internal_cb4489d4b2f63638f25801080af9f50daa3a174c630ed8e6b39b401b9b98ac9f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 219,  216 => 214,  199 => 192,  177 => 171,  175 => 170,  163 => 159,  161 => 158,  149 => 147,  147 => 146,  135 => 135,  133 => 134,  121 => 123,  119 => 122,  114 => 118,  111 => 83,  109 => 76,  102 => 59,  99 => 58,  96 => 56,  94 => 55,  83 => 46,  79 => 44,  77 => 43,  67 => 35,  56 => 27,  45 => 19,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!----------------------------------------->


<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
       <h3 class=\"box-title\">Ação Orçamentária</h3>
        <a class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#demo\">
            <li class=\"fa fa-arrows-v fa-plus\"> </li>
        </a>
        <!--<div class=\"pull-right \">
          legenda da tela
        </div>-->
    </div>
    <div id=\"demo\" class=\"box-body\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Ação Orçamentária</span>
                    {{ acaoOrcamentaria.nuAcaoOrcamentaria  }}
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">PO</span>
                    {{ acaoOrcamentaria.nuPlanoOrcamentario  }}
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Tipo de Despesa</span>
                    {{ acaoOrcamentaria.dsTipoDespesa  }}
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-aqua-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-text\">Dotação atualizada</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlAtualizado|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon {% if acaoOrcamentaria.vlSaldo > 0 %}bg-green-gradient{% else %} bg-red-gradient {% endif %}\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        {#<span class=\"info-box-text\">Saldo da Ação para alocar em atividades</span>#}
                        <span class=\"info-box-text\">Saldo</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlSaldo|number_format(2, ',', '.')  }}</span>
                    </div>
                </div>
            </div>
            {#<div class=\"col-md-1 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Ano</span>
                    {% if ( acaoOrcamentaria.nuAnoExercicio >  \"now\"|date(\"Y\")) %}
                        {{ acaoOrcamentaria.nuAnoExercicio  }} - Em Planejamento
                    {% else %}
                        {{ acaoOrcamentaria.nuAnoExercicio  }}
                    {% endif %}

                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>#}
            {#<div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Denominação</span>
                    {{ acaoOrcamentaria.dsDenominacao  }}
                </div>
                <!-- /.info-box -->
            </div>#}
        </div>
        {#<div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-green-gradient\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Valor das atividades no ano vigente </span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlAtividade|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Valor processoado CGPO na Ação</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlProcessadoCgpo|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            #}{#<div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon {% if acaoOrcamentaria.vlSaldo > 0 %}bg-green-gradient{% else %} bg-red-gradient {% endif %}\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Saldo da Ação para alocar em atividades</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlSaldo|number_format(2, ',', '.')  }}</span>
                    </div>
                </div>
            </div>#}{#

        </div>#}
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-text\">PLANEJADO</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-text\">PRIORIZADO</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-text\">A PROCESSAR</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-text\">EM PROCESSAMENTO</span>
                        <span class=\"info-box-number\">Quantidade Itens</span>
                        <span class=\"info-box-number\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-number\">PROCESSADO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Filtros de Pesquisa</h3>
    </div>
    <div id=\"demo\" class=\"box-body\">
        <div class=\"col-md-2 col-sm-6 col-xs-12\">
            <div>
                <label class=\"control-label required\" for=\"processamento_nuAnoExercicio\">Ano Exercicio</label>
                {#<label>{{atividadePlanoUso.nuAnoExercicioAtividade}}</label>#}
                <label> Apresentar o Ano Exercício </label>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div>
                <label class=\"control-label\">Status do Item</label>
                <select class=\"form-control\">
                    <option value=\"\" selected = selected>Selecione</option>
                    <option value=\"\">PLANEJADO</option>
                    <option value=\"\">PRIORIZADO</option>
                    <option value=\"\">A PROCESSAR</option>
                    <option value=\"\">EM PROCESSAMENTO</option>
                    <option value=\"\">PROCESSADO</option>
                </select>
            </div>
            {#<div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                    {{ form_label(form.nuProcesso) }}
                    {{ form_errors(form.nuProcesso) }}
                    {{ form_widget(form.nuProcesso) }}
                </div>
            </div>#}
            {#<div class=\"form-group\">
                {{ form_label(form.nuPrioridade) }}
                {{ form_errors(form.nuPrioridade) }}
                {{ form_widget(form.nuPrioridade) }}
            </div>#}
        </div>
    </div>
</div>", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\cabecalho_acaoorcamentaria.html.twig");
    }
}
