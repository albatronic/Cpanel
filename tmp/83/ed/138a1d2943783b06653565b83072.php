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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "columns"));
        foreach ($context['_seq'] as $context["index"] => $context["column"]) {
            // line 8
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
            echo "\" ";
            if (((isset($context["index"]) ? $context["index"] : null) == $this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "columnsSelected"), 0, array(), "array"))) {
                echo " SELECTED ";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["column"]) ? $context["column"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "valuesSelected"), 0), "html", null, true);
        echo "\" type=\"text\" size=\"20\"/>
    </div>

    ";
        // line 14
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "aditional")) {
            // line 15
            echo "        <div style=\"float: left; margin-left: 5px;\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/images/more.png\" width=\"14px\" height=\"14px\" style=\"cursor: pointer;\"
                 onclick=\"\$('#filtroAvanzado').dialog('open');\"
                 alt=\"Filtro Avanzado\" title=\"Filtro Avanzado ...\">
        </div>
    ";
        }
        // line 21
        echo "
    <div style=\"float:right;\">
        Orden:
        <select name=\"filter[orderBy]\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "columnsOrder"));
        foreach ($context['_seq'] as $context["_key"] => $context["criterio"]) {
            // line 26
            echo "            <option value=\"";
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
        // line 28
        echo "        </select>

        Mostrar:
        <input name=\"filter[recordsPerPage]\" type=\"text\" size=\"3\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "recordsPerPage"), "html", null, true);
        echo "\" style=\"width:25px;\"/>

        <input name=\"filter[page]\" value=\"1\" type=\"hidden\"/>
        <input style=\"margin-left: 5px;\" type=\"image\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/images/lupa.png\" width=\"16px\" height=\"16px\" alt=\"Consulta\" title=\"Consultar\" />
    </div>
    <div style=\"clear:both;\"></div>
</div>

";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "foco", array(0 => "filter[valuesSelected][0]"), "method"), "html", null, true);
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
        return array (  111 => 39,  103 => 34,  97 => 31,  92 => 28,  77 => 26,  73 => 25,  67 => 21,  59 => 16,  56 => 15,  54 => 14,  48 => 11,  45 => 10,  26 => 7,  35 => 10,  33 => 9,  30 => 8,  28 => 7,  23 => 5,  19 => 2,);
    }
}
