<?php

/* PcaeProyectosApps/index.html.twig */
class __TwigTemplate_2f4559b1168acd6defd1e34727e2d98e extends Twig_Template
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
        // line 45
        echo "        </div>

\t<div id='div_listado'>
\t";
        // line 48
        $this->displayBlock('listado', $context, $blocks);
        // line 50
        echo "\t</div>

\t";
        // line 52
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
            echo "                
                ";
            // line 30
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
            ";
        // line 34
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($_values_, "datos"), "Id")) {
            // line 35
            echo "                <div id=\"testConexion\">
                    <a href=\"#\" onclick=\"
                        \$('#action_";
            // line 37
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "').val('ProbarConexion');
                        loading('testConexion');
                        submitForm('manto_";
            // line 39
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "');\" 
                    >Probar Conexión</a>
                </div>
                <a href=\"#\" onclick=\"window.open('";
            // line 42
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/Permisos/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "datos"), "PrimaryKeyMD5"), "html", null, true);
            echo "','Permisos','width=400,height=600');\">Permisos</a>     
            ";
        }
        // line 44
        echo "\t";
    }

    // line 48
    public function block_listado($context, array $blocks = array())
    {
        // line 49
        echo "\t";
    }

    // line 52
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 53
        echo "\t";
    }

    public function getTemplateName()
    {
        return "PcaeProyectosApps/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  170 => 52,  166 => 49,  163 => 48,  159 => 44,  147 => 42,  140 => 39,  134 => 37,  130 => 35,  127 => 34,  124 => 33,  121 => 32,  117 => 31,  114 => 30,  108 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  61 => 52,  57 => 50,  55 => 48,  50 => 45,  48 => 16,  42 => 15,  39 => 14,  32 => 12,);
    }
}
