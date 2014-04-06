<?php

/* GconContenidos/fields.html.twig */
class __TwigTemplate_9b9c02f6ea91f020bdacd035e5089eb0 extends Twig_Template
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
<div id=\"tabs1\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top";
        // line 12
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($_values_, "solapaActiva") == "arbol")) {
            echo "  ui-tabs-selected ui-state-active";
        }
        echo "\">
            <a href=\"#arbol\" onclick='\$( \"#solapaActiva\" ).val(\"arbol\");'>Árbol de Contenidos</a>
        </li>
        <li class=\"ui-state-default ui-corner-top";
        // line 15
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($_values_, "solapaActiva") == "general")) {
            echo "  ui-tabs-selected ui-state-active";
        }
        echo "\">
            <a href=\"#general\" onclick='\$( \"#solapaActiva\" ).val(\"general\");'>";
        // line 16
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Titulo")) {
            echo "<b>";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($_datos_, "Titulo"), 0, 40), "html", null, true);
            echo "</b> ...";
        } else {
            echo "Contenido";
        }
        echo "</a>
            ";
        // line 17
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "publicar", array(0 => $this->getAttribute($_atributos_, "Publish"), 1 => ($this->getAttribute($_values_, "controller") . "[Publish]"), 2 => ($this->getAttribute($_values_, "controller") . "_Publish"), 3 => $this->getAttribute($this->getAttribute($_datos_, "Publish"), "IDTipo")), "method"), "html", null, true);
        echo "
        </li>
        
        ";
        // line 20
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "getPrimaryKeyValue") && $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "EsEvento"), "IDTipo"))) {
            // line 21
            echo "            <li class=\"ui-state-default ui-corner-top";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (($this->getAttribute($_values_, "solapaActiva") == "eventos")) {
                echo "  ui-tabs-selected ui-state-active";
            }
            echo "\">
                <a href=\"#eventos\" onclick=\"cargaEventos('eventos');\">Eventos</a>
            </li>
        ";
        }
        // line 25
        echo "                
        ";
        // line 26
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "showCommonFields") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
            // line 27
            echo "        <li class=\"ui-state-default ui-corner-top";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (($this->getAttribute($_values_, "solapaActiva") == "fieldsComunes")) {
                echo "  ui-tabs-selected ui-state-active";
            }
            echo "\">
            <a href=\"#fieldsComunes\" onclick='\$( \"#solapaActiva\" ).val(\"fieldsComunes\");'>Más detalles...</a>
        </li>        
        ";
        }
        // line 30
        echo "              
    </ul>
        
    ";
        // line 34
        echo "    <div id=\"arbol\">        
        ";
        // line 35
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $template = $this->env->resolveTemplate(($this->getAttribute($_values_, "controller") . "/arbol.html.twig"));
        $template->display(array_merge($context, array("arbol" => $this->getAttribute($this->getAttribute($_values_, "datos"), "getArbolHijos"), "subtemplate" => "arbolEditar.html.twig")));
        // line 36
        echo "    </div>
        
    <div id=\"general\">     
        ";
        // line 39
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "IdSeccion"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdSeccion]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdSeccion"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdSeccion"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdSeccion"), "fetchAll", array(0 => "Titulo", 1 => 0), "method"), 7 => "chzn-select", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 40
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Titulo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Titulo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Titulo"), 5 => $this->getAttribute($_datos_, "Titulo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "
        ";
        // line 41
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Subtitulo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Subtitulo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Subtitulo"), 5 => $this->getAttribute($_datos_, "Subtitulo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "3"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => $this->getAttribute($_atributos_, "Resumen"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[Resumen]"), 3 => ($this->getAttribute($_values_, "controller") . "_Resumen"), 4 => $this->getAttribute($_datos_, "Resumen"), 5 => null, 6 => null, 7 => "textarea", 8 => "4"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => $this->getAttribute($_atributos_, "Desarrollo"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[Desarrollo]"), 3 => ($this->getAttribute($_values_, "controller") . "_Desarrollo"), 4 => $this->getAttribute($_datos_, "Desarrollo"), 5 => null, 6 => null, 7 => "textarea", 8 => "5"), "method"), "html", null, true);
        echo "
        ";
        // line 44
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarTituloPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarTituloPortada]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarTituloPortada"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarTituloPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 45
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarTituloContenido"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarTituloContenido]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarTituloContenido"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarTituloContenido"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 46
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarSubtituloPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarSubtituloPortada]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarSubtituloPortada"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarSubtituloPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 47
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarSubtituloContenido"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarSubtituloContenido]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarSubtituloContenido"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarSubtituloContenido"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 48
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarResumenPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarResumenPortada]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarResumenPortada"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarResumenPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 49
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarResumenContenido"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarResumenContenido]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarResumenContenido"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarResumenContenido"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 50
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "BlogPublicar"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[BlogPublicar]"), 4 => ($this->getAttribute($_values_, "controller") . "_BlogPublicar"), 5 => $this->getAttribute($this->getAttribute($_datos_, "BlogPublicar"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 51
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "BlogMostrarEnPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[BlogMostrarEnPortada]"), 4 => ($this->getAttribute($_values_, "controller") . "_BlogMostrarEnPortada"), 5 => $this->getAttribute($this->getAttribute($_datos_, "BlogMostrarEnPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 52
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "BlogPermitirComentarios"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[BlogPermitirComentarios]"), 4 => ($this->getAttribute($_values_, "controller") . "_BlogPermitirComentarios"), 5 => $this->getAttribute($this->getAttribute($_datos_, "BlogPermitirComentarios"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 54
        echo "        ";
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "NoticiaPublicar"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[NoticiaPublicar]"), 4 => ($this->getAttribute($_values_, "controller") . "_NoticiaPublicar"), 5 => $this->getAttribute($this->getAttribute($_datos_, "NoticiaPublicar"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 55
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "NoticiaMostrarEnPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[NoticiaMostrarEnPortada]"), 4 => ($this->getAttribute($_values_, "controller") . "_NoticiaMostrarEnPortada"), 5 => $this->getAttribute($this->getAttribute($_datos_, "NoticiaMostrarEnPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 57
        echo "        ";
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EsEvento"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[EsEvento]"), 4 => ($this->getAttribute($_values_, "controller") . "_EsEvento"), 5 => $this->getAttribute($this->getAttribute($_datos_, "EsEvento"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 58
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "EsWiki"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[EsWiki]"), 4 => ($this->getAttribute($_values_, "controller") . "_EsWiki"), 5 => $this->getAttribute($this->getAttribute($_datos_, "EsWiki"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "

        ";
        // line 60
        $this->env->loadTemplate("_global/metaDatos.html.twig")->display($context);
        echo "       
        </div>
    
    ";
        // line 63
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "getPrimaryKeyValue") && $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "EsEvento"), "IDTipo"))) {
            // line 64
            echo "        <div id=\"eventos\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\"></div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        $this->env->loadTemplate("_global/fieldsComunes.html.twig")->display($context);
        echo "            
</div>

<script>
function cargaTab(idDiv,controller) {
    
    \$( \"#solapaActiva\" ).val(idDiv);
    
    var url = \"<iframe src='";
        // line 75
        if (isset($context["appPath"])) { $_appPath_ = $context["appPath"]; } else { $_appPath_ = null; }
        echo twig_escape_filter($this->env, $_appPath_, "html", null, true);
        echo "/\" + controller + \"/list/";
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getPrimaryKeyValue"), "html", null, true);
        echo "' width='100%' height='520'><p>Tu navegador no soporta iframes</p></iframe>\";

    \$('#'+idDiv).html(url);
}

function cargaEventos(idDiv) {

    var url = \"<iframe src='";
        // line 82
        if (isset($context["appPath"])) { $_appPath_ = $context["appPath"]; } else { $_appPath_ = null; }
        echo twig_escape_filter($this->env, $_appPath_, "html", null, true);
        echo "/EvenEventos/listPopup/";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "/";
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
        echo "' width='100%' height='520'><p>Tu navegador no soporta iframes</p></iframe>\";

    \$('#'+idDiv).html(url);
}
</script>";
    }

    public function getTemplateName()
    {
        return "GconContenidos/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 82,  285 => 75,  274 => 67,  271 => 66,  267 => 64,  264 => 63,  258 => 60,  249 => 58,  240 => 57,  232 => 55,  223 => 54,  215 => 52,  207 => 51,  199 => 50,  191 => 49,  183 => 48,  175 => 47,  167 => 46,  159 => 45,  151 => 44,  143 => 43,  135 => 42,  127 => 41,  119 => 40,  111 => 39,  106 => 36,  102 => 35,  99 => 34,  94 => 30,  83 => 27,  79 => 26,  76 => 25,  65 => 21,  62 => 20,  52 => 17,  40 => 16,  33 => 15,  24 => 12,  19 => 9,);
    }
}
