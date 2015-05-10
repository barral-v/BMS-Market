<?php

/* SonataCustomerBundle:Addresses:new.html.twig */
class __TwigTemplate_3fef77fbd832bb912e2abea3c2aba640c99539a7acbdceedeff1d7b0c6dd56b5 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(11);

            throw $e;
        }

        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("address_new", array(), "SonataCustomerBundle");
    }

    // line 15
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the customer address creation template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 18
        echo "
";
        // line 19
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SonataCustomerBundle:Form:label.html.twig"));
        // line 20
        echo "
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.customer.address.save", array(), "SonataCustomerBundle"), "html", null, true);
        echo "</button>
    </div>
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataCustomerBundle:Addresses:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  74 => 25,  69 => 23,  65 => 22,  61 => 21,  58 => 20,  56 => 19,  53 => 18,  49 => 17,  46 => 16,  43 => 15,  37 => 13,  11 => 11,);
    }
}
