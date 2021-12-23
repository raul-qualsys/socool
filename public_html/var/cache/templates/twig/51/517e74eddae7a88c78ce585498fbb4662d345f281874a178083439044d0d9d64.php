<?php

/* __string_template__e841881f644a701e4ab11f5fc7299db39c42fde23a9d30773e2616e3c331c001 */
class __TwigTemplate_5706db0ba2ebf0379740d18ba04b2c81ed204c7d4572461e52d2960ac39cd0cf extends Twig_Template
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
        echo "<table>
<tbody>
<tr>
    <td rowspan=\"2\" style=\"padding-right: 20px;\">";
        // line 4
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array());
        echo "
    </td>
    <td style=\"vertical-align: middle; text-align: left;\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: 600;\">";
        // line 6
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array());
        echo "</strong></span>
    </td>
</tr>
<tr>
    <td style=\"vertical-align: top; text-align: left;\"><span style=\"font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        // line 10
        if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array())) {
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array());
            echo "<br> ";
        }
        if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "options", array())) {
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "options", array());
        }
        echo "</span>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__e841881f644a701e4ab11f5fc7299db39c42fde23a9d30773e2616e3c331c001";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <table>*/
/* <tbody>*/
/* <tr>*/
/*     <td rowspan="2" style="padding-right: 20px;">{{ p.image }}*/
/*     </td>*/
/*     <td style="vertical-align: middle; text-align: left;"><span style="font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; "><strong style="font-weight: 600;">{{ p.name }}</strong></span>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="vertical-align: top; text-align: left;"><span style="font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; ">{% if p.product_code %}{{ p.product_code }}<br> {% endif %}{% if p.options %}{{ p.options }}{%  endif %}</span>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
