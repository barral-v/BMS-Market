<?php

/* SonataProductBundle:Catalog:layout.html.twig */
class __TwigTemplate_cb8921f1a69444ac13e72f4d8b7fb73c7fa3756206f2773c99be44c13c85dc8f extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'product_category' => array($this, 'block_product_category'),
            'no_products' => array($this, 'block_no_products'),
            'products' => array($this, 'block_products'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the catalog template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
";
        // line 14
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 19
        echo "
<div class=\"row\">

    <div class=\"col-sm-3\">

        ";
        // line 24
        $this->displayBlock('product_category', $context, $blocks);
        // line 34
        echo "
        ";
        // line 36
        echo "            ";
        // line 37
        echo "                ";
        // line 38
        echo "                    ";
        // line 39
        echo "                ";
        // line 40
        echo "            ";
        // line 41
        echo "        ";
        // line 42
        echo "
    </div>

    <div class=\"col-sm-9\">

        ";
        // line 47
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count", array()) == 0)) {
            // line 48
            echo "
            ";
            // line 49
            $this->displayBlock('no_products', $context, $blocks);
            // line 54
            echo "
        ";
        } else {
            // line 56
            echo "
            <div class=\"panel panel-default sonata-product-navigation-bar\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <h4 class=\"panel-title\">
                                ";
            // line 62
            if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
                // line 63
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
                echo "
                                ";
            } else {
                // line 65
                echo "                                    ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("catalog_root_title", array(), "SonataProductBundle");
                // line 66
                echo "                                ";
            }
            // line 67
            echo "                            </h4>
                        </div>
                        <div class=\"col-sm-9\">
                            ";
            // line 70
            $this->env->loadTemplate("SonataProductBundle:Catalog:_pager.html.twig")->display($context);
            // line 71
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 75
            $this->displayBlock('products', $context, $blocks);
            // line 76
            echo "
                ";
            // line 77
            if (($this->getAttribute($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "paginationData", array()), "pageCount", array()) > 1)) {
                // line 78
                echo "                    <div class=\"panel-footer\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                ";
                // line 81
                $this->env->loadTemplate("SonataProductBundle:Catalog:_pager.html.twig")->display($context);
                // line 82
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 86
            echo "            </div>
        ";
        }
        // line 88
        echo "
    </div>

</div>
";
    }

    // line 14
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "catalog", "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    // line 24
    public function block_product_category($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.product.block.categories_menu", "settings" => array("current_uri" => $this->getAttribute($this->getAttribute(        // line 26
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()), "extra_cache_keys" => array("block_id" => "sonata.product.block.categories_menu", "updated_at" => "now"), "ttl" => 60))));
        // line 32
        echo "
        ";
    }

    // line 49
    public function block_no_products($context, array $blocks = array())
    {
        // line 50
        echo "                <div class=\"no-products-available\">
                    ";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_products_available", array(), "SonataProductBundle");
        // line 52
        echo "                </div>
            ";
    }

    // line 75
    public function block_products($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Catalog:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 75,  177 => 52,  175 => 51,  172 => 50,  169 => 49,  164 => 32,  162 => 26,  160 => 25,  157 => 24,  150 => 16,  147 => 15,  144 => 14,  136 => 88,  132 => 86,  126 => 82,  124 => 81,  119 => 78,  117 => 77,  114 => 76,  112 => 75,  106 => 71,  104 => 70,  99 => 67,  96 => 66,  93 => 65,  87 => 63,  85 => 62,  77 => 56,  73 => 54,  71 => 49,  68 => 48,  66 => 47,  59 => 42,  57 => 41,  55 => 40,  53 => 39,  51 => 38,  49 => 37,  47 => 36,  44 => 34,  42 => 24,  35 => 19,  33 => 14,  30 => 13,  26 => 12,  23 => 11,);
    }
}
