<?php

/* PcaeProyectosApps/list.html.twig */
class __TwigTemplate_3678f0f9040101e406c3c9f13bef4dca extends Twig_Template
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
                <td class='Item'>App</td>
                <td class='Item'>N. Licencias</td>
            </tr>

            <tbody class='Cuerpo'>
            ";
        // line 24
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "listado"), "data"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["objeto"]) {
            // line 25
            echo "                ";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (($_key_ % 2 == 0)) {
                // line 26
                echo "                    ";
                $context["classFila"] = "Impar";
                // line 27
                echo "                ";
            } else {
                // line 28
                echo "                    ";
                $context["classFila"] = "Par";
                // line 29
                echo "                ";
            }
            // line 30
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_objeto_, "IdProyecto"), "Id"), "html", null, true);
            echo "'\" class='";
            if (isset($context["classFila"])) { $_classFila_ = $context["classFila"]; } else { $_classFila_ = null; }
            echo twig_escape_filter($this->env, $_classFila_, "html", null, true);
            echo "'>
                <td class='Item'><a href=\"";
            // line 31
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_objeto_, "IdProyecto"), "Id"), "html", null, true);
            echo "\" title=\"Editar...\">";
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "IdApp"), "html", null, true);
            echo "</a></td>
                <td class='Item' align=\"center\">";
            // line 32
            if (isset($context["objeto"])) { $_objeto_ = $context["objeto"]; } else { $_objeto_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_objeto_, "NumeroLicencias"), "html", null, true);
            echo "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr><td colspan='9'>No hay informaci&oacute;n que cumpla esos criterios</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['objeto'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "            </tbody>
        </table>

\t";
        // line 41
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PcaeProyectosApps/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  116 => 37,  109 => 35,  100 => 32,  83 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  53 => 26,  49 => 25,  43 => 24,  33 => 16,  29 => 13,  26 => 12,);
    }
}
