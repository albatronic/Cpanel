<?php

/* _global/macros.html.twig */
class __TwigTemplate_fc48d83f63a5f78537f5f2f713958b36 extends Twig_Template
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
        // line 29
        echo "
";
        // line 78
        echo "
";
        // line 95
        echo "
";
        // line 104
        echo "
";
        // line 119
        echo "
";
        // line 134
        echo "
";
        // line 154
        echo "
";
        // line 234
        echo "
";
        // line 267
        echo "    
";
        // line 289
        echo "
";
        // line 300
        echo "
";
        // line 324
        echo "
";
        // line 354
        echo "
";
        // line 399
        echo "
";
        // line 447
        echo "
";
        // line 452
        echo "
";
        // line 465
        echo "
";
        // line 497
        echo "
";
        // line 504
        echo "
";
        // line 511
        echo "
";
        // line 518
        echo "
";
        // line 525
        echo "
";
        // line 532
        echo "
";
        // line 539
        echo "
";
        // line 547
        echo "
";
        // line 555
        echo "
";
        // line 563
        echo "
";
        // line 575
        echo "
";
        // line 581
        echo "
";
        // line 596
        echo "
";
        // line 616
        echo "
";
        // line 625
        echo "
";
    }

    // line 32
    public function getlabel($_atributos = null, $_class = null, $_name = null, $_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "class" => $_class,
            "name" => $_name,
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "<span class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "field_title")) : ("field_title")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
            echo "\">  
    ";
            // line 34
            if (((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "varEnv") == "") && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdPerfil"), "Id") == "1")) && ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0))) {
                // line 35
                echo "        <input
            title=\"Poner/Quitar visibilidad\"
            id=\"checkVisibilidad";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"
            type=\"checkbox\"
            value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible"), "html", null, true);
                echo "\"
            ";
                // line 40
                if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > "1")) {
                    echo " checked ";
                }
                // line 41
                echo "            onchange=\"
              if (\$('#checkVisibilidad";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').is(':checked')) {
                  \$('#checkVisibilidad";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').val('1');
                  \$('#spanVisibilidad";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').removeClass('invisible');
              } else {
                  \$('#checkVisibilidad";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').val('0');
                  \$('#spanVisibilidad";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').addClass('invisible');
              }
              actualizaVarEntorno('";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "_visible',\$('#checkVisibilidad";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').val());
            \"
        />
        <input
            title=\"Poner/Quitar multi idioma\"
            id=\"checkMultiIdioma";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"
            type=\"checkbox\"
            value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable"), "html", null, true);
                echo "\"
            ";
                // line 57
                if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") > "0")) {
                    echo " checked ";
                }
                // line 58
                echo "            onchange=\"
              if (\$('#checkMultiIdioma";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').is(':checked')) {
                  \$('#checkMultiIdioma";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').val('1');
              } else {
                  \$('#checkMultiIdioma";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').val('0');
              }
              actualizaVarEntorno('";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "_translatable',\$('#checkMultiIdioma";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "').val());
            \"
        />           
    ";
            }
            // line 67
            echo "            
    <span id=\"spanVisibilidad";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" 
        ";
            // line 69
            if (((($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdPerfil"), "Id") == "1") && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") == "1")) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "varEnv") == ""))) {
                echo " class=\"invisible\"";
            }
            // line 70
            echo "        ";
            if (((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "varEnv") == "") && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdPerfil"), "Id") == "1")) && ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0))) {
                // line 71
                echo "             style=\"cursor: pointer;\"
             onclick=\"popUpVariablesEnv('Env','Mod','";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "');\"
        ";
            }
            // line 73
            echo "              >            
        ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption"), "html", null, true);
            echo "
    </span>
</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function getlabelPopup($_caption = null, $_url = null, $_objetoEnlazado = null, $_ancho = null, $_alto = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "caption" => $_caption,
            "url" => $_url,
            "objetoEnlazado" => $_objetoEnlazado,
            "ancho" => $_ancho,
            "alto" => $_alto,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "<li>
    <div class=\"form_grid_12\">
        <label class=\"";
            // line 82
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "field_title")) : ("field_title")), "html", null, true);
            echo "\"
             style=\"cursor: pointer;\"
             onclick=\"window.open('";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "','width=";
            echo twig_escape_filter($this->env, ((array_key_exists("ancho", $context)) ? (_twig_default_filter((isset($context["ancho"]) ? $context["ancho"] : null), 400)) : (400)), "html", null, true);
            echo ",height=";
            echo twig_escape_filter($this->env, ((array_key_exists("alto", $context)) ? (_twig_default_filter((isset($context["alto"]) ? $context["alto"] : null), 580)) : (580)), "html", null, true);
            echo "');\"
             title='";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "'
            >
            ";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "
        </label>
        <div id=\"enlace\" class=\"form_input\">
            <span>";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["objetoEnlazado"]) ? $context["objetoEnlazado"] : null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetoEnlazado"]) ? $context["objetoEnlazado"] : null), "UrlFriendly"), "html", null, true);
            echo ")</span>
        </div>    
    </div>
</li>        
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getordenarPopup($_controller = null, $_columna = null, $_key = null, $_columnaMostrar = null)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $_controller,
            "columna" => $_columna,
            "key" => $_key,
            "columnaMostrar" => $_columnaMostrar,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 98
            if ($this->getAttribute((isset($context["permisosModulo"]) ? $context["permisosModulo"] : null), "MO", array(), "array")) {
                // line 99
                echo "<a href=\"javascript:;\" onclick=\"popUpOrdenar('";
                echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, ((array_key_exists("columnaMostrar", $context)) ? (_twig_default_filter((isset($context["columnaMostrar"]) ? $context["columnaMostrar"] : null), "Titulo")) : ("Titulo")), "html", null, true);
                echo "');\">
    <img src=\"";
                // line 100
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/images/boton-ordenar.png\" alt=\"Ordenar\" title=\"Ordenar\"/>
</a>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 106
    public function getactualizaColumna($_entidad = null, $_idEntidad = null, $_columna = null, $_valor = null, $_titulo = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entidad" => $_entidad,
            "idEntidad" => $_idEntidad,
            "columna" => $_columna,
            "valor" => $_valor,
            "titulo" => $_titulo,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 107
            echo "<input
    title=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
            echo "\"
    id=\"check";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
            echo "\"
    type=\"checkbox\"
    value=\"";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : null), "html", null, true);
            echo "\"
    ";
            // line 112
            if (((isset($context["valor"]) ? $context["valor"] : null) == "1")) {
                echo " checked ";
            }
            // line 113
            echo "    onchange=\"
      if (\$('#check";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
            echo "').is(':checked')) {\$('#check";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
            echo "').val('1');} else {\$('#check";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
            echo "').val('0');}
      actualizaColumna('";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
            echo "',\$('#check";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["columna"]) ? $context["columna"] : null), "html", null, true);
            echo "').val());
    \"
