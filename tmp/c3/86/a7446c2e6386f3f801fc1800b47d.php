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
    <thead>
        <tr class='Titulos'>
            <th width='16px'>&nbsp;</th>
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listado"]) ? $context["listado"] : null), "titles"));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 10
            echo "                <th class='Item'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "title"), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "        </tr>
    </thead>

    <tbody class='Cuerpo'>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listado"]) ? $context["listado"] : null), "data"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["objeto"]) {
            // line 17
            echo "        <tr>
            <td>
                <a href='";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["controller"]) ? $context["controller"] : null), "html", null, true);
            echo "/Edit/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "PrimaryKeyMD5"), "html", null, true);
            echo "' title='Editar ...'>
                    <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/images/botoneditar.png\" width=\"16px\" height=\"16px\" />
                <a>
            </td>
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listado"]) ? $context["listado"] : null), "titles"));
            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                // line 24
                echo "            ";
                if (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "type") == "decimal")) {
                    // line 25
                    echo "                ";
                    $context["align"] = "right";
                    // line 26
                    echo "            ";
                } else {
                    // line 27
                    echo "                ";
                    $context["aling"] = "left";
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "            <td class='Item' align='";
                echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
                echo "'>
            ";
                // line 30
                if ($this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "link"), "route")) {
                    // line 31
                    echo "                <a class=\"thickbox\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "link"), "title"), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "link"), "route"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "PrimaryKeyMD5"), "html", null, true);
                    echo "/?TB_iframe=true&height=430&width=1000\">
                    ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "getColumnValue", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "length")), "method"), "html", null, true);
                    echo "
                </a>
            ";
                } else {
                    // line 35
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objeto"]) ? $context["objeto"] : null), "getColumnValue", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "length")), "method"), "html", null, true);
                    echo "
            ";
                }
                // line 37
                echo "            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t<tr><td colspan='8'>No hay información que cumpla esos criterios</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
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
        return array (  138 => 43,  131 => 41,  125 => 39,  118 => 37,  112 => 35,  106 => 32,  95 => 31,  93 => 30,  88 => 29,  85 => 28,  82 => 27,  79 => 26,  76 => 25,  73 => 24,  69 => 23,  63 => 20,  55 => 19,  51 => 17,  46 => 16,  40 => 12,  31 => 10,  27 => 9,  19 => 3,);
    }
}
