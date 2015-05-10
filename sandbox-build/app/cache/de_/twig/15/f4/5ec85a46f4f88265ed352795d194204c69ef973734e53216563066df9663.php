<?php

/* SonataNewsBundle:Mail:comment_notification.txt.twig */
class __TwigTemplate_15f45ec85a46f4f88265ed352795d194204c69ef973734e53216563066df9663 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 2
        echo $this->env->getExtension('translator')->trans("mail_title_comment_notification", array("%post_title%" => $this->getAttribute(        // line 3
(isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "%blog_title%" => $this->getAttribute(        // line 4
(isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "%comment_message%" => $this->getAttribute(        // line 5
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "message", array()), "%comment_email%" => $this->getAttribute(        // line 6
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "email", array()), "%comment_url%" => $this->getAttribute(        // line 7
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "url", array()), "%comment_name%" => $this->getAttribute(        // line 8
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "name", array()), "%post_url%" => $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "permalinkGenerator", array()), "generate", array(0 => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))), "method")), true), "%comment_invalid_link%" => $this->env->getExtension('routing')->getUrl("sonata_news_comment_moderation", array("commentId" => $this->getAttribute(        // line 10
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "hash" => (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "status" => 0), true), "%comment_valid_link%" => $this->env->getExtension('routing')->getUrl("sonata_news_comment_moderation", array("commentId" => $this->getAttribute(        // line 11
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "hash" => (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "status" => 1), true)), "SonataNewsBundle");
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Mail:comment_notification.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  28 => 11,  27 => 10,  26 => 9,  25 => 8,  24 => 7,  23 => 6,  22 => 5,  21 => 4,  20 => 3,  19 => 2,);
    }
}
