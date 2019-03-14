<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8dc6b45d566904ecd9e069a519b912c76ea2cdac7dbbd548aad6f820f6a21c34 extends Twig_Template
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
        $__internal_39345ea6a0c9d9d9795bd3af819f7e98c3055f984fd3ae572ebcfe421054568d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39345ea6a0c9d9d9795bd3af819f7e98c3055f984fd3ae572ebcfe421054568d->enter($__internal_39345ea6a0c9d9d9795bd3af819f7e98c3055f984fd3ae572ebcfe421054568d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e8182cc63c15850caf3f05ea630c41aa986de9f2be9f8091c3a66c0d6076d5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8182cc63c15850caf3f05ea630c41aa986de9f2be9f8091c3a66c0d6076d5c4->enter($__internal_e8182cc63c15850caf3f05ea630c41aa986de9f2be9f8091c3a66c0d6076d5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_39345ea6a0c9d9d9795bd3af819f7e98c3055f984fd3ae572ebcfe421054568d->leave($__internal_39345ea6a0c9d9d9795bd3af819f7e98c3055f984fd3ae572ebcfe421054568d_prof);

        
        $__internal_e8182cc63c15850caf3f05ea630c41aa986de9f2be9f8091c3a66c0d6076d5c4->leave($__internal_e8182cc63c15850caf3f05ea630c41aa986de9f2be9f8091c3a66c0d6076d5c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
