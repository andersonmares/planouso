<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_5444a1b1a9bd9df3d0296621f0b20cdb9c43415ac94674bcfade24b00ac454f2 extends Twig_Template
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
        $__internal_29db83722bd294929de0e2e67bdd3309787b9c1ee4f56e413760a1f15526db66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29db83722bd294929de0e2e67bdd3309787b9c1ee4f56e413760a1f15526db66->enter($__internal_29db83722bd294929de0e2e67bdd3309787b9c1ee4f56e413760a1f15526db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_908efc6f87d2da881eba35b5cbed38da11eccb4570a31545a6fb4a1530ed8de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908efc6f87d2da881eba35b5cbed38da11eccb4570a31545a6fb4a1530ed8de5->enter($__internal_908efc6f87d2da881eba35b5cbed38da11eccb4570a31545a6fb4a1530ed8de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_29db83722bd294929de0e2e67bdd3309787b9c1ee4f56e413760a1f15526db66->leave($__internal_29db83722bd294929de0e2e67bdd3309787b9c1ee4f56e413760a1f15526db66_prof);

        
        $__internal_908efc6f87d2da881eba35b5cbed38da11eccb4570a31545a6fb4a1530ed8de5->leave($__internal_908efc6f87d2da881eba35b5cbed38da11eccb4570a31545a6fb4a1530ed8de5_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_be631610031e8fed76b41f57f6a09ccf70ea7cbc3b7724505e301e1c8a7ab9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be631610031e8fed76b41f57f6a09ccf70ea7cbc3b7724505e301e1c8a7ab9bc->enter($__internal_be631610031e8fed76b41f57f6a09ccf70ea7cbc3b7724505e301e1c8a7ab9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7748837ab0a6a5ab28e3977efa9d4e076b556b2bf4ebd58ecf67edb4e7522cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7748837ab0a6a5ab28e3977efa9d4e076b556b2bf4ebd58ecf67edb4e7522cb8->enter($__internal_7748837ab0a6a5ab28e3977efa9d4e076b556b2bf4ebd58ecf67edb4e7522cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7748837ab0a6a5ab28e3977efa9d4e076b556b2bf4ebd58ecf67edb4e7522cb8->leave($__internal_7748837ab0a6a5ab28e3977efa9d4e076b556b2bf4ebd58ecf67edb4e7522cb8_prof);

        
        $__internal_be631610031e8fed76b41f57f6a09ccf70ea7cbc3b7724505e301e1c8a7ab9bc->leave($__internal_be631610031e8fed76b41f57f6a09ccf70ea7cbc3b7724505e301e1c8a7ab9bc_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_91dd2b97a481e69927f88a2f41d6142483257bb08484c173560f4082520b81b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dd2b97a481e69927f88a2f41d6142483257bb08484c173560f4082520b81b5->enter($__internal_91dd2b97a481e69927f88a2f41d6142483257bb08484c173560f4082520b81b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f249ef4de6e3a51130d25789d8b8908e277400cd322dfbdfd4914587a7cf259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f249ef4de6e3a51130d25789d8b8908e277400cd322dfbdfd4914587a7cf259f->enter($__internal_f249ef4de6e3a51130d25789d8b8908e277400cd322dfbdfd4914587a7cf259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_3f1a87e4b8a0db45ae8abbe1894ef53a62a1e530dd697233aff40b7df81392ed = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_11f7b1f8d20ba5502d969bcd98e6370df7fff4783e363aa066492ad6d8ef7c62 = "{{") && ('' === $__internal_11f7b1f8d20ba5502d969bcd98e6370df7fff4783e363aa066492ad6d8ef7c62 || 0 === strpos($__internal_3f1a87e4b8a0db45ae8abbe1894ef53a62a1e530dd697233aff40b7df81392ed, $__internal_11f7b1f8d20ba5502d969bcd98e6370df7fff4783e363aa066492ad6d8ef7c62)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_570043d64acc0419884c0ccceab2018e011e90fe61af8ca07683eeff64a0308a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3bf775885bec862629667fadb4575ae730c10e4159cee3c927df8ecf3701cbea = "}}") && ('' === $__internal_3bf775885bec862629667fadb4575ae730c10e4159cee3c927df8ecf3701cbea || $__internal_3bf775885bec862629667fadb4575ae730c10e4159cee3c927df8ecf3701cbea === substr($__internal_570043d64acc0419884c0ccceab2018e011e90fe61af8ca07683eeff64a0308a, -strlen($__internal_3bf775885bec862629667fadb4575ae730c10e4159cee3c927df8ecf3701cbea))));
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
        
        $__internal_f249ef4de6e3a51130d25789d8b8908e277400cd322dfbdfd4914587a7cf259f->leave($__internal_f249ef4de6e3a51130d25789d8b8908e277400cd322dfbdfd4914587a7cf259f_prof);

        
        $__internal_91dd2b97a481e69927f88a2f41d6142483257bb08484c173560f4082520b81b5->leave($__internal_91dd2b97a481e69927f88a2f41d6142483257bb08484c173560f4082520b81b5_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_271c655fa5e34dea4b43c8e00811c1e3ccdf28b0e7f69ab5e50a7afad76a4c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271c655fa5e34dea4b43c8e00811c1e3ccdf28b0e7f69ab5e50a7afad76a4c34->enter($__internal_271c655fa5e34dea4b43c8e00811c1e3ccdf28b0e7f69ab5e50a7afad76a4c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_361e0edc9a648552bf7291e16eb30260b2cb13145b2c9f6b61b2f2a475b7723f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361e0edc9a648552bf7291e16eb30260b2cb13145b2c9f6b61b2f2a475b7723f->enter($__internal_361e0edc9a648552bf7291e16eb30260b2cb13145b2c9f6b61b2f2a475b7723f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_361e0edc9a648552bf7291e16eb30260b2cb13145b2c9f6b61b2f2a475b7723f->leave($__internal_361e0edc9a648552bf7291e16eb30260b2cb13145b2c9f6b61b2f2a475b7723f_prof);

        
        $__internal_271c655fa5e34dea4b43c8e00811c1e3ccdf28b0e7f69ab5e50a7afad76a4c34->leave($__internal_271c655fa5e34dea4b43c8e00811c1e3ccdf28b0e7f69ab5e50a7afad76a4c34_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_15153b8d2e8e1a37ddca759bc71019a11cb18f1121528dd1cfbce4b0edcaea9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15153b8d2e8e1a37ddca759bc71019a11cb18f1121528dd1cfbce4b0edcaea9b->enter($__internal_15153b8d2e8e1a37ddca759bc71019a11cb18f1121528dd1cfbce4b0edcaea9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_15c004c918b68f20c5f9971c46aa41dc43d6f07092594806a03b38ece5047444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c004c918b68f20c5f9971c46aa41dc43d6f07092594806a03b38ece5047444->enter($__internal_15c004c918b68f20c5f9971c46aa41dc43d6f07092594806a03b38ece5047444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_15c004c918b68f20c5f9971c46aa41dc43d6f07092594806a03b38ece5047444->leave($__internal_15c004c918b68f20c5f9971c46aa41dc43d6f07092594806a03b38ece5047444_prof);

        
        $__internal_15153b8d2e8e1a37ddca759bc71019a11cb18f1121528dd1cfbce4b0edcaea9b->leave($__internal_15153b8d2e8e1a37ddca759bc71019a11cb18f1121528dd1cfbce4b0edcaea9b_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7e3620ade31aea74d497dc4fab31bdc15d6763c6a55fe0669fff20e9351d0125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3620ade31aea74d497dc4fab31bdc15d6763c6a55fe0669fff20e9351d0125->enter($__internal_7e3620ade31aea74d497dc4fab31bdc15d6763c6a55fe0669fff20e9351d0125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b2a9613a300b7258fa696c3514b0c2864d6df3addd395246575dc0e69eabb113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a9613a300b7258fa696c3514b0c2864d6df3addd395246575dc0e69eabb113->enter($__internal_b2a9613a300b7258fa696c3514b0c2864d6df3addd395246575dc0e69eabb113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_b2a9613a300b7258fa696c3514b0c2864d6df3addd395246575dc0e69eabb113->leave($__internal_b2a9613a300b7258fa696c3514b0c2864d6df3addd395246575dc0e69eabb113_prof);

        
        $__internal_7e3620ade31aea74d497dc4fab31bdc15d6763c6a55fe0669fff20e9351d0125->leave($__internal_7e3620ade31aea74d497dc4fab31bdc15d6763c6a55fe0669fff20e9351d0125_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3cf776b113f0806a664c2450685465367a2981ca44a27f0520aa455432ab52cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf776b113f0806a664c2450685465367a2981ca44a27f0520aa455432ab52cb->enter($__internal_3cf776b113f0806a664c2450685465367a2981ca44a27f0520aa455432ab52cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0e585601cbdd519d1e41c24d401e0e7874d77d48327e1090eef5e3d5071aaf63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e585601cbdd519d1e41c24d401e0e7874d77d48327e1090eef5e3d5071aaf63->enter($__internal_0e585601cbdd519d1e41c24d401e0e7874d77d48327e1090eef5e3d5071aaf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_0e585601cbdd519d1e41c24d401e0e7874d77d48327e1090eef5e3d5071aaf63->leave($__internal_0e585601cbdd519d1e41c24d401e0e7874d77d48327e1090eef5e3d5071aaf63_prof);

        
        $__internal_3cf776b113f0806a664c2450685465367a2981ca44a27f0520aa455432ab52cb->leave($__internal_3cf776b113f0806a664c2450685465367a2981ca44a27f0520aa455432ab52cb_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b9ca178ec2ba4c464878890e5c0f95ee268c92c9953f634efc5e684fe19a7767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ca178ec2ba4c464878890e5c0f95ee268c92c9953f634efc5e684fe19a7767->enter($__internal_b9ca178ec2ba4c464878890e5c0f95ee268c92c9953f634efc5e684fe19a7767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_979450d56d13b9292d6d29d4f97ce3e7d0471d97435d27a0792ce2f9fe27e9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979450d56d13b9292d6d29d4f97ce3e7d0471d97435d27a0792ce2f9fe27e9f4->enter($__internal_979450d56d13b9292d6d29d4f97ce3e7d0471d97435d27a0792ce2f9fe27e9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_979450d56d13b9292d6d29d4f97ce3e7d0471d97435d27a0792ce2f9fe27e9f4->leave($__internal_979450d56d13b9292d6d29d4f97ce3e7d0471d97435d27a0792ce2f9fe27e9f4_prof);

        
        $__internal_b9ca178ec2ba4c464878890e5c0f95ee268c92c9953f634efc5e684fe19a7767->leave($__internal_b9ca178ec2ba4c464878890e5c0f95ee268c92c9953f634efc5e684fe19a7767_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_58138fd030a0034753b2874755a7373173eb9db0a78b71dff5864f36edbe8151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58138fd030a0034753b2874755a7373173eb9db0a78b71dff5864f36edbe8151->enter($__internal_58138fd030a0034753b2874755a7373173eb9db0a78b71dff5864f36edbe8151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_043986780f0b44cb889a8230f1e33a6102d3517bfbfcbf336b155850ad6b7f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043986780f0b44cb889a8230f1e33a6102d3517bfbfcbf336b155850ad6b7f07->enter($__internal_043986780f0b44cb889a8230f1e33a6102d3517bfbfcbf336b155850ad6b7f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_043986780f0b44cb889a8230f1e33a6102d3517bfbfcbf336b155850ad6b7f07->leave($__internal_043986780f0b44cb889a8230f1e33a6102d3517bfbfcbf336b155850ad6b7f07_prof);

        
        $__internal_58138fd030a0034753b2874755a7373173eb9db0a78b71dff5864f36edbe8151->leave($__internal_58138fd030a0034753b2874755a7373173eb9db0a78b71dff5864f36edbe8151_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7e8a04f855ad0eef7fd69992bad192790b867608f1e7349843ce43add5f86a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8a04f855ad0eef7fd69992bad192790b867608f1e7349843ce43add5f86a3c->enter($__internal_7e8a04f855ad0eef7fd69992bad192790b867608f1e7349843ce43add5f86a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f321fc71e331a16f32deb0e8509a2977a3479255fa97b5dd4067af4373acf3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f321fc71e331a16f32deb0e8509a2977a3479255fa97b5dd4067af4373acf3a5->enter($__internal_f321fc71e331a16f32deb0e8509a2977a3479255fa97b5dd4067af4373acf3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f321fc71e331a16f32deb0e8509a2977a3479255fa97b5dd4067af4373acf3a5->leave($__internal_f321fc71e331a16f32deb0e8509a2977a3479255fa97b5dd4067af4373acf3a5_prof);

        
        $__internal_7e8a04f855ad0eef7fd69992bad192790b867608f1e7349843ce43add5f86a3c->leave($__internal_7e8a04f855ad0eef7fd69992bad192790b867608f1e7349843ce43add5f86a3c_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_352a79d03ac8252e3fabb8f1e826e4114cbaee282f11d7acc27d28a2109045d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352a79d03ac8252e3fabb8f1e826e4114cbaee282f11d7acc27d28a2109045d3->enter($__internal_352a79d03ac8252e3fabb8f1e826e4114cbaee282f11d7acc27d28a2109045d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4d04f6756775ce886370b1beeead5d1ce80bea0eb997028f1496603a31350856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d04f6756775ce886370b1beeead5d1ce80bea0eb997028f1496603a31350856->enter($__internal_4d04f6756775ce886370b1beeead5d1ce80bea0eb997028f1496603a31350856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4d04f6756775ce886370b1beeead5d1ce80bea0eb997028f1496603a31350856->leave($__internal_4d04f6756775ce886370b1beeead5d1ce80bea0eb997028f1496603a31350856_prof);

        
        $__internal_352a79d03ac8252e3fabb8f1e826e4114cbaee282f11d7acc27d28a2109045d3->leave($__internal_352a79d03ac8252e3fabb8f1e826e4114cbaee282f11d7acc27d28a2109045d3_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ffda27040e4a0172f37232147074fae0a8150ab57512ddd4ef40de9f9f779c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffda27040e4a0172f37232147074fae0a8150ab57512ddd4ef40de9f9f779c78->enter($__internal_ffda27040e4a0172f37232147074fae0a8150ab57512ddd4ef40de9f9f779c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3ce3d71776348ab931262f7647d5bec60141a739f50d876ba0a17255e18839bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce3d71776348ab931262f7647d5bec60141a739f50d876ba0a17255e18839bd->enter($__internal_3ce3d71776348ab931262f7647d5bec60141a739f50d876ba0a17255e18839bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3ce3d71776348ab931262f7647d5bec60141a739f50d876ba0a17255e18839bd->leave($__internal_3ce3d71776348ab931262f7647d5bec60141a739f50d876ba0a17255e18839bd_prof);

        
        $__internal_ffda27040e4a0172f37232147074fae0a8150ab57512ddd4ef40de9f9f779c78->leave($__internal_ffda27040e4a0172f37232147074fae0a8150ab57512ddd4ef40de9f9f779c78_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a4cefbf5546420e0ce177c965eef1d5a6010ea13a633b08054bf719bf08b6464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cefbf5546420e0ce177c965eef1d5a6010ea13a633b08054bf719bf08b6464->enter($__internal_a4cefbf5546420e0ce177c965eef1d5a6010ea13a633b08054bf719bf08b6464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_42abf8ad99ba456d71fb826830aea5ebafe3e13c9b7841f0f39e1be55a35f7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42abf8ad99ba456d71fb826830aea5ebafe3e13c9b7841f0f39e1be55a35f7b9->enter($__internal_42abf8ad99ba456d71fb826830aea5ebafe3e13c9b7841f0f39e1be55a35f7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_42abf8ad99ba456d71fb826830aea5ebafe3e13c9b7841f0f39e1be55a35f7b9->leave($__internal_42abf8ad99ba456d71fb826830aea5ebafe3e13c9b7841f0f39e1be55a35f7b9_prof);

        
        $__internal_a4cefbf5546420e0ce177c965eef1d5a6010ea13a633b08054bf719bf08b6464->leave($__internal_a4cefbf5546420e0ce177c965eef1d5a6010ea13a633b08054bf719bf08b6464_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_900dff91d4b9b47aa4ea76780da75d7314e05638e73044658ac54c325a301558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900dff91d4b9b47aa4ea76780da75d7314e05638e73044658ac54c325a301558->enter($__internal_900dff91d4b9b47aa4ea76780da75d7314e05638e73044658ac54c325a301558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_958d9f66f197f13b8a468f5c4f1d61187a22e3f3d00d2f40503206659331e485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958d9f66f197f13b8a468f5c4f1d61187a22e3f3d00d2f40503206659331e485->enter($__internal_958d9f66f197f13b8a468f5c4f1d61187a22e3f3d00d2f40503206659331e485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_958d9f66f197f13b8a468f5c4f1d61187a22e3f3d00d2f40503206659331e485->leave($__internal_958d9f66f197f13b8a468f5c4f1d61187a22e3f3d00d2f40503206659331e485_prof);

        
        $__internal_900dff91d4b9b47aa4ea76780da75d7314e05638e73044658ac54c325a301558->leave($__internal_900dff91d4b9b47aa4ea76780da75d7314e05638e73044658ac54c325a301558_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_69850e5fc411f617e79f58a4bebda6179b50c81771f06e538ee86c63e476593c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69850e5fc411f617e79f58a4bebda6179b50c81771f06e538ee86c63e476593c->enter($__internal_69850e5fc411f617e79f58a4bebda6179b50c81771f06e538ee86c63e476593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_cebfcdbf1a45887ffb3bf72917a701bb7c3649fdc18c23caf53b70605f414b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebfcdbf1a45887ffb3bf72917a701bb7c3649fdc18c23caf53b70605f414b84->enter($__internal_cebfcdbf1a45887ffb3bf72917a701bb7c3649fdc18c23caf53b70605f414b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cebfcdbf1a45887ffb3bf72917a701bb7c3649fdc18c23caf53b70605f414b84->leave($__internal_cebfcdbf1a45887ffb3bf72917a701bb7c3649fdc18c23caf53b70605f414b84_prof);

        
        $__internal_69850e5fc411f617e79f58a4bebda6179b50c81771f06e538ee86c63e476593c->leave($__internal_69850e5fc411f617e79f58a4bebda6179b50c81771f06e538ee86c63e476593c_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_39d3c5a983f7343cf79562dd4f5c47155c68cf1a0345856448c4faa9ef31a9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d3c5a983f7343cf79562dd4f5c47155c68cf1a0345856448c4faa9ef31a9b3->enter($__internal_39d3c5a983f7343cf79562dd4f5c47155c68cf1a0345856448c4faa9ef31a9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_530a00c36d46836d0b8772bb11f4bd74c72add1ae215ab91c74a6c6862892646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530a00c36d46836d0b8772bb11f4bd74c72add1ae215ab91c74a6c6862892646->enter($__internal_530a00c36d46836d0b8772bb11f4bd74c72add1ae215ab91c74a6c6862892646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_530a00c36d46836d0b8772bb11f4bd74c72add1ae215ab91c74a6c6862892646->leave($__internal_530a00c36d46836d0b8772bb11f4bd74c72add1ae215ab91c74a6c6862892646_prof);

        
        $__internal_39d3c5a983f7343cf79562dd4f5c47155c68cf1a0345856448c4faa9ef31a9b3->leave($__internal_39d3c5a983f7343cf79562dd4f5c47155c68cf1a0345856448c4faa9ef31a9b3_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_01de80ffc5a5f059e2a9fc1ae30a1009fb9f39b161a0f24711be24d7ec6f8961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01de80ffc5a5f059e2a9fc1ae30a1009fb9f39b161a0f24711be24d7ec6f8961->enter($__internal_01de80ffc5a5f059e2a9fc1ae30a1009fb9f39b161a0f24711be24d7ec6f8961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1f472c47bc7bf9b41292df6b759263b6161073008a0bd5004e3f564da826674f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f472c47bc7bf9b41292df6b759263b6161073008a0bd5004e3f564da826674f->enter($__internal_1f472c47bc7bf9b41292df6b759263b6161073008a0bd5004e3f564da826674f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f472c47bc7bf9b41292df6b759263b6161073008a0bd5004e3f564da826674f->leave($__internal_1f472c47bc7bf9b41292df6b759263b6161073008a0bd5004e3f564da826674f_prof);

        
        $__internal_01de80ffc5a5f059e2a9fc1ae30a1009fb9f39b161a0f24711be24d7ec6f8961->leave($__internal_01de80ffc5a5f059e2a9fc1ae30a1009fb9f39b161a0f24711be24d7ec6f8961_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_14666e93c6da6969a07d5a45670ea36d2034a3fbf8aa6e9ff5877b9778b1c2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14666e93c6da6969a07d5a45670ea36d2034a3fbf8aa6e9ff5877b9778b1c2c3->enter($__internal_14666e93c6da6969a07d5a45670ea36d2034a3fbf8aa6e9ff5877b9778b1c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3ba11f841ffadf33b6e0fdffe0564af8e6540e039f509438de1d51b207d2538d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba11f841ffadf33b6e0fdffe0564af8e6540e039f509438de1d51b207d2538d->enter($__internal_3ba11f841ffadf33b6e0fdffe0564af8e6540e039f509438de1d51b207d2538d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3ba11f841ffadf33b6e0fdffe0564af8e6540e039f509438de1d51b207d2538d->leave($__internal_3ba11f841ffadf33b6e0fdffe0564af8e6540e039f509438de1d51b207d2538d_prof);

        
        $__internal_14666e93c6da6969a07d5a45670ea36d2034a3fbf8aa6e9ff5877b9778b1c2c3->leave($__internal_14666e93c6da6969a07d5a45670ea36d2034a3fbf8aa6e9ff5877b9778b1c2c3_prof);

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
