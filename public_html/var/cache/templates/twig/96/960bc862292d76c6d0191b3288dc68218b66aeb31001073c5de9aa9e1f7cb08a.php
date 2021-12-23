<?php

/* __string_template__0dc8ceb1b01b97fde6ae74a6bb0bef659f92967ed186169ce74e3411445640c5 */
class __TwigTemplate_ae08e9b4dd387325497cb040c3891ff6231f45b3fb56e8c94aa65033ff88deaa extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "

  ";
        // line 3
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
        echo " ";
        echo $this->getAttribute((isset($context["send_data"]) ? $context["send_data"] : null), "to_name", array());
        echo ",<br /><br />

";
        // line 5
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_recommendation_notes");
        echo "<br />
<a href=\"";
        // line 6
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["link"]) ? $context["link"] : null));
        echo "</a><br /><br />
<b>";
        // line 7
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "notes");
        echo ":</b><br />
";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["send_data"]) ? $context["send_data"] : null), "notes", array()), "html", null, true));
        echo "

";
        // line 10
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0dc8ceb1b01b97fde6ae74a6bb0bef659f92967ed186169ce74e3411445640c5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  45 => 8,  41 => 7,  35 => 6,  31 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/*   {{ __("hello") }} {{ send_data.to_name }},<br /><br />*/
/* */
/* {{ __("text_recommendation_notes") }}<br />*/
/* <a href="{{ link }}">{{ link|puny_decode }}</a><br /><br />*/
/* <b>{{ __("notes") }}:</b><br />*/
/* {{ send_data.notes|nl2br }}*/
/* */
/* {{ snippet("footer") }}*/
/* */
