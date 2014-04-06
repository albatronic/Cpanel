<?php

/* CpanVariables/fieldsVarAppWeb.html.twig */
class __TwigTemplate_773551e740fbd25edd6f89864945a73a extends Twig_Template
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
    </ul>

    ";
        // line 18
        echo "    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
            echo " ";
            $context["prefijo"] = "[globales][webName]";
            echo " ";
        } else {
            echo " ";
            $context["prefijo"] = "";
            echo " ";
        }
        // line 20
        echo "        ";
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["prefijo"])) { $_prefijo_ = $context["prefijo"]; } else { $_prefijo_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => ($_prefijo_ . " Nombre de la Web"), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][webName]", 4 => "datos_globales_webName", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "webName"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        // line 30
        echo "
    </div>

    ";
        // line 34
        echo "    <div id=\"tabs-especificas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 35
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "datos"), "especificas"));
        foreach ($context['_seq'] as $context["nombre"] => $context["atributos"]) {
            // line 36
            echo "            ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
                echo " ";
                if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
                $context["prefijo"] = (("[especificas][" . $_nombre_) . "]");
                echo " ";
            } else {
                echo " ";
                $context["prefijo"] = "";
                echo " ";
            }
            // line 37
            echo "            ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["prefijo"])) { $_prefijo_ = $context["prefijo"]; } else { $_prefijo_ = null; }
            if (isset($context["atributos"])) { $_atributos_ = $context["atributos"]; } else { $_atributos_ = null; }
            if (isset($context["nombre"])) { $_nombre_ = $context["nombre"]; } else { $_nombre_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (($_prefijo_ . " ") . $this->getAttribute($_atributos_, "caption")), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[especificas][" . $_nombre_) . "]"), 4 => ("datos_especificas_" . $_nombre_), 5 => $this->getAttribute($_atributos_, "value"), 6 => "50", 7 => "CampoTextoCorto"), "method"), "html", null, true);
            // line 47
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nombre'], $context['atributos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarAppWeb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 49,  93 => 47,  86 => 37,  73 => 36,  68 => 35,  65 => 34,  60 => 30,  54 => 20,  43 => 19,  40 => 18,  31 => 10,  28 => 9,);
    }
}
