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
";
        // line 3
        $context["i"] = 0;
        // line 4
        echo "<div id=\"filtroAvanzado\" title=\"Filtro Avanzado\" class=\"FiltrosAdicionales\">
    <form name='formFiltroAvanzado' id='formFiltroAvanzado' action='' method='POST'>
        <input name='controller' value='";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "' type='hidden' />
        <input name='action' value='list' type='hidden' />  
        <div class=\"FiltroAdicional\">
            <div class=\"FiltroAdicionalEtiqueta\">Ordenar por:</div>            
            <div style=\"float:left;\">
            <select name=\"filter[orderBy]\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "columnsOrder"));
        foreach ($context['_seq'] as $context["_key"] => $context["criterio"]) {
            // line 13
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criterio"]) ? $context["criterio"] : null), "criteria"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["criterio"]) ? $context["criterio"] : null), "criteria") == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "orderBy"))) {
                echo " SELECTED ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criterio"]) ? $context["criterio"] : null), "title"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['criterio'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "            </select>
            </div>
        </div>
        <div class=\"FiltroAdicional\">        
            <div class=\"FiltroAdicionalEtiqueta\">Mostrar:</div>              
            <div style=\"float:left;\">            
            <input name=\"filter[recordsPerPage]\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "recordsPerPage"), "html", null, true);
        echo "\" type=\"text\" style=\"width: 25px;\"/>
            </div>
        </div>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "aditional"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 25
            echo "
            ";
            // line 27
            echo "            ";
            // line 28
            echo "            ";
            // line 29
            echo "            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "varEnvMod"), "columns"), $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "field"), array(), "array"), "visible") || ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "IdPerfil"), "Id") == 1))) {
                // line 30
                echo "
                ";
                // line 31
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 32
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "valuesSelected"), (isset($context["i"]) ? $context["i"] : null), array(), "array")) {
                    // line 33
                    echo "                    ";
                    $context["valor"] = $this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "valuesSelected"), (isset($context["i"]) ? $context["i"] : null), array(), "array");
                    // line 34
                    echo "                ";
                } else {
                    // line 35
                    echo "                    ";
                    $context["valor"] = $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "default");
                    // line 36
                    echo "                ";
                }
                // line 37
                echo "
                <div class=\"FiltroAdicional\">
                    <div class=\"FiltroAdicionalEtiqueta\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "varEnvMod"), "columns"), $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "field"), array(), "array"), "caption"), "html", null, true);
                echo ":</div>

                    <div style=\"float: left;\">
                    ";
                // line 42
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "type") == "select")) {
                    // line 43
                    echo "                        <input name=\"filter[columnsSelected][";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                        <select name=\"filter[valuesSelected][";
                    // line 44
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" id=\"filter_valuesSelected_";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "event"), "html", null, true);
                    echo " style=\"width: 120px;\">
                            ";
                    // line 45
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["objeto"]) {
                        // line 46
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "Id"), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "Id") == (isset($context["valor"]) ? $context["valor"] : null))) {
                            echo " SELECTED ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "Value"), "html", null, true);
                        echo "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objeto'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 48
                    echo "                        </select>
                    ";
                }
                // line 50
                echo "
                    ";
                // line 51
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "type") == "input")) {
                    // line 52
                    echo "                        <input name=\"filter[columnsSelected][";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                        <input name=\"filter[valuesSelected][";
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" id=\"filter_valuesSelected_";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "\" value =\"";
                    echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : null), "html", null, true);
                    echo "\" type=\"text\" size=\"10\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "event"), "html", null, true);
                    echo "/>
                    ";
                }
                // line 55
                echo "
                    ";
                // line 56
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "type") == "range")) {
                    // line 57
                    echo "                        <input name=\"filter[columnsSelected][";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                        ";
                    // line 58
                    if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "data_type") == "date")) {
                        // line 59
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "fecha", array(0 => null, 1 => null, 2 => (("filter[valuesSelected][" . (isset($context["i"]) ? $context["i"] : null)) . "]"), 3 => ("filter_valuesSelected_" . (isset($context["i"]) ? $context["i"] : null)), 4 => (isset($context["valor"]) ? $context["valor"] : null)), "method"), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 61
                        echo "                            <input name=\"filter[valuesSelected][";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                        echo "]\" id=\"filter_valuesSelected_";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                        echo "\" value =\"";
                        echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : null), "html", null, true);
                        echo "\" type=\"text\" size=\"10\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "event"), "html", null, true);
                        echo "/>
                        ";
                    }
                    // line 63
                    echo "                    ";
                }
                // line 64
                echo "
                    ";
                // line 65
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "type") == "check")) {
                    // line 66
                    echo "                        <input name=\"filter[columnsSelected][";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "field"), "html", null, true);
                    echo "\" type=\"hidden\"/>
                        <input name=\"filter[valuesSelected][";
                    // line 67
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "]\" id=\"filter_valuesSelected_";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "\"
                         ";
                    // line 68
                    if (((isset($context["valor"]) ? $context["valor"] : null) != "")) {
                        // line 69
                        echo "                            ";
                        if (((isset($context["valor"]) ? $context["valor"] : null) == "1")) {
                            // line 70
                            echo "                               checked=\"checked\"
                            ";
                        }
                        // line 72
                        echo "                         ";
                    } else {
                        // line 73
                        echo "                            ";
                        if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "default") == "on")) {
                            // line 74
                            echo "                               checked=\"checked\"
                            ";
                        }
                        // line 76
                        echo "                         ";
                    }
                    // line 77
                    echo "                               type=\"checkbox\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "event"), "html", null, true);
                    echo "/>
                    ";
                }
                // line 79
                echo "                    </div>
                </div>
            ";
            }
            // line 82
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 84
        echo "
        <div style='clear:both'></div>
    </form>        
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
        return array (  270 => 84,  263 => 82,  258 => 79,  252 => 77,  249 => 76,  245 => 74,  242 => 73,  239 => 72,  235 => 70,  232 => 69,  230 => 68,  224 => 67,  217 => 66,  215 => 65,  212 => 64,  209 => 63,  197 => 61,  191 => 59,  189 => 58,  182 => 57,  180 => 56,  177 => 55,  166 => 53,  159 => 52,  157 => 51,  154 => 50,  150 => 48,  135 => 46,  131 => 45,  123 => 44,  116 => 43,  114 => 42,  108 => 39,  104 => 37,  101 => 36,  98 => 35,  95 => 34,  89 => 32,  87 => 31,  84 => 30,  81 => 29,  79 => 28,  74 => 25,  70 => 24,  64 => 21,  41 => 13,  37 => 12,  24 => 4,  22 => 3,  111 => 39,  103 => 34,  97 => 31,  92 => 33,  77 => 27,  73 => 25,  67 => 21,  59 => 16,  56 => 15,  54 => 14,  48 => 11,  45 => 10,  26 => 7,  35 => 10,  33 => 9,  30 => 8,  28 => 6,  23 => 5,  19 => 2,);
    }
}
