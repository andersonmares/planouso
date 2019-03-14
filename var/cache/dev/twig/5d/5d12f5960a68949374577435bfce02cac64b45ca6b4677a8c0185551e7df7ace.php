<?php

/* @Admin\Importacao\index.html.twig */
class __TwigTemplate_5169c3e4abbdeaa151d19c1ba0f9e63ad4d7ded9a808be9938aa839d2a6e7a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin\\Importacao\\index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_c56d66dc59269e470897ec292f995f53f8d482842c5d7adb68c9100cce497da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56d66dc59269e470897ec292f995f53f8d482842c5d7adb68c9100cce497da7->enter($__internal_c56d66dc59269e470897ec292f995f53f8d482842c5d7adb68c9100cce497da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\Importacao\\index.html.twig"));

        $__internal_096d09215f3b5720150880445d9a84dcf4268469905490e0b661dda6685b0bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096d09215f3b5720150880445d9a84dcf4268469905490e0b661dda6685b0bc4->enter($__internal_096d09215f3b5720150880445d9a84dcf4268469905490e0b661dda6685b0bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin\\Importacao\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56d66dc59269e470897ec292f995f53f8d482842c5d7adb68c9100cce497da7->leave($__internal_c56d66dc59269e470897ec292f995f53f8d482842c5d7adb68c9100cce497da7_prof);

        
        $__internal_096d09215f3b5720150880445d9a84dcf4268469905490e0b661dda6685b0bc4->leave($__internal_096d09215f3b5720150880445d9a84dcf4268469905490e0b661dda6685b0bc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_737f474a46c08d4413c71b9fb75f1bcfeca74bffecdd97e7a534c21199bc09f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737f474a46c08d4413c71b9fb75f1bcfeca74bffecdd97e7a534c21199bc09f8->enter($__internal_737f474a46c08d4413c71b9fb75f1bcfeca74bffecdd97e7a534c21199bc09f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6034b8fae520f760c2058a9af4f985d3324e156c74c8634d1dc6bcf9d7194c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6034b8fae520f760c2058a9af4f985d3324e156c74c8634d1dc6bcf9d7194c0->enter($__internal_e6034b8fae520f760c2058a9af4f985d3324e156c74c8634d1dc6bcf9d7194c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:Importacao:index";
        
        $__internal_e6034b8fae520f760c2058a9af4f985d3324e156c74c8634d1dc6bcf9d7194c0->leave($__internal_e6034b8fae520f760c2058a9af4f985d3324e156c74c8634d1dc6bcf9d7194c0_prof);

        
        $__internal_737f474a46c08d4413c71b9fb75f1bcfeca74bffecdd97e7a534c21199bc09f8->leave($__internal_737f474a46c08d4413c71b9fb75f1bcfeca74bffecdd97e7a534c21199bc09f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c4d5afd7044935a5a059e9bc01d4b17f305e946c00120d2c3db471e9c134719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4d5afd7044935a5a059e9bc01d4b17f305e946c00120d2c3db471e9c134719->enter($__internal_9c4d5afd7044935a5a059e9bc01d4b17f305e946c00120d2c3db471e9c134719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a54b2dcbe31667d16011122bea6a87b7a90f2ae244870a37da9a4bec5695f0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54b2dcbe31667d16011122bea6a87b7a90f2ae244870a37da9a4bec5695f0f1->enter($__internal_a54b2dcbe31667d16011122bea6a87b7a90f2ae244870a37da9a4bec5695f0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-file-excel-o\"></span> Importação de arquivos</h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpPlanilha", array()), 'label');
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpPlanilha", array()), 'errors');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpPlanilha", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'errors');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuAnoExercicio", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "planilha", array()), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "planilha", array()), 'errors');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "planilha", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success\">Importar Planilha</button>
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

             <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <br />
                    <label>Modelo dos arquivos:</label><br />
                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("doc/layout_acaoorcamentaria.xlsx"), "html", null, true);
        echo "\"><span class=\"fa fa-file-excel-o\"></span> Execução Orçamentária</a>
                </div>
             </div>

        </div>
    </div>

    ";
        // line 51
        echo ($context["erros"] ?? $this->getContext($context, "erros"));
        echo "

    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Histórico de planilhas importadas</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rsHistorico"] ?? $this->getContext($context, "rsHistorico")));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 73
            echo "                    <tr>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "nuAnoExercicio", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "dsTipoPlanilha", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "noArquivo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "noPlanilha", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "noPessoaFisica", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["h"], "dtCadastro", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>
                            Lidos: ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "qtRegistro", array()), "html", null, true);
            echo "<br />
                            Novos: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "qtRegistroNovo", array()), "html", null, true);
            echo "<br />
                            Atualizados: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "qtRegistroAtualizado", array()), "html", null, true);
            echo "<br />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>

