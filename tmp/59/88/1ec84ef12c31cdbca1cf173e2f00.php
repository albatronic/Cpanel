<?php

/* CommBancos/fields.html.twig */
class __TwigTemplate_59881ec84ef12c31cdbca1cf173e2f00 extends Twig_Template
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
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Codigo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Codigo"), 6 => "4", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Nombre"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Nombre]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Nombre"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Nombre"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "

";
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Id")) {
            // line 16
            echo "<iframe width=\"100%\" height=\"490\" scrolling=\"yes\" style=\"border:0px;margin-bottom:10px;margin-top:25px;\"
        src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/CommBancosOficinas/list/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Id"), "html", null, true);
            echo "\">
</iframe>
";
        }
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommBancos/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  47 => 20,  39 => 17,  36 => 16,  34 => 15,  31 => 14,  26 => 11,  22 => 10,  19 => 9,);
    }
}
