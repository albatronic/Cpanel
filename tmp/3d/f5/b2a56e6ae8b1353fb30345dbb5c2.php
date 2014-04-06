<?php

/* Index/noLoged.html.twig */
class __TwigTemplate_3df5b2a56e6ae8b1353fb30345dbb5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'izquierda' => array($this, 'block_izquierda'),
            'cabeceraDerecha' => array($this, 'block_cabeceraDerecha'),
            'navegador' => array($this, 'block_navegador'),
            'content' => array($this, 'block_content'),
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

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($this->renderParentBlock("title", $context, $blocks) . " - Inicio"), "html", null, true);
    }

    // line 11
    public function block_izquierda($context, array $blocks = array())
    {
    }

    // line 12
    public function block_cabeceraDerecha($context, array $blocks = array())
    {
    }

    // line 13
    public function block_navegador($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <h2>No está autorizado. Para entrar haga click <a href=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "urlParent"), "html", null, true);
        echo "/return\">aquí</a></h2>
";
    }

    public function getTemplateName()
    {
        return "Index/noLoged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  51 => 15,  46 => 13,  41 => 12,  36 => 11,  30 => 9,);
    }
}
