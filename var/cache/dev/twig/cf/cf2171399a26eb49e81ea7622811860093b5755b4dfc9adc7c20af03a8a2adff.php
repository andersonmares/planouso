<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_72d694cf8acd347223d2a98163739fe54100bb1b60df9bc5bbdbe5f8189f8cf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63078aa32f04c6189bed8c654a60aa53858ffad25096f4fcd62d948daba0c531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63078aa32f04c6189bed8c654a60aa53858ffad25096f4fcd62d948daba0c531->enter($__internal_63078aa32f04c6189bed8c654a60aa53858ffad25096f4fcd62d948daba0c531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_6d9cb71785e02173566fc2d730fbbc2394404f56082feee1641bba0bebf8f348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9cb71785e02173566fc2d730fbbc2394404f56082feee1641bba0bebf8f348->enter($__internal_6d9cb71785e02173566fc2d730fbbc2394404f56082feee1641bba0bebf8f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_63078aa32f04c6189bed8c654a60aa53858ffad25096f4fcd62d948daba0c531->leave($__internal_63078aa32f04c6189bed8c654a60aa53858ffad25096f4fcd62d948daba0c531_prof);

        
        $__internal_6d9cb71785e02173566fc2d730fbbc2394404f56082feee1641bba0bebf8f348->leave($__internal_6d9cb71785e02173566fc2d730fbbc2394404f56082feee1641bba0bebf8f348_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_35f72c1368a4a788ae4cc08598494aab20a6f50db61a24edd07e5ae28405f4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f72c1368a4a788ae4cc08598494aab20a6f50db61a24edd07e5ae28405f4c1->enter($__internal_35f72c1368a4a788ae4cc08598494aab20a6f50db61a24edd07e5ae28405f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5a7241c81ad2498530e219205ff8886d7baccc5cdcad17992b06c20d4e3c1e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7241c81ad2498530e219205ff8886d7baccc5cdcad17992b06c20d4e3c1e1b->enter($__internal_5a7241c81ad2498530e219205ff8886d7baccc5cdcad17992b06c20d4e3c1e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5a7241c81ad2498530e219205ff8886d7baccc5cdcad17992b06c20d4e3c1e1b->leave($__internal_5a7241c81ad2498530e219205ff8886d7baccc5cdcad17992b06c20d4e3c1e1b_prof);

        
        $__internal_35f72c1368a4a788ae4cc08598494aab20a6f50db61a24edd07e5ae28405f4c1->leave($__internal_35f72c1368a4a788ae4cc08598494aab20a6f50db61a24edd07e5ae28405f4c1_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e263c30779503c841783d955086de92e19162b1acb698757ba56ba5e93c6d695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e263c30779503c841783d955086de92e19162b1acb698757ba56ba5e93c6d695->enter($__internal_e263c30779503c841783d955086de92e19162b1acb698757ba56ba5e93c6d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4cbf7096a5d16452691ba8d1aa296923de6519cb183d91f0b094aad73fdfad95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbf7096a5d16452691ba8d1aa296923de6519cb183d91f0b094aad73fdfad95->enter($__internal_4cbf7096a5d16452691ba8d1aa296923de6519cb183d91f0b094aad73fdfad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_7c6674df670e59214f66adf51673d1380329ada569b617c2d4482403cdbc6f06 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_eb5b0fc5670d217505afb967ce1ccf969bccdd1cff7926a8dcdab56b205d6814 = "{{") && ('' === $__internal_eb5b0fc5670d217505afb967ce1ccf969bccdd1cff7926a8dcdab56b205d6814 || 0 === strpos($__internal_7c6674df670e59214f66adf51673d1380329ada569b617c2d4482403cdbc6f06, $__internal_eb5b0fc5670d217505afb967ce1ccf969bccdd1cff7926a8dcdab56b205d6814)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_9d47646c895c82e1b5f42058ee221fda48c07152d1e1f50af6c71b05ba4251ce = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_cb9b096bd77c7bc7e506826fbe823001f850d79ab2bc3ccc706be2a97a0e5feb = "}}") && ('' === $__internal_cb9b096bd77c7bc7e506826fbe823001f850d79ab2bc3ccc706be2a97a0e5feb || $__internal_cb9b096bd77c7bc7e506826fbe823001f850d79ab2bc3ccc706be2a97a0e5feb === substr($__internal_9d47646c895c82e1b5f42058ee221fda48c07152d1e1f50af6c71b05ba4251ce, -strlen($__internal_cb9b096bd77c7bc7e506826fbe823001f850d79ab2bc3ccc706be2a97a0e5feb))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_4cbf7096a5d16452691ba8d1aa296923de6519cb183d91f0b094aad73fdfad95->leave($__internal_4cbf7096a5d16452691ba8d1aa296923de6519cb183d91f0b094aad73fdfad95_prof);

        
        $__internal_e263c30779503c841783d955086de92e19162b1acb698757ba56ba5e93c6d695->leave($__internal_e263c30779503c841783d955086de92e19162b1acb698757ba56ba5e93c6d695_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_17e6abfd13219e46fd1eee3af34ce0c00d0dcfc45ebd1ce24432b4c6a64ff703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e6abfd13219e46fd1eee3af34ce0c00d0dcfc45ebd1ce24432b4c6a64ff703->enter($__internal_17e6abfd13219e46fd1eee3af34ce0c00d0dcfc45ebd1ce24432b4c6a64ff703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2c48543c8dc9d087670fbc3bb95c760aa6e9e9982dc43d6372ac4f98df71b88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c48543c8dc9d087670fbc3bb95c760aa6e9e9982dc43d6372ac4f98df71b88b->enter($__internal_2c48543c8dc9d087670fbc3bb95c760aa6e9e9982dc43d6372ac4f98df71b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2c48543c8dc9d087670fbc3bb95c760aa6e9e9982dc43d6372ac4f98df71b88b->leave($__internal_2c48543c8dc9d087670fbc3bb95c760aa6e9e9982dc43d6372ac4f98df71b88b_prof);

        
        $__internal_17e6abfd13219e46fd1eee3af34ce0c00d0dcfc45ebd1ce24432b4c6a64ff703->leave($__internal_17e6abfd13219e46fd1eee3af34ce0c00d0dcfc45ebd1ce24432b4c6a64ff703_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7d034c920dd4d529c2cc58d955e5a01ec677766c8d06a71e5179bddde3b1c8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d034c920dd4d529c2cc58d955e5a01ec677766c8d06a71e5179bddde3b1c8b4->enter($__internal_7d034c920dd4d529c2cc58d955e5a01ec677766c8d06a71e5179bddde3b1c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4053c3e7c433fc7172ce288614a28eb7c2924d5f6ccfac1e3d8401dbf648a93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4053c3e7c433fc7172ce288614a28eb7c2924d5f6ccfac1e3d8401dbf648a93c->enter($__internal_4053c3e7c433fc7172ce288614a28eb7c2924d5f6ccfac1e3d8401dbf648a93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_4053c3e7c433fc7172ce288614a28eb7c2924d5f6ccfac1e3d8401dbf648a93c->leave($__internal_4053c3e7c433fc7172ce288614a28eb7c2924d5f6ccfac1e3d8401dbf648a93c_prof);

        
        $__internal_7d034c920dd4d529c2cc58d955e5a01ec677766c8d06a71e5179bddde3b1c8b4->leave($__internal_7d034c920dd4d529c2cc58d955e5a01ec677766c8d06a71e5179bddde3b1c8b4_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5f0a9a1cf2f1d2b8b99e0d6c24a8131843ffa23ce07dad3621799882b41cb5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0a9a1cf2f1d2b8b99e0d6c24a8131843ffa23ce07dad3621799882b41cb5be->enter($__internal_5f0a9a1cf2f1d2b8b99e0d6c24a8131843ffa23ce07dad3621799882b41cb5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_07cf043ef9623f7fcd42b50d5dfd01db69c0bbebbf6ab61f2e4efb40314176a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf043ef9623f7fcd42b50d5dfd01db69c0bbebbf6ab61f2e4efb40314176a1->enter($__internal_07cf043ef9623f7fcd42b50d5dfd01db69c0bbebbf6ab61f2e4efb40314176a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_07cf043ef9623f7fcd42b50d5dfd01db69c0bbebbf6ab61f2e4efb40314176a1->leave($__internal_07cf043ef9623f7fcd42b50d5dfd01db69c0bbebbf6ab61f2e4efb40314176a1_prof);

        
        $__internal_5f0a9a1cf2f1d2b8b99e0d6c24a8131843ffa23ce07dad3621799882b41cb5be->leave($__internal_5f0a9a1cf2f1d2b8b99e0d6c24a8131843ffa23ce07dad3621799882b41cb5be_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d4c1dcceb9ce9142acf507398a815dd31ad44806ecba9991954cddad948fb608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c1dcceb9ce9142acf507398a815dd31ad44806ecba9991954cddad948fb608->enter($__internal_d4c1dcceb9ce9142acf507398a815dd31ad44806ecba9991954cddad948fb608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9d2994e221652154dc5aef6e1c5c3c9d3a83aebf2ec826eefccff78c2c49b2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2994e221652154dc5aef6e1c5c3c9d3a83aebf2ec826eefccff78c2c49b2e3->enter($__internal_9d2994e221652154dc5aef6e1c5c3c9d3a83aebf2ec826eefccff78c2c49b2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_9d2994e221652154dc5aef6e1c5c3c9d3a83aebf2ec826eefccff78c2c49b2e3->leave($__internal_9d2994e221652154dc5aef6e1c5c3c9d3a83aebf2ec826eefccff78c2c49b2e3_prof);

        
        $__internal_d4c1dcceb9ce9142acf507398a815dd31ad44806ecba9991954cddad948fb608->leave($__internal_d4c1dcceb9ce9142acf507398a815dd31ad44806ecba9991954cddad948fb608_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f1e32aa3dfa2faac027ba5d802bce667a21ceb532a7241d6ee02b27aa6d46547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e32aa3dfa2faac027ba5d802bce667a21ceb532a7241d6ee02b27aa6d46547->enter($__internal_f1e32aa3dfa2faac027ba5d802bce667a21ceb532a7241d6ee02b27aa6d46547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e687df3c369ef4a906ec914f73f9bcb0ebf69f88b108cd5db6761bb63f0bb386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e687df3c369ef4a906ec914f73f9bcb0ebf69f88b108cd5db6761bb63f0bb386->enter($__internal_e687df3c369ef4a906ec914f73f9bcb0ebf69f88b108cd5db6761bb63f0bb386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_e687df3c369ef4a906ec914f73f9bcb0ebf69f88b108cd5db6761bb63f0bb386->leave($__internal_e687df3c369ef4a906ec914f73f9bcb0ebf69f88b108cd5db6761bb63f0bb386_prof);

        
        $__internal_f1e32aa3dfa2faac027ba5d802bce667a21ceb532a7241d6ee02b27aa6d46547->leave($__internal_f1e32aa3dfa2faac027ba5d802bce667a21ceb532a7241d6ee02b27aa6d46547_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_beffa14af11a579f667ceb89a99c38cedcfd9f92da73fa299c416e035f6d7dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beffa14af11a579f667ceb89a99c38cedcfd9f92da73fa299c416e035f6d7dda->enter($__internal_beffa14af11a579f667ceb89a99c38cedcfd9f92da73fa299c416e035f6d7dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9c55078c983ee8b7c21dc97c22941c373b9286c1b9f4ad10b51cd8654713cb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c55078c983ee8b7c21dc97c22941c373b9286c1b9f4ad10b51cd8654713cb93->enter($__internal_9c55078c983ee8b7c21dc97c22941c373b9286c1b9f4ad10b51cd8654713cb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9c55078c983ee8b7c21dc97c22941c373b9286c1b9f4ad10b51cd8654713cb93->leave($__internal_9c55078c983ee8b7c21dc97c22941c373b9286c1b9f4ad10b51cd8654713cb93_prof);

        
        $__internal_beffa14af11a579f667ceb89a99c38cedcfd9f92da73fa299c416e035f6d7dda->leave($__internal_beffa14af11a579f667ceb89a99c38cedcfd9f92da73fa299c416e035f6d7dda_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_52add8884a1a3d614f78cd22a81d2cea2a6a9c09a6778c7a2ea7a4f06fd4f666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52add8884a1a3d614f78cd22a81d2cea2a6a9c09a6778c7a2ea7a4f06fd4f666->enter($__internal_52add8884a1a3d614f78cd22a81d2cea2a6a9c09a6778c7a2ea7a4f06fd4f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_212143bb57202cd06534121a95042174c80c94e8e28b01f80be0a157fe124088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212143bb57202cd06534121a95042174c80c94e8e28b01f80be0a157fe124088->enter($__internal_212143bb57202cd06534121a95042174c80c94e8e28b01f80be0a157fe124088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_212143bb57202cd06534121a95042174c80c94e8e28b01f80be0a157fe124088->leave($__internal_212143bb57202cd06534121a95042174c80c94e8e28b01f80be0a157fe124088_prof);

        
        $__internal_52add8884a1a3d614f78cd22a81d2cea2a6a9c09a6778c7a2ea7a4f06fd4f666->leave($__internal_52add8884a1a3d614f78cd22a81d2cea2a6a9c09a6778c7a2ea7a4f06fd4f666_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b26ffe26afca90c34b5b3d6a125f496ab5a957f027f8dfcbc5fe75b715665813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26ffe26afca90c34b5b3d6a125f496ab5a957f027f8dfcbc5fe75b715665813->enter($__internal_b26ffe26afca90c34b5b3d6a125f496ab5a957f027f8dfcbc5fe75b715665813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_46dec18ec5fbfebab21c435cb6ef21342d0d862ecd5cee1d4d77ec852adf0683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dec18ec5fbfebab21c435cb6ef21342d0d862ecd5cee1d4d77ec852adf0683->enter($__internal_46dec18ec5fbfebab21c435cb6ef21342d0d862ecd5cee1d4d77ec852adf0683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_46dec18ec5fbfebab21c435cb6ef21342d0d862ecd5cee1d4d77ec852adf0683->leave($__internal_46dec18ec5fbfebab21c435cb6ef21342d0d862ecd5cee1d4d77ec852adf0683_prof);

        
        $__internal_b26ffe26afca90c34b5b3d6a125f496ab5a957f027f8dfcbc5fe75b715665813->leave($__internal_b26ffe26afca90c34b5b3d6a125f496ab5a957f027f8dfcbc5fe75b715665813_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e75d7b478f2096dcc9c527178c9bc422f1779f0cb70632b91fc0ed427b754ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75d7b478f2096dcc9c527178c9bc422f1779f0cb70632b91fc0ed427b754ac0->enter($__internal_e75d7b478f2096dcc9c527178c9bc422f1779f0cb70632b91fc0ed427b754ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a91c7ae09d2567164f7e3ea968e5fe0f6df1188674e27a2d33198bf807b7e9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91c7ae09d2567164f7e3ea968e5fe0f6df1188674e27a2d33198bf807b7e9bd->enter($__internal_a91c7ae09d2567164f7e3ea968e5fe0f6df1188674e27a2d33198bf807b7e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a91c7ae09d2567164f7e3ea968e5fe0f6df1188674e27a2d33198bf807b7e9bd->leave($__internal_a91c7ae09d2567164f7e3ea968e5fe0f6df1188674e27a2d33198bf807b7e9bd_prof);

        
        $__internal_e75d7b478f2096dcc9c527178c9bc422f1779f0cb70632b91fc0ed427b754ac0->leave($__internal_e75d7b478f2096dcc9c527178c9bc422f1779f0cb70632b91fc0ed427b754ac0_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cbce0f6e0d0f810d27957373e60f61eb2a2a901b124a17d84a9eff8f0dcd2ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbce0f6e0d0f810d27957373e60f61eb2a2a901b124a17d84a9eff8f0dcd2ef3->enter($__internal_cbce0f6e0d0f810d27957373e60f61eb2a2a901b124a17d84a9eff8f0dcd2ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_44db04ad83a02a868d8f9ecfe07531b7266c180bbe1e25995fc3ef3d269a904b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44db04ad83a02a868d8f9ecfe07531b7266c180bbe1e25995fc3ef3d269a904b->enter($__internal_44db04ad83a02a868d8f9ecfe07531b7266c180bbe1e25995fc3ef3d269a904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_44db04ad83a02a868d8f9ecfe07531b7266c180bbe1e25995fc3ef3d269a904b->leave($__internal_44db04ad83a02a868d8f9ecfe07531b7266c180bbe1e25995fc3ef3d269a904b_prof);

        
        $__internal_cbce0f6e0d0f810d27957373e60f61eb2a2a901b124a17d84a9eff8f0dcd2ef3->leave($__internal_cbce0f6e0d0f810d27957373e60f61eb2a2a901b124a17d84a9eff8f0dcd2ef3_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ac11cca548da64e2287dbea8420f65e922d88bd04703f83df94855609ad75ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac11cca548da64e2287dbea8420f65e922d88bd04703f83df94855609ad75ed8->enter($__internal_ac11cca548da64e2287dbea8420f65e922d88bd04703f83df94855609ad75ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d0de654e3aae60ec10eed5b9c4360c06691985e0dea7f6891b2c2058d9fce101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0de654e3aae60ec10eed5b9c4360c06691985e0dea7f6891b2c2058d9fce101->enter($__internal_d0de654e3aae60ec10eed5b9c4360c06691985e0dea7f6891b2c2058d9fce101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_d0de654e3aae60ec10eed5b9c4360c06691985e0dea7f6891b2c2058d9fce101->leave($__internal_d0de654e3aae60ec10eed5b9c4360c06691985e0dea7f6891b2c2058d9fce101_prof);

        
        $__internal_ac11cca548da64e2287dbea8420f65e922d88bd04703f83df94855609ad75ed8->leave($__internal_ac11cca548da64e2287dbea8420f65e922d88bd04703f83df94855609ad75ed8_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b148df89f300481ae5a0eb28d17be972acfbcfb36698ee11b35eb7a8b2d993c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b148df89f300481ae5a0eb28d17be972acfbcfb36698ee11b35eb7a8b2d993c4->enter($__internal_b148df89f300481ae5a0eb28d17be972acfbcfb36698ee11b35eb7a8b2d993c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6ecc3d5d98932b27539b31de64edcfe6e4e8a65839f3755942894d4282a497b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecc3d5d98932b27539b31de64edcfe6e4e8a65839f3755942894d4282a497b7->enter($__internal_6ecc3d5d98932b27539b31de64edcfe6e4e8a65839f3755942894d4282a497b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6ecc3d5d98932b27539b31de64edcfe6e4e8a65839f3755942894d4282a497b7->leave($__internal_6ecc3d5d98932b27539b31de64edcfe6e4e8a65839f3755942894d4282a497b7_prof);

        
        $__internal_b148df89f300481ae5a0eb28d17be972acfbcfb36698ee11b35eb7a8b2d993c4->leave($__internal_b148df89f300481ae5a0eb28d17be972acfbcfb36698ee11b35eb7a8b2d993c4_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0af991130ffc8e90c67adb73e1d901c10aae91ab890d219a1b9f2c2c5e7e2855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af991130ffc8e90c67adb73e1d901c10aae91ab890d219a1b9f2c2c5e7e2855->enter($__internal_0af991130ffc8e90c67adb73e1d901c10aae91ab890d219a1b9f2c2c5e7e2855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b602ce3359ebe8ef892e8a4fc22182dbc260f7c129d7fd500c3a4840597b5ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b602ce3359ebe8ef892e8a4fc22182dbc260f7c129d7fd500c3a4840597b5ca8->enter($__internal_b602ce3359ebe8ef892e8a4fc22182dbc260f7c129d7fd500c3a4840597b5ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b602ce3359ebe8ef892e8a4fc22182dbc260f7c129d7fd500c3a4840597b5ca8->leave($__internal_b602ce3359ebe8ef892e8a4fc22182dbc260f7c129d7fd500c3a4840597b5ca8_prof);

        
        $__internal_0af991130ffc8e90c67adb73e1d901c10aae91ab890d219a1b9f2c2c5e7e2855->leave($__internal_0af991130ffc8e90c67adb73e1d901c10aae91ab890d219a1b9f2c2c5e7e2855_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e03ae32d66e244c86dc35e58772c109a5fa4c53d9a0a800d7090cb7b12dddc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03ae32d66e244c86dc35e58772c109a5fa4c53d9a0a800d7090cb7b12dddc7a->enter($__internal_e03ae32d66e244c86dc35e58772c109a5fa4c53d9a0a800d7090cb7b12dddc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9e0585fb3f968a0a0dc305fc8e5ded003c6cf182bbe7ceebfca6074362e30121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0585fb3f968a0a0dc305fc8e5ded003c6cf182bbe7ceebfca6074362e30121->enter($__internal_9e0585fb3f968a0a0dc305fc8e5ded003c6cf182bbe7ceebfca6074362e30121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e0585fb3f968a0a0dc305fc8e5ded003c6cf182bbe7ceebfca6074362e30121->leave($__internal_9e0585fb3f968a0a0dc305fc8e5ded003c6cf182bbe7ceebfca6074362e30121_prof);

        
        $__internal_e03ae32d66e244c86dc35e58772c109a5fa4c53d9a0a800d7090cb7b12dddc7a->leave($__internal_e03ae32d66e244c86dc35e58772c109a5fa4c53d9a0a800d7090cb7b12dddc7a_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5005b90a4f452612c8ce3bde233f7be5315ddf38caddf3ec6cc5d1bba6834ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5005b90a4f452612c8ce3bde233f7be5315ddf38caddf3ec6cc5d1bba6834ac6->enter($__internal_5005b90a4f452612c8ce3bde233f7be5315ddf38caddf3ec6cc5d1bba6834ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7625c5541093a4d75ecd8db72c78b85d792ee6098cf087be2f81316ba068a1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7625c5541093a4d75ecd8db72c78b85d792ee6098cf087be2f81316ba068a1f1->enter($__internal_7625c5541093a4d75ecd8db72c78b85d792ee6098cf087be2f81316ba068a1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7625c5541093a4d75ecd8db72c78b85d792ee6098cf087be2f81316ba068a1f1->leave($__internal_7625c5541093a4d75ecd8db72c78b85d792ee6098cf087be2f81316ba068a1f1_prof);

        
        $__internal_5005b90a4f452612c8ce3bde233f7be5315ddf38caddf3ec6cc5d1bba6834ac6->leave($__internal_5005b90a4f452612c8ce3bde233f7be5315ddf38caddf3ec6cc5d1bba6834ac6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "D:\\planouso\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
