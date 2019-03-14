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
        $__internal_855969a0119ef1fd643c5954380bf550c125ed8b1221a86fa434d02a5d0464e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855969a0119ef1fd643c5954380bf550c125ed8b1221a86fa434d02a5d0464e7->enter($__internal_855969a0119ef1fd643c5954380bf550c125ed8b1221a86fa434d02a5d0464e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e683293c8e1c382ea9f12f0b5e3b72590bda4a260626875193ded8d4ff097541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e683293c8e1c382ea9f12f0b5e3b72590bda4a260626875193ded8d4ff097541->enter($__internal_e683293c8e1c382ea9f12f0b5e3b72590bda4a260626875193ded8d4ff097541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_855969a0119ef1fd643c5954380bf550c125ed8b1221a86fa434d02a5d0464e7->leave($__internal_855969a0119ef1fd643c5954380bf550c125ed8b1221a86fa434d02a5d0464e7_prof);

        
        $__internal_e683293c8e1c382ea9f12f0b5e3b72590bda4a260626875193ded8d4ff097541->leave($__internal_e683293c8e1c382ea9f12f0b5e3b72590bda4a260626875193ded8d4ff097541_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b3f11eb972f8638e45545ac9ed20626802cd178547d3b82bc9c08038a638e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3f11eb972f8638e45545ac9ed20626802cd178547d3b82bc9c08038a638e3d->enter($__internal_5b3f11eb972f8638e45545ac9ed20626802cd178547d3b82bc9c08038a638e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9849cade3088ecc88836bd76777f4abf03f032d298b7085528fc00b90c2e83bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9849cade3088ecc88836bd76777f4abf03f032d298b7085528fc00b90c2e83bb->enter($__internal_9849cade3088ecc88836bd76777f4abf03f032d298b7085528fc00b90c2e83bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9849cade3088ecc88836bd76777f4abf03f032d298b7085528fc00b90c2e83bb->leave($__internal_9849cade3088ecc88836bd76777f4abf03f032d298b7085528fc00b90c2e83bb_prof);

        
        $__internal_5b3f11eb972f8638e45545ac9ed20626802cd178547d3b82bc9c08038a638e3d->leave($__internal_5b3f11eb972f8638e45545ac9ed20626802cd178547d3b82bc9c08038a638e3d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf16777f0ee43d7dfc4b0a6bd04091c332beff04e4c70154104f54c71160d963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf16777f0ee43d7dfc4b0a6bd04091c332beff04e4c70154104f54c71160d963->enter($__internal_cf16777f0ee43d7dfc4b0a6bd04091c332beff04e4c70154104f54c71160d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba592adf451bbd039a4a150f23566140d4a60684bb3a09505aff7ebcc66ebcdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba592adf451bbd039a4a150f23566140d4a60684bb3a09505aff7ebcc66ebcdb->enter($__internal_ba592adf451bbd039a4a150f23566140d4a60684bb3a09505aff7ebcc66ebcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ba592adf451bbd039a4a150f23566140d4a60684bb3a09505aff7ebcc66ebcdb->leave($__internal_ba592adf451bbd039a4a150f23566140d4a60684bb3a09505aff7ebcc66ebcdb_prof);

        
        $__internal_cf16777f0ee43d7dfc4b0a6bd04091c332beff04e4c70154104f54c71160d963->leave($__internal_cf16777f0ee43d7dfc4b0a6bd04091c332beff04e4c70154104f54c71160d963_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_427d3f3f2ee83f809e67577d98d9467e09d3733becf4257ea4f2608b5f7943a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427d3f3f2ee83f809e67577d98d9467e09d3733becf4257ea4f2608b5f7943a5->enter($__internal_427d3f3f2ee83f809e67577d98d9467e09d3733becf4257ea4f2608b5f7943a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56b25ee041664ff1887619ee2d05a8ce1c9703b04c12d3b1e8a0cb57797f7163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b25ee041664ff1887619ee2d05a8ce1c9703b04c12d3b1e8a0cb57797f7163->enter($__internal_56b25ee041664ff1887619ee2d05a8ce1c9703b04c12d3b1e8a0cb57797f7163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56b25ee041664ff1887619ee2d05a8ce1c9703b04c12d3b1e8a0cb57797f7163->leave($__internal_56b25ee041664ff1887619ee2d05a8ce1c9703b04c12d3b1e8a0cb57797f7163_prof);

        
        $__internal_427d3f3f2ee83f809e67577d98d9467e09d3733becf4257ea4f2608b5f7943a5->leave($__internal_427d3f3f2ee83f809e67577d98d9467e09d3733becf4257ea4f2608b5f7943a5_prof);

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
