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
        $__internal_f198d86146b16bea1997a0c5b532af7a9caff58b6d9f632fad0e4c318618ef40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f198d86146b16bea1997a0c5b532af7a9caff58b6d9f632fad0e4c318618ef40->enter($__internal_f198d86146b16bea1997a0c5b532af7a9caff58b6d9f632fad0e4c318618ef40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d1d99cc12c72824039e3e04fed98d74884a4b58639d34e538cebcf296237c335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d99cc12c72824039e3e04fed98d74884a4b58639d34e538cebcf296237c335->enter($__internal_d1d99cc12c72824039e3e04fed98d74884a4b58639d34e538cebcf296237c335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f198d86146b16bea1997a0c5b532af7a9caff58b6d9f632fad0e4c318618ef40->leave($__internal_f198d86146b16bea1997a0c5b532af7a9caff58b6d9f632fad0e4c318618ef40_prof);

        
        $__internal_d1d99cc12c72824039e3e04fed98d74884a4b58639d34e538cebcf296237c335->leave($__internal_d1d99cc12c72824039e3e04fed98d74884a4b58639d34e538cebcf296237c335_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d118f7a6548b83d67bc831f6eb6827fa193d4570d180300d47a1eb01729b1a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d118f7a6548b83d67bc831f6eb6827fa193d4570d180300d47a1eb01729b1a80->enter($__internal_d118f7a6548b83d67bc831f6eb6827fa193d4570d180300d47a1eb01729b1a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fba1d4fe6f10e17fcf9a6da8bb16c54ff373255821e0ad951c255a7504bd5c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba1d4fe6f10e17fcf9a6da8bb16c54ff373255821e0ad951c255a7504bd5c7d->enter($__internal_fba1d4fe6f10e17fcf9a6da8bb16c54ff373255821e0ad951c255a7504bd5c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fba1d4fe6f10e17fcf9a6da8bb16c54ff373255821e0ad951c255a7504bd5c7d->leave($__internal_fba1d4fe6f10e17fcf9a6da8bb16c54ff373255821e0ad951c255a7504bd5c7d_prof);

        
        $__internal_d118f7a6548b83d67bc831f6eb6827fa193d4570d180300d47a1eb01729b1a80->leave($__internal_d118f7a6548b83d67bc831f6eb6827fa193d4570d180300d47a1eb01729b1a80_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_410e4b7e367e6b3bf3ff9465af8e5ea3a024c5d245a65e9980ecb807891403cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410e4b7e367e6b3bf3ff9465af8e5ea3a024c5d245a65e9980ecb807891403cb->enter($__internal_410e4b7e367e6b3bf3ff9465af8e5ea3a024c5d245a65e9980ecb807891403cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ea1f55bd553a9a54f4b67b06fe4c2b3010aec4bb7e21231117a454a41b8af34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1f55bd553a9a54f4b67b06fe4c2b3010aec4bb7e21231117a454a41b8af34a->enter($__internal_ea1f55bd553a9a54f4b67b06fe4c2b3010aec4bb7e21231117a454a41b8af34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ea1f55bd553a9a54f4b67b06fe4c2b3010aec4bb7e21231117a454a41b8af34a->leave($__internal_ea1f55bd553a9a54f4b67b06fe4c2b3010aec4bb7e21231117a454a41b8af34a_prof);

        
        $__internal_410e4b7e367e6b3bf3ff9465af8e5ea3a024c5d245a65e9980ecb807891403cb->leave($__internal_410e4b7e367e6b3bf3ff9465af8e5ea3a024c5d245a65e9980ecb807891403cb_prof);

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
