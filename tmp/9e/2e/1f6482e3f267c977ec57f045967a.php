<?php

/* _global/linkSaveDelete.html.twig */
class __TwigTemplate_9e2e1f6482e3f267c977ec57f045967a extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "UP", array(), "array")) {
            // line 3
            echo "<a href=\"javascript:;\" onclick=\"\$('#accion_";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "').val('Guardar'); submitForm('manto_";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "');\" title=\"Guardar\">
    <img src=\"";
            // line 4
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/barraherramientas/save_cmd.png\" alt=\"Guardar\" title=\"Guardar\" />
</a>
";
        }
        // line 7
        echo "
";
        // line 8
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "DE", array(), "array")) {
            // line 9
            echo "<script>
\$(function() {    
    \$(\"#confirmacionBorrado\").dialog({
        autoOpen: false,
        dialogClass: \"\",
        resizable: false,
        height: 150,
        modal: true,
        buttons: {
            Aceptar: function() {
                \$('#accion_";
            // line 19
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "').val('Borrar');
                submitForm('manto_";
            // line 20
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "');                
                \$( this ).dialog( \"close\" );
            },          
            Cancelar: function() {
                \$( this ).dialog( \"close\" );
            }
        }
    });
});
</script>
<div id=\"confirmacionBorrado\" title=\"Borrar registro\"><p>¿Realmente desea borrar el registro?</p></div>
<a href=\"javascript:;\" title=\"Borrar\" onclick=\"\$('#confirmacionBorrado').dialog('open');\">
    <img src=\"";
            // line 32
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/barraherramientas/trash_cmd.png\" alt=\"Borrar\" title=\"Borrar\" />
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/linkSaveDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  61 => 20,  56 => 19,  44 => 9,  41 => 8,  38 => 7,  31 => 4,  22 => 3,  19 => 2,);
    }
}
