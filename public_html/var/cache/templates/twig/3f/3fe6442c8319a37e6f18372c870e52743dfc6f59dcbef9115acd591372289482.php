<?php

/* __string_template__4f32311a7ce9ed1150732a38bfdd05770dec01761caf42f503788ecd16319dcb */
class __TwigTemplate_c55f65628fdde8701116c7049ed255cc8d56863c26bc273a66e1c7b571eb1a66 extends Twig_Template
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
        echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" style=\"border-collapse: separate; border-spacing: 1px; background-color: #dddddd; margin-top: 20px; font-family: Helvetica, Arial, sans-serif;\">

<thead>
    <tr>

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "headers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 7
            echo "            <th style=\"background-color: #eeeeee; padding: 6px 10px; white-space: nowrap; font-size: 12px; text-align:center; font-family: Helvetica, Arial, sans-serif;\">";
            echo $context["header"];
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </tr>
</thead>
<tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr style=\"page-break-inside: avoid;\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 15
                echo "                <td style=\"padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">";
                echo $context["column"];
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__4f32311a7ce9ed1150732a38bfdd05770dec01761caf42f503788ecd16319dcb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  64 => 17,  55 => 15,  51 => 14,  48 => 13,  44 => 12,  39 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <table width="100%" cellpadding="0" cellspacing="1" style="border-collapse: separate; border-spacing: 1px; background-color: #dddddd; margin-top: 20px; font-family: Helvetica, Arial, sans-serif;">*/
/* */
/* <thead>*/
/*     <tr>*/
/* */
/*         {% for  header in products_table.headers %}*/
/*             <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap; font-size: 12px; text-align:center; font-family: Helvetica, Arial, sans-serif;">{{ header }}</th>*/
/*         {% endfor %}*/
/*     </tr>*/
/* </thead>*/
/* <tbody>*/
/*     {% for  row in products_table.rows %}*/
/*         <tr style="page-break-inside: avoid;">*/
/*             {% for  column in row %}*/
/*                 <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">{{ column }}</td>*/
/*             {% endfor %}*/
/*         </tr>*/
/*     {% endfor %}*/
/* </tbody>*/
/* </table>*/
