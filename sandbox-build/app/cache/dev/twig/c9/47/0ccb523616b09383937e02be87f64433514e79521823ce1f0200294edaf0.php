<?php

/* SonataCustomerBundle:Block:recent_customers.html.twig */
class __TwigTemplate_c9470ccb523616b09383937e02be87f64433514e79521823ce1f0200294edaf0 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "    <div class=\"sonata-customer-block-recent-customer panel panel-default\">
        ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 16
            echo "            <div class=\"panel-heading\">
                <h3 class=\"sonata-customer-block-recent-customer panel-title\"><i class=\"fa fa-user\"></i> ";
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
        if ((twig_length_filter($this->env, (isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers"))) > 0)) {
            // line 23
            echo "                <div class=\"sonata-customer-block-customer-container list-group\">
                    ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 25
                echo "                        <a class=\"list-group-item\"
                           href=\"
                            ";
                // line 27
                if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                    // line 28
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_customer_customer_edit", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 30
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_customer_view", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
                    echo "
                            ";
                }
                // line 32
                echo "                            \">
                            ";
                // line 33
                echo twig_escape_filter($this->env, $context["customer"], "html", null, true);
                echo " - ";
                echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute($context["customer"], "createdAt", array()));
                echo "
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </div>
            ";
        } else {
            // line 38
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_customer_found", array(), "SonataCustomerBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
            // line 42
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_sonata_customer_customer_list");
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i>&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_customers", array(), "SonataCustomerBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 44
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataCustomerBundle:Block:recent_customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  104 => 42,  102 => 41,  99 => 40,  93 => 38,  89 => 36,  78 => 33,  75 => 32,  69 => 30,  63 => 28,  61 => 27,  57 => 25,  53 => 24,  50 => 23,  48 => 22,  44 => 20,  38 => 17,  35 => 16,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
    }
}
