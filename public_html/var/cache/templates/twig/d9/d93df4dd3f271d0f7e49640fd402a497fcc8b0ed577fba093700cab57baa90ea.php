<?php

/* __string_template__417de8869bedadb26ebba570cba09736e3386cdb879f40af18e4a7e86c01cebb */
class __TwigTemplate_66f212abe1359ff893099793d784828055cc67cc67e653d591efbf15d93138f3 extends Twig_Template
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
        echo "</td>

</tr>

<tr class=\"message-footer\">

<td style=\"border-collapse: collapse; background-color: #AAAAAA; padding: 20px 30px; color: #fff; font-family: Raleway,sans-serif,Helvetica,Arial,sans-serif; font-size: 14px;\">


<table class=\"info ty-email-footer-left-part\" width=\"250\" align=\"left\">
  <tr>
    <th class=\"footer-contact__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 13
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "contact_information");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer\" style=\"text-align: center;\">
      <address>";
        // line 18
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_address", array());
        echo ", ";
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_city", array());
        echo "</address>
    </td>
  </tr>
</table>

<table class=\"info ty-email-footer-right-part\" width=\"250\" align=\"right\">
  <tr>
    <th class=\"footer-social__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 26
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "get_social");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer-social-buttons footer-social\">
      <table cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
        <tr>
          <td>
            <a href=\"https://www.facebook.com/socoolconfiteriafina/\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/facebook.png\"></a>
          </td>
          <td>
            <a href=\"https://www.instagram.com/socoolconfiteriafina/\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/twitter.png\"></a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td>
</tr>
";
        // line 46
        if ($this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array())) {
            // line 47
            echo "<tr class=\"message-copyright\" style=\"background-color: #DDDDDD;\">
<td>
<table class=\"copyright\" width=\"100%\">
<tr>
  <td>
    &copy;&nbsp;";
            // line 52
            echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array());
            echo "
  </td>
  <td align=\"right\">
    ";
            // line 55
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_text_letter_footer");
            echo "
  </td>
</tr>
</table>
</td>
</tr>
";
        }
        // line 62
        echo "</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__417de8869bedadb26ebba570cba09736e3386cdb879f40af18e4a7e86c01cebb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 62,  92 => 55,  86 => 52,  79 => 47,  77 => 46,  54 => 26,  41 => 18,  33 => 13,  19 => 1,);
    }
}
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr class="message-footer">*/
/* */
/* <td style="border-collapse: collapse; background-color: #AAAAAA; padding: 20px 30px; color: #fff; font-family: Raleway,sans-serif,Helvetica,Arial,sans-serif; font-size: 14px;">*/
/* */
/* */
/* <table class="info ty-email-footer-left-part" width="250" align="left">*/
/*   <tr>*/
/*     <th class="footer-contact__title ty-email-footer" style="text-align: center;">*/
/*       {{ __("contact_information") }}*/
/*     </th>*/
/*   </tr>*/
/*   <tr>*/
/*     <td class="ty-email-footer" style="text-align: center;">*/
/*       <address>{{ company_data.company_address }}, {{ company_data.company_city }}</address>*/
/*     </td>*/
/*   </tr>*/
/* </table>*/
/* */
/* <table class="info ty-email-footer-right-part" width="250" align="right">*/
/*   <tr>*/
/*     <th class="footer-social__title ty-email-footer" style="text-align: center;">*/
/*       {{ __("get_social") }}*/
/*     </th>*/
/*   </tr>*/
/*   <tr>*/
/*     <td class="ty-email-footer-social-buttons footer-social">*/
/*       <table cellspacing="0" cellpadding="0" align="center">*/
/*         <tr>*/
/*           <td>*/
/*             <a href="https://www.facebook.com/socoolconfiteriafina/"><img width="30" height="30" src="design/themes/responsive/mail/media/images/social/facebook.png"></a>*/
/*           </td>*/
/*           <td>*/
/*             <a href="https://www.instagram.com/socoolconfiteriafina/"><img width="30" height="30" src="design/themes/responsive/mail/media/images/social/twitter.png"></a>*/
/*           </td>*/
/*         </tr>*/
/*       </table>*/
/*     </td>*/
/*   </tr>*/
/* </table>*/
/* </td>*/
/* </tr>*/
/* {% if company_data.company_name %}*/
/* <tr class="message-copyright" style="background-color: #DDDDDD;">*/
/* <td>*/
/* <table class="copyright" width="100%">*/
/* <tr>*/
/*   <td>*/
/*     &copy;&nbsp;{{ company_data.company_name }}*/
/*   </td>*/
/*   <td align="right">*/
/*     {{ __("customer_text_letter_footer") }}*/
/*   </td>*/
/* </tr>*/
/* </table>*/
/* </td>*/
/* </tr>*/
/* {% endif %}*/
/* </table>*/
/* <!-- content-wrapper -->*/
/* </td>*/
/* </tr>*/
/* </table>*/
/* <!-- main-wrapper -->*/
/* </body>*/
/* </html>*/
