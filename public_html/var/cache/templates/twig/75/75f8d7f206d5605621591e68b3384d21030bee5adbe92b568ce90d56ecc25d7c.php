<?php

/* __string_template__a2bb94fe1f18eda7fdbee50eed476aceeacffd1482cda40cdeff5a0d78e9b54d */
class __TwigTemplate_bf8bbad7790e6af86518fbf207c796f6df2396b460e7b10e59db5c8b92ec8ec3 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "new_profile_notification")));
        echo "
    ";
        // line 2
        if ($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())) {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "dear");
            echo " ";
            echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array());
            echo ", ";
        } else {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    ";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo (isset($context["login_url"]) ? $context["login_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["login_url"]) ? $context["login_url"] : null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array());
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        echo (isset($context["forgot_pass_url"]) ? $context["forgot_pass_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>


  ";
        // line 24
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__a2bb94fe1f18eda7fdbee50eed476aceeacffd1482cda40cdeff5a0d78e9b54d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  54 => 11,  50 => 10,  44 => 7,  38 => 4,  35 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("new_profile_notification")} ) }}*/
/*     {% if user_data.firstname %} {{ __("dear") }} {{ user_data.firstname }}, {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br>*/
/*     {{ __("update_profile_notification_header") }}*/
/*     <br>*/
/*     <br>*/
/*     <h4 class="with-subline">{{ __("user_account_information") }}</h4>*/
/*     <table border="0" width="100%" class="info">*/
/*       <tr>*/
/*         <td><b>{{ __("login_url") }}:</b></td>*/
/*         <td><a href="{{ login_url }}">{{ login_url|puny_decode }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td><b>{{ __("email") }}:</b></td>*/
/*         <td><a>{{ user_data.email }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td><b>{{ __("password") }}:</b></td>*/
/*         <td> *********** (<a href="{{ forgot_pass_url }}">{{ __("forgot_password_question") }}</a>)</td>*/
/*       </tr>*/
/*     </table>*/
/* */
/* */
/*   {{ snippet("footer") }}*/
