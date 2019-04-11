<?php

/* @Atividade/default/cabecalho_acaoorcamentaria.html.twig */
class __TwigTemplate_a7ebb7ad634aa080d2b827b9b607dc150d5c619ee9fe0bf49492e26e9939fd1d extends Twig_Template
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
        $__internal_ef61c143e76d17c1162eb09e4509f1f3aa6fd3ea7940a4651619a60a5d0cbbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef61c143e76d17c1162eb09e4509f1f3aa6fd3ea7940a4651619a60a5d0cbbe7->enter($__internal_ef61c143e76d17c1162eb09e4509f1f3aa6fd3ea7940a4651619a60a5d0cbbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/cabecalho_acaoorcamentaria.html.twig"));

        $__internal_b99750598ede3697104e5790e6b75797f43f213e3a3ebeab1bec0e121039dcb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99750598ede3697104e5790e6b75797f43f213e3a3ebeab1bec0e121039dcb0->enter($__internal_b99750598ede3697104e5790e6b75797f43f213e3a3ebeab1bec0e121039dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/cabecalho_acaoorcamentaria.html.twig"));

        // line 1
        echo "<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Ação Orçamentária</h3>
        <!--<div class=\"pull-right \">
          legenda da tela
        </div>-->
    </div>
    <div class=\"box-body\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Ação Orçamentária</span>
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAcaoOrcamentaria", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Plano Orçamentário</span>
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuPlanoOrcamentario", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Ano</span>
                    ";
        // line 29
        if (($this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()) > twig_date_format_filter($this->env, "now", "Y"))) {
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()), "html", null, true);
            echo " - Em Planejamento
                    ";
        } else {
            // line 32
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()), "html", null, true);
            echo "
                    ";
        }
        // line 34
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Despesa</span>
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "dsTipoDespesa", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Denominação</span>
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "dsDenominacao", array()), "html", null, true);
        echo "
                </div>
                <!-- /.info-box -->
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-aqua-gradient\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Dotação Atualizada</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlAtualizado", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-light-blue\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Valor das atividades no ano vigente </span>
                        <span class=\"info-box-number\">R\$ ";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlAtividade", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Valor processado CGPO para esta Ação</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 86
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlProcessadoCgpo", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon ";
        // line 96
        if (($this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlSaldo", array()) > 0)) {
            echo "bg-green-gradient";
        } else {
            echo " bg-red-gradient ";
        }
        echo "\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Saldo DA  para alocar em atividades</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 99
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlSaldo", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.info-box -->
    </div>
</div>";
        
        $__internal_ef61c143e76d17c1162eb09e4509f1f3aa6fd3ea7940a4651619a60a5d0cbbe7->leave($__internal_ef61c143e76d17c1162eb09e4509f1f3aa6fd3ea7940a4651619a60a5d0cbbe7_prof);

        
        $__internal_b99750598ede3697104e5790e6b75797f43f213e3a3ebeab1bec0e121039dcb0->leave($__internal_b99750598ede3697104e5790e6b75797f43f213e3a3ebeab1bec0e121039dcb0_prof);

    }

    public function getTemplateName()
    {
        return "@Atividade/default/cabecalho_acaoorcamentaria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 99,  154 => 96,  141 => 86,  126 => 74,  111 => 62,  96 => 50,  85 => 42,  75 => 34,  69 => 32,  63 => 30,  61 => 29,  50 => 21,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Ação Orçamentária</h3>
        <!--<div class=\"pull-right \">
          legenda da tela
        </div>-->
    </div>
    <div class=\"box-body\">
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
                    <span class=\"info-box-more text-bold\">Plano Orçamentário</span>
                    {{ acaoOrcamentaria.nuPlanoOrcamentario  }}
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
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
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Despesa</span>
                    {{ acaoOrcamentaria.dsTipoDespesa  }}
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Denominação</span>
                    {{ acaoOrcamentaria.dsDenominacao  }}
                </div>
                <!-- /.info-box -->
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-aqua-gradient\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Dotação Atualizada</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlAtualizado|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-light-blue\"><i class=\"fa fa-usd\"></i></span>
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
                        <span class=\"info-box-text\">Valor processado CGPO para esta Ação</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlProcessadoCgpo|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon {% if acaoOrcamentaria.vlSaldo > 0 %}bg-green-gradient{% else %} bg-red-gradient {% endif %}\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Saldo DA  para alocar em atividades</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlSaldo|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.info-box -->
    </div>
</div>", "@Atividade/default/cabecalho_acaoorcamentaria.html.twig", "D:\\planouso\\src\\Planodeuso\\AtividadeBundle\\Resources\\views\\default\\cabecalho_acaoorcamentaria.html.twig");
    }
}
