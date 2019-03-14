<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1d4643c644b3e7f8baf5f21517146a20ab360d57754ef080b7a1e0da82b7890a extends Twig_Template
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
        $__internal_c77d9e29d1a6547917d2962645f267ec9ad174f05df444b4e4bf0ac3247a1f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77d9e29d1a6547917d2962645f267ec9ad174f05df444b4e4bf0ac3247a1f52->enter($__internal_c77d9e29d1a6547917d2962645f267ec9ad174f05df444b4e4bf0ac3247a1f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e0a946bf235412a5a1792489b05c6db339b1cc74a9d4b834f3ecfb12ba683916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a946bf235412a5a1792489b05c6db339b1cc74a9d4b834f3ecfb12ba683916->enter($__internal_e0a946bf235412a5a1792489b05c6db339b1cc74a9d4b834f3ecfb12ba683916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c77d9e29d1a6547917d2962645f267ec9ad174f05df444b4e4bf0ac3247a1f52->leave($__internal_c77d9e29d1a6547917d2962645f267ec9ad174f05df444b4e4bf0ac3247a1f52_prof);

        
        $__internal_e0a946bf235412a5a1792489b05c6db339b1cc74a9d4b834f3ecfb12ba683916->leave($__internal_e0a946bf235412a5a1792489b05c6db339b1cc74a9d4b834f3ecfb12ba683916_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_808a821a0651d8187f5bf624da5ca6883feb8ec80ad7993e734809f51dc36c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808a821a0651d8187f5bf624da5ca6883feb8ec80ad7993e734809f51dc36c60->enter($__internal_808a821a0651d8187f5bf624da5ca6883feb8ec80ad7993e734809f51dc36c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c88bafacdeb954383a083a87a3db66f7f91e48b26cfde60f7dd1da95450a46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c88bafacdeb954383a083a87a3db66f7f91e48b26cfde60f7dd1da95450a46b->enter($__internal_6c88bafacdeb954383a083a87a3db66f7f91e48b26cfde60f7dd1da95450a46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6c88bafacdeb954383a083a87a3db66f7f91e48b26cfde60f7dd1da95450a46b->leave($__internal_6c88bafacdeb954383a083a87a3db66f7f91e48b26cfde60f7dd1da95450a46b_prof);

        
        $__internal_808a821a0651d8187f5bf624da5ca6883feb8ec80ad7993e734809f51dc36c60->leave($__internal_808a821a0651d8187f5bf624da5ca6883feb8ec80ad7993e734809f51dc36c60_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_24a0c21321bd12ca06ec870d020157bc31cd0cc2cea72d45bb307c84f850fd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a0c21321bd12ca06ec870d020157bc31cd0cc2cea72d45bb307c84f850fd29->enter($__internal_24a0c21321bd12ca06ec870d020157bc31cd0cc2cea72d45bb307c84f850fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1df1755955f20be59a0ee0b3f37a6701887e0b5995dbb0543240656675f6ccff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df1755955f20be59a0ee0b3f37a6701887e0b5995dbb0543240656675f6ccff->enter($__internal_1df1755955f20be59a0ee0b3f37a6701887e0b5995dbb0543240656675f6ccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1df1755955f20be59a0ee0b3f37a6701887e0b5995dbb0543240656675f6ccff->leave($__internal_1df1755955f20be59a0ee0b3f37a6701887e0b5995dbb0543240656675f6ccff_prof);

        
        $__internal_24a0c21321bd12ca06ec870d020157bc31cd0cc2cea72d45bb307c84f850fd29->leave($__internal_24a0c21321bd12ca06ec870d020157bc31cd0cc2cea72d45bb307c84f850fd29_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_880c39d209115ddaa6f25cd1a48d01935d0c19b904fd8486a5bf51a65fed8f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880c39d209115ddaa6f25cd1a48d01935d0c19b904fd8486a5bf51a65fed8f55->enter($__internal_880c39d209115ddaa6f25cd1a48d01935d0c19b904fd8486a5bf51a65fed8f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47ee5f6b88499532f91796c9d52ab4ca0588a69863596cf1b285e19db4b965f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ee5f6b88499532f91796c9d52ab4ca0588a69863596cf1b285e19db4b965f7->enter($__internal_47ee5f6b88499532f91796c9d52ab4ca0588a69863596cf1b285e19db4b965f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_47ee5f6b88499532f91796c9d52ab4ca0588a69863596cf1b285e19db4b965f7->leave($__internal_47ee5f6b88499532f91796c9d52ab4ca0588a69863596cf1b285e19db4b965f7_prof);

        
        $__internal_880c39d209115ddaa6f25cd1a48d01935d0c19b904fd8486a5bf51a65fed8f55->leave($__internal_880c39d209115ddaa6f25cd1a48d01935d0c19b904fd8486a5bf51a65fed8f55_prof);

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
