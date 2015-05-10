<?php

/* SonataProductBundle:Catalog:grid.html.twig */
class __TwigTemplate_33635000c8c2fc7fa98e434524d9d22740d093accd20ab37e44635df385d9593 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
<div class=\"panel-body product-grid\">

    ";
        // line 14
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the product grid list template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "
        ";
            // line 18
            if (( !$this->env->getExtension('sonata_product')->hasVariations($context["product"]) || ($this->env->getExtension('sonata_product')->hasVariations($context["product"]) && $this->env->getExtension('sonata_product')->hasEnabledVariations($context["product"])))) {
                // line 19
                echo "
            <div class=\"col-sm-4\" itemscope itemtype=\"http://schema.org/Product\">
                ";
                // line 21
                $this->env->loadTemplate("SonataProductBundle:Catalog:_product_grid.html.twig")->display($context);
                // line 22
                echo "            </div>

        ";
            }
            // line 25
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Catalog:grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  64 => 25,  59 => 22,  57 => 21,  53 => 19,  51 => 18,  48 => 17,  31 => 16,  28 => 15,  24 => 14,  19 => 11,);
    }
}
