<?php

/* SonataDemoBundle:Block:newsletter_confirmation.html.twig */
class __TwigTemplate_837801a09a092788be207328236f1d69e809b306f22d091187bde2c35d950aac extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<div class=\"alert alert-success\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "SonataDemoBundle"), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "SonataDemoBundle:Block:newsletter_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
