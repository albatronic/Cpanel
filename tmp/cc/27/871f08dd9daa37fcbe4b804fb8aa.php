<?php

/* _global/fieldsComunes.html.twig */
class __TwigTemplate_cc27871f08dd9daa37fcbe4b804fb8aa extends Twig_Template
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
        // line 10
        echo "
";
        // line 11
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "showCommonFields") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
            // line 12
            echo "
<div id=\"fieldsComunes\">
        
        ";
            // line 16
            echo "        ";
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ((($this->getAttribute($_idiomas_, "actual") == 0) && (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "PC", array(), "array") && ($this->getAttribute($this->getAttribute($_atributos_, "AccessProfileList"), "visible") == 1))))) {
                // line 17
                echo "        <div>
            <h3>Perfiles acceso panel de control</h3>
            <div>
                <p>Marque los perfiles de usuarios que tendrán acceso a esta información desde el Cpanel</p>
                ";
                // line 21
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_datos_, "getArrayPerfilesCpanel"));
                foreach ($context['_seq'] as $context["_key"] => $context["perfil"]) {
                    // line 22
                    echo "                    <input type=\"checkbox\" name=\"";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                    echo "[AccessProfileList][perfiles][";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_perfil_, "Id"), "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_perfil_, "Id"), "html", null, true);
                    echo "\" ";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    if (twig_length_filter($this->env, $this->getAttribute($_perfil_, "Valor"))) {
                        echo "CHECKED";
                    }
                    echo " /> ";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_perfil_, "Value"), "html", null, true);
                    echo "<br/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perfil'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 24
                echo "            </div>
        </div>
        ";
            }
            // line 27
            echo "    
        ";
            // line 29
            echo "        ";
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ((($this->getAttribute($_idiomas_, "actual") == 0) && (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "PW", array(), "array") && ($this->getAttribute($this->getAttribute($_atributos_, "AccessProfileListWeb"), "visible") == 1))))) {
                echo "    
        <div>
            <h3>Perfiles acceso web</h3>
            <div>
                <p>Marque los perfiles de usuarios que tendrán acceso a esta información desde la web</p>                
                ";
                // line 34
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_datos_, "getArrayPerfilesWeb"));
                foreach ($context['_seq'] as $context["_key"] => $context["perfil"]) {
                    // line 35
                    echo "                    <input type=\"checkbox\" name=\"";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                    echo "[AccessProfileListWeb][perfiles][";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_perfil_, "Id"), "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_perfil_, "Id"), "html", null, true);
                    echo "\" ";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    if (twig_length_filter($this->env, $this->getAttribute($_perfil_, "Valor"))) {
                        echo "CHECKED";
                    }
                    echo " /> ";
                    if (isset($context["perfil"])) { $_perfil_ = $context["perfil"]; } else { $_perfil_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_perfil_, "Value"), "html", null, true);
                    echo "<br/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perfil'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 37
                echo "            </div>           
        </div>
        ";
            }
            // line 40
            echo "    
        ";
            // line 42
            echo "        ";
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ((($this->getAttribute($_idiomas_, "actual") == 0) && ((((((((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || $this->getAttribute($this->getAttribute($_atributos_, "AllowsChildren"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "BelongsTo"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "CodigoAppAsociada"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "IdAlbumExterno"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "IdSliderAsociado"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "IdSeccionEnlaces"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "IdSeccionVideos"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "Observations"), "visible")))) {
                echo "        
            ";
                // line 43
                $context["generalClass"] = "";
                // line 44
                echo "        ";
            } else {
                // line 45
                echo "            ";
                $context["generalClass"] = "oculto";
                // line 46
                echo "        ";
            }
            // line 47
            echo "        <div class=\"";
            if (isset($context["generalClass"])) { $_generalClass_ = $context["generalClass"]; } else { $_generalClass_ = null; }
            echo twig_escape_filter($this->env, $_generalClass_, "html", null, true);
            echo "\">
            <h3>General</h3>
            <div>
                <p>
                ";
            // line 51
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1)) {
                // line 52
                echo "                    ";
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Id"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Id]"), 4 => ($this->getAttribute($_values_, "controller") . "_Id"), 5 => $this->getAttribute($_datos_, "primaryKeyValue"), 6 => null, 7 => null, 8 => 110, 9 => "disabled"), "method"), "html", null, true);
                echo "                    
                    ";
                // line 53
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "PrimaryKeyMD5"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[PrimaryKeyMD5]"), 4 => ($this->getAttribute($_values_, "controller") . "_PrimaryKeyMD5"), 5 => $this->getAttribute($_datos_, "PrimaryKeyMD5"), 6 => "100", 7 => "CampoTextoLargo", 8 => null, 9 => "disabled"), "method"), "html", null, true);
                echo "
                    ";
                // line 54
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IsDefault"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[IsDefault]"), 4 => ($this->getAttribute($_values_, "controller") . "_IsDefault"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IsDefault"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                    ";
                // line 55
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "IsSuper"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[IsSuper]"), 4 => ($this->getAttribute($_values_, "controller") . "_IsSuper"), 5 => $this->getAttribute($this->getAttribute($_datos_, "IsSuper"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
            }
            // line 57
            echo "                ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "AllowsChildren"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[AllowsChildren]"), 4 => ($this->getAttribute($_values_, "controller") . "_AllowsChildren"), 5 => $this->getAttribute($this->getAttribute($_datos_, "AllowsChildren"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
            echo "
                ";
            // line 58
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            if (($this->getAttribute($this->getAttribute($_datos_, "AllowsChildren"), "IDTipo") == "1")) {
                echo "       
                    ";
                // line 59
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "BelongsTo"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[BelongsTo]"), 3 => ($this->getAttribute($_values_, "controller") . "_BelongsTo"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "BelongsTo"), "getPrimaryKeyValue"), 6 => $this->getAttribute($this->getAttribute($_datos_, "BelongsTo"), "fetchAll", array(0 => null), "method"), 7 => "chzn-select", 8 => 110), "method"), "html", null, true);
                echo "
                ";
            }
            // line 61
            echo "                ";
            // line 62
            echo "                ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "CodigoAppAsociada"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[CodigoAppAsociada]"), 3 => ($this->getAttribute($_values_, "controller") . "_CodigoAppAsociada"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "CodigoAppAsociada"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "CodigoAppAsociada"), "fetchAll", array(0 => "NombreApp", 1 => 1), "method"), 7 => "chzn-select", 8 => 101), "method"), "html", null, true);
            echo "
                ";
            // line 63
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "selectGroup", array(0 => $this->getAttribute($_atributos_, "IdAlbumExterno"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdAlbumExterno]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdAlbumExterno"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdAlbumExterno"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdAlbumExterno"), "fetchAll", array(), "method"), 7 => "chzn-select", 8 => 110), "method"), "html", null, true);
            echo "
                ";
            // line 64
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "selectGroup", array(0 => $this->getAttribute($_atributos_, "IdSliderAsociado"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdSliderAsociado]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdSliderAsociado"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdSliderAsociado"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdSliderAsociado"), "fetchAll", array(), "method"), 7 => "chzn-select", 8 => 110), "method"), "html", null, true);
            echo "
                ";
            // line 65
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "IdSeccionEnlaces"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdSeccionEnlaces]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdSeccionEnlaces"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdSeccionEnlaces"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdSeccionEnlaces"), "fetchAll", array(0 => "Titulo", 1 => 1), "method"), 7 => "chzn-select", 8 => 110), "method"), "html", null, true);
            echo "
                ";
            // line 66
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "IdSeccionVideos"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[IdSeccionVideos]"), 3 => ($this->getAttribute($_values_, "controller") . "_IdSeccionVideos"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "IdSeccionVideos"), "Id"), 6 => $this->getAttribute($this->getAttribute($_datos_, "IdSeccionVideos"), "fetchAll", array(0 => "Titulo", 1 => 1), "method"), 7 => "chzn-select", 8 => 110), "method"), "html", null, true);
            echo "
                ";
            // line 67
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => $this->getAttribute($_atributos_, "Observations"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[Observations]"), 3 => ($this->getAttribute($_values_, "controller") . "_Observations"), 4 => $this->getAttribute($_datos_, "Observations"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
            echo "                
                </p>
            </div>
        </div>
    
        ";
            // line 73
            echo "        ";
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ((($this->getAttribute($_idiomas_, "actual") == 0) && (((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || $this->getAttribute($this->getAttribute($_atributos_, "PublishedAt"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "ActiveFrom"), "visible")) || $this->getAttribute($this->getAttribute($_atributos_, "ActiveTo"), "visible")))) {
                // line 74
                echo "        <div>
            <h3>Fechas</h3>
            <div>
                <p>
                ";
                // line 78
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => $this->getAttribute($_atributos_, "PublishedAt"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[PublishedAt]"), 3 => ($this->getAttribute($_values_, "controller") . "_PublishedAt"), 4 => $this->getAttribute($_datos_, "PublishedAt"), 5 => "19", 6 => "datepicker", 7 => 111), "method"), "html", null, true);
                echo "
                ";
                // line 79
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ShowPublishedAt"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[ShowPublishedAt]"), 4 => ($this->getAttribute($_values_, "controller") . "_ShowPublishedAt"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ShowPublishedAt"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
                // line 80
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => $this->getAttribute($_atributos_, "ActiveFrom"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[ActiveFrom]"), 3 => ($this->getAttribute($_values_, "controller") . "_ActiveFrom"), 4 => $this->getAttribute($_datos_, "ActiveFrom"), 5 => "19", 6 => "datepicker", 7 => 104), "method"), "html", null, true);
                echo "
                ";
                // line 81
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => $this->getAttribute($_atributos_, "ActiveTo"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[ActiveTo]"), 3 => ($this->getAttribute($_values_, "controller") . "_ActiveTo"), 4 => $this->getAttribute($_datos_, "ActiveTo"), 5 => "19", 6 => "datepicker", 7 => 105), "method"), "html", null, true);
                echo "                
                </p>
            </div>
        </div>
        ";
            }
            // line 86
            echo "        
        ";
            // line 88
            echo "        ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if ((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || ($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "showMetaManagement") == "1"))) {
                // line 89
                echo "        <div>
            <h3>Posicionamiento (SEO)</h3>
            <div>
                <p>
                ";
                // line 93
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "LockMetatagTitle"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[LockMetatagTitle]"), 4 => ($this->getAttribute($_values_, "controller") . "_LockMetatagTitle"), 5 => $this->getAttribute($this->getAttribute($_datos_, "LockMetatagTitle"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
                // line 94
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                if (($this->getAttribute($this->getAttribute($_datos_, "LockMetatagTitle"), "IDTipo") == "1")) {
                    echo " ";
                    $context["disabled"] = "DISABLED";
                    echo " ";
                } else {
                    echo " ";
                    $context["disabled"] = null;
                    echo " ";
                }
                // line 95
                echo "                ";
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MetatagTitle"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[MetatagTitle]"), 4 => ($this->getAttribute($_values_, "controller") . "_MetatagTitle"), 5 => $this->getAttribute($_datos_, "MetatagTitle"), 6 => null, 7 => null, 8 => 110, 9 => $_disabled_), "method"), "html", null, true);
                echo "
                ";
                // line 96
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => $this->getAttribute($_atributos_, "MetatagDescription"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[MetatagDescription]"), 3 => ($this->getAttribute($_values_, "controller") . "_MetatagDescription"), 4 => $this->getAttribute($_datos_, "MetatagDescription"), 5 => null, 6 => null, 7 => "textarea", 8 => 115), "method"), "html", null, true);
                echo "
                ";
                // line 97
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => $this->getAttribute($_atributos_, "MetatagKeywords"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[MetatagKeywords]"), 3 => ($this->getAttribute($_values_, "controller") . "_MetatagKeywords"), 4 => $this->getAttribute($_datos_, "MetatagKeywords"), 5 => null, 6 => null, 7 => "textarea", 8 => 116), "method"), "html", null, true);
                echo "
                ";
                // line 98
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "MetatagTitleSimple"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[MetatagTitleSimple]"), 4 => ($this->getAttribute($_values_, "controller") . "_MetatagTitleSimple"), 5 => $this->getAttribute($this->getAttribute($_datos_, "MetatagTitleSimple"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
                // line 99
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "MetatagTitlePosition"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[MetatagTitlePosition]"), 3 => ($this->getAttribute($_values_, "controller") . "_MetatagTitlePosition"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "MetatagTitlePosition"), "IDTipo"), 6 => $this->getAttribute($this->getAttribute($_datos_, "MetatagTitlePosition"), "fetchAll", array(0 => null, 1 => 0), "method"), 7 => "chzn-select", 8 => 118), "method"), "html", null, true);
                echo "                
                ";
                // line 100
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "RevisitAfter"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[RevisitAfter]"), 4 => ($this->getAttribute($_values_, "controller") . "_RevisitAfter"), 5 => $this->getAttribute($_datos_, "RevisitAfter"), 6 => null, 7 => null, 8 => "255", 9 => "CampoTextoCorto"), "method"), "html", null, true);
                echo "                    
                </p>
            </div>
        </div>
        ";
            }
            // line 105
            echo "        
        ";
            // line 106
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            if ($this->getAttribute($_datos_, "getPrimaryKeyValue")) {
                // line 107
                echo "            ";
                // line 108
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "numberOfImages") > "0") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
                    // line 109
                    echo "            <div>
            <h3>Imágenes (";
                    // line 110
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getNumberOfDocuments", array(0 => "image%", 1 => "IsThumbnail=0"), "method"), "html", null, true);
                    echo ")</h3>
            <div>
                ";
                    // line 112
                    if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                    if (($this->getAttribute($_idiomas_, "actual") == 0)) {
                        // line 113
                        echo "                <input name=\"idImagenEnviar\" id=\"idImagenEnviar\" value=\"\" type=\"hidden\" />
                <div class=\"subirArchivo\">
                    <div style=\"float: left;\">
                        <span>Imagen Master (";
                        // line 116
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), 1, array(), "array"), "width"), "html", null, true);
                        echo " x ";
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), 1, array(), "array"), "height"), "html", null, true);
                        echo "):</span>
                        <input name=\"MAX_FILE_SIZE\" value=\"";
                        // line 117
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "maxSizes"), "image"), "html", null, true);
                        echo "\" type=\"hidden\"  />
                        
                        <input name=\"imagenMaster\" id=\"imagenMaster\" type=\"file\" />
                        <br/>Tratamiento de la imagen:&nbsp;
                        <select name=\"modoRecortar\">
                            <option value=\"ajustar\">Imagen completa</option>                            
                            <option value=\"center\">Recortar al centro</option>
                        </select>
                        <input type=\"button\" class=\"comando comEnviar\" value=\"Enviar\"
                           onclick=\"
                               \$('#action_";
                        // line 127
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                        echo "').val('Imagen');
                               \$('#accion_";
                        // line 128
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                        echo "').val('EnviarMaster');
                               loading('botonSubmitImagen');
                               submitForm('manto_";
                        // line 130
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                        echo "');\" 
                        />                        
                    </div>

                    <div id=\"foto\" style=\"float: left;\">
                        <div id=\"botonSubmitImagen\"></div>
                    </div>
                </div>
                ";
                    }
                    // line 139
                    echo "
                <div id=\"agrupacionImagenes\">            
                    ";
                    // line 141
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "getDocuments", array(0 => "image%", 1 => "IsThumbnail=0"), "method"));
                    foreach ($context['_seq'] as $context["key"] => $context["imagen"]) {
                        // line 142
                        echo "                    ";
                        if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                        $context["puntero"] = ($_key_ + 1);
                        // line 143
                        echo "                    <div class=\"grupoImagen\">
                        <div class=\"visualImagen\">
                            <div id=\"foto";
                        // line 145
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "\">
                                <img style=\"border: 1px solid;\" src=\"";
                        // line 146
                        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "url"), "html", null, true);
                        echo "/";
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "PathName"), "html", null, true);
                        echo "\" width=\"";
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        if (($this->getAttribute($_imagen_, "Width") > 350)) {
                            echo "350px";
                        } else {
                            if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "Width"), "html", null, true);
                            echo "px";
                        }
                        echo "\" />
                            </div>
                            <br />";
                        // line 148
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_imagen_, "getSize"), 0), "html", null, true);
                        echo " bytes 
                            (
                            ";
                        // line 150
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "Width"), "html", null, true);
                        echo "
                            ";
                        // line 151
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        if (($this->getAttribute($_imagen_, "Width") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "width"))) {
                            // line 152
                            echo "                            <img src=\"";
                            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                            echo "/images/icono_exclamacion.gif\" title=\"La anchura correcta debería ser ";
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "width"), "html", null, true);
                            echo "\" />
                            ";
                        }
                        // line 154
                        echo "                            x 
                            ";
                        // line 155
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "Height"), "html", null, true);
                        echo "
                            ";
                        // line 156
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        if (($this->getAttribute($_imagen_, "Height") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "height"))) {
                            // line 157
                            echo "                            <img src=\"";
                            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                            echo "/images/icono_exclamacion.gif\" title=\"La altura correcta debería ser ";
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "height"), "html", null, true);
                            echo "\" />                            
                            ";
                        }
                        // line 158
                        echo " 
                            )                                                   
                        </div>

                        <div class=\"imagenInfo\">
                            <h4>";
                        // line 163
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "caption"), "html", null, true);
                        echo "</h4>
                            <div class=\"subirNuevoArchivo\">
                                ";
                        // line 165
                        if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                        if (($this->getAttribute($_idiomas_, "actual") == 0)) {
                            // line 166
                            echo "                                    <input name=\"MAX_FILE_SIZE\" value=\"";
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "maxSizes"), "image"), "html", null, true);
                            echo "\" type=\"hidden\"  />
                                    <input name=\"image";
                            // line 167
                            if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                            echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                            echo "\" id=\"imagen_";
                            if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                            echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                            echo "_Doc\" type=\"file\"/>
                                ";
                        }
                        // line 169
                        echo "                            </div>

                            <input name=\"image[";
                        // line 171
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "][Tipo]\" id=\"image_";
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "_Tipo\" value=\"";
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "Type"), "html", null, true);
                        echo "\" type=\"hidden\" />
                            <input name=\"image[";
                        // line 172
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "][Id]\" id=\"image_";
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "_Id\" value=\"";
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "Id"), "html", null, true);
                        echo "\" type=\"hidden\" />
                            <input name=\"image[";
                        // line 173
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "][SortOrder]\" id=\"image_";
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "_SortOrder\" value=\"";
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_imagen_, "SortOrder"), "html", null, true);
                        echo "\" type=\"hidden\" />
                            <br/>Tratamiento de la imagen:&nbsp;
                            <select name=\"image[";
                        // line 175
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "][modoRecortar]\" id=\"image_";
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "_modoRecortar\">
                                <option value=\"center\">Recortar al centro</option>
                                <option value=\"ajustar\">Imagen completa</option>
                            </select>
                            ";
                        // line 179
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Título", "visible" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "mostrarTitulo"), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("image[" . $_puntero_) . "][Title]"), 4 => (("image_" . $_puntero_) . "_Title"), 5 => $this->getAttribute($_imagen_, "Title"), 6 => 255, 7 => null), "method"), "html", null, true);
                        echo "
                            ";
                        // line 180
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Nombre", "visible" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "mostrarNombre"), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("image[" . $_puntero_) . "][Name]"), 4 => (("image_" . $_puntero_) . "_Name"), 5 => $this->getAttribute($_imagen_, "Name"), 6 => 255, 7 => null), "method"), "html", null, true);
                        echo "
                            ";
                        // line 181
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Mostrar pie de foto", "visible" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "mostrarPieDeFoto"), "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("image[" . $_puntero_) . "][ShowCaption]"), 4 => (("image_" . $_puntero_) . "_ShowCaption"), 5 => $this->getAttribute($this->getAttribute($_imagen_, "ShowCaption"), "IDTipo"), 6 => "255", 7 => null, 8 => "12"), "method"), "html", null, true);
                        echo "
                            ";
                        // line 182
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        if (isset($context["imagen"])) { $_imagen_ = $context["imagen"]; } else { $_imagen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Publicar", "visible" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "images"), $_puntero_, array(), "array"), "mostrarPublicar"), "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("image[" . $_puntero_) . "][Publish]"), 4 => (("image_" . $_puntero_) . "_Publish"), 5 => $this->getAttribute($this->getAttribute($_imagen_, "Publish"), "IDTipo"), 6 => "255", 7 => null, 8 => "12"), "method"), "html", null, true);
                        echo "

                            <div class=\"botonera\" id=\"botonera";
                        // line 184
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "\">
                                <input type=\"button\" value=\"Guardar cambios\" class=\"comando\"
                                    onclick=\"
                                        \$('#action_";
                        // line 187
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                        echo "').val('Imagen');
                                        \$('#accion_";
                        // line 188
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                        echo "').val('GuardarCambios');
                                        \$('#idImagenEnviar').val('";
                        // line 189
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "');
                                        loading('botonera";
                        // line 190
                        if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                        echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                        echo "');
                                        submitForm('manto_";
                        // line 191
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                        echo "');\" />
                                ";
                        // line 192
                        if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                        if (($this->getAttribute($_idiomas_, "actual") == 0)) {
                            // line 193
                            echo "                                <input type=\"button\" value=\"Borrar imagen\" class=\"comando\"
                                    onclick=\"
                                        if (!confirm('¿Desea borrar la imagen?')) {return false;}
                                        else {
                                        \$('#action_";
                            // line 197
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                            echo "').val('Imagen');
                                        \$('#accion_";
                            // line 198
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                            echo "').val('Quitar');
                                        \$('#idImagenEnviar').val('";
                            // line 199
                            if (isset($context["puntero"])) { $_puntero_ = $context["puntero"]; } else { $_puntero_ = null; }
                            echo twig_escape_filter($this->env, $_puntero_, "html", null, true);
                            echo "');
                                        submitForm('manto_";
                            // line 200
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
                            echo "');
                                        }\" />
                            </div>
                            ";
                        }
                        // line 204
                        echo "                        </div>
                    </div>
                    <div style=\"height: 20px;\"></div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['imagen'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 208
                    echo "                </div>                    
                </p>
            </div>
            </div>
            ";
                }
                // line 213
                echo "            
            ";
                // line 215
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "withTiny") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
                    // line 216
                    echo "            <div>
                <h3 id=\"tiny\">Imágenes para Tiny (";
                    // line 217
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getNumberOfDocuments", array(0 => "tiny"), "method"), "html", null, true);
                    echo ")</h3>
                <div id=\"divTiny\"></div>
            </div>
            ";
                }
                // line 221
                echo "
            ";
                // line 223
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "withGalery") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
                    // line 224
                    echo "            <div>
                <h3 id=\"galeria\">Galería de imágenes (";
                    // line 225
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getNumberOfDocuments", array(0 => "galery", 1 => "IsThumbnail=0"), "method"), "html", null, true);
                    echo ")</h3>
                <div id=\"divGaleria\"></div>
            </div>
            ";
                }
                // line 229
                echo "
            ";
                // line 231
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "withDocuments") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
                    // line 232
                    echo "            <div>
                <h3 id=\"docs\">Documentos (";
                    // line 233
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getNumberOfDocuments", array(0 => "document"), "method"), "html", null, true);
                    echo ")</h3>
                <div id=\"divDocs\"></div>
            </div>
            ";
                }
                // line 237
                echo "
            ";
                // line 239
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "withVideos") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
                    // line 240
                    echo "            <div>
                <h3 id=\"videos\">Vídeos (";
                    // line 241
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getNumberOfDocuments", array(0 => "video"), "method"), "html", null, true);
                    echo ")</h3>
                <div id=\"divVideos\"></div>
            </div>
            ";
                }
                // line 245
                echo "
            ";
                // line 247
                echo "            ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ((($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "withAudios") == "1") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1"))) {
                    // line 248
                    echo "            <div>
                <h3 id=\"audios\">Audios (";
                    // line 249
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "getNumberOfDocuments", array(0 => "audio"), "method"), "html", null, true);
                    echo ")</h3>
                <div id=\"divAudios\"></div>
            </div>
            ";
                }
                // line 253
                echo "
            ";
                // line 255
                echo "            ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || ($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "showUrlFriendlyManagement") == "1"))) {
                    echo "            
            <div>
                <h3>Url Amigable ";
                    // line 257
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if ($this->getAttribute($_datos_, "UrlFriendly")) {
                        echo "(";
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "UrlFriendly"), "html", null, true);
                        echo ")";
                    }
                    echo "</h3>
                <div>
                    ";
                    // line 259
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "LockUrlPrefix"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[LockUrlPrefix]"), 4 => ($this->getAttribute($_values_, "controller") . "_LockUrlPrefix"), 5 => $this->getAttribute($this->getAttribute($_datos_, "LockUrlPrefix"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "
                    ";
                    // line 260
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if (($this->getAttribute($this->getAttribute($_datos_, "LockUrlPrefix"), "IDTipo") == "1")) {
                        echo " ";
                        $context["disabled"] = "DISABLED";
                        echo " ";
                    } else {
                        echo " ";
                        $context["disabled"] = null;
                        echo " ";
                    }
                    // line 261
                    echo "                    ";
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlPrefix"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[UrlPrefix]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlPrefix"), 5 => $this->getAttribute($_datos_, "UrlPrefix"), 6 => "255", 7 => "CampoTextoLargo", 8 => 112, 9 => $_disabled_), "method"), "html", null, true);
                    echo "
                    ";
                    // line 262
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "LockSlug"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[LockSlug]"), 4 => ($this->getAttribute($_values_, "controller") . "_LockSlug"), 5 => $this->getAttribute($this->getAttribute($_datos_, "LockSlug"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "
                    ";
                    // line 263
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if (($this->getAttribute($this->getAttribute($_datos_, "LockSlug"), "IDTipo") == "1")) {
                        echo " ";
                        $context["disabled"] = "DISABLED";
                        echo " ";
                    } else {
                        echo " ";
                        $context["disabled"] = null;
                        echo " ";
                    }
                    // line 264
                    echo "                    ";
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Slug"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Slug]"), 4 => ($this->getAttribute($_values_, "controller") . "_Slug"), 5 => $this->getAttribute($_datos_, "Slug"), 6 => "255", 7 => "CampoTextoLargo", 8 => 112, 9 => $_disabled_), "method"), "html", null, true);
                    echo "
                    ";
                    // line 265
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlFriendly"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[UrlFriendly]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlFriendly"), 5 => $this->getAttribute($_datos_, "UrlFriendly"), 6 => "255", 7 => "CampoTextoLargo", 8 => 112, 9 => "DISABLED"), "method"), "html", null, true);
                    echo "
                    ";
                    // line 266
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlHeritable"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[UrlHeritable]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlHeritable"), 5 => $this->getAttribute($this->getAttribute($_datos_, "UrlHeritable"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "

                    ";
                    // line 271
                    echo "                    ";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1)) {
                        // line 272
                        echo "                        ";
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        $context["objetoUrlAmigable"] = $this->getAttribute($_datos_, "getObjetoUrlAmigable");
                        // line 273
                        echo "                        <input name=\"objetoUrlAmigable[Id]\" value=\"";
                        if (isset($context["objetoUrlAmigable"])) { $_objetoUrlAmigable_ = $context["objetoUrlAmigable"]; } else { $_objetoUrlAmigable_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_objetoUrlAmigable_, "Id"), "html", null, true);
                        echo "\" type=\"hidden\" />
                        ";
                        // line 274
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["objetoUrlAmigable"])) { $_objetoUrlAmigable_ = $context["objetoUrlAmigable"]; } else { $_objetoUrlAmigable_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Controller", "visible" => "1", "updatable" => "1", "varEnv" => "0", "translatable" => "1"), 1 => "field_title", 2 => "text", 3 => "objetoUrlAmigable[Controller]", 4 => "CpanUrlAmigables_Controller", 5 => $this->getAttribute($_objetoUrlAmigable_, "Controller"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 275
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["objetoUrlAmigable"])) { $_objetoUrlAmigable_ = $context["objetoUrlAmigable"]; } else { $_objetoUrlAmigable_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Action", "visible" => "1", "updatable" => "1", "varEnv" => "0", "translatable" => "1"), 1 => "field_title", 2 => "text", 3 => "objetoUrlAmigable[Action]", 4 => "CpanUrlAmigables_Action", 5 => $this->getAttribute($_objetoUrlAmigable_, "Action"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 276
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["objetoUrlAmigable"])) { $_objetoUrlAmigable_ = $context["objetoUrlAmigable"]; } else { $_objetoUrlAmigable_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Template", "visible" => "1", "updatable" => "1", "varEnv" => "0", "translatable" => "1"), 1 => "field_title", 2 => "text", 3 => "objetoUrlAmigable[Template]", 4 => "CpanUrlAmigables_Template", 5 => $this->getAttribute($_objetoUrlAmigable_, "Template"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 277
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["objetoUrlAmigable"])) { $_objetoUrlAmigable_ = $context["objetoUrlAmigable"]; } else { $_objetoUrlAmigable_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "Parameters", "visible" => "1", "updatable" => "1", "varEnv" => "0", "translatable" => "1"), 1 => "field_title", 2 => "text", 3 => "objetoUrlAmigable[Parameters]", 4 => "CpanUrlAmigables_Parameters", 5 => $this->getAttribute($_objetoUrlAmigable_, "Parameters"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 279
                    echo "                </div>
            </div>
            ";
                }
                // line 282
                echo "            
            ";
                // line 284
                echo "            ";
                if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if ((($this->getAttribute($_idiomas_, "actual") == 0) && ((((((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1) || ($this->getAttribute($this->getAttribute($_atributos_, "UrlTarget"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "UrlParameters"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "UrlRequestMethod"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "UrlOrigin"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "UrlTargetBlank"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "UrlIsHttps"), "visible") == 1)))) {
                    // line 285
                    echo "            <div>
                <h3>Url Destino ";
                    // line 286
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if ($this->getAttribute($_datos_, "UrlTarget")) {
                        echo "(";
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "UrlTarget"), "html", null, true);
                        echo ")";
                    }
                    echo "</h3>
                <div>
                    ";
                    // line 288
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlTarget"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[UrlTarget]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlTarget"), 5 => $this->getAttribute($_datos_, "UrlTarget"), 6 => "255", 7 => "CampoTextoLargo", 8 => 112), "method"), "html", null, true);
                    echo "
                    ";
                    // line 289
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlParameters"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[UrlParameters]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlParameters"), 5 => $this->getAttribute($_datos_, "UrlParameters"), 6 => "255", 7 => "CampoTextoLargo", 8 => 112), "method"), "html", null, true);
                    echo "
                    ";
                    // line 290
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "radio", array(0 => $this->getAttribute($_atributos_, "UrlRequestMethod"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[UrlRequestMethod]"), 3 => ($this->getAttribute($_values_, "controller") . "_UrlRequestMethod"), 4 => $this->getAttribute($this->getAttribute($_datos_, "UrlRequestMethod"), "IDTipo"), 5 => $this->getAttribute($this->getAttribute($_datos_, "UrlRequestMethod"), "fetchAll", array(0 => null, 1 => 0), "method"), 6 => "chzn-radio", 7 => 117), "method"), "html", null, true);
                    echo "
                    ";
                    // line 291
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "radio", array(0 => $this->getAttribute($_atributos_, "UrlOrigin"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[UrlOrigin]"), 3 => ($this->getAttribute($_values_, "controller") . "_UrlOrigin"), 4 => $this->getAttribute($this->getAttribute($_datos_, "UrlOrigin"), "IDTipo"), 5 => $this->getAttribute($this->getAttribute($_datos_, "UrlOrigin"), "fetchAll", array(0 => null, 1 => 0), "method"), 6 => "chzn-radio", 7 => 117), "method"), "html", null, true);
                    echo "
                    ";
                    // line 292
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlTargetBlank"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[UrlTargetBlank]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlTargetBlank"), 5 => $this->getAttribute($this->getAttribute($_datos_, "UrlTargetBlank"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "
                    ";
                    // line 293
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "UrlIsHttps"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[UrlIsHttps]"), 4 => ($this->getAttribute($_values_, "controller") . "_UrlIsHttps"), 5 => $this->getAttribute($this->getAttribute($_datos_, "UrlIsHttps"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "
                </div>
            </div>
            ";
                }
                // line 297
                echo "            
            ";
                // line 299
                echo "            ";
                if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ((($this->getAttribute($_idiomas_, "actual") == 0) && (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || ($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "showSiteMapManagement") == "1")))) {
                    echo "              
            <div>
                <h3>Site Map</h3>
                <div>
                    ";
                    // line 303
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ShowOnSitemap"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[ShowOnSitemap]"), 4 => ($this->getAttribute($_values_, "controller") . "_ShowOnSitemap"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ShowOnSitemap"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "
                    ";
                    // line 304
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ImportanceSitemap"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[ImportanceSitemap]"), 4 => ($this->getAttribute($_values_, "controller") . "_ImportanceSitemap"), 5 => $this->getAttribute($_datos_, "ImportanceSitemap"), 6 => "5", 7 => "CampoTextoCorto", 8 => 120), "method"), "html", null, true);
                    echo "
                    ";
                    // line 305
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => $this->getAttribute($_atributos_, "ChangeFreqSitemap"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[ChangeFreqSitemap]"), 3 => ($this->getAttribute($_values_, "controller") . "_ChangeFreqSitemap"), 4 => null, 5 => $this->getAttribute($this->getAttribute($_datos_, "ChangeFreqSitemap"), "IDTipo"), 6 => $this->getAttribute($this->getAttribute($_datos_, "ChangeFreqSitemap"), "fetchAll", array(0 => null, 1 => 0), "method"), 7 => "chzn-select", 8 => 121), "method"), "html", null, true);
                    echo "
                </div>
            </div>
            ";
                }
                // line 309
                echo "            
            ";
                // line 311
                echo "            ";
                if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ((($this->getAttribute($_idiomas_, "actual") == 0) && (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1") || $this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "modulosRelacionables")))) {
                    echo "       
            <div>
                <h3 id=\"relacionar\">Relacionar con ...</h3>
                <div id=\"divRelacionar\"></div>
            </div>
            ";
                }
                // line 317
                echo "            
            ";
                // line 319
                echo "            ";
                if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if ((($this->getAttribute($_idiomas_, "actual") == 0) && ((((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1) || ($this->getAttribute($this->getAttribute($_atributos_, "Checked"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "Privacy"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "NumberVisits"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "DateTimeLastVisit"), "visible") == 1)))) {
                    // line 320
                    echo "            <div>
                <h3>Auditoría</h3>
                <div>
                    ";
                    // line 323
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Checked"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[Checked]"), 4 => ($this->getAttribute($_values_, "controller") . "_Checked"), 5 => $this->getAttribute($this->getAttribute($_datos_, "Checked"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                    echo "
                    ";
                    // line 324
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "radio", array(0 => $this->getAttribute($_atributos_, "Privacy"), 1 => "field_title", 2 => ($this->getAttribute($_values_, "controller") . "[Privacy]"), 3 => ($this->getAttribute($_values_, "controller") . "_Privacy"), 4 => $this->getAttribute($this->getAttribute($_datos_, "Privacy"), "IDTipo"), 5 => $this->getAttribute($this->getAttribute($_datos_, "Privacy"), "fetchAll", array(0 => null, 1 => 0), "method"), 6 => "chzn-radio", 7 => 109), "method"), "html", null, true);
                    echo "
                    ";
                    // line 325
                    if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                    if ($this->getAttribute($_datos_, "getPrimaryKeyValue")) {
                        // line 326
                        echo "                        ";
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "NumberVisits"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[NumberVisits]"), 4 => ($this->getAttribute($_values_, "controller") . "_NumberVisits"), 5 => $this->getAttribute($_datos_, "NumberVisits"), 6 => null, 7 => "CampoImporte", 8 => 113, 9 => "disabled"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 327
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "DateTimeLastVisit"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[DateTimeLastVisit]"), 4 => ($this->getAttribute($_values_, "controller") . "_DateTimeLastVisit"), 5 => $this->getAttribute($_datos_, "DateTimeLastVisit"), 6 => null, 7 => "CampoImporte", 8 => 114, 9 => "disabled"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 328
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "CreatedBy"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[CreatedBy]"), 4 => ($this->getAttribute($_values_, "controller") . "_CreatedBy"), 5 => $this->getAttribute($_datos_, "CreatedBy"), 6 => null, 7 => null, 8 => 107, 9 => "disabled"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 329
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "CreatedAt"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[CreatedAt]"), 4 => ($this->getAttribute($_values_, "controller") . "_CreatedAt"), 5 => $this->getAttribute($_datos_, "CreatedAt"), 6 => null, 7 => "CampoImporte", 8 => 108, 9 => "disabled"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 330
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ModifiedBy"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[ModifiedBy]"), 4 => ($this->getAttribute($_values_, "controller") . "_ModifiedBy"), 5 => $this->getAttribute($_datos_, "ModifiedBy"), 6 => null, 7 => null, 8 => 107, 9 => "disabled"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 331
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ModifiedAt"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[ModifiedAt]"), 4 => ($this->getAttribute($_values_, "controller") . "_ModifiedAt"), 5 => $this->getAttribute($_datos_, "ModifiedAt"), 6 => null, 7 => "CampoImporte", 8 => 108, 9 => "disabled"), "method"), "html", null, true);
                        echo "

                        ";
                        // line 333
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "Deleted"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[Deleted]"), 4 => ($this->getAttribute($_values_, "controller") . "_Deleted"), 5 => $this->getAttribute($this->getAttribute($_datos_, "Deleted"), "Descripcion"), 6 => null, 7 => null, 8 => 106, 9 => "disabled"), "method"), "html", null, true);
                        echo "
                        ";
                        // line 334
                        if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                        if ($this->getAttribute($this->getAttribute($_datos_, "Deleted"), "IDTipo")) {
                            // line 335
                            echo "                            ";
                            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "DeletedBy"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[DeletedBy]"), 4 => ($this->getAttribute($_values_, "controller") . "_DeletedBy"), 5 => $this->getAttribute($_datos_, "DeletedBy"), 6 => null, 7 => null, 8 => 107, 9 => "disabled"), "method"), "html", null, true);
                            echo "
                            ";
                            // line 336
                            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "DeletedAt"), 1 => "field_title", 2 => "text", 3 => ($this->getAttribute($_values_, "controller") . "[DeletedAt]"), 4 => ($this->getAttribute($_values_, "controller") . "_DeletedAt"), 5 => $this->getAttribute($_datos_, "DeletedAt"), 6 => null, 7 => "CampoImporte", 8 => 108, 9 => "disabled"), "method"), "html", null, true);
                            echo "
                        ";
                        }
                        // line 338
                        echo "                    ";
                    }
                    // line 339
                    echo "                </div>
            </div>
            ";
                }
                // line 342
                echo "        ";
            }
            // line 343
            echo "    
        ";
            // line 345
            echo "        ";
            if (isset($context["idiomas"])) { $_idiomas_ = $context["idiomas"]; } else { $_idiomas_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if ((($this->getAttribute($_idiomas_, "actual") == 0) && ((((($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1) || ($this->getAttribute($this->getAttribute($_atributos_, "ShowGalery"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "ShowDocuments"), "visible") == 1)) || ($this->getAttribute($this->getAttribute($_atributos_, "ShowRelatedLinks"), "visible") == 1)) || ($this->getAttribute($_atributos_, "ShowRelatedContents") == 1)))) {
                // line 346
                echo "        <div>
            <h3>Mostrar ...</h3>
            <div>
                ";
                // line 349
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ShowGalery"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[ShowGalery]"), 4 => ($this->getAttribute($_values_, "controller") . "_ShowGalery"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ShowGalery"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
                // line 350
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ShowDocuments"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[ShowDocuments]"), 4 => ($this->getAttribute($_values_, "controller") . "_ShowDocuments"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ShowDocuments"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
                // line 351
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ShowRelatedLinks"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[ShowRelatedLinks]"), 4 => ($this->getAttribute($_values_, "controller") . "_ShowRelatedLinks"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ShowRelatedLinks"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
                ";
                // line 352
                if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => $this->getAttribute($_atributos_, "ShowRelatedContents"), 1 => "field_title", 2 => "checkbox", 3 => ($this->getAttribute($_values_, "controller") . "[ShowRelatedContents]"), 4 => ($this->getAttribute($_values_, "controller") . "_ShowRelatedContents"), 5 => $this->getAttribute($this->getAttribute($_datos_, "ShowRelatedContents"), "IDTipo"), 6 => "255", 7 => "CampoTextoLargo", 8 => "12"), "method"), "html", null, true);
                echo "
            </div>
        </div>
        ";
            }
            // line 355
            echo "    
    
