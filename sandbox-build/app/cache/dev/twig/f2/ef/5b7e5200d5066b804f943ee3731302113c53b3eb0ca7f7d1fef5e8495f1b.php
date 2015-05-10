<?php

/* SonataBasketBundle:Basket:delivery_address_step.html.twig */
class __TwigTemplate_f2ef5b7e5200d5066b804f943ee3731302113c53b3eb0ca7f7d1fef5e8495f1b extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    <strong>This is the basket delivery address step template. Feel free to override it.</strong>
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataBasketBundle:Form:label.html.twig"));
        // line 21
        echo "
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "class" => "form-horizontal")));
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
            echo "            <div class=\"col-sm-6\">
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
            $context["has_deliverable"] = false;
            // line 36
            echo "
                    ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 38
                echo "                        ";
                $context["deliverable"] = $this->env->getExtension('sonata_address')->isAddressDeliverable($this->getAttribute((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")), "get", array(0 => $this->getAttribute($this->getAttribute($context["address"], "vars", array()), "value", array())), "method"), (isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")));
                // line 39
                echo "                        ";
                if ((isset($context["deliverable"]) ? $context["deliverable"] : $this->getContext($context, "deliverable"))) {
                    // line 40
                    echo "                            ";
                    $context["has_deliverable"] = true;
                    // line 41
                    echo "                        ";
                }
                // line 42
                echo "
                        <li class=\"list-group-item\">
                            <div class=\"radio\">
                                ";
                // line 45
                if ((false == (isset($context["deliverable"]) ? $context["deliverable"] : $this->getContext($context, "deliverable")))) {
                    // line 46
                    echo "                                    <span class=\"label label-danger\">
                                        ";
                    // line 47
                    echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.message_country_not_delivery_zone", array(), "SonataBasketBundle");
                    // line 48
                    echo "                                    </span>
                                ";
                }
                // line 50
                echo "
                                <label for=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["address"], "vars", array()), "id", array()), "html", null, true);
                echo "\"";
                if ((false == (isset($context["deliverable"]) ? $context["deliverable"] : $this->getContext($context, "deliverable")))) {
                    echo " class=\"disabled\"";
                }
                echo ">
                                    ";
                // line 52
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["address"], 'widget', array("checked" => twig_in_filter($this->getAttribute($this->getAttribute(                // line 53
$context["address"], "vars", array()), "value", array()), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresses", array()), "vars", array()), "preferred_choices", array()))), "disabled" => (false ==                 // line 54
(isset($context["deliverable"]) ? $context["deliverable"] : $this->getContext($context, "deliverable")))));
                // line 55
                echo "

                                    ";
                // line 57
                echo $this->env->getExtension('sonata_address')->renderAddress($this->env, $this->getAttribute($this->getAttribute($context["address"], "vars", array()), "label", array()), true, true, "delivery");
                echo "
                                </label>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </ul>

                    <div class=\"panel-body\">
                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useSelected", array()), 'widget', array("attr" => array("class" => "pull-right btn btn-primary"), "disabled" => (false ==             // line 67
(isset($context["has_deliverable"]) ? $context["has_deliverable"] : $this->getContext($context, "has_deliverable")))));
            // line 68
            echo "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">
                            <h4>";
            // line 76
            echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.delivery_create_new_title", array(), "SonataBasketBundle");
            echo "</h4>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 85
            echo "            <div class=\"col-sm-12\">
                ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            </div>
        ";
        }
        // line 89
        echo "    </div>

    <div class=\"well\">
        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getUrl("sonata_basket_index");
        echo "\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-arrow-left\"></i>&nbsp;";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.basket.link_previous_step", array(), "SonataBasketBundle");
        echo "</a>

        <button type=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.btn_update_delivery_step", array(), "SonataBasketBundle"), "html", null, true);
        echo "&nbsp;<i class=\"glyphicon glyphicon-arrow-right icon-white\"></i></button>
    </div>
";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
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
        return "SonataBasketBundle:Basket:delivery_address_step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 15,  202 => 14,  196 => 96,  191 => 94,  184 => 92,  179 => 89,  173 => 86,  170 => 85,  162 => 80,  155 => 76,  145 => 68,  143 => 67,  142 => 65,  137 => 62,  126 => 57,  122 => 55,  120 => 54,  119 => 53,  118 => 52,  110 => 51,  107 => 50,  103 => 48,  101 => 47,  98 => 46,  96 => 45,  91 => 42,  88 => 41,  85 => 40,  82 => 39,  79 => 38,  75 => 37,  72 => 36,  70 => 35,  63 => 31,  57 => 27,  55 => 26,  49 => 23,  45 => 22,  42 => 21,  40 => 20,  37 => 19,  35 => 18,  32 => 17,  30 => 14,  27 => 13,  23 => 12,  20 => 11,);
    }
}
