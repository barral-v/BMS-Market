<?php

/* SonataNewsBundle:Post:view.html.twig */
class __TwigTemplate_eeb9b6dd3ea0bcd75d47303fbc8a3710b53cd517563e8ccdbf7389f04b4f336e extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the post template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 15
        echo "
";
        // line 16
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 21
        echo "
<article class=\"sonata-blog-post-container\">
    <header>
        <div class=\"sonata-blog-post-date-container\">
            <h5>
                <i class=\"icon-calendar\"></i>
                ";
        // line 27
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publicationDateStart", array()));
        echo "
            </h5>
        </div>

        <h1 class=\"sonata-blog-post-title\">
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a>
            <span class=\"sonata-blog-post-author\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array())), "SonataNewsBundle"), "html", null, true);
        echo "</span>
        </h1>

        <div class=\"sonata-blog-post-information\">
            <div class=\"sonata-blog-post-tag-container\">
                <div class=\"sonata-blog-post-tag-title\">
                    ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array())) > 1)) {
            // line 40
            echo "                        <i class=\"icon-tags\"></i>
                    ";
        } else {
            // line 42
            echo "                        <i class=\"icon-tag\"></i>
                    ";
        }
        // line 44
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("published_under", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array())), array(), "SonataNewsBundle"), "html", null, true);
        echo "
                </div>
                <div class=\"sonata-blog-post-tag-list\">
                    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 48
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_tag", array("tag" => $this->getAttribute($context["tag"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div>
        </div>
    </header>

    <div class=\"sonata-blog-post-content\">
        ";
        // line 56
        echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "image", array()), "wide", array());
        // line 57
        echo "        ";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array());
        echo "
    </div>

    ";
        // line 60
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('sonata_page')->controller("SonataNewsBundle:Post:comments", array("postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), array());
        // line 61
        echo "
    ";
        // line 62
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "iscommentable", array())) {
            // line 63
            echo "        ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('sonata_page')->controller("SonataNewsBundle:Post:addCommentForm", array("postId" => $this->getAttribute(            // line 64
(isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "form" =>             // line 65
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))), array());
            // line 67
            echo "    ";
        } else {
            // line 68
            echo "        <div>
            ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_comments_are_closed", array(), "SonataNewsBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 72
        echo "</article>
";
    }

    // line 16
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "news_post", "post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 18,  144 => 17,  141 => 16,  136 => 72,  130 => 69,  127 => 68,  124 => 67,  122 => 65,  121 => 64,  119 => 63,  117 => 62,  114 => 61,  112 => 60,  105 => 57,  103 => 56,  95 => 50,  84 => 48,  80 => 47,  73 => 44,  69 => 42,  65 => 40,  63 => 39,  54 => 33,  48 => 32,  40 => 27,  32 => 21,  30 => 16,  27 => 15,  23 => 14,  20 => 13,);
    }
}