";
        
        $__internal_a54b2dcbe31667d16011122bea6a87b7a90f2ae244870a37da9a4bec5695f0f1->leave($__internal_a54b2dcbe31667d16011122bea6a87b7a90f2ae244870a37da9a4bec5695f0f1_prof);

        
        $__internal_9c4d5afd7044935a5a059e9bc01d4b17f305e946c00120d2c3db471e9c134719->leave($__internal_9c4d5afd7044935a5a059e9bc01d4b17f305e946c00120d2c3db471e9c134719_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a22b12816ccad0781c34a5335ea6676eb1975e9b6d0690dc937609b3b0bf33f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22b12816ccad0781c34a5335ea6676eb1975e9b6d0690dc937609b3b0bf33f1->enter($__internal_a22b12816ccad0781c34a5335ea6676eb1975e9b6d0690dc937609b3b0bf33f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a96aebf918222e3d370c3b1638dfa155ad1f453f298e645a3eca8794936b8a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96aebf918222e3d370c3b1638dfa155ad1f453f298e645a3eca8794936b8a77->enter($__internal_a96aebf918222e3d370c3b1638dfa155ad1f453f298e645a3eca8794936b8a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    <script>
        \$(function () {

            var table =  \$('#lista').DataTable({
                \"autoWidth\": true,
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

            table.columns.adjust().draw();
        })


    </script>
";
        
        $__internal_a96aebf918222e3d370c3b1638dfa155ad1f453f298e645a3eca8794936b8a77->leave($__internal_a96aebf918222e3d370c3b1638dfa155ad1f453f298e645a3eca8794936b8a77_prof);

        
        $__internal_a22b12816ccad0781c34a5335ea6676eb1975e9b6d0690dc937609b3b0bf33f1->leave($__internal_a22b12816ccad0781c34a5335ea6676eb1975e9b6d0690dc937609b3b0bf33f1_prof);

    }

    public function getTemplateName()
    {
        return "@Admin\\Importacao\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 107,  256 => 106,  229 => 87,  219 => 83,  215 => 82,  211 => 81,  206 => 79,  202 => 78,  198 => 77,  194 => 76,  190 => 75,  186 => 74,  183 => 73,  179 => 72,  155 => 51,  145 => 44,  136 => 38,  130 => 35,  123 => 31,  119 => 30,  115 => 29,  107 => 24,  103 => 23,  99 => 22,  91 => 17,  87 => 16,  83 => 15,  76 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}AdminBundle:Importacao:index{% endblock %}

{% block body %}
    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-file-excel-o\"></span> Importação de arquivos</h3>
        </div>
        <div class=\"box-body\">
            {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.tpPlanilha) }}
                        {{ form_errors(form.tpPlanilha) }}
                        {{ form_widget(form.tpPlanilha) }}
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.nuAnoExercicio) }}
                        {{ form_errors(form.nuAnoExercicio) }}
                        {{ form_widget(form.nuAnoExercicio) }}
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_label(form.planilha) }}
                        {{ form_errors(form.planilha) }}
                        {{ form_widget(form.planilha) }}
                    </div>
                </div>
            </div>
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success\">Importar Planilha</button>
            {{ form_end(form)}}

             <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-12\">
                    <br />
                    <label>Modelo dos arquivos:</label><br />
                    <a href=\"{{ asset('doc/layout_acaoorcamentaria.xlsx') }}\"><span class=\"fa fa-file-excel-o\"></span> Execução Orçamentária</a>
                </div>
             </div>

        </div>
    </div>

    {{ erros | raw }}

    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-tasks\"></span> Histórico de planilhas importadas</h3>
        </div>
        <div class=\"table-responsive\">
        <div class=\"box-body\">
            <table id=\"lista\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </thead>
                <tbody>
                {% for h in rsHistorico %}
                    <tr>
                        <td>{{ h.nuAnoExercicio }}</td>
                        <td>{{ h.dsTipoPlanilha }}</td>
                        <td>{{ h.noArquivo }}</td>
                        <td>{{ h.noPlanilha }}</td>
                        <td>{{ h.noPessoaFisica }}</td>
                        <td>{{ h.dtCadastro|date(\"d/m/Y H:i:s\") }}</td>
                        <td>
                            Lidos: {{ h.qtRegistro }}<br />
                            Novos: {{ h.qtRegistroNovo }}<br />
                            Atualizados: {{ h.qtRegistroAtualizado }}<br />
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <th>Ano de Exercício</th>
                    <th>Tipo de Planilha</th>
                    <th>Nome do Arquivo</th>
                    <th>Nome da Planilha</th>
                    <th>Usuário</th>
                    <th>Data da importação</th>
                    <th>Registros</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(function () {

            var table =  \$('#lista').DataTable({
                \"autoWidth\": true,
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

            table.columns.adjust().draw();
        })


    </script>
{% endblock %}", "@Admin\\Importacao\\index.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Importacao\\index.html.twig");
    }
}
