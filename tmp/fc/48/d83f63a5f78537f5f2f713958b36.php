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
        // line 349
        echo "
";
        // line 394
        echo "
";
        // line 442
        echo "
";
        // line 447
        echo "
";
        // line 460
        echo "
";
        // line 492
        echo "
";
        // line 499
        echo "
";
        // line 506
        echo "
";
        // line 513
        echo "
";
        // line 520
        echo "
";
        // line 527
        echo "
";
        // line 534
        echo "
";
        // line 542
        echo "
";
        // line 550
        echo "
";
        // line 558
        echo "
";
        // line 570
        echo "
";
        // line 576
        echo "
";
        // line 591
        echo "
";
        // line 611
        echo "
";
        // line 620
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
            echo "<li ";
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
<div class=\"form_grid_12\" id=\"div_";
            // line 329
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 331
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 332
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 334
            echo "
    <div class=\"form_input\">
        <textarea  name=\"";
            // line 336
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
                   id=\"";
            // line 337
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"
                   class=\"";
            // line 338
            if (((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "editorTiny") == "1")) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "tiny";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
            echo "\"                  
                   rows=\"";
            // line 339
            echo twig_escape_filter($this->env, ((array_key_exists("rows", $context)) ? (_twig_default_filter((isset($context["rows"]) ? $context["rows"] : null), 5)) : (5)), "html", null, true);
            echo "\"
                   cols=\"";
            // line 340
            echo twig_escape_filter($this->env, ((array_key_exists("cols", $context)) ? (_twig_default_filter((isset($context["cols"]) ? $context["cols"] : null), 75)) : (75)), "html", null, true);
            echo "\"
                   tabindex=\"";
            // line 341
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
                   onchange=\"";
            // line 342
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                   ";
            // line 343
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                echo " disabled ";
            }
            // line 344
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

    // line 352
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
            // line 353
            echo "
<li ";
            // line 354
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 355
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 357
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 358
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 360
            echo "
    <div class=\"form_input\">
        ";
            // line 362
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 363
                echo "            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["defecto"]) ? $context["defecto"] : null), "html", null, true);
                echo "\" />
        ";
            }
            // line 365
            echo "        <select data-placeholder=\"Indique un valor\"
                ";
            // line 366
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "1")) {
                // line 367
                echo "                name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
                ";
            }
            // line 369
            echo "                ";
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 370
                echo "                disabled
                ";
            }
            // line 372
            echo "                style=\"width:";
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), 200)) : (200)), "html", null, true);
            echo "px;\"
                class=\"";
            // line 373
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "chzn-select")) : ("chzn-select")), "html", null, true);
            echo "\"
                onchange=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
            echo "\"
                onblur=\"";
            // line 375
            echo twig_escape_filter($this->env, (isset($context["onblur"]) ? $context["onblur"] : null), "html", null, true);
            echo " ";
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                tabindex=\"";
            // line 376
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
                title=\"";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "help"), "html", null, true);
            echo "\"
        >
            ";
            // line 379
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 380
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Id") == (isset($context["defecto"]) ? $context["defecto"] : null))) {
                    echo " SELECTED ";
                }
                echo ">
                ";
                // line 381
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Value"), "html", null, true);
                echo "
            </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 384
            echo "        </select>

        ";
            // line 386
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                // line 387
                echo "            ";
                echo $this->getAttribute($this, "linkimg", array(0 => (isset($context["popup"]) ? $context["popup"] : null)), "method");
                echo "
        ";
            }
            // line 389
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

    // line 397
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
            // line 398
            echo "
