<?php

/* _global/menuNavegador.html.twig */
class __TwigTemplate_00363ab47843c48a39e069d3c65ca190 extends Twig_Template
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
        // line 6
        echo "
";
        // line 10
        echo "
<span class=\"title_icon\"><span class=\"list_image\"></span></span>
<h3>
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/Index\">Home</a> | <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/lang/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "disponibles"), $this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual"), array(), "array"), "codigo"), "html", null, true);
        echo ".gif\"/> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "titulo"), "html", null, true);
        echo "
    <div style=\"float: right;\">    
        ";
        // line 15
        if ((($this->getAttribute((isset($context["varEnvMod"]) ? $context["varEnvMod"] : null), "translatable") == 1) && (twig_length_filter($this->env, $this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "disponibles")) > 1))) {
            // line 16
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "disponibles"));
            foreach ($context['_seq'] as $context["key"] => $context["idioma"]) {
                // line 17
                echo "                ";
                if (((isset($context["key"]) ? $context["key"] : null) != $this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual"))) {
                    // line 18
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
                    echo "/lang/";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getPrimaryKeyMD5"), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/lang/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idioma"]) ? $context["idioma"] : null), "codigo"), "html", null, true);
                    echo ".gif\"/></a>
                ";
                }
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['idioma'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "                

        ";
        }
        // line 23
        echo "                
        ";
        // line 24
        if ((($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "varEnvPro"), "url") != "") && ($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "UrlFriendly") != ""))) {
            // line 25
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "varEnvPro"), "url"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "UrlFriendly"), "html", null, true);
            echo "\" target=\"_blank\">
                <img src='";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/images/chrome.png' width=\"24px\" height=\"24px\" alt=\"Ver en la web\" title=\"Ver en la web\"/>
            </a>        
        ";
        }
        // line 28
        echo " 
    </div>                
</h3>
";
    }

    public function getTemplateName()
    {
        return "_global/menuNavegador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  85 => 26,  79 => 25,  77 => 24,  74 => 23,  64 => 20,  48 => 18,  45 => 17,  40 => 16,  38 => 15,  27 => 13,  22 => 10,  19 => 6,);
    }
}
