<?php

/* CpanVariables/formPlantillaVariables.html.twig */
class __TwigTemplate_cba19e56c0ce6efd815b73a3efc0735e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_global/layoutPopup.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/layoutPopup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["ValoresSN"] = array("0" => array("Id" => "0", "Value" => "No"), "1" => array("Id" => "1", "Value" => "Si"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div style=\"text-align: center;\"><h4>";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "titulo"), "html", null, true);
        echo "</h4></div>
<div id=\"resultado\"></div>
<div class=\"grid_container\">
    <div class=\"grid_12 full_block\">
        <div class=\"widget_wrap\">
            <div class=\"widget_content\">
                <div class=\"form_container left_label\">
                    <form name=\"plantillaVariables\" id=\"plantillaVariables\" action=\"\" method=\"POST\">
                    <input name=\"controller\" value=\"CpanVariables\" type=\"hidden\" />
                    <input name=\"action\" id=\"action_CpanVariables\" value=\"EditNode\" type=\"hidden\" />
                    <input name=\"tipo\" id=\"tipo\" value=\"";
        // line 21
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "tipo"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"ambito\" id=\"ambito\" value=\"";
        // line 22
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "ambito"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"nombre\" id=\"nombre\" value=\"";
        // line 23
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "nombre"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"columna\" id=\"columna\" value=\"";
        // line 24
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "columna"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"archivoDatos\" value=\"";
        // line 25
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "archivoDatos"), "html", null, true);
        echo "\" type=\"hidden\" readonly/>

                    ";
        // line 27
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/formErrores.html.twig")->display(array_merge($context, array("errores" => $this->getAttribute($_values_, "errores"))));
        // line 28
        echo "                    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/alertas.html.twig")->display(array_merge($context, array("alertas" => $this->getAttribute($_values_, "alertas"))));
        // line 29
        echo "
                    <ul>
                    ";
        // line 31
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context["hayListaValores"] = twig_test_iterable($this->getAttribute($this->getAttribute($_values_, "datos"), "listaValores"));
        // line 32
        echo "
                    ";
        // line 33
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_values_, "datos"));
        foreach ($context['_seq'] as $context["variable"] => $context["valor"]) {
            // line 34
            echo "                        ";
            if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
            if (($_variable_ != "listaValores")) {
                // line 35
                echo "                        <p>
                        ";
                // line 36
                if (isset($context["hayListaValores"])) { $_hayListaValores_ = $context["hayListaValores"]; } else { $_hayListaValores_ = null; }
                if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                if ((($_hayListaValores_ && ($_variable_ == "default")) || ((((((($_variable_ == "visible") || ($_variable_ == "updatable")) || ($_variable_ == "translatable")) || ($_variable_ == "searchable")) || ($_variable_ == "editorTiny")) || ($_variable_ == "filter")) || ($_variable_ == "list")))) {
                    // line 37
                    echo "
                            ";
                    // line 38
                    if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                    if (($_variable_ == "default")) {
                        // line 39
                        echo "                                ";
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        $context["listaValores"] = $this->getAttribute($this->getAttribute($_values_, "datos"), "listaValores");
                        // line 40
                        echo "                                ";
                        $context["tipoTag"] = "select";
                        // line 41
                        echo "                            ";
                    } else {
                        // line 42
                        echo "                                ";
                        if (isset($context["ValoresSN"])) { $_ValoresSN_ = $context["ValoresSN"]; } else { $_ValoresSN_ = null; }
                        $context["listaValores"] = $_ValoresSN_;
                        // line 43
                        echo "                                ";
                        $context["tipoTag"] = "checkbox";
                        // line 44
                        echo "                            ";
                    }
                    // line 45
                    echo "
                            ";
                    // line 46
                    if (isset($context["tipoTag"])) { $_tipoTag_ = $context["tipoTag"]; } else { $_tipoTag_ = null; }
                    if (($_tipoTag_ == "select")) {
                        // line 47
                        echo "                                ";
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        if (isset($context["listaValores"])) { $_listaValores_ = $context["listaValores"]; } else { $_listaValores_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => $_variable_, "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => (("datos[" . $_variable_) . "]"), 3 => ("datos_" . $_variable_), 4 => null, 5 => $_valor_, 6 => $_listaValores_, 7 => "chzn-select"), "method"), "html", null, true);
                        // line 57
                        echo "
                            ";
                    } else {
                        // line 59
                        echo "                                ";
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => $_variable_, "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => (("datos[" . $_variable_) . "]"), 4 => ("datos_" . $_variable_), 5 => $_valor_, 6 => "255", 7 => "CampoTextoCorto"), "method"), "html", null, true);
                        // line 69
                        echo "
                            ";
                    }
                    // line 71
                    echo "
                        ";
                } else {
                    // line 73
                    echo "                            ";
                    if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                    if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                    if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => $_variable_, "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[" . $_variable_) . "]"), 4 => ("datos_" . $_variable_), 5 => $_valor_, 6 => "255", 7 => "CampoTextoCorto"), "method"), "html", null, true);
                    // line 83
                    echo "
                        ";
                }
                // line 85
                echo "                        </p>
                        ";
            }
            // line 87
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['variable'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 88
        echo "                    </ul>

                    <div style=\"margin-top: 10px; margin-bottom: 5px; text-align: center;\">
                        <input name=\"accion\" value=\"Guardar\" type =\"submit\" />
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CpanVariables/formPlantillaVariables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 88,  178 => 87,  174 => 85,  170 => 83,  164 => 73,  160 => 71,  156 => 69,  150 => 59,  146 => 57,  139 => 47,  136 => 46,  133 => 45,  130 => 44,  127 => 43,  123 => 42,  120 => 41,  117 => 40,  113 => 39,  110 => 38,  107 => 37,  103 => 36,  100 => 35,  96 => 34,  91 => 33,  88 => 32,  85 => 31,  81 => 29,  77 => 28,  74 => 27,  68 => 25,  63 => 24,  58 => 23,  53 => 22,  48 => 21,  33 => 11,  30 => 10,  25 => 6,);
    }
}
