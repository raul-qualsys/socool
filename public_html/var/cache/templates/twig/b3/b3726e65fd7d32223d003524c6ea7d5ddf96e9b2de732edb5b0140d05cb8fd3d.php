<?php

/* __string_template__f8616f975f3429f6ccc189f396f700a801e3d677f01c979e8df534e66a319ee0 */
class __TwigTemplate_952aa2af456968575f6b2958e9ae0f31a4d223f7f77d2d2d5f6b2b043af7aa54 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_p_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__f8616f975f3429f6ccc189f396f700a801e3d677f01c979e8df534e66a319ee0";
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
/* {{ company_name }}: {{ __("change_order_status_p_subj", {"[order]": order_info.order_id}) }}*/
