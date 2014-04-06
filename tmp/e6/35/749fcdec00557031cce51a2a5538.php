<?php

/* _global/linkCreate.html.twig */
class __TwigTemplate_e635749fcdec00557031cce51a2a5538 extends Twig_Template
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
        // line 2
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "IN", array(), "array")) {
            // line 3
            echo "<a href=\"#\" onclick=\"getElementById('accion_";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "').value='Crear'; submitForm('manto_";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "');\">
    <img src=\"";
            // line 4
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/barraherramientas/save_cmd.png\" alt=\"Guardar\" title=\"Guardar\" />
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/linkCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  22 => 3,  19 => 2,);
    }
}
