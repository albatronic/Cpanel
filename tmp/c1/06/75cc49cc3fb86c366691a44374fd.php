<?php

/* CpanVariables/fieldsVarProWeb.html.twig */
class __TwigTemplate_c10675cc49cc3fb86c366691a44374fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CpanVariables/form.html.twig");

        $this->blocks = array(
            'template' => array($this, 'block_template'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CpanVariables/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["numeroContenidosFijos"] = 4;
        // line 10
        $context["esSuper"] = ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "IdPerfil"), "Id") == "1");
        // line 11
        $context["ValoresIzqDcha"] = array("0" => array("Id" => "0", "Value" => "Izquierda"), "1" => array("Id" => "1", "Value" => "Derecha"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_template($context, array $blocks = array())
    {
        // line 14
        echo "<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-global\">Global [globales]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-mail\">Mail [mail]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-meta\">SEO [meta]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-firmas\">Firmas [signatures]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-contenidosFijos\">Contenidos fijos [staticContents]</a></li>        
    </ul>

    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[dominio] Dominio", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "dominio", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][dominio]", 4 => "datos_global_dominio", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "dominio"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[empresa] Empresa / Titular", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "empresa", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][empresa]", 4 => "datos_global_empresa", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "empresa"), 6 => "100", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[cif] CIF/DNI", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "cif", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][cif]", 4 => "datos_global_cif", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "cif"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[direccion] Dirección", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "direccion", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][direccion]", 4 => "datos_global_direccion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "direccion"), 6 => "100", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[poblacion] Población", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "poblacion", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][poblacion]", 4 => "datos_global_poblacion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "poblacion"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[provincia] Provincia", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "provincia", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][provincia]", 4 => "datos_global_provincia", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "provincia"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[codigoPostal] Código Postal", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "codigoPostal", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][codigoPostal]", 4 => "datos_global_codigoPostal", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "codigoPostal"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[telefono1] Teléfono1", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "telefono1", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][telefono1]", 4 => "datos_global_telefono1", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "telefono1"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[telefono2] Teléfono2", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "telefono2", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][telefono2]", 4 => "datos_global_telefono2", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "telefono2"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[emailInfo] Email Info", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "emailInfo", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][emailInfo]", 4 => "datos_global_emailInfo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "emailInfo"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[logoOldBrowser] Archivo imagen logo navegador antiguo", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "logoOldBrowser", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][logoOldBrowser]", 4 => "datos_global_logoOldBrowser", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "logoOldBrowser"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[lang] Idiomas disponibles", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "visibilidad"), "globales"), "lang", array(), "array") || (isset($context["esSuper"]) ? $context["esSuper"] : null)), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][lang]", 4 => "datos_global_lang", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "globales"), "lang"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "

    </div>

    <div id=\"tabs-mail\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[socket] Tipo de servidor (smtp)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][socket]", 4 => "datos_mail_socket", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "socket"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[host] Servidor mail", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][host]", 4 => "datos_mail_host", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "host"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[smtp_auth] Requiere autenticación (true)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][smtp_auth]", 4 => "datos_mail_smtp_auth", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "smtp_auth"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[port] Puerto (25)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][port]", 4 => "datos_mail_port", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "port"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[user_name] Usuario", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][user_name]", 4 => "datos_mail_user_name", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "user_name"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[password] Password", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][password]", 4 => "datos_mail_password", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "password"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[from] Email envío", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][from]", 4 => "datos_mail_from", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "from"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[from_name] Nombre", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][from_name]", 4 => "datos_mail_from_name", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "from_name"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[timeout] Tiempo espera (30seg)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][timeout]", 4 => "datos_mail_timeout", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "timeout"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[mensajeConfirmacion] Mensaje de confirmación", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][mensajeConfirmacion]", 4 => "datos_mail_mensajeConfirmacion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "mensajeConfirmacion"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[mensajeExito] Mensaje de éxito", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][mensajeExito]", 4 => "datos_mail_mensajeExito", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "mensajeExito"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[mensajeError] Mensaje de error", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][mensajeError]", 4 => "datos_mail_mensajeError", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "mensajeError"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textarea", array(0 => array("caption" => "[textoLOPD] Texto LOPD", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[mail][textoLOPD]", 3 => "datos_mail_textoLOPD", 4 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "mail"), "textoLOPD"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "           
    </div>
        
    <div id=\"tabs-meta\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[webName] Nombre de la Web", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][webName]", 4 => "datos_meta_webName", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "webName"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textarea", array(0 => array("caption" => "[title] Título", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][title]", 3 => "datos_meta_title", 4 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "title"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "              
        ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textarea", array(0 => array("caption" => "[description] Description", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][description]", 3 => "datos_meta_description", 4 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "description"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "              
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textarea", array(0 => array("caption" => "[keyWords] Keywords (separados por coma)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][keyWords]", 3 => "datos_meta_keyWords", 4 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "keyWords"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "              
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[titleSimple] TitleSimple", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[meta][titleSimple]", 4 => "datos_meta_titleSimple", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "titleSimple"), 6 => "1", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "select", array(0 => array("caption" => "[titlePosition] TitlePosition", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][titlePosition]", 3 => "datos_meta_titlePosition", 4 => null, 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "titlePosition"), 6 => (isset($context["ValoresIzqDcha"]) ? $context["ValoresIzqDcha"] : null), 7 => "chzn-select", 8 => 1), "method"), "html", null, true);
        echo "                
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[revisitAfter] revisitAfter", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][revisitAfter]", 4 => "datos_meta_revisitAfter", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "revisitAfter"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[author] Author", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][author]", 4 => "datos_meta_author", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "author"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[owner] Propietario", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][owner]", 4 => "datos_meta_owner", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "owner"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[geoRegion] geoRegion", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoRegion]", 4 => "datos_meta_geoRegion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "geoRegion"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[geoPlaceName] geoPlaceName", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoPlaceName]", 4 => "datos_meta_geoPlaceName", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "geoPlaceName"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[geoPositionLongitude] geoPositionLongitude", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoPositionLongitude]", 4 => "datos_meta_geoPositionLongitude", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "geoPositionLongitude"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[geoPositionLatitude] geoPositionLatitude", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoPositionLatitude]", 4 => "datos_meta_geoPositionLatitude", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "geoPositionLatitude"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[idGoogleAnalytics] Identificador de Google Analytics", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][idGoogleAnalytics]", 4 => "datos_meta_idGoogleAnalytics", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "meta"), "idGoogleAnalytics"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        </div>

    <div id=\"tabs-firmas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[links] Links separados por coma", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[signatures][links]", 4 => "datos_signatures_links", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "signatures"), "links"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[locations] Localizaciones geográficas separadas por coma", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[signatures][locations]", 4 => "datos_signatures_links", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "signatures"), "locations"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "

        ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "signatures"), "services"));
        foreach ($context['_seq'] as $context["language"] => $context["services"]) {
            // line 78
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => (("[services][" . (isset($context["language"]) ? $context["language"] : null)) . "] Servicios separados por coma"), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[signatures][services][" . (isset($context["language"]) ? $context["language"] : null)) . "]"), 4 => ("datos_signatures_services_" . (isset($context["language"]) ? $context["language"] : null)), 5 => (isset($context["services"]) ? $context["services"] : null), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['services'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "    </div>

    <div id=\"tabs-contenidosFijos\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["numeroContenidosFijos"]) ? $context["numeroContenidosFijos"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => ((("[" . (isset($context["i"]) ? $context["i"] : null)) . "] Contenido fijo ") . (isset($context["i"]) ? $context["i"] : null)), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[staticContents][" . (isset($context["i"]) ? $context["i"] : null)) . "]"), 4 => ("datos_staticContents_sc" . (isset($context["i"]) ? $context["i"] : null)), 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "staticContents"), (isset($context["i"]) ? $context["i"] : null), array(), "array"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 86
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarProWeb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 86,  247 => 84,  243 => 83,  238 => 80,  229 => 78,  225 => 77,  220 => 75,  216 => 74,  209 => 70,  205 => 69,  201 => 68,  197 => 67,  193 => 66,  189 => 65,  185 => 64,  181 => 63,  177 => 62,  173 => 61,  169 => 60,  165 => 59,  161 => 58,  157 => 57,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  58 => 27,  54 => 26,  50 => 25,  37 => 14,  34 => 13,  29 => 11,  27 => 10,  25 => 9,);
    }
}
