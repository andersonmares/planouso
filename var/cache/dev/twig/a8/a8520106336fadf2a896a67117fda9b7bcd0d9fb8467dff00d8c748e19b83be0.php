<?php

/* includes/header.html.twig */
class __TwigTemplate_18f7708be938869f61cec6af922a9b130d8b61eb0e12f4c4764690ea8031c915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e244361cb1d1fbadd2c4375b7cab20d932e4f24cbd0b941808eae6498bd4d58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e244361cb1d1fbadd2c4375b7cab20d932e4f24cbd0b941808eae6498bd4d58b->enter($__internal_e244361cb1d1fbadd2c4375b7cab20d932e4f24cbd0b941808eae6498bd4d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_3f7175049acfe68b8a58260af529ec2e16526ee8e2af21d2e5cd166665a3437e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7175049acfe68b8a58260af529ec2e16526ee8e2af21d2e5cd166665a3437e->enter($__internal_3f7175049acfe68b8a58260af529ec2e16526ee8e2af21d2e5cd166665a3437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
PÁGINA INICIAL - FRONT-END (CUSTOMIZAÇÃO DE FRONT END POR ALEXANDRE BRITO baseado no AdminLTE control panel and dashboard theme)
-->

<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, ($context["title_system"] ?? $this->getContext($context, "title_system")), "html", null, true);
        echo "</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\"/>
    <!-- Theme style -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/alteraTemplate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/skins/skin-blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.steps.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/loading-bar.css"), "html", null, true);
        echo "\" media=\"all\"/>

    <!--iCHECK CSS-->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icheck/minimal/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--steps CSS-->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/steps-wizzard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Hint-->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Hint -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/input-mask/jquery.inputmask.numeric.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/maskmoney/jquery.maskMoney.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/carregarMunicipios.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/angular/angular.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fosjsrouting/router.js"), "html", null, true);
        echo "\"></script><!-- Gerador de rotas javascript -->
    <script src=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    <!---->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <style>
        [ng\\: cloak
        ]
        ,
        [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x- ng-cloak {
            display: none !important;
        }
    </style>
    ";
        // line 65
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=\"skin-blue sidebar-mini\">
<!-- GOVERNO FEDERAL -->
<div id=\"barra-brasil\">
    <div id=\"wrapper-barra-brasil\">
        <div class=\"brasil-flag\"><a class=\"link-barra\" href=\"http://brasil.gov.br\">Brasil</a></div>
        <span class=\"acesso-info\"><a class=\"link-barra\" href=\"http://brasil.gov.br/barra#acesso-informacao\">Acesso à informação</a></span><span class=\"copa-counter\"><a class=\"link-barra\" href=\"http://www.copa2014.gov.br\"><span id=\"counter-barra-brasil\"></span></a></span>
        <ul class=\"list\">
            <li class=\"list-item first\"><a class=\"link-barra\" href=\"http://brasil.gov.br/barra#participe\">Participe</a>
            </li>
            <li class=\"list-item\"><a class=\"link-barra\" href=\"http://www.servicos.gov.br/\">Serviços</a></li>
            <li class=\"list-item\"><a class=\"link-barra\" href=\"http://www.planalto.gov.br/legislacao\">Legislação</a></li>
            <li class=\"list-item last last-item\"><a class=\"link-barra\" href=\"http://brasil.gov.br/barra#orgaos-atuacao-canais\">Canais</a>
            </li>
        </ul>
    </div>
    <!--logo do sistema-->
    <!--<div style=\"background-color: #247298; height: 100%;\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_topo.png"), "html", null, true);
        echo "\"/></div>-->
