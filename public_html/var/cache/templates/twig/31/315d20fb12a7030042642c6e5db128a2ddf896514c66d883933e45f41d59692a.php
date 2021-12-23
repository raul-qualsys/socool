<?php

/* __string_template__a0839bca20d070c127c7f43514d4fa98b8b08f66a4eeb61f3e7ee58dd88a1f51 */
class __TwigTemplate_a1e6089fd4cf4dc595099d40b6b427e167cfd81365b5dd26f26a65d6aeedcc0b extends Twig_Template
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
        echo "
    ";
        // line 2
        if ((((((($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_firstname", array()) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_lastname", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address_2", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_city", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_state_descr", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_zipcode", array()))) {
            // line 3
            echo "    <h3 style=\" padding: 0px 0px 10px 1px; font-weight: 600; font-size: 15px; font-family: Helvetica, Arial, sans-serif; border-bottom: 1px solid #ededed;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "bill_to");
            echo ":</h3>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
            // line 5
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_firstname", array());
            echo " ";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_lastname", array());
            echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
            // line 8
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address", array());
            echo " <br>";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address_2", array());
            echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
            // line 11
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_city", array());
            echo ", ";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_state_descr", array());
            echo " ";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_zipcode", array());
            echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
            // line 14
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_country_descr", array());
            echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        <bdi>";
            // line 17
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_phone", array());
            echo "</bdi>
    </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__a0839bca20d070c127c7f43514d4fa98b8b08f66a4eeb61f3e7ee58dd88a1f51";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 14,  46 => 11,  38 => 8,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/*     {% if u.b_firstname or u.b_lastname or u.b_address or u.b_address_2 or u.b_city or u.b_state_descr or u.b_zipcode %}*/
/*     <h3 style=" padding: 0px 0px 10px 1px; font-weight: 600; font-size: 15px; font-family: Helvetica, Arial, sans-serif; border-bottom: 1px solid #ededed;">{{__("bill_to")}}:</h3>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.b_firstname}} {{u.b_lastname}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.b_address}} <br>{{u.b_address_2}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.b_city}}, {{u.b_state_descr}} {{u.b_zipcode}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.b_country_descr}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         <bdi>{{u.b_phone}}</bdi>*/
/*     </p>*/
/*     {% endif %}*/
/* */
