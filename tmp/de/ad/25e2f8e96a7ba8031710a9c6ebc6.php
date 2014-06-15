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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "' type='hidden' />
        <input name='action' id='actionFiltro' value='list' type='hidden' />
        ";
        // line 7
        $this->env->loadTemplate("_global/filtroGenerico.html.twig")->display(array_merge($context, array("filter" => (isset($context["filter"]) ? $context["filter"] : null))));
        // line 8
        echo "    </form>
    ";
        // line 9
        $this->env->loadTemplate("_global/filtroAvanzado.html.twig")->display(array_merge($context, array("filter" => (isset($context["filter"]) ? $context["filter"] : null))));
        // line 10
        echo "</div>";
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
        return array (  35 => 10,  33 => 9,  30 => 8,  28 => 7,  23 => 5,  19 => 3,);
    }
}
