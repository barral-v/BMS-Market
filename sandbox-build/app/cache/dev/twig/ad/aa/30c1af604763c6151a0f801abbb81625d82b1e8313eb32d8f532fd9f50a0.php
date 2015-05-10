<?php

/* SonataProductBundle:Block:variations_choice.html.twig */
class __TwigTemplate_adaa30c1af604763c6151a0f801abbb81625d82b1e8313eb32d8f532fd9f50a0 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_variation_javascript_init' => array($this, 'block_product_variation_javascript_init'),
            'product_variation_form' => array($this, 'block_product_variation_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('product_variation_javascript_init', $context, $blocks);
        // line 32
        echo "

";
        // line 34
        $this->displayBlock('product_variation_form', $context, $blocks);
    }

    // line 12
    public function block_product_variation_javascript_init($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ( !((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) === null)) {
            // line 14
            echo "        ";
            $context["variationIds"] = array();
            // line 15
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formItem"]) {
                // line 16
                echo "            ";
                $context["variationIds"] = twig_array_merge((isset($context["variationIds"]) ? $context["variationIds"] : $this->getContext($context, "variationIds")), array(0 => (("\$('#" . $this->getAttribute($this->getAttribute($context["formItem"], "vars", array()), "id", array())) . "')")));
                // line 17
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                Sonata.Product.setOptions({
                    variations: {
                        fields: [";
            // line 23
            echo twig_join_filter((isset($context["variationIds"]) ? $context["variationIds"] : $this->getContext($context, "variationIds")), ", ");
            echo "],
                        form: \$('#sonata_variation_form'),
                        unavailableError: \$('#sonata_variation_error')
                    }});
                Sonata.Product.initVariation();
            });
        </script>
    ";
        }
    }

    // line 34
    public function block_product_variation_form($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"alert alert-danger\" id=\"sonata_variation_error\"";
        if ( !($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "product", array()) === null)) {
            echo " style=\"display:none;\"";
        }
        echo ">";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "product", array()) === null)) {
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_product_found", array(), "SonataProductBundle");
        }
        echo "</div>

    ";
        // line 37
        if ( !($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "product", array()) === null)) {
            // line 38
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "form_route", array()), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "form_route_parameters", array())), "html", null, true);
            echo "\" id=\"sonata_variation_form\" class=\"form-horizontal\" role=\"form\">
            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Block:variations_choice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  94 => 38,  92 => 37,  80 => 35,  77 => 34,  64 => 23,  57 => 18,  51 => 17,  48 => 16,  43 => 15,  40 => 14,  37 => 13,  34 => 12,  30 => 34,  26 => 32,  24 => 12,  21 => 11,);
    }
}
