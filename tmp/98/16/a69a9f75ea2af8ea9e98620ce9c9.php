<?php

/* CommPaises/fields.html.twig */
class __TwigTemplate_9816a69a9f75ea2af8ea9e98620ce9c9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Codigo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Codigo"), 5 => $this->getAttribute($_datos_, "Codigo"), 6 => "2", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Pais"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Pais]"), 4 => ($this->getAttribute($_values_, "controller") . "_Pais"), 5 => $this->getAttribute($_datos_, "Pais"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "
";
        // line 12
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdMoneda"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdMoneda]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdMoneda"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdMoneda"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "3", 9 => "", 10 => "", 11 => array(0 => "monedas", 1 => "Moneda", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdMoneda"), "Moneda"))), "method"), "html", null, true);
        echo "
";
        // line 13
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdZonaHoraria"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdZonaHoraria]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdZonaHoraria"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdZonaHoraria"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "4", 9 => "", 10 => "", 11 => array(0 => "zonasHorarias", 1 => "Zona", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdZonaHoraria"), "Zona"))), "method"), "html", null, true);
        echo "
";
        // line 14
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Latitud"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Latitud]"), 4 => ($this->getAttribute($_values_, "controller") . "_Latitud"), 5 => $this->getAttribute($_datos_, "Latitud"), 6 => "255", 7 => "", 8 => "5"), "method"), "html", null, true);
        echo "
";
        // line 15
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Longitud"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Longitud]"), 4 => ($this->getAttribute($_values_, "controller") . "_Longitud"), 5 => $this->getAttribute($_datos_, "Longitud"), 6 => "255", 7 => "", 8 => "6"), "method"), "html", null, true);
        echo "

";
        // line 17
        $this->env->loadTemplate("_global/fieldsComunes.html.twig")->display($context);
        // line 18
        echo "
";
        // line 19
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_Codigo")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommPaises/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  71 => 17,  62 => 15,  54 => 14,  46 => 13,  38 => 12,  30 => 11,  22 => 10,  19 => 9,  90 => 27,  86 => 26,  73 => 18,  68 => 22,  63 => 21,  55 => 20,  50 => 19,  42 => 18,  36 => 14,  33 => 13,  23 => 12,);
    }
}
