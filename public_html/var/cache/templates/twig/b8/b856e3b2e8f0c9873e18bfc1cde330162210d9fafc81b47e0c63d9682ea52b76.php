<?php

/* __string_template__58da20795d1ed501b3c798b9e50619b76206404456254d63db9f6f3d0bda19d9 */
class __TwigTemplate_07a7145933deb64d0ac89d17e5385be7b22e929ab0c55e29a4a2306d8223dc01 extends Twig_Template
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
        $context["parts"] = array(0 => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city", array()));
        // line 2
        if ($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "state_descr", array())) {
            // line 3
            echo "    ";
            $context["parts"] = twig_array_merge((isset($context["parts"]) ? $context["parts"] : null), array(0 => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "state_descr", array())));
        }
        // line 5
        echo "
";
        // line 6
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "address", array());
        echo " <br />
";
        // line 7
        echo twig_join_filter((isset($context["parts"]) ? $context["parts"] : null), ", ");
        echo " ";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "zipcode", array());
        echo "  <br />
";
        // line 8
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "country_descr", array());
    }

    public function getTemplateName()
    {
        return "__string_template__58da20795d1ed501b3c798b9e50619b76206404456254d63db9f6f3d0bda19d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 7,  30 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set parts = [c.city] %}*/
/* {% if c.state_descr %}*/
/*     {% set parts = parts|merge([c.state_descr]) %}*/
/* {% endif %}*/
/* */
/* {{ c.address }} <br />*/
/* {{ parts|join(', ') }} {{ c.zipcode }}  <br />*/
/* {{ c.country_descr }}*/
