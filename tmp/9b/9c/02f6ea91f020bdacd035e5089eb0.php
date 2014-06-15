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
        if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "solapaActiva") == "arbol")) {
            echo "  ui-tabs-selected ui-state-active";
        }
        echo "\">
            <a href=\"#arbol\" onclick='\$( \"#solapaActiva\" ).val(\"arbol\");'>Árbol de Contenidos</a>
        </li>
        <li class=\"ui-state-default ui-corner-top";
        // line 15
        if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "solapaActiva") == "general")) {
            echo "  ui-tabs-selected ui-state-active";
        }
        echo "\">
            <a href=\"#general\" onclick='\$( \"#solapaActiva\" ).val(\"general\");'>";
        // line 16
        if ($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Titulo")) {
            echo "<b>";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Titulo"), 0, 40), "html", null, true);
            echo "</b> ...";
        } else {
            echo "Contenido";
        }
        echo "</a>
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "publicar", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Publish"), 1 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Publish]"), 2 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Publish"), 3 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Publish"), "IDTipo")), "method"), "html", null, true);
        echo "
        </li>
        
        ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getPrimaryKeyValue") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "EsEvento"), "IDTipo"))) {
            // line 21
            echo "            <li class=\"ui-state-default ui-corner-top";
            if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "solapaActiva") == "eventos")) {
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
        if ((($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "varEnvMod"), "showCommonFields") == "1") || ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "IdPerfil"), "Id") == "1"))) {
            // line 27
            echo "        <li class=\"ui-state-default ui-corner-top";
            if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "solapaActiva") == "fieldsComunes")) {
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
        $template = $this->env->resolveTemplate(($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "/arbol.html.twig"));
        $template->display(array_merge($context, array("arbol" => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getArbolHijos"), "subtemplate" => "arbolEditar.html.twig")));
        // line 36
        echo "    </div>
        
    <div id=\"general\">              
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "select", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "IdSeccion"), 1 => "field_title", 2 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[IdSeccion]"), 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_IdSeccion"), 4 => null, 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "IdSeccion"), "Id"), 6 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "IdSeccion"), "fetchAll", array(0 => "Titulo", 1 => 0), "method"), 7 => "chzn-select", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Titulo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Titulo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Titulo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Titulo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "
        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Subtitulo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Subtitulo]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Subtitulo"), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Subtitulo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "3"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textarea", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Resumen"), 1 => "field_title", 2 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Resumen]"), 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Resumen"), 4 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Resumen"), 5 => null, 6 => null, 7 => "textarea", 8 => "4"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textarea", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "Desarrollo"), 1 => "field_title", 2 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[Desarrollo]"), 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_Desarrollo"), 4 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Desarrollo"), 5 => null, 6 => null, 7 => "textarea", 8 => "5"), "method"), "html", null, true);
        echo "
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "MostrarTituloPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[MostrarTituloPortada]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_MostrarTituloPortada"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "MostrarTituloPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "MostrarTituloContenido"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[MostrarTituloContenido]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_MostrarTituloContenido"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "MostrarTituloContenido"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "MostrarSubtituloPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[MostrarSubtituloPortada]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_MostrarSubtituloPortada"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "MostrarSubtituloPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "MostrarSubtituloContenido"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[MostrarSubtituloContenido]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_MostrarSubtituloContenido"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "MostrarSubtituloContenido"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "MostrarResumenPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[MostrarResumenPortada]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_MostrarResumenPortada"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "MostrarResumenPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "MostrarResumenContenido"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[MostrarResumenContenido]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_MostrarResumenContenido"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "MostrarResumenContenido"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "BlogPublicar"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[BlogPublicar]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_BlogPublicar"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "BlogPublicar"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "BlogMostrarEnPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[BlogMostrarEnPortada]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_BlogMostrarEnPortada"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "BlogMostrarEnPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "BlogPermitirComentarios"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[BlogPermitirComentarios]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_BlogPermitirComentarios"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "BlogPermitirComentarios"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 54
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "NoticiaPublicar"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[NoticiaPublicar]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_NoticiaPublicar"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "NoticiaPublicar"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "NoticiaMostrarEnPortada"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[NoticiaMostrarEnPortada]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_NoticiaMostrarEnPortada"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "NoticiaMostrarEnPortada"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 57
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "EsEvento"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[EsEvento]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_EsEvento"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "EsEvento"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input", array(0 => $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "EsWiki"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "[EsWiki]"), 4 => ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "_EsWiki"), 5 => $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "EsWiki"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "

        ";
        // line 60
        $this->env->loadTemplate("_global/metaDatos.html.twig")->display($context);
        echo "       
    </div>
    
    ";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getPrimaryKeyValue") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "EsEvento"), "IDTipo"))) {
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
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/\" + controller + \"/list/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getPrimaryKeyValue"), "html", null, true);
        echo "' width='100%' height='520'><p>Tu navegador no soporta iframes</p></iframe>\";

    \$('#'+idDiv).html(url);
}

function cargaEventos(idDiv) {

    var url = \"<iframe src='";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "/EvenEventos/listPopup/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "Id"), "html", null, true);
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
        return array (  210 => 82,  198 => 75,  187 => 67,  184 => 66,  180 => 64,  178 => 63,  172 => 60,  167 => 58,  162 => 57,  158 => 55,  153 => 54,  149 => 52,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  92 => 36,  89 => 35,  86 => 34,  81 => 30,  71 => 27,  69 => 26,  66 => 25,  56 => 21,  54 => 20,  48 => 17,  38 => 16,  32 => 15,  24 => 12,  19 => 9,);
    }
}
