<?php

/* @Atividade/default/notaempenho.html.twig */
class __TwigTemplate_94f2b28591c2518cbf931c7297e51fb2bab770a238d1a3b45ee47fc08fc966be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Atividade/default/notaempenho.html.twig", 1);
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
        $__internal_47710c26384ef381381c8c2b7d1953d2e24f854795659c4dc71039580e354d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47710c26384ef381381c8c2b7d1953d2e24f854795659c4dc71039580e354d3f->enter($__internal_47710c26384ef381381c8c2b7d1953d2e24f854795659c4dc71039580e354d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/notaempenho.html.twig"));

        $__internal_4b9d0a8358ace4ffe9f57d952a688e5e71748a16163fcca66b7f82c2077934a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9d0a8358ace4ffe9f57d952a688e5e71748a16163fcca66b7f82c2077934a5->enter($__internal_4b9d0a8358ace4ffe9f57d952a688e5e71748a16163fcca66b7f82c2077934a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Atividade/default/notaempenho.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47710c26384ef381381c8c2b7d1953d2e24f854795659c4dc71039580e354d3f->leave($__internal_47710c26384ef381381c8c2b7d1953d2e24f854795659c4dc71039580e354d3f_prof);

        
        $__internal_4b9d0a8358ace4ffe9f57d952a688e5e71748a16163fcca66b7f82c2077934a5->leave($__internal_4b9d0a8358ace4ffe9f57d952a688e5e71748a16163fcca66b7f82c2077934a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5bf35fb4ca7f3034744e41e9c84ca2feb70942329597a3154fded230467fb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bf35fb4ca7f3034744e41e9c84ca2feb70942329597a3154fded230467fb5b->enter($__internal_e5bf35fb4ca7f3034744e41e9c84ca2feb70942329597a3154fded230467fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c364e5074bafef525ff4b7d12d08ab5d11ce06c1e280f1261eb290075b4ff80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c364e5074bafef525ff4b7d12d08ab5d11ce06c1e280f1261eb290075b4ff80b->enter($__internal_c364e5074bafef525ff4b7d12d08ab5d11ce06c1e280f1261eb290075b4ff80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Resumo da Atividade</h3>
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
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "nuAnoExercicio", array()), "html", null, true);
            echo " - Em Planejamento
                        ";
        } else {
            // line 32
            echo "                            ";
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
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Prioridade</span>
                        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "nuPrioridade", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Vinculo do Planejamento</span>
                        ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "dsVinculoPlanejamento", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Instrumento</span>
                        ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "dsTipoInstrumento", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Programa</span>
                        ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "dsRedePrograma", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Componente</span>
                        ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "dsTipoComponente", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Tipo de Atividade</span>
                        ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "dsTipoAtividade", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">UF / Municipio</span>
                        ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "sgUf", array()), "html", null, true);
        echo "
                        ";
        // line 111
        if (($this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "noMunicipioAcentuado", array()) != "")) {
            // line 112
            echo "                        / ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "noMunicipioAcentuado", array()), "html", null, true);
            echo "
                        ";
        }
        // line 114
        echo "                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">CNES</span>
                        ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "coCnes", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Proposta</span>
                        ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "nuProposta", array()), "html", null, true);
        echo "
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-green-gradient\"><i class=\"fa fa-usd\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Valor da Atividade</span>
                            <span class=\"info-box-number\">R\$ ";
        // line 140
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "vlTotal", array()), 2, ",", "."), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
    </div>

    <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Vincular Nota de Empenho a Atividade</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <div class=\"box-body\">
                <table id=\"lista\" class=\"table table-bordered table-hover\">
                    <thead>
                    <tr>
                        <th>Nº da Nota de Empenho</th>
                        <th>Descrição</th>
                        <th>Nº do Processo</th>
                        <th>Valor Empenhado R\$</th>
                        <th>Vincular</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 168
        if (($this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "coVinculoNotaEmpenho", array()) != "")) {
            // line 169
            echo "                        <tr>
                            <td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "nuNotaEmpenho", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "dsNotaEmpenho", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "nuProcesso", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "vlNotaEmpenho", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-danger vincular\" data-toggle=\"modal\" data-id=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "coNotaEmpenhoPlanouso", array()), "html", null, true);
            echo "\" data-tipo=\"desvincular\" data-descricao=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "nuNotaEmpenho", array()), "html", null, true);
            echo "\" href=\"#modal-confirmacao\"><li class=\"fa fa-check\"> Desvincular Nota de Empenho</li></a></td>
                        </tr>
                    ";
        } else {
            // line 177
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notaEmpenho"] ?? $this->getContext($context, "notaEmpenho")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 178
                echo "                            <tr>
                                <td>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuNotaEmpenho", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "dsNotaEmpenho", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuProcesso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 182
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["a"], "vlEmpenhado", array()), 2, ",", "."), "html", null, true);
                echo "</td>
                                <td><a class=\"btn btn-success vincular\" data-toggle=\"modal\" data-id=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "getId", array(), "method"), "html", null, true);
                echo "\" data-tipo=\"vincular\" data-descricao=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nuNotaEmpenho", array()), "html", null, true);
                echo "\" href=\"#modal-confirmacao\"><li class=\"fa fa-check\"> Vincular Nota de Empenho</li></a></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                    ";
        }
        // line 187
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nº da Nota de Empenho</th>
                        <th>Descrição</th>
                        <th>Nº do Processo</th>
                        <th>Valor Empenhado R\$</th>
                        <th>Desvincular</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
    <a class=\"btn btn-primary\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_acao", array("id" => $this->getAttribute(($context["acaoOrcamentaria"] ?? $this->getContext($context, "acaoOrcamentaria")), "id", array()))), "html", null, true);
        echo "\">Voltar</a>
    <div class=\"modal fade\" id=\"modal-confirmacao\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-yellow\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Atenção!</h4>
                </div>
                <div class=\"modal-body\" id=\"descricao\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-success\" href=\"\" id=\"confirmar\">Confirmar</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