/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function getactualizaRelacion($_entidadOrigen = null, $_idOrigen = null, $_entidadDestino = null, $_idDestino = null, $_valor = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entidadOrigen" => $_entidadOrigen,
            "idOrigen" => $_idOrigen,
            "entidadDestino" => $_entidadDestino,
            "idDestino" => $_idDestino,
            "valor" => $_valor,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "<input
    title=\"Poner/Quitar relación\"
    id=\"check";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["entidadDestino"]) ? $context["entidadDestino"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idDestino"]) ? $context["idDestino"] : null), "html", null, true);
            echo "\"
    type=\"checkbox\"
    value=\"";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : null), "html", null, true);
            echo "\"
    ";
            // line 127
            if (((isset($context["valor"]) ? $context["valor"] : null) != "")) {
                echo " checked ";
            }
            // line 128
            echo "    onchange=\"
      if (\$('#check";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["entidadDestino"]) ? $context["entidadDestino"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idDestino"]) ? $context["idDestino"] : null), "html", null, true);
            echo "').is(':checked')) {\$('#check";
            echo twig_escape_filter($this->env, (isset($context["entidadDestino"]) ? $context["entidadDestino"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idDestino"]) ? $context["idDestino"] : null), "html", null, true);
            echo "').val('1');} else {\$('#check";
            echo twig_escape_filter($this->env, (isset($context["entidadDestino"]) ? $context["entidadDestino"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idDestino"]) ? $context["idDestino"] : null), "html", null, true);
            echo "').val('0');}
      actualizaRelacion('";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["entidadOrigen"]) ? $context["entidadOrigen"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, (isset($context["idOrigen"]) ? $context["idOrigen"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, (isset($context["entidadDestino"]) ? $context["entidadDestino"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, (isset($context["idDestino"]) ? $context["idDestino"] : null), "html", null, true);
            echo "',\$('#check";
            echo twig_escape_filter($this->env, (isset($context["entidadDestino"]) ? $context["entidadDestino"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["idDestino"]) ? $context["idDestino"] : null), "html", null, true);
            echo "').val());
    \"
/> 
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function getpublicar($_atributos = null, $_name = null, $_id = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 136
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") == "1") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == "0")))) {
                // line 137
                echo "<input name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" />
<input type=\"checkbox\"
       name=\"checkbox_";
                // line 139
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\"
       id=\"checkbox_";
                // line 140
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
       value=\"";
                // line 141
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"
        ";
                // line 142
                if (((isset($context["value"]) ? $context["value"] : null) == "1")) {
                    echo " CHECKED ";
                }
                // line 143
                echo "       class=\"tip_top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
                echo "\"
       onchange=\"
            ";
                // line 145
                echo $this->getAttribute($this, "alertSave");
                echo "
            if (\$('#checkbox_";
                // line 146
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "').is(':checked')) {\$('#";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "').val('1');} else {\$('#";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "').val('0');}
            actualiza
       \"
       ";
                // line 149
                echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
                echo "
       ";
                // line 150
                if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                    echo " disabled ";
                }
                // line 151
                echo "/>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 173
    public function getinput($_atributos = null, $_classLabel = null, $_type = null, $_name = null, $_id = null, $_value = null, $_maxLength = null, $_class = null, $_tabIndex = null, $_extra = null, $_onchange = null, $_autoComplete = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "type" => $_type,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
            "maxLength" => $_maxLength,
            "class" => $_class,
            "tabIndex" => $_tabIndex,
            "extra" => $_extra,
            "onchange" => $_onchange,
            "autoComplete" => $_autoComplete,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 174
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "editorTiny") != "1")) {
                // line 175
                echo "    
    <li ";
                // line 176
                if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                    echo "class=\"\"";
                } else {
                    echo "class=\"oculto\"";
                }
                echo ">
        <div class=\"form_grid_12\" id=\"div_";
                // line 177
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\">

        ";
                // line 179
                if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                    // line 180
                    echo "            ";
                    echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                    echo "
        ";
                }
                // line 182
                echo "
        <div class=\"form_input\">
        ";
                // line 184
                if ((!(isset($context["autoComplete"]) ? $context["autoComplete"] : null))) {
                    // line 185
                    echo "            ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "checkbox")) {
                        // line 186
                        echo "            <input name=\"";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                        echo "\" type=\"hidden\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\" />
            <input type=\"checkbox\"
                   ";
                        // line 189
                        echo "                   id=\"checkbox_";
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                        echo "\"
                   value=\"";
                        // line 190
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\"
                    ";
                        // line 191
                        if (((isset($context["value"]) ? $context["value"] : null) == "1")) {
                            echo " CHECKED ";
                        }
                        // line 192
                        echo "                   class=\"small\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
                        echo "\" tabindex=\"";
                        echo twig_escape_filter($this->env, (isset($context["tabIndex"]) ? $context["tabIndex"] : null), "html", null, true);
                        echo "\"
                   onchange=\"
                        ";
                        // line 194
                        echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
                        echo " ";
                        echo $this->getAttribute($this, "alertSave");
                        echo "
                        if (\$('#checkbox_";
                        // line 195
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                        echo "').is(':checked')) {\$('#";
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                        echo "').val('1');} else {\$('#";
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                        echo "').val('0');}
                   \"
                   ";
                        // line 197
                        echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
                        echo "
                   ";
                        // line 198
                        if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                            echo " disabled ";
                        }
                        // line 199
                        echo "            />
            ";
                    } else {
                        // line 201
                        echo "            <input type=\"";
                        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text")), "html", null, true);
                        echo "\"
                   name=\"";
                        // line 202
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "\"
                   id=\"";
                        // line 203
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                        echo "\"
                   value=\"";
                        // line 204
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\" maxlength=\"";
                        echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter((isset($context["maxLength"]) ? $context["maxLength"] : null), 20)) : (20)), "html", null, true);
                        echo "\"
                   class=\"";
                        // line 205
                        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "mid")) : ("mid")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
                        echo "\" tabindex=\"";
                        echo twig_escape_filter($this->env, (isset($context["tabIndex"]) ? $context["tabIndex"] : null), "html", null, true);
                        echo "\"
                   onchange=\"";
                        // line 206
                        echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
                        echo " ";
                        echo $this->getAttribute($this, "alertSave");
                        echo "\"
                   ";
                        // line 207
                        echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
                        echo "
                   ";
                        // line 208
                        if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                            echo " disabled ";
                        }
                        // line 209
                        echo "            />
            ";
                    }
                    // line 211
                    echo "        ";
                } else {
                    // line 212
                    echo "            <input type=\"hidden\"
                   name=\"";
                    // line 213
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\"
                   id=\"";
                    // line 214
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                    echo "\"
                   value=\"";
                    // line 215
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\" maxlength=\"";
                    echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter((isset($context["maxLength"]) ? $context["maxLength"] : null), 20)) : (20)), "html", null, true);
                    echo "\"
            />
            <input type=\"";
                    // line 217
                    echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text")), "html", null, true);
                    echo "\"
                   id=\"";
                    // line 218
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                    echo "_autoComplete\"
                   value=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autoComplete"]) ? $context["autoComplete"] : null), 2, array(), "array"), "html", null, true);
                    echo "\" maxlength=\"";
                    echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter((isset($context["maxLength"]) ? $context["maxLength"] : null), 20)) : (20)), "html", null, true);
                    echo "\"
                   class=\"mid\" title=\"";
                    // line 220
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
                    echo "\" tabindex=\"";
                    echo twig_escape_filter($this->env, (isset($context["tabIndex"]) ? $context["tabIndex"] : null), "html", null, true);
                    echo "\"
                   onkeyup=\"autoCompletar('";
                    // line 221
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                    echo "_autoComplete','";
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                    echo "_autoComplete','";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autoComplete"]) ? $context["autoComplete"] : null), 0, array(), "array"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autoComplete"]) ? $context["autoComplete"] : null), 1, array(), "array"), "html", null, true);
                    echo "',\$('#";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autoComplete"]) ? $context["autoComplete"] : null), 3, array(), "array"), "html", null, true);
                    echo "').val());\"
                   onchange = \"";
                    // line 222
                    echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
                    echo " ";
                    echo $this->getAttribute($this, "alertSave");
                    echo "\"
                   ";
                    // line 223
                    echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
                    echo "
                   ";
                    // line 224
                    if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                        echo " disabled ";
                    }
                    // line 225
                    echo "             />
        ";
                }
                // line 227
                echo "        </div>
        </div>
    </li>
