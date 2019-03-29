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
        $__internal_c70dbad6ba1956dddba33316ebee003a816922e44c215a15e36f99ad717c2665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70dbad6ba1956dddba33316ebee003a816922e44c215a15e36f99ad717c2665->enter($__internal_c70dbad6ba1956dddba33316ebee003a816922e44c215a15e36f99ad717c2665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig"));

        $__internal_59ee8bc6eda76e83c39d0fc9d4964ae908c0a5c21183b98925beb3ae6b97a988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ee8bc6eda76e83c39d0fc9d4964ae908c0a5c21183b98925beb3ae6b97a988->enter($__internal_59ee8bc6eda76e83c39d0fc9d4964ae908c0a5c21183b98925beb3ae6b97a988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig"));

        // line 1
        echo "<!----------------------------------------->

<div class=\"box box-success box-solid\">
    <div class=\"box-header with-border\">
       <h3 class=\"box-title\">Ação orçamentária</h3>
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
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAcaoOrcamentaria", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Plano Orçamentário</span>
                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuPlanoOrcamentario", array()), "html", null, true);
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-1 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Ano</span>
                    ";
        // line 34
        if (($this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()) > twig_date_format_filter($this->env, "now", "Y"))) {
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()), "html", null, true);
            echo " - Em Planejamento
                    ";
        } else {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()), "html", null, true);
            echo "
                    ";
        }
        // line 39
        echo "
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-2 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Despesa</span>
                    ";
        // line 47
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
        // line 55
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
                        <span class=\"info-box-text\">Dotação atualizada</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 67
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlAtualizado", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon bg-green-gradient\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Valor das atividades no ano vigente </span>
                        <span class=\"info-box-number\">R\$ ";
        // line 79
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
                        <span class=\"info-box-text\">Valor processoado CGPO na Ação</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 91
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
        // line 100
        if (($this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlSaldo", array()) > 0)) {
            echo "bg-green-gradient";
        } else {
            echo " bg-red-gradient ";
        }
        echo "\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Saldo da Ação para alocar em atividades</span>
                        <span class=\"info-box-number\">R\$ ";
        // line 103
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlSaldo", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.info-box -->
    </div>
</div>";
        
        $__internal_c70dbad6ba1956dddba33316ebee003a816922e44c215a15e36f99ad717c2665->leave($__internal_c70dbad6ba1956dddba33316ebee003a816922e44c215a15e36f99ad717c2665_prof);

        
        $__internal_59ee8bc6eda76e83c39d0fc9d4964ae908c0a5c21183b98925beb3ae6b97a988->leave($__internal_59ee8bc6eda76e83c39d0fc9d4964ae908c0a5c21183b98925beb3ae6b97a988_prof);

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
        return array (  168 => 103,  158 => 100,  146 => 91,  131 => 79,  116 => 67,  101 => 55,  90 => 47,  80 => 39,  74 => 37,  68 => 35,  66 => 34,  55 => 26,  44 => 18,  25 => 1,);
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
       <h3 class=\"box-title\">Ação orçamentária</h3>
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
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-more text-bold\">Plano Orçamentário</span>
                    {{ acaoOrcamentaria.nuPlanoOrcamentario  }}
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class=\"col-md-1 col-sm-6 col-xs-12\">
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
                        <span class=\"info-box-text\">Dotação atualizada</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlAtualizado|number_format(2, ',', '.')  }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

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

            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"info-box\">
                    <span class=\"info-box-icon {% if acaoOrcamentaria.vlSaldo > 0 %}bg-green-gradient{% else %} bg-red-gradient {% endif %}\"><i class=\"fa fa-usd\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">Saldo da Ação para alocar em atividades</span>
                        <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlSaldo|number_format(2, ',', '.')  }}</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.info-box -->
    </div>
</div>", "@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\cabecalho_acaoorcamentaria.html.twig");
    }
}
