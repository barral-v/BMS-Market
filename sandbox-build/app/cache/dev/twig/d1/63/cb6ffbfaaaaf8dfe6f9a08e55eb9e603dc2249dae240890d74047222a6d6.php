<?php

/* SonataOrderBundle:Block:recent_orders.html.twig */
class __TwigTemplate_d163cb6ffbfaaaaf8dfe6f9a08e55eb9e603dc2249dae240890d74047222a6d6 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "
    <div class=\"sonata-order-block-recent-order panel panel-default\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h3 class=\"panel-title sonata-order-block-recent-order\"><i class=\"fa fa-barcode\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
            </div>
        ";
        }
        // line 21
        echo "

        <div class=\"panel-body\">

            ";
        // line 25
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the recent orders list block.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 26
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) > 0)) {
            // line 27
            echo "                <table class=\"sonata-order-block-order-container table table-condensed\">
                    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 29
                echo "                        <tr>
                            ";
                // line 30
                if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                    // line 31
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_order_order_edit", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "reference", array()), "html", null, true);
                    echo "</a></td>
                            ";
                } else {
                    // line 33
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_order_view", array("reference" => $this->getAttribute($context["order"], "reference", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "reference", array()), "html", null, true);
                    echo "</a></td>
                            ";
                }
                // line 35
                echo "                            <td class=\"number\">";
                echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute($context["order"], "totalInc", array()), $this->getAttribute($this->getAttribute($context["order"], "currency", array()), "label", array()));
                echo "</td>
                            <td><span class=\"label";
                // line 36
                echo twig_escape_filter($this->env, (($this->env->getExtension('sonata_core_status')->statusClass($context["order"], null, "danger")) ? ((" label-" . $this->env->getExtension('sonata_core_status')->statusClass($context["order"], null, "danger"))) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["order"], "statusName", array()), array(), "SonataOrderBundle"), "html", null, true);
                echo "</span></td>
                            <td>";
                // line 37
                echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute($context["order"], "createdAt", array()), null, $this->getAttribute($context["order"], "locale", array()));
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </table>

                ";
            // line 42
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                // line 43
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getUrl("admin_sonata_order_order_list");
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i>&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_orders", array(), "SonataOrderBundle"), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 45
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getUrl("sonata_order_index");
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i>&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_orders", array(), "SonataOrderBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 47
            echo "            ";
        } else {
            // line 48
            echo "                ";
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                // line 49
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_order_found", array(), "SonataOrderBundle"), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 51
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.order.list.no_orders", array(), "SonataOrderBundle"), "html", null, true);
                echo "</p>
                ";
            }
            // line 53
            echo "            ";
        }
        // line 54
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataOrderBundle:Block:recent_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  146 => 53,  140 => 51,  134 => 49,  131 => 48,  128 => 47,  120 => 45,  112 => 43,  110 => 42,  106 => 40,  97 => 37,  91 => 36,  86 => 35,  78 => 33,  70 => 31,  68 => 30,  65 => 29,  61 => 28,  58 => 27,  55 => 26,  51 => 25,  45 => 21,  39 => 18,  36 => 17,  34 => 16,  30 => 14,  27 => 13,  18 => 11,);
    }
}
