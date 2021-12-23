<?php

/* __string_template__49cc9ae57690062b224ac7c4a9a058fda7bfd17078202a94e65ed2176cf13b35 */
class __TwigTemplate_c3bb4dac2acdbe8e2c2f245c67931e8ba11369f0fd2eedc22f2e2d61d3332c45 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "recommendation_from");
        echo " ";
        echo $this->getAttribute((isset($context["send_data"]) ? $context["send_data"] : null), "from_name", array());
    }

    public function getTemplateName()
    {
        return "__string_template__49cc9ae57690062b224ac7c4a9a058fda7bfd17078202a94e65ed2176cf13b35";
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
/* {{ __("recommendation_from") }} {{ send_data.from_name }}*/
