<?php

/* includes/menu.html.twig */
class __TwigTemplate_5b9aa6b61c8cfe1b6600f29aad2355e40d178a7c73a32702fc745911a0285772 extends Twig_Template
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
        $__internal_61e34ff2738399b33cb60da50c3ef6b1a6974568f4d25c0dbfe68aadd1fc7e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e34ff2738399b33cb60da50c3ef6b1a6974568f4d25c0dbfe68aadd1fc7e66->enter($__internal_61e34ff2738399b33cb60da50c3ef6b1a6974568f4d25c0dbfe68aadd1fc7e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/menu.html.twig"));

        $__internal_52ba4f0066f5dd40dee923ba37f2fa1f664d44037724994c56f1af973d2550d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ba4f0066f5dd40dee923ba37f2fa1f664d44037724994c56f1af973d2550d7->enter($__internal_52ba4f0066f5dd40dee923ba37f2fa1f664d44037724994c56f1af973d2550d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/menu.html.twig"));

        // line 1
        echo "<!-- Sidebar Menu -->
<ul class=\"sidebar-menu\">
    <li class=\"header\">NAVEGAÇÃO</li>
    <li >
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfil");
        echo "\">
            <i class=\"fa fa-home\"></i><span>Inicial</span>
        </a>
    </li>
    ";
        // line 9
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CGPO"))) {
            // line 10
            echo "
        <li class=\"treeview\">
            <a href=\"\">
                <i class=\"fa fa-gear\"></i><span>Parametrização</span>
            </a>
            <ul class=\"treeview-menu\">
                <li class=\"active\">
                    <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento");
            echo "\">
                        <i class=\"fa fa-bank\"></i><span>Departamentos</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instrumento");
            echo "\">
                        <i class=\"fa fa-gear\"></i><span>Instrumentos</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redeprograma");
            echo "\">
                        <i class=\"fa fa-hospital-o\"></i><span>Rede Programa</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("despesa");
            echo "\">
                        <i class=\"fa fa-bar-chart\"></i><span>Despesas</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vinculo_planejamento");
            echo "\">
                        <i class=\"fa fa-chain\"></i><span>Vínculo Planejamento</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("componente");
            echo "\">
                        <i class=\"fa fa-bars\"></i><span>Componentes</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade");
            echo "\">
                        <i class=\"fa fa-tasks\"></i><span>Atividades</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipoatividade");
            echo "\">
                        <i class=\"fa fa-server\"></i><span>Tipo de Atividade</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario");
            echo "\">
                <i class=\"fa fa-users\"></i><span>Cadastro de Usuários</span>
            </a>
        </li>
        <li class=\"treeview\">
            <a href=\"\">
                <i class=\"fa fa-usd\"></i><span>Ação Orçamentária</span>
            </a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vincularacao_index");
            echo "\">
                        <i class=\"fa fa-chain\"></i><span>Vincular Ação ao Departamento</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importacao");
            echo "\">
                        <i class=\"fa fa-file-excel-o\"></i><span>Importar Planilha</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("processamento_index");
            echo "\">
                        <i class=\"fa fa-chain\"></i><span>Processamento CGPO</span>
                    </a>
                </li>

            </ul>
        </li>
    <li class=\"treeview\">
        <a href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_relatorio");
            echo "\">
            <i class=\"fa fa-file-excel-o\"></i><span>Relatórios</span>
        </a>
    </li>

    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DEPARTAMENTO")) {
            // line 94
            echo "        <li>
            <a href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_atividade");
            echo "\">
                <i class=\"fa fa-tasks\"></i><span>Atividades</span>
            </a>
        </li>
        <li class=\"treeview\">
            <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planodeuso_relatorio");
            echo "\">
                <i class=\"fa fa-file-excel-o\"></i><span>Relatórios</span>
            </a>
        </li>

    ";
        }
        // line 106
        echo "
