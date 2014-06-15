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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[title] Título", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[title]", 4 => "datos_title", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "title"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[url] Url de la web (con http://)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[url]", 4 => "datos_url", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "url"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[eMailWebMaster] EMail WebMaster", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[eMailWebMaster]", 4 => "datos_eMailWebMaster", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "eMailWebMaster"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[eMailSuperAdministrator] EMail SuperAdministrador", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[eMailSuperAdministrator]", 4 => "datos_eMailSuperAdministrator", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "eMailSuperAdministrator"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "fecha", array(0 => array("caption" => "[activeFrom] Vigente desde", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[activeFrom]", 3 => "datos_activeFrom", 4 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "activeFrom"), 5 => "19", 6 => "datepicker"), "method"), "html", null, true);
        echo "
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "fecha", array(0 => array("caption" => "[activeTo] Vigente hasta", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[activeTo]", 3 => "datos_activeTo", 4 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "activeTo"), 5 => "19", 6 => "datepicker"), "method"), "html", null, true);
        echo "
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[maxLengthUrlsFriendly] Longitud máxima URLs y nombres amigables", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxLengthUrlsFriendly]", 4 => "datos_maxLengthUrlsFriendly", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "maxLengthUrlsFriendly"), 6 => "3", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[allowTypes] Tipos de archivos permitidos (extensiones separadas por coma)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[allowTypes]", 4 => "datos_allowTypes", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "allowTypes"), 6 => "100", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[exportTypes] Formatos de exportación permitidos (extensiones separadas por coma)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[exportTypes]", 4 => "datos_exportTypes", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "exportTypes"), 6 => "100", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[numMaxPages] Núm. máximo de páginas", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxPages]", 4 => "datos_numMaxPages", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "numMaxPages"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[numMaxDocuments] Núm. máx. Documentos", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxDocuments]", 4 => "datos_numMaxDocuments", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "numMaxDocuments"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[numMaxGalery] Núm. máx. Imágenes Galeria", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxGalery]", 4 => "datos_numMaxGalery", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "numMaxGalery"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[numMaxVideos] Núm. máx. Vídeos Galeria", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxVideos]", 4 => "datos_numMaxVideos", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "numMaxVideos"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[numMaxAudios] Núm. máx. Audios Galeria", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxAudios]", 4 => "datos_numMaxAudios", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "numMaxAudios"), 6 => "6", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[blockRobots] Bloquear Robots de busqueda", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[blockRobots]", 4 => "datos_blockRobots", 5 => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "blockRobots"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
    </div>
        
    <div id=\"tabs-visitas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[visitas][activo] Activo", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[visitas][activo]", 4 => "datos_visitas_activo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "visitas"), "activo"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[visitas][ws] Webservice", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[visitas][ws]", 4 => "datos_visitas_ws", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "visitas"), "ws"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => "[visitas][frecuenciaHorasBorrado] Horas Frecuencia Borrado", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[visitas][frecuenciaHorasBorrado]", 4 => "datos_visitas_frecuenciaHorasBorrado", 5 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "visitas"), "frecuenciaHorasBorrado"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "        
    </div>
        
    ";
        // line 42
        echo "    <div id=\"tabs-varWeb\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        <h5>Control de visibilidad de variables web</h5>
        <div id=\"acordeonVW\" style=\"margin-top:10px;\">
            <h3>Globales [showVarWeb][globales]</h3>
            <div>
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "showVarWeb"), "globales"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => (("[" . (isset($context["nombre"]) ? $context["nombre"] : null)) . "]"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[showVarWeb][globales][" . (isset($context["nombre"]) ? $context["nombre"] : null)) . "]"), 4 => ("datos_showVarWeb_globales_" . (isset($context["nombre"]) ? $context["nombre"] : null)), 5 => (isset($context["valor"]) ? $context["valor"] : null)), "method"), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "            
            </div>

            <h3>Específicas [showVarWeb][especificas]</h3>
            <div>
            ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "showVarWeb"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 55
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => array("caption" => (("[" . (isset($context["nombre"]) ? $context["nombre"] : null)) . "]"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[showVarWeb][especificas][" . (isset($context["nombre"]) ? $context["nombre"] : null)) . "]"), 4 => ("datos_showVarWeb_especificas_" . (isset($context["nombre"]) ? $context["nombre"] : null)), 5 => (isset($context["valor"]) ? $context["valor"] : null)), "method"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
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
        return array (  158 => 57,  149 => 55,  145 => 54,  138 => 49,  129 => 48,  125 => 47,  118 => 42,  112 => 38,  108 => 37,  104 => 36,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  41 => 18,  31 => 10,  28 => 9,);
    }
}
