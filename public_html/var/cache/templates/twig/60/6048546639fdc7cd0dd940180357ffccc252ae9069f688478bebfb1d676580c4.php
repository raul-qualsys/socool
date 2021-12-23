<?php

/* __string_template__e8bb33062a741e57021ecb192e5d8456b518f3a7efc72c6acf029b1e81f5723c */
class __TwigTemplate_e16d56755017501d694145fa13c25b482e70e9bfcd46f3d82db8730125ea757d extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "comments", array())) {
            // line 2
            echo "<div style=\"float: left; padding-top: 20px; font-family: Helvetica, Arial, sans-serif;\"><strong>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "comments");
            echo ":</strong></div>
<div style=\"padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;\">";
            // line 3
            echo nl2br(twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "comments", array()), 90, "
"), "html", null, true));
            echo "</div>
";
        } elseif ($this->getAttribute(        // line 4
(isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 5
            echo "<div style=\"float: left; padding-top: 20px;\"><strong>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "notes");
            echo ":</strong></div>
<div style=\"padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;\">";
            // line 6
            echo twig_wordwrap_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array()), 90, "
");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__e8bb33062a741e57021ecb192e5d8456b518f3a7efc72c6acf029b1e81f5723c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  33 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if o.shipment.comments %}*/
/* <div style="float: left; padding-top: 20px; font-family: Helvetica, Arial, sans-serif;"><strong>{{ __("comments") }}:</strong></div>*/
/* <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;">{{ o.shipment.comments|wordwrap(90,"\n")|nl2br }}</div>*/
/* {% elseif o.notes %}*/
/* <div style="float: left; padding-top: 20px;"><strong>{{ __("notes") }}:</strong></div>*/
/* <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;">{{ o.notes|wordwrap(90, "\n") }}</div>*/
/* {% endif %}*/
