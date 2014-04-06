<?php

/* PcaeUsuarios/index.html.twig */
class __TwigTemplate_e1a61c68b2f2e7be06a93a63867cfc61 extends Twig_Template
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
        $this->displayBlock('filtro', $context, $blocks);
        // line 20
        echo "
\t<div id='div_listado'>
\t";
        // line 22
        $this->displayBlock('listado', $context, $blocks);
        // line 24
        echo "\t</div>

\t";
        // line 26
        $this->displayBlock('mantenimiento', $context, $blocks);
    }

    // line 15
    public function block_filtro($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "CO", array(), "array") && $this->getAttribute($_values_, "tieneListado"))) {
            // line 17
            echo "\t\t";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/filtroGenericoWrapper.html.twig")->display(array_merge($context, array("filter" => $this->getAttribute($this->getAttribute($_values_, "listado"), "filter"))));
            // line 18
            echo "\t";
        }
        // line 19
        echo "\t";
    }

    // line 22
    public function block_listado($context, array $blocks = array())
    {
        // line 23
        echo "\t";
    }

    // line 26
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 27
        echo "\t";
    }

    public function getTemplateName()
    {
        return "PcaeUsuarios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  82 => 26,  78 => 23,  75 => 22,  71 => 19,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  53 => 26,  49 => 24,  47 => 22,  43 => 20,  37 => 14,  30 => 12,  40 => 15,  36 => 16,  33 => 15,  29 => 13,  26 => 12,);
    }
}