";
            } else {
                // line 231
                echo "    ";
                echo $this->getAttribute($this, "textarea", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null), 4 => (isset($context["value"]) ? $context["value"] : null), 5 => (isset($context["rows"]) ? $context["rows"] : null), 6 => (isset($context["cols"]) ? $context["cols"] : null), 7 => "elm1", 8 => (isset($context["tabindex"]) ? $context["tabindex"] : null)), "method");
                echo "
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 238
    public function getradio($_atributos = null, $_classLabel = null, $_name = null, $_id = null, $_valueSelected = null, $_arrayOptions = null, $_class = null, $_tabIndex = null, $_extra = null, $_onchange = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "name" => $_name,
            "id" => $_id,
            "valueSelected" => $_valueSelected,
            "arrayOptions" => $_arrayOptions,
            "class" => $_class,
            "tabIndex" => $_tabIndex,
            "extra" => $_extra,
            "onchange" => $_onchange,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 239
            echo "
<li ";
            // line 240
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
<div class=\"form_grid_12\" id=\"div_";
            // line 241
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 243
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 244
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 246
            echo "
    <div class=\"form_input\">
        ";
            // line 248
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrayOptions"]) ? $context["arrayOptions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 249
                echo "        <input  
           type=\"radio\"
           name=\"";
                // line 251
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\"
           id=\"";
                // line 252
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
           value=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Id"), "html", null, true);
                echo "\"
           class=\"";
                // line 254
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "input_grow")) : ("input_grow")), "html", null, true);
                echo "\"
           tabindex=\"";
                // line 255
                echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
                echo "\"
           onchange=\"";
                // line 256
                echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
                echo " ";
                echo $this->getAttribute($this, "alertSave");
                echo "\"
           ";
                // line 257
                if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                    echo " disabled ";
                }
                // line 258
                echo "           ";
                echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
                echo "
           ";
                // line 259
                if (((isset($context["valueSelected"]) ? $context["valueSelected"] : null) == $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Id"))) {
                    echo " checked";
                }
                // line 260
                echo "        />&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Value"), "html", null, true);
                echo "&nbsp;
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 262
            echo "    </div>
