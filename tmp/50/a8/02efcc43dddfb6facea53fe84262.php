<?php

/* PcaeProyectosApps/form.html.twig */
class __TwigTemplate_50a802efcc43dddfb6facea53fe84262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'mantenimiento' => array($this, 'block_mantenimiento'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(($this->getAttribute($this->getContext($context, "values"), "controller") . "/index.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "datos"), "getPrimaryKeyValue") == "")) {
            $context["action"] = "new";
        } else {
            $context["action"] = "edit";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_mantenimiento($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"grid_container\">
    <div class=\"grid_12 full_block\">
        <div class=\"widget_wrap\">
            <div class=\"widget_content\">
                <form name=\"manto_";
        // line 18
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" id=\"manto_";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" action=\"\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form_container left_label\">
                    <input name=\"controller\" value=\"";
        // line 19
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"action\" id=\"action_";
        // line 20
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" value=\"";
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"accion\" id=\"accion_";
        // line 21
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "\" value=\"\" type=\"hidden\" />
                    <input name=\"solapaActiva\" id=\"solapaActiva\" value=\"";
        // line 22
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "solapaActiva"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"";
        // line 23
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "[";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "datos"), "getPrimaryKeyName"), "html", null, true);
        echo "]\" value=\"";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "datos"), "getPrimaryKeyValue"), "html", null, true);
        echo "\" type=\"hidden\" />
                    <input name=\"";
        // line 24
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
        echo "[IdProyecto]\" value=\"";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_values_, "linkBy"), "value"), "html", null, true);
        echo "\" type=\"hidden\" />

                    ";
        // line 26
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/formErrores.html.twig")->display(array_merge($context, array("errores" => $this->getAttribute($_values_, "errores"))));
        // line 27
        echo "                    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/alertas.html.twig")->display(array_merge($context, array("alertas" => $this->getAttribute($_values_, "alertas"))));
        // line 28
        echo "                    
                    <ul>
                    ";
        // line 30
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $template = $this->env->resolveTemplate(($this->getAttribute($_values_, "controller") . "/fields.html.twig"));
        $template->display(array_merge($context, array("datos" => $this->getAttribute($_values_, "datos"), "atributos" => $this->getAttribute($_values_, "atributos"))));
        // line 31
        echo "                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PcaeProyectosApps/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  104 => 30,  100 => 28,  96 => 27,  93 => 26,  84 => 24,  73 => 23,  68 => 22,  63 => 21,  55 => 20,  50 => 19,  42 => 18,  36 => 14,  33 => 13,  23 => 12,);
    }
}
