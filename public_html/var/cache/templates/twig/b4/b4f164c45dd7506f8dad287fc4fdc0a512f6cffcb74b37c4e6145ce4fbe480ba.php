<?php

/* __string_template__25e8119071be1ffd466fa544195660bc14993aa604d521da81c7c03651bc9601 */
class __TwigTemplate_9cafceaacc2b452271c85ad997eaaea462f89fc12650e94dd3e3447ce29da683 extends Twig_Template
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
    <br>
    ";
        // line 5
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "create_profile_notification_header");
        echo "
    <br>
    <br>
    <table border=\"0\" class=\"info\">
      <tr>
        <td align=\"right\"><b>";
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
        <td align=\"right\"><b>";
        // line 14
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array());
        echo "</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>";
        // line 18
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td>
";
        // line 20
        if ((isset($context["password"]) ? $context["password"] : null)) {
            // line 21
            echo "    ";
            echo (isset($context["password"]) ? $context["password"] : null);
            echo "
";
        } else {
            // line 23
            echo "    *********** (<a href=\"";
            echo (isset($context["forgot_pass_url"]) ? $context["forgot_pass_url"] : null);
            echo "\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "forgot_password_question");
            echo "</a>)
";
        }
        // line 24
        echo "</td>
      </tr>
    </table>
  ";
        // line 27
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__25e8119071be1ffd466fa544195660bc14993aa604d521da81c7c03651bc9601";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  90 => 24,  82 => 23,  76 => 21,  74 => 20,  69 => 18,  63 => 15,  59 => 14,  51 => 11,  47 => 10,  39 => 5,  35 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("new_profile_notification")} ) }}*/
/*     {% if user_data.firstname %} {{ __("dear") }} {{ user_data.firstname }}, {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br>*/
/*     <br>*/
/*     {{ __("create_profile_notification_header") }}*/
/*     <br>*/
/*     <br>*/
/*     <table border="0" class="info">*/
/*       <tr>*/
/*         <td align="right"><b>{{ __("login_url") }}:</b></td>*/
/*         <td><a href="{{ login_url }}">{{ login_url|puny_decode }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td align="right"><b>{{ __("email") }}:</b></td>*/
/*         <td><a>{{ user_data.email }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td align="right"><b>{{ __("password") }}:</b></td>*/
/*         <td>*/
/* {% if password %}*/
/*     {{ password }}*/
/* {% else %}*/
/*     *********** (<a href="{{ forgot_pass_url }}">{{ __("forgot_password_question") }}</a>)*/
/* {% endif %}</td>*/
/*       </tr>*/
/*     </table>*/
/*   {{ snippet("footer") }}*/
