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
        $__internal_d1d713333b0c6c72264bdbe772a43d93a28ad7359ac769870012fe3ea0d7887f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d713333b0c6c72264bdbe772a43d93a28ad7359ac769870012fe3ea0d7887f->enter($__internal_d1d713333b0c6c72264bdbe772a43d93a28ad7359ac769870012fe3ea0d7887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_36eec746ed1ccfd812f526aacb409c961cd3fb3ef1f03d18cbe88855a89093d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eec746ed1ccfd812f526aacb409c961cd3fb3ef1f03d18cbe88855a89093d0->enter($__internal_36eec746ed1ccfd812f526aacb409c961cd3fb3ef1f03d18cbe88855a89093d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_d1d713333b0c6c72264bdbe772a43d93a28ad7359ac769870012fe3ea0d7887f->leave($__internal_d1d713333b0c6c72264bdbe772a43d93a28ad7359ac769870012fe3ea0d7887f_prof);

        
        $__internal_36eec746ed1ccfd812f526aacb409c961cd3fb3ef1f03d18cbe88855a89093d0->leave($__internal_36eec746ed1ccfd812f526aacb409c961cd3fb3ef1f03d18cbe88855a89093d0_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2ef6b1a47019388f7f803f46743efccc4faf96ec36ea35fa319903ac0fa5f4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef6b1a47019388f7f803f46743efccc4faf96ec36ea35fa319903ac0fa5f4c4->enter($__internal_2ef6b1a47019388f7f803f46743efccc4faf96ec36ea35fa319903ac0fa5f4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_857e38f6f8a79a92dbe12e76e8dd5508164bcb3d57488deec0db94d27ceb4232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857e38f6f8a79a92dbe12e76e8dd5508164bcb3d57488deec0db94d27ceb4232->enter($__internal_857e38f6f8a79a92dbe12e76e8dd5508164bcb3d57488deec0db94d27ceb4232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_857e38f6f8a79a92dbe12e76e8dd5508164bcb3d57488deec0db94d27ceb4232->leave($__internal_857e38f6f8a79a92dbe12e76e8dd5508164bcb3d57488deec0db94d27ceb4232_prof);

        
        $__internal_2ef6b1a47019388f7f803f46743efccc4faf96ec36ea35fa319903ac0fa5f4c4->leave($__internal_2ef6b1a47019388f7f803f46743efccc4faf96ec36ea35fa319903ac0fa5f4c4_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_983fc695233941d41b480f6f3ca5a6ed51ab0b6a62312a396cbe0bdcbef5151a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983fc695233941d41b480f6f3ca5a6ed51ab0b6a62312a396cbe0bdcbef5151a->enter($__internal_983fc695233941d41b480f6f3ca5a6ed51ab0b6a62312a396cbe0bdcbef5151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c491827234576c744e4df8277da1d6f5f2f8bfc838554fd287f14c937426722f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c491827234576c744e4df8277da1d6f5f2f8bfc838554fd287f14c937426722f->enter($__internal_c491827234576c744e4df8277da1d6f5f2f8bfc838554fd287f14c937426722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c491827234576c744e4df8277da1d6f5f2f8bfc838554fd287f14c937426722f->leave($__internal_c491827234576c744e4df8277da1d6f5f2f8bfc838554fd287f14c937426722f_prof);

        
        $__internal_983fc695233941d41b480f6f3ca5a6ed51ab0b6a62312a396cbe0bdcbef5151a->leave($__internal_983fc695233941d41b480f6f3ca5a6ed51ab0b6a62312a396cbe0bdcbef5151a_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_73e0d2a509be4c583d8f455f376f102e10daed5e9fb28eaa809f4026a7580847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e0d2a509be4c583d8f455f376f102e10daed5e9fb28eaa809f4026a7580847->enter($__internal_73e0d2a509be4c583d8f455f376f102e10daed5e9fb28eaa809f4026a7580847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ac01ad44141cbff041518ff45fc43965907564dfe81874a770237fd83e032450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac01ad44141cbff041518ff45fc43965907564dfe81874a770237fd83e032450->enter($__internal_ac01ad44141cbff041518ff45fc43965907564dfe81874a770237fd83e032450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_ac01ad44141cbff041518ff45fc43965907564dfe81874a770237fd83e032450->leave($__internal_ac01ad44141cbff041518ff45fc43965907564dfe81874a770237fd83e032450_prof);

        
        $__internal_73e0d2a509be4c583d8f455f376f102e10daed5e9fb28eaa809f4026a7580847->leave($__internal_73e0d2a509be4c583d8f455f376f102e10daed5e9fb28eaa809f4026a7580847_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_22b7e7313d10cd3126133503f1cc2eda96524031c61bacb9926baa132faced32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b7e7313d10cd3126133503f1cc2eda96524031c61bacb9926baa132faced32->enter($__internal_22b7e7313d10cd3126133503f1cc2eda96524031c61bacb9926baa132faced32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_acc81d5861c8f42c67a964e68da51198cf8d2a51efe385b57284af79489c0144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc81d5861c8f42c67a964e68da51198cf8d2a51efe385b57284af79489c0144->enter($__internal_acc81d5861c8f42c67a964e68da51198cf8d2a51efe385b57284af79489c0144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_acc81d5861c8f42c67a964e68da51198cf8d2a51efe385b57284af79489c0144->leave($__internal_acc81d5861c8f42c67a964e68da51198cf8d2a51efe385b57284af79489c0144_prof);

        
        $__internal_22b7e7313d10cd3126133503f1cc2eda96524031c61bacb9926baa132faced32->leave($__internal_22b7e7313d10cd3126133503f1cc2eda96524031c61bacb9926baa132faced32_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_54a02a6a12f6cb6544f363ec2c8f07c7a1ed7a203aa71657e8d4cd8e13ebd58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a02a6a12f6cb6544f363ec2c8f07c7a1ed7a203aa71657e8d4cd8e13ebd58d->enter($__internal_54a02a6a12f6cb6544f363ec2c8f07c7a1ed7a203aa71657e8d4cd8e13ebd58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d8ffff99d47d32d94e70c01f3e3b56d734e31096290ff86903fc9370292143f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ffff99d47d32d94e70c01f3e3b56d734e31096290ff86903fc9370292143f4->enter($__internal_d8ffff99d47d32d94e70c01f3e3b56d734e31096290ff86903fc9370292143f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d8ffff99d47d32d94e70c01f3e3b56d734e31096290ff86903fc9370292143f4->leave($__internal_d8ffff99d47d32d94e70c01f3e3b56d734e31096290ff86903fc9370292143f4_prof);

        
        $__internal_54a02a6a12f6cb6544f363ec2c8f07c7a1ed7a203aa71657e8d4cd8e13ebd58d->leave($__internal_54a02a6a12f6cb6544f363ec2c8f07c7a1ed7a203aa71657e8d4cd8e13ebd58d_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_acdf15229768b33cbdbe9963afa2903f231afb5b31162c410f845a3606a6845f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdf15229768b33cbdbe9963afa2903f231afb5b31162c410f845a3606a6845f->enter($__internal_acdf15229768b33cbdbe9963afa2903f231afb5b31162c410f845a3606a6845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_63d68c7d6f3b23b425075a97f2fa12a002d8ac487b87e63ada421b8d7c419320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d68c7d6f3b23b425075a97f2fa12a002d8ac487b87e63ada421b8d7c419320->enter($__internal_63d68c7d6f3b23b425075a97f2fa12a002d8ac487b87e63ada421b8d7c419320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_63d68c7d6f3b23b425075a97f2fa12a002d8ac487b87e63ada421b8d7c419320->leave($__internal_63d68c7d6f3b23b425075a97f2fa12a002d8ac487b87e63ada421b8d7c419320_prof);

        
        $__internal_acdf15229768b33cbdbe9963afa2903f231afb5b31162c410f845a3606a6845f->leave($__internal_acdf15229768b33cbdbe9963afa2903f231afb5b31162c410f845a3606a6845f_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_38e3ba61ecc1aeb8b104973d3b36efe7748f77bf38a6cd1c0f657bf6e623db2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e3ba61ecc1aeb8b104973d3b36efe7748f77bf38a6cd1c0f657bf6e623db2c->enter($__internal_38e3ba61ecc1aeb8b104973d3b36efe7748f77bf38a6cd1c0f657bf6e623db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e19dd7054ec78e69192cb26c2088f46625c481fb8b546dc64413ff7c166ad977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19dd7054ec78e69192cb26c2088f46625c481fb8b546dc64413ff7c166ad977->enter($__internal_e19dd7054ec78e69192cb26c2088f46625c481fb8b546dc64413ff7c166ad977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e19dd7054ec78e69192cb26c2088f46625c481fb8b546dc64413ff7c166ad977->leave($__internal_e19dd7054ec78e69192cb26c2088f46625c481fb8b546dc64413ff7c166ad977_prof);

        
        $__internal_38e3ba61ecc1aeb8b104973d3b36efe7748f77bf38a6cd1c0f657bf6e623db2c->leave($__internal_38e3ba61ecc1aeb8b104973d3b36efe7748f77bf38a6cd1c0f657bf6e623db2c_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9abad372ff831cba30b18e393eae5e050665babb0d9679a5d51e0eb2cb7a4f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abad372ff831cba30b18e393eae5e050665babb0d9679a5d51e0eb2cb7a4f42->enter($__internal_9abad372ff831cba30b18e393eae5e050665babb0d9679a5d51e0eb2cb7a4f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3f2c832fbfc1aa88008b7dfad54ea4907d1a67c7be343e0c163005df660c4f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2c832fbfc1aa88008b7dfad54ea4907d1a67c7be343e0c163005df660c4f3b->enter($__internal_3f2c832fbfc1aa88008b7dfad54ea4907d1a67c7be343e0c163005df660c4f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3f2c832fbfc1aa88008b7dfad54ea4907d1a67c7be343e0c163005df660c4f3b->leave($__internal_3f2c832fbfc1aa88008b7dfad54ea4907d1a67c7be343e0c163005df660c4f3b_prof);

        
        $__internal_9abad372ff831cba30b18e393eae5e050665babb0d9679a5d51e0eb2cb7a4f42->leave($__internal_9abad372ff831cba30b18e393eae5e050665babb0d9679a5d51e0eb2cb7a4f42_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1b0b9e60dc0846f1bf4ef49d3591fbffcbd8b2b36bde3a9007608623e683e4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0b9e60dc0846f1bf4ef49d3591fbffcbd8b2b36bde3a9007608623e683e4c3->enter($__internal_1b0b9e60dc0846f1bf4ef49d3591fbffcbd8b2b36bde3a9007608623e683e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b4d146d4debc04bf056e361fdb0b3fef3943c0d68fea461f1a3163e5778febd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d146d4debc04bf056e361fdb0b3fef3943c0d68fea461f1a3163e5778febd9->enter($__internal_b4d146d4debc04bf056e361fdb0b3fef3943c0d68fea461f1a3163e5778febd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_b4d146d4debc04bf056e361fdb0b3fef3943c0d68fea461f1a3163e5778febd9->leave($__internal_b4d146d4debc04bf056e361fdb0b3fef3943c0d68fea461f1a3163e5778febd9_prof);

        
        $__internal_1b0b9e60dc0846f1bf4ef49d3591fbffcbd8b2b36bde3a9007608623e683e4c3->leave($__internal_1b0b9e60dc0846f1bf4ef49d3591fbffcbd8b2b36bde3a9007608623e683e4c3_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8263e00374be92975ac10fb1d6d9a306ee519b6f04364405f6f4ffb8a9054908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8263e00374be92975ac10fb1d6d9a306ee519b6f04364405f6f4ffb8a9054908->enter($__internal_8263e00374be92975ac10fb1d6d9a306ee519b6f04364405f6f4ffb8a9054908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_12927ba7ec059d2308c434c6a2a0d54df4551eeee4a63bc04f63fec0ab482864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12927ba7ec059d2308c434c6a2a0d54df4551eeee4a63bc04f63fec0ab482864->enter($__internal_12927ba7ec059d2308c434c6a2a0d54df4551eeee4a63bc04f63fec0ab482864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_12927ba7ec059d2308c434c6a2a0d54df4551eeee4a63bc04f63fec0ab482864->leave($__internal_12927ba7ec059d2308c434c6a2a0d54df4551eeee4a63bc04f63fec0ab482864_prof);

        
        $__internal_8263e00374be92975ac10fb1d6d9a306ee519b6f04364405f6f4ffb8a9054908->leave($__internal_8263e00374be92975ac10fb1d6d9a306ee519b6f04364405f6f4ffb8a9054908_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5c92faf48f64d7aab3f19fa6436a0cbd8cf452659f16c125b28b11e30004cf68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c92faf48f64d7aab3f19fa6436a0cbd8cf452659f16c125b28b11e30004cf68->enter($__internal_5c92faf48f64d7aab3f19fa6436a0cbd8cf452659f16c125b28b11e30004cf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4c1525a3e8c67860ad000cad253504556919ce5a812d1aaff9b0cadc5428a916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1525a3e8c67860ad000cad253504556919ce5a812d1aaff9b0cadc5428a916->enter($__internal_4c1525a3e8c67860ad000cad253504556919ce5a812d1aaff9b0cadc5428a916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_4c1525a3e8c67860ad000cad253504556919ce5a812d1aaff9b0cadc5428a916->leave($__internal_4c1525a3e8c67860ad000cad253504556919ce5a812d1aaff9b0cadc5428a916_prof);

        
        $__internal_5c92faf48f64d7aab3f19fa6436a0cbd8cf452659f16c125b28b11e30004cf68->leave($__internal_5c92faf48f64d7aab3f19fa6436a0cbd8cf452659f16c125b28b11e30004cf68_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f66a6e9b6da3441d9f5a92703476e7d056f84f2dff1fd059725d2728ff3ac361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66a6e9b6da3441d9f5a92703476e7d056f84f2dff1fd059725d2728ff3ac361->enter($__internal_f66a6e9b6da3441d9f5a92703476e7d056f84f2dff1fd059725d2728ff3ac361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_99dbd99ff2e102b0199248db487c0fa9e6db51f9a67709fdb1014fdfc0a716a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dbd99ff2e102b0199248db487c0fa9e6db51f9a67709fdb1014fdfc0a716a3->enter($__internal_99dbd99ff2e102b0199248db487c0fa9e6db51f9a67709fdb1014fdfc0a716a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_99dbd99ff2e102b0199248db487c0fa9e6db51f9a67709fdb1014fdfc0a716a3->leave($__internal_99dbd99ff2e102b0199248db487c0fa9e6db51f9a67709fdb1014fdfc0a716a3_prof);

        
        $__internal_f66a6e9b6da3441d9f5a92703476e7d056f84f2dff1fd059725d2728ff3ac361->leave($__internal_f66a6e9b6da3441d9f5a92703476e7d056f84f2dff1fd059725d2728ff3ac361_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ad58b40df19c3d849ffefee23afdbbb4d9242b9dd4016aa7e6eae44954f8e23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad58b40df19c3d849ffefee23afdbbb4d9242b9dd4016aa7e6eae44954f8e23d->enter($__internal_ad58b40df19c3d849ffefee23afdbbb4d9242b9dd4016aa7e6eae44954f8e23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1368007aadacbe93c4ddb0f7dbcab5fe09f37d6052d4e0504a2e7df922b0200d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1368007aadacbe93c4ddb0f7dbcab5fe09f37d6052d4e0504a2e7df922b0200d->enter($__internal_1368007aadacbe93c4ddb0f7dbcab5fe09f37d6052d4e0504a2e7df922b0200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1368007aadacbe93c4ddb0f7dbcab5fe09f37d6052d4e0504a2e7df922b0200d->leave($__internal_1368007aadacbe93c4ddb0f7dbcab5fe09f37d6052d4e0504a2e7df922b0200d_prof);

        
        $__internal_ad58b40df19c3d849ffefee23afdbbb4d9242b9dd4016aa7e6eae44954f8e23d->leave($__internal_ad58b40df19c3d849ffefee23afdbbb4d9242b9dd4016aa7e6eae44954f8e23d_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_59d34691216cb1c72e8c510f8f1b3014fcf25d01e4519a9dd4178c47856907a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d34691216cb1c72e8c510f8f1b3014fcf25d01e4519a9dd4178c47856907a9->enter($__internal_59d34691216cb1c72e8c510f8f1b3014fcf25d01e4519a9dd4178c47856907a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_129ad81350e2979e232442a48925fe7030df9724607ea6ff7b617e24ecfeb2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129ad81350e2979e232442a48925fe7030df9724607ea6ff7b617e24ecfeb2a5->enter($__internal_129ad81350e2979e232442a48925fe7030df9724607ea6ff7b617e24ecfeb2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_129ad81350e2979e232442a48925fe7030df9724607ea6ff7b617e24ecfeb2a5->leave($__internal_129ad81350e2979e232442a48925fe7030df9724607ea6ff7b617e24ecfeb2a5_prof);

        
        $__internal_59d34691216cb1c72e8c510f8f1b3014fcf25d01e4519a9dd4178c47856907a9->leave($__internal_59d34691216cb1c72e8c510f8f1b3014fcf25d01e4519a9dd4178c47856907a9_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e426e16cf4c783736411c95d6a78cb80dd1c9bd633467e5b5c9c983a0c18cfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e426e16cf4c783736411c95d6a78cb80dd1c9bd633467e5b5c9c983a0c18cfde->enter($__internal_e426e16cf4c783736411c95d6a78cb80dd1c9bd633467e5b5c9c983a0c18cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1f60f3cca3edbb36364746e8658568b611e17f03e1370f1de3a5f15bfe339a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f60f3cca3edbb36364746e8658568b611e17f03e1370f1de3a5f15bfe339a70->enter($__internal_1f60f3cca3edbb36364746e8658568b611e17f03e1370f1de3a5f15bfe339a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f60f3cca3edbb36364746e8658568b611e17f03e1370f1de3a5f15bfe339a70->leave($__internal_1f60f3cca3edbb36364746e8658568b611e17f03e1370f1de3a5f15bfe339a70_prof);

        
        $__internal_e426e16cf4c783736411c95d6a78cb80dd1c9bd633467e5b5c9c983a0c18cfde->leave($__internal_e426e16cf4c783736411c95d6a78cb80dd1c9bd633467e5b5c9c983a0c18cfde_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8425c4c266add2b1ad217a61d1a57b117886a99b2be54c2aa19ed15595dc9eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8425c4c266add2b1ad217a61d1a57b117886a99b2be54c2aa19ed15595dc9eee->enter($__internal_8425c4c266add2b1ad217a61d1a57b117886a99b2be54c2aa19ed15595dc9eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a422213cb554fd74cd90499625d12b6665f962e89daff1fd81a0291d9c5295c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a422213cb554fd74cd90499625d12b6665f962e89daff1fd81a0291d9c5295c6->enter($__internal_a422213cb554fd74cd90499625d12b6665f962e89daff1fd81a0291d9c5295c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_a422213cb554fd74cd90499625d12b6665f962e89daff1fd81a0291d9c5295c6->leave($__internal_a422213cb554fd74cd90499625d12b6665f962e89daff1fd81a0291d9c5295c6_prof);

        
        $__internal_8425c4c266add2b1ad217a61d1a57b117886a99b2be54c2aa19ed15595dc9eee->leave($__internal_8425c4c266add2b1ad217a61d1a57b117886a99b2be54c2aa19ed15595dc9eee_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_70851499a57fbfe8c249c0dfd55d9063bfa3ab0f97129f7f83337e43cefe683c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70851499a57fbfe8c249c0dfd55d9063bfa3ab0f97129f7f83337e43cefe683c->enter($__internal_70851499a57fbfe8c249c0dfd55d9063bfa3ab0f97129f7f83337e43cefe683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b4905cfdefdec9b06f14e41aabb21972ae2cbb6b9fb6b3b7a1fce112dc907816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4905cfdefdec9b06f14e41aabb21972ae2cbb6b9fb6b3b7a1fce112dc907816->enter($__internal_b4905cfdefdec9b06f14e41aabb21972ae2cbb6b9fb6b3b7a1fce112dc907816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_b4905cfdefdec9b06f14e41aabb21972ae2cbb6b9fb6b3b7a1fce112dc907816->leave($__internal_b4905cfdefdec9b06f14e41aabb21972ae2cbb6b9fb6b3b7a1fce112dc907816_prof);

        
        $__internal_70851499a57fbfe8c249c0dfd55d9063bfa3ab0f97129f7f83337e43cefe683c->leave($__internal_70851499a57fbfe8c249c0dfd55d9063bfa3ab0f97129f7f83337e43cefe683c_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5126f8ffbf534c4e5eaf2bdbe57216e093c6e86e04d1e2da87060b1226ad1023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5126f8ffbf534c4e5eaf2bdbe57216e093c6e86e04d1e2da87060b1226ad1023->enter($__internal_5126f8ffbf534c4e5eaf2bdbe57216e093c6e86e04d1e2da87060b1226ad1023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0f427b14280875276f4cdf24aef76a5aea6b5c900190fbfe005d006da1a8e02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f427b14280875276f4cdf24aef76a5aea6b5c900190fbfe005d006da1a8e02b->enter($__internal_0f427b14280875276f4cdf24aef76a5aea6b5c900190fbfe005d006da1a8e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_0f427b14280875276f4cdf24aef76a5aea6b5c900190fbfe005d006da1a8e02b->leave($__internal_0f427b14280875276f4cdf24aef76a5aea6b5c900190fbfe005d006da1a8e02b_prof);

        
        $__internal_5126f8ffbf534c4e5eaf2bdbe57216e093c6e86e04d1e2da87060b1226ad1023->leave($__internal_5126f8ffbf534c4e5eaf2bdbe57216e093c6e86e04d1e2da87060b1226ad1023_prof);

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
