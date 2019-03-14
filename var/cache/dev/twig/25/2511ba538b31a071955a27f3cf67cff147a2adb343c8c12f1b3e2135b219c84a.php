<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_032f30f5d57c0dfad68fbe7e7677331f40fe83957ecfdf3fa9f929cd40fe18b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de4d10d13b41a7e0e70c243ba40d860bf33e64327fb712138406c8c880f6d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de4d10d13b41a7e0e70c243ba40d860bf33e64327fb712138406c8c880f6d85->enter($__internal_2de4d10d13b41a7e0e70c243ba40d860bf33e64327fb712138406c8c880f6d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d96b06c325b42a143d662903fa2f5d94eadea9bb7415a56c1e6a1cb4e9911163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96b06c325b42a143d662903fa2f5d94eadea9bb7415a56c1e6a1cb4e9911163->enter($__internal_d96b06c325b42a143d662903fa2f5d94eadea9bb7415a56c1e6a1cb4e9911163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2de4d10d13b41a7e0e70c243ba40d860bf33e64327fb712138406c8c880f6d85->leave($__internal_2de4d10d13b41a7e0e70c243ba40d860bf33e64327fb712138406c8c880f6d85_prof);

        
        $__internal_d96b06c325b42a143d662903fa2f5d94eadea9bb7415a56c1e6a1cb4e9911163->leave($__internal_d96b06c325b42a143d662903fa2f5d94eadea9bb7415a56c1e6a1cb4e9911163_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b44d1f194bc810978bf8af2f5140b0d2ee0609f4349aaeed125f550519293d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44d1f194bc810978bf8af2f5140b0d2ee0609f4349aaeed125f550519293d0b->enter($__internal_b44d1f194bc810978bf8af2f5140b0d2ee0609f4349aaeed125f550519293d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9e5a9b9025afc04864d60600aebfc17a2166096dd7c69a73c8fbab094c1e9482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5a9b9025afc04864d60600aebfc17a2166096dd7c69a73c8fbab094c1e9482->enter($__internal_9e5a9b9025afc04864d60600aebfc17a2166096dd7c69a73c8fbab094c1e9482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9e5a9b9025afc04864d60600aebfc17a2166096dd7c69a73c8fbab094c1e9482->leave($__internal_9e5a9b9025afc04864d60600aebfc17a2166096dd7c69a73c8fbab094c1e9482_prof);

        
        $__internal_b44d1f194bc810978bf8af2f5140b0d2ee0609f4349aaeed125f550519293d0b->leave($__internal_b44d1f194bc810978bf8af2f5140b0d2ee0609f4349aaeed125f550519293d0b_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ba3cc2a20e16de94cb71d5f2026ed6f22779bbc61830651c6d206b40f135a5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3cc2a20e16de94cb71d5f2026ed6f22779bbc61830651c6d206b40f135a5ae->enter($__internal_ba3cc2a20e16de94cb71d5f2026ed6f22779bbc61830651c6d206b40f135a5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d003d0a3c4c264767fec6f4f0945e227217d8dd4bc12072852a8d44adfabe37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d003d0a3c4c264767fec6f4f0945e227217d8dd4bc12072852a8d44adfabe37a->enter($__internal_d003d0a3c4c264767fec6f4f0945e227217d8dd4bc12072852a8d44adfabe37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d003d0a3c4c264767fec6f4f0945e227217d8dd4bc12072852a8d44adfabe37a->leave($__internal_d003d0a3c4c264767fec6f4f0945e227217d8dd4bc12072852a8d44adfabe37a_prof);

        
        $__internal_ba3cc2a20e16de94cb71d5f2026ed6f22779bbc61830651c6d206b40f135a5ae->leave($__internal_ba3cc2a20e16de94cb71d5f2026ed6f22779bbc61830651c6d206b40f135a5ae_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_41c83c72a16a0638cd5d895076991800de94f177dabf98a1982a1a643d8f9497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c83c72a16a0638cd5d895076991800de94f177dabf98a1982a1a643d8f9497->enter($__internal_41c83c72a16a0638cd5d895076991800de94f177dabf98a1982a1a643d8f9497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_81d064b263202d1f4db3296574be1de92d556878e4b0c6596fd3c0b240b11ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d064b263202d1f4db3296574be1de92d556878e4b0c6596fd3c0b240b11ef4->enter($__internal_81d064b263202d1f4db3296574be1de92d556878e4b0c6596fd3c0b240b11ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_81d064b263202d1f4db3296574be1de92d556878e4b0c6596fd3c0b240b11ef4->leave($__internal_81d064b263202d1f4db3296574be1de92d556878e4b0c6596fd3c0b240b11ef4_prof);

        
        $__internal_41c83c72a16a0638cd5d895076991800de94f177dabf98a1982a1a643d8f9497->leave($__internal_41c83c72a16a0638cd5d895076991800de94f177dabf98a1982a1a643d8f9497_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_39dec8e23a3b91b11f932fb2041170bd8b7e09d1afd4c8b440736766e4df1963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39dec8e23a3b91b11f932fb2041170bd8b7e09d1afd4c8b440736766e4df1963->enter($__internal_39dec8e23a3b91b11f932fb2041170bd8b7e09d1afd4c8b440736766e4df1963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f4fcba0ba052be950cae834ab3f32388857b19645915d0df734457f02b046ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fcba0ba052be950cae834ab3f32388857b19645915d0df734457f02b046ef1->enter($__internal_f4fcba0ba052be950cae834ab3f32388857b19645915d0df734457f02b046ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_f4fcba0ba052be950cae834ab3f32388857b19645915d0df734457f02b046ef1->leave($__internal_f4fcba0ba052be950cae834ab3f32388857b19645915d0df734457f02b046ef1_prof);

        
        $__internal_39dec8e23a3b91b11f932fb2041170bd8b7e09d1afd4c8b440736766e4df1963->leave($__internal_39dec8e23a3b91b11f932fb2041170bd8b7e09d1afd4c8b440736766e4df1963_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3102554a4a7e18b8b9fde4f7f4b16cab69d86d79adf2b58c4a3217dbcb8c0ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3102554a4a7e18b8b9fde4f7f4b16cab69d86d79adf2b58c4a3217dbcb8c0ed1->enter($__internal_3102554a4a7e18b8b9fde4f7f4b16cab69d86d79adf2b58c4a3217dbcb8c0ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3c4f00946d3da870c4b125ee0c465cad450b66cea139f54fcda8103f39b30a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4f00946d3da870c4b125ee0c465cad450b66cea139f54fcda8103f39b30a9f->enter($__internal_3c4f00946d3da870c4b125ee0c465cad450b66cea139f54fcda8103f39b30a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3c4f00946d3da870c4b125ee0c465cad450b66cea139f54fcda8103f39b30a9f->leave($__internal_3c4f00946d3da870c4b125ee0c465cad450b66cea139f54fcda8103f39b30a9f_prof);

        
        $__internal_3102554a4a7e18b8b9fde4f7f4b16cab69d86d79adf2b58c4a3217dbcb8c0ed1->leave($__internal_3102554a4a7e18b8b9fde4f7f4b16cab69d86d79adf2b58c4a3217dbcb8c0ed1_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c7fbde6d4fd92744be13a366d95a5eb9498def0b69d2dd02775a5e54d57959c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fbde6d4fd92744be13a366d95a5eb9498def0b69d2dd02775a5e54d57959c3->enter($__internal_c7fbde6d4fd92744be13a366d95a5eb9498def0b69d2dd02775a5e54d57959c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_53e63c2fa9278bc70c8e92d3bff8283e42c27ce67d05ea14243babeaa93aafd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e63c2fa9278bc70c8e92d3bff8283e42c27ce67d05ea14243babeaa93aafd0->enter($__internal_53e63c2fa9278bc70c8e92d3bff8283e42c27ce67d05ea14243babeaa93aafd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_53e63c2fa9278bc70c8e92d3bff8283e42c27ce67d05ea14243babeaa93aafd0->leave($__internal_53e63c2fa9278bc70c8e92d3bff8283e42c27ce67d05ea14243babeaa93aafd0_prof);

        
        $__internal_c7fbde6d4fd92744be13a366d95a5eb9498def0b69d2dd02775a5e54d57959c3->leave($__internal_c7fbde6d4fd92744be13a366d95a5eb9498def0b69d2dd02775a5e54d57959c3_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bfdcce2d09f66b2f670373c66d3b903332e90b52f82fb8a8968c5a0b92021a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdcce2d09f66b2f670373c66d3b903332e90b52f82fb8a8968c5a0b92021a33->enter($__internal_bfdcce2d09f66b2f670373c66d3b903332e90b52f82fb8a8968c5a0b92021a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2a2855c7ed974f03e2ca9522828c18f4c70d5e118c83d2997b76b42535b6f086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2855c7ed974f03e2ca9522828c18f4c70d5e118c83d2997b76b42535b6f086->enter($__internal_2a2855c7ed974f03e2ca9522828c18f4c70d5e118c83d2997b76b42535b6f086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2a2855c7ed974f03e2ca9522828c18f4c70d5e118c83d2997b76b42535b6f086->leave($__internal_2a2855c7ed974f03e2ca9522828c18f4c70d5e118c83d2997b76b42535b6f086_prof);

        
        $__internal_bfdcce2d09f66b2f670373c66d3b903332e90b52f82fb8a8968c5a0b92021a33->leave($__internal_bfdcce2d09f66b2f670373c66d3b903332e90b52f82fb8a8968c5a0b92021a33_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_665978986c84349d04b4b1a92df9c7f920e5539696d6713fdccf8b14ff97c039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665978986c84349d04b4b1a92df9c7f920e5539696d6713fdccf8b14ff97c039->enter($__internal_665978986c84349d04b4b1a92df9c7f920e5539696d6713fdccf8b14ff97c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c7009e825adff41a975e7113bf95e2371bff20abafcb9110372d564feb8ff02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7009e825adff41a975e7113bf95e2371bff20abafcb9110372d564feb8ff02d->enter($__internal_c7009e825adff41a975e7113bf95e2371bff20abafcb9110372d564feb8ff02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c7009e825adff41a975e7113bf95e2371bff20abafcb9110372d564feb8ff02d->leave($__internal_c7009e825adff41a975e7113bf95e2371bff20abafcb9110372d564feb8ff02d_prof);

        
        $__internal_665978986c84349d04b4b1a92df9c7f920e5539696d6713fdccf8b14ff97c039->leave($__internal_665978986c84349d04b4b1a92df9c7f920e5539696d6713fdccf8b14ff97c039_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9eef4f6fe6e54464601f0f5b9fcd026d343acfda9570652e9698997ba7879d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eef4f6fe6e54464601f0f5b9fcd026d343acfda9570652e9698997ba7879d59->enter($__internal_9eef4f6fe6e54464601f0f5b9fcd026d343acfda9570652e9698997ba7879d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f83d9bb53c0cc90a236ec280b971f434280fbcac90721e7ebaec9b2378b51266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83d9bb53c0cc90a236ec280b971f434280fbcac90721e7ebaec9b2378b51266->enter($__internal_f83d9bb53c0cc90a236ec280b971f434280fbcac90721e7ebaec9b2378b51266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_f83d9bb53c0cc90a236ec280b971f434280fbcac90721e7ebaec9b2378b51266->leave($__internal_f83d9bb53c0cc90a236ec280b971f434280fbcac90721e7ebaec9b2378b51266_prof);

        
        $__internal_9eef4f6fe6e54464601f0f5b9fcd026d343acfda9570652e9698997ba7879d59->leave($__internal_9eef4f6fe6e54464601f0f5b9fcd026d343acfda9570652e9698997ba7879d59_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bb47b4b4e06bed2dae31eb0aad6e99a909b398a7bf5b2d0afbeaa9a9f0afb610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb47b4b4e06bed2dae31eb0aad6e99a909b398a7bf5b2d0afbeaa9a9f0afb610->enter($__internal_bb47b4b4e06bed2dae31eb0aad6e99a909b398a7bf5b2d0afbeaa9a9f0afb610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_72cfe1e5a9e98f448195bd18946775e9ee115598e16642d855e7eca7d18e97a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cfe1e5a9e98f448195bd18946775e9ee115598e16642d855e7eca7d18e97a4->enter($__internal_72cfe1e5a9e98f448195bd18946775e9ee115598e16642d855e7eca7d18e97a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_72cfe1e5a9e98f448195bd18946775e9ee115598e16642d855e7eca7d18e97a4->leave($__internal_72cfe1e5a9e98f448195bd18946775e9ee115598e16642d855e7eca7d18e97a4_prof);

        
        $__internal_bb47b4b4e06bed2dae31eb0aad6e99a909b398a7bf5b2d0afbeaa9a9f0afb610->leave($__internal_bb47b4b4e06bed2dae31eb0aad6e99a909b398a7bf5b2d0afbeaa9a9f0afb610_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ed1e17ce79b848986e20e9ed8ef29743ef176171f649dd95bce9e5a25332439a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1e17ce79b848986e20e9ed8ef29743ef176171f649dd95bce9e5a25332439a->enter($__internal_ed1e17ce79b848986e20e9ed8ef29743ef176171f649dd95bce9e5a25332439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_98459965a5ed066d48de4d914ea801dd70c5e3cbb45574cd249baf3b1bbeb8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98459965a5ed066d48de4d914ea801dd70c5e3cbb45574cd249baf3b1bbeb8f4->enter($__internal_98459965a5ed066d48de4d914ea801dd70c5e3cbb45574cd249baf3b1bbeb8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_98459965a5ed066d48de4d914ea801dd70c5e3cbb45574cd249baf3b1bbeb8f4->leave($__internal_98459965a5ed066d48de4d914ea801dd70c5e3cbb45574cd249baf3b1bbeb8f4_prof);

        
        $__internal_ed1e17ce79b848986e20e9ed8ef29743ef176171f649dd95bce9e5a25332439a->leave($__internal_ed1e17ce79b848986e20e9ed8ef29743ef176171f649dd95bce9e5a25332439a_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b6df5cd7703f0622be52438f3492cd371695f34f00e5957d48d00789d8478ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6df5cd7703f0622be52438f3492cd371695f34f00e5957d48d00789d8478ef2->enter($__internal_b6df5cd7703f0622be52438f3492cd371695f34f00e5957d48d00789d8478ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8795184569c75d650e6a12ddcb2912f72559f5086bac85469ec9cddec7a19f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8795184569c75d650e6a12ddcb2912f72559f5086bac85469ec9cddec7a19f8b->enter($__internal_8795184569c75d650e6a12ddcb2912f72559f5086bac85469ec9cddec7a19f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8795184569c75d650e6a12ddcb2912f72559f5086bac85469ec9cddec7a19f8b->leave($__internal_8795184569c75d650e6a12ddcb2912f72559f5086bac85469ec9cddec7a19f8b_prof);

        
        $__internal_b6df5cd7703f0622be52438f3492cd371695f34f00e5957d48d00789d8478ef2->leave($__internal_b6df5cd7703f0622be52438f3492cd371695f34f00e5957d48d00789d8478ef2_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_1f6aceefd3ca3d6d9f34f4059ea5cbc35f25bbd635c1a7c059388c3afe8d3884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6aceefd3ca3d6d9f34f4059ea5cbc35f25bbd635c1a7c059388c3afe8d3884->enter($__internal_1f6aceefd3ca3d6d9f34f4059ea5cbc35f25bbd635c1a7c059388c3afe8d3884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d2bb218e57ffb48ba907f7c0d117cfbba005fae5efa7a6dfcf8b76386b0297a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bb218e57ffb48ba907f7c0d117cfbba005fae5efa7a6dfcf8b76386b0297a8->enter($__internal_d2bb218e57ffb48ba907f7c0d117cfbba005fae5efa7a6dfcf8b76386b0297a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d2bb218e57ffb48ba907f7c0d117cfbba005fae5efa7a6dfcf8b76386b0297a8->leave($__internal_d2bb218e57ffb48ba907f7c0d117cfbba005fae5efa7a6dfcf8b76386b0297a8_prof);

        
        $__internal_1f6aceefd3ca3d6d9f34f4059ea5cbc35f25bbd635c1a7c059388c3afe8d3884->leave($__internal_1f6aceefd3ca3d6d9f34f4059ea5cbc35f25bbd635c1a7c059388c3afe8d3884_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7e9eb35f2fb58819dbc93f92b8ed07347d97320bacb76e1158a910506fb77d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9eb35f2fb58819dbc93f92b8ed07347d97320bacb76e1158a910506fb77d16->enter($__internal_7e9eb35f2fb58819dbc93f92b8ed07347d97320bacb76e1158a910506fb77d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5b0595f1bff41269ee22d6c333fc98f8ad992c3763cfaa0eb0100af8bb2b648a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0595f1bff41269ee22d6c333fc98f8ad992c3763cfaa0eb0100af8bb2b648a->enter($__internal_5b0595f1bff41269ee22d6c333fc98f8ad992c3763cfaa0eb0100af8bb2b648a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b0595f1bff41269ee22d6c333fc98f8ad992c3763cfaa0eb0100af8bb2b648a->leave($__internal_5b0595f1bff41269ee22d6c333fc98f8ad992c3763cfaa0eb0100af8bb2b648a_prof);

        
        $__internal_7e9eb35f2fb58819dbc93f92b8ed07347d97320bacb76e1158a910506fb77d16->leave($__internal_7e9eb35f2fb58819dbc93f92b8ed07347d97320bacb76e1158a910506fb77d16_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5128647c72bddb074e0bf337210227658ed142a37138c2687ce61f6591eee20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5128647c72bddb074e0bf337210227658ed142a37138c2687ce61f6591eee20b->enter($__internal_5128647c72bddb074e0bf337210227658ed142a37138c2687ce61f6591eee20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bdb8e9533649223d1005ad8b24a1d76b70339e5f9e8f1636f0a337e78d51b076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb8e9533649223d1005ad8b24a1d76b70339e5f9e8f1636f0a337e78d51b076->enter($__internal_bdb8e9533649223d1005ad8b24a1d76b70339e5f9e8f1636f0a337e78d51b076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bdb8e9533649223d1005ad8b24a1d76b70339e5f9e8f1636f0a337e78d51b076->leave($__internal_bdb8e9533649223d1005ad8b24a1d76b70339e5f9e8f1636f0a337e78d51b076_prof);

        
        $__internal_5128647c72bddb074e0bf337210227658ed142a37138c2687ce61f6591eee20b->leave($__internal_5128647c72bddb074e0bf337210227658ed142a37138c2687ce61f6591eee20b_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_54c4fa58552db5ae59638313ef3620bd667f69ab6b88cf4e12e656318fec8ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c4fa58552db5ae59638313ef3620bd667f69ab6b88cf4e12e656318fec8ad5->enter($__internal_54c4fa58552db5ae59638313ef3620bd667f69ab6b88cf4e12e656318fec8ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_208e74e5d9ba78b99395525e8fb717ae5ced37e3c401ba3e0440b57b39315f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208e74e5d9ba78b99395525e8fb717ae5ced37e3c401ba3e0440b57b39315f4a->enter($__internal_208e74e5d9ba78b99395525e8fb717ae5ced37e3c401ba3e0440b57b39315f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_208e74e5d9ba78b99395525e8fb717ae5ced37e3c401ba3e0440b57b39315f4a->leave($__internal_208e74e5d9ba78b99395525e8fb717ae5ced37e3c401ba3e0440b57b39315f4a_prof);

        
        $__internal_54c4fa58552db5ae59638313ef3620bd667f69ab6b88cf4e12e656318fec8ad5->leave($__internal_54c4fa58552db5ae59638313ef3620bd667f69ab6b88cf4e12e656318fec8ad5_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d999509e283e36672213b2e40c9c1ba0bc89dc58988c7e5dfba1059e31eb7afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d999509e283e36672213b2e40c9c1ba0bc89dc58988c7e5dfba1059e31eb7afb->enter($__internal_d999509e283e36672213b2e40c9c1ba0bc89dc58988c7e5dfba1059e31eb7afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1094710fe6d4fbeb1f4906a271fc12689d6b277f4d376ce7e16dc295617081f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1094710fe6d4fbeb1f4906a271fc12689d6b277f4d376ce7e16dc295617081f2->enter($__internal_1094710fe6d4fbeb1f4906a271fc12689d6b277f4d376ce7e16dc295617081f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_1094710fe6d4fbeb1f4906a271fc12689d6b277f4d376ce7e16dc295617081f2->leave($__internal_1094710fe6d4fbeb1f4906a271fc12689d6b277f4d376ce7e16dc295617081f2_prof);

        
        $__internal_d999509e283e36672213b2e40c9c1ba0bc89dc58988c7e5dfba1059e31eb7afb->leave($__internal_d999509e283e36672213b2e40c9c1ba0bc89dc58988c7e5dfba1059e31eb7afb_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b719a4a2c77fe655f4a1739bd25dec3318ca51b9d9ddd1d5046d16ab75e28cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b719a4a2c77fe655f4a1739bd25dec3318ca51b9d9ddd1d5046d16ab75e28cdb->enter($__internal_b719a4a2c77fe655f4a1739bd25dec3318ca51b9d9ddd1d5046d16ab75e28cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0a1e2f38b43382e83eeee9bdf8467dabde51c9eaba1ac88d7342ecbfe41f5b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1e2f38b43382e83eeee9bdf8467dabde51c9eaba1ac88d7342ecbfe41f5b60->enter($__internal_0a1e2f38b43382e83eeee9bdf8467dabde51c9eaba1ac88d7342ecbfe41f5b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0a1e2f38b43382e83eeee9bdf8467dabde51c9eaba1ac88d7342ecbfe41f5b60->leave($__internal_0a1e2f38b43382e83eeee9bdf8467dabde51c9eaba1ac88d7342ecbfe41f5b60_prof);

        
        $__internal_b719a4a2c77fe655f4a1739bd25dec3318ca51b9d9ddd1d5046d16ab75e28cdb->leave($__internal_b719a4a2c77fe655f4a1739bd25dec3318ca51b9d9ddd1d5046d16ab75e28cdb_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
