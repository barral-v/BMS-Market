<?php

/* SonataProductBundle:Product:view_similar.html.twig */
class __TwigTemplate_fc44491193e05fab5569555857024c67d2179d9130f7d78bcccb922a98d7ab79 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        ob_start();
        // line 13
        echo "
    <div class=\"panel panel-primary\">

        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.product.cross_selling.title", array(), "SonataProductBundle");
        echo "</h3>
        </div>

        <div class=\"panel-body product-grid\">
            <div class=\"col-lg-12\">
                ";
        // line 22
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the similar product view template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 23
        echo "            </div>

            <div class=\"col-lg-12\">
                ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.product.block.similar_products", "settings" => array("title" => "", "number" => 4, "base_product_id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array())))));
        echo "
            </div>
        </div>

    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Product:view_similar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 26,  42 => 23,  38 => 22,  30 => 17,  24 => 13,  22 => 12,  19 => 11,);
    }
}
