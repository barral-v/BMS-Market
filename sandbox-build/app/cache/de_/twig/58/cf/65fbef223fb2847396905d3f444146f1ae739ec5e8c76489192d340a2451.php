<?php

/* SonataNewsBundle:Post:comments.html.twig */
class __TwigTemplate_58cf65fbef223fb2847396905d3f444146f1ae739ec5e8c76489192d340a2451 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 13
        echo "
<div class=\"sonata-blog-comment-container\">
    <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_comments", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h3>

    <ul class=\"sonata-blog-comment-list\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "results", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "            <li class=\"sonata-blog-comment\">
                <div class=\"sonata-blog-comment-name\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "url", array()), "html", null, true);
            echo "\" target=\"new\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
            echo "</a>
                </div>
                <div class=\"sonata-blog-comment-date\">
                    ";
            // line 24
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["comment"], "createdAt", array()));
            echo "
                </div>
                <div class=\"sonata-blog-comment-message\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
            echo "
                </div>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_comments_available", array(), "SonataNewsBundle"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  61 => 31,  52 => 27,  46 => 24,  38 => 21,  34 => 19,  29 => 18,  23 => 15,  19 => 13,);
    }
}
