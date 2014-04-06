<?php

/* PcaeUsuarios/fields.html.twig */
class __TwigTemplate_48aef8aa2b1b87da8060d6c79b1548ae extends Twig_Template
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
<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-general\">General</a></li>
        ";
        // line 13
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Id")) {
            // line 14
            echo "            <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-permisos\">Permisos de Acceso</a></li>   
        ";
        }
        // line 16
        echo "    </ul>

    ";
        // line 19
        echo "    <div id=\"tabs-general\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 20
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Nombre"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Nombre]"), 4 => ($this->getAttribute($_values_, "controller") . "_Nombre"), 5 => $this->getAttribute($_datos_, "Nombre"), 6 => "50", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 21
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Apellidos"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Apellidos]"), 4 => ($this->getAttribute($_values_, "controller") . "_Apellidos"), 5 => $this->getAttribute($_datos_, "Apellidos"), 6 => "50", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "
        ";
        // line 22
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "DNI"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[DNI]"), 4 => ($this->getAttribute($_values_, "controller") . "_DNI"), 5 => $this->getAttribute($_datos_, "DNI"), 6 => "15", 7 => "CampoTextoCorto", 8 => "3"), "method"), "html", null, true);
        echo "
        ";
        // line 23
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Direccion"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Direccion]"), 4 => ($this->getAttribute($_values_, "controller") . "_Direccion"), 5 => $this->getAttribute($_datos_, "Direccion"), 6 => "100", 7 => "CampoTextoLargo", 8 => "4"), "method"), "html", null, true);
        echo "
        ";
        // line 24
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdPais"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdPais]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdPais"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdPais"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "5", 9 => "", 10 => "", 11 => array(0 => "paises", 1 => "Pais", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdPais"), "Pais"))), "method"), "html", null, true);
        echo "
        ";
        // line 25
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdProvincia"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdProvincia]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdProvincia"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdProvincia"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "6", 9 => "", 10 => "", 11 => array(0 => "provincias", 1 => "Provincia", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdProvincia"), "Provincia"), 3 => ($this->getAttribute($_values_, "controller") . "_IdPais"))), "method"), "html", null, true);
        echo "
        ";
        // line 26
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdMunicipio"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdMunicipio]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdMunicipio"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdMunicipio"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "7", 9 => "", 10 => "", 11 => array(0 => "municipios", 1 => "Municipio", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdMunicipio"), "Municipio"), 3 => ($this->getAttribute($_values_, "controller") . "_IdProvincia"))), "method"), "html", null, true);
        echo "
        ";
        // line 27
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "CodigoPostal"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[CodigoPostal]"), 4 => ($this->getAttribute($_values_, "controller") . "_CodigoPostal"), 5 => $this->getAttribute($_datos_, "CodigoPostal"), 6 => "10", 7 => "CampoTextoCorto", 8 => "8"), "method"), "html", null, true);
        echo "
        ";
        // line 28
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Telefono"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Telefono]"), 4 => ($this->getAttribute($_values_, "controller") . "_Telefono"), 5 => $this->getAttribute($_datos_, "Telefono"), 6 => "50", 7 => "CampoTextoLargo", 8 => "9"), "method"), "html", null, true);
        echo "
        ";
        // line 29
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMail"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[EMail]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMail"), 5 => $this->getAttribute($_datos_, "EMail"), 6 => "100", 7 => "CampoTextoLargo", 8 => "10"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Password"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Password]"), 4 => ($this->getAttribute($_values_, "controller") . "_Password"), 5 => null, 6 => "100", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "
        <hr>
        ";
        // line 32
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMailHost"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[EMailHost]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMailHost"), 5 => $this->getAttribute($_datos_, "EMailHost"), 6 => "100", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "
        ";
        // line 33
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMailSocket"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[EMailSocket]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMailSocket"), 5 => $this->getAttribute($_datos_, "EMailSocket"), 6 => "25", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "
        ";
        // line 34
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMailPort"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[EMailPort]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMailPort"), 5 => $this->getAttribute($_datos_, "EMailPort"), 6 => "3", 7 => "CampoTextoCorto", 8 => "11"), "method"), "html", null, true);
        echo "
        ";
        // line 35
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMailSmtpAuth"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[EMailSmtpAuth]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMailSmtpAuth"), 5 => $this->getAttribute($_datos_, "EMailSmtpAuth"), 6 => "100", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "        
        ";
        // line 36
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMailPassword"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[EMailPassword]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMailPassword"), 5 => $this->getAttribute($_datos_, "EMailPassword"), 6 => "50", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "
        <hr>
        ";
        // line 38
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "NLogin"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[NLogin]"), 4 => ($this->getAttribute($_values_, "controller") . "_NLogin"), 5 => $this->getAttribute($_datos_, "NLogin"), 6 => "4", 7 => "CampoUnidades", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 39
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => $this->getAttribute($_atributos_, "UltimoLogin"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[UltimoLogin]"), 3 => ($this->getAttribute($_values_, "controller") . "_UltimoLogin"), 4 => $this->getAttribute($_datos_, "UltimoLogin"), 5 => "19", 6 => "datepicker", 7 => "13"), "method"), "html", null, true);
        echo "      
        ";
        // line 41
        echo "    </div>
        

    ";
        // line 44
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Id")) {
            // line 45
            echo "        ";
            // line 46
            echo "        <div id=\"tabs-permisos\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
            ";
            // line 47
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            $this->env->loadTemplate("PcaeUsuarios/accesos.html.twig")->display(array_merge($context, array("accesos" => $this->getAttribute($_datos_, "getArrayAccesos"))));
            // line 48
            echo "        </div>
    ";
        }
        // line 50
        echo "
";
        // line 51
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_Nombre")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PcaeUsuarios/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 51,  204 => 50,  200 => 48,  197 => 47,  194 => 46,  192 => 45,  189 => 44,  184 => 41,  176 => 39,  168 => 38,  159 => 36,  151 => 35,  143 => 34,  135 => 33,  127 => 32,  119 => 30,  111 => 29,  103 => 28,  95 => 27,  87 => 26,  79 => 25,  71 => 24,  63 => 23,  55 => 22,  47 => 21,  39 => 20,  36 => 19,  32 => 16,  28 => 14,  25 => 13,  19 => 9,);
    }
}
