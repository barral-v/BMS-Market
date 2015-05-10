<?php

/* SonataPageBundle:PageAdmin:list.html.twig */
class __TwigTemplate_41a1f89766f80405a35a38344c8f1cac49d66e563d6006494ec01a95a92d0171 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->env->loadTemplate("SonataPageBundle:PageAdmin:list_tab_menu.html.twig")->display(array("mode" => "list", "action" =>         // line 17
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 18
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  41 => 17,  39 => 15,  36 => 14,  11 => 12,);
    }
}
