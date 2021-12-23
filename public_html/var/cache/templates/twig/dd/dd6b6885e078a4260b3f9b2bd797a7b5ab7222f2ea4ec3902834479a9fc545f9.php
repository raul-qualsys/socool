<?php

/* __string_template__c8576f8d40fd9a8b49c517f5ec50303448605d2add5e8b5e08c68c57e012f905 */
class __TwigTemplate_bd2890e283f08d3e23d5f0015baee2a523f960118fa3870a434631e557aec3d1 extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__c8576f8d40fd9a8b49c517f5ec50303448605d2add5e8b5e08c68c57e012f905";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;">{{ p.product_code }}</p>*/
