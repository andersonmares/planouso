<?php

/* @Admin/Processamento/edit.html.twig */
class __TwigTemplate_77e54414e698fc28934eddb36335e2dc6d9cf0ecb9fd66f71a9dd9ddc701f67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Processamento/edit.html.twig", 1);
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
        $__internal_37efd4eb07ca2468a37ff21c3808af81ab021d19816140376b7b917c9d779c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37efd4eb07ca2468a37ff21c3808af81ab021d19816140376b7b917c9d779c3d->enter($__internal_37efd4eb07ca2468a37ff21c3808af81ab021d19816140376b7b917c9d779c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/edit.html.twig"));

        $__internal_d5b653150929c95fcf189afd3af0f7375331979f9e79e525d0a0c31d123bd9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b653150929c95fcf189afd3af0f7375331979f9e79e525d0a0c31d123bd9ee->enter($__internal_d5b653150929c95fcf189afd3af0f7375331979f9e79e525d0a0c31d123bd9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37efd4eb07ca2468a37ff21c3808af81ab021d19816140376b7b917c9d779c3d->leave($__internal_37efd4eb07ca2468a37ff21c3808af81ab021d19816140376b7b917c9d779c3d_prof);

        
        $__internal_d5b653150929c95fcf189afd3af0f7375331979f9e79e525d0a0c31d123bd9ee->leave($__internal_d5b653150929c95fcf189afd3af0f7375331979f9e79e525d0a0c31d123bd9ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98668d70f23e430f3d47ced72daacccdff5038e798ec92976cea276ee90cb2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98668d70f23e430f3d47ced72daacccdff5038e798ec92976cea276ee90cb2af->enter($__internal_98668d70f23e430f3d47ced72daacccdff5038e798ec92976cea276ee90cb2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a067d4f52c43938ee7db26162d0041c85b9e842e50154f6f2139839ed4c5d915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a067d4f52c43938ee7db26162d0041c85b9e842e50154f6f2139839ed4c5d915->enter($__internal_a067d4f52c43938ee7db26162d0041c85b9e842e50154f6f2139839ed4c5d915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Admin/Processamento/cabecalho_acaoorcamentaria.html.twig", "@Admin/Processamento/edit.html.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Cadastro de Atividade</h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\"> <!-- Campo Status do Item-->
                <div class=\"col-md-5 col-sm-6 col-xs-12\">
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
        // line 29
        echo "                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'label');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'label');
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'errors');
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'label');
        echo "
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Objeto -->
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'label');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'errors');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'widget');
        echo "
                    </div>
                </div>
                <!--
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'label');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'errors');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'widget');
        echo "
                    </div>
                </div>
                -->
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Ano de Referência -->
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'label');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'errors');
        echo "
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Valor Ano Vigente -->
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'label');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'errors');
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'label');
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'errors');
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'label');
        echo "
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'errors');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'label');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'errors');
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'label');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'label');
        echo "
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'errors');
        echo "
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div>
                        <label class=\"control-label\">Parcela</label>
                        <select class=\"form-control\">
                            <option value=\"\" selected = selected>Selecione</option>
                            <option value=\"\">Única</option>
                            <option value=\"\">1ª</option>
                            <option value=\"\">2ª</option>
                            <option value=\"\">3ª</option>
                            <option value=\"\">4ª</option>
                            <option value=\"\">5ª</option>
                            <option value=\"\">6ª</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'label');
        echo "
                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'errors');
        echo "
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'label');
        echo "
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'errors');
        echo "
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'label');
        echo "
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'errors');
        echo "
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'label');
        echo "
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'errors');
        echo "
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'label');
        echo "
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'errors');
        echo "
                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'label');
        echo "
                        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'errors');
        echo "
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">

            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlProcessadoCgpo", array()), 'label');
        echo "
                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlProcessadoCgpo", array()), 'errors');
        echo "
                        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlProcessadoCgpo", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
            <a class=\"btn btn-primary\" href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_acao", array("id" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()))), "html", null, true);
        echo "\">Voltar</a>
            ";
        // line 202
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_a067d4f52c43938ee7db26162d0041c85b9e842e50154f6f2139839ed4c5d915->leave($__internal_a067d4f52c43938ee7db26162d0041c85b9e842e50154f6f2139839ed4c5d915_prof);

        
        $__internal_98668d70f23e430f3d47ced72daacccdff5038e798ec92976cea276ee90cb2af->leave($__internal_98668d70f23e430f3d47ced72daacccdff5038e798ec92976cea276ee90cb2af_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5aba4e1834dbb59b653c4165e733036109e1553237951b31e9f5980a0d49831e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aba4e1834dbb59b653c4165e733036109e1553237951b31e9f5980a0d49831e->enter($__internal_5aba4e1834dbb59b653c4165e733036109e1553237951b31e9f5980a0d49831e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2afded8178ec613bea996c78a9e174a25949f95985a1a501b048aa517c800a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afded8178ec613bea996c78a9e174a25949f95985a1a501b048aa517c800a46->enter($__internal_2afded8178ec613bea996c78a9e174a25949f95985a1a501b048aa517c800a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 208
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

            \$(\"#atividadeplanouso_dtPortaria\").inputmask({mask: [\"d/m/y\"]});
            \$(\"#atividadeplanouso_nuProposta\").inputmask({mask: [\"99999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_nuProcesso\").inputmask({mask: [\"9999999999999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_coCnes\").inputmask({mask: [\"9999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_vlTotal\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;
            \$(\"#atividadeplanouso_vlExecutarExercicio\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;
            \$(\"#atividadeplanouso_vlProcessadoCgpo\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;

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
        })


    </script>
";
        
        $__internal_2afded8178ec613bea996c78a9e174a25949f95985a1a501b048aa517c800a46->leave($__internal_2afded8178ec613bea996c78a9e174a25949f95985a1a501b048aa517c800a46_prof);

        
        $__internal_5aba4e1834dbb59b653c4165e733036109e1553237951b31e9f5980a0d49831e->leave($__internal_5aba4e1834dbb59b653c4165e733036109e1553237951b31e9f5980a0d49831e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Processamento/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 208,  441 => 207,  426 => 202,  422 => 201,  414 => 196,  410 => 195,  406 => 194,  393 => 184,  389 => 183,  385 => 182,  375 => 175,  371 => 174,  367 => 173,  357 => 166,  353 => 165,  349 => 164,  341 => 159,  337 => 158,  333 => 157,  325 => 152,  321 => 151,  317 => 150,  309 => 145,  305 => 144,  301 => 143,  276 => 121,  272 => 120,  268 => 119,  260 => 114,  256 => 113,  252 => 112,  244 => 107,  240 => 106,  236 => 105,  226 => 98,  222 => 97,  218 => 96,  210 => 91,  206 => 90,  202 => 89,  194 => 84,  190 => 83,  186 => 82,  178 => 77,  174 => 76,  170 => 75,  159 => 67,  155 => 66,  151 => 65,  142 => 59,  138 => 58,  134 => 57,  126 => 52,  122 => 51,  118 => 50,  108 => 43,  104 => 42,  100 => 41,  90 => 34,  86 => 33,  82 => 32,  77 => 29,  60 => 10,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\">Cadastro de Atividade</h3>
        </div>
        <div class=\"box-body\">
            {{ form_start(form) }}
            <div class=\"row\"> <!-- Campo Status do Item-->
                <div class=\"col-md-5 col-sm-6 col-xs-12\">
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
                    {#<div class=\"form-group\">
                        {{ form_label(form.nuPrioridade) }}
                        {{ form_errors(form.nuPrioridade) }}
                        {{ form_widget(form.nuPrioridade) }}
                    </div>#}
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.vinculoPlanejamento) }}
                        {{ form_errors(form.vinculoPlanejamento) }}
                        {{ form_widget(form.vinculoPlanejamento) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.redePrograma) }}
                        {{ form_errors(form.redePrograma) }}
                        {{ form_widget(form.redePrograma) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tipoComponente) }}
                        {{ form_errors(form.tipoComponente) }}
                        {{ form_widget(form.tipoComponente) }}
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Objeto -->
                        {{ form_label(form.atividade) }}
                        {{ form_errors(form.atividade) }}
                        {{ form_widget(form.atividade) }}
                    </div>
                </div>
                <!--
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuAnoExercicioAtividade) }}
                        {{ form_errors(form.nuAnoExercicioAtividade) }}
                        {{ form_widget(form.nuAnoExercicioAtividade) }}
                    </div>
                </div>
                -->
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Ano de Referência -->
                        {{ form_label(form.tipoAtividade) }}
                        {{ form_errors(form.tipoAtividade) }}
                        {{ form_widget(form.tipoAtividade) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Valor Ano Vigente -->
                        {{ form_label(form.vlExecutarExercicio) }}
                        {{ form_errors(form.vlExecutarExercicio) }}
                        {{ form_widget(form.vlExecutarExercicio) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tipoInstrumento) }}
                        {{ form_errors(form.tipoInstrumento) }}
                        {{ form_widget(form.tipoInstrumento) }}
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuProcesso) }}
                        {{ form_errors(form.nuProcesso) }}
                        {{ form_widget(form.nuProcesso) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuProposta) }}
                        {{ form_errors(form.nuProposta) }}
                        {{ form_widget(form.nuProposta) }}
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
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div>
                        <label class=\"control-label\">Parcela</label>
                        <select class=\"form-control\">
                            <option value=\"\" selected = selected>Selecione</option>
                            <option value=\"\">Única</option>
                            <option value=\"\">1ª</option>
                            <option value=\"\">2ª</option>
                            <option value=\"\">3ª</option>
                            <option value=\"\">4ª</option>
                            <option value=\"\">5ª</option>
                            <option value=\"\">6ª</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.vlTotal) }}
                        {{ form_errors(form.vlTotal) }}
                        {{ form_widget(form.vlTotal) }}
                    </div>
                </div>
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
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.dsJustificativa) }}
                        {{ form_errors(form.dsJustificativa) }}
                        {{ form_widget(form.dsJustificativa) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.dsObservacao) }}
                        {{ form_errors(form.dsObservacao) }}
                        {{ form_widget(form.dsObservacao) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">

            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.vlProcessadoCgpo) }}
                        {{ form_errors(form.vlProcessadoCgpo) }}
                        {{ form_widget(form.vlProcessadoCgpo) }}
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
            <a class=\"btn btn-primary\" href=\"{{ path('processamento_acao', {id: acaoOrcamentaria.id}) }}\">Voltar</a>
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

            \$(\"#atividadeplanouso_dtPortaria\").inputmask({mask: [\"d/m/y\"]});
            \$(\"#atividadeplanouso_nuProposta\").inputmask({mask: [\"99999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_nuProcesso\").inputmask({mask: [\"9999999999999999999999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_coCnes\").inputmask({mask: [\"9999999\"], placeholder: ''});
            \$(\"#atividadeplanouso_vlTotal\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;
            \$(\"#atividadeplanouso_vlExecutarExercicio\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;
            \$(\"#atividadeplanouso_vlProcessadoCgpo\").maskMoney({prefix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: false});;

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
        })


    </script>
{% endblock %}", "@Admin/Processamento/edit.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Processamento\\edit.html.twig");
    }
}
