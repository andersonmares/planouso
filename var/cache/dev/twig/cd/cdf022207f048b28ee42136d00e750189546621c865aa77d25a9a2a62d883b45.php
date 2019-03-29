<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2bba8392ea027e88b2a851bffabd18fb4c0f78d31e1a72e496a37d1cdf27fc63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee613e49e389d3e1cb9fefb9cd793364c1f158e0a17c6336f5f62ef304883008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee613e49e389d3e1cb9fefb9cd793364c1f158e0a17c6336f5f62ef304883008->enter($__internal_ee613e49e389d3e1cb9fefb9cd793364c1f158e0a17c6336f5f62ef304883008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1c45438536e5846c20a6d98579d548e4215de2e6826b5eb4ce1d93a17b61a0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c45438536e5846c20a6d98579d548e4215de2e6826b5eb4ce1d93a17b61a0fc->enter($__internal_1c45438536e5846c20a6d98579d548e4215de2e6826b5eb4ce1d93a17b61a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ee613e49e389d3e1cb9fefb9cd793364c1f158e0a17c6336f5f62ef304883008->leave($__internal_ee613e49e389d3e1cb9fefb9cd793364c1f158e0a17c6336f5f62ef304883008_prof);

        
        $__internal_1c45438536e5846c20a6d98579d548e4215de2e6826b5eb4ce1d93a17b61a0fc->leave($__internal_1c45438536e5846c20a6d98579d548e4215de2e6826b5eb4ce1d93a17b61a0fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9084cd45997bb53a93dadc102f94e066b5d3fb3a41ae969afbb15889a2bbe429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9084cd45997bb53a93dadc102f94e066b5d3fb3a41ae969afbb15889a2bbe429->enter($__internal_9084cd45997bb53a93dadc102f94e066b5d3fb3a41ae969afbb15889a2bbe429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55c737f4c5ff78f5e727200d3aa79fbf788c3c1be5a99b7264d6b83f0969530c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c737f4c5ff78f5e727200d3aa79fbf788c3c1be5a99b7264d6b83f0969530c->enter($__internal_55c737f4c5ff78f5e727200d3aa79fbf788c3c1be5a99b7264d6b83f0969530c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_55c737f4c5ff78f5e727200d3aa79fbf788c3c1be5a99b7264d6b83f0969530c->leave($__internal_55c737f4c5ff78f5e727200d3aa79fbf788c3c1be5a99b7264d6b83f0969530c_prof);

        
        $__internal_9084cd45997bb53a93dadc102f94e066b5d3fb3a41ae969afbb15889a2bbe429->leave($__internal_9084cd45997bb53a93dadc102f94e066b5d3fb3a41ae969afbb15889a2bbe429_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c29f38ca19fac972ae0f2097c1f5669cba520ea53ed2a83f1d8d20e7e9fcf13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29f38ca19fac972ae0f2097c1f5669cba520ea53ed2a83f1d8d20e7e9fcf13f->enter($__internal_c29f38ca19fac972ae0f2097c1f5669cba520ea53ed2a83f1d8d20e7e9fcf13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad99a3e705d2cca1e34d47be63ecbba4db57bf6d0965fd6c5b2a1bdc8c349ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad99a3e705d2cca1e34d47be63ecbba4db57bf6d0965fd6c5b2a1bdc8c349ca5->enter($__internal_ad99a3e705d2cca1e34d47be63ecbba4db57bf6d0965fd6c5b2a1bdc8c349ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad99a3e705d2cca1e34d47be63ecbba4db57bf6d0965fd6c5b2a1bdc8c349ca5->leave($__internal_ad99a3e705d2cca1e34d47be63ecbba4db57bf6d0965fd6c5b2a1bdc8c349ca5_prof);

        
        $__internal_c29f38ca19fac972ae0f2097c1f5669cba520ea53ed2a83f1d8d20e7e9fcf13f->leave($__internal_c29f38ca19fac972ae0f2097c1f5669cba520ea53ed2a83f1d8d20e7e9fcf13f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0694989b57d2f5249cd304b818c6768f9dcb79d208180254e7071b17949e514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0694989b57d2f5249cd304b818c6768f9dcb79d208180254e7071b17949e514->enter($__internal_f0694989b57d2f5249cd304b818c6768f9dcb79d208180254e7071b17949e514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_278b5b0a484b8f61db914ac51f2b2ee50ff625d6d1827a634d1b7bb0278798bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278b5b0a484b8f61db914ac51f2b2ee50ff625d6d1827a634d1b7bb0278798bc->enter($__internal_278b5b0a484b8f61db914ac51f2b2ee50ff625d6d1827a634d1b7bb0278798bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_278b5b0a484b8f61db914ac51f2b2ee50ff625d6d1827a634d1b7bb0278798bc->leave($__internal_278b5b0a484b8f61db914ac51f2b2ee50ff625d6d1827a634d1b7bb0278798bc_prof);

        
        $__internal_f0694989b57d2f5249cd304b818c6768f9dcb79d208180254e7071b17949e514->leave($__internal_f0694989b57d2f5249cd304b818c6768f9dcb79d208180254e7071b17949e514_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
