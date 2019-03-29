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
        $__internal_42284a7b16c3035435a963b5d739ba734ec5821c4a88871bab53238ff52110bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42284a7b16c3035435a963b5d739ba734ec5821c4a88871bab53238ff52110bd->enter($__internal_42284a7b16c3035435a963b5d739ba734ec5821c4a88871bab53238ff52110bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/edit.html.twig"));

        $__internal_16030068f1d84cbd01635447f83a0a031fb8b9eeab8f906769ee575be2b7a173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16030068f1d84cbd01635447f83a0a031fb8b9eeab8f906769ee575be2b7a173->enter($__internal_16030068f1d84cbd01635447f83a0a031fb8b9eeab8f906769ee575be2b7a173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Processamento/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42284a7b16c3035435a963b5d739ba734ec5821c4a88871bab53238ff52110bd->leave($__internal_42284a7b16c3035435a963b5d739ba734ec5821c4a88871bab53238ff52110bd_prof);

        
        $__internal_16030068f1d84cbd01635447f83a0a031fb8b9eeab8f906769ee575be2b7a173->leave($__internal_16030068f1d84cbd01635447f83a0a031fb8b9eeab8f906769ee575be2b7a173_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e611944ef8528a97bc0968a39caaa87707325ac80738266cceda9f81001005de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e611944ef8528a97bc0968a39caaa87707325ac80738266cceda9f81001005de->enter($__internal_e611944ef8528a97bc0968a39caaa87707325ac80738266cceda9f81001005de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc2a60efbbd41bd0f6092673c4a8949055aee33f7320baa3cc3456f002f50b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2a60efbbd41bd0f6092673c4a8949055aee33f7320baa3cc3456f002f50b23->enter($__internal_dc2a60efbbd41bd0f6092673c4a8949055aee33f7320baa3cc3456f002f50b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <!--
                    <div class=\"form-group\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPrioridade", array()), 'label');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPrioridade", array()), 'errors');
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPrioridade", array()), 'widget');
        echo "
                    </div>
                    -->
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'errors');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vinculoPlanejamento", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'label');
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'errors');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redePrograma", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'label');
        echo "
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'errors');
        echo "
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoComponente", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Objeto -->
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'label');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atividade", array()), 'widget');
        echo "
                    </div>
                </div>
                <!--
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'label');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicioAtividade", array()), 'errors');
        echo "
                        ";
        // line 69
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
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'label');
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'errors');
        echo "
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoAtividade", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\"> <!-- Valor Ano Vigente -->
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'label');
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'errors');
        echo "
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlExecutarExercicio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'label');
        echo "
                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'errors');
        echo "
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoInstrumento", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'label');
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'errors');
        echo "
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProcesso", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'label');
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'errors');
        echo "
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuProposta", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'label');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'errors');
        echo "
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuPortaria", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'label');
        echo "
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dtPortaria", array()), 'errors');
        echo "
                        ";
        // line 123
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
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'label');
        echo "
                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'errors');
        echo "
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlTotal", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'label');
        echo "
                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'errors');
        echo "
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uf", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'label');
        echo "
                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'errors');
        echo "
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "municipio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'label');
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'errors');
        echo "
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coCnes", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'label');
        echo "
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'errors');
        echo "
                        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsJustificativa", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'label');
        echo "
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsObservacao", array()), 'errors');
        echo "
                        ";
        // line 186
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
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlProcessadoCgpo", array()), 'label');
        echo "
                        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlProcessadoCgpo", array()), 'errors');
        echo "
                        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vlProcessadoCgpo", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
            <a class=\"btn btn-primary\" href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_acao", array("id" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()))), "html", null, true);
        echo "\">Voltar</a>
            ";
        // line 204
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_dc2a60efbbd41bd0f6092673c4a8949055aee33f7320baa3cc3456f002f50b23->leave($__internal_dc2a60efbbd41bd0f6092673c4a8949055aee33f7320baa3cc3456f002f50b23_prof);

        
        $__internal_e611944ef8528a97bc0968a39caaa87707325ac80738266cceda9f81001005de->leave($__internal_e611944ef8528a97bc0968a39caaa87707325ac80738266cceda9f81001005de_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_178e0daf91cfc2d392957aef3300497a7affeb3920d6cbd5ecfa6f8c04aeb308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178e0daf91cfc2d392957aef3300497a7affeb3920d6cbd5ecfa6f8c04aeb308->enter($__internal_178e0daf91cfc2d392957aef3300497a7affeb3920d6cbd5ecfa6f8c04aeb308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59e355f08651c08b80b27734e2ccfa88f110da7fa098db928cbf877ed0dfcee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e355f08651c08b80b27734e2ccfa88f110da7fa098db928cbf877ed0dfcee0->enter($__internal_59e355f08651c08b80b27734e2ccfa88f110da7fa098db928cbf877ed0dfcee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
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
        
        $__internal_59e355f08651c08b80b27734e2ccfa88f110da7fa098db928cbf877ed0dfcee0->leave($__internal_59e355f08651c08b80b27734e2ccfa88f110da7fa098db928cbf877ed0dfcee0_prof);

        
        $__internal_178e0daf91cfc2d392957aef3300497a7affeb3920d6cbd5ecfa6f8c04aeb308->leave($__internal_178e0daf91cfc2d392957aef3300497a7affeb3920d6cbd5ecfa6f8c04aeb308_prof);

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
        return array (  464 => 210,  455 => 209,  440 => 204,  436 => 203,  428 => 198,  424 => 197,  420 => 196,  407 => 186,  403 => 185,  399 => 184,  389 => 177,  385 => 176,  381 => 175,  371 => 168,  367 => 167,  363 => 166,  355 => 161,  351 => 160,  347 => 159,  339 => 154,  335 => 153,  331 => 152,  323 => 147,  319 => 146,  315 => 145,  290 => 123,  286 => 122,  282 => 121,  274 => 116,  270 => 115,  266 => 114,  258 => 109,  254 => 108,  250 => 107,  240 => 100,  236 => 99,  232 => 98,  224 => 93,  220 => 92,  216 => 91,  208 => 86,  204 => 85,  200 => 84,  192 => 79,  188 => 78,  184 => 77,  173 => 69,  169 => 68,  165 => 67,  156 => 61,  152 => 60,  148 => 59,  140 => 54,  136 => 53,  132 => 52,  122 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 35,  96 => 34,  87 => 28,  83 => 27,  79 => 26,  60 => 10,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
                    <!--
                    <div class=\"form-group\">
                        {{ form_label(form.nuPrioridade) }}
                        {{ form_errors(form.nuPrioridade) }}
                        {{ form_widget(form.nuPrioridade) }}
                    </div>
                    -->
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

            //\$(\"#atividadeplanouso_dtPortaria\").inputmask({mask: [\"d/m/y\"]});
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
