<?php

/* base.html.twig */
class __TwigTemplate_ca18a798c1e7e19e9a8d10346b0a59edc5a93a9636fa96e93d7e30a5d5052aa2 extends Twig_Template
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
        $__internal_ad5ab8106bc5d3819095b673bb9cbe579dd47ec37d27f37713d9e39db310b649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5ab8106bc5d3819095b673bb9cbe579dd47ec37d27f37713d9e39db310b649->enter($__internal_ad5ab8106bc5d3819095b673bb9cbe579dd47ec37d27f37713d9e39db310b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e4e5bcb4de513a646f5fd375be9c21011ba929eaa11f60bd4a34f342ecbf6eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e5bcb4de513a646f5fd375be9c21011ba929eaa11f60bd4a34f342ecbf6eea->enter($__internal_e4e5bcb4de513a646f5fd375be9c21011ba929eaa11f60bd4a34f342ecbf6eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ad5ab8106bc5d3819095b673bb9cbe579dd47ec37d27f37713d9e39db310b649->leave($__internal_ad5ab8106bc5d3819095b673bb9cbe579dd47ec37d27f37713d9e39db310b649_prof);

        
        $__internal_e4e5bcb4de513a646f5fd375be9c21011ba929eaa11f60bd4a34f342ecbf6eea->leave($__internal_e4e5bcb4de513a646f5fd375be9c21011ba929eaa11f60bd4a34f342ecbf6eea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_36a9e7bf7986e01e4d9cd809425a566e2bd2358df1a06b84831c7e4b1e0781de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a9e7bf7986e01e4d9cd809425a566e2bd2358df1a06b84831c7e4b1e0781de->enter($__internal_36a9e7bf7986e01e4d9cd809425a566e2bd2358df1a06b84831c7e4b1e0781de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_558345857ae809e98048950359bdd0e319b19dd7a6af9abac1e4980eb93be7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558345857ae809e98048950359bdd0e319b19dd7a6af9abac1e4980eb93be7f6->enter($__internal_558345857ae809e98048950359bdd0e319b19dd7a6af9abac1e4980eb93be7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_558345857ae809e98048950359bdd0e319b19dd7a6af9abac1e4980eb93be7f6->leave($__internal_558345857ae809e98048950359bdd0e319b19dd7a6af9abac1e4980eb93be7f6_prof);

        
        $__internal_36a9e7bf7986e01e4d9cd809425a566e2bd2358df1a06b84831c7e4b1e0781de->leave($__internal_36a9e7bf7986e01e4d9cd809425a566e2bd2358df1a06b84831c7e4b1e0781de_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcbb73d8478708cd2ef9a866a487f71468379f078526375f6574809428fb5896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbb73d8478708cd2ef9a866a487f71468379f078526375f6574809428fb5896->enter($__internal_fcbb73d8478708cd2ef9a866a487f71468379f078526375f6574809428fb5896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_71c51016359c8b85924c8d14ec9c6c2255c8081cadf1f8a139cdfa22d2b03e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c51016359c8b85924c8d14ec9c6c2255c8081cadf1f8a139cdfa22d2b03e0b->enter($__internal_71c51016359c8b85924c8d14ec9c6c2255c8081cadf1f8a139cdfa22d2b03e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_71c51016359c8b85924c8d14ec9c6c2255c8081cadf1f8a139cdfa22d2b03e0b->leave($__internal_71c51016359c8b85924c8d14ec9c6c2255c8081cadf1f8a139cdfa22d2b03e0b_prof);

        
        $__internal_fcbb73d8478708cd2ef9a866a487f71468379f078526375f6574809428fb5896->leave($__internal_fcbb73d8478708cd2ef9a866a487f71468379f078526375f6574809428fb5896_prof);

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
