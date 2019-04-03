<?php

/* base.html.twig */
class __TwigTemplate_2db663106fd2bb35d9af9fd14a0a1fc56bb885d612d5b7eaeaa66c57e4beea01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac26ef8ece7de55ab5ec8c1af80b36589e763732143af4b1c222de20475043e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac26ef8ece7de55ab5ec8c1af80b36589e763732143af4b1c222de20475043e5->enter($__internal_ac26ef8ece7de55ab5ec8c1af80b36589e763732143af4b1c222de20475043e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d23bfb6b9e95f2e0bdb6f465f345ec84237ab2841dc889ff7c162c96eb7874f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23bfb6b9e95f2e0bdb6f465f345ec84237ab2841dc889ff7c162c96eb7874f2->enter($__internal_d23bfb6b9e95f2e0bdb6f465f345ec84237ab2841dc889ff7c162c96eb7874f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->loadTemplate("includes/header.html.twig", "base.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("includes/menu.html.twig", "base.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"content-wrapper\">

    <!-- Main content -->
    <section class=\"content\">

                ";
        // line 8
        $this->loadTemplate("includes/messages.html.twig", "base.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "
    </section>
</div><!-- ./wrapper -->
";
        // line 13
        $this->loadTemplate("includes/footer.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>
";
        
        $__internal_ac26ef8ece7de55ab5ec8c1af80b36589e763732143af4b1c222de20475043e5->leave($__internal_ac26ef8ece7de55ab5ec8c1af80b36589e763732143af4b1c222de20475043e5_prof);

        
        $__internal_d23bfb6b9e95f2e0bdb6f465f345ec84237ab2841dc889ff7c162c96eb7874f2->leave($__internal_d23bfb6b9e95f2e0bdb6f465f345ec84237ab2841dc889ff7c162c96eb7874f2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5057419184bbd331ee21359efa16f75c8246fdc2a908562bd094d5088e645a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5057419184bbd331ee21359efa16f75c8246fdc2a908562bd094d5088e645a->enter($__internal_eb5057419184bbd331ee21359efa16f75c8246fdc2a908562bd094d5088e645a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3062baa5a01477b2311b0e96591d130d7f00275293c3840bbc9c17f0adc39813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3062baa5a01477b2311b0e96591d130d7f00275293c3840bbc9c17f0adc39813->enter($__internal_3062baa5a01477b2311b0e96591d130d7f00275293c3840bbc9c17f0adc39813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3062baa5a01477b2311b0e96591d130d7f00275293c3840bbc9c17f0adc39813->leave($__internal_3062baa5a01477b2311b0e96591d130d7f00275293c3840bbc9c17f0adc39813_prof);

        
        $__internal_eb5057419184bbd331ee21359efa16f75c8246fdc2a908562bd094d5088e645a->leave($__internal_eb5057419184bbd331ee21359efa16f75c8246fdc2a908562bd094d5088e645a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_278cfeba06974326f1b05890667ef34b099c47d8bccaa83edf43cd27b7ff5c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278cfeba06974326f1b05890667ef34b099c47d8bccaa83edf43cd27b7ff5c94->enter($__internal_278cfeba06974326f1b05890667ef34b099c47d8bccaa83edf43cd27b7ff5c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a3cbfb0b5ab4fc9c288c497467532936fe22af5315975dc86a2cba81671c93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3cbfb0b5ab4fc9c288c497467532936fe22af5315975dc86a2cba81671c93e->enter($__internal_6a3cbfb0b5ab4fc9c288c497467532936fe22af5315975dc86a2cba81671c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a3cbfb0b5ab4fc9c288c497467532936fe22af5315975dc86a2cba81671c93e->leave($__internal_6a3cbfb0b5ab4fc9c288c497467532936fe22af5315975dc86a2cba81671c93e_prof);

        
        $__internal_278cfeba06974326f1b05890667ef34b099c47d8bccaa83edf43cd27b7ff5c94->leave($__internal_278cfeba06974326f1b05890667ef34b099c47d8bccaa83edf43cd27b7ff5c94_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  64 => 9,  52 => 15,  50 => 14,  48 => 13,  43 => 10,  40 => 9,  38 => 8,  31 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include('includes/header.html.twig') %}
{% include('includes/menu.html.twig') %}
<div class=\"content-wrapper\">

    <!-- Main content -->
    <section class=\"content\">

                {% include 'includes/messages.html.twig' %}
                {% block body %}{% endblock %}

    </section>
</div><!-- ./wrapper -->
{% include('includes/footer.html.twig') %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "D:\\planouso\\app\\Resources\\views\\base.html.twig");
    }
}
