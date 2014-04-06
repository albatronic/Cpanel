<?php

/* _global/errores.html.twig */
class __TwigTemplate_708fbeec03a5e82d7b7f3a9cd4f747bb extends Twig_Template
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
        // line 4
        echo "
";
        // line 5
        if (isset($context["errores"])) { $_errores_ = $context["errores"]; } else { $_errores_ = null; }
        if ($_errores_) {
            // line 6
            echo "    ";
            $context["mensaje"] = null;
            // line 7
            echo "
    ";
            // line 8
            if (isset($context["errores"])) { $_errores_ = $context["errores"]; } else { $_errores_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errores_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "        ";
                if (isset($context["mensaje"])) { $_mensaje_ = $context["mensaje"]; } else { $_mensaje_ = null; }
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                $context["mensaje"] = (($_mensaje_ . $_error_) . "#");
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 11
            echo "
    <script> setTimeout (\"notificacion('";
            // line 12
            if (isset($context["mensaje"])) { $_mensaje_ = $context["mensaje"]; } else { $_mensaje_ = null; }
            echo twig_escape_filter($this->env, $_mensaje_, "html", null, true);
            echo "','error')\", 0000);</script>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/errores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  41 => 10,  36 => 9,  31 => 8,  28 => 7,  25 => 6,  22 => 5,  19 => 4,);
    }
}