</div>
</li>
   
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 270
    public function getcc($_label = null, $_classLabel = null, $_entidad = null, $_banco = null, $_oficina = null, $_digitoControl = null, $_cuentaCorriente = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "classLabel" => $_classLabel,
            "entidad" => $_entidad,
            "banco" => $_banco,
            "oficina" => $_oficina,
            "digitoControl" => $_digitoControl,
            "cuentaCorriente" => $_cuentaCorriente,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 271
            echo "<div class=\"Item\" id=\"div_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
    ";
            // line 272
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 273
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["label"]) ? $context["label"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null)), "method");
                echo "
    ";
            }
            // line 275
            echo "    <input type=\"text\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "[IDBanco]\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "_IDBanco\"
           value=\"";
            // line 276
            echo twig_escape_filter($this->env, (isset($context["banco"]) ? $context["banco"] : null), "html", null, true);
            echo "\" maxlength=\"4\" class=\"CampoBanco\"
    />-
    <input type=\"text\" name=\"";
            // line 278
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "[IDOficina]\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "_IDOficina\"
           value=\"";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["oficina"]) ? $context["oficina"] : null), "html", null, true);
            echo "\" maxlength=\"4\" class=\"CampoOficina\"
    />-
    <input type=\"text\" name=\"";
            // line 281
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "[Digito]\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "_Digito\"
           value=\"";
            // line 282
            echo twig_escape_filter($this->env, (isset($context["digitoControl"]) ? $context["digitoControl"] : null), "html", null, true);
            echo "\" maxlength=\"2\" class=\"CampoDigitoControl\"
    />-
    <input type=\"text\" name=\"";
            // line 284
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "[Cuenta]\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "_Cuenta\"
           value=\"";
            // line 285
            echo twig_escape_filter($this->env, (isset($context["cuentaCorriente"]) ? $context["cuentaCorriente"] : null), "html", null, true);
            echo "\" maxlength=\"10\" class=\"CampoCuentaCorriente\"
    />
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 292
    public function getetiqueta($_label = null, $_classLabel = null, $_text = null, $_classText = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "classLabel" => $_classLabel,
            "text" => $_text,
            "classText" => $_classText,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 293
            echo "<div class=\"Item\" id=\"div_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
    ";
            // line 294
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 295
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["label"]) ? $context["label"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null)), "method");
                echo "
    ";
            }
            // line 297
            echo "    <p class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("classText", $context)) ? (_twig_default_filter((isset($context["classText"]) ? $context["classText"] : null), "Literal")) : ("Literal")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "</p>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 303
    public function getcif($_atributos = null, $_classLabel = null, $_type = null, $_name = null, $_id = null, $_value = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "type" => $_type,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 304
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                // line 305
                echo "<li>
    <div class=\"form_grid_12\" id=\"div_";
                // line 306
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\">

    ";
                // line 308
                if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                    // line 309
                    echo "        ";
                    echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                    echo "
    ";
                }
                // line 311
                echo "
    <div class=\"form_input\">
        <input type=\"";
                // line 313
                echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
           value=\"";
                // line 314
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" maxlength=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter((isset($context["maxLength"]) ? $context["maxLength"] : null), 20)) : (20)), "html", null, true);
                echo "\"
           class=\"tip_top\" title=\"";
                // line 315
                echo twig_escape_filter($this->env, (isset($context["tip"]) ? $context["tip"] : null), "html", null, true);
                echo "\" tabindex=\"";
                echo twig_escape_filter($this->env, (isset($context["tabIndex"]) ? $context["tabIndex"] : null), "html", null, true);
                echo "\"
           onchange=\"ValidaNif('manto','";
                // line 316
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "');\" />
           ";
                // line 317
                echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
                echo "
        />
    </div>
    </div>
</li>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 327
    public function gettextarea($_atributos = null, $_classLabel = null, $_name = null, $_id = null, $_value = null, $_rows = null, $_cols = null, $_class = null, $_tabindex = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
            "rows" => $_rows,
            "cols" => $_cols,
            "class" => $_class,
            "tabindex" => $_tabindex,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 328
            if (((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "editorTiny") == "1")) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                // line 329
                echo "    <script>
        tinyMCE.execCommand(\"mceAddControl\", true, \"";
                // line 330
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\");
    </script>
";
            }
            // line 333
            echo "<li ";
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
<div class=\"form_grid_12\" id=\"div_";
            // line 334
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 336
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 337
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 339
            echo "
    <div class=\"form_input\">
        <textarea  name=\"";
            // line 341
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
                   id=\"";
            // line 342
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"
                   class=\"large\" title=\"";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
            echo "\"                  
                   rows=\"";
            // line 344
            echo twig_escape_filter($this->env, ((array_key_exists("rows", $context)) ? (_twig_default_filter((isset($context["rows"]) ? $context["rows"] : null), 5)) : (5)), "html", null, true);
            echo "\"
                   cols=\"";
            // line 345
            echo twig_escape_filter($this->env, ((array_key_exists("cols", $context)) ? (_twig_default_filter((isset($context["cols"]) ? $context["cols"] : null), 75)) : (75)), "html", null, true);
            echo "\"
                   tabindex=\"";
            // line 346
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
                   onchange=\"";
            // line 347
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                   ";
            // line 348
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                echo " disabled ";
            }
            // line 349
            echo "                   >";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</textarea>
    </div>
</div>
</li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 357
    public function getselect($_atributos = null, $_classLabel = null, $_name = null, $_id = null, $_width = null, $_defecto = null, $_opciones = null, $_class = null, $_tabindex = null, $_popup = null, $_onchange = null, $_onblur = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "name" => $_name,
            "id" => $_id,
            "width" => $_width,
            "defecto" => $_defecto,
            "opciones" => $_opciones,
            "class" => $_class,
            "tabindex" => $_tabindex,
            "popup" => $_popup,
            "onchange" => $_onchange,
            "onblur" => $_onblur,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 358
            echo "
<li ";
            // line 359
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 360
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 362
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 363
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 365
            echo "
    <div class=\"form_input\">
        ";
            // line 367
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 368
                echo "            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["defecto"]) ? $context["defecto"] : null), "html", null, true);
                echo "\" />
        ";
            }
            // line 370
            echo "        <select data-placeholder=\"Indique un valor\"
                ";
            // line 371
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "1")) {
                // line 372
                echo "                name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
                ";
            }
            // line 374
            echo "                ";
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 375
                echo "                disabled
                ";
            }
            // line 377
            echo "                style=\"width:";
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), 200)) : (200)), "html", null, true);
            echo "px;\"
                class=\"";
            // line 378
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "chzn-select")) : ("chzn-select")), "html", null, true);
            echo "\"
                onchange=\"";
            // line 379
            echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
            echo "\"
                onblur=\"";
            // line 380
            echo twig_escape_filter($this->env, (isset($context["onblur"]) ? $context["onblur"] : null), "html", null, true);
            echo " ";
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                tabindex=\"";
            // line 381
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
                title=\"";
            // line 382
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
            echo "\"
        >
            ";
            // line 384
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 385
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Id") == (isset($context["defecto"]) ? $context["defecto"] : null))) {
                    echo " SELECTED ";
                }
                echo ">
                ";
                // line 386
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Value"), "html", null, true);
                echo "
            </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 389
            echo "        </select>

        ";
            // line 391
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                // line 392
                echo "            ";
                echo $this->getAttribute($this, "linkimg", array(0 => (isset($context["popup"]) ? $context["popup"] : null)), "method");
                echo "
        ";
            }
            // line 394
            echo "    </div>
    </div>
