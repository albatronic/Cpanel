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
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Codigo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Codigo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Codigo"), 5 => $this->getAttribute($_datos_, "Codigo"), 6 => "4", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
";
        // line 11
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Nombre"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Nombre]"), 4 => ($this->getAttribute($_values_, "controller") . "_Nombre"), 5 => $this->getAttribute($_datos_, "Nombre"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "

";
        // line 13
        $this->env->loadTemplate("_global/fieldsComunes.html.twig")->display($context);
        // line 14
        echo "
";
        // line 15
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Id")) {
            // line 16
            echo "<iframe width=\"100%\" height=\"490\" scrolling=\"yes\" style=\"border:0px;margin-bottom:10px;margin-top:25px;\"
        src=\"";
            // line 17
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/CommBancosOficinas/list/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "\">
</iframe>
";
        }
        // line 20
        echo "
";
        // line 21
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_Codigo")), "method"), "html", null, true);
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
        return array (  60 => 20,  47 => 16,  44 => 15,  41 => 14,  39 => 13,  30 => 11,  22 => 10,  19 => 9,  90 => 27,  86 => 26,  73 => 23,  68 => 22,  63 => 21,  55 => 20,  50 => 17,  42 => 18,  36 => 14,  33 => 13,  23 => 12,);
    }
}
