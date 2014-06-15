<?php

/* CommIdiomas/fields.html.twig */
class __TwigTemplate_e46225b4a0666af06a543854fdcdbbb9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Codigo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Codigo"), 6 => "2", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Idioma"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Idioma]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Idioma"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Idioma"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "

";
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Codigo")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommIdiomas/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 15,  31 => 14,  26 => 11,  22 => 10,  19 => 9,);
    }
}
