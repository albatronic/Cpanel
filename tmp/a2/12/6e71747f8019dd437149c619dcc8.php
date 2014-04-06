<?php

/* _global/alertas.html.twig */
class __TwigTemplate_a2126e71747f8019dd437149c619dcc8 extends Twig_Template
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
        if (isset($context["alertas"])) { $_alertas_ = $context["alertas"]; } else { $_alertas_ = null; }
        if ($_alertas_) {
            // line 6
            echo "<div class=\"MensajeAlerta\">
    <p class=\"TituloAlerta\">Avisos:</p>
    <ul>
    ";
            // line 9
            if (isset($context["alertas"])) { $_alertas_ = $context["alertas"]; } else { $_alertas_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_alertas_);
            foreach ($context['_seq'] as $context["_key"] => $context["alerta"]) {
                // line 10
                echo "        <li>";
                if (isset($context["alerta"])) { $_alerta_ = $context["alerta"]; } else { $_alerta_ = null; }
                echo twig_escape_filter($this->env, $_alerta_, "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerta'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/alertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  35 => 10,  30 => 9,  25 => 6,  31 => 4,  22 => 5,  19 => 4,);
    }
}
