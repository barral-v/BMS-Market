<?php

/* SonataBasketBundle:Basket:payment_step.html.twig */
class __TwigTemplate_8c1bcf493ebd8da7261894500f4c67b79147a962654783af0fad8a0b77a10d05 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    <strong>This is the basket billing step template. Feel free to override it.</strong>
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
<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("sonata_basket_payment");
        echo "\" method=\"POST\" >
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <h4>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.title_address_billing_step_basket", array(), "SonataBasketBundle"), "html", null, true);
        echo "</h4>
                    </div>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 30
        echo $this->env->getExtension('sonata_address')->renderAddress($this->env, $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "billingAddress", array()));
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <h4>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.title_payment_method", array(), "SonataBasketBundle"), "html", null, true);
        echo "</h4>
                    </div>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentMethod", array()), 'errors');
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentMethod", array()), 'widget');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"well\">
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("sonata_basket_payment_address");
        echo "\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-arrow-left\"></i>&nbsp;";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.link_previous_step", array(), "SonataBasketBundle");
        echo "</a>

                <button type=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.btn_update_payment_step", array(), "SonataBasketBundle"), "html", null, true);
        echo "&nbsp;<i class=\"glyphicon glyphicon-arrow-right icon-white\"></i></button>
            </div>
        </div>
    </div>
</form>
";
    }

    // line 14
    public function block_sonata_flash_messages($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Basket:payment_step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 15,  111 => 14,  101 => 55,  94 => 53,  82 => 44,  78 => 43,  74 => 42,  67 => 38,  56 => 30,  49 => 26,  40 => 20,  37 => 19,  35 => 18,  32 => 17,  30 => 14,  27 => 13,  23 => 12,  20 => 11,);
    }
}
