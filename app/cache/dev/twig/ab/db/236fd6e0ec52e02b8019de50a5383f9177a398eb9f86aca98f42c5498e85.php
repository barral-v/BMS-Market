<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_abdb236fd6e0ec52e02b8019de50a5383f9177a398eb9f86aca98f42c5498e85 extends Twig_Template
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
        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Panier</li>
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
                ";
        // line 6
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 7
            echo "                    Aucun article dans votre panier
                ";
        } elseif (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 9
            echo "                    1 article dans votre panier
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " articles dans votre panier
                ";
        }
        // line 13
        echo "            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  39 => 11,  35 => 9,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
