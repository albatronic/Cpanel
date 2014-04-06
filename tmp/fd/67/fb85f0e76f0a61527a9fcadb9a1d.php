<?php

/* CpanVariables/fieldsVarModWeb.html.twig */
class __TwigTemplate_fd67fb85f0e76f0a61527a9fcadb9a1d extends Twig_Template
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

    // line 14
    public function block_template($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 18
        echo "<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        ";
        // line 20
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
            // line 21
            echo "        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-global\">Globales";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                echo " [globales]";
            }
            echo "</a></li>
        ";
        }
        // line 23
        echo "        ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($_values_, "datos"), "especificas")) {
            // line 24
            echo "        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-especificas\">Específicas";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                echo "  [especificas]";
            }
            echo "</a></li>
        ";
        }
        // line 26
        echo "    </ul>

    ";
        // line 29
        echo "    ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
            // line 30
            echo "    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
            // line 31
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                echo " ";
                $context["visibilidad"] = 1;
                echo " ";
            } else {
                echo " ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context["visibilidad"] = $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "linkFromColumn");
                echo " ";
            }
            // line 32
            echo "        ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["visibilidad"])) { $_visibilidad_ = $context["visibilidad"]; } else { $_visibilidad_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "linkFromColumn", "visible" => $_visibilidad_, "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][linkFromColumn]", 4 => "datos_globales_linkFromColumn", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "linkFromColumn"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
            // line 42
            echo "
            
        ";
            // line 44
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                echo " ";
                $context["visibilidad"] = 1;
                echo " ";
            } else {
                echo " ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context["visibilidad"] = $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "linkToEntity");
                echo " ";
            }
            echo "            
        ";
            // line 45
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["visibilidad"])) { $_visibilidad_ = $context["visibilidad"]; } else { $_visibilidad_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "linkToEntity", "visible" => $_visibilidad_, "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][linkToEntity]", 4 => "datos_globales_linkToEntity", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "linkToEntity"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
            // line 55
            echo " 
            
        ";
            // line 57
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                echo " ";
                $context["visibilidad"] = 1;
                echo " ";
            } else {
                echo " ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context["visibilidad"] = $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "linkToColumn");
                echo " ";
            }
            echo "            
        ";
            // line 58
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["visibilidad"])) { $_visibilidad_ = $context["visibilidad"]; } else { $_visibilidad_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "linkToColumn", "visible" => $_visibilidad_, "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][linkToColumn]", 4 => "datos_globales_linkToColumn", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "linkToColumn"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
            // line 68
            echo "
            
    </div>
    ";
        }
        // line 72
        echo "        
    ";
        // line 74
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($_values_, "datos"), "especificas")) {
            // line 75
            echo "    <div id=\"tabs-especificas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\" style=\"margin-bottom: 100px;\">
        ";
            // line 76
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "especificas"));
            foreach ($context['_seq'] as $context["nombre"] => $context["atributos"]) {
                // line 77
                echo "            ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                    echo " 
                ";
                    // line 78
                    if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
                    $context["prefijo"] = (("[" . $_nombre_) . "]");
                    // line 79
                    echo "                ";
                    $context["visibilidad"] = "1";
                    // line 80
                    echo "            ";
                } else {
                    echo " 
                ";
                    // line 81
                    $context["prefijo"] = "";
                    echo " 
                ";
                    // line 82
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
                    $context["visibilidad"] = $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "especificas"), $_nombre_, array(), "array");
                    // line 83
                    echo "            ";
                }
                // line 84
                echo "            ";
                if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                if (twig_test_iterable($this->getAttribute($_atributos_, "values"))) {
                    // line 85
                    echo "                ";
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["prefijo"])) { $_prefijo_ = $context["prefijo"]; } else { $_prefijo_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["visibilidad"])) { $_visibilidad_ = $context["visibilidad"]; } else { $_visibilidad_ = null; }
                    if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => (($_prefijo_ . " ") . $this->getAttribute($_atributos_, "caption")), "visible" => $_visibilidad_, "varEnv" => "0", "updatable" => "1"), 1 => "field_title", 2 => (("datos[especificas][" . $_nombre_) . "]"), 3 => ("datos_especificas_" . $_nombre_), 4 => null, 5 => $this->getAttribute($_atributos_, "value"), 6 => $this->getAttribute($_atributos_, "values"), 7 => "chzn-select", 8 => "22"), "method"), "html", null, true);
                    // line 94
                    echo "            
            ";
                } else {
                    // line 96
                    echo "                ";
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["prefijo"])) { $_prefijo_ = $context["prefijo"]; } else { $_prefijo_ = null; }
                    if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
                    if (isset($context["visibilidad"])) { $_visibilidad_ = $context["visibilidad"]; } else { $_visibilidad_ = null; }
                    if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (($_prefijo_ . " ") . $this->getAttribute($_atributos_, "caption")), "visible" => $_visibilidad_, "varEnv" => "0", "updatable" => "1"), 1 => "field_title", 2 => "text", 3 => (("datos[especificas][" . $_nombre_) . "]"), 4 => ("datos_especificas_" . $_nombre_), 5 => $this->getAttribute($_atributos_, "value"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
                    // line 106
                    echo "
            ";
                }
                // line 108
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['atributos'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 109
            echo "    </div>
    ";
        }
        // line 111
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarModWeb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 111,  221 => 109,  215 => 108,  211 => 106,  203 => 96,  199 => 94,  191 => 85,  187 => 84,  184 => 83,  180 => 82,  176 => 81,  171 => 80,  168 => 79,  165 => 78,  159 => 77,  154 => 76,  151 => 75,  147 => 74,  144 => 72,  138 => 68,  133 => 58,  119 => 57,  115 => 55,  110 => 45,  96 => 44,  92 => 42,  86 => 32,  74 => 31,  71 => 30,  67 => 29,  63 => 26,  54 => 24,  50 => 23,  41 => 21,  38 => 20,  34 => 18,  31 => 15,  28 => 14,);
    }
}
