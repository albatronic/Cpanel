<?php

/* CpanVariables/form.html.twig */
class __TwigTemplate_17d73e7d174096d2adb116ee1b4e90ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'mantenimiento' => array($this, 'block_mantenimiento'),
            'template' => array($this, 'block_template'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(($this->getAttribute($this->getContext($context, "values"), "controller") . "/index.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["action"] = "edit";
        // line 14
        $context["ValoresTipos"] = array("0" => array("Id" => "input", "Value" => "Input"), "1" => array("Id" => "select", "Value" => "Select"), "2" => array("Id" => "textarea", "Value" => "Textarea"));
        // line 21
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1")) {
            $context["type"] = "text";
        } else {
            $context["type"] = "hidden";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"grid_container\">
    <div class=\"grid_12 full_block\">
        <div class=\"widget_wrap\">
        <div class=\"widget_content\">
\t<form name=\"manto_";
        // line 28
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" id=\"manto_";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" action=\"\" method=\"POST\" class=\"form_container left_label\">
\t\t<input name=\"controller\" value=\"";
        // line 29
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" type=\"hidden\" />
                <input name=\"action\" id=\"action_";
        // line 30
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" value=\"";
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "\" type=\"hidden\" />
\t\t<input name=\"accion\" id=\"accion_";
        // line 31
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" value=\"\" type=\"hidden\" />
                <input name=\"tipo\" value=\"";
        // line 32
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "tipo"), "html", null, true);
        echo "\" type=\"hidden\" />
                <input name=\"ambito\" value=\"";
        // line 33
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "ambito"), "html", null, true);
        echo "\" type=\"hidden\" />
                <input name=\"nombre\" value=\"";
        // line 34
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "nombre"), "html", null, true);
        echo "\" type=\"hidden\" />

\t\t";
        // line 36
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/formErrores.html.twig")->display(array_merge($context, array("errores" => $this->getAttribute($_values_, "errores"))));
        // line 37
        echo "\t\t";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/alertas.html.twig")->display(array_merge($context, array("alertas" => $this->getAttribute($_values_, "alertas"))));
        // line 38
        echo "
\t\t<ul>
                    ";
        // line 40
        $this->displayBlock('template', $context, $blocks);
        // line 41
        echo "\t\t</ul>
\t</form>
        </div>
        </div>
    </div>
</div>
";
    }

    // line 40
    public function block_template($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CpanVariables/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  102 => 41,  100 => 40,  89 => 36,  83 => 34,  78 => 33,  73 => 32,  68 => 31,  60 => 30,  55 => 29,  47 => 28,  26 => 14,  24 => 12,  225 => 111,  221 => 109,  215 => 108,  211 => 106,  203 => 96,  199 => 94,  191 => 85,  187 => 84,  184 => 83,  180 => 82,  176 => 81,  171 => 80,  168 => 79,  165 => 78,  159 => 77,  154 => 76,  151 => 75,  147 => 74,  144 => 72,  138 => 68,  133 => 58,  119 => 57,  115 => 55,  110 => 45,  96 => 38,  92 => 37,  86 => 32,  74 => 31,  71 => 30,  67 => 29,  63 => 26,  54 => 24,  50 => 23,  41 => 24,  38 => 23,  34 => 18,  31 => 15,  28 => 21,);
    }
}
