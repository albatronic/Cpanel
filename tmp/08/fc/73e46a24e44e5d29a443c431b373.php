<?php

/* GconSecciones/fields.html.twig */
class __TwigTemplate_08fc73e46a24e44e5d29a443c431b373 extends Twig_Template
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
        echo "<script>

    \$(function(){
        \$('#menuArbol').menu();      
    });
    
</script> 
<div id=\"tabs1\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#arbol\">Árbol de Secciones</a></li>
        <li class=\"ui-state-default ui-corner-top";
        // line 19
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($_values_, "solapaActiva") == "general")) {
            echo "  ui-tabs-selected ui-state-active";
        }
        echo "\">
            <a href=\"#general\" onclick='\$( \"#solapaActiva\" ).val(\"general\");'>";
        // line 20
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if ($this->getAttribute($_datos_, "Titulo")) {
            echo "<b>";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($_datos_, "Titulo"), 0, 40), "html", null, true);
            echo "</b> ...";
        } else {
            echo "Sección";
        }
        echo "</a>
            ";
        // line 21
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "publicar", array(0 => $this->getAttribute($_atributos_, "Publish"), 1 => ($this->getAttribute($_values_, "controller") . "[Publish]"), 2 => ($this->getAttribute($_values_, "controller") . "_Publish"), 3 => $this->getAttribute($this->getAttribute($_datos_, "Publish"), "IDTipo")), "method"), "html", null, true);
        echo "
        </li>     
        ";
        // line 23
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "showCommonFields") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
            // line 24
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
        // line 27
        echo "                      
    </ul>

    <div id=\"arbol\">
        ";
        // line 31
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        $template = $this->env->resolveTemplate(($this->getAttribute($_values_, "controller") . "/arbol.html.twig"));
        $template->display(array_merge($context, array("arbol" => $this->getAttribute($_datos_, "getArbolHijos"), "subtemplate" => "arbolEditar.html.twig")));
        echo "        
    </div> 
        
    <div id=\"general\">
        ";
        // line 35
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Titulo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Titulo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Titulo"), 5 => $this->getAttribute($_datos_, "Titulo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 36
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Subtitulo"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Subtitulo]"), 4 => ($this->getAttribute($_values_, "controller") . "_Subtitulo"), 5 => $this->getAttribute($_datos_, "Subtitulo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method"), "html", null, true);
        echo "
        ";
        // line 37
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => $this->getAttribute($_atributos_, "Introduccion"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[Introduccion]"), 3 => ($this->getAttribute($_values_, "controller") . "_Introduccion"), 4 => $this->getAttribute($_datos_, "Introduccion"), 5 => null, 6 => null, 7 => "textarea", 8 => "3"), "method"), "html", null, true);
        echo "
        ";
        // line 38
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarTitulo"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarTitulo]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarTitulo"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarTitulo"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 39
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarSubtitulo"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarSubtitulo]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarSubtitulo"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarSubtitulo"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 40
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarIntroduccion"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarIntroduccion]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarIntroduccion"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarIntroduccion"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 41
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MostrarSubsecciones"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MostrarSubsecciones]"), 4 => ($this->getAttribute($_values_, "controller") . "_MostrarSubsecciones"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MostrarSubsecciones"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        if (isset($context["Descripcion"])) { $_Descripcion_ = $context["Descripcion"]; } else { $_Descripcion_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "radio", array(0 => $this->getAttribute($_atributos_, "ModoMostrarContenidos"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[ModoMostrarContenidos]"), 3 => ($this->getAttribute($_values_, "controller") . "_ModoMostrarContenidos"), 4 => $this->getAttribute($this->getAttribute($_datos_, "ModoMostrarContenidos"), "IDTipo"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ModoMostrarContenidos"), "fetchAll", array(0 => $_Descripcion_, 1 => 0), "method"), 6 => "chzn-radio", 7 => "22"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "CriterioOrdenContenidosHijos"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[CriterioOrdenContenidosHijos]"), 3 => ($this->getAttribute($_values_, "controller") . "_CriterioOrdenContenidosHijos"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "CriterioOrdenContenidosHijos"), "IDTipo"), 6 => $this->getAttribute($this->getAttribute($_datos_, "CriterioOrdenContenidosHijos"), "fetchAll", array(0 => null, 1 => 0), "method"), 7 => "chzn-select", 8 => "23"), "method"), "html", null, true);
        echo "
        ";
        // line 44
        $this->env->loadTemplate("_global/metaDatos.html.twig")->display($context);
        echo "         
        ";
        // line 45
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "especificas"), "numMenus") > 0) || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1))) {
            // line 46
            echo "            ";
            // line 55
            echo "            <div id=\"tabsMostrarEnMenu\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">

                <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
                    ";
            // line 58
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "especificas"), "numMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["nMenu"]) {
                // line 59
                echo "                    <li class=\"ui-state-default ui-corner-top\">
                        <a href=\"#mostrarEnMenu";
                // line 60
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                echo twig_escape_filter($this->env, $_nMenu_, "html", null, true);
                echo "\" ";
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                if (($this->getAttribute($_datos_, "getMostrarEnMenuN", array(0 => $_nMenu_), "method") == "1")) {
                    echo " style=\"font-weight: bold;\"";
                }
                echo ">";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_atributos_, ("MostrarEnMenu" . $_nMenu_), array(), "array"), "caption"), "html", null, true);
                echo "</a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nMenu'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 62
            echo "            
                </ul>

                ";
            // line 65
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "especificas"), "numMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["nMenu"]) {
                // line 66
                echo "                <div id=\"mostrarEnMenu";
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                echo twig_escape_filter($this->env, $_nMenu_, "html", null, true);
                echo "\">
                    <p>
                    ";
                // line 68
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, ("MostrarEnMenu" . $_nMenu_), array(), "array"), 1 => "field_title", 2 => "checkbox", 3 => ((($this->getAttribute($_values_, "controller") . "[MostrarEnMenu") . $_nMenu_) . "]"), 4 => (($this->getAttribute($_values_, "controller") . "_MostrarEnMenu") . $_nMenu_), 5 => $this->getAttribute($_datos_, "getMostrarEnMenuN", array(0 => $_nMenu_), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                    ";
                // line 69
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, ("EtiquetaWeb" . $_nMenu_), array(), "array"), 1 => "field_title", 2 => "text", 3 => ((($this->getAttribute($_values_, "controller") . "[EtiquetaWeb") . $_nMenu_) . "]"), 4 => (($this->getAttribute($_values_, "controller") . "_EtiquetaWeb") . $_nMenu_), 5 => $this->getAttribute($_datos_, "getEtiquetaWebN", array(0 => $_nMenu_), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "13"), "method"), "html", null, true);
                echo "
                    ";
                // line 70
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["nMenu"])) { $_nMenu_ = $context["nMenu"]; } else { $_nMenu_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, ("SubetiquetaWeb" . $_nMenu_), array(), "array"), 1 => "field_title", 2 => "text", 3 => ((($this->getAttribute($_values_, "controller") . "[SubetiquetaWeb") . $_nMenu_) . "]"), 4 => (($this->getAttribute($_values_, "controller") . "_SubetiquetaWeb") . $_nMenu_), 5 => $this->getAttribute($_datos_, "getSubetiquetaWebN", array(0 => $_nMenu_), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "13"), "method"), "html", null, true);
                echo "                            
                    </p>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nMenu'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 73
            echo "   

            </div>

        ";
        }
        // line 78
        echo "
        ";
        // line 86
        echo "
    </div>

    ";
        // line 89
        $this->env->loadTemplate("_global/fieldsComunes.html.twig")->display($context);
        // line 90
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "GconSecciones/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 90,  271 => 89,  266 => 86,  263 => 78,  256 => 73,  241 => 70,  232 => 69,  223 => 68,  216 => 66,  211 => 65,  206 => 62,  186 => 60,  183 => 59,  178 => 58,  173 => 55,  171 => 46,  167 => 45,  163 => 44,  155 => 43,  146 => 42,  138 => 41,  130 => 40,  122 => 39,  114 => 38,  106 => 37,  98 => 36,  90 => 35,  80 => 31,  74 => 27,  63 => 24,  59 => 23,  50 => 21,  38 => 20,  31 => 19,  19 => 9,);
    }
}
