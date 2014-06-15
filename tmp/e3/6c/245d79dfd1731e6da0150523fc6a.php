<?php

/* CommProvincias/fields.html.twig */
class __TwigTemplate_e36c245d79dfd1731e6da0150523fc6a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "select", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "IdPais"), 1 => "field_title", 2 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[IdPais]"), 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_IdPais"), 4 => null, 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "IdPais"), "Id"), 6 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "IdPais"), "fetchAll", array(0 => "Pais", 1 => 0), "method"), 7 => "chzn-select", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Codigo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Codigo"), 6 => "5", 7 => "CampoTextoCorto", 8 => "2"), "method"), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Provincia"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Provincia]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Provincia"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Provincia"), 6 => "255", 7 => "CampoTextoLargo", 8 => "3"), "method"), "html", null, true);
        echo "

";
        // line 15
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_IdPais")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommProvincias/fields.html.twig";
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
