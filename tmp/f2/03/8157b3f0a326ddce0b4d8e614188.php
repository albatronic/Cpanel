<?php

/* _global/popup.html.twig */
class __TwigTemplate_f2038157b3f0a326ddce0b4d8e614188 extends Twig_Template
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
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <!-- Para que esté disponible el path de la app en todos los java scripts -->
        <script type=\"text/javascript\">var appPath = \"";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
        echo "\";</script>

        ";
        // line 12
        $this->env->loadTemplate("_global/css.html.twig")->display($context);
        // line 13
        echo "
        ";
        // line 14
        $this->env->loadTemplate("_global/js.html.twig")->display($context);
        // line 15
        echo "
    </head>
    <body style=\"background:#eeeeee;\">

        <div id=\"contenedor_popup\">
            <div id=\"contenido\">
                ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "            </div>
        </div>

        <div id=\"notificacion\"></div>

        <div class=\"pieizq\">
            <div class=\"debug\">
            ";
        // line 30
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($_values_, "_debugMode")) {
            // line 31
            echo "                <pre>";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "_debugValues"), "html", null, true);
            echo "</pre>
            ";
        }
        // line 33
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "                ";
    }

    public function getTemplateName()
    {
        return "_global/popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  82 => 21,  74 => 33,  67 => 31,  64 => 30,  55 => 23,  53 => 21,  45 => 15,  43 => 14,  40 => 13,  38 => 12,  32 => 10,  22 => 2,  20 => 1,);
    }
}
