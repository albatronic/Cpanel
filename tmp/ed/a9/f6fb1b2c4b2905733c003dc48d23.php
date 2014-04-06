<?php

/* _global/headerRight.html.twig */
class __TwigTemplate_eda9f6fb1b2c4b2905733c003dc48d23 extends Twig_Template
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
        // line 2
        echo "
<div id=\"top_notification\">
        <div class=\"page_title_user\">
            ";
        // line 5
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "empresa"), "html", null, true);
        echo " - ";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "title"), "html", null, true);
        echo " ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
            echo "(Id:";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "Id"), "html", null, true);
            echo ")";
        }
        // line 6
        echo "\t   </div>

\t<div id=\"botonesCabecera\">
\t\t";
        // line 9
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
        if ((($_action_ == "") && ($this->getAttribute($_idiomas_, "actual") == 0))) {
            // line 10
            echo "\t\t    ";
            $this->env->loadTemplate("_global/linkNew.html.twig")->display($context);
            // line 11
            echo "\t\t";
        }
        // line 12
        echo "\t\t        
\t\t";
        // line 13
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
        if ((($_action_ == "new") && ($this->getAttribute($_idiomas_, "actual") == 0))) {
            // line 14
            echo "\t\t    ";
            $this->env->loadTemplate("_global/linkCreate.html.twig")->display($context);
            // line 15
            echo "\t\t";
        }
        // line 16
        echo "\t\t        
\t\t";
        // line 17
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "edit")) {
            // line 18
            echo "\t\t    ";
            $this->env->loadTemplate("_global/linkSave.html.twig")->display($context);
            // line 19
            echo "\t\t    ";
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (($this->getAttribute($_idiomas_, "actual") == 0)) {
                echo "        
\t\t        ";
                // line 20
                $this->env->loadTemplate("_global/linkDelete.html.twig")->display($context);
                echo " 
\t\t    ";
            }
            // line 22
            echo "\t\t    ";
            $this->env->loadTemplate("_global/linkNew.html.twig")->display($context);
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "
\t\t";
        // line 25
        $this->env->loadTemplate("_global/linkHelp.html.twig")->display($context);
        // line 26
        echo "\t\t";
        $this->env->loadTemplate("_global/linkLogout.html.twig")->display($context);
        // line 27
        echo "\t</div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "_global/headerRight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  97 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  81 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  43 => 9,  38 => 6,  24 => 5,  19 => 2,);
    }
}
