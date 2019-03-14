<?php

/* default/login.html.twig */
class __TwigTemplate_e4f3fc8a011629f22e1bb36c6a21b88a20f7bf9e86eb6adf51f9fe46926ec9b6 extends Twig_Template
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
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title_system"] ?? null), "html", null, true);
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
        if (($context["error"] ?? null)) {
            // line 40
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formForgot"] ?? null), 'form_start', array("attr" => array("id" => "formForgotPassword")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formForgot"] ?? null), "user", array()), 'label');
        echo "
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formForgot"] ?? null), "user", array()), 'errors');
        echo "
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formForgot"] ?? null), "user", array()), 'widget');
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"submitForgot\" class=\"btn btn-success\">Recuperar Senha</button>
            </div>
            ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formForgot"] ?? null), 'form_end');
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
        return array (  240 => 129,  224 => 116,  219 => 114,  214 => 112,  203 => 104,  195 => 99,  191 => 98,  187 => 97,  175 => 88,  145 => 61,  140 => 59,  135 => 56,  126 => 53,  123 => 52,  119 => 51,  116 => 50,  107 => 47,  104 => 46,  100 => 45,  97 => 44,  91 => 41,  88 => 40,  86 => 39,  70 => 26,  66 => 25,  58 => 20,  53 => 18,  48 => 16,  43 => 14,  38 => 12,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/login.html.twig", "D:\\planouso\\app\\Resources\\views\\default\\login.html.twig");
    }
}
