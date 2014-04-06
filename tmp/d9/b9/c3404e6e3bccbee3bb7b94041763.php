<?php

/* _global/linkList.html.twig */
class __TwigTemplate_d9b9c3404e6e3bccbee3bb7b94041763 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "permisos"), "permisosModulo"), "CO", array(), "array")) {
            // line 3
            echo "<a href='";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "controller"), "html", null, true);
            echo "/list/";
            if (isset($context["linkValue"])) { $_linkValue_ = $context["linkValue"]; } else { $_linkValue_ = null; }
            echo twig_escape_filter($this->env, $_linkValue_, "html", null, true);
            echo "'>
    <img src=\"";
            // line 4
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
            echo "/images/lupa.png\" width=\"16px\" height=\"16px\" alt=\"Nuevo\" title=\"Nuevo\" />
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/linkList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  22 => 3,  19 => 2,);
    }
}
