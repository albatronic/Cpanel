<?php

/* CommBancosOficinas/index.html.twig */
class __TwigTemplate_c255677478ae28562e1b69f9499bd861 extends Twig_Template
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
\t<div class='Titulo'>";
        // line 19
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "titulo"), "html", null, true);
        echo "
\t";
        // line 20
        $this->displayBlock('navegador', $context, $blocks);
        // line 38
        echo "        </div>

\t<div id='div_listado'>
\t";
        // line 41
        $this->displayBlock('listado', $context, $blocks);
        // line 43
        echo "\t</div>

\t";
        // line 45
        $this->displayBlock('mantenimiento', $context, $blocks);
    }

    // line 20
    public function block_navegador($context, array $blocks = array())
    {
        // line 21
        echo "
            ";
        // line 22
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "")) {
            // line 23
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkNew.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 24
            echo "            ";
        }
        // line 25
        echo "
            ";
        // line 26
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "new")) {
            // line 27
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkCreate.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 28
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkList.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 29
            echo "            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        if (($_action_ == "edit")) {
            // line 32
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkSaveDelete.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 33
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkNew.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 34
            echo "                ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $this->env->loadTemplate("_global/linkList.html.twig")->display(array_merge($context, array("controller" => $this->getAttribute($_values_, "controller"), "linkValue" => $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"))));
            // line 35
            echo "            ";
        }
        // line 36
        echo "
\t";
    }

    // line 41
    public function block_listado($context, array $blocks = array())
    {
        // line 42
        echo "\t";
    }

    // line 45
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 46
        echo "\t";
    }

    public function getTemplateName()
    {
        return "CommBancosOficinas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  139 => 42,  131 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  113 => 31,  110 => 30,  103 => 28,  99 => 27,  96 => 26,  93 => 25,  90 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  73 => 45,  69 => 43,  62 => 38,  60 => 20,  55 => 19,  52 => 18,  45 => 16,  42 => 15,  39 => 14,  32 => 12,  148 => 51,  143 => 45,  136 => 41,  127 => 42,  122 => 41,  117 => 40,  112 => 39,  107 => 29,  102 => 37,  85 => 36,  70 => 35,  67 => 41,  64 => 33,  61 => 32,  58 => 31,  54 => 30,  48 => 17,  33 => 16,  29 => 13,  26 => 12,);
    }
}
