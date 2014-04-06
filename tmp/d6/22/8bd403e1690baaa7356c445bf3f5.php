<?php

/* CpanVariables/fieldsVarAppEnv.html.twig */
class __TwigTemplate_d6228bd403e1690baaa7356c445bf3f5 extends Twig_Template
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
        echo "
<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-global\">Globales</a></li>
        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-especificas\">Específicas</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-varWeb\">Visibilidad Var Web</a></li>        
    </ul>

    ";
        // line 19
        echo "    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 20
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[globales][title] Título", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][title]", 4 => "datos_globales_title", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "title"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        // line 30
        echo "
        ";
        // line 31
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[globales][url] Url", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][url]", 4 => "datos_globales_url", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "url"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        // line 41
        echo "
        ";
        // line 42
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[globales][urlPrefix] Prefijo de la Url", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][urlPrefix]", 4 => "datos_globales_urlPrefix", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "urlPrefix"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        // line 52
        echo "
    </div>

    ";
        // line 56
        echo "    <div id=\"tabs-especificas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 57
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["atributos"]) {
            // line 58
            echo "            ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => ((("[especificas][" . $_nombre_) . "] ") . $this->getAttribute($_atributos_, "caption")), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[especificas][" . $_nombre_) . "]"), 4 => ("datos_especificas_" . $_nombre_), 5 => $this->getAttribute($_atributos_, "value"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
            // line 68
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['atributos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "    </div>

    ";
        // line 73
        echo "    <div id=\"tabs-varWeb\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        <h5>Control de visibilidad de variables web</h5>
        <div id=\"acordeonVW\" style=\"margin-top:10px;\">
            <h3>Globales [showVarWeb][globales]</h3>
            <div>
                ";
        // line 78
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "showVarWeb"), "globales"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 79
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
        // line 80
        echo "            
            </div>

            <h3>Específicas [showVarWeb][especificas]</h3>
            <div>
            ";
        // line 85
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "showVarWeb"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["valor"]) {
            // line 86
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
        // line 88
        echo "            </div>
        </div>
    </div>        
</div>
";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarAppEnv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 88,  128 => 86,  123 => 85,  116 => 80,  104 => 79,  99 => 78,  92 => 73,  88 => 70,  81 => 68,  75 => 58,  70 => 57,  67 => 56,  62 => 52,  58 => 42,  55 => 41,  51 => 31,  48 => 30,  44 => 20,  41 => 19,  31 => 10,  28 => 9,);
    }
}