</li>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 402
    public function getselectGroup($_atributos = null, $_classLabel = null, $_name = null, $_id = null, $_width = null, $_defecto = null, $_opciones = null, $_class = null, $_tabindex = null, $_popup = null, $_onchange = null, $_onblur = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "name" => $_name,
            "id" => $_id,
            "width" => $_width,
            "defecto" => $_defecto,
            "opciones" => $_opciones,
            "class" => $_class,
            "tabindex" => $_tabindex,
            "popup" => $_popup,
            "onchange" => $_onchange,
            "onblur" => $_onblur,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 403
            echo "
<li ";
            // line 404
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 405
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 407
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 408
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 410
            echo "
    <div class=\"form_input\">
        ";
            // line 412
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 413
                echo "            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["defecto"]) ? $context["defecto"] : null), "html", null, true);
                echo "\" />
        ";
            }
            // line 415
            echo "        <select data-placeholder=\"Indique un valor\"
                ";
            // line 416
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "1")) {
                // line 417
                echo "                name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
                ";
            }
            // line 419
            echo "                ";
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 420
                echo "                disabled
                ";
            }
            // line 422
            echo "                style=\"width:";
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), 200)) : (200)), "html", null, true);
            echo "px;\"
                class=\"";
            // line 423
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "chzn-select")) : ("chzn-select")), "html", null, true);
            echo "\"
                onchange=\"";
            // line 424
            echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
            echo "\"
                onblur=\"";
            // line 425
            echo twig_escape_filter($this->env, (isset($context["onblur"]) ? $context["onblur"] : null), "html", null, true);
            echo " ";
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                tabindex=\"";
            // line 426
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
        >
            ";
            // line 428
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 429
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Titulo"), "html", null, true);
                echo "\">
                    ";
                // line 430
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
                    // line 431
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : null), "Id"), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : null), "Id") == (isset($context["defecto"]) ? $context["defecto"] : null))) {
                        echo " SELECTED ";
                    }
                    echo ">
                        ";
                    // line 432
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : null), "Value"), "html", null, true);
                    echo "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 435
                echo "                </optgroup>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 437
            echo "        </select>

        ";
            // line 439
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                // line 440
                echo "            ";
                echo $this->getAttribute($this, "linkimg", array(0 => (isset($context["popup"]) ? $context["popup"] : null)), "method");
                echo "
        ";
            }
            // line 442
            echo "    </div>
    </div>
</li>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 449
    public function getimg($_url = null, $_width = null, $_height = null, $_alt = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "width" => $_width,
            "height" => $_height,
            "alt" => $_alt,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 450
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), "")) : ("")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("alt", $context)) ? (_twig_default_filter((isset($context["alt"]) ? $context["alt"] : null), "Image")) : ("Image")), "html", null, true);
            echo "\"/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 461
    public function getlinkimg($_opciones = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opciones" => $_opciones,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 462
            echo "    ";
            // line 463
            echo "    <a class=\"thickbox\" title= \"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 2, array(), "array"), "Ventana")) : ("Ventana")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 0, array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 1, array(), "array"), "html", null, true);
            echo "/list/?TB_iframe=true&height=";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 3, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 3, array(), "array"), "500")) : ("500")), "html", null, true);
            echo "&width=";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 4, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 4, array(), "array"), "600")) : ("600")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opciones"]) ? $context["opciones"] : null), 0, array(), "array"), "html", null, true);
            echo "/images/lupa.png\" width=\"16px\" height=\"16px\" alt=\"Editar...\"></a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 467
    public function getfecha($_atributos = null, $_classLabel = null, $_name = null, $_id = null, $_value = null, $_size = null, $_class = null, $_tabindex = null, $_extra = null)
    {
        $context = $this->env->mergeGlobals(array(
            "atributos" => $_atributos,
            "classLabel" => $_classLabel,
            "name" => $_name,
            "id" => $_id,
            "value" => $_value,
            "size" => $_size,
            "class" => $_class,
            "tabindex" => $_tabindex,
            "extra" => $_extra,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 468
            echo "
<li ";
            // line 469
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 470
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 472
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 473
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 475
            echo "
    <div class=\"form_input\">
        <div class=\" form_grid_2 alpha\">
            <input name=\"";
            // line 478
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
                       id=\"";
            // line 479
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"
                       type=\"text\"
                       value=\"";
            // line 481
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
                       size=\"";
            // line 482
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 10)) : (10)), "html", null, true);
            echo "\"
                       class=\"";
            // line 483
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "datepicker")) : ("datepicker")), "html", null, true);
            echo "\"
                       ";
            // line 485
            echo "                       tabindex=\"";
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
                       onchange = \"";
            // line 486
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                       ";
            // line 487
            echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "
                       ";
            // line 488
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                echo " disabled ";
            }
            // line 489
            echo "            />
        </div>
        <span class=\"clear\"></span>
        </div>
    </div>
