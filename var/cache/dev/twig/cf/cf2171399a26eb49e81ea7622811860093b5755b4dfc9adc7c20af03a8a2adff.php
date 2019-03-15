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
        $__internal_6c1b3f80c1d37188057171e79bb7716acedf912f51666b24a7c7cda52daf4819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1b3f80c1d37188057171e79bb7716acedf912f51666b24a7c7cda52daf4819->enter($__internal_6c1b3f80c1d37188057171e79bb7716acedf912f51666b24a7c7cda52daf4819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_bc8905c0b6a48b3c9140bdf34049f60c1708e8ed95396836378c31cc5789786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8905c0b6a48b3c9140bdf34049f60c1708e8ed95396836378c31cc5789786c->enter($__internal_bc8905c0b6a48b3c9140bdf34049f60c1708e8ed95396836378c31cc5789786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_6c1b3f80c1d37188057171e79bb7716acedf912f51666b24a7c7cda52daf4819->leave($__internal_6c1b3f80c1d37188057171e79bb7716acedf912f51666b24a7c7cda52daf4819_prof);

        
        $__internal_bc8905c0b6a48b3c9140bdf34049f60c1708e8ed95396836378c31cc5789786c->leave($__internal_bc8905c0b6a48b3c9140bdf34049f60c1708e8ed95396836378c31cc5789786c_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_28d644e888af16d579577aa451bb7429d52ce43e21c5fab48e688f60c2f28c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d644e888af16d579577aa451bb7429d52ce43e21c5fab48e688f60c2f28c02->enter($__internal_28d644e888af16d579577aa451bb7429d52ce43e21c5fab48e688f60c2f28c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ec222ce7a525422324dab722c21084a2ed1a8be68084c47aa29eff82ed5a0373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec222ce7a525422324dab722c21084a2ed1a8be68084c47aa29eff82ed5a0373->enter($__internal_ec222ce7a525422324dab722c21084a2ed1a8be68084c47aa29eff82ed5a0373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ec222ce7a525422324dab722c21084a2ed1a8be68084c47aa29eff82ed5a0373->leave($__internal_ec222ce7a525422324dab722c21084a2ed1a8be68084c47aa29eff82ed5a0373_prof);

        
        $__internal_28d644e888af16d579577aa451bb7429d52ce43e21c5fab48e688f60c2f28c02->leave($__internal_28d644e888af16d579577aa451bb7429d52ce43e21c5fab48e688f60c2f28c02_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e5ee682e20d0a56386e18fdae0dcd742e367e493a5f9bb0bc3929ff7cee76d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ee682e20d0a56386e18fdae0dcd742e367e493a5f9bb0bc3929ff7cee76d5a->enter($__internal_e5ee682e20d0a56386e18fdae0dcd742e367e493a5f9bb0bc3929ff7cee76d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a06844456b78baf7d1f39f55a9508d7db48f4c216a00019afcd33e58574236a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06844456b78baf7d1f39f55a9508d7db48f4c216a00019afcd33e58574236a4->enter($__internal_a06844456b78baf7d1f39f55a9508d7db48f4c216a00019afcd33e58574236a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_ce7cf5d1d95908027b238e7e73e824821b5d882610e11ba846f739a5707770f4 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_e0bd13d68fb071aef0daa20ff81b018542bffee35e9313902d080eb00ceffaf1 = "{{") && ('' === $__internal_e0bd13d68fb071aef0daa20ff81b018542bffee35e9313902d080eb00ceffaf1 || 0 === strpos($__internal_ce7cf5d1d95908027b238e7e73e824821b5d882610e11ba846f739a5707770f4, $__internal_e0bd13d68fb071aef0daa20ff81b018542bffee35e9313902d080eb00ceffaf1)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_e1096124dd36d1dfd6efb072716a196de39db1ee4e7483c3cd48878979da4111 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_bbe7fe7190613ad5fc11ac7a9386c4933b92b6a7dbacabd3c0d6acd82e796816 = "}}") && ('' === $__internal_bbe7fe7190613ad5fc11ac7a9386c4933b92b6a7dbacabd3c0d6acd82e796816 || $__internal_bbe7fe7190613ad5fc11ac7a9386c4933b92b6a7dbacabd3c0d6acd82e796816 === substr($__internal_e1096124dd36d1dfd6efb072716a196de39db1ee4e7483c3cd48878979da4111, -strlen($__internal_bbe7fe7190613ad5fc11ac7a9386c4933b92b6a7dbacabd3c0d6acd82e796816))));
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
        
        $__internal_a06844456b78baf7d1f39f55a9508d7db48f4c216a00019afcd33e58574236a4->leave($__internal_a06844456b78baf7d1f39f55a9508d7db48f4c216a00019afcd33e58574236a4_prof);

        
        $__internal_e5ee682e20d0a56386e18fdae0dcd742e367e493a5f9bb0bc3929ff7cee76d5a->leave($__internal_e5ee682e20d0a56386e18fdae0dcd742e367e493a5f9bb0bc3929ff7cee76d5a_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2fc005896bc190aa291419d10eeef71dd869ffb8de8e06ddcc2ff8c40340fec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc005896bc190aa291419d10eeef71dd869ffb8de8e06ddcc2ff8c40340fec9->enter($__internal_2fc005896bc190aa291419d10eeef71dd869ffb8de8e06ddcc2ff8c40340fec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_24b331156755b1a1a78b65808a722433b549d38b7e3e77b2e9443fa93c041f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b331156755b1a1a78b65808a722433b549d38b7e3e77b2e9443fa93c041f5b->enter($__internal_24b331156755b1a1a78b65808a722433b549d38b7e3e77b2e9443fa93c041f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_24b331156755b1a1a78b65808a722433b549d38b7e3e77b2e9443fa93c041f5b->leave($__internal_24b331156755b1a1a78b65808a722433b549d38b7e3e77b2e9443fa93c041f5b_prof);

        
        $__internal_2fc005896bc190aa291419d10eeef71dd869ffb8de8e06ddcc2ff8c40340fec9->leave($__internal_2fc005896bc190aa291419d10eeef71dd869ffb8de8e06ddcc2ff8c40340fec9_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2a7151a1370375aa7a011993ced219a03f56be10cdfbf4fab06498e69eb4bca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7151a1370375aa7a011993ced219a03f56be10cdfbf4fab06498e69eb4bca7->enter($__internal_2a7151a1370375aa7a011993ced219a03f56be10cdfbf4fab06498e69eb4bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4241c6d0501da8ef8b34a995dfb2ce1a0fe84d0b43af2bfa1a6ab91082d66c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4241c6d0501da8ef8b34a995dfb2ce1a0fe84d0b43af2bfa1a6ab91082d66c34->enter($__internal_4241c6d0501da8ef8b34a995dfb2ce1a0fe84d0b43af2bfa1a6ab91082d66c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_4241c6d0501da8ef8b34a995dfb2ce1a0fe84d0b43af2bfa1a6ab91082d66c34->leave($__internal_4241c6d0501da8ef8b34a995dfb2ce1a0fe84d0b43af2bfa1a6ab91082d66c34_prof);

        
        $__internal_2a7151a1370375aa7a011993ced219a03f56be10cdfbf4fab06498e69eb4bca7->leave($__internal_2a7151a1370375aa7a011993ced219a03f56be10cdfbf4fab06498e69eb4bca7_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c6c8d97073a34d51c93abc6f6d964601b708fdc4f5af5a84b60363c3ca31845f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c8d97073a34d51c93abc6f6d964601b708fdc4f5af5a84b60363c3ca31845f->enter($__internal_c6c8d97073a34d51c93abc6f6d964601b708fdc4f5af5a84b60363c3ca31845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6e252d5432e2b696c9404d3fb7fdb9ae40ec6e84007e811f1036741ea1c35be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e252d5432e2b696c9404d3fb7fdb9ae40ec6e84007e811f1036741ea1c35be8->enter($__internal_6e252d5432e2b696c9404d3fb7fdb9ae40ec6e84007e811f1036741ea1c35be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_6e252d5432e2b696c9404d3fb7fdb9ae40ec6e84007e811f1036741ea1c35be8->leave($__internal_6e252d5432e2b696c9404d3fb7fdb9ae40ec6e84007e811f1036741ea1c35be8_prof);

        
        $__internal_c6c8d97073a34d51c93abc6f6d964601b708fdc4f5af5a84b60363c3ca31845f->leave($__internal_c6c8d97073a34d51c93abc6f6d964601b708fdc4f5af5a84b60363c3ca31845f_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1bb2801bc26002c2881a42f63d10d21f6cfd284b99919a690e71a4d9d196b320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb2801bc26002c2881a42f63d10d21f6cfd284b99919a690e71a4d9d196b320->enter($__internal_1bb2801bc26002c2881a42f63d10d21f6cfd284b99919a690e71a4d9d196b320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1eb3df36140697b321eaa94631b42a288229b36e9f95f4bc34a56a61f530d32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb3df36140697b321eaa94631b42a288229b36e9f95f4bc34a56a61f530d32d->enter($__internal_1eb3df36140697b321eaa94631b42a288229b36e9f95f4bc34a56a61f530d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_1eb3df36140697b321eaa94631b42a288229b36e9f95f4bc34a56a61f530d32d->leave($__internal_1eb3df36140697b321eaa94631b42a288229b36e9f95f4bc34a56a61f530d32d_prof);

        
        $__internal_1bb2801bc26002c2881a42f63d10d21f6cfd284b99919a690e71a4d9d196b320->leave($__internal_1bb2801bc26002c2881a42f63d10d21f6cfd284b99919a690e71a4d9d196b320_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_068f86e610b947ed0ecbc52b919df3d5ea32c685ef3b848343a7c48eb6c15c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068f86e610b947ed0ecbc52b919df3d5ea32c685ef3b848343a7c48eb6c15c00->enter($__internal_068f86e610b947ed0ecbc52b919df3d5ea32c685ef3b848343a7c48eb6c15c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c36fb698fbd6165d85719c514b54468a24a6a0c4479e58997be096a694ab94cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36fb698fbd6165d85719c514b54468a24a6a0c4479e58997be096a694ab94cb->enter($__internal_c36fb698fbd6165d85719c514b54468a24a6a0c4479e58997be096a694ab94cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_c36fb698fbd6165d85719c514b54468a24a6a0c4479e58997be096a694ab94cb->leave($__internal_c36fb698fbd6165d85719c514b54468a24a6a0c4479e58997be096a694ab94cb_prof);

        
        $__internal_068f86e610b947ed0ecbc52b919df3d5ea32c685ef3b848343a7c48eb6c15c00->leave($__internal_068f86e610b947ed0ecbc52b919df3d5ea32c685ef3b848343a7c48eb6c15c00_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5104d81fc7653fac14629ec9fccd8f477e6fd8240601e8788c0af1e56da7ca94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5104d81fc7653fac14629ec9fccd8f477e6fd8240601e8788c0af1e56da7ca94->enter($__internal_5104d81fc7653fac14629ec9fccd8f477e6fd8240601e8788c0af1e56da7ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_70fc14762c03c5e433dadc165102a474f530090562ed03f5b38a0d7776fc342d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fc14762c03c5e433dadc165102a474f530090562ed03f5b38a0d7776fc342d->enter($__internal_70fc14762c03c5e433dadc165102a474f530090562ed03f5b38a0d7776fc342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_70fc14762c03c5e433dadc165102a474f530090562ed03f5b38a0d7776fc342d->leave($__internal_70fc14762c03c5e433dadc165102a474f530090562ed03f5b38a0d7776fc342d_prof);

        
        $__internal_5104d81fc7653fac14629ec9fccd8f477e6fd8240601e8788c0af1e56da7ca94->leave($__internal_5104d81fc7653fac14629ec9fccd8f477e6fd8240601e8788c0af1e56da7ca94_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a90c977fa095956151aab91d6aba0d2609fdd28ba756af5d844adbdb89a4c0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90c977fa095956151aab91d6aba0d2609fdd28ba756af5d844adbdb89a4c0e9->enter($__internal_a90c977fa095956151aab91d6aba0d2609fdd28ba756af5d844adbdb89a4c0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9bc268ad6e21230214f99ed7684dd985c285ac6bc6fe46fb935caf472750aa33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc268ad6e21230214f99ed7684dd985c285ac6bc6fe46fb935caf472750aa33->enter($__internal_9bc268ad6e21230214f99ed7684dd985c285ac6bc6fe46fb935caf472750aa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_9bc268ad6e21230214f99ed7684dd985c285ac6bc6fe46fb935caf472750aa33->leave($__internal_9bc268ad6e21230214f99ed7684dd985c285ac6bc6fe46fb935caf472750aa33_prof);

        
        $__internal_a90c977fa095956151aab91d6aba0d2609fdd28ba756af5d844adbdb89a4c0e9->leave($__internal_a90c977fa095956151aab91d6aba0d2609fdd28ba756af5d844adbdb89a4c0e9_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c1b748438fb396fc8907bb75d96d6e0f987225e62b52a3051a132a498834419a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b748438fb396fc8907bb75d96d6e0f987225e62b52a3051a132a498834419a->enter($__internal_c1b748438fb396fc8907bb75d96d6e0f987225e62b52a3051a132a498834419a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_79927c96b12c45e1d2ac7f726396cda3b62e799c681ca1468d054c5b6551935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79927c96b12c45e1d2ac7f726396cda3b62e799c681ca1468d054c5b6551935a->enter($__internal_79927c96b12c45e1d2ac7f726396cda3b62e799c681ca1468d054c5b6551935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_79927c96b12c45e1d2ac7f726396cda3b62e799c681ca1468d054c5b6551935a->leave($__internal_79927c96b12c45e1d2ac7f726396cda3b62e799c681ca1468d054c5b6551935a_prof);

        
        $__internal_c1b748438fb396fc8907bb75d96d6e0f987225e62b52a3051a132a498834419a->leave($__internal_c1b748438fb396fc8907bb75d96d6e0f987225e62b52a3051a132a498834419a_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bfef4073d9e32ac78332c6a7abfc643b6dab7c1f3525bf319bd75471811a343b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfef4073d9e32ac78332c6a7abfc643b6dab7c1f3525bf319bd75471811a343b->enter($__internal_bfef4073d9e32ac78332c6a7abfc643b6dab7c1f3525bf319bd75471811a343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d92f77bb799196deb27b8966994214f87a945db7e05a11396f2b44f5e284a17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92f77bb799196deb27b8966994214f87a945db7e05a11396f2b44f5e284a17e->enter($__internal_d92f77bb799196deb27b8966994214f87a945db7e05a11396f2b44f5e284a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d92f77bb799196deb27b8966994214f87a945db7e05a11396f2b44f5e284a17e->leave($__internal_d92f77bb799196deb27b8966994214f87a945db7e05a11396f2b44f5e284a17e_prof);

        
        $__internal_bfef4073d9e32ac78332c6a7abfc643b6dab7c1f3525bf319bd75471811a343b->leave($__internal_bfef4073d9e32ac78332c6a7abfc643b6dab7c1f3525bf319bd75471811a343b_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_534251e56103822d7131e6127febcf8380a119e2e9e3023f58d928fe48108fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534251e56103822d7131e6127febcf8380a119e2e9e3023f58d928fe48108fed->enter($__internal_534251e56103822d7131e6127febcf8380a119e2e9e3023f58d928fe48108fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_273ef6f429baef9c6fa3ef511799dc9c4d3b730ffae0544fb70cd91b3470fc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273ef6f429baef9c6fa3ef511799dc9c4d3b730ffae0544fb70cd91b3470fc98->enter($__internal_273ef6f429baef9c6fa3ef511799dc9c4d3b730ffae0544fb70cd91b3470fc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_273ef6f429baef9c6fa3ef511799dc9c4d3b730ffae0544fb70cd91b3470fc98->leave($__internal_273ef6f429baef9c6fa3ef511799dc9c4d3b730ffae0544fb70cd91b3470fc98_prof);

        
        $__internal_534251e56103822d7131e6127febcf8380a119e2e9e3023f58d928fe48108fed->leave($__internal_534251e56103822d7131e6127febcf8380a119e2e9e3023f58d928fe48108fed_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c65d69c172e5949b15602ecedb7c57d6de971c0aa2151c9f437755038b05fbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65d69c172e5949b15602ecedb7c57d6de971c0aa2151c9f437755038b05fbf1->enter($__internal_c65d69c172e5949b15602ecedb7c57d6de971c0aa2151c9f437755038b05fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f9ec7061beec270d1328471df589b65c29c99e51354eab1572ec499359bd1f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ec7061beec270d1328471df589b65c29c99e51354eab1572ec499359bd1f19->enter($__internal_f9ec7061beec270d1328471df589b65c29c99e51354eab1572ec499359bd1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_f9ec7061beec270d1328471df589b65c29c99e51354eab1572ec499359bd1f19->leave($__internal_f9ec7061beec270d1328471df589b65c29c99e51354eab1572ec499359bd1f19_prof);

        
        $__internal_c65d69c172e5949b15602ecedb7c57d6de971c0aa2151c9f437755038b05fbf1->leave($__internal_c65d69c172e5949b15602ecedb7c57d6de971c0aa2151c9f437755038b05fbf1_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0bab943d7ea40947fda06be55540b05fbbb62d3eab58f169aab58d90dd1369be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bab943d7ea40947fda06be55540b05fbbb62d3eab58f169aab58d90dd1369be->enter($__internal_0bab943d7ea40947fda06be55540b05fbbb62d3eab58f169aab58d90dd1369be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0dd753f76cea1ed3828cf9adf8acd8f2a481d22f9a57439b51a00a61693f9b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd753f76cea1ed3828cf9adf8acd8f2a481d22f9a57439b51a00a61693f9b2f->enter($__internal_0dd753f76cea1ed3828cf9adf8acd8f2a481d22f9a57439b51a00a61693f9b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0dd753f76cea1ed3828cf9adf8acd8f2a481d22f9a57439b51a00a61693f9b2f->leave($__internal_0dd753f76cea1ed3828cf9adf8acd8f2a481d22f9a57439b51a00a61693f9b2f_prof);

        
        $__internal_0bab943d7ea40947fda06be55540b05fbbb62d3eab58f169aab58d90dd1369be->leave($__internal_0bab943d7ea40947fda06be55540b05fbbb62d3eab58f169aab58d90dd1369be_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_aa65881361f0eafcf6e4501843db98e570042f469c2eadee81e08148f3cd0aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa65881361f0eafcf6e4501843db98e570042f469c2eadee81e08148f3cd0aa8->enter($__internal_aa65881361f0eafcf6e4501843db98e570042f469c2eadee81e08148f3cd0aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8dba16b03e514d5b6a63cb85029936f6318c372ac0ed8f5a1f16614fa32e803f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dba16b03e514d5b6a63cb85029936f6318c372ac0ed8f5a1f16614fa32e803f->enter($__internal_8dba16b03e514d5b6a63cb85029936f6318c372ac0ed8f5a1f16614fa32e803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8dba16b03e514d5b6a63cb85029936f6318c372ac0ed8f5a1f16614fa32e803f->leave($__internal_8dba16b03e514d5b6a63cb85029936f6318c372ac0ed8f5a1f16614fa32e803f_prof);

        
        $__internal_aa65881361f0eafcf6e4501843db98e570042f469c2eadee81e08148f3cd0aa8->leave($__internal_aa65881361f0eafcf6e4501843db98e570042f469c2eadee81e08148f3cd0aa8_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_baab53e93912f4b95c6c5807ab49cb55134bbdb8653afe2ab574c046a81e37ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baab53e93912f4b95c6c5807ab49cb55134bbdb8653afe2ab574c046a81e37ec->enter($__internal_baab53e93912f4b95c6c5807ab49cb55134bbdb8653afe2ab574c046a81e37ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_536acd8e05a86627f091e70b7fe9585e0460568719e83ea4eb39420c28b80ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536acd8e05a86627f091e70b7fe9585e0460568719e83ea4eb39420c28b80ce6->enter($__internal_536acd8e05a86627f091e70b7fe9585e0460568719e83ea4eb39420c28b80ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_536acd8e05a86627f091e70b7fe9585e0460568719e83ea4eb39420c28b80ce6->leave($__internal_536acd8e05a86627f091e70b7fe9585e0460568719e83ea4eb39420c28b80ce6_prof);

        
        $__internal_baab53e93912f4b95c6c5807ab49cb55134bbdb8653afe2ab574c046a81e37ec->leave($__internal_baab53e93912f4b95c6c5807ab49cb55134bbdb8653afe2ab574c046a81e37ec_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_140087c660bf3306621902ed6ee19700661df0ef6346cfb6f9f7b6fc16e9aaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140087c660bf3306621902ed6ee19700661df0ef6346cfb6f9f7b6fc16e9aaca->enter($__internal_140087c660bf3306621902ed6ee19700661df0ef6346cfb6f9f7b6fc16e9aaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8659ab4b2e6d8890e35aafedc27992c072664f4b98fd2bdf60e7beafb6ec74d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8659ab4b2e6d8890e35aafedc27992c072664f4b98fd2bdf60e7beafb6ec74d3->enter($__internal_8659ab4b2e6d8890e35aafedc27992c072664f4b98fd2bdf60e7beafb6ec74d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8659ab4b2e6d8890e35aafedc27992c072664f4b98fd2bdf60e7beafb6ec74d3->leave($__internal_8659ab4b2e6d8890e35aafedc27992c072664f4b98fd2bdf60e7beafb6ec74d3_prof);

        
        $__internal_140087c660bf3306621902ed6ee19700661df0ef6346cfb6f9f7b6fc16e9aaca->leave($__internal_140087c660bf3306621902ed6ee19700661df0ef6346cfb6f9f7b6fc16e9aaca_prof);

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
