<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_14f9166de7383863c5cb077ccaccf8ba04abc61eceb606f4b99bc0785e667c6d extends Twig_Template
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
        $__internal_5c4e6313424339880c463c6e4dbdc89419d67b1158417bb350078d1c93f1207b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4e6313424339880c463c6e4dbdc89419d67b1158417bb350078d1c93f1207b->enter($__internal_5c4e6313424339880c463c6e4dbdc89419d67b1158417bb350078d1c93f1207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7238bd51c9b2a0b0ec654f63995d0347bc8026cf4e018116378089b31b470ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7238bd51c9b2a0b0ec654f63995d0347bc8026cf4e018116378089b31b470ab7->enter($__internal_7238bd51c9b2a0b0ec654f63995d0347bc8026cf4e018116378089b31b470ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5c4e6313424339880c463c6e4dbdc89419d67b1158417bb350078d1c93f1207b->leave($__internal_5c4e6313424339880c463c6e4dbdc89419d67b1158417bb350078d1c93f1207b_prof);

        
        $__internal_7238bd51c9b2a0b0ec654f63995d0347bc8026cf4e018116378089b31b470ab7->leave($__internal_7238bd51c9b2a0b0ec654f63995d0347bc8026cf4e018116378089b31b470ab7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53cc68be636dc65a2ea9929de19b99633cf87dd1131fef7032f90a2d57ccf576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cc68be636dc65a2ea9929de19b99633cf87dd1131fef7032f90a2d57ccf576->enter($__internal_53cc68be636dc65a2ea9929de19b99633cf87dd1131fef7032f90a2d57ccf576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68a8da1254ddc7fead4f2669bd974c0efcb5b726629f12e923bd1a0bc2c918d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a8da1254ddc7fead4f2669bd974c0efcb5b726629f12e923bd1a0bc2c918d1->enter($__internal_68a8da1254ddc7fead4f2669bd974c0efcb5b726629f12e923bd1a0bc2c918d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_68a8da1254ddc7fead4f2669bd974c0efcb5b726629f12e923bd1a0bc2c918d1->leave($__internal_68a8da1254ddc7fead4f2669bd974c0efcb5b726629f12e923bd1a0bc2c918d1_prof);

        
        $__internal_53cc68be636dc65a2ea9929de19b99633cf87dd1131fef7032f90a2d57ccf576->leave($__internal_53cc68be636dc65a2ea9929de19b99633cf87dd1131fef7032f90a2d57ccf576_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5c4bbf3a79e0302d8792ef1cde0466aa15d390000a52c3ea9565ae33db6dbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c4bbf3a79e0302d8792ef1cde0466aa15d390000a52c3ea9565ae33db6dbf5->enter($__internal_b5c4bbf3a79e0302d8792ef1cde0466aa15d390000a52c3ea9565ae33db6dbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7230a9fc6935fa2dad67c291b0b1213d763ca41fdf3fc14c823870d3c108b45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7230a9fc6935fa2dad67c291b0b1213d763ca41fdf3fc14c823870d3c108b45b->enter($__internal_7230a9fc6935fa2dad67c291b0b1213d763ca41fdf3fc14c823870d3c108b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7230a9fc6935fa2dad67c291b0b1213d763ca41fdf3fc14c823870d3c108b45b->leave($__internal_7230a9fc6935fa2dad67c291b0b1213d763ca41fdf3fc14c823870d3c108b45b_prof);

        
        $__internal_b5c4bbf3a79e0302d8792ef1cde0466aa15d390000a52c3ea9565ae33db6dbf5->leave($__internal_b5c4bbf3a79e0302d8792ef1cde0466aa15d390000a52c3ea9565ae33db6dbf5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_706f9069fff564c9cc0025e3b8bf54549cc22c5e8a8fe60849188a6e4e15b0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706f9069fff564c9cc0025e3b8bf54549cc22c5e8a8fe60849188a6e4e15b0ab->enter($__internal_706f9069fff564c9cc0025e3b8bf54549cc22c5e8a8fe60849188a6e4e15b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8fbf64f088f28dc556f8855b887713cf970c37d6b69945a5f0aff2e64f09e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fbf64f088f28dc556f8855b887713cf970c37d6b69945a5f0aff2e64f09e5d->enter($__internal_b8fbf64f088f28dc556f8855b887713cf970c37d6b69945a5f0aff2e64f09e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8fbf64f088f28dc556f8855b887713cf970c37d6b69945a5f0aff2e64f09e5d->leave($__internal_b8fbf64f088f28dc556f8855b887713cf970c37d6b69945a5f0aff2e64f09e5d_prof);

        
        $__internal_706f9069fff564c9cc0025e3b8bf54549cc22c5e8a8fe60849188a6e4e15b0ab->leave($__internal_706f9069fff564c9cc0025e3b8bf54549cc22c5e8a8fe60849188a6e4e15b0ab_prof);

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
