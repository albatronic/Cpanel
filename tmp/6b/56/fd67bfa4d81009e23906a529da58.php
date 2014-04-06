<?php

/* _global/filtroAvanzado.html.twig */
class __TwigTemplate_6b56fd67bfa4d81009e23906a529da58 extends Twig_Template
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
        // line 2
        echo "
<div id=\"filtroAvanzado\" title=\"Filtro Avanzado\" class=\"FiltrosAdicionales\">

";
        // line 5
        $context["i"] = 0;
        // line 6
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_filter_, "aditional"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 7
            echo "    
    ";
            // line 9
            echo "    ";
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "columns"), $this->getAttribute($_value_, "field"), array(), "array"), "visible") || ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == 1))) {
                // line 12
                echo "    
        ";
                // line 13
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                $context["i"] = ($_i_ + 1);
                // line 14
                echo "        ";
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ($this->getAttribute($this->getAttribute($_filter_, "valuesSelected"), $_i_, array(), "array")) {
                    // line 15
                    echo "            ";
                    if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    $context["valor"] = $this->getAttribute($this->getAttribute($_filter_, "valuesSelected"), $_i_, array(), "array");
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    $context["valor"] = $this->getAttribute($_value_, "default");
                    // line 18
                    echo "        ";
                }
                // line 19
                echo "
        <div class=\"FiltroAdicional\">
            <div style=\"float: left; width: 140px; margin-right: 3px;\">&nbsp;&nbsp;";
                // line 21
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "varEnvMod"), "columns"), $this->getAttribute($_value_, "field"), array(), "array"), "caption"), "html", null, true);
                echo ":</div>

            <div style=\"float: left; height: 25px;\">
            ";
                // line 24
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($this->getAttribute($_value_, "type") == "select")) {
                    // line 25
                    echo "                <input name=\"filter[columnsSelected][";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                <select name=\"filter[valuesSelected][";
                    // line 26
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" id=\"filter_valuesSelected_";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "\" ";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "event"), "html", null, true);
                    echo " style=\"width: 120px;\">
                    ";
                    // line 27
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_value_, "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
                        // line 28
                        echo "                    <option value=\"";
                        if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "Id"), "html", null, true);
                        echo "\" ";
                        if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        if (($this->getAttribute($_objeto_, "Id") == $_valor_)) {
                            echo " SELECTED ";
                        }
                        echo ">";
                        if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "Value"), "html", null, true);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 30
                    echo "                </select>
            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($this->getAttribute($_value_, "type") == "input")) {
                    // line 34
                    echo "                <input name=\"filter[columnsSelected][";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                <input name=\"filter[valuesSelected][";
                    // line 35
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" id=\"filter_valuesSelected_";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "\" value =\"";
                    if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                    echo twig_escape_filter($this->env, $_valor_, "html", null, true);
                    echo "\" type=\"text\" size=\"10\" ";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "event"), "html", null, true);
                    echo "/>
            ";
                }
                // line 37
                echo "
            ";
                // line 38
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($this->getAttribute($_value_, "type") == "range")) {
                    // line 39
                    echo "                <input name=\"filter[columnsSelected][";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                ";
                    // line 40
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    if (($this->getAttribute($_value_, "data_type") == "date")) {
                        // line 41
                        echo "                    ";
                        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "fecha", array(0 => null, 1 => null, 2 => (("filter[valuesSelected][" . $_i_) . "]"), 3 => ("filter_valuesSelected_" . $_i_), 4 => $_valor_), "method"), "html", null, true);
                        echo "
                ";
                    } else {
                        // line 43
                        echo "                    <input name=\"filter[valuesSelected][";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "]\" id=\"filter_valuesSelected_";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "\" value =\"";
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        echo twig_escape_filter($this->env, $_valor_, "html", null, true);
                        echo "\" type=\"text\" size=\"10\" ";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_value_, "event"), "html", null, true);
                        echo "/>
                ";
                    }
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "
            ";
                // line 47
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($this->getAttribute($_value_, "type") == "check")) {
                    // line 48
                    echo "                <input name=\"filter[columnsSelected][";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                <input name=\"filter[valuesSelected][";
                    // line 49
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "]\" id=\"filter_valuesSelected_";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "\"
                 ";
                    // line 50
                    if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                    if (($_valor_ != "")) {
                        // line 51
                        echo "                    ";
                        if (isset($context["valor"])) { $_valor_ = $context["valor"]; } else { $_valor_ = null; }
                        if (($_valor_ == "1")) {
                            // line 52
                            echo "                       checked=\"checked\"
                    ";
                        }
                        // line 54
                        echo "                 ";
                    } else {
                        // line 55
                        echo "                    ";
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        if (($this->getAttribute($_value_, "default") == "on")) {
                            // line 56
                            echo "                       checked=\"checked\"
                    ";
                        }
                        // line 58
                        echo "                 ";
                    }
                    // line 59
                    echo "                       type=\"checkbox\" ";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "event"), "html", null, true);
                    echo "/>
            ";
                }
                // line 61
                echo "            </div>
        </div>
    ";
            }
            // line 64
            echo "    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 66
        echo "
<div style='clear:both'></div>

<div style=\"margin-top: 5px; margin-bottom: 10px; margin-left:43px; width: 290px;\">
<input class=\"FiltrosAdicionalesComando\" type=\"buttom\" value=\"Consultar\"
      onclick=\"
          \$('#div_listado').html('<div class=ListadoAnimation><img src=";
        // line 72
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
        echo "/images/loadingAnimation.gif /></div>');
          \$('#filtroAvanzado').dialog('close');
          \$('#filtro').submit();\"
/>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_global/filtroAvanzado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 72,  276 => 66,  269 => 64,  264 => 61,  257 => 59,  254 => 58,  250 => 56,  246 => 55,  243 => 54,  239 => 52,  235 => 51,  232 => 50,  224 => 49,  215 => 48,  212 => 47,  209 => 46,  206 => 45,  190 => 43,  181 => 41,  178 => 40,  169 => 39,  166 => 38,  163 => 37,  148 => 35,  139 => 34,  136 => 33,  133 => 32,  129 => 30,  110 => 28,  105 => 27,  94 => 26,  85 => 25,  82 => 24,  74 => 21,  70 => 19,  67 => 18,  63 => 17,  60 => 16,  55 => 15,  50 => 14,  47 => 13,  44 => 12,  38 => 11,  36 => 10,  34 => 9,  31 => 7,  26 => 6,  24 => 5,  19 => 2,);
    }
}
