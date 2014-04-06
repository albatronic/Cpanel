<?php

/* CpanVariables/fieldsVarProEnv.html.twig */
class __TwigTemplate_907e270bb089e1302a3a00d499e7f1b3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_template($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-global\">Global</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-visitas\">Control Visitas</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-varWeb\">Visibilidad Var Web</a></li>          
    </ul>
        
    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 18
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[title] Título", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[title]", 4 => "datos_title", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "title"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 19
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[url] Url de la web (con http://)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[url]", 4 => "datos_url", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "url"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 20
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[eMailWebMaster] EMail WebMaster", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[eMailWebMaster]", 4 => "datos_eMailWebMaster", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "eMailWebMaster"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 21
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[eMailSuperAdministrator] EMail SuperAdministrador", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[eMailSuperAdministrator]", 4 => "datos_eMailSuperAdministrator", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "eMailSuperAdministrator"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 22
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => array("caption" => "[activeFrom] Vigente desde", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[activeFrom]", 3 => "datos_activeFrom", 4 => $this->getAttribute($this->getAttribute($_values_, "datos"), "activeFrom"), 5 => "19", 6 => "datepicker"), "method"), "html", null, true);
        echo "
        ";
        // line 23
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => array("caption" => "[activeTo] Vigente hasta", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[activeTo]", 3 => "datos_activeTo", 4 => $this->getAttribute($this->getAttribute($_values_, "datos"), "activeTo"), 5 => "19", 6 => "datepicker"), "method"), "html", null, true);
        echo "
        ";
        // line 24
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[maxLengthUrlsFriendly] Longitud máxima URLs y nombres amigables", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxLengthUrlsFriendly]", 4 => "datos_maxLengthUrlsFriendly", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "maxLengthUrlsFriendly"), 6 => "3", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 25
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[allowTypes] Tipos de archivos permitidos (extensiones separadas por coma)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[allowTypes]", 4 => "datos_allowTypes", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "allowTypes"), 6 => "100", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numMaxPages] Núm. máximo de páginas", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxPages]", 4 => "datos_numMaxPages", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numMaxPages"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 27
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numMaxDocuments] Núm. máx. Documentos", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxDocuments]", 4 => "datos_numMaxDocuments", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numMaxDocuments"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 28
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numMaxGalery] Núm. máx. Imágenes Galeria", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxGalery]", 4 => "datos_numMaxGalery", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numMaxGalery"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 29
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numMaxVideos] Núm. máx. Vídeos Galeria", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxVideos]", 4 => "datos_numMaxVideos", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numMaxVideos"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numMaxAudios] Núm. máx. Audios Galeria", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxAudios]", 4 => "datos_numMaxAudios", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numMaxAudios"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[blockRobots] Bloquear Robots de busqueda", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[blockRobots]", 4 => "datos_blockRobots", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "blockRobots"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
    </div>
        
    <div id=\"tabs-visitas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 35
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[visitas][activo] Activo", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[visitas][activo]", 4 => "datos_visitas_activo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "visitas"), "activo"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 36
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[visitas][ws] Webservice", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[visitas][ws]", 4 => "datos_visitas_ws", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "visitas"), "ws"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 37
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[visitas][frecuenciaHorasBorrado] Horas Frecuencia Borrado", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[visitas][frecuenciaHorasBorrado]", 4 => "datos_visitas_frecuenciaHorasBorrado", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "visitas"), "frecuenciaHorasBorrado"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "        
    </div>
        
    ";
        // line 41
        echo "    <div id=\"tabs-varWeb\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        <h5>Control de visibilidad de variables web</h5>
        <div id=\"acordeonVW\" style=\"margin-top:10px;\">
            <h3>Globales [showVarWeb][globales]</h3>
            <div>
                ";
        // line 46
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "showVarWeb"), "globales"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 47
            echo "                    ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[" . $_nombre_) . "]"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[showVarWeb][globales][" . $_nombre_) . "]"), 4 => ("datos_showVarWeb_globales_" . $_nombre_), 5 => $_valor_), "method"), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "            
            </div>

            <h3>Específicas [showVarWeb][especificas]</h3>
            <div>
            ";
        // line 53
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "showVarWeb"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 54
            echo "                ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[" . $_nombre_) . "]"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[showVarWeb][especificas][" . $_nombre_) . "]"), 4 => ("datos_showVarWeb_especificas_" . $_nombre_), 5 => $_valor_), "method"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "            </div>
        </div>
    </div>        
</div>
";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarProEnv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 56,  184 => 54,  179 => 53,  172 => 48,  160 => 47,  155 => 46,  148 => 41,  140 => 37,  134 => 36,  128 => 35,  119 => 31,  113 => 30,  107 => 29,  101 => 28,  95 => 27,  89 => 26,  83 => 25,  77 => 24,  71 => 23,  65 => 22,  59 => 21,  53 => 20,  47 => 19,  41 => 18,  31 => 10,  28 => 9,);
    }
}
