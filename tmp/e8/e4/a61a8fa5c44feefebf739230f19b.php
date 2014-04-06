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
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($this->getAttribute($_filter_, "pages") != 0)) {
            // line 2
            echo "    <form name=\"paginacion";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "\" id=\"paginacion";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "\" class=\"Paginacion-";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "\" action=\"\" method=\"POST\">
    Página ";
            // line 3
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "page"), "html", null, true);
            echo " de ";
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "pages"), "html", null, true);
            echo " (";
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "records"), "html", null, true);
            echo " registros) &nbsp;
    ";
            // line 4
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($this->getAttribute($_filter_, "page") != 1)) {
                // line 5
                echo "         <input type=\"image\" name=\"primera\"  onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                echo twig_escape_filter($this->env, $_position_, "html", null, true);
                echo "]').value=1;\"  src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/primero1.gif\" alt=\"Primero\"/>
         <input type=\"image\" name=\"atras\" onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                // line 6
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                echo twig_escape_filter($this->env, $_position_, "html", null, true);
                echo "]').value=";
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_filter_, "page") - 1), "html", null, true);
                echo ";\" src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/anterior1.gif\" alt=\"Anterior\"/>
    ";
            } else {
                // line 8
                echo "        <img src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/primero0.gif\" width=\"10px\" height=\"12px\" />
        <img src=\"";
                // line 9
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/anterior0.gif\" width=\"10px\" height=\"12px\" />
    ";
            }
            // line 11
            echo "
    <select id=\"pagina\" onclick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
            // line 12
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/loadingAnimation.gif /></div>');
        document.getElementById('filter[page";
            // line 13
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "]').value=pagina.value;submit();\" >
        ";
            // line 14
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_filter_, "pages"), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "        <option value =\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $_i_, "html", null, true);
                echo "\" ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                if (($_i_ == $this->getAttribute($_filter_, "page"))) {
                    echo " selected ";
                }
                echo " >";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $_i_, "html", null, true);
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
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($this->getAttribute($_filter_, "page") != $this->getAttribute($_filter_, "pages"))) {
                // line 20
                echo "        <input type=\"image\" name=\"siguiente\" onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                echo twig_escape_filter($this->env, $_position_, "html", null, true);
                echo "]').value=";
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_filter_, "page") + 1), "html", null, true);
                echo ";\" src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/siguiente1.gif\" alt=\"Siguiente\"/>
        <input type=\"image\" name=\"ultima\" onClick=\"\$('#Listado').html('<div class=ListadoAnimation><img src=";
                // line 21
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/loadingAnimation.gif /></div>');document.getElementById('filter[page";
                if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                echo twig_escape_filter($this->env, $_position_, "html", null, true);
                echo "]').value=";
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "pages"), "html", null, true);
                echo ";\" src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/ultimo1.gif\" alt=\"Ultimo\"/>

    ";
            } else {
                // line 24
                echo "            <img src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/siguiente0.gif\" width=\"10px\" height=\"12px\"/>
            <img src=\"";
                // line 25
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/ultimo0.gif\" width=\"10px\" height=\"12px\"/>
    ";
            }
            // line 27
            echo "

    ";
            // line 29
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "LI", array(), "array") && $this->getAttribute($this->getAttribute($_values_, "listado"), "formatos"))) {
                // line 30
                echo "        <select name=\"formatoListado\" id=\"formatolistado";
                if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                echo twig_escape_filter($this->env, $_position_, "html", null, true);
                echo "\" size=\"1\" class=\"select\">
        ";
                // line 31
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "listado"), "formatos"));
                foreach ($context['_seq'] as $context["key"] => $context["title"]) {
                    // line 32
                    echo "            <option value=\"";
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "\">";
                    if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                    echo twig_escape_filter($this->env, $_title_, "html", null, true);
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
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            if (($_position_ == "izq")) {
                // line 38
                echo "        <div style=\"float: right;\">
        ";
                // line 39
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "EX", array(), "array")) {
                    // line 40
                    echo "            <img style=\"float:right; cursor: pointer; margin-left: 3px;\" src=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/images/ico_excel.gif\" width=\"18px\" height=\"17px\" title=\"Exportar...\" alt=\"Exportar...\"
                 onclick=\"\$('#dialog').dialog('open');\"
            />
            ";
                    // line 43
                    if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    $this->env->loadTemplate("_Emergente/dialogoExportar.html.twig")->display(array_merge($context, array("filter" => $_filter_, "export_types" => $this->getAttribute($this->getAttribute($_values_, "listado"), "export_types"))));
                    // line 44
                    echo "        ";
                }
                // line 45
                echo "        ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "LI", array(), "array")) {
                    // line 46
                    echo "            <img style=\"float:right; cursor: pointer;\" src=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/images/icon_printgreen.gif\" width=\"37px\" height=\"21px\" title=\"Imprimir...\" alt=\"Imprimir...\"
                 onClick=\"\$('#action";
                    // line 47
                    if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                    echo twig_escape_filter($this->env, $_position_, "html", null, true);
                    echo "').val('listado');
                          \$('#Listado').html('<div class=ListadoAnimation><img src=";
                    // line 48
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/images/loadingAnimation.gif /></div>');
                          \$('#paginacion";
                    // line 49
                    if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
                    echo twig_escape_filter($this->env, $_position_, "html", null, true);
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
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_filter_, "columnsSelected"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 57
                echo "        <input type=\"hidden\" name=\"filter[columnsSelected][";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "]\" value=\"";
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_filter_, "columnsSelected"), $_key_, array(), "array"), "html", null, true);
                echo "\"/>
        <input type=\"hidden\" name=\"filter[valuesSelected][";
                // line 58
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "]\" value=\"";
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_filter_, "valuesSelected"), $_key_, array(), "array"), "html", null, true);
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
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_filter_, "flags"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 62
                echo "        <input name=\"filter[flags][";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "]\" value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
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
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "orderBy"), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"filter[page]\" id=\"filter[page";
            // line 66
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "]\" value=\"";
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "page"), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"filter[recordsPerPage]\" value=\"";
            // line 67
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "recordsPerPage"), "html", null, true);
            echo "\"/>
    <input type=\"hidden\" name=\"controller\" value=\"";
            // line 68
            if (isset($context["controller"])) { $_controller_ = $context["controller"]; } else { $_controller_ = null; }
            echo twig_escape_filter($this->env, $_controller_, "html", null, true);
            echo "\" />
    <input type=\"hidden\" name=\"action\" id=\"action";
            // line 69
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "\" value=\"list\" />
    <input type=\"hidden\" name=\"exportType\" id=\"exportType";
            // line 70
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
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
        return array (  351 => 70,  346 => 69,  341 => 68,  336 => 67,  328 => 66,  323 => 65,  320 => 64,  307 => 62,  302 => 61,  299 => 60,  286 => 58,  276 => 57,  271 => 56,  267 => 54,  263 => 52,  256 => 49,  251 => 48,  246 => 47,  240 => 46,  236 => 45,  233 => 44,  229 => 43,  221 => 40,  218 => 39,  215 => 38,  212 => 37,  209 => 36,  205 => 34,  192 => 32,  187 => 31,  181 => 30,  178 => 29,  174 => 27,  168 => 25,  162 => 24,  146 => 21,  131 => 20,  128 => 19,  124 => 17,  105 => 15,  100 => 14,  95 => 13,  90 => 12,  87 => 11,  81 => 9,  75 => 8,  60 => 6,  48 => 5,  45 => 4,  34 => 3,  22 => 2,  19 => 1,);
    }
}
