<?php

/* SonataPageBundle:PageAdmin:compose_hint.html.twig */
class __TwigTemplate_ed275ccb15c1cdd907c1f34dd31e05baa004287b14093d33014f44fa03f5c4a4 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<div class=\"alert alert-warning\">
    <strong>Warning!</strong> Before using the composer option, you need to configure the template layout.
    <br>The configuration must be done in the <code>sonata_page.templates</code> section.<br>

    <br>
    See a complete exemple here:

<pre>
sonata_page:
    # [...]
    templates:
        default:
            path: 'ApplicationSonataPageBundle::demo_layout.html.twig'
            name: 'default'
            containers:
                header:
                    name: Header
                content_top:
                    name: Top content
                content:
                    name: Main content
                content_bottom:
                    name: Bottom content
                footer:
                    name: Footer
            matrix:
                layout: |
                    HHHHHHHH
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    CCCCCCCC
                    CCCCCCCC
                    FFFFFFFF

                mapping:
                    H: header
                    T: content_top
                    C: content
                    B: content_bottom
                    F: footer
</pre>
</div>";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:compose_hint.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
