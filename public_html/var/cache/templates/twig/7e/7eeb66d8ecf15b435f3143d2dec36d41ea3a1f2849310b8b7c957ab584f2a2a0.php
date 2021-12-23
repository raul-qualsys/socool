<?php

/* __string_template__d9a036d907d678a00ad6c1c0829e69b354e831c737c0550797d80b09d7798452 */
class __TwigTemplate_1bc59aa3d19fa6335420d9a68424ab7cc118f97736eb6ec68921369147a3e2fe extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "amount", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__d9a036d907d678a00ad6c1c0829e69b354e831c737c0550797d80b09d7798452";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;">{{ p.amount }}</p>*/
