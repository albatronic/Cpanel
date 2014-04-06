<?php

/* GconContenidosRelacionados/index.html.twig */
class __TwigTemplate_6e929aa62580481ec0dbefbc78a2376b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_global/popup.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'listado' => array($this, 'block_listado'),
            'mensaje' => array($this, 'block_mensaje'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/errores.html.twig")->display(array_merge($context, array("errores" => $this->getAttribute($_values_, "errores"))));
        // line 14
        echo "    ";
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $this->env->loadTemplate("_global/alertas.html.twig")->display(array_merge($context, array("alertas" => $this->getAttribute($_values_, "alertas"))));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('listado', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('mensaje', $context, $blocks);
        // line 26
        echo "    <div id=\"notificacion\"></div>
";
    }

    // line 16
    public function block_listado($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 19
    public function block_mensaje($context, array $blocks = array())
    {
        // line 20
        echo "    <ul style=\"margin: 50px;\">
    ";
        // line 21
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_values_, "mensajes"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 22
            echo "        <li><h3>";
            if (isset($context["mensaje"])) { $_mensaje_ = $context["mensaje"]; } else { $_mensaje_ = null; }
            echo twig_escape_filter($this->env, $_mensaje_, "html", null, true);
            echo "</h3></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "GconContenidosRelacionados/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  74 => 22,  69 => 21,  66 => 20,  63 => 19,  51 => 26,  49 => 19,  46 => 18,  44 => 16,  41 => 15,  37 => 14,  33 => 13,  30 => 12,  154 => 27,  139 => 25,  124 => 23,  110 => 22,  104 => 21,  86 => 20,  83 => 19,  77 => 18,  59 => 17,  56 => 16,  50 => 15,  32 => 14,  29 => 13,  26 => 12,);
    }
}