</div>
<!-- GOVERNO FEDERAL -->
<div class=\"wrapper\">
    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"#\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>";
        // line 114
        echo twig_escape_filter($this->env, ($context["title_system_mini"] ?? $this->getContext($context, "title_system_mini")), "html", null, true);
        echo "</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>";
        // line 116
        echo twig_escape_filter($this->env, ($context["title_system"] ?? $this->getContext($context, "title_system")), "html", null, true);
        echo "</b></span>
        </a>
        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Alternar navegação</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">

                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/male.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"Estado\"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">";
        // line 135
        echo twig_escape_filter($this->env, ucwords(twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pessoaFisica", array()), "getNoPessoaFisica", array(), "method"))), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/male.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Estado\"/>
                                <p style=\"font-size: 14px;\">
                                    ";
        // line 142
        echo twig_escape_filter($this->env, ucwords(twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pessoaFisica", array()), "getNoPessoaFisica", array(), "method"))), "html", null, true);
        echo "
                                    <br/><span
                                            style=\"font-size: 90%; font-weight: bold;\">";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "perfilAcesso", array()), "getDsPerfilAcesso", array(), "method"), "html", null, true);
        echo "</span>
                                    <br/>
                                </p>
                                <br/>
                            </li>
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changepasswd");
        echo "\" class=\"btn btn-default btn-flat\">Alterar Senha</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"btn btn-default btn-flat\">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/male.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"Usuário\" />
                </div>
                <div class=\"pull-left info\">
                    <p>";
        // line 175
        echo twig_escape_filter($this->env, ucwords(twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pessoaFisica", array()), "getNoPessoaFisica", array(), "method"))), "html", null, true);
        echo "</p>

                </div>
            </div>
";
        
        $__internal_e244361cb1d1fbadd2c4375b7cab20d932e4f24cbd0b941808eae6498bd4d58b->leave($__internal_e244361cb1d1fbadd2c4375b7cab20d932e4f24cbd0b941808eae6498bd4d58b_prof);

        
        $__internal_3f7175049acfe68b8a58260af529ec2e16526ee8e2af21d2e5cd166665a3437e->leave($__internal_3f7175049acfe68b8a58260af529ec2e16526ee8e2af21d2e5cd166665a3437e_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d28bcc2545959b1bc9c62ea517f5e5f9031dae91c606dbad34d8c1c59c0286b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d28bcc2545959b1bc9c62ea517f5e5f9031dae91c606dbad34d8c1c59c0286b->enter($__internal_1d28bcc2545959b1bc9c62ea517f5e5f9031dae91c606dbad34d8c1c59c0286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5016c81bef9caad3d34b80c0859c3509031f6ecbf587f9b82b3801d2cb93600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5016c81bef9caad3d34b80c0859c3509031f6ecbf587f9b82b3801d2cb93600c->enter($__internal_5016c81bef9caad3d34b80c0859c3509031f6ecbf587f9b82b3801d2cb93600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5016c81bef9caad3d34b80c0859c3509031f6ecbf587f9b82b3801d2cb93600c->leave($__internal_5016c81bef9caad3d34b80c0859c3509031f6ecbf587f9b82b3801d2cb93600c_prof);

        
        $__internal_1d28bcc2545959b1bc9c62ea517f5e5f9031dae91c606dbad34d8c1c59c0286b->leave($__internal_1d28bcc2545959b1bc9c62ea517f5e5f9031dae91c606dbad34d8c1c59c0286b_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 65,  307 => 175,  301 => 172,  280 => 154,  274 => 151,  264 => 144,  259 => 142,  254 => 140,  246 => 135,  241 => 133,  221 => 116,  216 => 114,  203 => 104,  163 => 66,  161 => 65,  147 => 54,  143 => 53,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  97 => 37,  92 => 35,  86 => 32,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  56 => 20,  51 => 18,  43 => 13,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
PÁGINA INICIAL - FRONT-END (CUSTOMIZAÇÃO DE FRONT END POR ALEXANDRE BRITO baseado no AdminLTE control panel and dashboard theme)
-->

<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{{ title_system }}</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.png') }}\"/>
    <!-- Theme style -->
    <link href=\"{{ asset('css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href=\"{{ asset('css/alteraTemplate.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('css/skins/skin-blue.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('css/jquery.steps.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/loading-bar.css') }}\" media=\"all\"/>

    <!--iCHECK CSS-->
    <link href=\"{{ asset('css/icheck/minimal/blue.css') }}\" rel=\"stylesheet\">

    <!--steps CSS-->
    <link href=\"{{ asset('css/steps-wizzard.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- Hint-->
    <script src=\"{{ asset('js/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
    <!-- Hint -->
    <script src=\"{{ asset('js/plugins/input-mask/jquery.inputmask.js') }}\"></script>
    <script src=\"{{ asset('js/plugins/input-mask/jquery.inputmask.extensions.js') }}\"></script>
    <script src=\"{{ asset('js/plugins/input-mask/jquery.inputmask.date.extensions.js') }}\"></script>
    <script src=\"{{ asset('js/plugins/input-mask/jquery.inputmask.numeric.extensions.js') }}\"></script>
    <script src=\"{{ asset('js/plugins/maskmoney/jquery.maskMoney.min.js') }}\"></script>
    <script src=\"{{ asset('js/carregarMunicipios.js') }}\"></script>
    <script src=\"{{ asset('js/angular/angular.js') }}\"></script>
    <script src=\"{{ asset('js/fosjsrouting/router.js') }}\"></script><!-- Gerador de rotas javascript -->
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

    <!---->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    <![endif]-->

    <style>
        [ng\\: cloak
        ]
        ,
        [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x- ng-cloak {
            display: none !important;
        }
    </style>
    {% block stylesheets %}{% endblock %}

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=\"skin-blue sidebar-mini\">
<!-- GOVERNO FEDERAL -->
<div id=\"barra-brasil\">
    <div id=\"wrapper-barra-brasil\">
        <div class=\"brasil-flag\"><a class=\"link-barra\" href=\"http://brasil.gov.br\">Brasil</a></div>
        <span class=\"acesso-info\"><a class=\"link-barra\" href=\"http://brasil.gov.br/barra#acesso-informacao\">Acesso à informação</a></span><span class=\"copa-counter\"><a class=\"link-barra\" href=\"http://www.copa2014.gov.br\"><span id=\"counter-barra-brasil\"></span></a></span>
        <ul class=\"list\">
            <li class=\"list-item first\"><a class=\"link-barra\" href=\"http://brasil.gov.br/barra#participe\">Participe</a>
            </li>
            <li class=\"list-item\"><a class=\"link-barra\" href=\"http://www.servicos.gov.br/\">Serviços</a></li>
            <li class=\"list-item\"><a class=\"link-barra\" href=\"http://www.planalto.gov.br/legislacao\">Legislação</a></li>
            <li class=\"list-item last last-item\"><a class=\"link-barra\" href=\"http://brasil.gov.br/barra#orgaos-atuacao-canais\">Canais</a>
            </li>
        </ul>
    </div>
    <!--logo do sistema-->
    <!--<div style=\"background-color: #247298; height: 100%;\"><img src=\"{{ asset('img/bg_topo.png') }}\"/></div>-->
</div>
<!-- GOVERNO FEDERAL -->
<div class=\"wrapper\">
    <!-- Main Header -->
    <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"#\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>{{ title_system_mini }}</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>{{ title_system }}</b></span>
        </a>
        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Alternar navegação</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">

                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"{{ asset('img/male.png') }}\" class=\"user-image\" alt=\"Estado\"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">{{ app.user.pessoaFisica.getNoPessoaFisica()|lower|ucwords }}</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('img/male.png') }}\" class=\"img-circle\" alt=\"Estado\"/>
                                <p style=\"font-size: 14px;\">
                                    {{ app.user.pessoaFisica.getNoPessoaFisica()|lower|ucwords }}
                                    <br/><span
                                            style=\"font-size: 90%; font-weight: bold;\">{{ app.user.perfilAcesso.getDsPerfilAcesso() }}</span>
                                    <br/>
                                </p>
                                <br/>
                            </li>
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"{{ path('changepasswd') }}\" class=\"btn btn-default btn-flat\">Alterar Senha</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"{{ path(\"logout\") }}\" class=\"btn btn-default btn-flat\">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"{{ asset('img/male.png') }}\" class=\"img-circle\" alt=\"Usuário\" />
                </div>
                <div class=\"pull-left info\">
                    <p>{{ app.user.pessoaFisica.getNoPessoaFisica()|lower|ucwords }}</p>

                </div>
            </div>
", "includes/header.html.twig", "D:\\planouso\\app\\Resources\\views\\includes\\header.html.twig");
    }
}
