<?php

/* CommIdiomas/list.html.twig */
class __TwigTemplate_dff72022ae62ba096dbb6712565294d8 extends Twig_Template
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
        echo "
<div class='Listado'>
\t";
        // line 15
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/paginacion.html.twig")->display(array_merge($context, array("filter" => $this->getAttribute($this->getAttribute($_values_, "listado"), "filter"), "controller" => $this->getAttribute($_values_, "controller"), "position" => "izq")));
        // line 16
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/listGenerico.html.twig")->display(array_merge($context, array("listado" => $this->getAttribute($_values_, "listado"), "controller" => $this->getAttribute($_values_, "controller"))));
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CommIdiomas/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  36 => 16,  33 => 15,  29 => 13,  26 => 12,);
    }
}
