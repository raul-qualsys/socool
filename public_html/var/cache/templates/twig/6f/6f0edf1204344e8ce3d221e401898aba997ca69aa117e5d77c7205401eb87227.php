<?php

/* __string_template__a1ebfd60c6086d17711352d1a42755e9dd929de0d8b33dbd563531c672568a1b */
class __TwigTemplate_5917fc13eb5a72dacac69f580f011688f81d0a31071c912f6758bfce14d2c8ad extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_c_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__a1ebfd60c6086d17711352d1a42755e9dd929de0d8b33dbd563531c672568a1b";
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
/* {{ company_name }}: {{ __("change_order_status_c_subj", {"[order]": order_info.order_id}) }}*/