";
        
        $__internal_c364e5074bafef525ff4b7d12d08ab5d11ce06c1e280f1261eb290075b4ff80b->leave($__internal_c364e5074bafef525ff4b7d12d08ab5d11ce06c1e280f1261eb290075b4ff80b_prof);

        
        $__internal_e5bf35fb4ca7f3034744e41e9c84ca2feb70942329597a3154fded230467fb5b->leave($__internal_e5bf35fb4ca7f3034744e41e9c84ca2feb70942329597a3154fded230467fb5b_prof);

    }

    // line 226
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfec227fc363d1a9842c833360b33369616a7d116763c2610359fd70fd6aec80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfec227fc363d1a9842c833360b33369616a7d116763c2610359fd70fd6aec80->enter($__internal_cfec227fc363d1a9842c833360b33369616a7d116763c2610359fd70fd6aec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_256021d55d1980a26273857f4588c988ce42867c635ffc40c6dabf463a325fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256021d55d1980a26273857f4588c988ce42867c635ffc40c6dabf463a325fc1->enter($__internal_256021d55d1980a26273857f4588c988ce42867c635ffc40c6dabf463a325fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 227
        echo "    <script>
        \$(function () {

            \$('#lista').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                },
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : false
            });

            \$(document).on(\"click\", \".vincular\", function () {
                var id = \$(this).data('id');
                if (\$(this).data('tipo') == 'vincular'){
                    var descricao = 'Deseja realmente vincular a nota de empenho <strong>'+ \$(this).data('descricao') + '</strong> a esta Atividade?';
                }else if (\$(this).data('tipo') == 'desvincular'){
                    var descricao = 'Deseja realmente desvincular a nota de empenho <strong>'+ \$(this).data('descricao') + '</strong> desta Atividade?';
                }

                \$(\"#descricao\").html(descricao);
                if (\$(this).data('tipo') == 'vincular') {
                    \$(\"#confirmar\").attr(\"href\", \"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_nota_empenho_vincular");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "id", array()), "html", null, true);
        echo "/\" + id);
                }else if (\$(this).data('tipo') == 'desvincular'){
                    \$(\"#confirmar\").attr(\"href\", \"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_nota_empenho_desvincular");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividadePlanoUso"] ?? $this->getContext($context, "atividadePlanoUso")), "id", array()), "html", null, true);
        echo "/\" + id);
                }
            });

        })
    </script>
