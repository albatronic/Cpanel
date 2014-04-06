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
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Zona"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Zona]"), 4 => ($this->getAttribute($_values_, "controller") . "_Zona"), 5 => $this->getAttribute($_datos_, "Zona"), 6 => "255", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "

";
        // line 12
        $this->env->loadTemplate("_global/fieldsComunes.html.twig")->display($context);
        // line 13
        echo "
";
        // line 14
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_Zona")), "method"), "html", null, true);
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
        return array (  31 => 12,  22 => 10,  19 => 9,  90 => 27,  86 => 26,  73 => 23,  68 => 22,  63 => 21,  55 => 20,  50 => 19,  42 => 18,  36 => 14,  33 => 13,  23 => 12,);
    }
}
