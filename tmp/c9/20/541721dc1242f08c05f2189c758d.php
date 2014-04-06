<?php

/* PcaeEmpresas/fields.html.twig */
class __TwigTemplate_c920541721dc1242f08c05f2189c758d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "IdGrupo"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdGrupo]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdGrupo"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdGrupo"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdGrupo"), "fetchAll", array(0 => "Descripcion", 1 => 0), "method"), 7 => "chzn-select", 8 => "2"), "method"), "html", null, true);
        echo "
";
        // line 11
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "RazonSocial"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[RazonSocial]"), 4 => ($this->getAttribute($_values_, "controller") . "_RazonSocial"), 5 => $this->getAttribute($_datos_, "RazonSocial"), 6 => "100", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "

<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-general\">General</a></li>
        ";
        // line 16
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Id")) {
            // line 17
            echo "            <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-proyectos\">Proyectos</a></li>
            <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-usuarios\">Usuarios Adscritos</a></li>      
        ";
        }
        // line 20
        echo "    </ul>

    ";
        // line 23
        echo "    <div id=\"tabs-general\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 24
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Cif"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Cif]"), 4 => ($this->getAttribute($_values_, "controller") . "_Cif"), 5 => $this->getAttribute($_datos_, "Cif"), 6 => "15", 7 => "CampoTextoCorto", 8 => "3"), "method"), "html", null, true);
        echo "
        ";
        // line 25
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Direccion"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Direccion]"), 4 => ($this->getAttribute($_values_, "controller") . "_Direccion"), 5 => $this->getAttribute($_datos_, "Direccion"), 6 => "100", 7 => "CampoTextoLargo", 8 => "4"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdPais"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdPais]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdPais"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdPais"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "5", 9 => "", 10 => "", 11 => array(0 => "paises", 1 => "Pais", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdPais"), "Pais"))), "method"), "html", null, true);
        echo "
        ";
        // line 27
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdProvincia"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdProvincia]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdProvincia"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdProvincia"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "6", 9 => "", 10 => "", 11 => array(0 => "provincias", 1 => "Provincia", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdProvincia"), "Provincia"), 3 => ($this->getAttribute($_values_, "controller") . "_IdPais"))), "method"), "html", null, true);
        echo "
        ";
        // line 28
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdMunicipio"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdMunicipio]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdMunicipio"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdMunicipio"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "7", 9 => "", 10 => "", 11 => array(0 => "municipios", 1 => "Municipio", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdMunicipio"), "Municipio"), 3 => ($this->getAttribute($_values_, "controller") . "_IdProvincia"))), "method"), "html", null, true);
        echo "
        ";
        // line 29
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "CodigoPostal"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[CodigoPostal]"), 4 => ($this->getAttribute($_values_, "controller") . "_CodigoPostal"), 5 => $this->getAttribute($_datos_, "CodigoPostal"), 6 => "10", 7 => "CampoTextoCorto", 8 => "8"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Telefono"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Telefono]"), 4 => ($this->getAttribute($_values_, "controller") . "_Telefono"), 5 => $this->getAttribute($_datos_, "Telefono"), 6 => "50", 7 => "CampoTextoLargo", 8 => "9"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Fax"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Fax]"), 4 => ($this->getAttribute($_values_, "controller") . "_Fax"), 5 => $this->getAttribute($_datos_, "Fax"), 6 => "50", 7 => "CampoTextoLargo", 8 => "10"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Web"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Web]"), 4 => ($this->getAttribute($_values_, "controller") . "_Web"), 5 => $this->getAttribute($_datos_, "Web"), 6 => "50", 7 => "CampoTextoLargo", 8 => "11"), "method"), "html", null, true);
        echo "
        ";
        // line 33
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EMail"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[EMail]"), 4 => ($this->getAttribute($_values_, "controller") . "_EMail"), 5 => $this->getAttribute($_datos_, "EMail"), 6 => "50", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 34
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "Banco"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[Banco]"), 3 => ($this->getAttribute($_values_, "controller") . "_Banco"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "Banco"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "Banco"), "fetchAll", array(0 => "Nombre"), "method"), 7 => "chzn-select", 8 => "13"), "method"), "html", null, true);
        echo "
        ";
        // line 35
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Oficina"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Oficina]"), 4 => ($this->getAttribute($_values_, "controller") . "_Oficina"), 5 => $this->getAttribute($this->getAttribute($_datos_, "Oficina"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "14", 9 => "", 10 => "", 11 => array(0 => "oficinasBancarias", 1 => "Codigo", 2 => $this->getAttribute($_datos_, "Oficina"), 3 => ($this->getAttribute($_values_, "controller") . "_Banco"))), "method"), "html", null, true);
        echo "
        ";
        // line 36
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Digito"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Digito]"), 4 => ($this->getAttribute($_values_, "controller") . "_Digito"), 5 => $this->getAttribute($_datos_, "Digito"), 6 => "2", 7 => "CampoTextoCorto", 8 => "15"), "method"), "html", null, true);
        echo "
        ";
        // line 37
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Cuenta"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Cuenta]"), 4 => ($this->getAttribute($_values_, "controller") . "_Cuenta"), 5 => $this->getAttribute($_datos_, "Cuenta"), 6 => "10", 7 => "CampoTextoCorto", 8 => "16"), "method"), "html", null, true);
        echo "
        ";
        // line 38
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IBAN"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IBAN]"), 4 => ($this->getAttribute($_values_, "controller") . "_IBAN"), 5 => $this->getAttribute($_datos_, "IBAN"), 6 => "34", 7 => "CampoTextoLargo", 8 => "17"), "method"), "html", null, true);
        echo "
        ";
        // line 39
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "SufijoRemesas"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[SufijoRemesas]"), 4 => ($this->getAttribute($_values_, "controller") . "_SufijoRemesas"), 5 => $this->getAttribute($_datos_, "SufijoRemesas"), 6 => "3", 7 => "CampoTextoCorto", 8 => "18"), "method"), "html", null, true);
        echo "
        ";
        // line 40
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "DigitosCuentaContable"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[DigitosCuentaContable]"), 4 => ($this->getAttribute($_values_, "controller") . "_DigitosCuentaContable"), 5 => $this->getAttribute($_datos_, "DigitosCuentaContable"), 6 => "2", 7 => "CampoUnidades", 8 => "19"), "method"), "html", null, true);
        echo "
        ";
        // line 41
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IdCNAE"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[IdCNAE]"), 4 => ($this->getAttribute($_values_, "controller") . "_IdCNAE"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IdCNAE"), "Id"), 6 => "255", 7 => "CampoTextoLargo", 8 => "20", 9 => "", 10 => "", 11 => array(0 => "cnae", 1 => "Actividad", 2 => $this->getAttribute($this->getAttribute($_datos_, "IdCNAE"), "Actividad"))), "method"), "html", null, true);
        echo "
        ";
        // line 42
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "RegistroMercantil"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[RegistroMercantil]"), 4 => ($this->getAttribute($_values_, "controller") . "_RegistroMercantil"), 5 => $this->getAttribute($_datos_, "RegistroMercantil"), 6 => "100", 7 => "CampoTextoLargo", 8 => "21"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "LicenciaActividad"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[LicenciaActividad]"), 4 => ($this->getAttribute($_values_, "controller") . "_LicenciaActividad"), 5 => $this->getAttribute($_datos_, "LicenciaActividad"), 6 => "100", 7 => "CampoTextoLargo", 8 => "22"), "method"), "html", null, true);
        echo "

        ";
        // line 46
        echo "    </div>
        

    ";
        // line 49
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Id")) {
            // line 50
            echo "        ";
            // line 51
            echo "        <div id=\"tabs-proyectos\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
            <iframe width=\"100%\" height=\"620\" scrolling=\"yes\" style=\"border:0px;margin-bottom:10px;margin-top:0px;\"
                    src=\"";
            // line 53
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/PcaeProyectos/list/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "\">
            </iframe>        
        </div>

        ";
            // line 58
            echo "        <div id=\"tabs-usuarios\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
            <iframe width=\"100%\" height=\"420\" scrolling=\"yes\" style=\"border:0px;margin-bottom:10px;margin-top:0px;\"
                    src=\"";
            // line 60
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/PcaeEmpresasUsuarios/list/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "\">
            </iframe>        
        </div>
    ";
        }
        // line 64
        echo "        
";
        // line 65
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => ($this->getAttribute($_values_, "controller") . "_IdGrupo")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PcaeEmpresas/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 65,  258 => 64,  247 => 60,  243 => 58,  232 => 53,  228 => 51,  226 => 50,  223 => 49,  218 => 46,  209 => 43,  201 => 42,  193 => 41,  185 => 40,  177 => 39,  169 => 38,  161 => 37,  153 => 36,  145 => 35,  137 => 34,  129 => 33,  121 => 32,  113 => 31,  105 => 30,  97 => 29,  89 => 28,  81 => 27,  73 => 26,  65 => 25,  57 => 24,  54 => 23,  50 => 20,  45 => 17,  42 => 16,  30 => 11,  22 => 10,  19 => 9,);
    }
}
