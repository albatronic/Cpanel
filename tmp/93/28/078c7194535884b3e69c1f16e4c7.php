<?php

/* PcaeProyectos/list.html.twig */
class __TwigTemplate_9328078c7194535884b3e69c1f16e4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'listado' => array($this, 'block_listado'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(($this->getAttribute($this->getContext($context, "values"), "controller") . "/index.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_listado($context, array $blocks = array())
    {
        // line 13
        echo "<div class='Listado'>

\t";
        // line 16
        echo "
\t<table width=\"100%\">
            <tr class='Titulos'>
                <td class='Item'>Proyecto</td>
                <td class='Item'>Inicio</td>
                <td class='Item'>F. fin prevista</td>
                <td class='Item'>Presupuesto</td>
                <td class='Item'>Horas Previstas</td>
                <td class='Item'>Project Manager</td>
                <td class='Item'>Contacto Cliente</td>
            </tr>

            <tbody class='Cuerpo'>
            ";
        // line 29
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "listado"), "data"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["objeto"]) {
            // line 30
            echo "                ";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (($_key_ % 2 == 0)) {
                // line 31
                echo "                    ";
                $context["classFila"] = "Impar";
                // line 32
                echo "                ";
            } else {
                // line 33
                echo "                    ";
                $context["classFila"] = "Par";
                // line 34
                echo "                ";
            }
            // line 35
            echo "            <tr onclick=\"location.href='";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/edit/";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "primaryKeyMD5"), "html", null, true);
            echo "/";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_objeto_, "IdEmpresa"), "Id"), "html", null, true);
            echo "'\" class='";
            if (isset($context["classFila"])) { $_classFila_ = $context["classFila"]; } else { $_classFila_ = null; }
            echo twig_escape_filter($this->env, $_classFila_, "html", null, true);
            echo "'>
                <td class='Item'><a href=\"";
            // line 36
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/edit/";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "primaryKeyMD5"), "html", null, true);
            echo "/";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_objeto_, "IdEmpresa"), "Id"), "html", null, true);
            echo "\" title=\"Editar...\">";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "Proyecto"), "html", null, true);
            echo "</a></td>
                <td class='Item' align=\"center\">";
            // line 37
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "FechaInicio"), "html", null, true);
            echo "</td>
                <td class='Item' align=\"center\">";
            // line 38
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "FechaFinPrevista"), "html", null, true);
            echo "</td>
                <td class='Item' align=\"right\">";
            // line 39
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "Presupuesto"), "html", null, true);
            echo "</td>
                <td class='Item' align=\"right\">";
            // line 40
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "HorasPrevistas"), "html", null, true);
            echo "</td>
                <td class='Item'>";
            // line 41
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "ResponsableAE"), "html", null, true);
            echo "</td>
                <td class='Item'>";
            // line 42
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "ResponsableCliente"), "html", null, true);
            echo "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr><td colspan='9'>No hay informaci&oacute;n que cumpla esos criterios</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "            </tbody>
        </table>

\t";
        // line 51
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PcaeProyectos/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 51,  146 => 47,  139 => 45,  130 => 42,  125 => 41,  120 => 40,  115 => 39,  110 => 38,  105 => 37,  88 => 36,  70 => 35,  67 => 34,  64 => 33,  61 => 32,  58 => 31,  54 => 30,  48 => 29,  33 => 16,  29 => 13,  26 => 12,);
    }
}
