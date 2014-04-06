<?php

/* PcaeApps/fields.html.twig */
class __TwigTemplate_00bf9e7bc0a0717963cac5e38ff31e16 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Aplicacion"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Aplicacion]"), 4 => ($this->getAttribute($_values_, "controller") . "_Aplicacion"), 5 => $this->getAttribute($_datos_, "Aplicacion"), 6 => "100", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Url"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Url]"), 4 => ($this->getAttribute($_values_, "controller") . "_Url"), 5 => $this->getAttribute($_datos_, "Url"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "

";
        // line 14
        echo "
";
        // line 15
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_Aplicacion")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PcaeApps/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  30 => 11,  22 => 10,  19 => 9,  100 => 30,  96 => 29,  92 => 27,  88 => 26,  85 => 25,  73 => 23,  68 => 22,  63 => 21,  55 => 20,  50 => 19,  42 => 15,  36 => 14,  33 => 13,  23 => 12,);
    }
}
