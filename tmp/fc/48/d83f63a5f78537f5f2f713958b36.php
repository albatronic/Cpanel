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
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "field_title")) : ("field_title")), "html", null, true);
            echo "\" title=\"";
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
            echo "\">  
    ";
            // line 34
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (((($this->getAttribute($_atributos_, "varEnv") == "") && ($this->getAttribute($this->getAttribute($_user_, "getIdPerfil"), "Id") == "1")) && ($this->getAttribute($_idiomas_, "actual") == 0))) {
                // line 35
                echo "        <input
            title=\"Poner/Quitar visibilidad\"
            id=\"checkVisibilidad";
                // line 37
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\"
            type=\"checkbox\"
            value=\"";
                // line 39
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "visible"), "html", null, true);
                echo "\"
            ";
                // line 40
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (($this->getAttribute($_atributos_, "visible") > "1")) {
                    echo " checked ";
                }
                // line 41
                echo "            onchange=\"
              if (\$('#checkVisibilidad";
                // line 42
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').is(':checked')) {
                  \$('#checkVisibilidad";
                // line 43
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').val('1');
                  \$('#spanVisibilidad";
                // line 44
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').removeClass('invisible');
              } else {
                  \$('#checkVisibilidad";
                // line 46
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').val('0');
                  \$('#spanVisibilidad";
                // line 47
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').addClass('invisible');
              }
              actualizaVarEntorno('";
                // line 49
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "_visible',\$('#checkVisibilidad";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').val());
            \"
        />
        <input
            title=\"Poner/Quitar multi idioma\"
            id=\"checkMultiIdioma";
                // line 54
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\"
            type=\"checkbox\"
            value=\"";
                // line 56
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "translatable"), "html", null, true);
                echo "\"
            ";
                // line 57
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (($this->getAttribute($_atributos_, "translatable") > "0")) {
                    echo " checked ";
                }
                // line 58
                echo "            onchange=\"
              if (\$('#checkMultiIdioma";
                // line 59
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').is(':checked')) {
                  \$('#checkMultiIdioma";
                // line 60
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').val('1');
              } else {
                  \$('#checkMultiIdioma";
                // line 62
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').val('0');
              }
              actualizaVarEntorno('";
                // line 64
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "_translatable',\$('#checkMultiIdioma";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "').val());
            \"
        />           
    ";
            }
            // line 67
            echo "            
    <span id=\"spanVisibilidad";
            // line 68
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" 
        ";
            // line 69
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (((($this->getAttribute($this->getAttribute($_user_, "getIdPerfil"), "Id") == "1") && ($this->getAttribute($_atributos_, "visible") == "1")) && ($this->getAttribute($_atributos_, "varEnv") == ""))) {
                echo " class=\"invisible\"";
            }
            // line 70
            echo "        ";
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (((($this->getAttribute($_atributos_, "varEnv") == "") && ($this->getAttribute($this->getAttribute($_user_, "getIdPerfil"), "Id") == "1")) && ($this->getAttribute($_idiomas_, "actual") == 0))) {
                // line 71
                echo "             style=\"cursor: pointer;\"
             onclick=\"popUpVariablesEnv('Env','Mod','";
                // line 72
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "');\"
        ";
            }
            // line 73
            echo "              >            
        ";
            // line 74
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "caption"), "html", null, true);
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
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "field_title")) : ("field_title")), "html", null, true);
            echo "\"
             style=\"cursor: pointer;\"
             onclick=\"window.open('";
            // line 84
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $_url_, "html", null, true);
            echo "','";
            if (isset($context["caption"])) { $_caption_ = $context["caption"]; } else { $_caption_ = null; }
            echo twig_escape_filter($this->env, $_caption_, "html", null, true);
            echo "','width=";
            if (isset($context["ancho"])) { $_ancho_ = $context["ancho"]; } else { $_ancho_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ancho", $context)) ? (_twig_default_filter($_ancho_, 400)) : (400)), "html", null, true);
            echo ",height=";
            if (isset($context["alto"])) { $_alto_ = $context["alto"]; } else { $_alto_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("alto", $context)) ? (_twig_default_filter($_alto_, 580)) : (580)), "html", null, true);
            echo "');\"
             title='";
            // line 85
            if (isset($context["caption"])) { $_caption_ = $context["caption"]; } else { $_caption_ = null; }
            echo twig_escape_filter($this->env, $_caption_, "html", null, true);
            echo "'
            >
            ";
            // line 87
            if (isset($context["caption"])) { $_caption_ = $context["caption"]; } else { $_caption_ = null; }
            echo twig_escape_filter($this->env, $_caption_, "html", null, true);
            echo "
        </label>
        <div id=\"enlace\" class=\"form_input\">
            <span>";
            // line 90
            if (isset($context["objetoEnlazado"])) { $_objetoEnlazado_ = $context["objetoEnlazado"]; } else { $_objetoEnlazado_ = null; }
            echo twig_escape_filter($this->env, $_objetoEnlazado_, "html", null, true);
            echo " (";
            if (isset($context["objetoEnlazado"])) { $_objetoEnlazado_ = $context["objetoEnlazado"]; } else { $_objetoEnlazado_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objetoEnlazado_, "UrlFriendly"), "html", null, true);
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
            if (isset($context["permisosModulo"])) { $_permisosModulo_ = $context["permisosModulo"]; } else { $_permisosModulo_ = null; }
            if ($this->getAttribute($_permisosModulo_, "MO", array(), "array")) {
                // line 99
                echo "<a href=\"javascript:;\" onclick=\"popUpOrdenar('";
                if (isset($context["controller"])) { $_controller_ = $context["controller"]; } else { $_controller_ = null; }
                echo twig_escape_filter($this->env, $_controller_, "html", null, true);
                echo "','";
                if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
                echo twig_escape_filter($this->env, $_columna_, "html", null, true);
                echo "','";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "','";
                if (isset($context["columnaMostrar"])) { $_columnaMostrar_ = $context["columnaMostrar"]; } else { $_columnaMostrar_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("columnaMostrar", $context)) ? (_twig_default_filter($_columnaMostrar_, "Titulo")) : ("Titulo")), "html", null, true);
                echo "');\">
    <img src=\"";
                // line 100
                if (isset($context["appPath"])) { $_appPath_ = $context["appPath"]; } else { $_appPath_ = null; }
                echo twig_escape_filter($this->env, $_appPath_, "html", null, true);
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
            if (isset($context["titulo"])) { $_titulo_ = $context["titulo"]; } else { $_titulo_ = null; }
            echo twig_escape_filter($this->env, $_titulo_, "html", null, true);
            echo "\"
    id=\"check";
            // line 109
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
            echo "\"
    type=\"checkbox\"
    value=\"";
            // line 111
            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
            echo twig_escape_filter($this->env, $_valor_, "html", null, true);
            echo "\"
    ";
            // line 112
            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
            if (($_valor_ == "1")) {
                echo " checked ";
            }
            // line 113
            echo "    onchange=\"
      if (\$('#check";
            // line 114
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
            echo "').is(':checked')) {\$('#check";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
            echo "').val('1');} else {\$('#check";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
            echo "').val('0');}
      actualizaColumna('";
            // line 115
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "','";
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            echo "','";
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
            echo "',\$('#check";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            if (isset($context["columna"])) { $_columna_ = $context["columna"]; } else { $_columna_ = null; }
            echo twig_escape_filter($this->env, $_columna_, "html", null, true);
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
            if (isset($context["entidadDestino"])) { $_entidadDestino_ = $context["entidadDestino"]; } else { $_entidadDestino_ = null; }
            echo twig_escape_filter($this->env, $_entidadDestino_, "html", null, true);
            if (isset($context["idDestino"])) { $_idDestino_ = $context["idDestino"]; } else { $_idDestino_ = null; }
            echo twig_escape_filter($this->env, $_idDestino_, "html", null, true);
            echo "\"
    type=\"checkbox\"
    value=\"";
            // line 126
            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
            echo twig_escape_filter($this->env, $_valor_, "html", null, true);
            echo "\"
    ";
            // line 127
            if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
            if (($_valor_ != "")) {
                echo " checked ";
            }
            // line 128
            echo "    onchange=\"
      if (\$('#check";
            // line 129
            if (isset($context["entidadDestino"])) { $_entidadDestino_ = $context["entidadDestino"]; } else { $_entidadDestino_ = null; }
            echo twig_escape_filter($this->env, $_entidadDestino_, "html", null, true);
            if (isset($context["idDestino"])) { $_idDestino_ = $context["idDestino"]; } else { $_idDestino_ = null; }
            echo twig_escape_filter($this->env, $_idDestino_, "html", null, true);
            echo "').is(':checked')) {\$('#check";
            if (isset($context["entidadDestino"])) { $_entidadDestino_ = $context["entidadDestino"]; } else { $_entidadDestino_ = null; }
            echo twig_escape_filter($this->env, $_entidadDestino_, "html", null, true);
            if (isset($context["idDestino"])) { $_idDestino_ = $context["idDestino"]; } else { $_idDestino_ = null; }
            echo twig_escape_filter($this->env, $_idDestino_, "html", null, true);
            echo "').val('1');} else {\$('#check";
            if (isset($context["entidadDestino"])) { $_entidadDestino_ = $context["entidadDestino"]; } else { $_entidadDestino_ = null; }
            echo twig_escape_filter($this->env, $_entidadDestino_, "html", null, true);
            if (isset($context["idDestino"])) { $_idDestino_ = $context["idDestino"]; } else { $_idDestino_ = null; }
            echo twig_escape_filter($this->env, $_idDestino_, "html", null, true);
            echo "').val('0');}
      actualizaRelacion('";
            // line 130
            if (isset($context["entidadOrigen"])) { $_entidadOrigen_ = $context["entidadOrigen"]; } else { $_entidadOrigen_ = null; }
            echo twig_escape_filter($this->env, $_entidadOrigen_, "html", null, true);
            echo "','";
            if (isset($context["idOrigen"])) { $_idOrigen_ = $context["idOrigen"]; } else { $_idOrigen_ = null; }
            echo twig_escape_filter($this->env, $_idOrigen_, "html", null, true);
            echo "','";
            if (isset($context["entidadDestino"])) { $_entidadDestino_ = $context["entidadDestino"]; } else { $_entidadDestino_ = null; }
            echo twig_escape_filter($this->env, $_entidadDestino_, "html", null, true);
            echo "','";
            if (isset($context["idDestino"])) { $_idDestino_ = $context["idDestino"]; } else { $_idDestino_ = null; }
            echo twig_escape_filter($this->env, $_idDestino_, "html", null, true);
            echo "',\$('#check";
            if (isset($context["entidadDestino"])) { $_entidadDestino_ = $context["entidadDestino"]; } else { $_entidadDestino_ = null; }
            echo twig_escape_filter($this->env, $_entidadDestino_, "html", null, true);
            if (isset($context["idDestino"])) { $_idDestino_ = $context["idDestino"]; } else { $_idDestino_ = null; }
            echo twig_escape_filter($this->env, $_idDestino_, "html", null, true);
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && (($this->getAttribute($_atributos_, "translatable") == "1") || ($this->getAttribute($_idiomas_, "actual") == "0")))) {
                // line 137
                echo "<input name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\" type=\"hidden\" value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" />
<input type=\"checkbox\"
       name=\"checkbox_";
                // line 139
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\"
       id=\"checkbox_";
                // line 140
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\"
       value=\"";
                // line 141
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\"
        ";
                // line 142
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($_value_ == "1")) {
                    echo " CHECKED ";
                }
                // line 143
                echo "       class=\"tip_top\" title=\"";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
                echo "\"
       onchange=\"
            ";
                // line 145
                echo $this->getAttribute($this, "alertSave");
                echo "
            if (\$('#checkbox_";
                // line 146
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "').is(':checked')) {\$('#";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "').val('1');} else {\$('#";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "').val('0');}
            actualiza
       \"
       ";
                // line 149
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $_extra_, "html", null, true);
                echo "
       ";
                // line 150
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (($this->getAttribute($_atributos_, "updatable") == "0")) {
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "editorTiny") != "1")) {
                // line 175
                echo "    
    <li ";
                // line 176
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                    echo "class=\"\"";
                } else {
                    echo "class=\"oculto\"";
                }
                echo ">
        <div class=\"form_grid_12\" id=\"div_";
                // line 177
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\">

        ";
                // line 179
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if ($this->getAttribute($_atributos_, "caption")) {
                    // line 180
                    echo "            ";
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                    echo "
        ";
                }
                // line 182
                echo "
        <div class=\"form_input\">
        ";
                // line 184
                if (isset($context["autoComplete"])) { $_autoComplete_ = $context["autoComplete"]; } else { $_autoComplete_ = null; }
                if ((!$_autoComplete_)) {
                    // line 185
                    echo "            ";
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    if (($_type_ == "checkbox")) {
                        // line 186
                        echo "            <input name=\"";
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, $_name_, "html", null, true);
                        echo "\" id=\"";
                        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                        echo "\" type=\"hidden\" value=\"";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\" />
            <input type=\"checkbox\"
                   ";
                        // line 189
                        echo "                   id=\"checkbox_";
                        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                        echo "\"
                   value=\"";
                        // line 190
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\"
                    ";
                        // line 191
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        if (($_value_ == "1")) {
                            echo " CHECKED ";
                        }
                        // line 192
                        echo "                   class=\"";
                        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                        echo twig_escape_filter($this->env, $_class_, "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
                        echo "\" tabindex=\"";
                        if (isset($context["tabIndex"])) { $_tabIndex_ = $context["tabIndex"]; } else { $_tabIndex_ = null; }
                        echo twig_escape_filter($this->env, $_tabIndex_, "html", null, true);
                        echo "\"
                   onchange=\"
                        ";
                        // line 194
                        if (isset($context["onchange"])) { $_onchange_ = $context["onchange"]; } else { $_onchange_ = null; }
                        echo twig_escape_filter($this->env, $_onchange_, "html", null, true);
                        echo " ";
                        echo $this->getAttribute($this, "alertSave");
                        echo "
                        if (\$('#checkbox_";
                        // line 195
                        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                        echo "').is(':checked')) {\$('#";
                        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                        echo "').val('1');} else {\$('#";
                        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                        echo "').val('0');}
                   \"
                   ";
                        // line 197
                        if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                        echo twig_escape_filter($this->env, $_extra_, "html", null, true);
                        echo "
                   ";
                        // line 198
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                            echo " disabled ";
                        }
                        // line 199
                        echo "            />
            ";
                    } else {
                        // line 201
                        echo "            <input type=\"";
                        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text")), "html", null, true);
                        echo "\"
                   name=\"";
                        // line 202
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, $_name_, "html", null, true);
                        echo "\"
                   id=\"";
                        // line 203
                        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                        echo "\"
                   value=\"";
                        // line 204
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "\" maxlength=\"";
                        if (isset($context["maxLength"])) { $_maxLength_ = $context["maxLength"]; } else { $_maxLength_ = null; }
                        echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter($_maxLength_, 20)) : (20)), "html", null, true);
                        echo "\"
                   class=\"mid\" title=\"";
                        // line 205
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
                        echo "\" tabindex=\"";
                        if (isset($context["tabIndex"])) { $_tabIndex_ = $context["tabIndex"]; } else { $_tabIndex_ = null; }
                        echo twig_escape_filter($this->env, $_tabIndex_, "html", null, true);
                        echo "\"
                   onchange=\"";
                        // line 206
                        if (isset($context["onchange"])) { $_onchange_ = $context["onchange"]; } else { $_onchange_ = null; }
                        echo twig_escape_filter($this->env, $_onchange_, "html", null, true);
                        echo " ";
                        echo $this->getAttribute($this, "alertSave");
                        echo "\"
                   ";
                        // line 207
                        if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                        echo twig_escape_filter($this->env, $_extra_, "html", null, true);
                        echo "
                   ";
                        // line 208
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (($this->getAttribute($_atributos_, "updatable") == "0")) {
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
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\"
                   id=\"";
                    // line 214
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                    echo "\"
                   value=\"";
                    // line 215
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\" maxlength=\"";
                    if (isset($context["maxLength"])) { $_maxLength_ = $context["maxLength"]; } else { $_maxLength_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter($_maxLength_, 20)) : (20)), "html", null, true);
                    echo "\"
            />
            <input type=\"";
                    // line 217
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text")), "html", null, true);
                    echo "\"
                   id=\"";
                    // line 218
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                    echo "_autoComplete\"
                   value=\"";
                    // line 219
                    if (isset($context["autoComplete"])) { $_autoComplete_ = $context["autoComplete"]; } else { $_autoComplete_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_autoComplete_, 2, array(), "array"), "html", null, true);
                    echo "\" maxlength=\"";
                    if (isset($context["maxLength"])) { $_maxLength_ = $context["maxLength"]; } else { $_maxLength_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter($_maxLength_, 20)) : (20)), "html", null, true);
                    echo "\"
                   class=\"mid\" title=\"";
                    // line 220
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
                    echo "\" tabindex=\"";
                    if (isset($context["tabIndex"])) { $_tabIndex_ = $context["tabIndex"]; } else { $_tabIndex_ = null; }
                    echo twig_escape_filter($this->env, $_tabIndex_, "html", null, true);
                    echo "\"
                   onkeyup=\"autoCompletar('";
                    // line 221
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                    echo "_autoComplete','";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                    echo "','";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                    echo "_autoComplete','";
                    if (isset($context["autoComplete"])) { $_autoComplete_ = $context["autoComplete"]; } else { $_autoComplete_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_autoComplete_, 0, array(), "array"), "html", null, true);
                    echo "','";
                    if (isset($context["autoComplete"])) { $_autoComplete_ = $context["autoComplete"]; } else { $_autoComplete_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_autoComplete_, 1, array(), "array"), "html", null, true);
                    echo "',\$('#";
                    if (isset($context["autoComplete"])) { $_autoComplete_ = $context["autoComplete"]; } else { $_autoComplete_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_autoComplete_, 3, array(), "array"), "html", null, true);
                    echo "').val());\"
                   onchange = \"";
                    // line 222
                    if (isset($context["onchange"])) { $_onchange_ = $context["onchange"]; } else { $_onchange_ = null; }
                    echo twig_escape_filter($this->env, $_onchange_, "html", null, true);
                    echo " ";
                    echo $this->getAttribute($this, "alertSave");
                    echo "\"
                   ";
                    // line 223
                    if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                    echo twig_escape_filter($this->env, $_extra_, "html", null, true);
                    echo "
                   ";
                    // line 224
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (($this->getAttribute($_atributos_, "updatable") == "0")) {
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
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
                if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
                if (isset($context["tabindex"])) { $_tabindex_ = $context["tabindex"]; } else { $_tabindex_ = null; }
                echo $this->getAttribute($this, "textarea", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_, 4 => $_value_, 5 => $_rows_, 6 => $_cols_, 7 => "elm1", 8 => $_tabindex_), "method");
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
<div class=\"form_grid_12\" id=\"div_";
            // line 241
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\">

    ";
            // line 243
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ($this->getAttribute($_atributos_, "caption")) {
                // line 244
                echo "        ";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                echo "
    ";
            }
            // line 246
            echo "
    <div class=\"form_input\">
        ";
            // line 248
            if (isset($context["arrayOptions"])) { $_arrayOptions_ = $context["arrayOptions"]; } else { $_arrayOptions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_arrayOptions_);
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 249
                echo "        <input  
           type=\"radio\"
           name=\"";
                // line 251
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\"
           id=\"";
                // line 252
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\"
           value=\"";
                // line 253
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "Id"), "html", null, true);
                echo "\"
           class=\"";
                // line 254
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "input_grow")) : ("input_grow")), "html", null, true);
                echo "\"
           tabindex=\"";
                // line 255
                if (isset($context["tabindex"])) { $_tabindex_ = $context["tabindex"]; } else { $_tabindex_ = null; }
                echo twig_escape_filter($this->env, $_tabindex_, "html", null, true);
                echo "\"
           onchange=\"";
                // line 256
                if (isset($context["onchange"])) { $_onchange_ = $context["onchange"]; } else { $_onchange_ = null; }
                echo twig_escape_filter($this->env, $_onchange_, "html", null, true);
                echo " ";
                echo $this->getAttribute($this, "alertSave");
                echo "\"
           ";
                // line 257
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                    echo " disabled ";
                }
                // line 258
                echo "           ";
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $_extra_, "html", null, true);
                echo "
           ";
                // line 259
                if (isset($context["valueSelected"])) { $_valueSelected_ = $context["valueSelected"]; } else { $_valueSelected_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($_valueSelected_ == $this->getAttribute($_value_, "Id"))) {
                    echo " checked";
                }
                // line 260
                echo "        />&nbsp;";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "Value"), "html", null, true);
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
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
    ";
            // line 272
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if ($_label_) {
                // line 273
                echo "        ";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_label_, 1 => $_classLabel_), "method");
                echo "
    ";
            }
            // line 275
            echo "    <input type=\"text\" name=\"";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "[IDBanco]\" id=\"";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "_IDBanco\"
           value=\"";
            // line 276
            if (isset($context["banco"])) { $_banco_ = $context["banco"]; } else { $_banco_ = null; }
            echo twig_escape_filter($this->env, $_banco_, "html", null, true);
            echo "\" maxlength=\"4\" class=\"CampoBanco\"
    />-
    <input type=\"text\" name=\"";
            // line 278
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "[IDOficina]\" id=\"";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "_IDOficina\"
           value=\"";
            // line 279
            if (isset($context["oficina"])) { $_oficina_ = $context["oficina"]; } else { $_oficina_ = null; }
            echo twig_escape_filter($this->env, $_oficina_, "html", null, true);
            echo "\" maxlength=\"4\" class=\"CampoOficina\"
    />-
    <input type=\"text\" name=\"";
            // line 281
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "[Digito]\" id=\"";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "_Digito\"
           value=\"";
            // line 282
            if (isset($context["digitoControl"])) { $_digitoControl_ = $context["digitoControl"]; } else { $_digitoControl_ = null; }
            echo twig_escape_filter($this->env, $_digitoControl_, "html", null, true);
            echo "\" maxlength=\"2\" class=\"CampoDigitoControl\"
    />-
    <input type=\"text\" name=\"";
            // line 284
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "[Cuenta]\" id=\"";
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "_Cuenta\"
           value=\"";
            // line 285
            if (isset($context["cuentaCorriente"])) { $_cuentaCorriente_ = $context["cuentaCorriente"]; } else { $_cuentaCorriente_ = null; }
            echo twig_escape_filter($this->env, $_cuentaCorriente_, "html", null, true);
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
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
    ";
            // line 294
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if ($_label_) {
                // line 295
                echo "        ";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_label_, 1 => $_classLabel_), "method");
                echo "
    ";
            }
            // line 297
            echo "    <p class=\"";
            if (isset($context["classText"])) { $_classText_ = $context["classText"]; } else { $_classText_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("classText", $context)) ? (_twig_default_filter($_classText_, "Literal")) : ("Literal")), "html", null, true);
            echo "\">";
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                // line 305
                echo "<li>
    <div class=\"form_grid_12\" id=\"div_";
                // line 306
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\">

    ";
                // line 308
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if ($this->getAttribute($_atributos_, "caption")) {
                    // line 309
                    echo "        ";
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                    echo "
    ";
                }
                // line 311
                echo "
    <div class=\"form_input\">
        <input type=\"";
                // line 313
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text")), "html", null, true);
                echo "\" name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\"
           value=\"";
                // line 314
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" maxlength=\"";
                if (isset($context["maxLength"])) { $_maxLength_ = $context["maxLength"]; } else { $_maxLength_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("maxLength", $context)) ? (_twig_default_filter($_maxLength_, 20)) : (20)), "html", null, true);
                echo "\"
           class=\"tip_top\" title=\"";
                // line 315
                if (isset($context["tip"])) { $_tip_ = $context["tip"]; } else { $_tip_ = null; }
                echo twig_escape_filter($this->env, $_tip_, "html", null, true);
                echo "\" tabindex=\"";
                if (isset($context["tabIndex"])) { $_tabIndex_ = $context["tabIndex"]; } else { $_tabIndex_ = null; }
                echo twig_escape_filter($this->env, $_tabIndex_, "html", null, true);
                echo "\"
           onchange=\"ValidaNif('manto','";
                // line 316
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "');\" />
           ";
                // line 317
                if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
                echo twig_escape_filter($this->env, $_extra_, "html", null, true);
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "editorTiny") == "1")) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                // line 329
                echo "    <script>
        tinyMCE.execCommand(\"mceAddControl\", true, \"";
                // line 330
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\");
    </script>
";
            }
            // line 333
            echo "<li ";
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
<div class=\"form_grid_12\" id=\"div_";
            // line 334
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\">

    ";
            // line 336
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ($this->getAttribute($_atributos_, "caption")) {
                // line 337
                echo "        ";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                echo "
    ";
            }
            // line 339
            echo "
    <div class=\"form_input\">
        <textarea  name=\"";
            // line 341
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                   id=\"";
            // line 342
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\"
                   class=\"large\" title=\"";
            // line 343
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
            echo "\"                  
                   rows=\"";
            // line 344
            if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("rows", $context)) ? (_twig_default_filter($_rows_, 5)) : (5)), "html", null, true);
            echo "\"
                   cols=\"";
            // line 345
            if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("cols", $context)) ? (_twig_default_filter($_cols_, 75)) : (75)), "html", null, true);
            echo "\"
                   tabindex=\"";
            // line 346
            if (isset($context["tabindex"])) { $_tabindex_ = $context["tabindex"]; } else { $_tabindex_ = null; }
            echo twig_escape_filter($this->env, $_tabindex_, "html", null, true);
            echo "\"
                   onchange=\"";
            // line 347
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                   ";
            // line 348
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                echo " disabled ";
            }
            // line 349
            echo "                   >";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 360
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\">

    ";
            // line 362
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ($this->getAttribute($_atributos_, "caption")) {
                // line 363
                echo "        ";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                echo "
    ";
            }
            // line 365
            echo "
    <div class=\"form_input\">
        ";
            // line 367
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                // line 368
                echo "            <input type=\"hidden\" name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["defecto"])) { $_defecto_ = $context["defecto"]; } else { $_defecto_ = null; }
                echo twig_escape_filter($this->env, $_defecto_, "html", null, true);
                echo "\" />
        ";
            }
            // line 370
            echo "        <select data-placeholder=\"Indique un valor\"
                ";
            // line 371
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "1")) {
                // line 372
                echo "                name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\"
                ";
            }
            // line 374
            echo "                ";
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                // line 375
                echo "                disabled
                ";
            }
            // line 377
            echo "                style=\"width:";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($_width_, 200)) : (200)), "html", null, true);
            echo "px;\"
                class=\"";
            // line 378
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "chzn-select")) : ("chzn-select")), "html", null, true);
            echo "\"
                onchange=\"";
            // line 379
            if (isset($context["onchange"])) { $_onchange_ = $context["onchange"]; } else { $_onchange_ = null; }
            echo twig_escape_filter($this->env, $_onchange_, "html", null, true);
            echo "\"
                onblur=\"";
            // line 380
            if (isset($context["onblur"])) { $_onblur_ = $context["onblur"]; } else { $_onblur_ = null; }
            echo twig_escape_filter($this->env, $_onblur_, "html", null, true);
            echo " ";
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                tabindex=\"";
            // line 381
            if (isset($context["tabindex"])) { $_tabindex_ = $context["tabindex"]; } else { $_tabindex_ = null; }
            echo twig_escape_filter($this->env, $_tabindex_, "html", null, true);
            echo "\"
                title=\"";
            // line 382
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_atributos_, "help"), "html", null, true);
            echo "\"
        >
            ";
            // line 384
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_opciones_);
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 385
                echo "            <option value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "Id"), "html", null, true);
                echo "\" ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["defecto"])) { $_defecto_ = $context["defecto"]; } else { $_defecto_ = null; }
                if (($this->getAttribute($_value_, "Id") == $_defecto_)) {
                    echo " SELECTED ";
                }
                echo ">
                ";
                // line 386
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "Value"), "html", null, true);
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
            if (isset($context["popup"])) { $_popup_ = $context["popup"]; } else { $_popup_ = null; }
            if ($_popup_) {
                // line 392
                echo "            ";
                if (isset($context["popup"])) { $_popup_ = $context["popup"]; } else { $_popup_ = null; }
                echo $this->getAttribute($this, "linkimg", array(0 => $_popup_), "method");
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 405
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\">

    ";
            // line 407
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ($this->getAttribute($_atributos_, "caption")) {
                // line 408
                echo "        ";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                echo "
    ";
            }
            // line 410
            echo "
    <div class=\"form_input\">
        ";
            // line 412
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                // line 413
                echo "            <input type=\"hidden\" name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["defecto"])) { $_defecto_ = $context["defecto"]; } else { $_defecto_ = null; }
                echo twig_escape_filter($this->env, $_defecto_, "html", null, true);
                echo "\" />
        ";
            }
            // line 415
            echo "        <select data-placeholder=\"Indique un valor\"
                ";
            // line 416
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "1")) {
                // line 417
                echo "                name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
                echo "\"
                ";
            }
            // line 419
            echo "                ";
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "0")) {
                // line 420
                echo "                disabled
                ";
            }
            // line 422
            echo "                style=\"width:";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($_width_, 200)) : (200)), "html", null, true);
            echo "px;\"
                class=\"";
            // line 423
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "chzn-select")) : ("chzn-select")), "html", null, true);
            echo "\"
                onchange=\"";
            // line 424
            if (isset($context["onchange"])) { $_onchange_ = $context["onchange"]; } else { $_onchange_ = null; }
            echo twig_escape_filter($this->env, $_onchange_, "html", null, true);
            echo "\"
                onblur=\"";
            // line 425
            if (isset($context["onblur"])) { $_onblur_ = $context["onblur"]; } else { $_onblur_ = null; }
            echo twig_escape_filter($this->env, $_onblur_, "html", null, true);
            echo " ";
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                tabindex=\"";
            // line 426
            if (isset($context["tabindex"])) { $_tabindex_ = $context["tabindex"]; } else { $_tabindex_ = null; }
            echo twig_escape_filter($this->env, $_tabindex_, "html", null, true);
            echo "\"
        >
            ";
            // line 428
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_opciones_);
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 429
                echo "                <optgroup label=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "Titulo"), "html", null, true);
                echo "\">
                    ";
                // line 430
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_value_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
                    // line 431
                    echo "                        <option value=\"";
                    if (isset($context["opcion"])) { $_opcion_ = $context["opcion"]; } else { $_opcion_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_opcion_, "Id"), "html", null, true);
                    echo "\" ";
                    if (isset($context["opcion"])) { $_opcion_ = $context["opcion"]; } else { $_opcion_ = null; }
                    if (isset($context["defecto"])) { $_defecto_ = $context["defecto"]; } else { $_defecto_ = null; }
                    if (($this->getAttribute($_opcion_, "Id") == $_defecto_)) {
                        echo " SELECTED ";
                    }
                    echo ">
                        ";
                    // line 432
                    if (isset($context["opcion"])) { $_opcion_ = $context["opcion"]; } else { $_opcion_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_opcion_, "Value"), "html", null, true);
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
            if (isset($context["popup"])) { $_popup_ = $context["popup"]; } else { $_popup_ = null; }
            if ($_popup_) {
                // line 440
                echo "            ";
                if (isset($context["popup"])) { $_popup_ = $context["popup"]; } else { $_popup_ = null; }
                echo $this->getAttribute($this, "linkimg", array(0 => $_popup_), "method");
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
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $_url_, "html", null, true);
            echo "\" width=\"";
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($_width_, "")) : ("")), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["alt"])) { $_alt_ = $context["alt"]; } else { $_alt_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("alt", $context)) ? (_twig_default_filter($_alt_, "Image")) : ("Image")), "html", null, true);
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
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_opciones_, 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_opciones_, 2, array(), "array"), "Ventana")) : ("Ventana")), "html", null, true);
            echo "\" href=\"";
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_opciones_, 0, array(), "array"), "html", null, true);
            echo "/";
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_opciones_, 1, array(), "array"), "html", null, true);
            echo "/list/?TB_iframe=true&height=";
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_opciones_, 3, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_opciones_, 3, array(), "array"), "500")) : ("500")), "html", null, true);
            echo "&width=";
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_opciones_, 4, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_opciones_, 4, array(), "array"), "600")) : ("600")), "html", null, true);
            echo "\"><img src=\"";
            if (isset($context["opciones"])) { $_opciones_ = $context["opciones"]; } else { $_opciones_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_opciones_, 0, array(), "array"), "html", null, true);
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
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if ((($this->getAttribute($_atributos_, "visible") > 0) && ($this->getAttribute($_atributos_, "translatable") || ($this->getAttribute($_idiomas_, "actual") == 0)))) {
                echo "class=\"\"";
            } else {
                echo "class=\"oculto\"";
            }
            echo ">
    <div class=\"form_grid_12\" id=\"div_";
            // line 470
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\">

    ";
            // line 472
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ($this->getAttribute($_atributos_, "caption")) {
                // line 473
                echo "        ";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["classLabel"])) { $_classLabel_ = $context["classLabel"]; } else { $_classLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo $this->getAttribute($this, "label", array(0 => $_atributos_, 1 => $_classLabel_, 2 => $_name_, 3 => $_id_), "method");
                echo "
    ";
            }
            // line 475
            echo "
    <div class=\"form_input\">
        <div class=\" form_grid_2 alpha\">
            <input name=\"";
            // line 478
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                       id=\"";
            // line 479
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, $_name_)) : ($_name_)), "html", null, true);
            echo "\"
                       type=\"text\"
                       value=\"";
            // line 481
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"
                       size=\"";
            // line 482
            if (isset($context["size"])) { $_size_ = $context["size"]; } else { $_size_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter($_size_, 10)) : (10)), "html", null, true);
            echo "\"
                       class=\"";
            // line 483
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "datepicker")) : ("datepicker")), "html", null, true);
            echo "\"
                       ";
            // line 485
            echo "                       tabindex=\"";
            if (isset($context["tabindex"])) { $_tabindex_ = $context["tabindex"]; } else { $_tabindex_ = null; }
            echo twig_escape_filter($this->env, $_tabindex_, "html", null, true);
            echo "\"
                       onchange = \"";
            // line 486
            echo $this->getAttribute($this, "alertSave");
            echo "\"
                       ";
            // line 487
            if (isset($context["extra"])) { $_extra_ = $context["extra"]; } else { $_extra_ = null; }
            echo twig_escape_filter($this->env, $_extra_, "html", null, true);
            echo "
                       ";
            // line 488
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (($this->getAttribute($_atributos_, "updatable") == "0")) {
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
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
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
            if (isset($context["ventanaTitulo"])) { $_ventanaTitulo_ = $context["ventanaTitulo"]; } else { $_ventanaTitulo_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaTitulo", $context)) ? (_twig_default_filter($_ventanaTitulo_, "Informe")) : ("Informe")), "html", null, true);
            echo "\" href=\"";
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/";
            if (isset($context["ruta"])) { $_ruta_ = $context["ruta"]; } else { $_ruta_ = null; }
            echo twig_escape_filter($this->env, $_ruta_, "html", null, true);
            echo "/?TB_iframe=true&height=";
            if (isset($context["ventanaAlto"])) { $_ventanaAlto_ = $context["ventanaAlto"]; } else { $_ventanaAlto_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAlto", $context)) ? (_twig_default_filter($_ventanaAlto_, "500")) : ("500")), "html", null, true);
            echo "&width=";
            if (isset($context["ventanaAncho"])) { $_ventanaAncho_ = $context["ventanaAncho"]; } else { $_ventanaAncho_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAncho", $context)) ? (_twig_default_filter($_ventanaAncho_, "600")) : ("600")), "html", null, true);
            echo "\">
    <img src=\"";
            // line 508
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"";
            if (isset($context["ventanaTitulo"])) { $_ventanaTitulo_ = $context["ventanaTitulo"]; } else { $_ventanaTitulo_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaTitulo", $context)) ? (_twig_default_filter($_ventanaTitulo_, "Informe")) : ("Informe")), "html", null, true);
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
            if (isset($context["ventanaTitulo"])) { $_ventanaTitulo_ = $context["ventanaTitulo"]; } else { $_ventanaTitulo_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaTitulo", $context)) ? (_twig_default_filter($_ventanaTitulo_, "Informe")) : ("Informe")), "html", null, true);
            echo "\" href=\"";
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/";
            if (isset($context["ruta"])) { $_ruta_ = $context["ruta"]; } else { $_ruta_ = null; }
            echo twig_escape_filter($this->env, $_ruta_, "html", null, true);
            echo "/?height=";
            if (isset($context["ventanaAlto"])) { $_ventanaAlto_ = $context["ventanaAlto"]; } else { $_ventanaAlto_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAlto", $context)) ? (_twig_default_filter($_ventanaAlto_, "500")) : ("500")), "html", null, true);
            echo "&width=";
            if (isset($context["ventanaAncho"])) { $_ventanaAncho_ = $context["ventanaAncho"]; } else { $_ventanaAncho_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("ventanaAncho", $context)) ? (_twig_default_filter($_ventanaAncho_, "600")) : ("600")), "html", null, true);
            echo "\">
    ";
            // line 515
            if (isset($context["textoLink"])) { $_textoLink_ = $context["textoLink"]; } else { $_textoLink_ = null; }
            echo twig_escape_filter($this->env, $_textoLink_, "html", null, true);
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
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/_Emergente/formatosDocumentos/";
            if (isset($context["documento"])) { $_documento_ = $context["documento"]; } else { $_documento_ = null; }
            echo twig_escape_filter($this->env, $_documento_, "html", null, true);
            echo "/";
            if (isset($context["controller"])) { $_controller_ = $context["controller"]; } else { $_controller_ = null; }
            echo twig_escape_filter($this->env, $_controller_, "html", null, true);
            echo "/";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "','Documento','width=690,height=600,status=false,resizable=1');\">
    <img src=\"";
            // line 522
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
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
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/_Emergente/HistoricoVentas/";
            if (isset($context["idArticulo"])) { $_idArticulo_ = $context["idArticulo"]; } else { $_idArticulo_ = null; }
            echo twig_escape_filter($this->env, $_idArticulo_, "html", null, true);
            echo "/";
            if (isset($context["idCliente"])) { $_idCliente_ = $context["idCliente"]; } else { $_idCliente_ = null; }
            echo twig_escape_filter($this->env, $_idCliente_, "html", null, true);
            echo "','HistoricoVentas','width=450,height=500,resizable=yes,scrollbars=yes');\">
    <img src=\"";
            // line 529
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
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
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/_Emergente/HistoricoCompras/";
            if (isset($context["idArticulo"])) { $_idArticulo_ = $context["idArticulo"]; } else { $_idArticulo_ = null; }
            echo twig_escape_filter($this->env, $_idArticulo_, "html", null, true);
            echo "/";
            if (isset($context["idProveedor"])) { $_idProveedor_ = $context["idProveedor"]; } else { $_idProveedor_ = null; }
            echo twig_escape_filter($this->env, $_idProveedor_, "html", null, true);
            echo "','HistoricoCompras','width=450,height=500,resizable=yes,scrollbars=yes');\">
    <img src=\"";
            // line 536
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
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
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Promociones\" title=\"Promociones...\">
</a>
";
            // line 545
            if (isset($context["cliente"])) { $_cliente_ = $context["cliente"]; } else { $_cliente_ = null; }
            if (isset($context["fecha"])) { $_fecha_ = $context["fecha"]; } else { $_fecha_ = null; }
            $this->env->loadTemplate("_Emergente/promosVigentesCliente.html.twig")->display(array_merge($context, array("cliente" => $_cliente_, "fecha" => $_fecha_)));
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
            if (isset($context["lineaEntidad"])) { $_lineaEntidad_ = $context["lineaEntidad"]; } else { $_lineaEntidad_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lineaEntidad_, "IDLinea"), "html", null, true);
            echo "').dialog('open');\">
    <img src=\"";
            // line 551
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Detalle Recepción\" title=\"Detalle Recepción...\">
</a>
";
            // line 553
            if (isset($context["lineaEntidad"])) { $_lineaEntidad_ = $context["lineaEntidad"]; } else { $_lineaEntidad_ = null; }
            $this->env->loadTemplate("RecepcionarLineas/detalleRecepcion.html.twig")->display(array_merge($context, array("lineaEntidad" => $_lineaEntidad_)));
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
            if (isset($context["lineaEntidad"])) { $_lineaEntidad_ = $context["lineaEntidad"]; } else { $_lineaEntidad_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lineaEntidad_, "IDLinea"), "html", null, true);
            echo "').dialog('open');\">
    <img src=\"";
            // line 559
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/images/botonreport.png\" width=\"16px\" height=\"16px\" alt=\"Detalle Expedición\" title=\"Detalle Expedición...\">
</a>
";
            // line 561
            if (isset($context["lineaEntidad"])) { $_lineaEntidad_ = $context["lineaEntidad"]; } else { $_lineaEntidad_ = null; }
            $this->env->loadTemplate("ExpedirLineas/detalleExpedicion.html.twig")->display(array_merge($context, array("lineaEntidad" => $_lineaEntidad_)));
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
            if (isset($context["entidad"])) { $_entidad_ = $context["entidad"]; } else { $_entidad_ = null; }
            echo twig_escape_filter($this->env, $_entidad_, "html", null, true);
            echo "', '";
            if (isset($context["idEntidad"])) { $_idEntidad_ = $context["idEntidad"]; } else { $_idEntidad_ = null; }
            echo twig_escape_filter($this->env, $_idEntidad_, "html", null, true);
            echo "', 'Documentos', '";
            if (isset($context["tipo"])) { $_tipo_ = $context["tipo"]; } else { $_tipo_ = null; }
            echo twig_escape_filter($this->env, $_tipo_, "html", null, true);
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
            if (isset($context["appPath"])) { $_appPath_ = $context["appPath"]; } else { $_appPath_ = null; }
            echo twig_escape_filter($this->env, $_appPath_, "html", null, true);
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
            if (isset($context["media"])) { $_media_ = $context["media"]; } else { $_media_ = null; }
            if ($_media_) {
                // line 585
                echo "<embed bgcolor='#505050'
       width='";
                // line 586
                if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($_width_, "250")) : ("250")), "html", null, true);
                echo "'
       height='";
                // line 587
                if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter($_height_, "250")) : ("250")), "html", null, true);
                echo "'
       ";
                // line 589
                echo "       allowScriptAccess='always'
       src='";
                // line 590
                if (isset($context["media"])) { $_media_ = $context["media"]; } else { $_media_ = null; }
                echo twig_escape_filter($this->env, $_media_, "html", null, true);
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
            if (isset($context["texto"])) { $_texto_ = $context["texto"]; } else { $_texto_ = null; }
            if (isset($context["nCaracteres"])) { $_nCaracteres_ = $context["nCaracteres"]; } else { $_nCaracteres_ = null; }
            if ((twig_length_filter($this->env, $_texto_) > $_nCaracteres_)) {
                // line 612
                echo "        ";
                $context["puntos"] = "...";
                // line 613
                echo "    ";
            }
            // line 614
            echo "    ";
            if (isset($context["texto"])) { $_texto_ = $context["texto"]; } else { $_texto_ = null; }
            if (isset($context["nCaracteres"])) { $_nCaracteres_ = $context["nCaracteres"]; } else { $_nCaracteres_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $_texto_, 0, $_nCaracteres_), "html", null, true);
            echo " ";
            if (isset($context["puntos"])) { $_puntos_ = $context["puntos"]; } else { $_puntos_ = null; }
            echo twig_escape_filter($this->env, $_puntos_, "html", null, true);
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
        return array (  2640 => 614,  2637 => 613,  2634 => 612,  2629 => 611,  2617 => 610,  2603 => 592,  2598 => 590,  2595 => 589,  2590 => 587,  2585 => 586,  2582 => 585,  2579 => 584,  2566 => 583,  2551 => 579,  2542 => 578,  2521 => 572,  2513 => 566,  2500 => 565,  2488 => 561,  2482 => 559,  2476 => 558,  2464 => 557,  2452 => 553,  2446 => 551,  2440 => 550,  2428 => 549,  2415 => 545,  2409 => 543,  2406 => 542,  2393 => 541,  2378 => 536,  2366 => 535,  2353 => 534,  2338 => 529,  2326 => 528,  2313 => 527,  2298 => 522,  2283 => 521,  2269 => 520,  2254 => 515,  2236 => 514,  2220 => 513,  2202 => 508,  2184 => 507,  2169 => 506,  2154 => 501,  2151 => 500,  2140 => 499,  2122 => 489,  2117 => 488,  2112 => 487,  2108 => 486,  2102 => 485,  2097 => 483,  2092 => 482,  2087 => 481,  2080 => 479,  2075 => 478,  2070 => 475,  2060 => 473,  2057 => 472,  2050 => 470,  2040 => 469,  2037 => 468,  2018 => 467,  1988 => 463,  1986 => 462,  1975 => 461,  1954 => 450,  1940 => 449,  1925 => 442,  1918 => 440,  1915 => 439,  1911 => 437,  1904 => 435,  1894 => 432,  1882 => 431,  1877 => 430,  1871 => 429,  1866 => 428,  1860 => 426,  1853 => 425,  1848 => 424,  1843 => 423,  1837 => 422,  1833 => 420,  1829 => 419,  1818 => 417,  1815 => 416,  1812 => 415,  1802 => 413,  1799 => 412,  1795 => 410,  1785 => 408,  1782 => 407,  1775 => 405,  1765 => 404,  1762 => 403,  1740 => 402,  1725 => 394,  1718 => 392,  1715 => 391,  1711 => 389,  1701 => 386,  1689 => 385,  1684 => 384,  1678 => 382,  1673 => 381,  1666 => 380,  1661 => 379,  1656 => 378,  1650 => 377,  1646 => 375,  1642 => 374,  1631 => 372,  1628 => 371,  1625 => 370,  1615 => 368,  1612 => 367,  1608 => 365,  1598 => 363,  1595 => 362,  1588 => 360,  1578 => 359,  1575 => 358,  1553 => 357,  1535 => 349,  1530 => 348,  1526 => 347,  1521 => 346,  1516 => 345,  1511 => 344,  1506 => 343,  1500 => 342,  1495 => 341,  1491 => 339,  1481 => 337,  1478 => 336,  1471 => 334,  1460 => 333,  1452 => 330,  1449 => 329,  1445 => 328,  1426 => 327,  1407 => 317,  1402 => 316,  1394 => 315,  1386 => 314,  1374 => 313,  1370 => 311,  1360 => 309,  1357 => 308,  1350 => 306,  1347 => 305,  1343 => 304,  1326 => 303,  1307 => 297,  1299 => 295,  1296 => 294,  1290 => 293,  1276 => 292,  1260 => 285,  1252 => 284,  1246 => 282,  1238 => 281,  1232 => 279,  1224 => 278,  1218 => 276,  1209 => 275,  1201 => 273,  1198 => 272,  1192 => 271,  1175 => 270,  1160 => 262,  1150 => 260,  1144 => 259,  1138 => 258,  1133 => 257,  1126 => 256,  1121 => 255,  1116 => 254,  1111 => 253,  1105 => 252,  1100 => 251,  1096 => 249,  1091 => 248,  1087 => 246,  1077 => 244,  1074 => 243,  1067 => 241,  1057 => 240,  1054 => 239,  1034 => 238,  1011 => 231,  1005 => 227,  1001 => 225,  996 => 224,  991 => 223,  984 => 222,  961 => 221,  953 => 220,  945 => 219,  939 => 218,  934 => 217,  925 => 215,  919 => 214,  914 => 213,  911 => 212,  908 => 211,  904 => 209,  899 => 208,  894 => 207,  887 => 206,  879 => 205,  871 => 204,  865 => 203,  860 => 202,  854 => 201,  850 => 199,  845 => 198,  840 => 197,  825 => 195,  818 => 194,  805 => 192,  800 => 191,  795 => 190,  788 => 189,  774 => 186,  770 => 185,  767 => 184,  763 => 182,  753 => 180,  750 => 179,  743 => 177,  733 => 176,  730 => 175,  727 => 174,  705 => 173,  692 => 151,  687 => 150,  682 => 149,  666 => 146,  662 => 145,  655 => 143,  650 => 142,  645 => 141,  639 => 140,  634 => 139,  620 => 137,  616 => 136,  602 => 135,  572 => 130,  555 => 129,  552 => 128,  547 => 127,  542 => 126,  534 => 124,  530 => 122,  515 => 121,  486 => 115,  463 => 114,  460 => 113,  455 => 112,  450 => 111,  440 => 109,  435 => 108,  432 => 107,  417 => 106,  401 => 100,  386 => 99,  383 => 98,  369 => 97,  349 => 90,  342 => 87,  336 => 85,  322 => 84,  316 => 82,  312 => 80,  296 => 79,  280 => 74,  277 => 73,  271 => 72,  268 => 71,  262 => 70,  256 => 69,  251 => 68,  248 => 67,  237 => 64,  231 => 62,  225 => 60,  220 => 59,  217 => 58,  212 => 57,  207 => 56,  201 => 54,  189 => 49,  183 => 47,  178 => 46,  172 => 44,  167 => 43,  162 => 42,  159 => 41,  154 => 40,  149 => 39,  143 => 37,  139 => 35,  134 => 34,  125 => 33,  111 => 32,  106 => 596,  103 => 581,  100 => 575,  97 => 563,  94 => 555,  91 => 547,  88 => 539,  85 => 532,  82 => 525,  79 => 518,  76 => 511,  73 => 504,  70 => 497,  67 => 465,  64 => 452,  61 => 447,  58 => 399,  55 => 354,  52 => 324,  49 => 300,  46 => 289,  43 => 267,  40 => 234,  37 => 154,  34 => 134,  31 => 119,  28 => 104,  25 => 95,  22 => 78,  19 => 29,);
    }
}
