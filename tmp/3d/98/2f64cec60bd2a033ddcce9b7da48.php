<?php

/* _global/formErrores.html.twig */
class __TwigTemplate_3d982f64cec60bd2a033ddcce9b7da48 extends Twig_Template
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
        echo "
";
        // line 3
        if (isset($context["errores"])) { $_errores_ = $context["errores"]; } else { $_errores_ = null; }
        if ($_errores_) {
            // line 4
            echo "<div class=\"MensajeError\">
    <p class=\"TituloError\">Corrija los siguientes errores:</p>
    <ul>
    ";
            // line 7
            if (isset($context["errores"])) { $_errores_ = $context["errores"]; } else { $_errores_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errores_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "        <li>";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $_error_, "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 10
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/formErrores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  35 => 8,  30 => 7,  25 => 4,  31 => 4,  22 => 3,  19 => 2,);
    }
}