<li ";
            // line 399
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 400
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 402
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 403
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 405
            echo "
    <div class=\"form_input\">
        ";
            // line 407
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 408
                echo "            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["defecto"]) ? $context["defecto"] : null), "html", null, true);
                echo "\" />
        ";
            }
            // line 410
            echo "        <select data-placeholder=\"Indique un valor\"
                ";
            // line 411
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "1")) {
                // line 412
                echo "                name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
                ";
            }
            // line 414
            echo "                ";
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                // line 415
                echo "                disabled
                ";
            }
            // line 417
            echo "                style=\"width:";
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), 200)) : (200)), "html", null, true);
            echo "px;\"
                class=\"";
            // line 418
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "chzn-select")) : ("chzn-select")), "html", null, true);
            echo "\"
                onchange=\"";
            // line 419
            echo twig_escape_filter($this->env, (isset($context["onchange"]) ? $context["onchange"] : null), "html", null, true);
            echo "\"
                onblur=\"";
            // line 420
            echo twig_escape_filter($this->env, (isset($context["onblur"]) ? $context["onblur"] : null), "html", null, true);
            echo " ";
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                tabindex=\"";
            // line 421
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
        >
            ";
            // line 423
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 424
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "Titulo"), "html", null, true);
                echo "\">
                    ";
                // line 425
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
                    // line 426
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : null), "Id"), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : null), "Id") == (isset($context["defecto"]) ? $context["defecto"] : null))) {
                        echo " SELECTED ";
                    }
                    echo ">
                        ";
                    // line 427
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : null), "Value"), "html", null, true);
                    echo "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 430
                echo "                </optgroup>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 432
            echo "        </select>

        ";
            // line 434
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                // line 435
                echo "            ";
                echo $this->getAttribute($this, "linkimg", array(0 => (isset($context["popup"]) ? $context["popup"] : null)), "method");
                echo "
        ";
            }
            // line 437
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

    // line 444
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
            // line 445
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

    // line 456
    public function getlinkimg($_opciones = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opciones" => $_opciones,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 457
            echo "    ";
            // line 458
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

    // line 462
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
            // line 463
            echo "
<li ";
            // line 464
            if ((($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "visible") > 0) && ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "translatable") || ($this->getAttribute((isset($context["idiomas"]) ? $context["idiomas"] : null), "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 465
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">

    ";
            // line 467
            if ($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "caption")) {
                // line 468
                echo "        ";
                echo $this->getAttribute($this, "label", array(0 => (isset($context["atributos"]) ? $context["atributos"] : null), 1 => (isset($context["classLabel"]) ? $context["classLabel"] : null), 2 => (isset($context["name"]) ? $context["name"] : null), 3 => (isset($context["id"]) ? $context["id"] : null)), "method");
                echo "
    ";
            }
            // line 470
            echo "
    <div class=\"form_input\">
        <div class=\" form_grid_2 alpha\">
            <input name=\"";
            // line 473
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
                       id=\"";
            // line 474
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null))) : ((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"
                       type=\"text\"
                       value=\"";
            // line 476
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
                       size=\"";
            // line 477
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 10)) : (10)), "html", null, true);
            echo "\"
                       class=\"";
            // line 478
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "datepicker")) : ("datepicker")), "html", null, true);
            echo "\"
                       ";
            // line 480
            echo "                       tabindex=\"";
            echo twig_escape_filter($this->env, (isset($context["tabindex"]) ? $context["tabindex"] : null), "html", null, true);
            echo "\"
                       onchange = \"";
            // line 481
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                       ";
            // line 482
            echo twig_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "
                       ";
            // line 483
            if (($this->getAttribute((isset($context["atributos"]) ? $context["atributos"] : null), "updatable") == "0")) {
                echo " disabled ";
            }
            // line 484
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

    // line 494
    public function getfoco($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 495
            echo "<script language='JavaScript' type='text/javascript'>
document.getElementById('";
            // line 496
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

    // line 501
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
            // line 502
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
            // line 503
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

    // line 508
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
            // line 509
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
            // line 510
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

    // line 515
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
            // line 516
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
            // line 517
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

    // line 522
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
            // line 523
            echo "<a href=\"javascript:;\" onClick=\"window.open('";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/_Emergente/HistoricoVentas/";
            echo twig_escape_filter($this->env, (isset($context["idArticulo"]) ? $context["idArticulo"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["idCliente"]) ? $context["idCliente"] : null), "html", null, true);
            echo "','HistoricoVentas','width=450,height=500,resizable=yes,scrollbars=yes');\">
    <img src=\"";
            // line 524
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

    // line 529
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
            // line 530
            echo "<a href=\"javascript:;\" onClick=\"window.open('";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/_Emergente/HistoricoCompras/";
            echo twig_escape_filter($this->env, (isset($context["idArticulo"]) ? $context["idArticulo"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["idProveedor"]) ? $context["idProveedor"] : null), "html", null, true);
            echo "','HistoricoCompras','width=450,height=500,resizable=yes,scrollbars=yes');\">
    <img src=\"";
            // line 531
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

    // line 536
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
            // line 537
            echo "<a href=\"javascript:;\" onclick=\"\$('#dialogPromo').dialog('open');\">
    <img src=\"";
            // line 538
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Promociones\" title=\"Promociones...\">
</a>
";
            // line 540
            $this->env->loadTemplate("_Emergente/promosVigentesCliente.html.twig")->display(array_merge($context, array("cliente" => (isset($context["cliente"]) ? $context["cliente"] : null), "fecha" => (isset($context["fecha"]) ? $context["fecha"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 544
    public function getdetalleRecepcionLinea($_path = null, $_lineaEntidad = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "lineaEntidad" => $_lineaEntidad,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 545
            echo "<a href=\"javascript:;\" onclick=\"\$('#dialog";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null), "IDLinea"), "html", null, true);
            echo "').dialog('open');\">
    <img src=\"";
            // line 546
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Detalle Recepción\" title=\"Detalle Recepción...\">
</a>
";
            // line 548
            $this->env->loadTemplate("RecepcionarLineas/detalleRecepcion.html.twig")->display(array_merge($context, array("lineaEntidad" => (isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 552
    public function getdetalleExpedicionLinea($_path = null, $_lineaEntidad = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
            "lineaEntidad" => $_lineaEntidad,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 553
            echo "<a href=\"javascript:;\" onclick=\"\$('#dialog";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null), "IDLinea"), "html", null, true);
            echo "').dialog('open');\">
    <img src=\"";
            // line 554
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Detalle Expedición\" title=\"Detalle Expedición...\">
</a>
";
            // line 556
            $this->env->loadTemplate("ExpedirLineas/detalleExpedicion.html.twig")->display(array_merge($context, array("lineaEntidad" => (isset($context["lineaEntidad"]) ? $context["lineaEntidad"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 560
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
            // line 561
            echo "<div>
    <input name=\"document\" type=\"file\" id=\"document\" size=\"20\" class=\"Comando\">
    <input name=\"accion\" type=\"submit\" value=\"Enviar\" class=\"Comando\" onclick=\"\$('#action').val('Documento')\">
    <input name=\"documentoBorrar\" id=\"documentoBorrar\" value=\"\" type=\"hidden\" />
</div>
<div id=\"Documentos\" style=\"margin-top: 10px;\"></div>
<script>documentos('";
            // line 567
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

    // line 573
    public function getalertSave()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 574
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

    // line 578
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
            // line 579
            if ((isset($context["media"]) ? $context["media"] : null)) {
                // line 580
                echo "<embed bgcolor='#505050'
       width='";
                // line 581
                echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), "250")) : ("250")), "html", null, true);
                echo "'
       height='";
                // line 582
                echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) ? $context["height"] : null), "250")) : ("250")), "html", null, true);
                echo "'
       ";
                // line 584
                echo "       allowScriptAccess='always'
       src='";
                // line 585
                echo twig_escape_filter($this->env, (isset($context["media"]) ? $context["media"] : null), "html", null, true);
                echo "'
       ";
                // line 587
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

    // line 605
    public function getrecortaTexto($_texto = null, $_nCaracteres = null)
    {
        $context = $this->env->mergeGlobals(array(
            "texto" => $_texto,
            "nCaracteres" => $_nCaracteres,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 606
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null)) > (isset($context["nCaracteres"]) ? $context["nCaracteres"] : null))) {
                // line 607
                echo "        ";
                $context["puntos"] = "...";
                // line 608
                echo "    ";
            }
            // line 609
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

    // line 615
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
            // line 616
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["atributos"]) ? $context["atributos"] : null));
            foreach ($context['_seq'] as $context["keyAtributo"] => $context["atributo"]) {
                // line 617
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

    // line 624
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
            // line 625
            echo "    ";
            if ($this->getAttribute((isset($context["atributo"]) ? $context["atributo"] : null), "aditional_filter")) {
                // line 626
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["atributo"]) ? $context["atributo"] : null), "aditional_filter"), "entity") == "ValoresSN")) {
                    // line 627
                    echo "            ";
                    // line 628
                    echo "            ";
                    echo $this->getAttribute($this, "input", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => "checkbox", 3 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 4 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnForeignKey", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method");
                    echo "                    
        ";
                } else {
                    // line 630
                    echo "            ";
                    echo "   
            ";
                    // line 631
                    echo $this->getAttribute($this, "select", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 3 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 4 => null, 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnForeignKey", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 6 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnFetchAll", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null), 1 => "Titulo", 2 => 0), "method"), 7 => "chzn-select", 8 => "1"), "method");
                    echo "
        ";
                }
                // line 633
                echo "    ";
            } else {
                // line 634
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["atributo"]) ? $context["atributo"] : null), "validator"), "length") > 255)) {
                    // line 635
                    echo "            ";
                    // line 636
                    echo "            ";
                    echo $this->getAttribute($this, "textarea", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 3 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 4 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnValue", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 5 => null, 6 => null, 7 => "textarea", 8 => "4"), "method");
                    echo "                    
        ";
                } else {
                    // line 638
                    echo "            ";
                    // line 639
                    echo "            ";
                    echo $this->getAttribute($this, "input", array(0 => (isset($context["atributo"]) ? $context["atributo"] : null), 1 => "field_title", 2 => "text", 3 => ((((isset($context["controller"]) ? $context["controller"] : null) . "[") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)) . "]"), 4 => (((isset($context["controller"]) ? $context["controller"] : null) . "_") . (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), 5 => $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "getColumnValue", array(0 => (isset($context["keyAtributo"]) ? $context["keyAtributo"] : null)), "method"), 6 => "255", 7 => "CampoTextoLargo", 8 => "2"), "method");
                    echo "
        ";
                }
                // line 641
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
        return array (  2353 => 641,  2347 => 639,  2345 => 638,  2339 => 636,  2337 => 635,  2334 => 634,  2331 => 633,  2326 => 631,  2322 => 630,  2316 => 628,  2314 => 627,  2311 => 626,  2308 => 625,  2294 => 624,  2276 => 617,  2271 => 616,  2258 => 615,  2242 => 609,  2239 => 608,  2236 => 607,  2233 => 606,  2221 => 605,  2207 => 587,  2203 => 585,  2200 => 584,  2196 => 582,  2192 => 581,  2189 => 580,  2187 => 579,  2174 => 578,  2160 => 574,  2151 => 573,  2133 => 567,  2125 => 561,  2112 => 560,  2101 => 556,  2096 => 554,  2091 => 553,  2079 => 552,  2068 => 548,  2063 => 546,  2058 => 545,  2046 => 544,  2035 => 540,  2030 => 538,  2027 => 537,  2014 => 536,  2000 => 531,  1991 => 530,  1978 => 529,  1964 => 524,  1955 => 523,  1942 => 522,  1928 => 517,  1917 => 516,  1903 => 515,  1889 => 510,  1876 => 509,  1860 => 508,  1844 => 503,  1831 => 502,  1816 => 501,  1802 => 496,  1799 => 495,  1788 => 494,  1770 => 484,  1766 => 483,  1762 => 482,  1758 => 481,  1753 => 480,  1749 => 478,  1745 => 477,  1741 => 476,  1736 => 474,  1732 => 473,  1727 => 470,  1721 => 468,  1719 => 467,  1714 => 465,  1706 => 464,  1703 => 463,  1684 => 462,  1660 => 458,  1658 => 457,  1647 => 456,  1629 => 445,  1615 => 444,  1600 => 437,  1594 => 435,  1592 => 434,  1588 => 432,  1581 => 430,  1572 => 427,  1563 => 426,  1559 => 425,  1554 => 424,  1550 => 423,  1545 => 421,  1539 => 420,  1535 => 419,  1531 => 418,  1526 => 417,  1522 => 415,  1519 => 414,  1511 => 412,  1509 => 411,  1506 => 410,  1498 => 408,  1496 => 407,  1492 => 405,  1486 => 403,  1484 => 402,  1479 => 400,  1471 => 399,  1468 => 398,  1446 => 397,  1431 => 389,  1425 => 387,  1423 => 386,  1419 => 384,  1410 => 381,  1401 => 380,  1397 => 379,  1392 => 377,  1388 => 376,  1382 => 375,  1378 => 374,  1374 => 373,  1369 => 372,  1365 => 370,  1362 => 369,  1354 => 367,  1352 => 366,  1349 => 365,  1341 => 363,  1339 => 362,  1335 => 360,  1329 => 358,  1327 => 357,  1322 => 355,  1314 => 354,  1311 => 353,  1289 => 352,  1272 => 344,  1268 => 343,  1264 => 342,  1260 => 341,  1256 => 340,  1252 => 339,  1244 => 338,  1240 => 337,  1236 => 336,  1232 => 334,  1226 => 332,  1224 => 331,  1219 => 329,  1210 => 328,  1191 => 327,  1173 => 317,  1169 => 316,  1163 => 315,  1157 => 314,  1149 => 313,  1145 => 311,  1139 => 309,  1137 => 308,  1132 => 306,  1129 => 305,  1127 => 304,  1110 => 303,  1093 => 297,  1087 => 295,  1085 => 294,  1080 => 293,  1066 => 292,  1051 => 285,  1045 => 284,  1040 => 282,  1034 => 281,  1029 => 279,  1023 => 278,  1018 => 276,  1011 => 275,  1005 => 273,  1003 => 272,  998 => 271,  981 => 270,  966 => 262,  957 => 260,  953 => 259,  948 => 258,  944 => 257,  938 => 256,  934 => 255,  930 => 254,  926 => 253,  922 => 252,  918 => 251,  914 => 249,  910 => 248,  906 => 246,  900 => 244,  898 => 243,  893 => 241,  885 => 240,  882 => 239,  862 => 238,  847 => 231,  841 => 227,  837 => 225,  833 => 224,  829 => 223,  823 => 222,  809 => 221,  803 => 220,  797 => 219,  793 => 218,  789 => 217,  782 => 215,  778 => 214,  774 => 213,  771 => 212,  768 => 211,  764 => 209,  760 => 208,  756 => 207,  750 => 206,  742 => 205,  736 => 204,  732 => 203,  728 => 202,  723 => 201,  719 => 199,  715 => 198,  711 => 197,  702 => 195,  696 => 194,  688 => 192,  684 => 191,  680 => 190,  675 => 189,  665 => 186,  662 => 185,  660 => 184,  656 => 182,  650 => 180,  648 => 179,  643 => 177,  635 => 176,  632 => 175,  630 => 174,  608 => 173,  595 => 151,  591 => 150,  587 => 149,  577 => 146,  573 => 145,  567 => 143,  563 => 142,  559 => 141,  555 => 140,  551 => 139,  541 => 137,  539 => 136,  525 => 135,  501 => 130,  490 => 129,  487 => 128,  483 => 127,  479 => 126,  473 => 124,  469 => 122,  454 => 121,  431 => 115,  417 => 114,  414 => 113,  410 => 112,  406 => 111,  399 => 109,  395 => 108,  392 => 107,  377 => 106,  362 => 100,  351 => 99,  349 => 98,  335 => 97,  317 => 90,  311 => 87,  306 => 85,  296 => 84,  291 => 82,  287 => 80,  271 => 79,  256 => 74,  253 => 73,  248 => 72,  245 => 71,  242 => 70,  238 => 69,  234 => 68,  231 => 67,  222 => 64,  217 => 62,  212 => 60,  208 => 59,  205 => 58,  201 => 57,  197 => 56,  192 => 54,  182 => 49,  177 => 47,  173 => 46,  168 => 44,  164 => 43,  160 => 42,  157 => 41,  153 => 40,  149 => 39,  144 => 37,  140 => 35,  138 => 34,  131 => 33,  117 => 32,  112 => 620,  109 => 611,  106 => 591,  103 => 576,  100 => 570,  97 => 558,  94 => 550,  91 => 542,  88 => 534,  85 => 527,  82 => 520,  79 => 513,  76 => 506,  73 => 499,  70 => 492,  67 => 460,  64 => 447,  61 => 442,  58 => 394,  55 => 349,  52 => 324,  49 => 300,  46 => 289,  43 => 267,  40 => 234,  37 => 154,  34 => 134,  31 => 119,  28 => 104,  25 => 95,  22 => 78,  19 => 29,);
    }
}
