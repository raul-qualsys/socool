<?php

/* __string_template__64bc870a4c3e59a3b4f8965ae1cc32215cb593c1af9a6b5f7cd8584c0c20f04b */
class __TwigTemplate_46ab2be475539217587f05af146aaff856e015346683dfae2c8dc9240ffb54fb extends Twig_Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <strong>";
        // line 3
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_lastname", array());
        echo "</strong>
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address", array());
        echo " <br>";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address_2", array());
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 9
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_city", array());
        echo ", ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_state_descr", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_zipcode", array());
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_country_descr", array());
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <bdi>";
        // line 15
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_phone", array());
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__64bc870a4c3e59a3b4f8965ae1cc32215cb593c1af9a6b5f7cd8584c0c20f04b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 12,  41 => 9,  33 => 6,  25 => 3,  19 => 1,);
    }
}
/* <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;">{{__("ship_to")}}</h2>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <strong>{{u.s_firstname}} {{u.s_lastname}}</strong>*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_address}} <br>{{u.s_address_2}}*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_country_descr}}*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <bdi>{{u.s_phone}}</bdi>*/
/*     </p>*/
/* */
