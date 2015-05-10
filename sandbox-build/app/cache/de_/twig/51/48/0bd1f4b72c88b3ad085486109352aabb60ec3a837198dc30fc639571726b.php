<?php

/* SonataNewsBundle:Block:recent_posts.html.twig */
class __TwigTemplate_51480bd1f4b72c88b3ad085486109352aabb60ec3a837198dc30fc639571726b extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 11
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sonata-news-block-recent-post panel panel-default\">
        ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 16
            echo "            <div class=\"panel-heading\">
                <h3 class=\"sonata-news-block-recent-post panel-title\"><i class=\"fa fa-pencil\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
            </div>
        ";
        }
        // line 20
        echo "
        <div class=\"panel-body\">
            ";
        // line 22
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the recent posts block.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 23
        echo "
            <div class=\"sonata-blog-post-container list-group\">
                ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "                    ";
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                // line 27
                echo "                        <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_news_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 28
                if ($this->getAttribute($context["post"], "ispublic", array())) {
                    // line 29
                    echo "                                <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post_is_public", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 31
                    echo "                                <span class=\"label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post_is_not_public", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 32
                echo "&nbsp;

                            ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute($context["post"], "author", array())), "SonataNewsBundle"), "html", null, true);
                echo " - ";
                echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["post"], "publicationDateStart", array()));
                echo "</a>
                    ";
            } else {
                // line 36
                echo "                        <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a> - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute($context["post"], "author", array())), "SonataNewsBundle"), "html", null, true);
                echo " - ";
                echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["post"], "publicationDateStart", array()));
                echo "
                    ";
            }
            // line 38
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                    <a class=\"list-group-item\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>

            ";
        // line 43
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
            // line 44
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_sonata_news_post_list");
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_posts", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_news_archive");
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_posts", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Block:recent_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  136 => 46,  128 => 44,  126 => 43,  122 => 41,  113 => 39,  108 => 38,  96 => 36,  87 => 34,  83 => 32,  77 => 31,  71 => 29,  69 => 28,  64 => 27,  61 => 26,  56 => 25,  52 => 23,  48 => 22,  44 => 20,  38 => 17,  35 => 16,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
    }
}
