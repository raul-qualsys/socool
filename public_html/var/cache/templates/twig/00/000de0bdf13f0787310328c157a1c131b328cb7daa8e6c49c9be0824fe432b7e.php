<?php

/* __string_template__4150bb76b98c101277dcad6cb83cea2e83b335b23b9ba0a4d03c673decb4daf0 */
class __TwigTemplate_ffc3514fc35b4740eb2abe96d7ac2ca8dd60c4c47cbd400d9ebaccf36ab5235f extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tax", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__4150bb76b98c101277dcad6cb83cea2e83b335b23b9ba0a4d03c673decb4daf0";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.tax }}</strong></p>*/
