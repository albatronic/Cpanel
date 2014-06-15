<?php

/* CommZonasHorarias/fields.html.twig */
class __TwigTemplate_e7f9ca7de372f4cfb4c3349e5746690d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Zona"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Zona]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Zona"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Zona"), 6 => "255", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "

";
        // line 13
        echo "
";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Zona")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommZonasHorarias/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 14,  27 => 13,  22 => 10,  19 => 9,);
    }
}
