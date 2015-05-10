<?php

/* SonataProductBundle:Catalog:index.html.twig */
class __TwigTemplate_32df285a3cc3af979af296123108296db128c54b11e048dbb71e0e7383cd51e7 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Catalog:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'products' => array($this, 'block_products'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Catalog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_products($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
        // line 17
        $this->env->resolveTemplate((("SonataProductBundle:Catalog:" . (isset($context["display_mode"]) ? $context["display_mode"] : $this->getContext($context, "display_mode"))) . ".html.twig"))->display($context);
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Catalog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  42 => 17,  39 => 16,  36 => 15,  11 => 12,);
    }
}
