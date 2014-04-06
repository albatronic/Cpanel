<?php

/* _global/filtroGenericoWrapper.html.twig */
class __TwigTemplate_dead25e2f8e96a7ba8031710a9c6ebc6 extends Twig_Template
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
        echo "<div class='widget_top_listado'>
    <form name='filtro' id='filtro' action='' method='POST'>
        <input name='controller' value='";
        // line 5
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "' type='hidden' />
        <input name='action' id='actionFiltro' value='list' type='hidden' />
        ";
        // line 7
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $this->env->loadTemplate("_global/filtroGenerico.html.twig")->display(array_merge($context, array("filter" => $_filter_)));
        // line 8
        echo "    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "_global/filtroGenericoWrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  29 => 7,  23 => 5,  45 => 12,  35 => 10,  30 => 9,  25 => 6,  31 => 4,  22 => 5,  19 => 3,);
    }
}