";
        
        $__internal_256021d55d1980a26273857f4588c988ce42867c635ffc40c6dabf463a325fc1->leave($__internal_256021d55d1980a26273857f4588c988ce42867c635ffc40c6dabf463a325fc1_prof);

        
        $__internal_cfec227fc363d1a9842c833360b33369616a7d116763c2610359fd70fd6aec80->leave($__internal_cfec227fc363d1a9842c833360b33369616a7d116763c2610359fd70fd6aec80_prof);

    }

    public function getTemplateName()
    {
        return "@Atividade/default/notaempenho.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 254,  430 => 252,  403 => 227,  394 => 226,  360 => 202,  343 => 187,  340 => 186,  329 => 183,  325 => 182,  321 => 181,  317 => 180,  313 => 179,  310 => 178,  305 => 177,  297 => 174,  293 => 173,  289 => 172,  285 => 171,  281 => 170,  278 => 169,  276 => 168,  245 => 140,  231 => 129,  220 => 121,  211 => 114,  205 => 112,  203 => 111,  199 => 110,  188 => 102,  175 => 92,  164 => 84,  153 => 76,  142 => 68,  131 => 60,  118 => 50,  107 => 42,  97 => 34,  91 => 32,  85 => 30,  83 => 29,  72 => 21,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\">Resumo da Atividade</h3>
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
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Prioridade</span>
                        {{ atividadePlanoUso.nuPrioridade  }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Vinculo do Planejamento</span>
                        {{ atividadePlanoUso.dsVinculoPlanejamento }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Instrumento</span>
                        {{ atividadePlanoUso.dsTipoInstrumento }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Programa</span>
                        {{ atividadePlanoUso.dsRedePrograma }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Componente</span>
                        {{ atividadePlanoUso.dsTipoComponente }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Tipo de Atividade</span>
                        {{ atividadePlanoUso.dsTipoAtividade  }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">UF / Municipio</span>
                        {{ atividadePlanoUso.sgUf  }}
                        {% if atividadePlanoUso.noMunicipioAcentuado != '' %}
                        / {{ atividadePlanoUso.noMunicipioAcentuado }}
                        {% endif %}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">CNES</span>
                        {{ atividadePlanoUso.coCnes  }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-more text-bold\">Proposta</span>
                        {{ atividadePlanoUso.nuProposta  }}
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-green-gradient\"><i class=\"fa fa-usd\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Valor da Atividade</span>
                            <span class=\"info-box-number\">R\$ {{ atividadePlanoUso.vlTotal|number_format(2, ',', '.')  }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
    </div>

    <div class=\"box box-primary box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Vincular Nota de Empenho a Atividade</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <div class=\"box-body\">
                <table id=\"lista\" class=\"table table-bordered table-hover\">
                    <thead>
                    <tr>
                        <th>Nº da Nota de Empenho</th>
                        <th>Descrição</th>
                        <th>Nº do Processo</th>
                        <th>Valor Empenhado R\$</th>
                        <th>Vincular</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% if ( atividadePlanoUso.coVinculoNotaEmpenho != \"\") %}
                        <tr>
                            <td>{{ atividadePlanoUso.nuNotaEmpenho }}</td>
                            <td>{{ atividadePlanoUso.dsNotaEmpenho }}</td>
                            <td>{{ atividadePlanoUso.nuProcesso }}</td>
                            <td>{{ atividadePlanoUso.vlNotaEmpenho|number_format(2, ',', '.')  }}</td>
                            <td><a class=\"btn btn-danger vincular\" data-toggle=\"modal\" data-id=\"{{ atividadePlanoUso.coNotaEmpenhoPlanouso }}\" data-tipo=\"desvincular\" data-descricao=\"{{ atividadePlanoUso.nuNotaEmpenho }}\" href=\"#modal-confirmacao\"><li class=\"fa fa-check\"> Desvincular Nota de Empenho</li></a></td>
                        </tr>
                    {% else %}
                        {% for a in notaEmpenho %}
                            <tr>
                                <td>{{ a.nuNotaEmpenho }}</td>
                                <td>{{ a.dsNotaEmpenho }}</td>
                                <td>{{ a.nuProcesso }}</td>
                                <td>{{ a.vlEmpenhado|number_format(2, ',', '.')  }}</td>
                                <td><a class=\"btn btn-success vincular\" data-toggle=\"modal\" data-id=\"{{ a.getId() }}\" data-tipo=\"vincular\" data-descricao=\"{{ a.nuNotaEmpenho }}\" href=\"#modal-confirmacao\"><li class=\"fa fa-check\"> Vincular Nota de Empenho</li></a></td>
                            </tr>
                        {% endfor %}
                    {% endif %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nº da Nota de Empenho</th>
                        <th>Descrição</th>
                        <th>Nº do Processo</th>
                        <th>Valor Empenhado R\$</th>
                        <th>Desvincular</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
    <a class=\"btn btn-primary\" href=\"{{ path('planodeuso_acao', {id: acaoOrcamentaria.id}) }}\">Voltar</a>
    <div class=\"modal fade\" id=\"modal-confirmacao\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-yellow\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Atenção!</h4>
                </div>
                <div class=\"modal-body\" id=\"descricao\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                    <a class=\"btn btn-success\" href=\"\" id=\"confirmar\">Confirmar</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : false
            });

            \$(document).on(\"click\", \".vincular\", function () {
                var id = \$(this).data('id');
                if (\$(this).data('tipo') == 'vincular'){
                    var descricao = 'Deseja realmente vincular a nota de empenho <strong>'+ \$(this).data('descricao') + '</strong> a esta Atividade?';
                }else if (\$(this).data('tipo') == 'desvincular'){
                    var descricao = 'Deseja realmente desvincular a nota de empenho <strong>'+ \$(this).data('descricao') + '</strong> desta Atividade?';
                }

                \$(\"#descricao\").html(descricao);
                if (\$(this).data('tipo') == 'vincular') {
                    \$(\"#confirmar\").attr(\"href\", \"{{ path(\"planodeuso_nota_empenho_vincular\") }}/{{ atividadePlanoUso.id }}/\" + id);
                }else if (\$(this).data('tipo') == 'desvincular'){
                    \$(\"#confirmar\").attr(\"href\", \"{{ path(\"planodeuso_nota_empenho_desvincular\") }}/{{ atividadePlanoUso.id }}/\" + id);
                }
            });

        })
    </script>
{% endblock %}", "@Atividade/default/notaempenho.html.twig", "D:\\planouso\\src\\Planodeuso\\AtividadeBundle\\Resources\\views\\default\\notaempenho.html.twig");
    }
}