</ul>
</section>
<!-- /.sidebar -->
</aside>
";
        
        $__internal_61e34ff2738399b33cb60da50c3ef6b1a6974568f4d25c0dbfe68aadd1fc7e66->leave($__internal_61e34ff2738399b33cb60da50c3ef6b1a6974568f4d25c0dbfe68aadd1fc7e66_prof);

        
        $__internal_52ba4f0066f5dd40dee923ba37f2fa1f664d44037724994c56f1af973d2550d7->leave($__internal_52ba4f0066f5dd40dee923ba37f2fa1f664d44037724994c56f1af973d2550d7_prof);

    }

    public function getTemplateName()
    {
        return "includes/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 106,  176 => 100,  168 => 95,  165 => 94,  156 => 88,  145 => 80,  137 => 75,  129 => 70,  116 => 60,  105 => 52,  97 => 47,  89 => 42,  81 => 37,  73 => 32,  65 => 27,  57 => 22,  49 => 17,  40 => 10,  38 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Sidebar Menu -->
<ul class=\"sidebar-menu\">
    <li class=\"header\">NAVEGAÇÃO</li>
    <li >
        <a href=\"{{ path('perfil') }}\">
            <i class=\"fa fa-home\"></i><span>Inicial</span>
        </a>
    </li>
    {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_CGPO')) %}

        <li class=\"treeview\">
            <a href=\"\">
                <i class=\"fa fa-gear\"></i><span>Parametrização</span>
            </a>
            <ul class=\"treeview-menu\">
                <li class=\"active\">
                    <a href=\"{{ path('departamento') }}\">
                        <i class=\"fa fa-bank\"></i><span>Departamentos</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('instrumento') }}\">
                        <i class=\"fa fa-gear\"></i><span>Instrumentos</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('redeprograma') }}\">
                        <i class=\"fa fa-hospital-o\"></i><span>Rede Programa</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('despesa') }}\">
                        <i class=\"fa fa-bar-chart\"></i><span>Despesas</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('vinculo_planejamento') }}\">
                        <i class=\"fa fa-chain\"></i><span>Vínculo Planejamento</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('componente') }}\">
                        <i class=\"fa fa-bars\"></i><span>Componentes</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('atividade') }}\">
                        <i class=\"fa fa-tasks\"></i><span>Atividades</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('tipoatividade') }}\">
                        <i class=\"fa fa-server\"></i><span>Tipo de Atividade</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href=\"{{ path('usuario') }}\">
                <i class=\"fa fa-users\"></i><span>Cadastro de Usuários</span>
            </a>
        </li>
        <li class=\"treeview\">
            <a href=\"\">
                <i class=\"fa fa-usd\"></i><span>Ação Orçamentária</span>
            </a>
            <ul class=\"treeview-menu\">
                <li>
                    <a href=\"{{ path('vincularacao_index') }}\">
                        <i class=\"fa fa-chain\"></i><span>Vincular Ação ao Departamento</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('importacao') }}\">
                        <i class=\"fa fa-file-excel-o\"></i><span>Importar Planilha</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('processamento_index') }}\">
                        <i class=\"fa fa-chain\"></i><span>Processamento CGPO</span>
                    </a>
                </li>

            </ul>
        </li>
    <li class=\"treeview\">
        <a href=\"{{ path('planodeuso_relatorio') }}\">
            <i class=\"fa fa-file-excel-o\"></i><span>Relatórios</span>
        </a>
    </li>

    {% elseif is_granted('ROLE_DEPARTAMENTO') %}
        <li>
            <a href=\"{{ path('planodeuso_atividade') }}\">
                <i class=\"fa fa-tasks\"></i><span>Atividades</span>
            </a>
        </li>
        <li class=\"treeview\">
            <a href=\"{{ path('planodeuso_relatorio') }}\">
                <i class=\"fa fa-file-excel-o\"></i><span>Relatórios</span>
            </a>
        </li>

    {% endif %}

</ul>
</section>
<!-- /.sidebar -->
</aside>
", "includes/menu.html.twig", "D:\\planouso\\app\\Resources\\views\\includes\\menu.html.twig");
    }
}
