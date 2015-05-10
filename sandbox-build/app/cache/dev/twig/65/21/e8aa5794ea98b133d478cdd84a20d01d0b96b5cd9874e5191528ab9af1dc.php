<?php

/* SonataBasketBundle:Form:label.html.twig */
class __TwigTemplate_6521e8aa5794ea98b133d478cdd84a20d01d0b96b5cd9874e5191528ab9af1dc extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MopaBootstrapBundle:Form:fields.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["translation_domain"] = "SonataBasketBundle";
        // line 5
        echo "    ";
        $context["label"] = (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        // line 6
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Form:label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
