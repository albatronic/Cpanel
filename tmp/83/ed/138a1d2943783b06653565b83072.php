<?php

/* _global/filtroGenerico.html.twig */
class __TwigTemplate_83ed138a1d2943783b06653565b83072 extends Twig_Template
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
<div>
    <div style=\"float:left;\">
        &nbsp;&nbsp;Buscar por:
        <select name=\"filter[columnsSelected][0]\">
        ";
        // line 7
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_filter_, "columns"));
        foreach ($context['_seq'] as $context["index"] => $context["column"]) {
            // line 8
            echo "            <option value=\"";
            if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
            echo twig_escape_filter($this->env, $_index_, "html", null, true);
            echo "\" ";
            if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($_index_ == $this->getAttribute($this->getAttribute($_filter_, "columnsSelected"), 0, array(), "array"))) {
                echo " SELECTED ";
            }
            echo ">";
            if (isset($context["column"])) { $_column_ = $context["column"]; } else { $_column_ = null; }
            echo twig_escape_filter($this->env, $_column_, "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "        </select>
        Valor (%): <input name=\"filter[valuesSelected][0]\" id=\"filter[valuesSelected][0]\" value=\"";
        // line 11
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_filter_, "valuesSelected"), 0), "html", null, true);
        echo "\" type=\"text\" size=\"20\"/>
    </div>

    ";
        // line 14
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if ($this->getAttribute($_filter_, "aditional")) {
            // line 15
            echo "        <div style=\"float: left; margin-left: 5px;\">
            <img src=\"";
            // line 16
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/more.png\" width=\"14px\" height=\"14px\" style=\"cursor: pointer;\"
                 onclick=\"\$('#filtroAvanzado').dialog('open');\"
                 alt=\"Filtro Avanzado\" title=\"Filtro Avanzado ...\">
        ";
            // line 19
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/filtroAvanzado.html.twig")->display(array_merge($context, array("titulo" => $this->getAttribute($_values_, "titulo"))));
            // line 20
            echo "        </div>
    ";
        }
        // line 22
        echo "
    <div style=\"float:right;\">
        Orden:
        <select name=\"filter[orderBy]\">
        ";
        // line 26
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_filter_, "columnsOrder"));
        foreach ($context['_seq'] as $context["_key"] => $context["criterio"]) {
            // line 27
            echo "            <option value=\"";
            if (isset($context["criterio"])) { $_criterio_ = $context["criterio"]; } else { $_criterio_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_criterio_, "criteria"), "html", null, true);
            echo "\" ";
            if (isset($context["criterio"])) { $_criterio_ = $context["criterio"]; } else { $_criterio_ = null; }
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($this->getAttribute($_criterio_, "criteria") == $this->getAttribute($_filter_, "orderBy"))) {
                echo " SELECTED ";
            }
            echo ">";
            if (isset($context["criterio"])) { $_criterio_ = $context["criterio"]; } else { $_criterio_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_criterio_, "title"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['criterio'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "        </select>

        Mostrar:
        <input name=\"filter[recordsPerPage]\" type=\"text\" size=\"3\" value=\"";
        // line 32
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_filter_, "recordsPerPage"), "html", null, true);
        echo "\" style=\"width:25px;\"/>

        <input name=\"filter[page]\" value=\"1\" type=\"hidden\"/>
        <input style=\"margin-left: 5px;\" type=\"image\" src=\"";
        // line 35
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
        echo "/images/lupa.png\" width=\"16px\" height=\"16px\" alt=\"Consulta\" title=\"Consultar\" />
    </div>
    <div style=\"clear:both;\"></div>
</div>

";
        // line 40
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "foco", array(0 => "filter[valuesSelected][0]"), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "_global/filtroGenerico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  122 => 35,  115 => 32,  110 => 29,  91 => 27,  86 => 26,  80 => 22,  76 => 20,  73 => 19,  66 => 16,  63 => 15,  60 => 14,  53 => 11,  50 => 10,  26 => 7,  32 => 8,  29 => 7,  23 => 5,  45 => 12,  35 => 10,  30 => 9,  25 => 6,  31 => 8,  22 => 5,  19 => 2,);
    }
}
