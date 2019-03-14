<?php

/* includes/footer.html.twig */
class __TwigTemplate_b4c44ec1d5bbd472c698aa2d4eaee96c20b4c96eb4b6909d44939e6e94275210 extends Twig_Template
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
        $__internal_cd68d3df300e146fb78b62bd7897e303294f85d57832719f80772a62ce41388a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd68d3df300e146fb78b62bd7897e303294f85d57832719f80772a62ce41388a->enter($__internal_cd68d3df300e146fb78b62bd7897e303294f85d57832719f80772a62ce41388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_58b1abf589f21170657d1eaae39de2a1bea4bf62949b212238ba7f4417310065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b1abf589f21170657d1eaae39de2a1bea4bf62949b212238ba7f4417310065->enter($__internal_58b1abf589f21170657d1eaae39de2a1bea4bf62949b212238ba7f4417310065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        echo "<!--######################RODAPE#####################->
<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        INTERFACE ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "- Versão 1.0
    </div>
    <!-- Default to the left -->
    <strong>Ministério da Saúde &copy; ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". <a href=\"http://dab.saude.gov.br\" target=\"_blank\">Secretária de Atenção a Saúde</a></strong>
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
        <!--          <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
        <!-- Home tab content -->
        <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
            <!--            <h3 class=\"control-sidebar-heading\">Atividades Recentes</h3>-->
            <ul class='control-sidebar-menu'>
                <li>
                    <a href=''>
                        <i class=\"menu-icon fa fa-calendar bg-red\"></i>

                        <div class=\"menu-info\">
                            <h4 class=\"control-sidebar-subheading\">Brasília / DF</h4>

                            <p>Hoje é ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Veja como está sua Adesão:</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href=''>
                        <h4 class=\"control-sidebar-subheading\">
                            STATUS DA ADESÃO
                            <span class=\"label label-danger pull-right\">70%</span>
                        </h4>

                        <div class=\"progress progress-xxs\">
                            <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
                <h3 class=\"control-sidebar-heading\">General Settings</h3>

                <div class=\"form-group\">
                    <label class=\"control-sidebar-subheading\">
                        Report panel usage
                        <input type=\"checkbox\" class=\"pull-right\" checked />
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div><!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
<!-- REQUIRED JS SCRIPTS -->

<!-- Bootstrap 3.3.2 JS -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- AdminLTE App -->
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Datatables -->
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- Datatables -->
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highcharts/highcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highcharts/exporting.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>-->


<script>
    bootbox.setDefaults({
        locale: \"br\"
    });

    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    });

    \$('#fixarbox').affix({});

    \$(document).ready(function() {
        \$('.example').DataTable();
    } );

    \$('.dtPagina')
            .dataTable(
                    {
                        \"oLanguage\" : {
                            \"sProcessing\" : \"Aguarde enquanto os dados são carregados ...\",
                            \"sLengthMenu\" : \"Mostrar _MENU_ registros por pagina\",
                            \"sZeroRecords\" : \"Nenhum registro correspondente ao criterio encontrado\",
                            \"sInfoEmtpy\" : \"Exibindo 0 a 0 de 0 registros\",
                            \"sInfo\" : \"Exibindo de _START_ a _END_ de _TOTAL_ registros\",
                            \"sInfoFiltered\" : \"\",
                            \"sSearch\" : \"Procurar: \",
                            \"oPaginate\" : {
                                \"sFirst\" : \"Primeiro\",
                                \"sPrevious\" : \"Anterior\",
                                \"sNext\" : \"Próximo\",
                                \"sLast\" : \"Último\"
                            }
                        }
                    });

</script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sprintf.js"), "html", null, true);
        echo "\"></script> <!-- UTILIZA JUNTO COM O MENSAGEIRO-->
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mensagens.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script><!-- FUNÇÃO DE TOUCH NO TABLET -->