</div>

<script type=\"text/javascript\"> 
    \$( \"#fieldsComunes\" )
    .accordion({
        header: \"> div > h3\",
        collapsible: true,
        autoHeight: false,
        active: false,
    })
    .sortable({
        axis: \"y\",
        handle: \"h3\",
        cursor: \"move\",
        opacity: 0.5,
        stop: function( event, ui ) {
            // IE doesn't register the blur when sorting
            // so trigger focusout handlers to remove .ui-state-focus
            ui.item.children( \"h3\" ).triggerHandler( \"focusout\" );
        }
    });    
    
    \$(\"#relacionar\").click(function(){
        url = \"<iframe src='";
            // line 380
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/Relaciones/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "' width='100%' scrolling='yes'></iframe>\"; 
        \$(\"#divRelacionar\").html(url);
    });    

    \$(\"#audios\").click(function(){
        url = \"<iframe src='";
            // line 385
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/CpanDocs/listPopup/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "/audio' width='100%' height='380' scrolling='yes' style='border: 0px dotted grey;'></iframe>\"; 
        \$(\"#divAudios\").html(url);
    });    
    
    \$(\"#videos\").click(function(){
        url = \"<iframe src='";
            // line 390
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/CpanDocs/listPopup/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "/video' width='100%' height='380' scrolling='yes' style='border: 0px dotted grey;'></iframe>\"; 
        \$(\"#divVideos\").html(url);
    });
    
    \$(\"#docs\").click(function(){
        url = \"<iframe src='";
            // line 395
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/CpanDocs/listPopup/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "/document' width='100%' height='380' scrolling='yes' style='border: 0px dotted grey;'></iframe>\"; 
        \$(\"#divDocs\").html(url);
    });

    \$(\"#galeria\").click(function(){
        url = \"<iframe src='";
            // line 400
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/CpanDocs/listPopup/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "/galery' width='100%' height='380' scrolling='yes' style='border: 0px dotted grey;'></iframe>\"; 
        \$(\"#divGaleria\").html(url);
    });
    
    \$(\"#tiny\").click(function(){
        url = \"<iframe src='";
            // line 405
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/CpanDocs/listPopup/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/";
            if (isset($context["datos"])) { $_datos_ = $context["datos"]; } else { $_datos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_datos_, "Id"), "html", null, true);
            echo "/tiny' width='100%' height='380' scrolling='yes' style='border: 0px dotted grey;'></iframe>\"; 
        \$(\"#divTiny\").html(url);
    });    

</script>

";
        }
    }

    public function getTemplateName()
    {
        return "_global/fieldsComunes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1411 => 405,  1396 => 400,  1381 => 395,  1366 => 390,  1351 => 385,  1336 => 380,  1309 => 355,  1298 => 352,  1290 => 351,  1282 => 350,  1274 => 349,  1269 => 346,  1263 => 345,  1260 => 343,  1257 => 342,  1252 => 339,  1249 => 338,  1240 => 336,  1231 => 335,  1228 => 334,  1220 => 333,  1211 => 331,  1203 => 330,  1195 => 329,  1187 => 328,  1179 => 327,  1170 => 326,  1167 => 325,  1159 => 324,  1151 => 323,  1146 => 320,  1140 => 319,  1137 => 317,  1124 => 311,  1121 => 309,  1110 => 305,  1102 => 304,  1094 => 303,  1083 => 299,  1080 => 297,  1069 => 293,  1061 => 292,  1053 => 291,  1045 => 290,  1037 => 289,  1029 => 288,  1018 => 286,  1015 => 285,  1009 => 284,  1006 => 282,  1001 => 279,  994 => 277,  988 => 276,  982 => 275,  976 => 274,  970 => 273,  966 => 272,  962 => 271,  953 => 266,  945 => 265,  935 => 264,  924 => 263,  916 => 262,  906 => 261,  895 => 260,  887 => 259,  876 => 257,  868 => 255,  865 => 253,  857 => 249,  854 => 248,  849 => 247,  846 => 245,  838 => 241,  835 => 240,  830 => 239,  827 => 237,  819 => 233,  816 => 232,  811 => 231,  808 => 229,  800 => 225,  797 => 224,  792 => 223,  789 => 221,  781 => 217,  778 => 216,  773 => 215,  770 => 213,  763 => 208,  754 => 204,  746 => 200,  741 => 199,  736 => 198,  731 => 197,  725 => 193,  722 => 192,  717 => 191,  712 => 190,  707 => 189,  702 => 188,  697 => 187,  690 => 184,  681 => 182,  673 => 181,  665 => 180,  657 => 179,  646 => 175,  634 => 173,  623 => 172,  612 => 171,  608 => 169,  599 => 167,  593 => 166,  590 => 165,  583 => 163,  576 => 158,  565 => 157,  560 => 156,  555 => 155,  552 => 154,  541 => 152,  536 => 151,  531 => 150,  525 => 148,  507 => 146,  502 => 145,  498 => 143,  494 => 142,  489 => 141,  485 => 139,  472 => 130,  466 => 128,  461 => 127,  447 => 117,  439 => 116,  434 => 113,  431 => 112,  425 => 110,  422 => 109,  417 => 108,  415 => 107,  412 => 106,  409 => 105,  397 => 100,  389 => 99,  381 => 98,  373 => 97,  365 => 96,  355 => 95,  344 => 94,  336 => 93,  330 => 89,  325 => 88,  322 => 86,  310 => 81,  302 => 80,  294 => 79,  286 => 78,  280 => 74,  274 => 73,  262 => 67,  254 => 66,  246 => 65,  238 => 64,  230 => 63,  221 => 62,  219 => 61,  210 => 59,  205 => 58,  196 => 57,  187 => 55,  179 => 54,  171 => 53,  162 => 52,  159 => 51,  150 => 47,  147 => 46,  144 => 45,  141 => 44,  139 => 43,  131 => 42,  128 => 40,  123 => 37,  99 => 35,  94 => 34,  81 => 29,  78 => 27,  73 => 24,  49 => 22,  44 => 21,  38 => 17,  31 => 16,  26 => 12,  22 => 11,  19 => 10,);
    }
}
