<?php

/* GconContenidos/index.html.twig */
class __TwigTemplate_8022b6ab84155ce6d8325ba3196896d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'filtro' => array($this, 'block_filtro'),
            'listado' => array($this, 'block_listado'),
            'mantenimiento' => array($this, 'block_mantenimiento'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "layout"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . $this->getAttribute($_values_, "titulo")), "html", null, true);
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/formErrores.html.twig")->display(array_merge($context, array("errores" => $this->getAttribute($_values_, "errores"))));
        // line 16
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/alertas.html.twig")->display(array_merge($context, array("alertas" => $this->getAttribute($_values_, "alertas"))));
        // line 17
        echo "
\t";
        // line 18
        $this->displayBlock('filtro', $context, $blocks);
        // line 23
        echo "
        <div id='div_listado'>
\t";
        // line 25
        $this->displayBlock('listado', $context, $blocks);
        // line 27
        echo "        </div>

\t";
        // line 29
        $this->displayBlock('mantenimiento', $context, $blocks);
    }

    // line 18
    public function block_filtro($context, array $blocks = array())
    {
        // line 19
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "CO", array(), "array") && $this->getAttribute($_values_, "tieneListado"))) {
            // line 20
            echo "            ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/filtroGenericoWrapper.html.twig")->display(array_merge($context, array("filter" => $this->getAttribute($this->getAttribute($_values_, "listado"), "filter"))));
            // line 21
            echo "\t";
        }
        // line 22
        echo "\t";
    }

    // line 25
    public function block_listado($context, array $blocks = array())
    {
        // line 26
        echo "\t";
    }

    // line 29
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 30
        echo "\t";
    }

    public function getTemplateName()
    {
        return "GconContenidos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  88 => 26,  85 => 25,  81 => 22,  74 => 20,  70 => 19,  67 => 18,  59 => 27,  57 => 25,  53 => 23,  51 => 18,  48 => 17,  44 => 16,  40 => 15,  37 => 14,  30 => 12,  95 => 30,  91 => 27,  78 => 21,  73 => 23,  68 => 22,  63 => 29,  55 => 20,  50 => 19,  42 => 18,  36 => 14,  33 => 13,  23 => 12,);
    }
}
