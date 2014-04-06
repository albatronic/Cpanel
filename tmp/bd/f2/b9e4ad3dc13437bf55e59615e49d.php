<?php

/* Index/index.html.twig */
class __TwigTemplate_bdf2b9e4ad3dc13437bf55e59615e49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "layout"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($this->renderParentBlock("title", $context, $blocks) . " - Inicio"), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if ($this->getAttribute($_values_, "errores")) {
            // line 14
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_values_, "errores"), "html", null, true);
            echo "
";
        }
        // line 16
        echo "
";
        // line 17
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (($this->getAttribute($this->getAttribute($_values_, "menu"), "tipo") == "apps")) {
            // line 18
            echo "
    ";
            // line 20
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "menu"), "apps"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 21
                echo "        <a href=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/index/app/";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" class=\"iconosIndex\">
            <img src=\"";
                // line 22
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/images/iconos/";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "XL.png\" alt=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "titulo"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "titulo"), "html", null, true);
                echo "\" />
            <span>";
                // line 23
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "titulo"), "html", null, true);
                echo "</span>
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "
";
        } else {
            // line 28
            echo "
    ";
            // line 30
            echo "    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_values_, "menu"), "modulos"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 31
                echo "        <a href=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "path"), "html", null, true);
                echo "/";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "controller"), "html", null, true);
                echo "\" class=\"listadoApp\">
            ";
                // line 32
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_value_, "titulo"), "html", null, true);
                echo "
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "Index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  129 => 35,  119 => 32,  110 => 31,  104 => 30,  101 => 28,  97 => 26,  87 => 23,  73 => 22,  64 => 21,  58 => 20,  55 => 18,  52 => 17,  49 => 16,  42 => 14,  39 => 13,  36 => 12,  33 => 11,  27 => 9,);
    }
}
