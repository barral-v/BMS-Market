<?php

/* SonataPageBundle:Block:block_core_children_pages.html.twig */
class __TwigTemplate_6f2eee95a6dabfbbb088e4e458dbb893dfc22a0bc2460d6f00bae0350b8bca8b extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-page-menu-container ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        echo "\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>";
        }
        // line 17
        echo "
        <ul class=\"sonata-page-menu-chilren-list\">
            ";
        // line 19
        if ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))) {
            // line 20
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 21
                echo "                    <li class=\"sonata-page-menu-children-element\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath($context["child"]);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_core_children_pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  65 => 23,  52 => 21,  47 => 20,  45 => 19,  41 => 17,  35 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }
}
