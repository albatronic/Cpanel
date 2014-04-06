<?php

/* PcaeProyectos/index.html.twig */
class __TwigTemplate_8bbe8a5bdcf679d4d8819b2548f4460d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_global/layoutPopup.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'navegador' => array($this, 'block_navegador'),
            'listado' => array($this, 'block_listado'),
            'mantenimiento' => array($this, 'block_mantenimiento'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/layoutPopup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
        echo "\t<div class='Titulo'>";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "titulo"), "html", null, true);
        echo "
\t";
        // line 16
        $this->displayBlock('navegador', $context, $blocks);
        // line 35
        echo "        </div>

\t<div id='div_listado'>
\t";
        // line 38
        $this->displayBlock('listado', $context, $blocks);
        // line 40
        echo "\t</div>

\t";
        // line 42
        $this->displayBlock('mantenimiento', $context, $blocks);
    }

    // line 16
    public function block_navegador($context, array $blocks = array())
    {
        // line 17
        echo "
            ";
        // line 18
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "")) {
            // line 19
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkNew.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "new")) {
            // line 23
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkCreate.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 24
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkList.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 25
            echo "            ";
        }
        // line 26
        echo "
            ";
        // line 27
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "edit")) {
            // line 28
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkSave.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 29
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkDelete.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 30
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkNew.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 31
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkList.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 32
            echo "            ";
        }
        // line 33
        echo "
\t";
    }

    // line 38
    public function block_listado($context, array $blocks = array())
    {
        // line 39
        echo "\t";
    }

    // line 42
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 43
        echo "\t";
    }

    public function getTemplateName()
    {
        return "PcaeProyectos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  135 => 42,  131 => 39,  128 => 38,  123 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  61 => 42,  57 => 40,  55 => 38,  50 => 35,  48 => 16,  42 => 15,  39 => 14,  32 => 12,);
    }
}
