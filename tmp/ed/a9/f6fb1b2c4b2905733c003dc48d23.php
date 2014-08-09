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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "empresa"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "title"), "html", null, true);
        echo " ";
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "IdPerfil"), "Id") == "1")) {
            echo "(Id:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : null), "Id"), "html", null, true);
            echo ")";
        }
        // line 6
        echo "\t   </div>

\t<div id=\"botonesCabecera\">
\t\t";
        // line 9
        if ((((isset($context["action"]) ? $context["action"] : null) == "") && ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0))) {
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
        if ((((isset($context["action"]) ? $context["action"] : null) == "new") && ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0))) {
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
        if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
            // line 18
            echo "\t\t    ";
            $this->env->loadTemplate("_global/linkSave.html.twig")->display($context);
            // line 19
            echo "\t\t    ";
            if (($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)) {
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
        return array (  90 => 27,  87 => 26,  85 => 25,  82 => 24,  79 => 23,  76 => 22,  71 => 20,  66 => 19,  63 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  34 => 6,  24 => 5,  19 => 2,);
    }
}
