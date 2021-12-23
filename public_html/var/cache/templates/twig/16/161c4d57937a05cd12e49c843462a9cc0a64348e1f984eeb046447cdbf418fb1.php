<?php

/* __string_template__f0a56842b86c7608b007b19fd24951be6a6dc70858e02f491ddf9b499a43ba99 */
class __TwigTemplate_c7f65fb711fafec7d4ec9c2f1834cad357f48ce569b8a237842ca5030d51ee1c extends Twig_Template
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
        echo "<p style=\"font-family: Helvetica, Arial, sans-serif;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__f0a56842b86c7608b007b19fd24951be6a6dc70858e02f491ddf9b499a43ba99";
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
/* <p style="font-family: Helvetica, Arial, sans-serif;">{{ p.name }}</p>*/
