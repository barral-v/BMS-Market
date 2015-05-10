<?php

/* SonataPageBundle:Page:create.html.twig */
class __TwigTemplate_f70ebe9c5f55ee77ea8165d2dd63c49f371c967f840e0739c777c68c8fd80d0b extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        try {
            $this->parent = $this->env->loadTemplate("SonataPageBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(11);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_page_not_found", array(), "SonataPageBundle"), "html", null, true);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div>
        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_page_not_found", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo"))), "SonataPageBundle"), "html", null, true);
        echo "</h2>

        ";
        // line 19
        if ((isset($context["creatable"]) ? $context["creatable"] : $this->getContext($context, "creatable"))) {
            // line 20
            echo "            <p>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_create", array("url" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo")), "siteId" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("create_page", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo"))), "SonataPageBundle"), "html", null, true);
            echo "</a>
            </p>
        ";
        } else {
            // line 24
            echo "            <p>
                ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_page_does_not_exist", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo"))), "SonataPageBundle"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 28
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  70 => 25,  67 => 24,  59 => 21,  56 => 20,  54 => 19,  49 => 17,  46 => 16,  43 => 15,  37 => 13,  11 => 11,);
    }
}
