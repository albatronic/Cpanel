<?php

/* _global/layoutPopup.html.twig */
class __TwigTemplate_967bd5256f67cacfd7763bfd2b1a3c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->env->loadTemplate("_global/macros.html.twig");
        // line 2
        echo "
<!DOCTYPE HTML>
<html>

    <head>
    \t";
        // line 7
        $this->env->loadTemplate("_global/metaInformacion.html.twig")->display($context);
        // line 8
        echo "\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_values_, "twigCss"));
        $template->display($context);
        // line 9
        echo "
        <!-- Para que esté disponible el path de la app en todos los java scripts -->
        <script type=\"text/javascript\">var appPath = \"";
        // line 11
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
        echo "\";</script>

\t";
        // line 13
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_values_, "twigJs"));
        $template->display($context);
        // line 14
        echo "    </head>

    <body id=\"theme-default\" class=\"full_block\">


        <div id=\"content\">
            ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "        </div>

        <div id=\"dialogoVarEnv\" title=\"Propiedades del elemento\"></div>
        <div id=\"dialogOrdenar\" title=\"Cambiar orden\"></div>
        
        ";
        // line 27
        echo "        
        ";
        // line 28
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($_values_, "_debugMode")) {
            // line 29
            echo "            ";
            $this->env->loadTemplate("_global/debuger.html.twig")->display($context);
            // line 30
            echo "        ";
        }
        // line 31
        echo "
    </body>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "_global/layoutPopup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  85 => 20,  79 => 31,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  60 => 22,  58 => 20,  50 => 14,  46 => 13,  40 => 11,  36 => 9,  31 => 8,  29 => 7,  22 => 2,  20 => 1,);
    }
}