<!-- icheck -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>
</html>";
        
        $__internal_cd68d3df300e146fb78b62bd7897e303294f85d57832719f80772a62ce41388a->leave($__internal_cd68d3df300e146fb78b62bd7897e303294f85d57832719f80772a62ce41388a_prof);

        
        $__internal_58b1abf589f21170657d1eaae39de2a1bea4bf62949b212238ba7f4417310065->leave($__internal_58b1abf589f21170657d1eaae39de2a1bea4bf62949b212238ba7f4417310065_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 147,  212 => 144,  208 => 143,  204 => 142,  200 => 141,  158 => 102,  154 => 101,  149 => 99,  145 => 98,  140 => 96,  135 => 94,  129 => 91,  125 => 90,  64 => 32,  38 => 9,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--######################RODAPE#####################->
<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        INTERFACE {{ \"now\"|date(\"Y\") }}- Versão 1.0
    </div>
    <!-- Default to the left -->
    <strong>Ministério da Saúde &copy; {{ \"now\"|date(\"Y\") }}. <a href=\"http://dab.saude.gov.br\" target=\"_blank\">Secretária de Atenção a Saúde</a></strong>
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
        <!--          <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
        <!-- Home tab content -->
        <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
            <!--            <h3 class=\"control-sidebar-heading\">Atividades Recentes</h3>-->
            <ul class='control-sidebar-menu'>
                <li>
                    <a href=''>
                        <i class=\"menu-icon fa fa-calendar bg-red\"></i>

                        <div class=\"menu-info\">
                            <h4 class=\"control-sidebar-subheading\">Brasília / DF</h4>

                            <p>Hoje é {{ \"now\"|date(\"Y\") }}</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Veja como está sua Adesão:</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href=''>
                        <h4 class=\"control-sidebar-subheading\">
                            STATUS DA ADESÃO
                            <span class=\"label label-danger pull-right\">70%</span>
                        </h4>

                        <div class=\"progress progress-xxs\">
                            <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
                <h3 class=\"control-sidebar-heading\">General Settings</h3>

                <div class=\"form-group\">
                    <label class=\"control-sidebar-subheading\">
                        Report panel usage
                        <input type=\"checkbox\" class=\"pull-right\" checked />
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div><!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
<!-- REQUIRED JS SCRIPTS -->

<!-- Bootstrap 3.3.2 JS -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('js/bootbox.min.js') }}\" type=\"text/javascript\"></script>

<!-- AdminLTE App -->
<script src=\"{{ asset('js/app.min.js') }}\" type=\"text/javascript\"></script>
<!-- Datatables -->
<script src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}\" type=\"text/javascript\"></script>

<script src=\"{{ asset('js/plugins/datatables/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('js/plugins/datatables/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<!-- Datatables -->
<script src=\"{{ asset('js/highcharts/highcharts.js') }}\" type=\"text/javascript\"></script>
<!--<script src=\"{{ asset('js/highcharts/exporting.js') }}\" type=\"text/javascript\"></script>-->


<script>
    bootbox.setDefaults({
        locale: \"br\"
    });

    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    });

    \$('#fixarbox').affix({});

    \$(document).ready(function() {
        \$('.example').DataTable();
    } );

    \$('.dtPagina')
            .dataTable(
                    {
                        \"oLanguage\" : {
                            \"sProcessing\" : \"Aguarde enquanto os dados são carregados ...\",
                            \"sLengthMenu\" : \"Mostrar _MENU_ registros por pagina\",
                            \"sZeroRecords\" : \"Nenhum registro correspondente ao criterio encontrado\",
                            \"sInfoEmtpy\" : \"Exibindo 0 a 0 de 0 registros\",
                            \"sInfo\" : \"Exibindo de _START_ a _END_ de _TOTAL_ registros\",
                            \"sInfoFiltered\" : \"\",
                            \"sSearch\" : \"Procurar: \",
                            \"oPaginate\" : {
                                \"sFirst\" : \"Primeiro\",
                                \"sPrevious\" : \"Anterior\",
                                \"sNext\" : \"Próximo\",
                                \"sLast\" : \"Último\"
                            }
                        }
                    });

</script>
<script src=\"{{ asset('js/jquery-ui.js') }}\"></script>
<script src=\"{{ asset('js/sprintf.js') }}\"></script> <!-- UTILIZA JUNTO COM O MENSAGEIRO-->
<script src=\"{{ asset('js/mensagens.js') }}\"></script>
<script src=\"{{ asset('js/jquery.ui.touch-punch.min.js') }}\"></script><!-- FUNÇÃO DE TOUCH NO TABLET -->

<!-- icheck -->
<script src=\"{{ asset('js/icheck.min.js') }}\" type=\"text/javascript\"></script>

</body>
</html>", "includes/footer.html.twig", "D:\\planouso\\app\\Resources\\views\\includes\\footer.html.twig");
    }
}
