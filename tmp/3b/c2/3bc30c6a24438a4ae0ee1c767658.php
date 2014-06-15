<?php

/* CommPaises/form.html.twig */
class __TwigTemplate_3bc23bc30c6a24438a4ae0ee1c767658 extends Twig_Template
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
        return $this->env->resolveTemplate(($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "/index.html.twig"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getPrimaryKeyValue") == "")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "\" id=\"manto_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "\" action=\"\" method=\"POST\" enctype=\"multipart/form-data\" class=\"form_container left_label\">
            <input name=\"controller\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "\" type=\"hidden\" />
            <input name=\"action\" id=\"action_";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\" type=\"hidden\" />
            <input name=\"accion\" id=\"accion_";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "\" value=\"\" type=\"hidden\" />
            <input name=\"solapaActiva\" id=\"solapaActiva\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "solapaActiva"), "html", null, true);
        echo "\" type=\"hidden\" />
            <input name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller"), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getPrimaryKeyName"), "html", null, true);
        echo "]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "getPrimaryKeyValue"), "html", null, true);
        echo "\" type=\"hidden\" />

            <ul>
                ";
        // line 26
        $template = $this->env->resolveTemplate(($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "controller") . "/fields.html.twig"));
        $template->display(array_merge($context, array("datos" => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "datos"), "atributos" => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "atributos"))));
        // line 27
        echo "            </ul>
        </form>
        </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CommPaises/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  75 => 26,  65 => 23,  61 => 22,  57 => 21,  51 => 20,  47 => 19,  41 => 18,  35 => 14,  32 => 13,  23 => 12,);
    }
}
