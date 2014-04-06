<?php

/* CpanVariables/index.html.twig */
class __TwigTemplate_6e27d698b7daec0e5991d8a7abbf9064 extends Twig_Template
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
        return "CpanVariables/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  82 => 26,  75 => 22,  64 => 17,  57 => 15,  53 => 26,  49 => 24,  43 => 20,  40 => 15,  37 => 14,  30 => 12,  112 => 40,  102 => 41,  100 => 40,  89 => 36,  83 => 34,  78 => 23,  73 => 32,  68 => 18,  60 => 16,  55 => 29,  47 => 22,  26 => 14,  24 => 12,  225 => 111,  221 => 109,  215 => 108,  211 => 106,  203 => 96,  199 => 94,  191 => 85,  187 => 84,  184 => 83,  180 => 82,  176 => 81,  171 => 80,  168 => 79,  165 => 78,  159 => 77,  154 => 76,  151 => 75,  147 => 74,  144 => 72,  138 => 68,  133 => 58,  119 => 57,  115 => 55,  110 => 45,  96 => 38,  92 => 37,  86 => 32,  74 => 31,  71 => 19,  67 => 29,  63 => 26,  54 => 24,  50 => 23,  41 => 24,  38 => 23,  34 => 18,  31 => 15,  28 => 21,);
    }
}
