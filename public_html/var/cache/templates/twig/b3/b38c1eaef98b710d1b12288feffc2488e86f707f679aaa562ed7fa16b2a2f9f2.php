<?php

/* __string_template__4c47e64fc473b919172590017f16d2fb71f4c0aa2fee0e213b97f5e84e38fd7a */
class __TwigTemplate_83eeaeeebfa75b30fa5097421e852ccb6e1e5bbbb18a501033c82e662e2c320b extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "new_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__4c47e64fc473b919172590017f16d2fb71f4c0aa2fee0e213b97f5e84e38fd7a";
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
/* {{ company_name }}: {{ __("new_profile_notification") }}*/