</li>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 499
    public function getfoco($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 500
            echo "<script language='JavaScript' type='text/javascript'>
document.getElementById('";
            // line 501
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').focus();
</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 506
    public function getbotonThickBox($_path = null, $_ruta = null, $_ventanaTitulo = null, $_ventanaAlto = null, $_ventanaAncho = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "ruta" => $_ruta,
            "ventanaTitulo" => $_ventanaTitulo,
            "ventanaAlto" => $_ventanaAlto,
            "ventanaAncho" => $_ventanaAncho,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 507
            echo "<a class=\"thickbox\" title= \"";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaTitulo", $context)) ? (_twig_default_filter((isset($context["ventanaTitulo"]) ? $context["ventanaTitulo"] : null), "Informe")) : ("Informe")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : null), "html", null, true);
            echo "/?TB_iframe=true&height=";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAlto", $context)) ? (_twig_default_filter((isset($context["ventanaAlto"]) ? $context["ventanaAlto"] : null), "500")) : ("500")), "html", null, true);
            echo "&width=";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAncho", $context)) ? (_twig_default_filter((isset($context["ventanaAncho"]) ? $context["ventanaAncho"] : null), "600")) : ("600")), "html", null, true);
            echo "\">
    <img src=\"";
            // line 508
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaTitulo", $context)) ? (_twig_default_filter((isset($context["ventanaTitulo"]) ? $context["ventanaTitulo"] : null), "Informe")) : ("Informe")), "html", null, true);
            echo "\">
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 513
    public function getlinkThickBox($_path = null, $_textoLink = null, $_ruta = null, $_ventanaTitulo = null, $_ventanaAlto = null, $_ventanaAncho = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "textoLink" => $_textoLink,
            "ruta" => $_ruta,
            "ventanaTitulo" => $_ventanaTitulo,
            "ventanaAlto" => $_ventanaAlto,
            "ventanaAncho" => $_ventanaAncho,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 514
            echo "<a class=\"thickbox\" title= \"";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaTitulo", $context)) ? (_twig_default_filter((isset($context["ventanaTitulo"]) ? $context["ventanaTitulo"] : null), "Informe")) : ("Informe")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["ruta"]) ? $context["ruta"] : null), "html", null, true);
            echo "/?height=";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAlto", $context)) ? (_twig_default_filter((isset($context["ventanaAlto"]) ? $context["ventanaAlto"] : null), "500")) : ("500")), "html", null, true);
            echo "&width=";
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAncho", $context)) ? (_twig_default_filter((isset($context["ventanaAncho"]) ? $context["ventanaAncho"] : null), "600")) : ("600")), "html", null, true);
            echo "\">
    ";
            // line 515
            echo twig_escape_filter($this->env, (isset($context["textoLink"]) ? $context["textoLink"] : null), "html", null, true);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 520
    public function getbotonDocumento($_path = null, $_documento = null, $_controller = null, $_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "documento" => $_documento,
            "controller" => $_controller,
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 521
            echo "<a href=\"javascript:;\" title= \"Imprimir\" onclick=\"window.open('";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/_Emergente/formatosDocumentos/";
            echo twig_escape_filter($this->env, (isset($context["documento"]) ? $context["documento"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "','Documento','width=690,height=600,status=false,resizable=1');\">
    <img src=\"";
            // line 522
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/print_cmd.png\" width=\"24px\" height=\"24px\" alt=\"Imprimir\">
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 527
    public function gethistoricoVentas($_path = null, $_idArticulo = null, $_idCliente = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "idArticulo" => $_idArticulo,
            "idCliente" => $_idCliente,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 528
            echo "<a href=\"javascript:;\" onClick=\"window.open('";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/_Emergente/HistoricoVentas/";
            echo twig_escape_filter($this->env, (isset($context["idArticulo"]) ? $context["idArticulo"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["idCliente"]) ? $context["idCliente"] : null), "html", null, true);
            echo "','HistoricoVentas','width=450,height=500,resizable=yes,scrollbars=yes');\">
    <img src=\"";
            // line 529
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Historico\" title=\"Historico...\">
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 534
    public function gethistoricoCompras($_path = null, $_idArticulo = null, $_idProveedor = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "idArticulo" => $_idArticulo,
            "idProveedor" => $_idProveedor,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 535
            echo "<a href=\"javascript:;\" onClick=\"window.open('";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/_Emergente/HistoricoCompras/";
            echo twig_escape_filter($this->env, (isset($context["idArticulo"]) ? $context["idArticulo"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["idProveedor"]) ? $context["idProveedor"] : null), "html", null, true);
            echo "','HistoricoCompras','width=450,height=500,resizable=yes,scrollbars=yes');\">
    <img src=\"";
            // line 536
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Historico\" title=\"Historico...\">
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 541
    public function getpromosVigentesCliente($_path = null, $_cliente = null, $_fecha = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "cliente" => $_cliente,
            "fecha" => $_fecha,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 542
            echo "<a href=\"javascript:;\" onclick=\"\$('#dialogPromo').dialog('open');\">
    <img src=\"";
            // line 543
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Promociones\" title=\"Promociones...\">
</a>
";
            // line 545
            $this->env->loadTemplate("_Emergente/promosVigentesCliente.html.twig")->display(array_merge($context, array("cliente" => (isset($context["cliente"]) ? $context["cliente"] : null), "fecha" => (isset($context["fecha"]) ? $context["fecha"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 549
    public function getdetalleRecepcionLinea($_path = null, $_lineaEntidad = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "lineaEntidad" => $_lineaEntidad,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 550
            echo "<a href=\"javascript:;\" onclick=\"\$('#dialog";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null), "IDLinea"), "html", null, true);
            echo "').dialog('open');\">
    <img src=\"";
            // line 551
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Detalle Recepción\" title=\"Detalle Recepción...\">
</a>
";
            // line 553
            $this->env->loadTemplate("RecepcionarLineas/detalleRecepcion.html.twig")->display(array_merge($context, array("lineaEntidad" => (isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 557
    public function getdetalleExpedicionLinea($_path = null, $_lineaEntidad = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "lineaEntidad" => $_lineaEntidad,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 558
            echo "<a href=\"javascript:;\" onclick=\"\$('#dialog";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null), "IDLinea"), "html", null, true);
            echo "').dialog('open');\">
    <img src=\"";
            // line 559
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Detalle Expedición\" title=\"Detalle Expedición...\">
</a>
";
            // line 561
            $this->env->loadTemplate("ExpedirLineas/detalleExpedicion.html.twig")->display(array_merge($context, array("lineaEntidad" => (isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 565
    public function getdocumentos($_entidad = null, $_idEntidad = null, $_tipo = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entidad" => $_entidad,
            "idEntidad" => $_idEntidad,
            "tipo" => $_tipo,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 566
            echo "<div>
    <input name=\"document\" type=\"file\" id=\"document\" size=\"20\" class=\"Comando\">
    <input name=\"accion\" type=\"submit\" value=\"Enviar\" class=\"Comando\" onclick=\"\$('#action').val('Documento')\">
    <input name=\"documentoBorrar\" id=\"documentoBorrar\" value=\"\" type=\"hidden\" />
</div>
<div id=\"Documentos\" style=\"margin-top: 10px;\"></div>
<script>documentos('";
            // line 572
            echo twig_escape_filter($this->env, (isset($context["entidad"]) ? $context["entidad"] : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["idEntidad"]) ? $context["idEntidad"] : null), "html", null, true);
            echo "', 'Documentos', '";
            echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : null), "html", null, true);
            echo "');</script>
<div style=\"clear:both;\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 578
    public function getalertSave()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 579
            echo "\$('.title_icon span').css('background','url(";
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/images/alert.png)');
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 583
    public function getembedMedia($_media = null, $_width = null, $_height = null)
    {
        $context = $this->env->mergeGlobals(array(
            "media" => $_media,
            "width" => $_width,
            "height" => $_height,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 584
            if ((isset($context["media"]) ? $context["media"] : null)) {
                // line 585
                echo "<embed bgcolor='#505050'
       width='";
                // line 586
                echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), "250")) : ("250")), "html", null, true);
                echo "'
       height='";
                // line 587
                echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) ? $context["height"] : null), "250")) : ("250")), "html", null, true);
                echo "'
       ";
                // line 589
                echo "       allowScriptAccess='always'
       src='";
                // line 590
                echo twig_escape_filter($this->env, (isset($context["media"]) ? $context["media"] : null), "html", null, true);
                echo "'
       ";
                // line 592
                echo "       allowFullScreen='true'
/>
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 610
    public function getrecortaTexto($_texto = null, $_nCaracteres = null)
    {
        $context = $this->env->mergeGlobals(array(
            "texto" => $_texto,
            "nCaracteres" => $_nCaracteres,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 611
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null)) > (isset($context["nCaracteres"]) ? $context["nCaracteres"] : null))) {
                // line 612
                echo "        ";
                $context["puntos"] = "...";
                // line 613
                echo "    ";
            }
            // line 614
            echo "    ";
            echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["texto"]) ? $context["texto"] : null), 0, (isset($context["nCaracteres"]) ? $context["nCaracteres"] : null)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["puntos"]) ? $context["puntos"] : null), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 620
    public function getform($_controller = null, $_atributos = null, $_datos = null)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $_controller,
            "atributos" => $_atributos,
            "datos" => $_datos,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 621
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["atributos"]) ? $context["atributos"] : null));
            foreach ($context['_seq'] as $context["keyAtributo"] => $context["atributo"]) {
                // line 622
                echo "        ";
                echo $this->getAttribute($this, "formItem", array(0 => (isset($context["controller"]) ? $context["controller"] : null), 1 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null), 2 => (isset($context["atributo"]) ? $context["atributo"] : null), 3 => (isset($context["datos"]) ? $context["datos"] : null)), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyAtributo'], $context['atributo'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 629
    public function getformItem($_controller = null, $_keyAtributo = null, $_atributo = null, $_datos = null)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $_controller,
            "keyAtributo" => $_keyAtributo,
            "atributo" => $_atributo,
            "datos" => $_datos,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 630
            echo "    ";
            if ($this->getAttribute((isset($context["atributo"]) ? $context["atributo"] : null), "aditional_filter")) {
                // line 631
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["atributo"]) ? $context["atributo"] : null), "aditional_filter"), "entity") == "ValoresSN")) {
                    // line 632
                    echo "            ";
                    // line 633
                    echo "            ";
                    echo $this->getAttribute($this, "input", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => "checkbox", 3 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 4 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnForeignKey", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method");
                    echo "                    
        ";
                } else {
                    // line 635
                    echo "            ";
                    echo "   
            ";
                    // line 636
                    echo $this->getAttribute($this, "select", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 3 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 4 => null, 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnForeignKey", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 6 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnFetchAll", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null), 1 => "Titulo", 2 => 0), "method"), 7 => "chzn-select", 8 => "1"), "method");
                    echo "
        ";
                }
                // line 638
                echo "    ";
            } else {
                // line 639
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["atributo"]) ? $context["atributo"] : null), "validator"), "length") > 255)) {
                    // line 640
                    echo "            ";
                    // line 641
                    echo "            ";
                    echo $this->getAttribute($this, "textarea", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 3 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 4 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnValue", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 5 => null, 6 => null, 7 => "textarea", 8 => "4"), "method");
                    echo "                    
        ";
                } else {
                    // line 643
                    echo "            ";
                    // line 644
                    echo "            ";
                    echo $this->getAttribute($this, "input", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => "text", 3 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 4 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnValue", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method");
                    echo "
        ";
                }
                // line 646
                echo "    ";
            }
            echo "    
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_global/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2360 => 646,  2354 => 644,  2352 => 643,  2346 => 641,  2344 => 640,  2341 => 639,  2338 => 638,  2333 => 636,  2329 => 635,  2323 => 633,  2321 => 632,  2318 => 631,  2315 => 630,  2301 => 629,  2283 => 622,  2278 => 621,  2265 => 620,  2249 => 614,  2246 => 613,  2243 => 612,  2240 => 611,  2228 => 610,  2214 => 592,  2210 => 590,  2207 => 589,  2203 => 587,  2199 => 586,  2196 => 585,  2194 => 584,  2181 => 583,  2167 => 579,  2158 => 578,  2140 => 572,  2132 => 566,  2119 => 565,  2108 => 561,  2103 => 559,  2098 => 558,  2086 => 557,  2075 => 553,  2070 => 551,  2065 => 550,  2053 => 549,  2042 => 545,  2037 => 543,  2034 => 542,  2021 => 541,  2007 => 536,  1998 => 535,  1985 => 534,  1971 => 529,  1962 => 528,  1949 => 527,  1935 => 522,  1924 => 521,  1910 => 520,  1896 => 515,  1883 => 514,  1867 => 513,  1851 => 508,  1838 => 507,  1823 => 506,  1809 => 501,  1806 => 500,  1795 => 499,  1777 => 489,  1773 => 488,  1769 => 487,  1765 => 486,  1760 => 485,  1756 => 483,  1752 => 482,  1748 => 481,  1743 => 479,  1739 => 478,  1734 => 475,  1728 => 473,  1726 => 472,  1721 => 470,  1713 => 469,  1710 => 468,  1691 => 467,  1667 => 463,  1665 => 462,  1654 => 461,  1636 => 450,  1622 => 449,  1607 => 442,  1601 => 440,  1599 => 439,  1595 => 437,  1588 => 435,  1579 => 432,  1570 => 431,  1566 => 430,  1561 => 429,  1557 => 428,  1552 => 426,  1546 => 425,  1542 => 424,  1538 => 423,  1533 => 422,  1529 => 420,  1526 => 419,  1518 => 417,  1516 => 416,  1513 => 415,  1505 => 413,  1503 => 412,  1499 => 410,  1493 => 408,  1491 => 407,  1486 => 405,  1478 => 404,  1475 => 403,  1453 => 402,  1438 => 394,  1432 => 392,  1430 => 391,  1426 => 389,  1417 => 386,  1408 => 385,  1404 => 384,  1399 => 382,  1395 => 381,  1389 => 380,  1385 => 379,  1381 => 378,  1376 => 377,  1372 => 375,  1369 => 374,  1361 => 372,  1359 => 371,  1356 => 370,  1348 => 368,  1346 => 367,  1342 => 365,  1336 => 363,  1334 => 362,  1329 => 360,  1321 => 359,  1318 => 358,  1296 => 357,  1279 => 349,  1275 => 348,  1271 => 347,  1267 => 346,  1263 => 345,  1259 => 344,  1255 => 343,  1251 => 342,  1247 => 341,  1243 => 339,  1237 => 337,  1235 => 336,  1230 => 334,  1221 => 333,  1215 => 330,  1212 => 329,  1210 => 328,  1191 => 327,  1173 => 317,  1169 => 316,  1163 => 315,  1157 => 314,  1149 => 313,  1145 => 311,  1139 => 309,  1137 => 308,  1132 => 306,  1129 => 305,  1127 => 304,  1110 => 303,  1093 => 297,  1087 => 295,  1085 => 294,  1080 => 293,  1066 => 292,  1051 => 285,  1045 => 284,  1040 => 282,  1034 => 281,  1029 => 279,  1023 => 278,  1018 => 276,  1011 => 275,  1005 => 273,  1003 => 272,  998 => 271,  981 => 270,  966 => 262,  957 => 260,  953 => 259,  948 => 258,  944 => 257,  938 => 256,  934 => 255,  930 => 254,  926 => 253,  922 => 252,  918 => 251,  914 => 249,  910 => 248,  906 => 246,  900 => 244,  898 => 243,  893 => 241,  885 => 240,  882 => 239,  862 => 238,  847 => 231,  841 => 227,  837 => 225,  833 => 224,  829 => 223,  823 => 222,  809 => 221,  803 => 220,  797 => 219,  793 => 218,  789 => 217,  782 => 215,  778 => 214,  774 => 213,  771 => 212,  768 => 211,  764 => 209,  760 => 208,  756 => 207,  750 => 206,  742 => 205,  736 => 204,  732 => 203,  728 => 202,  723 => 201,  719 => 199,  715 => 198,  711 => 197,  702 => 195,  696 => 194,  688 => 192,  684 => 191,  680 => 190,  675 => 189,  665 => 186,  662 => 185,  660 => 184,  656 => 182,  650 => 180,  648 => 179,  643 => 177,  635 => 176,  632 => 175,  630 => 174,  608 => 173,  595 => 151,  591 => 150,  587 => 149,  577 => 146,  573 => 145,  567 => 143,  563 => 142,  559 => 141,  555 => 140,  551 => 139,  541 => 137,  539 => 136,  525 => 135,  501 => 130,  490 => 129,  487 => 128,  483 => 127,  479 => 126,  473 => 124,  469 => 122,  454 => 121,  431 => 115,  417 => 114,  414 => 113,  410 => 112,  406 => 111,  399 => 109,  395 => 108,  392 => 107,  377 => 106,  362 => 100,  351 => 99,  349 => 98,  335 => 97,  317 => 90,  311 => 87,  306 => 85,  296 => 84,  291 => 82,  287 => 80,  271 => 79,  256 => 74,  253 => 73,  248 => 72,  245 => 71,  242 => 70,  238 => 69,  234 => 68,  231 => 67,  222 => 64,  217 => 62,  212 => 60,  208 => 59,  205 => 58,  201 => 57,  197 => 56,  192 => 54,  182 => 49,  177 => 47,  173 => 46,  168 => 44,  164 => 43,  160 => 42,  157 => 41,  153 => 40,  149 => 39,  144 => 37,  140 => 35,  138 => 34,  131 => 33,  117 => 32,  112 => 625,  109 => 616,  106 => 596,  103 => 581,  100 => 575,  97 => 563,  94 => 555,  91 => 547,  88 => 539,  85 => 532,  82 => 525,  79 => 518,  76 => 511,  73 => 504,  70 => 497,  67 => 465,  64 => 452,  61 => 447,  58 => 399,  55 => 354,  52 => 324,  49 => 300,  46 => 289,  43 => 267,  40 => 234,  37 => 154,  34 => 134,  31 => 119,  28 => 104,  25 => 95,  22 => 78,  19 => 29,);
    }
}
