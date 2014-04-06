<?php

/* CpanVariables/fieldsVarModEnv.html.twig */
class __TwigTemplate_84e1ca4bc73d2a8909180443b98d4482 extends Twig_Template
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

    // line 15
    public function block_template($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 19
        $context["ValoresSN"] = array("0" => array("Id" => "0", "Value" => "No"), "1" => array("Id" => "1", "Value" => "Si"));
        // line 20
        $context["ValoresIzqDcha"] = array("0" => array("Id" => "0", "Value" => "Izquierda"), "1" => array("Id" => "1", "Value" => "Derecha"));
        // line 21
        echo "
";
        // line 24
        echo "<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">

        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-global\">Global</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-urlAmigable\">URL's</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-siteMap\">SiteMap</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-meta\">Meta Información</a></li>

        ";
        // line 32
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "numberOfImages") > 0)) {
            // line 33
            echo "            ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($_values_, "datos"), "numberOfImages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "            <li class=\"ui-state-default ui-corner-tope\">
                <a href=\"#tabs-imagen";
                // line 35
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $_i_, "html", null, true);
                echo "\">
                ";
                // line 36
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "caption")) {
                    // line 37
                    echo "                    ";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "caption"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 39
                    echo "                    Imagen ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "
                ";
                }
                // line 41
                echo "                </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "        ";
        }
        // line 45
        echo "            
        ";
        // line 46
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withGalery") > 0)) {
            // line 47
            echo "        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-galeria\">Galería</a></li>
        ";
        }
        // line 49
        echo "        ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withTiny") > 0)) {
            // line 50
            echo "        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-tiny\">Imágenes Tiny</a></li>   
        ";
        }
        // line 51
        echo "    
        ";
        // line 52
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withDocuments") > 0)) {
            // line 53
            echo "        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-document\">Documentos</a></li>
        ";
        }
        // line 55
        echo "        ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withVideos") > 0)) {
            // line 56
            echo "        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-video\">Vídeos</a></li>   
        ";
        }
        // line 57
        echo "  
        ";
        // line 58
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withAudios") > 0)) {
            // line 59
            echo "        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-audio\">Audios</a></li>   
        ";
        }
        // line 60
        echo "           
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-columnas\">Columnas</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-especificas\">Específicas</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-ordenesWeb\">Órdenes Web</a></li>        
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-controller\">Controller</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-relaciones\">Relacionar con ...</a></li>        
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-editorTiny\">Editor Tiny</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-varWeb\">Visibilidad Var Web</a></li>
    </ul>

    ";
        // line 71
        echo "    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 72
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[isModuleRoot] Es el módulo padre", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[isModuleRoot]", 4 => "datos_isModuleRoot", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "isModuleRoot")), "method"), "html", null, true);
        echo "
        ";
        // line 73
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[translatable] Es multi idioma", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[translatable]", 4 => "datos_translatable", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "translatable")), "method"), "html", null, true);
        echo "
        ";
        // line 74
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[searchable] Es buscable", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[searchable]", 4 => "datos_searchable", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "searchable")), "method"), "html", null, true);
        echo "
        ";
        // line 75
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[showCommonFields] Mostrar campos comunes", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[showCommonFields]", 4 => "datos_showCommonFields", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "showCommonFields")), "method"), "html", null, true);
        echo "
        ";
        // line 76
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numMaxRecords] Número máximo registros", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numMaxRecords]", 4 => "datos_numMaxRecords", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numMaxRecords"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 77
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[numberOfImages] Número de imágenes de diseño (0=sin imágenes)", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[numberOfImages]", 4 => "datos_numberOfImages", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "numberOfImages"), 6 => "3", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 78
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[withMetadata] Hay meta datos", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[withMetadata]", 4 => "datos_withMetadata", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "withMetadata")), "method"), "html", null, true);
        echo "
        ";
        // line 79
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[addMetadata] Puede añadir meta datos", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[addMetadata]", 4 => "datos_addMetadata", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "addMetadata")), "method"), "html", null, true);
        echo "
        ";
        // line 80
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[deleteMetadata] Puede borrar meta datos", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[deleteMetadata]", 4 => "datos_deleteMetadata", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "deleteMetadata")), "method"), "html", null, true);
        echo "
        ";
        // line 81
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[withTiny] Hay imágenes Tiny", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[withTiny]", 4 => "datos_withTiny", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "withTiny")), "method"), "html", null, true);
        echo "
        ";
        // line 82
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[withGalery] Hay Galeria", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[withGalery]", 4 => "datos_withGalery", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "withGalery")), "method"), "html", null, true);
        echo "
        ";
        // line 83
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[withDocuments] Hay Documentos", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[withDocuments]", 4 => "datos_withDocuments", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "withDocuments")), "method"), "html", null, true);
        echo "
        ";
        // line 84
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[withVideos] Hay Videos", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[withVideos]", 4 => "datos_withVideos", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "withVideos")), "method"), "html", null, true);
        echo "
        ";
        // line 85
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[withAudios] Hay Audios", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[withAudios]", 4 => "datos_withAudios", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "withAudios")), "method"), "html", null, true);
        echo "
        ";
        // line 86
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[maxSizes][image] Tamaño máximo de las imágenes (bytes)", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxSizes][image]", 4 => "datos_maxSizes_image", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "maxSizes"), "image"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "          
        ";
        // line 87
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[maxSizes][document] Tamaño máximo documento (bytes)", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxSizes][document]", 4 => "datos_maxSizes_document", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "maxSizes"), "document"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 88
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[maxSizes][video] Tamaño máximo video (bytes)", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxSizes][video]", 4 => "datos_maxSizes_video", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "maxSizes"), "video"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 89
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[maxSizes][audio] Tamaño máximo Audio (bytes)", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxSizes][audio]", 4 => "datos_maxSizes_audio", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "maxSizes"), "audio"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 90
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[maxSizes][audio] Tamaño máximo Audio (bytes)", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[maxSizes][audio]", 4 => "datos_maxSizes_audio", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "maxSizes"), "audio"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 91
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][ancho] Anchura video", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[video][ancho]", 4 => "datos_video_ancho", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "ancho"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 92
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][alto] Altura video", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[video][alto]", 4 => "datos_video_alto", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "alto"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 93
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][borde] Borde video", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[video][borde]", 4 => "datos_video_borde", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "borde"), 6 => "10", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
    </div>

    ";
        // line 97
        echo "    <div id=\"tabs-urlAmigable\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 98
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[urlFriendlyManagement] Gestionar URL amigables", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[urlFriendlyManagement]", 4 => "datos_urlFriendlyManagement", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "urlFriendlyManagement")), "method"), "html", null, true);
        echo "
        ";
        // line 99
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[showUrlFriendlyManagement] Mostrar gestión URLs amigables", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[showUrlFriendlyManagement]", 4 => "datos_showUrlFriendlyManagement", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "showUrlFriendlyManagement")), "method"), "html", null, true);
        echo "            
        ";
        // line 100
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => "[fieldGeneratorUrlFriendly] Campo generador URL amigable", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[fieldGeneratorUrlFriendly]", 3 => "datos_fieldGeneratorUrlFriendly", 4 => null, 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "fieldGeneratorUrlFriendly"), 6 => $this->getAttribute($_values_, "columnas"), 7 => "chzn-select"), "method"), "html", null, true);
        echo "   
        ";
        // line 101
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[showUrlFriendly] Mostrar Url amigable", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[showUrlFriendly]", 4 => "datos_showUrlFriendly", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "showUrlFriendly")), "method"), "html", null, true);
        echo "
    </div>

    ";
        // line 105
        echo "    <div id=\"tabs-siteMap\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 106
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[showSiteMapManagement] Mostrar gestión Sitemap", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[showSiteMapManagement]", 4 => "datos_showSiteMapManagement", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "showSiteMapManagement")), "method"), "html", null, true);
        echo "
    </div>

    ";
        // line 110
        echo "    <div id=\"tabs-meta\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">     
        ";
        // line 111
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[metatagTitleManagement] Gestionar MetatagTitles", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[metatagTitleManagement]", 4 => "datos_metatagTitleManagement", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "metatagTitleManagement")), "method"), "html", null, true);
        echo "
        ";
        // line 112
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[showMetaManagement] Mostrar gestión Meta", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[showMetaManagement]", 4 => "datos_showMetaManagement", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "showMetaManagement")), "method"), "html", null, true);
        echo "
        ";
        // line 113
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => "[fieldGeneratorMetatagTitle] Campo generador Metatag Title", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[fieldGeneratorMetatagTitle]", 3 => "datos_fieldGeneratorMetatagTitle", 4 => null, 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "fieldGeneratorMetatagTitle"), 6 => $this->getAttribute($_values_, "columnas"), 7 => "chzn-select"), "method"), "html", null, true);
        echo "
        ";
        // line 114
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => "[fieldGeneratorMetatagDescription] Campo generador Metatag Description", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[fieldGeneratorMetatagDescription]", 3 => "datos_fieldGeneratorMetatagDescription", 4 => null, 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "fieldGeneratorMetatagDescription"), 6 => $this->getAttribute($_values_, "columnas"), 7 => "chzn-select"), "method"), "html", null, true);
        echo "
        ";
        // line 115
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => "[fieldGeneratorMetatagKeywords] Campo generador Metatag Keywords", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[fieldGeneratorMetatagKeywords]", 3 => "datos_fieldGeneratorMetatagKeywords", 4 => null, 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "fieldGeneratorMetatagKeywords"), 6 => $this->getAttribute($_values_, "columnas"), 7 => "chzn-select"), "method"), "html", null, true);
        echo "
    </div>

    ";
        // line 119
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "numberOfImages") > 0)) {
            // line 120
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($_values_, "datos"), "numberOfImages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 121
                echo "    <div id=\"tabs-imagen";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $_i_, "html", null, true);
                echo "\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
                // line 122
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][visible] Visible"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][visible]"), 4 => (("datos_images_" . $_i_) . "_visible"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "visible")), "method"), "html", null, true);
                echo "
        ";
                // line 123
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][caption] Caption"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[images][" . $_i_) . "][caption]"), 4 => (("datos_images_" . $_i_) . "_caption"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "caption"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
                echo "
        ";
                // line 124
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][width] Width"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[images][" . $_i_) . "][width]"), 4 => (("datos_images_" . $_i_) . "_width"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "width"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
                echo "
        ";
                // line 125
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][height] Height"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[images][" . $_i_) . "][height]"), 4 => (("datos_images_" . $_i_) . "_height"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "height"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
                echo "
        ";
                // line 126
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][generateThumbnail] Generar Thumbnail"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][generateThumbnail]"), 4 => (("datos_images_" . $_i_) . "generateThumbnail"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "generateThumbnail")), "method"), "html", null, true);
                echo "
        ";
                // line 127
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][widthThumbnail] Anchura Thumbnail"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[images][" . $_i_) . "][widthThumbnail]"), 4 => (("datos_images_" . $_i_) . "_widthThumbnail"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "widthThumbnail"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
                echo "
        ";
                // line 128
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][heightThumbnail] Altura Thumbnail"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[images][" . $_i_) . "][heightThumbnail]"), 4 => (("datos_images_" . $_i_) . "_heightThumbnail"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "heightThumbnail"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
                echo "
        ";
                // line 129
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][mostrarTitulo] Mostrar Título"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][mostrarTitulo]"), 4 => (("datos_images_" . $_i_) . "mostrarTitulo"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "mostrarTitulo")), "method"), "html", null, true);
                echo "            
        ";
                // line 130
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][mostrarNombre] Mostrar Nombre"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][mostrarNombre]"), 4 => (("datos_images_" . $_i_) . "mostrarNombre"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "mostrarNombre")), "method"), "html", null, true);
                echo "
        ";
                // line 131
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][mostrarPieDeFoto] Mostrar Pie de Foto"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][mostrarPieDeFoto]"), 4 => (("datos_images_" . $_i_) . "mostrarPieDeFoto"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "mostrarPieDeFoto")), "method"), "html", null, true);
                echo "
        ";
                // line 132
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][mostrarPublicar] Mostrar Publicar"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][mostrarPublicar]"), 4 => (("datos_images_" . $_i_) . "mostrarPublicar"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "mostrarPublicar")), "method"), "html", null, true);
                echo "        
        ";
                // line 133
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[images][" . $_i_) . "][valorDefectoPublicar] Valor defecto Publicar"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[images][" . $_i_) . "][valorDefectoPublicar]"), 4 => (("datos_images_" . $_i_) . "valorDefectoPublicar"), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "images"), $_i_, array(), "array"), "valorDefectoPublicar")), "method"), "html", null, true);
                echo "        
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 136
            echo "    ";
        }
        // line 137
        echo "
    ";
        // line 139
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withGalery") > 0)) {
            echo "        
    <div id=\"tabs-galeria\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
            // line 141
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][maxWidthImage] Anchura máxima imágenes", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[galery][maxWidthImage]", 4 => "datos_galery_maxWidthImage", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "maxWidthImage"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
            // line 142
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][maxHeightImage] Altura máxima imágenes", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[galery][maxHeightImage]", 4 => "datos_galery_maxHeightImage", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "maxHeightImage"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
            // line 143
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][generateThumbnail] Generar Thumbnail", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[galery][generateThumbnail]", 4 => "datos_galery_generateThumbnail", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "generateThumbnail")), "method"), "html", null, true);
            echo "
        ";
            // line 144
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][widthThumbnail] Anchura Thumbnail", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[galery][widthThumbnail]", 4 => "datos_galery_widthThumbnail", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "widthThumbnail"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
            // line 145
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][heightThumbnail] Altura Thumbnail", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[galery][heightThumbnail]", 4 => "datos_galery_heightThumbnail", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "heightThumbnail"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
            // line 146
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][mostrarTitulo] Mostrar Título", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[galery][mostrarTitulo]", 4 => "datos_galery_mostrarTitulo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "mostrarTitulo")), "method"), "html", null, true);
            echo "            
        ";
            // line 147
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][mostrarNombre] Mostrar Nombre", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[galery][mostrarNombre]", 4 => "datos_galery_mostrarNombre", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "mostrarNombre")), "method"), "html", null, true);
            echo "
        ";
            // line 148
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][mostrarPieDeFoto] Mostrar Pie de Foto", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[galery][mostrarPieDeFoto]", 4 => "datos_galery_mostrarPieDeFoto", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "mostrarPieDeFoto")), "method"), "html", null, true);
            echo "
        ";
            // line 149
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][mostrarPublicar] Mostrar Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[galery][mostrarPublicar]", 4 => "datos_galery_mostrarPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "mostrarPublicar")), "method"), "html", null, true);
            echo "        
        ";
            // line 150
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[galery][valorDefectoPublicar] Valor defecto Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[galery][valorDefectoPublicar]", 4 => "datos_galery_valorDefectoPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "galery"), "valorDefectoPublicar")), "method"), "html", null, true);
            echo "        
    </div>
    ";
        }
        // line 153
        echo "        
    ";
        // line 155
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withTiny") > 0)) {
            echo "         
    <div id=\"tabs-tiny\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
            // line 157
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][maxWidthImage] Anchura máxima imágenes", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[tiny][maxWidthImage]", 4 => "datos_tiny_maxWidthImage", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "maxWidthImage"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
            // line 158
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][maxHeightImage] Altura máxima imágenes", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[tiny][maxHeightImage]", 4 => "datos_tiny_maxHeightImage", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "maxHeightImage"), 6 => "15", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
            // line 159
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][mostrarTitulo] Mostrar Título", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[tiny][mostrarTitulo]", 4 => "datos_tiny_mostrarTitulo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "mostrarTitulo")), "method"), "html", null, true);
            echo "            
        ";
            // line 160
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][mostrarNombre] Mostrar Nombre", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[tiny][mostrarNombre]", 4 => "datos_tiny_mostrarNombre", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "mostrarNombre")), "method"), "html", null, true);
            echo "
        ";
            // line 161
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][mostrarPieDeFoto] Mostrar Pie de Foto", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[tiny][mostrarPieDeFoto]", 4 => "datos_tiny_mostrarPieDeFoto", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "mostrarPieDeFoto")), "method"), "html", null, true);
            echo "
        ";
            // line 162
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][mostrarPublicar] Mostrar Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[tiny][mostrarPublicar]", 4 => "datos_tiny_mostrarPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "mostrarPublicar")), "method"), "html", null, true);
            echo "   
        ";
            // line 163
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[tiny][valorDefectoPublicar] Valor defecto Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[tiny][valorDefectoPublicar]", 4 => "datos_tiny_valorDefectoPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "tiny"), "valorDefectoPublicar")), "method"), "html", null, true);
            echo "            
    </div>
    ";
        }
        // line 166
        echo "        
     ";
        // line 168
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withDocuments") > 0)) {
            echo "         
    <div id=\"tabs-document\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
            // line 170
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[document][mostrarTitulo] Mostrar Título", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[document][mostrarTitulo]", 4 => "datos_document_mostrarTitulo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "document"), "mostrarTitulo")), "method"), "html", null, true);
            echo "            
        ";
            // line 171
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[document][mostrarNombre] Mostrar Nombre", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[document][mostrarNombre]", 4 => "datos_document_mostrarNombre", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "document"), "mostrarNombre")), "method"), "html", null, true);
            echo "
        ";
            // line 172
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[document][mostrarPieDeFoto] Mostrar Pie de Foto", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[document][mostrarPieDeFoto]", 4 => "datos_document_mostrarPieDeFoto", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "document"), "mostrarPieDeFoto")), "method"), "html", null, true);
            echo "
        ";
            // line 173
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[document][mostrarPublicar] Mostrar Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[document][mostrarPublicar]", 4 => "datos_document_mostrarPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "document"), "mostrarPublicar")), "method"), "html", null, true);
            echo "   
        ";
            // line 174
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[document][valorDefectoPublicar] Valor defecto Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[document][valorDefectoPublicar]", 4 => "datos_document_valorDefectoPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "document"), "valorDefectoPublicar")), "method"), "html", null, true);
            echo "            
    </div>
    ";
        }
        // line 176
        echo " 
        
     ";
        // line 179
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withVideos") > 0)) {
            echo "         
    <div id=\"tabs-video\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
            // line 181
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][mostrarTitulo] Mostrar Título", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[video][mostrarTitulo]", 4 => "datos_video_mostrarTitulo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "mostrarTitulo")), "method"), "html", null, true);
            echo "            
        ";
            // line 182
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][mostrarNombre] Mostrar Nombre", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[video][mostrarNombre]", 4 => "datos_video_mostrarNombre", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "mostrarNombre")), "method"), "html", null, true);
            echo "
        ";
            // line 183
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][mostrarPieDeFoto] Mostrar Pie de Foto", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[video][mostrarPieDeFoto]", 4 => "datos_video_mostrarPieDeFoto", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "mostrarPieDeFoto")), "method"), "html", null, true);
            echo "
        ";
            // line 184
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][mostrarPublicar] Mostrar Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[video][mostrarPublicar]", 4 => "datos_video_mostrarPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "mostrarPublicar")), "method"), "html", null, true);
            echo "   
        ";
            // line 185
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[video][valorDefectoPublicar] Valor defecto Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[video][valorDefectoPublicar]", 4 => "datos_video_valorDefectoPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "video"), "valorDefectoPublicar")), "method"), "html", null, true);
            echo "            
    </div>
    ";
        }
        // line 187
        echo "   
        
     ";
        // line 190
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "withAudios") > 0)) {
            echo "         
    <div id=\"tabs-audio\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
            // line 192
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[audio][mostrarTitulo] Mostrar Título", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[audio][mostrarTitulo]", 4 => "datos_audio_mostrarTitulo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "audio"), "mostrarTitulo")), "method"), "html", null, true);
            echo "            
        ";
            // line 193
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[audio][mostrarNombre] Mostrar Nombre", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[audio][mostrarNombre]", 4 => "datos_audio_mostrarNombre", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "audio"), "mostrarNombre")), "method"), "html", null, true);
            echo "
        ";
            // line 194
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[audio][mostrarPieDeFoto] Mostrar Pie de Foto", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[audio][mostrarPieDeFoto]", 4 => "datos_audio_mostrarPieDeFoto", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "audio"), "mostrarPieDeFoto")), "method"), "html", null, true);
            echo "
        ";
            // line 195
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[audio][mostrarPublicar] Mostrar Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[audio][mostrarPublicar]", 4 => "datos_audio_mostrarPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "audio"), "mostrarPublicar")), "method"), "html", null, true);
            echo "   
        ";
            // line 196
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[audio][valorDefectoPublicar] Valor defecto Publicar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[audio][valorDefectoPublicar]", 4 => "datos_audio_valorDefectoPublicar", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "audio"), "valorDefectoPublicar")), "method"), "html", null, true);
            echo "            
    </div>
    ";
        }
        // line 198
        echo " 
        
    ";
        // line 201
        echo "    <div id=\"tabs-columnas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">

        <div id=\"acordeonColumnas\" style=\"margin-top:10px;\">
            ";
        // line 204
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "columns"));
        foreach ($context['_seq'] as $context["columna"] => $context["variables"]) {
            // line 205
            echo "                <h3 style=\"";
            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
            if ($this->getAttribute($_variables_, "visible")) {
                echo " color: blue; font-weight: bold; ";
            }
            echo "\">
                    [columns][";
            // line 206
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
            echo "] :: [";
            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_variables_, "caption"), "html", null, true);
            echo " = ";
            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_variables_, "default"), "html", null, true);
            echo "] [permission: ";
            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_variables_, "permission"), "html", null, true);
            echo "]
                </h3>
                <div>

                    ";
            // line 210
            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
            $context["hayListaValores"] = twig_test_iterable($this->getAttribute($_variables_, "listaValores"));
            // line 211
            echo "
                    ";
            // line 212
            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_variables_);
            foreach ($context['_seq'] as $context["variable"] => $context["valor"]) {
                // line 213
                echo "                        ";
                if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                if (($_variable_ != "listaValores")) {
                    // line 214
                    echo "                        <p>
                        ";
                    // line 215
                    if (isset($context["hayListaValores"])) { $_hayListaValores_ = $context["hayListaValores"]; } else { $_hayListaValores_ = null; }
                    if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                    if ((($_hayListaValores_ && ($_variable_ == "default")) || ((((((($_variable_ == "visible") || ($_variable_ == "updatable")) || ($_variable_ == "translatable")) || ($_variable_ == "searchable")) || ($_variable_ == "editorTiny")) || ($_variable_ == "filter")) || ($_variable_ == "list")))) {
                        // line 216
                        echo "
                            ";
                        // line 217
                        if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                        if (($_variable_ == "default")) {
                            // line 218
                            echo "                                ";
                            if (isset($context["variables"])) { $_variables_ = $context["variables"]; } else { $_variables_ = null; }
                            $context["listaValores"] = $this->getAttribute($_variables_, "listaValores");
                            // line 219
                            echo "                                ";
                            $context["tipoTag"] = "select";
                            // line 220
                            echo "                            ";
                        } else {
                            // line 221
                            echo "                                ";
                            if (isset($context["ValoresSN"])) { $_ValoresSN_ = $context["ValoresSN"]; } else { $_ValoresSN_ = null; }
                            $context["listaValores"] = $_ValoresSN_;
                            // line 222
                            echo "                                ";
                            $context["tipoTag"] = "checkbox";
                            // line 223
                            echo "                            ";
                        }
                        // line 224
                        echo "
                            ";
                        // line 225
                        if (isset($context["tipoTag"])) { $_tipoTag_ = $context["tipoTag"]; } else { $_tipoTag_ = null; }
                        if (($_tipoTag_ == "select")) {
                            // line 226
                            echo "                            ";
                            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                            if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
                            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                            if (isset($context["listaValores"])) { $_listaValores_ = $context["listaValores"]; } else { $_listaValores_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => $_variable_, "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => (((("datos[columns][" . $_columna_) . "][") . $_variable_) . "]"), 3 => ((("datos_columns_" . $_columna_) . "_") . $_variable_), 4 => null, 5 => $_valor_, 6 => $_listaValores_, 7 => "chzn-select"), "method"), "html", null, true);
                            // line 236
                            echo "
                        ";
                        } else {
                            // line 238
                            echo "                            ";
                            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                            if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
                            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => $_variable_, "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (((("datos[columns][" . $_columna_) . "][") . $_variable_) . "]"), 4 => ((("datos_columns_" . $_columna_) . "_") . $_variable_), 5 => $_valor_, 6 => "255", 7 => "CampoTextoCorto"), "method"), "html", null, true);
                            // line 248
                            echo "
                        ";
                        }
                        // line 250
                        echo "
                        ";
                    } else {
                        // line 252
                        echo "                            ";
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                        if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => $_variable_, "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (((("datos[columns][" . $_columna_) . "][") . $_variable_) . "]"), 4 => ((("datos_columns_" . $_columna_) . "_") . $_variable_), 5 => $_valor_, 6 => "255", 7 => "CampoTextoCorto"), "method"), "html", null, true);
                        // line 262
                        echo "
                        ";
                    }
                    // line 264
                    echo "                        </p>
                        ";
                }
                // line 266
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['valor'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 267
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['columna'], $context['variables'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 270
        echo "        </div>
    </div>

    ";
        // line 274
        echo "    <div id=\"tabs-especificas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 275
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["atributos"]) {
            // line 276
            echo "            ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => ((("[especificas][" . $_nombre_) . "] ") . $this->getAttribute($_atributos_, "caption")), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[especificas][" . $_nombre_) . "]"), 4 => ("datos_especificas_" . $_nombre_), 5 => $this->getAttribute($_atributos_, "value"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
            // line 286
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['atributos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 288
        echo "    </div>

    ";
        // line 291
        echo "    <div id=\"tabs-ordenesWeb\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        <div id=\"acordeonOrdenesWeb\" style=\"margin-top:10px;\">
        ";
        // line 293
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "ordenesWeb"));
        foreach ($context['_seq'] as $context["nombre"] => $context["orden"]) {
            // line 294
            echo "            <h3>";
            if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
            echo twig_escape_filter($this->env, $_nombre_, "html", null, true);
            echo "</h3>
            <div>
                ";
            // line 296
            if (isset($context["orden"])) { $_orden_ = $context["orden"]; } else { $_orden_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_orden_);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 297
                echo "                ";
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (((("[ordenesWeb][" . $_nombre_) . "][") . $_key_) . "]"), "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (((("datos[ordenesWeb][" . $_nombre_) . "][") . $_key_) . "]"), 4 => ((("datos_ordenesWeb_" . $_nombre_) . "_") . $_key_), 5 => $_value_, 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
                // line 307
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 309
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['orden'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 311
        echo "        </div>            
    </div>
        
    ";
        // line 315
        echo "    <div id=\"tabs-controller\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 316
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[controller] Controller", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[controller]", 4 => "datos_controller", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "controller"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 317
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[action] Action", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[action]", 4 => "datos_action", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "action"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 318
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[template] Template", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[template]", 4 => "datos_template", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "template"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 319
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[parametros] Parametros", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[parametros]", 4 => "datos_parametros", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "parametros"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
     </div>
        
    ";
        // line 323
        echo "    <div id=\"tabs-relaciones\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 324
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[modulosRelacionables] Módulos relacionables seperados por coma", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[modulosRelacionables]", 4 => "datos_modulosRelacionables", 5 => $this->getAttribute($this->getAttribute($_values_, "datos"), "modulosRelacionables"), 6 => "100", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
    </div>
        
    ";
        // line 328
        echo "    <div id=\"tabs-editorTiny\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\"> 
        ";
        // line 329
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][biu] Bold,Italic,Underline", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][bui]", 4 => "datos_editorTiny_bui", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "bui")), "method"), "html", null, true);
        echo "
        ";
        // line 330
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][alignment] Alineación", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][alignment]", 4 => "datos_editorTiny_alignment", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "alignment")), "method"), "html", null, true);
        echo "
        ";
        // line 331
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][lists] Listas", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][lists]", 4 => "datos_editorTiny_lists", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "lists")), "method"), "html", null, true);
        echo "
        ";
        // line 332
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][links] Enlaces", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][links]", 4 => "datos_editorTiny_links", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "links")), "method"), "html", null, true);
        echo "
        ";
        // line 333
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][images] Imágenes", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][images]", 4 => "datos_editorTiny_images", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "images")), "method"), "html", null, true);
        echo "
        ";
        // line 334
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][preview] Vista preliminar", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][preview]", 4 => "datos_editorTiny_preview", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "preview")), "method"), "html", null, true);
        echo "
        ";
        // line 335
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][colors] Colores", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][colors]", 4 => "datos_editorTiny_colors", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "colors")), "method"), "html", null, true);
        echo "
        ";
        // line 336
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][tables] Tablas", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][tables]", 4 => "datos_editorTiny_tables", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "tables")), "method"), "html", null, true);
        echo "
        ";
        // line 337
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][superIndex] Super/sub índices", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][superIndex]", 4 => "datos_editorTiny_superIndex", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "superIndex")), "method"), "html", null, true);
        echo "
        ";
        // line 338
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][symbols] Símbolos", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][symbols]", 4 => "datos_editorTiny_symbols", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "symbols")), "method"), "html", null, true);
        echo "
        ";
        // line 339
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][media] Media", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][media]", 4 => "datos_editorTiny_media", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "media")), "method"), "html", null, true);
        echo "
        ";
        // line 340
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[editorTiny][fullMode] Pantalla completa", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[editorTiny][fullMode]", 4 => "datos_editorTiny_fullMode", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "editorTiny"), "fullMode")), "method"), "html", null, true);
        echo "
    </div>

    ";
        // line 344
        echo "    <div id=\"tabs-varWeb\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        <h5>Control de visibilidad de variables web</h5>
        <div id=\"acordeonVW\" style=\"margin-top:10px;\">
            <h3>Globales [showVarWeb][globales]</h3>
            <div>
                ";
        // line 349
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "showVarWeb"), "globales"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 350
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
        // line 351
        echo "            
            </div>

            <h3>Específicas [showVarWeb][especificas]</h3>
            <div>
            ";
        // line 356
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "showVarWeb"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 357
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
        // line 359
        echo "            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarModEnv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1124 => 359,  1112 => 357,  1107 => 356,  1100 => 351,  1088 => 350,  1083 => 349,  1076 => 344,  1068 => 340,  1062 => 339,  1056 => 338,  1050 => 337,  1044 => 336,  1038 => 335,  1032 => 334,  1026 => 333,  1020 => 332,  1014 => 331,  1008 => 330,  1002 => 329,  999 => 328,  991 => 324,  988 => 323,  980 => 319,  974 => 318,  968 => 317,  962 => 316,  959 => 315,  954 => 311,  947 => 309,  940 => 307,  933 => 297,  928 => 296,  921 => 294,  916 => 293,  912 => 291,  908 => 288,  901 => 286,  895 => 276,  890 => 275,  887 => 274,  882 => 270,  874 => 267,  868 => 266,  864 => 264,  860 => 262,  853 => 252,  849 => 250,  845 => 248,  838 => 238,  834 => 236,  826 => 226,  823 => 225,  820 => 224,  817 => 223,  814 => 222,  810 => 221,  807 => 220,  804 => 219,  800 => 218,  797 => 217,  794 => 216,  790 => 215,  787 => 214,  783 => 213,  778 => 212,  775 => 211,  772 => 210,  755 => 206,  747 => 205,  742 => 204,  737 => 201,  733 => 198,  725 => 196,  719 => 195,  713 => 194,  707 => 193,  701 => 192,  694 => 190,  690 => 187,  682 => 185,  676 => 184,  670 => 183,  664 => 182,  658 => 181,  651 => 179,  647 => 176,  639 => 174,  633 => 173,  627 => 172,  621 => 171,  615 => 170,  608 => 168,  605 => 166,  597 => 163,  591 => 162,  585 => 161,  579 => 160,  573 => 159,  567 => 158,  561 => 157,  554 => 155,  551 => 153,  543 => 150,  537 => 149,  531 => 148,  525 => 147,  519 => 146,  513 => 145,  507 => 144,  501 => 143,  495 => 142,  489 => 141,  482 => 139,  479 => 137,  476 => 136,  464 => 133,  457 => 132,  450 => 131,  443 => 130,  436 => 129,  429 => 128,  422 => 127,  415 => 126,  408 => 125,  401 => 124,  394 => 123,  387 => 122,  381 => 121,  375 => 120,  371 => 119,  363 => 115,  357 => 114,  351 => 113,  345 => 112,  339 => 111,  336 => 110,  328 => 106,  325 => 105,  317 => 101,  311 => 100,  305 => 99,  299 => 98,  296 => 97,  288 => 93,  282 => 92,  276 => 91,  270 => 90,  264 => 89,  258 => 88,  252 => 87,  246 => 86,  240 => 85,  234 => 84,  228 => 83,  222 => 82,  216 => 81,  210 => 80,  204 => 79,  198 => 78,  192 => 77,  186 => 76,  180 => 75,  174 => 74,  168 => 73,  162 => 72,  159 => 71,  147 => 60,  143 => 59,  140 => 58,  137 => 57,  133 => 56,  129 => 55,  125 => 53,  122 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 47,  104 => 46,  101 => 45,  98 => 44,  90 => 41,  83 => 39,  75 => 37,  71 => 36,  66 => 35,  63 => 34,  57 => 33,  54 => 32,  44 => 24,  41 => 21,  39 => 20,  37 => 19,  34 => 18,  31 => 16,  28 => 15,);
    }
}
