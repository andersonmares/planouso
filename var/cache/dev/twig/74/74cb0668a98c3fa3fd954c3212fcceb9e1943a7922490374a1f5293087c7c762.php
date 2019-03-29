<?php

/* @Admin/Usuario/add.html.twig */
class __TwigTemplate_151b0a412ef0374643f2c3af5a17027eacc5d5de2ceab70ca9dd4873cf19bc82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Admin/Usuario/add.html.twig", 1);
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
        $__internal_6f492ab89b129a758752b3ae1024939af281dad3107a9c2ba787b83c188ee1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f492ab89b129a758752b3ae1024939af281dad3107a9c2ba787b83c188ee1a2->enter($__internal_6f492ab89b129a758752b3ae1024939af281dad3107a9c2ba787b83c188ee1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/add.html.twig"));

        $__internal_75df38712229f6208b57d2bff3b7bc12386a20ca053e61beb925c716bb39e41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75df38712229f6208b57d2bff3b7bc12386a20ca053e61beb925c716bb39e41e->enter($__internal_75df38712229f6208b57d2bff3b7bc12386a20ca053e61beb925c716bb39e41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Usuario/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f492ab89b129a758752b3ae1024939af281dad3107a9c2ba787b83c188ee1a2->leave($__internal_6f492ab89b129a758752b3ae1024939af281dad3107a9c2ba787b83c188ee1a2_prof);

        
        $__internal_75df38712229f6208b57d2bff3b7bc12386a20ca053e61beb925c716bb39e41e->leave($__internal_75df38712229f6208b57d2bff3b7bc12386a20ca053e61beb925c716bb39e41e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf613c4f776e1be35e0183d8f4147d99f87c92ec6bf1ff23bc6908b2ee014745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf613c4f776e1be35e0183d8f4147d99f87c92ec6bf1ff23bc6908b2ee014745->enter($__internal_cf613c4f776e1be35e0183d8f4147d99f87c92ec6bf1ff23bc6908b2ee014745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4603c6dd45ee5d59aa76577dd4b96b3330eae8cd8a869ce1e54ae3a3d727d3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4603c6dd45ee5d59aa76577dd4b96b3330eae8cd8a869ce1e54ae3a3d727d3d7->enter($__internal_4603c6dd45ee5d59aa76577dd4b96b3330eae8cd8a869ce1e54ae3a3d727d3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"box box-success box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"><span class=\"fa fa-server\"></span> Tipo de Atividade</h3>
        </div>
        <div class=\"box-body\">
            <div class=\" col-lg-5\">
                <div class=\"form-group\">
                    <label class=\"control-label\">CPF</label><br /> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pessoa_fisica"] ?? $this->getContext($context, "pessoa_fisica")), "cpf", array(), "array"), "html", null, true);
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Nome</label><br /> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pessoa_fisica"] ?? $this->getContext($context, "pessoa_fisica")), "noPessoa", array(), "array"), "html", null, true);
        echo "
                </div>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">

                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsEmail", array()), 'label');
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsEmail", array()), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dsEmail", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuTelefone", array()), 'label');
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuTelefone", array()), 'errors');
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nuTelefone", array()), 'widget');
        echo "

                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coPerfilAcesso", array()), 'label');
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coPerfilAcesso", array()), 'errors');
        echo "
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coPerfilAcesso", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-group\" style=\"display: ";
        // line 46
        echo twig_escape_filter($this->env, ($context["displayDepartamento"] ?? $this->getContext($context, "displayDepartamento")), "html", null, true);
        echo "\" id=\"divDepartamento\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coDepartamento", array()), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coDepartamento", array()), 'errors');
        echo "
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coDepartamento", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                <a class=\"btn btn-info\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario");
        echo "\">Voltar</a>
                ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_4603c6dd45ee5d59aa76577dd4b96b3330eae8cd8a869ce1e54ae3a3d727d3d7->leave($__internal_4603c6dd45ee5d59aa76577dd4b96b3330eae8cd8a869ce1e54ae3a3d727d3d7_prof);

        
        $__internal_cf613c4f776e1be35e0183d8f4147d99f87c92ec6bf1ff23bc6908b2ee014745->leave($__internal_cf613c4f776e1be35e0183d8f4147d99f87c92ec6bf1ff23bc6908b2ee014745_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24f60a96e5f710d1f78d671e3af3f489309eca2bee19a63f83f6518d5eaad676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f60a96e5f710d1f78d671e3af3f489309eca2bee19a63f83f6518d5eaad676->enter($__internal_24f60a96e5f710d1f78d671e3af3f489309eca2bee19a63f83f6518d5eaad676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c92181c8f2dbdd319630b3233a6c6e0fbdff1f19d3c79f65e7eebfcd0a7ff7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92181c8f2dbdd319630b3233a6c6e0fbdff1f19d3c79f65e7eebfcd0a7ff7cf->enter($__internal_c92181c8f2dbdd319630b3233a6c6e0fbdff1f19d3c79f65e7eebfcd0a7ff7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    <script>
        \$(function () {
            \$(\"#usuario_coPerfilAcesso\").change(function(){
               if (\$(this).val() == 3) {
                   \$(\"#divDepartamento\").show();
                   \$(\"#usuario_coDepartamento\").prop('required', true)
               }else{
                   \$(\"#divDepartamento\").hide();
                   \$(\"#usuario_coDepartamento\").prop('required', false)
               }
            });

            \$(\"#usuario_nuTelefone\").inputmask({
                mask: [\"(99) 9999-9999\", \"(99) 99999-9999\"]
            });

        });
    </script>
";
        
        $__internal_c92181c8f2dbdd319630b3233a6c6e0fbdff1f19d3c79f65e7eebfcd0a7ff7cf->leave($__internal_c92181c8f2dbdd319630b3233a6c6e0fbdff1f19d3c79f65e7eebfcd0a7ff7cf_prof);

        
        $__internal_24f60a96e5f710d1f78d671e3af3f489309eca2bee19a63f83f6518d5eaad676->leave($__internal_24f60a96e5f710d1f78d671e3af3f489309eca2bee19a63f83f6518d5eaad676_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Usuario/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 64,  172 => 63,  156 => 57,  152 => 56,  144 => 51,  140 => 50,  136 => 49,  130 => 46,  123 => 42,  119 => 41,  115 => 40,  104 => 32,  100 => 31,  96 => 30,  86 => 23,  82 => 22,  78 => 21,  70 => 16,  65 => 14,  59 => 11,  50 => 4,  41 => 3,  11 => 1,);
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
            <h3 class=\"box-title\"><span class=\"fa fa-server\"></span> Tipo de Atividade</h3>
        </div>
        <div class=\"box-body\">
            <div class=\" col-lg-5\">
                <div class=\"form-group\">
                    <label class=\"control-label\">CPF</label><br /> {{ pessoa_fisica['cpf'] }}
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Nome</label><br /> {{ pessoa_fisica['noPessoa'] }}
                </div>
                {{ form_start(form) }}
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">

                            {{ form_label(form.dsEmail) }}
                            {{ form_errors(form.dsEmail) }}
                            {{ form_widget(form.dsEmail) }}
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            {{ form_label(form.nuTelefone) }}
                            {{ form_errors(form.nuTelefone) }}
                            {{ form_widget(form.nuTelefone) }}

                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            {{ form_label(form.coPerfilAcesso) }}
                            {{ form_errors(form.coPerfilAcesso) }}
                            {{ form_widget(form.coPerfilAcesso) }}
                        </div>
                    </div>
                </div>
                <div class=\"form-group\" style=\"display: {{ displayDepartamento }}\" id=\"divDepartamento\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            {{ form_label(form.coDepartamento) }}
                            {{ form_errors(form.coDepartamento) }}
                            {{ form_widget(form.coDepartamento) }}
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                <a class=\"btn btn-info\" href=\"{{ path('usuario') }}\">Voltar</a>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}
    <script>
        \$(function () {
            \$(\"#usuario_coPerfilAcesso\").change(function(){
               if (\$(this).val() == 3) {
                   \$(\"#divDepartamento\").show();
                   \$(\"#usuario_coDepartamento\").prop('required', true)
               }else{
                   \$(\"#divDepartamento\").hide();
                   \$(\"#usuario_coDepartamento\").prop('required', false)
               }
            });

            \$(\"#usuario_nuTelefone\").inputmask({
                mask: [\"(99) 9999-9999\", \"(99) 99999-9999\"]
            });

        });
    </script>
{% endblock %}", "@Admin/Usuario/add.html.twig", "D:\\planouso\\src\\Admin\\AdminBundle\\Resources\\views\\Usuario\\add.html.twig");
    }
}
