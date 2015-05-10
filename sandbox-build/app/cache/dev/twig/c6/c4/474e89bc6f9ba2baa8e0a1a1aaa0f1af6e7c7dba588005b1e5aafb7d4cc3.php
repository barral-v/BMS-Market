<?php

/* SonataBasketBundle:Basket:delivery_step.html.twig */
class __TwigTemplate_c6c4474e89bc6f9ba2baa8e0a1a1aaa0f1af6e7c7dba588005b1e5aafb7d4cc3 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_flash_messages' => array($this, 'block_sonata_flash_messages'),
            'delivery_step' => array($this, 'block_delivery_step'),
            'selected_delivery_address' => array($this, 'block_selected_delivery_address'),
            'delivery_method_choice' => array($this, 'block_delivery_method_choice'),
            'delivery_submit' => array($this, 'block_delivery_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the basket delivery address template. Feel free to override it.</strong>
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
        $this->env->loadTemplate("SonataBasketBundle:Basket:stepper.html.twig")->display(array_merge($context, array("step" => "delivery")));
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('delivery_step', $context, $blocks);
    }

    // line 14
    public function block_sonata_flash_messages($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
    }

    // line 20
    public function block_delivery_step($context, array $blocks = array())
    {
        // line 21
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_basket_delivery");
        echo "\" method=\"POST\" >
        <div class=\"row\">
            ";
        // line 23
        $this->displayBlock('selected_delivery_address', $context, $blocks);
        // line 37
        echo "
            ";
        // line 38
        $this->displayBlock('delivery_method_choice', $context, $blocks);
        // line 54
        echo "        </div>

        ";
        // line 56
        $this->displayBlock('delivery_submit', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 23
    public function block_selected_delivery_address($context, array $blocks = array())
    {
        // line 24
        echo "                <div class=\"col-sm-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.title_address_delivery_step_basket", array(), "SonataBasketBundle"), "html", null, true);
        echo "</h4>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 32
        echo $this->env->getExtension('sonata_address')->renderAddress($this->env, $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "deliveryaddress", array()));
        echo "
                        </div>
                    </div>
                </div>
            ";
    }

    // line 38
    public function block_delivery_method_choice($context, array $blocks = array())
    {
        // line 39
        echo "                <div class=\"col-sm-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <h4>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.title_delivery_methods", array(), "SonataBasketBundle"), "html", null, true);
        echo "</h4>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deliveryMethod", array()), 'errors');
        echo "
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deliveryMethod", array()), 'widget');
        echo "
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>
                    </div>
                </div>
            ";
    }

    // line 56
    public function block_delivery_submit($context, array $blocks = array())
    {
        // line 57
        echo "            <div class=\"well\">
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getUrl("sonata_basket_delivery_address");
        echo "\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-arrow-left\"></i>&nbsp;";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.link_previous_step", array(), "SonataBasketBundle");
        echo "</a>

                    <button type=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.btn_update_delivery_step", array(), "SonataBasketBundle"), "html", null, true);
        echo "&nbsp;<i class=\"glyphicon glyphicon-arrow-right icon-white\"></i></button>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Basket:delivery_step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  147 => 58,  144 => 57,  141 => 56,  132 => 49,  128 => 48,  124 => 47,  117 => 43,  111 => 39,  108 => 38,  99 => 32,  92 => 28,  86 => 24,  83 => 23,  78 => 63,  76 => 56,  72 => 54,  70 => 38,  67 => 37,  65 => 23,  59 => 21,  56 => 20,  51 => 15,  48 => 14,  44 => 20,  41 => 19,  39 => 18,  36 => 17,  34 => 14,  31 => 13,  27 => 12,  24 => 11,);
    }
}
