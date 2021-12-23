<?php

/* __string_template__c4705d2e5c37fde9c43aeda65d02ca69230b76b14e95fb572bcf5fff047d6daa */
class __TwigTemplate_fbfadb023d4c7770229fc5d0356393e183a74062115f7e79bea49312b6587323 extends Twig_Template
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

  <table>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
        foreach ($context['_seq'] as $context["element_id"] => $context["element"]) {
            // line 5
            if (($this->getAttribute($context["element"], "element_type", array()) == twig_constant("FORM_SEPARATOR"))) {
                // line 6
                echo "<tr>
    <td colspan=\"2\"><hr width=\"100%\" /></td>
</tr>
";
            } elseif (($this->getAttribute(            // line 9
$context["element"], "element_type", array()) == twig_constant("FORM_HEADER"))) {
                // line 10
                echo "<tr>
    <td colspan=\"2\"><b>";
                // line 11
                echo $this->getAttribute($context["element"], "description", array());
                echo "</b></td>
</tr>
";
            } elseif (($this->getAttribute(            // line 13
$context["element"], "element_type", array()) != twig_constant("FORM_FILE"))) {
                // line 14
                echo "<tr>
    <td>";
                // line 15
                echo $this->getAttribute($context["element"], "description", array());
                echo ":&nbsp;</td>
    <td>
        ";
                // line 17
                $context["value"] = $this->getAttribute((isset($context["form_values"]) ? $context["form_values"] : null), $context["element_id"], array(), "array");
                // line 18
                echo "
        ";
                // line 19
                if ((($this->getAttribute($context["element"], "element_type", array()) == twig_constant("FORM_SELECT")) || ($this->getAttribute($context["element"], "element_type", array()) == twig_constant("FORM_RADIO")))) {
                    // line 20
                    echo "            ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "variants", array()), (isset($context["value"]) ? $context["value"] : null), array(), "array"), "description", array());
                    echo "
        ";
                } elseif (($this->getAttribute(                // line 21
$context["element"], "element_type", array()) == twig_constant("FORM_CHECKBOX"))) {
                    // line 22
                    echo "            ";
                    if (((isset($context["value"]) ? $context["value"] : null) == "Y")) {
                        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "yes");
                    } else {
                        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "no");
                    }
                    // line 23
                    echo "        ";
                } elseif (($this->getAttribute($context["element"], "element_type", array()) == twig_constant("FORM_TEXTAREA"))) {
                    // line 24
                    echo "            ";
                    echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
                    echo "
        ";
                } elseif (($this->getAttribute(                // line 25
$context["element"], "element_type", array()) == twig_constant("FORM_DATE"))) {
                    // line 26
                    echo "            ";
                    echo $this->env->getExtension('tygh.core')->dateFilter((isset($context["value"]) ? $context["value"] : null), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "Appearance", array()), "date_format", array()));
                    echo "
        ";
                } else {
                    // line 28
                    echo "            ";
                    echo (isset($context["value"]) ? $context["value"] : null);
                    echo "
        ";
                }
                // line 30
                echo "    </td>
</tr>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['element_id'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

";
        // line 36
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c4705d2e5c37fde9c43aeda65d02ca69230b76b14e95fb572bcf5fff047d6daa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  108 => 34,  99 => 30,  93 => 28,  87 => 26,  85 => 25,  80 => 24,  77 => 23,  70 => 22,  68 => 21,  63 => 20,  61 => 19,  58 => 18,  56 => 17,  51 => 15,  48 => 14,  46 => 13,  41 => 11,  38 => 10,  36 => 9,  31 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/*   <table>*/
/* {% for element_id, element in elements %}*/
/* {% if element.element_type == constant("FORM_SEPARATOR") %}*/
/* <tr>*/
/*     <td colspan="2"><hr width="100%" /></td>*/
/* </tr>*/
/* {% elseif element.element_type == constant("FORM_HEADER") %}*/
/* <tr>*/
/*     <td colspan="2"><b>{{ element.description }}</b></td>*/
/* </tr>*/
/* {% elseif element.element_type != constant("FORM_FILE") %}*/
/* <tr>*/
/*     <td>{{ element.description }}:&nbsp;</td>*/
/*     <td>*/
/*         {% set value=form_values[element_id] %}*/
/* */
/*         {% if element.element_type == constant("FORM_SELECT") or element.element_type == constant("FORM_RADIO") %}*/
/*             {{ element.variants[value].description }}*/
/*         {% elseif element.element_type == constant("FORM_CHECKBOX") %}*/
/*             {% if value == 'Y' %}{{ __("yes") }}{% else %}{{ __("no") }}{% endif %}*/
/*         {% elseif element.element_type == constant("FORM_TEXTAREA") %}*/
/*             {{ value|nl2br }}*/
/*         {% elseif element.element_type == constant("FORM_DATE") %}*/
/*             {{ value|date(settings.Appearance.date_format) }}*/
/*         {% else %}*/
/*             {{ value }}*/
/*         {% endif %}*/
/*     </td>*/
/* </tr>*/
/* {% endif %}*/
/* {% endfor %}*/
/* </table>*/
/* */
/* {{ snippet("footer") }}*/
