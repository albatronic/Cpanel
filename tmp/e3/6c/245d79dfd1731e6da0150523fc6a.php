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
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdPais"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdPais]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdPais"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdPais"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "1", 9 => "", 10 => "", 11 => array(0 => "paises", 1 => "Pais", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdPais"), "Pais"))), "method"), "html", null, true);
        echo "
";
        // line 11
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Codigo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Codigo"), 5 => $this->getAttribute($_datos_, "Codigo"), 6 => "5", 7 => "CampoTextoCorto", 8 => "2"), "method"), "html", null, true);
        echo "
";
        // line 12
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Provincia"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Provincia]"), 4 => ($this->getAttribute($_values_, "controller") . "_Provincia"), 5 => $this->getAttribute($_datos_, "Provincia"), 6 => "255", 7 => "CampoTextoLargo", 8 => "3"), "method"), "html", null, true);
        echo "

";
        // line 14
        $this->env->loadTemplate("_global/fieldsComunes.html.twig")->display($context);
        // line 15
        echo "
";
        // line 16
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_IdPais")), "method"), "html", null, true);
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
        return array (  52 => 16,  49 => 15,  47 => 14,  38 => 12,  30 => 11,  22 => 10,  19 => 9,  90 => 27,  86 => 26,  73 => 23,  68 => 22,  63 => 21,  55 => 20,  50 => 19,  42 => 18,  36 => 14,  33 => 13,  23 => 12,);
    }
}
