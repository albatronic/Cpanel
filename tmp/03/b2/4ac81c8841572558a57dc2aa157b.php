<?php

/* CommMunicipios/index.html.twig */
class __TwigTemplate_03b24ac81c8841572558a57dc2aa157b extends Twig_Template
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
        echo "
        ";
        // line 16
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/formErrores.html.twig")->display(array_merge($context, array("errores" => $this->getAttribute($_values_, "errores"))));
        // line 17
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/alertas.html.twig")->display(array_merge($context, array("alertas" => $this->getAttribute($_values_, "alertas"))));
        // line 18
        echo "
\t";
        // line 19
        $this->displayBlock('filtro', $context, $blocks);
        // line 24
        echo "
\t<div id='div_listado'>
\t";
        // line 26
        $this->displayBlock('listado', $context, $blocks);
        // line 28
        echo "\t</div>

\t";
        // line 30
        $this->displayBlock('mantenimiento', $context, $blocks);
    }

    // line 19
    public function block_filtro($context, array $blocks = array())
    {
        // line 20
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "CO", array(), "array") && $this->getAttribute($_values_, "tieneListado"))) {
            // line 21
            echo "\t\t";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/filtroGenericoWrapper.html.twig")->display(array_merge($context, array("filter" => $this->getAttribute($this->getAttribute($_values_, "listado"), "filter"))));
            // line 22
            echo "\t";
        }
        // line 23
        echo "\t";
    }

    // line 26
    public function block_listado($context, array $blocks = array())
    {
        // line 27
        echo "\t";
    }

    // line 30
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 31
        echo "\t";
    }

    public function getTemplateName()
    {
        return "CommMunicipios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  94 => 30,  90 => 27,  87 => 26,  83 => 23,  80 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 30,  61 => 28,  59 => 26,  55 => 24,  53 => 19,  50 => 18,  46 => 17,  43 => 16,  40 => 15,  37 => 14,  30 => 12,);
    }
}
