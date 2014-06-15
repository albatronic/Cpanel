<?php

/* _global/paginacion.html.twig */
class __TwigTemplate_e8e4a61a8fa5c44feefebf739230f19b extends Twig_Template
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
        // line 1
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pages") != 0)) {
            // line 2
            echo "    <form name=\"paginacion";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "\" id=\"paginacion";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "\" class=\"Paginacion-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "\" action=\"\" method=\"POST\">
    Página ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page"), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pages"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "records"), "html", null, true);
            echo " registros) &nbsp;
    ";
            // line 4
            if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page") != 1)) {
                // line 5
                echo "         <input type=\"image\" name=\"primera\"  onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                echo "]').value=1;\"  src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/primero1.gif\" alt=\"Primero\"/>
         <input type=\"image\" name=\"atras\" onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                echo "]').value=";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page") - 1), "html", null, true);
                echo ";\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/anterior1.gif\" alt=\"Anterior\"/>
    ";
            } else {
                // line 8
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/primero0.gif\" width=\"10px\" height=\"12px\" />
        <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/anterior0.gif\" width=\"10px\" height=\"12px\" />
    ";
            }
            // line 11
            echo "
    <select id=\"pagina\" onclick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/images/loadingAnimation.gif /></div>');
        document.getElementById('filter[page";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "]').value=pagina.value;submit();\" >
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pages"), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "        <option value =\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page"))) {
                    echo " selected ";
                }
                echo " >";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "    </select>

    ";
            // line 19
            if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page") != $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pages"))) {
                // line 20
                echo "        <input type=\"image\" name=\"siguiente\" onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                echo "]').value=";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page") + 1), "html", null, true);
                echo ";\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/siguiente1.gif\" alt=\"Siguiente\"/>
        <input type=\"image\" name=\"ultima\" onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                echo "]').value=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pages"), "html", null, true);
                echo ";\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/ultimo1.gif\" alt=\"Ultimo\"/>

    ";
            } else {
                // line 24
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/siguiente0.gif\" width=\"10px\" height=\"12px\"/>
            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/images/ultimo0.gif\" width=\"10px\" height=\"12px\"/>
    ";
            }
            // line 27
            echo "

    ";
            // line 29
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "permisos"), "permisosModulo"), "LI", array(), "array") && $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "listado"), "formatos"))) {
                // line 30
                echo "        <select name=\"formatoListado\" id=\"formatolistado";
                echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                echo "\" size=\"1\" class=\"select\">
        ";
                // line 31
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "listado"), "formatos"));
                foreach ($context['_seq'] as $context["key"] => $context["title"]) {
                    // line 32
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 34
                echo "        </select>
    ";
            }
            // line 36
            echo "
    ";
            // line 37
            if (((isset($context["position"]) ? $context["position"] : null) == "izq")) {
                // line 38
                echo "        <div style=\"float: right;\">
        ";
                // line 39
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "permisos"), "permisosModulo"), "EX", array(), "array")) {
                    // line 40
                    echo "            <img style=\"float:right; cursor: pointer; margin-left: 3px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/images/ico_excel.gif\" width=\"18px\" height=\"17px\" title=\"Exportar...\" alt=\"Exportar...\"
                 onclick=\"\$('#dialogExportar').dialog('open');\"
            />
            ";
                    // line 43
                    $this->env->loadTemplate("_Emergente/dialogoExportar.html.twig")->display(array_merge($context, array("filter" => (isset($context["filter"]) ? $context["filter"] : null), "export_types" => $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "listado"), "export_types"))));
                    // line 44
                    echo "        ";
                }
                // line 45
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "permisos"), "permisosModulo"), "LI", array(), "array")) {
                    // line 46
                    echo "            <img style=\"float:right; cursor: pointer;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/images/icon_printgreen.gif\" width=\"37px\" height=\"21px\" title=\"Imprimir...\" alt=\"Imprimir...\"
                 onClick=\"\$('#action";
                    // line 47
                    echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                    echo "').val('listado');
                          \$('#Listado').html('<div class=ListadoAnimation><img src=";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/images/loadingAnimation.gif /></div>');
                          \$('#paginacion";
                    // line 49
                    echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
                    echo "').submit();\"
            />
        ";
                }
                // line 52
                echo "        </div>
    ";
            }
            // line 54
            echo "

    ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "columnsSelected"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 57
                echo "        <input type=\"hidden\" name=\"filter[columnsSelected][";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "columnsSelected"), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "html", null, true);
                echo "\"/>
        <input type=\"hidden\" name=\"filter[valuesSelected][";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "valuesSelected"), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "html", null, true);
                echo "\"/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 60
            echo "
    ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "flags"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 62
                echo "        <input name=\"filter[flags][";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" type=\"hidden\" />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 64
            echo "
    <input type=\"hidden\" name=\"filter[orderBy]\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "orderBy"), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"filter[page]\" id=\"filter[page";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "page"), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"filter[recordsPerPage]\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "recordsPerPage"), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"controller\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
            echo "\" />
    <input type=\"hidden\" name=\"action\" id=\"action";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "\" value=\"list\" />
    <input type=\"hidden\" name=\"exportType\" id=\"exportType";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
            echo "\" value=\"\" />
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/paginacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 70,  281 => 69,  277 => 68,  273 => 67,  267 => 66,  263 => 65,  260 => 64,  249 => 62,  245 => 61,  242 => 60,  232 => 58,  225 => 57,  221 => 56,  217 => 54,  213 => 52,  207 => 49,  203 => 48,  199 => 47,  194 => 46,  191 => 45,  188 => 44,  186 => 43,  179 => 40,  177 => 39,  174 => 38,  172 => 37,  169 => 36,  165 => 34,  154 => 32,  150 => 31,  145 => 30,  143 => 29,  139 => 27,  134 => 25,  129 => 24,  117 => 21,  106 => 20,  104 => 19,  100 => 17,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  70 => 11,  65 => 9,  60 => 8,  49 => 6,  40 => 5,  38 => 4,  30 => 3,  21 => 2,  19 => 1,);
    }
}
