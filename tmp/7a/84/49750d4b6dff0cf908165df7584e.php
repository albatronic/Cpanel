<?php

/* CommMunicipios/fields.html.twig */
class __TwigTemplate_7a8449750d4b6dff0cf908165df7584e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "IdProvincia"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[IdProvincia]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_IdProvincia"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "IdProvincia"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2", 9 => "", 10 => "", 11 => array(0 => "provincias", 1 => "Provincia", 2 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "IdProvincia"), "Provincia"), 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_IdPais"))), "method"), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Codigo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Codigo"), 6 => "5", 7 => "CampoTextoCorto", 8 => "3"), "method"), "html", null, true);
        echo "
";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "DigitoControl"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[DigitoControl]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_DigitoControl"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "DigitoControl"), 6 => "2", 7 => "CampoTextoCorto", 8 => "4"), "method"), "html", null, true);
        echo "
";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Municipio"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Municipio]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Municipio"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Municipio"), 6 => "255", 7 => "CampoTextoLargo", 8 => "5"), "method"), "html", null, true);
        echo "

";
        // line 17
        echo "
";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Municipio")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommMunicipios/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  43 => 17,  38 => 14,  34 => 13,  30 => 12,  26 => 11,  22 => 10,  19 => 9,);
    }
}
