<?php

/* SonataBasketBundle:Basket:payment_address_step.html.twig */
class __TwigTemplate_33a599ee8bc906aec1ac9db2f42045584fc2742d0deebf558e98c9174ed03dd9 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_flash_messages' => array($this, 'block_sonata_flash_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the basket billing address step template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
";
        // line 14
        $this->displayBlock('sonata_flash_messages', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->env->loadTemplate("SonataBasketBundle:Basket:stepper.html.twig")->display(array_merge($context, array("step" => "billing")));
        // line 19
        echo "
";
        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataBasketBundle:Form:label.html.twig"));
        // line 21
        echo "
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"row\">
    ";
        // line 26
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "addresses", array(), "any", true, true)) {
            // line 27
            echo "        <div class=\"col-sm-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <h4>";
            // line 31
            echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.delivery_use_existing_title", array(), "SonataBasketBundle");
            echo "</h4>
                    </div>
                </div>
                <ul class=\"list-group\">
                    ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 36
                echo "                        <li class=\"list-group-item\">
                            <div class=\"radio\">
                                <label for=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["address"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                                    ";
                // line 39
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["address"], 'widget', array("checked" => twig_in_filter($this->getAttribute($this->getAttribute($context["address"], "vars", array()), "value", array()), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresses", array()), "vars", array()), "preferred_choices", array())))));
                echo "
                                    ";
                // line 40
                echo $this->env->getExtension('sonata_address')->renderAddress($this->env, $this->getAttribute($this->getAttribute($context["address"], "vars", array()), "label", array()), true, true);
                echo "
                                </label>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </ul>
                <div class=\"panel-body\">
                    ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useSelected", array()), 'widget', array("attr" => array("class" => "pull-right btn btn-primary")));
            echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <h4>";
            // line 55
            echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.billing_create_new_title", array(), "SonataBasketBundle");
            echo "</h4>
                    </div>
                </div>
                <div class=\"panel-body\">
                    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 64
            echo "        <div class=\"col-lg-12\">
            ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
        </div>
    ";
        }
        // line 68
        echo "</div>

<div class=\"well\">
    <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getUrl("sonata_basket_delivery");
        echo "\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-arrow-left\"></i>&nbsp;";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.link_previous_step", array(), "SonataBasketBundle");
        echo "</a>

    <button type=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.btn_update_payment_step", array(), "SonataBasketBundle"), "html", null, true);
        echo "&nbsp;<i class=\"glyphicon glyphicon-arrow-right icon-white\"></i></button>
</div>
";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 14
    public function block_sonata_flash_messages($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display(array_merge($context, array("domain" => "SonataCustomerBundle")));
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Basket:payment_address_step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 15,  159 => 14,  153 => 75,  148 => 73,  141 => 71,  136 => 68,  130 => 65,  127 => 64,  119 => 59,  112 => 55,  101 => 47,  97 => 45,  86 => 40,  82 => 39,  78 => 38,  74 => 36,  70 => 35,  63 => 31,  57 => 27,  55 => 26,  49 => 23,  45 => 22,  42 => 21,  40 => 20,  37 => 19,  35 => 18,  32 => 17,  30 => 14,  27 => 13,  23 => 12,  20 => 11,);
    }
}
