<?php

/* __string_template__6bccb43fb379183860bc220488d764ae2375437cb3a7f1ab163ab5658b34c504 */
class __TwigTemplate_8187a5d8f88f7a1d62beb1a17f4448ca29f8e582a7f7f5492cc94a650283121e extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "amount", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__6bccb43fb379183860bc220488d764ae2375437cb3a7f1ab163ab5658b34c504";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.amount }}</strong></p>*/
