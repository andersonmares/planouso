<?php

/* @Admin\VincularAcaoDepartamento\vincular.html.twig */
class __TwigTemplate_27041078250fbcd16cdd869797036bc476eafb8930d5f42f5be88d0229b7bc6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\VincularAcaoDepartamento\\vincular.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da948827849b95ad42eecb4dc96560659329ad14d100d21111946f6ced6c797e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da948827849b95ad42eecb4dc96560659329ad14d100d21111946f6ced6c797e->enter($__internal_da948827849b95ad42eecb4dc96560659329ad14d100d21111946f6ced6c797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\VincularAcaoDepartamento\\vincular.html.twig"));

        $__internal_ee1be8694094818ce59c7569f3b270269647192fbabb1fe6b2e8bbb927e4f20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1be8694094818ce59c7569f3b270269647192fbabb1fe6b2e8bbb927e4f20c->enter($__internal_ee1be8694094818ce59c7569f3b270269647192fbabb1fe6b2e8bbb927e4f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\VincularAcaoDepartamento\\vincular.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da948827849b95ad42eecb4dc96560659329ad14d100d21111946f6ced6c797e->leave($__internal_da948827849b95ad42eecb4dc96560659329ad14d100d21111946f6ced6c797e_prof);

        
        $__internal_ee1be8694094818ce59c7569f3b270269647192fbabb1fe6b2e8bbb927e4f20c->leave($__internal_ee1be8694094818ce59c7569f3b270269647192fbabb1fe6b2e8bbb927e4f20c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f37b135d44e11541d60c7d7ebcf3f2d2c9d34648e6a28d939f52790df680faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f37b135d44e11541d60c7d7ebcf3f2d2c9d34648e6a28d939f52790df680faa->enter($__internal_7f37b135d44e11541d60c7d7ebcf3f2d2c9d34648e6a28d939f52790df680faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7873cb7128085cfc7d3b37362356790f0b64dac93ab4425dc9bd4f53f95d407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7873cb7128085cfc7d3b37362356790f0b64dac93ab4425dc9bd4f53f95d407->enter($__internal_b7873cb7128085cfc7d3b37362356790f0b64dac93ab4425dc9bd4f53f95d407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Vincular Ação Orçamentária ao Departamento</h3>
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
        // line 16
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
        // line 24
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
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Despesa</span>
                        ";
        // line 40
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
        // line 48
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
                                <span class=\"info-box-text\">Valor atualizado</span>
                                <span class=\"info-box-number\">R\$ ";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlAtualizado", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon ";
        // line 69
        if (($this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "vlSaldo", array()) > 0)) {
            echo "bg-green-gradient";
        } else {
            echo " bg-red-gradient ";
        }
        echo "\"><i class=\"fa fa-usd\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Saldo Disponível</span>
                                <span class=\"info-box-number\">R\$ ";
        // line 72
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
                </div>
                <div class=\"box box-primary box-solid\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Vincular</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "arrayDepartamento", array()), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-1 col-sm-6 col-xs-12\">
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "arrayDepartamento", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 93
            echo "
                                    ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["departamento"], 'label');
            echo "
                                    ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["departamento"], 'widget');
            echo "
                                    ";
            // line 96
            if ((0 == $this->getAttribute($context["loop"], "index", array()) % 3)) {
                // line 97
                echo "                                        </div><div class=\"col-md-1 col-sm-6 col-xs-12\">
                                    ";
            }
            // line 99
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                        <a class=\"btn btn-info\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vincularacao_index", array("nuAno" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()))), "html", null, true);
        echo "\">Voltar</a>
                ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_b7873cb7128085cfc7d3b37362356790f0b64dac93ab4425dc9bd4f53f95d407->leave($__internal_b7873cb7128085cfc7d3b37362356790f0b64dac93ab4425dc9bd4f53f95d407_prof);

        
        $__internal_7f37b135d44e11541d60c7d7ebcf3f2d2c9d34648e6a28d939f52790df680faa->leave($__internal_7f37b135d44e11541d60c7d7ebcf3f2d2c9d34648e6a28d939f52790df680faa_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\VincularAcaoDepartamento\\vincular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 104,  226 => 103,  221 => 100,  207 => 99,  203 => 97,  201 => 96,  197 => 95,  193 => 94,  190 => 93,  173 => 92,  167 => 89,  163 => 88,  144 => 72,  134 => 69,  122 => 60,  107 => 48,  96 => 40,  85 => 32,  74 => 24,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-chain\"></span> Vincular Ação Orçamentária ao Departamento</h3>
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
                        {{ acaoOrcamentaria.nuAnoExercicio  }}
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
                                <span class=\"info-box-text\">Valor atualizado</span>
                                <span class=\"info-box-number\">R\$ {{ acaoOrcamentaria.vlAtualizado|number_format(2, ',', '.')  }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"info-box\">
                            <span class=\"info-box-icon {% if acaoOrcamentaria.vlSaldo > 0 %}bg-green-gradient{% else %} bg-red-gradient {% endif %}\"><i class=\"fa fa-usd\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Saldo Disponível</span>
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
                </div>
                <div class=\"box box-primary box-solid\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Vincular</h3>
                    </div>
                    <div class=\"box-body\">
                        {{ form_start(form) }}
                        {{ form_errors(form.arrayDepartamento) }}
                        <div class=\"row\">
                            <div class=\"col-md-1 col-sm-6 col-xs-12\">
                                {% for departamento in form.arrayDepartamento %}

                                    {{  form_label(departamento) }}
                                    {{  form_widget(departamento) }}
                                    {% if loop.index is divisible by(3) %}
                                        </div><div class=\"col-md-1 col-sm-6 col-xs-12\">
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                        <a class=\"btn btn-info\" href=\"{{ path('vincularacao_index', {nuAno: acaoOrcamentaria.nuAnoExercicio}) }}\">Voltar</a>
                {{ form_end(form)}}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin\\VincularAcaoDepartamento\\vincular.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\VincularAcaoDepartamento\\vincular.html.twig");
    }
}
