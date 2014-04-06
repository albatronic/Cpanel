<?php

/* PcaeProyectosApps/fields.html.twig */
class __TwigTemplate_189142d962473aa9e84338a2665f14b6 extends Twig_Template
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
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Id")) {
            // line 11
            echo "    <h3>";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_datos_, "IdApp"), "Aplicacion"), "html", null, true);
            echo "</h3>
";
        } else {
            // line 13
            echo "    ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "IdApp"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdApp]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdApp"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdApp"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdApp"), "fetchAll", array(0 => "Aplicacion", 1 => 0), "method"), 7 => "chzn-select", 8 => "2"), "method"), "html", null, true);
            echo "
";
        }
        // line 15
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "NumeroLicencias"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[NumeroLicencias]"), 4 => ($this->getAttribute($_values_, "controller") . "_NumeroLicencias"), 5 => $this->getAttribute($_datos_, "NumeroLicencias"), 6 => "4", 7 => "CampoUnidades", 8 => "3"), "method"), "html", null, true);
        echo "
";
        // line 16
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "FtpServer"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[FtpServer]"), 4 => ($this->getAttribute($_values_, "controller") . "_FtpServer"), 5 => $this->getAttribute($_datos_, "FtpServer"), 6 => "255", 7 => "CampoTextoLargo", 8 => "4"), "method"), "html", null, true);
        echo "
";
        // line 17
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "FtpPort"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[FtpPort]"), 4 => ($this->getAttribute($_values_, "controller") . "_FtpPort"), 5 => $this->getAttribute($_datos_, "FtpPort"), 6 => "6", 7 => "CampoUnidades", 8 => "5"), "method"), "html", null, true);
        echo "
";
        // line 18
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "FtpTimeout"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[FtpTimeout]"), 4 => ($this->getAttribute($_values_, "controller") . "_FtpTimeout"), 5 => $this->getAttribute($_datos_, "FtpTimeout"), 6 => "6", 7 => "CampoUnidades", 8 => "6"), "method"), "html", null, true);
        echo "
";
        // line 19
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "FtpFolder"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[FtpFolder]"), 4 => ($this->getAttribute($_values_, "controller") . "_FtpFolder"), 5 => $this->getAttribute($_datos_, "FtpFolder"), 6 => "255", 7 => "CampoTextoLargo", 8 => "7"), "method"), "html", null, true);
        echo "
";
        // line 20
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "FtpUser"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[FtpUser]"), 4 => ($this->getAttribute($_values_, "controller") . "_FtpUser"), 5 => $this->getAttribute($_datos_, "FtpUser"), 6 => "255", 7 => "CampoTextoLargo", 8 => "8"), "method"), "html", null, true);
        echo "
";
        // line 21
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "FtpPassword"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[FtpPassword]"), 4 => ($this->getAttribute($_values_, "controller") . "_FtpPassword"), 5 => $this->getAttribute($_datos_, "FtpPassword"), 6 => "255", 7 => "CampoTextoLargo", 8 => "9"), "method"), "html", null, true);
        echo "
";
        // line 22
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Url"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Url]"), 4 => ($this->getAttribute($_values_, "controller") . "_Url"), 5 => $this->getAttribute($_datos_, "Url"), 6 => "255", 7 => "CampoTextoLargo", 8 => "10"), "method"), "html", null, true);
        echo "
";
        // line 23
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "DbEngine"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[DbEngine]"), 4 => ($this->getAttribute($_values_, "controller") . "_DbEngine"), 5 => $this->getAttribute($_datos_, "DbEngine"), 6 => "255", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "
";
        // line 24
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Host"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Host]"), 4 => ($this->getAttribute($_values_, "controller") . "_Host"), 5 => $this->getAttribute($_datos_, "Host"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
";
        // line 25
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "User"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[User]"), 4 => ($this->getAttribute($_values_, "controller") . "_User"), 5 => $this->getAttribute($_datos_, "User"), 6 => "255", 7 => "CampoTextoLargo", 8 => "13"), "method"), "html", null, true);
        echo "
";
        // line 26
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Password"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Password]"), 4 => ($this->getAttribute($_values_, "controller") . "_Password"), 5 => $this->getAttribute($_datos_, "Password"), 6 => "255", 7 => "CampoTextoLargo", 8 => "14"), "method"), "html", null, true);
        echo "
";
        // line 27
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Database"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Database]"), 4 => ($this->getAttribute($_values_, "controller") . "_Database"), 5 => $this->getAttribute($_datos_, "Database"), 6 => "255", 7 => "CampoTextoLargo", 8 => "15"), "method"), "html", null, true);
        echo "

";
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "PcaeProyectosApps/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 30,  138 => 27,  130 => 26,  122 => 25,  114 => 24,  106 => 23,  98 => 22,  90 => 21,  82 => 20,  74 => 19,  66 => 18,  58 => 17,  32 => 13,  25 => 11,  22 => 10,  19 => 9,  108 => 31,  104 => 30,  100 => 28,  96 => 27,  93 => 26,  84 => 24,  73 => 23,  68 => 22,  63 => 21,  55 => 20,  50 => 16,  42 => 15,  36 => 14,  33 => 13,  23 => 12,);
    }
}
