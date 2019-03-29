<?php

/* @Atividade/default/add.html.twig */
class __TwigTemplate_e8008f7577a8608aaa21d6729b137e62780ca743b0d998f77029c3f2f7fcd68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Atividade/default/add.html.twig", 1);
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
        $__internal_c258748288b325d7de9293673a16c7f5609ff7b17c825a78fc9a737aa6149a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c258748288b325d7de9293673a16c7f5609ff7b17c825a78fc9a737aa6149a77->enter($__internal_c258748288b325d7de9293673a16c7f5609ff7b17c825a78fc9a737aa6149a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/add.html.twig"));

        $__internal_84824a2ef472d785be8f34ce0f379caa8d89d3a15e1136b92955df10d73d4866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84824a2ef472d785be8f34ce0f379caa8d89d3a15e1136b92955df10d73d4866->enter($__internal_84824a2ef472d785be8f34ce0f379caa8d89d3a15e1136b92955df10d73d4866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c258748288b325d7de9293673a16c7f5609ff7b17c825a78fc9a737aa6149a77->leave($__internal_c258748288b325d7de9293673a16c7f5609ff7b17c825a78fc9a737aa6149a77_prof);

        
        $__internal_84824a2ef472d785be8f34ce0f379caa8d89d3a15e1136b92955df10d73d4866->leave($__internal_84824a2ef472d785be8f34ce0f379caa8d89d3a15e1136b92955df10d73d4866_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad1dd8d7516b7b093d65c8a6018825372efc3afb0796505d5d83c801d353716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad1dd8d7516b7b093d65c8a6018825372efc3afb0796505d5d83c801d353716->enter($__internal_aad1dd8d7516b7b093d65c8a6018825372efc3afb0796505d5d83c801d353716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_624a8e67a61a7018984f6a5563b3aea26373723e1d61f04cc546458b5a890133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624a8e67a61a7018984f6a5563b3aea26373723e1d61f04cc546458b5a890133->enter($__internal_624a8e67a61a7018984f6a5563b3aea26373723e1d61f04cc546458b5a890133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Atividade/default/cabecalho_acaoorcamentaria.html.twig", "@Atividade/default/add.html.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Cadastro de Atividade</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Valor Processado CGPO para esta Atividade</span>
                            <span class=\"info-box-number\">R\$ ";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "vlProcessadoCgpo", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>

            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "formAtividade")));
        echo "
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPrioridade", array()), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPrioridade", array()), 'errors');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPrioridade", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'errors');
        echo "
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'label');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'label');
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'errors');
        echo "
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'label');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'errors');
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'label');
        echo "
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'errors');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'label');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'errors');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'label');
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'errors');
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'label');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'errors');
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'label');
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'errors');
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'label');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'errors');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'label');
        echo "
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'errors');
        echo "
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'label');
        echo "
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'errors');
        echo "
                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'label');
        echo "
                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'errors');
        echo "
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'label');
        echo "
                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'errors');
        echo "
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'label');
        echo "
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'errors');
        echo "
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'label');
        echo "
                        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'errors');
        echo "
                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'label');
        echo "
                        ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'errors');
        echo "
                        ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
            <a class=\"btn btn-primary\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_acao", array("id" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()))), "html", null, true);
        echo "\">Voltar</a>
            ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_624a8e67a61a7018984f6a5563b3aea26373723e1d61f04cc546458b5a890133->leave($__internal_624a8e67a61a7018984f6a5563b3aea26373723e1d61f04cc546458b5a890133_prof);

        
        $__internal_aad1dd8d7516b7b093d65c8a6018825372efc3afb0796505d5d83c801d353716->leave($__internal_aad1dd8d7516b7b093d65c8a6018825372efc3afb0796505d5d83c801d353716_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f09eb5135daf86bf0ae7f348de05210bb8231920e0d98501a969f62e96d4477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f09eb5135daf86bf0ae7f348de05210bb8231920e0d98501a969f62e96d4477->enter($__internal_4f09eb5135daf86bf0ae7f348de05210bb8231920e0d98501a969f62e96d4477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a90e05cc30f35819ebd6f5b03cbcbe3ed7b4870b5210775311b21940c926488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a90e05cc30f35819ebd6f5b03cbcbe3ed7b4870b5210775311b21940c926488->enter($__internal_9a90e05cc30f35819ebd6f5b03cbcbe3ed7b4870b5210775311b21940c926488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
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

            //\$(\"#atividadeplanouso_dtPortaria\").inputmask({mask: [\"d/m/y\"]});
            \$(\"#atividadeplanouso_nuProposta\").inputmask({mask: [\"99999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_nuProcesso\").inputmask({mask: [\"9999999999999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_coCnes\").inputmask({mask: [\"9999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_vlTotal\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;
            \$(\"#atividadeplanouso_vlExecutarExercicio\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;

            \$('#atividadeplanouso_uf').change(function(){
                if (\$('#atividadeplanouso_uf').val() == '') {
                    \$(\"#atividadeplanouso_municipio\").html('<option value=\"\">-Selecione a UF-</option>');
                }else if (\$('#atividadeplanouso_uf').val() == 'XX') {
                    \$(\"#atividadeplanouso_municipio\").html('<option value=\"\">TODOS</option>');
                }else{
                    \$(this).carregarMunicipios('#atividadeplanouso_municipio', {
                        uf: \$('#atividadeplanouso_uf').val(),
                        url: Routing.generate('json_municipio', {'coUfIbge': \$('#atividadeplanouso_uf').val()})
                    });
                }
            });

        });

    </script>
";
        
        $__internal_9a90e05cc30f35819ebd6f5b03cbcbe3ed7b4870b5210775311b21940c926488->leave($__internal_9a90e05cc30f35819ebd6f5b03cbcbe3ed7b4870b5210775311b21940c926488_prof);

        
        $__internal_4f09eb5135daf86bf0ae7f348de05210bb8231920e0d98501a969f62e96d4477->leave($__internal_4f09eb5135daf86bf0ae7f348de05210bb8231920e0d98501a969f62e96d4477_prof);

    }

    public function getTemplateName()
    {
        return "@Atividade/default/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 182,  421 => 181,  406 => 176,  402 => 175,  394 => 170,  390 => 169,  386 => 168,  378 => 163,  374 => 162,  370 => 161,  362 => 156,  358 => 155,  354 => 154,  344 => 147,  340 => 146,  336 => 145,  326 => 138,  322 => 137,  318 => 136,  310 => 131,  306 => 130,  302 => 129,  292 => 122,  288 => 121,  284 => 120,  276 => 115,  272 => 114,  268 => 113,  260 => 108,  256 => 107,  252 => 106,  242 => 99,  238 => 98,  234 => 97,  226 => 92,  222 => 91,  218 => 90,  208 => 83,  204 => 82,  200 => 81,  192 => 76,  188 => 75,  184 => 74,  176 => 69,  172 => 68,  168 => 67,  158 => 60,  154 => 59,  150 => 58,  142 => 53,  138 => 52,  134 => 51,  126 => 46,  122 => 45,  118 => 44,  108 => 37,  104 => 36,  100 => 35,  92 => 30,  88 => 29,  84 => 28,  77 => 24,  66 => 16,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\">Cadastro de Atividade</h3>
        </div>
        <div class=\"box-body\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-yellow-gradient\"><i class=\"fa fa-usd\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Valor Processado CGPO para esta Atividade</span>
                            <span class=\"info-box-number\">R\$ {{ atividadePlanoUso.vlProcessadoCgpo|number_format(2, ',', '.')  }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>

            {{ form_start(form, {'attr': {'id': 'formAtividade'}}) }}
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuPrioridade) }}
                        {{ form_errors(form.nuPrioridade) }}
                        {{ form_widget(form.nuPrioridade) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.vinculoPlanejamento) }}
                        {{ form_errors(form.vinculoPlanejamento) }}
                        {{ form_widget(form.vinculoPlanejamento) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tipoInstrumento) }}
                        {{ form_errors(form.tipoInstrumento) }}
                        {{ form_widget(form.tipoInstrumento) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.redePrograma) }}
                        {{ form_errors(form.redePrograma) }}
                        {{ form_widget(form.redePrograma) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tipoComponente) }}
                        {{ form_errors(form.tipoComponente) }}
                        {{ form_widget(form.tipoComponente) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.atividade) }}
                        {{ form_errors(form.atividade) }}
                        {{ form_widget(form.atividade) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuAnoExercicioAtividade) }}
                        {{ form_errors(form.nuAnoExercicioAtividade) }}
                        {{ form_widget(form.nuAnoExercicioAtividade) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tipoAtividade) }}
                        {{ form_errors(form.tipoAtividade) }}
                        {{ form_widget(form.tipoAtividade) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.vlTotal) }}
                        {{ form_errors(form.vlTotal) }}
                        {{ form_widget(form.vlTotal) }}
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.dsJustificativa) }}
                        {{ form_errors(form.dsJustificativa) }}
                        {{ form_widget(form.dsJustificativa) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.uf) }}
                        {{ form_errors(form.uf) }}
                        {{ form_widget(form.uf) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.municipio) }}
                        {{ form_errors(form.municipio) }}
                        {{ form_widget(form.municipio) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.coCnes) }}
                        {{ form_errors(form.coCnes) }}
                        {{ form_widget(form.coCnes) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuProposta) }}
                        {{ form_errors(form.nuProposta) }}
                        {{ form_widget(form.nuProposta) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuProcesso) }}
                        {{ form_errors(form.nuProcesso) }}
                        {{ form_widget(form.nuProcesso) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.dsObservacao) }}
                        {{ form_errors(form.dsObservacao) }}
                        {{ form_widget(form.dsObservacao) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.vlExecutarExercicio) }}
                        {{ form_errors(form.vlExecutarExercicio) }}
                        {{ form_widget(form.vlExecutarExercicio) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuPortaria) }}
                        {{ form_errors(form.nuPortaria) }}
                        {{ form_widget(form.nuPortaria) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.dtPortaria) }}
                        {{ form_errors(form.dtPortaria) }}
                        {{ form_widget(form.dtPortaria) }}
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
            <a class=\"btn btn-primary\" href=\"{{ path('planodeuso_acao', {id: acaoOrcamentaria.id}) }}\">Voltar</a>
            {{ form_end(form)}}
        </div>
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

            //\$(\"#atividadeplanouso_dtPortaria\").inputmask({mask: [\"d/m/y\"]});
            \$(\"#atividadeplanouso_nuProposta\").inputmask({mask: [\"99999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_nuProcesso\").inputmask({mask: [\"9999999999999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_coCnes\").inputmask({mask: [\"9999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_vlTotal\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;
            \$(\"#atividadeplanouso_vlExecutarExercicio\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;

            \$('#atividadeplanouso_uf').change(function(){
                if (\$('#atividadeplanouso_uf').val() == '') {
                    \$(\"#atividadeplanouso_municipio\").html('<option value=\"\">-Selecione a UF-</option>');
                }else if (\$('#atividadeplanouso_uf').val() == 'XX') {
                    \$(\"#atividadeplanouso_municipio\").html('<option value=\"\">TODOS</option>');
                }else{
                    \$(this).carregarMunicipios('#atividadeplanouso_municipio', {
                        uf: \$('#atividadeplanouso_uf').val(),
                        url: Routing.generate('json_municipio', {'coUfIbge': \$('#atividadeplanouso_uf').val()})
                    });
                }
            });

        });

    </script>
{% endblock %}", "@Atividade/default/add.html.twig", "D:\\planouso\\src\\Planodeuso\\AtividadeBundle\\Resources\\views\\default\\add.html.twig");
    }
}
