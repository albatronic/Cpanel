<?php

/* _global/listGenerico.html.twig */
class __TwigTemplate_c386a7446c2e6386f3f801fc1800b47d extends Twig_Template
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
        // line 3
        echo "
<div id=\"Listado\">
<table width='100%'>
    <tr class='Titulos'>
        <td width='16px'>&nbsp;</td>
        ";
        // line 8
        if (isset($context["listado"])) { $_listado_ = $context["listado"]; } else { $_listado_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_listado_, "titles"));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 9
            echo "            <td class='Item'>";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_title_, "title"), "html", null, true);
            echo "</td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "    </tr>

    <tbody class='Cuerpo'>
    ";
        // line 14
        if (isset($context["listado"])) { $_listado_ = $context["listado"]; } else { $_listado_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_listado_, "data"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["objeto"]) {
            // line 15
            echo "        <tr>
            <td>
                <a href='";
            // line 17
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/";
            if (isset($context["controller"])) { $_controller_ = $context["controller"]; } else { $_controller_ = null; }
            echo twig_escape_filter($this->env, $_controller_, "html", null, true);
            echo "/Edit/";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "PrimaryKeyMD5"), "html", null, true);
            echo "' title='Editar ...'>
                    <img src=\"";
            // line 18
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/botoneditar.png\" width=\"16px\" height=\"16px\" />
                <a>
            </td>
            ";
            // line 21
            if (isset($context["listado"])) { $_listado_ = $context["listado"]; } else { $_listado_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_listado_, "titles"));
            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                // line 22
                echo "            ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($this->getAttribute($_value_, "type") == "decimal")) {
                    // line 23
                    echo "                ";
                    $context["align"] = "right";
                    // line 24
                    echo "            ";
                } else {
                    // line 25
                    echo "                ";
                    $context["aling"] = "left";
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "            <td class='Item' align='";
                if (isset($context["align"])) { $_align_ = $context["align"]; } else { $_align_ = null; }
                echo twig_escape_filter($this->env, $_align_, "html", null, true);
                echo "'>
            ";
                // line 28
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if ($this->getAttribute($this->getAttribute($_value_, "link"), "route")) {
                    // line 29
                    echo "                <a class=\"thickbox\" title=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_value_, "link"), "title"), "html", null, true);
                    echo "\" href=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                    echo "/";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_value_, "link"), "route"), "html", null, true);
                    echo "/";
                    if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "PrimaryKeyMD5"), "html", null, true);
                    echo "/?TB_iframe=true&height=430&width=1000\">
                    ";
                    // line 30
                    if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "getColumnValue", array(0 => $_field_, 1 => $this->getAttribute($_value_, "length")), "method"), "html", null, true);
                    echo "
                </a>
            ";
                } else {
                    // line 33
                    echo "                ";
                    if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "getColumnValue", array(0 => $_field_, 1 => $this->getAttribute($_value_, "length")), "method"), "html", null, true);
                    echo "
            ";
                }
                // line 35
                echo "            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "\t<tr><td colspan='8'>No hay información que cumpla esos criterios</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "    </tbody>
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "_global/listGenerico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  150 => 39,  144 => 37,  137 => 35,  119 => 30,  104 => 29,  101 => 28,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  79 => 22,  74 => 21,  67 => 18,  56 => 17,  52 => 15,  46 => 14,  41 => 11,  31 => 9,  26 => 8,  351 => 70,  346 => 69,  341 => 68,  336 => 67,  328 => 66,  323 => 65,  320 => 64,  307 => 62,  302 => 61,  299 => 60,  286 => 58,  276 => 57,  271 => 56,  267 => 54,  263 => 52,  256 => 49,  251 => 48,  246 => 47,  240 => 46,  236 => 45,  233 => 44,  229 => 43,  221 => 40,  218 => 39,  215 => 38,  212 => 37,  209 => 36,  205 => 34,  192 => 32,  187 => 31,  181 => 30,  178 => 29,  174 => 27,  168 => 25,  162 => 24,  146 => 21,  131 => 20,  128 => 33,  124 => 17,  105 => 15,  100 => 14,  95 => 27,  90 => 12,  87 => 11,  81 => 9,  75 => 8,  60 => 6,  48 => 5,  45 => 4,  34 => 3,  22 => 2,  19 => 3,);
    }
}
