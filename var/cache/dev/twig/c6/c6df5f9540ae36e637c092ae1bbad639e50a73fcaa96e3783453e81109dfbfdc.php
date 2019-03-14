<?php

/* default/login.html.twig */
class __TwigTemplate_8a7c6172fa9ce3662583d5891cc6a3a39a24871bb684c538d40be902f460d59c extends Twig_Template
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
        $__internal_cf5eb8864ed1bf39da46474371ba81fefca2cc7eeb0b433abbb87b3e2db97dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5eb8864ed1bf39da46474371ba81fefca2cc7eeb0b433abbb87b3e2db97dbb->enter($__internal_cf5eb8864ed1bf39da46474371ba81fefca2cc7eeb0b433abbb87b3e2db97dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_fce9c4d185f29058fd1f61e2c0558fc9eb388e30e7e25904ed195db7d7f40790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce9c4d185f29058fd1f61e2c0558fc9eb388e30e7e25904ed195db7d7f40790->enter($__internal_fce9c4d185f29058fd1f61e2c0558fc9eb388e30e7e25904ed195db7d7f40790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title_system"] ?? $this->getContext($context, "title_system")), "html", null, true);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\"/>
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ionicons.min.css.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/blue.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Plano de Uso</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        ";
        // line 39
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 40
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "            <div class=\"alert alert-success\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
        <p class=\"login-box-msg\">Digite seu usuário e senha para iniciar a sessão.</p>

        <form action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" method=\"post\">
            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Usuário\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required />
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Senha\" required />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">

                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Acessar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a id=\"forgotPassword\" data-toggle=\"modal\" href=\"#modal-forgotpassword\">Esqueci minha senha</a><br>
        <!--<a href=\"register.html\" class=\"text-center\">Register a new membership</a>-->

    </div>
    <!-- /.login-box-body -->
</div>


<div class=\"modal fade\" id=\"modal-forgotpassword\">
    <div class=\"modal-dialog modal-sm\">
        ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formForgot"] ?? $this->getContext($context, "formForgot")), 'form_start', array("attr" => array("id" => "formForgotPassword")));
        echo "
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">Recuperar Senha</h4>
            </div>
            <div class=\"modal-body\">
                <span class=\"alert fade\" id=\"alertForgot\"></span>
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formForgot"] ?? $this->getContext($context, "formForgot")), "user", array()), 'label');
        echo "
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formForgot"] ?? $this->getContext($context, "formForgot")), "user", array()), 'errors');
        echo "
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formForgot"] ?? $this->getContext($context, "formForgot")), "user", array()), 'widget');
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"submitForgot\" class=\"btn btn-success\">Recuperar Senha</button>
            </div>
            ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formForgot"] ?? $this->getContext($context, "formForgot")), 'form_end');
        echo "
        </div>
    </div>

</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {

        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        \$(document).on(\"click\", \"#submitForgot\", function(e){
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgot");
        echo "\",
                data: \$(\"#formForgotPassword\").serialize(),
                /*success: success,*/
                dataType: \"json\",
                complete: function(e, xhr, settings){
                    if(e.status === 200){
                        \$(\"#alertForgot\").html(e.responseJSON.msg);
                        \$(\"#alertForgot\").removeClass(\"fade\");
                        \$(\"#alertForgot\").removeClass(\"alert-error\");
                        \$(\"#alertForgot\").addClass(\"alert alert-success show\");
                    }else{
                        \$(\"#alertForgot\").html(e.responseJSON.msg);
                        \$(\"#alertForgot\").removeClass(\"fade\");
                        \$(\"#alertForgot\").removeClass(\"alert-success\");
                        \$(\"#alertForgot\").addClass(\"alert alert-error show\");
                    }
                }

            });
        });
    });
</script>
</body>
</html>
";
        
        $__internal_cf5eb8864ed1bf39da46474371ba81fefca2cc7eeb0b433abbb87b3e2db97dbb->leave($__internal_cf5eb8864ed1bf39da46474371ba81fefca2cc7eeb0b433abbb87b3e2db97dbb_prof);

        
        $__internal_fce9c4d185f29058fd1f61e2c0558fc9eb388e30e7e25904ed195db7d7f40790->leave($__internal_fce9c4d185f29058fd1f61e2c0558fc9eb388e30e7e25904ed195db7d7f40790_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 129,  230 => 116,  225 => 114,  220 => 112,  209 => 104,  201 => 99,  197 => 98,  193 => 97,  181 => 88,  151 => 61,  146 => 59,  141 => 56,  132 => 53,  129 => 52,  125 => 51,  122 => 50,  113 => 47,  110 => 46,  106 => 45,  103 => 44,  97 => 41,  94 => 40,  92 => 39,  76 => 26,  72 => 25,  64 => 20,  59 => 18,  54 => 16,  49 => 14,  44 => 12,  39 => 10,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{{ title_system }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.png') }}\"/>
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/ionicons.min.css.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/AdminLTE.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('login/blue.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('js/respond.min.js') }}\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Plano de Uso</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=\"login-box-body\">
        {% if error %}
            <div class=\"alert alert-danger\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        {% for flashMessage in app.session.flashbag.get('success') %}
            <div class=\"alert alert-success\">
                {{ flashMessage }}
            </div>
        {% endfor %}

        {% for flashMessage in app.session.flashbag.get('error') %}
            <div class=\"alert alert-danger\">
                {{ flashMessage }}
            </div>
        {% endfor %}

        <p class=\"login-box-msg\">Digite seu usuário e senha para iniciar a sessão.</p>

        <form action=\"{{ path('index') }}\" method=\"post\">
            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Usuário\" value=\"{{ last_username }}\" required />
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Senha\" required />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">

                <!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Acessar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a id=\"forgotPassword\" data-toggle=\"modal\" href=\"#modal-forgotpassword\">Esqueci minha senha</a><br>
        <!--<a href=\"register.html\" class=\"text-center\">Register a new membership</a>-->

    </div>
    <!-- /.login-box-body -->
</div>


<div class=\"modal fade\" id=\"modal-forgotpassword\">
    <div class=\"modal-dialog modal-sm\">
        {{ form_start(formForgot, {'attr': {'id': 'formForgotPassword'}}) }}
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">Recuperar Senha</h4>
            </div>
            <div class=\"modal-body\">
                <span class=\"alert fade\" id=\"alertForgot\"></span>
                {{ form_label(formForgot.user) }}
                {{ form_errors(formForgot.user) }}
                {{ form_widget(formForgot.user) }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"submitForgot\" class=\"btn btn-success\">Recuperar Senha</button>
            </div>
            {{ form_end(formForgot)}}
        </div>
    </div>

</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('js/icheck.min.js') }}\"></script>
<script>
    \$(function () {

        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        \$(document).on(\"click\", \"#submitForgot\", function(e){
            \$.ajax({
                type: \"POST\",
                url: \"{{ path(\"forgot\") }}\",
                data: \$(\"#formForgotPassword\").serialize(),
                /*success: success,*/
                dataType: \"json\",
                complete: function(e, xhr, settings){
                    if(e.status === 200){
                        \$(\"#alertForgot\").html(e.responseJSON.msg);
                        \$(\"#alertForgot\").removeClass(\"fade\");
                        \$(\"#alertForgot\").removeClass(\"alert-error\");
                        \$(\"#alertForgot\").addClass(\"alert alert-success show\");
                    }else{
                        \$(\"#alertForgot\").html(e.responseJSON.msg);
                        \$(\"#alertForgot\").removeClass(\"fade\");
                        \$(\"#alertForgot\").removeClass(\"alert-success\");
                        \$(\"#alertForgot\").addClass(\"alert alert-error show\");
                    }
                }

            });
        });
    });
</script>
</body>
</html>
", "default/login.html.twig", "D:\\planouso\\app\\Resources\\views\\default\\login.html.twig");
    }
}
