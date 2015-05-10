<?php

/* SonataProductBundle:Goodie:view.html.twig */
class __TwigTemplate_e7db7cef90e9eed3295c4141c4eaf9c0d164ade26995606aa89f20be0bcb6c66 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Product:view.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(19);

            throw $e;
        }

        $this->blocks = array(
            'product_delivery' => array($this, 'block_product_delivery'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Product:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_product_delivery($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Goodie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 21,  11 => 19,);
    }
}
