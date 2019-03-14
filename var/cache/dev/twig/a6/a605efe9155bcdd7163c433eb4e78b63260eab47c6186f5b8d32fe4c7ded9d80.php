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
        $__internal_fc70a26696e3708e9a0d996c5020c25d4750fe8599f1d27af0c92cf93321e92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc70a26696e3708e9a0d996c5020c25d4750fe8599f1d27af0c92cf93321e92a->enter($__internal_fc70a26696e3708e9a0d996c5020c25d4750fe8599f1d27af0c92cf93321e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ffc8ae973fc112bde517fa040d9a2c2760698db64167fcbc563b16d220f187eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc8ae973fc112bde517fa040d9a2c2760698db64167fcbc563b16d220f187eb->enter($__internal_ffc8ae973fc112bde517fa040d9a2c2760698db64167fcbc563b16d220f187eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc70a26696e3708e9a0d996c5020c25d4750fe8599f1d27af0c92cf93321e92a->leave($__internal_fc70a26696e3708e9a0d996c5020c25d4750fe8599f1d27af0c92cf93321e92a_prof);

        
        $__internal_ffc8ae973fc112bde517fa040d9a2c2760698db64167fcbc563b16d220f187eb->leave($__internal_ffc8ae973fc112bde517fa040d9a2c2760698db64167fcbc563b16d220f187eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6252e4ae53588a0a3a940f42efd32050ee6bd808b706306b57db75518f34411a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6252e4ae53588a0a3a940f42efd32050ee6bd808b706306b57db75518f34411a->enter($__internal_6252e4ae53588a0a3a940f42efd32050ee6bd808b706306b57db75518f34411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d20e6b944a0225854a664a726b42a22986cd185a924de6bd48f005e5fba0322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d20e6b944a0225854a664a726b42a22986cd185a924de6bd48f005e5fba0322->enter($__internal_1d20e6b944a0225854a664a726b42a22986cd185a924de6bd48f005e5fba0322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1d20e6b944a0225854a664a726b42a22986cd185a924de6bd48f005e5fba0322->leave($__internal_1d20e6b944a0225854a664a726b42a22986cd185a924de6bd48f005e5fba0322_prof);

        
        $__internal_6252e4ae53588a0a3a940f42efd32050ee6bd808b706306b57db75518f34411a->leave($__internal_6252e4ae53588a0a3a940f42efd32050ee6bd808b706306b57db75518f34411a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec1d4b2dcbaf4596c2fba40537a9f7d2bce0a4f9a66c381606a7f7385d6394a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d4b2dcbaf4596c2fba40537a9f7d2bce0a4f9a66c381606a7f7385d6394a3->enter($__internal_ec1d4b2dcbaf4596c2fba40537a9f7d2bce0a4f9a66c381606a7f7385d6394a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b18d8689009490bc01ae5f279bb9911b03750bad5619ffae70ec37f569a03581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18d8689009490bc01ae5f279bb9911b03750bad5619ffae70ec37f569a03581->enter($__internal_b18d8689009490bc01ae5f279bb9911b03750bad5619ffae70ec37f569a03581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b18d8689009490bc01ae5f279bb9911b03750bad5619ffae70ec37f569a03581->leave($__internal_b18d8689009490bc01ae5f279bb9911b03750bad5619ffae70ec37f569a03581_prof);

        
        $__internal_ec1d4b2dcbaf4596c2fba40537a9f7d2bce0a4f9a66c381606a7f7385d6394a3->leave($__internal_ec1d4b2dcbaf4596c2fba40537a9f7d2bce0a4f9a66c381606a7f7385d6394a3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_081153318c2c913c1150fc12de110fba2ef08ae583aeb08afe2f3e1956c27f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081153318c2c913c1150fc12de110fba2ef08ae583aeb08afe2f3e1956c27f0f->enter($__internal_081153318c2c913c1150fc12de110fba2ef08ae583aeb08afe2f3e1956c27f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c222c19dc52da65ee87543acef061d8e620282b1c46dad37a503191c4c784f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c222c19dc52da65ee87543acef061d8e620282b1c46dad37a503191c4c784f2->enter($__internal_7c222c19dc52da65ee87543acef061d8e620282b1c46dad37a503191c4c784f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c222c19dc52da65ee87543acef061d8e620282b1c46dad37a503191c4c784f2->leave($__internal_7c222c19dc52da65ee87543acef061d8e620282b1c46dad37a503191c4c784f2_prof);

        
        $__internal_081153318c2c913c1150fc12de110fba2ef08ae583aeb08afe2f3e1956c27f0f->leave($__internal_081153318c2c913c1150fc12de110fba2ef08ae583aeb08afe2f3e1956c27f0f_prof);

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
