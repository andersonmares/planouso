<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_91e18ce9687a70716dd5f62cb0aff65e2bacb35d96b9bf456af370449bface69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2164cd94df47e9f1e39143081c5f021cbc6656e9b354bf74337cad5298b52d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2164cd94df47e9f1e39143081c5f021cbc6656e9b354bf74337cad5298b52d98->enter($__internal_2164cd94df47e9f1e39143081c5f021cbc6656e9b354bf74337cad5298b52d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_145ed4ac1582f7e01945dbc5c88012a3fd661b2000a4f1b7182f75811507e71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145ed4ac1582f7e01945dbc5c88012a3fd661b2000a4f1b7182f75811507e71e->enter($__internal_145ed4ac1582f7e01945dbc5c88012a3fd661b2000a4f1b7182f75811507e71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2164cd94df47e9f1e39143081c5f021cbc6656e9b354bf74337cad5298b52d98->leave($__internal_2164cd94df47e9f1e39143081c5f021cbc6656e9b354bf74337cad5298b52d98_prof);

        
        $__internal_145ed4ac1582f7e01945dbc5c88012a3fd661b2000a4f1b7182f75811507e71e->leave($__internal_145ed4ac1582f7e01945dbc5c88012a3fd661b2000a4f1b7182f75811507e71e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd2efc2d8366914757dd8b1242189ee7d1e06f3d842db9849ec21a82dcb07683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2efc2d8366914757dd8b1242189ee7d1e06f3d842db9849ec21a82dcb07683->enter($__internal_dd2efc2d8366914757dd8b1242189ee7d1e06f3d842db9849ec21a82dcb07683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b17ef35869e688353072ec66ed5dd63c0ef4beee95da9f43461c8fbeeea31f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17ef35869e688353072ec66ed5dd63c0ef4beee95da9f43461c8fbeeea31f5f->enter($__internal_b17ef35869e688353072ec66ed5dd63c0ef4beee95da9f43461c8fbeeea31f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b17ef35869e688353072ec66ed5dd63c0ef4beee95da9f43461c8fbeeea31f5f->leave($__internal_b17ef35869e688353072ec66ed5dd63c0ef4beee95da9f43461c8fbeeea31f5f_prof);

        
        $__internal_dd2efc2d8366914757dd8b1242189ee7d1e06f3d842db9849ec21a82dcb07683->leave($__internal_dd2efc2d8366914757dd8b1242189ee7d1e06f3d842db9849ec21a82dcb07683_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1cfd7cb4e22db9b91af92f633cad9ceaff9c7aaed469e827d4a68fa7f45a547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cfd7cb4e22db9b91af92f633cad9ceaff9c7aaed469e827d4a68fa7f45a547->enter($__internal_e1cfd7cb4e22db9b91af92f633cad9ceaff9c7aaed469e827d4a68fa7f45a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04f64537873ba6b5a5a108edfb192a589b7104b21421afea933adce14d4e4da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f64537873ba6b5a5a108edfb192a589b7104b21421afea933adce14d4e4da3->enter($__internal_04f64537873ba6b5a5a108edfb192a589b7104b21421afea933adce14d4e4da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04f64537873ba6b5a5a108edfb192a589b7104b21421afea933adce14d4e4da3->leave($__internal_04f64537873ba6b5a5a108edfb192a589b7104b21421afea933adce14d4e4da3_prof);

        
        $__internal_e1cfd7cb4e22db9b91af92f633cad9ceaff9c7aaed469e827d4a68fa7f45a547->leave($__internal_e1cfd7cb4e22db9b91af92f633cad9ceaff9c7aaed469e827d4a68fa7f45a547_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce5c05f722aa23dbf0c5a8035decf5bb8539d3261592cf1800e0debe8f480252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5c05f722aa23dbf0c5a8035decf5bb8539d3261592cf1800e0debe8f480252->enter($__internal_ce5c05f722aa23dbf0c5a8035decf5bb8539d3261592cf1800e0debe8f480252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bd24adeffcb34f1fa17085522353246cbb4039565f588fa61c6559072d3bd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd24adeffcb34f1fa17085522353246cbb4039565f588fa61c6559072d3bd4c->enter($__internal_2bd24adeffcb34f1fa17085522353246cbb4039565f588fa61c6559072d3bd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2bd24adeffcb34f1fa17085522353246cbb4039565f588fa61c6559072d3bd4c->leave($__internal_2bd24adeffcb34f1fa17085522353246cbb4039565f588fa61c6559072d3bd4c_prof);

        
        $__internal_ce5c05f722aa23dbf0c5a8035decf5bb8539d3261592cf1800e0debe8f480252->leave($__internal_ce5c05f722aa23dbf0c5a8035decf5bb8539d3261592cf1800e0debe8f480252_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
