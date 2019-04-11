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
        $__internal_f70fcbbdc06161762fa11812c7de1fea8e7290036fe855b1938bfa2a5ba54a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70fcbbdc06161762fa11812c7de1fea8e7290036fe855b1938bfa2a5ba54a1a->enter($__internal_f70fcbbdc06161762fa11812c7de1fea8e7290036fe855b1938bfa2a5ba54a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig"));

        $__internal_6b091d18d9dd065fb114078bf8709a033601970d905ddd2cae3c1c784e85a7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b091d18d9dd065fb114078bf8709a033601970d905ddd2cae3c1c784e85a7b3->enter($__internal_6b091d18d9dd065fb114078bf8709a033601970d905ddd2cae3c1c784e85a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig"));

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
                        <span class=\"info-box-number\">Dotação atualizada</span>
                        <span class=\"info-box-text\">R\$ ";
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
        echo "                        <span class=\"info-box-number\">Saldo</span>
                        <span class=\"info-box-text\">R\$ ";
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
                        <span class=\"info-box-number\">PLANEJADO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
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
                        <span class=\"info-box-number\">PRIORIZADO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
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
                        <span class=\"info-box-number\">A PROCESSAR</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    ";
        // line 158
        echo "                    ";
        // line 159
        echo "                    <div class=\"info-box\">
                        <span class=\"info-box-number\">EM PROCESSAMENTO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
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
        echo "                <span class=\"info-box-text\">Ano deve estar aqui</span>
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
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"processamento_nuProposta\">NUP</label>

                <input type=\"text\" id=\"processamento_nuProposta\" name=\"processamento[nuProposta]\" class=\"form-control\">
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"processamento_nuProposta\">N° da Prroposta</label>

                <input type=\"text\" id=\"processamento_nuProposta\" name=\"processamento[nuProposta]\" class=\"form-control\">
            </div>
        </div>
    </div>
</div>";
        
        $__internal_f70fcbbdc06161762fa11812c7de1fea8e7290036fe855b1938bfa2a5ba54a1a->leave($__internal_f70fcbbdc06161762fa11812c7de1fea8e7290036fe855b1938bfa2a5ba54a1a_prof);

        
        $__internal_6b091d18d9dd065fb114078bf8709a033601970d905ddd2cae3c1c784e85a7b3->leave($__internal_6b091d18d9dd065fb114078bf8709a033601970d905ddd2cae3c1c784e85a7b3_prof);

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
                        <span class=\"info-box-number\">Dotação atualizada</span>
                        <span class=\"info-box-text\">R\$ {{ acaoOrcamentaria.vlAtualizado|number_format(2, ',', '.')  }}</span>
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
                        <span class=\"info-box-number\">Saldo</span>
                        <span class=\"info-box-text\">R\$ {{ acaoOrcamentaria.vlSaldo|number_format(2, ',', '.')  }}</span>
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
                        <span class=\"info-box-number\">PLANEJADO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-number\">PRIORIZADO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-number\">A PROCESSAR</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    {#<span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>#}
                    {#<div class=\"info-box-content\">#}
                    <div class=\"info-box\">
                        <span class=\"info-box-number\">EM PROCESSAMENTO</span>
                        <span class=\"info-box-text\">Quantidade Itens</span>
                        <span class=\"info-box-text\">Valor Itens</span>
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
                <span class=\"info-box-text\">Ano deve estar aqui</span>
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
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"processamento_nuProposta\">NUP</label>

                <input type=\"text\" id=\"processamento_nuProposta\" name=\"processamento[nuProposta]\" class=\"form-control\">
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"processamento_nuProposta\">N° da Prroposta</label>

                <input type=\"text\" id=\"processamento_nuProposta\" name=\"processamento[nuProposta]\" class=\"form-control\">
            </div>
        </div>
    </div>
</div>", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\cabecalho_acaoorcamentaria.html.twig");
    }
}
