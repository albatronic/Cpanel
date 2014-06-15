<?php

/* CommMonedas/fields.html.twig */
class __TwigTemplate_ccc32c13607cc7a75ae0b4bf1393e950 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Codigo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Codigo"), 6 => "3", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Moneda"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Moneda]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Moneda"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Moneda"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Simbolo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Simbolo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Simbolo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Simbolo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "3"), "method"), "html", null, true);
        echo "

";
        // line 15
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommMonedas/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  35 => 15,  30 => 12,  26 => 11,  22 => 10,  19 => 9,);
    }
}
